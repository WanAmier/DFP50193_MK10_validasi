<?php
session_start();

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $bil = $_POST['bil'];
    $tkh = $_POST['tkh'];
    $opt = $_POST['opt'];
    $jantina = isset($_POST['jantina']) ? $_POST['jantina'] : "";
    $alasan = $_POST['alasan'];
    $agree = isset($_POST['agree']) ? $_POST['agree'] : "";

    if (empty($nama) || empty($bil) || empty($tkh) || empty($opt) || empty($jantina) || empty($alasan) || empty($agree)) {
        $_SESSION['errors'] = ["Semua maklumat perlu diisi sebelum menghantar."];
        header("Location: index.php");
        exit();
    } 
    elseif (strlen($alasan) < 25) {
        $_SESSION['errors'] = ["Alasan terlalu pendek. Sila masukkan sekurang-kurangnya 25 aksara."];
        header("Location: index.php");
        exit();
    } 
    else {
        $_SESSION['user_data'] = [
            'nama' => $nama,
            'bil' => $bil,
            'tkh' => $tkh
        ];
    }
} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html class="html-tag">
<head>
    <title>Status Permohonan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="body-bg">

<div class="card">
    <h2 class="title">Permohonan Diterima</h2>
    <div class="success-box">
        <p class="txt-sm">Terima kasih, <b><?php echo htmlspecialchars($_SESSION['user_data']['nama']); ?></b>.</p>
        <p class="txt-sm">Permohonan untuk <?php echo htmlspecialchars($_SESSION['user_data']['bil']); ?> peranti telah direkodkan.</p>
    </div>
    <a href="index.php" class="link-back">← Kembali ke Borang</a>
</div>

</body>
</html>