<?php
	echo"<table border='1' cellpadding='10'celspacing'0>";
		for($baris =1; $baris <=5; $baris++){
			if ($baris %2 == 1)
			// {
			// 	$color ="#CCC";
			// }else{
			// 	$color ="#FFF"
			// }
			echo"<tr bgcolor='#ccc'>";
			for($kolom =1; $kolom <=5; $kolom++){
				echo"<td>kolom1</td>";
			}
			echo"</tr>";	
		}
	echo"</table>";
?>