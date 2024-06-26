<?php

$fruits = ["fraise", "banane", "pomme", "cerise", "ananas"];

$prices = [3, 2, 2, 5, 8];

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <title>Introduction PHP - Exo 3</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Introduction PHP - Exo 3</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link">Entrainement</a></li>
                    <li><a href="exo2.php" class="main-nav-link">Donnez moi des fruits</a></li>
                    <li><a href="exo3.php" class="main-nav-link active">Donnez moi de la thune</a></li>
                    <li><a href="exo4.php" class="main-nav-link">Donnez moi des fonctions</a></li>
                    <li><a href="exo5.php" class="main-nav-link">Netflix</a></li>
                    <li><a href="exo6.php" class="main-nav-link">Mini-site</a></li>
                </ul>
            </nav>
        </header>
        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">Ordonner le tableau des prix par ordre croissant et l'afficher en détail</p>
            <div class="exercice-sandbox">
                <ul>
                    <?php
                    sort($prices);
                    foreach ($prices as $price) echo "<li>{$price}</li>"
                    ?>
                </ul>
            </div>
        </section>

        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">Ajouter 1 euro à chaque prix</p>
            <div class="exercice-sandbox">
                <ul>
                    <?php
                    foreach ($prices as $i => $price) {
                        $prices[$i]++;
                        echo "<li>{$prices[$i]}</li>";
                    }
                    ?>
                </ul>
            </div>
        </section>

        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">Créer le tableau $store qui combine les tableaux des fruits et des prix afin d'obtenir un tableau associatif d'attribution des prix. Afficher le tableau obtenu</p>
            <div class="exercice-sandbox">
                <?php
                $store = array_combine($fruits, $prices);
                var_dump($store)
                ?>
            </div>
        </section>

        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">Afficher dans une liste HTML le nom des fruits ayant un prix inférieur à 4 euros</p>
            <div class="exercice-sandbox">
                <ul>
                    <?php
                    foreach ($store as $fruit => $price) {
                        if ($price <= 4) echo "<li>{$fruit}</li>";
                    }
                    ?>
                </ul>
            </div>
        </section>

        <!-- QUESTION 5 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">Afficher dans une liste HTML le nom des fruits ayant un prix pair</p>
            <div class="exercice-sandbox">
                <ul>
                    <?php
                    foreach ($store as $fruit => $price) {
                        if ($price % 2 === 0) echo "<li>{$fruit}</li>";
                    }
                    ?>
                </ul>
            </div>
        </section>

        <!-- QUESTION 6 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">Composer un panier de fruits ne dépassant pas 12 euros, en sélectionnant chaque fruit dans l'ordre actuel.</p>
            <div class="exercice-sandbox">
                <ul>
                    <?php
                    foreach ($store as $fruit => $price) {
                        if (!isset($totalPrice) && $price <= 12) {
                            $totalPrice = $price;
                            echo "<li>{$fruit}</li>";
                        } else if ($totalPrice + $price <= 12) {
                            $totalPrice += $price;
                            echo "<li>{$fruit}</li>";
                        }
                    }
                    ?>
                </ul>

            </div>
        </section>

        <!-- QUESTION 7 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 7</h2>
            <p class="exercice-txt">En reprenant le prix total du panier constitué à la question précédente, appliquez-lui une taxe de 18%. Afficher le total taxe comprise.</p>
            <div class="exercice-sandbox">
                <?php
                $totalPriceWithTaxes = $totalPrice * 1.18;
                echo "<p>{$totalPriceWithTaxes}</p>";
                ?>
            </div>
        </section>

        <!-- QUESTION 8 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 8</h2>
            <p class="exercice-txt">Ajouter au tableau $store le fruit "kiwi" pour un prix de 1,50 € puis afficher le tableau complet</p>
            <div class="exercice-sandbox">
                <?php
               $store['kiwi'] = 1.5;
                var_dump($store);
                ?>
            </div>
        </section>

        <!-- QUESTION 9 -->
        <?php
        $newFruits = [
            "pêche" => 3,
            "abricot" => 2,
            "mangue" => 9
        ];
        ?>
        <section class="exercice">
            <h2 class="exercice-ttl">Question 9</h2>
            <p class="exercice-txt">Ajouter les nouveaux fruits du tableau $newFruits au tableau $store</p>
            <div class="exercice-sandbox">
                <?php
                    // $store = $store + $newFruits;
                    // var_dump($store);

                    //or
                    $store = array_merge($store, $newFruits);
                    var_dump($store);
                ?>
            </div>
        </section>

        <!-- QUESTION 10 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 10</h2>
            <p class="exercice-txt">Afficher le nom et le prix du fruit le moins cher</p>
            <div class="exercice-sandbox">
                    <p>
                        <?php
                            foreach($store as $fruit => $price){
                                if(!isset($lowestPrice) || $price < $lowestPrice){
                                    $lowestPrice = $price;
                                    $lowestName = $fruit;
                                }
                            }
                            echo "Le $lowestName est le moins chère, il coûte {$lowestPrice}€."
                            ?>
                    </p>
                </div>
            </section>
            
            <!-- QUESTION 11 -->
            <section class="exercice">
                <h2 class="exercice-ttl">Question 11</h2>
                <p class="exercice-txt">Afficher les noms et le prix des fruits les plus chers</p>
                <div class="exercice-sandbox">
                    <p>Les fruits les plus chères sont :</p>
                    <ul>
                        <?php 
                        foreach($store as $fruit => $price){
                            if(!isset($expensivePrice) || $price > $expensivePrice[0]){
                                $expensivePrice = [$price];
                                $expensiveName = [$fruit];
                            }else if ($price === $expensivePrice[0]){
                                $expensivePrice[] = $price;
                                $expensiveName[] = $fruit;
                            }
                        }
                        for($i = 0; $i < count($expensivePrice); $i++)
                        {
                            echo "<li>{$expensiveName[$i]} avec un coût de {$expensivePrice[$i]}€</li>";
                        }
                    ?>
                </ul>
            </div>
        </section>
    </div>
    <div class="copyright">© Guillaume Belleuvre, 2023 - DWWM</div>
</body>

</html>