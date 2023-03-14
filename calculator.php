<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>IT 207 Final Grade Determiner</title>
		<meta name="Generator" content="Cocoa HTML Writer" />
		<meta name="CocoaVersion" content="2113.6" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		
			<ul>
			<center> <a href="https://helios.vse.gmu.edu/~dpatel45/IT207/">Home Page</a></center>
			</ul>
			<?php // This PHP function updates the date, after last changes were made to the fiele.
					echo "<b> Last changed:</b> ".date("F d Y H:i:s", filectime("calculator.php"));
			?>
			<br><br><br>
		<div class="wholepagecontent">
				<form action="finalgrade.php" method="post">
					<h3>Participation</h3>
					Earned: <input type="text" name="earnedParticipation">
					Max: <input type="text" name="maxParticipation">
					Weight (percentage): <input type="text" name="weightParticipation">

					<h3>Quizzes</h3>
					Earned: <input type="text" name="earnedQuiz">
					Max: <input type="text" name="maxQuiz">
					Weight (percentage): <input type="text" name="weightQuiz">

					<h3>Lab Assignments</h3>
					Earned: <input type="text" name="earnedLab">
					Max: <input type="text" name="maxLab">
					Weight (percentage): <input type="text" name="weightLab">

					<h3>Practica</h3>
					Earned: <input type="text" name="earnedPracticum">
					Max: <input type="text" name="maxPracticum">
					Weight (percentage): <input type="text" name="weightPracticum">
					<br><br><br><br>
					<center> <input type="submit" value="Submit"> </center>
					<br><br>
			</form>
		</div>
	
	</body>
</html>