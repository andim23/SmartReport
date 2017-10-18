<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
		$nama = $_POST['nama'];
		$no_kamar = $_POST['no_kamar'];
		$laundry = $_POST['laundry'];
    $sisa_laundry = $_POST['sisa_laundry'];
		$listrik = $_POST['listrik'];
    $sisa_listrik = $_POST['sisa_listrik'];
    $charge = $_POST['charge'];

    //kuota sisa laundry
    $sisa_laundry = $sisa_laundry - $laundry;
    // Update User details
    $query = "UPDATE penghuni SET id = '$id', nama = '$nama', no_kamar = '$no_kamar',laundry = '$laundry',sisa_laundry = '$sisa_laundry',listrik = '$listrik',sisa_listrik = '$sisa_listrik',charge ='$charge' WHERE id = '$id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}
