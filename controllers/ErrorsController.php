<?php 

class ErrorsController extends Controllers
{
    public function __construct()
    {
        $this->views= new Views();
        parent::loadModel();
    }

    public function error()
    {
        $this->views->getView($this,'error');
    }


}

$error = new ErrorsController();
$error->error();