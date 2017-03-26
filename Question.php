<?php
class Question{
	private $question;
	public $answers;
	private $imageName;
	private $cAnswer;
	private $gotCorrect = false;
	
	
	public function __construct($question, $answers, $imageName, $cAnswer)
	{
		$this->question = $question;
		$this->answers = $answers;
		$this->imageName = $imageName;
		$this->cAnswer = $cAnswer;
	}
	
	//ACCESSORS
	public function getQuestion(){
		return $this->question;
	}
	public function getImageName(){
		return $this->imageName;
	}
	public function getcAnswer(){
		return $this->cAnswer;
	}
	public function getQuestionArray(){
		return $this->answers;
	}
	public function setImageName($imageName){
		$this->imageName = $imageName;
	}
	public function setGotCorrect($gotCorrect) {
		$this->gotCorrect = $gotCorrect;
	}
	public function isCorrect() {
		return $this->gotCorrect;
	}
}
?> 
