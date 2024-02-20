<?php
class Connection_Class
{
    // Properties
    private $dbhost;
    private $dbname;
    private $dbuser;
    private $dbpass;
    private $connect;

    //Setters
    function Set_Connection()
    {
        $this->dbhost = 'localhost';
        $this->dbname = 'ecom_website';
        $this->dbuser = 'root';
        $this->dbpass = '';
    }

    //Getters
    function Get_dbhost()
    {
        return $this->dbhost;
    }
    function Get_dbname()
    {
        return $this->dbname;
    }
    function Get_dbuser()
    {
        return $this->dbuser;
    }
    function Get_dbpass()
    {
        return $this->dbpass;
    }
    function Get_connect()
    {
        return $this->connect;
    }
    // Methods
    function Create_Connection(): string
    {
        try {
            //calling setters
            $this->Set_Connection();
            //connect with the database
            $this->connect = new PDO("mysql:host=" . $this->Get_dbhost() . ";dbname=" . $this->Get_dbname(), $this->Get_dbuser(), $this->Get_dbpass());
            // Convert the PDO object to an int
            $message = "Successfull";
        } catch (PDOException $e) {
            $message = "Error : " . $e->getMessage() . "<br/>";
        }
        return $message;
    }
}
class CRUD_Operation
{
    function select_query($stmt): array
    {
        $paths = new paths();
        $Connection_Class = new Connection_Class();
        $return = $Connection_Class->Create_Connection();
        if ($return != 'Successfull') {
            // Redirect the browser to example.com
            header("Location: " . $paths->home . "connection_fail.php?message=" . $return);
        } else {
            $local_connect = $Connection_Class->Get_connect();
            $stm = $local_connect->query($stmt);
            $rows = $stm->fetchAll(PDO::FETCH_ASSOC);
        }
        return $rows;
    }
}
$obj2 = new Connection_Class();
$obj3 = new CRUD_Operation();
