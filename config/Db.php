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


        $conexao = new \PDO("mysql:host=localhost;dbname=phpoo;charset=utf8", "root","");
        return $conexao;



    }



}