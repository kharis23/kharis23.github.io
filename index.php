
		<?php
			echo "<form method = 'post' action = 'meet1.php'>";
			echo "<table border = '0'>";
			echo "<tr>";
				echo"<td>Angka Pertama</td>";
				echo"<td>:</td>";
				echo"<td><input type = 'number' name = 'var1'></td>";
			echo "</tr>";
			echo "<tr>";
				echo"<td>Angka Kedua</td>";
				echo"<td>:</td>";
				echo"<td><input type = 'number' name = 'var2'></td>";
			echo "</tr>";
			echo "<tr>";
		echo"<td colspan = '3'>
		<input type = 'submit' name = 'tambah' value='+'>
		<input type = 'submit' name = 'kurang' value='-'>
		<input type = 'submit' name = 'bagi' value='/'>
		<input type = 'submit' name = 'kali' value='x'>
		<input type = 'submit' name = 'pangkat' value='^2'></td>";
			echo "</tr>";
			if(isset($_POST['tambah'])){
				$var1=$_POST['var1'];
				$var2=$_POST['var2'];
		
				$hasil = $var1+$var2;
				echo "<tr>";
					echo"<td>hasil</td><td>:</td>";
					echo"<td>$hasil</td>";
				echo "</tr>";				
			
			}
			if(isset($_POST['bagi'])){
				$var1=$_POST['var1'];
				$var2=$_POST['var2'];
		
				$hasil = $var1/$var2;
				echo "<tr>";
					echo"<td>hasil</td><td>:</td>";
					echo"<td>$hasil</td>";
				echo "</tr>";				
			}
			if(isset($_POST['kali'])){
				$var1=$_POST['var1'];
				$var2=$_POST['var2'];
		
				$hasil = $var1*$var2;
				echo "<tr>";
					echo"<td>hasil</td><td>:</td>";
					echo"<td>$hasil</td>";
				echo "</tr>";				
			}
			if(isset($_POST['pangkat'])){
				$var1=$_POST['var1'];
				$var2=$_POST['var2'];
		
				
				$hasil = $var1;
				for($i=1; $i<$var2; $i++){
					$hasil *=$var1;
				}
				echo "<tr>";
					echo"<td>hasil</td><td>:</td>";
					echo"<td>$hasil</td>";
				echo "</tr>";				
			}
			echo "</table>";
			echo "</form>";
		?>
