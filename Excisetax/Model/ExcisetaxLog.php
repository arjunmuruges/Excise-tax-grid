<?php
/**
 * @category Alfakher
 * @package  Alfakherd_Excisetax
 */
declare(strict_types=1);

namespace Alfakher\Excisetax\Model;


class ExcisetaxLog extends \Magento\Framework\Model\AbstractModel
{

    protected function _construct()
    {
        $this->_init('Alfakher\Excisetax\Model\ResourceModel\ExcisetaxLog');
    }
}


