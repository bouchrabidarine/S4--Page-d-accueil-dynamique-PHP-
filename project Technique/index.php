<?php

$projets = [
    [
        "id" => 1,
        "titre" => "Assistant scolaire intelligent",
        "description" => "Une application qui aide les élèves à comprendre leurs cours.",
        "image" => "images/projet1.png",
        "featured" => true,
        'categorie_libelle' => 'Développement',
        'contenu' => 'Une interface belle n\'est pas suffisante...',
        'date_creation' => '2026-02-14',
        "color"=>"bleu"

    ],

    [
        "id" => 2,
        "titre" => "Mon Portfolio",
        "description" => "Un site web pour présenter mes compétences et mes projets.",
        "image" => "images/projet2.png",
        "featured" => false,
        'categorie_libelle' => 'Design UI/UX',
        'contenu' => 'Découvrez les concepts fondamentaux de la méthode Atomic Design...',
        'date_creation' => '2026-11-12',
        "color"=>"green"

    ],

    [
        "id" => 3,
        "titre" => "Site de vente",
        "description" => "Une plateforme pour acheter et vendre des produits.",
        "image" => "images/projet3.png",
        "featured" => true,
        'categorie_libelle' => 'Design UI/UX',
        'contenu' => 'Une interface belle n\'est pas suffisante...',
        'date_creation' => '2026-03-21',
         "color"=>"rose"

    ]
];
require "index-template.php";
?>
