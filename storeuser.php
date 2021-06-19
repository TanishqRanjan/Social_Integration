<?php

//section_start();
include_once 'Connection.php';

$username=$_POST['username'];
$userid=$_POST['userid'];
$useremail=$_POST['email'];
$userimage=$_POST['imageurl'];

$query="insert into userdata(userdata,userid,emailid,imageurl) values('$username','$userid','$useremail','$userimage')";


mysqli_query($conn,$query);
echo"saved";
?>