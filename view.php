<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body-container">
    <div class="card-box">
        <h2 class="title-header">Ringkasan</h2>
        <?php if (isset($_SESSION['success_data'])): ?>
            <div class="success-alert">
                <p>Nama: <?php echo $_SESSION['success_data']['nama']; ?></p>
                <p>Matrik: <?php echo $_SESSION['success_data']['matrik']; ?></p>
                <p>Alasan: <?php echo $_SESSION['success_data']['alasan']; ?></p>
            </div>
        <?php endif; ?>
        <a href="index.php" class="nav-pautan">Kembali ke Borang</a>
    </div>
</body>
</html>