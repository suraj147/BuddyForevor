<?php
$conn=mysql_connect("localhost","root",'');
if(!$conn)
{
die('could not connect:'.mysql_error());
}
echo"connection is successfully<br>";
$sql='create database test_db';
$retval=mysql_query($sql,$conn);
if($retval){
echo"database is create sucsses";
}
?>
