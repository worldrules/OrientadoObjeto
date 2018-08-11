<?php
/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 08/08/2018
 * Time: 23:53
 */

namespace APP\Controllers;
use Psr\Http\Message\ResponseInterface;


class Controller {

    public function view(String $view, ResponseInterface $response):ResponseInterface
    {

        $pagina = include '../app/views/'.$view.'.php';

        $response->getBody()->getContents($pagina);
        return $response;

    }

    public function layout(String $caminho):void
    {

        $caminho = str_replace(".","/", $caminho);
        include dirname(__FILE__,2)."/views/$caminho.php";
    }


}