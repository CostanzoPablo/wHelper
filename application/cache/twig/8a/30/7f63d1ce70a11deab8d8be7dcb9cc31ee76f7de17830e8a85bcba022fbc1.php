<?php

/* vigilancia/front/index.twig */
class __TwigTemplate_8a307f63d1ce70a11deab8d8be7dcb9cc31ee76f7de17830e8a85bcba022fbc1 extends Twig_Template
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
\t            \t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tracks"]) ? $context["tracks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
            // line 12
            echo "\t            \t\t<tr>
\t            \t\t\t<td class=\"col-sm-4\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["track"]) ? $context["track"] : null), "numero"), "html", null, true);
            echo "</td>
\t            \t\t\t<td class=\"col-sm-4\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["track"]) ? $context["track"] : null), "causa_id"), "html", null, true);
            echo "</td>
\t            \t\t\t<td class=\"col-sm-4\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["track"]) ? $context["track"] : null), "oj_id"), "html", null, true);
            echo "</td>
\t            \t\t</tr>
\t            \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            \t</table>
            </div>
        </div>
        Estoy listo para procesar los archivos csv
    </div>
";
    }

    public function getTemplateName()
    {
        return "vigilancia/front/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 18,  59 => 15,  55 => 14,  51 => 13,  48 => 12,  44 => 11,  38 => 7,  32 => 6,  27 => 4,  22 => 2,  20 => 1,);
    }
}
