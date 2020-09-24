<?php
session_start();
$_SESSION['city']="Sydney";
echo session_encode();
session_abort();
session_start();
echo "<br>".session_encode()."<br>";

$_SESSION['country']="Australia";
echo session_encode();
session_abort();
session_start();
echo "<br>".session_encode();
?>