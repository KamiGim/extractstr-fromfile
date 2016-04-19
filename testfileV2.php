<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data from file</title>
	<style>
		table, th, td {
	    	border: 1px solid black;
		}
		th {
    		background-color: #4CAF50;
    		color: white;
		}
		tr:hover{background-color:#f5f5f5}
		tr {
			background-color: #DBFFFF;
		}
	</style>
</head>
<body>
	<?php
		echo "<table>
				<tr>
					<th>file name</th>
					<th>Load-Hits</th>
					<th>Load-Hits</th>
					<th>Load-Misses</th>
					<th>Load-Misses</th>
					<th>Load-Accesses</th>
					<th>Load-Accesses</th>
					<th>Store-Hits</th>
					<th>Store-Hits</th>
					<th>Store-Misses</th>
					<th>Store-Misses</th>
					<th>Store-Accesses</th>
					<th>Store-Accesses</th>
					<th>Total-Hits</th>
					<th>Total-Hits</th>
					<th>Total-Misses</th>
					<th>Total-Misses</th>
					<th>Total-Accesses</th>
					<th>Total-Accesses</th>
				</tr>
			";
		for($j =32;$j <= 128;$j*=2)
		{
			for($i = 1;$i <= 8 ; $i*=2)
			{
				for($k = 16;$k <= 128;$k*=2)
				{
					$file = "C:/xampp/htdocs/shell_".$i."_".$j."_".$k.".log";
					//echo "$file <br>";
					$content = file($file);
					for ($x=5; $x <= 15; $x++) { 
						$str[$x-5] = $content[$x];
						$count[$x-5] = substr($str[$x-5], 27,6);
						$percent[$x-5] = substr($str[$x-5], 35,7);
					}
					echo "<tr>";
					echo "<td>$file</td>";
					for($y=0;$y<=10;$y++){
						if ($y%4 != 3) {
							echo "<td>$count[$y]</td>";
							echo "<td>$percent[$y]</td>";
						}
					}
					echo "</tr>";
				}
			}
		}
		echo "</table>";
	?>
</body>
</html>