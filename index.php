<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="index.css">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, intial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Quiz App Test</title>
  </head>

  <body>
  <nav class="navbar">
      <div class="container-fluid">
        <div class ="navbar-header">
          <a class ="brandlogo" href ="#">SareJeroQuiz</a>
        </div>
          <ul class ="nav navbar-nav navbar-right">
              <li><a href ="#"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
              <li><a href ="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
      </div>
      </div>
      </div>
    </nav>
    <div id="root">
      <p id="test"></p>
      <ol id="quiz-content"></ol>
      <button id ="submit-answer" class="button" onclick="countScore()">Submit Answer</button>
    </div>
    <script src="js/abc.js" type="text/javascript"></script>
    <script src="js/data_request.js" type="text/javascript"></script>
  </body>
</html>
