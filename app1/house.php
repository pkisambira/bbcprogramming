<?php
$name=$_REQUEST['name'];
print("<h4>welcome to House details for $name </h4>");

$connect= new mysqli("localhost","root","root","bbc1");
$result=$connect->query("select * from house where name like '%$name%'");
print("<table border='1px'>");
print("<tr><th>house</th><th>loaction</th></tr>");
while($row=$result->fetch_assoc()){
    $h=$row['house'];
    $n=$row['location'];
    print("<tr>");
    print("<td>$h</td><td>$n</td>");
    print("</r>");
}
print("</table>");


?>