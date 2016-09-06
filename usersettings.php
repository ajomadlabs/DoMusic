<?php
session_start();
$ERR="";$ER1="";$ER2="";$name="";
$con=mysqli_connect("localhost","root","","domusic");
if(!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
    $un=$_SESSION["email"];
        if(!$_SESSION["email"]){
    header("Location: error.html");
    }
    $sql="select * from profile where p_email='$un'";
    $retval=mysqli_query($con,$sql);
    $count=mysqli_num_rows($retval);
    if($count==1){
    while($row=mysqli_fetch_assoc($retval)){
        $username=$row["p_uname"];
        $name=$row["p_name"];
        $email=$row["p_email"];
        $add=$row["p_add"];
        $phn=$row["p_phn"];
        $con=$row["p_con"];
        $gen=$row["p_gender"];
        $pp=$row["p_dp"];
        
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
<script type="text/javascript" src="newui/js/jquery.jplayer.min.js"></script>
<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){

	$("#jquery_jplayer_1").jPlayer({
		ready: function () {
			$(this).jPlayer("setMedia", {
				title: "Finding Nemo Teaser",
				m4v: "http://www.jplayer.org/video/m4v/Finding_Nemo_Teaser.m4v",
				poster: "http://www.jplayer.org/video/poster/Finding_Nemo_Teaser_640x352.png"
			});
		},
		swfPath: "../../dist/jplayer",
		supplied: "m4v",
		size: {
			width: "100%",
			height: "450px",
			cssClass: "jp-video-360p"
		},
		useStateClassSkin: true,
		autoBlur: false,
		smoothPlayBar: true,
		keyEnabled: true,
		remainingDuration: true,
		toggleDuration: true
	});
});
//]]>
</script>

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
<title>DO MUSIC</title>    
    </head>
    <style>
    #nav_btm_bg{
    background-image: url(css/.jpg);
    width: 1599px;
    height:800px;
    margin-top: -132px;
    }
        #foot{
            margin-top: 80px;
        }
        #feat{
            margin-top: 173px;
            padding-top: 80px;
        }
        #overlay-bg{
	background-color:#000;
	/*background-color:rgba(0,0,0,0.6); */ /* Not compatible with IE 7 IE 8 */
	display:none;
	height:100%;
	left:0;
	margin:auto;
	opacity:0.6; /* Not compatible with IE 7. Limited IE 8:  http://caniuse.com/#search=opacity */
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)"; /* IE 8 */
	filter: alpha(opacity=50); /* IE 7 */	
	position:fixed; 
	top:0;
 	width:100%;
 	z-index:1001;
  }
        #popup-content{
	background-color:#000;
	-webkit-border-radius:15px;
	-moz-border-radius:15px;
	border-radius:15px;	
	color:#FFF;
	display:none;
	max-width:500px;
	padding:0 10px 10px 10px;
	position:fixed;
	width:80%;
	z-index:1002;	/* Any value above all content */
}
        #popup-content h2{
	font-size:1.2em;
	font-weight:bold;
	padding: 10px;
}
/*Popup close button positioning */
#popup-content > div + div{text-align:right;
} /* div:last-child Not compatible with IE 7 IE 8  http://caniuse.com/#search=last-child */
#modal-open-button {display:none;}
    </style>
    <body>
        <?php
$ERR="";$ER1="";$ER2="";$name="";$error_one=" ";$error_two=" ";
$con=mysqli_connect("localhost","root","","domusic");
if(!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
    $un=$_SESSION["email"];
    $sql="select * from profile where p_email='$un'";
    $retval=mysqli_query($con,$sql);
    $count=mysqli_num_rows($retval);
    if($count==1){
    while($row=mysqli_fetch_assoc($retval)){
        $username=$row["p_uname"];
        $name=$row["p_name"];
        $e=$row["p_email"];
        $a=$row["p_add"];
        $c=$row["p_con"];
        $g=$row["p_gender"];
        $ph=$row["p_phn"];
        $are=$row["p_area"];
        $bn=$row["p_band"];
        $o=$row["p_password"];
        
    }
        if($_SERVER["REQUEST_METHOD"]== "POST" && !empty($_POST["bis"])){
            $pname=$_POST["pname"];
            $phn=$_POST["pphn"];
            $ad=$_POST["add"];
            $coun=$_POST["con"];
            $ge=$_POST["gen"];
            $area=$_POST["area"];
            $bnd="www.google.com/".$_POST["band"];
            if($pname=="nil"){
                $pname=$name;
            } if($phn=="nil"){
                $phn=$ph;
            }
             if($ad=="nil"){
                $ad=$a;
            }
             if($coun=="nil"){
                $coun=$c;
            }
             if($ge=="nil"){
                $ge=$g;
            }
             if($area=="nil"){
                 $area=$are;
             }
             if($phn=="nil" && $ad=="nil"){
               $phn=$ph;
                  $ad=$a;
            }
             if($phn=="nil" && $coun=="nil"){
               $phn=$ph;
                   $coun=$c;
            }
             if($phn=="nil" && $area=="nil"){
                 $phn=$ph;
                 $area=$are;
             }
            if($ad=="nil" && $coun=="nil"){
                $ad=$a;
                   $coun=$c;
            }
            if($ad=="nil" && $area=="nil"){
                $ad=$a;
                $area=$are;
            }
            if($ad=="nil" && $coun=="nil" && $phn=="nil" && $area=="nil"){
                $ad=$a;
                   $coun=$c;
                $phn=$ph;
                $area=$ar;
            }
            $sql="update profile set p_name='$pname',p_add='$ad',p_phn='$phn',p_con='$coun',p_gender='$ge',p_area='$area',p_band='$bnd' where p_uname='$username'";
            $retval=mysqli_query($con,$sql);
        }
        else
        {
             if($_SERVER["REQUEST_METHOD"]== "POST" && !empty($_POST["as"])){
            $ema=$_POST["email"];
            $op=$_POST["opassword"];
            $np=$_POST["npassword"];
            $cp=$_POST["cpassword"];
            if($ema=="nil"){
                $ema=$e;
                $sql="update profile set p_email='$ema' where p_uname='$username'";
                $retval=mysqli_query($con,$sql);
            }
                 else
                 {
                     if($op=="nil"){
                    $sql="update profile set p_email='$ema' where p_uname='$username'";
                    $retval=mysqli_query($con,$sql);
                 }
                     else{
                            if($op==$o)
                            {
                                if($np==$cp){
                                    $sql="update profile set p_password='$np' where p_uname='$username'";
                                    $retval=mysqli_query($con,$sql);
                                }
                                else{
                                        $error_one="Passwords Doesnt Match";
                                }
                                
                            }
                          else{
                                        $error_two="Old Password Doesnt Match";
                                }
                     }
                 }
        }
        else
        {
                if($_SERVER["REQUEST_METHOD"]== "POST" && isset($_FILES["ppic"])){
                $tmp_name=$_FILES["ppic"]["tmp_name"];
                $temp = explode(".", $_FILES["ppic"]["name"]);
                $newfilename = "propic". $e.'.' .end($temp);
                $ppath="dp/$newfilename";
                move_uploaded_file($_FILES["ppic"]["tmp_name"], "dp/" . $newfilename);
                $sql="update profile set p_dp='$ppath' where p_uname='$username'";
                $retval=mysqli_query($con,$sql);
                $pp=$ppath;
        }
        }
        }
    }
    else{
        $name="ERROR";
    }
?>
       <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper teal darken-2 z-depth-5">
          <a href="profile.php" class="brand-logo" style="font-size:50px"><b class="amber-text text-accent-4">DO</b><b class="white-text">MUSIC</b></a>
        <ul class="right hide-on-med-and-down" >
            <li><a href="profile.php" class="btn waves-effect waves-light white-text" style="margin-top: 12px;"><i class="fa fa-2x fa-home" style="margin: -12px;"></i></a></li>
          <li><a href="logout.php" class="btn waves-effect waves-light white-text" style="margin-top: 12px;"><i class="fa fa-2x fa-power-off" style="margin: -12px;"></i></a></li>
        </ul>
      </div>
    </nav>
  </div>
        <div class="row" id="aboutme" style="margin: 0px 0px;">
                <div class="card-medium" style="margin: 0px 1px;">
                <div class="card-image ">
                    <?php if($pp=="nil"){ 
							echo "<img src='img/lu.jpg' style='margin:0px 18px 0px 0px;width:291px;height:323px;display:block;border-radius:100%;' class='img-circle'                                           width='400px' height='200px' alt='Upload Picture'>";}
                            else{
                                echo "<img src='$pp' style='margin:0px 18px 0px 0px;width:291px;height:323px;display:block;border-radius:100%;' class='img-circle' width='400px' height='200px'                                     alt='$pp'>";}
                            ?>
                    <button type="button" id="modal-open-button" style="margin-left:49px ;margin-top:1px;width:172px;" class="btn btn-default"><i class="fa fa-2x fa-upload" style="margin: 2px 10px;"></i>Upload</button>
                </div>
             </div>
             <div id="popup-content" class="card teal darken-2 z-depth-5">
               <div style="margin: 0px 377px;">
                   <input id="modal-close-button" class="btn waves-effect waves-light white-text" type="button" value="Close" />
	</div>
            <div class="card-content white-text">
              <span class="card-title" style="margin: 55px 116px 0px -143px;"><i class="fa fa-2x fa-image" style="margin: 2px 124px;"></i>Profile Upload</span>
                     <form action="" method="post" enctype="multipart/form-data">
                                <div class="file-field input-field">
                                        <div class="btn">
                                            <i class="fa fa-2x fa-upload" style="margin: 0px 14px 0px 2px;"></i><span>Image</span>
                                                <input type="file" name="ppic" id="ppic">
                                        </div>
                                <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload one or more files">
                                </div>
                                </div>
                                <input type="submit" name="ubtn" id="ubtn" value="Save" class="btn btn-danger" style="-30px -23px -55px">
                </form>
                    </div>
	
</div>
<!-- Overlay background -->
<div id="overlay-bg"></div>
                <div class="card teal-text text-darken-3 z-depth-1" style="margin: -303px 362px;width: 600px;">
                    <div class="card-content">
                    <i class="fa fa-2x fa-edit" style="margin: 2px 538px;padding-right:40px"></i><span class="card-title" style="margin: 0px;"><h5 style="margin: -51px 0px -4px;"><b>Basic Settings</b></h5></span><span class="amber-text text-accent-4">Mention nil for unchanged fields</span>
                    </div>
                    </div>
                    <hr>
                    <div class="card z-depth-1 teal-text text-darken-3" style="margin: 307px 362px;width: 600px;">
                    <form method="post" action="">
                     <div class="card-content">
                     <input id="pname" type="text" class="validate" name="pname" class="card-title" style="margin: -42px 0px -39px 199px; width: 334px;" placeholder="<?php echo $name;?>"><label for="pname" class="center-align"style="margin-top: -20px;"><i class="fa fa-2x fa-user" style="margin: 2px 10px;padding-right:40px"></i>Name : </label>
                    </div>
                    <div class="card-content">
                     <input id="pphn" type="text" class="validate" name="pphn" class="card-title" style="margin: -42px 0px -44px 199px; width: 334px;" placeholder="<?php echo $ph;?>"><label for="pphn" class="center-align"style="margin-top: -20px;"><i class="fa fa-2x fa-phone" style="margin: 2px 10px;padding-right:40px"></i>Mobile No : </label>
                    </div>
                    <div class="card-content">
                        <textarea id="add" type="text" class="validate materialize-textarea" name="add" class="card-title" style="margin: -42px 0px -44px 199px; width: 334px;" placeholder="<?php echo $a;?>"></textarea><label for="add" class="center-align"style="margin-top: -20px;"><i class="fa fa-2x fa-home" style="margin: 2px 10px;padding-right:40px"></i>Address : </label>
                    </div>
                        <div class="card-content">
                      <input id="gen" type="text" class="validate" name="gen" class="card-title" style="margin: -42px 0px -44px 199px; width: 334px;" placeholder="<?php echo $g;?>"><label for="con" class="center-align"style="margin-top: -20px;"><i class="fa fa-2x fa-male fa-female" style="margin: 2px 10px;padding-right:40px"></i>Gender : </label>
                    </div>
                    <div class="card-content">
                      <input id="con" type="text" class="validate" name="con" class="card-title" style="margin: -42px 0px -44px 199px; width: 334px;" placeholder="<?php echo $c;?>"><label for="con" class="center-align"style="margin-top: -20px;"><i class="fa fa-2x fa-globe" style="margin: 2px 10px;padding-right:40px"></i>Country : </label>
                    </div>
                    <div class="card-content">
                      <input id="area" type="text" class="validate" name="area" class="card-title" style="margin: -42px 0px -44px 199px; width: 334px;" placeholder="<?php echo $are;?>"><label for="con" class="center-align"style="margin-top: -20px;"><i class="fa fa-2x fa-globe" style="margin: 2px 10px;padding-right:40px"></i>Area Of Intrest : </label>
                    </div>
                    <div class="card-content">
                      <input id="band" type="text" class="validate" name="band" class="card-title" style="margin: -42px 0px -44px 199px; width: 334px;" placeholder="<?php echo $bn;?>"><label for="con" class="center-align"style="margin-top: -20px;"><i class="fa fa-2x fa-globe" style="margin: 2px 10px;padding-right:40px"></i>Band : </label>
                    </div>
                    <div>
                       <input type="submit" id="bis" value="Save" name="bis" style="margin-left:403px ;margin-top:20px;width:198px;" class="btn btn-default">
                        </div>
                        </form>
                    
                </div>
           
                <div class="card teal-text text-darken-3 z-depth-1" style="margin: -973px 988px;width: 600px;">
                    <div class="card-content">
                       <i class="fa fa-2x fa-edit" style="margin: 2px 538px;padding-right:40px"></i><span class="card-title" style="margin: 0px;"><h5 style="margin: -51px 0px -4px;"><b>Account Settings</b></h5></span><span class="amber-text text-accent-4">Mention nil for unchanged fields</span>
                    </div>
                    </div>
                <div class="card z-depth-1 teal-text text-darken-3" style="margin: 978px 988px;width: 600px;height:531px;">
                    <form method="post" action="">
                     <div class="card-content">
                     <input id="email" type="email" class="validate" name="email" class="card-title" style="margin: -42px 0px -39px 228px; width: 334px;"><label for="email" data-error="wrong" data-success="right" class="center-align "style="margin-top: -20px;"><i class="fa fa-2x fa-envelope" style="margin: 2px 10px;padding-right:40px"></i>Email : </label>
                    </div>
                    <div class="card-content">
                     <input id="opassword" type="password" class="validate" name="opassword" class="card-title" style="margin: -42px 0px -44px 228px; width: 334px;"><label for="opassword" class="center-align"style="margin-top: -20px;"><i class="fa fa-2x fa-lock" style="margin: 2px 10px;padding-right:40px"></i>Old Password : </label>
                    </div>
                    <div class="card-content">
                      <input id="npassword" type="password" class="validate" name="npassword" class="card-title" style="margin: -42px 0px -44px 228px; width: 334px;"><label for="npassword" class="center-align"style="margin-top: -20px;"><i class="fa fa-2x fa-lock" style="margin: 2px 10px;padding-right:40px"></i>New Password : </label>
                    </div>
                    <div class="card-content">
                      <input id="cpassword" type="password" class="validate" name="cpassword" class="card-title" style="margin: -42px 0px -44px 228px; width: 334px;"><label for="cpassword" class="center-align"style="margin-top: -20px;"><i class="fa fa-2x fa-lock" style="margin: 2px 10px;padding-right:40px"></i>Confirm Password : </label>
                    </div>
                         <div>
                        <input type="submit" value="Save" id="as" name="as" style="margin-left:403px ;margin-top:114px;width:198px;" class="btn btn-default teal">
                        </div>
                        
                        </form>
                    <div class="card-content">
                      <h6><?php echo $error_one;?></h6>
                    <h6><?php echo $error_two;?></h6>
                    </div>
                </div>
        </div>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js">
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js">         </script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
   <script>
         $(document).ready(function() {
    $('select').material_select();
  });
        </script>
    <script src="js/audiojquery.js"></script>
    <script src="js/audiomain.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js1/jquery-1.8.3.min.js"></script>
           <script src="js/popup.js"></script>
    </body>
</html>