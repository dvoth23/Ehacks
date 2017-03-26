<?php

function setQuestion($question, $answers, $imageName = null, $correctAnswer) {

	$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	//All default data
// 	$question = "Who is the current President of the United States?";
// 	$answers = [
// 			'a' => 'Barack Obama',
// 			'b' => 'Donald Trump',
// 			'c' => 'Harry Truman',
// 			'd' => 'George Washington'
// 	];
// 	$correctAnswer;
// 	foreach ($answers as $answer) {
// 		if ($answer === 1) {
// 			$correctAnswer = $answer;
// 		}
// 	}
// 	$disorder = 1;
	
	$answers = serialize($answers);
	$sql = "INSERT INTO questions(question, answers, correctAnswer, imageName) 
			VALUES (:q, :a, :ca, :i)";
	
	try {
		$stmt = $pdo->prepare($sql);
	                                              
		$stmt->bindParam(':q', $question);       
		$stmt->bindParam(':a', $answers); 
		$stmt->bindParam(':ca', $correctAnswer);
		$stmt->bindParam(':i', $imageName);
		
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
	
	$sql = "SELECT question, answers, imageName, correctAnswer 
			FROM questions";
	
	try {
		$stmt = $pdo->prepare($sql);         
		$stmt->execute(); 
	} catch (PDOException $e) {
		echo $e;
	}
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$questions[] = $row;
	}
	return $questions;
}

function questionsToObject($questions) {
	$questionsArray = array();
	
	$questionsCounter = 0;
	foreach ($questions as $question) {
		$answers = unserialize($question['answers']);
		$questionsArray[] = new Question($question['question'],
										 $answers, 
										 $question['imageName'],
										 $question['correctAnswer'] );
		$questionsCounter++;
	}
	return $questionsArray;
}

function countQuestions() {
	return count(getQuestionsArray());
}





?>