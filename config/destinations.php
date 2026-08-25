<?php

// Données des destinations. Chaque destination attend 4 photos dans
// public/images/destinations/{slug}/1.jpg à 4.jpg (voir README.md).

return [
    'isalo' => [
        'slug' => 'isalo',
        'nom' => 'Isalo',
        'region' => 'Ihorombe, Sud',
        'theme' => 'terre', // terre = vert, mer = bleu
        'tagline' => 'Canyons sculptés et pistes sauvages',
        'description' => "Le Parc National de l'Isalo est un massif de grès ruiniforme façonné par des millions d'années d'érosion. Entre canyons, piscines naturelles et savanes à satrana, c'est l'un des terrains de randonnée les plus spectaculaires de Madagascar.",
        'points_forts' => [
            'Randonnée dans la Piscine Naturelle et la Piscine Noire',
            "Coucher de soleil à la Fenêtre de l'Isalo",
            'Faune endémique : lémuriens catta et sifakas',
            "Camping sous les étoiles dans le massif",
        ],
    ],
    'majunga' => [
        'slug' => 'majunga',
        'nom' => 'Majunga',
        'region' => 'Boeny, Nord-Ouest',
        'theme' => 'mer',
        'tagline' => 'Le charme balnéaire du Nord-Ouest',
        'description' => "Mahajanga, ville portuaire au bord du Canal du Mozambique, séduit par son front de mer bordé de baobabs, son marché animé et son ambiance métissée entre influences arabes, indiennes et malgaches.",
        'points_forts' => [
            'Promenade sur le Bord de Mer et ses baobabs centenaires',
            'Grottes sacrées d\'Anjohibe',
            'Marché Mahabibo et artisanat local',
            'Baie de Boeny et pêche traditionnelle',
        ],
    ],
    'nosybe' => [
        'slug' => 'nosybe',
        'nom' => 'Nosy Be',
        'region' => 'Diana, Nord',
        'theme' => 'mer',
        'tagline' => "L'île aux parfums",
        'description' => "Surnommée l'île aux parfums pour ses plantations d'ylang-ylang, Nosy Be est la destination balnéaire par excellence : plages de sable blanc, eaux turquoise et îlots paradisiaques à explorer en bateau.",
        'points_forts' => [
            'Plage d\'Andilana et lagons turquoise',
            'Plongée et snorkeling à Nosy Tanikely',
            'Réserve de Lokobe et lémuriens noirs',
            'Excursion aux îlots de Nosy Komba et Nosy Iranja',
        ],
    ],
    'ranomafana' => [
        'slug' => 'ranomafana',
        'nom' => 'Ranomafana',
        'region' => 'Haute Matsiatra, Sud-Est',
        'theme' => 'terre',
        'tagline' => 'Forêt tropicale et biodiversité rare',
        'description' => "Classé au patrimoine mondial de l'UNESCO, le Parc National de Ranomafana abrite une forêt tropicale humide luxuriante, refuge d'une biodiversité exceptionnelle dont le rare lémurien aux bambous.",
        'points_forts' => [
            'Observation du lémurien aux bambous doré',
            'Sources thermales naturelles',
            'Randonnées guidées de nuit et de jour',
            'Cascades et rivières encaissées',
        ],
    ],
    'sainte-marie' => [
        'slug' => 'sainte-marie',
        'nom' => 'Sainte Marie',
        'region' => 'Analanjirofo, Est',
        'theme' => 'mer',
        'tagline' => 'Île aux baleines et légendes de pirates',
        'description' => "Nosy Boraha, dite Île Sainte Marie, est bordée de récifs coralliens et de criques secrètes. Chaque année entre juillet et septembre, les baleines à bosse viennent s'y reproduire, offrant un spectacle inoubliable.",
        'points_forts' => [
            'Observation des baleines à bosse (juillet à septembre)',
            'Cimetière des pirates et histoire maritime',
            'Île aux Nattes et ses plages sauvages',
            'Plongée sur les récifs coralliens',
        ],
    ],
    'tritriva' => [
        'slug' => 'tritriva',
        'nom' => 'Tritriva',
        'region' => 'Vakinankaratra, Hautes Terres',
        'theme' => 'terre',
        'tagline' => 'Le lac sacré des légendes',
        'description' => "Niché dans un cratère volcanique près d'Antsirabe, le Lac Tritriva aux eaux vert sombre est entouré de légendes d'amour tragique. Ses falaises abruptes et son silence en font un lieu chargé de mystère.",
        'points_forts' => [
            'Point de vue sur le lac de cratère',
            'Légende des amants Rabeniomby et Ravolahanta',
            'Randonnée dans les collines volcaniques',
            'Visite des ateliers de pierres précieuses d\'Antsirabe',
        ],
    ],
];
