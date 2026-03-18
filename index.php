<?php session_start(); ?>
<!DOCTYPE html>
<html class="html-tag">
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body-bg">
    <div class="card-container">
        <h2 class="main-title">Borang Permohonan Komputer</h2>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="error-msg"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
        <?php endif; ?>

        <form action="proses.php" method="POST" class="form-tag">
            <label class="form-lbl">Nama (Text):</label>
            <input type="text" name="nama" class="form-in">

            <label class="form-lbl">Umur (Number):</label>
            <input type="number" name="umur" class="form-in">

            <label class="form-lbl">Tarikh Mohon (Date):</label>
            <input type="date" name="tarikh" class="form-in">

            <label class="form-lbl">Program (Select):</label>
            <select name="program" class="form-in">
                <option value="">Pilih Program</option>
                <option value="DDT">DDT</option>
                <option value="DSK">DSK</option>
            </select>

            <label class="form-lbl">Jantina (Radio):</label>
            <input type="radio" name="jantina" value="Lelaki" class="radio-tag"> Lelaki
            <input type="radio" name="jantina" value="Perempuan" class="radio-tag"> Perempuan

            <label class="form-lbl">Sebab (Textarea):</label>
            <textarea name="alasan" class="form-in" rows="3"></textarea>

            <label class="form-lbl">Perakuan (Check box):</label>
            <input type="checkbox" name="perakuan" value="Setuju" class="check-tag"> Saya Setuju

            <div class="btn-group">
                <button type="submit" name="submit" class="btn-hantar">Hantar</button>
                <button type="reset" class="btn-reset">Tetap Semula</button>
            </div>
        </form>
    </div>
</body>
</html>