<?php
include('config.php');
$id = $_GET['id'];

$query = "DELETE FROM santri WHERE id_santri='$id'";
$result = mysqli_query($host, $query);
header("location:get_santri.php");
?>