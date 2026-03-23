<!-- Header -->
<?php  include '../header.php'?>

<h1 class="text-center">Détails de l'étudiants</h1>
  <div class="container">
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th  scope="col" >ID</th>
          <th  scope="col">Nom</th>
          <th  scope="col">Prenom</th>
          <th  scope="col">Née le</th>
          <th  scope="col">Filière</th>
        </tr>  
      </thead>
        <tbody>
          <tr>
               
            <?php
              
              if (isset($_GET['etudiant_id'])) {
                  $etudiantid = $_GET['etudiant_id']; 

                   
                  $query="SELECT * FROM etudiants WHERE Id_Etudiant = {$etudiantid} ";  
                  $view_etudiant= mysqli_query($conn,$query);            

                  while($row = mysqli_fetch_assoc($view_etudiant))
                  {
                      $id = $row['Id_Etudiant'];
                      $nom = $row['Nom'];
                      $prenom = $row['Prenom'];
                      $date = $row['DateNaissance'];
                      $filiere = $row['Classe'];

                        echo "<tr >";
                        echo " <td >{$id}</td>";
                        echo " <td > {$nom}</td>";
                        echo " <td > {$prenom}</td>";
                        echo " <td >{$date} </td>"; 
                        echo " <td >{$filiere} </td>"; 
                        echo " </tr> ";
                  }
                }
            ?>
          </tr>  
        </tbody>
    </table>
  </div>

  
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Retour </a>
  <div>

<!-- Footer -->
<?php include "../footer.php" ?>