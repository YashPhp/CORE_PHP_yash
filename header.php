<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Poojan Tailor</title>
      <meta name="description" content="Buy Indian Clothes And Make Perfect Dresss For You "/>
      <meta name="keywords" content="Buy Indian Clothes And Make Perfect Dresss For You "/>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <!-- CUSTOM STYLE -->       
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="css/template-style.css">
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>          
      <!--[if lt IE 9]> 
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
      <![endif]-->     
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->          
      <header class="margin-bottom">
         <div class="line">
            <nav>
               <div class="top-nav">
                  <p class="nav-text"></p>
                  <a class="logo" href="index.php">            
                  Poojan<span>Tailor </span>
                  </a>            
                  <h1>Creative Sewing & Alterations.</h1>
                  <ul class="top-ul right">
                     <li>            
                        <a href="index.php">Home</a>            
                     </li>
                     <li>            
                        <a href="about.php">About</a>            
                     </li>
                     <li>            
                        <a href="products.php">Product</a>            
                     </li>
                     <li>            
                        <a href="contact.php">Contact</a>            
                     </li>
                     <div class="social right">	           
                        <a target="_blank" href="https://www.facebook.com/Sanathara.yash25">
                        <i class="icon-facebook_circle icon2x"></i>
                        </a>          
                        <a target="_blank" href="#">
                        <i class="icon-twitter_circle icon2x"></i>
                        </a>          
                     </div>
                  </ul>
               </div>
            </nav>
         </div>
      </header>
<style>
	ul li{
		height:80px;
	}
</style>
<?php
// Function to get the client IP address
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
include('conn.php');
$sql = "select * from ip_a where ip='$ipaddress'";
$query = $conn -> query($sql);
$row = mysqli_num_rows($query);
if($row == 0){
	$query = $conn -> query("insert into ip_a (ip) values ('$ipaddress')");
	echo'<div class="hide" >
<audio class="hide" controls autoplay>
  <source class="hide"  src="song.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>
</div>';
}
?>
<style>
audio { 
   display:none;
}
</style>