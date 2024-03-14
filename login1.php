<?php
session_start();

if (isset($_POST['uname']) && isset($_POST['pass'])) {
    include "db_conn.php";
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    // Check for empty fields
    if (empty($uname) || empty($pass)) {
        $em = "Username and password are required";
    } else {
        // Get user details from the database
        $sql = "SELECT * FROM users WHERE username=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$uname]);

        if ($stmt->rowCount() == 1) {
            $user = $stmt->fetch();

            // Verify password
            if (password_verify($pass, $user['password'])) {
                $_SESSION['ID'] = $user['id'];
                $_SESSION['Email'] = $user['email'];
                header("Location: index.php");
                exit;
            } else {
                $em = "Incorrect username or password";
            }
        } else {
            $em = "User not found";
        }
    }

    $_SESSION['error'] = $em;
    header("Location: login.php");
    exit;
}

?>
