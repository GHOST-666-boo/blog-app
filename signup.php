<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "content/_dbconn.php";
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    
    
    $exist = false;
    $sql = "SELECT * FROM `users` WHERE  email = '$email' OR username ='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num > 0){
        $showError = "Username or email already exists!";
    }
    else{
        if (($password == $cpassword)){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (username, email, password)VALUES('$username','$email','$hash')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
            }
        }
        else {
            $showError = "Password do not match";
        }
    } 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="content/navbar.css" rel="stylesheet">
    <link href="content/form.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>SignUp</title>
</head>

<body>
    <?php require "content/_navbar.php"; ?>
    <?php require "content/_form.php"; ?>
<div class="c">



</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>