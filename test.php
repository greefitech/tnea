<?php 
	include_once 'model/db.php';
	$where = "`post_modified` >= CURDATE()";
	$data = "ID,post_date,post_type,post_title";
	$raw_data = select($data,'wp_posts',$where,db_connect());
	print_r($raw_data);
?>
<html>
<head>
	<title>Test</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<!-- <td>post_date</td> -->
					<td>post_date_gmt</td>
					<td>post_title</td>
					<!-- <td>post_type</td> -->
				</tr>
			</thead>
			<tbody>
				<?php 
					if ($raw_data != 'empty') {
						foreach ($raw_data as $key => $value) {
							echo "<tr>";
							echo "<td>".date('d M Y', strtotime($value['post_date']))."</td>";
							echo "<td>".$value['post_title']."</td>";
							echo "</tr>";
						}
					}
					else{
						echo "No news";
					}
				 ?>
			</tbody>
		</table>
	</div>
</body>
</html>