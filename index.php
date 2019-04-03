<?php
/**
 * Created by PhpStorm.
 * User: stefa
 * Date: 02/04/2019
 * Time: 11:11
 */

require ('config.php');                 // Configurazione Generale
require ('classes/Bootstrap.php');      // Configurazione controller ed action
require ('classes/Controller.php');     // Definizione del Controller
require ('classes/Model.php');          // Definizione del Model

require('controllers/home.php');
require('controllers/shares.php');
require('controllers/users.php');


require('models/users.php');


$bootstrap = new Bootstrap($_GET);      // Viene usata la variabile super global GET per costruire la request di Bootstrap
$controller = $bootstrap->createController();             // istanza del controller
if ($controller){
    // se il controller e la action esistono viene eseguita la action
    $controller->executeAction();
}