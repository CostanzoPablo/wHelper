<?php
if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class Internal
{
    private $CI;
    
    /**
    * Constructor
    *
    */
    function __construct()
    {
        $this->CI =& get_instance();
        if (!$this->CI->session->userdata('internal_messages')){
            $this->CI->session->set_userdata('internal_messages', array(
                'warning' => array(),
                'danger' => array(),
                'success' => array(),
                'info' => array()
            ));
        }
    }

    public function push_message($type, $message){
        $temp_messages = $this->CI->session->userdata('internal_messages');
        $temp_messages[$type][] = $message;
        $this->CI->session->set_userdata('internal_messages', $temp_messages);
    }
    public function there_are_messages($type){
        $temp_messages = $this->CI->session->userdata('internal_messages');
        return count($temp_messages[$type]) > 0;
    }
    public function pop_messages($type){
        $temp_messages = $this->CI->session->userdata('internal_messages');
        $temp_type_messages = $temp_messages[$type];
        $temp_messages[$type] = array();
        $this->CI->session->set_userdata('internal_messages', $temp_messages);
        return $temp_type_messages;
    }
}