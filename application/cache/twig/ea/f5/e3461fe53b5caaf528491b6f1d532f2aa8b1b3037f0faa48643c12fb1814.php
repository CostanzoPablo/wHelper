<?php

/* whelper/front/login.twig */
class __TwigTemplate_eaf5e3461fe53b5caaf528491b6f1d532f2aa8b1b3037f0faa48643c12fb1814 extends Twig_Template
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
    <div class=\"container\">
      <form method=\"post\" class=\"form-signin\">
        <h2 class=\"form-signin-heading\">Please sign in</h2>
        <label for=\"inputEmail\" class=\"sr-only\">Email address</label>
        <input name=\"user\" type=\"text\" id=\"inputUser\" class=\"form-control\" placeholder=\"User name\" required autofocus>
        <label for=\"inputPassword\" class=\"sr-only\">Password</label>
        <input name=\"pass\" type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
        <button class=\"btn btn-lg btn-warning btn-block\" type=\"submit\">Sign in</button>
      </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "whelper/front/login.twig";
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
