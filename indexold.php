<?php


require __DIR__ . '/vendor/autoload.php';

use App\Helpers\Util;
use Config\SiteInfo;







echo "Olá PHP Orientado ao Objeto" . "</br>";


/**
 * @param $valor
 * @return string
 */
function exibeNome($valor) {
        return 'nome' . $valor;

    }

//    echo exibeNome($valor);



//// faz o load automatico das classes que estão na raiz ou no diretório informado
//spl_autoload_register(function ($class_name) {
//
//  if(file_exists($class_name . '.php')) {
//
//      include $class_name . '.php';
//  }elseif (file_exists('app/' . $class_name . '.php')) {
//
//      include 'app/' . $class_name . '.php';
//
//
//  }
//
//});






interface IUsuario
{
    public function alteraSenha($senha);
    public function getNome();
    public function getTelefone();
}



abstract class Usuario implements IUsuario {
//Atributos - Propriedades

    public $id;
    public $email;
    public $nome;
//    private $senha;
    protected $senha;
    public $telefone;
    public $assinante;

    public function alteraSenha($senha)
    {

        $this->senha = md5($senha);

    }

    public function getTelefone()
    {
        return $this->telefone;

    }

    abstract public function getNome();


    }





//HERANÇA DE CLASSE >>>>
    class Admin extends Usuario implements IUsuario

{

    public function setSenha($senha) {

        $senha = $senha.$this->email;
        parent::alteraSenha($senha);
    }

    public function getSenha() {

        return $this->senha;

    }

    public function getNome()
    {
        return $this->nome;
    }

    }

class Gerente extends Usuario implements IUsuario {

    public function getNome()
    {
        return $this->nome;
    }




}

class Vendedor extends Usuario implements IUsuario {
//Atributos - Propriedades

    public function getNome()
    {
        return $this->nome;
    }

  }





class Cliente extends Usuario implements IUsuario
    {
//Atributos - Propriedades

    public $assinante;

//Métodos
    public function exibeNome()
    {

        return "Nome:" . $this->nome;
    }


    public function getNome()

    {
        return $this->nome;
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


        public function exibeAssinatura() {

            $html = "<p>";
            $html .= "<b>Id: </b>$this->id";
            $html .= "</p>";


            $html .= "<p>";
            $html .= "<b>Id do Cliente: </b>".$this->id_cliente;
            $html .= "</p>";

            $html .= "<p>";
            $html .= "<b>Título: </b>".$this->titulo;
            $html .= "</p>";

            $html .= "<p>";
            $html .= "<b>Valor: </b>".Util::trataValor($this->valor);
            $html .= "</p>";

            echo $html;
        }

            private function trataValor($valor) {

                return "R$ " . number_format($valor, 2,',', '.');

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

    $assinaturaMaria = new Assinatura(1,$maria->id,"Ass. Vip", 95.90);

    $murilo = new Admin();
    $murilo->id = 1;
    $murilo->nome = "Murilo";
    $murilo->email = "murilo@email.com";
    $murilo->telefone = 91274981254;
    $murilo->setSenha('1235415');

    echo "senha: ". $murilo->getSenha();


    var_dump($murilo);

//    $assinaturaMaria->setId(1);
    $assinaturaMaria-> setId_cliente($maria->id);
//    $assinaturaMaria-> setTitulo("Ass. Vip");
//    $assinaturaMaria-> setValor(75.90);



    $assinaturaMaria->exibeAssinatura();


    $gustavo = new Vendedor();
    $gustavo->id = 1;
    $gustavo->nome = "Gustavo";
    $gustavo->email = "gustavo@email.com";
    $gustavo->telefone = 42141204012040;
    $gustavo->alteraSenha('1235415');


    echo 'Nome do Site:' . SiteInfo::$nome;
    echo '<br>';
    echo 'Nome do Site:' . SiteInfo::$descricao;






