<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "farmfood";

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $msg = '';
        if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'yash' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'tutorialspoint';
                  
                  echo 'You have entered valid use name and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
    ?>