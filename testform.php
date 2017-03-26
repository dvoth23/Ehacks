<?php
include 'config.php';
include 'includes/header.php';
include 'includes/sidebar.php';
?>

<div class="testform">
<form>

<h1> Custom Test Creation: </h1>

<p> Test Name: <input type="text">  <br><br>
Question: <input style = "margin-left: 11px;" type="text"> <br>
Mark Correct Answer: <br>
<input type="checkbox" name="correct answer" value="Answer 1" > <input type = "text" ans1 = "answer 1" > <br>
<input type="checkbox" name="correct answer" value="Answer 2"> <input type = "text" ans2 = "answer 2" > <br>
<input type="checkbox" name="correct answer" value="Answer 3" > <input type = "text" ans3 = "answer 3" > <br>
<input type="checkbox" name="correct answer" value="Answer 4"> <input type = "text" ans4 = "answer 4" > <br>

<br></p>

<input type="submit" value="Submit">

</div>