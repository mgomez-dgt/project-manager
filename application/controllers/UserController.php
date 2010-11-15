<?php
/**
 * UserController
 * 
 * @author
 * @version 
 */
require_once 'Zend/Controller/Action.php';
class UserController extends Zend_Controller_Action
{
    /**
     * The default action - show the home page
     */
    public function indexAction ()
    {
		echo "Soy User Index Action";    	
    }
    
	public function AddAction ()
    {
		echo "Soy User Add Action";    	
    }
    
    public function EditAction () {
    	echo "Soy User Edit Action";
    }
    
}
