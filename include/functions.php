<?php
function db_con() {
mysql_connect("localhost", "root","password") or die ("Database Connection Failed");
mysql_select_db("users") or die ("dBcon died");	
}

?>
