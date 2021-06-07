<?php
$movies = [
    "Indiana Jones et la Dernière Croisade" => 1989,
    "Indiana Jones et le Royaume du crâne de cristal" => 2008,
    "Les Aventuriers de l'arche perdue" => 1981
  ];

  asort($movies);
    
  foreach ($movies as $key => $movie){
    
    echo " $movie";
    echo " $key";
}
?>