<?php

<<<<<<< HEAD:App/Core/Model.php
namespace App\Core;

use App\Lib\Db;
=======
namespace Core;

use Lib\Db;
>>>>>>> de5108c15ccf69869f69e3415a486ebe1fa1afaf:Core/Model.php

abstract class Model
{
    public $db;

    public function __construct()
    {
        $this->db = new Db();
    }
}