<?php

class GetChecker {

    public function checkForGet()
    {
        global $OUT, $CFG, $URI;
        
        if (isset($_GET['pagina']))
        {
            $URI->uri_string .= '?pagina='.$_GET['pagina'];
        }

        if ($OUT->_display_cache($CFG, $URI) == TRUE)
        {
            exit;
        }
    }

}