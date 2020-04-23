<?php

namespace app\models;

use app\lib\Model;

include_once ROOT."/lib/Model.php";
class User extends Model{
    public static function tableName()
    {
        return "user";
    }
     
    
}