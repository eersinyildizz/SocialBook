<?php 
	$pdo = new PDO("mysql:host=br-cdbr-azure-south-b.cloudapp.net;dbname=socialbookk;charset=utf8","ba50e96d996747","1c5d404c");
	if (isset($_POST["kayitOl"])) {
		
		$name = $_POST["name"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		if (isset($name) || isset($email) || isset($password)) {
			$pdo->query("INSERT INTO user(name,email,password) VALUES ('$name','$email','$password')");
			echo "<script>alert('Kayiniz basarili sekilde olmustur.. Lutfen giriş yapınız...');</script>";
		}else{
			echo "Hepsini doldurunuz";
		}
		
	}
	if (isset($_POST["girisYap"])) {
		$emaill = $_POST["emaill"];
		$passwordd = $_POST["passwordd"];
		if (isset($emaill) || isset($passwordd)) {
			$choice = $pdo->query("SELECT * FROM user WHERE email='$emaill' AND password='$passwordd'");
			$result = $choice->fetch(PDO::FETCH_LAZY);
			if ($result) {

				session_start();
				$_SESSION["id"] = $result->id;
				$_SESSION["name"] = $result->name;
				$_SESSION["email"] = $result->email;
				$_SESSION["password"] = $result->password;

				header("Location:main/");
			}else{
				echo "<script>alert('Gecersiz kullanıcı adı yada email girdiniz..');</script>";
			}
		}

	}

 ?>
<html>
<head>
  <title>SocialBook</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link href="custom.css" rel="stylesheet" type="text/css" />
</head>
<body>


	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Social Book</a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      <li><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#kayitOl">Kayıt Ol</button></li>
      <li><button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#girisYap">Giriş Yap</button></li>
    </ul>
  </div>
</nav>
<!-- Kayıt ol formunu brda yapacağuz -->
<div id="kayitOl" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Kayıt Ol</h4>
      </div>
      <div class="modal-body">
       	<form role="form" action="" method="post">
		  <div class="form-group">
		    <label for="email">Adınız :</label>
		    <input type="text" class="form-control" name="name" required>
		  </div>
		  <div class="form-group">
		    <label for="email">Email adresiniz:</label>
		    <input type="email" class="form-control" name="email" required>
		  </div>
		  <div class="form-group">
		    <label for="pwd">Parolanız:</label>
		    <input type="password" class="form-control" name="password" required>
		  </div>
		</div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary" name="kayitOl"> Kayıt Ol</button>
     </form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Çıkış</button>
      </div>
    </div>

  </div>
</div>


<!-- Girş yapacağuz  formunu brda yapacağuz -->
<div id="girisYap" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Giriş Yap</h4>
      </div>
      <div class="modal-body">
    	<form role="form" action="" method="post">
		  
		  <div class="form-group">
		    <label for="email">Email adresiniz:</label>
		    <input type="email" class="form-control" name="emaill" required>
		  </div>
		  <div class="form-group">
		    <label for="pwd">Parolanız:</label>
		    <input type="password" class="form-control" name="passwordd" required>
		  </div>
      </div>
      <div class="modal-footer">
            <button type="submit" class="btn btn-success" name="girisYap" >Giriş Yap</button>
        </form>
			<button type="button" class="btn btn-default" data-dismiss="modal">Çıkış</button>
      </div>
    </div>

  </div>
</div>
</body>


</html>