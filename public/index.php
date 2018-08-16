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


$app = new App;



//rotas para compras

$app->get('/', ComprasController::class . ':index');
$app->get('/compras', ComprasController::class . ':index');
$app->get('/compras/detalhe/{id}', ComprasController::class . ':detalhe');
$app->get('/compras/adicionar', ComprasController::class . ':adicionar');
$app->post('/compras', ComprasController::class . ':salvar');
$app->get('/compras/editar/{id}', ComprasController::class . ':editar');
$app->put('/compras/{id}', ComprasController::class . ':atualizar');
$app->delete('/compras/deletar/{id}', ComprasController::class . ':deletar');

//rotas para usuarios
$app->get('/usuarios', UsuariosController::class . ':index');
$app->get('/usuarios/detalhe/{id}', UsuariosController::class . ':detalhe');
$app->get('/usuarios/adicionar', UsuariosController::class . ':adicionar');
$app->post('/usuarios', UsuariosController::class . ':salvar');
$app->get('/usuarios/editar/{id}', UsuariosController::class . ':editar');
$app->put('/usuarios/{id}', UsuariosController::class . ':atualizar');
$app->delete('/usuarios/deletar/{id}', UsuariosController::class . ':deletar');

//rotas para login


$app->get('/login', AuthController::class. ':index');
$app->post('/login', AuthController::class. ':entrar');
$app->get('/logout', AuthController::class. ':sair');

$app->run();






