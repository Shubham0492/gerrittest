<?php
/**
 * Copyright © 2015 Test. All rights reserved.
 */

namespace Test\ShopByBrand\Controller\Adminhtml\Items;

class Edit extends \Test\ShopByBrand\Controller\Adminhtml\Items
{

    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        $model = $this->_objectManager->create('Test\ShopByBrand\Model\Items');

        if ($id) {
            $model->load($id);
            if (!$model->getId()) {
                $this->messageManager->addError(__('This item no longer exists.'));
                $this->_redirect('Test_shopbybrand/*');
                return;
            }
        }
        // set entered data if was error when we do save
        $data = $this->_objectManager->get('Magento\Backend\Model\Session')->getPageData(true);
        if (!empty($data)) {
            $model->addData($data);
        }
        $this->_coreRegistry->register('current_Test_shopbybrand_items', $model);
        $this->_initAction();
        $this->_view->getLayout()->getBlock('items_items_edit');
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Test::base');
        $this->_view->renderLayout();
    }
}
