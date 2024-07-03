<?php
require_once __DIR__ . '/Classes/Product.php';
require_once __DIR__ . '/Classes/Category.php';
require_once __DIR__ . '/Classes/Food.php';
require_once __DIR__ . '/Classes/Toys.php';
require_once __DIR__ . '/Classes/Accessories.php';

$royalCanin = new Food(
    'Royal Canin Mini Adult',
    '$ 43,99',
    new Category('Cane'),
    'https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg',
    'Prosciutto e Riso',
    '2 Kg'
);

$almoNature = new Food(
    'Almo Nature Holistic Maintenance Medium Large',
    '$ 44,99',
    new Category('Cane'),
    'https://arcaplanet.vtexassets.com/arquivos/ids/300514/Almo-Nature-Holistic-Maintenance-Medium-Large-Tonno-e-Riso-10118806.jpg',
    'Tonno e Riso',
    '3 Kg'
);

$catCan = new Food(
    'Almo Nature Cat Daily Lattina',
    '$ 9,99',
    new Category('Gatto'),
    'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg',
    'Vitello',
    '200 g'
);

$fishFood = new Food(
    'Mangime per Pesci Guppy in Fiocchi',
    '$ 2,99',
    new Category('Pesci'),
    'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg',
    'Pesci e sottoprodotti di pesci, Cereali, Lieviti, Alghe',
    '30 g'
);

$cage = new Accessories(
    'Voliera Wilma in Legno',
    '$ 159,99',
    new Category('Uccelli'),
    'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg',
    'Legno',
    'L 83 x P 67 x H 153 cm'
);

$filter = new Accessories(
    'Cartucce Filtranti per Filtro EasyCrystal',
    '$ 2,99',
    new Category('Pesci'),
    'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg',
    'Espanso',
    'ND'
);

$kong = new Toys(
    'Kong Classic',
    '$ 2,99',
    new Category('Cane'),
    'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg',
    'Galleggia e Rimbalza',
    '8.5 cm x 10 cm'
);

$mouse = new Toys(
    'Topino di Peluche Trixie',
    '$ 4,99',
    new Category('Gatto'),
    'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg',
    'Morbido con codina in corda',
    '8.5 cm x 10 cm'
);

/* var_dump($royalCanin, $almoNature, $catCan ,$fishFood, $cage, $filter, $kong, $mouse); */

$products = [$royalCanin, $almoNature, $catCan, $fishFood, $cage, $filter, $kong, $mouse];

/* var_dump($product); */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.scss">
</head>

<body>
    <header>
        <h1>
            Negoziazione Animalesca
        </h1>
    </header>

    <main>
        <section>
            <h2>Prodotti:</h2>
            <div>
                <?php foreach ($products as $product) { ?>
                    <article>
                        <img src="<?php echo $product->getimgURL() ?>" alt="">
                        <h3> <?php echo $product->getName() ?></h3>
                        <p> Categoria: <?php echo $product->getCategory()->getCategory() ?> </p>
                        <p> Prezzo: <?php echo $product->getPrice() ?> </p>
                        <p>
                            <?php if (is_a($product, 'Food')) {
                                echo 'Peso: ' . $product->getWeight();
                            } else if (is_a($product, 'Accessories')) {
                                echo 'Materiale: ' . $product->getmaterial();
                            } else {
                                echo 'Caratteristiche: ' . $product->getspecific();
                            }
                            ?>
                        </p>
                        <p>
                            <?php if (is_a($product, 'Food')) {
                                echo 'Ingredienti: ' . $product->getIngredients();
                            } else if (is_a($product, 'Accessories')) {
                                echo 'Dimensioni: ' . $product->getdimensions();
                            } else {
                                echo 'Dimensioni: ' . $product->getdimensions();
                            }
                            ?>
                        </p>
                    </article>
                <?php } ?>
                <article></article>
            </div>
        </section>
    </main>
</body>

</html>