<?php
require_once  "PersOOn.php";
// création d'une instance (objet) de la classe PersOOn
$perso1 = new PersOOn("Golum", "Hobbit");
$perso2 = new PersOOn("Gogole","Humanïde", null,80);
$perso3 = new PersOOn(255,555);
$perso4 = new PersOOn(hp,50, Elfe);

var_dump($perso1, $perso2, $perso3, $perso4);
