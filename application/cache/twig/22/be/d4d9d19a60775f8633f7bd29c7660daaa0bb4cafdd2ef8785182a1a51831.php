<?php

/* perdidosenlaciudad/publicar/index.twig */
class __TwigTemplate_22bed4d9d19a60775f8633f7bd29c7660daaa0bb4cafdd2ef8785182a1a51831 extends Twig_Template
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
        echo "<script src=\"js/publicar.js\"></script>  


</div>
</div>

<section id=\"inicioBody\">
<form action=\"\" method=\"post\" name=\"formPublicar\" enctype=\"multipart/form-data\">
<div class=\"seccionBarra\" style=\"margin-top:20px\">
<div class=\"sbInt\">
    <span><b>";
        // line 14
        echo twig_escape_filter($this->env, constant("lang_publicar_registro"), "html", null, true);
        echo "</b><br>";
        echo twig_escape_filter($this->env, constant("lang_publicar_deMascotas"), "html", null, true);
        echo "</span>
</div>
</div>
<div id=\"seccionPublicar\">
<div id=\"publicarContent\">
    <div id=\"pasoPrimero\" class=\"active\">
        <div class=\"publicarBarra\">
            <label class=\"pasoPublicar\">";
        // line 21
        echo twig_escape_filter($this->env, constant("lang_publicar_paso"), "html", null, true);
        echo " 1 / <span>";
        echo twig_escape_filter($this->env, constant("lang_publicar_datosGenerales"), "html", null, true);
        echo "</span></label>
            <div class=\"procesoPublicar\">
                <div class=\"procesoActual\" style=\"width:25%\"></div>
            </div>
        </div>
   
            <label class=\"lienzoCampo\">";
        // line 27
        echo twig_escape_filter($this->env, constant("lang_publicar_publicarEn"), "html", null, true);
        echo "</label>
            <input class=\"inputEstado\" id=\"inputEstado\" type=\"hidden\" name=\"tipo\" value=\"perdido\">
            <div class=\"aEstado btn-claro\" id=\"aEstado\">";
        // line 29
        echo twig_escape_filter($this->env, constant("lang_publicar_perdidos"), "html", null, true);
        echo "</div>
            <div class=\"dEstado\" id=\"dEstado\">
                <ul class=\"dropdown\">
                    <li><div onclick=\"seleccionarPublicarEstado('";
        // line 32
        echo twig_escape_filter($this->env, constant("lang_publicar_perdidos"), "html", null, true);
        echo "', 'perdido', ''); mostrarGlobo('globoEstadoPerdidos');\">";
        echo twig_escape_filter($this->env, constant("lang_publicar_perdidos"), "html", null, true);
        echo "</div></li>
                    <li><div onclick=\"seleccionarPublicarEstado('";
        // line 33
        echo twig_escape_filter($this->env, constant("lang_publicar_encontrados"), "html", null, true);
        echo "', 'encontrado', ''); mostrarGlobo('globoEstadoEncontrados')\">";
        echo twig_escape_filter($this->env, constant("lang_publicar_encontrados"), "html", null, true);
        echo "</div></li>
                    <li><div onclick=\"seleccionarPublicarEstado('";
        // line 34
        echo twig_escape_filter($this->env, constant("lang_publicar_adopciones"), "html", null, true);
        echo "', 'adopcion', ''); mostrarGlobo('globoEstadoAdopciones')\">";
        echo twig_escape_filter($this->env, constant("lang_publicar_adopciones"), "html", null, true);
        echo "</div></li>
                    <li><div onclick=\"seleccionarPublicarEstado('";
        // line 35
        echo twig_escape_filter($this->env, constant("lang_publicar_preventivos"), "html", null, true);
        echo "', 'preventivo', ''); mostrarGlobo('globoEstadoPreventivos')\">";
        echo twig_escape_filter($this->env, constant("lang_publicar_preventivos"), "html", null, true);
        echo "</div></li>
                    <li><div onclick=\"seleccionarPublicarEstado('";
        // line 36
        echo twig_escape_filter($this->env, constant("lang_publicar_ayudas"), "html", null, true);
        echo "', 'ayuda', ''); mostrarGlobo('globoEstadoAyudas')\">";
        echo twig_escape_filter($this->env, constant("lang_publicar_ayudas"), "html", null, true);
        echo "</div></li>
                </ul>
            </div>
            <div class=\"globoExt\" style=\"margin-top:11px\">
                <div class=\"globoEstado active\" id=\"globoEstadoPerdidos\">";
        // line 40
        echo twig_escape_filter($this->env, constant("lang_publicar_infoPerdidos"), "html", null, true);
        echo "</div>
                <div class=\"globoEstado\" id=\"globoEstadoEncontrados\">";
        // line 41
        echo twig_escape_filter($this->env, constant("lang_publicar_infoEncontrados"), "html", null, true);
        echo "</div>
                <div class=\"globoEstado\" id=\"globoEstadoAdopciones\">";
        // line 42
        echo twig_escape_filter($this->env, constant("lang_publicar_infoAdopciones"), "html", null, true);
        echo "</div>
                <div class=\"globoEstado\" id=\"globoEstadoPreventivos\">";
        // line 43
        echo twig_escape_filter($this->env, constant("lang_publicar_infoPreventivos"), "html", null, true);
        echo "</div>
                <div class=\"globoEstado\" id=\"globoEstadoAyudas\">";
        // line 44
        echo twig_escape_filter($this->env, constant("lang_publicar_infoAyudas"), "html", null, true);
        echo "</div>
\t\t\t</div>

            <label class=\"lienzoCampo\">";
        // line 47
        echo twig_escape_filter($this->env, constant("lang_publicar_ubicacion"), "html", null, true);
        echo "</label>
            <input class=\"inputZona\" id=\"inputZona\" type=\"hidden\" name=\"provincia\" value=\"\">
            <div class=\"aZona btn-claro\" id=\"aZona\">&nbsp;</div>
            <div class=\"globoExt\" style=\"margin-top:11px\">
                <div class=\"globoError\" id=\"globoError1a\">";
        // line 51
        echo twig_escape_filter($this->env, constant("lang_publicar_errorProvincia"), "html", null, true);
        echo "</div>
            </div>
            <div class=\"dZona\" id=\"dZona\">
                <ul class=\"dropdown\">
                \t";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["provincias"]) ? $context["provincias"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 56
            echo "\t\t\t\t\t\t<li><div onclick=\"seleccionarPublicarZona('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "nombre"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
            echo "', '')\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "nombre"), "html", null, true);
            echo "</div></li>
                \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "      
                </ul>
            </div>
                <input class=\"inputUbicacion\" id=\"inputUbicacion\" type=\"hidden\" name=\"localidad\" value=\"\">
                <div class=\"btn-oscuro aUbicacion\" id=\"aUbicacion\"></div>                                
            <div class=\"globoExt\">
                <div class=\"globoError\" id=\"globoError1b\">";
        // line 63
        echo twig_escape_filter($this->env, constant("lang_publicar_errorLocalidad"), "html", null, true);
        echo "</div>                        
            </div>
            <div class=\"dUbicacion\" id=\"dUbicacion\">
                <ul class=\"dropdown\">
                <!--localidades...-->
                </ul>
            </div>
            <label class=\"lienzoCampo\">";
        // line 70
        echo twig_escape_filter($this->env, constant("lang_publicar_perdidoEncontradoEl"), "html", null, true);
        echo "</label>
            <input id=\"inputFecha\" class=\"inputFecha\" type=\"text\" name=\"fecha\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["time"]) ? $context["time"] : null), "m/d/Y"), "html", null, true);
        echo "\">

            <div id=\"validarPaso1\" class=\"lienzoSubmit4 btn-verdeDer\">";
        // line 73
        echo twig_escape_filter($this->env, constant("lang_publicar_siguientePaso"), "html", null, true);
        echo "</div>
   
    </div>

    <div id=\"pasoSegundo\">
        <div class=\"publicarBarra\">
            <label class=\"pasoPublicar\">";
        // line 79
        echo twig_escape_filter($this->env, constant("lang_publicar_paso"), "html", null, true);
        echo " 2 / <span>";
        echo twig_escape_filter($this->env, constant("lang_publicar_informacionDeLaMascota"), "html", null, true);
        echo "</span></label>
            <div class=\"procesoPublicar\">
                <div class=\"procesoActual\"></div>
            </div>
        </div>
   
            <label class=\"lienzoCampo\">";
        // line 85
        echo twig_escape_filter($this->env, constant("lang_publicar_mascotayRaza"), "html", null, true);
        echo "</label>
            <input class=\"inputMascota\" id=\"inputMascota\" type=\"hidden\" name=\"especie\" value=\"\">
            <div class=\"aMascota btn-claro\" id=\"aMascota\"></div>
            <div class=\"globoExt\">
                <div class=\"globoError\" id=\"globoError2a\">";
        // line 89
        echo twig_escape_filter($this->env, constant("lang_publicar_errorEspecie"), "html", null, true);
        echo "</div>
            </div>
            <div id=\"dMascota\" class=\"dMascota\">
                <ul class=\"dropdown\">
\t\t\t\t\t<li><div onclick=\"seleccionarPublicarEspecie('";
        // line 93
        echo twig_escape_filter($this->env, constant("lang_publicar_Perro"), "html", null, true);
        echo "', '', 'Perro')\">";
        echo twig_escape_filter($this->env, constant("lang_publicar_Perro"), "html", null, true);
        echo "</div></li>
                    <li><div onclick=\"seleccionarPublicarEspecie('";
        // line 94
        echo twig_escape_filter($this->env, constant("lang_publicar_Gato"), "html", null, true);
        echo "', '', 'Gato')\">";
        echo twig_escape_filter($this->env, constant("lang_publicar_Gato"), "html", null, true);
        echo "</div></li>
                </ul>
            </div>
            <input id=\"inputRaza\" class=\"inputRaza\" type=\"hidden\" name=\"raza\" value=\"\">
            <div id=\"aRaza\" class=\"btn-oscuro aRaza\"></div>     
            <div class=\"globoExt\">
                <div class=\"globoError\" id=\"globoError2b\">";
        // line 100
        echo twig_escape_filter($this->env, constant("lang_publicar_errorRaza"), "html", null, true);
        echo "</div>                        
            </div>
            <div id=\"dRaza\" class=\"dRaza\">
                <ul class=\"dropdown\">
                </ul>
            </div>
            <label class=\"lienzoCampo\">";
        // line 106
        echo twig_escape_filter($this->env, constant("lang_publicar_sexoDeLaMascota"), "html", null, true);
        echo "</label>
            <input id=\"inputSexo\" class=\"inputSexo\" type=\"hidden\" name=\"sexo\" value=\"hembra\">
            <div id=\"aSexo\" class=\"btn-claro aSexo\">";
        // line 108
        echo twig_escape_filter($this->env, constant("lang_publicar_hembra"), "html", null, true);
        echo "</div>
            <div id=\"dSexo\" class=\"dSexo\">
                <ul class=\"dropdown\">
                    <li><div onclick=\"seleccionarPublicarSexo('";
        // line 111
        echo twig_escape_filter($this->env, constant("lang_publicar_hembra"), "html", null, true);
        echo "', 'hembra', '')\">";
        echo twig_escape_filter($this->env, constant("lang_publicar_hembra"), "html", null, true);
        echo "</div></li>
                    <li><div onclick=\"seleccionarPublicarSexo('";
        // line 112
        echo twig_escape_filter($this->env, constant("lang_publicar_macho"), "html", null, true);
        echo "', 'macho', '')\">";
        echo twig_escape_filter($this->env, constant("lang_publicar_macho"), "html", null, true);
        echo "</div></li>
                </ul>
            </div>
            <label class=\"lienzoCampo\">";
        // line 115
        echo twig_escape_filter($this->env, constant("lang_publicar_numeroDeMicroChip"), "html", null, true);
        echo "</label>
            <input class=\"inputMicrochip\" id=\"inputMicrochip\" type=\"text\" name=\"microchip\" value=\"\" placeholder=\"";
        // line 116
        echo twig_escape_filter($this->env, constant("lang_publicar_numeroDeMicroChip"), "html", null, true);
        echo "\">
            <input type=\"button\" class=\"lienzoSubmit btn-blancoIzq\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, constant("lang_publicar_modificarDatos"), "html", null, true);
        echo "\">
            <div id=\"validarPaso2\" class=\"lienzoSubmit4 btn-verdeDer\">";
        // line 118
        echo twig_escape_filter($this->env, constant("lang_publicar_siguientePaso"), "html", null, true);
        echo "</div>
   
    </div>

    <div id=\"pasoTercero\">
        <div class=\"publicarBarra\">
            <label class=\"pasoPublicar\">";
        // line 124
        echo twig_escape_filter($this->env, constant("lang_publicar_paso"), "html", null, true);
        echo " 3 / <span>";
        echo twig_escape_filter($this->env, constant("lang_publicar_informacionComplementaria"), "html", null, true);
        echo "</span></label>
            <div class=\"procesoPublicar\">
                <div class=\"procesoActual\" style=\"width:75%\"></div>
            </div>
        </div>
   
            <label class=\"lienzoCampo\">";
        // line 130
        echo twig_escape_filter($this->env, constant("lang_publicar_fotos"), "html", null, true);
        echo "</label>
            <div id=\"hArchivo\" class=\"hArchivo\" style=\"float:left\">
            <div id=\"archivoFoto1\" onclick=\"eliminarFoto('1', '')\" class=\"archivoFoto\" style=\"\"><span id=\"fotoEliminar1\" class=\"fotoEliminar\">";
        // line 132
        echo twig_escape_filter($this->env, constant("lang_publicar_eliminar"), "html", null, true);
        echo "</span></div>
            <div id=\"archivoFoto2\" onclick=\"eliminarFoto('2', '')\" class=\"archivoFoto\" style=\"\"><span id=\"fotoEliminar2\" class=\"fotoEliminar\">";
        // line 133
        echo twig_escape_filter($this->env, constant("lang_publicar_eliminar"), "html", null, true);
        echo "</span></div>
            <div id=\"archivoFoto3\" onclick=\"eliminarFoto('3', '')\" class=\"archivoFoto\" style=\"\"><span id=\"fotoEliminar3\" class=\"fotoEliminar\">";
        // line 134
        echo twig_escape_filter($this->env, constant("lang_publicar_eliminar"), "html", null, true);
        echo "</span></div>
            <input id=\"inputArchivo1\" onchange=\"readURL(this, 'archivoFoto1')\" class=\"inputArchivo\" type=\"file\" name=\"foto1\" value=\"\">
            <div id=\"aArchivo1\" onclick=\"abrirInputArchivo('1', '')\" class=\"aArchivo\">";
        // line 136
        echo twig_escape_filter($this->env, constant("lang_publicar_aniadirFoto"), "html", null, true);
        echo "</div>
            <div class=\"globoExt globoExt3\">
                <div class=\"globoError\" id=\"globoError3a\">";
        // line 138
        echo twig_escape_filter($this->env, constant("lang_publicar_errorFoto"), "html", null, true);
        echo "</div>
            </div>
            <input id=\"inputArchivo2\" onchange=\"readURL(this, 'archivoFoto2')\" class=\"inputArchivo\" type=\"file\" name=\"foto2\" value=\"\">
            <div id=\"aArchivo2\" onclick=\"abrirInputArchivo('2', '')\" class=\"aArchivo\">";
        // line 141
        echo twig_escape_filter($this->env, constant("lang_publicar_aniadirFoto"), "html", null, true);
        echo "</div>
            <input id=\"inputArchivo3\" onchange=\"readURL(this, 'archivoFoto3')\" class=\"inputArchivo\" type=\"file\" name=\"foto3\" value=\"\">
            <div id=\"aArchivo3\" onclick=\"abrirInputArchivo('3', '')\" class=\"aArchivo\">";
        // line 143
        echo twig_escape_filter($this->env, constant("lang_publicar_aniadirFoto"), "html", null, true);
        echo "</div>  
            </div>
            <label class=\"lienzoCampo\">";
        // line 145
        echo twig_escape_filter($this->env, constant("lang_publicar_comentario"), "html", null, true);
        echo "</label>
            <textarea id=\"textareaDescripcion\" name=\"comentario\" placeholder=\"";
        // line 146
        echo twig_escape_filter($this->env, constant("lang_publicar_descripcion"), "html", null, true);
        echo "\"></textarea>
            <input type=\"button\" class=\"lienzoSubmit btn-blancoIzq\" value=\"";
        // line 147
        echo twig_escape_filter($this->env, constant("lang_publicar_modificarDatos"), "html", null, true);
        echo "\">
            <div id=\"validarPaso3\" class=\"lienzoSubmit4 btn-verdeDer\">";
        // line 148
        echo twig_escape_filter($this->env, constant("lang_publicar_siguientePaso"), "html", null, true);
        echo "</div>
    </div>

    <div id=\"pasoCuarto\">
        <div class=\"publicarBarra\">
            <label class=\"pasoPublicar\">";
        // line 153
        echo twig_escape_filter($this->env, constant("lang_publicar_paso"), "html", null, true);
        echo " 4 / <span>";
        echo twig_escape_filter($this->env, constant("lang_publicar_datosDeContacto"), "html", null, true);
        echo "</span></label>
            <div class=\"procesoPublicar\">
                <div class=\"procesoActual\" style=\"width:95%\"></div>
            </div>
        </div>
            <label class=\"lienzoCampo\">";
        // line 158
        echo twig_escape_filter($this->env, constant("lang_publicar_email"), "html", null, true);
        echo "</label>
            <input id=\"inputEmail\" type=\"text\" name=\"email\" value=\"\" placeholder=\"";
        // line 159
        echo twig_escape_filter($this->env, constant("lang_publicar_esNecesarioEmail"), "html", null, true);
        echo "\">
            <div class=\"globoExt globoExt4\">
                <div class=\"globoError\" id=\"globoError4a\">";
        // line 161
        echo twig_escape_filter($this->env, constant("lang_publicar_errorEmail"), "html", null, true);
        echo "</div>
            </div>
            <label class=\"lienzoCampo\">";
        // line 163
        echo twig_escape_filter($this->env, constant("lang_publicar_telefono"), "html", null, true);
        echo "</label>
            <input id=\"inputTelefono\" type=\"tel\" pattern='[\\+]\\d{2}[\\(]\\d{2}[\\)]\\d{4}[\\-]\\d{4}' title=\"(";
        // line 164
        echo twig_escape_filter($this->env, constant("lang_publicar_formato"), "html", null, true);
        echo ": +99(99)9999-9999)\" name=\"telefono\" value=\"\" placeholder=\"";
        echo twig_escape_filter($this->env, constant("lang_publicar_facilitarNumero"), "html", null, true);
        echo "\">
            <input type=\"button\" class=\"lienzoSubmit btn-blancoIzq\" value=\"";
        // line 165
        echo twig_escape_filter($this->env, constant("lang_publicar_modificarDatos"), "html", null, true);
        echo "\">
            <div id=\"validarPaso4\" class=\"lienzoSubmit4 btn-verdeDer\">";
        // line 166
        echo twig_escape_filter($this->env, constant("lang_publicar_publicar"), "html", null, true);
        echo "</div>                                                    
    </div>
</div>
</div>
</form>

</section>

<script>
    \$('#seccionPublicar').addClass('activeSeccion');
</script>
<script src='js/publicar.js'></script>
";
    }

    public function getTemplateName()
    {
        return "perdidosenlaciudad/publicar/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 166,  398 => 165,  392 => 164,  388 => 163,  383 => 161,  378 => 159,  374 => 158,  364 => 153,  356 => 148,  352 => 147,  348 => 146,  344 => 145,  339 => 143,  334 => 141,  328 => 138,  323 => 136,  318 => 134,  314 => 133,  310 => 132,  305 => 130,  294 => 124,  285 => 118,  281 => 117,  277 => 116,  273 => 115,  265 => 112,  259 => 111,  253 => 108,  248 => 106,  239 => 100,  228 => 94,  222 => 93,  215 => 89,  208 => 85,  197 => 79,  188 => 73,  183 => 71,  179 => 70,  169 => 63,  161 => 57,  148 => 56,  144 => 55,  137 => 51,  130 => 47,  124 => 44,  120 => 43,  116 => 42,  112 => 41,  108 => 40,  99 => 36,  93 => 35,  87 => 34,  81 => 33,  75 => 32,  69 => 29,  64 => 27,  53 => 21,  41 => 14,  29 => 4,  26 => 3,);
    }
}
