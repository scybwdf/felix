<?php

class Db{

    static private $_instance;
    static private $_connectSource;
    private $dbconfig=array(
        'host'=>'127.0.0.1',
        'user'=>'root',
        'password'=>'dakehui9118',

    );
    private function __construct()
    {

    }

    static public function getInstance(){
        if(!(self::$_instance instanceof self)){
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    public function connect(){
        self::$_connectSource=mysqli_connect($this->dbconfig['host'],$this->dbconfig['user'],$this->dbconfig['password']);
        if(!self::$_connectSource){
            die('mysql connect fail:'.mysqli_error());
        }
    }
}