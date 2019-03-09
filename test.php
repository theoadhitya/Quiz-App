<?php
include "controller/config.php";
include "controller/question.php";
include "controller/user.php";

/*
*   Testing Create Json Files from Question Bank
*/
$question = (new Question($conn))->getAllQuestion();
$file_name = 'data/'.date('d-m-Y') . '.json';

if (file_put_contents($file_name, $question)) {
    echo $file_name . ' file created';
} else {
    echo "Error Occured";
}

echo "<br>";

/********************************
*   Testing Get Users from DB   *
*********************************/
// $users = (new User($conn))->getAllUsers();
// print_r($users);
// echo "<br>" . $users[0]['name'];

echo "<br>";



?>