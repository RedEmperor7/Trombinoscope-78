<?php
include 'database.php';
?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Trombinoscope</title>



  <link rel="stylesheet" type="text/css" href="trombi.css">
</head>

<body>

  <header>
    <a href="Trombinoscope.html">
      <h1>Trombinoscope </h1>
    </a>
    <p>Année 2023/2024</p>

  </header>
  <main>



    <?php foreach ($students as $student) : ?>
      <div class="carte">
        <a href="fiche.html">
          <?php
          if (isset($student['photo'])) {
            $photo = 'groupe' . $student['group'] . '/small/' . $student['photo'];
          } else {
            $photo = 'defaut.png';
          }
          ?>
          <figure class="photo"><img src="./images/<?= $photo ?>" alt="photo de Aimé MIHI">
          </figure>
          <div class="infos">
            <p class="nom"><?= $astudent['firstname'] ?> <span><?= $astudent['lastname'] ?></span></p>
            <p class="ddn"><?= $astudent['birthdate'] ?></p>
            <p class="groupe">groupe <span><?= $astudent['group'] ?></span></p>
          </div>
        </a>
      </div>
    <?php endforeach ?>




  </main>
</body>

</html>