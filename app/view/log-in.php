<?php
session_start();

include "../config/connect.php";
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    if(empty($email) || empty($password)){
        $message = "<p>Please fill all the fields</p>";
    }else{
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION["is_login"] = true;
            $_SESSION["username"] = $row["first_name"];
            header("Location: dashboard.php");
            exit();
        } else {
            $message = "<p>Invalid email or password</p>";
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
            <h1>login account</h1>
            <form action="log-in.php" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="form-group">
                    <button type="submit" name="submit">login</button>
                </div>
            </form>
            <div class="message">
                <?= $message ?? '' ?>
            </div>
            <div class="have-account">
                <p>belum punya akun? <a href="sign-in.php">klik disini</a></p>
            </div>
        </div>    
    </div>
</body>
</html>