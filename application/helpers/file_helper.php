<?php
if (!function_exists('get_file')){
    function get_image($file_id){        
        $_CI =& get_instance();
        $_CI->load->model('file_model');
        $file = $_CI->file_model->get_filename($file_id);
        if ($file){
            return '/' . IMAGE_UPLOAD_PATH . $file;
        }
        else{
            return false;
        }
    }
}
if (!function_exists('valid_external_image')){
    function valid_external_image($url){
        return is_array(@getimagesize($url));
    }
}
if (!function_exists('image_upload_config')){
    function image_upload_config(){
        return array(
            'upload_path' => FCPATH . FILE_TEMP_UPLOAD_PATH,
            'allowed_types' => IMAGE_UPLOAD_EXTENSIONS,
            'max_size' => IMAGE_UPLOAD_MAX_SIZE,
            'max_width' => IMAGE_UPLOAD_MAX_WIDTH,
            'max_height' => IMAGE_UPLOAD_MAX_HEIGHT,
            'encrypt_name' => true
        );
    }
}
if (!function_exists('upload_image')){
    function upload_image(){         
        $_CI =& get_instance();
        $_CI->load->library('upload', image_upload_config());
        $_CI->load->model('file_model');

        if (!$_CI->upload->do_upload(FILE_UPLOAD_USERFILE)) {
            $response = $_CI->upload->display_errors('', '');
        } else {
            $data = $_CI->upload->data();

            $file_crc = crc32($data['full_path']);

            $file_id = $_CI->file_model->get_id($file_crc);

            if ($file_id) {
                unlink($data['full_path']);
                $file_name = get_file($file_id);
            } else {
                $created_at = get_date()->getTimestamp();
                $file_name = $created_at . '_' . get_user()->id . '_' . $data['file_name'];
                rename($data['full_path'], FCPATH . FILE_UPLOAD_PATH . $file_name);

                $file_id = $_CI->images_model->insert_image(array(
                    'name' => $file_name,
                    'ext' => $data['file_ext'],
                    'raw_name' => $data['raw_name'],
                    'created_at' => $created_at,
                    'crc' => $file_crc,
                    'user_id' => get_user()->id
                ));

                $file_name = '/' . FILE_UPLOAD_PATH . $file_name;
            }

            if ($file_id) {
                $response = array(
                    'mode' => 'image_uploaded',
                    'file_id' => $file_id,
                    'path' => $file_name
                );
            } else {
                $response = 'Algo salió mal mientras se intentaba guardar la imagen';
            }
        }
        @unlink($_FILES[FILE_UPLOAD_USERFILE]);
        return $response;
    }
}