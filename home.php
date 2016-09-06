<?php
$i="";$name="";
$con=mysqli_connect("localhost","root","","domusic");
if(!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
else{
    $sql="select * from topten";
    $retval=mysqli_query($con,$sql);
    $count=mysqli_num_rows($retval);
    $c=$count;
    $i=0;
    if($count>=1){
    $i=0;
    while($row=mysqli_fetch_assoc($retval) and $count!=0){
        $sn[$i]=$row["sname"];
        $sf[$i]=$row["sfile"];
        $sa[$i]=$row["sartist"];
        $si[$i]=$row["simg"];
        $count=$count-1;
        $i=$i+1;
    }
    }
    else{
        $name="NO RESULT FOUND";   
    }
}
?>
<?php
$i="";$name="";
$con=mysqli_connect("localhost","root","","domusic");
if(!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
else{
    $sql="select * from toptenartist";
    $retval=mysqli_query($con,$sql);
    $count=mysqli_num_rows($retval);
    $c=$count;
    $i=0;
    if($count>=1){
    $i=0;
    while($row=mysqli_fetch_assoc($retval) and $count!=0){
        $sna[$i]=$row["aname"];
        $sar[$i]=$row["asong"];
        $sim[$i]=$row["aimg"];
        $count=$count-1;
        $i=$i+1;
    }
    }
    else{
        $name="NO RESULT FOUND";   
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.css">
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
    <body class="">
   <!--horizontal navigation bar-->     
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper teal darken-2 z-depth-5">
          <a href="#nav_btm_bg" class="brand-logo"><b class="amber-text text-accent-4">DO</b><b>MUSIC</b></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="search.php">Search</a></li>
            <li><a href="login1.php ">Login</a></li>
        </ul>
      </div>
    </nav>
  </div>
        <!--first div for background-->
        <div id="nav_btm_bg" style="margin-left:288px;">
            <h1 class=" teal-text text-darken-2" style="margin-top:13px;font-size:90px;padding-top:235px;margin-left:-327px"><center><b class="amber-text text-accent-4">DO</b><b class="teal-text text-darken-2">MUSIC</b></center></h1>
            <h4 class="teal-text text-darken-1"style="margin-top:-46px;margin-left:-323px;"><center>Make music, get creative</center></h4>
            
        <!--audio player division-->
         <div class="row">
        <div class="col s12">
          <div class="card teal darken-3 z-depth-5" style="width: 362px; margin-left: 449px;">
            <div id="container" class="amber accent-4" style="height: 401px; width: 347px; margin-top: 0px;">
	<div id="audio-image">
		<img class="cover" />
	</div>
	<div id="audio-player" class="teal-text text-darken-2">
		<div id="audio-info">
			<span class="artist"></span> - <span class="title"></span>
		</div>
		 <input id="volume" type="range" min="0" max="10" value="5" />
		 <br>
		 <div id="buttons">
		 <span>
			<button id="prev"></button>
			<button id="play"></button>
			<button id="pause"></button>
			<button id="stop"></button>
			<button id="next"></button>
			</span>
		 </div>
		 <div class="clearfix"></div>
		 <div id="tracker">
			<div id="progressBar">
				<span id="progress"></span>
			</div>
		 </div>
		 <div class="clearfix"></div>
		 <ul id="playlist" class="hidden amber accent-4">
             <?php 
                if($i>=1){
             while($i!=0){
             $i=$i-1;
			echo "<li song='$sf[$i]' cover='$si[$i]' artist='$sa[$i]'>$sn[$i]</li>";
             }
                }
                else{
                    echo $name;
                }
                ?>
		</ul>
	</div>

</div>
            </div>
             </div>
            </div>
        
            
            <!--Featured songs-->
         <div class="row" id="late" style="padding-top: 49px;margin-right: -142px;">
            <h3><b class="teal-text text-darken-4" style="margin-left:14px">Featured Artists</b></h3>
        <div class="col s3 m3">
          <div class="card small teal darken-3 z-depth-5">
              <div class="card-image">
              <img src="<?php echo $sim[0];?>">
              <span class="card-title amber-text text-accent-4"><?php echo $sna[0];?></span>
            </div>
            <div class="card-content white-text">
              <p><?php echo $sar[0];?>:-</p>
            </div>
            </div>
             </div>
                 <div class="col s3 m3">
          <div class="card small teal darken-3 z-depth-5">
              <div class="card-image">
              <img src="<?php echo $sim[1];?>" style="margin-top: -50px;">
              <span class="card-title amber-text text-accent-4"><?php echo $sna[1];?></span>
            </div>
            <div class="card-content whit       e-text">
              <p><?php echo $sar[1];?>:-</p>
            </div>
            </div>
             </div>
                         <div class="col s3 m3">
          <div class="card small teal darken-3 z-depth-5">
              <div class="card-image">
              <img src="<?php echo $sim[2];?>" style="margin-top: -15px;">
              <span class="card-title amber-text text-accent-4"><?php echo $sna[2];?></span>
            </div>
            <div class="card-content white-text">
              <p><?php echo $sar[2];?>:-</p>
            </div>
            </div>
             </div>
            </div>
             <div class="row" id="late" style="margin-right: -142px;">
        <div class="col s3 m3">
          <div class="card small teal darken-3 z-depth-5">
              <div class="card-image">
              <img src="<?php echo $sim[3];?>" style="margin-top: -15px;">
              <span class="card-title amber-text text-accent-4"><?php echo $sna[3];?></span>
            </div>
            <div class="card-content white-text">
              <p><?php echo $sar[3];?>:-</p>
            </div>
            </div>
             </div>
                 <div class="col s3 m3">
          <div class="card small teal darken-3 z-depth-5">
              <div class="card-image">
              <img src="<?php echo $sim[4];?>" style="margin-top: -58px;">
              <span class="card-title amber-text text-accent-4"><?php echo $sna[4];?></span>
            </div>
            <div class="card-content white-text">
              <p><?php echo $sar[4];?>:-</p>
            </div>
            </div>
             </div>
                         <div class="col s3 m3">
          <div class="card small teal darken-3 z-depth-5">
              <div class="card-image">
              <img src="<?php echo $sim[5];?>" style="margin-top: -102px;">
              <span class="card-title amber-text text-accent-4"><?php echo $sna[5];?></span>
            </div>
            <div class="card-content white-text">
              <p><?php echo $sar[5];?>:-</p>
            </div>
            </div>
             </div>
            </div>
               <div class="row" id="late" style="margin-right: -142px;">
        <div class="col s3 m3">
          <div class="card small teal darken-3 z-depth-5">
              <div class="card-image">
              <img src="<?php echo $sim[6];?>" style="margin-top:-56px">
              <span class="card-title amber-text text-accent-4"><?php echo $sna[6];?></span>
            </div>
            <div class="card-content white-text">
              <p><?php echo $sar[6];?>:-</p>
            </div>
            </div>
             </div>
                 <div class="col s3 m3">
          <div class="card small teal darken-3 z-depth-5">
              <div class="card-image">
              <img src="<?php echo $sim[7];?>" style="margin-top: -58px;">
              <span class="card-title amber-text text-accent-4"><?php echo $sna[7];?></span>
            </div>
            <div class="card-content white-text">
              <p><?php echo $sar[7];?>:-</p>
            </div>
            </div>
             </div>
                <div class="col s3 m3">
          <div class="card small teal darken-3 z-depth-5">
              <div class="card-image">
              <img src="<?php echo $sim[8];?>" style="margin-top: -68px;">
              <span class="card-title amber-text text-accent-4"><?php echo $sna[8];?></span>
            </div>
            <div class="card-content white-text">
              <p><?php echo $sar[8];?></p>
            </div>
            </div>
             </div>
            </div>
             <div class="row" id="late" style="margin-right: -142px;">
        <div class="col s3 m3">
          <div class="card small teal darken-3 z-depth-5">
              <div class="card-image">
              <img src="<?php echo $sim[9];?>" style="margin-top:-56px">
              <span class="card-title amber-text text-accent-4"><?php echo $sna[9];?></span>
            </div>
            <div class="card-content white-text">
              <p><?php echo $sar[9];?></p>
            </div>
            </div>
             </div>
                 <div class="col s3 m3">
          <div class="card small teal darken-3 z-depth-5">
              <div class="card-image">
              <img src="<?php echo $sim[10];?>" style="margin-top: -98px;">
              <span class="card-title amber-text text-accent-4"><?php echo $sna[10];?></span>
            </div>
            <div class="card-content white-text">
              <p><?php echo $sar[10];?></p>
            </div>
            </div>
             </div>
            </div>
        <div class="row" id="feat" style="margin-right: -142px;">
            <h3><b class="teal-text text-darken-4" style="margin-left:11px;">Highlights</b></h3>
        <div class="col s3 m3">
          <div class="card teal darken-3 z-depth-5">
              <div class="card-image">
              <img src="css/images%20(13).jpg" style="height: 338px;">
              <span class="card-title amber-text text-accent-4">Record</span>
            </div>
            <div class="card-content white-text">
              <p>DO MUSIC lets you record your voice and make a new song or a cover. It includes inbuilt metronome, which gets you the tempo for your song. This mainly aims to promote the budding artist with great voice to get their voice reach out the world. </p>
            </div>
            <div class="card-action">
              <a href="register.php" class="waves-effect waves-light btn amber-text text-accent-4 teal darken-2">Sign Up</a>
            </div>
          </div>
        </div>
        <div class="col s3 m3">
          <div class="card teal darken-3 z-depth-5">
              <div class="card-image">
              <img src="css/images%20(8).jpg" style="height:339px">
              <span class="card-title amber-text text-accent-4">Edit</span>
            </div>
            <div class="card-content white-text">
              <p>DO MUSIC lets you to have your own studio online.This mainly aims to help the users to edit the song that they have created.This help the users to detect their pitch and even get their musical notes for the music.
</p>
            </div>
            <div class="card-action" style="margin: 20px;">
              <a href="register.php" class="waves-effect waves-light btn amber-text text-accent-4 teal darken-2">Sign Up</a>
            </div>
          </div>
        </div>
        <div class="col s3 m3"style="width: 470px;">
          <div class="card teal darken-3 z-depth-5">
              <div class="card-image">
              <img src="css/images%20(15).jpg" style="height: 338px;">
              <span class="card-title amber-text text-accent-4">Publish</span>
            </div>
            <div class="card-content white-text ">
              <p>DO MUSIC lets you to publish your songs for the world to listen.This also provides an unique feature exclusively for the users to meet well known music artist on the basis of the ratings for the users song. </p>
            </div>
            <div class="card-action" style="margin: 20px;">
              <a href="register.php" class="waves-effect waves-light btn amber-text text-accent-4 teal darken-2">Sign Up</a>
            </div>
          </div>
        </div>
      </div>
    
              <footer class="page-footer white darken-4" style="margin-left:-292px" id="foot">
          <div class="container">
            <div class="row">
            </div>
          </div>
          <div class="footer-copyright" style="width:1909px;">
            <div class="container">
                <center class="teal-text text-darken-3" style="margin-left:-42px"><b>DOMUSIC © 2016</b></center>  
            </div>
          </div>
        </footer>
            
        
        
 
            
   
          
        
        <!-- importing javascript needed -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js">
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js">         </script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/audiojquery.js"></script>
<script src="js/audiomain.js"></script>
    </body>