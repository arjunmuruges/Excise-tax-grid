<?php
/**
 * @category Alfakher
 * @package  Alfakherd_Excisetax
 */
declare(strict_types=1);

namespace Alfakher\Excisetax\Model\ResourceModel\ExcisetaxLog;

use Alfakher\Excisetax\Model\ExcisetaxLog;
use Alfakher\Excisetax\Model\ResourceModel\ExcisetaxLog as LogResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {

        $this->_init(ExcisetaxLog::class, LogResourceModel::class);
    }
}
