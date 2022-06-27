<?php
require 'includes/db_config.php';
// THIS FOR CREATE
if (isset($_POST['save_our_staff'])) {

    if (isset($_FILES['staff_image'])) {

        $staff_image_name     = $_FILES['staff_image']['name'];
        $staff_image_tmp_name = $_FILES['staff_image']['tmp_name'];
        $staff_image_size     = $_FILES['staff_image']['size'];
        $file_extension       = explode('.', $staff_image_name);
        $extension_end        = end($file_extension);
        $common_file_type     = strtolower($extension_end);
        $supported_ext        = ['jpg', 'png', 'jpeg'];
        $valid_ext            = in_array($common_file_type, $supported_ext);
        $random_file_name     = time() . "." . $extension_end;
        $isUploaded           = 1;
        $error_msg            = '';

        if (empty($common_file_type)) {
            $isUploaded  = 0;
            $error_msg = "Please select a file to upload";
        } else {
            if ($staff_image_size > 5000000) {
                $isUploaded = 0;
                $error_msg = "Your file size is too large <br>";
            }

            if ($valid_ext == false) {
                $isUploaded = 0;
                $error_msg = "This " . $common_file_type . " file is not supported .<br>";
            }

            if ($isUploaded == 1) {
                move_uploaded_file($staff_image_tmp_name, "media/Our Staff Image/" . $random_file_name);
            } else {
                $error_msg = $error_msg;
            }
        }
    }

    $staff_name     = $_POST['staff_name'];
    $designation_id = $_POST['designation_id'];
    $twitter        = $_POST['twitter'];
    $facebook       = $_POST['facebook'];
    $linkdin        = $_POST['linkdin'];
    $instagram      = $_POST['instagram'];

    /* echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    die();
 */
    if (empty($staff_name) || empty($designation_id) || empty($twitter) || empty($facebook) || empty($linkdin) || empty($instagram)) {

        $message = "All fields are required ";
    } elseif ($isUploaded == 0) {
        $message = $error_msg;
    } else {
        $sql_query = "INSERT INTO our_staff (staff_name,designation_id,staff_image,twitter,facebook,linkdin,instagram) VALUES ('{$staff_name}','{$designation_id}','{$random_file_name}','{$twitter}','{$facebook}','{$linkdin}','{$instagram}')";

        $create_query = mysqli_query($db_con, $sql_query) or die("Query Unsuccessfull !");
        if ($create_query == true) {
            $message = "Data Inserted Succesfully";
        } else {
            $message = "Insert Failed";
        }
    }

    header("Location: our_staff_create.php?msg={$message}");
}
// THIS FOR UPDATE
if (isset($_POST['update_our_staff'])) {

    $our_staff_id   = $_POST['our_staff_id'];
    $staff_name     = $_POST['staff_name'];
    $designation_id = $_POST['designation_id'];
    $staff_image    = $_POST['staff_image'];
    $twitter        = $_POST['twitter'];
    $facebook       = $_POST['facebook'];
    $linkdin        = $_POST['linkdin'];
    $instagram      = $_POST['instagram'];

    if (empty($staff_name) || empty($designation_id) || empty($staff_image) || empty($twitter) || empty($facebook) || empty($linkdin) || empty($instagram)) {
        $message = "All fields are required ";
    } else {
        $sql = "UPDATE our_staff SET staff_name='{$staff_name}',designation_name='{$designation_name}',staff_image='{$random_file_name}', twitter = '{$twitter}',facebook='{$facebook}',linkdin='{$linkdin}',instagram= '{$instagram}' WHERE id='{$our_staff_id}'";

        $update_query = mysqli_query($db_con, $sql) or die("Data not updated !");

        if ($update_query == true) {
            $message = "Data Updated Succesfully";
        } else {
            $message = "Update Failed";
        }
    }

    header("Location: our_staff_update.php?our_staff_id={$our_staff_id}&msg={$message}");
}