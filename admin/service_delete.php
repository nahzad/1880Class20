<?php
require 'db_config.php';

$service_id = $_GET['service_id'];
$sql = "UPDATE services SET active_status=0 WHERE id='{$service_id}'";

$delete_query = mysqli_query($db_con, $sql) or die("Data not deleted !");

if ($delete_query == true) {
    $message = " Row Deleted Succesfully";
} else {
    $message = "Deleted Failed";
}

header("Location:service_view.php?msg={$message}");