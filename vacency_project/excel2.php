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
			'cname' => '2634',
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
	<input type="text" name="college" value="EXCEL2">
	<input type="text" name="aero_department" id="aero_department">
	<input type="text" name="civil_department" id="civil_department">
	<input type="text" name="cse_department" id="cse_department">
	<input type="text" name="ece_department" id="ece_department">
	<input type="text" name="it_department" id="it_department">
	<input type="text" name="mech_department" id="mech_department">
</form>
<script type="text/javascript">
	
	$(document).ready(function () {

		//AERO
		var oc_aero_engineering_value = $("table > tbody tr:nth-child(6) > td:nth-child(3)").html();
		var bcm_aero_engineering_value = $("table > tbody tr:nth-child(6) > td:nth-child(5)").html();
		var bc_aero_engineering_value = $("table > tbody tr:nth-child(6) > td:nth-child(7)").html();
		var mbc_aero_engineering_value = $("table > tbody tr:nth-child(6) > td:nth-child(9)").html();
		var sca_aero_engineering_value = $("table > tbody tr:nth-child(6) > td:nth-child(11)").html();
		var sc_aero_engineering_value = $("table > tbody tr:nth-child(6) > td:nth-child(13)").html();
		var st_aero_engineering_value = $("table > tbody tr:nth-child(6) > td:nth-child(15)").html();

		$("#aero_department").val(oc_aero_engineering_value+"|"+bcm_aero_engineering_value+"|"+bc_aero_engineering_value+"|"+mbc_aero_engineering_value+"|"+sca_aero_engineering_value+"|"+sc_aero_engineering_value+"|"+st_aero_engineering_value);


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


		//IT
		var oc_it_engineering_value = $("table > tbody tr:nth-child(14) > td:nth-child(3)").html();
		var bcm_it_engineering_value = $("table > tbody tr:nth-child(14) > td:nth-child(5)").html();
		var bc_it_engineering_value = $("table > tbody tr:nth-child(14) > td:nth-child(7)").html();
		var mbc_it_engineering_value = $("table > tbody tr:nth-child(14) > td:nth-child(9)").html();
		var sca_it_engineering_value = $("table > tbody tr:nth-child(14) > td:nth-child(11)").html();
		var sc_it_engineering_value = $("table > tbody tr:nth-child(14) > td:nth-child(13)").html();
		var st_it_engineering_value = $("table > tbody tr:nth-child(14) > td:nth-child(15)").html();

		$("#it_department").val(oc_it_engineering_value+"|"+bcm_it_engineering_value+"|"+bc_it_engineering_value+"|"+mbc_it_engineering_value+"|"+sca_it_engineering_value+"|"+sc_it_engineering_value+"|"+st_it_engineering_value);

		//MECH
		var oc_mech_engineering_value = $("table > tbody tr:nth-child(16) > td:nth-child(3)").html();
		var bcm_mech_engineering_value = $("table > tbody tr:nth-child(16) > td:nth-child(5)").html();
		var bc_mech_engineering_value = $("table > tbody tr:nth-child(16) > td:nth-child(7)").html();
		var mbc_mech_engineering_value = $("table > tbody tr:nth-child(16) > td:nth-child(9)").html();
		var sca_mech_engineering_value = $("table > tbody tr:nth-child(16) > td:nth-child(11)").html();
		var sc_mech_engineering_value = $("table > tbody tr:nth-child(16) > td:nth-child(13)").html();
		var st_mech_engineering_value = $("table > tbody tr:nth-child(16) > td:nth-child(15)").html();

		$("#mech_department").val(oc_mech_engineering_value+"|"+bcm_mech_engineering_value+"|"+bc_mech_engineering_value+"|"+mbc_mech_engineering_value+"|"+sca_mech_engineering_value+"|"+sc_mech_engineering_value+"|"+st_mech_engineering_value);


		$("#save_data").submit();

	});

</script>







</body>
</html>

