<?php
require_once __DIR__ . '/../src/products.php';
// Get a $twig object from this file.
require '../config/twig.php';


$name = 'Wilder';

echo $twig->render('home.html.twig', ['name' => $name]);
echo $twig->render('products.html.twig', ['products' => $products]);

