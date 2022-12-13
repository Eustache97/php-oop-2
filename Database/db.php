<?php
require_once __DIR__ . "/../Models/Categories.php";
require_once __DIR__ . "/../Models/ProductsTypes.php";

$cane = new Category("cane");
$gatto = new Category("gatto");

$crocchette = new Food("https://www.naturepetshop.it/wp-content/uploads/oasy-crocchette-adult-mediumlarge-coniglio-per-cani.jpg", "crocchette", 2.5, $cane, "Carne", 250, "23/04/2023");
$osso = new Toy("https://m.media-amazon.com/images/I/61rRP0sjhRL.jpg", "Osso per gengive", 4.5, $cane, "Gomma");
$gomitolo = new Toy("https://img.pixers.pics/pho_wat(s3:700/FO/54/98/12/91/700_FO54981291_ddb21c4b73fb5ce85a986d079e425490.jpg,700,332,cms:2018/10/5bd1b6b8d04b8_220x50-watermark.png,over,480,282,jpg)/adesivi-gatto-con-gomitolo-di-lana.jpg.jpg", "Gomitolo", 3.2, $gatto, "Lana");
$scatoletta_pesce = new Food("https://static.zoomalia.com/prod_img/21445/la_306b2eb7349035754953b57a32e2841bda51646304243.jpg", "Scatoletta", 3.5, $gatto, "Pesce", 150, "15/01/2023");

$products = [$crocchette, $osso, $gomitolo, $scatoletta_pesce];
