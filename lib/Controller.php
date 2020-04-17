<?php

namespace app\lib;

class Controller
{
    public $layout = "main";
    public $title = "خانه";
    
    public function render($view)
    {
        $pathLayout = ROOT . "/views/layouts/" . $this->layout . ".php";
        $className = $this->className();
        $ex = explode("Controller", $className);
        $folder = lcfirst($ex[0]);
        $path = ROOT . "/views/" . $folder . "/" . $view . ".php";
        if (file_exists($pathLayout)) {

            if (file_exists($path)) {
                ob_start();
                include_once $path;
                $content = ob_get_contents();
                ob_end_clean();
                $content.= PHP_EOL;
            } else {
                echo "View NOT found";
            }

            ob_start();
            include_once $pathLayout;
            $body = ob_get_contents();
            ob_end_clean();
            echo $body;
        }else
        {
            echo "Layout NOT found";
        }
    }
    public function className()
    {
        return static::class;
    }
}
