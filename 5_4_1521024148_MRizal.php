<html>
<head>
<title>Studi Kasus 5_4</title>

</head>
<body>
<table>

	<?php
	for ($x = 5; $x <= 100; $x++){
		echo '<tr>';
		for($y = $x; $y <= $x+4995; $y = $y + 5){
			echo "<td/>$y</td>";
		}
		echo '</tr>';
	};
	?>
</body>
</html>