<?php
class Prodotti extends Controller{
    protected function Index(){
        $viewmodel = new ProdottisModel();
        $this->returnView($viewmodel->Index(),true);
    }
}