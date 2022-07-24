<?php
require '../admin/database/admin-database.php';
if (isset($_POST['save'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $birthday = $_POST['birthday'];


    $image_name = $_FILES['profileImage']['name'];
    $image_temp = $_FILES['profileImage']['tmp_name'];
    $exp = explode(".", $image_name);
    $end = end($exp);
    $name = time() . "." . $end;
    $path = "profileUploads/" . $name;
    $allowed_ext = array("gif", "jpg", "jpeg", "png", "GIF", "JPG", "JPEG", "PNG", "JFIF", "jfif");
    if (in_array($end, $allowed_ext)) {
        if (move_uploaded_file($image_temp, $path)) {
            mysqli_query($db_admin, "INSERT INTO `user` VALUES('', '$first_name', '$last_name', '$email', '$username', '$gender', '$phonenumber', '$password', '$cpassword', '$birthday', '$path', NOW())");
            echo "<script>alert('Product saved!')</script>";
            header("location: login.php");
        }
    } else {
        echo "<script>alert('Image only')</script>";
    }
} else {
    echo "<script>alert('ayaw ma connect!')</script>";
}
?>