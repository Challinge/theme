<?php
/**
 * Created by PhpStorm.
 * User: ADOUKO
 * Date: 02/02/2015
 * Time: 08:52
 */

// C'est le fichier qui va contenir le formulaire c'est à dire une structure qui va permettre de recevoir des formulaires
class Pfay_Test_Block_Adminhtml_Test_Edit extends Mage_Adminhtml_Block_Widget_Form_Container{

    public function __construct()
    {
        parent::__construct();
        $this->_objectId = 'id';
        //vous remarquerez qu’on lui assigne le même blockGroup que le Grid Container
        $this->_blockGroup = 'test';
        //et le meme controlleur
        $this->_controller = 'adminhtml_test';
        //on definit les labels pour les boutons save et les boutons delete
        $this->_updateButton('save', 'label','save reference');
        $this->_updateButton('delete', 'label', 'delete reference');
    }

    /* Ici,  on regarde si on a transmit un objet au formulaire,
         afin de mettre le bon texte dans le  header (Editer ou
          Ajouter) */
    public function getHeaderText()
    {
        if( Mage::registry('test_data')&&Mage::registry('test_data')->getId())
        {
            return 'Editer la reference '.$this->htmlEscape(
                Mage::registry('test_data')->getTitle()).'<br />';
        }
        else
        {
            return 'Ajouter une reference';
        }
    }
}