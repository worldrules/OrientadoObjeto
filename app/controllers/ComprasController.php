<?php
/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 08/08/2018
 * Time: 19:32
 */
namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;




class ComprasController {


    //Cria a pagina e exibi na view
    public function index(ServerRequestInterface $request, ResponseInterface $response) {

        $compras = [

            ["titulo"=>"Carvão","desc"=>"5kg"],
            ["titulo"=>"Arroz","desc"=>"1kg"],
            ["titulo"=>"Cerveja","desc"=>"Latão"]

        ];



        $pagina = include '../app/views/home.php';

        $response->getBody()->getContents($pagina);
        return $response;
    }


}