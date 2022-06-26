<?php
require 'db_config.php';
// THIS FOR CREATE
if (isset($_POST['save_service'])) {
    $service_name    = $_POST['service_name'];
    $service_details = $_POST['service_details'];
    $icon_name       = $_POST['icon_name'];
    $design_status   = $_POST['design_status'];

    if (empty($service_name) || empty($service_details) || empty($icon_name)) {
        $message = "All fields are required";
    } else {
        $sql_query = "INSERT INTO services (service_name, service_details, icon_name, design_status ) VALUES ('$service_name','$service_details','$icon_name', '$design_status')";
        $create_query = mysqli_query($db_con, $sql_query) or die("Query Unsuccessfull !");
        if ($create_query == true) {
            $message = "Data Insert Succesfull";
        } else {
            $message = "Insert Failed";
        }
    }

    header("Location:service_create.php?msg={$message}");
}

// THIS FOR UPDATE
if (isset($_POST['update_service'])) {

    $service_id      = $_POST['service_id'];
    $service_name    = $_POST['service_name'];
    $service_details = $_POST['service_details'];
    $icon_name       = $_POST['icon_name'];
    $design_status   = $_POST['design_status'];




    if (empty($service_name) || empty($service_details) || empty($icon_name)) {
        $message = "All fields are required";
    } else {
        $sql = "UPDATE services SET service_name='{$service_name}', service_details='{$service_details}', icon_name='{$icon_name}',
        design_status='{$design_status}' WHERE id='{$service_id}'";

        $update_query = mysqli_query($db_con, $sql) or die("Data not updated !");

        if ($update_query == true) {
            $message = "Data Updated Succesfully";
        } else {
            $message = "Update Failed";
        }
    }

    header("Location: service_update.php?service_id={$service_id}&msg={$message}");
}