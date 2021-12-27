<?php
class Database
{
    private $host = host;
    private $user = user;
    private $password = password;
    private $dbname = dbname;
    private $dbh;
    private $stmt;

    public function __construct()
    {
        try {
            $this->dbh = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            var_dump($result);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function query()
    {
    }
}