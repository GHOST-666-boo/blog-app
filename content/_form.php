
    <?php

    if($showAlert){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if($showError){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '.$showError.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>
    <div class="form-box">
        <form action="/Assignment/signup.php" method="post" class="form">
            <label for="username" class="form-label">Username </label>
            <input type="text" name="username" id="username" class="input-title" required>

            <label for="email" class="form-label">Email </label>
            <input type="text" name="email" id="email" class="input-title"  required ec>

            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="input-desc" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>

            <label for="cpassword" class="form-label">Conform Password</label>
            <input type="password" name="cpassword" id="cpassword" class="input-desc" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
            <button class="b">SignUp</button>
            <p class="mt-3">Already have an account? <a href="login.php">Login here</a></p>
        </form>
    </div>
