<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=<, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <title>Document</title>
</head>

<body>
  <h1>Hej</h1>

  <?php $name = "";
  $email = "";
  $number = "";
  $nameErr = "";
  $emailErr = "";
  $numberErr = ""; ?>

  <form action="sendpost.inc.php" method="post" >


    Name: <input type="text" name="name"> <br>

    Email: <input type="text" name="email"><br>

    Phone number: <input type="number" name="number">
    <button type="submit" name="submit" value="submit">Skicka</button>


  </form>
</body>

</html>

<?php
  if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
      echo "<p> Fill in all fields!</p>";
    } else if($_GET["error"] == "invalidName"){
      echo "<p> Please choose a proper name </p>";
    }else if($_GET["error"] == "invalidemail"){
      echo "<p> Please choose a proper email </p>";
    }else if($_GET["error"] == "none"){
      echo "<p> Thank you! </p>";
    }
  }

?>
