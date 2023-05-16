<?php
// Kontrollo nëse ka një cookie për monedhën e zgjedhur
if (isset($_COOKIE['currency'])) {
    $currency = $_COOKIE['currency'];
} else {
    $currency = '$'; // Vlera parazgjedhur nëse cookie nuk është gjetur
}

// Kontrollo nëse ka një cookie për gjuhën e zgjedhur
if (isset($_COOKIE['language'])) {
    $language = $_COOKIE['language'];
} else {
    $language = 'English'; // Vlera parazgjedhur nëse cookie nuk është gjetur
}

// Përdorni $currency dhe $language siç dëshironi në kodin PHP të faqes tuaj


?>
