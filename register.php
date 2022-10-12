<?php
require_once "db.php";
if(isset($_SESSION['username'])!="") {
header("Location: dashboard.php");
}
if (isset($_POST['signup'])) {
$name = mysqli_real_escape_string($conn, $_POST['name']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$mobile_no = mysqli_real_escape_string($conn, $_POST['mobile_no']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
$name_error = "Name must contain only alphabets and space";
}
if(mysqli_query($conn, "INSERT INTO users(Name, username, mobile_no ,password) VALUES('" . $name . "', '" . $username . "', '" . $mobile_no . "', '" . $password . "')")) {
header("location: login.php");
exit();
} else {
echo "Error: " ; "" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Register Now</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-lg-8 col-offset-2">
<div class="page-header">
<h2>Farm Food</h2>
<p></p>
</div>
<p>Please fill all fields in the form</p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control" value="" maxlength="50" required="">
<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
</div>
<div class="form-group ">
<label>Username</label>
<input type="text" name="username" class="form-control" value="" maxlength="30" required="">
<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
</div>
<div class="form-group">
<label>Mobile</label>
<input type="text" name="mobile_no" class="form-control" value="" maxlength="12" required="">
<span class="text-danger"><?php if (isset($mobile_error)) echo $mobile_error; ?></span>
</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" value="" maxlength="8" required="">
<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
</div>  
<input type="submit" class="btn btn-primary" name="signup" value="submit">
Already have a account?<a href="login.php" class="btn btn-default">Login</a>
</form>
</div>
</div>    
</div>
</body>
</html>