<?php
namespace Alfakher\Excisetax\Model\Config\Source;

use Magento\Directory\Model\ResourceModel\Region\CollectionFactory as RegionCollectionFactory;
use Magento\Framework\Data\OptionSourceInterface;

class StateOptions implements OptionSourceInterface
{
    protected $regionCollectionFactory;

    public function __construct(RegionCollectionFactory $regionCollectionFactory)
    {
        $this->regionCollectionFactory = $regionCollectionFactory;
    }

    public function toOptionArray()
    {
        $options = [];
        $regionCollection = $this->regionCollectionFactory->create();
        $regionCollection->addCountryFilter('US');
        foreach ($regionCollection as $region) {
            $options[] = [
                'label' => $region->getName(),
                'value' => $region->getCode()
            ];
            $extraRegion =      [
                [
                    'label' => 'us virgin islands',
                    'value' => __('US Virgin Islands')
                ] ,
                [
                    'value' => 'international',
                    'label' => __('International')
                ],
                [
                    'value' => 'out of state',
                    'label' => __('Out Of State')
                ]
            ];
        }
        return array_merge($options,$extraRegion);
    }
}
