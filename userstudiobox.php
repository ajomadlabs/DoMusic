<?php
session_start();
$i="";$name="";$f=0;
$con=mysqli_connect("localhost","root","","domusic");
if(!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
    $un=$_SESSION["email"];
        if(!$_SESSION["email"]){
    header("Location: error.html");
    }
    $sql="select * from studio";
    $retval=mysqli_query($con,$sql);
    $count=mysqli_num_rows($retval);
    $c=$count;
    $i=0;
    if($count>=1){
    $i=0;
    while($row=mysqli_fetch_assoc($retval) and $count!=0){
        $src[$i]=$row["stsng"];
        $sn[$i]=ucfirst($row["stname"]);
        $count=$count-1;
        $i=$i+1;
    } 
    }
    if($_SERVER["REQUEST_METHOD"]== "POST"){
    $un= $_POST["sear"];
    $n=$un[0];
    $sql="select * from studio where stname like '$un%'";
    $retval=mysqli_query($con,$sql);
    $count=mysqli_num_rows($retval);
    $c=$count;
    $i=0;
    if($count>=1){
    $i=0;
    while($row=mysqli_fetch_assoc($retval) and $count!=0){
        $src[$i]=$row["stsng"];
        $sn[$i]=ucfirst($row["stname"]);
        $count=$count-1;
        $i=$i+1;
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
    </style>
    <body>
       <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper teal darken-2 z-depth-1">
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
        <div class="input-field z-depth-1">
          <input class="teal-text text-darken-4" id="search" type="search" required name="sear" style="margin-top:-94px">
            <label for="search" class="teal-text text-darken-4"><i class="fa fa-2x fa-search teal-text " style="margin: -6px 9px;"></i></label>
        </div>
      </form>
    </div>
    </nav> 
                </li>
            <li style="margin-top:18px"><a href="userstudiobox.php" ><i class="fa fa-2x fa-desktop  white-text text-darken-4"></i><span class=" white-text text-darken-4" style="margin: 15px;">Studio Box<span></a></li>
            <li class="divider"></li>
                    <li style="margin-top:18px"><a href="studiobox/recordstudio/userrecord.php"><i class="fa fa-2x fa-microphone  white-text text-darken-4"></i><span class=" white-text text-darken-4" style="margin: 15px;">Recording</span></a></li>
                    <li><a href="studiobox/userstudio.php"><i class="fa fa-2x fa-tasks white-text text-darken-4"></i><span class=" white-text text-darken-4" style="margin: 15px;">Editing</span></a></li>
                 <li><a href="pitch/pitchdet.php"><i class="fa fa-2x fa-signal  white-text text-darken-4"></i><span class=" white-text text-darken-4" style="margin: 15px;">Pitch Detect</span></a></li>
                <li><a href="metronome/tempo.php"><i class="fa fa-2x fa-bell  white-text text-darken-4"></i><span class=" white-text text-darken-4" style="margin: 15px;">Metronome</span></a></li>
                    <li><a href="userstudioupload.php"><i class="fa fa-2x fa-upload  white-text text-darken-4"></i><span class=" white-text text-darken-4" style="margin: 15px;">Uploading</span></a></li>
        </ul>
        </div> 
            <div class="navbar-fixed" style="margin:0px;">
                <nav class="white z-depth-1">
                <i class="fa fa-2x fa-folder-open  teal-text text-darken-4" style="margin:0px 250px"></i><span class=" teal-text text-darken-4" style="margin:0px -235px;font-size:30px">Recent Works</span>
                </nav>
            </div>
            <table style="margin: 0px 249px;" class="bordered highlight">
        <thead >
          <tr>
              <th data-field="name" style="padding-left:-54px">Song Name</th>
              <th data-field="artist">Play</th>
              <th data-field="genre">Download</th>
          </tr>
        </thead>
               <?php
                        while($i!=0){
                        $i=$i-1;
                        echo "<tr>";
                        echo "<td>$sn[$i]</td>";
                        echo "<td><audio src='$src[$i]' controls preload='auto'></audio></td>";
                        echo "<td><a href='download.php?filename=$src[$i]' class='waves-effect waves-light btn' download>DOWNLOAD ME</a></td>";
                        echo "</tr>";
                        }
                    ?>
                </table>
            </div>
            
         <!-- jQuery Library -->
 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!--materialize js-->
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