<?php
/**
 * Copyright © 2015 Test. All rights reserved.
 */

namespace Test\ShopByBrand\Controller\Adminhtml\Items;

class Index extends \Test\ShopByBrand\Controller\Adminhtml\Items
{
    /**
     * Items list.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Test::base');
        $resultPage->getConfig()->getTitle()->prepend(__('Test ShopByBrand'));
        $resultPage->addBreadcrumb(__('Test'), __('Test'));
        $resultPage->addBreadcrumb(__('Items'), __('ShopByBrand'));
        return $resultPage;
    }
}
