<?php
    include "multi.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!--CSS link-->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>University Attendance</title>
    </head>

    <body>

        <div class="container">
            <div class="login-box">
                <h2>Login</h2>
                <form action="multi.php" method="post">
                    <div class="input-box">
                        <input type="text" name="aid" id="name" required>
                        <label>ID:</label>
                    </div>
                    <div class="input-box">
                        <input type="password" name="apassword" id="password" required>
                        <label>Password:</label>
                        <i class="fas fa-eye-slash"></i>
                    </div>
                    
                    <!--<input type="checkbox" name="ifadmin" id="ifadmin">-->
                    <button type="submit" name="btnLogin" class="btn" >Login</button>
                </form>
            </div>

            <span style="--i:0;"></span>
            <span style="--i:1;"></span>
            <span style="--i:2;"></span>
            <span style="--i:3;"></span>
            <span style="--i:4;"></span>
            <span style="--i:5;"></span>
            <span style="--i:6;"></span>
            <span style="--i:7;"></span>
            <span style="--i:8;"></span>
            <span style="--i:9;"></span>
            <span style="--i:10;"></span>
            <span style="--i:11;"></span>
            <span style="--i:12;"></span>
            <span style="--i:13;"></span>
            <span style="--i:14;"></span>
            <span style="--i:15;"></span>
            <span style="--i:16;"></span>
            <span style="--i:17;"></span>
            <span style="--i:18;"></span>
            <span style="--i:19;"></span>
            <span style="--i:20;"></span>
            <span style="--i:21;"></span>
            <span style="--i:22;"></span>
            <span style="--i:23;"></span>
            <span style="--i:24;"></span>
            <span style="--i:25;"></span>
            <span style="--i:26;"></span>
            <span style="--i:27;"></span>
            <span style="--i:28;"></span>
            <span style="--i:29;"></span>
            <span style="--i:30;"></span>

        </div>

        <!--
        <div class="container">
			<form action="logincheck.php" method="post">
                <label for="name">ID:</label>
                <input type="text" placeholder="Enter your ID" name="aid" id="name" required>
                <br>
                <label for="password">Password:</label>
                <input type="password" placeholder="Enter password" name="apassword" id="password" required>
                <br>
                <button type="submit" id="submitBtnn" disabled>LOGIN</button>
            </form>
        </div>
        -->
        <!--JS link-->
        <script src="script.js"></script>
    </body>
</html>