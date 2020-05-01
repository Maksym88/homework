<?php

namespace Controller;

use Framework\Controller\AbstractController;

class Homework extends AbstractController
{
    public function index()
    {
        return $this->view->generate('framework/homework.phtml', ['content' => __METHOD__]);
    }
}