<?php

include 'includes/header.php';
include 'includes/sidebar.php';
include 'config.php';
include 'includes/data/dataHandler.php';

$questions = getQuestionsArray();
?>

<div class="testingContainer">
	<div class="questionContainer">
		<form>
			<?php
			$counter = 1;
			foreach ($questions as $question){
				echo "<p> Question " . $counter . ": " . $questions->getQuestion() . "</p>";
				
				foreach ($questions->getQuestionArray() as $answer) {
					echo "<ul class='answerList'>";
					echo "<li>" . $answer . "</p>";
					echo "</ul>";
				}
				
				echo "<p>" . $questions->getImageName() . "</p>";
				echo "</br>";
				$counter++;
			}
			?>
		</form>
	</div>

</div>
</html>

