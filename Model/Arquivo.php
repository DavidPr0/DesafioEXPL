<?php

class Arquivo
{
    private $arquivo = [];

    public function set($arquivo)
    {
        $file = fopen($arquivo, "r");
        while (!feof($file)) {
            $this->arquivo[] = fgets($file);
        }
        fclose($file);
    }

    public function get()
    {
        return $this->arquivo;
    }
}