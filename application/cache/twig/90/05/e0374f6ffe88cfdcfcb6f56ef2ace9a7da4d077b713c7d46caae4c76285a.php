<?php

/* whelper/panel/index.twig */
class __TwigTemplate_9005e0374f6ffe88cfdcfcb6f56ef2ace9a7da4d077b713c7d46caae4c76285a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content_page' => array($this, 'block_content_page'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((constant("THEME_NAME") . "/base.twig"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"css/panel.css\">
";
    }

    // line 8
    public function block_content_page($context, array $blocks = array())
    {
        // line 9
        echo "\t";
        $this->displayParentBlock("content_page", $context, $blocks);
        echo "
\t<div class=\"container\">

\t";
        // line 12
        $this->env->loadTemplate("whelper/panel/get.twig")->display($context);
        // line 13
        echo "
    </div>

    <script src=\"js/panel.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "whelper/panel/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  48 => 12,  41 => 9,  38 => 8,  30 => 4,  27 => 3,);
    }
}
