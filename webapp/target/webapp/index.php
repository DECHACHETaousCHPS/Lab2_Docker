<?php
$dbh = new PDO('mysql:host=db;dbname=mysql', 'root', 'passe');
foreach($dbh->query('SHOW DATABASES') as $row) {
	echo $row[0]. '<br/>';

	function connexion()
		{
   			global $host, $MYSQL_USER, $MYSQL_DATABASE, $MYSQL_PASSWORD;
    			$db = mysql_connect($host, $MYSQL_USER, $MYSQL_PASSWORD);
   			 mysql_select_db($MYSQL_USER,$db);
	}

connexion();
 
$sql= "CREATE TABLE IF NOT EXISTS `mabase` (";
$sql .= "`id` int(11) NOT NULL auto_increment,";
$sql .= "`nom` text NOT NULL,";
$sql .= "`prenom` text NOT NULL,";
$sql .= "`age` int NOT NULL,";
$sql .= "PRIMARY KEY  (`id`),";
$sql .= "UNIQUE KEY `id_2` (`id`),";
$sql .= "KEY `id` (`id`)";
$sql .= ") ENGINE=MyISAM;";
 
mysql_query($sql) or die(mysql_error());

}
