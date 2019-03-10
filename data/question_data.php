<?php
include "../controller/config.php";

include "../controller/question.php";
$questions = (new Question($conn))->getAllQuestion();
echo $questions;
?>