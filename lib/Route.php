<?php
namespace app\lib;

define('ROOT', dirname(__DIR__));

class Rout{
    public function run($r){
        $controller = ucfirst($r)."Controller.php";
        if(file_exists(ROOT.'/controllers/'.$controller)){
            echo "Ok";
        }
        else{
            echo "No";
        }
        
    }
}