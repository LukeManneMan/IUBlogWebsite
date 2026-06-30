<!DOCTYPE html>

<body>
    <header>
        <?php
            require 'Header.php';
        ?>
    </header>
    <?php
        require 'Db.php';
        require 'Authenticate.php';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') 
            {
                $username = $_POST['username'];
                $password = $_POST['password'];
                authenticate($username, $password, $conn);
            }
    ?>
    <div class="container-fluid text-center">
        <h1> Admin Login</h1>
    </div>
    <div class="container">
        <form action="login.php" method="post">
            <div>
                <label class="form-label">Username</label>
                <input class="form-control" name="username" placeholder="Enter Username">
            </div>
            <br>
            <div>
                <label class="form-label">Password</label>
                <input class="form-control" type = "password" name="password" placeholder="Enter Password">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    <footer>
        <?php
            require 'Footer.php';
        ?>
    </footer>
</body>
