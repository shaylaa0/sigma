<?php
$myhost="localhost";
$myuser="root";
$password="";
$dbname="sigma";

$database = new mysqli($myhost, $myuser, $password, $dbname);

if($database -> connect_error){
    die($database -> error );
}
else{
   
}
 
?>