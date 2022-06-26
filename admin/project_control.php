<?php
require 'db_config.php';
// THIS FOR CREATE
if (isset($_POST['save_project'])) {

    if (isset($_FILES['project_thumb'])) {

        $project_thumb_name     = $_FILES['project_thumb']['name'];
        $project_thumb_tmp_name = $_FILES['project_thumb']['tmp_name'];
        $project_thumb_size     = $_FILES['project_thumb']['size'];
        $file_extension         = explode('.', $project_thumb_name);
        $extension_end          = end($file_extension);
        $common_file_type       = strtolower($extension_end);
        $supported_ext          = ['jpg', 'png', 'jpeg'];
        $valid_ext              = in_array($common_file_type, $supported_ext);
        $random_file_name       = time() . "." . $extension_end;
        $isUploaded             = 1;
        $error_msg              = '';

        if (empty($common_file_type)) {
            $isUploaded  = 0;
            $error_msg = "Please select a file to upload";
        } else {
            if ($project_thumb_size > 5000000) {
                $isUploaded = 0;
                $error_msg = "Your file size is too large <br>";
            }

            if ($valid_ext == false) {
                $isUploaded = 0;
                $error_msg = "This " . $common_file_type . " file is not supported .<br>";
            }

            if ($isUploaded == 1) {
                move_uploaded_file($project_thumb_tmp_name, "media/Project Thumb/" . $random_file_name);
            } else {
                $error_msg = $error_msg;
            }
        }
    }

    $category_id   = $_POST['category_id'];
    $project_name  = $_POST['project_name'];
    $project_link  = $_POST['project_link'];

    if (empty($category_id) || empty($project_name) || empty($project_link)) {

        $message = "All fields are required ";
    } elseif ($isUploaded == 0) {
        $message = $error_msg;
    } else {
        $sql_query = "INSERT INTO our_projects (category_id, project_name, project_link, project_thumb) VALUES ('$category_id','$project_name','$project_link','$random_file_name')";

        $create_query = mysqli_query($db_con, $sql_query) or die("Query Unsuccessfull !");
        if ($create_query == true) {
            $message = "Data Inserted Succesfully";
        } else {
            $message = "Insert Failed";
        }
    }

    header("Location: project_create.php?msg={$message}");
}
// THIS FOR UPDATE
if (isset($_POST['update_project'])) {

    $project_id    = $_POST['project_id'];
    $category_id   = $_POST['category_id'];
    $project_name  = $_POST['project_name'];
    $project_link  = $_POST['project_link'];
    $project_thumb = $_POST['project_thumb'];

    if (empty($category_id) || empty($project_name) || empty($project_link)) {
        $message = "All fields are required";
    } else {
        $sql = "UPDATE projects SET category_id='{$category_id}', project_name='{$project_name}', project_link='{$project_link}',project_thumb='{$random_file_name}' WHERE id='{$project_id}'";

        $update_query = mysqli_query($db_con, $sql) or die("Data not updated !");

        if ($update_query == true) {
            $message = "Data Updated Succesfully";
        } else {
            $message = "Update Failed";
        }
    }

    header("Location: project_update.php?project_id={$project_id}&msg={$message}");
}