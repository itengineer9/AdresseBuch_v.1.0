   <?php require 'header.php'; ?>

    <h2>Einfügen Datensatz </h2>

    <div class="container">
    <form action="#" method="post">
        
        <div class="form-group">
            <label for="vorname">Vorname *</label>
           <input id="vorname" type="text" class="form-control" name="vorname" required autocomplete="vorname" autofocus >
        </div>
        
        <div class="form-group">
            <label for="nachname">Nachname *</label>
           <input id="nachname" type="text" class="form-control" name="nachname" required autocomplete="nachname" autofocus >
        </div>
        
        <div class="form-group">
            <label for="email">E-mail *</label>
            <input id="email" type="email" class="form-control" name="email"  required autocomplete="email" >
        </div>
        
        <div class="form-group">
            <label for="phone">Phone</label>
            <input id="phone" type="text" class="form-control" name="phone"  required autocomplete="phone" >
        </div><!-- comment -->
               
        <div class="form-group">
            <label for="strasse">Strasse *</label>
            <input id="strasse" type="text" class="form-control" name="strasse"  required autocomplete="strasse" >
        </div>
               
        <div class="form-group">
            <label for="hausnummer">Hausnummer *</label>
            <input id="hausnummer" type="text" class="form-control" name="hausnummer"  required autocomplete="hausnummer" >
        </div>
               
        <div class="form-group">
            <label for="ort">Ort *</label>
            <input id="ort" type="text" class="form-control" name="ort"  required autocomplete="ort" >
        </div>
        
        <div class="form-group">
            <label for="plz">PLZ *</label>
            <input id="plz" type="text" class="form-control" name="plz"  required autocomplete="plz" >
        </div>
        
        <div class="form-group">
        <button name="sender">Einfügen</button>
            <button><a href="index.php">Home</a></button>

        </div>
    </form>
  </div>

    <?php

      if (isset($_POST["sender"])) {

            $vorname= trim($_POST["vorname"]);
            $nachname= trim($_POST["nachname"]);
            $email= trim($_POST["email"]);
            $phone= trim($_POST["phone"]);
            $strasse= trim($_POST["strasse"]);
            $hausnummer= trim($_POST["hausnummer"]);
            $ort= trim($_POST["ort"]);
            $plz= trim($_POST["plz"]);
                     
    try {
        $conn = mysqli_connect("localhost", "root", "", "adressebuch");
        $anweisung = "INSERT INTO `contacts` (`vorname`, `nachname`, `email`, `phone`, `strasse`, `hausnummer`, `ort`, `plz`) VALUES "
            . "( ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $statment =mysqli_prepare($conn,$anweisung);

        $result = mysqli_stmt_bind_param($statment, 'sssssssi', $vorname, 
                $nachname,$email, $phone, $strasse, $hausnummer, $ort, $plz);

        if (mysqli_stmt_execute($statment)) {
          echo '<div class="alert alert-success">
                    Der Datensatz wurde erfolgreich eingefügt  
                </div>';
        }else{
          echo '<div class="alert alert-danger">
                    Keine Datensätze eingefügt wurden  
                </div>';
        }
        mysqli_close($conn);
            
            
        } catch (Exception $exc) {
              echo $exc->getTraceAsString();
        }

        //header("Location: index.php");            
      }

 require 'footer.php';

