<?php session_start(); ?>
<!DOCTYPE html>
<html class="html-tag">
<head>
    <title>Borang Permohonan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="body-bg">

<div class="card">
    <h2 class="title">Skim Pinjaman Komputer</h2>

    <?php 
    if (isset($_SESSION['errors'])) {
        echo "<div class='err-box'>";
        foreach ($_SESSION['errors'] as $error) {
            echo "<p class='txt-sm'>• $error</p>";
        }
        echo "</div>";
        unset($_SESSION['errors']); 
    }
    ?>

    <form action="proses.php" method="POST" class="frm">
        <label class="lbl">Nama Penuh:</label>
        <input type="text" name="nama" class="in-txt">

        <label class="lbl">Bilangan:</label>
        <input type="number" name="bil" class="in-num">

        <label class="lbl">Tarikh:</label>
        <input type="date" name="tkh" class="in-date">

        <label class="lbl">Pilihan:</label>
        <select name="opt" class="in-sel">
            <option value="" class="opt-val">-- Pilih --</option>
            <option value="Laptop A" class="opt-val">Laptop A</option>
            <option value="Laptop B" class="opt-val">Laptop B</option>
        </select>

        <label class="lbl">Jantina:</label>
        <div class="row">
            <input type="radio" name="jantina" value="L" class="in-rad"><span class="txt-sm">Lelaki</span>
            <input type="radio" name="jantina" value="P" class="in-rad"><span class="txt-sm">Perempuan</span>
        </div>

        <label class="lbl">Alasan Sokongan:</label>
        <textarea name="alasan" class="in-area" rows="3"></textarea>

        <div class="row">
            <input type="checkbox" name="agree" value="1" class="in-chk">
            <span class="txt-sm">Saya setuju dengan terma.</span>
        </div>

        <div class="btn-group">
            <button type="submit" name="submit" class="btn-hantar">Hantar</button>
            <button type="reset" class="btn-reset">Reset</button>
        </div>
    </form>
</div>

</body>
</html>