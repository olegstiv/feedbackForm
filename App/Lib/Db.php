<?php

<<<<<<< HEAD:App/Lib/Db.php
namespace App\Lib;
=======
namespace Lib;
>>>>>>> de5108c15ccf69869f69e3415a486ebe1fa1afaf:Lib/Db.php

use PDO;

class Db
{

    protected $db;

    public function __construct()
    {
        $config = require 'app/config/db.php';
        $this->db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['user'],
            $config['pass']);
    }

    public function query($sql, $params = [])
    {
        $stmt = $this->db->prepare($sql);
        if (!empty($params)) {
            foreach ($params as $param => $val) {
                $val = strip_tags($val);
                $stmt->bindValue(':' . $param, $val);

            }
        }
        // debug($stmt);
        $stmt->execute();
        // $result = $stmt->errorInfo();
        // debug($result);
        return $stmt;

    }




    public function row($sql, $params = [])
    {
        $result = $this->query($sql, $params);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function column($sql, $params = [])
    {
        $result = $this->query($sql, $params);
        return $result->fetchColumn();
    }
}


?>