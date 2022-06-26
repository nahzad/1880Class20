<?php
require 'db_config.php';

$designations_id = $_GET['designations_id'];
$sql = "UPDATE designations SET active_status=0 WHERE id='{$designations_id}'";

$delete_query = mysqli_query($db_con, $sql) or die("Data not deleted !");

if ($delete_query == true) {
    $message = "Data Deleted Succesfull";
} else {
    $message = "Deleted Failed";
}

header("Location: designations_view.php?msg={$message}");