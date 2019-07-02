<?php
$user=$_REQUEST['user'];

$connect= new mysqli("localhost","root","root","bbc1");
$result=$connect->query("select * from student where name like '%$user%'");
print("<table border='1px'>");
print("<tr><th>name</th><th>Gender</th></tr>");
while($row=$result->fetch_assoc()){
    $g=$row['gender'];
    $n=$row['name'];
    print("<tr>");
    print("<td>$n</td><td>$g</td>");
    print("<td> <a href='house.php?name=$n'>details</a></td>");
    print("</r>");
}
print("</table>");

















//2 select database
//3 send sql statement
//4 receive info

?>