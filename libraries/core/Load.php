<?php 

// se le agrega la palabra Controller porque asi esta definida en la carpeta.
$controller =$controller.'Controller';
// se requiere el controlador
$controllerFile = "controllers/".$controller.'.php';
//se verifica que exista

if(file_exists($controllerFile))
{
    require_once($controllerFile);
    // se crea la instancia del controlador ejemplo (HomeController)
    $objController = new $controller();
    //se verifica que el metodo exista y si existe se llama
    if(method_exists($objController,$method))
    {
        $objController->$method($params);
    }else{
        // echo 'no existe metodo';
        require_once CONTROLLERS.'ErrorsController.php';
    }
 
}
else{
    // echo 'no existe controller';
    require_once CONTROLLERS.'ErrorsController.php';
}