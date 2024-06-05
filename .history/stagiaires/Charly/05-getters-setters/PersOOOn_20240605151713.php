<?php

class PersOOOn {
    /*
     Propriétés -> équivalent variables
     */
    private string $especePerso;
    private string $nomPerso;
    protected ?int $xpPerso; // xp du personnage, peut être null ou int (?int)
    // équivalent depuis PHP 8.0 (Union type) : protected null|int $xpPerso;
    protected null|bool|int $hpPerso; // si plus de 2 types, utilisation des pipes

    /*
    Constantes -> équivalent constantes
    */
    // Les espèces qui seront acceptées dans le jeu
    public const ESPECE_PERSO = [
        "Hunan",
        "Elfe",
        "Nain",
        "Orc",
        "Hobbit",
        "Gobelin",
    ];

    /*
    Méthodes -> équivalent fonctions
    */

        /*
         Méthode Magique : constructeur

         C'est une méthode publique qui est appelée lors de l'instanciation d'une classe
         donc l'utilisation du mot clef new.
         Elle permet de passer des paramètres lors de la création de l'instance
         */

        public function __construct(string $name, string $species, ?int $xp = 0, null|bool|int $hp = 100)
        {
            // on peut remplir immédiatement les paramètres (mauvaise pratique)
            $this->nomPerso = $name;
            $this->especePerso = $species;
            $this->xpPerso = $xp;
            $this->hpPerso = $hp;
        }

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Getters et Setters</title>
        </head>
        <body>
            <h1>Getters et Setters</h1>
            <h2>Accessors ou Getters</h2>
            <p>Ce sont des méthodes publiques, qui permettent de récupérer des propriétées private ou protected (public également mais peu utilisé, 
                car peu sécurisé et inutile depuis PHP 8.1 grâce au readonly)</p>  
            <p>On les nommera comme les propriétés, en rajoutant get devant le nom mis en majuscule </p> 
            <pre><code>
            protected string $name; 
            protected ?int $hp; 
            <br>
            // Getters : <br>
            public function getName(): string
            {
                return $this->name;
            }
        
            public function getHp();
        
            $perso03A = new PersoClasse03("John",16,"Humain");
        
            // On peut  donc récupérer le nom avec 
            
            echo $perso03A->getName();
            </code></pre>   
            
            Johnny
            <pre class='xdebug-var-dump' dir='ltr'>
        <small>D:\PHP-OO\PHP-OO\stagiaires\Charly\05-get-set\index.php:49:</small>
        <b>object</b>(<i>PersoClasse03</i>)[<i>1</i>]
          <i>protected</i> <i>string</i> 'name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Johnny'</font> <i>(length=6)</i>
          <i>protected</i> <i>?int</i> 'hp' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>*uninitialized*</font>
          <i>protected</i> <i>int</i> 'age' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>16</font>
          <i>protected</i> <i>int</i> 'xp' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>0</font>
          <i>protected</i> <i>?int</i> 'level' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>*uninitialized*</font>
          <i>protected</i> <i>string</i> 'espece' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Humain'</font> <i>(length=6)</i>
          <i>private</i> <i>int|bool|null</i> 'alive' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>*uninitialized*</font>
        </pre>Samy20132200<pre class='xdebug-var-dump' dir='ltr'>
        <small>D:\PHP-OO\PHP-OO\stagiaires\Charly\05-get-set\index.php:66:</small>
        <b>object</b>(<i>PersoClasse03</i>)[<i>1</i>]
          <i>protected</i> <i>string</i> 'name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Samy'</font> <i>(length=4)</i>
          <i>protected</i> <i>?int</i> 'hp' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>20</font>
          <i>protected</i> <i>int</i> 'age' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>13</font>
          <i>protected</i> <i>int</i> 'xp' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>2</font>
          <i>protected</i> <i>?int</i> 'level' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>20</font>
          <i>protected</i> <i>string</i> 'espece' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Humain'</font> <i>(length=6)</i>
          <i>private</i> <i>int|bool|null</i> 'alive' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>0</font>
        </pre></body>
        </html>
}