
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
			'cname' => '2607',
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
	<input type="text" name="college" value="KSR1">
	<input type="text" name="bio_tech_department" id="bio_tech_department">
	<input type="text" name="civil_ex_department" id="civil_ex_department">
	<input type="text" name="civil_department" id="civil_department">
	<input type="text" name="cse_department" id="cse_department">
	<input type="text" name="ece_department" id="ece_department">
	<input type="text" name="eee_department" id="eee_department">
	<input type="text" name="eandi_department" id="eandi_department">
	<input type="text" name="food_department" id="food_department">
	<input type="text" name="it_department" id="it_department">
	<input type="text" name="mechatronics_department" id="mechatronics_department">
	<input type="text" name="mech_department" id="mech_department">
	<input type="text" name="nano_department" id="nano_department">
	<input type="text" name="textile_department" id="textile_department">
</form>
<script type="text/javascript">
	
	$(document).ready(function () {
		//biotech
		var oc_bio_tech_engineering_value = $("table > tbody tr:nth-child(6) > td:nth-child(3)").html();
		var bcm_bio_tech_engineering_value = $("table > tbody tr:nth-child(6) > td:nth-child(5)").html();
		var bc_bio_tech_engineering_value = $("table > tbody tr:nth-child(6) > td:nth-child(7)").html();
		var mbc_bio_tech_engineering_value = $("table > tbody tr:nth-child(6) > td:nth-child(9)").html();
		var sca_bio_tech_engineering_value = $("table > tbody tr:nth-child(6) > td:nth-child(11)").html();
		var sc_bio_tech_engineering_value = $("table > tbody tr:nth-child(6) > td:nth-child(13)").html();
		var st_bio_tech_engineering_value = $("table > tbody tr:nth-child(6) > td:nth-child(15)").html();

		$("#bio_tech_department").val(oc_bio_tech_engineering_value+"|"+bcm_bio_tech_engineering_value+"|"+bc_bio_tech_engineering_value+"|"+mbc_bio_tech_engineering_value+"|"+sca_bio_tech_engineering_value+"|"+sc_bio_tech_engineering_value+"|"+st_bio_tech_engineering_value);


		//CIVIL_ex
		var oc_civil_ex_engineering_value = $("table > tbody tr:nth-child(8) > td:nth-child(3)").html();
		var bcm_civil_ex_engineering_value = $("table > tbody tr:nth-child(8) > td:nth-child(5)").html();
		var bc_civil_ex_engineering_value = $("table > tbody tr:nth-child(8) > td:nth-child(7)").html();
		var mbc_civil_ex_engineering_value = $("table > tbody tr:nth-child(8) > td:nth-child(9)").html();
		var sca_civil_ex_engineering_value = $("table > tbody tr:nth-child(8) > td:nth-child(11)").html();
		var sc_civil_ex_engineering_value = $("table > tbody tr:nth-child(8) > td:nth-child(13)").html();
		var st_civil_ex_engineering_value = $("table > tbody tr:nth-child(8) > td:nth-child(15)").html();

		$("#civil_ex_department").val(oc_civil_ex_engineering_value+"|"+bcm_civil_ex_engineering_value+"|"+bc_civil_ex_engineering_value+"|"+mbc_civil_ex_engineering_value+"|"+sca_civil_ex_engineering_value+"|"+sc_civil_ex_engineering_value+"|"+st_civil_ex_engineering_value);

		//CIVIL
		var oc_civil_engineering_value = $("table > tbody tr:nth-child(10) > td:nth-child(3)").html();
		var bcm_civil_engineering_value = $("table > tbody tr:nth-child(10) > td:nth-child(5)").html();
		var bc_civil_engineering_value = $("table > tbody tr:nth-child(10) > td:nth-child(7)").html();
		var mbc_civil_engineering_value = $("table > tbody tr:nth-child(10) > td:nth-child(9)").html();
		var sca_civil_engineering_value = $("table > tbody tr:nth-child(10) > td:nth-child(11)").html();
		var sc_civil_engineering_value = $("table > tbody tr:nth-child(10) > td:nth-child(13)").html();
		var st_civil_engineering_value = $("table > tbody tr:nth-child(10) > td:nth-child(15)").html();

		$("#civil_department").val(oc_civil_engineering_value+"|"+bcm_civil_engineering_value+"|"+bc_civil_engineering_value+"|"+mbc_civil_engineering_value+"|"+sca_civil_engineering_value+"|"+sc_civil_engineering_value+"|"+st_civil_engineering_value);


		//CSE
		var oc_cse_engineering_value = $("table > tbody tr:nth-child(12) > td:nth-child(3)").html();
		var bcm_cse_engineering_value = $("table > tbody tr:nth-child(12) > td:nth-child(5)").html();
		var bc_cse_engineering_value = $("table > tbody tr:nth-child(12) > td:nth-child(7)").html();
		var mbc_cse_engineering_value = $("table > tbody tr:nth-child(12) > td:nth-child(9)").html();
		var sca_cse_engineering_value = $("table > tbody tr:nth-child(12) > td:nth-child(11)").html();
		var sc_cse_engineering_value = $("table > tbody tr:nth-child(12) > td:nth-child(13)").html();
		var st_cse_engineering_value = $("table > tbody tr:nth-child(12) > td:nth-child(15)").html();

		$("#cse_department").val(oc_cse_engineering_value+"|"+bcm_cse_engineering_value+"|"+bc_cse_engineering_value+"|"+mbc_cse_engineering_value+"|"+sca_cse_engineering_value+"|"+sc_cse_engineering_value+"|"+st_cse_engineering_value);

		//ECE
		var oc_ece_engineering_value = $("table > tbody tr:nth-child(14) > td:nth-child(3)").html();
		var bcm_ece_engineering_value = $("table > tbody tr:nth-child(14) > td:nth-child(5)").html();
		var bc_ece_engineering_value = $("table > tbody tr:nth-child(14) > td:nth-child(7)").html();
		var mbc_ece_engineering_value = $("table > tbody tr:nth-child(14) > td:nth-child(9)").html();
		var sca_ece_engineering_value = $("table > tbody tr:nth-child(14) > td:nth-child(11)").html();
		var sc_ece_engineering_value = $("table > tbody tr:nth-child(14) > td:nth-child(13)").html();
		var st_ece_engineering_value = $("table > tbody tr:nth-child(14) > td:nth-child(15)").html();

		$("#ece_department").val(oc_ece_engineering_value+"|"+bcm_ece_engineering_value+"|"+bc_ece_engineering_value+"|"+mbc_ece_engineering_value+"|"+sca_ece_engineering_value+"|"+sc_ece_engineering_value+"|"+st_ece_engineering_value);

		//EEE
		var oc_eee_engineering_value = $("table > tbody tr:nth-child(16) > td:nth-child(3)").html();
		var bcm_eee_engineering_value = $("table > tbody tr:nth-child(16) > td:nth-child(5)").html();
		var bc_eee_engineering_value = $("table > tbody tr:nth-child(16) > td:nth-child(7)").html();
		var mbc_eee_engineering_value = $("table > tbody tr:nth-child(16) > td:nth-child(9)").html();
		var sca_eee_engineering_value = $("table > tbody tr:nth-child(16) > td:nth-child(11)").html();
		var sc_eee_engineering_value = $("table > tbody tr:nth-child(16) > td:nth-child(13)").html();
		var st_eee_engineering_value = $("table > tbody tr:nth-child(16) > td:nth-child(15)").html();

		$("#eee_department").val(oc_eee_engineering_value+"|"+bcm_eee_engineering_value+"|"+bc_eee_engineering_value+"|"+mbc_eee_engineering_value+"|"+sca_eee_engineering_value+"|"+sc_eee_engineering_value+"|"+st_eee_engineering_value);


		//E&I
		var oc_eandi_engineering_value = $("table > tbody tr:nth-child(18) > td:nth-child(3)").html();
		var bcm_eandi_engineering_value = $("table > tbody tr:nth-child(18) > td:nth-child(5)").html();
		var bc_eandi_engineering_value = $("table > tbody tr:nth-child(18) > td:nth-child(7)").html();
		var mbc_eandi_engineering_value = $("table > tbody tr:nth-child(18) > td:nth-child(9)").html();
		var sca_eandi_engineering_value = $("table > tbody tr:nth-child(18) > td:nth-child(11)").html();
		var sc_eandi_engineering_value = $("table > tbody tr:nth-child(18) > td:nth-child(13)").html();
		var st_eandi_engineering_value = $("table > tbody tr:nth-child(18) > td:nth-child(15)").html();

		$("#eandi_department").val(oc_eandi_engineering_value+"|"+bcm_eandi_engineering_value+"|"+bc_eandi_engineering_value+"|"+mbc_eandi_engineering_value+"|"+sca_eandi_engineering_value+"|"+sc_eandi_engineering_value+"|"+st_eandi_engineering_value);


		//food
		var oc_food_engineering_value = $("table > tbody tr:nth-child(20) > td:nth-child(3)").html();
		var bcm_food_engineering_value = $("table > tbody tr:nth-child(20) > td:nth-child(5)").html();
		var bc_food_engineering_value = $("table > tbody tr:nth-child(20) > td:nth-child(7)").html();
		var mbc_food_engineering_value = $("table > tbody tr:nth-child(20) > td:nth-child(9)").html();
		var sca_food_engineering_value = $("table > tbody tr:nth-child(20) > td:nth-child(11)").html();
		var sc_food_engineering_value = $("table > tbody tr:nth-child(20) > td:nth-child(13)").html();
		var st_food_engineering_value = $("table > tbody tr:nth-child(20) > td:nth-child(15)").html();

		$("#food_department").val(oc_food_engineering_value+"|"+bcm_food_engineering_value+"|"+bc_food_engineering_value+"|"+mbc_food_engineering_value+"|"+sca_food_engineering_value+"|"+sc_food_engineering_value+"|"+st_food_engineering_value);

		//IT
		var oc_it_engineering_value = $("table > tbody tr:nth-child(22) > td:nth-child(3)").html();
		var bcm_it_engineering_value = $("table > tbody tr:nth-child(22) > td:nth-child(5)").html();
		var bc_it_engineering_value = $("table > tbody tr:nth-child(22) > td:nth-child(7)").html();
		var mbc_it_engineering_value = $("table > tbody tr:nth-child(22) > td:nth-child(9)").html();
		var sca_it_engineering_value = $("table > tbody tr:nth-child(22) > td:nth-child(11)").html();
		var sc_it_engineering_value = $("table > tbody tr:nth-child(22) > td:nth-child(13)").html();
		var st_it_engineering_value = $("table > tbody tr:nth-child(22) > td:nth-child(15)").html();

		$("#it_department").val(oc_it_engineering_value+"|"+bcm_it_engineering_value+"|"+bc_it_engineering_value+"|"+mbc_it_engineering_value+"|"+sca_it_engineering_value+"|"+sc_it_engineering_value+"|"+st_it_engineering_value);

		//Mechatronics
		var oc_mechatronics_engineering_value = $("table > tbody tr:nth-child(24) > td:nth-child(3)").html();
		var bcm_mechatronics_engineering_value = $("table > tbody tr:nth-child(24) > td:nth-child(5)").html();
		var bc_mechatronics_engineering_value = $("table > tbody tr:nth-child(24) > td:nth-child(7)").html();
		var mbc_mechatronics_engineering_value = $("table > tbody tr:nth-child(24) > td:nth-child(9)").html();
		var sca_mechatronics_engineering_value = $("table > tbody tr:nth-child(24) > td:nth-child(11)").html();
		var sc_mechatronics_engineering_value = $("table > tbody tr:nth-child(24) > td:nth-child(13)").html();
		var st_mechatronics_engineering_value = $("table > tbody tr:nth-child(24) > td:nth-child(15)").html();

		$("#mechatronics_department").val(oc_mechatronics_engineering_value+"|"+bcm_mechatronics_engineering_value+"|"+bc_mechatronics_engineering_value+"|"+mbc_mechatronics_engineering_value+"|"+sca_mechatronics_engineering_value+"|"+sc_mechatronics_engineering_value+"|"+st_mechatronics_engineering_value);

		//MECH
		var oc_mech_engineering_value = $("table > tbody tr:nth-child(26) > td:nth-child(3)").html();
		var bcm_mech_engineering_value = $("table > tbody tr:nth-child(26) > td:nth-child(5)").html();
		var bc_mech_engineering_value = $("table > tbody tr:nth-child(26) > td:nth-child(7)").html();
		var mbc_mech_engineering_value = $("table > tbody tr:nth-child(26) > td:nth-child(9)").html();
		var sca_mech_engineering_value = $("table > tbody tr:nth-child(26) > td:nth-child(11)").html();
		var sc_mech_engineering_value = $("table > tbody tr:nth-child(26) > td:nth-child(13)").html();
		var st_mech_engineering_value = $("table > tbody tr:nth-child(26) > td:nth-child(15)").html();

		$("#mech_department").val(oc_mech_engineering_value+"|"+bcm_mech_engineering_value+"|"+bc_mech_engineering_value+"|"+mbc_mech_engineering_value+"|"+sca_mech_engineering_value+"|"+sc_mech_engineering_value+"|"+st_mech_engineering_value);

		//Nano
		var oc_nano_engineering_value = $("table > tbody tr:nth-child(28) > td:nth-child(3)").html();
		var bcm_nano_engineering_value = $("table > tbody tr:nth-child(28) > td:nth-child(5)").html();
		var bc_nano_engineering_value = $("table > tbody tr:nth-child(28) > td:nth-child(7)").html();
		var mbc_nano_engineering_value = $("table > tbody tr:nth-child(28) > td:nth-child(9)").html();
		var sca_nano_engineering_value = $("table > tbody tr:nth-child(28) > td:nth-child(11)").html();
		var sc_nano_engineering_value = $("table > tbody tr:nth-child(28) > td:nth-child(13)").html();
		var st_nano_engineering_value = $("table > tbody tr:nth-child(28) > td:nth-child(15)").html();

		$("#nano_department").val(oc_nano_engineering_value+"|"+bcm_nano_engineering_value+"|"+bc_nano_engineering_value+"|"+mbc_nano_engineering_value+"|"+sca_nano_engineering_value+"|"+sc_nano_engineering_value+"|"+st_nano_engineering_value);



		//Textile
		var oc_textile_engineering_value = $("table > tbody tr:nth-child(30) > td:nth-child(3)").html();
		var bcm_textile_engineering_value = $("table > tbody tr:nth-child(30) > td:nth-child(5)").html();
		var bc_textile_engineering_value = $("table > tbody tr:nth-child(30) > td:nth-child(7)").html();
		var mbc_textile_engineering_value = $("table > tbody tr:nth-child(30) > td:nth-child(9)").html();
		var sca_textile_engineering_value = $("table > tbody tr:nth-child(30) > td:nth-child(11)").html();
		var sc_textile_engineering_value = $("table > tbody tr:nth-child(30) > td:nth-child(13)").html();
		var st_textile_engineering_value = $("table > tbody tr:nth-child(30) > td:nth-child(15)").html();

		$("#textile_department").val(oc_textile_engineering_value+"|"+bcm_textile_engineering_value+"|"+bc_textile_engineering_value+"|"+mbc_textile_engineering_value+"|"+sca_textile_engineering_value+"|"+sc_textile_engineering_value+"|"+st_textile_engineering_value);
		$("#save_data").submit();

	});

</script>







</body>
</html>

