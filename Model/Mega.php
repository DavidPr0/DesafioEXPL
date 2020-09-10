<?php

class Mega
{
    public function numerosDaSorte()
    {
        $status = true;
        $numerosdaSorte = [];
        while ($status == true) {
            $numero =  rand(1, 60);
            if (!in_array($numero, $numerosdaSorte)) {
                $numerosdaSorte[] = $numero;
            }
            if (count($numerosdaSorte) > 5) {
                $status = false;
            }
        }
        asort($numerosdaSorte);
        return $numerosdaSorte;
    }
}
