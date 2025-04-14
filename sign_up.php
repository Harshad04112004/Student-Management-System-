<?php
include "conn.php";

if (isset($_POST['signup'])) {
    $signup_name = $_POST['signup-name'];
    $signup_email = $_POST['signup-email'];
    $singnup_gender = $_POST['singnup-gender'];
    $signup_moblie = $_POST['signup-moblie'];
    $singnup_birthdate = $_POST['singnup-birthdate'];
    $city = $_POST['city'];
    $signup_address = $_POST['signup-address'];
    $type = $_POST['type'];
    $adminCode = $_POST['adminCode'];
    $facultyCode = $_POST['facultyCode'];
    $sem = $_POST['sem'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Check if email already exists
    $emailCheckSql = "SELECT * FROM admin WHERE ad_emailid = '$signup_email' UNION SELECT * FROM faculty WHERE fa_emailid = '$signup_email' UNION SELECT * FROM student WHERE st_emailid = '$signup_email'";
    $emailCheckResult = mysqli_query($conn, $emailCheckSql);

    if (mysqli_num_rows($emailCheckResult) > 0) {
        echo "<script>alert('Email already exists. Please use a different email.');</script>";
         // If you want to redirect after the alert is shown, use a small delay:
         echo "<script>window.location.href = 'index.php';</script>";
         exit();
    } else {

        if ($type == "Admin") {
            if ($password == $confirmPassword) {
                
                $sql = "INSERT INTO admin(ad_name, ad_emailid, ad_gender, ad_contact, ad_bdate, ad_city, ad_address, ad_code, ad_password) VALUES ('$signup_name','$signup_email','$singnup_gender','$signup_moblie','$singnup_birthdate','$city','$signup_address','$adminCode','$password')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<script>alert('Inserted data in Admin');</script>";
                    header("Location: index.php");
                } else {
                    echo "<script>alert('Not inserted data: " . mysqli_error($conn) . "');</script>";
                     // If you want to redirect after the alert is shown, use a small delay:
        echo "<script>window.location.href = 'index.php';</script>";
        exit();
                }
            } else {
                echo "<script>alert('Passwords do not match');</script>";
                 // If you want to redirect after the alert is shown, use a small delay:
        echo "<script>window.location.href = 'index.php';</script>";
        exit();
            }
        } else if ($type == "Faculty") {
            if ($password == $confirmPassword) {
                $sql = "INSERT INTO faculty(fa_name, fa_emailid, fa_gender, fa_contact, fa_bdate, fa_city, fa_address, fa_code, fa_password) VALUES ('$signup_name','$signup_email','$singnup_gender','$signup_moblie','$singnup_birthdate','$city','$signup_address','$facultyCode','$password')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<script>alert('Inserted data in Faculty');</script>";
                    header("Location: index.php");
                } else {
                    echo "<script>alert('Not inserted data: " . mysqli_error($conn) . "');</script>";
                     // If you want to redirect after the alert is shown, use a small delay:
        echo "<script>window.location.href = 'index.php';</script>";
        exit();
                }
            } else {
                echo "<script>alert('Passwords do not match');</script>";
                 // If you want to redirect after the alert is shown, use a small delay:
        echo "<script>window.location.href = 'index.php';</script>";
        exit();
            }
        } else if ($type == "Student") {
            if ($password == $confirmPassword) {
                $sql = "INSERT INTO student(st_name, st_emailid, st_gender, st_contact, st_bdate, st_city, st_address, st_sem, st_password) VALUES ('$signup_name','$signup_email','$singnup_gender','$signup_moblie','$singnup_birthdate','$city','$signup_address','$sem','$password')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<script>alert('Inserted data in Student');</script>";
                    header("Location: index.php");
                } else {
                    echo "<script>alert('Not inserted data: " . mysqli_error($conn) . "');</script>";
                     // If you want to redirect after the alert is shown, use a small delay:
                    echo "<script>window.location.href = 'index.php';</script>";
                      exit();
                }
            } else {
                echo "<script>alert('Passwords do not match');</script>";
                 // If you want to redirect after the alert is shown, use a small delay:
        echo "<script>window.location.href = 'index.php';</script>";
        exit();
            }
        }
    }
} else {
    echo "<script>alert('Not Sign up Form');</script>";
     // If you want to redirect after the alert is shown, use a small delay:
     echo "<script>window.location.href = 'index.php';</script>";
     exit();
}
?>