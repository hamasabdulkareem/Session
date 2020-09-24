
<?php


session_start();
$SE_id=session_id();
$username="Ali";
$_SESSION['username']=$username;

echo "the session id is : ".$SE_id;
echo "<br> and the session has been registered for: ".$_SESSION['username'];


?>