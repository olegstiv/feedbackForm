<?php
/**
 * Created by PhpStorm.
 * User: olegs
 * Date: 16.12.2019
 * Time: 14:19
 */

namespace app\controllers;
use app\core\Controller;

class MainController extends Controller
{
    public $vars = [];
    public function indexAction(){
//        $result = $this->model->getNews();

        if (!empty($_POST))
        {
            $this->addMessage($_POST);

        }else
        {
            $this->vars = [
                'validEmail' => true,
                'validName' => true,
                'validMessage' => true,
                'textMessage' => '',
                'textName' => '',
                'textEmail' => ''
            ];
        }
        $this->view->render('Форма обратной связи', $this->vars );
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