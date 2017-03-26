<?php
include 'config.php';

$questions = questionsToObject(getQuestionsArray() );

?>

<div class="testingContainer">
	<div class="questionContainer">
		<form action="gradeTest.php" method="post">
			<?php
			$questionCounter = 1;
			foreach ($questions as $question){
				echo "<p> Question " . $questionCounter . ": " . $question->getQuestion() . "</p>";
				echo "<input type='hidden' name='question" . $questionCounter . "' value=" . $question->getQuestion() . "/>";
				
				foreach ($question->getQuestionArray() as $answer) {
					echo "<input type='radio' name='answer" . $questionCounter ."' value='" . $answer . "'/>";
					echo "<label class='answerLabel' for='answer" . $questionCounter ."'>" . $answer . "</label></br>";
				}
				
				echo "<p>" . $question->getImageName() . "</p>";
				echo "</br>";
				$questionCounter++;
			}
			?>
			<input type="submit" name="submitTest" />
		</form>
	</div>

</div>
</html>

