<?php
require 'includes/db_config.php';

$our_clients_id = $_GET['our_clients_id'];
$sql = "UPDATE our_clients SET active_status=0 WHERE id='{$our_clients_id}'";

$delete_query = mysqli_query($db_con, $sql) or die("Data not deleted !");

if ($delete_query == true) {
    $message = "Data Deleted Succesfull";
} else {
    $message = "Deleted Failed";
}

header("Location: our_clients_view.php?msg={$message}");