<?php
require 'db_config.php';

$category_id = $_GET['category_id'];
$sql = "UPDATE categories SET active_status=0 WHERE id='{$category_id}'";

$delete_query = mysqli_query($db_con, $sql) or die("Data not deleted !");

if ($delete_query == true) {
    $message = "Data Deleted Succesfull";
} else {
    $message = "Deleted Failed";
}

header("Location: category_view.php?msg={$message}");