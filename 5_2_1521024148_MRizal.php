<html>
<head>
<title>Studi Kasus 5_2</title>
<style type="text/css">

</style>
</head>
<body>
<table>

	<?php
	$barang = array
		   (
		   array(1001,"Sabun Lifebuoy","Rp. 1.500,-"),
		   array(1002,"Permen Blaster","Rp. 5.600,-"),
		   array(1003,"Pasta Ggi Pepsodent","Rp. 4.560,-"),
		   array(1004,"Madu Arbain","Rp. 30.000,-"),
		   array(1005,"Kecap ABC","Rp. 7.250,-"),
		   array(1006,"Saus Tomat ABC","Rp. 6.700,-"),
		   array(1007,"Gula Gulaku","Rp. 8.900,-"),
		   array(1008,"Rinso","Rp. 7.100,-"),
		   array(1009,"Super Pel","Rp. 6.450,-"),
		   array(1010,"Permen Tango","Rp. 5.600,-")
		   );
	echo "<th>Kode Barang</th><th>Nama Barang</th><th>Harga</th>";
	for ($row = 0; $row <  10; $row++) {
		echo "<tr>";
		for ($col = 0; $col <  3; $col++) {
			echo "<td>".$barang[$row][$col]."</td>";
		}
		echo "</tr>";
	}
	?>
</body>
</html>