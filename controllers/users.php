<?php
class Users extends Controller{
    var $idUser=0;
    protected function Index(){
        $viewmodel = new UsersModel();
        $this->returnView($viewmodel->Index(),true);
    }
    protected function Login(){
        $viewmodel = new UsersModel();
       /* $post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
        if ($post['submit']){
            if ($this->VerifyLogin($post['email'],$post['password'])){
                header('Location: '.ROOT_URL.ROOT_PATH.'users?id='.$this->idUser);
            }
        }else*/
        $this->returnView($viewmodel->Login(),false);
    }
}