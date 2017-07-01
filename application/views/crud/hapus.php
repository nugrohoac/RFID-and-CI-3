<?php
include('connect.php');


  $id = $_GET['id'];

  $data = mysqli_query($con, "DELETE FROM hewan WHERE id = $id");

  if($data){
  header('location: index.php');
 }else{
  echo "Upss Something wrong..";
 }

?>