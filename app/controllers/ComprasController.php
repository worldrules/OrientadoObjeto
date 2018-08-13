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


    public function detalhe(ServerRequestInterface $request, ResponseInterface $response) {

        $id = $request->getAttribute('id');
        $compra = Compra::find($id);
        $this->compra = $compra;

        return $this->view('compras/show', $response);
    }


    public function adicionar(ServerRequestInterface $request, ResponseInterface $response) {


    return $this->view('compras/create', $response);
}

    public function salvar(ServerRequestInterface $request, ResponseInterface $response)
    {
        $dados = $request->getParsedBody();
        $compra = new Compra;
        $compra->titulo = $dados['titulo'];
        $compra->desc = $dados['desc'];
        $objCompra = $compra->save();



        return $response->withRedirect('/compras');


    }



    public function editar(ServerRequestInterface $request, ResponseInterface $response) {

        $id = $request->getAttribute('id');
        $compra = Compra::find($id);
        $this->compra = $compra;


        return $this->view('compras/edit', $response);
    }

    public function atualizar(ServerRequestInterface $request, ResponseInterface $response)
    {


        $dados = $request->getParsedBody();
        $id = $request->getAttribute('id');
        $compra = Compra::find($id);



        //        $compra = new Compra;



        $compra->titulo = $dados['titulo'];
        $compra->desc = $dados['desc'];
        $objCompra = $compra->save();



        return $response->withRedirect('/compras');


    }



    public function deletar(ServerRequestInterface $request, ResponseInterface $response)
    {


        $id = $request->getAttribute('id');
        $compra = Compra::find($id);
        $ok = $compra->delete();



        return $response->withRedirect('/compras');


    }




}