<?php
$host="localhost";
$username="root";
$password="";
$database="order";

$conn=mysqli_connect('localhost','root','','order');

if(!$conn)
{
die("Connection failed:".mysqli_connect_error());
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_POST["name"];
$number=$_POST["number"];
// $password=password_hash($_POST["password"],PASSWORD_DEFAULT);
$email=$_POST["email"];
$date=$_POST["date"];
$service=$_POST['service'];
$address=$_POST["address"];
$order_status=$_POST["order_status"];
$order_id=$_POST["order_id"];




$name=mysqli_real_escape_string($conn,$name);
$number=mysqli_real_escape_string($conn,$number);
$email=mysqli_real_escape_string($conn,$email);
$date=mysqli_real_escape_string($conn,$date);
$service=mysqli_real_escape_string($conn,$service);
$address=mysqli_real_escape_string($conn,$address);
$order_status=mysqli_real_escape_string($conn,$order_status);
$order_id=mysqli_real_escape_string($conn,$order_id);


$sql="insert into users (name,number,email,date,service,address,order_status,order_id)values('$name','$number','$email','$date','$service','$address','$order_status','$order_id')";
if(mysqli_query($conn,$sql))
{
header("Location:end.html");
exit();
}
else
{
echo "Error:".mysqli_error($conn);
}
}
mysqli_close($conn);
?>
