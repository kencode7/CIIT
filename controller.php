<?php

include 'model.php';
Class Controller extends Models{
    public $fullname;
    public $email;
    public $phone;
    public $course;
    public $address;
    public $institution;
    public $qualification;
    public $state;
    public $lga;
    public $dob;
    public $status;
    public $gender;
    public $kin;
    public $kinaddress;
    public $kinrelationship;
    public $kinphone;
    public $publicity;

    public function SubmitForm(){
        if (isset($_POST['submit'])){
            $this->fullname = $_POST['fullname'];
			$this->email = $_POST['email'];
			$this->phone = $_POST['phone'];
			$this->course = $_POST['course'];
            $this->address = $_POST['address'];
            $this->fullname = $_POST['institution'];
			$this->email = $_POST['qualification'];
			$this->phone = $_POST['state'];
			$this->course = $_POST['lga'];
            $this->address = $_POST['dob'];
            $this->fullname = $_POST['status'];
			$this->email = $_POST['gender'];
			$this->phone = $_POST['kin'];
			$this->course = $_POST['kinaddress'];
            $this->address = $_POST['kinrelationship'];
            $this->fullname = $_POST['kinphone'];
            $this->email = $_POST['publicity'];
            
            $error = array();
			$success = array();

            if(empty($this->fullname) or empty($this->email) or empty($this->phone) or empty($this->course) or empty($this->address) or 
            empty($this->status) or empty($this->gender)){
				$error[0] = "<p>Name, Email, Phone Number, Course Status and Gender is required</p>"; 
			}
        }
    }
}

?>