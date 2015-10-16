<?php
class Nibaya_FPBeer_HomeController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout(); 
        $this->getLayout()->getBlock('head')->setTitle($this->__('Phoenix Beer'));
        $this->renderLayout();
    }
}