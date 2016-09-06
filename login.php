<?php
session_start();
$flag=0;
    $con=mysqli_connect("localhost","root","","domusic");
if(!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
if(!empty($_POST["email"]))
{
    $un=$_POST["email"];
    $pd=$_POST["password"];
    $sql="select * from admin_login where email='$un' and password='$pd'";
    $retval=mysqli_query($con,$sql);
    $count=mysqli_num_rows($retval);
    if($count==1){
        $_SESSION["email"]=$un;
        header("Location: admin.php"); 
        exit();
    }
    else
    {
        $flag=1;}
}
else {
        $flag=1;
    }
?>
<!DOCTYPE html>
<html lang="us-en">
    <head>
        <!--definition of webpage-->
        <meta charset="UTF-8">
        <meta name="keyword" content="music,sing,song,english,hindi,tamil,malayalam,edit,
                                    record,studio,pitch,tempo,metronome,publish,composer,
                                    playlist,studioengine,sound,plugin,soundshop,karoke,new
                                    song,upload,freedownload,pay,musicsheet,guitar,piano,
                                    violin,strings,tabla,musicplayer,vedioplayer">
        <meta name="description" content="DO MUSIC,PLAY MUSIC,ENJOY MUSIC,EDIT MUSIC 
                                          AND PUBLISH LET THE WORLD LISTEN">
        <meta name="author" content="ajo john mathai,anju mathew,abhijith m d,ashna ann babu">
        <!-- for the browser to understand it supports mobile version -->
         <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- materialise css linkage -->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link rel="stylesheet" href="css/audio.css" media="screen">
        <link rel="stylesheet"                                                         href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
        <script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="newui/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fidele Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='newui/fonts/fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='newui/fonts/fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
<link href="newui/css/font-awesome.css" rel='stylesheet' type='text/css'>
<!--//fonts-->
<!--moving-->
<script type="text/javascript" src="newui/js/move-top.js"></script>
<script type="text/javascript" src="newui/js/easing.js"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
<!--script-->

	 <script src="newui/js/responsiveslides.min.js"></script>
	  <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			         auto: true,
					 nav: true,
					 speed: 500,
					 namespace: "callbacks",
			      });
			    });
			  </script>
			  <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 1
			      $("#slider2").responsiveSlides({
			         auto: true,
					 nav: true,
					 speed: 500,
					 namespace: "callbacks",
			      });
			    });
			  </script>
			  <script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 1
				      $("#slider3").responsiveSlides({
				         auto: true,
				        pager: true,
				        speed: 300,
				        namespace: "callbacks",
				      });
				    });
				  </script>
				   <script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      $("#slider4").responsiveSlides({
				        auto: true,
				        pager: true,
				        speed: 300,
				        namespace: "callbacks",
				      });
				    });
				  </script>
				  <script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      $("#slider5").responsiveSlides({
				        auto: true,
				        pager: true,
				        speed: 300,
				        namespace: "callbacks",
				      });
				    });
				  </script>
<!--pop-up-box-->  
		<link href="newui/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
		<script src="newui/js/jquery.magnific-popup.js" type="text/javascript"></script>
		 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});																
						});
				</script>	
<!--pop-up-box-->
 <!----video -------->	
<link href="newui/css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="newui/js/jquery.jplayer.min.js"></script>
<!--progress-->
<link rel="stylesheet" type="text/css" href="newui/css/fd-slider.css">
<script type="text/javascript" src="newui/js/fd-slider.js"></script>
<!--//progress-->
<!--font-Awesome-->
<link rel="stylesheet" href="newui/css/font-awesome.min.css">
<!--//font-Awesome-->
<link rel="stylesheet" type="text/css" href="newui/css/calendar.css" />
		<link rel="stylesheet" type="text/css" href="newui/css/custom_1.css" />
		<script type="text/javascript" src="newui/js/jquery.calendario.js"></script>
		<script type="text/javascript" src="newui/js/data.js"></script>
<!---->
        <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
<script>$(document).ready(function(c) {
							$('.cross-white').on('click', function(c){
								$('.full-nav-black').fadeOut('slow', function(c){
									$('.full-nav-black').remove();
								});
								});	  
							});
			  		 </script>
			  		 <script>$(document).ready(function(c) {
							$('.close-one').on('click', function(c){
								$('.chart-one').fadeOut('slow', function(c){
									$('.chart-one').remove();
								});
								});	  
							});
			  		 </script>
			  		 <script>$(document).ready(function(c) {
							$('.close-two').on('click', function(c){
								$('.chart-top2').fadeOut('slow', function(c){
									$('.chart-top2').remove();
								});
								});	  
							});
			  		 </script>
<title>Admin Login</title>    
    </head>
<body>
     <div class="col s12 z-depth-5 card-panel" style="width: 530px; margin-top: 50px; margin-left: 450px; background-color:#009688;">
                
        <div class="row text-center">
        </div>
         <div class="row ">
                    <form action="" method="post">
                    <hr />   
                    <h3 class="brand-logo" style="font-size:50px"><b class="amber-text text-accent-4">DO</b><b class="white-text">MUSIC</b>ADMIN</h3><br />
                    <div class="input-top-mid input-top-mid4">
					<i class="fa fa-user"></i>
					<input type="text" name="email" placeholder="Email" required="">
					<div class="clearfix"> </div>
				    </div>
                    <div class="input-top-mid input-top-mid5">
					<i class="fa fa-lock"></i>
					<input type="password" name="password" placeholder="Password" required="" style="height: 59px; margin-left: 40px; width: 412px;">
				    </div>
                    <input type="submit" class="btn btn-primary " value="LOGIN" style="background-color: #29c069"><hr />
                    </form>
                </div>  
        </div>
</body>
</html>
