<?php
include 'connect.php';
if(isset($_POST['submit'])){

    $num_ligne=$_POST['num_ligne'];
    $titre=$_POST['titre'];
    $description=$_POST['description'];

$sql="insert into `reclamation`(num_ligne,titre,description)
 values('$num_ligne','$num_ligne','$description')";
     $result=mysqli_query($con,$sql);
     if($result){

         header('location:user2.php');
     }else{
        die(mysqli_error($con));
     }

} 
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rependre reclamation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  </head>
  <body>

  <div class="container my-5">
  <form method="post">
        <div class="form-group">
    <label   >Num_ligne</label>
    <input type="number" class="form-control"  name="num_ligne">
    </div>
    
    <div class="form-group">
    <label   >Titre</label>
    <input type="text" class="form-control"  name="titre">

</div> 

<div class="form-group">
<p><label for="w3review">Description</label></p>
  <textarea name="description" rows="4" cols="50"></textarea>
</div>



   
  
  <button type="submit" class="btn btn-primary"  name="submit">Submit</button>
</form>


</div>
  </body>
</html>