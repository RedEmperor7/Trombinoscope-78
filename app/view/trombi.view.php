<?php foreach ($students as $student) : ?>
    <div class="carte">
        <a href="view/main.view.php">
            <?php
            if (isset($student['photo'])) {
                $photo = 'groupe' . $student['group'] . '/small/' . $student['photo'];
            } else {
                $photo = 'defaut.png';
            }
            ?>
            <figure class="photo"><img src="public/images/<?= $photo ?>" alt="photo de Aimé MIHI">
            </figure>
            <div class="infos">
                <p class="nom"><?= $astudent['firstname'] ?> <span><?= $astudent['lastname'] ?></span></p>
                <p class="ddn"><?= $astudent['birthdate'] ?></p>
                <p class="groupe">groupe <span><?= $astudent['group'] ?></span></p>
            </div>
        </a>
    </div>
<?php endforeach ?>