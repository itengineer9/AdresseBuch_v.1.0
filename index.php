 
<?php require 'header.php';?>

<h1>AdresseBuch PHP Aufgabe</h1>

<div class="container1">

    <div class="operation">
       <button><a href="einfuegen.php">Neu Kontakt</a></button>
    </div>
    
    <form class="form" action="#" method="POST">
        <div class="operation">
            <h4>Sorting nach:</h4>
            <select name="sort" id="sort">
                <option value="vorname">vorname</option>
                <option value="nachname">nachname</option>
                <option value="email">email</option>
                <option value="strasse">strasse</option>
                <option value="ort">ort</option>
            </select>
            <button onclick="getOrderBy()" name="sort1">Sort</button>
        </div>
    </form>
    
    </div>

<!-- <?php $message = isset($_GET['message'])?$_GET['message']:'Adresse Buch'; ?>
    <div id="sucess" class="alert alert-success">
        <?php echo $message ; ?>
    </div>
    <div id="dangr" class="alert alert-danger"> -->
 
 <?php  
    function getOrderBy(){
        $selected = 'vorname';
        if(isset($_POST['sort1'])){
            $selected = $_POST['sort'];
          }
       return "SELECT * FROM contacts ORDER BY " .$selected;
       }       
  ?>
</div>


<!-- Disply Kontakte in einer Tabelle -->
<form class="form" action="#" method="post">

<table class="tbl" border="1">
    
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Staße</th>
        <th>Hausnummer</th>
        <th>Ort</th>
        <th>PLZ</th>
        <th>Ändern</th>
        <th>Löschen</th>
    </tr>


    <?php
       require 'dbconnection.php';
       
        $sql = getOrderBy();
       
        $result = mysqli_query($conn, $sql);

        while ( $data = mysqli_fetch_assoc($result)){  
             $idw = $data['id'];
    ?>
     <tr>   
         <td><?php echo $data["vorname"].' '. $data["nachname"];?></td>
         <td><?php echo $data["email"];?></td>
         <td><?php echo $data["phone"];?></td>
         <td><?php echo $data["strasse"];?></td>
         <td><?php echo $data["hausnummer"];?></td>
         <td><?php echo $data["ort"];?></td>
         <td><?php echo $data["plz"];?></td>

         <td><a href="aendern.php?id=<?php echo $data['id'];?>" 
                data-placement = "bottom" title="Ändern" data-toggle="tooltip">
                 <i class="fa fa-edit" aria-hidden="true"></i></a></td>                              

         <td><a href="loeschen.php?id=<?php echo $data['id'];?>" 
                data-placement = "bottom" title="Löschen" data-toggle="tooltip">
                 <i class="fa fa-trash trash" ></i></a></td>
       </tr>
        
           
       <?php     
            }
            mysqli_close($conn);
        ?>
       
     </table>
</form>
  

        
 <?php
 
 require 'footer.php';
        
