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

class Model
{

    public function __construct($db, $table)
    {

        $this->con = DB::getConnect();
        $this->db = $db;
        $this->table = $table;
        $this->fields = [];
        $this->allFields = '';

        $this->_describe();
    }

    public function getAll()
    {
        $query = "SELECT $this->allFileds from $this->table";
        foreach ($this->con->query($query, PDO::FETCH_ASSOC) as $row) {
            print_r(implode(', ', $row) . PHP_EOL);
        }
    }

    private function _describe()
    {
        $query = "
   SELECT `COLUMN_NAME` 
   FROM `INFORMATION_SCHEMA`.`COLUMNS` 
   WHERE `TABLE_SCHEMA`='$this->db' 
      AND `TABLE_NAME`='$this->table';
  ";

        foreach ($this->con->query($query, PDO::FETCH_ASSOC) as $row) {
            $this->fields[] = $row['COLUMN_NAME'];
        }
        $this->allFileds = implode(', ', $this->fields);

    }
}

$books = new Model('books', 'books');
$books->getAll();

$authors = new Model('books', 'authors');
$authors->getAll();






