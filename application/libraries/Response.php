<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class Response
{
    private $CI;

    /**
    * Constructor
    *
    */
    function __construct()
    {
        $this->CI =& get_instance();  
    }

    public function json($response, $code = 200, $text = ''){
        return $this->CI
                 ->output
                 ->set_content_type('application/json')
                 ->set_status_header($code, $text)
                 ->set_output(json_encode($response));
    }
    public function messages($type, $messages){
       return $this->json(array(
           'mode' => 'messages',
           'type' => $type,
           'messages' => $messages
       ));
    }
}