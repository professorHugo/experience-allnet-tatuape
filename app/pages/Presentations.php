<?php

if (isset($_GET['Aula'])) {
    $AulaPresentation = $_GET['Aula'];

    switch ($AulaPresentation) {
        case $AulaPresentation: include_once 'Presentation/Aula.php';
            break;
    }
} else {
    include_once 'Presentation/Content.php';
}
    