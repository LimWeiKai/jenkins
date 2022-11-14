<!DOCTYPE html>
<html>
<body>
 
<?php
$uid = $_POST['userid'];
$pw = $_POST['password'];
 
if($uid == 'ben' and $pw == 'ben23')
{    
    session_start();
    $_SESSION['sid']=session_id();
    echo "Logged in successfully";
}
elseif ($pw=='password'){
	echo 'password cannot be password';
}
else{
	echo "smth is wrong";
}

?>



</body>
</html>