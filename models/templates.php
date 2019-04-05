<?php
/**
 * Created by PhpStorm.
 * User: stefa
 * Date: 05/04/2019
 * Time: 09:39
 */


class TemplatesModel extends Model {
    public function Index(){
        $this->query('SELECT * FROM templates');
        $rows = $this->resultSet();
        return $rows;
    }
    public function Add(){
        $this->query('SELECT * FROM templates');
        $rows = $this->resultSet();
        return $rows;
    }
}