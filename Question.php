<?php
class Question{
	private $question;
	public $answers;
	private $imageURL;
	private $cAnswer;
	
	
	public function __construct($question, $answers, $cAnswer){
		$this->question = $question;
		$this->cAnswer = $cAnswer;
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
	public function getQuestionArray(){
		return $this->answers;
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