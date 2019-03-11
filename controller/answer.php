<?php
class Answer {
    private $conn;
    private $table_name = "student_answer";
    private $test_id;
    private $student_id;
    private $question_id; 
    private $answer;

    public function __construct($conn, $test_id, $student_id, $question_id, $answer) {
        $this->conn = $conn;
        $this->test_id = $test_id;
        $this->student_id = $student_id;
        $this->question_id = $question_id;
        $this->answer = $answer;
    }

    function insert() {
        $query = "INSERT INTO " . $this->table_name
            . " VALUE(:test_id, :student_id, :question_id, :answer)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':test_id', $this->test_id);
        $stmt->bindParam(':student_id', $this->student_id);
        $stmt->bindParam(':question_id', $this->question_id);
        $stmt->bindParam(':answer', $this->answer);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>