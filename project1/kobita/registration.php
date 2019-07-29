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
	height: 547px;
	width: 548px;
	top:-250px;
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button #4CAF50 */
.registerbtn {
    background-color: deepskyblue;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}


</style>
</head>
<body>

<form action="complete_reg.php" method="post">
  <div class="container">
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>User name</b></label>
    <input type="text" placeholder="User name" name="user_name" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="re_password" required>
    <hr>
	
    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  
</form>

 
    <form action="front_page.php">
	<button type="submit" class="registerbtn">Back</button>
	
	</form>
</body>
</html>
