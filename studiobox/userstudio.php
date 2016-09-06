<?php
session_start();
$ERR="";$ER1="";$ER2="";$name="";
$con=mysqli_connect("localhost","root","","domusic");
if(!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
    $un=$_SESSION["email"];
        if(!$_SESSION["email"]){
    header("Location: error.html");
    }
    $sql="select * from profile where p_email='$un'";
    $retval=mysqli_query($con,$sql);
    $count=mysqli_num_rows($retval);
    if($count==1){
    while($row=mysqli_fetch_assoc($retval)){
        $username=$row["p_uname"];
        $name=$row["p_name"];
        $pp=$row["p_dp"];
    }
    }
    else{
        $name="ERROR";
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $username;?>-STUDIO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
        #nav_bar{
            background-color: #00796b;
        }
    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../css/materialize.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="bootstrap/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="bootstrap/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="bootstrap/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="bootstrap/ico/apple-touch-icon-57-precomposed.png">
    <link href="../css/font-awesome.css" rel='stylesheet' type='text/css'>
  </head>
    <body onload="onDocumentLoaded()">
         <div class="navbar-fixed" style="margin: -61px 0px -36px;">
    <nav>
      <div class="nav-wrapper teal darken-2 z-depth-1">
          <a href="#" class="brand-logo" style="font-size:50px"><b class="amber-text text-accent-4">DO</b><b class="white-text">MUSIC</b></a>
        <ul class="right hide-on-med-and-down" >
            <li><a href="../profile.php" class="btn waves-effect teal waves-light teal-text" style="margin-top: 12px;"><i class="fa fa-2x fa-home" style="margin: -12px;"></i></a></li>
          <li><a href="../logout.php" class="btn waves-effect teal waves-light teal-text" style="margin-top: 12px;"><i class="fa fa-2x fa-power-off" style="margin: -12px;"></i></a></li>
        </ul>
      </div>
    </nav>
  </div>
        <div class="btn-group" style="right: -226px; margin-top: 38px;">
              <a class="btn btn-primary " onclick="$('#audioLayerControl')[0].copy();"><i class="icon-share icon-white"></i> Copy</a>
              <a class="btn btn-primary" onclick="$('#audioLayerControl')[0].paste();"><i class="icon-chevron-down icon-white"></i> Paste</a>
              <a class="btn btn-primary" onclick="$('#audioLayerControl')[0].cut();"><i class="icon-chevron-up icon-white"></i> Cut</a>
              <a class="btn btn-primary" onclick="$('#audioLayerControl')[0].crop();"><i class="icon-retweet icon-white"></i> Crop</a>
              <a class="btn btn-primary" onclick="$('#audioLayerControl')[0].del();" style="margin-right: 78px;"><i class="icon-remove icon-white"></i> Delete</a>
            </div>
       
        <div class="span2">
            <a style="position:absolute; bottom: 818px; right: 948px"  class="btn btn-primary pull-right" onclick="$('#audioLayerControl')[0].filterNormalize();">Normailize</a>
            <br>
        </div>
        <div class="span2">
            <a style="position:absolute; bottom: 818px; right: 828px"  class="btn btn-primary pull-right" onclick="$('#audioLayerControl')[0].filterSilence();">Silence</a>
            <br>
        </div>
        <div class="span2">
            <a style="position:absolute; bottom: 818px; right: 712px"  class="btn btn-primary pull-right" onclick="$('#audioLayerControl')[0].filterFadeIn();">Fade In</a>
            <br>
        </div>
        <div class="span2">
            <a style="position:absolute; bottom: 818px; right: 581px" class="btn btn-primary pull-right" onclick="$('#audioLayerControl')[0].filterFadeOut();">Fade Out</a>
            <br>
          </div>
        </div>
        <div class="span1">

        </div>
          <ul class="nav pull-right">
            <li><a data-toggle="modal" href="#helpAsModal"></a></li>
          </ul>
        </div>
      </div>
    </div>
<div class="container">
    <br>

      <div class="row">
        <div class="span8">
        
        </div>
      </div>
      <div class="row" style="margin-top: 23px; margin-left: -129px;">
           <div class="span4" style="padding: 0px -3px;">
          <div class="well">
            <div id="spectrum"></div>
          </div>
        <div class="span8" style="margin: -219px 374px;">
          <div class="well">
            <audioLayerControl id="audioLayerControl" title="CloudCompany.mp3" />
          </div>
            
        </div>
           <!--<div id="editor">
                <div id="editorbox">
                    <audioLayerControl id="audioLayerControl" title="CloudCompany.mp3" />
                </div>
            </div>-->
        </div>
      </div>
        <br>
      <div class="row" style="margin-top: 18px;">
        <div class="span4 offset4" style="margin-left: 285px;width: 770px;">
          <div class="progress progress-striped active">
            <div id="app-progress" class="bar" style="width: 0%;"></div>
          </div>
        </div>
      </div>  
           <div class="btn-group" style="margin: -5px 357px;">
                <a id="btn_play" class="btn btn-success btn-large" onclick="$('#audioLayerControl')[0].play()" rel="tooltip" title="first tooltip"><i class="icon-play icon-white"></i></a>
                <a id="btn_pause" class="btn btn-success btn-large disabled"><i class="icon-pause icon-white"></i></a>
                <a id="btn_stop" class="btn btn-success btn-large" onclick="$('#audioLayerControl')[0].stop()"><i class="icon-stop icon-white"></i></a>
                <a id="btn_loop" class="btn btn-warning btn-large" data-toggle="button" onclick="$('#audioLayerControl')[0].toggleLoop();" style="margin-right: 5px;"><i class="icon-repeat icon-white"></i></a>
                 <a class="btn btn-large btn-primary" onclick="$('#audioLayerControl')[0].save($('#savelink')[0]);"><i class="icon-fire"></i> Render</a>
                <a class="btn btn-large btn-success disabled" id="savelink" download="export.wav"><i class="icon-download"></i> Save</a>
            </div>

     <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery/js/jquery-1.7.2.js"></script>
    <script src="bootstrap/js/bootstrap-transition.js"></script>
    <script src="bootstrap/js/bootstrap-alert.js"></script>
    <script src="bootstrap/js/bootstrap-modal.js"></script>
    <script src="bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="bootstrap/js/bootstrap-tab.js"></script>
    <script src="bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="bootstrap/js/bootstrap-popover.js"></script>
    <script src="bootstrap/js/bootstrap-button.js"></script>
    <script src="bootstrap/js/bootstrap-collapse.js"></script>
    <script src="bootstrap/js/bootstrap-carousel.js"></script>
    <script src="bootstrap/js/bootstrap-typeahead.js"></script>


    <script type="text/javascript" src="app/js/ACFIRFilter.js"></script>
    <script type="text/javascript" src="app/js/ACAAFilter.js"></script> 
    <script type="text/javascript" src="app/js/ACSpectrum.js"></script>    
    <script type="text/javascript" src="app/js/ACFFT.js"></script>
    <script type="text/javascript" src="app/js/SpectrumWorker.js"></script>
    <script type="text/javascript" src="app/js/SpectrumDisplay.js"></script>
    <script type="text/javascript" src="app/js/audioplayback.js"></script>
    <script type="text/javascript" src="app/js/filedropbox.js"></script>
    <script type="text/javascript" src="app/js/fft.js"></script>
    <script type="text/javascript" src="app/js/audioLayerControl.js"></script>
    <script type="text/javascript" src="app/js/audiosequence.js"></script>
    <script type="text/javascript" src="app/js/AudioSequenceEditor.js"></script>
    <script type="text/javascript" src="app/js/mathutilities.js"></script>
    <script type="text/javascript" src="app/js/wavetrack.js"></script>
    <script type="text/javascript" src="app/js/binarytoolkit.js"></script>
    <script type="text/javascript" src="app/js/filesystemutility.js"></script>
    <script type="text/javascript" src="app/js/recorder.js"></script>
    <script type="text/javascript" src="app/js/recorderWorker.js"></script>
    <script type="text/javascript" src="app/js/editorapp.js"></script>

    <script type="text/javascript">
      $(window).load(function()
      {
        var supportLabel =  $('#browser_support')[0];

        if (typeof(window.AudioContext || window.webkitAudioContext) === 'undefined')
        {
          supportLabel.className = "label label-important";
          supportLabel.innerHTML = 'no web audio API support. try the latest Google Chrome build.';
        }
        else
        {
          supportLabel.className = "label label-success";
          supportLabel.innerHTML = 'you have web audio API support.';
        }

        $('#welcomeAsModal').modal('show');
      });
    </script>
    </body>
</html>