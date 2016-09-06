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
    }
    }
    else{
        $name="ERROR";
    }
?>
<!doctype html>
<html>
	<head>
         <!--definition of webpage-->
          <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width user-scalable=no">
    <title><?php echo $username;?>-Metronome</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="js/metronome.js"></script>
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
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <link rel="stylesheet" href="../css/audio.css" media="screen">
        <link rel="stylesheet"                                                         href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
        <script src="../js/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
          
<!-- Custom Theme files -->
<!--theme-style-->

<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fidele Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='../newui/fonts/newui/fonts/fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href="../newui/fonts/fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel='stylesheet' type='text/css'>
<link href='../newui/css/font-awesome.css' rel='stylesheet' type='text/css'>
<!--//fonts-->
<!--moving-->
		<title><?php echo $username;?>-Pitch Detector</title>
        		<style>
			#note { font-size: 164px; }
			.droptarget { background-color: #348781}
			div.confident { color: black; }
			div.vague { color: lightgrey; }
			#note { display: inline-block; height:180px; text-align: left;}
			
			#detector { width: 300px; height: 300px; border: 4px solid gray; border-radius: 8px; text-align: center; padding-top: 10px;}
			#output { width: 300px; height: 42px; }
			#flat { display: none; }
			#sharp { display: none; }
			.flat #flat { display: inline; }
			.sharp #sharp { display: inline; }
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
    </head>
        <body>
            <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper teal darken-2 z-depth-5">
          <a href="../profile.php" class="brand-logo" style="font-size:50px"><b class="amber-text text-accent-4">DO</b><b class="white-text">MUSIC</b></a>
        <ul class="right hide-on-med-and-down" >
            <li><a href="../profile.php" class="btn waves-effect waves-light white-text" style="margin-top: 12px;">Home</a></li>
          <li><a href="../logout.php" class="btn waves-effect waves-light white-text" style="margin-top: 12px;">Logout</a></li>
        </ul>
      </div>
    </nav>
  </div>
            <div class="container">
        <a class="button-collapse top-nav full hide-on-large-only" data-activates="nav-mobile" href="#"></a>
        </div>
        <div>
        <ul id="nav-mobile" class="side-nav fixed teal darken-2 z-depth-1" style="margin-top: 64px;">
            <li style="margin-top:18px"><a href="../userstudiobox.php" ><span class=" white-text text-darken-4" style="margin: 15px;">Studio Box<span></a></li>
            <li class="divider"></li>
                    <li style="margin-top:18px"><a href="studiobox/recordstudio/userrecord.php"><span class=" white-text text-darken-4" style="margin: 15px;">Recording</span></a></li>
                    <li><a href="../studiobox/userstudio.php"><span class=" white-text text-darken-4" style="margin: 15px;">Editing</span></a></li>
                    <li><a href="../pitch/pitchdet.php"><span class=" white-text text-darken-4" style="margin: 15px;">Pitch Detect</span></a></li>
                <li><a href="../metronome/tempo.php"><span class=" white-text text-darken-4" style="margin: 15px;">Metronome</span></a></li>
                <li><a href="../userstudioupload.php"><span class=" white-text text-darken-4" style="margin: 15px;">Uploading</span></a></li>
        </ul>
        </div> 
      <section id="main-content">
          <section class="wrapper">            
            
           </div>  
				</div>
				
              </div>
		<script src="js/pitchdetect.js"></script>
		<div style="margin: 42px 799px;">
		<p>
			<button class="btn waves-effect waves-light white-text" onclick="toggleLiveInput()">Click me</button>
			<button class="btn waves-effect waves-light white-text" onclick="toggleOscillator()">use oscillator</button>
			<!--<button onclick="updatePitch(0);">sample</button>-->
		</p>

		<div id="detector" class="vague card z-depth-1" style="margin: 10px 13px;">
			<div class="pitch"><span id="pitch">--</span>Hz</div>
			<div class="note"><span id="note">--</span></div>   
			<canvas id="output" width=300 height=42></canvas>
			<div id="detune"><span id="detune_amt">--</span><span id="flat">cents &#9837;</span><span id="sharp">cents &#9839;</span></div>
		</div>
        </div>
		<script type="text/javascript">

			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-35593052-1']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</body>
</html>
