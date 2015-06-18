<?php

/* whelper/panel/get.twig */
class __TwigTemplate_873fe0983564ec699f46fe82f051c7a20a252ce33ab44b55ee8d66ed5663d16d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"panel panel-warning\">
\t<div class=\"panel-heading\">
\t\t";
        // line 3
        if ((!array_key_exists("parent", $context))) {
            // line 4
            echo "\t\t\t<h4 class=\"panel-title form-signin-heading\">Add New Menu Option</h4>
\t\t";
        } else {
            // line 6
            echo "\t\t\t<h5 class=\"panel-title form-signin-heading\">Add New Sub Menu Option</h5>
\t\t";
        }
        // line 8
        echo "\t</div>
\t<div class=\"panel-body\">
\t\t<form method=\"post\" class=\"form-signin\" action=\"./panel/new\">
\t\t\t<label class=\"sr-only\">Title</label>
\t\t\t<input name=\"title\" type=\"text\" id=\"inputTitle\" class=\"form-control\" placeholder=\"Title\" required>
\t\t\t<input name=\"text\" type=\"text\" id=\"inputText\" class=\"form-control\" placeholder=\"Text\" required>\t\t
\t\t\t<input name=\"parent\" type=\"text\" id=\"inputParent\" class=\"form-control hidden\" placeholder=\"Parent\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["parent"]) ? $context["parent"] : null), "html", null, true);
        echo "\">\t\t\t
\t\t\t<button class=\"btn btn-lg btn-warning btn-block\" type=\"submit\">Create</button>
\t\t</form>
\t</div>
</div>




\t<div class=\"panel panel-warning\">
\t\t<div class=\"panel-heading\">
\t\t\t<h5 class=\"form-signin-heading\">Menu Options</h5>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 29
            echo "\t\t\t\t
\t\t\t\t<div>
\t\t\t\t\t<div class=\"btn btn-lg btn-warning menu-option continue\" onclick=\"loadChildrens(";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
            echo ");\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "title"), "html", null, true);
            echo "</div>
\t\t\t\t\t<a href=\"./panel/delete/";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
            echo "\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-trash continue cursor\" aria-hidden=\"true\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<div onclick=\"openClose('editar_";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
            echo "');\" class=\"continue\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-pencil continue cursor\" aria-hidden=\"true\"></span>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>

\t\t\t\t<div id=\"editar_";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
            echo "\" class=\"hidden\">
\t\t\t\t\t<form class=\"form-signin\" method=\"post\" action=\"./panel/edit/";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
            echo "\">
\t\t\t\t\t\t<label class=\"sr-only\">Title</label>
\t\t\t\t\t\t<input name=\"title\" type=\"text\" id=\"inputTitle\" class=\"form-control\" placeholder=\"Title\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "title"), "html", null, true);
            echo "\" required>
\t\t\t\t\t\t<input name=\"text\" type=\"text\" id=\"inputText\" class=\"form-control\" placeholder=\"Text\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "text"), "html", null, true);
            echo "\">\t\t
\t\t\t\t\t\t<button class=\"btn btn-lg btn-warning btn-block\" type=\"submit\">Edit</button>
\t\t\t\t\t</form>
\t\t\t\t</div>

\t\t\t\t<div class=\"childrens hidden\" id=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
            echo "\"></div>
\t\t\t\t";
            // line 50
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "submenu"));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 51
                echo "\t\t\t\t\t<div class=\"btn btn-lg btn-warning menu-option\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["s"]) ? $context["s"] : null), "html", null, true);
                echo "</div>
\t\t\t\t\t<div class=\"childrens hidden\" id=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "id"), "html", null, true);
                echo "\"></div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "whelper/panel/get.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 55,  130 => 54,  122 => 52,  115 => 51,  111 => 50,  107 => 49,  99 => 44,  95 => 43,  90 => 41,  86 => 40,  78 => 35,  72 => 32,  66 => 31,  62 => 29,  58 => 28,  41 => 14,  33 => 8,  29 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }
}
