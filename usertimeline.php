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
        $pp=$row["p_dp"];
        $e=$row["p_email"];
        $a=$row["p_add"];
        $c=$row["p_con"];
        $g=$row["p_gender"];
        $ph=$row["p_phn"];
        $pn=$row["dp_timeline"];
        $ar=$row["p_area"];
        $bn=$row["p_band"];
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
$ERR="";$ER1="";$ER2="";$n="";
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
         $e=$row["p_email"];
        $n=$row["p_name"];
    }
        if($_SERVER["REQUEST_METHOD"]== "POST" && isset($_FILES["ppic"])){
            $tmp_name=$_FILES["ppic"]["tmp_name"];
            $temp = explode(".", $_FILES["ppic"]["name"]);
            $newfilename = "propic". $e.'.' .end($temp);
            $ppath="dptimeline/$newfilename";
            move_uploaded_file($_FILES["ppic"]["tmp_name"], "dptimeline/" . $newfilename);
	        $sql="update profile set dp_timeline='$ppath' where p_uname='$username'";
            $retval=mysqli_query($con,$sql);
            $pn=$ppath;
        }
}
    else{
        $n="ERROR";
    }
?>
       <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper teal darken-2 z-depth-5">
          <a href="#nav_btm_bg" class="brand-logo" style="font-size:50px"><b class="amber-text text-accent-4">DO</b><b class="white-text">MUSIC</b></a>
        <ul class="right hide-on-med-and-down" >
            <li><a href="profile.php" class="btn waves-effect waves-light white-text" style="margin-top: 12px;"><i class="fa fa-2x fa-home" style="margin: -12px;"></i></a></li>
          <li><a href="logout.php" class="btn waves-effect waves-light white-text" style="margin-top: 12px;"><i class="fa fa-2x fa-power-off" style="margin: -12px;"></i></a></li>
        </ul>
      </div>
    </nav>
  </div>
	<div class="banner-bottom">
			<div class="container">
			</div>
        <?php if($pn=="nil"){
        
		echo "<div class='banner-top2' style='margin-top:-176px;background:url(newui/images/banner2.jpg) no-repeat ;'>";}
            else{
                echo "<div class='banner-top2' style='margin-top:-176px;background:url($pn) no-repeat ;'>";}
?>
			  <div class="container">
			  <div class="slider">
				    <ul class="rslides" id="slider2">
				      <li>
				      	<div class="banner-matter2">
						</div>	
						</li>
				    </ul>
			    </div>
                  <div>
                      <button type="button" id="modal-open-button" style="margin-left:-107px ;margin-top:160px;width:198px;" class="btn btn-default"><i class="fa fa-2x fa-upload" style="margin: 2px 10px;"></i>Upload</button>
                  </div>
                    <div id="popup-content" class="card teal darken-2 z-depth-5">
               <div style="margin: 0px 377px;">
                   <input id="modal-close-button" class="btn waves-effect waves-light white-text" type="button" value="Close" />
	</div>
            <div class="card-content white-text">
              <span class="card-title" style="margin: 55px 116px 0px -143px;"><i class="fa fa-2x fa-image" style="margin: 2px 124px;"></i>Timeline Upload</span>
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
                                <button type="submit" class="btn btn-danger" style="-30px -23px -55px">Save</button>
                </form>
                    </div>
	
</div>
<!-- Overlay background -->
<div id="overlay-bg"></div>
		</div>
        </div>
        <div class="row" id="aboutme" style="margin: -64px 1px;">
            <div class="col s2 white z-depth-1">
                <div class="card-small" style="margin: -128px 935px;width:204px;">
                <div class="card-image">
                    <?php if($pp=="nil"){ 
							echo "<img src='img/lu.jpg' style='margin:0px 18px 0px -947px;border:solid black 1px;display:block;' class='img-circle'                                           width='400px' height='200px' alt='Upload Picture'>";}
                            else{
                                echo "<img src='$pp' style='margin:0px 18px 0px -947px;border:solid black 1px;display:block;' class='img-circle' width='400px' height='200px'                                     alt='$pp'>";}
                            ?>
                </div>
             </div>
            </div>
        </div>  
                <div class="card teal-text text-darken-3 z-depth-1" style="margin: 136px 484px; width: 500px;">
                    <div class="card-content">
                        <span class="card-title"><h5><b><center>About</center></b></h5></span>
                    </div>
                </div>
             <div class="card teal-text text-darken-3 z-depth-1" style="margin: -43px 1306px; width: 500px;">
                    <div class="card-content">
                        <span class="card-title"><h5><b><center>Gallery</center></b></h5></span>
                    </div>
                    <div class="card-image">
                        <img src="img/jb.jpg" height="120px" width="147px" style="width:127px">
                        <img src="img/jt.jpg"  height="120px" width="147px" style="width:127px;margin-top:-122px;margin-left:134px">
                        <img src="img/adele.jpg"  height="120px" width="147px" style="width:127px;margin-top:-120px;margin-left:265px;">
                    </div>
                    </div>
                    <hr>
                    <div class="card z-depth-1 teal-text text-darken-3" style="margin: -132px 484px; width: 500px;">
                     <div class="card-content">
                     <span class="card-content"><i class="fa fa-1x fa-user" style="margin: 2px 10px;padding-right:40px"></i>Name : <?php echo $name;?></span>
                    </div>
                    <div class="card-content">
                     <span class="card-content"><i class="fa fa-1x fa-phone" style="margin: 2px 10px;padding-right:40px"></i>Mobile No :  <?php echo $ph;?></span>
                    </div>
                    <div class="card-content">
                     <span class="card-content"><i class="fa fa-1x fa-home" style="margin: 2px 10px;padding-right:40px"></i>Address :  <?php echo $a;?></span>
                    </div>
                    <div class="card-content">
                     <span class="card-content"><i class="fa fa-1x fa-globe" style="margin: 2px 10px;padding-right:40px"></i>Country :  <?php echo $c;?></span>
                    </div>
                    <div class="card-content">
                     <span class="card-content"><i class="fa fa-1x fa-envelope" style="margin: 2px 10px;padding-right:40px"></i>Email :  <?php echo $e;?></span>
                    </div>
                    <div class="card-content">
                     <span class="card-content"><i class="fa fa-1x fa-envelope" style="margin: 2px 10px;padding-right:40px"></i>Area :  <?php echo $ar;?></span>
                    </div>
                    <div class="card-content">
                     <span class="card-content"><i class="fa fa-1x fa-envelope" style="margin: 2px 10px;padding-right:40px"></i>Band :  <?php echo "<a href='$bn'>$bn</a>";?></span>
                    </div>
                </div>
         <div class="divider" style="margin-top:201px;"></div>
     <?php
$i="";$name="";$nc="user";
$con=mysqli_connect("localhost","root","","domusic");
if(!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
else{
    $sql="select * from news where ncat='$nc' and n_username='$username'";
    $retval=mysqli_query($con,$sql);
    $count=mysqli_num_rows($retval);
    $c=$count;
    $k=0;
    if($count>=1){
    $k=0;
    while($row=mysqli_fetch_assoc($retval) and $count!=0){
        $ncn[$k]=$row["ncon"];
        $np[$k]=$row["npic"];
        $nu[$k]=$row["n_username"];
        $nt[$k]=$row["n_time"];
        $count=$count-1;
        $k=$k+1;
    }
    }
                if($k==0){
                    echo "<div class='row'>";
                    echo "<div class='col s12 m6' style='margin-left: 339px;'>";
            echo "<div class='card teal darken-2 z-depth-1' style='width: 652px; margin-top: -1px; margin-left: 237px;'>";
            echo "<div class='card-content white-text'>";
            echo "<span style='margin: 57px;'></span>";
            echo "<span><img src='img/lu.jpg' width='50px' height='50px' style='margin: -32px 0px 4px; border-radius:               55px;'></img></span>";
            echo "<p style='margin-left:57px;'>Currently No New Post</p>";
            echo "</div>";
          echo "</div>";
        echo "</div>";
      echo "</div>";
                }
                else{
             while($k!=0){
                  $k=$k-1;
            echo "<div class='row'>";
            echo "<div class='col s12 m6' style='margin-left: 339px;'>";
            echo "<div class='card teal darken-2 z-depth-1' style='width: 652px; margin-top: -1px; margin-left: 237px;'>";
            echo "<div class='card-content white-text'>";
            echo "<span style='margin: 57px;'>$nu[$k]  Posted  @  $nt[$k]</span>";
            echo "<span><img src='$np[$k]' width='50px' height='50px' style='margin: -32px 0px 4px; border-radius: 55px;'></img></span>";
            echo "<p style='margin-left:57px;'>$ncn[$k]</p>";
            echo "</div>";
          echo "</div>";
        echo "</div>";
      echo "</div>";
    echo "</div>";
                
             }
                }
}
?>
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