<?php
require 'includes/db_config.php';
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

    // GET THE IMAGE NAME
    $project_id = $_POST['project_id'];
    $getSingleDataQry = "SELECT * FROM our_projects WHERE id={$project_id}";
    $getResult = mysqli_query($db_con, $getSingleDataQry);

    $oldImg = '';
    foreach ($getResult as $key => $project) {
        $oldImg = $project['project_thumb'];
    }
    // END GET THE IMAGE NAME


    $upload_status = false;
    if (isset($_FILES['project_thumb']) && $_FILES['project_thumb']['size'] > 0) {

        $imgArray = $_FILES['project_thumb'];
        $file_name = $imgArray['name'];
        $tmp_file_name = $imgArray['tmp_name'];

        $nameExtArr = explode('.', $file_name);
        $file_extension = strtolower(end($nameExtArr));
        $valid_extensions = array('jpg', 'png', 'jpeg');

        $random_file_name = time() . '.' . $file_extension;

        if ($random_file_name != $oldImg) { //WHEN NEW IMAGE NAME DOES NOT MATCH WITH OLD IMAGE

            // FILE REMOVE
            $file = 'media/Project Thumb/' . $oldImg;
            if (file_exists($file)) {
                unlink($file);
            }
            // END FILE REMOVE

            // NEW FILE UPLOAD
            if (in_array($file_extension, $valid_extensions)) {
                move_uploaded_file($tmp_file_name, 'media/Project Thumb/' . $random_file_name);
                $upload_status = true;
            } else {
                $message = $file_extension . " is not Supported";
            }
        }
    } else {
        $random_file_name = $oldImg;
    }


    $project_id   = $_POST['project_id'];
    $category_id  = $_POST['category_id'];
    $project_name = $_POST['project_name'];
    $project_link = $_POST['project_link'];

    if (empty($category_id) || empty($project_name) || empty($project_link)) {
        $message = "All fields are required";
    } else {


        $updateQry = "UPDATE our_projects SET category_id='{$category_id}', project_name='{$project_name}', project_link='{$project_link}', project_thumb='{$random_file_name}' WHERE id='{$project_id}'";

        $isSubmit = mysqli_query($db_con, $updateQry);

        if ($isSubmit == true) {
            $message = "Data updated successfully";
        } else {
            $message = "Update Failed";
        }
    }

    header("Location: project_update.php?project_id={$project_id}&msg={$message}");
}