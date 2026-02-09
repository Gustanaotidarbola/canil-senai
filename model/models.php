<?php
function pegartodos($items){
    return $items;
}

function pegartipo($tipo,$items){
    return array_filter($items, function($animal)use($tipo){
        return $animal['type'] == $tipo;
    });
}

function pegarpelonome($items, $nome){
    return array_filter($items, function($animal) USE($nome){
        return $animal['name'] == $nome;
    });

}