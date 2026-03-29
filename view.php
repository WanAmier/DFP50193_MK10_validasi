<?php session_start(); ?>
<!DOCTYPE html>
<html class="html-root">
<head>
    <title>Ringkasan Permohonan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body-container">
    <div class="card-box">
        <span class="success-icon">✔</span>
        <h2 class="title-header">Permohonan Berjaya Diterima</h2>
        
        <?php if (isset($_SESSION['success_data'])): ?>
            <table class="result-table">
                <?php foreach ($_SESSION['success_data'] as $label => $value): ?>
                    <tr class="table-row">
                        <td class="table-cell-label"><?php echo $label; ?></td>
                        <td class="table-cell-value"><?php echo $value; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <div class="error-alert">Tiada data untuk dipaparkan. Sila isi borang semula.</div>
        <?php endif; ?>

        <div class="nav-container">
            <a href="index.php" class="nav-pautan">← Kembali ke Halaman Borang</a>
        </div>
    </div>
</body>
</html>