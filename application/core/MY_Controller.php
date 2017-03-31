<?php

/**
 * core/MY_Controller.php
 *
 * Default application controller
 *
 * @author		JLP
 * @copyright           2010-2016, James L. Parry
 * ------------------------------------------------------------------------
 */
class Application extends CI_Controller
{

	/**
	 * Constructor.
	 * Establish view parameters & load common helpers
	 */

	function __construct()
	{
		parent::__construct();

		//  Set basic view parameters
		$this->data = array ();
		$this->data['pagetitle'] = 'Papaya Robot Factory';
		$this->data['ci_version'] = (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>'.CI_VERSION.'</strong>' : '';
	}

	/**
	 * Render this page
	 */
	function render($template = 'template')
	{
            $role = $this->session->userdata('userrole');//get the session role
            //default menu choices with guest options
            $menu_choices = array(
                'menudata' => array(
                    array('page' => 'Home', 'link' => '/'),
                    array('page' => 'About', 'link' => '/About'),
                )
            );
            //menu choices with boss options
            if(strtolower($role) == 'boss'){
                $menu_choices = array(
                    'menudata' => array(
                        array('page' => 'Home', 'link' => '/'),
                        array('page' => 'Parts', 'link' => '/Parts'),
                        array('page' => 'Assembly', 'link' => '/Assembly'),
                        array('page' => 'History', 'link' => '/History'),
                        array('page' => 'Manage', 'link' => '/Manage'),
                        array('page' => 'About', 'link' => '/About'),
                    )
                );
            }
            //menu choices with supervisor options
            else if(strtolower($role) == 'supervisor'){
                $menu_choices = array(
                    'menudata' => array(
                        array('page' => 'Home', 'link' => '/'),
                        array('page' => 'Parts', 'link' => '/Parts'),
                        array('page' => 'Assembly', 'link' => '/Assembly'),
                        array('page' => 'About', 'link' => '/About'),
                    )
                );
            }
            //menu choices with worker options
            else if(strtolower($role) == 'worker'){
                $menu_choices = array(
                    'menudata' => array(
                        array('page' => 'Home', 'link' => '/'),
                        array('page' => 'Parts', 'link' => '/Parts'),
                        array('page' => 'About', 'link' => '/About'),
                    )
                );
            }
            
            //$this->data['menubar'] = $this->parser->parse('_menubar', $this->config->item('menu_boss'),true);
            //parse '_menubar'
            $this->data['menubar'] = $this->parser->parse('_menubar',$menu_choices,true);
            //parse 'pagebody'
            $this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
            //parse 'template'
            $this->parser->parse('template', $this->data);
	}
}
