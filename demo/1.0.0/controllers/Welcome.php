<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Frontend_Controller {

	
	public function index()
	{
		// Load a view in the content partial
        $this->template->content->view('hero', array('title' => 'Hello, world!'));
		
        $news = array(); // load from model (but using a dummy array here)
        //$this->template->content->view('news', $news);
        
        
		$this->template->heads = 'head';
		$this->template->js = 'footer';
        // Publish the template
        $this->template->publish();
	}
	
}
