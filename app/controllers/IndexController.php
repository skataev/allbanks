<?php

/**
 * Class IndexController
 */
class IndexController extends ControllerBase
{
    public function initialize()
    {
        $this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('All Swiss banks, credits, credit cards, deposits');
        parent::initialize();
    }

    /**
     *
     */
    public function indexAction()
    {

    }
}