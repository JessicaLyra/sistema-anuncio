<?php

class homeController extends controller {

    public function index() {
        $dados = array();

       
        $dados[] = $dados;



        $this->loadTemplate('home', $dados);
    }

}
