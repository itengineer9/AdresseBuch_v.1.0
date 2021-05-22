<?php require 'header.php'; 
  include 'dbconnection.php';

  $id =  $_GET["id"];
   
   $query = "DELETE FROM contacts WHERE id =$id";
   
    if (mysqli_query($conn, $query)) {
    echo '<div class="alert alert-success">
                    Der Datensatz wurde erfolgreich gelöscht  
                </div>';
    // header("Location: index.php");
   } else {
        echo '<div class="alert alert-danger">
                    Keine Datensätze gelöscht wurden  
                </div>';
   }
   
   mysqli_close($conn);

  require 'footer.php';
