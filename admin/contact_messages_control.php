<?php
require 'db_config.php';
// THIS FOR CREATE
if (isset($_POST['save_contact_messages'])) {

    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $message = "All fields are required";
    } else {
        $sql_query = "INSERT INTO contact_messages (name, email, subject, message ) VALUES ('$name','$email','$subject','$message')";

        $create_query = mysqli_query($db_con, $sql_query) or die("Data not Inserted !");

        if ($create_query == true) {
            $message = "Data Inserted successfully";
        } else {
            $message = "Insert Failed";
        }
    }

    header("Location: contact_messages_create.php?msg={$message}");
}

// THIS FOR UPDATE
if (isset($_POST['update_contact_messages'])) {

    $contact_messages_id = $_POST['contact_messages_id'];
    $name                = $_POST['name'];
    $email               = $_POST['email'];
    $subject             = $_POST['subject'];
    $message             = $_POST['message'];

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $message = "All fields are required";
    } else {
        $sql = "UPDATE contact_messages SET name='{$name}', email='{$email}', subject='{$subject}',message='{$message}' WHERE id='{$contact_messages_id}'";

        $update_query = mysqli_query($db_con, $sql) or die("Data not updated !");

        if ($update_query == true) {
            $message = "Data updated successfully";
        } else {
            $message = "Update Failed";
        }
    }

    header("Location: contact_messages_update.php?contact_messages_id={$contact_messages_id}&msg={$message}");
}