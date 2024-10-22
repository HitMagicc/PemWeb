<?php
include "koneksi.php";
//update data
if (isset($_POST['update'])) {
  $npm = $_POST['npm'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $jk = $_POST['jk'];
  $tgl = date('Y-m-d', strtotime($_POST['tgl_lhr']));
  $email = $_POST['email'];
  $sql = "UPDATE identitas set nama='$nama', alamat='$alamat', jk='$jk', tgl_lhr='$tgl', email='$email' where npm='$npm' ";
  $result = pg_query($conn, $sql);
  if ($result) {
    // redirect ke halaman tampil data
    header("Location: tampil_data.php");
  } else {
    echo "Error: " . $sql . "<br>" . pg_last_error($conn);
  }
}
pg_close($conn);
