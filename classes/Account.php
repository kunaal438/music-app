<?php

    class Account {

        private $errorsArr;
        private $con;

        public function __construct($con) {
            $this->con = $con;
            $this->errorsArr = array();
        }

        public function register($username, $email, $pass) {
            $this->validateUsername($username);
            $this->validateEmail($email);
            $this->validatePass($pass);

            if(empty($this->errorsArr)){
                return $this->insertingintodb($username, $email, $pass);
            } else{
                return false;
            }
        }

        public function login($email, $pass) {

            $encryppt = md5($pass);

            $result = mysqli_query($this->con, "SELECT email FROM register WHERE email='$email' AND password='$encryppt'");

            if(mysqli_num_rows($result) == 1){
                return true;
            } else{
                array_push($this->errorsArr, Constant::$loginFailed);
                return false;
            }
        }

        private function insertingintodb ($username, $email, $pass) {
            $encryptedPass = md5($pass);
            $profilePic = 'assets/img/profile-pic/head_emerald.png';
            $date = date('Y-m-d');

            $result = mysqli_query($this->con, "INSERT INTO register VALUES (' ', '$username', '$email', '$encryptedPass', '$date', '$profilePic')");

            return $result;
        }

        public function getError($error) {
            if(!in_array($error, $this->errorsArr)) {
                    $error = "";
            }
			return "<span class='errorMessage'>$error</span>";
		}

        private function validateUsername($username){

            if(strlen($username) > 25 || strlen($username) < 3){
                array_push($this->errorsArr, Constant::$usernameLength);
                return;
            }

        }
        
        private function validateEmail($email){
            
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                array_push($this->errorsArr, Constant::$invalidEmail);
                return;
            }

            $checkingForExistence = mysqli_query($this->con, "SELECT email from register WHERE email='$email'");

            if(mysqli_num_rows($checkingForExistence) != 0) {
                array_push($this->errorsArr, Constant::$EmailRegistered);
                return;
            }

        }
        
        private function validatePass($password){
            
            if(strlen($password) > 25 || strlen($password) < 8){
                array_push($this->errorsArr, Constant::$passworLength);
                return;
            }

            if(preg_match('/[^A-Za-z0-9]/', $password)){
                array_push($this->errorsArr, Constant::$passworCharacters);
                return;
            }

        }

    }

?>