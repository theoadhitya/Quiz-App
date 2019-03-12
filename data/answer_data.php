<?php
include "../controller/config.php";
include "../controller/answer.php";

$test_id = $_POST['test_id'];
$student_id = $_POST['student_id'];
$question_id = $_POST['question_id'];
$answer = $_POST['answer'];

$post_answer = new Answer($conn, $test_id, $student_id, $question_id, $answer);

if ($post_answer->insert()) {
    echo "Success";
} else {
    echo "Some Problems Occured";
}
?>