<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        .loginbutton{
            background-color:  rgb(220, 240, 195);
            padding: 6px 9px;   
        }

        .loginbutton:hover{
            background-color:  rgb(179, 176, 176);
            color: white;
        }

        .loginbutton a{
            color: red;
            text-decoration: none;
        }

        .loginbutton a:hover{
            color: white;
        }

        .div1{
            text-align: right;
        }

        .div2{
            text-align: center;
        }


        form{
            border-radius: 10px;
            text-align: center;
            border: 1px solid black;
            background-color: rgb(220, 240, 195);
            max-width:300px;
            margin:50px auto;
            padding: 15px 20px;
            box-shadow: 9px 9px 15px 1px gray;
        }

        label button{
            border-radius: 1px;
            width: 100%;
            padding: 7px 10px;
        }

        label button:hover{
            background-color: rgb(179, 176, 176);
        }

        div{
            padding: 10px 10px;
        }

        h3{
            margin-top: 100x;
            text-align: center;
        }

        .footer{
            text-align: center;
        }

        .footer a{
            text-decoration: none;
            text-align: center;
        }

        body{
            background-color: white;
        }

        label a{
            color: black;
        }

        label a:hover{
            color: white;
        }

    </style>

</head>
<body>

    <div class="div1">
        <button class="loginbutton"><a href="login.php">Register/Login</a></button>
    </div>

    <div class="div2">
        <img src="logo.png">
        <h1 style="font-size:60px">Farm Food</h1>
        <p style="color: green;font-size:35px">अपना बझार अपना जीवन....</p>
    </div>

    <form action="">

        <div>
            <label for="Rent"><button><a href="" style="text-decoration: none;">Rent</a></button></label>
        </div>

        <div>
            <label for="Customer"><Button><a href="" style="text-decoration: none;">Customer</a></Button></label>
        </div>

        <div>
            <label for="Supplier"><Button><a href="" style="text-decoration: none;">Supplier/Retailer</a></Button></label>
        </div>
    
    </form>

    <div class="footer">      
        <h3>Contact</h3>
        <a href="">E-Mail</a> 
        <br>
        <br>
        <a href="">Contact Number</a>
    </div>

    
    <div class="footer">      
        <h3>About us</h3>
        <p>We are helping of indian Farmers to grow more</p>
    </div>


</body>
</html>