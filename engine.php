<?php

$db=new Mysqli("localhost","root","","custom_mvc");

$sql="show tables";

$stmt=$db->prepare($sql);

$stmt->execute();

$result=$stmt->get_result();

while ($row=$result->fetch_assoc()) {
   print_r($row);
}  