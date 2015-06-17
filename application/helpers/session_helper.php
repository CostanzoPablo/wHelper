<?php
if (!function_exists('has_roles')){
    function has_roles($roles, $optional = false){
        if (!is_array($roles)){
            $roles = array($roles);
        }
        $someone = false;
        foreach($roles as $role){
            if (!in_array($role, get_user()->roles) && !$optional){                
                return false;
            }
            else{
                $someone = true;
            }
        }
        return $someone;
    }
}
if (!function_exists('require_admin')){
    function require_admin(){
        if (!is_admin()){
            show_404();
        }
    }
}
if (!function_exists('is_admin')){
    function is_admin(){
        return get_user() && (has_roles(array(ROLE_ADMIN,ROLE_SUPERADMIN), HAS_ROLE_OPTIONAL));
    }
}
if (!function_exists('confirmed')){
    function confirmed(){
        return !is_null(get_user()->confirmed_at);
    }
}
if (!function_exists('is_logged')){
    function is_logged(){
        $_CI =& get_instance();    
        $now = new \DateTime();
        $_15min = 15 * 60 * 60;
        return (get_user() != false && $now->getTimestamp() <= $_CI->session->userdata('last_refresh') + $_15min);
    }
}
if (!function_exists('require_logged_in')){
    function require_logged_in($roles = array(ROLE_USER), $optional = false){   
        $_CI =& get_instance();
        if (!is_logged()){
            $_CI->internal->push_message('info', 'Para acceder aquí necesitas estar logueado');
            redirect('/');
        }
        $_CI->session->set_userdata('last_refresh', get_date()->getTimestamp());
        if (!has_roles($roles, $optional)){
            $_CI->internal->push_message('danger', 'No se tienen permisos para acceder aquí');
            redirect('/');
        }
    }
}
if (!function_exists('require_not_logged')){
    function require_not_logged(){
        if (is_logged()){
            redirect('/');
        } 
    }
}
if (!function_exists('require_ajax_request')){
    function require_ajax_request(){
        $_CI =& get_instance();
        if (!$_CI->input->is_ajax_request()){
            show_404();
        }
    }
}
if (!function_exists('get_user')){
    function get_user(){
        $_CI =& get_instance();
        return $_CI->session->userdata('user');
    }
}
if (!function_exists('restrict_ip')){
    function restrict_ip($ip){
        $_CI =& get_instance();
        if (is_array($ip)){
            if (!in_array($_CI->input->ip_address(), $ip)){
                show_404();
            }
        }
        else{
            if ($_CI->input->ip_address() != $ip){
                show_404();
            }
        }
    }
}
if (!function_exists('set_user_attr')){
    function set_user_attr($key, $value){
        $user = get_user();
        $_CI =& get_instance();
        $user->$key = $value;
        $_CI->session->set_userdata('user', $user);
    }
}
if (!function_exists('cron_require')){
    function cron_require(){
        $_CI =& get_instance();
        if ($_CI->input->get('key') !== CRON_HASH){
            show_404();
        }
    }
}
if (!function_exists('form_errors')){
    function form_errors(){
        $result = array();
        foreach($_POST as $key => $value){
            if (form_error($key)){
                $result[] = form_error($key);
            }
        }
        return $result;
    }
}
if (!function_exists('get_input')){
    function get_input($input){             
        $_CI =& get_instance();
        return $_CI->input->get($input);
    }
}
if (!function_exists('post_input')){
    function post_input($input){             
        $_CI =& get_instance();
        return $_CI->input->post($input);
    }
}