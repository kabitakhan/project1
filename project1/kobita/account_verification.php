
<?php


$path=$_GET["path"];
$user_name=$_GET["user_name"];
if($path == "history")
{
	header("location: history.php?user_name=$user_name");
}
else{
	header("location: specialist.php?user_name=$user_name");
}









?>

