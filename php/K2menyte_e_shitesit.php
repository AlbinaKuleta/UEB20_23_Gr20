<?php
// Array me menyra të disponueshme në menyte e shitesit
$menuItems = array(
    array(
        'label' => 'Lista e produkteve',
        'url' => 'shop-product-list.php',
    ),
    array(
        'label' => 'Reviews',
        'url' => 'shop-item.php',
    ),
    array(
        'label' => 'Checkout',
        'url' => 'shop-checkout.php',
    ),
    array(
        'label' => 'FAQ',
        'url' => 'shop-faqs.php',
    ),
);

// Funksioni për të paraqitur një meny shitesi
function printMenu($items)
{
    echo '<ul>';
    foreach ($items as $item) {
        echo '<li><a href="' . $item['url'] . '">' . $item['label'] . '</a></li>';
    }
    echo '</ul>';
}

// Përdorimi i funksionit për të paraqitur meny-shitesin
printMenu($menuItems);
?>