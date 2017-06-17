<!DOCTYPE html>
<html>
<head>
	<title>TABLA</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
</head>
<body>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			 <table class="table table-stripped">
			 	<thead>
			 		<tr>
			 			<th>
			 				Raza
			 			</th>
			 			<th>
			 				Color
			 			</th>
			 		</tr>
			 	</thead>

			 	<tbody>
			 		<?php

			 		require "./conexion.php"

			 		$query = "select * from GATOS";
			 		foreach ($conn->query($query)as $row) {
			 			echo "<tr>";
			 			echo "<td>$row['RAZA']</td>";
			 			echo "<td>$row['COLOR']</td>";
			 			echo "</tr>";
			 		}

			 		 ?>
			 	</tbody>

			 </table>
		</div>
	</div>

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src = "./assets/js/bootstrap.min.js"></script>

</body>
</html>