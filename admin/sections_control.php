<?php
require 'db_config.php';
// THIS FOR CREATE
if (isset($_POST['save_sections'])) {

    $title     = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $details   = $_POST['details'];
    $page_no   = $_POST['page_no'];

    if (empty($title) || empty($sub_title) || empty($details)) {
        $message = "All fields are required";
    } else {
        $sql_query = "INSERT INTO sections (title, sub_title, details, page_no ) VALUES ('$title','$sub_title','$details', '{$page_no}')";
        $create_query = mysqli_query($db_con, $sql_query) or die("Query Unsuccessfull !");
        if ($create_query == true) {
            $message = "Sections Insert Succesfull";
        } else {
            $message = "Insert Failed";
        }
    }

    header("Location: sections_create.php?msg={$message}");
}

// THIS FOR UPDATE
if (isset($_POST['update_sections'])) {

    $sections_id = $_POST['sections_id'];
    $title       = $_POST['title'];
    $sub_title   = $_POST['sub_title'];
    $details     = $_POST['details'];
    $page_no     = $_POST['page_no'];

    if (empty($title) || empty($sub_title) || empty($details)) {
        $message = "All fields are required";
    } else {
        $sql = "UPDATE sections SET title='{$title}', sub_title='{$sub_title}', details='{$details}', page_no='{$page_no}' WHERE id='{$sections_id}'";

        $update_query = mysqli_query($db_con, $sql) or die("Data not updated !");

        if ($update_query == true) {
            $message = "Sections Update Succesfull";
        } else {
            $message = "Update Failed";
        }
    }

    header("Location: sections_update.php?sections_id={$sections_id}&msg={$message}");
}