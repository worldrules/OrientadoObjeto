<?php
/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 08/08/2018
 * Time: 23:44
 */

namespace App\Models;

use Config\Db;

class Usuario extends Model
{
    protected $table = "usuarios";
    protected $primary_key = "id";

}