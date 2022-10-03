<?php
$conn=new mysqli("localhost","root","samyakjain10");
$sql="create database testuio ";
if($conn->query($sql)=="TRUE")
echo "database successful";
else
echo "database failed";
$conn1=new mysqli("localhost","root","samyakjain10","testuio");
$sql1="CREATE TABLE west(name varchar(50),number int)";
if($conn1->query($sql1))
echo "successful";
else
echo "failed";
$conn1->close();
?>