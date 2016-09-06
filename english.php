<?php
$i="";$name="";
$con=mysqli_connect("localhost","root","","domusic");
if(!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $un= $_POST["sear"];
    $n=$un[0];
    $sql="select * from song where sname like '$un%' and scat='english'";
    $retval=mysqli_query($con,$sql);
    $count=mysqli_num_rows($retval);
    $c=$count;
    $i=0;
    if($count>=1){
    $i=0;
    while($row=mysqli_fetch_assoc($retval) and $count!=0){
        $src[$i]=$row["sfile"];
        $sn[$i]=ucfirst($row["sname"]);
        $sc[$i]=ucfirst($row["scat"]);
        $si[$i]=($row["simg"]);
        $sa[$i]=($row["sartist"]);
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
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
	
		<link rel="stylesheet" type="text/css" href="css/component.css" />
        <link rel="stylesheet"                                                         href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

<body>
     <!--horizontal navigation bar-->     
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper teal darken-2 z-depth-5">
          <a href="search.php" class="brand-logo"><b class="amber-text text-accent-4">DO</b><b>MUSIC</b></a>
        <ul class="right hide-on-med-and-down">
           <li><a href="egal.html">Image Box</a></li>
          <li><a href="#sea">Explore</a></li>
        </ul>
      </div>
    </nav>
  </div>    
    <!--search bar-->
    <nav id="sea" style="width: 614px; margin-left:638px;">
    <div class="nav-wrapper amber accent-4" style="margin-top: 94px;">
      <form action="" method="post">
        <div class="input-field z-depth-5">
          <input id="search" type="search" required name="sear">
            <label for="search" class="teal-text text-darken-4">Search</label>
          <i class="material-icons"></i>
        </div>
      </form>
    </div>
    </nav>
    
    <!--search results-->
    <div class="teal darken-3 amber-text text-accent-4" style="margin-top:100px;">
        <?php
        $k=$i;
        if($i>=1){
            echo "<h5><b><center class='amber-text text-accent-4'>SONGS</center></b></h5>";
              echo "<hr></hr>";
            echo "<table class='highlight centered responsive-table'>";
        echo "<thead>";
        echo "<tr>";
              echo "<th data-field='name'>Song Name</th>";
              echo "<th data-field='category'>Song Language</th>";
              echo "<th data-field='art'>Song Art</th>";
              echo "<th data-field='detail'>Song Artist</th>";
              echo "<th data-field='play'>Song Play</th>";
              echo "<th data-field='download'>Song Download</th>";
          echo "</tr>";
        echo "</thead>";
              echo "<tbody>";
        while($i!=0){
             $i=$i-1;
            echo "<tr>";
            echo "<td>$sn[$i]</td>";
            echo "<td>$sc[$i]</td>";
            echo "<td><img src='$si[$i]' width='50px' height='50px'></img></td>";
            echo "<td>$sa[$i]</td>";
            echo "<td><audio src='$src[$i]' controls preload='auto'></audio></td>";
            echo "<td><a href='download.php?filename=$src[$i]' class='waves-effect waves-light btn' download>DOWNLOAD ME</a></td>";
            echo "<tr></tr>";
        }
            echo "</tbody>";
      echo "</table>";
        }
        else{
            echo $name;}
        ?>
    </div>
    <?php
$i="";$name="";
$con=mysqli_connect("localhost","root","","domusic");
if(!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
else{
    $sql="select * from topsong where scat='english'";
    $retval=mysqli_query($con,$sql);
    $count=mysqli_num_rows($retval);
    $c=$count;
    $i=0;
    if($count>=1){
    $i=0;
    while($row=mysqli_fetch_assoc($retval) and $count!=0){
        $sna[$i]=ucfirst($row["sname"]);
        $sar[$i]=$row["sfile"];
        $sim[$i]=$row["simg"];
        $sart[$i]=$row["sartist"];
        $count=$count-1;
        $i=$i+1;
    }
    }
    else{
        $name="NO RESULT FOUND";   
    }
}
?>
    <div class="row" style="margin-left:244px;">
         <h3 style="margin-left: 95px; margin-top: 33px;"><b class="teal-text text-darken-4" style="margin-left:-92px;">Top Five </b></h3>
        <div class="col s2" style="width: 273px; margin-left: -11px;margin-top:49px;">
          <div class="card teal darken-4 z-depth-5">
              <div>
                <?php
                echo "<img src='$sim[0]' width='250px' height='157px'>";
                echo "<h5 class='amber-text text-accent-4'>$sna[0]</h5>";
                echo "<audio src='$sar[0]' controls preload loop class='black' style='width: 248px;'></audio>";
                    ?>
                  </img>
              </div>
            </div>
        </div>
        <div class="col s2" style=" width: 273px;margin-top:49px;">
          <div class="card teal darken-4 z-depth-5">
              <div>
                <?php
                echo "<img src='$sim[1]' width='250px'>";
                echo "<h5 class='amber-text text-accent-4'>$sna[1]</h5>";
                echo "<audio src='$sar[1]' controls preload loop class='black' style='width: 248px;'></audio>";
                ?>
                  </img>
              </div>
            </div>
        </div>
                <div class="col s2" style=" width: 273px;margin-top:49px;">
          <div class="card teal darken-4 z-depth-5">
              <div>
                <?php
                echo "<img src='$sim[2]' width='250px' height='157px'>";
                echo "<h5 class='amber-text text-accent-4'>$sna[2]</h5>";
                echo "<audio src='$sar[2]' controls preload loop class='black' style='width: 248px;'></audio>";
                    ?>
                  </img>
              </div>
            </div>
        </div>
                <div class="col s2" style=" width: 273px;margin-top:49px;">
          <div class="card teal darken-4 z-depth-5">
              <div>
                <?php
                echo "<img src='$sim[3]' width='250px' height='157px'>";
                echo "<h5 class='amber-text text-accent-4'>$sna[3]</h5>";
                echo "<audio src='$sar[3]' controls preload loop class='black' style='width: 248px;'></audio>";
                    ?>
                  </img>
              </div>
            </div>
        </div>
        <div class="col s2" style=" width: 273px;margin-top:49px;">
          <div class="card teal darken-4 z-depth-5">
              <div>
                <?php
                echo "<img src='$sim[4]' width='250px'  height='130px'>";
                echo "<h5 class='amber-text text-accent-4'>'$sna[4]'</h5>";
                echo "<audio src='$sar[4]' controls preload loop class='black' style='width: 248px;'></audio>";
                    ?>
                  </img>
              </div>
            </div>
        </div>
    </div>
<?php
$i="";$name="";
$con=mysqli_connect("localhost","root","","domusic");
if(!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
else{
    $sql="select * from topvideo where scat='english'";
    $retval=mysqli_query($con,$sql);
    $count=mysqli_num_rows($retval);
    $c=$count;
    $i=0;
    if($count>=1){
    $i=0;
    while($row=mysqli_fetch_assoc($retval) and $count!=0){
        $sna[$i]=ucfirst($row["sname"]);
        $sar[$i]=$row["sfile"];
        $sim[$i]=$row["simg"];
        $sart[$i]=$row["sartist"];
        $count=$count-1;
        $i=$i+1;
    }
    }
    else{
        $name="NO RESULT FOUND";   
    }
}
?>
<div id="video" class="row" style="margin-top: 204px;padding-top:100px;margin-left:244px;">
         <h3 style="margin-left: 95px; margin-top: 33px;"><b class="teal-text text-darken-4" style="margin-left:-100px;">Top Videos </b></h3>
 <?php
   echo "<video width='440' height='300' controls preload poster='$sim[0]' class='z-depth-5'>
  <source src='$sar[0]' type='video/mp4'>
</video> ";
   echo "<video width='440' height='300' controls preload poster='$sim[1]' class='z-depth-5'>
  <source src='$sar[1]' type='video/mp4'>
</video> ";
    echo "<video width='440' height='300' controls preload poster='$sim[2]' class='z-depth-5'>
  <source src='$sar[2]' type='video/mp4'>
</video> ";
?>
</div>
  
<div class="row" style="margin-top: 204px;margin-left:247px;">
<?php
echo "<video width='440' height='300' controls preload poster='$sim[3]' class='z-depth-5'>
  <source src='$sar[3]' type='video/mp4'>
</video> "; 
       echo "<video width='440' height='300' controls preload poster='$sim[4]' class='z-depth-5'>
  <source src='$sar[4]' type='video/mp4'>
</video> ";
    echo "<video width='440' height='300' controls preload poster='$sim[1]' class='z-depth-5'>
  <source src='$sar[1]' type='video/mp4'>
</video> ";
?>
</div>
    
    
    
    <!--importing javascript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js">
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js">         </script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/audiojquery.js"></script>
<script src="js/audiomain.js"></script>
    </body>
        </body>