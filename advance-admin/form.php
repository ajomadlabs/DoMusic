<?php
session_start();
$name="";
    $con=mysqli_connect("localhost","root","","domusic");
if(!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
    $un=$_SESSION["email"];
    $sql="select * from admin_login where email='$un'";
    $retval=mysqli_query($con,$sql);
    $count=mysqli_num_rows($retval);
    if($count==1){
    while($row=mysqli_fetch_assoc($retval)){
        $name=$row["name"];
        $image=$row["dp"];
    }
    }
    else{
        $name="ERROR";
    }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignUp Form</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
        <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="height: 64px;">
            <div class="navbar-header">
               <strong style="padding-left: 10px; top: 45px; color: #428bca; font-size: 30px;">DoMusic Admin </strong>
            </div>

            <div class="header-right">

                <a href="message-task.php" class="btn btn-primary" title="Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="tasks.php" class="btn btn-primary" title="Tasks"><b>40 </b><i class="fa fa-tasks fa-2x"></i></a>
                <a href="login.php" class="btn btn-danger" title="Logout"><i class="fa fa-user fa-2x"></i></a>

            </div>
            
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation" style="top: 83px; opacity: 0.9;">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div" style="background-color: #263238;">
                            <img src="<?php echo $image;?>" style="width: 100px;" class="img-circle"/>

                            <div class="inner-text">
                                <?php echo $name; ?>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="admin.php"><i class="fa dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Home <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="invoice.php"><i class="fa fa-toggle-on"></i>Site Details</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bell "></i>Highlights</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-music "></i>Category<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="songs.php"><i class="fa fa-soundcloud"></i>Add/Remove Songs</a>
                            </li>
                            <li>
                                <a href="videos.php"><i class="fa fa-flash "></i>Add/Remove Videos</a>
                            </li>
                             <li>
                                <a href="news.php"><i class="fa fa-key "></i>Add/remove News</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="tablead.php"><i class="fa fa-table "></i>Tables </a>
                        
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-database "></i>Forms <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           
                             <li>
                                <a href="form.php"><i class="fa fa-desktop "></i>Basic Form</a>
                            </li>
                             <li>
                                <a href="form-advance.php"><i class="fa fa-code "></i>User Profile Form</a>
                            </li>
                             
                           
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Users<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-bicycle "></i>User News</a>
                            </li>
                             <li>
                                <a href="#"><i class="fa fa-user "></i>User List</a>
                            </li>
                            <li>
                                <a href="#">User-Studio<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#"><i class="fa fa-plus "></i>New-releases</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-comments-o "></i>Playlist</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                   
                </ul>
            </div>
          </nav>
    </div>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Registeration Form</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
<div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-danger">
                        <div class="panel-heading">
                           SIGNUP FORM
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                        
                                 <div class="form-group">
                                            <label>Enter Email</label>
                                            <input class="form-control" type="text">
                                     <p class="help-block">Help text here.</p>
                                        </div>
                                            <div class="form-group">
                                            <label>Enter Password</label>
                                            <input class="form-control" type="password">
                                     <p class="help-block">Help text here.</p>
                                        </div>
                                <div class="form-group">
                                            <label>Re Type Password </label>
                                            <input class="form-control" type="password">
                                     <p class="help-block">Help text here.</p>
                                        </div>
                                 
                                        <button type="submit" class="btn btn-danger">Register Now </button>

                                    </form>
                            </div>
                        </div>
                            </div>
        </div>
             <!--/.ROW-->
             
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
