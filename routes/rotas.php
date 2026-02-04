<?php 
include "./controller/controlador.php";



$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
echo $url;

if($url == "/canil-senai/"){
    mainpage();
}
else if ($url == "/canil-senai/gatos"){
   gatospage();
}
else if ($url == "/canil-senai/cachorros"){
    cachorrospage();
}
else if ($url == "/canil-senai/peixes"){
    peixespage();
}
else if ($url == "/canil-senai/pesquisa"){
    pesquisapage();
}
else {
    echo "404 not found";
}
?>