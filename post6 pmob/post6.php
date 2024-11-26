<?php
//koneksi ke database hotel
$connection =
mysqli_connect("localhost","root","041013","hotel") or
die("Error " . mysqli_error($connection));
//query ke table hotel
$sql = "select * from tbl_hotel";
$result = mysqli_query($connection, $sql) or die("Error in
Selecting " . mysqli_error($connection));
//pembuatan array
$emparray = array();
while($row =mysqli_fetch_assoc($result))
{
$emparray[] = $row;
}
//pembuatan json
echo json_encode($emparray);
//tutup koneksi
mysqli_close($connection);
?>