<?php
/**
 * Created by PhpStorm.
 * User: ADOUKO
 * Date: 02/02/2015
 * Time: 10:17
 */

// Les Lignes de formulaires, tabs étant le container
class Pfay_Test_Block_Adminhtml_Test_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('test_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle('Information sur le contact');
    }

    protected function _beforeToHtml()
    {
        $this->addTab('form_section', array(
            'label' => 'Contact Information',
            'title' => 'Contact Information',
            'content' => $this->getLayout()
                //On lui dit que les entrées seront crée grâce au block dans le module Test, qui sera adminhtml_test_edit_tab_form
                ->createBlock('test/adminhtml_test_edit_tab_form')
                ->toHtml()
        ));
        return parent::_beforeToHtml();
    }
}