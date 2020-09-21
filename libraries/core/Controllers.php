<?php 

class Controllers
{
    public function __construct()
    {
       
        $this->loadModel();
    }

    public function loadModel()
    {
        $model =get_class($this);
        $model = str_replace('Controller','',$model);
        $routClass ="models/".$model.'.php';
        // require_once '$routClass';
        if(file_exists($routClass))
        {
            require_once $routClass;
            $this->model = new $model();

        }

    
    }

}