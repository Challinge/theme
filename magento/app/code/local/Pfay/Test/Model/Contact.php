<?php
/**
 * Created by PhpStorm.
 * User: ADOUKO
 * Date: 01/02/2015
 * Time: 11:27
 */

// C'est le modèle
class Pfay_Test_Model_Contact extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('test/contact'); //c’est une entitée test de votre module test
    }
}