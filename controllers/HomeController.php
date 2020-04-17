<?php
include_once 'lib/Controller.php';
use app\lib\Controller;
class HomeController extends Controller{

    public function index()
    {
        $this->render('index');
    }
}