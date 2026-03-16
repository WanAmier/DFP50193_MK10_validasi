<!DOCTYPE html>
<html class="html-container">
<head>
    <title>Borang Permohonan MK10</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="body-background">

<div class="form-card">
    <h2 class="heading-title">Permohonan Komputer Riba</h2>
    <form action="proses.php" method="POST" class="application-form">
        
        <label class="input-label">Nama Pelajar:</label>
        <input type="text" name="nama" class="text-input">

        <label class="input-label">Bilangan Unit:</label>
        <input type="number" name="bilangan" class="number-input">

        <label class="input-label">Tarikh Diperlukan:</label>
        <input type="date" name="tarikh" class="date-input">

        <label class="input-label">Pilihan Jenama:</label>
        <select name="jenama" class="select-menu">
            <option value="" class="menu-item">-- Sila Pilih --</option>
            <option value="Acer" class="menu-item">Acer</option>
            <option value="HP" class="menu-item">HP</option>
            <option value="Apple" class="menu-item">Apple</option>
        </select>

        <label class="input-label">Jantina:</label>
        <div class="radio-box">
            <input type="radio" name="jantina" value="Lelaki" class="radio-input">
            <span class="selection-text">Lelaki</span>
            <input type="radio" name="jantina" value="Perempuan" class="radio-input">
            <span class="selection-text">Perempuan</span>
        </div>

        <label class="input-label">Alasan Permohonan:</label>
        <textarea name="alasan" class="text-area" rows="4"></textarea>

        <div class="checkbox-box">
            <input type="checkbox" name="pengesahan" value="Setuju" class="checkbox-input">
            <span class="selection-text">Saya mengesahkan maklumat ini benar.</span>
        </div>

        <div class="flex-container">
            <button type="submit" name="hantar" class="submit-btn">Hantar Permohonan</button>
            <button type="reset" class="reset-btn">Tetap Semula</button>
        </div>
    </form>
</div>

</body>
</html>