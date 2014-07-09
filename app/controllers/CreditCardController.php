<?php

/**
 * Class IndexController
 */
class CreditCardController extends ControllerBase
{
    const PER_PAGE_LIMIT = 16;

    public function initialize()
    {
        $this->view->setTemplateAfter('main');
        parent::initialize();
    }

    /**
     *  главная страница по кредитам
     */
    public function indexAction()
    {
        Phalcon\Tag::setTitle('Credit card');
    }

    /**
     *
     */
    public function itemAction()
    {

    }
}