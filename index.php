<?php
session_start();
require "koneksi.php";
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
      body {
     background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b);
     background-repeat: no-repeat;
      }
      #card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 410px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
      }
    </style>
    <title>MathGame</title>
</head>

<body>
    <div id="card"> 
      <form action="result.php" method="post" align="center">
        <?php
        $bil1 = rand(1, 20);
        $bil2 = rand(1, 20);
        $hasil = $bil1 + $bil2;

        $_SESSION['correct_ans'] = $bil1 + $bil2;
        ?>
        <center><h1>Hello, <?= $_SESSION['name'] ?> </h1></center>
        <center><p> Score : <?= $_SESSION['score'] ?> </p></center>
        <center><p> Nyawa : <?= $_SESSION['lives'] ?> </p></center>

        <center><p>Hasil <?= $bil1 ?> + <?= $bil2 ?> Adalah </p></center>
 
        <center><input type="text" name="ans" require></center>
        <center><button type="submit" name="submit">Submit Answer</button></center>
        <center><a href="logout.php" class="text-black"><br>Bukan Anda?</a></center>
      </form>
    </div> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
