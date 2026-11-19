<?php

$projets = [
    [
        "id" => 1,
        "titre" => "Assistant scolaire intelligent",
        "description" => "Une application qui aide les élèves à comprendre leurs cours.",
        "featured" => true,
        'categorie_libelle' => 'Développement',
        'date_creation' => '2026-02-14',
        "color"=>"bleu"

    ],

    [
        "id" => 2,
        "titre" => "Mon Portfolio",
        "description" => "Un site web pour présenter mes compétences et mes projets.",
        "featured" => false,
        'categorie_libelle' => 'Design UI/UX',
        'date_creation' => '2026-11-12',
        "color"=>"vert"

    ],

    [
        "id" => 3,
        "titre" => "Site de vente",
        "description" => "Une plateforme pour acheter et vendre des produits.",
        "featured" => true,
        'categorie_libelle' => 'Design UI/UX',
        'date_creation' => '2026-03-21',
         "color"=>"vert"

    ]
];
require "index-template.php";
?>
