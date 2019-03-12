<?php
class User {
    private $conn;
    private $table_name = "user";

    private $student_id;
    private $student_name;
    private $password;

    public function __construct($conn) {
        $this->conn = $conn;
    }
    
    function insert($student_id, $student_name, $password) {
        $query = 'INSERT INTO ' . $this->table_name
            . ' VALUES(:student_id, :student_name, :password)';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':student_id', $student_id);
        $stmt->bindParam(':student_name', $student_name);
        $stmt->bindParam(':password', $password);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function getAllUsers() {
        $query = 'SELECT * FROM ' . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $users;
        }

        return false;
    }
}
?>