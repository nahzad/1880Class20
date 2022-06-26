<?php
require 'db_config.php';
// THIS FOR CREATE
if (isset($_POST['save_contact_us'])) {

    $contact_topic   = $_POST['contact_topic'];
    $contact_details = $_POST['contact_details'];
    $icon_name       = $_POST['icon_name'];

    if (empty($contact_topic) || empty($icon_name) || empty($contact_details)) {
        $message = "All fields are required";
    } else {
        $sql_query = "INSERT INTO contact_us (contact_topic,  contact_details, icon_name ) VALUES ('$contact_topic','$contact_details', '$icon_name')";
        $create_query = mysqli_query($db_con, $sql_query) or die("Query Unsuccessfull !");
        if ($create_query == true) {
            $message = "Data Inserted successfully";
        } else {
            $message = "Insert Failed";
        }
    }

    header("Location: contact_us_create.php?msg={$message}");
}

// THIS FOR UPDATE
if (isset($_POST['update_contact_us'])) {

    $contact_us_id   = $_POST['contact_us_id'];
    $contact_topic   = $_POST['contact_topic'];
    $contact_details = $_POST['contact_details'];
    $icon_name       = $_POST['icon_name'];

    if (empty($contact_topic) || empty($contact_details) || empty($icon_name)) {
        $message = "All fields are required";
    } else {
        $sql = "UPDATE contact_us SET contact_topic='{$contact_topic}',  contact_details='{$contact_details}',icon_name='{$icon_name}' WHERE id='{$contact_us_id}'";

        $update_query = mysqli_query($db_con, $sql) or die("Data not updated !");

        if ($update_query == true) {
            $message = "Data updated successfully";
        } else {
            $message = "Update Failed";
        }
    }

    header("Location: contact_us_update.php?contact_us_id={$contact_us_id}&msg={$message}");
}