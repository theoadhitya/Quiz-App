<?php
class Question {
    private $conn;
    private $table_name = "question_bank";

    public function __construct($conn) {
        $this->conn = $conn;
    }

    function getAllQuestion() {
        $query = 'SELECT * FROM '.$this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $questions = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($questions, JSON_PRETTY_PRINT);
        }
        return false;
    }

    function insertQuestion($topic, $question_id, $question, $option_A, $option_B, $option_C, $option_D, $option_E, $answer) {
        $query = 'INSERT INTO ' . $this->table_name .
            ' VALUE(:topic, :question_id, :question, :option_A, :option_B, :option_C, :option_D, :option_E, :answer)';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':topic', $topic);
        $stmt->bindParam(':question_id', $question_id);
        $stmt->bindParam(':question', $question);
        $stmt->bindParam(':option_A', $option_A);
        $stmt->bindParam(':option_B', $option_B);
        $stmt->bindParam(':option_C', $option_C);
        $stmt->bindParam(':option_D', $option_D);
        $stmt->bindParam(':option_E', $option_E);
        $stmt->bindParam(':answer', $answer);
        
        if ($stmt->execute()) {
            echo "Success";
        } else {
            echo "Insert Failed";
        }
    }
}
?>