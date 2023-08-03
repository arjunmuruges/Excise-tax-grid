<?php

namespace Alfakher\Excisetax\Controller\Adminhtml\Grid;
class Save extends \Magento\Backend\App\Action
{

    var $gridFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Alfakher\Excisetax\Model\GridFactory $gridFactory
    ) {
        parent::__construct($context);
        $this->gridFactory = $gridFactory;
    }

    public function execute()
    {


        $data = $this->getRequest()->getPostValue();
        if (!$data) {
            $this->_redirect('excisetax/grid/edit');
            return;
        }
        try {
            $rowData = $this->gridFactory->create();
            $rowData->setData($data);
            if (isset($data['id'])) {
                $rowData->setId($data['id']);
            }
            $rowData->save();
            $this->messageManager->addSuccess(__('ExciseTax  has been successfully saved.'));
        } catch (\Exception $e) {
            $this->messageManager->addError(__($e->getMessage()));
        }
        $this->_redirect('excisetax/grid/index');
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Alfakher_Excisetax::save');
    }
}
