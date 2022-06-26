<?php
require 'db_config.php';

$our_staff_id = $_GET['our_staff_id'];
$sql = "UPDATE our_staff SET active_status=0 WHERE id='{$our_staff_id}'";

$delete_query = mysqli_query($db_con, $sql) or die("Data not deleted !");

if ($delete_query == true) {
    $message = "Data Deleted Succesfull";
} else {
    $message = "Deleted Failed";
}

header("Location: our_staff_view.php?msg={$message}");