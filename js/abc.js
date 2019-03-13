loadQ();

function loadQ() {
  var req = new XMLHttpRequest();
  req.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var response = JSON.parse(this.responseText);
      contentList(response);
    }
  }
  req.open("GET", "data/08-03-2019.json", true);
  req.send();
}

function countScore() {
  var req = new XMLHttpRequest();
  req.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var response = JSON.parse(this.responseText);
      checkAnswers(response);
    }
  }
  req.open("GET", "data/08-03-2019.json", true);
  req.send();
}



function contentList(response){
  var output = "<h1></h1>";
  for (let i = 0; i < response.length; i++){
    output += "<li>";
    output += "<h3>" + response[i].question + "</h3>";
    output += "<input type='radio' name= '" + response[i].question_id +"' value='a'>" + response[i].option_A + "<br>";
    output += "<input type='radio' name= '" + response[i].question_id +"' value='b'>" + response[i].option_B + "<br>";
    output += "<input type='radio' name= '" + response[i].question_id +"' value='c'>" + response[i].option_C + "<br>";
    output += "<input type='radio' name= '" + response[i].question_id +"' value='d'>" + response[i].option_D + "<br>";
    output += "<input type='radio' name= '" + response[i].question_id +"' value='e'>" + response[i].option_E + "<br>";
    output += "</li>";
  }
  document.getElementById("quiz-content").innerHTML = output;
}

function checkAnswers(response){
  var score = 0;
  for(let i = 0; i < response.length; i++){
    var userinput = $("input[name ="+response[i].question_id+"]:checked").val();
    if ( userinput == response[i].answer)
    score += 1;
  }
  console.log(score);
  return score;
}