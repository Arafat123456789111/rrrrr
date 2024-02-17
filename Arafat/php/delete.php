<?php
$coon=mysqli_connect("localhost","root","","apple");
$id= $_GET['id'];
mysqli_query($coon, "delete from phones where id=$id");
header("location:view.php");
?>