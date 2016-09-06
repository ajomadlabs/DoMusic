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
<html>
    <head>
        <meta charset="UTF-8">
        <!--<link rel="stylesheet" type="text/css" href="Do music pages/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="Do music pages/style.scss">-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="" media="all" rel="stylesheet" type="text/css">
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
        <title>ADMIN Table</title>    
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
                        <a href="#"><i class="fa fa-music "></i>Add/Remove<span class="fa arrow"></span></a>
                       <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-soundcloud"></i>Songs</a>
                                <ul class="nav nav-third-level">
                                     <li>
                                        <a href="songs.php"><i class="fa fa-plus "></i>Add</a>
                                    </li>
                                    <li>
                                        <a href="sd.php"><i class="fa fa-plus "></i>Remove</a>
                                    </li>
                                    

                                </ul>
                            </li>
                             <li>
                                <a href="#"><i class="fa fa-flash "></i>Top Songs</a>
                                 <ul class="nav nav-third-level">
                                     <li>
                                        <a href="topsongs.php"><i class="fa fa-plus "></i>Add </a>
                                    </li>
                                    <li>
                                        <a href="tsd.php"><i class="fa fa-plus "></i>Remove </a>
                                    </li>
                                    

                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-flash "></i>Top Videos</a>
                                 <ul class="nav nav-third-level">
                                <li>
                                <a href="videos.php"><i class="fa fa-plus "></i>Add</a>
                            </li>
                                     <li>
                                        <a href="tvd.php"><i class="fa fa-plus "></i>Remove</a>
                                    </li>
                                </ul>
                           </li>
                              <li>
                                  <a href="#"><i class="fa fa-flash "></i>Top Artist</a>
                                 <ul class="nav nav-third-level">
                                <li>
                                <a href="topten.php"><i class="fa fa-plus "></i> Add</a>
                            </li>
                                     <li>
                                <a href="tad.php"><i class="fa fa-key "></i>Remove</a>
                            </li>
                                     </ul>
                           </li>
                             <li>
                                 <a href="news.php"><i class="fa fa-plus "></i>News</a>
                    </li>
                     </ul>
                    <li>
                        <a href="tablead.php"><i class="fa fa-table "></i>Tables </a>
                        
                    </li>
                     
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Users<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                             <li>
                                <a href="userslist.php"><i class="fa fa-user "></i>Songs List</a>
                            </li>
                            <li>
                                <a href="#">Music box<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="songlist.php"><i class="fa fa-music "></i>Songs List</a>
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
                        <h1 class="page-head-line">Song List</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-6">
                  <!--   Song Table -->
                   <?php
$name="";
    $con=mysqli_connect("localhost","root","","domusic");
if(!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
else{
    $sql="select * from song";
    $retval=mysqli_query($con,$sql);
    $count=mysqli_num_rows($retval);
    $i=0
     while($row=mysqli_fetch_assoc($retval)){
        $sn[$i]=ucfirst($row["sname"]);
        $sc[$i]=ucfirst($row["scat"]);
        $count=$count-1;
        $i=$i+1;
    }
}
    
?>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <?php
                                    $k=$i;
                                    if($i>=1){
                            echo "<table class='table table-striped table-bordered table-hover'>
                                    <thead>
                                        <tr>
                                            <th>Song Name</th>
                                            <th>Category</th>
                                        </tr>
                                    </thead>";
                                    while($i!=0){
                                            $i=$i-1;
                                   echo "<tbody>
                                        <tr>
                                            <td>$sn[$i]</td>
                                            <td>$sc[$i]</td>
                                        </tr>";}
                                    echo "</tbody>
                                </table>";}
                                        ?>
                            </div>
                        </div>
                    </div>
                     <!-- End Table -->
                </div>
                
               
            </div>
                <!-- /. ROW  -->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
      <!-- /. FOOTER  -->
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