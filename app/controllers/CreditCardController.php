<?php

/**
 * Class IndexController
 */
class BankController extends ControllerBase
{
    const PER_PAGE_LIMIT = 16;

    public function initialize()
    {
        $this->view->setTemplateAfter('main');
        parent::initialize();
    }

    /**
     *  ������� �������� �� ��������
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