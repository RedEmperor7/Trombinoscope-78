<?php

include 'database.php'
$title = "Page 1";
$css = "style1.css";
$etudiant = [
    <?= $astudent['lastname'] ?>
    <?= $astudent['firstname'] ?>
];


ob_start();
include 'app/view/trombi.view.php';
$content = ob_get_clean();
include 'app/view/common/layout.php';