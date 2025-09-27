<?php include 'app/config/connect.php'; 
$sql = mysqli_query($conn, 'SELECT BUKU.*, Pengarang.nama_pengarang FROM BUKU JOIN Pengarang ON BUKU.id = Pengarang.id;');

?>

<div class="layout-book-list">
    <div class="book-list">
        <div class="book-list_title">
            <h1>Book list</h1>
        </div>
        <div class="book-list_content">
            <?php 
            while($row = mysqli_fetch_assoc($sql)) { 
                if($count >= 10) break;
                $count++;
            ?>
            <a href="<?=$row['patch_file'] ?>" download>
                <div class="book-list_card">
                    <img src="app/view/<?=$row['patch_image'] ?>">
                    <p><?=$row['judul_buku'] ?></p>
                    <p><?=$row['nama_pengarang'] ?></p>
                </div>
            </a>
            <?php 
            } 
            ?>
        </div>
    </div>
</div>