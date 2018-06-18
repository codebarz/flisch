
<?php 
error_reporting(0);
require_once ("db.php");
$db = new MyDB();
?>

<!DOCTYPE html>
<html>
	<?php 
	require_once ("db.php");
	$db = new MyDB();
	?>
<title>Flight Listing</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.css">
<link rel="stylesheet" href="css/font/typicons.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<meta name="viewport" content="width=device-width, initial-scale=1"><!-- 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:500i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script src="js/jquery-3.1.0.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
$(function() {
	$('#datepicker').datepicker({
		autoclose: true,
		todayHighlight: true
	}).datepicker('update', new Date());
});
$(function() {
	$('#datepicked').datepicker({
		autoclose: true,
		todayHighlight: true
	}).datepicker('update', new Date());
});
$(document).ready(function() {
    $('#deptfrom').on("change keyup paste", function () {
        if ($('#deptfrom').val().length > 0) 
		{
            $('.airSearch').fadeIn().animate({maxHeight: "300px"}, 350);
        } 
		else 
		{
            $('.airSearch').fadeOut();
        }
    });
	var timer;
	$('#deptfrom').on("keyup", function() {
		$('.airSearch ul').html("<img src='block.gif'>");
		clearTimeout(timer);
		timer = setTimeout(searchd, 2000);
	});
	$('#deptfrom').on('keydown', function() {
		clearTimeout(timer);
	});
	function searchd() {
    var searchTxt = $("input[name='deptfrom']").val();

    $.post("deptsearch.php", {searchVal: searchTxt}, function (echo) {
        $('.airSearch ul').html(echo);
    });
	}
  $('.airSearch ul').click(function(){
      $('#deptfrom').val($(this).text());
      $('.airSearch').hide();
  });


    $('#arrat').on("change keyup paste", function () {
        if ($('#arrat').val().length > 0) 
		{
            $('.arrSearch').fadeIn().animate({maxHeight: "300px"}, 350);
        } 
		else 
		{
            $('.arrSearch').fadeOut();
        }
    });
	var timer;
	$('#arrat').on('keyup', function() {
		$('#arrSearch').html("Loading. Please wait...");
		clearTimeout(timer);
		timer = setTimeout(searcha, 2000);
	});
	$('#arrat').on('keydown', function() {
		clearTimeout(timer);
	});
	function searcha() {
    var searchTxt = $("input[name='arrat']").val();

    $.post("deptsearch.php", {searchVal: searchTxt}, function (echo) {
        $('.arrSearch ul').html(echo);
    });
	}
  $('.arrSearch ul').click(function(){
      $('#arrat').val($(this).text());
      $('.arrSearch').hide();
  });
  $('.tablink').click(function() {
      $('.mainTabs').css("display", "block");
  });
  $('.closeSbar').click(function() {
      $('.mainTabs').css("display", "none");
  });
  $('.view, .closeB').click(function() {
      $('.mainTain').fadeIn();
  });
  $('.closeM').click(function() {
      $('.mainTain').fadeOut();
  });
  $(".smMenuDis ul li").mouseenter(function() {
      $(this).css("padding-right", "30px", "box-shadow", "0 0 4px #ccc");
  });
  $(".smMenuDis ul li").mouseleave(function() {
      $(this).css("padding-right", "20px", "box-shadow", "none");
  });
  $(".smMenu").click(function() {
      $('.smMenuDis').toggle();
      $(".smMenu").toggleClass("typcn-th-menu typcn-times");
  });
});
</script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", Arial, Helvetica, sans-serif}
.myLink {display: none;}
.mainTabs{display: none;}
</style>
<body class="w3-light-grey">

<!-- <div class="stickyAd">
	<img src="w3images/nig.jpg">
</div> -->

<div class="smMenuDis">
    <ul>
        <a href="index.php"><li><i class="typcn typcn-home"></i></li></a>
        <li class="closeB"><i class="typcn typcn-ticket"></i></li>
        <li class="closeB"><i class="typcn typcn-wine"></i></li>
    </ul>
</div>

<div class="mainTain">
    <i class="typcn typcn-delete closeM"></i>
    <i class="typcn typcn-spanner"></i>
    <p>We are currently under maintenance!.. Please try again later.</p>
</div>

<!-- Header -->
<div class="mainHead">
    <div class="mediaLinks">
		<ul class="lock">
			<li><i class="fa fa-envelope" style="font-size: 17px"> <span> xxxxx@yourdomain.com</span></i></li>
			<li><i class="typcn typcn-phone"><span> +234 805 181 2473</span></i></li>
			<li><i class="typcn typcn-calendar"><span> <?php echo date("d/m/Y"); ?></span></i></li>
			<li style="padding-right: 20px"><i class="fa fa-lock"></i></li>
		</ul>
    <ul class="sMedia">
	<a href="#"><li><i class="typcn typcn-social-facebook"></i></li></a>
	<a href="#"><li><i class="typcn typcn-social-twitter"></i></li></a>
	<a href="#"><li><i class="typcn typcn-social-instagram"></i></li></a>
    </ul>
	</div>
	<div class="mainMenu">
        <i class="typcn typcn-th-menu smMenu"></i>
		<ul class="mainHMenu">
			<li>Home</li>
			<li class="barActive">Flights</li>
			<li>Hotels</li>
			<li><i class="typcn typcn-flash alertI"></i>World Cup</li>
			<li>Vacation Packages</li>
			<li>Contact Us</li>
		</ul>
	</div>
</div>
<div id="retPage">
<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px;">
  <div class="w3-display-middle" style="width:100%;">
    <div class="w3-bar w3-black">
      <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Flight');"><i class="fa fa-plane w3-margin-right"></i>Search Flights</button>
      <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Hotel');"><i class="fa fa-bed w3-margin-right"></i>Book Hotel</button>
      <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Car');"><i class="fa fa-car w3-margin-right"></i>Rental</button>
    </div>

    <div class="mainTabs">
    <div class="closeSbar"><i class="typcn typcn-delete"></i></div>
    <!-- Tabs -->
    <div id="Flight" class="w3-container w3-white padding-form myLink">
      <form action="mainsearch.php" method="post" enctype="multipart/for-data">
      <div class="w3-row-padding" style="margin:0 -16px;">
        <div class="w3-half" style="position: relative">
          <input class="w3-input w3-border" type="text" placeholder="Departing from" name="deptfrom" id="deptfrom">
          <div class="airSearch">
			  <ul></ul>
		  </div>
        </div>
        <div class="w3-half" style="position: relative">
          <input class="w3-input w3-border" type="text" placeholder="Arriving at" name="arrat" id="arrat">
          <div class="arrSearch">
          <ul></ul>
          </div>
		</div>
		<div class="w3-half">
          <!-- <input class="w3-input w3-border" type="date" placeholder="Departing Date"> -->
        <div id="datepicker" class="input-group date" data-date-format="mm/dd/yyyy">
		<label for="">Departing Date <i class="typcn typcn-arrow-down"></i></label>
			<input class="w3-input w3-border" type="text" name="deptdate">
			<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        </div>
		</div>
		<div class="w3-half">
          <!-- <input class="w3-input w3-border" type="text" placeholder="Arriving Date"> -->
		  <div id="datepicked" class="input-group date" data-date-format="mm/dd/yyyy">
			  <label for="">Return Date <i class="typcn typcn-arrow-down"></i></label>
			  <input class="w3-input w3-border" type="text" name="retdate">
			  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
      	</div>
      	</div>
		<div class="w3-row-padding" style="margin:20px -16px">
			<div class="input-group">
				<div class="input-group-append">
					<span class="input-group-text" style="border-bottom-left-radius: 4px; border-top-left-radius: 4px">Adult 12+ yrs</span>
				</div>
				<input type="number" class="form-control" name="adults" min="0">
				<div class="input-group-append">
					<span class="input-group-text">Children 2-11 yrs</span>
				</div>
				<input type="number" class="form-control" name="children" min="0">
				<div class="input-group-append">
					<span class="input-group-text">Infants Below 2 yrs</span>
				</div>
				<input type="number" class="form-control" name="infants" min="0">
				<div class="input-group-append">
					<span class="input-group-text">Ticket Class</span>
				</div>
				<select class="form-control" name="ticket">
					<option value="">---select---</option>
					<option value="Economy">Economy</option>
					<option value="Premium economy">Premium economy</option>
					<option value="Business">Business</option>
					<option value="First Class">First Class</option>
				</select>
			</div>
		</div>
      </div>
      <p class="sSubmit"><input type="submit" name="searchschedule" id="searchschedule" value="Search and Find Dates"></p>
    </div>
    </form>
     <div id="Hotel" class="w3-container w3-white w3-padding-16 myLink">
      <h3>Find the best hotels</h3>
      <p>Book a hotel with us and get the best.<span> work? or</span><span> liesure?</span></p>

      <div class="w3-padding" style="margin:10px -15px;">
         <div class="w3-half">
        <label>Going To:</label>
        <input type="text" placeholder="destination" class="w3-input w3-border">
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
</div>
</header>
</div>

<?php
if(isset($_POST['deptfrom']) && isset($_POST['arrat']) && isset($_POST['deptdate']) && isset($_POST['retdate'])
&& isset($_POST['adults']) && isset($_POST['children']) && isset($_POST['infants']) && isset($_POST['ticket']))
{
    $deptfrom = filter_input(INPUT_POST, 'deptfrom', FILTER_SANITIZE_STRING);
    $arrat = filter_input(INPUT_POST, 'arrat', FILTER_SANITIZE_STRING);
    $deptdate = htmlspecialchars($_POST['deptdate']);
    $sword = explode(" ", $deptfrom);
    $ssword = explode(" ", $arrat);
    $retdate = htmlspecialchars($_POST['retdate']);
    $adults = htmlspecialchars($_POST['adults']);
    $children = htmlspecialchars($_POST['children']);
    $infants = htmlspecialchars($_POST['infants']);
    $ticket = filter_input(INPUT_POST, 'ticket', FILTER_SANITIZE_STRING);

    if(empty($deptfrom) || empty($arrat) || empty($deptdate) || empty($retdate) || empty($adults) || empty($ticket))
    {
        echo "fill";
        exit();
    }
    else 
    {
        foreach($sword as $dat)
        {
            foreach($ssword as $aat)
            {
                $condition .= " location LIKE '%".SQLite3::escapeString($dat)."%' AND destination LIKE '%".SQLite3::escapeString($aat)."%' AND ";
            }
        }
        $condition = substr($condition, 0, -4);
?>

<div id="resultContainer">
    <div class="filterArea">
        <h6>Filter Results</h6>
        <div class="filterRow">
            <p class="filterHead">Airline <span><i class="typcn typcn-arrow-sorted-down"></i></span></p>
            <?php
            $query = "SELECT * FROM schedule WHERE " .$condition;
            $querycount = "SELECT COUNT(*) as count FROM schedule WHERE " .$condition;
            $sql = $db->prepare($query);
            $count = $db->querySingle($querycount);

            if ($count < 1)
            {
                echo "No Results found...";
            }
            else
            {
    
                $result = $sql->execute();
        
                while($row = $result->fetchArray(SQLITE3_ASSOC))
                {
                    $airline = $row['airline'];
                    
                    echo '<input type="checkbox" name="airlineV" class="airlineV"><label>'.$airline.'</label><br>';
                }
            }    
     
            ?>
        </div>
        <div class="filterRow">
        <p class="filterHead">Price Range <span><i class="typcn typcn-arrow-sorted-down"></i></span></p>
        </div>
    </div>
    <div class="resultArea">
    <?php
    if ($count < 1)
    {
        echo '<div class="resultSlate"><ul><li>There are currently no airline for this route. Please try again!...</li></ul></div>';
    }
    else
    {
        while($row = $result->fetchArray(SQLITE3_ASSOC))
        {
            $airline = $row['airline'];
            $location = $row['location'];
            $destination = $row['destination'];
            $depdate = $row['depdate'];
            $arrdate = $row['arrdate'];
            $airperiod = $row['airperiod'];
            $class= $row['class'];
            $sdept = $row['sdept'];
            $sarrat = $row['sarrat'];
            $airprice = $row['airprice'];

            $ai = $db->prepare("SELECT images FROM airlines WHERE name = ?");
            $ai->bindParam(1, $airline);
            $airet = $ai->execute();

            while ($airow = $airet->fetchArray(SQLITE3_ASSOC))
            {
                $image = $airow['images'];

                echo '
                <div class="resultSlate">
                    <ul>
                        <li><img src="'.$image.'"></li>
                        <li>'.$sdept.'</li>
                        <li class="pointer"></li>
                        <li>'.$sarrat.'</li>
                        <li class="pointer"></li>
                        <li><i class="typcn typcn-watch"></i> '.$airperiod.'</li>
                        <li><i class="typcn typcn-ticket"></i>'.$class.'</li>
                        <li class="pointer"></li>
                        <li class="price"> &#8358;'.$airprice.'</li><br>
                        <li class="view">Book Now</li>
                    </ul>
                </div>';

            }
        }
    }   
        
        }
    }
    ?>
    </div>
</div>
<footer>
<div class="mainFooter">
<h4>Cheap Flights in Nigeria</h4>
<p>From the Best Airlines</p>
<ul class="fotAir">
    <?php 
    $fotq = $db->prepare("SELECT * FROM airlines LIMIT 6");
    $fotret = $fotq->execute();
    while ($fotrow = $fotret->fetchArray(SQLITE3_ASSOC))
    {
        $logo = $fotrow['images'];

        echo "<li><img src='$logo'></li>";
    }
    ?>
</ul>
<h4>Company Info</h4>
<ul class="fotLinks">
    <li>About us | </li>
    <li>Terms and Conditions | </li>
    <li>Privacy Policy | </li>
    <li>FAQ | </li>
    <li>Site Map | </li>
    <li>Contact Us | </li>
    <li>Blog</li>
</ul>
<p class="fotAbout">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>
<ul class="fotBrand">
    <li><img src="w3images/verisign.png"></li>
    <li><img src="w3images/mastercard.png"></li>
    <li><img src="w3images/visa.png"></li>
    <li><img src="w3images/verve.png"></li>
    <li><img src="w3images/IATA.png"></li>
    <li><img src="w3images/tripadvisor.png"></li>
    <li><img src="w3images/natop.png"></li>
</ul>
</div>
</footer>
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