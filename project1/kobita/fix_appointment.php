<html>


<style>
form {
    right: 50%;
    bottom: 50%;
    transform: translate(50%,50%);
    position: absolute;
	/*border: 3px solid green;*/
	height: 100px;
	width: 120px;
}

button {
    background-color: deepskyblue;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}
</style>
</html>




<?php


$id=$_GET["id"];
$user_name=$_GET["user_name"];
$specialist=$_GET["specialist"];


$con = mysqli_connect("localhost","root","","doctor");


$a=null;

$sql="
select *
from `{$specialist}`
where id='$id'
";


$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($res)){
$a= $row['id'];
$name= $row['name'];
$chamber= $row['chamber'];
$time= $row['time'];
$day= $row['day'];
}

 
if($id == $a){
	
$sl = 
"insert into `{$user_name}`(name,chamber,time,day)
values
('$name','$chamber','$time','$day')
";
mysqli_query($con,$sl);	

echo "
<form action='specialist.php' method='get'>
   <p>Appointment Completed Successfuly </p>
    <input type='hidden' name='user_name' value='$user_name' /> 
	<button type='submit'>Back</button>
</form>
	";
}	

else{
	echo "
<form action='specialist.php' method='get'>
<p>wrong code! try again </p>
    <input type='hidden' name='user_name' value='$user_name' /> 
	<button type='submit'>Back</button>
</form>
	";
}


?>


