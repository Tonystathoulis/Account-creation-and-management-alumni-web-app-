<?php
session_start();

if(isset($_POST['uname']) && isset($_POST['pass'])) {
    include "../db_conn.php";

    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    if(empty($uname) || empty($pass)) {
        $error = "Both username and password are required.";
        header("Location: ../login.php?error=$error");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$uname]);

        if($stmt->rowCount() === 1) {
            $user = $stmt->fetch();

            if(password_verify($pass, $user['password'])) {
                // Set session variables
                $_SESSION['id'] = $user['id'];
                $_SESSION['fname'] = $user['fname'];

                // Check if the user is an admin
                if($user['is_admin'] == 1) {
                    $_SESSION['is_admin'] = 1;
                    header("Location: ../admin_dashboard.php");
                    exit();
                } else {
                    // Regular user
                    header("Location: ../home.php");
                    exit();
                }
            } else {
                // Incorrect password
                $error = "Incorrect username or password.";
                header("Location: ../login.php?error=$error&uname=$uname");
                exit();
            }
        } else {
            // User not found
            $error = "User not found.";
            header("Location: ../login.php?error=$error");
            exit();
        }
    }
} else {
    // Redirect to login page if accessed directly
    header("Location: ../login.php");
    exit();
}
?>
