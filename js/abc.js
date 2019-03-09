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
      document.getElementById("root").innerHTML = response[0].question;
    }
  }
  req.open("GET", "data/08-03-2019.json", true);
  req.send();
}
