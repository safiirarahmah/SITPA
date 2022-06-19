<?php
include('config.php');
$id = $_GET['id'];

$query = "DELETE FROM pengajar WHERE id_pengajar='$id'";
$result = mysqli_query($host, $query);
header("location:get_pengajar.php");
?>