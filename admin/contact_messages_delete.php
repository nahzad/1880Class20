<?php
require 'db_config.php';

$contact_messages_id = $_GET['contact_messages_id'];
$sql = "UPDATE contact_messages SET active_status=0 WHERE id='{$contact_messages_id}'";

$delete_query = mysqli_query($db_con, $sql) or die("Data not deleted !");

if ($delete_query == true) {
    $message = "Data Deleted Succesfull";
} else {
    $message = "Deleted Failed";
}

header("Location: contact_messages_view.php?msg={$message}");