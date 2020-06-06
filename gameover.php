<?php
session_start();
include "koneksi.php";
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
$nama = $_SESSION["name"];
$email = $_SESSION["email"];
$query = "INSERT INTO uts_login SET nama='$nama', email='$email', skor=$_SESSION[score]";
mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>MathGame - Game Over!</title>
</head>

<body>

   <div class=result align=center>
      <p>Halo <?= $_SESSION['name'] ?>, sayang sekali permainan telah berakhir</p>
      <p>Your final score is : <?= $_SESSION['score'] ?></p>
   </div>

    <div class="container" align=center>

        <table class="table table-striped table-light">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Skor</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $result = mysqli_query($conn, "SELECT * FROM uts_login ORDER BY skor DESC LIMIT 10");
                $no = 1;
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>
            <td>" . $no . "</td>
            <td>" . $row['nama'] . "</td>
            <td>" . $row['skor'] . "</td>
            </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>

        <a href="login.php" class="btn btn-primary"><b>Main Lagi?</b></a>
        <a href="logout.php" class="btn btn-primary"><b>Logout</b></a>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>
