<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Document</title>
</head>

<body>
    <h1>Exercice PHP</h1>

    <?php
    //tableau indiquant le nombre de chaque espÃ¨ce de fruits contenus dans mon panier
    $panier = ['orange' => 5, 'pomme' => 7, 'banane' => 6, 'poire' => 2];
    ?>

    <h2>Nombre de pommes</h2>
    <p>Il y a <?= $panier['pomme'] ?> pommes dans mon panier.</p>

    <h2>Contenu de mon panier</h2>
    <ul> <?php foreach ($panier as $fruit => $nombre) : ?>
            <li><?= $nombre ?> <?= $fruit ?>(s)</li>
        <?php endforeach ?>
    </ul>

    <h2>Nombre de fruits dans mon panier</h2>
    <table border="1">
        <?php foreach ($panier as $fruit => $nombre) : ?>
            <tr>
                <td><?= $fruit ?></td>
                <td><?= $nombre ?></td>
            </tr>
        <?php endforeach ?>
    </table>


</body>

</html>