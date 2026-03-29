<?php session_start(); ?>
<!DOCTYPE html>
<html class="html-root">
<head>
    <title>Borang Permohonan Elit</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body-container">
    <div class="card-box">
        <h2 class="title-header">Borang Permohonan Komputer</h2>

        <?php if (isset($_SESSION['errors'])): ?>
            <div class="error-alert"><?php echo $_SESSION['errors'][0]; unset($_SESSION['errors']); ?></div>
        <?php endif; ?>

        <?php $old = $_SESSION['inputs'] ?? []; ?>

        <form action="proses.php" method="POST" class="form-grid">
            <div class="form-group">
                <label class="label-text">1. Nama Penuh:</label>
                <input type="text" name="nama" class="input-field" value="<?php echo $old['nama'] ?? ''; ?>">
            </div>
            <div class="form-group">
                <label class="label-text">2. No Matriks:</label>
                <input type="text" name="matrik" class="input-field" value="<?php echo $old['matrik'] ?? ''; ?>">
            </div>

            <div class="form-group">
                <label class="label-text">3. No Telefon:</label>
                <input type="text" name="no_tel" class="input-field" value="<?php echo $old['no_tel'] ?? ''; ?>">
            </div>
            <div class="form-group">
                <label class="label-text">4. Tarikh Lahir:</label>
                <input type="date" name="tarikh" class="input-field" value="<?php echo $old['tarikh'] ?? ''; ?>">
            </div>

            <div class="form-group">
                <label class="label-text">5. Program:</label>
                <select name="program" class="input-field">
                    <option value="">-- Pilih --</option>
                    <option value="DDT" <?php echo ($old['program'] ?? '') == 'DDT' ? 'selected' : ''; ?>>DDT</option>
                    <option value="DSK" <?php echo ($old['program'] ?? '') == 'DSK' ? 'selected' : ''; ?>>DSK</option>
                </select>
            </div>
            <div class="form-group">
                <label class="label-text">6. Jantina:</label>
                <div class="radio-group">
                    <input type="radio" name="jantina" value="Lelaki" <?php echo ($old['jantina'] ?? '') == 'Lelaki' ? 'checked' : ''; ?>> Lelaki
                    <input type="radio" name="jantina" value="Perempuan" <?php echo ($old['jantina'] ?? '') == 'Perempuan' ? 'checked' : ''; ?>> Perempuan
                </div>
            </div>

            <div class="form-group">
                <label class="label-text">7. Pilihan Laptop:</label>
                <select name="laptop" class="input-field">
                    <option value="">-- Pilih Model --</option>
                    <option value="Dell" <?php echo ($old['laptop'] ?? '') == 'Dell' ? 'selected' : ''; ?>>Dell</option>
                    <option value="HP" <?php echo ($old['laptop'] ?? '') == 'HP' ? 'selected' : ''; ?>>HP</option>
                </select>
            </div>
            <div class="form-group">
                <label class="label-text">8. Tempoh (Bulan):</label>
                <input type="number" name="tempoh" class="input-field" value="<?php echo $old['tempoh'] ?? ''; ?>">
            </div>

            <div class="form-group full-width">
                <label class="label-text">9. Alasan Permohonan (Min 25 aksara):</label>
                <textarea name="alasan" class="input-field" rows="3"><?php echo $old['alasan'] ?? ''; ?></textarea>
            </div>

            <div class="form-group full-width">
                <div class="radio-group">
                    <input type="checkbox" name="pengesahan" value="Setuju" <?php echo isset($old['pengesahan']) ? 'checked' : ''; ?>>
                    <span class="label-text" style="margin-top:0;">10. Saya mengesahkan maklumat ini benar.</span>
                </div>
            </div>

            <div class="btn-container">
                <button type="submit" class="btn-hantar">HANTAR PERMOHONAN</button>
                <button type="reset" class="btn-reset">Tetap Semula</button>
            </div>
        </form>
    </div>
</body>
</html>