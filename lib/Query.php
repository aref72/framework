<?php
namespace app\lib;

class Query{
    public $tablename ;
    public function __construct($tableName)
    {
        $this->tablename = $tableName;
    }

    public function where()
    {
        echo "where";
    }
}