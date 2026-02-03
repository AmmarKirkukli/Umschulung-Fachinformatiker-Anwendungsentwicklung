
<?php

    class updateUserContr extends updateUser {

        private $new_username;
        private $new_password;
        private $new_email;
        private $username;

        public function __construct($new_username, $new_password, $new_email, $username) { 
            $this->new_username = $new_username; 
            $this->new_password  = $new_password ; 
            $this->new_email = $new_email; 
            $this->username = $username;
        }

        public function updateUsers() {
            if ($this->emptyInput() === false) {
                header("location: ../index.php?error=emptyinput");
                exit();
            }
            if ($this->invalidUid() === false) {
                header("location: ../index.php?error=username");
                exit();
            }
            if ($this->invalidEmail() === false) {
                header("location: ../index.php?error=email");
                exit();
            }


            $this->setUpdate($this->new_username, $this->new_password, $this->new_email, $this->username);
        }

        private function emptyInput() {
            $result = true; 
            if (empty($this->new_username) || empty($this->new_password )) {
                $result = false;
            }
            return $result;
        }
        
        private function invalidUid() {
            $result = true; 
            if (!preg_match("/^[a-zA-Z0-9]*$/", $this->new_username)) {
                $result = false;
            }
            return $result;
        }
        
        private function invalidEmail() {
            $result = true; 
            if (!filter_var($this->new_email, FILTER_VALIDATE_EMAIL)){
                $result = false;
            }
            return $result;
        } 
    }
?>

