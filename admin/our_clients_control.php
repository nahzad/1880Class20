<?php
require 'includes/db_config.php';
// THIS FOR CREATE
if (isset($_POST['save_our_clients'])) {

    if (isset($_FILES['client_image'])) {

        $client_image_name     = $_FILES['client_image']['name'];
        $client_image_tmp_name = $_FILES['client_image']['tmp_name'];
        $client_image_size     = $_FILES['client_image']['size'];
        $file_extension        = explode('.', $client_image_name);
        $extension_end         = end($file_extension);
        $common_file_type      = strtolower($extension_end);
        $supported_ext         = ['jpg', 'png', 'jpeg'];
        $valid_ext             = in_array($common_file_type, $supported_ext);
        $random_file_name      = time() . "." . $extension_end;
        $isUploaded            = 1;
        $error_msg             = '';

        if (empty($common_file_type)) {
            $isUploaded  = 0;
            $error_msg = "Please select a file to upload";
        } else {
            if ($client_image_size > 5000000) {
                $isUploaded = 0;
                $error_msg = "Your file size is too large <br>";
            }

            if ($valid_ext == false) {
                $isUploaded = 0;
                $error_msg = "This " . $common_file_type . " file is not supported .<br>";
            }

            if ($isUploaded == 1) {
                move_uploaded_file($client_image_tmp_name, "media/Our Clients Image/" . $random_file_name);
            } else {
                $error_msg = $error_msg;
            }
        }
    }

    $clients_name   = $_POST['clients_name'];
    $designation_id = $_POST['designation_id'];
    $client_review  = $_POST['client_review'];




    if (empty($clients_name) || empty($designation_id) || empty($client_review)) {

        $message = "All fields are required ";
    } elseif ($isUploaded == 0) {
        $message = $error_msg;
    } else {
        $sql_query = "INSERT INTO our_clients (clients_name, designation_id,client_image,client_review) VALUES ('$clients_name','$designation_id','$random_file_name','$client_review')";

        $create_query = mysqli_query($db_con, $sql_query) or die("Query Unsuccessfull !");
        if ($create_query == true) {
            $message = "Data Inserted Succesfully";
        } else {
            $message = "Insert Failed";
        }
    }

    header("Location: our_clients_create.php?msg={$message}");
}
// THIS FOR UPDATE
if (isset($_POST['update_our_clients'])) {

    $our_clients_id = $_POST['our_clients_id'];
    $clients_name   = $_POST['clients_name'];
    $designation_id = $_POST['designation_id'];
    $client_image   = $_POST['client_image'];
    $client_review  = $_POST['client_review'];

    if (empty($clients_name) || empty($designation_id) || empty($client_review)) {
        $message = "All fields are required";
    } else {
        $sql = "UPDATE our_clients SET clients_name='{$clients_name}', designation_id='{$designation_id}', client_review='{$client_review}',client_image='{$random_file_name}' WHERE id='{$our_clients_id}'";

        $update_query = mysqli_query($db_con, $sql) or die("Data not updated !");

        if ($update_query == true) {
            $message = "Data Updated Succesfully";
        } else {
            $message = "Update Failed";
        }
    }

    header("Location: our_clients_update.php?our_clients_id={$our_clients_id}&msg={$message}");
}