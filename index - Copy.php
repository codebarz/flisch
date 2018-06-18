<!DOCTYPE html>
<html>
<title>Welcome | Demo</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/main.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<meta name="viewport" content="width=device-width, initial-scale=1"><!-- 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", Arial, Helvetica, sans-serif}
.myLink {display: none}
</style>
<body class="w3-light-grey">

<!-- Navigation Bar -->

<div class="w3-large w3-padding-16 w3-right w3-container">
  	<span>
    	<i class="fa fa-phone w3-hover-opacity w3-padding-large"></i><strong>+234-80-330-553-31</strong>
    	<i class="far fa-money-bill-alt"></i>
    	<strong><i class="fa fa-angle-double-down"></i></strong>
  	</span>
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin -hover-opacity"></i>
 </div>

<div class="w3-bar w3-white w3-border-bottom w3-xlarge">
  <a href="#" class="w3-bar-item w3-button w3-text-red w3-hover-red"><b><i class="fa fa-map-marker w3-margin-right"></i>Logo</b></a>
  <a href="#" class="w3-bar-item w3-button w3-right w3-hover-red w3-text-grey"><i class="fa fa-search"></i></a>
 <!--  <nav>
  	<ul>
    	<li class="w3-bar-item"><a class="active" href="index.php">Home</a></<li>
      <li class="w3-bar-item"><a href="about.php">About Us</a></li>
      <li class="w3-bar-item"><a href="about.php">Flight</a></li>
      <li class="w3-bar-item"><a href="about.php">Hotel</a></li>
      <li class="w3-bar-item"><a href="about.php">Rental</a></li>
    </ul>
  </nav> -->
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
  <img class="w3-image" src="./w3images/london2.jpg" alt="London" width="1500" height="700">
  <div class="w3-display-middle" style="width:65%">
    <div class="w3-bar w3-black">
      <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Flight');"><i class="fa fa-plane w3-margin-right"></i>Flight</button>
      <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Hotel');"><i class="fa fa-bed w3-margin-right"></i>Hotel</button>
      <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Car');"><i class="fa fa-car w3-margin-right"></i>Rental</button>
    </div>

    <!-- Tabs -->
    <div id="Flight" class="w3-container w3-white w3-padding-16 myLink">

      <div class="w3-bar w3-black">
      <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Flight');"><i class="fal fa-location-arrow w3-margin-right"></i>One Way</button>
      <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Hotel');"><i class="fa fa-bed w3-margin-right"></i>Round Trip</button>
      <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Car');"><i class="fa fa-car w3-margin-right"></i>Mulitiple Destination</button>
    </div>

      <h3>Travel the world with us</h3>
      <div class="w3-row-padding" style="margin:0 -16px;">
        <div class="w3-half">
          <label>From</label>
          <input class="w3-input w3-border" type="text" placeholder="Departing from">
        </div>
        <div class="w3-half">
          <label>To</label>
          <input class="w3-input w3-border" type="text" placeholder="Arriving at">
        </div>
      </div>
      <p><button class="w3-button w3-dark-grey">Search and find dates</button></p>
    </div>
     <div id="Hotel" class="w3-container w3-white w3-padding-16 myLink">
      <h3>Find the best hotels</h3>
      <p>Book a hotel with us and get the best.<span> work? or</span><span> liesure?</span></p>

      <div class="w3-padding" style="margin:10px -15px;">
         <div class="w3-half">
        <label>Going To:</label>
        <input type="text" placeholder="destination" class="w3-input w3-border w3-padding">
      </div>
      <div class="w3-half w3-padding-16px">
        <label>Check in:</label>
        <input type="text" placeholder="30/05/2018" class="w3-input w3-border">
      </div>
      <div class="w3-half">
        <label>Check Out</label>
        <input type="text" placeholder="30/05/2018" class="w3-input w3-border">
      </div>
      <div class="w3-half">
        <label>Rooms</label>
        <input type="text" placeholder="1" class="w3-input w3-border">
      </div>
      <div class="w3-half">
        <lable>Guests</lable>
        <input type="text" placeholder="1" class="w3-input w3-border">
      </div>
      <p>We know hotels - we know comfort.</p>
      <p><button class="w3-button w3-dark-grey">Search Hotels</button></p>
    </div>
     

    <div id="Car" class="w3-container w3-white w3-padding-16 myLink">
      <h3>Best car rental in the world!</h3>
      <p><span class="w3-tag w3-deep-orange">DISCOUNT!</span> Special offer if you book today: 25% off anywhere in the world with CarServiceRentalRUs</p>
      <input class="w3-input w3-border" type="text" placeholder="Pick-up point">
      <p><button class="w3-button w3-dark-grey">Search Availability</button></p>
    </div>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px;">

  <!-- Good offers -->
  <div class="w3-container w3-margin-top">
    <h3>Good Offers Right Now</h3>
    <h6>Up to <strong>50%</strong> discount.</h6>
  </div>
  <div class="w3-row-padding w3-text-white w3-large">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
        <img src="/w3images/cinqueterre.jpg" alt="Cinque Terre" style="width:100%">
        <span class="w3-display-bottomleft w3-padding">Cinque Terre</span>
      </div>
    </div>
    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="./w3images/newyork2.jpg" alt="New York" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">New York</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="./w3images/sanfran.jpg" alt="San Francisco" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">San Francisco</span>
          </div>
        </div>
      </div>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="./w3images/pisa.jpg" alt="Pisa" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Pisa</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="./w3images/paris.jpg" alt="Paris" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Paris</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Explore Nature -->
  <div class="w3-container">
    <h3>Explore Nature</h3>
    <p>Travel with us and see nature at its finest.</p>
  </div>
  <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <img src="./w3images/ocean2.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>West Coast, Norway</h3>
        <p class="w3-opacity">Roundtrip from $79</p>
        <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
        <button class="w3-button w3-margin-bottom">Buy Tickets</button>
      </div>
    </div>
    <div class="w3-half w3-margin-bottom">
      <img src="./w3images/mountains2.jpg" alt="Austria" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Mountains, Austria</h3>
        <p class="w3-opacity">One-way from $39</p>
        <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
        <button class="w3-button w3-margin-bottom">Buy Tickets</button>
      </div>
    </div>
  </div>

  <!-- Newsletter -->
  <div class="w3-container">
    <div class="w3-panel w3-padding-16 w3-black w3-opacity w3-card">
      <h2>Get the best offers first!</h2>
      <p>Join our newsletter.</p>
      <label>E-mail</label>
      <input class="w3-input w3-border" type="text" placeholder="Your Email address">
      <button type="button" class="w3-button w3-red w3-margin-top">Subscribe</button>
    </div>
  </div>
  
<!-- End page content -->
</div>

<!-- Footer -->

<script>
// Tabs
function openLink(evt, linkName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("myLink");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(linkName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
// Click on the first tablink on load
document.getElementsByClassName("tablink")[0].click();
</script>

<script>
// Tabs
function openLink(evt, linkName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("myLink");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(linkName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
// Click on the first tablink on load
document.getElementsByClassName("tablink")[0].click();
</script>


</body>
</html>
