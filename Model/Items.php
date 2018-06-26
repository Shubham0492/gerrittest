<?php
/**
 * Copyright © 2015 Test. All rights reserved.
 */

namespace Test\ShopByBrand\Model;

class Items extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init('Test\ShopByBrand\Model\ResourceModel\Items');
    }
}
