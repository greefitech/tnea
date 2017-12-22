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
			'cname' => '2302',
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
	<input type="text" name="college" value="SHANMUGHA">
	<input type="text" name="agri_department" id="agri_department">
	<input type="text" name="civil_department" id="civil_department">
	<input type="text" name="cse_department" id="cse_department">
	<input type="text" name="ece_department" id="ece_department">
	<input type="text" name="mech_department" id="mech_department">
</form>
<script type="text/javascript">
	
	$(document).ready(function () {
		//AGRI
		var oc_agriculture_engineering_value = $("table > tbody tr:nth-child(6) > td:nth-child(3)").html();
		var bcm_agriculture_engineering_value = $("table > tbody tr:nth-child(6) > td:nth-child(5)").html();
		var bc_agriculture_engineering_value = $("table > tbody tr:nth-child(6) > td:nth-child(7)").html();
		var mbc_agriculture_engineering_value = $("table > tbody tr:nth-child(6) > td:nth-child(9)").html();
		var sca_agriculture_engineering_value = $("table > tbody tr:nth-child(6) > td:nth-child(11)").html();
		var sc_agriculture_engineering_value = $("table > tbody tr:nth-child(6) > td:nth-child(13)").html();
		var st_agriculture_engineering_value = $("table > tbody tr:nth-child(6) > td:nth-child(15)").html();

		$("#agri_department").val(oc_agriculture_engineering_value+"|"+bcm_agriculture_engineering_value+"|"+bc_agriculture_engineering_value+"|"+mbc_agriculture_engineering_value+"|"+sca_agriculture_engineering_value+"|"+sc_agriculture_engineering_value+"|"+st_agriculture_engineering_value);


		//CIVIL
		var oc_civil_engineering_value = $("table > tbody tr:nth-child(8) > td:nth-child(3)").html();
		var bcm_civil_engineering_value = $("table > tbody tr:nth-child(8) > td:nth-child(5)").html();
		var bc_civil_engineering_value = $("table > tbody tr:nth-child(8) > td:nth-child(7)").html();
		var mbc_civil_engineering_value = $("table > tbody tr:nth-child(8) > td:nth-child(9)").html();
		var sca_civil_engineering_value = $("table > tbody tr:nth-child(8) > td:nth-child(11)").html();
		var sc_civil_engineering_value = $("table > tbody tr:nth-child(8) > td:nth-child(13)").html();
		var st_civil_engineering_value = $("table > tbody tr:nth-child(8) > td:nth-child(15)").html();

		$("#civil_department").val(oc_civil_engineering_value+"|"+bcm_civil_engineering_value+"|"+bc_civil_engineering_value+"|"+mbc_civil_engineering_value+"|"+sca_civil_engineering_value+"|"+sc_civil_engineering_value+"|"+st_civil_engineering_value);


		//CSE
		var oc_cse_engineering_value = $("table > tbody tr:nth-child(10) > td:nth-child(3)").html();
		var bcm_cse_engineering_value = $("table > tbody tr:nth-child(10) > td:nth-child(5)").html();
		var bc_cse_engineering_value = $("table > tbody tr:nth-child(10) > td:nth-child(7)").html();
		var mbc_cse_engineering_value = $("table > tbody tr:nth-child(10) > td:nth-child(9)").html();
		var sca_cse_engineering_value = $("table > tbody tr:nth-child(10) > td:nth-child(11)").html();
		var sc_cse_engineering_value = $("table > tbody tr:nth-child(10) > td:nth-child(13)").html();
		var st_cse_engineering_value = $("table > tbody tr:nth-child(10) > td:nth-child(15)").html();

		$("#cse_department").val(oc_cse_engineering_value+"|"+bcm_cse_engineering_value+"|"+bc_cse_engineering_value+"|"+mbc_cse_engineering_value+"|"+sca_cse_engineering_value+"|"+sc_cse_engineering_value+"|"+st_cse_engineering_value);

		//ECE
		var oc_ece_engineering_value = $("table > tbody tr:nth-child(12) > td:nth-child(3)").html();
		var bcm_ece_engineering_value = $("table > tbody tr:nth-child(12) > td:nth-child(5)").html();
		var bc_ece_engineering_value = $("table > tbody tr:nth-child(12) > td:nth-child(7)").html();
		var mbc_ece_engineering_value = $("table > tbody tr:nth-child(12) > td:nth-child(9)").html();
		var sca_ece_engineering_value = $("table > tbody tr:nth-child(12) > td:nth-child(11)").html();
		var sc_ece_engineering_value = $("table > tbody tr:nth-child(12) > td:nth-child(13)").html();
		var st_ece_engineering_value = $("table > tbody tr:nth-child(12) > td:nth-child(15)").html();

		$("#ece_department").val(oc_ece_engineering_value+"|"+bcm_ece_engineering_value+"|"+bc_ece_engineering_value+"|"+mbc_ece_engineering_value+"|"+sca_ece_engineering_value+"|"+sc_ece_engineering_value+"|"+st_ece_engineering_value);

		//MECH
		var oc_mech_engineering_value = $("table > tbody tr:nth-child(14) > td:nth-child(3)").html();
		var bcm_mech_engineering_value = $("table > tbody tr:nth-child(14) > td:nth-child(5)").html();
		var bc_mech_engineering_value = $("table > tbody tr:nth-child(14) > td:nth-child(7)").html();
		var mbc_mech_engineering_value = $("table > tbody tr:nth-child(14) > td:nth-child(9)").html();
		var sca_mech_engineering_value = $("table > tbody tr:nth-child(14) > td:nth-child(11)").html();
		var sc_mech_engineering_value = $("table > tbody tr:nth-child(14) > td:nth-child(13)").html();
		var st_mech_engineering_value = $("table > tbody tr:nth-child(14) > td:nth-child(15)").html();

		$("#mech_department").val(oc_mech_engineering_value+"|"+bcm_mech_engineering_value+"|"+bc_mech_engineering_value+"|"+mbc_mech_engineering_value+"|"+sca_mech_engineering_value+"|"+sc_mech_engineering_value+"|"+st_mech_engineering_value);


		$("#save_data").submit();

	});

</script>







</body>
</html>

