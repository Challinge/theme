<?php
/**
 * Created by PhpStorm.
 * User: ADOUKO
 * Date: 01/02/2015
 * Time: 11:39
 */

// collection pour votre model test/contact.
class Pfay_Test_Model_Mysql4_Contact_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('test/contact');
    }
}