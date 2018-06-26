<?php
/**
 * Copyright © 2015 Test. All rights reserved.
 */

namespace Test\ShopByBrand\Model\ResourceModel\Items;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Test\ShopByBrand\Model\Items', 'Test\ShopByBrand\Model\ResourceModel\Items');
    }
}
