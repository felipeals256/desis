<?php

class Connect {
  
    private $servername = "db";
    private $username = "mysql";
    private $password = "test";
    private $database = "bdd";

    public $conn;

 

    public function getConection(){

        $this->conn = new mysqli($this->servername, $this->username, $this->password,$this->database);
        $this->conn->set_charset('utf8mb4');

        if ($conn->connect_error) {
          die("Connection failed: " . $this->conn->connect_error);
        }

        

    }

    public function exec($query){
        $this->getConection();
        if ($stmt = $this->conn->prepare($query)){

            $stmt->execute();
            $stmt->close();
            $this->conn->close();
            
        }else{
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function query($query){

        $this->getConection();

        $result = $this->conn->query($query);

        if (!$result) {
            die("Error en la consulta: " . $this->conn->error);
        }

        $data=[];
        while($row = $result->fetch_assoc()) {
            array_push($data,$row);
        }
       
        $this->conn->close();

        return $data;


    }

}

?>