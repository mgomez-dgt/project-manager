<?php
/**
 * AppController
 * 
 * @author
 * @version 
 */
require_once 'Zend/Controller/Action.php';
class AppController extends Zend_Controller_Action
{
    public function __construct($request, $response){
    	parent::__construct($request, $response);
    }
}
