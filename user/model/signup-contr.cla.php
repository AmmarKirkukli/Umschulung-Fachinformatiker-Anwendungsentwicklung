<?php


class signupContr extends signup {

    private $username;
    private $password;
    private $email;

    public function __construct($username, $password, $email) { 
        $this->username = $username; 
        $this->password = $password; 
        $this->email = $email; 
    }

    public function signupUser() {
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
        if ($this->uidTakenCheck() === false) {
            header("location: ../index.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->username, $this->password, $this->email);
    }

    private function emptyInput() {
        $result = true; 
        if (empty($this->username) || empty($this->password) || empty($this->email)) {
            $result = false;
        }
        return $result;
    }
    
    private function invalidUid() {
        $result = true; 
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
            $result = false;
        }
        return $result;
    }
    
    private function invalidEmail() {
        $result = true; 
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }
        return $result;
    }
    
    private function uidTakenCheck() {
        $result = true; 
        if (!$this->checkUser($this->username, $this->email)) {
            $result = false;
        }
        return $result;
    }
    
}
