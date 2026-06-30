    <?php
        session_start();            
    ?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <title>Luke's Travel Blog</title>
    </head>

    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg" id="main-nav">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href="Index.php">Posts</a></li>
                <li class="nav-item"><a class="nav-link" href="About.php">About</a></li>
                <?php
                    if (isset($_SESSION["admin"]) && $_SESSION["admin"] == true) 
                    {
                        echo '<li class="nav-item"><a class="nav-link" href="MaintainPosts.php">Maintain Posts</a></li>';
                        echo '<li class="nav-item"><a class="nav-link" href="CreatePost.php">Create Post</a></li>';
                        echo '<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>';
                    } 
                    else 
                    {
                        echo '<li class="nav-item"><a class="nav-link" href="login.php">Admin Login</a></li>';
                    }
                ?>
            </ul>
        </nav>
    </div>
    <div class="welcome-banner text-center p-4">
        <h1>Luke's Travel Blog</h1>
    </div>
    
