<?php
class Config {

    private $host = "localhost";
    private $db_name = "quizapp";
    private $user = "root";
    private $pass = "";
    private $conn;

    public function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" .
                $this->db_name, $this->user, $this->pass);
        } catch (PDOException $exception) {
            echo "Connection Error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}

$config = new Config();
$conn = $config->connect();
?>