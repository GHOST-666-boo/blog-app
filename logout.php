<?php 

session_start();
session_unset();
session_destroy();

// header("location: login.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="content/navbar.css" rel="stylesheet">
    <link href="content/form.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
    <style>
        body {
            box-sizing:border-box;
        }
        .logout{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;

        
        

        }
        .i{
            width: 700px;
            background-color: rgb(140, 151, 165);
            padding: 100px;
            border-radius: 20px;
            text-align: center;
            display: flex;
            flex-direction: inherit;
            width: 700px;
            align-items: center;
        }
    </style>
</head>

<body>
    <?php require "content/_navbar.php"; ?>
    <div class="logout">
        <div class="i"><h2>You are signed out of your account</h2>
        <p>It's a good idea to close all brower windows</p></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>