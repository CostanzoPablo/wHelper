<?php

/* whelper/base.twig */
class __TwigTemplate_385a1f37a0194d0673fefdf9bfee5ae5fb00d67abb8b9766f5b42b4ec2f9d9ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content_page' => array($this, 'block_content_page'),
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
<!--[if gt IE 9]><!--> 
<html class=\"no-js\" lang=\"es\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        ";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 37
        echo "    </head>
    <body>



        ";
        // line 42
        $this->displayBlock('content_page', $context, $blocks);
        // line 64
        echo "
    ";
        // line 65
        $this->env->loadTemplate("whelper/footer.twig")->display($context);
        // line 66
        echo "
</body>

</html>";
    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        // line 13
        echo "        

            <title>";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
            <meta name=\"description\" content=\"\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
                        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

            <link rel=\"stylesheet\" href=\"css/style.css\">

            <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

            <link href='http://fonts.googleapis.com/css?family=Roboto:400italic,400,700' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700,400' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:100,400,300,700' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Oswald:700,400' rel='stylesheet' type='text/css'>

            <script src=\"vendor/modernizr-2.6.2.min.js\"></script>

            <script src=\"vendor/jquery.min.js\"></script>
            <script>window.jQuery || document.write('<script src=\"vendor/jquery-1.10.2.min.js\"><\\/script>')</script>
            <script src=\"vendor/jquery-ui.js\"></script>        
            <script src=\"vendor/bootstrap/js/bootstrap.min.js\"></script>

        ";
    }

    // line 42
    public function block_content_page($context, array $blocks = array())
    {
        // line 43
        echo "            <div id=\"loading\" class=\"hidden\">
                <div id=\"loadingGif\"></div>
            </div>
            ";
        // line 46
        if (array_key_exists("user", $context)) {
            // line 47
            echo "                <div class=\"container\">
                    <div class=\"header clearfix\">
                        <nav>
                            <ul class=\"nav nav-pills pull-right\">
                                <li class=\"active\" role=\"presentation\"><a href=\"./logout\">Log out</a></li>
                            </ul>
                        </nav>
                        <h3 class=\"text-muted\"><b><font color=\"#00AA00\">w</font><font color=\"#FF6600\">Helper</font></b></h3>
                    </div>
                </div>
            ";
        }
        // line 58
        echo "            
            ";
        // line 59
        if (array_key_exists("error", $context)) {
            // line 60
            echo "                <div id=\"error\" class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "</div>
            ";
        }
        // line 62
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "whelper/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 62,  119 => 60,  117 => 59,  114 => 58,  101 => 47,  99 => 46,  94 => 43,  91 => 42,  65 => 15,  61 => 13,  58 => 12,  51 => 66,  49 => 65,  46 => 64,  44 => 42,  37 => 37,  35 => 12,  23 => 2,  21 => 1,);
    }
}
