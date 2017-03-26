<?php

include '../../config.php';

$correctAnswer = 0;
$imageName = null;

if (isset($_POST['submitQuestion'])) {
	if (isset($_POST['question'])) {
		$question = $_POST['question'];
	}
	
	if (isset($_POST['q1']) && isset($_POST['q2']) && isset($_POST['q3']) &&isset($_POST['q4'])) {
		$answers = array($_POST['q1'], $_POST['q2'], $_POST['q3'], $_POST['q4']);
	}
	for ($i = 1; $i <= 4; $i++) {
		if (isset($_POST['correctAnswer'.$i])) {
			$correctAnswer = $_POST['q'.$i];
		}
	}
	
	if (uploadFile()) {
		$imageName = $_FILES["qImage"]["name"];
	}

	setQuestion($question, $answers, $imageName, $correctAnswer);
}

function uploadFile() {
	$target_dir = "C:/xampp/htdocs/Ehacks/includes/images";
	$target_file = $target_dir . basename($_FILES["qImage"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["qImage"]["tmp_name"]);
		if($check !== false) {
			echo "size good</br>"; 
			$uploadOk = 1;
		} else {
			echo "size bad</br>";
			$uploadOk = 0;
		}
	}
	// Check if file already exists
	if (file_exists($target_file)) {
		$uploadOk = 0;
	}
	// Check file size
	if ($_FILES["qImage"]["size"] > 500000) {
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
				echo "bad file type</br>";
				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["qImage"]["tmp_name"], $target_file)) {
					echo "The file ". basename( $_FILES["qImage"]["name"]). " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}
}



//header('Location: ../../testform.php');