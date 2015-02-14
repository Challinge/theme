<?php
/**
 * Created by PhpStorm.
 * User: ADOUKO
 * Date: 01/02/2015
 * Time: 11:34
 */

class Pfay_Test_Model_Mysql4_Contact extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {
        $this->_init('test/contact', 'id_pfay_test'); //indique a Magento que le model Contact.php va utiliser comme clef primaire le champ id_pfay_test
    }
}