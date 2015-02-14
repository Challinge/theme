<?php
/**
 * Created by PhpStorm.
 * User: ADOUKO
 * Date: 02/02/2015
 * Time: 08:46
 */

// Le controlleur du Grid
class Pfay_Test_Block_Adminhtml_Test_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('contactGrid');
        $this->setDefaultSort('id_pfay_test');
        $this->setDefaultDir('DESC');
        $this->setSaveParametersInSession(true);
    }

    // On configure notre Grid magento en lui indiquant la collection a utiliser pour interagir avec la base de donnée
    protected function _prepareCollection()
    {
        $collection = Mage::getModel('test/contact')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    // on lui indique quelles colonnes de notre table afficher
    protected function _prepareColumns()
    {
        // addColumn avec du style pour ajouter un colonne au Grid
        $this->addColumn('id_pfay_test',
            array(
                'header' => 'ID',
                'align' =>'right',
                'width' => '50px',
                'index' => 'id_pfay_test',
            ));
        $this->addColumn('nom',
            array(
                'header' => 'nom',
                'align' =>'left',
                'index' => 'nom',
            ));
        $this->addColumn('prenom', array(
            'header' => 'prenom',
            'align' =>'left',
            'index' => 'prenom',
        ));
        $this->addColumn('telephone', array(
            'header' => 'telephone',
            'align' =>'left',
            'index' => 'telephone',
        ));
        return parent::_prepareColumns();
    }
    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }
}