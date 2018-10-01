<?php
namespace Rollbar\Custom\Controller\Custom;
 
Class Caught extends \Magento\Framework\App\Action\Action {
 
    public function __construct(\Magento\Framework\App\Action\Context $context) {
        parent::__construct($context);
        
    }
 
    public function execute() {
        try {
            $value = 5 / 0;
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }   
 
}