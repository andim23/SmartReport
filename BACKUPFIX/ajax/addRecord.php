<?php
	//if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']))
	if(isset($_POST))
	{
		// include Database connection file
		include("db_connection.php");

		// get values
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$no_kamar = $_POST['no_kamar'];
		$laundry = $_POST['laundry'];
		$sisa_laundry = $_POST['sisa_laundry'];
		$listrik = $_POST['listrik'];
		$sisa_listrik = $_POST['sisa_listrik'];
		$charge = $_POST['charge'];


		$query = "INSERT INTO penghuni(id,nama,no_kamar,laundry,sisa_laundry,listrik,sisa_listrik,charge) VALUES('$id','$nama','$no_kamar','$laundry','$sisa_laundry','$listrik','$sisa_listrik','$charge')";
		if (!$result = mysql_query($query)) {
	        exit(mysql_error());
	    }
	    echo "1 Record Added!";
	}
?>
