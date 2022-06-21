<?php
    class Request{
        private $_controlador;
        private $_metodo;
        private $_parametros;
        
        public function __construct()
        {
            if(isset($_GET["url"])){
                $url = filter_input(INPUT_GET, "url", FILTER_SANITIZE_URL);
                $url = explode("/", $url);
                $url = array_filter($url);
                $this->_controlador = strtolower(array_shift($url));
                $this->_metodo = strtolower(array_shift($url));
                $this->_parametros = $url;
            }
            $pos = strpos($this->_controlador, ".");
            if ($pos > 0){
                $this->_controlador = substr($this->_controlador,0,$pos);
            }
            if(!$this->_controlador){
                $this->_controlador = DEF_CTRL;
            }
            if(!$this->_metodo){
                $this->_metodo = DEF_MTD;
            }
            if(!isset($this->_parametros)){
                $this->_parametros = array();
            }
        }

        public function getControlador(){
            return $this->_controlador;
        }

        public function getMetodo(){
            return $this->_metodo;
        }

        public function getParametros(){
            return $this->_parametros;
        }
    }