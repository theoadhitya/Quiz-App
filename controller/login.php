<?php
class Login {
    private $conn;
    private $table_name = "user";

    private $user;
    private $student_id;
    private $password;

    public function __construct($conn) {
        $this->conn = $conn;
    }
    
    public function login() {
        $user = $this->checkUser();
        if ($user) {
            $this->user = $user;
            session_start();
            $_SESSION['name'] = $user['name'];
            $_SESSION['student_id'] = $user['student_id'];
            return $user['name'];
        }
        return false;
    }

    public function checkUser() {
        $query = 'SELECT * FROM ' . $this->table_name
            . ' WHERE student_id = :student_id AND'
            . ' password = :password';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':student_id', $this->getStudentId());
        $stmt->bindParam(':password', $this->getPassword());
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $fetched_data = $stmt->fetch(PDO::FETCH_ASSOC);
            return $fetched_data;
        }
        return false;
    }

    public function setStudentId($student_id) {
        $this->student_id = $student_id;
    }

    public function getStudentId() {
        return $this->student_id;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getPassword() {
        return $this->password;
    }
}
?>