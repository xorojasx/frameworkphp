<?php
    define("DS", DIRECTORY_SEPARATOR);
    define("BASE", realpath(dirname(__FILE__)) . DS);
    define("CORE", BASE . "_core" . DS);
    define("CTRL", BASE . "_private" . DS . "controllers" . DS);
    define("MODE", BASE . "_private" . DS . "models" . DS);
    define("VIEW", BASE . "_private" . DS . "views" . DS);
    define("HEAD", VIEW . "layout" . DS . "headers" . DS);
    define("FOOT", VIEW . "layout" . DS . "footers" . DS);
    define("LIBS", BASE . "_libs" . DS);
    if ($_SERVER["SERVER_NAME"] === "localhost"){
        define ("SVR", "http://localhost/FrameworkORG/");
        define ("SECRET_KEY","6Lf-i0AbAAAAANNfdP6jjXleYi4Iliu1kcMujR8Q");
        define ("PUBLIC_KEY","6Lf-i0AbAAAAAKkD1-E7geg0Jgohml_EsyLkzZ2X");
    }else{
        define ("SVR", "https://". $_SERVER["SERVER_NAME"] . "/");
        define ("SECRET_KEY","6Lcgd6gaAAAAAHWvFhs5CbY2ypDnZJFUTYY_IUjk");
        define ("PUBLIC_KEY","6Lcgd6gaAAAAANCCMWKswEwLPdTxbz6R0P3kw7GQ");
    }
    define("CSS", SVR . "_statics/css/");
    define("JSC", SVR . "_statics/js/");
    define("IMG", SVR . "_statics/img/");
    define("FNT", SVR . "_statics/fnt/");
    define("VDO", SVR . "_statics/vendor/");
    define("SCS", SVR . "_statics/scss/");