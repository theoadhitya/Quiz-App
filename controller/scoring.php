<?php
class Scoring {
    private $conn;
    private $table_name = "user_score";
    private $test_id;
    private $student_id;
    private $total_question;
    private $correct_answer;
    private $score;
    
    public function __construct($conn, $test_id, $student_id, $total_question, $correct_answer, $score) {
        $this->conn = $conn;
        $this->test_id = $test_id;
        $this->student_id = $student_id;
        $this->total_question = $total_question;
        $this->correct_answer = $correct_answer;
        $this->score = $score;
    }

    /* Insert Score into Database */
    function insert() {
        $query = "INSERT INTO " . $this->table_name .
            " VALUE(:test_id, :student_id, :total_question, :correct_answer , :score)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':test_id', $this->test_id);
        $stmt->bindParam(':student_id', $this->student_id);
        $stmt->bindParam(':total_question', $this->total_question);
        $stmt->bindParam(':correct_answer', $this->correct_answer);
        $stmt->bindParam(':score', $this->score);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    /* Fetch All Score from Database*/
    function getScore() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result, JSON_PRETTY_PRINT);
        }
    }
}
?>