<?php
function dbconnect()
{
    static $dbh = null;
	static $user='heriot';
    static $pass='nbvcfghj1';
    static $dsn='mysql:host=mysql-heriot.alwaysdata.net;dbname=heriot_climat;charset=utf8';
    if ($dbh === null) {
		try{
			$dbh = new PDO($dsn, $user, $pass);
		} catch (PDOException $e) {
        	print "Erreur ! : " . $e->getMessage();
        	die();
        }
    }
    return $dbh;
}

?>