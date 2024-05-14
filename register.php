<?php
 include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
		crossorigin="anonymous"></script>
        <style>
            .container {
                position:absolute;
                left: 0;
               /* bottom: 0;*/
                margin-left: 160px;
                max-width: 500px;
                max-height: 700px;
                padding-top: 1px;
                color: #f1f1f1;
                background: rgb(0, 0, 0);
                background: rgba(0, 0, 0, 0.5);
            }
        </style>
</head>
<body>
    <div class="container-fluid" style="background-image:url(img5); height:690px; ">
        <form class="container" method="post">
            <div class="form-group">
                <label for="login">Register 
                    <br>
                    or<a href="login.html" style="color:white;">Login yourself</a>
                </label>
            </div>
            <div class="form-group">
                <label for="username">Enter name</label>
                <input type="text" class="form-control" name="username" placeholder="Name" required>
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Please fill out this field</div>
            </div>
            <div class="form-group">
				<label for="Phone Number">Enter phonenumber</label>
				<input type="number" class="form-control" name="number" placeholder="Number" required>
				<div class="visually-hidden"></div>
				<div class="valid-feedback">Valid</div>
				<div class="invalid-feedback">Please fill out this field</div>
			</div>
            <div class="form-group">
				<label for="Email">Enter Email</label>
				<input type="email" class="form-control" name="email" placeholder="Email" required>
				<div class="valid-feedback">Valid</div>
				<div class="invalid-feedback">Please fill out this field</div>
			</div>
            <div class="form-group">
				<label for="Password">Create Password</label>
				<input type="password" class="form-control" name="pass" placeholder="Password" required>
				<div class="visually-hidden"></div>
				<div class="valid-feedback">Valid</div>
				<div class="invalid-feedback">Please fill out this field</div>
			</div>
			<button type="submit" name='submit' style="background-color: rgb(245, 203, 140);">Register</button>
        </form>
    </div>

<?php
include "dbcon.php";
if(isset($_POST['submit'])){
   $name = $_POST['username'];
   $email = $_POST['email'];
   $number = $_POST['number'];
   $pass = $_POST['pass'];

   $insertquery = "INSERT INTO `user`(`name`, `email`, `number`,`pass`) VALUES ('$name','$email','$number','$pass')";
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
