<?php 

  session_start();
  if ($_SESSION["email"]) {
    # code...
  
  $pdo = new PDO("mysql:host=localhost;dbname=kaan;charset=utf8","root","");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Social Book</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../main/">Social Book</a>
    </div>
   
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?=$_SESSION["name"];; ?> <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="../ayarlar/">Ayarlar</a></li>
          
          <li><a href="../logout/">Çıkış</a></li>
        </ul>
      </li>
      
    </ul>
  </div>
</nav>
  
<div class="container-fluid">



<?php 
}else{
  header("Location:../");
}
?>
