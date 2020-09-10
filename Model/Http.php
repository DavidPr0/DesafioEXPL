<?php

class Http
{
    public function get()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://randomuser.me/api");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        
        return json_decode($result, 1);
    }

}
