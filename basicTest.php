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
				if (!is_null($question->getImageName())) {
					echo "<img class='questionImage' src='includes/images/" . $question->getImageName() . "'/></br>";
				}
				echo "<input type='hidden' name='question" . $questionCounter . "' value=" . $question->getQuestion() . "/>";
				
				foreach ($question->getQuestionArray() as $answer) {
					echo "<input type='radio' name='answer" . $questionCounter ."' value='" . $answer . "'/>";
					echo "<label class='answerLabel' for='answer" . $questionCounter ."'>" . $answer . "</label></br>";
				}
				echo "</br>";
				$questionCounter++;
			}
			?>
			<input type="checkbox" name="informationPermission" />
			<label for="informationPermission">I give permission to send the results of this test to the email entered below: </label></br>
			<label for="email">Send to this email:</label>
			<input type="text" name="email" />
			</br>
			</br>
			<input id="submitTestButton" type="submit" name="submitTest" />
			</br></br>
		</form>
	</div>

</div>
</html>

