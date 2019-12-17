<?php 

namespace app\lib;
/**
 * 
 */

use PDO;
class Db
{

    protected $db;

	public function __construct()
    {
        $config = require 'app/config/db.php';
        $this->db = new PDO('mysql:host='. $config['host'] . ';dbname=' . $config['dbname'], $config['user'], $config['pass']);
	}

    public function query( $sql, $params = [] )
    {
        $stmt = $this->db->prepare( $sql);
        if ( !empty($params))
        {
            foreach ($params as $param => $val)
            {

                $stmt->bindValue( ':'.$param, $val);
            }
        }
        $stmt->execute();
        return $stmt;

    }

    public function addMessage( $name, $email, $text)
    {
        $data = [
            'name' => $name ,
            'email' => $email,
            'text' => $text,
                ];
        $stmr = $this->db->prepare( "INSERT INTO message ( NameFO, email, text) VALUES ( :name, :email, :text )");
        $stmr->execute($data);
        return $stmr;
	}


    public function row( $sql, $params = [] )
    {
        $result = $this->query($sql, $params);
        return $result->fetchAll( PDO::FETCH_ASSOC);
	}
    public function column( $sql, $params = [] )
    {
        $result = $this->query($sql, $params);
        return $result->fetchColumn();
    }
}


 ?>