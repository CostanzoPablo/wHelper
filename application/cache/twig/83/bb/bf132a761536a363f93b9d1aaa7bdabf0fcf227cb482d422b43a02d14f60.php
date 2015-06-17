<?php

/* perdidosenlaciudad/imprimir/index.twig */
class __TwigTemplate_83bbbf132a761536a363f93b9d1aaa7bdabf0fcf227cb482d422b43a02d14f60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content_page' => array($this, 'block_content_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('content_page', $context, $blocks);
    }

    public function block_content_page($context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title></title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->


        <link rel=\"stylesheet\" href=\"css/imprimir.css\">
        <script src=\"js/vendor/modernizr-2.6.2.min.js\"></script>
    </head>
    <body>

        <div id=\"divImprimir\">
            <div id=\"divRecuadro\">
                <h1>";
        // line 24
        echo twig_escape_filter($this->env, constant(("lang_index_" . $this->getAttribute((isset($context["ficha"]) ? $context["ficha"] : null), "tipo"))), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, constant(("lang_raza_" . $this->getAttribute((isset($context["ficha"]) ? $context["ficha"] : null), "nraza"))), "html", null, true);
        echo "<br><span></span></h1>
                <h2>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ficha"]) ? $context["ficha"] : null), "comentario"), "html", null, true);
        echo "...</h2>
                <div id=\"foto\"><img class=\"foto\" src=\"./fotos/";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ficha"]) ? $context["ficha"] : null), "foto1"), "html", null, true);
        echo "\"></div>
                <div id=\"cajaDatos\">
                    <p class=\"datos\"><img class=\"iconos\" src=\"img/iconTelefono.png\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ficha"]) ? $context["ficha"] : null), "telefono"), "html", null, true);
        echo "</p>
                    <p class=\"datos\"><img class=\"iconos\" src=\"img/iconUbicacion.png\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ficha"]) ? $context["ficha"] : null), "nprovincia"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ficha"]) ? $context["ficha"] : null), "nlocalidad"), "html", null, true);
        echo "</p>
                    <p class=\"datos\"><img class=\"iconos\" src=\"img/iconMicrochip.png\">
                    ";
        // line 31
        if ($this->getAttribute((isset($context["ficha"]) ? $context["ficha"] : null), "microchip")) {
            // line 32
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ficha"]) ? $context["ficha"] : null), "microchip"), "html", null, true);
            echo "
                    ";
        } else {
            // line 34
            echo "                    \t";
            echo twig_escape_filter($this->env, constant("lang_index_sinMicrochip"), "html", null, true);
            echo "
                    ";
        }
        // line 36
        echo "\t\t\t\t\t</p>
                </div>
                <p class=\"fecha\">";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ficha"]) ? $context["ficha"] : null), "fecha"), "d/m/Y"), "html", null, true);
        echo "</p>

                <div id=\"divPie\">
                    <img src=\"img/logoLargoPerdidos.png\">
                </div>

            </div>

        </div>
        <script>
        \t\twindow.print(); 
        </script>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "perdidosenlaciudad/imprimir/index.twig";
    }

    public function getDebugInfo()
    {
        return array (  94 => 38,  90 => 36,  84 => 34,  78 => 32,  76 => 31,  69 => 29,  65 => 28,  60 => 26,  56 => 25,  50 => 24,  26 => 2,  20 => 1,);
    }
}
