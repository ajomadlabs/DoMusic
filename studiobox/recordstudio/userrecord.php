<?php
session_start();
$ERR="";$ER1="";$ER2="";$name="";
$con=mysqli_connect("localhost","root","","domusic");
if(!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
    $un=$_SESSION["email"];
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
    <title><?php echo $username;?>-Recording Console</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
      .soundBite input {
        margin-right: 4px;
      }
    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
          <link href="../css/materialize.min.css" rel="stylesheet">

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="bootstrap/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="bootstrap/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="bootstrap/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="bootstrap/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="../../userstudiobox.php">STUDIO BOX - Recording Console</a>
        </div>
      </div>
    </div>
    <div class="recorder container">
      <h2>Record</h2>
      <p style="margin: -23px 309px;">Monitor Volume: <input type="range" max="1" step="0.1" value="0" onchange="changeVolume(this.value)"/></p>
      <p>
        <button class="btn btn-primary" style="margin: 86px;" onclick="startRecording(this);">Record</button>
        <button class="btn btn-warning" onclick="stopRecording(this);" disabled>Stop</button>
      </p>
      
      <h2>Pitch Box</h2>
        <button class="btn btn-primary" style="margin: 94px;" onclick="startSequencer(this);">Play</button>
        <button class="btn btn-warning" onclick="stopSequencer(this);" disabled>Stop</button>
      </p>
      <table id="recordingslist">
        <tr>
            <th><h2>Songs</h2></th>
          <th></th>
          <th></th>
          <th id="sequencerBoxes">
            <!-- <p>Sequence</p> -->
            <input type="checkbox"/>
            <input type="checkbox"/>
            <input type="checkbox"/>
            <input type="checkbox"/>
            <input type="checkbox"/>
            <input type="checkbox"/>
            <input type="checkbox"/>
            <input type="checkbox"/>
          </th>
        </tr>
        <tr>
          <th>Tempo Box</th>
          <th>
            <label for='BaseNote'>Pitch Note: <span class='controlVal'></span></label>
            <input class='control' id='BaseNote' type='range' min='40' max='100' value='63'>
          </th>
          <th>
            <label for='NumOsc'>Sequence Generator: <span class='controlVal'></span></label>
            <input class='control' style="margin: 0px 101px;" id='NumOsc' type='range' min='1' max='40' value='40'>
          </th>
          <th>
            <!-- <input type="checkbox" id="droneToggle" checked/> -->
          </th>
        </tr>
      </table>
    </div>
    <div class="editor container">
      <div class="row">
        <div class="span12">
          <center>
             <div class="btn-toolbar">
            <div class="btn-group">
              <a class="btn btn-primary" onclick="$('#audioLayerControl')[0].copy();"><i class="icon-share icon-white"></i> Copy</a>
              <a class="btn btn-primary" onclick="$('#audioLayerControl')[0].paste();"><i class="icon-chevron-down icon-white"></i> Paste</a>
              <a class="btn btn-primary" onclick="$('#audioLayerControl')[0].cut();"><i class="icon-chevron-up icon-white"></i> Cut</a>
              <a class="btn btn-primary" onclick="$('#audioLayerControl')[0].del();"><i class="icon-remove icon-white"></i> Delete</a>
            </div>
          </div>
        </center>
        </div>
      </div>
      <hr />
      <div class="row" style="margin-top: 23px; margin-left: -504px;">
        <div class="span4">
          <div class="well">
            <div id="spectrum"></div>
          </div>
        </div>
        <div class="span8">
          <h6>Recoder Editor</h6>
          <div class="well">
             <audioLayerControl id="audioLayerControl" title="CloudCompany.mp3" />
          </div>
          <!--<div id="editor">
                <div id="editorbox">
                    <audioLayerControl id="audioLayerControl" title="CloudCompany.mp3" />
                </div>
            </div>-->
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="span12">
          <center>
            <div class="btn-toolbar">
              <div class="btn-group">
                <a id="btn_play" class="btn btn-success btn-large" onclick="$('#audioLayerControl')[0].play()" rel="tooltip" title="first tooltip"><i class="icon-play icon-white"></i></a>
                <a id="btn_pause" class="btn btn-success btn-large disabled"><i class="icon-pause icon-white"></i></a>
                <a id="btn_stop" class="btn btn-success btn-large" onclick="$('#audioLayerControl')[0].stop()"><i class="icon-stop icon-white"></i></a>
                <a id="btn_loop" class="btn btn-warning btn-large" data-toggle="button" onclick="$('#audioLayerControl')[0].toggleLoop();"><i class="icon-repeat icon-white"></i></a>
              </div>
              <div class="btn-group">
                <!-- <a class="btn btn-large btn-primary" onclick="$('#audioLayerControl')[0].save($('#savelink')[0]);"><i class="icon-fire"></i> Render</a> -->
                <button class="btn btn-large btn-success" id="savelink" onclick="$('#audioLayerControl')[0].saveBack();"><i class="icon-download"></i> Save</button>
              </div>
            </div>
          </center>
        </div>
      </div>
      <div class="row">
        <div class="span4 offset4">
          <div class="progress progress-striped active">
            <div id="app-progress" class="bar" style="width: 0%;"></div>
          </div>
        </div>
      </div>  
      <br>
      <div class="row">
        <div class="span1"><br></div>
        <div class="span2">
                <div class="btn-group" >
                  
                    <button class="btn btn-success" onclick="decrease_db()"><i class="icon-minus"></i></button>
                    <button id="gain-db" class="btn disabled" onclick="gain_btn_clicked()">0 db</button>
                    <button class="btn btn-success" onclick="increase_db()"><i class="icon-plus"></i></button> 
                </div>
              </div>
            <script type="text/javascript">
                var db_gain = 0;

                function decrease_db()
                {
                  --db_gain;
                  update_db_gain_btn();
                }

                function increase_db()
                {
                  ++db_gain;
                  update_db_gain_btn();
                }

                function update_db_gain_btn()
                {
                  var gain_btn = $('#gain-db')[0];

                  gain_btn.innerHTML = db_gain + ' db'; 

                  if (db_gain === 0)
                  {
                    gain_btn.className = 'btn disabled';
                  }
                  else
                  {
                    gain_btn.className = 'btn btn-primary';
                  }
                }

                function gain_btn_clicked()
                {
                  $('#audioLayerControl')[0].filterGain(db_gain);
                  db_gain = 0;
                  update_db_gain_btn();
                }
                </script>
          </div>
        </div>
        <div class="span2">
          <div class="well" style="height: 130px; position:relative">
            <a style="position: absolute; bottom: 170px; right: -224px;"  class="btn btn-primary pull-right" onclick="$('#audioLayerControl')[0].filterNormalize();">Normalize</a>
            <br>
          </div>
        </div>
        <div class="span2">
          <div class="well" style="height: 130px; position:relative">
            <a style="position: absolute; right: -136px; bottom: 170px;"  class="btn btn-primary pull-right" onclick="$('#audioLayerControl')[0].filterSilence();">Silence</a>
            <br>
          </div>
        </div>
        <div class="span2">
          <div class="well" style="height: 130px; position:relative">
            <a style="position: absolute; bottom: 170px; right: -59px;"  class="btn btn-primary pull-right" onclick="$('#audioLayerControl')[0].filterFadeIn();">Fade In</a>
            <br>
          </div>
        </div>
        <div class="span2">
          <div class="well" style="height: 130px; position:relative">
            <a style="position: absolute; right: 0px; bottom: 170px;" class="btn btn-primary pull-right" onclick="$('#audioLayerControl')[0].filterFadeOut();">Fade Out</a>
            <br>
          </div>
        </div>
        <div class="span1">

        </div>
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
    <script type="text/javascript" src="app/js/editorapp.js"></script>

    <script src="js/lib/recorder.js"></script>
    <script src="js/recordLive.js"></script>
    <script src="js/sequencer.js"></script>
    <script src="js/drone.js"></script>

    <script type="text/javascript">
      $(window).load(function()
      {
        $('.editor.container').addClass('invisible');
        onDocumentLoaded();
      });
    </script>
  </body>
</html>
