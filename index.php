<!DOCTYPE html>
<html>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">SkyFall</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="makingwaves.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Visitor</strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="index.html" class="w3-bar-item w3-button w3-padding w3-red"><i class="fa fa-users fa-fw"></i>  Main</a>
    <a href="Communications.html" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  Communications</a>

  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i>Dashboard</b></h5>
  </header>

<?php

	$myFile = "temp.txt";
	$fh = fopen($myFile, 'r');
	$theData = fgets($fh);
	fclose($fh);
	?>

<?php

	$myFile = "alt.txt";
	$fh = fopen($myFile, 'r');
	$theData1 = fgets($fh);
	fclose($fh);
	?>

<?php

	$myFile = "pres.txt";
	$fh = fopen($myFile, 'r');
	$theData2 = fgets($fh);
	fclose($fh);
	?>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-area-chart w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $theData1;?> meters</h3>

        </div>
        <div class="w3-clear"></div>
        <h4>Altitude</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-tachometer w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $theData2;?> Pa</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Pressure</h4>
      </div>
    </div>


    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-thermometer w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $theData;?>*C</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Temperature</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-bullseye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>lat:53.3734, long:-1.475</h3>
	  
        </div>
        <div class="w3-clear"></div>
        <h4>GPS</h4>
      </div>
    </div>
  </div>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third">
        <h5>Cargo Location</h5>
        		<div id="map" style="width:320px;height:400px;background:yellow"></div>

	<script>
		function myMap() {

var myLatLng = {lat: 53.37341159407646, lng: -1.475145805443617};


        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: myLatLng,
  disableDefaultUI: true,
styles: [
    {
        "featureType": "all",
        "stylers": [
            {
                "hue": "#0000b0"
            },
            {
                "invert_lightness": "true"
            },
            {
                "saturation": -30
            }
        ]
    }
]

        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Cargo',


        });


			

		}
	</script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGclXpXKOzY8SD3oHNXSMRt3kX6zUHqJA&callback=myMap"></script>
      </div>


      <div class="w3-twothird">
        <h5>Feeds</h5>
        <table class="w3-table w3-striped w3-white">
          <tr>
            <td><i class="fa fa-battery-4 w3-text-blue w3-large"></i></td>
            <td>Battery Level</td>
            <td><i> </i></td>
          </tr>
          <tr>
            <td><i class="fa fa-microchip w3-text-red w3-large"></i></td>
            <td>Hardware Status.</td>
            <td><i> </i></td>
          </tr>
          <tr>
            <td><i class="fa fa-lightbulb-o w3-text-yellow w3-large"></i></td>
            <td>Light Status.</td>
            <td><i> </i></td>
          </tr>
          <tr>
            <td><i class="fa fa-paper-plane w3-text-red w3-large"></i></td>
            <td>Estimation of Time to Reach Location.</td>
            <td><i> </i></td>
          </tr>
          <tr>
            <td><i class="fa fa-institution w3-text-blue w3-large"></i></td>
            <td>Target Location Status</td>
            <td><i> </i></td>
          </tr>
 <tr>
            <td><i class="fa fa-power-off w3-text-green w3-large"></i></td>
            <td>Device Status</td>
            <td><i> </i></td>
          </tr>
          
          
        </table>
      </div>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>General Stats</h5>
    <p>New Visitors</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-green" style="width:25%">+25%</div>
    </div>


  </div>
  <hr>

  <div class="w3-container">
    <h5>Countries</h5>
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
      <tr>
        <td>United States</td>
        <td>0 Users</td>
      </tr>
      <tr>
        <td>UK</td>
        <td>0 users</td>
      </tr>
      <tr>
        <td>Russia</td>
        <td>0 Users</td>
      </tr>
      <tr>
        <td>Spain</td>
        <td>0 Users</td>
      </tr>
      <tr>
        <td>India</td>
        <td>0 Users</td>
      </tr>
      <tr>
        <td>France</td>
        <td>0 Users</td>
      </tr>
    </table><br>
  </div>
  <hr>
 
  <hr>

  <div class="w3-container">

  <br>


  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
   
    <p>By SkyFall IPD</a></p>
  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>



</body>
</html>
