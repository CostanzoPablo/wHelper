<?php

/* perdidosenlaciudad/front/index.twig */
class __TwigTemplate_a1522b79624b563aa427fca7cb16e18cb45bb6d90138246d5071c782dec58bed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
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
    public function block_content_page($context, array $blocks = array())
    {
        // line 4
        echo "<section id=\"inicioBody\">
    <div id=\"configsearchBarra\">
        <div id=\"settingsConfigsearch\"><span></span></div>
        <span id=\"labelConfigsearch\">";
        // line 7
        echo twig_escape_filter($this->env, constant("lang_index_configuracionDeBusqueda"), "html", null, true);
        echo "</span>
            <div id=\"tagBarra\">
            ";
        // line 9
        if (((isset($context["busquedaEstado"]) ? $context["busquedaEstado"] : null) != "Todos")) {
            // line 10
            echo "                <div class=\"tagConfig\" onclick=\"seleccionarBusquedaEstado('";
            echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_Todos"), "html", null, true);
            echo "', 'Todos');buscar();\">";
            echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_Todos"), "html", null, true);
            echo "</div>
            ";
        }
        // line 12
        echo "
\t\t\t";
        // line 13
        if (((isset($context["busquedaEspecie"]) ? $context["busquedaEspecie"] : null) != "Todas")) {
            // line 14
            echo "                <div class=\"tagConfig\" onclick=\"seleccionarBusquedaEspecie('";
            echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_Todas"), "html", null, true);
            echo "');buscar();\">";
            echo twig_escape_filter($this->env, constant("lang_publicar_Todas"), "html", null, true);
            echo "</div>';
\t\t\t";
        }
        // line 16
        echo "
\t\t\t";
        // line 17
        if (((isset($context["busquedaRaza"]) ? $context["busquedaRaza"] : null) != "Todas")) {
            // line 18
            echo "                    <div class=\"tagConfig\" onclick=\"seleccionarBusquedaRaza('";
            echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_Todas"), "html", null, true);
            echo "', '');buscar();\">";
            echo twig_escape_filter($this->env, constant("lang_raza_Todas"), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 20
        echo "            
\t\t\t";
        // line 21
        if (((isset($context["busquedaProvincia"]) ? $context["busquedaProvincia"] : null) != "Todas")) {
            // line 22
            echo "            \t<div class=\"tagConfig\" onclick=\"seleccionarBusquedaZona('";
            echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_Todas"), "html", null, true);
            echo "', '');buscar();\">";
            echo twig_escape_filter($this->env, (isset($context["busquedaProvinciaNombre"]) ? $context["busquedaProvinciaNombre"] : null), "html", null, true);
            echo "</div>
            ";
        }
        // line 24
        echo "
            ";
        // line 25
        if (((isset($context["busquedaLocalidad"]) ? $context["busquedaLocalidad"] : null) != "Todas")) {
            // line 26
            echo "                <div class=\"tagConfig\" onclick=\"seleccionarBusquedaUbicacion('";
            echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_Todas"), "html", null, true);
            echo "', '');buscar();\">";
            echo twig_escape_filter($this->env, (isset($context["busquedaLocalidadNombre"]) ? $context["busquedaLocalidadNombre"] : null), "html", null, true);
            echo "</div>
            ";
        }
        // line 27
        echo "                                                          
            </div>
    </div>
    <div class=\"seccionBarra\">
        <div class=\"sbInt\">
            <span><b>";
        // line 32
        echo twig_escape_filter($this->env, constant("lang_index_ultimasMascotas"), "html", null, true);
        echo "</b><br>";
        echo twig_escape_filter($this->env, constant("lang_index_publicadas"), "html", null, true);
        echo "</span>
        </div>
    </div>
    <div id=\"seccionMuro\">
        <div id=\"muroContent\">
\t\t\t";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fichas"]) ? $context["fichas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 38
            echo "                <div class=\"ficha ";
            echo twig_escape_filter($this->env, (isset($context["tipo"]) ? $context["tipo"] : null), "html", null, true);
            echo "\">
                    <div class=\"izqFicha\">
                        <div class=\"ribbonFicha\">
                            <span class=\"ribbonEstado\">";
            // line 41
            echo twig_escape_filter($this->env, constant(("lang_index_" . $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "tipo"))), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"fotoFicha\" style=\"background-image:url('./fotos/";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "foto1"), "html", null, true);
            echo "');background-position:center;\"></div>
                        <div class=\"sexoFicha\" style=\"background-image:url('img/icn-";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "sexo"), "html", null, true);
            echo ".png');\"></div>
                        <div class=\"imprimirFicha\" onclick=\"imprimirFicha('";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "');\"></div>
                    </div>
                    <div class=\"derFicha\">
                        <div class=\"infoFicha\">
                            <span class=\"razaFicha ";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["tipo"]) ? $context["tipo"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, constant(("lang_raza_" . $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "nraza"))), "html", null, true);
            echo "</span>
                            <span class=\"localidadFicha ";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["tipo"]) ? $context["tipo"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "nprovincia"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "nlocalidad"), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"editarFicha\" onclick=\"editarFicha('";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "');\"></div>
                        <div class=\"contactoFicha\">
                            <div class=\"mensajeFicha\" onclick=\"enviarMensaje('";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "');\">
                                <div class=\"iconoMensaje\"></div>
                                <span class=\"labelMensaje\">";
            // line 56
            echo twig_escape_filter($this->env, constant("lang_index_enviarMensaje"), "html", null, true);
            echo "</span>
                            </div>
                            <div class=\"verFicha\" id=\"verFicha\" onclick=\"verFicha('";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "');\">
                                <div class=\"iconoVer\"></div>
                                <span class=\"labelVer\">";
            // line 60
            echo twig_escape_filter($this->env, constant("lang_index_verFicha"), "html", null, true);
            echo "</span>
                            </div>
                            <div class=\"fb-share-button socialFicha\" onclick=\"javascript:share('";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "');\">
                                <span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </div>
        <div id=\"paginacionBarra\">
            <!--<ul id=\"paginacionElementos\">
            <?php
                \$resultadosBusquedaLimite = intval(\$resultadosBusqueda / 12) + (\$inicio / 12);
                \$i = 0;
                \$conteo = intval(\$inicio/12) - 3;
                if (\$conteo > 0){
                    echo '<li>...</li>';
                }else{
                    \$conteo = 0;
                }
                for (\$i=\$conteo; \$i<=\$resultadosBusquedaLimite;\$i++){
                    if ((\$inicio/12) == \$i){
                        \$activarHoja = 'activePagina';
                    }else{
                        \$activarHoja = '';
                    }
                    echo '<li class=\"'.\$activarHoja.'\"><a href=\"./index.php?inicio='.(\$i*12).'\">'.intval(\$i+1).'</a></li>';    
                }
                if (\$resultadosBusqueda > 12){
                    echo '<li>...</li>';    
                }
            ?>
            </ul>-->
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "perdidosenlaciudad/front/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 71,  189 => 62,  184 => 60,  179 => 58,  174 => 56,  169 => 54,  164 => 52,  155 => 50,  149 => 49,  142 => 45,  138 => 44,  134 => 43,  129 => 41,  122 => 38,  118 => 37,  108 => 32,  101 => 27,  93 => 26,  91 => 25,  88 => 24,  80 => 22,  78 => 21,  75 => 20,  67 => 18,  65 => 17,  62 => 16,  54 => 14,  52 => 13,  49 => 12,  41 => 10,  39 => 9,  34 => 7,  29 => 4,  26 => 3,);
    }
}
