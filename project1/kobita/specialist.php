<!DOCTYPE html>
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
	height: 580px;
	width: 548px;
	top:-280px;
	}
form {border: 3px solid #f1f1f1;}



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

/*.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}*/





.container {
    padding: 16px;
}

/*span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}*/

</style>
</head>
<body>


<form action="specialist_doctor.php" method="get">
  <div class="container">
   <?php
   $user_name=$_GET["user_name"];
   echo "Username: $user_name";
   ?>
   <p>Choose Your Specialist<br><br><br></p>
	<button type="submit" name="specialist" value="neurologist">Neurologist</button> 
    <button type="submit" name="specialist" value="dermatologist">Dermatologist</button>   
    <button type="submit" name="specialist" value="cardiologist">Cardiologist</button>
	<button type="submit" name="specialist" value="gynecologist">Gynecologist</button>
	<button type="submit" name="specialist" value="psychiatrist" >Psychiatrist</button>
	<input type='hidden' name='user_name' value='<?php echo "$user_name";?>'/> 

  </div>
</form>


    <form action="account.php" method="get">
    <input type='hidden' name='user_name' value='<?php echo "$user_name";?>'/> 
	<button type="submit">Back</button>
	</form>
	
	<form action="front_page.php" >
	<button type="submit">LogOut</button>
	</form>

</body>
</html>
