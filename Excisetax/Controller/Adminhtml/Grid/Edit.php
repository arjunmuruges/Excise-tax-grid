<?php
namespace Alfakher\Excisetax\Controller\Adminhtml\Grid;
use Magento\Framework\Controller\ResultFactory;
class Edit extends \Magento\Backend\App\Action
{

    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->getConfig()->getTitle()->prepend(__(' Excise Tax'));

        return $resultPage;
    }
}?>
