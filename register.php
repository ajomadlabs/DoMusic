<?php
$ERR4="";$ERR5="";$ERR6="";$ERR7="";$pn="nil";$pad="nil";$pp="nil";$pc="nil";$pdp="nil";$pnc="nil";$pt="nil";
$con=mysqli_connect("localhost","root","","domusic");
if(!$con) {
    die("Connection Failed:" .mysqli_connect_error());
}
if($_SERVER["REQUEST_METHOD"]=="POST" && !empty($_POST["email"]))
{
    $em=$_POST["email"];
    $pn=$_POST["fname"];
    $un=$_POST["username"];
    $pd=$_POST["password"];
    $m=$_POST["gen"];
    $cpd=$_POST["passwordagain"];
    $e_mail="select p_email from profile where p_email='$em'";
    $e_uname="select p_uname from profile where p_uname='$un'";
    $ret_email=mysqli_query($con,$e_mail);
    $c1=mysqli_num_rows($ret_email);
    $f=1;
    if($c1==1){
        $ERR6="This Email Is Already Registered";
    }
    $ret_uname=mysqli_query($con,$e_uname);
    $c2=mysqli_num_rows($ret_uname);
    $f2=1;
    if($c2==1){
        $ERR6="This Username Is Already Taken";
    }
    else if($pd==$cpd and $c1<1 and $c2<1)
    {
            $sql="INSERT INTO profile VALUES ('$un','$em','$pd','$pn','$pad','$pp','$pc','$pdp','$pnc','$m','$pt')";
            $retval=mysqli_query($con,$sql);
            header("Location: login1.php");
    }
    else {
        $ERR4="Your Password Dosent Match";
    }
}
else {
        $ERR5="*FILL IN DETAILS*";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Signup-DOMUSIC</title>
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
  <div class="navbar-fixed" style="margin-left: -695px; margin-top:-130px;">
    <nav>
      <div class="nav-wrapper teal darken-2 z-depth-5">
          <a href="home.php" class="brand-logo"><b class="amber-text text-accent-4">DO</b><b>MUSIC</b></a>
      </div>
    </nav>
  </div>

  <div id="login-page" class="row">
    <div class="col s12 z-depth-5 card-panel" style="width: 500px; margin-left:31px; margin-top: 36px;">
      <form class="login-form" action="" method="post">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="" alt="" class="responsive-img valign profile-image-login">
            <p class="center login-form-text"style="font-size: 30px;"><b class="amber-text text-accent-4">DO</b><b class="teal-text text-darken-2">MUSIC</b></p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12" style="margin-top:5px;">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" type="text" class="validate" name="username">
            <label for="username" class="center-align"style="margin-top: -20px;">Username</label>
          </div>
            <div class="row margin">
          <div class="input-field col s12" style="margin-top:5px;">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="fname" type="text" class="validate" name="fname">
            <label for="fname" class="center-align"style="margin-top: -20px;">Name</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12" style="margin-top:5px;">
            <i class="mdi-communication-email prefix"></i>
            <input id="email" name="email" type="email" class="validate">
            <label for="email" data-error="wrong" data-success="right" class="center-align"style="margin-top: -20px;">Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12" style="margin-top:5px;">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" name="password" type="password" class="validate">
            <label for="password"style="margin-top: -20px;">Password</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12" style="margin-top:5px;">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password-again" type="password" name="passwordagain">
            <label for="password-again"style="margin-top: -20px;">Re-type password</label>
          </div>
        </div>
       <div class="row margin">
          <div class="input-field col s12 " style="margin-top:5px;margin-left:30px;">
            <input type="radio" id="male" name="gen" />
            <label for="male">Male</label>
            <input type="radio" id="female" name="gen" />
            <label for="female">Female</label>
          </div>
        </div>  
        <div class="row">
          <div class="input-field col s12" style="margin-left:154px;">
            <input type="submit" class="btn waves-effect waves-light col s4" value="SIGN UP">
          </div>
        <div class="row">
          <div class="input-field col s12">
            <?php
            if(empty($f))
            {
                 echo "<h6 class='red-text text-darken-4'>$ERR5</h6>";
            }
            echo "<h6 class='red-text text-darken-4'>$ERR4</h6>";
            echo "<h6 class='red-text text-darken-4'>$ERR6</h6>";
            echo "<h6 class='red-text text-darken-4'>$ERR7</h6>";
            ?>
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">Already have an account? <a href="login1.php">Login</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>

  <center>
<!-- Post Page - Responsive -->

<script>

</script>
</center>

  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!--materialize js-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>

</body>

</html>