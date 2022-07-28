<?php

$con=new mysqli('localhost','root','','users');


  if(!$con){
    die(mysqli_error($con));
  }
  

?>