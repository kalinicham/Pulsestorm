<?php

//\Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection

namespace Pulsestorm\ToDoCrud\Model\ResourceModel\TodoItem;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    protected function _construct()
    {
        $this->_init('Pulsestorm\ToDoCrud\Model\TodoItem','Pulsestorm\ToDoCrud\Model\ResourceModel\TodoItem');
    }

}