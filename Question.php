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
		return $this->question;
	}
	public function getImageName(){
		return $this->imageName;
	}
	public function getQuestionArray(){
		return $this->answers;
	}
	public function setImageName($imageName){
		$this->imageName = $imageName;
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
