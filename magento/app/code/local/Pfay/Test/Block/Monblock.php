<?php
/**
 * Created by PhpStorm.
 * User: ADOUKO
 * Date: 31/01/2015
 * Time: 19:42
 */

class Pfay_Test_Block_Monblock extends Mage_Core_Block_Template
{
    public function methodblock()
    {
        //on initialize la variable
        $retour='';
        /* on fait une requette : aller chercher Tous les elements
        de la table pfay_test (grace à notre model test/contact
        et les trier par id_pfay_test */
        /*
         c’est que le « test/test » correspond au format « module/entité »,
            où l’entité est le nom de la balise déclarée dans le config.xml.
            C’est d’ailleurs cette balise qui porte à confusion dans le tutoriel ci-dessus,
            on a l’impression qu’il s’agit du nom du module et non de l’entité. */
        $collection = Mage::getModel('test/contact')->getCollection()->setOrder('id_pfay_test','asc');
        /* ensuite on parcours le resultat de la requette et
         avec la fonction getData(), on stocke dans la variable retour
         (pour l’affichage dans le template) les données voulues */
        foreach($collection as $data)
        {
            $retour .= $data->getData('nom').' '.$data->getData('prenom').' '.$data->getData('telephone').'<br />';
        }
        //je renvoi un message de succes a l'utilisateur (juste pour que vous sachiez utiliser la fonction)
        //Mage::getSingleton('adminhtml/session')->addSuccess('Cool Ca marche !!');
        return $retour;
    }

    /* Code qui marche et qu'il faut uiliser au cas où on veut enregistrer des informations dans votre liste
     de n’ importe où dans votre site internet où l'on a inséré le block
    public function save()
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
        //$this->_redirect('test/index/mamethode');
    }*/

}