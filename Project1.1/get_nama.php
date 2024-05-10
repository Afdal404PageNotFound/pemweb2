<?php
include_once('koneksi.php');

$sql = "SELECT nama FROM pasien";
$result = $dbh->query($sql);

if ($result->fetchColumn() > 0) {
  // Output data dari setiap baris
  while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo '<option value="'.$row["nama"].'">'.$row["nama"].'</option>';
  }
} else {
  echo "0 results";
}
$dbh = null;
?>
