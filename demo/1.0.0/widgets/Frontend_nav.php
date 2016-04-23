<?php

/*
 * Demo widget
 */
class Frontend_nav extends Widget {

    public function display($data) {
        
        if (!isset($data['items'])) {
            $data['items'] = array('Home', 'About', 'Contact');
        }
        $this->view('/widgets/frontend_nav', $data);
    }
    
}