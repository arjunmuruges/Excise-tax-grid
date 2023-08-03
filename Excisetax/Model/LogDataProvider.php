<?php
/**
 * @category Alfakher
 * @package  Alfakherd_Excisetax
 */
declare(strict_types=1);

namespace Alfakher\Excisetax\Model;

use Alfakher\Excisetax\Model\ResourceModel\ExcisetaxLog\CollectionFactory;

class LogDataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{

    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $gridCollectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $gridCollectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    public function getData()
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }

        $items = $this->collection->getItems();
        $this->loadedData = array();
        /** @var Customer $customer */
        foreach ($items as $contact) {
            // notre fieldset s'apelle "contact" d'ou ce tableau pour que magento puisse retrouver ses datas :
            $this->loadedData[$contact->getId()] = $contact->getData();
        }


        return $this->loadedData;

    }
}
