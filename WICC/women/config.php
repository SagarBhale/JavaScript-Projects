<?php
$con =mysql_connect("localhost","root","");

if(!$con)
{
echo"database not connected";
}
else
{
$con_string=mysql_select_db("mp11_db",$con);
		}
		
		?>