<div class="container mt-5">
        <h2>Welcome, <?= $_SESSION['username'] ?></h2>
    
        <h3>Create a New Blog Post</h3>
        <form method="POST" action="/Assignment/dashboard.php">
            <div class="mb-3">
                <label for="title" class="form-label">Blog Title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter blog title" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Blog Content</label>
                <textarea name="content" class="form-control" placeholder="Enter blog content" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-success w-100">Post Blog</button>
        </form>

        <h3 class="mt-5">Your Blog Posts</h3>
        <div class="list-group">
        <?php
        

        while ($blog = $result->fetch_assoc()) {
            echo "<div class='list-group-item'>";
            echo "<h5>{$blog['title']}</h5>";
            echo "<p>{$blog['content']}</p>";
            echo "<small>Posted on: {$blog['created_at']}</small>";
            echo "</div>";
        }
        ?>
        </div>
    </div>