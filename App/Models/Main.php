<?php

namespace Models;

use Core\Model;

class Main extends Model
{
    public function addMessage($post)
    {
        $nameLen = strlen($post['name']);
        $massageLen = strlen($post['message']);
        $error = [];
        if (strlen($nameLen < 3 or $nameLen > 50)) {
            $this->validIsName = false;
            array_push($error, ['type' => 'validIsName', 'val' => false]);
        } else {
            $this->validIsName = true;
        }

        if (preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i",
            $post['email'])) {
            $this->validIsEmail = true;
        } else {
            $this->validIsEmail = false;
            array_push($error, ['type' => 'validIsEmail', 'val' => false]);
        }

        if (strlen($massageLen < 3)) {
            $this->validIsMessage = false;
            array_push($error, ['type' => 'validIsMessage', 'val' => false]);
        } else {
            $this->validIsMessage = true;
        }

        if ($this->validIsName and $this->validIsEmail and $this->validIsMessage) {
            $data = [
            'name' => $post['name'],
            'email' => $post['email'],
            'text' => $post['message'],
        ];
            $result = $this->db->query("INSERT INTO message ( nameFO, email, text) VALUES ( :name, :email, :text )", $data);
            $_POST = null;
            array_push($error, ['result' => 'sucess']);
            echo json_encode($error);
            return true;
        } else {
            array_push($error, ['result' => 'error']);
            echo json_encode($error);
            return false;
        }
    }

    public function getMessage()
    {
        $result = $this->db->row("SELECT * FROM message");
        return $result;
    }
}
