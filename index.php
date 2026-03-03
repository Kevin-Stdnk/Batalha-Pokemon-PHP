<!DOCTYPE html>
<html lang="en">
<head>

    <?php
    $id = rand(1, 100);
    $url = "https://pokeapi.co/api/v2/pokemon/$id";
    $resposta = file_get_contents($url);
    $dados = json_decode($resposta);
    $img = $dados->sprites->front_default;
    $nome = $dados->name;
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= $img ?>">
    <link rel="stylesheet" href="style.css">
    <title><?= strtoupper($nome) ?></title>

    <!-- FONTES -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Betania+Patmos&display=swap" rel="stylesheet">

</head>
<body>
    <div class="main-title-div">
        <h1 class="main-title">Bem vindo ao simulador de batalhas</h1>
        <h1 class="pokemon-title">POKEMON</h1>
        <img class="poke-img"src="<?= $img ?>" alt="<?= strtoupper($nome) ?>">
    </div>
</body>
</html>