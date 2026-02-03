<?php 

class Dbh { 


    protected function connect() {
        try {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "Umschulung-Fachinformatiker-Anwendungsentwicklung-Schuler";

            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            return $conn;

            

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage() ."<br/>";
            die();
        }
    }   
} 