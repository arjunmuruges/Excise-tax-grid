<?php
namespace Alfakher\Excisetax\Model\ResourceModel\Grid;

use Alfakher\Excisetax\Model\Grid;
use Alfakher\Excisetax\Model\ResourceModel\Grid as GridResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {

       $this->_init(Grid::class, GridResourceModel::class);
    }
}
