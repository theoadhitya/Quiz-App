<?php
class Answer {
    private $conn;
    private $table_name = "student_answer";

    public function __construct($conn) {
        $this->conn = $conn;
    }

    function insert($student_id, $question_id, $answer) {
        $query = "INSERT INTO " . $this->table_name
            . " VALUE(:student_id, :question_id, :answer)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':student_id', $student_id);
        $stmt->bindParam(':question_id', $question_id);
        $stmt->bindParam(':answer', $answer);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>