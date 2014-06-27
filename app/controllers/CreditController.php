<?php

/**
 * Class CreditController
 */
class CreditController extends ControllerBase
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
        Phalcon\Tag::setTitle('Credits');
    }

    /**
     *
     */
    public function listAction()
    {
        print 1;
    }

    /**
     *
     */
    public function searchAction()
    {
        print 1;
    }

    /**
     *
     */
    public function itemAction()
    {
        print 1;
    }
}