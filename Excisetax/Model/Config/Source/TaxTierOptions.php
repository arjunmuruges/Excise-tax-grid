<?php
namespace Alfakher\Excisetax\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class TaxTierOptions implements OptionSourceInterface
{
    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => 'tier1',
                'label' => __('Tier 1')
            ],
            [
                'value' => 'tier2',
                'label' => __('Tier 2')
            ],
            [
                'value' => 'tier3',
                'label' => __('Tier 3')
            ],
            [
                'value' => 'tier4',
                'label' => __('Tier 4')
            ],
            [
                'value' => 'tier5',
                'label' => __('Tier 5')
            ],
            [
                'value' => 'weight_tax',
                'label' => __('Weight TAX')
            ],
            [
                'value' => 'unit',
                'label' => __('Unit')
            ],
            [
                'value' => 'selling_price',
                'label' => __('Selling Price')
            ],
            [
                'value' => 'na',
                'label' => __('N/A')
            ],
        ];
    }
}
