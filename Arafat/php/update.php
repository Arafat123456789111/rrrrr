<?php
$coon=mysqli_connect("localhost","root","","apple");
$id=$_GET['id'];
$up=mysqli_query($coon,"select * from phones where id=$id");
$data=mysqli_fetch_array($up);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="add1.css">
    <title>update</title>
</head>
<body>
<header class="header">
      <div>    
                <a class="link" href="#add">update</a>
 
      </div>
      </header>
      <div class="main">
      <form action="up.php" clas="form" method="post" enctype="multipart/form-data">
       
      <input type="text" name="id" value="<?php echo $data['id']?>" placeholder="the id" class="box"><br>
      <input id="file" type="text" name="name" value="<?php echo $data['name']?>" placeholder="the name of Apple" class="box"><br>
        <input type="text" name="brand" value="<?php echo $data['brand']?>" placeholder="the brand" class="box"><br>
        <input id="file" type="text" name="model" value="<?php echo $data['model']?>" placeholder="the modle " class="box"><br>
        <input type="text" name="color" value="<?php echo $data['color']?>" placeholder="the color" class="box"><br>
        <input type="text" name="storage" value="<?php echo $data['storage']?>" placeholder="the storages" class="box"><br>
        <input type="text" name="price" value="<?php echo $data['price']?>" placeholder="the price" class="box"><br>
        <input id="x" type="file" name="img" placeholder="the imag"  ><br> 
        <input type="submit" name="sub" value="update" class="btn"><br>
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
    color: rgb(231, 154, 22);
}
</style>
</html>