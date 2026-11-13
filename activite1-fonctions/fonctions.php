<?php
declare(strict_types=1);

// Addition
function additionner(float $a, float $b): float
{
    return $a + $b;
}

// Soustraction
function soustraire(float $a, float $b): float
{
    return $a - $b;
}

// Multiplication
function multiplier(float $a, float $b): float
{
    return $a * $b;
}

// Division
function diviser(float $a, float $b): float
{
    if ($b == 0) {
        throw new InvalidArgumentException(
            "Division par zéro impossible"
        );
    }

    return $a / $b;
}

// Vérifier si un nombre est pair
function estPair(int $n): bool
{
    return $n % 2 === 0;
}

// Vérifier si un nombre est positif
function estPositif(float $n): bool
{
    return $n > 0;
}

// Maximum sans utiliser max()
function maximum(float $a, float $b, float $c): float
{
    $max = $a;

    if ($b > $max) {
        $max = $b;
    }

    if ($c > $max) {
        $max = $c;
    }

    return $max;
}

// Maximum avec max()
function maximumAvecMax(float $a, float $b, float $c): float
{
    return max($a, $b, $c);
}

// Vérifier si un nombre est premier
function estPremier(int $n): bool
{
    if ($n < 2) {
        return false;
    }

    for ($i = 2; $i <= floor(sqrt($n)); $i++) {
        if ($n % $i === 0) {
            return false;
        }
    }

    return true;
}

// Calculer TTC
function calculerTTC(float $ht, float $tva = 20.0): float
{
    return $ht * (1 + $tva / 100);
}

// Calculer une remise
function calculerRemise(float $prix, float $pourcentage): float
{
    return round($prix - ($prix * $pourcentage / 100), 2);
}

// Calculer une facture
function calculerFacture(
    float $prixUnitaire,
    int $quantite,
    float $remise = 0,
    float $tva = 20.0
): float {
    $total = $prixUnitaire * $quantite;

    $totalRemise = calculerRemise($total, $remise);

    return calculerTTC($totalRemise, $tva);
}


// Calculer la moyenne
function moyenne(float ...$notes): float
{
    if (count($notes) === 0) {
        return 0;
    }

    return array_sum($notes) / count($notes);
}

// Aire du cercle
function aireCercle(float $rayon): float
{
    return round(M_PI * $rayon * $rayon, 2);
}

// Périmètre du cercle
function perimetreCercle(float $rayon): float
{
    return round(2 * M_PI * $rayon, 2);
}

// Celsius vers Fahrenheit
function celsiusVersFahrenheit(float $c): float
{
    return $c * 9 / 5 + 32;
}

// Fahrenheit vers Celsius
function fahrenheitVersCelsius(float $f): float
{
    return ($f - 32) * 5 / 9;
}

// Conversion de devise
function convertirDevise(float $montant, float $taux): float
{
    return $montant * $taux;
}

// Factorielle
function factorielle(int $n): int
{
    if ($n < 0) {
        throw new InvalidArgumentException(
            "Le nombre doit être positif"
        );
    }

    $resultat = 1;

    for ($i = 1; $i <= $n; $i++) {
        $resultat *= $i;
    }

    return $resultat;
}

// Fibonacci
function fibonacci(int $n): array
{
    if ($n <= 0) {
        return [];
    }

    $suite = [0];

    if ($n === 1) {
        return $suite;
    }

    $suite[] = 1;

    for ($i = 2; $i < $n; $i++) {
        $suite[] = $suite[$i - 1] + $suite[$i - 2];
    }

    return $suite;
}

// PGCD avec algorithme d'Euclide
function pgcd(int $a, int $b): int
{
    $a = abs($a);
    $b = abs($b);

    while ($b !== 0) {
        $reste = $a % $b;
        $a = $b;
        $b = $reste;
    }

    return $a;
}

// Puissance avec boucle
function puissance(float $x, int $n): float
{
    $resultat = 1;

    for ($i = 0; $i < abs($n); $i++) {
        $resultat *= $x;
    }

    if ($n < 0) {
        if ($x == 0) {
            throw new InvalidArgumentException(
                "Puissance impossible"
            );
        }

        return 1 / $resultat;
    }

    return $resultat;
}

// Puissance récursive
function puissanceRecursive(float $x, int $n): float
{
    if ($n < 0) {
        if ($x == 0) {
            throw new InvalidArgumentException(
                "Puissance impossible"
            );
        }

        return 1 / puissanceRecursive($x, -$n);
    }

    if ($n === 0) {
        return 1;
    }

    return $x * puissanceRecursive($x, $n - 1);
}
