<?php 
include 'aksi.php';
$id = $_GET['id'];
$sql_insert="DELETE FROM users WHERE id='$id'";
mysqli_query($conn,$sql_insert)or die(mysqli_error($conn));
 
header("location:index.php?pesan=hapus");
?> 