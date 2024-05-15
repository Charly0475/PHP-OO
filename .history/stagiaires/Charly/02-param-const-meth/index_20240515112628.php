<?php
class SecondeClasse{
    /*Paramètres  se  sont les variables de notre classe. Nous verrons la visibilité plus  loin. Nous les mettons en publbic par défaut  */
    public $param1;
    public $param2="coucou";
    public  int $param3 ; //on peut  typer les paramètres (devrait !)
    /*Constantes Les  constantes doivent être initialisées avec leur valeur. On doit utiliser le UPPER_CASE 
    La visibilité  est par défaut public, même si on peut dorénavant changer celle-ci depuis 7.1*/

    const CONST_1 ="blabla";
    protected  const  CONST_2  =  ['1','2','3'];//possibilité de rendre une constance avec une autre visibilité

    /*
    Méthodes 
    Ce sont des fonctions  inte

}