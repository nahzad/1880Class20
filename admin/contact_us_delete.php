<?php
require 'db_config.php';

$contact_us_id = $_GET['contact_us_id'];
$sql = "UPDATE contact_us SET active_status=0 WHERE id='{$contact_us_id}'";

$delete_query = mysqli_query($db_con, $sql) or die("Data not deleted !");

if ($delete_query == true) {
    $message = "Data Deleted Succesfull";
} else {
    $message = "Deleted Failed";
}

header("Location: contact_us_view.php?msg={$message}");