<?php
/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 10/08/2018
 * Time: 12:18
 */

namespace App\Models;
use Config\Db;

class Model
{
    static public function all()
    {


        $obj = new static;
//        var_dump($obj->table);exit;

        $conn = Db::conexao();
        $select = "select * from ".$obj->table;
        $ret = $conn->query($select);
        $compras = $ret->fetchAll();


        return $compras;
    }

    public function save()
    {


        $atributos = get_object_vars($this);
        unset($atributos['table']);


        $col = "(";
        $val = "(";
        $aux = true;
//faz um loop entre os atributos pegando colunas e valores e concatenando com pontuacao
        foreach ($atributos as $key => $value) {
            if($aux) {
                $aux = false;
                $col .= "`$key`";
                $val .= ":$key";
            }else{

                $col .= ",`$key`";
                $val .= ",:$key";

            }
        }
        $col .= ")";
        $val .= ")";



        $insert = "insert into ".$this->table." ".$col." values ".$val;
        $conn = Db::conexao();
        $stmt = $conn->prepare($insert);

        foreach ($atributos as $key => $value) {
            $stmt->bindParam(':'.$key,$atributos[$key]);

        }
        $stmt->execute();

        return   $conn->lastInsertId();






    }

}