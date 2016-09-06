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
    <title>Site Details</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!--PAGE LEVELC STYLES-->
    <link href="assets/css/invoice.css" rel="stylesheet" />
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
     
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Site-Details </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                       <div >
     
      <div class="row pad-top-botm ">
         <div class="col-lg-6 col-md-6 col-sm-6 "style="width: 25%;">
            <img src="Do music pages/DOMUSIC.jpg" /> 
         </div>
          <p>DOMusic is a unique platform to play, enjoy and share the world of music. It provides a seamless way to get the right music and the latest news in music. Also helps to record and edit on air 

Our features include live recording, Pitch detecting technology, Tempo Detector, Independent playlist, Mixing platform and Musical search.
</p>
          <div class="col-lg-6 col-md-6 col-sm-6">
            
               <strong>   Do Music</strong>
              <br />
                   Group: 1
              <br />
                  Mini Project
              <br />
                  Amal Jyothi College
              
         </div>
     </div>
     <div  class="row text-center contact-info">
         <div class="col-lg-12 col-md-12 col-sm-12">
             <hr />
             <span>
                 <strong>Email : </strong>  domusic.com 
             </span>
             <span>
                 <strong>Call : </strong>  +91 - 123- 456- 7890 
             </span>
              <span>
                 <strong>Fax : </strong>  +012980-908- 890 
             </span>
             <hr />
         </div>
     </div>
     <div  class="row pad-top-botm client-info">
         <div class="col-lg-6 col-md-6 col-sm-6">
         <h4>  <strong>Admin Information</strong></h4>
             Ajo John Mathai
             <br />
                  Anju Mathew
              <br />
                 Abhijith M D
             <br />
             Ashna Ann Babu
              <br />
         </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            
               <h4>  <strong>Guide</strong></h4>
            <b>Prof. Manoj T Joy </b>
              <br />
               HOD CS Dept.
              <br />
         </div>
     </div>
 </div>
                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
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
