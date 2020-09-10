<?php

$retornoApiObj = new Http();

$api = $retornoApiObj->get();

// var_dump($arquivoObj->get());

require './View/api.php';
