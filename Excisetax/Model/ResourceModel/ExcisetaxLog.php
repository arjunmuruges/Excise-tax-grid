<?php
/**
 * @category Alfakher
 * @package  Alfakherd_Excisetax
 */
declare(strict_types=1);

namespace Alfakher\Excisetax\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class ExcisetaxLog extends AbstractDb
{

    protected function _construct()
    {
        $this->_init('alfakher_excise_log', 'id');
    }
}
