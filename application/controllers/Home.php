<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Home
 *
 * @author pemaza
 */
class Home  extends CI_Controller{
 
    public function index() {
        
        
        $this->load->view("home");
        
    }
    
    
}
