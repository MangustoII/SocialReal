<?php

/*
   Connecting to the database
*/
$dbuser = 'root';
$dbpass = '123';
$host = 'localhost';
$db = 'socialreal';
mysql_connect($host, $dbuser, $dbpass) or die(mysql_error());
mysql_select_db($db) or die(mysql_error());

/*
  Executing SQL query
*/
$queryResult = mysql_query('SELECT name FROM noticias') or die(mysql_error());
$source = array();

/*
  Building the source string
*/
while ($row = mysql_fetch_array($queryResult)) {
  array_push($source, $row['assunto']);
}

/*
  Printing the source string
*/
echo json_encode($source);

?>
