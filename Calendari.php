<!DOCTYPE html>
<html>
<head>
	<title>Calendari</title>
</head>
<body align="center">
	<table border="2">
		<tr>
			<td>Dilluns</td>
			<td>Dimarts</td>
			<td>Dimecres</td>
			<td>Dijous</td>
			<td>Divendres</td>
			<td>Dissabte</td>
			<td>Diumenge</td>
		</tr>
		<?php

			$First_Day_Start = 0;
			$First_Day = date('d', strtotime('first day of this month'));
			$Last_Day = date('d', strtotime('last day of this month'));
			$Today = date('d', strtotime('today'));
			$Columna = 5;

			for ($i = $First_Day; $i <= $Last_Day; $i ++) {

				if ($First_Day_Start==5) {

					if ($Columna <=6) {

						$Columna++;				
						echo "<td>$i</td>";

					} else {

						echo "<tr>";
						$Columna = 0;

					}
					
				} else {

					echo "<td></td>";
					$First_Day_Start++;

				}
		}
			
		?>
	</table>
</body>
</html>