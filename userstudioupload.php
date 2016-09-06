<?php
session_start();
$i="";$name="";$f=0;$err="";
$ERR="";$ER1="";$ER2="";$name="";
$con=mysqli_connect("localhost","root","","domusic");
if(!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
 else{ 
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
if($_SERVER["REQUEST_METHOD"]== "POST" && !empty($_POST["save"]) && isset($_FILES["songfile"])){
            $sa=$_POST["songartist"];
            $sn=$_POST["songname"];
            $su=$username;
            $sun=$name;
            $supic=$pp;
            $tmp_name=$_FILES["songfile"]["tmp_name"];
            $temp = explode(".", $_FILES["songfile"]["name"]);
            $newfilename = "song".$sn.'.' .end($temp);
            $path="studiosongs/$newfilename";
            $status=move_uploaded_file($_FILES["songfile"]["tmp_name"], "studiosongs/" . $newfilename);
            if($status==TRUE){
	        $sql="insert into studio values('$un','$sn','$sa','$path','$su','$sun','$supic')";
            $retval=mysqli_query($con,$sql);}
            else{
                    $err="File Has not been uploaded";
            }
 }
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
<link href='newui/fonts/fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='newui/fonts/fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
<link href="newui/css/font-awesome.css" rel='stylesheet' type='text/css'>
<!--//fonts-->
<!--moving-->
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
      
            <div class="container">
        <a class="button-collapse top-nav full hide-on-large-only" data-activates="nav-mobile" href="#"></a>
        </div>
        <div>
        <ul id="nav-mobile" class="side-nav fixed teal darken-2 z-depth-5" style="margin-top: 64px;">
                      <li>
                       <nav id="sea" style="width: 241px; margin-left: -15px;">
    <div class="nav-wrapper white " style="margin-top: 94px;">
      <form action="" method="post">
        <div class="input-field z-depth-5 ">
          <input class="teal-text text-darken-4" id="search" type="search" required name="sear" style="margin-top:-94px">
            <label for="search" class="teal-text text-darken-4"><i class="fa fa-2x fa-search teal-text " style="margin: -6px 9px;"></i></label>
        </div>
      </form>
    </div>
    </nav> 
                </li>
            <li style="margin-top:18px"><a href="usermusicboxsongs.php" ><i class="fa fa-2x fa-music  white-text text-darken-4"></i><span class=" white-text text-darken-4" style="margin: 15px;">Songs<span></a></li>
            <li class="divider"></li>
                    <li style="margin-top:18px"><a href="usermusicboxenglish.php"><i class="fa fa-2x fa-play-circle  white-text text-darken-4"></i><span class=" white-text text-darken-4" style="margin: 15px;">English</span></a></li>
                    <li><a href="usermusicboxhindi.php"><i class="fa fa-2x fa-play-circle white-text text-darken-4"></i><span class=" white-text text-darken-4" style="margin: 15px;">Hindi</span></a></li>
                    <li><a href="usermusicboxmalayalam.php"><i class="fa fa-2x fa-play-circle  white-text text-darken-4"></i><span class=" white-text text-darken-4" style="margin: 15px;">Malayalam</span></a></li>
             <li class="divider"></li>
                    <li><a href="usersettings.php"><i class="fa fa-2x fa-cog  white-text text-darken-4"></i><span class=" white-text text-darken-4" style="margin: 15px;">Settings</span></a></li>
        
        </ul>
        </div> 
  <div id="login-page" class="row">
    <div class="col s12 z-depth-5 card-panel" style="width: 500px; margin-left:496px; margin-top: 10px;">
      <form class="login-form" action="" method="post"  enctype="multipart/form-data">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="" alt="" class="responsive-img valign profile-image-login">
            <p class="center login-form-text"style="font-size: 30px;"><b class="amber-text text-accent-4">STUDIO</b><b class="teal-text text-darken-2">UPLOAD</b></p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12" style="margin-top:5px;">
            <input id="songname" type="text" class="validate" name="songname">
            <label for="songname" class="center-align"style="margin-top: -20px;">Song Name</label>
          </div>
            <div class="row margin">
          <div class="input-field col s12" style="margin-top:5px;">
            <input id="songartist" type="text" class="validate" name="songartist">
            <label for="songartist" class="center-align"style="margin-top: -20px;">Song Artist</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12" style="margin-top:5px;">
            <div class="file-field input-field">
                <div class="btn">
                <span>File</span>
                    <input type="file" id="songfile" name="songfile" multiple>
                </div>
                <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Upload Song">
                </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input type="submit" id="save" name="save" class="btn waves-effect waves-light col s12" value="Save">
          </div>
      </form>
            <div class="row">
                <?php echo $err;?>
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