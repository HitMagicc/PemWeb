<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1>Pengisian Data Mahasiswa</h1>
    <form action="proses.php" method="post">
        <div class="form-group">
            <label for="NPM">NPM</label>
            <input type="text" name="NPM" id="NPM" placeholder="Masukkan NPM" required pattern="\d+">
        </div>
        <div class="form-group">
            <label for="Nama">Nama</label>
            <input type="text" name="Nama" id="Nama" placeholder="Masukkan Nama" required pattern="[A-Za-z\s]+">
        </div>
        <div class="form-group">
            <label for="Alamat">Alamat</label>
            <input type="text" name="Alamat" id="Alamat" placeholder="Masukkan Alamat" required>
        </div>
        <div class="form-group">
            <label for="TempatLahir">Tempat Lahir</label>
            <input type="text" name="TempatLahir" id="TempatLahir" placeholder="Masukkan Tempat Lahir" required>
        </div>
        <div class="form-group">
            <label for="TanggalLahir">Tanggal Lahir</label>
            <input type="date" name="TanggalLahir" id="TanggalLahir" placeholder="Masukkan Tanggal Lahir" required>
        </div>
        <div class="form-group">
        <label>Jenis Kelamin</label>
        <div class="gender-options">
            <input type="radio" name="JenisKelamin" id="laki" value="Laki-laki" required>
            <label for="laki">Laki-laki</label>
            
            <input type="radio" name="JenisKelamin" id="perempuan" value="Perempuan" required>
            <label for="perempuan">Perempuan</label>
        </div>
    </div>
        <div class="form-group">
            <label for="Hobi">Hobi</label>
            <input type="text" name="Hobi" id="Hobi" placeholder="Masukkan Hobi" required>
        </div>
        <input type="submit" value="Kirim Data">
    </form>
</body>
</html>