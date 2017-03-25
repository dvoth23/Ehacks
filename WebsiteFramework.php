
<?php
include 'includes/header.php';
include 'includes/sidebar.php';
include 'config.php';
$question = new Question('placeholder', array('yes', 'no', 'maybe', 'absolutely not'), 'yes');
$questions = $question->getQuestionArray();

?>

<div class="answers">
		<ul>
			<li> <?php echo $questions[0]; ?> </li>
			<li> <?php echo $questions[1]; ?> </li>
			<li> <?php echo $questions[2]; ?> </li>
			<li> <?php echo $questions[3]; ?> </li>
		</ul>
	</div>

	<div class="question">
		<h1>Picture</h1>
		<h2>Actual Question</h2>
		<p></p>
	</div>
	
</body>
</html>
