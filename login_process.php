<?php
include("includes/conn.php");

$error_msg ='';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql_check_username = "SELECT * FROM users WHERE username = '$username'";
    $result_check_username = mysqli_query($conn, $sql_check_username);

    if (mysqli_num_rows($result_check_username) > 0) {
        $row = mysqli_fetch_assoc($result_check_username);
        $user_id = $row['users_id'];
        $stored_password = $row['password'];

        if ($password === $stored_password) { 
            $_SESSION['user'] = $username;
            echo "Sucessfull";
            header("Location: index.php");
            //exit();
        } else {
            echo "Password is incorrect.";
        }
    } else {
        echo "Username does not exist.";
    }
}
?>