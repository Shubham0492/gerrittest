<?php
/**
 * Copyright © 2015 Test. All rights reserved.
 */
namespace Test\ShopByBrand\Block\Adminhtml;

class Items extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_controller = 'items';
        $this->_headerText = __('Items');
        $this->_addButtonLabel = __('Re-Sync Brands');
        parent::_construct();
    }
}
