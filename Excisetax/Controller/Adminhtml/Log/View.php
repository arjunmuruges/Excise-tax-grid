<?php
namespace Alfakher\Excisetax\Controller\Adminhtml\Log;
use Magento\Framework\Controller\ResultFactory;
class View extends \Magento\Backend\App\Action
{

    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->getConfig()->getTitle()->prepend(__(' Excise Tax'));

//        die('View');

        return $resultPage;
    }
}?>
