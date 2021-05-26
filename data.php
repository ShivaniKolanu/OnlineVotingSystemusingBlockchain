<?php


$conn=mysqli_connect("localhost","root","","election");

$query = "SELECT * FROM database WHERE serialno = '364'";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);

echo $result['name']." " .$result['con']." ".$result['photo'];


if($total !=0)

{
echo "";
}

else {

echo "No record";
}
?>