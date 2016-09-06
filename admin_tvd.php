<?php
session_start();
$name="";
    $con=mysqli_connect("localhost","root","","domusic");
if(!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
    $un=$_SESSION["email"];
    $sql="select * from admin_login where email='$un'";
    $retval=mysqli_query($con,$sql);
    $count=mysqli_num_rows($retval);
    if($count==1){
    while($row=mysqli_fetch_assoc($retval)){
        $name=$row["name"];
        $image=$row["dp"];
    }
    }
    else{
        $name="ERROR";
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
		<script type="text/javascript">	
			$(function() {
			
				var cal = $( '#calendar' ).calendario( {
						onDayClick : function( $el, $contentEl, dateProperties ) {

							for( var key in dateProperties ) {
								console.log( key + ' = ' + dateProperties[ key ] );
							}

						},
						caldata : codropsEvents
					} ),
					$month = $( '#custom-month' ).html( cal.getMonthName() ),
					$year = $( '#custom-year' ).html( cal.getYear() );

				$( '#custom-next' ).on( 'click', function() {
					cal.gotoNextMonth( updateMonthYear );
				} );
				$( '#custom-prev' ).on( 'click', function() {
					cal.gotoPreviousMonth( updateMonthYear );
				} );pum
				$( '#custom-current' ).on( 'click', function() {
					cal.gotoNow( updateMonthYear );
				} );

				function updateMonthYear() {				
					$month.html( cal.getMonthName() );
					$year.html( cal.getYear() );
				}

				
			
			});
		</script>
<!--Calender -->
  <link rel="stylesheet" href="newui/css/clndr.css" type="text/css" />
  <script src="newui/js/underscore-min.js"></script>
  <script src= "newui/js/moment-2.2.1.js"></script>
  <script src="newui/js/clndr.js"></script>
  <script src="newui/js/site.js"></script>
  <!--End Calender -->
<!---->
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
        <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <title>ADMIN</title>    
    </head>
  <body>
      <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="height: 64px;">
            <div class="navbar-header">
               <h3 class="brand-logo" style="top: -8px; font-size: 38px;"><b class="amber-text text-accent-4">DO</b><b class="white-text">MUSIC</b>  ADMIN</h3><br />
            </div>

            <div class="header-right">
                <a href="admin.php" class="btn btn-primary" title="Home"><i class="fa fa-home"></i></a>
                <a href="login.php" class="btn btn-danger" title="Logout"><i class="fa fa-user fa-2x"></i></a>

            </div>
            
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation" style="opacity: 0.9;">
                <ul class="side-nav fixed z-depth-5" id="main-menu" style="top: 64px; width: 230px; padding-left: 0px;">
                    <div class="top-profile" style="width: 230px;">
					<div class="top-profile1">
						<div class="top-profile-top">
							<img src="<?php echo $image;?>" alt="">
						</div>
						<span><?php echo $name; ?></span>
					</div>
					<ul class="top-profile2" style="width: 350px;">
                        <li><a href="#"><i class="fa fa-music"></i>Add/Remove</a>
                        <ul class="nav nav-second-level">
                            <li><a href="admin_songs.php"><i class="fa fa-volume-up"></i> Songs</a></li>
                            <li><a href="admin_topsongs.php"><i class="fa fa-volume-up"></i>Top Songs</a></li>
                            <li><a href="admin_videos.php"><i class="fa fa-video-camera"></i>Top Videos</a></li>
                            <li><a href="admin_topten.php"><i class="fa fa-female "></i>Top Artist</a></li>
                        </ul>
                        </li>
                <li><a href="admin_news.php"><i class="fa fa-newspaper-o"></i>News</a></li>
				<li><a href="admin_userslist.php"><i class="fa fa-user"></i>UserList</a></li>
				<li><a href="admin_songlist.php"><i class="fa fa-star-o"></i>SongList</a></li>
                <li><a href="admin_tablead.php"><i class="fa fa-table "></i>Tables</a></li>
					</ul>
				</div>
                </ul>
          </nav>
            </div>
        <!-- /. NAV SIDE  -->
      <?php
    $ERR5="";
$con=mysqli_connect("localhost","root","","domusic");
if(!$con) {
    die("Connection Failed:" .mysqli_connect_error());
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $sn=$_POST["snam"];
    $sql="delete from topvideo where sname='$sn'";
    $r=mysqli_query($con,$sql);
}

else {
        $ERR5="*FILL IN DETAILS*";
    }
?>
       <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left: 315px;">
               <div class="panel panel-danger">
                        <div class="panel-heading">
                       <button type="button" class=" btn-l btn-2 " style="margin-left: 20px;"> <a href="admin_videos.php">Add</a></button>
                   <button type="button" class=" btn-l btn-2 "><a href="admin_tvd.php">Remove</a></button>
                        </div>
                        <div class="panel-body">
                            <form action="" method="post">
                                        
                                 <div class="form-group">
                                            <label>Video_name</label>
                                            <input class="form-control" type="text" name="snam" id="snam">
                                     <input type="submit" class="btn teal" value="Delete">
                                        </div>
                            </form>
                   </div>
           </div>
      </div>
      <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    </body>
</html>