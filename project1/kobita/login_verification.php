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

/////////////////////////////////  variable  //////////////////////////////
if(1==1){
$user_name=$_POST['user_name'];
$password=$_POST['password'];
$flag=0;
}
////////////////////////////////  end  ///////////////////////////////////




///////////////////////  if fail to fill any entry  //////////////////////
if($user_name==NULL || $password==NULL ){ 
echo "Fill All Entries";
echo "
<form action='login.php' method='post'>
<input type='submit' value='back'>
</form>
";
$flag=1;
}
//////////////////////////////////////////  end  ////////////////////////



/////////////////////////////  connect database  /////////////////////////
$con = mysqli_connect("localhost","root","","doctor");
////////////////////////////////  end  ///////////////////////////////////



//////////////////////////////////////  password match query  /////////////
$sql = "select user_name,password from account";
$query = mysqli_query($con,$sql);
//////////////////////////////////////  end  //////////////////////////////




//////////////  search all row to match password and user_id  //////////////
while($row=mysqli_fetch_assoc($query))
{
	
	
	
	
	                        /////// search for match //////
	if($row["user_name"] == $user_name && $row["password"] == $password)
	{
		$flag=1;
		header("location: account.php?user_name=$user_name");
		break;
	}
	                             //////////  end  //////////////
	
	
	
	

}
////////////////////////////  end  /////////////////////////////////////////




////////////////////////////////////  if password not match  ///////////////
if( $flag==0){
echo "
<form action='login.php'>
<p2>Password is wrong </p2>
<button type='submit' value='Submit'>Back</button> 
</form>
";}
////////////////////////////////////  end  ////////////////////////////////




/////////////////////////////////  database connection off  ///////////////
mysqli_close($con);
////////////////////////////////  end  ////////////////////////////////////

?>

