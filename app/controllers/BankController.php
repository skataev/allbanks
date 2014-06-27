<?php

/**
 * Class IndexController
 */
class BankController extends ControllerBase
{
    public function initialize()
    {
        $this->view->setTemplateAfter('main');
        parent::initialize();
    }

    /**
     *
     */
    public function indexAction()
    {
        Phalcon\Tag::setTitle('All Swiss banks, Zurich');
    }

    /**
     *
     */
    public function listAction()
    {

    }
}