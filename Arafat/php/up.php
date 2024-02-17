<?php
$coon=new PDO("mysql:host=localhost;dbname=coffee","root","");
if(isset($_POST['sub'])){
$id=$_POST['id'];
$name=$_POST['name'];
$brand=$_POST['brand'];
$model=$_POST['model'];
$color=$_POST['color'];
$storage=$_POST['storage'];
$price=$_POST['price'];
$img=$_FILES['img'];
$image_path=$_FILES['img']['tmp_name'];
$image_name=$_FILES['img']['name'];
$image_up ="photo/".$image_name;
$update="update phones set name ='$name' ,brand ='$brand' ,model='$model',color='$color',storage='$storage',price='$price',img ='$image_up' where id=$id";
$coon->query($update);
if(move_uploaded_file($image_path , "photo/".$image_name)){
  echo "<script>alert ('photo update seccessfly') </script>";
}
else{
  echo "<script>alert ('filed') </script>";
}
header("location:view.php");
}
?>