<?php
    require_once __DIR__ . "/models/products.php";
    require_once __DIR__ . "/models/category.php";
    require_once __DIR__ . "/models/typeProducts.php";
    require_once __DIR__ . "/models/icon.php";

    $category1 = new Category("gatto");
    $category1->setIcon("fa-solid fa-cat");
    $category2 = new Category("cane");
    $category2->setIcon("fa-solid fa-dog");
    
    try {
        $type1 = new TypeProducts("Cuccia per cani", "./img/cucciacani.jpg", 60, "cuccia", $category2);
    } catch (Exception $e) {
        echo "Errore: " . $e->getMessage() . "<br";
    }
    
    try {
        $type2 = new TypeProducts("Croccantini per gatti", "./img/cibogatti.jpg", 15, "cibo", $category1);
    } catch (Exception $e) {
        echo "Errore: " . $e->getMessage() . "<br>";
    }
    
    try {
    $type3 = new TypeProducts("Giocattolo per cani", "./img/giocattolocani.jpg", 5, "giochi", $category2);

    } catch (Exception $e) {
        echo "Errore: " . $e->getMessage() . "<br>";
    }
    
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-secondary-subtle">
    <div class="bg-success p-5 mt-4 container d-flex justify-content-between">

        <div class="card" style="width: 18rem;">
            <img src="<?php echo $type1->getImage(); ?>" class="card-img-top" alt="cuscino_cani">
            <div class="card-body">
                <p class="card-text"><?php echo $type1->getName(); ?></p>
                <p class="card-text">Prezzo: <?php echo $type1->getPrice(); ?> €</p>
                <p class="card-text">Tipologia: <?php echo $type1->getType(); ?></p>
                <span class="card-text">Categoria: <?php echo $type1->getCategory()->getCategoryName()?></span>
                <span><?php echo $category2->getIcon() ?></span>
            </div>
        </div>
    
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $type2->getImage(); ?>" class="card-img-top" alt="cuscino_cani">
            <div class="card-body">
                <p class="card-text"><?php echo $type2->getName(); ?></p>
                <p class="card-text">Prezzo: <?php echo $type2->getPrice(); ?> €</p>
                <p class="card-text">Tipologia: <?php echo $type2->getType(); ?></p>
                <span class="card-text">Categoria: <?php echo $type2->getCategory()->getCategoryName()?></span>
                <span><i class="fa-solid fa-cat"></i></span>
            </div>
        </div>
    
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $type3->getImage(); ?>" class="card-img-top" alt="cuscino_cani">
            <div class="card-body">
                <p class="card-text"><?php echo $type3->getName(); ?></p>
                <p class="card-text">Prezzo: <?php echo $type3->getPrice(); ?> €</p>
                <p class="card-text">Tipologia: <?php echo $type3->getType(); ?></p>
                <span class="card-text">Categoria: <?php echo $type3->getCategory()->getCategoryName()?></span>
                <span><i class="fa-solid fa-dog"></i></span>
            </div>
        </div>
    </div>
</body>

</html>