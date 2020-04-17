<?php
include_once 'lib/Controller.php';
include_once ROOT."/models/User.php";
use app\lib\Controller;
use app\models\User;

class HomeController extends Controller{

    public function index()
    {
        $userModel = new User();
        $this->render('index');
    }
}