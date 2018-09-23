<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_site = "localhost";
$database_site = "site";
$username_site = "jonas";
$password_site = "floresta";
$site = mysql_pconnect($hostname_site, $username_site, $password_site) or trigger_error(mysql_error(),E_USER_ERROR); 
?>