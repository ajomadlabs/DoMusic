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
    <title>Profile Form</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES -->
    <link href="assets/css/bootstrap-fileupload.min.css" rel="stylesheet" />
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
                                <a href="form.html"><i class="fa fa-desktop "></i>Basic Form</a>
                            </li>
                             <li>
                                <a href="form-advance.html"><i class="fa fa-code "></i>User Profile Form</a>
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
      </div>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Profile Form</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-6">
                       <div class="panel panel-default">
                        <div class="panel-heading">
                           File Uploads
                        </div>
                        <div class="panel-body">
                   
                    <div class="form-group">
                        <label class="control-label col-lg-4">No Input</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <span class="btn btn-file btn-default">
                                    <span class="fileupload-new">Select file</span>
                                    <span class="fileupload-exists">Change</span>
                                    <input type="file">
                                </span>
                                <span class="fileupload-preview"></span>
                                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Image Upload</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Pre Defined Image</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="assets/img/demoUpload.jpg" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-warning"><strong>Notice!</strong> Image preview only works in IE10+, FF3.6+, Chrome6.0+ and Opera11.1+. In older browsers and Safari, the filename is shown instead.</div>
                    </div>
                           </div>
                        </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    <!-- /. WRAPPER  -->

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/js/bootstrap-fileupload.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
