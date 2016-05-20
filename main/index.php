<?php include "../inc/header.php";
$user_idd = $_SESSION["id"];
$choice = $pdo->query("SELECT * FROM info WHERE user_id='$user_idd'");
$result = $choice->fetch(PDO::FETCH_LAZY);

$choice1 = $pdo->query("SELECT * FROM info INNER JOIN user ON user.id=info.user_id ORDER BY user.id DESC");
$result1 = $choice1->fetchAll(PDO::FETCH_CLASS);

 ?>

<div class="container-fluid">
	
  <div class="row">
  	<div class="col-md-3">
  		<div class="jumbotron">
  			<h4><b> <i class="fa fa-users" style="color: #4097C1; text-align:center;"></i>
			 		Benim Profilim</b></h4><hr>
			<img src="<?=$result->image?>" alt="Cinque Terre" width="180" height="180">
			<p style="text-align:center;"><?=$_SESSION["name"]; ?></p>
			<center>
			<div class="row">
				<a target="_blank" title="follow me on Twitter" href="<?=$result->twitter?>"><img alt="follow me on Twitter" src="https://c866088.ssl.cf3.rackcdn.com/assets/twitter30x30.png" border=0></a>
				<a target="_blank" title="follow me on facebook" href="<?=$result->facebook?>"><img alt="follow me on facebook" src="https://c866088.ssl.cf3.rackcdn.com/assets/facebook30x30.png" border=0></a>
				<a target="_blank" title="follow me on instagram" href="<?=$result->instagram?>"><img alt="follow me on instagram" src="https://c866088.ssl.cf3.rackcdn.com/assets/instagram30x30.png" border=0></a>
				<a target="_blank" title="follow me on youtube" href="<?=$result->youtube?>"><img alt="follow me on youtube" src="https://c866088.ssl.cf3.rackcdn.com/assets/youtube30x30.png" border=0></a>
				<a target="_blank" title="follow me on pinterest" href="<?=$result->pinterest?>"><img alt="follow me on pinterest" src="https://c866088.ssl.cf3.rackcdn.com/assets/pinterest30x30.png" border=0></a>
			</div></center>	
  		</div>
  	</div>

  	<div class="col-md-6">
  		<div class="jumbotron">
  			<h4><b> <i class="fa fa-users" style="color: #4097C1;"></i>
			 		Diğer Profiller</b></h4><hr>
		
<?php 
	foreach ($result1 as $key ) { ?>
		

		<div>
			 		<div class="row">
			 			<div class="col-md-2" >
			 				<img src="<?=$key->image?>" class="img-circle" alt="Cinque Terre" width="75" height="75"> 
			 			</div>
			 			<div class="col-md-8">
			 			
			 				<h2><?=$key->name?></h2>
			 			</div>
					</div>
					<div class="row">
						<div class="col-md-offset-2">
							<a target="_blank" title="follow me on Twitter" href="<?=$key->twitter?>"><img alt="follow me on twitter" src="https://c866088.ssl.cf3.rackcdn.com/assets/twitter40x40.png" border=0></a>

							<a target="_blank" title="follow me on facebook" href="<?=$key->facebook?>"><img alt="follow me on facebook" src="https://c866088.ssl.cf3.rackcdn.com/assets/facebook40x40.png" border=0></a>

							<a target="_blank" title="follow me on instagram" href="<?=$key->instagram?>"><img alt="follow me on instagram" src="https://c866088.ssl.cf3.rackcdn.com/assets/instagram40x40.png" border=0></a>

							<a target="_blank" title="follow me on youtube" href="<?=$key->youtube?>"><img alt="follow me on youtube" src="https://c866088.ssl.cf3.rackcdn.com/assets/youtube40x40.png" border=0></a>

							<a target="_blank" title="follow me on pinterest" href="<?=$key->pinterest?>"><img alt="follow me on pinterest" src="https://c866088.ssl.cf3.rackcdn.com/assets/pinterest40x40.png" border=0></a>

						</div>
					</div>
					</div><hr>

<?php }?>		



		</div>
  	</div>
  	
  	<div class="col-md-3">
  		<div class="jumbotron">
  		<div class="row">
  			<!--Player Baslangic--><iframe name="playerflash" src="http://www.radyoflashplayer.com/player.asp?themecolor=1C7EFF&startvolume=&infotext=RADYOTELEKOM.COM - Radyo Hosting ve Radyo Sitesi Kurulumu&infolink=http://www.radyotelekom.com&channelurls=http://kesintisizyayin.com:1656&radioname=Mavi Gece Fm&scroll=auto&autoplay=true&html5chrome=true&debug=true&genislik=500px&yukseklik=50px&songtitleurl=" width="200px" height="50px" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0" allowtransparency="true"></iframe><!--Player Bitis-->
  		</div><hr>
  		<div class="row">
  			
  				
  			
  			<script language="javascript" src="http://is.sitekodlari.com/haberler4.js"></script><br><a href="http://www.sitekodlari.com/haberlerkodu.php"><font size="1">Sitene Haber Ekle</font></a>
  		</div>
  		<div class="row">
  			<script language="javascript" src="http://is.sitekodlari.com/burclar2.js"></script><br><a href="http://www.sitekodlari.com/burckodu.php"><font size="1">Günlük Burç Yorumu</font></a>
  			<script language="javascript" src="http://is.sitekodlari.com/havadurumu1.js"></script><br><a href="http://www.sitekodlari.com/havadurumukodu.php"><font size="1">Sitene Hava Durumu Ekle</font></a>
  		</div>

 
  		</div>
  	</div>
  	</div>
  </div>
<?php include "../inc/footer.php" ?>


