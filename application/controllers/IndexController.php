<?php

class IndexController extends AppController
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
    	$_controller = $this->getRequest()->getControllerName();
		$_action = $this->getRequest()->getActionName();
		    	
    	if($_controller == 'index'){
    		echo "This controller is index";
    	}
    }
    
    public function _indexAction($param) {
    	
    }


}

