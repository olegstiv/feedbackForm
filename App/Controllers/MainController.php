<?php

namespace Controllers;

use Core\Controller;

class MainController extends Controller
{
    public $vars = [];

    public function indexAction()
    {

        if (!empty($_POST)) {
            $this->addMessage($_POST);

        } else {
            $this->vars = [
                'validEmail' => true,
                'validName' => true,
                'validMessage' => true,
                'textMessage' => '',
                'textName' => '',
                'textEmail' => ''
            ];
        }


        $result = $this->model->getMessage();
        
        $this->view->render('Форма обратной связи', $this->vars, $result);
    }

    public function addMessage()
    {
        $this->model->addMessage($_POST);

        $this->vars = [
            'validEmail' => $this->model->validIsEmail,
            'validName' => $this->model->validIsName,
            'validMessage' => $this->model->validIsMessage,
            'textMessage' => $_POST['message'],
            'textName' => $_POST['name'],
            'textEmail' => $_POST['email']
        ];


    }


}