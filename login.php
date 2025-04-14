<?php
// Include the database connection
include "conn.php";

// Check if the form is submitted
if (isset($_POST['login'])) {
    $email = $_POST['login-email'];
    $password = $_POST['login-password'];

    // Define tables and columns for each user type
    $users = [
        "Admin" => ["table" => "admin", "emailCol" => "ad_emailid", "passwordCol" => "ad_password"],
        "Faculty" => ["table" => "faculty", "emailCol" => "fa_emailid", "passwordCol" => "fa_password"],
        "Student" => ["table" => "student", "emailCol" => "st_emailid", "passwordCol" => "st_password"]
    ];

    $loggedIn = false;

    // Loop through user tables to find a match
    foreach ($users as $type => $userInfo) {
        $table = $userInfo['table'];
        $emailCol = $userInfo['emailCol'];
        $passwordCol = $userInfo['passwordCol'];

        $sql = "SELECT * FROM `$table` WHERE `$emailCol` = '$email' AND `$passwordCol` = '$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $loggedIn = true;
            echo "<script>alert('Login Successful as $type');</script>";

            // Redirect based on user type
            if ($type == "Admin") {
            header("Location: Admin\admin.php");
            } elseif ($type == "Faculty") {
            header("Location: faculty\\faculty.php");
            } elseif ($type == "Student") {
            header("Location: Student\student.php");
            }
            exit();
        }
    }

    if (!$loggedIn) {
        echo "<script>alert('Invalid Email or Password');</script>";
        // If you want to redirect after the alert is shown, use a small delay:
        echo "<script>window.location.href = 'index.php';</script>";
        exit(); // Stop further script execution
    }
    
}
?>
