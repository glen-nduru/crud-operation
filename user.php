<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="insert into 'crud'(name,email,mobile,password)values('$name','$email','$mobile','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Data inserted successfully";
    }else{
        die(mysqli_error($con));
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Crud operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="POST">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Enter your Name"name="name"autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Enter your Email"name="email"autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Mobile</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Mobile No"name="mobile"autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Password</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Enter your Password"name="password"autocomplete="off">
  </div>
  <button type="submit" class="btn btn-primary"name="submit">Submit</button>
</form>
    </div>
  </body>
</html>
