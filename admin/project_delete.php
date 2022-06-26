<?php
require 'db_config.php';

$project_id = $_GET['project_id'];
$sql = "UPDATE our_projects SET active_status=0 WHERE id='{$project_id}'";

$delete_query = mysqli_query($db_con, $sql) or die("Data not deleted !");

if ($delete_query == true) {
    $message = "Data Deleted Succesfull";
} else {
    $message = "Deleted Failed";
}

header("Location: project_view.php?msg={$message}");