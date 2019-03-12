<?php
include "controller/config.php";

/****************************
*   Testing Get Question    *
****************************/
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
// $temp_test_id = 1;
// $temp_student_id = 111111111;
// $temp_question_id = 1;
// $temp_answer = 'a';
// $answer = (new Answer($conn, $temp_test_id, $temp_student_id, $temp_question_id, $temp_answer))->insert();
// echo $answer;

// echo "<br>";

/***************************
*   Testing Posting Score  *
***************************/
// public public function __construct($conn, $test_id, $student_id, $total_question, $correct_answer, $score)
// include "controller/score.php";
// $temp_total_question = 50;
// $temp_correct_answer = 37;
// $temp_score = ($temp_correct_answer * 100) / $temp_total_question;
// $score = (new Score($conn, $temp_test_id, $temp_student_id, $temp_total_question, $temp_correct_answer, $temp_score))->insert();
// echo $score;

/********************************
*   Testing Inserting Question  *
********************************/
// function insertQuestion($topic, $question_id, $question, $option_A, $option_B, $option_C, $option_D, $option_E, $answer)
include "controller/question.php";
$temp_topic = "Politic History";
$temp_question_id = 4;
$temp_question = "The first President of Indonesia";
$temp_option_A = "Asep";
$temp_option_B = "Bambang";
$temp_option_C = "Tatang";
$temp_option_D = "Kevin";
$temp_option_E = "Udin";
$temp_answer = "a";
$question = new Question($conn);
$insert = $question->insertQuestion($temp_topic, $temp_question_id, $temp_question, 
    $temp_option_A, $temp_option_B, $temp_option_C, $temp_option_D, $temp_option_E, $temp_answer);
echo $insert;
?>