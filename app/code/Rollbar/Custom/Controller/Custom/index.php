<?php
namespace Rollbar\Custom\Controller\Custom;
 
Class Index extends \Magento\Framework\App\Action\Action {
 
    public function __construct(\Magento\Framework\App\Action\Context $context) {
        parent::__construct($context);
    }
 
    public function execute() {
        $x = null;
        $x->foo = 5;
    }
    
    public function cought() {
        try {
            $value = 5 / 0;
        } catch (\Exception $e) {
            echo $e->getMessage();
        }/*
        echo "Custom Module is ready !";
        exit;*/
    }
    public function uncought() {
        $x = null;
        $x->foo = 5;
    }
    
 
}