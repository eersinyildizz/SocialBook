<?php include "../inc/header.php";
	$user_idd = $_SESSION["id"];
if (isset($_POST["kaydet"])) {
 	
 	$gecici_ad=$_FILES["file"]["tmp_name"];
   $kalici_yol_ad="../images/".rand(1, 100000000)."_".$_FILES["file"]["name"];
   $twitter = $_POST["twitter"];
   $facebook = $_POST["facebook"];
   $instagram = $_POST["instagram"];
   $youtube = $_POST["youtube"];
   $pinterest = $_POST["pinterest"];
   if (isset($twitter) || isset($facebook) || isset($instagram) || isset($youtube) || isset($pinterest)) {
   		move_uploaded_file($gecici_ad,$kalici_yol_ad);
   	$pdo->query("INSERT INTO info(image,twitter,facebook,instagram,youtube,pinterest,user_id) VALUES ('$kalici_yol_ad','$twitter','$facebook','$instagram','$youtube','$pinterest','$user_idd')");
   	echo "<script>alert('Bilgileriniz kaydedilmiştir...');</script>";
   }else{
   	echo "<script>alert('Kaydınız olmamıştır. Lütfen en az birini doldurunuz....');</script>";
   }
   



 } 
 
 ?>


<h2>Ayarlar</h2>

<div class="jumbotron">
	<form role="form" enctype="multipart/form-data" action="" method="post">

	


              <label>Fotografınız seciniz..</label>
              <input type="file" name="file" required="yaz lan"  ><hr>
              
            </p>
    


	  <div class="form-group">
	    <label >Twitter Hesap Url :</label>
	    <input type="text" class="form-control" name="twitter">
	  </div>
	  <div class="form-group">
	    <label >Facebook Hesap Url :</label>
	    <input type="text" class="form-control" name="facebook">
	  </div>
	  <div class="form-group">
	    <label >Instagram Hesap Url :</label>
	    <input type="text" class="form-control" name="instagram">
	  </div>
	  <div class="form-group">
	    <label >Youtube Hesap Url :</label>
	    <input type="text" class="form-control" name="youtube">
	  </div>
	  <div class="form-group">
	    <label >Pinterest Hesap Url :</label>
	    <input type="text" class="form-control" name="pinterest">
	  </div>
	  <button type="submit" class="btn btn-primary btn-lg btn-block" name="kaydet">Kaydet</button>
	</form>
</div>
<?php include "../inc/footer.php" ?>