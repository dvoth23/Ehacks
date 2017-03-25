<?php
class Question{
	private $question;
	private $answers;
	private $imageURL;
	private $cAnswer;
	
	public function __construct($question, $answers, $cAnswer){
		setQuestion($question);
		setAnswer($cAnswer);
	}
	
	//ACCESSORS
	public function getQuestion(){
		return $question;
	}
	public function getAnswer(){
		return $cAnswer;
	}
	public function getImageURL(){
		return $imageURL;
	}
	public function setQuestion($question){
		$this->question = $question;
	}
	public function setAnswer($cAnswer){
		$this->answer = $cAnswer;
	}
	public function setImageURL($imageURL){
		$this->answer = $imageURL;
	}
	
	//CORRECT ANSWER OR NOT
	public function isCorrect($inputAnswer){
		if ($cAnswer == $inputAnswer){
			return true;
		}
		else{
			return false;
		}
	}
	
	//DISPLAYS
	public function displayQuestion(){
		print $question;
	}
	public function displayAns(){
		print $cAnswer;
	}
}
?>