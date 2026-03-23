<!-- Footer -->
<?php include "../header.php"?>

<?php
   
   if(isset($_GET['etudiant_id']))
    {
      $etudiantid = $_GET['etudiant_id']; 
    }
      
      $query="SELECT * FROM etudiants WHERE Id_Etudiant = $etudiantid ";
      $view_etudiant= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_etudiant))
        {
          $id = $row['Id_Etudiant'];
          $nom = $row['Nom'];
          $prenom = $row['Prenom'];
          $date = $row['DateNaissance'];
          $filiere = $row['Classe'];
        }
 
    
    if(isset($_POST['update'])) 
    {
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $date = $_POST['date'];
      $filiere = $_POST['filiere'];
      
       
      $query = "UPDATE etudiants SET Nom = '{$nom}' , Prenom = '{$prenom}' , DateNaissance = '{$date}' , Classe = '{$filiere}' WHERE Id_Etudiant = $etudiantid";
      $update_etudiant = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('Etudiant modifié avec succès!')</script>";
    }             
?>

<h1 class="text-center">Modifier les informations de l'utilisateur</h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" name="nom"  class="form-control" value="<?php echo $nom  ?>">
      </div>

      <div class="form-group">
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom"  class="form-control" value="<?php echo $prenom  ?>">
      </div>
    
      <div class="form-group">
        <label for="date">Date de naissance</label>
        <input type="date" name="date"  class="form-control" value="<?php echo $date  ?>">
      </div>  

      <div class="form-group">
        <label for="filiere">Filière</label>
        <input type="text" name="filiere"  class="form-control" value="<?php echo $filiere  ?>">
      </div>   

      <div class="form-group">
        <input type="submit"  name="update" class="btn btn-primary mt-2" value="Modifier">
      </div>
    </form> 
  </div>

    
    <div class="container text-center mt-5">
      <a href="home.php" class="btn btn-warning mt-5"> Retour </a>
    <div>

<!-- Footer -->
<?php include "../footer.php" ?>