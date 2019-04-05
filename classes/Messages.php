<?php

class Messages{
    public static function setMsg($testo,$tipo){
        if($tipo=='errore'){
            $_SESSION['errorMsg']=$testo;
        }else{
            $_SESSION['syncroniaMsg']=$testo;
        }
    }

    public static function displayMsg(){
        if (isset($_SESSION['errorMsg'])){
            echo'<div class="alert alert-danger">'.$_SESSION['errorMsg'].'</div>';
            unset($_SESSION['errorMsg']);
        }
        if (isset($_SESSION['syncroniaMsg'])){
            echo'<div class="alert alert-success">'.$_SESSION['syncroniaMsg'].'</div>';
            unset($_SESSION['syncroniaMsg']);
        }
    }
}