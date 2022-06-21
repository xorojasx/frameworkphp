<?php
    /* 
        Esta clase controla el acceso a las diferentes vistas,
        ya sean de cabeceras
        contenido
        footer
     */
    class View{
        private $_controlador;

        public function __construct(Request $peticion)
        {
            $this->_controlador = $peticion->getControlador();
        }

        public function render($vista, $item = false){
            $rutaView = VIEW . $this->_controlador . DS . $vista . "View.phtml";
            $rutaHeader = $this->getHeader($this->_controlador, $vista);
            $rutaFooter = $this->getFooter($this->_controlador, $vista);
            if(is_readable($rutaView)){
                include_once $rutaHeader;
                include_once $rutaView;
                include_once $rutaFooter;
            }else{
                throw new Exception("Error al cargar la Página", 1001);
            }
        }

        private function getHeader($controlador, $vista = ""){
            /* 
                Los Headers o Cabeceras se cargan de acuerdo a las vistas solicitadas
                - Para crear una cabecera personalizada para la vista, se debe crear dentro la ruta
                    VIEWS/CONTROLADOR/VISTA/CABECERA
                - Es decir, por cada vista, se crea una cabecera, o se puede agregar una condicional al codigo de mas abajo
            */
            if ($controlador != "" or $controlador != "index"){
                if ($vista == "index") {
                    $ruta = HEAD . "default.phtml";
                }else{
                    $ruta = VIEW . $controlador . DS . $vista . DS . "header.phtml";
                }
            }else{
                $ruta = HEAD . "default.phtml";
            }
            return $ruta;
        }

        private function getFooter($controlador, $vista = ""){
            /* 
                Los Footers se cargan de acuerdo a las vistas solicitadas
                - Para crear una footer personalizada para la vista, se debe crear dentro la ruta
                    VIEWS/CONTROLADOR/VISTA/FOOTER
                - Es decir, por cada vista, se crea un footer, o se puede agregar una condicional al codigo de mas abajo
            */
            if ($controlador != "" or $controlador != "index"){
                if ($vista == "index") {
                    $ruta = FOOT . "default.phtml";
                }else{
                    $ruta = VIEW . $controlador . DS . $vista . DS . "footer.phtml";
                }
            }else{
                $ruta = FOOT . "default.phtml";
            }
            return $ruta;
        }
    }