<?php
 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Panel extends CI_Controller {

    public function index() {

        $this->load->model('user_model');
        $this->load->model('menu_model');

        $params['title'] = "wHelper - Panel";

        if (!$this->session->userdata('user')){
            redirect('front');
        }else{
        	$params["user"] = $this->session->userdata('user');
        	$params["menu"] = $this->menu_model->get_menu(0);
            $this->twig->cache_display(strtolower(__CLASS__) . '/index', $params);            	
        }
    }

    public function get($id, $json = false) {

        $this->load->model('user_model');
        $this->load->model('menu_model');

        if (!$this->session->userdata('user')){
            $params["error"] = "Not logged in !";
        }else{
            if ($json){
                $menu = $this->menu_model->get_menu($id);
                foreach ($menu as $key => $value) {
                    $menu[$key]['childrens'] = $this->menu_model->get_menu($value["id"]);
                }
                $this->response->json($menu);
            }else{
                $params["parent"] = $id;
                $params["menu"] = $this->menu_model->get_menu($id);
                $this->twig->cache_display(strtolower(__CLASS__) . '/get', $params);   
            }         
        }
    }

    public function new_menu(){
        $this->load->model('user_model');
        $this->load->model('menu_model');

        $params['title'] = "wHelper - Panel New";

        if (!$this->session->userdata('user')){
            redirect('front');
        }else{
            $this->menu_model->new_menu($this->input->post('title'), $this->input->post('parent'), $this->input->post('text'));
            redirect('panel');              
        }
    }

    public function delete_menu($id) {

        $this->load->model('user_model');
        $this->load->model('menu_model');

        if (!$this->session->userdata('user')){
            $params["error"] = "Not logged in !";
        }else{
            $this->menu_model->delete_menu($id);
            $this->menu_model->delete_childrens($id);
            redirect('panel');
        }
    }    

    public function edit_menu($id) {

        $this->load->model('user_model');
        $this->load->model('menu_model');

        if (!$this->session->userdata('user')){
            $params["error"] = "Not logged in !";
        }else{
            $this->menu_model->update_menu($id, $this->input->post('title'), $this->input->post('text'));
            redirect('panel');
        }
    }        
}
