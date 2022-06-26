<?php
require 'db_config.php';
// THIS FOR CREATE
if (isset($_POST['save_designations'])) {

    $designation_name = $_POST['designation_name'];

    if (empty($designation_name)) {
        $message = "Fields should not be empty";
    } else {
        $sql_query = "INSERT INTO designations (designation_name ) VALUES ('{$designation_name}')";
        $create_query = mysqli_query($db_con, $sql_query) or die("Query Unsuccessfull !");
        if ($create_query == true) {
            $message = "Data Inserted Successfully";
        } else {
            $message = "Insert Failed";
        }
    }

    header("Location: designations_create.php?msg={$message}");
}

// THIS FOR UPDATE
if (isset($_POST['update_designations'])) {
    $designations_id   = $_POST['designations_id'];
    $designation_name = $_POST['designation_name'];

    if (empty($designation_name)) {
        $message = "Fields should not be empty";
    } else {
        $sql_query = "UPDATE designations SET designation_name= '{$designation_name}' WHERE id = '{$designations_id}'";
        $update_query = mysqli_query($db_con, $sql_query) or die("Query Unsuccessfull !");
        if ($update_query == true) {
            $message = "Data Updated Successfully";
        } else {
            $message = "Update Failed";
        }
    }

    header("Location: designations_update.php?designations_id={$designations_id}&msg={$message}");
}