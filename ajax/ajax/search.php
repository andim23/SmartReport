<?php
require_once 'connect.php';

if(isset($_GET['id'])){
	$id = $_GET['id'];

	$query = $db->query("SELECT * FROM penghuni WHERE id = '$id'");
}
	while($row = $query->fetch_array()){
		$ids = $row['id'];
		$nama = $row['nama'];
		$no_kamar = $row['no_kamar'];
		$laundry = $row['laundry'];
		$sisa_laundry = $row['sisa_laundry'];
		$total_laundry = $row['total_laundry'];
		$listrik = $row['listrik'];
		$sisa_listrik = $row['sisa_listrik'];
		$charge = $row['charge'];
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LAPORAN LAUNDRY DAN LISTRIK</title>

    <!-- Bootstrap CSS File  -->
    <link rel="stylesheet" type="text/css" href="../login.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="login">
		<center><table class="table table-bordered table-inverse">
			<tr>
				<th colspan="2"> <CENTER>LISTRIK DAN LAUNDRY</CENTER> </th>
			</tr>
			<tr>
				<th>Nomor ID : </th>
				<td><?php echo $ids?></td>
			</tr>
			<tr>
				<th>Nama : </th>
				<td><?php echo $nama?></td>
			</tr>
			<tr>
				<th>Nomor Kamar : </th>
				<td><?php echo $no_kamar?></td>
			</tr>
			<tr>
				<th>Pemakaian Laundry : </th>
				<td><?php echo $total_laundry?> Kg</td>
			</tr>
			<tr>
				<th>Sisa Laundry : </th>
				<td><?php echo $sisa_laundry?> Kg</td>
			</tr>
			<tr>
				<th>Pemakaian Listrik : </th>
				<td><?php echo $listrik?> KWh</td>
			</tr>
			<tr>
				<th>Sisa Listrik : </th>
				<td><?php echo $sisa_listrik?> KWh</td>
			</tr>
			<tr>
				<th>Charge : </th>
				<td>Rp <?php echo $charge?></td>
			</tr>
</table></center>
</div>
</div>
</body>
</html>
