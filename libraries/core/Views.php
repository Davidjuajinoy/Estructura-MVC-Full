<?php 

class Views
{
    function getView($controller,$view)
    {
        $controller = get_class($controller);
        $controller = str_replace('Controller','',$controller);
        if($controller == 'Home')
        {
            $view =VIEWS.$controller.'/'.$view.'.php';
        }else{
            $view =VIEWS.$controller.'/'.$view.'.php';
        }

        require_once $view;
    }
}