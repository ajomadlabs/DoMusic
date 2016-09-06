<?php
session_start();
$ERR="";$ER1="";$ER2="";$name="";$errp="";$p="";
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
            $su=$username;
            $sun=$name;
            $supic=$pp;
    
            if($_SERVER["REQUEST_METHOD"]== "POST" && !empty($_POST["spl"])){
            $sa=$_POST["PlaylistName"];
            $sn=$_POST["songname"];
            $sntwo=$_POST["songname2"];
            $snthree=$_POST["songname3"];
            $sqlo="select * sfile from song where sname='$sn'";
            $sqlt="select * sfile from song where sname='$sntwo'";
            $sqlth="select * sfile from song where sname='$snthree'";
            $reto=mysqli_query($con,$sqlo);
            $rett=mysqli_query($con,$sqlt);
            $retth=mysqli_query($con,$sqlth);
            $co=mysqli_num_rows($reto);
            $ct=mysqli_num_rows($rett);
            $ctth=mysqli_num_rows($retth);
            if($co>=1 && $ct>=1 && $ctth>=1){
            while($rowo=mysqli_fetch_assoc($reto)){
                $snosrc=$rowo["sfile"];
            }
            while($rowt=mysqli_fetch_assoc($rett)){
                $sntsrc=$rowt["sfile"];
            }
            while($rowth=mysqli_fetch_assoc($retth)){
                $snthsrc=$rowth["sfile"];
            }
            $sqlp="insert into playlist values('$p','$su','$sn','$sntwo','$snthree','$snosrc','$sntsrc','$snthsrc')";
            $retp=mysqli_query($con,$sqlp);
            }
            else{
                 $errp="Song Not found";}
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
            <li><a href="usermusicboxplaylist.php"><i class="fa fa-2x fa-headphones  white-text text-darken-4"></i><span class=" white-text text-darken-4" style="margin: 15px;">Playlist</span></a></li>
                    <li><a href="usersettings.php"><i class="fa fa-2x fa-cog  white-text text-darken-4"></i><span class=" white-text text-darken-4" style="margin: 15px;">Settings</span></a></li>
        
        </ul>
        </div> 
            <div class="navbar-fixed" style="margin:0px;">
                <nav class="white z-depth-5">
                <i class="fa fa-2x fa-headphones  teal-text text-darken-4" style="margin:0px 250px"></i><span class=" teal-text text-darken-4" style="margin:0px -235px;font-size:30px">My Playlist</span>
                </nav>
            </div>
            <div class="row" style="margin: 40px 279px;">
                 <button id="modal-open-button" class="btn btn-default teal darken-2"><i class="fa fa-2x fa-plus" style="margin: 2px 26px;"></i>ADD NEW</button>
            </div>
            <div class="row" style="margin: 40px 279px;">
                 <button class="btn btn-default teal darken-2"><i class="fa fa-2x fa-eye" style="margin: 2px 26px;height: 60px;"></i>VIEW PLAYLIST</button>
            </div>
            </div>
        <div id="popup-content" class="card teal darken-2 z-depth-5">
               <div style="margin: 0px 377px;">
                   <input id="modal-close-button" class="btn waves-effect waves-light white-text" type="button" value="Close" />
	</div>
            <div class="card-content white-text">
              <span class="card-title" style="margin: 55px 116px 0px -143px;"><i class="fa fa-2x fa-headphones" style="margin: 2px 124px;"></i>ADD PLAYLIST</span>
                     <form action="" method="post" enctype="multipart/form-data">
                         <div class="input-field col s12" style="margin-top:5px;">
                                <input id="PlaylistName" type="text" class="validate" name="PlaylistName">
                                <label for="PlaylistName" class="center-align"style="margin-top: -20px;">Playlist Name</label>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12" style="margin-top:5px;">
                                        <input id="songname" type="text" class="validate" name="songname">
                                        <label for="songname" class="center-align"style="margin-top: -20px;">Song One</label>
                                </div>
                                    </div>
                         <div class="row margin">
                                <div class="input-field col s12" style="margin-top:5px;">
                                        <input id="songname2" type="text" class="validate" name="songname2">
                                        <label for="songname2" class="center-align"style="margin-top: -20px;">Song Two</label>
                                </div>
                                    </div>
                         <div class="row margin">
                                <div class="input-field col s12" style="margin-top:5px;">
                                        <input id="songname3" type="text" class="validate" name="songname3">
                                        <label for="songname3" class="center-align"style="margin-top: -20px;">Song Three</label>
                                </div>
                                    </div>
                                <button type="submit" id="spl" name="spl" class="btn btn-danger" style="-30px -23px -55px">Save</button>
                            </form>
                                    </div>
            <div class="row">
            <?php echo $errp;?>
            </div>
	
</div>
<!-- Overlay background -->
<div id="overlay-bg"></div>
         <!-- jQuery Library -->
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