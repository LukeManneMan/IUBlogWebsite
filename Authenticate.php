<?php

    function authenticate($username, $password, $conn) {
        require_once("Db.php");
        $sql = $conn->prepare("select * from lukeblog.administrators where username = ?");
        $sql ->execute([$username]);
        $result = $sql -> fetch(PDO::FETCH_ASSOC);

        if ($result && password_verify($password, $result["Password"])) 
        {
            $_SESSION["admin"] = true;
            echo "login successful";
            session_start();
            header("Location: Index.php");
            exit();
        } 
        else 
        {
            //return false;
            echo "login failed";
            return false;
        }
    }

    function logout() {
        session_start();
        $_SESSION["admin"] = false;
        session_destroy();
        header("Location: Index.php");
        exit();
    }
?>