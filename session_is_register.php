<?php

session_start();
session_is_register("sess_var");
$sess_var = "value456";
print "sess_var: " . $sess_var;
session_unregister("sess_var");

?>