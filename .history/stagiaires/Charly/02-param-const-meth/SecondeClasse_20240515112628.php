<?php
require_once "SecondeClasse.php";

$instance1 =  new SecondeClasse();

var_dump($instance1);

?>

<h4>Affichage d'un paramètre par une méthode publique</h4>
<p>comme le paramètre est publique, on va pouvoir le modifier en dehors de la classe</p>
<?php
//comme le paramètre est public, on peut l'afficher sans passer par getter
echo $instance1 ->param2 = "aurevoir";
echo $instance1 ->param2;