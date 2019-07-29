<!DOCTYPE html>
<html>
<style>
.box {
    right: 50%;
    bottom: 50%;
    transform: translate(50%,50%);
    position: absolute;
	border: 3px solid deepskyblue;
	height: 200px;
	width: 300px;
}

.text{
	color: black;
	right: 50%;
    bottom: 50%;
    transform: translate(50%,50%);
    position: absolute;
	top:-80px;
	font-size: 18px;
	font-weight: bold;
	width: 200px;
	right:130px;
	
}

.login {
    right: 50%;
    bottom: 50%;
    transform: translate(50%,50%);
    position: absolute;
	border: 2px solid deepskyblue;
	height: 30px;
	width: 100px;
	
	
}

.registration {
    right: 50%;
    bottom: 50%;
    transform: translate(50%,50%);
	border: 2px solid deepskyblue;
	height: 30px;
	width: 100px;
	position: absolute;
	bottom:50px;
    	
}
   
    
    .cont img{ height:300px; width:100%;}
</style>

<div class="cont"><img src="img/pic2.jpg"></div>

<div class="box">
<p class="text">Medical Appointment</p>

<form action="login.php">
<input type="submit" value="Login" class="login">
</form>



<form action="registration.php">
<input type="submit" value="Registration" class="registration">
</form>

</div>
</html>