<?php

require './View/arquivo.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $arquivoObj = new Arquivo();
    $arquivoObj->set($_FILES['arquivo']['tmp_name']);
    echo '<pre>';
    print_r($arquivoObj->get());
}
