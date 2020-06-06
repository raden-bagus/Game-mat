<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <title>MathGame - Result</title>
   </head>
   <body>

   </body>

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</html>

<?php
session_start();
// cek kebenaran jawaban user
if (isset($_POST["submit"])) {
   if ($_POST["ans"] == $_SESSION["correct_ans"]) {
      $_SESSION['score'] += 10;
   } else {
      $_SESSION['score'] -= 2;
      $_SESSION['lives'] -= 1;
   }
}
if ($_SESSION["lives"] > 0) {
   echo "<p align=center>Your score : " . $_SESSION['score'] . "</p>";
   echo "<p align=center>Remaining lives : " . $_SESSION['lives'] . "</p>";
   echo '<a href="index.php"><p align=center><b>Klik disini untuk soal selanjutnya</b></p></a>';
   exit;
    } elseif ($_SESSION["lives"] == 0) {
        $nama = $_SESSION["nama"];
        $skor = $_SESSION["skor"];
        header("Location: gameover.php");
        exit;
    }
?>
