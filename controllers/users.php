<?php
class Users extends Controller{
	protected function Index(){
		$viewmodel = new UsersModel();
		$this->returnView($viewmodel->Index(),true);
	}
    protected function Login(){
        $viewmodel = new UsersModel();
        $this->returnView($viewmodel->Login(),false);
    }
}