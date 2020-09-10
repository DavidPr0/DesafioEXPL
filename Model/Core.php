<?php 

class Core
{
    public function index()
    {
        set_include_path(implode(PATH_SEPARATOR, [get_include_path(), './Controller', './Model', '']));
        spl_autoload_register();
        $url = explode('/', $_SERVER['REQUEST_URI']);
        if (file_exists('./Controller/Controller' .  ucfirst($url[2]) . '.php')) {
            require './Controller/Controller' .  ucfirst($url[2]) . '.php';
        } else {
            require './View/index.php';
        }
    }
}
