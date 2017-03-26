
<?php
include 'config.php';
$question = new Question('placeholder', array('yes', 'no', 'maybe', 'absolutely not'), 'yes');
$questions = $question->getQuestionArray();

?>
<div class="description">

<h2>Welcome to <br>The Stimulus Project</h2>
<p> This project is designed to stimulate individuals with <br> memory disorders by creating tests with a <br> more personal touch.</p>
</div>
	
</body>
</html>
