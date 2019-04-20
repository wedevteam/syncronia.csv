<?php


// SESSION START
session_start();

require ('config.php');                 // Configurazione Generale

require ('classes/Bootstrap.php');      // Configurazione controller ed action
require ('classes/Controller.php');     // Definizione del Controller
require ('classes/Model.php');          // Definizione del Model
require ('classes/Messages.php');       // Definizione del Messaggi

require('controllers/home.php');
require('controllers/shares.php');
require('controllers/users.php');
require('controllers/templates.php');

require('models/users.php');
require('models/templates.php');


$bootstrap = new Bootstrap($_GET);                        // Viene usata la variabile super global GET per costruire la request di Bootstrap
$controller = $bootstrap->createController();             // istanza del controller
if ($controller){
    // se il controller e la action esistono viene eseguita la action
    $controller->executeAction();
}