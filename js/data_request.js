function postAnswer() {
  var http = new XMLHttpRequest();
  var url = "data/answer_data.php";
  http.open("POST", url, true);
  http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  http.send("test_id=&student_id=&question_id=&answer=");

  http.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("root").innerHTML = this.responseText;
    }
  };
}

postScore();
function postScore() {
  var ajaxRequest;
  var test_id = 2;
  var student_id = 333333;
  var total_question = 50;
  var correct_answer = 39;
  var score = (correct_answer * 100) / total_question;

  ajaxRequest = $.ajax({
    url: "data/score_data.php",
    type: "POST",
    data: {
      test_id: test_id,
      student_id: student_id,
      total_question: total_question,
      correct_answer: correct_answer,
      score: score
    }
  });

  ajaxRequest.done(function(data) {
    $("#test").html(data);
  });
  ajaxRequest.fail(function() {
    $("#test").text("Error");
  });
}
