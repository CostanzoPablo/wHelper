<?php

/* causas/base.twig */
class __TwigTemplate_827adebf77c19fc0a362e75212ec39375f17b3bb470c40c49255792f2eed69fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_styles' => array($this, 'block_page_styles'),
            'nav' => array($this, 'block_nav'),
            'content_page' => array($this, 'block_content_page'),
            'page_scripts' => array($this, 'block_page_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["this"] = get_instance();
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie10 lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie10 lt-ie9\"> <![endif]-->
<!--[if IE 9]>         <html class=\"no-js lt-ie10 lt-ie9\"> <![endif]-->
<!--[if gt IE 9]><!--> <html class=\"no-js\" lang=\"es\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">

        <title>Causas";
        // line 12
        if (array_key_exists("page_title", $context)) {
            echo " | ";
            echo twig_escape_filter($this->env, (isset($context["page_title"]) ? $context["page_title"] : null), "html", null, true);
        }
        echo "</title> 

        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"Joaquin Irione\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        ";
        // line 18
        $this->displayBlock('page_styles', $context, $blocks);
        // line 35
        echo "
        <!-- ICONS -->
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"/ico/favicon144x144.png\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"/ico/favicon114x114.png\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"/ico/favicon72x72.png\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"57x57\" href=\"/ico/favicon57x57.png\">
        <link rel=\"shortcut icon\" href=\"/ico/favicon.png\"> 


        <script src=\"/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js\"></script>
    </head>
    <body";
        // line 46
        if (array_key_exists("page_id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["page_id"]) ? $context["page_id"] : null), "html", null, true);
            echo "\"";
        }
        echo " class=\"";
        if (array_key_exists("page_name", $context)) {
            echo twig_escape_filter($this->env, (isset($context["page_name"]) ? $context["page_name"] : null), "html", null, true);
        }
        echo "\">
        <!--[if lt IE 7]>
            <p class=\"browsehappy\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        ";
        // line 51
        $this->displayBlock('nav', $context, $blocks);
        // line 77
        echo "
    ";
        // line 78
        $this->displayBlock('content_page', $context, $blocks);
        // line 79
        echo "    ";
        $this->displayBlock('page_scripts', $context, $blocks);
        // line 97
        echo "</body>
</html>";
    }

    // line 18
    public function block_page_styles($context, array $blocks = array())
    {
        // line 19
        echo "            <!-- BOOTSTRAP -->
            <!--link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css\"-->
            <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
            <!-- BOOTSTRAP THEME -->
            ";
        // line 24
        echo "            ";
        // line 25
        echo "            <!-- FONT AWESOME -->
            <!--link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\"-->
            <link rel=\"stylesheet\" href=\"/css/font-awesome.min.css\">
            <!-- SWEET ALERT -->
            <link rel=\"stylesheet\" href=\"/css/sweet-alert.css\">
            <!-- DATEPICKER -->
            <link rel=\"stylesheet\" href=\"/css/datepicker.css\">
            <link rel=\"stylesheet\" href=\"/css/datepicker3.css\">
            <link rel=\"stylesheet\" href=\"/css/main.css\">
        ";
    }

    // line 51
    public function block_nav($context, array $blocks = array())
    {
        echo "    
            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"/\">Inicio</a></li>   
                        </ul>
                        <form class=\"navbar-form navbar-left\" role=\"search\" method=\"get\" action=\"/buscar\">
                            <div class=\"form-group\">
                                <input class=\"form-control pull-left right-spacer\" name=\"q\" value=\"\" placeholder=\"Buscar\"/>
                            </div>
                          
                        </form>
                        <ul class=\"nav navbar-nav\">
                            <li></li>   
                        </ul>                        
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"dropdown\">
                              
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>        

        ";
    }

    // line 78
    public function block_content_page($context, array $blocks = array())
    {
    }

    // line 79
    public function block_page_scripts($context, array $blocks = array())
    {
        // line 80
        echo "        <!-- JQUERY 1.11.1 -->
        <!--script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script>window.jQuery || document.write('<script src=\"/js/vendor/jquery-1.11.1.min.js\"><\\/script>')</script-->
        <!--script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script-->
        <!--script>window.jQuery || document.write('<script src=\"/js/vendor/jquery-2.1.3.min.js\"><\\/script>')</script-->
        <script src=\"/js/vendor/jquery-2.1.3.min.js\"></script>

        <!-- BOOTSTRAP -->
        <!--script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js\"></script-->
        <script src=\"/js/vendor/bootstrap.min.js\"></script>
        <!-- SWEET ALERT -->
        <script src=\"/js/vendor/sweet-alert.min.js\"></script>
        <!-- DATEPICKER -->
        <script src=\"/js/vendor/bootstrap-datepicker.js\"></script>
        <script src=\"/js/vendor/bootstrap-datepicker.es.js\"></script>
        <script src=\"/js/main.js\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "causas/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 80,  155 => 79,  150 => 78,  119 => 51,  106 => 25,  104 => 24,  98 => 19,  95 => 18,  90 => 97,  87 => 79,  85 => 78,  82 => 77,  80 => 51,  64 => 46,  51 => 35,  49 => 18,  37 => 12,  25 => 2,  23 => 1,);
    }
}
