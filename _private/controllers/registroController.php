<?php
    class registroController extends Controller{
        private $_nameThis = "registro";
        public function __construct()
        {
            parent::__construct();
        }
        public function index(){
            $this->_view->titulo = "Framework PHP";
            $this->_view->controlador = $this->_nameThis;
            $this->_view->render("index");
        }
    }
?>