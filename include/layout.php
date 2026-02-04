<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetDevShop - O petshop do dev</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" type="image/png" href="images/favicon.png" />
</head>
<body>
    <?php include "header.php" ?>

<nav>
    <ul>
        <li class="<?= $active ["main"]?>"><a href="/canil-senai/">Todos</a></li>
        <li class="<?= $active ["cachorros"]?>"><a href="/canil-senai/cachorros">Cachorros</a></li>
        <li class="<?= $active ["gatos"]?>"><a href="/canil-senai/gatos">Gatos</a></li>
        <li class="<?= $active ["peixes"]?>"><a href="/canil-senai/peixes">Peixes</a></li>
    </ul>
</nav>
<?php if(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) != "/canil/pesquisa"):?>
<section class="banner" style="background-image: url('<?= $banner?>')"><?= $title ?></section>
<h2><?= $title ?> disponíveis para adoção</h2>
<?php endif;?>
<div class="container list">
   <?php foreach($content as $animal): ?>
    <div class="item">
        <img src="<?= $animal ['image']?>" class="item--image" />
        <div class="item--name"><?= $animal['name']?> </div>
        <div class="item--color">Cor:<?= $animal['color']?> </div>
        <div class="item--genre">Gênero:<?= $animal['genre']?> </div>
    </div>
    <?php endforeach; ?>
</div>

<?php include "footer.php" ?>

</body>
</html>