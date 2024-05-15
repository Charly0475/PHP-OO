<?php
// chargement d'un fichier contenant une classe
require_once  "premiereClasse.php";

//on peut instancier cette classe, en utilisant le mot clef new, elle se trouve dans  une variable qui pointe vers l'objet créé
$instance1 = new PremiereClasse();// bonne pratique, ()
$instance2 = new PremiereClasse;
//  !  $instance1 et  $instance3  ne sont que des pointeurs vers l'objet créé avec le mot clef new, c'est donc le même objet !
$instance3 = $instance1;
// Il faudra cloner l'objet pour en avoir une copie exacte

//on visualise que  $instance3 est identique à 
var_dump($instance1,$instance2,$instance3);
