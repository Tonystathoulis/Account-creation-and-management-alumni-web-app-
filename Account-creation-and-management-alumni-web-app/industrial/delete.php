<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['fname']) && $_SESSION['is_admin'] == 1) {
    if(isset($_GET['id'])) {
        include "db_conn.php";

        $id = $_GET['id'];

        // Delete user profile from the database
        $sql = "DELETE FROM users WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);

        // Redirect back to the admin dashboard
        header("Location: admin_dashboard.php");
        exit();
    } else {
        // Redirect to the admin dashboard if ID is not provided
        header("Location: admin_dashboard.php");
        exit();
    }
} else {
    // Redirect to login page if not logged in as admin
    header("Location: login.php");
    exit();
}
?>
