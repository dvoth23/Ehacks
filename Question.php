<?php
class Question{
	private $question;
	public $answers;
	private $imageName;
	
	
	public function __construct($question, $answers, $imageName)
	{
		$this->question = $question;
		$this->answers = $answers;
		$this->cAnswer = $imageName;
	}
	
	//ACCESSORS
	public function getQuestion(){
		return $question;
	}
	public function getAnswer(){
		return $cAnswer;
	}
	public function getImageName(){
		return $imageName;
	}
	public function getQuestionArray(){
		return $this->answers;
	}
	public function setImageURL($imageName){
		$this->answer = $imageName;
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
