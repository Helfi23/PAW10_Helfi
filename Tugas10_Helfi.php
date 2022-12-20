<?php

$mahasiswa = [
  ["nama"=>"Rizky", "NIM"=>"123456", "Jurusan"=>"TI", "Email"=>"Rizky@gmail.com", "Nilai"=>"90"],
  ["nama"=>"Rizky", "NIM"=>"123456", "Jurusan"=>"TI", "Email"=>"Rizky@gmail.com", "Nilai"=>"60"],
  ["nama"=>"Rizky", "NIM"=>"123456", "Jurusan"=>"TI", "Email"=>"Rizky@gmail.com", "Nilai"=>"80"],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perulangan </title>
</head>
<style>
  table {
    border-collapse:collapse;
  }
  thead {
    Margin : 100%;
  }
  a {
    color:Yellow;
  }
</style>

<body>
  <table border=1>
    <thead>
      <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th id="Email">Email</th>
        <th>Nilai</th>
        <th>Status</th>
      </tr>
    </thead>

    <?php
    $perulangan=0;
    while ($perulangan < count($mahasiswa)) {
        echo "<tr>";
          echo "<td><a>".$mahasiswa[$perulangan]["nama"]."</a></td>";
          echo "<td>".$mahasiswa[$perulangan]["NIM"]."</td>";
          echo "<td>".$mahasiswa[$perulangan]["Jurusan"]."</td>";
          echo "<td><a>".$mahasiswa[$perulangan]["Email"]."</a></td>";
          echo "<td>".$mahasiswa[$perulangan]["Nilai"]."</td>";

          if ($mahasiswa[$perulangan]["Nilai"] >= 70) {
            echo "<td> Lulus </td>";
          } else {
            echo "<td> Tidak Lulus </td>";
          }
          

        echo "</tr>";
        $perulangan++;
    }
    ?>
  </table>
</body>
</html>
