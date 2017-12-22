<?php

	include_once 'vacency_project/show_report.php'; 
	include_once 'common_functions.php';
	// print_r($printable_array);
	$selected_row = $printable_array[$_GET['key']];

	unset($selected_row['percentage']);

	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Greefi Technologies</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
</head>
<body>
<div class="container">
	<?php 
		foreach ($selected_row as $slug => $department_details) {
			echo "<h1 class='text-center'>".get_college_name($slug)."</h1>";
			echo "<hr/>";
			echo '<table class="table text-center">
			<thead>
				<tr>
					<th class="text-center">Department Name</th>
					<th class="text-center">Alloted Seat</th>
					<th class="text-center">Todays Taken Count</th>
					<th class="text-center">Over All Taken</th>
				</tr>
			</thead><tbody>';
			foreach ($department_details as $department_name => $options) {
				echo "<tr><td>".get_department_name($department_name)."</td>";
				echo "<td>".$options['total']."</td>";
				echo "<td>".$options['today']."</td>";
				echo "<td>".$options['overall']."</td></tr>";
			}
			echo "</tbody></table>";
		} 
	?>
</div>
	

</body>
</html>