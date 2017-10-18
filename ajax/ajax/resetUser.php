<?php
// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // include Database connection file
    include("db_connection.php");

    // get user id
    $user_id = $_POST['id'];

    // delete User
    $query = "UPDATE penghuni SET laundry = '0',sisa_laundry = '0',total_laundry = '0',listrik = '0',sisa_listrik = '0',total_listrik = '0',charge ='0' WHERE id = '$user_id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}
?>
