<?php
 require 'vendor/tracy/tracy/src/tracy.php';
 use Tracy\Debugger;

  Debugger::enable();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP & HTML</title>
  </head>
  <body>
    <h1>Liste des élèves</h1>
    <!-- Instructions : Afficher la liste des éléves qui sont présent dans le tableau $students -->
    <?php
        //students
        $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];
        dump($students);
     ?>
     <ul>
       <?php //display the students here 
       foreach ($students as $key => $value){
        echo $value . "<br>";
      }
       ?>
     </ul>

     <hr>
     
     <h1>Date du jour</h1>
     <form action='/'>
       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
       <label for="day">Day</label>
       <select  name="day"><?php //list of day
       // Variable qui ajoutera l'attribut selected de la liste déroulante
       $selection = ' ';
       //boucle pour parcourir la liste
       for($i=1; $i<=31; $i++){
        echo '<option value="', $i, '"', $select, '>', $i, '</option>', "\n";
       }
       ?></select>
       
       <label for="month">Month</label>
       <select  name="month"><?php //list of month 
       $select = ' ';
       for($i=1; $i<=12; $i++){
         echo '<option value="', $i, '"', $select, '>', $i, '</option>', "\n";
       }
       ?></select>
       
       <label for="year">Year</label>
       <select  name="year"><?php //list of year 
          $selected = ' ';
          for($i=2018; $i>=1970; $i--){
            echo  '<option value="', $i , '"', $selected, '>', $i, '</option>', "\n";
          }
        ?></select>
     </form>


     <hr>
     <!-- Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "fille"
     Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "garçon"
      <p>Je suis un garçon</p> 
     Instruction : Afficher ce bloc dans les autres cas
          <p>Je suis indéfini</p> -->

     <?php
     if (isset($_GET["sexe"]) && $_GET["sexe"]=="fille"){
      echo 'Je suis une fille';
     }
     elseif (isset($_GET["sexe"]) && $_GET["sexe"]=="garcon"){
       echo 'Je suis un garçon';
     } else {
       echo 'Je suis indéfini !';
     }
    ?>


  </body>
</html>
