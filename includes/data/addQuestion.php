<?php

include '../../config.php';

$correctAnswer = 0;

if (isset($_POST['question'])) {
	$question = $_POST['question'];	
}

if (isset($_POST['q1']) && isset($_POST['q2']) && isset($_POST['q3']) &&isset($_POST['q4'])) {
	$answers = array($_POST['q1'], $_POST['q2'], $_POST['q3'], $_POST['q4']);
}
for ($i = 1; $i <= 4; $i++) {
	if (isset($_POST['correctAnswer'.$i])) {
		$correctAnswer = $_POST['q'.$i];
	} 
}

setQuestion($question, $answers, $correctAnswer);

header('Location: ../../testform.php');