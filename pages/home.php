<!-- Header -->
<?php include "../header.php"?>

  <div class="container">
    <h1 class="text-center" >LISTE DES ETUDIANTS</h1>
      <a href="create.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> Créer un nouvel étudiant</a>

        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">ID</th>
              <th  scope="col">Nom</th>
              <th  scope="col">Prenom</th>
              <th  scope="col">Née le</th>
              <th  scope="col">Filière</th>
              <th  scope="col" colspan="3" class="text-center">Operations de CRUD</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
          <?php
            $query="SELECT * FROM etudiants";               // SQL query to fetch all table data
            $view_users= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users)){
              $id = $row['Id_Etudiant'];                
              $nom = $row['Nom'];        
              $prenom = $row['Prenom'];         
              $date = $row['DateNaissance'];
              $filiere = $row['Classe'];        


              echo "<tr >";
              echo " <th scope='row' >{$id}</th>";
              echo " <td > {$nom}</td>";
              echo " <td > {$prenom}</td>";
              echo " <td >{$date} </td>";
              echo " <td >{$filiere} </td>";

              echo " <td class='text-center'> <a href='view.php?etudiant_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> Voir</a> </td>";

              echo " <td class='text-center' > <a href='update.php?edit&etudiant_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> MODIFIER</a> </td>";

              echo " <td  class='text-center'>  <a href='delete.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> SUPPRIMER</a> </td>";
              echo " </tr> ";
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>


<div class="container text-center mt-5">
      <a href="../index.php" class="btn btn-warning mt-5"> Retour </a>
    <div>

<!-- Footer -->
<?php include "../footer.php" ?>