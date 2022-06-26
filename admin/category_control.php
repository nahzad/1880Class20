<?php
require 'db_config.php';
// THIS FOR CREATE
if (isset($_POST['save_category'])) {

    $category_name = $_POST['category_name'];

    if (empty($category_name)) {
        $message = "Fields should not be empty";
    } else {
        $sql_query = "INSERT INTO categories (category_name ) VALUES ('{$category_name}')";
        $create_query = mysqli_query($db_con, $sql_query) or die("Query Unsuccessfull !");
        if ($create_query == true) {
            $message = "Data Inserted Successfully";
        } else {
            $message = "Insert Failed";
        }
    }

    header("Location: category_create.php?msg={$message}");
}

// THIS FOR UPDATE
if (isset($_POST['update_category'])) {
    $category_id   = $_POST['category_id'];
    $category_name = $_POST['category_name'];

    if (empty($category_name)) {
        $message = "Fields should not be empty";
    } else {
        $sql_query = "UPDATE categories SET category_name= '{$category_name}' WHERE id = '{$category_id}'";
        $update_query = mysqli_query($db_con, $sql_query) or die("Query Unsuccessfull !");
        if ($update_query == true) {
            $message = "Data Updated Successfully";
        } else {
            $message = "Update Failed";
        }
    }

    header("Location: category_update.php?category_id={$category_id}&msg={$message}");
}