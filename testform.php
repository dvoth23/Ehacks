<?php
include 'config.php';
?>


<?php 

$nameErr = $questionErr = $answerError = "";
$test = $question = $q1 = $q2 = $q3 = $q4 = $cAnswer = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["test"])) {
		$nameErr = "Test name is required";
	} else {
		$test = test_input($_POST["test"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			$nameErr = "Only letters and white space allowed";
		}
	}
}
if (empty($_POST["question"])) {
		$questionErr = "Question is required";
	} else {
		$question = test_input($_POST["question"]);
		}
	

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["q1"])) {
		$answerError = "Answer text is required";
	} else {
		$q1 = test_input($_POST["q1"]);}}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["q2"])) {
		$answerError = "Answer text is required";
	} else {
		$q2 = test_input($_POST["q2"]);}}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["q3"])) {
		$answerError = "Answer text is required";
	} else {
		$q3 = test_input($_POST["q3"]);}}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["q4"])) {
		$answerError = "Answer text is required";
	} else {
		$q4 = test_input($_POST["q4"]);}}
	
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
<div class="testform">
<h2>Custom Test Creation: </h2>
<p><span class="error">* required field.</span></p>
<form name="questionForm" method="post" action="includes/data/addQuestion.php">  
<!--
  Test Name: <input type="text" name="test" value="<?php //echo $test;?>">
  <span class="error">* <?php //echo $nameErr;?></span>
  <br><br>
  -->
  Question: <input type="text" name="question" value="<?php echo $question;?>" required>
  <span class="error">* <?php echo $questionErr;?></span>
  <br><br>

  Answers (Mark the Correct One):<br>
<input type="checkbox" name="correctAnswer1" value="selected1" /> <input class="answer" type = "text" name = "q1" required/> <br>
<input type="checkbox" name="correctAnswer2" value="selected2"/> <input class ="answer" type = "text" name = "q2" required/> <br>
<input type="checkbox" name="correctAnswer3" value="selected3" /> <input class = "answer" type = "text" name = "q3" required/> <br>
<input type="checkbox" name="correctAnswer4" value="selected4"/> <input class = "answer" type = "text" name = "q4" required/> <br>
  <span class="error"> <?php echo $answerError;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</div>