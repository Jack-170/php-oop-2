<?php

// REQUIRE
require_once(__DIR__ . "/models/category.php");
require_once(__DIR__ . "/models/product.php");
require_once(__DIR__ . "/models/food.php");
require_once(__DIR__ . "/models/animalHouse.php");

// CATEGORIES
$cat_dog = new Category(1, "Cane", "https://cdn4.iconfinder.com/data/icons/eldorado-medicine/40/dog-512.png");
$cat_cat = new Category(2, "Cat", "https://cdn3.iconfinder.com/data/icons/animal-and-tool/283/animal_and_tool-02-512.png");

// PRODUCTS
$prod_croccantini = new Food(
    1,
    "Croccantini",
    "https://shop-cdn-m.mediazs.com/bilder/9/400/26635_pla_meradog_puppyknochen_10kg_9.jpg",
    35,
    $cat_cat,
    "10/05/2024"
);
$prod_cuccia = new AnimalHouse(
    2,
    "Cuccia per cani",
    "https://www.original-legno.com/wp-content/uploads/2022/02/Cucce_in_legno_italy_con_veranda_per_cani_Barboncino.webp",
    100,
    $cat_dog,
    "100x45x40"
);

$prod_cibo_umido = new Food(
    3,
    "Virtus Cat Natural Multipack",
    "https://arcaplanet.vtexassets.com/arquivos/ids/286498/VIRTUS-CAT_multipack_house_2--1-.jpg?v=638210293531670000",
    7.99,
    $cat_cat,
    "10/07/2024"

);

$prod_cuccia_verde = new AnimalHouse(
    4,
    "Cuccia gatti verde",
    "https://arcaplanet.vtexassets.com/arquivos/ids/277238/luna-e-teo-cuccia-pelosa-color-menta-60-cm.jpg?v=638043762913300000",
    27.99,
    $cat_cat,
    "100x45x40",

);
$prod_cibo_umido_cane = new Food(
    5,
    "Virtus Protein Selection Dog",
    "https://arcaplanet.vtexassets.com/arquivos/ids/266207/virtus-dog-protein-selection-anatra-400g.jpg?v=637755900210570000",
    4.99,
    $cat_dog,
    "12/12/2024"
);

$prods = [$prod_croccantini, $prod_cuccia, $prod_cibo_umido, $prod_cuccia_verde, $prod_cibo_umido_cane];



