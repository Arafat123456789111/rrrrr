<?php
$coon=new PDO("mysql:host=localhost;dbname=coffee","root","");
if(isset($_POST['sub'])){
$name=$_POST['name'];
$brand=$_POST['brand'];
$model=$_POST['model'];
$color=$_POST['color'];
$storage=$_POST['storage'];
$price=$_POST['price'];
$image=$_FILES['img'];
$image_path=$_FILES['img']['tmp_name'];
$image_name=$_FILES['img']['name'];
$image_up ="photo/".$image_name;
$insert="insert into phones (name ,brand ,model,color,storage,price,img) values ('$name','$brand','$model','$color','$storage','$price','$image_up')";
$coon->query($insert);
if(move_uploaded_file($image_path , "photo/".$image_name)){
  echo "<script>alert ('photo saved seccessfly') </script>";
}
else{
  echo "<script>alert ('filed') </script>";
}
header("location:add.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add cars</title>
</head>
<body>
<header class="header">
      <div>    
                <a class="link" href="#add">ADD Apple</a>
 
      </div>
      </header>
      <div class="main">
      <form clas="form" method="post" enctype="multipart/form-data">
    
      <input id="file" type="text" name="name" placeholder="enter the name of Apple" class="box"><br>
        <input type="text" name="brand" placeholder="enter the name brand  " class="box"><br>
        <input id="text" type="text" name="model" placeholder="enter the model " class="box"><br>
        <input type="text" name="color" placeholder="enter the color" class="box"><br>
        <input type="text" name="storage" placeholder="enter the storage" class="box"><br>
        <input type="text" name="price" placeholder="enter the price" class="box"><br>
        <input id="x" type="file" name="img" placeholder="enter the imag"  ><br> 
        <input type="submit" name="sub" value="add " class="btn"><br>
        <a href="view.php" class="a">all the Apple </a>
</div>
</body>
<style>
body{
    align-items: center;
    min-height: 85vh;
    background-image: url(1.jpg);
    background-size: cover;
    background-position: center; 
}
a{
    text-decoration: none;
    color: #333;
}
.header{
    margin: 40px auto;
    box-shadow: 1PX 1PX 10PX silver;
    padding: 10px 20px;
    font-size: 30px;
    font-style: italic;
    width: fit-content;
}
.link{
    color: white;

}
.link:hover{
    border: none;
    color: rgb(231, 154, 22);

}
.main{
    width: 350px;
    height: 500px;
    border-radius: 70px;
    border: 2px solid #996a32;
    backdrop-filter: blur(55px);
    box-shadow: 1PX 1PX 10PX silver;
    margin: -50px 0px 0px 150px;
    margin-top: -120px
}
.box{
    width: 50x;
    height: 30px; 
    margin-top: 10px;
    margin-bottom: 10px;
    border-radius: 70px;
    margin-left: 50px;
    border : 1px solid ;
    color:#333;
    font-size: 20px;
}
.btn{
    width: 90px;
    height: 50px;
    border : 1px solid ;
    border-radius: 15px;
    background-color: rgb(231, 154, 22);
    color: white;
    margin: 20px 0px 0px 120px;
    margin-bottom: 20px;
    
}
.btn:hover{
    background-color: #fbfaf9;
    cursor: pointer;
    color: black;
; 
}
#x{
    margin-left: 120px;
    font-size: 20px;
    border-radius: 15px;
    margin: 20px 0px 0px 50px;
    color: #333;

}

#x:hover{
    cursor: pointer;
  color: rgb(231, 154, 22);
}  
.a{
    margin-left: 120px;
    color: white;
;
    font-size: 20px;
    font-style: italic;
}
.a:hover{
    color: rgb(231, 154, 22);;
; 
}
</style>
</html>