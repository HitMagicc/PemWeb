<?php

include "koneksi.php";
//hapus data
$npm = $_GET['id'];
$sql = "delete from identitas where npm='$npm'";
$result = pg_query($conn, $sql);
if ($result) {
  // redirect ke halaman tampil data
  header("Location: tampil_data.php");
} else {
  echo "Error: " . $sql . "<br>" . pg_last_error($conn);
}
pg_close($conn);
