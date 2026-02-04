<?php 
include "./data/animals.php";
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
    $content = $items;

    include "./include/layout.php";
}
function gatospage() {
    global  $items, $active;
    $active ["gatos"] = "active";
    $banner = "./images/banner_cat.jpg";
    $title = "gatos";
    $content = array_filter($items, function($animal){
        return $animal['type'] == "gato";
    });

    include "./include/layout.php";
}
function cachorrospage() {
    global  $items, $active;
    $active ["cachorros"] = "active";
    $banner = "./images/banner_dog.jpg";
    $title = "cachorros";
    $content = array_filter($items, function($animal){
        return $animal['type'] == "cachorro";
    });

    include "./include/layout.php";
}
function peixespage() {
    global  $items, $active;
    $active ["paixes"] = "active";
    $banner = "./images/banner_fish.jpg";
    $title = "peixes";
    $content =array_filter($items, function($animal){
        return $animal['type'] == "peixe";
    });

    include "./include/layout.php";
}
function pesquisapage() {
    global  $items;
    $nome = $_GET['nome'] ?? "";
    $content =array_filter($items, function($animal) USE($nome){
        return $animal['name'] == $nome;
    });

    include "./include/layout.php";
}
?>




