<?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $loggedin = true;
    }
    else{
        $loggedin = false;
    }
    echo '
    <nav>
        <ul class="nav">

            <li>
                <a href="/Assignment/">R_Blog</a>
            </li>';
    if (!$loggedin) {
        echo '
            <li>
                <a href="/Assignment/dashboard.php">Home</a>
            </li>
            <li>
                <a href="/Assignment/login.php">Login</a>
            </li>
            <li>
                <a href="/Assignment/signup.php">SignUp</a>
            </li>';
    }
    if ($loggedin) {
        echo '
            <li>
                <a href="/Assignment/logout.php">Logout</a>
            </li>';
    }
    echo ' </ul>
    </nav>
' ?>
