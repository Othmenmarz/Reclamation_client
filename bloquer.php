<?php
   include 'connect.php';

     if(isset($_GET['deleteid'])){
         $id=$_GET['deleteid'];


         $sql="delete from `reclamation` where id=$id";
         $result=mysqli_query($con,$sql);


         if($result){
              //echo "Deleted successfuly";
              header('location:home.php');
         }else{
            die(mysqli_error($con));
         }

     }

?>
