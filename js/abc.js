loadQ();

function loadQ() {
  /*
  *   Response[i]:
  *   - .question_id
  *   - .question
  *   - .option_A to .option_E
  *   - .answer
  */
  var req = new XMLHttpRequest();
  req.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var response = JSON.parse(this.responseText);
      contentList(response);
      // document.getElementById("root").innerHTML = response[1].question;
    }
  }
  req.open("GET", "data/08-03-2019.json", true);
  req.send();
}

function contentList(response) {
  var output = "<h1></h1>";
  for (let i=0; i < response.length; i++){
    output += "<li>";
    output += "<h3>" + response[i].question + "</h3>";
    output += "<input type='radio' name= '" + response[i].question_id +"' value='option_A'>" + response[i].option_A + "<br>";
    output += "<input type='radio' name= '" + response[i].question_id +"' value='option_B'>" + response[i].option_B + "<br>";
    output += "<input type='radio' name= '" + response[i].question_id +"' value='option_C'>" + response[i].option_C + "<br>";
    output += "<input type='radio' name= '" + response[i].question_id +"' value='option_D'>" + response[i].option_D + "<br>";
    output += "<input type='radio' name= '" + response[i].question_id +"' value='option_E'>" + response[i].option_E + "<br>";
    output += "</li>";
  }
  output += "<br>" + "<input type='button' value='Submit Answers'>";
      document.getElementById("quiz-content").innerHTML = output;
}
