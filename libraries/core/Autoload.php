<?php


//autoload para requerir las clases que se esten instanciando
    spl_autoload_register( function($class) 
    {
        if(file_exists(LIBS.'core/'.$class.'.php'))
        {
            require_once(LIBS.'core/'.$class.'.php');
        }
    });