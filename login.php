<?php
session_start();
require "koneksi.php";

if (isset($_SESSION["login"])) {
   $_SESSION["score"] = 0;
   $_SESSION["lives"] = 5;
   header("Location: index.php");
   exit;
}
if (isset($_POST["login"])) {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $_SESSION["name"] = $nama;
    $_SESSION["email"] = $email;
    $_SESSION["score"] = 0;
    $_SESSION["lives"] = 5;
    $_SESSION["login"] = true;
    $query = "INSERT INTO uts_login SET nama='$nama', email='$email', skor=$_SESSION[score]";
    mysqli_query($conn, $query);
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

   <head>
      <meta charset="UTF-8">
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
	#card-content {
      	      padding: 12px 44px;
	}
	#card-title {
      	      font-family: "Raleway Thin", sans-serif;
              letter-spacing: 4px;
              padding-bottom: 23px;
              padding-top: 13px;
              text-align: center;
	}
	.underline-title {
     	      background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
              height: 2px;
              margin: -1.1rem auto 0 auto;
              width: 89px;
        } 
        a {
    	    text-decoration: none;
	}
      </style>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">      
      <title>MathGame</title>
   </head>

   <body>
      <center><h1>Math Game</h1></center> 

      <div id="card">
        <div id="card-content">
          <div id="card-title">
            <h2>LOGIN</h2>
            <div class="underline-title"></div>
          </div> 
	 
        </div>
        <div class="container">

           <form action="" method="post" align="center">
              <div class="form group">
                 <label for="nama">Nama :</label>
                 <input type="text" name="nama" id="nama" required>
              </div>
              <div class="form-group">
                 <label for="email">Email :</label>
                 <input type="text" name="email" id="email" required>
              </div>
              <button class="btn btn-primary" type="submit" name="login"><b>Login</b></button>
           </form>

        </div>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   </body>

</html>
