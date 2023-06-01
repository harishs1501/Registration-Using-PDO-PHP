<?php
$server="localhost";
$uname="root";
$pwd="";
$db="task";

try
{
	$name=$_POST['name'];
	$fname=$_POST['fname'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$phnno=$_POST['phnno'];
	$addr=$_POST['addr'];
	$em=$_POST['em'];
	$psd=$_POST['psd'];
	$cpsd=$_POST['cpsd'];

	$con=new PDO("mysql:host=$server;dbname=$db",$uname,$pwd);
	$query="insert into rg(name,fname,gender,dob,phnno,addr,em,psd,cpsd) values(:name,:fname,:gender,:dob,:phnno,:addr,:em,:psd,:cpsd)";
	$stmt=$con->prepare($query);
	if($stmt->execute([":name"=>$name,"fname"=>$fname,"gender"=>$gender,"dob"=>$dob,"phnno"=>$phnno,"addr"=>$addr,"em"=>$em,"psd"=>$psd,"cpsd"=>$cpsd]))
	{
		echo"Registered";
	}
	else
	{
		echo"Error";
	}
}
catch(PDOException $e)
{
	echo $e->getMessage();
}
?>