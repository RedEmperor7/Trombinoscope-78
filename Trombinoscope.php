<?php

include 'database.php'
$title = "Page 1";
$css = "style1.css";
$etudiant = [
'nom’ => 'Dupont',
'prenom’ => 'Arthur',
];
ob_start();
include 'app/view/view1.view.php';
$content = ob_get_clean();
include 'app/view/common/layout.php';