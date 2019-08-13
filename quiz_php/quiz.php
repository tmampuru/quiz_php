<?php


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Training Quiz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <!-- Progress Bar -->
    <div class="progress">
      <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="quizSection">
      <div class="question">
        <p>Who the fuck are you</p>
      </div>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me">
          <p>Please please work</p>
        </label>
      </div>
    </div>

    <!-- Go to previous question -->
    <div class="changeQue">
      <ul class="pagination pagination-sm">
        <li class="page-item"><a class="page-link" href="#">Back</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
        <li class="page-item active" aria-current="page">
          <span class="page-link">
            Submit
            <span class="sr-only">(all)</span>
          </span>
        </li>
      </ul>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
