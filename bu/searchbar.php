<?php
  session_start();
$con=mysqli_connect("localhost","root","","domusic");
if(!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
    $un= $_SESSION["sname"];
    $n=$un[0];
    $sql="select * from song where sname like '$un%'";
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
        $count=$count-1;
        $i=$i+1;
    }
    }
    else{
        $name="NO RESULT FOUND";   
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Search-DOMUSIC</title>
  <!-- CORE CSS-->

  <link rel="stylesheet" href="css/materialize.min.css">

<style type="text/css">
html,
body {
    height: 100%;
}
html {
    display: table;
    margin: auto;
}
body {
    display: table-cell;
    vertical-align: middle;
    background-image: url(css/Acoustic-Guitar-Desktop-HD-Wallpapers.jpg)
}
.margin {
  margin: 0 !important;
}
    audio{
        width:460px;}
</style>
  
</head>
<body class="white">
    <nav class="grey darken-1"style="height: 90px; width: 10000px;opacity:0.3;margin-top:-388px;">
    <div class="nav-wrapper">
        <a href="welcome.html" style="left: 10px; font-family: Stencil; font-size: 25px; top: 13px; opacity=1.4" class="waves-effect waves-light black btn-large white-text text-darken-4">DOMUSIC</a>
        <a href="gomusic.php" style="left: 10px; font-family: Stencil; font-size: 25px; top: 13px; opacity=1.4" class="waves-effect waves-light black btn-large white-text text-darken-4">GOMUSIC</a></div>
  </nav>
<div class="col s12 z-depth-12 card-panel" style="width: 500px; margin-left: 500px; margin-top: 70px; opacity: 0.7;height:200px">
    <?php
        $k=$i;
        if($i>=1){
        while($i!=0){
             $i=$i-1;
            echo "<h5>$sn[$i]-$sc[$i]</h5>";
            echo "<audio src='$src[$i]' controls preload='auto'></audio>";
        }
        }
        else{
            echo $name;}
    ?></div>
    </body>
</html>