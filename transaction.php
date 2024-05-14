<?php
 include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Credit Card Fraud Detection - Perform Transaction</title>
  <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
    /* Add your custom styles here */
    /* For example: */
    body {
      padding: 20px;
    }
            .container {
                position:fix;
                left: 0;
                top:0;
                margin: 50px;
                max-width: 450px;
                padding: 16px;
                color: #f1f1f1;
                background: rgb(0, 0, 0);
                background: rgba(0, 0, 0, 0.5);
            }

  </style>
</head>
<body>

<div class="container-fluid" style="background-color: white">
    <nav class="navbar navbar-expand-lg   ">
        <div class="row  fixed-top" style="height:90px; background-color: rgb(194, 190, 147) ">
          <div class="col-md-1">
            <div class="collapse navbar-collapse" id="navbarNav">
                 <a href="homepage.html" class="image"> <img src="img12.jpg" style="height: 90px; width: 180px; padding-right: 80px; "></a>
            </div>
          </div>
        <div class="col-md-11">
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav">
              <li class="nav-item" style="padding-top: 30px;">
              <a class="nav-link" href="home.html"style="padding-left: 30px; padding-right: 20px;font-size: x-large;"><i class="fas fa-shopping-about us"> About Us</i></a>
            </li>
            <li class="nav-item" style=" padding-top: 30px;padding-left: 10px;">
              <a class="nav-link" href="dashboard.html" class="fraud" style=" padding-right: 20px; font-size: x-large;">  <i class="fas fa-dashboard"> Dashboard </i></a>
            </li>
            <li class="nav-item " style="padding-left: 20px; padding-top: 30px;">
              <a class="nav-link" href="transaction.php" class="fraud" style="padding-left: 30px; padding-right: 20px; font-size: x-large;"> <i class="fas fa-transactions"> Transactions </i></a>
            </li>
            <li class="nav-item" style="padding-top: 30px; padding-left: 40px;">
              <a class="nav-link" href="alert.html" style="padding-left: 30px; padding-right: 20px;font-size: x-large;"> <i class="fas fa-alerts">Alerts</i></a>
            </li>
            <li class="nav-item" style="padding-top: 30px; padding-left: 40px;">
              <a class="nav-link" href="help.html"style="padding-left: 30px; padding-right: 20px;font-size: x-large;"> <i class="fas fa-help/support">Help/Support </i></a>
            </li>
            
            <li class="nav-item" style="padding-top: 30px; padding-left: 40px;">
              
              <a class="nav-link  data-bs-toggle=offcanvas data-bs-target=demo" href="logout.html"style="padding-left: 30px; padding-right: 20px;font-size: x-large;"> <i class="fas fa-user">Logout </i></a>
            
            </li>
            
          </ul>
        </div>
      </div>
    </div>
    </nav>
        <div class="row" style=" height:50px;"></div>
    <h1 class="mt-4 mb-4">Perform Transaction</h1>
    
    <!-- Transaction Form -->
    <form class="container" method="post">
      <div class="form-group">
        <label for="amount">Amount</label>
        <input type="text" class="form-control" name="amount" placeholder="Enter amount" required>
      </div>
      <div class="form-group">
        <label for="cardNumber">Card Number</label>
        <input type="text" class="form-control" name="card" placeholder="Enter card number" required>
      </div>
      <div class="form-group">
        <label for="expiryDate">Expiry Date</label>
        <input type="text" class="form-control" name="exp" placeholder="MM/YYYY" required>
      </div>
      <div class="form-group">
        <label for="cvv">CVV</label>
        <input type="password" class="form-control" name="cvv" placeholder="Enter CVV" required>
      </div>
      <button type="submit" name='submit' class="btn btn-primary">Submit</button>
    </form>

  </div>
        </div>
  <div class="row" style=" height:200px;"></div>
  <!--start of footer part-->
<footer class="bg-dark text-light">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <h5 style="color:white;">About Us</h5>
        <p style="color: white;">We are here to protect u fraud happening on credit card while making the transaction.</p>
        <p style="color: white;">So do your transaction with us and trust the process . </p>
      </div>
      <div class="col-md-4">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <li style="color: white;"><a href="home.html" style="color: aliceblue;">About Us</a></li>
          <li style="color: white;"><a href="dashboard.html" style="color: aliceblue;">Dashboard</a></li>
          <li style="color: white;"><a href="transaction.html" style="color: aliceblue;">Transactions</a></li>
          <li style="color: white;"><a href="alert.html" style="color: aliceblue;">Alerts</a></li>
          <li style="color: white;"><a href="help.html" style="color: aliceblue;">Help/Support</a></li>
          <li style="color: white;"><a href="logout.html" style="color: aliceblue;">Logout</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5 style="color: white;">Contact Us</h5>
        <address>
          <strong style="color: white;">Address:</strong><br>
           123 Main Street, New Delhi, NY 10001<br>
          India<br>
          <br>
          <strong style="color: white;">Phone:</strong><br>
          (123) 456-7890<br>
          <br>
          <strong style="color: white;">Email:</strong><br>
          fraudfix@gmail.com
        </address>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-6">
        <p style="color: white;">&copy; 2024 Fraud Fix. All rights reserved.</p>
      </div>
      <div class="col-3" style="padding-right: 50px;">
        <ul class="list-inline">
          <li class="list-inline-item"style="color: white;"><a href="https://www.freeprivacypolicy.com/live/863ab0d7-2216-4ab2-8c90-1ccc61acf5a0"style="color: aliceblue;">Privacy Policy</a></li>
          <li class="list-inline-item" style="color: white;"><a href="https://www.termsandconditionsgenerator.com/live.php?token=6slSOU2NpmexNQK3Qghmh8GNx18edCdS"style="color: aliceblue;">Terms of Use</a></li>
        </ul>
      </div>
    </div>
  </div>
  <?php
include "dbcon.php";
if(isset($_POST['submit'])){
   $amount = $_POST['amount'];
   $card = $_POST['card'];
   $exp = $_POST['exp'];
   $cvv = $_POST['cvv'];

   $insertquery = "INSERT INTO `transaction`(`amount`, `card`, `exp`,`cvv`) VALUES ('$amount','$card','$exp','$cvv')";
   $query = mysqli_query($con,$insertquery);
}  
if($query){
   ?>
   <script>
       alert("insert sucesssfull")
   </script>
   <?php
}
else{
   ?>
   <script>
       alert(" no insert ")
   </script>
   <?php
}
?>
</body>
</html>
