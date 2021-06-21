<?php

class cadastrarController extends controller {

    public function index() {
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            $dados = [
                'nome' => $formulario['nome'],
                'cpf' => $formulario['cpf'],
                'email' => $formulario['email'],
                'telefone' => $formulario['nome'],
                'senha' => $formulario['password'],
                'confsenha' => $formulario['conf_senha'],
            ];  
            var_dump($formulario);
        else:
            $dados = [
                'nome' => '',
                'cpf' => '',
                'email' => '',
                'telefone' => '',
                'senha' => '',
                'confsenha' => '',
            ];       
        endif;


        $this->loadTemplate('cadastrar', $dados);
    }

}
