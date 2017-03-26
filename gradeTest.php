<?php

include 'config.php';

$questions = questionsToObject(getQuestionsArray());
$questionCounter = 1;

foreach($questions as $question) {
	
	$selectedAnswer = $_POST['answer' . $questionCounter];
	
	if ($selectedAnswer == $question->getcAnswer()) {
		echo "Question " . $questionCounter . " correct</br>";
	} else {
		echo "Question " . $questionCounter . " incorrect</br>";
	}
	$questionCounter++;
}