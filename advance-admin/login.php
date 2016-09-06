<?php
session_start();
$flag=0;
    $con=mysqli_connect("localhost","root","","domusic");
if(!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
if(!empty($_POST["email"]))
{
    $un=$_POST["email"];
    $pd=$_POST["password"];
    $sql="select * from admin_login where email='$un' and password='$pd'";
    $retval=mysqli_query($con,$sql);
    $count=mysqli_num_rows($retval);
    if($count==1){
        $_SESSION["email"]=$un;
        header("Location: admin.php"); 
        exit();
    }
    else
    {
        $flag=1;}
}
else {
        $flag=1;
    }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="Do music pages/DOMUSICad.jpg" />
            </div>
        </div>
         <div class="row ">
               
                <div style="padding-left: 500px; width: 1000px;">
                           
                            
                                <form action="" method="post">
                                    <hr />
                                    
                                    <h3 style="color:#54879f;">Admin Login</h3>
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="email" class="form-control" placeholder="Your Username " />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="password" class="form-control"  placeholder="Your Password" />
                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline" style="color:#54879f;">
                                                <input type="checkbox" /> Remember me
                                            </label>
                                        </div>
                                        <input type="submit" class="btn btn-primary " value="LOGIN">
                                    <hr />
                                    
                                    </form>
                    
                            </div>
             
        </div>
    

</body>
</html>
