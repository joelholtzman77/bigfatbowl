<?php
namespace Training\Test\Controller\Action;
class Action extends \Magento\Framework\App\Action\Action
{
	
	public function __construct(
        \Magento\Framework\App\Action\Context $context
    ) {
        parent::__construct($context);
    }
    
    
public function execute() {
$this->getResponse()->appendBody("HELLO WORLD");
}
}