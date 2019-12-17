<?php
/**
 * Created by PhpStorm.
 * User: olegs
 * Date: 16.12.2019
 * Time: 18:02
 */

namespace app\models;


use app\core\Model;

class Main extends Model
{
    public $error;
    public $validIsEmail;
    public $validIsName;
    public $validIsMessage;
    public function getNews()
    {
        $result = $this->db->row('SELECT title, description FROM news');
//        return $result;

    }

    public function addMessage($post)
    {
        $nameLen = strlen($post['name']);
        $massageLen = strlen($post['message']);

        if (strlen($nameLen < 3 or $nameLen > 50 ))
        {
            $this->validIsName = false;
        }else{
            $this->validIsName = true;
        }

        if (preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $post['email']))
        {
            $this->validIsEmail = true;
        } else {
            $this->validIsEmail = false;
        }

        if (strlen($massageLen < 3 or $massageLen > 255 ))
        {
            $this->validIsMessage = false;
        }else{
            $this->validIsMessage = true;
        }


        return true;


    }
}
