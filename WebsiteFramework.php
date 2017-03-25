
<?php
include 'includes/header.php';
include 'includes/sidebar.php';
include 'config.php';
$question = new Question('placeholder', array('yes', 'no', 'maybe', 'absolutely not'), 'yes');
$questions = $question->getQuestionArray();

?>
<div class="description">

<h2>Welcome to</h2>
<h2>The Stimulus Project</h2>
<p> This project is designed to stimulate individuals with <br> memory disorders by creating tests with a <br> more personal touch to them.   </p>
</div>
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
