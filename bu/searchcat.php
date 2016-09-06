<?php
  session_start();
$con=mysqli_connect("localhost","root","","domusic");
if(!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
    $un= $_SESSION["sname"];
    $n=$un[0];
    $sql="select * from song where sname like '$n%'";
    $retval=mysqli_query($con,$sql);
    $count=mysqli_num_rows($retval);
    $c=$count;
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