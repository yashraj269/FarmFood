<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            background-image: url("bg.png");
            background-color: #cccccc;
        }
        .heading{
            margin-top: 90px;
            text-align: center;
        }

        form{
            border-radius: 10px;
            text-align: center;
            border: 1px solid black;
            background-color: rgb(211, 211, 249);
            max-width:300px;
            margin:50px auto;
            padding: 30px 25px;
            box-shadow: 9px 9px 15px 1px gray;
        }

        .userapassword{
            margin-top: 10px;
        }

        .input-control{
            height: 25px;
            width: 200px;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        button{
            padding: 6px 9px;
            margin-top: 10px;
            margin-left: 25px;
        }

        button:hover{
            background-color: gray;
        }

        button a{
            border-radius: 1px;
            text-decoration: none;
            color: black;
        }

        button a:hover{
            color: white;
        }

    </style>

</head>
<body style="background-image:url(bg.png);">

    <div>
        <button><a href="Home.html" style="text-decoration: none;">Go Back Home</a></button>
    </div>
    
    <div class="heading">
        <h1>Login</h1>
    </div>
    <?php
        session_start();
        require_once "db.php";
        if(isset($_SESSION['username'])!="") {
        header("Location: Customer.php");
        }
        if (isset($_POST['login'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        if(strlen($password) < 6) {
        $password_error = "Password must be minimum of 6 characters";
        }  
        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '" . $username. "' and password = '" . ($password). "'");
        if(!empty($result)){
        if ($row = mysqli_fetch_array($result)) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        header("Location: Customer.php");
        } 
        }else {
        $error_message = "Incorrect Email or Password!!!";
        }
        }
    ?>
    <form action="login.php" method="POST">

        <div class="userapassword">
            <label for="User Name">User Name</label>
            <input class="input-control" type="text" name="username" placeholder=" Enter your User Name">

            <label for="Password">Password</label>
            <input class="input-control" type="text" name="password" placeholder="Enter your Password">
        </div>

        <button type="login" value="login" name="login"><a href="">Login</a></button>

    </form>
    <h4 style="text-align: center;"><a href="" style="text-decoration: none;">Forgot User Name/Password</a></h4>
    <h3 style="text-align: center;"><a href="register.php">Create an Account</a></h3>

</body>
</html>