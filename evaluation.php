<?php



$taillesDesBilles =  [1,54,25,10,80,76,20,6,8,4,5,60,8,94];


// EXOS 1a : UNE FONCTION POUR TRIER LES nombres par ordre croissant


// aide : utiliser sort() 

// EXOS 1b :

    // ajouter 3 billes de tailles aléatoire en utilisant : $nombrealeatoire = rand(1,100);

// EXOS 1c :

    // afficher toutes les valeurs à l'aide de for ( mettre un html pour améliorer l'affichage )


// EXOS 2 : TRIER LES BILLES DANS LES BONS BOCAUX


$bocal = [
  [
    "min"=>  1 ,
    "max"=>  20 ,
    "billes"=> []
  ],
  [
    "min"=>  21 ,
    "max"=>   40,
    "billes"=> []
  ],
  [
    "min"=>   41,
    "max"=>   60,
    "billes"=> []
  ],
  [
    "min"=>   61,
    "max"=>   80,
    "billes"=> []
  ],
  [
    "min"=>   81,
    "max"=>   100,
    "billes"=> []
  ]
];



// EXOS 3 :INSERER LES BILLES DANS LA BASE





// -------------- Rappel ----------------------------
// insert into #nomdelatable (#colonne1, #colonne2)
// values (#valeur1, #valeur2)
// --------------------------------------------------





// EXOS 4 : REFAIRE L'EXERCICE A PARTIR DE CET ARRAY CETTE FOIS INSERER LES OBJETS BILLE : "[ "nom"=> "rouge", "tailledelabille"=> 5 ]"

$Billes =  [
  [
    "nom"=> "rouge",
    "tailledelabille"=> 5
  ],
  [
    "nom"=> "bleu",
    "tailledelabille" => 10
  ],
  [
    "nom"=> "vert",
    "tailledelabille" => 40
  ],
  [
    "nom"=> "orange",
    "tailledelabille" => 30
  ]
];




// EXOS 5 : LES METTRE DANS LA BASE UNE PAR UNE A PARTIR DE : $bocal


// CREATE TABLE `php_dc`.`categories` ( `id` INT NOT NULL AUTO_INCREMENT , `min` INT NOT NULL , `max` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
// CREATE TABLE `php_dc`.`billes` ( `id` INT NOT NULL AUTO_INCREMENT , `category_id` INT NOT NULL , `nomdelabille` INT NOT NULL , `tailledelabille` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


// AIDE : insérer d'abord les catégories puis les billes.


// EXOS 6 : CREER UN FORMULAIRE POUR AJOUTER DES BILLES DANS LA BASE 
 
 //utiliser ajouterbille.html

