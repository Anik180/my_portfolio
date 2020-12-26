
<?php
$con=mysqli_connect("localhost", "root", "", "My quiz");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

  ?>





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  </head>
  <body>

<div class="container-fluid bg" style="background-image: url(images/pic1.jpg);">
  <h1 style="text-align:center;color:#fff; padding-top:20px;">Pharmacy Management System</h1>
  <div class="row justify-content-center">
    <div class="col-12 col-sm-6 col-md-3" style="padding-top:100px;">

      <form class="form-container">
        <div class="form-group">
          <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="User Name">

        </div>
        <div class="form-group">

          <input type="password" class="form-control" name="pass"  placeholder="Password">
        </div>

        <select class="form-control">
  <option>Select Role</option>
  <option>Admin</option>
  <option>Manager</option>
  <option>Pharmacist</option>
    <option>Salesmen</option>
</select>
<br>
<br>

<div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
      </form>
    </div>

  </div>

</div>


  </body>
</html>
