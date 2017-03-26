<div class="gradetest">

<?php

include 'config.php';

if(isset($_POST['submitTest'])) {
	$questions = questionsToObject(getQuestionsArray());
	$questionCounter = 1;
	
	foreach($questions as $question) {
	
		$selectedAnswer = $_POST['answer' . $questionCounter];
	
		if ($selectedAnswer == $question->getcAnswer()) {
			echo "Question " . $questionCounter . " correct</br>";
			$question->setGotCorrect(true);
		} else {
			echo "Question " . $questionCounter . " incorrect</br>";
			$question->setGotCorrect(false);
		}
		$questionCounter++;
	}
	
	if (isset($_POST['informationPermission']) && isset($_POST['email'])) {
		header("Location: report.php?sendEmail=true&email=".$_POST['email']);
	} else {
		header("Location: report.php?sendEmail=false");
	}
	
	
}
?>
</div>