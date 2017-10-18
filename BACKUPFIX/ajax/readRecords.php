<?php
	// include Database connection file
	include("db_connection.php");

	// Design initial table header
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>No.</th>
							<th>ID</th>
							<th>NAMA</th>
							<th>NOMOR KAMAR</th>
							<th>LAUNDRY</th>
							<th>SISA LAUNDRY</th>
							<th>LISTRIK</th>
							<th>SISA LISTRIK</th>
							<th>CHARGE</th>
							<th>UPDATE</th>
							<th>DELETE</th>
							<th>RESET</th>
						</tr>';

	$query = "SELECT * FROM penghuni";

	if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }

    // if query results contains rows then featch those rows
    if(mysql_num_rows($result) > 0)
    {
    	$number = 1;
    	while($row = mysql_fetch_assoc($result))
    	{
    		$data .= '<tr>
				<td>'.$number.'</td>
				<td>'.$row['id'].'</td>
				<td>'.$row['nama'].'</td>
				<td>'.$row['no_kamar'].'</td>
				<td>'.$row['laundry'].'</td>
				<td>'.$row['sisa_laundry'].'</td>
				<td>'.$row['listrik'].'</td>
				<td>'.$row['sisa_listrik'].'</td>
				<td>'.$row['charge'].'</td>
				<td>
					<button onclick="GetUserDetails('.$row['id'].')" class="btn btn-warning">Update</button>
				</td>
				<td>
					<button onclick="DeleteUser('.$row['id'].')" class="btn btn-danger">Delete</button>
				</td>
				<td>
					<button onclick="ResetUser('.$row['id'].')" class="btn btn-primary">Reset Quota</button>
				</td>
    		</tr>';
    		$number++;
    	}
    }
    else
    {
    	// records now found
    	$data .= '<tr><td colspan="6">Records not found!</td></tr>';
    }

    $data .= '</table>';

    echo $data;
?>
