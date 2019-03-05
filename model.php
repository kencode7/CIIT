<?php
session_start();
include 'connection.php';

Class Models extends Connection{

    public $conn;

	public function __construct(){

		$this->conn = (new Connection)->connect();
	}

    public function querySubmit($fullname, $email, $phone, $course, $address, $instiution, $qualification, $state, $lga, $lga, $dob, $status, $media){


		//$target_dir = "uploads/";
		//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		
		$word = $this->conn->real_escape_string($word);
		$topic = $this->conn->real_escape_string($topic);
		$media = $this->conn->real_escape_string($media);
		


		
		$sql = "INSERT into post(topic, category_id, word, picture_name, picture_size, document_name, document_size,`date`, subtitle, media) VALUES('$topic', '$category', '$word', '$picture_name','$picture_size', '$document_name', '$document_size', now(), '$section', '$media')";
		// var_dump($sql);
		$result = $this->conn->query($sql);
		if ($result == true){
			$location_picture = 'picture/';
			$location_document = 'document/';
			move_uploaded_file($document_location, $location_document.$document_name);
			move_uploaded_file($picture_location,$location_picture.$picture_name);
			
			return "<p class=''>Operation Successful</p>";
			
		}
		else{
			return "<p class=''>Operation not Successfull</p>";
		}
	}

}
?>