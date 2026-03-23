<!-- Header -->
<?php  include "../header.php" ?>

<?php 
  if(isset($_POST['create'])) 
    {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $date = $_POST['date'];
        $filiere = $_POST['filiere'];
      
        
        $query= "INSERT INTO etudiants(Nom, Prenom, DateNaissance, Classe) VALUES('{$nom}','{$prenom}','{$date}','{$filiere}')";
        $add_etudiant = mysqli_query($conn,$query);
    
         
          if (!$add_etudiant) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('Etudiant ajouté avec succès!')</script>";
              }         
    }
?>

<h1 class="text-center">Détails sur l'étudiants </h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" name="nom"  class="form-control">
      </div>

      <div class="form-group">
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" name="prenom"  class="form-control">
      </div>
    
      <div class="form-group">
        <label for="date" class="form-label">Date de naissance</label>
        <input type="date" name="date"  class="form-control">
      </div>  

      <div class="form-group">
        <label for="filiere" class="form-label">Filière</label>
        <input type="text" name="filiere"  class="form-control">
      </div>   

      <div class="form-group">
        <input type="submit"  name="create" class="btn btn-primary mt-2" value="Créer">
      </div>
    </form> 
  </div>

  
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Retour </a>
  <div>

<!-- Footer -->
<?php include "../footer.php" ?>