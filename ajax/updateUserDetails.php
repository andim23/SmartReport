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
    $total_laundry = $_POST['total_laundry'];
		$listrik = $_POST['listrik'];
    $sisa_listrik = $_POST['sisa_listrik'];
    $total_listrik = $_POST['total_listrik'];
    $charge = $_POST['charge'];
    $claundry = 0;
    $clistrik = 0;

    //kuota sisa laundry
    $sisa_laundry = $sisa_laundry - $laundry;
    $total_laundry = $total_laundry + $laundry;
    //kuota sisa listrik
    $sisa_listrik = $sisa_listrik - $listrik;
    $total_listrik = $total_listrik + $listrik;

    if(($sisa_laundry < 0) OR ($sisa_listrik < 0)){
      $claundry = $sisa_laundry * (-6000);
      $clistrik = $sisa_listrik * (-2000);
    }

    $charge = $claundry + $clistrik;
    // Update User details
    $query = "UPDATE penghuni SET id = '$id', nama = '$nama', no_kamar = '$no_kamar',laundry = '$laundry',sisa_laundry = '$sisa_laundry',total_laundry = '$total_laundry',listrik = '$listrik',sisa_listrik = '$sisa_listrik',total_listrik = '$total_listrik',charge ='$charge' WHERE id = '$id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}
