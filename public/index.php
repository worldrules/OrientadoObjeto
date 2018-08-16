<?php
/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 08/08/2018
 * Time: 18:12
 */

require '../bootstrap.php';


use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\App;
use App\Controllers\ComprasController;
use App\Controllers\UsuariosController;
use App\Controllers\AuthController;
//phpinfo();


//$app = new App;

$app = new App([

   'settings' => [
       'displayErrorDetails' => true,
       'debug'               => true,

   ]
]);

//rotas para compras

$app->get('https://phpoo.herokuapp.com/', ComprasController::class . ':index');
$app->get('https://phpoo.herokuapp.com/compras', ComprasController::class . ':index');
$app->get('https://phpoo.herokuapp.com/compras/detalhe/{id}', ComprasController::class . ':detalhe');
$app->get('https://phpoo.herokuapp.com/compras/adicionar', ComprasController::class . ':adicionar');
$app->post('https://phpoo.herokuapp.com/compras', ComprasController::class . ':salvar');
$app->get('https://phpoo.herokuapp.com/compras/editar/{id}', ComprasController::class . ':editar');
$app->put('https://phpoo.herokuapp.com/compras/{id}', ComprasController::class . ':atualizar');
$app->delete('https://phpoo.herokuapp.com/compras/deletar/{id}', ComprasController::class . ':deletar');

//rotas para usuarios
$app->get('https://phpoo.herokuapp.com/usuarios', UsuariosController::class . ':index');
$app->get('https://phpoo.herokuapp.com/usuarios/detalhe/{id}', UsuariosController::class . ':detalhe');
$app->get('https://phpoo.herokuapp.com/usuarios/adicionar', UsuariosController::class . ':adicionar');
$app->post('https://phpoo.herokuapp.com/usuarios', UsuariosController::class . ':salvar');
$app->get('https://phpoo.herokuapp.com/usuarios/editar/{id}', UsuariosController::class . ':editar');
$app->put('https://phpoo.herokuapp.com/usuarios/{id}', UsuariosController::class . ':atualizar');
$app->delete('https://phpoo.herokuapp.com/usuarios/deletar/{id}', UsuariosController::class . ':deletar');

//rotas para login


$app->get('https://phpoo.herokuapp.com/login', AuthController::class. ':index');
$app->post('https://phpoo.herokuapp.com/login', AuthController::class. ':entrar');
$app->get('https://phpoo.herokuapp.com/logout', AuthController::class. ':sair');

$app->run();






