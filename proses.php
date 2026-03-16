<!DOCTYPE html>
<html class="html-container">
<head>
    <title>Status Pemprosesan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="body-background">

<div class="form-card">
    <h2 class="heading-title">Keputusan Validasi</h2>
    
    <?php
    if (isset($_POST['hantar'])) {
        $nama = $_POST['nama'];
        $bil = $_POST['bilangan'];
        $tkh = $_POST['tarikh'];
        $jenama = $_POST['jenama'];
        $jantina = isset($_POST['jantina']) ? $_POST['jantina'] : "";
        $alasan = $_POST['alasan'];
        $sah = isset($_POST['pengesahan']) ? $_POST['pengesahan'] : "";

        $errors = [];

        if (empty($nama) || empty($bil) || empty($tkh) || empty($jenama) || empty($jantina) || empty($alasan) || empty($sah)) {
            $errors[] = "Ralat: Semua ruangan wajib diisi.";
        }

        if (strlen($alasan) < 25) {
            $errors[] = "Ralat: Alasan mestilah melebihi 25 aksara.";
        }

        if (!empty($errors)) {
            foreach ($errors as $msg) {
                echo "<div class='error-msg'>$msg</div>";
            }
        } else {
            echo "<div class='success-msg'>Permohonan bagi $nama telah berjaya diproses.</div>";
        }
    }
    ?>

    <a href="index.php" class="nav-button"> Kembali ke Borang</a>
</div>

</body>
</html>