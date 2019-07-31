<?php
require '../vendor/autoload.php';


$products = ['fraise', 'orange', 'product3', 'product4', 'product5'];


//rendu du template
$loader = new Twig_Loader_Filesystem('../view/');
$twig = new Twig_Environment($loader,['cache' => false ]);


echo $twig->render('index.html.twig', ['products' => $products]);


//return $twig->render('index.html.twig', $products);



