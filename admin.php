<!DOCTYPE html>
<html>
<?php 
require_once("db.php");
$db = new MyDB();
?>
<title>Welcome | Admin</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" href="css/font/typicons.css">

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
<script type="text/javascript" src="js/jquery-3.1.0.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#depFrom').on("change keyup paste", function () {
        if ($('#depFrom').val().length > 0) 
		{
            $('.airlineS').fadeIn().animate({maxHeight: "300px"}, 350);
        } 
		else 
		{
            $('.airlineS').fadeOut();
        }
    });
	var timer;
	$('#depFrom').on('keyup', function() {
		$('#airlineS').html("<img src='block.gif'>");
		clearTimeout(timer);
		timer = setTimeout(searcha, 2000);
	});
	$('#depFrom').on('keydown', function() {
		clearTimeout(timer);
	});
	function searcha() {
    var searchTxt = $("input[name='depFrom']").val();

    $.post("deptsearch.php", {searchVal: searchTxt}, function (echo) {
        $('.airlineS ul').html(echo);
    });
	}
  $('.airlineS ul').click(function(){
      $('#depFrom').val($(this).text());
      $('.airlineS').hide();
  });

  $('#arrAt').on("change keyup paste", function () {
        if ($('#arrAt').val().length > 0) 
		{
            $('.airlineSS').fadeIn().animate({maxHeight: "300px"}, 350);
        } 
		else 
		{
            $('.airlineSS').fadeOut();
        }
    });
	var timer;
	$('#arrAt').on('keyup', function() {
		$('#airlineSS').html("<img src='block.gif'>");
		clearTimeout(timer);
		timer = setTimeout(searchd, 2000);
	});
	$('#arrAt').on('keydown', function() {
		clearTimeout(timer);
	});
	function searchd() {
    var searchTxt = $("input[name='arrAt']").val();

    $.post("deptsearch.php", {searchVal: searchTxt}, function (echo) {
        $('.airlineSS ul').html(echo);
    });
	}
  $('.airlineSS ul').click(function(){
      $('#arrAt').val($(this).text());
      $('.airlineSS').hide();
  });
});
</script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", Arial, Helvetica, sans-serif}
.myLink {display: none}
</style>
<body class="w3-light-grey">
<?php
$get = (isset($_GET['success'])) ? $_GET['success'] : '';
if((!empty($get)) && ($get == 1))
{
    echo '<div class="alertSuccessFull"><i class="typcn typcn-thumbs-up"></i><br>The Airline details has been Successfully Created.</div>';
}
?>
<?php
$get = (isset($_GET['fail'])) ? $_GET['fail'] : '';
if((!empty($get)) && ($get == 1))
{
    echo '<div class="alertFail"><i class="typcn typcn-thumbs-up"></i><br>An Error occured...Please try again later.</div>';
}
?>
<?php
$get = (isset($_GET['fill'])) ? $_GET['fill'] : '';
if((!empty($get)) && ($get == 1))
{
    echo '<div class="alertFail"><i class="typcn typcn-thumbs-up"></i><br>Kindly fill in all fields.</div>';
}
?>

                <div class="airlineS">
                    <ul></ul>
                </div>
                <div class="airlineSS">
                    <ul></ul>
                </div>
<div class="admin_header">
    <ul>
        <li><i class="typcn typcn-bell"></i></li>
        <li><i class="typcn typcn-user"></i></li>
        <li><i class="typcn typcn-th-menu"></i></li>
    </ul>
</div>
<div class="button_area">
    <ul>
        <li class="aAirP">+ Airport</li>
        <li class="aAir airactive">+ airline</li>
        <li class="aSch">+ schedule</li>
    </ul>
</div>
<div class="form_area">
    <div class="addAirline">
        <h4>Add Airline Details</h4>
        <form action="addairline.php" method="post" enctype="multipart/form-data">
            <input type="text" name="airname" id="airname" placeholder="Airline Name">
            <div class="airimgprev"><img src="" id="imgprev"></div>
            <input type="file" onchange="img_prev()" name="airimg" id="airimg">
            <label for="airimg">Upload Airline Logo</label><br>
            <input type="submit" name="subDet" id="subDet" value="submit">
        </form>
    </div>
    <div class="addAirPort">
        <h4>Add Airport Details</h4>
        <form action="addairport.php" method="post" enctype="multipart/form-data">
            <input type="text" name="airpname" id="airpname" placeholder="Airport Name">
            <input type="text" name="airploc" id="airploc" placeholder="Airport Location"><br>
            <input type="submit" name="subDet" id="subDet" value="submit">
        </form>
    </div>
    <div class="addSchedule">
        <h4>Add Airline Schedules</h4>
        <form action="addsch.php" method="post" enctype="multipart/form-data">
            <label for="airname">Select Airline Name</label>
            <select name="airname" id="airname">
                <option value="">------select-----</option>
            <?php
            $query = $db->prepare("SELECT name FROM airlines");
            $ret = $query->execute();

            while($row = $ret->fetchArray(SQLITE3_ASSOC))
            {
                $name = $row['name'];

                echo '<option valeue="'.$name.'">'.$name.'</option>';
            }
            ?>
            </select>
            <div class="halfForm">
                <input type="text" name="depFrom" id="depFrom" placeholder="Departing From" required>
                <input type="text" name="arrAt" id="arrAt" placeholder="Arriving At" required>
            </div>
            <div class="halfForm">
                <input type="text" name="sdepFrom" id="sdepFrom" placeholder="Departing From Short Code" required>
                <input type="text" name="sarrAt" id="sarrAt" placeholder="Arriving At Short" required>
            </div>
            <div class="half">
            <label for="depDate" style="padding-left: 5%">Departure Date</lable>
            </div>
            <div class="half">
            <label for="arrDate">Arrival Date</lable>
            </div>
            <div class="halfForm">
                <input type="date" name="depDate" id="depDate" required>
                <input type="date" name="arrDate" id="arrDate" required>
            </div>
            <label for="airPrice">Flight Price</label>
            <input type="number" name="airPrice" id="airPrice" required>
            <label for="airPeriod">Flight Time</label>
            <input type="text" name="airPeriod" id="airPeriod" placeholder="30m/0 Stops, 1h 30m/1 Stop" required>
            <label for="tClass">Select Ticket Class</label>
            <select name="tClass" id="tClass">
                <option>Ticket Class</option>
                <option value="Economy">Economy</option>
                <option value="Premium Class">Premium Class</option>
                <option value="Business Class">Business Class</option>
                <option value="First Class">First Class</option>
            </select><br>
            <input type="submit" name="subSch" id="subSch" value="submit">
        </form>
    </div>
</div>
<script type="text/javascript">
function img_prev(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imgprev').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$('#airimg').change(function () {
    img_prev(this);
});
$(document).ready(function() {
    $(".aSch").click(function() {
        $(this).addClass("airactive");
        $(".aAir").removeClass("airactive");
        $(".aAirP").removeClass("airactive");
        $(".addAirline").fadeOut();
        $(".addSchedule").fadeIn();
        $(".addAirPort").fadeOut();
    });
    $(".aAir").click(function() {
        $(this).addClass("airactive");
        $(".aSch").removeClass("airactive");
        $(".aAirP").removeClass("airactive");
        $(".addAirline").fadeIn();
        $(".addSchedule").fadeOut();
        $(".addAirPort").fadeOut();
    });
    $(".aAirP").click(function() {
        $(this).addClass("airactive");
        $(".aSch").removeClass("airactive");
        $(".aAir").removeClass("airactive");
        $(".addAirline").fadeOut();
        $(".addSchedule").fadeOut();
        $(".addAirPort").fadeIn();
    });
    setTimeout(function(){
        $('.alertSuccessFull').fadeOut();
    }, 5000);
});
</script>
</body>
</html>