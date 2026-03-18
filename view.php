<?php session_start(); ?>
<!DOCTYPE html>
<html class="html-tag">
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body-bg">
    <div class="card-container">
        <h2 class="main-title">Keputusan Permohonan</h2>
        
        <?php if (isset($_SESSION['data'])): ?>
            <p class="form-lbl">Nama Pelajar: <?php echo htmlspecialchars($_SESSION['data']['nama']); ?></p>
            <p class="form-lbl">Alasan: <?php echo htmlspecialchars($_SESSION['data']['alasan']); ?></p>
        <?php endif; ?>

        <a href="index.php" class="nav-pautan">Kembali ke Halaman Soalan (a)</a>
    </div>
</body>
</html>