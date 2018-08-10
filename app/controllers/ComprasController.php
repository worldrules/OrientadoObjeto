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
use App\Models\Compra;




class ComprasController extends Controller{




    //Cria a pagina e exibi na view
    public function index(ServerRequestInterface $request, ResponseInterface $response) {

        $compras = Compra::all();


        $this->compras = $compras;

        return $this->view('compras/index', $response);
    }




}