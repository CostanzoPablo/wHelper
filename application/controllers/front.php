<?php
 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Front extends CI_Controller {

    public function index() {

        $this->load->model('user_model');
        
        $params['title'] = "wHelper - Login";

        if (!$this->session->userdata('user') AND $this->input->post('user')){
            $login = $this->user_model->login($this->input->post('user'), $this->input->post('pass'));
            if ($login){
                $this->session->set_userdata('user', $login);
            }else{
                $params["error"] = "User name or password incorrect !";
            }
        }

        if (!$this->session->userdata('user')){
            $this->twig->cache_display(strtolower(__CLASS__) . '/login', $params);    
        }else{
            redirect('panel');    
        }
    }

    public function logout() {
        $this->session->set_userdata('user', '');
        redirect('front');    
    }

}
