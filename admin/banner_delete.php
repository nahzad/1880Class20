<?php
require_once 'includes/db_config.php';

$banner_id = $_GET['banner_id'];
$sql = "UPDATE banners SET active_status=0 WHERE id='{$banner_id}'";

$delete_query = mysqli_query($db_con, $sql) or die("Data not deleted !");

if ($delete_query == true) {
    $message = "Data deleted successfully";
} else {
    $message = "Deleted Failed";
}

header("Location: banner_list.php?msg={$message}");