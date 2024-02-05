<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negozio Online Animali</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-image: url('https://www.pixelstalk.net/wp-content/uploads/wallpapers/dog-and-cat-cocker-spaniel-puppy-small-ginger-kitten-kiss.jpg');
            background-size: cover;
        }

        header {
            height: 100px;

        }

        main {
            height: calc(100vh - 100px);

        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .ms-container {
            width: 100%;

            display: flex;
            padding: 0;
            flex-wrap: wrap;

        }

        .card {
            /* border: 1px solid #ddd; */
            background-color: #f1dad5;
            padding: 10px;
            margin: 10px;
            text-align: center;
            width: calc((100% * 1/6) - 20px);
            height: 450px;

        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>

    <header>
        <div class="container-fluid text-center p-4">
            <h1>Pet Shop</h1>
        </div>

    </header>



    <main>
        <div class="ms-container">

            <?php


            $categoriaCani = new Categoria('Cani', '<i class="fa-solid fa-dog"></i>');
            $categoriaGatti = new Categoria('Gatti', '<i class="fa-solid fa-cat"></i>');

            $Tipi = array(
                new tipo("Cibo secco"),
                new tipo("Cuccie"),
                new tipo("Giochi"),
                new tipo("Accessori"),
                new tipo("Cibo umido")
            );


            $products = array();


            $products[] = new Prodotto(1, 'Virtus Wild Taste Dog Lattina', $categoriaCani, 'Cibo umido', 1.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/266476/virtus-dog-adult-wild-taste-pollo-400g.jpg?v=637774240624270000');
            $products[] = new Prodotto(2, 'Virtus Cat Natural Busta', $categoriaGatti, 'Cibo umido', 2.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/294090/Virtus-Cat_pouch-naturali-70g_-nature-freedom-formula-Vista-corrente--1-.jpg?v=638417092541870000');
            $products[] = new Prodotto(3, 'Cuccia Pelosa Verde', $categoriaGatti, 'Cuccia', 27.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/277238/luna-e-teo-cuccia-pelosa-color-menta-60-cm.jpg?v=638043762913300000');
            $products[] = new Prodotto(4, 'Virtus Dog Adult Rustic', $categoriaCani, 'Cibo secco', 27.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/224338/virtus-rustic-cane-adult.jpg?v=637454741671700000');
            $products[] = new Prodotto(5, 'Bacchetta per Gatto con Uccellini', $categoriaGatti, 'Giochi', 2.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/273145/croci-gioco-gatto-uccellino.jpg?v=637921885766370000');
            $products[] = new Prodotto(6, 'Maglione Passion San Valentino Panna', $categoriaCani, 'Accessori', 25.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/266594/lovedi-maglione-passion-panna-indossato-cane-nero.jpg?v=637783510667530000');


            foreach ($products as $product) {
                $product->stampaProdotto();
            }

            ?>

        </div>
    </main>




</body>

</html>


<?php
class Categoria
{
    public $nome;
    public $logoAnimale;

    public function __construct($nome, $logoAnimale)
    {
        $this->nome = $nome;
        $this->logoAnimale = $logoAnimale;
    }
}

class tipo
{
    public $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

}


class Prodotto
{
    public $id;
    public $titolo;
    public $categoria;
    public $tipo;
    public $prezzo;
    public $immagine;

    public function __construct($id, $titolo, $categoria, $tipo, $prezzo, $immagine)
    {
        $this->id = $id;
        $this->titolo = $titolo;
        $this->categoria = $categoria;
        $this->tipo = $tipo;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
    }

    public function stampaProdotto()
    {
        echo '<div class="card">';
        echo '<img src="' . $this->immagine . '" alt="' . $this->titolo . '">';
        echo '<h4 class="text-danger mt-2">' . $this->titolo . '</h4>';
        echo '<p>Categoria: ' . $this->categoria->logoAnimale . '</p>';
        echo '<p>Tipo: ' . $this->tipo . '</p>';
        echo '<p>Prezzo: ' . $this->prezzo . ' EUR</p>';
        echo '</div>';
    }
}
?>