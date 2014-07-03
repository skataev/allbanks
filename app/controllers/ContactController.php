<?php

/**
 * Class ContactController
 */
class ContactController extends ControllerBase
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
        Phalcon\Tag::setTitle('Contact');
    }
}