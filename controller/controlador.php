<?php 
include "./data/animals.php";
include "./model/models.php";

$active = [
    "main" => "",
    "cachorros" => "",
    "gatos" => "",
    "peixes" => "",
];

function mainpage() {
    global  $items, $active;
    $active ["main"] = "active";
    $banner = "./images/allanimals.jpg";
    $title = "Todo os animais";
    $content = pegartodos($items);
         
    include "./include/layout.php";
}
function gatospage() {
    global  $items, $active;
    $active ["gatos"] = "active";
    $banner = "./images/banner_cat.jpg";
    $title = "gatos";
    $lista = pegartodos($items);
    $content = pegartipo("gato",$lista);

   

    include "./include/layout.php";
}
function cachorrospage() {
    global  $items, $active;
    $active ["cachorros"] = "active";
    $banner = "./images/banner_dog.jpg";
    $title = "cachorros";
    $lista = pegartodos($items);
    $content = pegartipo("cachorro",$lista);

    include "./include/layout.php";
}
function peixespage() {
    global  $items, $active;
    $active ["paixes"] = "active";
    $banner = "./images/banner_fish.jpg";
    $title = "peixes";
    $lista = pegartodos($items);
    $content = pegartipo("paixe",$lista);

    include "./include/layout.php";
}
function pesquisapage() {
    global  $items;
    $nome = $_GET['nome'] ?? "";
    $lista = pegartodos($items);
    $content = pegarpelonome($items , $lista);



    include "./include/layout.php";
}
?>




