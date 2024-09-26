<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

include 'content/_dbconn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $user_id = $_SESSION['user_id'];

    if (!empty($title) && !empty($content)) {
        $sql = "INSERT INTO blogs (user_id, title, content) VALUES ('$user_id', '$title', '$content')";
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            echo "Blog post created!";
        }else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Title and content cannot be empty!";
    }
}

$user_id = $_SESSION['user_id'];
//echo '<pre>';print_r($user_id); die;
$query = "SELECT * FROM blogs WHERE user_id = $user_id ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="content/navbar.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php require "content/_navbar.php"; ?>
    <?php require "content/_blog_post.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>