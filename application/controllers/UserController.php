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
		echo "Soy User Controller";    	
    }
}
