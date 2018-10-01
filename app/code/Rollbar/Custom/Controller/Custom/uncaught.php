<?php
namespace Rollbar\Custom\Controller\Custom;
 
Class Uncaught extends \Magento\Framework\App\Action\Action {
 
    public function __construct(\Magento\Framework\App\Action\Context $context) {
        parent::__construct($context);
    }
 
    public function execute() {
        $x = null;
        $x->foo = 5;
    }   
 
}