<?php
/**
 * Created by PhpStorm.
 * User: stefa
 * Date: 02/04/2019
 * Time: 11:39
 *
 * Classe base controller che poi verrà estesa dentro i controllers specifici
 */

abstract class Controller {
    // le variabili sono protette cosi le classi che estendono il controlle possono accedere ad esse
    protected $request;
    protected $action;

    // inizializza le variabilli
    public function __construct($action,$request)
    {
        $this->action=$action;
        $this->request=$request;
    }

    // ritorna la variabile come funzione
    public function executeAction(){
        return $this->{$this->action}();
    }

    /**
     * @param $viewmodel
     * @param $fullview
     *
     * ritorna la view intesa come file php che deve avere stesso nome del controller dentro la cartella views
     * ad esempio se il controller è "user" e la classe è "create"  deve esistere una cartella "views/user"
     * e dentro questa deve esserci il file "create.php"
     */
    protected function returnView($viewmodel,$fullview){
        $view = 'views/'.get_class($this).'/'.$this->action.'.php';
        if ($fullview){
            require ('views/main.php'); // view generica
        }else{
            require($view);             // view specifica
        }
    }
}