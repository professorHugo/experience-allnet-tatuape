<?php

if (isset($_GET['Aula'])) {
    $AulaPresentation = $_GET['Aula'];

    switch ($AulaPresentation) {
        case $AulaPresentation: include_once 'Documents/Aula.php';
            break;
    }
} else {
    include_once 'Documents/Content.php';
}
    