<?php  
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {

if (isset($_POST['fname']) && isset($_POST['uname'])) {
    include "../db_conn.php";

    $fname = $_POST['fname'];
    $uname = $_POST['uname'];
    $old_pp = $_POST['old_pp'];
    $id = $_SESSION['id'];

    if (empty($fname)) {
        $em = "Full name is required";
        header("Location: ../edit.php?error=$em");
        exit;
    } else if (empty($uname)) {
        $em = "User name is required";
        header("Location: ../edit.php?error=$em");
        exit;
    } else {

        if (isset($_FILES['pp']['name']) && !empty($_FILES['pp']['name'])) {
            $img_name = $_FILES['pp']['name'];
            $tmp_name = $_FILES['pp']['tmp_name'];
            $error = $_FILES['pp']['error'];

            if ($error === 0) {
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_to_lc = strtolower($img_ex);

                $allowed_exs = array('jpg', 'jpeg', 'png');
                if (in_array($img_ex_to_lc, $allowed_exs)) {
                    $new_img_name = uniqid($uname, true).'.'.$img_ex_to_lc;
                    $img_upload_path = '../upload/'.$new_img_name;

                    // Delete old profile pic if it exists
                    if (!empty($old_pp)) {
                        $old_pp_des = "../upload/$old_pp";
                        if (file_exists($old_pp_des)) {
                            unlink($old_pp_des);
                        }
                    }

                    // Move new profile pic to the upload folder
                    move_uploaded_file($tmp_name, $img_upload_path);

                    // Update the Database with the new profile picture
                    $sql = "UPDATE users SET fname=?, username=?, pp=? WHERE id=?";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute([$fname, $uname, $new_img_name, $id]);
                } else {
                    $em = "You can't upload files of this type";
                    header("Location: ../edit.php?error=$em");
                    exit;
                }
            } else {
                $em = "Unknown error occurred!";
                header("Location: ../edit.php?error=$em");
                exit;
            }
        } else {
            // Update the Database without changing the profile picture
            $sql = "UPDATE users SET fname=?, username=? WHERE id=?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$fname, $uname, $id]);
        }

        $_SESSION['fname'] = $fname;
        header("Location: ../edit.php?success=Your account has been updated successfully");
        exit;
    }

} else {
    header("Location: ../edit.php?error=error");
    exit;
}

} else {
    header("Location: login.php");
    exit;
} 
?>
