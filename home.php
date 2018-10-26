<!DOCTYPE html>
<html>
<head>
<!--  SET THE CHARACTER SET -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--  SET THE PAGE TITLE (SHOWN IN TAB ON CHROME)-->
<title>Unique Beds</title>
<meta name="keywords" content="ROCHDALE,UNIQUE,BED,BEDS">
<meta name="author" content="Hasib Ahmed">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="beds.css">
</head>
<body>
<!-- Navbar (sit on top) -->
<div class="w3-top" class="dropdown">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card w3-large">
    <a href="#home" class="w3-bar-item w3-button"><b>UNIQUE</b> Beds & Furniture</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="Beds.php" class="w3-bar-item w3-button">Beds</a>
       <div class="w3-dropdown-content w3-bar-block w3-border">

    </div>
      <a href="#furniture" class="w3-bar-item w3-button">Furniture</a>
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img src="img/bed-header-ex.jpg" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>UNIQUE</b></span>
    <span class="w3-hide-small w3-text-light-grey">Beds & Furniture</span></h1>
  </div>
</header>

<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Beds Section -->
  <div class="w3-container w3-padding-32" id="featuredbeds">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Featured Beds</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Ottoman</div>
        <img src="img/ottoman-bed-ex1.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Storage</div>
        <img src="img/ottoman-bed-ex2.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Fancy Ottoman</div>
        <img src="img/ottoman-bed-ex3.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Divian Essential 1000</div>
        <img src="img/bed-ex1.jpg" alt="House" style="width:100%">
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Kingston Platinum</div>
        <img src="img/bed-ex2.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Denver Guest</div>
        <img src="img/bed-ex3.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Metal Framed</div>
        <img src="img/bed-ex4.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Antique Style</div>
        <img src="img/bed-ex5.jpg" alt="House" style="width:99%">
      </div>
    </div>
  </div>

 <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
      occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
      laboris nisi ut aliquip ex ea commodo consequat.
    </p>
  </div>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
    <p>Lets get in touch and talk about your next bed.</p>
    <form action="/action_page.php" target="_blank">
      <input class="w3-input" type="text" placeholder="Name" required name="Name">
      <input class="w3-input w3-section" type="text" placeholder="Email" required name="Email">
      <input class="w3-input w3-section" type="text" placeholder="Subject" required name="Subject">
      <input class="w3-input w3-section" type="text" placeholder="Message" required name="Message">
      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </form>
  </div>

<!-- End page content -->
</div>

<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap()
{
  myCenter=new google.maps.LatLng(53.622145, -2.158324);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0G9nFooIohbgx94NGRS7j6Lbqyp8aJdk&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<br><br>

<br><br>
</body>

</html>
