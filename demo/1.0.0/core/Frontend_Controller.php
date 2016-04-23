<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend_Controller extends MY_Controller
{
    function __construct ()
    {
		parent::__construct();
		$this->load->database();

		//$this->template->set_template('layouts/template');
		$this->template->content->set_template_folder('partials/frondend/pages/');
		$this->template->foot->set_template_folder('partials/frondend/footer/');
		$this->template->head->set_template_folder('partials/frondend/head/');	  

		// Set the title
		$this->template->title = 'Welcome!';

		// Set a partial's CSS and javascript
		$this->template->heads = '';
		// Set a partial's Javascript
		$this->template->js = '';

		// Set a partial's content
		$this->template->footer = 'Made with Twitter Bootstrap';
		
    }
    
    
}