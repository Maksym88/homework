<?php


class DB {

    private static $_obj;

    private function __clone(){}
    private function __wakeup(){}
    private function __construct(){
        $this->dbh = new PDO('mysql:host=127.0.0.1;dbname=books', 'makson', '1925');
    }

    static public function getConnect(){
        if(! is_object(self::$_obj)){
            self::$_obj = (new self())->dbh;
        }
        return self::$_obj;
    }

}


