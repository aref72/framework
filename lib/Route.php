<?php
namespace app\lib;

define('ROOT', dirname(__DIR__));

class Rout{
    public function run($r){
        $x=explode('/', $r);
        
        $controller = ucfirst($x[0])."Controller";
        $path= ROOT.'/controllers/'.$controller.'.php';
        if(file_exists($path))
        {
            include_once $path;
            $obj = new $controller();

            $action = isset($x[1])? $x[1] : 'index';
            if(method_exists($obj, $action))
            {
                
                $obj->$action();
            }
            else{
                echo "page NOT found";
            }
        }
        else{
            echo "Controller NOT found";
        }
        
    }
}