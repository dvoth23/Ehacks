<?php

include 'includes/header.php';
include 'includes/sidebar.php';
include 'config.php';
include 'includes/data/dataHandler.php';

$questions = questionsToObject(getQuestionsArray() );

?>

<div class="testingContainer">
	<div class="questionContainer">
		<form>
			<?php
			$questionCounter = 1;
			foreach ($questions as $question){
				echo "<p> Question " . $questionCounter . ": " . $question->getQuestion() . "</p>";
				
				$answerCounter = 1;
				foreach ($question->getQuestionArray() as $answer) {
					echo "<input type='radio' name='answer" . $answerCounter . "' />";
					echo "<label class='answerLabel' for='answer" . $answerCounter ."'>" . $answer . "</label></br>";
					$answerCounter++;
				}
				
				echo "<p>" . $question->getImageName() . "</p>";
				echo "</br>";
				$questionCounter++;
			}
			?>
		</form>
	</div>

</div>
</html>

