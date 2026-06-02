<!DOCTYPE html>
<body>

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

    <h1>Login</h1>
    <form action="login.php" method="post">
        <label>Username</label>
        <input name="username" placeholder="Enter Username">
        <label>Password</label>
        <input type = "password" name="password" placeholder="Enter Password">
        <button type="submit">Login</button>
    </form>
</body>