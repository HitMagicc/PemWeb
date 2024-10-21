<?php
    $npm  = $_POST["NPM"];
    $nama  = $_POST["Nama"]; 
    $alamat = $_POST["Alamat"];
    $tempatLahir = $_POST["TempatLahir"];
    $tanggalLahir = $_POST["TanggalLahir"];
    $jenisKelamin = $_POST["JenisKelamin"];
    $hobi = $_POST["Hobi"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Form</title>
</head>
<body>
    <h1>DATA MAHASISWA</h1>
    <content>
        <h2>
            NPM  = <?php echo $_POST["NPM"]?>
        </h2>
        <h2>
            Nama  = <?php echo ucfirst( $_POST["Nama"])?> 
        </h2>
        <h2>
            Alamat = <?php echo ucfirst($_POST["Alamat"])?>
        </h2>
        <h2>
            Tempat Lahir = <?php echo $_POST["TempatLahir"]?>
        </h2>
        <h2>
            Tanggal Lahir = <?php echo $_POST["TanggalLahir"]?>
        </h2>
        <h2>
            Jenis Kelamin = <?php echo $_POST["JenisKelamin"]?>
        </h2>
        <h2>
            Hobi = <?php echo $_POST["Hobi"]?>
        </h2>
    </content>
</body>
</html>

<?php $_POST["NPM"]?>
<?php $_POST["Nama"]?>
<?php $_POST["Alamat"]?>
<?php $_POST["TempatLahir"]?>
<?php $_POST["TanggalLahir"]?>
<?php $_POST["JenisKelamin"]?>
<?php $_POST["Hobi"]?>

