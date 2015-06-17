<?php

/* whelper/front/index.twig */
class __TwigTemplate_832c90ba61b68b52605b686592484f26b37cdbb608be0a52e79cfe9d539772bc extends Twig_Template
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
\t<link rel=\"stylesheet\" href=\"css/login.css\">
";
    }

    // line 8
    public function block_content_page($context, array $blocks = array())
    {
        // line 9
        echo "\t";
        $this->displayParentBlock("content_page", $context, $blocks);
        echo "
\tFRONT :D
";
    }

    public function getTemplateName()
    {
        return "whelper/front/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  38 => 8,  30 => 4,  27 => 3,);
    }
}
