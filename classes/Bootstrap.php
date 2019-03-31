<?php
/**
 * Created by PhpStorm.
 * User: stefa
 * Date: 27/03/2019
 * Time: 13:14
 */

class Bootstrap{
    private $controller;
    private $action;
    private $request;

    /**
     * Bootstrap constructor.
     * @param $request
     */
    public function __construct($request)
    {

        $this->request = $request;
        if ($this->request['controller']==""){
            $this->controller='home';
            // pippo
        }else{
            $this->controller=$this->request['controller'];
        }
        if ($this->request['action']==""){
            $this->action='index';
        }else{
            $this->action=$this->request['action'];
        }
    }


}