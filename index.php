<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body class="body-container">
    <div class="card-box">
        <h2 class="title-header">Borang Permohonan</h2>
        <?php if (isset($_SESSION['errors'])): ?>
            <div class="error-alert"><?php echo $_SESSION['errors'][0];
                                        unset($_SESSION['errors']); ?></div>
        <?php endif; ?>
        <?php $old = $_SESSION['inputs'] ?? []; ?>
        <form action="proses.php" method="POST">
            <label class="label-text">Nama:</label>
            <input type="text" name="nama" class="input-field" value="<?php echo $old['nama'] ?? ''; ?>">
            <label class="label-text">No Matriks:</label>
            <input type="text" name="matrik" class="input-field" value="<?php echo $old['matrik'] ?? ''; ?>">
            <label class="label-text">No Telefon:</label>
            <input type="text" name="no_tel" class="input-field" value="<?php echo $old['no_tel'] ?? ''; ?>">
            <label class="label-text">Tarikh:</label>
            <input type="date" name="tarikh" class="input-field" value="<?php echo $old['tarikh'] ?? ''; ?>">
            <label class="label-text">Program:</labelF>
                <select name="program" class="input-field">
                    <option value="">-- Pilih --</option>
                    <option value="DDT" <?php echo ($old['program'] ?? '') == 'DDT' ? 'selected' : ''; ?>>DDT</option>
                </select>
                <label class="label-text">Jantina:</label>
                <input type="radio" name="jantina" value="Lelaki" <?php echo ($old['jantina'] ?? '') == 'Lelaki' ? 'checked' : ''; ?>> Lelaki
                <input type="radio" name="jantina" value="Perempuan" <?php echo ($old['jantina'] ?? '') == 'Perempuan' ? 'checked' : ''; ?>> Perempuan
                <label class="label-text">Alasan:</label>
                <textarea name="alasan" class="input-field"><?php echo $old['alasan'] ?? ''; ?></textarea>
                <label class="label-text">Pengesahan:</label>
                <input type="checkbox" name="pengesahan" value="Ya" <?php echo isset($old['pengesahan']) ? 'checked' : ''; ?>> Saya mengaku maklumat ini benar.
                <button type="submit" class="btn-hantar">Hantar</button>
        </form>
    </div>
</body>

</html>