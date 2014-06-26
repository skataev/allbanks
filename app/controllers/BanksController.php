<?php

/**
 * Class IndexController
 */
class BanksController extends ControllerBase
{
    public function initialize()
    {
        $this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('Contact us');
        parent::initialize();
    }

    /**
     *
     */
    public function indexAction()
    {
        print 1;
    }

    /**
     *
     */
    public function listAction()
    {
        print 1;
    }
}