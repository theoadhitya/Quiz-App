<?php
class Question {
    private $conn;
    private $table_name = "question_bank";

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllQuestion() {
        $query = 'SELECT * FROM '.$this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $questions = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return (json_encode($questions));
        }
        return false;
    }
}
?>