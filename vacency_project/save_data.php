<?php 


	include_once '../model/db.php';

	// print_r($_POST);

	$table_name = '`'.$_POST['college'].'`';
	unset($_POST['college']);
	$conn = db_connect();
	$_POST['time_stamp'] = date("Y-m-d H:i:s");
	if(insert($table_name,$_POST,$conn)){
		echo "Inserted";
	}else{
		// create_table();
		// print_r($_POST);
		unset($_POST['time_stamp']);
		$column_slug = "";
		foreach ($_POST as $key => $value) {
			$column_slug = $column_slug."`".$key."` varchar(255) DEFAULT NULL,";
		}
		$sql = "CREATE TABLE ".$table_name." (
		 `id` int(11) NOT NULL AUTO_INCREMENT,".$column_slug."`time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
		 PRIMARY KEY (`id`)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
		if (mysqli_query($conn, $sql)) {
			$_POST['time_stamp'] = date("Y-m-d H:i:s");
		    if(insert($table_name,$_POST,$conn)){
				echo "Inserted";
			}
		} 

	}
	

 ?>