<?php
class User {
    private $conn;
    private $table_name = "user";

    private $student_id;
    private $student_name;
    private $password;

    public function __construct($conn, $student_id, $student_name, $password) {
        $this->conn = $conn;
        $this->setStudentId($student_id);
        $this->setStudentName($student_name);
        $this->setPassword($password);
    }
    
    function insert() {
        $query = 'INSERT INTO ' . $this->table_name
            . ' VALUES(:student_id, :student_name, :password)';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':student_id', $this->getStudentId());
        $stmt->bindParam(':student_name', $this->getStudentName());
        $stmt->bindParam(':password', $this->getPassword());

        if ($stmt->exeute()) {
            return true;
        } else {
            return false;
        }
    }

    // function getAllUsers() {
    //     $query = 'SELECT * FROM ' . $this->table_name;
    //     $stmt = $this->conn->prepare($query);
    //     $stmt->execute();

    //     if ($stmt->rowCount() > 0) {
    //         $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //         return $users;
    //     }

    //     return false;
    // }

    function setStudentId($student_id) {       
        $this->student_id = $student_id;
    }

    function getStudentId() {
        return $this->student_id;
    }

    function setStudentName($student_name) {
        $this->student_name = $student_name;
    }

    function getStudentName() {
        return $this->student_name;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function getPassword() {
        return $this->password;
    }
}
?>