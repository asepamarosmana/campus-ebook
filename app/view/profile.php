<?php
session_start();
include '../config/connect.php'; 
$sql =mysqli_query($conn, 'SELECT * FROM BUKU');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/profile-dashboard.css?v=3">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="profile-container">
        <h1>Welcome back, <?php echo$_SESSION['username']?></h1><hr>

        <div class="profile-card">
            <h3>Recommendations for you</h3>
            <div class="profile-card_content">
                <?php 
                    while($row = mysqli_fetch_assoc($sql)) { 
                     if($count >= 4) break;
                    $count++;
                ?>
                <a href="<?=$row['patch_file'] ?>" download>
                    <div class="book-list_card">
                        <img src="<?=$row['patch_image'] ?>">
                        <p><?=$row['judul_buku'] ?></p>
                    </div>
             </a>
            <?php 
            } 
            ?>
            </div>
        </div>
    </div>
</body>
</html>