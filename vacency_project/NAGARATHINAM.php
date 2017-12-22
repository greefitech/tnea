<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php  
	$postdata = http_build_query(
		array(
			'cname' => '2662',
			'btncname' => 'Find',
			'ccode' => '0',
			'bname' => '0'
		)
	);
	$opts = array('http' =>
		array(
			'method'  => 'POST',
			'header'  => 'Content-type: application/x-www-form-urlencoded',
			'content' => $postdata
		)
	);
	$context  = stream_context_create($opts);
	$result = file_get_contents('http://vacancy.tnea.ac.in', false, $context);
	$selected_row = explode("<div class='table-responsive'>", $result);
	$final_selected_row = explode("</div>",$selected_row[1]);
	echo $final_selected_row[0];
?>
<form action="save_data.php" id="save_data" method="POST">
	<input type="text" name="college" value="NAGARATHINAM">
	<?php 
	$department = array("civil_department","cse_department","ece_department","eee_department","mech_department" );

		foreach ($department as $key => $department_name) {
			echo '<input type="text" name="'.$department_name.'" id="'.$department_name.'">';
		}
	 ?>
</form>
<script type="text/javascript">
$(document).ready(function () {
<?php
	$i = 6;
	foreach ($department as $key => $department_name) {
		echo 'var oc_'.$department_name.'_engineering_value = $("table > tbody tr:nth-child('.$i.') > td:nth-child(3)").html();
		var bcm_'.$department_name.'_engineering_value = $("table > tbody tr:nth-child('.$i.') > td:nth-child(5)").html();
		var bc_'.$department_name.'_engineering_value = $("table > tbody tr:nth-child('.$i.') > td:nth-child(7)").html();
		var mbc_'.$department_name.'_engineering_value = $("table > tbody tr:nth-child('.$i.') > td:nth-child(9)").html();
		var sca_'.$department_name.'_engineering_value = $("table > tbody tr:nth-child('.$i.') > td:nth-child(11)").html();
		var sc_'.$department_name.'_engineering_value = $("table > tbody tr:nth-child('.$i.') > td:nth-child(13)").html();
		var st_'.$department_name.'_engineering_value = $("table > tbody tr:nth-child('.$i.') > td:nth-child(15)").html();

		$("#'.$department_name.'").val(oc_'.$department_name.'_engineering_value+"|"+bcm_'.$department_name.'_engineering_value+"|"+bc_'.$department_name.'_engineering_value+"|"+mbc_'.$department_name.'_engineering_value+"|"+sca_'.$department_name.'_engineering_value+"|"+sc_'.$department_name.'_engineering_value+"|"+st_'.$department_name.'_engineering_value);';
		$i = $i+2;
	}
 ?>

		$("#save_data").submit();



	});
</script>