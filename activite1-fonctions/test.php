<?php
declare(strict_types=1);

require_once __DIR__ . '/fonctions.php';


echo " ETAPE 1 " . PHP_EOL;

echo "12 + 8 = " . additionner(12, 8) . PHP_EOL;
echo "12 - 8 = " . soustraire(12, 8) . PHP_EOL;
echo "12 * 8 = " . multiplier(12, 8) . PHP_EOL;
echo "12 / 8 = " . diviser(12, 8) . PHP_EOL;

try {
    echo diviser(10, 0);
} catch (InvalidArgumentException $e) {
    echo "Erreur : " . $e->getMessage() . PHP_EOL;
}



echo PHP_EOL . " ETAPE 2 " . PHP_EOL;

echo "8 est pair ? " .
    (estPair(8) ? "oui" : "non") . PHP_EOL;

echo "7 est positif ? " .
    (estPositif(7) ? "oui" : "non") . PHP_EOL;

echo "Maximum sans max : " .
    maximum(10, 25, 15) . PHP_EOL;

echo "Maximum avec max : " .
    maximumAvecMax(10, 25, 15) . PHP_EOL;

echo "7 est premier ? " .
    (estPremier(7) ? "oui" : "non") . PHP_EOL;

echo "9 est premier ? " .
    (estPremier(9) ? "oui" : "non") . PHP_EOL;



echo PHP_EOL . "ETAPE 3" . PHP_EOL;

echo "TTC : " . calculerTTC(100) . " MAD" . PHP_EOL;

echo "Prix après remise : " .
    calculerRemise(100, 10) . " MAD" . PHP_EOL;

$facture = calculerFacture(100, 10, 10, 20);

echo "Facture : " .
    number_format($facture, 2, ",", " ") . " MAD" . PHP_EOL;



echo PHP_EOL . "ETAPE 4" . PHP_EOL;

echo "Moyenne : " . moyenne(12, 15, 18) . PHP_EOL;

echo "Moyenne sans notes : " . moyenne() . PHP_EOL;

echo "Aire du cercle : " . aireCercle(5) . PHP_EOL;

echo "Périmètre du cercle : " .
    perimetreCercle(5) . PHP_EOL;

echo "25 Celsius = " .
    celsiusVersFahrenheit(25) . " Fahrenheit" . PHP_EOL;

echo "77 Fahrenheit = " .
    fahrenheitVersCelsius(77) . " Celsius" . PHP_EOL;

echo "100 MAD = " .
    convertirDevise(100, 0.092) . " EUR" . PHP_EOL;




echo PHP_EOL . " ETAPE 5 " . PHP_EOL;

echo "5! = " . factorielle(5) . PHP_EOL;

echo "Fibonacci(8) : " .
    implode(", ", fibonacci(8)) . PHP_EOL;

echo "PGCD(48, 18) = " . pgcd(48, 18) . PHP_EOL;

echo "Puissance boucle : " .
    puissance(2, 3) . PHP_EOL;

echo "Puissance récursive : " .
    puissanceRecursive(2, 3) . PHP_EOL;
