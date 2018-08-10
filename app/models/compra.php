<?php
/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 08/08/2018
 * Time: 23:44
 */

namespace App\Models;

use Config\Db;

class Compra {

    static public function all() {


        $conn = Db::conexao();
        $select = "select * from compras";
        $ret = $conn->query($select);
        $compras = $ret->fetchAll();




        return $compras;

    }

}