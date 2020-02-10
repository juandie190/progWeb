<?php

class Tarea{
    private $conn;

    function __construct(){
        $servername = "localhost";
        $username = "admin";
        $password = "";
        
        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
            }
        catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }
    }

    
    public function store($tarea, $importancia){
        try{
            $sql = "INSERT INTO tareas (tarea, importancia)
            VALUES ('$tarea', '$importancia')";

            // use exec() because no results are returned
            $this->conn->exec($sql);
            echo "New record created successfully";
       
        }
        catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
        
        $this->conn = null;
    }

    function index(){

    }

}
?>