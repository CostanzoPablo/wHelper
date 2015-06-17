<?php

class MY_Form_validation extends CI_Form_validation {

    protected $CI;

    function __construct() {
        parent::__construct();

        $this->CI = & get_instance();
    }
        
    public function alphabetic($str) {
        
        $this->CI->form_validation->set_message('alphabetic', 'El campo %s contiene carácteres no permitidos.');
        
        return (!preg_match('/^[a-z0-9 \.\-\_\/]+$/i', $str))? FALSE : TRUE;
    }
    
    function valid_url($str){
        $this->CI->form_validation->set_message('valid_url', 'El campo %s debe ser una URL válida');
        $pattern = "/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i";
        if (!preg_match($pattern, $str)) {
            return FALSE;
        }

        return TRUE;
    }
    
    function valid_date($str){
        $this->CI->form_validation->set_message('valid_date', 'El campo %s debe ser una fecha válida');        
        $timestamp = DateTime::createFromFormat('!d/m/Y', $str)->getTimestamp();
        return (date('d/m/Y', $timestamp) === $str);
    }
    
    public function less_or_equal_than($str, $compare){
        $this->CI->form_validation->set_message('less_or_equal_than', 'El campo %s debe ser menor o igual a '.$compare);
        
        return is_numeric($str) && floatval($str) <= floatval($compare);
    }
    
    public function greater_or_equal_than($str, $compare){
        $this->CI->form_validation->set_message('greater_or_equal_than', 'El campo %s debe ser mayor o igual a '.$compare);
        
        return is_numeric($str) && floatval($str) >= floatval($compare);
    }
    
    public function in_array($str, $array){        
        $array = explode('|', $array);
        $this->CI->form_validation->set_message('in_array', 'El campo %s debe tener uno de los siguientes valores '.implode(', ', $array). ' y tiene '.$str);
        return in_array($str, $array);
    }

    public function is_array($array){
        $this->CI->form_validation->set_message('is_array', 'El campo %s debe ser un conjunto de valores');
        return is_array($array);
    }
}
