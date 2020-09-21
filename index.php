<?php

require_once 'config/config.php';

//Capturamos la varible url;
$url = isset($_GET['url']) ? $_GET['url'] : 'Home/index';
//Le quitamos el slash y se convierte un array el cual divide en 2 la url 
$arrUrl= explode("/",$url);

//El controlador sera la posicion [0]= home si no esta definido
$controller = $arrUrl[0];
//El metodo sera la posicion [1] = index si no esta definido
$method = isset($arrUrl[1]) ? $arrUrl[1] : $arrUrl[0];
//Los parametros seran las posiciones desde 2++ 
$params = isset($arrUrl[2]) ? $arrUrl[2] : $arrUrl[2]='';

    //? url para dividir los diferentes parametros que les pasemos
    if($arrUrl[2] != '')
    {
        //se reinicia el valor de params o sino almacena dos veces el parametro 1
        $params='';
        for ($i=2; $i <count($arrUrl) ; $i++) { 
            $params .= $arrUrl[$i].'/';
        }
        $params = trim($params,'/');

    }

    //autoload de clases 
    require_once LIBS.'core/Autoload.php';

    //validacion de controller y modelo
    require_once LIBS.'core/Load.php';





