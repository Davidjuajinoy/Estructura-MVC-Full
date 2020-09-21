<?php 

class HomeController extends Controllers
{

    public function __construct()
    {
        $this->views= new Views();
        parent::loadModel();
    }

    public function index($params)
    {
        $this->views->getView($this,'index');
    }
}