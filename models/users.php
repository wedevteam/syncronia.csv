<?php
/**
 * Created by PhpStorm.
 * User: stefa
 * Date: 02/04/2019
 * Time: 15:36
 */

class UsersModel extends Model {
    public function Index(){
        $this->query('SELECT * FROM users');
        $rows = $this->resultSet();
        return $rows;
    }
    public function Login(){
        $this->query('SELECT * FROM users');
        $rows = $this->resultSet();
        print_r($rows);
        return $rows;
    }
}