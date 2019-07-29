<!DOCTYPE html>

<?php

$user_name=$_GET['user_name'];
$specialist=$_GET["specialist"];

$con = mysqli_connect("localhost","root","","doctor");

$sql="
select id,name,chamber,time,day
from $specialist
";
$res=mysqli_query($con,$sql);

?>



<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: deepskyblue;
    color: white;
}
</style>
</head>
<body>
<?php
echo "Username: $user_name<br>";
?>
<table id="customers">
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Chamber Address</th>
	<th>Time</th>
	<th>Day</th>
  </tr>
  

 <?php
 
while($row=mysqli_fetch_assoc($res))
{
	echo"<tr>";
	echo "<td>".$row['id']."</td>";
	echo "<td>".$row['name']."</td>";
	echo "<td>".$row['chamber']."</td>";
	echo "<td>".$row['time']."</td>";
	echo "<td>".$row['day']."</td>";
	echo"<tr>";
}

?>
  
 
</table>

</body>
</html>









<html>
<head>
<style>
body {
	font-family: Arial, Helvetica, sans-serif;
    background-color: white;
	right: 50%;
    bottom: 50%;
    transform: translate(50%,50%);
    position: absolute;
	border: 3px solid deepskyblue;
	height: 590px;
	width: 546px;
	top:-300px;
	}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
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


.container {
    padding: 16px;
}


</style>
</head>
<body>


<form action="fix_appointment.php" method="get">
 

  <div class="container">
    <label for="uname"><b>Enter Doctor's ID No</b></label>
    <input type="text" placeholder="Enter ID" name="id" required>
 	<input type='hidden' name='user_name' value='<?php echo "$user_name";?>'/>  
	<input type='hidden' name='specialist' value='<?php echo "$specialist";?>'/> 
    <button type="submit">Submit</button>
	

  </div>
</form>
    <form action="specialist.php" >
	<input type='hidden' name='user_name' value='<?php echo "$user_name";?>'/>  
	<button type="submit">Back</button>
	</form>
	<form action="front_page.php" >
	<button type="submit">LogOut</button>
	</form>
</body>
</html>





