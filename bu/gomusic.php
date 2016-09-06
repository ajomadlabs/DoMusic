<?php
$con=mysqli_connect("localhost","root","","domusic");
if(!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $un=$_POST["search"];
    $n=$un[0];
    $sql="select * from song where sname like '$un%'";
    $retval=mysqli_query($con,$sql);
    $count=mysqli_num_rows($retval);
    if($count>=1){
    session_start();
        if(isset($_SESSION["sname"])){
            unset($_SESSION["sname"]);}
        else{
         unset($_SESSION["sname"]);
         $_SESSION["sname"]=$un;
         header("Location: search1.php"); 
         exit();}
    }
        else{
        unset($_SESSION["sname"]);
         $_SESSION["sname"]=$un;
         header("Location: search1.php"); 
         exit();}
    
}
    else{
        $name="ERROR";
    }
?>
<!DOCTYPE html>
<html lang="us-en">
    <head>
        <meta charset="UTF-8">
        <meta name="keyword" content="music,sing,song,english,hindi,tamil,malayalam,edit,
                                    record,studio,pitch,tempo,metronome,publish,composer,
                                    playlist,studioengine,sound,plugin,soundshop,karoke,new
                                    song,upload,freedownload,pay,musicsheet,guitar,piano,
                                    violin,strings,tabla,musicplayer,vedioplayer">
        <meta name="description" content="DO MUSIC,PLAY MUSIC,ENJOY MUSIC,EDIT MUSIC 
                                          AND PUBLISH LET THE WORLD LISTEN">
        <meta name="author" content="ajo john mathai,anju mathew,abhijith m d,ashna ann babu">
        <link rel="stylesheet" type="text/css" href="css/domusic.css">
        <title>DO MUSIC</title>
        <style>
        a {
            color: white;
            text-decoration: none;
        }
        </style>
    </head>
    <body id="mainpage">
        <div id="nav1">
                <button id="english_design" type="button" style="font-family:Ravie;">ENGLISH</button>
                <button id="hindi_design" type="button" style="font-family:Ravie;">HINDI</button>
                <button id="malayalam_design" type="button" style="font-family:Ravie;">MALAYALAM</button>
                <button id="hindi_design" type="button" style="font-family:Ravie;">TAMIL</button>
            <div id="search_text">
            <form action="" method="post">
                <input type="text" id="find" name="search" title="DOMUSIC" style="font-family:Ravie;" placeholder="Domusic...">
            </form>
                <a href="homepage.html"><button id="home_design" type="button" style="font-family:Ravie;">HOME</button></a>
        </div>
        </div>
        
    </body>
</html>