<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <title>Introduction PHP - Exo 1</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Introduction PHP - Exo 1</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link active">Entrainement</a></li>
                    <li><a href="exo2.php" class="main-nav-link">Donnez moi des fruits</a></li>
                    <li><a href="exo3.php" class="main-nav-link">Donnez moi de la thune</a></li>
                    <li><a href="exo4.php" class="main-nav-link">Donnez moi des fonctions</a></li>
                    <li><a href="exo5.php" class="main-nav-link">Netflix</a></li>
                    <li><a href="exo6.php" class="main-nav-link">Mini-site</a></li>
                </ul>
            </nav>
        </header>

        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">Ecrivez la phrase suivante dans une balise HTML P en utilisant les 2 variables ci-dessous :</p>
            <p class="exercice-txt">"<i>Firstname</i> a obtenu <i>score</i> points à cette partie."</p>
            <div class="exercice-sandbox">
                <?php
                $firstname = "Michel";
                $score = 327;
                echo "{$firstname} a obtenu {$score} points à cette partie.";
                ?>
            </div>
        </section>


        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">Afficher dans une liste HTML le nom des produits suivants et leurs prix.</p>
            <div class="exercice-sandbox">
                <?php
                $nameProduct1 = "arc";
                $priceProduct1 = 10.30;
                $nameProduct2 = "flèche";
                $priceProduct2 = 2.90;
                $nameProduct3 = "potion";
                $priceProduct3 = 5.20;
                ?>
                <ul>
                    <li>
                        <?= $nameProduct1 . ' ' . $priceProduct1 ?>
                    </li>
                    <li>
                        <?= $nameProduct2 . ' ' . $priceProduct2 ?>
                    </li>
                    <li>
                        <?= $nameProduct3 . ' ' . $priceProduct3 ?>
                    </li>
                </ul>
            </div>
        </section>

        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">Calculer le montant total de la commande des produits ci-dessus avec les quantités ci-dessous et appliquez lui une remise de 10%.</p>
            <div class="exercice-sandbox">
                <?php
                $quantityProduct1 = 1;
                $quantityProduct2 = 10;
                $quantityProduct3 = 4;
                $totalComande = ($priceProduct1 * $quantityProduct1 + $priceProduct2 * $quantityProduct2 + $priceProduct3 * $quantityProduct3) * 0.9;
                echo '<p>' . number_format($totalComande, 2) . '</p>';
                ?>


            </div>
        </section>


        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">Affichez le prix le plus élevé des 3 produits ci-dessus.</p>
            <div class="exercice-sandbox">
                <?php
                switch ($priceProduct1 <=> $priceProduct2) {
                    case -1:
                        $maxPrice = $priceProduct2;
                        break;
                    case 0:
                        $maxPrice = $priceProduct2;
                        break;
                    case 1:
                        $maxPrice = $priceProduct1;
                        break;
                }
                if ($priceProduct3 > $maxPrice) {
                    $maxPrice = $priceProduct3;
                }
                // echo $maxPrice;
                // or
                echo 'le prix le plus élevé est de ' . number_format(max($priceProduct1, $priceProduct2, $priceProduct3), 2)  . '€';
                ?>
            </div>
        </section>

        <!-- QUESTION 5 -->
        <?php

        $text1 = "Le marchand m'a vendu un arc et des flèches.";

        ?>
        <section class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">Affichez dans une liste HTML le nom des produits de la question 2 qui sont présents dans la phrase : "<?= $text1 ?>"</p>
            <div class="exercice-sandbox">
                <ul>
                    <?php
                    if (str_contains($text1, $nameProduct1)) {
                        echo "<li>$nameProduct1</li>";
                    }
                    if (str_contains($text1, $nameProduct2)) {
                        echo "<li>$nameProduct2</li>";
                    }
                    if (str_contains($text1, $nameProduct3)) {
                        echo "<li>$nameProduct3</li>";
                    }
                    ?>

                </ul>
            </div>
        </section>

        <!-- QUESTION 6 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">Parmis les scores suivants, affichez le prénom des joueurs qui ont obtenus entre 50 et 150 points.</p>
            <div class="exercice-sandbox">
                <?php
                $namePlayer1 = "Tim";
                $scorePlayer1 = 67;
                $namePlayer2 = "Morgan";
                $scorePlayer2 = 198;
                $namePlayer3 = "Hamed";
                $scorePlayer3 = 21;
                $namePlayer4 = "Camille";
                $scorePlayer4 = 134;
                $namePlayer5 = "Kevin";
                $scorePlayer5 = 103;
                $maxScore = 150;
                $minScore = 50;
                if ($scorePlayer1 >= $minScore && $scorePlayer1 <= $maxScore) {
                    echo "<li>$namePlayer1</li>";
                }
                if ($scorePlayer2 >= $minScore && $scorePlayer2 <= $maxScore) {
                    echo "<li>$namePlayer2</li>";
                }
                if ($scorePlayer3 >= $minScore && $scorePlayer3 <= $maxScore) {
                    echo "<li>$namePlayer3</li>";
                }
                if ($scorePlayer4 >= $minScore && $scorePlayer4 <= $maxScore) {
                    echo "<li>$namePlayer4</li>";
                }
                if ($scorePlayer5 >= $minScore && $scorePlayer5 <= $maxScore) {
                    echo "<li>$namePlayer5</li>";
                }
                ?>
            </div>
        </section>


        <!-- QUESTION 7 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 7</h2>
            <p class="exercice-txt">En réutilisant les scores de la question précédente, afficher le nom du joueur ayant obtenu le plus grand score.</p>
            <div class="exercice-sandbox">
                <?php
                if ($scorePlayer1 > $scorePlayer2) {
                    $higthestScore = $scorePlayer1;
                    $higthestScoreName = $namePlayer1;
                } else {
                    $higthestScore = $scorePlayer2;
                    $higthestScoreName = $namePlayer2;
                }
                if ($scorePlayer3 > $higthestScore) {
                    $higthestScore = $scorePlayer3;
                    $higthestScoreName = $namePlayer3;
                }
                if ($scorePlayer4 > $higthestScore) {
                    $higthestScore = $scorePlayer4;
                    $higthestScoreName = $namePlayer4;
                }
                if ($scorePlayer5 > $higthestScore) {
                    $higthestScore = $scorePlayer5;
                    $higthestScoreName = $namePlayer5;
                }
                echo $higthestScoreName
                ?>
            </div>
        </section>


        <!-- QUESTION 8 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 8</h2>
            <p class="exercice-txt">Affichez le prénom du joueur le plus long en nombre de caractères.</p>
            <div class="exercice-sandbox">
                <?php
                if (strlen($namePlayer1) > strlen($namePlayer2)) $maxLenName = $namePlayer1;
                else  $maxLenName = $namePlayer2;
                if (strlen($namePlayer3) > strlen($maxLenName)) $maxLenName = $namePlayer3;
                if (strlen($namePlayer4) > strlen($maxLenName)) $maxLenName = $namePlayer4;
                if (strlen($namePlayer5) > strlen($maxLenName)) $maxLenName = $namePlayer5;
                echo $maxLenName;
                ?>
            </div>
        </section>

        <!-- QUESTION 9 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 9</h2>
            <p class="exercice-txt">Créer une variable $players ayant pour valeur un tableau multidimensionnel contenant toutes les données des joueurs avec leurs scores ci-dessus et leurs ages ci-dessous.</p>
            <ul class="exercice-txt">
                <li>Tim : 25 ans</li>
                <li>Morgan : 34 ans</li>
                <li>Hamed : 27 ans</li>
                <li>Camille : 47 ans</li>
                <li>Kevin : 31 ans</li>
            </ul>
            <p class="exercice-txt">Afficher la valeur de cette variable avec tous les détails.</p>
            <div class="exercice-sandbox">
                <?php
                $players = [
                    ["name" => $namePlayer1, "age" => "25", "score" => $scorePlayer1],
                    ["name" => $namePlayer2, "age" => "34", "score" => $scorePlayer2],
                    ["name" => $namePlayer3, "age" => "27", "score" => $scorePlayer3],
                    ["name" => $namePlayer4, "age" => "47", "score" => $scorePlayer4],
                    ["name" => $namePlayer5, "age" => "31", "score" => $scorePlayer5]
                ];
                var_dump($players);


                ?>
                <table>
                    <caption>Tableau des scores et âge des différents participants</caption>
                    <thead>
                        <tr>
                            <th scope="col">name</th>
                            <th scope="col">age</th>
                            <th scope="col">score</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($players as $player) {
                            echo '<tr>';
                            $j = 0;
                            foreach ($player as $data) {
                                if($j===0){
                                    echo '<th scope="row">' . $data . '</th>';
                                }
                                else{
                                    echo '<td>'. $data . '</td>';
                                }
                                $j++;
                            }
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- QUESTION 10 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 10</h2>
            <p class="exercice-txt">Afficher le prénom et l'âge du joueur le plus jeune dans une phrase dans une balise HTML P.</p>
            <div class="exercice-sandbox">
                <?php
                foreach ($players as $i => $player) {
                    if (!isset($ageMin) || $player['age'] < $ageMin) {
                        $ageMin = $player['age'];
                        $index = $i;
                    }
                }
                ?>
                <p><?= $players[$index]["name"] ?> est lae plus jeune car iel a <?= $ageMin ?> ans</p>
            </div>
        </section>
    </div>
    <div class="copyright">© Guillaume Belleuvre, 2023 - DWWM</div>
</body>

</html>