<?php
/**
 * UserController
 * 
 * @author
 * @version 
 */
require_once 'Zend/Controller/Action.php';
class UserController extends AppController
{
    /**
     * The default action - show the home page
     */
    public function indexAction ()
    {
    	
    }
    
    /**
     * Manager Add Action
     */
	public function AddAction ()
    {
		echo "Soy User Add Action";    	
    }
    
    /**
     * Manage edit action
     */
    public function EditAction () {
    	echo "Soy User Edit Action";
    }
    
    
	    
    
}
