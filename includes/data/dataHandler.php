<?php

function setQuestion() {

	$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$question = "Who was the first President of the United States?";
	$answers = [
			'a' => 0,
			'b' => 1,
			'c' => 0,
			'd' => 0
	];
	$correctAnswer;
	foreach ($answers as $answer) {
		if ($answer === 1) {
			$correctAnswer = $answer;
		}
	}
	$disorder = 1;
	
	
	$answers = serialize($answers);
	$sql = "INSERT INTO questions(question, answers, disorderID, correctAnswer) 
			VALUES (:q, :a, :d, :ca)";
	
	try {
		$stmt = $pdo->prepare($sql);
	                                              
		$stmt->bindParam(':q', $question);       
		$stmt->bindParam(':a', $answers); 
		$stmt->bindParam(':d', $disorder);
		$stmt->bindParam(':ca',$correctAnswer);
		                                      
		$stmt->execute(); 
	} catch (PDOException $e) {
		echo $e;
	}
	
}

function getDisorder() {
	
}

function getQuestionsArray($disorderId = 0) {
	
	$questions = array();

	$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$sql = "SELECT question, answers, imageName 
			FROM questions";
	
	try {
		$stmt = $pdo->prepare($sql);         
		$stmt->execute(); 
	} catch (PDOException $e) {
		echo $e;
	}
	while ($row = $stmt->fetchAll()) {
		$questions[] = $row;
	}
	
	return arrayToObject($questions);
}

function arrayToObject($array) {
	$answers = unserialize($array[0][0]['answers']);
	
	$question  = new Question($array[0][0]['question'], $answers, $array[0][0]['imageName']);
	return $question;
}

function countQuestions() {
	return count(getQuestionsArray());
}





?>