
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
$user_name=$_POST["user_name"];
$password=$_POST["password"];
$re_password=$_POST["re_password"];
$flag=0;
if($password != $re_password)
{
$flag=1;
echo "
<form action='registration.php'>
<p2>Password does not match </p2>
<button type='submit' value='Submit'>Back</button> 
</form>
";
}
else{
$con = mysqli_connect("localhost","root","","doctor");

$sql="
select user_name
from account
";
$res=mysqli_query($con,$sql);

while($row=mysqli_fetch_assoc($res))
{
	if($row['user_name']== $user_name)
	{
		$flag=1;
		echo "
<form action='registration.php'>
<p2> Username already exist</p2>
<button type='submit' value='Submit'>Back</button> 
</form>
";
		break;
	}

}


if($flag==0){
	
$sl = 
"insert into account(user_name,password)
values
('$user_name','$password')
";
mysqli_query($con,$sl);

$tbl="create table `{$user_name}`(
name varchar(50)not null,
chamber varchar(500)not null,
time varchar(50)not null,
day varchar(50)not null
)";
mysqli_query($con,$tbl);



mysqli_close($con);



echo "
<form action='front_page.php'>
<p2>Registration is completed</p2>
<button type='submit' value='Submit'>Back</button> 
</form>
";
}

}

?>