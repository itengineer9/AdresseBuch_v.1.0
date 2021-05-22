  <?php require 'header.php'; 
  
   require 'dbconnection.php';
   
   $id =  $_GET["id"];
  
   $query = "SELECT * FROM contacts WHERE id = '$id'";
   $result = mysqli_query($conn, $query);
   $data = mysqli_fetch_assoc($result);
   
   ?>

 <h2> Ändern einen Datensatz </h2>
<div class="container">
   
    <form action="#" method="post">
        
        <div class="form-group">
            <label for="vorname">Vorname</label>
           <input id="vorname" type="text" class="form-control" 
                  name="vorname" value='<?php echo $data["vorname"]; ?>'>
        </div>
        
        <div class="form-group">
            <label for="nachname">Nachname</label>
           <input id="nachname" type="text" class="form-control" 
                  name="nachname" value='<?php echo $data["nachname"]; ?>'>
        </div>
        
        <div class="form-group">
            <label for="email">E-mail</label>
            <input id="email" type="email" class="form-control"
                   name="email" value='<?php echo $data["email"]; ?>' >
        </div>
        
        <div class="form-group">
            <label for="phone">Phone</label>
            <input id="phone" type="text" class="form-control" 
                   name="phone" value='<?php echo $data["phone"]; ?>'>
        </div><!-- comment -->
               
        <div class="form-group">
            <label for="strasse">Strasse</label>
            <input id="strasse" type="text" class="form-control" 
                   name="strasse" value='<?php echo $data["strasse"]; ?>'>
        </div>
               
        <div class="form-group">
            <label for="hausnummer">Hausnummer</label>
            <input id="hausnummer" type="text" class="form-control" 
                   name="hausnummer" value='<?php echo $data["hausnummer"]; ?>'>
        </div>
               
        <div class="form-group">
            <label for="ort">Ort</label>
            <input id="ort" type="text" class="form-control" 
                   name="ort" value='<?php echo $data["ort"]; ?>' >
        </div>
        
        <div class="form-group">
            <label for="plz">PLZ</label>
            <input id="plz" type="text" class="form-control" 
                   name="plz" value='<?php echo $data["plz"]; ?>'>
        </div>
        
        <div class="form-group">
            <button name='update' type="submit" class="btn btn-primary">Ändern </button>
            <button><a href="index.php">Home</a></button>

        </div>
    </form>
  </div>


<?php 
        
   if(isset($_POST['update'])){
        $id =  $_GET["id"];
        $vorname= trim($_POST["vorname"]);
        $nachname= trim($_POST["nachname"]);
        $email= trim($_POST["email"]);
        $phone= trim($_POST["phone"]);
        $strasse= trim($_POST["strasse"]);
        $hausnummer= trim($_POST["hausnummer"]);
        $ort= trim($_POST["ort"]);
        $plz= trim($_POST["plz"]);

       mysqli_query($conn,"update `contacts` set
               vorname = '$vorname',
               nachname = '$nachname',
               email = '$email',
               phone = '$phone',
               strasse = '$strasse',
               hausnummer = '$hausnummer',
               ort = '$ort',
               plz = '$plz'
               where id = '$id' ");

       $anzahl = mysqli_affected_rows($conn);      
        
      if ($anzahl > 0) {
          function msg(){
              return 'Der Datensatz wurde erfolgreich geändert';
;
          }
            echo '<div class="alert alert-success">
                 Der Datensatz wurde erfolgreich geändert  
                </div>';       
       } else{
          echo '<div class="alert alert-danger">
                    Keine Datensätze geändert wurden  
                </div>';
       }
   }
   mysqli_close($conn);
 
  require 'footer.php';
