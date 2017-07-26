<?php
session_start();
?>
<!--Andrew Givans-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html xmlns="http://w3.org/1999/xhtml">
<head>
<title>Andrew Givans Assignmnet 2: Event Calendar Sign Up</title>
<link rel="stylesheet" href="calendarStyle.css" type="text/css" />
</head>
<body>

<div class="labContent">

<!--Form for student to enter email  and name as well as submit-->
<div class="email">
	<form method="post" action="calendar.php"> 

	Student Name: <input type="text" name="name"/>

	Student E-Mail: <input type="text" name="studentEmail"/>

	<input type="hidden" name = "facultyEmail" value = "acgivans@gmail.com"/>
	<input type="hidden" name = "subject" value = "Appointment"/>
	<input type="hidden" name = "message" value = "<?php echo 'An advising appointment has been created'; ?>"/>

	<input type = "submit" value = "Submit Appointment">
	<input type = "reset">

<!--Sends email upon booking-->
	<?php
	//session_start();
		$To = $_POST["facultyEmail"];
		$Subject = $_POST["subject"];
		$Message = $_POST["message"];
		$Headers = 'From: ' . $_POST["studentEmail"];
		mail($To, $Subject, $Message, $Headers);

		if(isset($_POST["studentEmail"])){echo 'Email successfully sent from '; echo $_POST["studentEmail"];}
	?>

</div>

<div class="calendar">
<?php

date_default_timezone_set('America/New_York');
//Today
$today = date("d");
//This month
$month = date("m");
//This year
$year = date("Y");
//Number of days in the month
$daysInThisMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
//The day counter to increment each calendar day
$day = 1;
//Numeric representation of day of week
$firstDay =date("N", mktime(0,0,0,$month,1,$year));

//Makes sure the POST values are saved when the user submits thier email
//session_start();
if(isset($_POST['mondayTimes'])){
	$_SESSION['mondayTimes'] = $_POST['mondayTimes'];
}
if(isset($_POST['tuesdayTimes'])){
	$_SESSION['tuesdayTimes'] = $_POST['tuesdayTimes'];
}
if(isset($_POST['wednesdayTimes'])){
	$_SESSION['wednesdayTimes'] = $_POST['wednesdayTimes'];
}
if(isset($_POST['thursdayTimes'])){
	$_SESSION['thursdayTimes'] = $_POST['thursdayTimes'];
}
if(isset($_POST['fridayTimes'])){
	$_SESSION['fridayTimes'] = $_POST['fridayTimes'];
}

//Displays the header for the calendar
echo '<div class="monthHeader">' . date("F Y") . '</div>';
//Outputs the array of weekdays
$weekDays = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
	for($x=0; $x<7; $x++){
		echo '<div class="weekday">' . $weekDays[$x] . '</div>';
	}
	// Decides how many divs to add without numbers to start each month
	if($firstDay == 2)for($a=1; $a<=2; $a++){echo '<div class="day"> </div>';}
	if($firstDay == 3)for($a=1; $a<=3; $a++){echo '<div class="day"> </div>';}
	if($firstDay == 4)for($a=1; $a<=4; $a++){echo '<div class="day"> </div>';}
	if($firstDay == 5)for($a=1; $a<=5; $a++){echo '<div class="day"> </div>';}
	if($firstDay == 6)for($a=1; $a<=6; $a++){echo '<div class="day"> </div>';}
	if($firstDay == 7)for($a=1; $a<=7; $a++){echo '<div class="day"> </div>';}

	//Nested loop that will output each weekday
	for($y=1; $y<=$daysInThisMonth; $y++){ 
		if(!empty($_SESSION['mondayTimes']) && ($y % 7 == 0)){
			echo '<div class="day">';
			echo $day . '<br><br>';
			?>
			<?php foreach ($_SESSION['mondayTimes'] as $mondayTimes){echo
			'</br> <input type="radio" name="time" value = "mondayTimes" />' . $mondayTimes;} ?>
			<?php echo'</div>';
		}
		else if(!empty($_SESSION['tuesdayTimes']) && ($y==1 || $y % 7 == 1)){
			echo '<div class="day">';
			echo $day . '<br><br>';
			?>
			<?php foreach ($_SESSION['tuesdayTimes'] as $tuesdayTimes){echo
			'</br> <input type="radio" name="time" value = "tuesdayTimes" />' . $tuesdayTimes;} ?>
			<?php echo'</div>';
		}
		else if(!empty($_SESSION['wednesdayTimes']) && ($y==2 || $y % 7 == 2)){
			echo '<div class="day">';
			echo $day . '<br><br>';
			?>
			<?php foreach ($_SESSION['wednesdayTimes'] as $wednesdayTimes){echo
			'</br> <input type="radio" name="time" value = "wednesdayTimes" />' . $wednesdayTimes;} ?>
			<?php echo'</div>';
		}
		else if(!empty($_SESSION['thursdayTimes']) && ($y==3 || $y % 7 == 3)){
			echo '<div class="day">';
			echo $day . '<br><br>';
			?>
			<?php foreach ($_SESSION['thursdayTimes'] as $thursdayTimes){echo
			'</br> <input type="radio" name="time" value = "thursdayTimes" />' . $thursdayTimes;} ?>
			<?php echo'</div>';
		}
		else if(!empty($_SESSION['fridayTimes']) && ($y==4 || $y % 7 == 4)){
			echo '<div class="day">';
			echo $day . '<br><br>';
			?>
			<?php foreach ($_SESSION['fridayTimes'] as $fridayTimes){echo
			'</br> <input type="radio" name="time" value = "<?php echo $fridayTimes ?>" />' . $fridayTimes;} ?>
			<?php echo'</div>';
		}
		else{
			echo '<div class="day">' . $day . '</div>';
		}
		$day++;
		}
?>

</form>
</div>


</body>
</html>