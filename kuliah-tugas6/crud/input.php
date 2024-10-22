<?php
include "koneksi.php";

//input data
if (isset($_POST['submit'])) {
  $npm = $_POST['npm'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  if (isset($_POST['jk'])) {
    $jk = $_POST['jk'];
  }

  $tgl = date('Y-m-d', strtotime($_POST['tgl_lhr']));
  $email = $_POST['email'];

  if ((!empty($npm)) && (!empty($nama))) {
    $sql = "INSERT INTO identitas (npm, nama, alamat,jk,tgl_lhr,email)
            VALUES ('$npm', '$nama', '$alamat','$jk','$tgl','$email') ";

    $result=pg_query($conn, $sql);
    if ($result) {
      // redirect ke halaman tampil data
      header("Location: tampil_data.php");
    } else {
      echo "Error: " . $sql . "<br>" . pg_last_error($conn);
    }
  } else {
    echo "npm dan nama tidak boleh kosong";
  }
}
pg_close($conn);
