<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimalCommerce</title>

    <?php require_once(__DIR__ . "/db.php"); ?>
    <style>
        h1 {
            padding: 10px;
        }

        .container {
            display: flex;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            width: 300px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        img {
            width: 100%;
            height: 300px;
        }

        .logo {
            width: 40px;
            height: 40px;
        }
    </style>
</head>

<body>

    <h1>Animal Commerce</h1>

    <div class="container">

        <?php foreach ($prods as $prod) { ?>

            <?php
            try {
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
                    "100x45x40"
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
            } catch (Exception $e) {

                echo 'Si è verificato un errore durante la creazione dei prodotti: ' . $e->getMessage();
            }
            ?>



            <div class="card">
                <img src="<?php echo $prod->getImage() ?>" alt="<?php echo $prod->getTitle() ?>">
                <h3><strong>Type:</strong>
                    <?php echo $prod->getTypology() ?>
                </h3>
                <p><strong>Title:</strong>
                    <?php echo $prod->getTitle() ?>
                </p>
                <p><strong>Price:</strong>
                    <?php echo $prod->getPrice() ?> Euro
                </p>
                <p><strong>Category:</strong> <img class="logo" src="<?php echo $prod->getCategory()->getIcon() ?>" alt="">
                </p>

            </div>
        <?php } ?>
    </div>
</body>

</html>