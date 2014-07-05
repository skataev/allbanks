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
     *  главная страница по кредитам
     */
    public function indexAction()
    {
        Phalcon\Tag::setTitle('All Swiss banks, Zurich');
        $page = $this->request->getQuery("page", null, 1);

        $searchCondition = [];
        if ($this->request->getQuery("search", null, '')) {
            $searchCondition['conditions'] = 'title LIKE ?1';
            $searchCondition['bind']['1'] = '%' . $this->request->getQuery('search', null, '') . '%';
        }

        $banks = Bank::find(
            $searchCondition
            +
            [
                'limit' => self::PER_PAGE_LIMIT,
                'offset' => ($page - 1) * self::PER_PAGE_LIMIT
            ]
        );

        $this->view->setVar('banksList', $banks);
        $this->view->setVar('search', $this->request->getQuery("search", null, 'Suchbegriff...'));
        $this->view->setVar(
            'paginator',
            \Paginator\Writer::get_nav_list(count(Bank::find()), $page, '/banks/?page=%p', self::PER_PAGE_LIMIT)
        );
    }

    /**
     *
     */
    public function itemAction()
    {

    }
}