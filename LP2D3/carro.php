<?php
class Carro{
    /*Criamos os atributos com
    os modificadores de acessso
    do tipo "private"
    */
    
    private $marca;
    private $modelo;
    private $ano;

    //Método construtor
    function __construct($marca, $modelo, $ano){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }
    //encapsulamento
    function set_marca($marca){
        $this->marca = $marca;
    }
    function set_modelo($modelo){
        $this->modelo = $modelo;
    }
    function set_ano($ano){
        if($ano < 2000){       
            echo 'Ano inferior a 2000 não permitido';
        }else{
            $this->ano = $ano;}
    }

    function get_marca(){
        return $this->marca;
    }
    function get_modelo(){
        return $this->modelo;
    }
    function get_ano(){
        return $this->ano;
    }
}

?>