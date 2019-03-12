<?php
include "../controller/config.php";
include "../controller/score.php";

$test_id = $_POST['test_id'];
$student_id = $_POST['student_id'];
$total_question = $_POST['total_question'];
$correct_answer = $_POST['correct_answer'];
$score = $_POST['score'];

$post_score = new Score ($conn, $test_id, $student_id, $total_question, $correct_answer, $score);
if ($post_score->insert()) {
    echo "Success";
} else {
    echo "Error";
}
?>