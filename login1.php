<?php
 $ERR="";$ER1="";$ER2="";
$con=mysqli_connect("localhost","root","","domusic");
if(!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
if(!empty($_POST["email"]))
{
    $un=$_POST["email"];
    $pd=$_POST["password"];
    $sql="select * from profile where p_email='$un' and p_password='$pd'";
    $e_mail="select p_email from profile where p_email='$un'";
    $e_password="select p_password from profile where p_password='$pd'";
    $retval=mysqli_query($con,$sql);
    $count=mysqli_num_rows($retval);
    if($count==1){
        $flag=1;
        session_start();
        $_SESSION["email"]=$un;
        header("Location: profile.php"); 
        exit();
    }
else{
    $ERR="LOGIN FAILED";
}
    $ret_email=mysqli_query($con,$e_mail);
    $c1=mysqli_num_rows($ret_email);
    if($c1==1){
        $f1=1;
    }
    else{
        $ER1="Invalid Email";
    }
    $ret_pass=mysqli_query($con,$e_password);
    $c2=mysqli_num_rows($ret_pass);
    if($c2==1){
        $f2=1;
    }
    else{
        $ER2="Password Doesnt Match";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login-DOMUSIC</title>
  <!-- CORE CSS-->

  <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

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
    background-image: url(css/.jpg)
}
.margin {
  margin: 0 !important;
}
</style>
  
</head>

<body class="white">
  <div class="navbar-fixed" style="margin-left: -699px;margin-top:-251px;">
    <nav>
      <div class="nav-wrapper teal darken-2 z-depth-5">
          <a href="home.php" class="brand-logo"><b class="amber-text text-accent-4">DO</b><b>MUSIC</b></a>
      </div>
    </nav>
  </div>

  <div id="login-page" class="row" style="margin-top: 125px;margin-left:-40px;">
    <div class="col s12 z-depth-5 card-panel" style="width: 500px; margin-left:62px; margin-top: -54px;">
      <form class="login-form" action="" method="post">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="" alt="" class="responsive-img valign profile-image-login">
              <p class="center login-form-text"style="font-size: 30px;"><b class="amber-text text-accent-4">DO</b><b class="teal-text text-darken-2" >MUSIC</b></p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input class="validate" id="email" name="email" type="email">
            <label for="email" data-error="wrong" data-success="right" class="center-align"style="margin-top: -20px;">Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" name="password" type="password">
            <label for="password"style="margin-top: -20px;">Password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input type="submit" class="btn waves-effect waves-light col s4" style="margin-left:152px;margin-top:54px;" value="LOGIN">
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <?php
            if(empty($flag)){
            echo "<h6 class='red-text text-darken-4'>$ERR</h6>";}
            if(empty($f1)){echo "<h6 class='red-text text-darken-4'>$ER1</h6>";}
            if(empty($f2)){echo "<h6 class='red-text text-darken-4'>$ER2</h6>";}?>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="register.php">Register Now!</a></p>
          </div>         
        </div>

      </form>
    </div>
  </div>




  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!--materialize js-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>

</body>

</html>