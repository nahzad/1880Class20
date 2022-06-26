<?php
require 'db_config.php';

$sections_id = $_GET['sections_id'];
$sql = "UPDATE sections SET active_status=0 WHERE id='{$sections_id}'";

$delete_query = mysqli_query($db_con, $sql) or die("Data not deleted !");

if ($delete_query == true) {
    $message = "Data Deleted Succesfull";
} else {
    $message = "Deleted Failed";
}

header("Location: sections_view.php?msg={$message}");