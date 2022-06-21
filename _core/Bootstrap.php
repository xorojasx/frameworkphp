<?php
    class Bootstrap{
        public static function run(Request $peticion){
            $controlador = $peticion->getControlador() . "Controller";
            $metodo = $peticion->getMetodo();
            $parametros = $peticion->getParametros();
            $rutaControlador = CTRL . $controlador . ".php";
            if(is_readable($rutaControlador)){
                //echo "Ok";exit;
                require_once $rutaControlador;
                $controller = new $controlador;

                if(is_callable(array($controller,$metodo))){
                    $metodo = $metodo;
                    
                }else{
                    $metodo = DEF_MTD;
                }

                if(isset($parametros)){
                    call_user_func_array(array($controller,$metodo), $parametros);
                }else{
                    call_user_func($controller,$metodo);
                }
            }else{
                throw new Exception("Error al cargar la Página", 1000);
            }
        }
    }