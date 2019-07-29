
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
	height: 300px;
	width: 548px;
	top:-10px;
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
<?php
$user_name=$_GET["user_name"];
?>

<form action="account_verification.php" method="get">
  <div class="container">
  <?php
  echo "Username: $user_name";
  ?>
    <br><br><br>
	<input type='hidden' name='user_name' value='<?php echo "$user_name";?>'/> 
	<button type="submit" name="path" value="history">History Of appointment</button> 
    <button type="submit" name="path" value="appointment">Make an appointment</button>   
   
  </div>
</form>
<form action="front_page.php" >
	<button type="submit">LogOut</button>
	</form>

</body>
</html>
