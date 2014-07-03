<?php

/**
 * Class IndexController
 */
class BankController extends ControllerBase
{
    const PER_PAGE_LIMIT = 4;

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
        $page = $this->request->getQuery("page", null, 1);

        $banks = Bank::find([
            'limit' => self::PER_PAGE_LIMIT,
            'offset' => ($page - 1) * self::PER_PAGE_LIMIT
        ]);
        $this->view->setVar('banksList', $banks);
        $this->view->setVar('banksCountAll', count(Bank::find()));
    }

    /**
     *
     */
    public function listAction()
    {

    }
}