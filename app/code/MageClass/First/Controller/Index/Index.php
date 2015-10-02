<?php 

namespace MageClass\First\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $_test;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \MageClass\First\Model\Test $test,
        
        # Let's load a product model
        
        \Magento\Catalog\Model\ProductFactory $productFactory
        
	) {
    	$this->_test = $test;
    	# Reference this product factory object
    	
    	$this->_productFactory = $productFactory;
    	
        parent::__construct($context);
    }
    
    public function execute()
    {  
      #  echo 'Hello World';
      
      # Going to load the product name at this point
      
      $product = $this->_productFactory->create();
      $product->load(4);
      echo $product->getName();
    }
}