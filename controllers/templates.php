<?php
class Templates extends Controller{
    protected function Index(){
        $viewmodel = new TemplatesModel();
        $this->returnView($viewmodel->Index(),true);
    }
    protected function Add(){
        $viewmodel = new TemplatesModel();
        $this->returnView($viewmodel->add(),false);
    }
}