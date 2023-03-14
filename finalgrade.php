<?php

// Variable intialization

//participation
$earnedParticipation=$_POST['earnedParticipation'];
$maxParticipation=$_POST['maxParticipation'];
$weightParticipation=$_POST['weightParticipation'];

//quiz
$earnedQuiz=$_POST['earnedQuiz'];
$maxQuiz=$_POST['maxQuiz'];
$weightQuiz=$_POST['weightQuiz'];

//Lab
$earnedLab=$_POST['earnedLab'];
$maxLab=$_POST['maxLab'];
$weightLab=$_POST['weightLab'];

//Practica
$earnedPracticum=$_POST['earnedPracticum'];
$maxPracticum=$_POST['maxPracticum'];
$weightPracticum=$_POST['weightPracticum'];




//Grade Calcualtion

$number=100; //constant Variable

function calculatePercentage($earned, $max) { // calculate percentage
    if ($max == 0) {
        return 0; // return 0 if denominator is 0 
    } else {
        return ($earned / $max) * 100; 
    }
}

function weightedPercentage($earned, $max, $weight) { // calculate weighted percentage
    if ($max == 0) {
        return 0; // return 0 if denominator is 0 to avoid division 
    } else {
        return ($earned / $max) * $weight;
    }
}

//grades are getting calculated for Particiaption, Lab, Pratica and Quiz
$parttotal = calculatePercentage($earnedParticipation, $maxParticipation);
$parttotal2 = weightedPercentage($earnedParticipation, $maxParticipation, $weightParticipation);

$quiztotal = calculatePercentage($earnedQuiz, $maxQuiz);
$quiztotal2 = weightedPercentage($earnedQuiz, $maxQuiz, $weightQuiz);

$labassign = calculatePercentage($earnedLab, $maxLab);
$labassign2 = weightedPercentage($earnedLab, $maxLab, $weightLab);

$practica = calculatePercentage($earnedPracticum, $maxPracticum);
$practica2 = weightedPercentage($earnedPracticum, $maxPracticum, $weightPracticum);


$finalgrade=((($parttotal2+$quiztotal2+$labassign2+$practica2)/$number)*$number);


//This Fuctions is used to ouput the Grade Letter for the Final Grade
function letterGrade($finalgrade){	
	if ($finalgrade >= 95) {
	    return "A+";
	} else if ($finalgrade  >= 90 AND $finalgrade  < 95) {
	    return "A";
	} else if ($finalgrade  >= 85 AND $finalgrade  < 90) {
	    return "B+.";
	} else if ($finalgrade  >= 80 AND $finalgrade  <85) {
	    return "B";
	} else if ($finalgrade  >= 75 AND $finalgrade  <80) {
	    return "C+";
	}else if ($finalgrade  >= 70 AND $finalgrade  <75) {
	    return "C";
	}else if ($finalgrade  >= 60 AND $finalgrade  <70) {
	    return "D";
	}else if ($finalgrade  >= 0 AND $finalgrade  <60) {
	    return "F";
	}
}

// Output
echo "<p>Your Participation Grade is: <b>".$parttotal."</b>% , with a weighted value: <b>".$parttotal2."</b>%</p>"; //Prints the Participation Grade
echo "<p>Your Quiz Grade is: <b>".$quiztotal."</b>% , with a weighted value: </b>".$quiztotal2."</b>%</p>"; //Prints the Quiz Grade
echo "<p>Your Lab Assignment Grade is: <b>".$labassign."</b>% , with a weighted value: <b>".$labassign2."</b>%</p>"; //Prints the Lab Assignment Grade
echo "<p>Your Practica Grade is: <b>".$practica."%</b> , with a weighted value: <b>".$practica2."</b>%</p>"; //Prints the Practica Grade
echo "<p><b>Your Final Grade is: <b>".$finalgrade."% , Final Letter Grade is: <b>".letterGrade($finalgrade)."</b></p>"; // Prints the Final Grade with a letter Grade


?>
