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
	width: 546px;
	top:-270px;
	}
/*form {border: 3px solid #f1f1f1;}*/

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


.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}


</style>
</head>
<body>

<form action="login_verification.php" method="post">
  
    <div class="imgcontainer">
    <img src="login.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user_name" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>
	

  </div>
</form>
    <form action="front_page.php" >
       


        <div class="container">	
	<button type="submit">Back</button>
	</div>
	</form>
</body>
</html>

