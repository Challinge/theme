<?php
/**
 * Created by PhpStorm.
 * User: ADOUKO
 * Date: 31/01/2015
 * Time: 14:41
 */

class Pfay_Test_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout(); // search for items to add
        $this->renderLayout(); // Add items
    }

    public function mamethodeAction()
    {
        $this->loadLayout(); // search for items to add
        $this->renderLayout(); // Add items
    }

    public function saveAction()
    {
        //on recuperes les données envoyées en POST
        $nom = ''.$this->getRequest()->getPost('nom');
        $prenom = ''.$this->getRequest()->getPost('prenom');
        $telephone = ''.$this->getRequest()->getPost('telephone');
        //on verifie que les champs ne sont pas vide
        if(isset($nom)&&($nom!='') && isset($prenom)&&($prenom!='')
            && isset($telephone)&&($telephone!='') )
        {
            //on cree notre objet et on l'enregistre en base
            $contact = Mage::getModel('test/contact');
            $contact->setData('nom', $nom);
            $contact->setData('prenom', $prenom);
            $contact->setData('telephone', $telephone);
            $contact->save();
        }
        //on redirige l’utilisateur vers la méthode index du controller indexController
        //de notre module <strong>test</strong>
        $this->_redirect('mamethode/');
    }
}