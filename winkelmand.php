<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Winkelmand integer</title>
</head>
<body>

<?php
$prijs = 1.25;
echo 'Prijs: ' . $prijs;
?>

<h2>Winkelmand</h2>
<form action="" method="post">
    <label for="product">Product:</label><br>
    <input type="text" name="product" required placeholder="product"><br>
    <label for="aantal">Aantal:</label><br>
    <input type=number name="aantal" required placeholder="aantal">><br><br>
    <input type="submit" name="submit" value="toevoegen" >
</form>
<p>Vul je geen action in dan wordt het formulier verwerkt door de huidige pagina".</p>

<?php

// Controleer of het formulier is verstuurd
if ($_POST['submit']) {

    $product = $_POST['product'];
    $aantal = $_POST['aantal'];
    $prijs = 1.25;


    // Controleer of het aantal > 0 is.
    if ($aantal > 0 && strlen($product) < 15) { 

        // Maak de berekening van de totaal prijs.
        $totaal = $aantal * $prijs;
        

        // Maak de teksten zoals gevraagd wordt.
        echo "Product: " . $product . "<br>";
        echo "Aantal in winkelmand: " . $aantal . "<br>";
        echo "Totaal prijs: " . $totaal . "<br>";

    } elseif (strlen($product) > 15) {
        echo "max karakters is 15";
    } elseif ($aantal < 0) {
        echo "kan niet minder dan 0";
    }

    /*
     * Werkt je formulier pas dan het formulier aan zodat je geen
     * negatieve aantallen kunt invullen.
     * Pas ook het formulier aan zodat je maximaal 15 kunt invoeren
     * bij het aantal.
     */


}
?>


</body>
</html>