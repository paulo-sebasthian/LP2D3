<?php

require("carro.php");
class Fruta{
    // atributos da classe
    private $nome;
    public $cor;
    
    //Métodos
    function __construct($nome, $cor){
        $this->nome = $nome;
        $this->cor = $cor;

    }

    //encapsulamento
    function set_nome($nome){
        if ($nome == "Paulo"){
            $this->nome = "inválido";
        }else{
            $this->nome = $nome;
        }


    }
    function set_cor($cor){
        $this->cor = $cor;
    }
    function get_nome(){
        return $this->nome;
    }
    function get_cor(){
        return $this->cor;
    }
}

//Criação de um objeto do tipo fruta
$maca = new Fruta("maçã","vermelha");
$banana = new Fruta("banana", "amarela");
$mamao = new Fruta("mamão", "laranja");


//Criação de um objeto do tipo carro
$carro1 = new Carro("Hyundai","HB20",2015);
echo "<br> Carro1 - <br><br>Marca = ".$carro1->get_marca()."<br> Modelo = ".
$carro1->get_modelo()."<br> Ano = ".$carro1->get_ano();
//Imprimir na tela o nome e a cor dos objetos
//$maca->cor = "vermelho";
//$maca->nome = "maçã";
//$maca->set_nome("maçã");
echo "<br>".$maca->get_nome();
echo "<br>".$maca->get_cor();

//$banana->cor = "amarela";
//$banana->nome = "banana prata";
//$banana->set_nome("banana prata");
echo "<br>".$banana->get_nome();
echo "<br>".$banana->get_cor();

?>
