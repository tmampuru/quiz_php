<?php

$db = mysqli_connect("154.0.173.16", "tmampuxe_tmampuru", "@321Tmampuru", "tmampuxe_quiz");

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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
  $(document).ready(function () {

// One checkbox to check them all


// The box's status has changed.
      $(document).on('change', '.checkme', function () {
          var label = $(this).parent();
          if ($(this).prop('checked')) {
              label.css('color', 'white');
              label.css('background-color', '#3cbc35');
              label.css('box-shadow', '0px 0px 12px #86ff8b');
          } else {
              label.css('color', '#504d4d');
              label.css('background-color', 'white');
              label.css('box-shadow', '0px 0px 12px #ffffff');;
          }


      });


  });
  </script>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 0 1px 0 rgba(12,13,14,0.1), 0 1px 6px rgba(59,64,69,0.1);">
      <a class="navbar-brand" href="#">Quiz</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Summary</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <div class="container">
    <!-- Progress Bar -->
    <div class="progress">
      <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <!-- Quiz starts here -->
    <div style="margin: 12vh">
      <?php
      // load all quiz on refresh
      $quiz = mysqli_query($db, "SELECT * FROM quiz");
      $i = 1; while ($row = mysqli_fetch_array($quiz)) { ?>
      <div class="question">
        <p><?php echo $i; ?>. <?php echo $row['question']; ?></p>
      </div>
      <div class="checkbox mb-3">
        <form method="post" action="quiz.php">
        <label>
          <input type="checkbox" class="checkme" value="remember-me" id="checkbox1">
          <p> <?php echo $row['answer1']; ?></p>
        </label>
        <label>
          <input  type="checkbox" class="checkme" value="remember-me" id="checkbox1">
          <p> <?php echo $row['answer2']; ?></p>
        </label>
        <label>
          <input type="checkbox" class="checkme" value="remember-me" id="checkbox1">
          <p> <?php echo $row['answer3']; ?></p>
        </label>
        <label>
          <input  type="checkbox" class="checkme" value="remember-me" id="checkbox1">
          <p> <?php echo $row['answer4']; ?></p>
        </label>
      </form>
      </div>
      <?php $i++; } ?>
    </div>

    <!-- Go to previous question -->
    <div class="changeQue">
      <ul class="pagination pagination-sm justify-content-end">
        <li class="page-item"><a class="page-link" href="#">Back</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
        <li class="page-item active" aria-current="page">
          <span class="page-link">
            <input class="page-link" type="submit" name="submit" type="submit" value="Submit"></input>
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
