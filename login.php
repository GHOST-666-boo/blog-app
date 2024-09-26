<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "content/_dbconn.php";
    $email = trim($_POST['email']);
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        while ($user = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $user['password'])) {
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                header("location: dashboard.php");
            } 
            else {
                $showError = "Invalid Passowrd Plese check";
            }
        }
    } 
    else {
        $showError = "Invalid Email";
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
    <title>Login</title>
</head>

<body>
    <?php require "content/_navbar.php"; ?>
    <?php require "content/_login_form.php"; ?>
    <div class="c">

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>