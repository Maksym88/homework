<?php

require_once "database.php";

//class Model
//{
//
//    public function __construct()
//    {
//
//        $this->con = DB::getConnect();
//        $this->table = 'books';
//        $this->fields = ['book_id', 'title', 'genre_id']
//    }
//    public function getAll(){
//        $allfileds = implode(', ', $this->fields);
//        $query = "SELECT $allfileds from $this->table";
//        print_r($query);
//        foreach ($this->con->query($query, PDO::FETCH_ASSOC) as $row){
//            print_r(implode(', ', $row) . PHP-EOL);
//        }
//    }
//}
//
//$model = new Model();
//$model->getAll();


require_once "database.php";

abstract class Model {

    public static $table;
    public static $db;
    public static $pk;
    public static $con;
    public static $fields;
    public static $allFields;

    public static function init($db, $table, $pk){

        self::$con = DB::getConnect();
        self::$db = $db;
        self::$table = $table;
        self::$fields = [];
        self::$allFields = '';
        self::$pk = $pk;

        self::_describe();

    }

    public static function getAll(){
        $query = "SELECT " . self::$allFields . " from " . self::$table . ";";

        foreach(self::$con->query($query, PDO::FETCH_ASSOC) as $row) {
            print_r(implode(', ', $row) . PHP_EOL);
        }
    }

    static protected function _describe(){
        $query = "
   SELECT `COLUMN_NAME` 
   FROM `INFORMATION_SCHEMA`.`COLUMNS` 
   WHERE `TABLE_SCHEMA`='" . self::$db . "' 
      AND `TABLE_NAME`='" . self::$table . "';
  ";

        foreach(self::$con->query($query, PDO::FETCH_ASSOC) as $row) {
            self::$fields[] = $row['COLUMN_NAME'];
        }
        self::$allFields = implode(', ', self::$fields);
    }
}

class Books extends Model {
    public function getOne($pk){
        $query = "SELECT " . self::$allFileds . " from " .
            self::$table . " where " . self::$pk . " = $pk;";
        foreach(self::$con->query($query, PDO::FETCH_ASSOC) as $row) {
            print_r(implode(', ', $row) . PHP_EOL);
        }
    }
}

Books::init('books', 'books', 'book_id');
Books::getAll();
// $one_book = new Books();

// $authors = new Model('books', 'authors');
// $authors->getAll();






