<?php
/**
 * Created by PhpStorm.
 * User: olegs
 * Date: 16.12.2019
 * Time: 18:06
 */

namespace app\core;


use app\lib\Db;

abstract class Model
{
    public $db;

    public function __construct()
    {
        $this->db = new Db();
    }
}