<?php

$errors = "";
$db = mysqli_connect("154.0.173.16", "tmampuxe_tmampuru", "@321Tmampuru", "tmampuxe_quiz");
if (isset($_POST['submit'])) {
		if (empty($_POST['question'])) {
			$errors = "You must fill in the question";
		} else{
			$question = $_POST['question'];
      $answer1 = $_POST['answer1'];
      $answer2 = $_POST['answer2'];
      $answer3 = $_POST['answer3'];
      $answer4 = $_POST['answer4'];
      $category = $_POST['category'];
			$sql = "INSERT INTO quiz (question, answer1, answer2, answer3, answer4, category) VALUES ('$question', '$answer1', '$answer2', '$answer3', '$answer4', '$category')";
			mysqli_query($db, $sql);
			header('location: index.php');
		}
}

if (isset($_GET['del_question'])) {
	$id = $_GET['del_question'];

	mysqli_query($db, "DELETE FROM quiz WHERE id=".$id);
	header('location: index.php');
}
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
    <!-- Enter Question -->

      <div class="input-group mb-3" method="post" action="index.php">
        <form method="post" action="index.php">
        <input name="question" type="text" class="form-control" placeholder="Enter Question" aria-label="Enter Question" aria-describedby="button-addon2"><br>
				  <div class="col"><input name="answer1" type="text" class="form-control" placeholder="Correct Answer 1" aria-label="Possible Answer 1" aria-describedby="button-addon2"></div>
				  <div class="col"><input name="answer2" type="text" class="form-control" placeholder="Possible Answer 2" aria-label="Possible Answer 2" aria-describedby="button-addon2"></div>
				  <div class="col"><input name="answer3" type="text" class="form-control" placeholder="Possible Answer 3" aria-label="Possible Answer 3" aria-describedby="button-addon2"></div>
				  <div class="col"><input name="answer4" type="text" class="form-control" placeholder="Possible Answer 4" aria-label="Possible Answer 4" aria-describedby="button-addon2"></div><br>
				<div class="input-group mb-3">
        <select name="category" class="custom-select" id="inputGroupSelect02">
          <option name="category" selected>Select Category...</option>
          <option name="category" value="Accounts">Accounts</option>
          <option name="category" value="Mojo">Mojo</option>
          <option name="category" value="ADSL">ADSL</option>
          <option name="category" value="Fibre">Fibre</option>
          <option name="category" value="Hosting">Hosting</option>
          <option name="category" value="Mobile">Mobile</option>
          <option name="category" value="Fixed Wireless">Fixed Wireless</option>
        </select>
        <div class="input-group-append">
          <label class="input-group-text" for="inputGroupSelect02">Options</label>
          </div>
        </div><br>
        <input name="submit" type="submit" class="form-control" placeholder="Submit" aria-label="Submit" aria-describedby="button-addon2">
				<?php if (isset($errors)) { ?>
					<p class="alert"><?php echo $errors; ?></p>
				<?php } ?>
      </form>
      </div>

    <!-- List of Questions -->
    <div class="mytable">
      <table>
        <tr>
					<th>Category</th>
          <th>Question</th>
          <th>Possible answers</th>
          <th>Delete</th>
        </tr>
        <tr>
          <?php
          // load all quiz on refresh
          $quiz = mysqli_query($db, "SELECT * FROM quiz");
          $i = 1; while ($row = mysqli_fetch_array($quiz)) { ?>
          <td> <?php echo $row['category']; ?> </td>
          <td> <?php echo $i; ?>. <?php echo $row['question']; ?> </td>
					<td> <?php echo $row['answer1']. ", " . $row['answer2']. ", " . $row['answer3']. ", " . $row['answer4'];?> </td>
          <td><a href="index.php?del_question=<?php echo $row['id'] ?>">remove</a></td>
        </tr>
        <?php $i++; } ?>

      </table>

    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
