<?php
session_start();
include "../config/connect.php";
if(isset($_POST["submit"])){
    $first_name = $_POST["first-name"];
    $last_name = $_POST["last-name"];
    $email = $_POST["email"];
    $password   = null;
    
    if($_POST["password"] === $_POST["confirm-password"]){
        $password = $_POST["password"];
    }else{
        $message = "<p>Passwords do not match</p>";
    }

    if(empty($first_name) || empty($last_name) || empty($email) || empty($password)){
        $message = "<p>Please fill all the fields</p>";
    }else{
        $_SESSION["username"] = $first_name;
         $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";
         if(mysqli_query($conn, $sql)){
            $message = "<p>Account created successfully</p>";
         } else {
            $message = "<p>Error: " . mysqli_error($conn) . "</p>";
         }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/sig-in.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="sign-in-container">
        <div class="sign-in-box">
            <h1>Sign in account</h1>
            <form action="sign-in.php" method="post">
                <div class="form-row">
                    <div class="form-group">
                        <label for="first-name">First Name</label>
                        <input type="text" name="first-name" id="first-name">
                    </div>
                    <div class="form-group">
                        <label for="last-name">Last Name</label>
                        <input type="text" name="last-name" id="last-name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" name="confirm-password" id="confirm-password">
                </div>
                <div class="form-group">
                    <button type="submit" name="submit">Sign In</button>
                </div>
            </form>
            <div class="message">
                <?= $message ?? '' ?>
            </div>
            <div class="have-account">
                <p>sudah punya akun? <a href="log-in.php">klik disini</a></p>
            </div>
        </div>    
    </div>
</body>
</html>