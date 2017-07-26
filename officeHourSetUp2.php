<!--Andrew Givans-->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html xmlns="http://w3.org/1999/xhtml">
<head>
<title>Andrew Givans Assignmnet 2: Office Hours Set Up</title>
<link rel="stylesheet" href="calendarStyle.css" type="text/css" />
</head>
<body>

<div class="labContent">


<div class="calendar">
<?php
date_default_timezone_set('America/New_York');
//Displays the header for the calendar
echo '<div class="monthHeader">' . date("F Y") . " Office Hour Set Up" . '</div>';
//Outputs the array of weekdays
$setHeader = array("Day:", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
	for($x=0; $x<6; $x++){
		echo '<div class="hourSetHeader">' . $setHeader[$x] . '</div>';
	}
echo '<div class ="hourSet">' . "Hours: " . '</div>';
?>

<div class ="hourSet">
 
<form method ="post" action="calendar2.php">

Time: </br> <select multiple = "multiple" name = "mondayTimes[]">
	<option value = "7:00 AM"> 7:00 AM </option>
	<option value = "7:30 AM"> 7:30 AM </option>
	<option value = "8:00 AM"> 8:00 AM </option>
	<option value = "8:30 AM "> 8:30 AM </option>
	<option value = "9:00 AM"> 9:00 AM </option>
	<option value = "9:30 AM"> 9:30 AM </option>
	<option value = "10:00 AM"> 10:00 AM </option>
	<option value = "10:30 AM"> 10:30 AM </option>
	<option value = "11:00 AM"> 11:00 AM </option>
	<option value = "11:30 AM "> 11:30 AM </option>
	<option value = "12:00 PM"> 12:00 PM </option>
	<option value = "12:30 PM"> 12:30 PM </option>
	<option value = "1:00 PM"> 1:00 PM </option>
	<option value = "1:30 PM"> 1:30 PM </option>
	<option value = "2:00 PM"> 2:00 PM </option>
	<option value = "2:30 PM"> 2:30 PM </option>
	<option value = "3:00 PM"> 3:00 PM </option>
	<option value = "3:30 PM"> 3:30 PM </option>
	<option value = "4:00 PM"> 4:00 PM </option>
	<option value = "4:30 PM"> 4:30 PM </option>
	<option value = "5:00 PM"> 5:00 PM </option>
	<option value = "5:30 PM"> 5:30 PM </option>
	<option value = "6:00 PM"> 6:00 PM </option>
	<option value = "6:30 PM"> 6:30 PM </option>
	<option value = "7:00 PM"> 7:00 PM </option>
	<option value = "7:30 PM"> 7:30 PM </option>
	<option value = "8:00 PM"> 8:00 PM </option>
	<option value = "8:30 PM"> 8:30 PM </option>
	<option value = "9:00 PM"> 9:00 PM </option>
	<option value = "9:30 PM"> 9:30 PM </option>
	<option value = "10:00 PM"> 10:00 PM </option>
</select>

</div>

<div class ="hourSet">

Time: </br> <select multiple = "multiple" name = "tuesdayTimes[]">
	<option value = "7:00 AM"> 7:00 AM </option>
	<option value = "7:30 AM"> 7:30 AM </option>
	<option value = "8:00 AM"> 8:00 AM </option>
	<option value = "8:30 AM "> 8:30 AM </option>
	<option value = "9:00 AM"> 9:00 AM </option>
	<option value = "9:30 AM"> 9:30 AM </option>
	<option value = "10:00 AM"> 10:00 AM </option>
	<option value = "10:30 AM"> 10:30 AM </option>
	<option value = "11:00 AM"> 11:00 AM </option>
	<option value = "11:30 AM "> 11:30 AM </option>
	<option value = "12:00 PM"> 12:00 PM </option>
	<option value = "12:30 PM"> 12:30 PM </option>
	<option value = "1:00 PM"> 1:00 PM </option>
	<option value = "1:30 PM"> 1:30 PM </option>
	<option value = "2:00 PM"> 2:00 PM </option>
	<option value = "2:30 PM"> 2:30 PM </option>
	<option value = "3:00 PM"> 3:00 PM </option>
	<option value = "3:30 PM"> 3:30 PM </option>
	<option value = "4:00 PM"> 4:00 PM </option>
	<option value = "4:30 PM"> 4:30 PM </option>
	<option value = "5:00 PM"> 5:00 PM </option>
	<option value = "5:30 PM"> 5:30 PM </option>
	<option value = "6:00 PM"> 6:00 PM </option>
	<option value = "6:30 PM"> 6:30 PM </option>
	<option value = "7:00 PM"> 7:00 PM </option>
	<option value = "7:30 PM"> 7:30 PM </option>
	<option value = "8:00 PM"> 8:00 PM </option>
	<option value = "8:30 PM"> 8:30 PM </option>
	<option value = "9:00 PM"> 9:00 PM </option>
	<option value = "9:30 PM"> 9:30 PM </option>
	<option value = "10:00 PM"> 10:00 PM </option>
</select>


</div>

<div class ="hourSet">

Time: </br> <select multiple = "multiple" name = "wednesdayTimes[]">
	<option value = "7:00 AM"> 7:00 AM </option>
	<option value = "7:30 AM"> 7:30 AM </option>
	<option value = "8:00 AM"> 8:00 AM </option>
	<option value = "8:30 AM "> 8:30 AM </option>
	<option value = "9:00 AM"> 9:00 AM </option>
	<option value = "9:30 AM"> 9:30 AM </option>
	<option value = "10:00 AM"> 10:00 AM </option>
	<option value = "10:30 AM"> 10:30 AM </option>
	<option value = "11:00 AM"> 11:00 AM </option>
	<option value = "11:30 AM "> 11:30 AM </option>
	<option value = "12:00 PM"> 12:00 PM </option>
	<option value = "12:30 PM"> 12:30 PM </option>
	<option value = "1:00 PM"> 1:00 PM </option>
	<option value = "1:30 PM"> 1:30 PM </option>
	<option value = "2:00 PM"> 2:00 PM </option>
	<option value = "2:30 PM"> 2:30 PM </option>
	<option value = "3:00 PM"> 3:00 PM </option>
	<option value = "3:30 PM"> 3:30 PM </option>
	<option value = "4:00 PM"> 4:00 PM </option>
	<option value = "4:30 PM"> 4:30 PM </option>
	<option value = "5:00 PM"> 5:00 PM </option>
	<option value = "5:30 PM"> 5:30 PM </option>
	<option value = "6:00 PM"> 6:00 PM </option>
	<option value = "6:30 PM"> 6:30 PM </option>
	<option value = "7:00 PM"> 7:00 PM </option>
	<option value = "7:30 PM"> 7:30 PM </option>
	<option value = "8:00 PM"> 8:00 PM </option>
	<option value = "8:30 PM"> 8:30 PM </option>
	<option value = "9:00 PM"> 9:00 PM </option>
	<option value = "9:30 PM"> 9:30 PM </option>
	<option value = "10:00 PM"> 10:00 PM </option>
</select>

</div>

<div class ="hourSet">

Time: </br> <select multiple = "multiple" name = "thursdayTimes[]">
	<option value = "7:00 AM"> 7:00 AM </option>
	<option value = "7:30 AM"> 7:30 AM </option>
	<option value = "8:00 AM"> 8:00 AM </option>
	<option value = "8:30 AM "> 8:30 AM </option>
	<option value = "9:00 AM"> 9:00 AM </option>
	<option value = "9:30 AM"> 9:30 AM </option>
	<option value = "10:00 AM"> 10:00 AM </option>
	<option value = "10:30 AM"> 10:30 AM </option>
	<option value = "11:00 AM"> 11:00 AM </option>
	<option value = "11:30 AM "> 11:30 AM </option>
	<option value = "12:00 PM"> 12:00 PM </option>
	<option value = "12:30 PM"> 12:30 PM </option>
	<option value = "1:00 PM"> 1:00 PM </option>
	<option value = "1:30 PM"> 1:30 PM </option>
	<option value = "2:00 PM"> 2:00 PM </option>
	<option value = "2:30 PM"> 2:30 PM </option>
	<option value = "3:00 PM"> 3:00 PM </option>
	<option value = "3:30 PM"> 3:30 PM </option>
	<option value = "4:00 PM"> 4:00 PM </option>
	<option value = "4:30 PM"> 4:30 PM </option>
	<option value = "5:00 PM"> 5:00 PM </option>
	<option value = "5:30 PM"> 5:30 PM </option>
	<option value = "6:00 PM"> 6:00 PM </option>
	<option value = "6:30 PM"> 6:30 PM </option>
	<option value = "7:00 PM"> 7:00 PM </option>
	<option value = "7:30 PM"> 7:30 PM </option>
	<option value = "8:00 PM"> 8:00 PM </option>
	<option value = "8:30 PM"> 8:30 PM </option>
	<option value = "9:00 PM"> 9:00 PM </option>
	<option value = "9:30 PM"> 9:30 PM </option>
	<option value = "10:00 PM"> 10:00 PM </option>
</select>

</div>

<div class ="hourSet">
 
Time: </br> <select multiple = "multiple" name = "fridayTimes[]">
	<option value = "7:00 AM"> 7:00 AM </option>
	<option value = "7:30 AM"> 7:30 AM </option>
	<option value = "8:00 AM"> 8:00 AM </option>
	<option value = "8:30 AM "> 8:30 AM </option>
	<option value = "9:00 AM"> 9:00 AM </option>
	<option value = "9:30 AM"> 9:30 AM </option>
	<option value = "10:00 AM"> 10:00 AM </option>
	<option value = "10:30 AM"> 10:30 AM </option>
	<option value = "11:00 AM"> 11:00 AM </option>
	<option value = "11:30 AM "> 11:30 AM </option>
	<option value = "12:00 PM"> 12:00 PM </option>
	<option value = "12:30 PM"> 12:30 PM </option>
	<option value = "1:00 PM"> 1:00 PM </option>
	<option value = "1:30 PM"> 1:30 PM </option>
	<option value = "2:00 PM"> 2:00 PM </option>
	<option value = "2:30 PM"> 2:30 PM </option>
	<option value = "3:00 PM"> 3:00 PM </option>
	<option value = "3:30 PM"> 3:30 PM </option>
	<option value = "4:00 PM"> 4:00 PM </option>
	<option value = "4:30 PM"> 4:30 PM </option>
	<option value = "5:00 PM"> 5:00 PM </option>
	<option value = "5:30 PM"> 5:30 PM </option>
	<option value = "6:00 PM"> 6:00 PM </option>
	<option value = "6:30 PM"> 6:30 PM </option>
	<option value = "7:00 PM"> 7:00 PM </option>
	<option value = "7:30 PM"> 7:30 PM </option>
	<option value = "8:00 PM"> 8:00 PM </option>
	<option value = "8:30 PM"> 8:30 PM </option>
	<option value = "9:00 PM"> 9:00 PM </option>
	<option value = "9:30 PM"> 9:30 PM </option>
	<option value = "10:00 PM"> 10:00 PM </option>
</select>


</div>

<div class = "monthHeader">

<input type = "submit" value = "Submit Times">

</form>

</div>

</div>


</body>
</html>
