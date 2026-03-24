<?php  
     include "../header.php";
     
     if(isset($_GET['delete']))
     {
         $etudiantid= $_GET['delete'];

         // SQL query to delete data from user table where id = $userid
         $query = "DELETE FROM etudiants WHERE Id_Etudiant = {$etudiantid}"; 
         $delete_query= mysqli_query($conn, $query);
         
         if($delete_query)
         {
             header("Location: home.php");
             exit();
         }
     }
?>

  <!-- Footer -->
<?php include "footer.php" ?>