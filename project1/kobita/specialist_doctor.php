
<?php

$specialist=$_GET["specialist"];
$user_name=$_GET["user_name"];
header("location: specialist_doctor_list.php?user_name=$user_name&specialist=$specialist");

?>