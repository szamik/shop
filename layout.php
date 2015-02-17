<?php


$header = <<<HTML
<!doctype HTML public>
<html>
<head>
	<title>::::  FilmShop  ::::</title>
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu.css">
	<meta charset="UTF-8">
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	
	

</head>
<body>

<div class="header">
  <!-- Logo/Title -->
  <div id="site_title"><a href="index.php"> <img src="img/logo.jpg" alt=""></a> </div>
  <!-- Main Menu -->
  <ol id="menu">

    <li class="active_menu_item"><a href="shoppingCart/index.php">Sklep</a>
       </li>
    <!-- end sub menu -->
    <li>
        <li><a href="logowanie/login.php">Logowanie</a></li>
    <li><a href="logowanie/add.php">Rejestracja</a>
         </li>
    <!-- end sub menu -->
    <li><a href="contact.php">Kontakt</a></li>
  </ol>
<hr sieze ="4" kolor="black" />
</div>
<!-- END header -->




	<div id='container'>
		<div id='header'>
			<h2 style='text-align:center;'>Witaj w Film Shopie !!!</h2>
				<a href='./index.php?view_cart=1'><img src="http://www.meble-lazienkowe.sklep.pl/images/stories/koszyk.jpg" width="18%" height="18%"></a>		</div>
		<div id='content'>


<section>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
    <li data-target="#carousel-example-generic" data-slide-to="6"></li>



  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://www.daswallpaper.de/wallpaper/original/300-rise-of-an-empire-movie-2014.jpg">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
      <img src="http://www.daswallpaper.de/wallpaper/original/Avatar.jpg">
      <div class="carousel-caption">
       
      </div>
    </div>
 

 <div class="item">
      <img src="http://www.daswallpaper.de/wallpaper/original/324028_tachki_multfilm_multik_mashinki_radiator-springs_1920x1080_www.GdeFon.ru_.jpg">
      <div class="carousel-caption">
       
      </div>
  </div>


 <div class="item">
      <img src="http://www.daswallpaper.de/wallpaper/original/artleo.com-4529.jpg">
      <div class="carousel-caption">
       
      </div>
  </div>


 <div class="item">
      <img src="http://www.daswallpaper.de/wallpaper/original/Noah-Movie-2014-Wallpapers.jpg">
      <div class="carousel-caption">
       
      </div>
  </div>

 <div class="item">
      <img src="http://www.daswallpaper.de/wallpaper/original/The-Witcher-3-Cover-Movies-Wallpaper-HD.jpg">
      <div class="carousel-caption">
       
      </div>
  </div>

<div class="item">
      <img src="http://www.daswallpaper.de/wallpaper/original/iron-man-3-movie-hd-wallpaper.jpg">
      <div class="carousel-caption">
       
      </div>
  </div>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		</section>
	
HTML;








$footer = <<<HTML


<div id="footer">
      <!-- Fourth Column -->
  <div class="one-fourth last">
    <p>
   <p>
    <img src="img/icon_fb.png" alt=""> <img src="img/icon_twitter.png" alt=""> <img src="img/icon_in.png" alt=""> </div> 
 <p><p align=right> <h4> Created by Patryk Sroka, Szymon Sadzik, Kamil Smet. </h4>
  <div style="clear:both"></div>
</div>
<!-- END footer -->



		</div><!-- End content-->
		</div><!-- End container-->




</body>
</html>

HTML;

?>
