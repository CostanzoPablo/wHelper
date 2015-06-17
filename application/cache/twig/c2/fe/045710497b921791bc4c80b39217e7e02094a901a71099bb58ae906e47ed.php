<?php

/* causas/front/index.twig */
class __TwigTemplate_c2fe045710497b921791bc4c80b39217e7e02094a901a71099bb58ae906e47ed extends Twig_Template
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
        if (is_logged()) {
            // line 2
            echo "    ";
            $template = $this->env->resolveTemplate((constant("THEME_NAME") . "/base_logged.twig"));
            $template->display($context);
        } else {
            // line 4
            echo "    ";
            $template = $this->env->resolveTemplate((constant("THEME_NAME") . "/base.twig"));
            $template->display($context);
        }
        // line 6
        $this->displayBlock('content_page', $context, $blocks);
    }

    public function block_content_page($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
            \t<table>
            \t\t<th>Numero</th>
            \t\t<th>Causa</th>
            \t\t<th>OJ</th>
\t            \t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tracks"]) ? $context["tracks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
            // line 15
            echo "\t            \t\t<tr>
\t            \t\t\t<td class=\"col-sm-4\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["track"]) ? $context["track"] : null), "numero"), "html", null, true);
            echo "</td>
\t            \t\t\t<td class=\"col-sm-4\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["track"]) ? $context["track"] : null), "causa_id"), "html", null, true);
            echo "</td>
\t            \t\t\t<td class=\"col-sm-4\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["track"]) ? $context["track"] : null), "oj_id"), "html", null, true);
            echo "</td>
\t            \t\t</tr>
\t            \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            \t</table>
            </div>
        </div>
        <div class=\"row\">
        \t<div class=\"col-sm-2 col-sm-offset-5\">
        \t\t<h3>Pagina</h3>
        \t\t<form method=\"get\" action=\"/?page=";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
        echo "\">
        \t\t\t<input id=\"page_input\" type=\"text\" name=\"page\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
        echo "\">
        \t\t</form>
        \t</div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "causas/front/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 28,  79 => 27,  71 => 21,  62 => 18,  58 => 17,  54 => 16,  51 => 15,  47 => 14,  38 => 7,  32 => 6,  27 => 4,  22 => 2,  20 => 1,);
    }
}
