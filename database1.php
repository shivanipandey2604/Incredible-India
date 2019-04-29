<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo "server not connected";

}
if(!mysqli_select_db($con,'incredible india'))
{
	echo "not database";

}
$Name=$_POST['Name'];
$Email_Address=$_POST['Email_Address'];
$Contact_No=$_POST['Contact_No'];
$Message=$_POST['Message'];
$sql="INSERT INTO person(Name,Email_Address,Contact_No,Message) VALUES('$Name','$Email_Address','$Contact_No','$Message')";
if(!mysqli_query($con,$sql))
{
	echo "not inserted";

}
else
{
	echo "inserted";

}
header("refresh:5;url=contact.php");
?>