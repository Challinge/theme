<?php
/**
 * Created by PhpStorm.
 * User: ADOUKO
 * Date: 01/02/2015
 * Time: 14:41
 */

class Pfay_Test_Adminhtml_IndexController extends Mage_Adminhtml_Controller_Action
{
    // Pour intiliser le Menu
    protected function _initAction()
    {
        $this->loadLayout()->_setActiveMenu('test/set_time')
            ->_addBreadcrumb('test Manager','test Manager');
        return $this;
    }

    // Pour charger lelayout
    public function indexAction()
    {
        $this->_initAction();
        $this->renderLayout();
    }

    // Pour éditer
    public function editAction()
    {
        $testId = $this->getRequest()->getParam('id');
        $testModel = Mage::getModel('test/contact')->load($testId);
        if ($testModel->getId() || $testId == 0)
        {
            Mage::register('test_data', $testModel);
            $this->loadLayout();
            $this->_setActiveMenu('test/set_time');
            $this->_addBreadcrumb('test Manager', 'test Manager');
            $this->_addBreadcrumb('Test Description', 'Test Description');
            $this->getLayout()->getBlock('head')
                ->setCanLoadExtJs(true);
            $this->_addContent($this->getLayout()
                ->createBlock('test/adminhtml_test_edit'))
                ->_addLeft($this->getLayout()
                    ->createBlock('test/adminhtml_test_edit_tabs')
                );
            $this->renderLayout();
        }
        else
        {
            Mage::getSingleton('adminhtml/session')
                ->addError('Test does not exist');
            $this->_redirect('*/*/');
        }
    }

    // Pour éditer
    public function newAction()
    {
        $this->_forward('edit');
    }

    // Pour sauvegarder un enregistrement
    public function saveAction()
    {
        if ($this->getRequest()->getPost())
        {
            try {
                $postData = $this->getRequest()->getPost();
                $testModel = Mage::getModel('test/contact');
                if( $this->getRequest()->getParam('id') <= 0 )
                    $testModel->setCreatedTime(
                        Mage::getSingleton('core/date')
                            ->gmtDate()
                    );
                $testModel
                    ->addData($postData)
                    ->setUpdateTime(
                        Mage::getSingleton('core/date')
                            ->gmtDate())
                    ->setId($this->getRequest()->getParam('id'))
                    ->save();
                Mage::getSingleton('adminhtml/session')
                    ->addSuccess('successfully saved');
                Mage::getSingleton('adminhtml/session')
                    ->settestData(false);
                $this->_redirect('*/*/');
                return;
            } catch (Exception $e){
                Mage::getSingleton('adminhtml/session')
                    ->addError($e->getMessage());
                Mage::getSingleton('adminhtml/session')
                    ->settestData($this->getRequest()
                        ->getPost()
                    );
                $this->_redirect('*/*/edit',
                    array('id' => $this->getRequest()
                        ->getParam('id')));
                return;
            }
        }
        $this->_redirect('*/*/');
    }

    // Pour supprimer un enregistrement
    public function deleteAction()
    {
        if($this->getRequest()->getParam('id') > 0)
        {
            try
            {
                $testModel = Mage::getModel('test/contact');
                $testModel->setId($this->getRequest()
                    ->getParam('id'))
                    ->delete();
                Mage::getSingleton('adminhtml/session')
                    ->addSuccess('successfully deleted');
                $this->_redirect('*/*/');
            }
            catch (Exception $e)
            {
                Mage::getSingleton('adminhtml/session')
                    ->addError($e->getMessage());
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
            }
        }
        $this->_redirect('*/*/');
    }
}