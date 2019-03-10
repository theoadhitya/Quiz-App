<?php
include "controller/config.php";

/****************************************************
*   Testing Create Json Files from Question Bank    *
****************************************************/
// include "controller/question.php";
// $question = (new Question($conn))->getAllQuestion();
// $file_name = 'data/'.date('d-m-Y') . '.json';

// if (file_put_contents($file_name, $question)) {
//     echo $file_name . ' file created';
// } else {
//     echo "Error Occured";
// }

// echo "<br>";

/*********************************
 *   Testing Get Users from DB   *
 ********************************/
// include "controller/user.php";
// $users = (new User($conn))->getAllUsers();
// print_r($users);
// echo "<br>" . $users[0]['name'];

// echo "<br>";

/****************************
*   Testing Posting Answer  *
****************************/
// public function __construct($conn, $test_id, $student_id, $question_id, $answer)
// include "controller/answer.php";
$temp_test_id = 1;
$temp_student_id = 111111111;
// $temp_question_id = 1;
// $temp_answer = 'a';
// $answer = (new Answer($conn, $temp_test_id, $temp_student_id, $temp_question_id, $temp_answer))->insert();
// echo $answer;

// echo "<br>";

/***************************
*   Testing Posting Score  *
***************************/
// public public function __construct($conn, $test_id, $student_id, $total_question, $correct_answer, $score)
include "controller/scoring.php";
$temp_total_question = 50;
$temp_correct_answer = 37;
$temp_score = ($temp_correct_answer * 100) / $temp_total_question;
$score = (new Scoring($conn, $temp_test_id, $temp_student_id, $temp_total_question, $temp_correct_answer, $temp_score))->insert();
echo $score;
?>