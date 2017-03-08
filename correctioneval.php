<?php
$taillesDesBilles =  [1,54,25,10,80,76,20,6,8,4,5,60,8,94];
// EXOS 1a : UNE FONCTION POUR TRIER LES nombres par ordre croissant

sort($taillesDesBilles);


// aide : utiliser sort()
// EXOS 1b :
for ($i=0; $i < 3 ; $i++) {
  $nombrealeatoire = rand(1,100);
  array_push($taillesDesBilles, $nombrealeatoire);
}
sort($taillesDesBilles);
var_dump($taillesDesBilles);
    // ajouter 3 billes de tailles aléatoire en utilisant : $nombrealeatoire = rand(1,100);
// EXOS 1c :
    // afficher toutes les valeurs à l'aide de for ( mettre un html pour améliorer l'affichage )
foreach ($taillesDesBilles as $taillebille) {
  echo $taillebille."<br>";
}



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
for ($i=0; $i <count($bocal) ; $i++) {
  for ($y=0; $y <count($taillesDesBilles) ; $y++) {
    if($taillesDesBilles[$y] > $bocal[$i]['min']&& $taillesDesBilles[$y]<$bocal[$i]['max']){
      array_push($bocal[$i]['billes'],$taillesDesBilles[$y]);
    }
  }
}
var_dump($bocal);

// EXOS 3 :INSERER LES BILLES DANS LA BASE
  $bdd = new PDO('mysql:hostname=localhost;dbname=php_dc','root','password');

  foreach ($taillesDesBilles as $value) {
    $result = $bdd->prepare("INSERT INTO taillebilles (tailleddelabille)
                             VALUES (".$value.")");
    $return = $result->execute();
  }

// CREATE TABLE `php_dc`.`taillebilles` ( `id` INT NOT NULL AUTO_INCREMENT , `tailledelabille` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


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
