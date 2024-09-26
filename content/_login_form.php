    <?php

    if ($login) {
        echo '<div class="alert alert-success" role="alert">
        <strong>Success!</strong> You are logged in successfully.
        </div>';
    }
    if ($showError) {
        echo '<div class="alert alert-danger" role="alert">
        <strong>Error!</strong> ' . $showError . '
        </div>';
    }
    ?>
    <div class="form-box">
        <form action="/Assignment/login.php" method="post" class="form">
            <label for="email" class="form-label">Email </label>
            <input type="text" name="email" id="email" class="input-title">

            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="input-desc">
            <button class="b">Login</button>
            <p class="mt-3">Don't have an account? <a href="signup.php">Register here</a></p>
        </form>
    </div>