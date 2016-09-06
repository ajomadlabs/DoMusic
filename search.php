<?php
$i="";$name="";
$con=mysqli_connect("localhost","root","","domusic");
if(!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $un= $_POST["sea"];
    $n=$un[0];
    $sql="select * from song where sname like '$un%' or sartist like '$un%'";
    $retval=mysqli_query($con,$sql);
    $count=mysqli_num_rows($retval);
    $c=$count;
    $i=0;
    if($count>=1){
    $i=0;
    while($row=mysqli_fetch_assoc($retval) and $count!=0){
        $src[$i]=$row["sfile"];
        $sn[$i]=ucfirst($row["sname"]);
        $sc[$i]=ucfirst($row["scat"]);
        $si[$i]=($row["simg"]);
        $sa[$i]=($row["sartist"]);
        $count=$count-1;
        $i=$i+1;
    }
    }
    else{
        $name="NO RESULT FOUND";   
    }
}
    
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<title>Explore</title>
		<link rel="shortcut icon" href="../favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Raleway:100,700,800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	
		<link rel="stylesheet" type="text/css" href="css/component.css" />
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link rel="stylesheet" href="css/audio.css" media="screen">
        <link rel="stylesheet"                                                         href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
        <style>
                #feat{
            margin-top: -57px;
            padding-top: 80px;
        }
        </style>
	</head>
	<body id="first">
        <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper teal darken-2 z-depth-5">
          <a href="home.php" class="brand-logo"><b class="amber-text text-accent-4">DO</b><b>MUSIC</b></a>
           </div>
    </nav>
  </div>
		<div class="container">
			<aside class="sidebar clearfix">
				
			</aside>
			<div id="morphsearch" class="morphsearch teal darken-3" style="margin-top: 50px;height: 56px;border-radius:5px">
				<form class="morphsearch-form" action="" method="post" style="margin-top: -25px;">
					<input class="morphsearch-input " type="search" name="sea" placeholder="Search..." style="height:80px;"/>
					<button class="morphsearch-submit" type="submit">Search</button>
				</form>
               

				<div class="morphsearch-content">
                    <div class="dummy-column">
						<h2>Hindi Hits</h2>
						<a class="dummy-media-object" href="hindi.php">
							<img src="css/KapoorandSons.png" alt="Kar Gayi Chull"/>
							<h3>Kar Gayi Chull</h3>
						</a>
						<a class="dummy-media-object" href="hindi.php">
							<img src="css/dil.png" alt="Janam Janam"/>
							<h3>Janam Janam</h3>
						</a>
						<a class="dummy-media-object" href="hindi.php">
							<img src="css/KapoorandSons.png" alt="Bolna"/>
							<h3>Bolna</h3>
						</a>
						<a class="dummy-media-object" href="hindi.php">
							<img src="css/Airlift.png" alt="Soch Na Sakhe"/>
							<h3>Soch Na Sakhe</h3>
						</a>
						<a class="dummy-media-object" href="malayalam.php">
							<img src="css/RockyHandsom.png" alt="Rock Tha Party"/>
							<h3>Rock Tha Party</h3>
						</a>
						<a class="dummy-media-object" href="english.php">
							<img src="css/Ungli.png" alt="Dance Basanti"/>
							<h3>Dance Basanti</h3>
						</a>
					</div>
					<div class="dummy-column">
						<h2>Malayalam Hits</h2>
						<a class="dummy-media-object" href="malayalam.php">
							<img src="css/akk.png" alt="Ente Maavum Poothe"/>
							<h3>Ende Maavum Poothe</h3>
						</a>
						<a class="dummy-media-object" href="malayalam.php">
							<img src="css/pavada.jpg" alt="Kuruthekedinte Koodane"/>
							<h3>Kuruthekedinte Koodane</h3>
						</a>
						<a class="dummy-media-object" href="malayalam.php">
							<img src="css/mp.jpg" alt="Idukki"/>
							<h3>Idukki</h3>
						</a>
						<a class="dummy-media-object" href="malayalam.php">
							<img src="css/Darvintep.jpg" alt="Kathangal Kinavil"/>
							<h3>Kathangal Kinavil</h3>
						</a>
						<a class="dummy-media-object" href="malayalam.php">
							<img src="css/hellonamasthe.png" alt="Kandukothiche"/>
							<h3>Kandukothiche</h3>
						</a>
						<a class="dummy-media-object" href="english.php">
							<img src="css/ActionHeroBiju.png" alt="Pookal Panineer"/>
							<h3>Pookal Panineer</h3>
						</a>
					</div>
					<div class="dummy-column">
						<h2>English Hits</h2>
						<a class="dummy-media-object" href="english.php">
							<img src="css/purpose1.png" alt="Love Yourself"/>
							<h3>Love Yourself</h3>
						</a>
						<a class="dummy-media-object" href="english.php">
							<img src="css/purpose1.png" alt="Sorry"/>
							<h3>Sorry</h3>
						</a>
						<a class="dummy-media-object" href="english.php">
							<img src="css/purpose1.png" alt="What Do You Mean"/>
							<h3>What Do You Mean</h3>
						</a>
						<a class="dummy-media-object" href="english.php">
							<img src="css/adele.jpg" alt="Hello"/>
							<h3>Adele-Hello</h3>
						</a>
						<a class="dummy-media-object" href="english.php">
							<img src="css/smen.jpg" alt="Three Empty Words"/>
							<h3>Shawn Mendes-Three Empty Words</h3>
						</a>
						<a class="dummy-media-object" href="english.php">
							<img src="css/tsoutofwoods.jpg" alt="Out Of The Woods"/>
							<h3>Taylor Swift-Out Of The Woods</h3>
						</a>
					</div>
				</div>
                <!-- /morphsearch-content -->
                <span class="morphsearch-close"></span>
                <div class="morphsearch-content">
    <?php
        $k=$i;
        if($i>=1){
            echo "<table class='highlight centered responsive-table'>";
        echo "<thead>";
        echo "<tr>";
              echo "<th data-field='name'>Song Name</th>";
              echo "<th data-field='category'>Song Language</th>";
              echo "<th data-field='art'>Song Art</th>";
              echo "<th data-field='detail'>Song Artist</th>";
              echo "<th data-field='play'>Song Play</th>";
              echo "<th data-field='download'>Song Download</th>";
          echo "</tr>";
        echo "</thead>";
              echo "<tbody>";
        while($i!=0){
             $i=$i-1;
            echo "<tr>";
            echo "<td>$sn[$i]</td>";
            echo "<td>$sc[$i]</td>";
            echo "<td><img src='$si[$i]' width='50px' height='50px'></img></td>";
            echo "<td>$sa[$i]</td>";
            echo "<td><audio src='$src[$i]' controls preload='auto'></audio></td>";
            echo "<td><a href='download.php?filename=$src[$i]' class='waves-effect waves-light btn'>DOWNLOAD ME</a></td>";
            echo "<tr></tr>";
        }
            echo "</tbody>";
      echo "</table>";
        }
        else{
            echo $name;}
        ?>
                </div>
				<span class="morphsearch-close"></span>
			</div><!-- /morphsearch -->
	
			<div class="overlay"></div>
		</div><!-- /container -->
        <div class="row" id="feat" style="margin-left:411px;">
            <h3><center style="margin-left:-400px;"><b class="amber-text text-accent-4">MUSIC</b><b class="teal-text text-darken-2"> HUNT</b></center></h3>
        <div class="col s4" style="margin-left:-208px;">
          <div class="card teal darken-3 z-depth-5">
              <div class="card-image">
              <img src="css/jb1.jpeg" style="height: 338px;">
              <span class="card-title amber-text text-accent-4">Justin Bieber</span>
            </div>
            <div class="card-content white-text">
              <p>I'll Show You </p>
            </div>
            <div class="card-action">
              <a href="english.php" class="waves-effect waves-light btn amber-text text-accent-4 teal darken-2">English</a>
            </div>
          </div>
        </div>
        <div class="col s4">
          <div class="card teal darken-3 z-depth-5">
              <div class="card-image" style="height: 336px;">
              <img src="css/Badshah.jpg" style="height: 338px;">
              <span class="card-title amber-text text-accent-4">Badsha</span>
            </div>
            <div class="card-content white-text">
              <p>Kar Gayi Chull
</p>
            </div>
            <div class="card-action">
              <a href="hindi.php" class="waves-effect waves-light btn amber-text text-accent-4 teal darken-2">Hindi</a>
            </div>
          </div>
        </div>
        <div class="col s4">
          <div class="card teal darken-3 z-depth-5">
              <div class="card-image">
              <img src="css/SudeepKumar.jpg" style="height: 338px;">
              <span class="card-title amber-text text-accent-4">Sudeep Kumar</span>
            </div>
            <div class="card-content white-text ">
              <p>Theliveyil </p>
            </div>
            <div class="card-action">
              <a href="malayalam.php" class="waves-effect waves-light btn amber-text text-accent-4 teal darken-2">Malayalam</a>
            </div>
          </div>
        </div>
  
      </div>
    
		<script src="js/classie.js"></script>
		<script>
			(function() {
				var morphSearch = document.getElementById( 'morphsearch' ),
					input = morphSearch.querySelector( 'input.morphsearch-input' ),
					ctrlClose = morphSearch.querySelector( 'span.morphsearch-close' ),
					isOpen = isAnimating = false,
					// show/hide search area
					toggleSearch = function(evt) {
						// return if open and the input gets focused
						if( evt.type.toLowerCase() === 'focus' && isOpen ) return false;

						var offsets = morphsearch.getBoundingClientRect();
						if( isOpen ) {
							classie.remove( morphSearch, 'open' );

							// trick to hide input text once the search overlay closes 
							// todo: hardcoded times, should be done after transition ends
							if( input.value !== '' ) {
								setTimeout(function() {
									classie.add( morphSearch, 'hideInput' );
									setTimeout(function() {
										classie.remove( morphSearch, 'hideInput' );
										input.value = '';
									}, 300 );
								}, 500);
							}
							
							input.blur();
						}
						else {
							classie.add( morphSearch, 'open' );
						}
						isOpen = !isOpen;
					};

				// events
				input.addEventListener( 'focus', toggleSearch );
				ctrlClose.addEventListener( 'click', toggleSearch );
				// esc key closes search overlay
				// keyboard navigation events
				document.addEventListener( 'keydown', function( ev ) {
					var keyCode = ev.keyCode || ev.which;
					if( keyCode === 27 && isOpen ) {
						toggleSearch(ev);
					}
				} );
				
			})();
</script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js">
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js">         </script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/audiojquery.js"></script>
<script src="js/audiomain.js"></script>
		</script>
	</body>
</html>