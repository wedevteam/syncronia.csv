<?php
class Users extends Controller{
	protected function Index(){
		$viewmodel = new UsersModel();
		$this->returnView($viewmodel->Index(),true);
	}
}