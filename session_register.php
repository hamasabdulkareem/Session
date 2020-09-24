<?php

session_start();
session_register("sess_var");
$sess_var = "value456";
print "sess_var: " . $sess_var;
session_unregister("sess_var");

?>
<?php

session_start();
$_SESSION["sess_var"] = "value123";
print "sess_var: " . $_SESSION["sess_var"];
unset($_SESSION["sess_var"]);

?>