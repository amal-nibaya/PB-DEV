<?php
class Nibaya_FPBeer_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout(); 
        $this->getLayout()->getBlock('head')->setTitle($this->__('Welcome - Phoenix Beer'));
        $this->renderLayout();
    }
    public function privacyAction()
    {
        $this->loadLayout(); 
        $this->getLayout()->getBlock('head')->setTitle($this->__('Privacy - Phoenix Beer'));
        $this->renderLayout();
    }
    public function licenseAction()
    {
         $this->loadLayout(); 
        $this->getLayout()->getBlock('head')->setTitle($this->__('License - Phoenix Beer'));
        $this->renderLayout();
    }
    public function disclaimerAction()
    {
        $this->loadLayout(); 
        $this->getLayout()->getBlock('head')->setTitle($this->__('Disclaimer - Phoenix Beer'));
        $this->renderLayout();
    }
    public function contactusAction()
    {
        $this->loadLayout(); 
        $this->getLayout()->getBlock('head')->setTitle($this->__('Contact Us - Phoenix Beer'));
        $this->renderLayout();
    }
}