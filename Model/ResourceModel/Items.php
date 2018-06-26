<?php
/**
 * Copyright © 2015 Test. All rights reserved.
 */

namespace Test\ShopByBrand\Model\ResourceModel;

class Items extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Model Initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Test_shopbybrand_items', 'id');
    }
}
