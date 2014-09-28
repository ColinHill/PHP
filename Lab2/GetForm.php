<!DOCTYPE html>
<html>
<head>
    <title>What is my Zodiac?</title>
</head>
<body>
<h3>Your Results:</h3>

<?php
$fname = "";
$lname = "";
$zodiac = "";
$month = "";
$day = "";

if ($_GET["fname"] AND $_GET["lname"] AND $_GET["month"] AND $_GET["day"])
{
    $month = $_GET['month'];
    $day = $_GET['day'];

    echo "<p>Hello, " . $_GET['fname'] . " " . $_GET['lname'] . "!</p>";
    echo "<p>Your Zodiac sign is: ";
    echo  zodiac($month, $day, $zodiac);
}

else
{
    echo "<p>You must fill out all four fields.</p>";

}
/*
I got the dates and logical operations for this function from http://www.internoetics.com
*/
function zodiac($month, $day, $zodiac) {

	   if     ( ( $month == 03 AND $day > 20 ) OR ( $month == 04 AND $day < 20 ) ) { $zodiac = "Aries"; }
	   elseif ( ( $month == 04 AND $day > 19 ) OR ( $month == 05 AND $day < 21 ) ) { $zodiac = "Taurus"; }
	   elseif ( ( $month == 05 AND $day > 20 ) OR ( $month == 06 AND $day < 21 ) ) { $zodiac = "Gemini"; }
	   elseif ( ( $month == 06 AND $day > 20 ) OR ( $month == 07 AND $day < 23 ) ) { $zodiac = "Cancer"; }
	   elseif ( ( $month == 07 AND $day > 22 ) OR ( $month == 08 AND $day < 23 ) ) { $zodiac = "Leo"; }
	   elseif ( ( $month == 08 AND $day > 22 ) OR ( $month == 09 AND $day < 23 ) ) { $zodiac = "Virgo"; }
	   elseif ( ( $month == 09 AND $day > 22 ) OR ( $month == 10 AND $day < 23 ) ) { $zodiac = "Libra"; }
	   elseif ( ( $month == 10 AND $day > 22 ) OR ( $month == 11 AND $day < 22 ) ) { $zodiac = "Scorpio"; }
	   elseif ( ( $month == 11 AND $day > 21 ) OR ( $month == 12 AND $day < 22 ) ) { $zodiac = "Sagittarius"; }
	   elseif ( ( $month == 12 AND $day > 21 ) OR ( $month == 01 AND $day < 20 ) ) { $zodiac = "Capricorn"; }
	   elseif ( ( $month == 01 AND $day > 19 ) OR ( $month == 02 AND $day < 19 ) ) { $zodiac = "Aquarius"; }
	   elseif ( ( $month == 02 AND $day > 18 ) OR ( $month == 03 AND $day < 21 ) ) { $zodiac = "Pisces"; }

   return $zodiac;
	}
?>
<p><a href="GetForm.html">Go back.</a></p>
</body>
</html>
