<?php

namespace Alfakher\Excisetax\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Grid extends AbstractDb
{

    protected function _construct()
    {
        $this->_init('alfakher_excise_rules_data', 'id');
    }
}
