<?php


echo "Olá PHP Orientado ao Objeto" . "</br>";


    function exibeNome($valor) {
        return 'nome' . $valor;

    }

//    echo exibeNome($valor);



    class Cliente
    {
//Atributos - Propriedades
    public $id;
    public $email;
    public $nome;
    private $senha;
    public $telefone;
    public $assinante;

//Métodos
    public function exibeNome()
    {

        return "Nome:" . $this->nome;
    }

    public function alteraSenha($senha)
    {

        $this->senha = md5($senha);

    }

}


    class Assinatura
    {

        private $id;
        private $id_cliente;
        private $titulo;
        private $valor;


        public function __construct($id = null,$id_cliente = null,$titulo = null,$valor = null) {

            $this->id = $id;
            $this->$id_cliente = $id_cliente;
            $this->titulo = $titulo;
            $this->valor = $valor;



        }












        public function setId($valor)
        {

            $this->id = $valor;
        }

        public function getId($valor)
        {

            return $this->id;
        }


        public function setId_cliente($valor)
        {

            $this->id_cliente = $valor;
        }

        public function getId_cliente($valor)
        {

            return $this->id_cliente;
        }


        public function setTitulo($valor)
        {

            $this->titulo = $valor;
        }

        public function getTitulo($valor)
        {

            return $this->titulo;
        }


        public function setValor($valor)
        {

            $this->valor = $valor;
        }

        public function getValor($valor)
        {

            return $this->valor;
        }


    }




//Objeto sendo criado
    $maria = new Cliente();
    $maria->id = 1;
    $maria->nome = "Maria";
    $maria->email = "maria@email.com";
    //$maria->senha = "Maria";
    $maria->alteraSenha("123456");
    $maria->telefone = "031924912490";
    $maria->assinante = true;


//Objeto sendo criado

    $assinaturaMaria = new Assinatura(1,$maria->id,"Ass. Vip", 85.90);
//    $assinaturaMaria->setId(1);
//    $assinaturaMaria-> setId_cliente($maria->id);
//    $assinaturaMaria-> setTitulo("Ass. Vip");
//    $assinaturaMaria-> setValor(75.90);







    //echo $maria->exibeNome();


    print_r($assinaturaMaria);















