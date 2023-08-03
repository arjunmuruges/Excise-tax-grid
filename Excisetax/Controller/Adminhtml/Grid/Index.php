<?php

namespace Alfakher\Excisetax\Controller\Adminhtml\Grid;

class Index extends \Magento\Backend\App\Action
{

    protected $_resultPageFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
        parent::__construct($context);
        $this->_resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {

        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->_resultPageFactory->create();

//        $resultPage->setActiveMenu('Alfakher_Grid::grid_list');

        $resultPage->getConfig()->getTitle()->prepend(__('Excise Tax'));

        return $resultPage;
    }


    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Alfakher_Excisetax::grid_list');
    }
}
