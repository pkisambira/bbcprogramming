<?php
$user=$_REQUEST['user'];

$connect= new mysqli("localhost","root","","bbc1");
$result=$connect->query("select * from student");

while($row=$result->fetch_assoc()){
    
}

















//2 select database
//3 send sql statement
//4 receive info

?>