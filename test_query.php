<?php
include 'config.php';
include 'sub2/getid.php';

var_dump($id);
$query = "Select * from test where id=".$id;
$result = mysqli_query($con, $query) or die(mysqli_error($con));

if(mysqli_num_rows($result)>0){
    $name = mysqli_fetch_array($result);
    var_dump($name);
}

