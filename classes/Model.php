<?php
/**
 * Created by PhpStorm.
 * User: stefa
 * Date: 02/04/2019
 * Time: 14:01
 */

abstract class Model{
    protected $dbh;
    protected $stmt;

    public function __construct()
    {
        // Inizializza il PDO
        $this->dbh = new PDO(
            "mysql:host=".DB_HOST. ";dbname=".DB_NAME,
        DB_USER,DB_PW);

    }

    public function query($query){
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind ($param,$value,$type=null){
        if(is_null($type)){
            switch (true){
                case is_int($value):
                    $type=PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type=PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type=PDO::PARAM_NULL;
                    break;
                default:
                    $type=PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param,$value,$type);
    }

    public function execute(){
        $this->stmt->execute();
    }

    public function resultSet(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}