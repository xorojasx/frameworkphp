<?php
    class contactoController extends Controller{
        public function __construct()
        {
            parent::__construct();
        }
        public function index(){
            $this->_view->titulo = "Framework PHP";
            $this->_view->render("index");
        }
    }
?>