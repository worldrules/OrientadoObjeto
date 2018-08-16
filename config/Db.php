<?php
/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 09/08/2018
 * Time: 18:10
 */

namespace Config;

class Db
{

    public static function conexao()

    {


        $conexao = new \PDO("mysql:host=us-cdbr-iron-east-01.cleardb.net;dbname=heroku_4a83a6fa9a0d416;charset=utf8", "b6cf332962ee9a","e9ff57e0");
        return $conexao;



    }



}