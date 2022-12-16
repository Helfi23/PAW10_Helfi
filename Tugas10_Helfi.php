<?php
$perulangan = [
array("Helfi","20200040038", "Teknik Informatika", "helfi.nusaputra.ac.id", "90","Lulus"),
array("Roy", "20200040039", "Teknik Informatika", "roy.nusaputra.ac.id","60","Tidak Lulus"),
array("Ajay", "20200040040", "Teknik Informatika", "ajay.nusaputra.ac.id","80","Lulus")
];
 
echo "<table border='1'";
echo "<tr=>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>Email</th>
        <th>Nilai</th>
        <th>Status</th>
    </tr>";
foreach ($perulangan as $perulangan => $ulang)
{
	echo "<tr>";
	foreach ($ulang as $hasil)
	{
		echo "<td>" . $hasil . "</td>";
	}	
 
}	
  echo "</tr></table>";
?>