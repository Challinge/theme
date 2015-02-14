<?php
/**
 * Created by PhpStorm.
 * User: ADOUKO
 * Date: 02/02/2015
 * Time: 08:59
 */

// Le formulaire pour enregistrer des données
class Pfay_Test_Block_Adminhtml_Test_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form( // objet de type Varien_Data_Form qui est le type « standard » de formulaire magento
            array(
                'id' => 'edit_form',

                // On définit l’attribut action du formulaire grâce à la fonction getUrl()
                'action' => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))
                ),

                // On définit la méthode d’envoie des information
                'method' => 'post',
            )
        );
        $form->setUseContainer(true);
        $this->setForm($form);
        return parent::_prepareForm();
    }
}