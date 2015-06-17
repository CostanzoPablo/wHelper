<?php

/* perdidosenlaciudad/base.twig */
class __TwigTemplate_c997363d02d8b8549c5a9096dec1dddab33a45b544f8f787ecbbf7bfddfa6981 extends Twig_Template
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
        // line 44
        echo "    </head>
    <body>


























        <div id=\"loading\"></div>

        <header>
            <div id=\"headerSuperior\">
                <div id=\"logo\"></div>
                <div id=\"headerSettings\">
                    <div id=\"idiomaBarra\">
                        <div id=\"idiomaSettings\"><span id=\"isSpan\"></span></div>
                        <div id=\"idiomaCont\">
                            <div id=\"paisIdioma\">
                                <span id=\"pais\">
                                    ";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["pais"]) ? $context["pais"] : null), "html", null, true);
        echo "
                                </span>
                                <span class=\"divisor\">|</span>
                                <span id=\"idioma\">
                                    ";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["idioma"]) ? $context["idioma"] : null), "html", null, true);
        echo "
                                </span>
                            </div>
                            <div id=\"bandera\" style=\"background-image:url('img/flg-";
        // line 90
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["pais"]) ? $context["pais"] : null)), "html", null, true);
        echo ".png');\"></div>
                        </div>
                    </div>
                    <div id=\"buscarBarra\">
                        <form id=\"preBusquedaForm\" action=\"\" method=\"get\">
                            <div id=\"buscarTexto\">
                                <input class=\"bf-input\" type=\"text\" id=\"preBusqueda\" name=\"preBusqueda\" value=\"\" placeholder=\"";
        // line 96
        echo twig_escape_filter($this->env, constant("lang_header_preBusqueda"), "html", null, true);
        echo "\">
                            </div>
                            <input id=\"buscarIcono\" type=\"submit\" value=\"\">
                        </form>
                    </div>
                    <div id=\"preBusquedaResultado\"></div>
                </div>
            </div>
            <div id=\"menuBarra\">
                <nav id=\"menuPrincipal\">
                    <ul id=\"menuSecciones\">
                        <li id=\"seccionIndex\"><a href=\"./index.php\">";
        // line 107
        echo twig_escape_filter($this->env, constant("lang_header_inicio"), "html", null, true);
        echo "</a></li>
                        <li id=\"seccionPublicar\" ><a href=\"./publicar\">";
        // line 108
        echo twig_escape_filter($this->env, constant("lang_header_publicar"), "html", null, true);
        echo "</a></li>
                        <li id=\"seccionContacto\"><a id=\"menuContacto\" href=\"#\" onclick=\"contactar();\">";
        // line 109
        echo twig_escape_filter($this->env, constant("lang_header_contacto"), "html", null, true);
        echo "</a></li>
                        <li id=\"seccionNosotros\"><a href=\"nosotros.php\">";
        // line 110
        echo twig_escape_filter($this->env, constant("lang_header_nosotros"), "html", null, true);
        echo "</a></li>
                    </ul>
                </nav>
                <ul id=\"social\">
                    <li><div class=\"iconoMapa\" onclick=\"abrirMapa();\"></div></li>
                    <li><a target=\"_blank\" class=\"iconoTwitter\" href=\"https://twitter.com/penlaciudad\"></a></li>
                    <li><a target=\"_blank\" class=\"iconoFacebook\" href=\"https://www.facebook.com/penlaciudad\"></a></li>
                </ul>
            </div>
            <div id=\"banner\">
                <div id=\"bannerImagen\"></div>
                <!--<div id=\"detalleMapa\">
                    <a id=\"verMapa\" href=\"\">";
        // line 122
        echo twig_escape_filter($this->env, constant("lang_index_verMapa"), "html", null, true);
        echo "</a>
                </div>-->
                <div id=\"bannerSlogan\">
                    <span id=\"sloganUp\">";
        // line 125
        echo twig_escape_filter($this->env, constant("lang_header_nosotros"), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, constant("lang_header_medios"), "html", null, true);
        echo "</span>
                    <span id=\"sloganDown\">";
        // line 126
        echo twig_escape_filter($this->env, constant("lang_header_ustedes"), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, constant("lang_header_lohacenposible"), "html", null, true);
        echo "</span>
                </div>
            </div>
        </header>








        <div id=\"lienzo\">
        <div id=\"lienzoCont\">


        <div id=\"fb-root\"></div>
        <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = \"http://connect.facebook.net/es_ES/sdk.js#xfbml=1&appId=837012482977086&version=v2.0\";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>


        <div id=\"lienzoFiltro\"> <!-- parámetros o configuración de búsqueda -->
        <h2>";
        // line 153
        echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_parametros"), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_deBusqueda"), "html", null, true);
        echo "</h2>
        <form action=\"#\" id=\"cfgBusqueda\" >
        <label class=\"lienzoCampo\">";
        // line 155
        echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_estadoDeLaPublicacion"), "html", null, true);
        echo "</label>
        <input id=\"inputEstadoBusqueda\" class=\"inputMascota\" type=\"hidden\" name=\"inputEstadoBusqueda\" value=\"";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["busquedaEstado"]) ? $context["busquedaEstado"] : null), "html", null, true);
        echo "\">
        <div id=\"aEstadoBusqueda\" class=\"btn-claro aEstado\">";
        // line 157
        echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_Todos"), "html", null, true);
        echo " </div>
        <div id=\"dEstadoBusqueda\" class=\"dEstado\">
            <ul class=\"dropdown\">
                <li><div onclick=\"seleccionarBusquedaEstado('";
        // line 160
        echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_Todos"), "html", null, true);
        echo "', 'Todos');\">";
        echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_Todos"), "html", null, true);
        echo "</div></li>
                <li><div onclick=\"seleccionarBusquedaEstado('";
        // line 161
        echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_perdido"), "html", null, true);
        echo "', 'perdido');\">";
        echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_perdido"), "html", null, true);
        echo "</div></li>
                <li><div onclick=\"seleccionarBusquedaEstado('";
        // line 162
        echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_encontrado"), "html", null, true);
        echo "', 'encontrado');\">";
        echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_encontrado"), "html", null, true);
        echo "</div></li>
                <li><div onclick=\"seleccionarBusquedaEstado('";
        // line 163
        echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_adopcion"), "html", null, true);
        echo "', 'adopcion');\">";
        echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_adopcion"), "html", null, true);
        echo "</div></li>
                <li><div onclick=\"seleccionarBusquedaEstado('";
        // line 164
        echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_preventivo"), "html", null, true);
        echo "', 'preventivo');\">";
        echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_preventivo"), "html", null, true);
        echo "</div></li>
                <li><div onclick=\"seleccionarBusquedaEstado('";
        // line 165
        echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_ayuda"), "html", null, true);
        echo "', 'ayuda');\">";
        echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_ayuda"), "html", null, true);
        echo "</div></li>
            </ul>
        </div>
        <label class=\"lienzoCampo\">";
        // line 168
        echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_tipoDeMascotaRaza"), "html", null, true);
        echo "</label>

        <input id=\"inputMascotaBusqueda\" class=\"inputMascota\" type=\"hidden\" name=\"inputMascotaBusqueda\" value=\"";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["busquedaEspecie"]) ? $context["busquedaEspecie"] : null), "html", null, true);
        echo "\">
        <div id=\"aMascotaBusqueda\" class=\"btn-claro aMascota\">";
        // line 171
        echo twig_escape_filter($this->env, constant("lang_publicar_Todos"), "html", null, true);
        echo "</div>
        <div id=\"dMascotaBusqueda\" class=\"dMascota\">
            <ul class=\"dropdown\">
                <li><div onclick=\"seleccionarBusquedaEspecie('";
        // line 174
        echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_Todas"), "html", null, true);
        echo "');\">";
        echo twig_escape_filter($this->env, constant("lang_publicar_Todas"), "html", null, true);
        echo "</div></li>
                ";
        // line 175
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["razas"]) ? $context["razas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["raza"]) {
            // line 176
            echo "                    <li><div onclick=\"seleccionarBusquedaEspecie('";
            echo twig_escape_filter($this->env, constant(("lang_publicar_" . $this->getAttribute((isset($context["raza"]) ? $context["raza"] : null), "especie"))), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["raza"]) ? $context["raza"] : null), "especie"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_Todas"), "html", null, true);
            echo "', 'Todas');\">
                        ";
            // line 177
            echo twig_escape_filter($this->env, constant(("lang_publicar_" . $this->getAttribute((isset($context["raza"]) ? $context["raza"] : null), "especie"))), "html", null, true);
            echo "
                    </div></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['raza'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "                                            
            </ul>
        </div>


            <!--\$sql2=mysql_query(\"SELECT * FROM razas WHERE id = '\$busquedaRaza'\",\$con);
            while(\$row2 = mysql_fetch_array(\$sql2)){  
                \$busquedaRazaNombre = \$row2[\"nombre\"];
            }!-->
        <input id=\"inputRazaBusqueda\" class=\"inputRaza\" type=\"hidden\" name=\"inputRazaBusqueda\" value=\"";
        // line 188
        echo twig_escape_filter($this->env, (isset($context["busquedaRaza"]) ? $context["busquedaRaza"] : null), "html", null, true);
        echo "\">
        <div id=\"aRazaBusqueda\" class=\"btn-oscuro aRaza\">";
        // line 189
        echo twig_escape_filter($this->env, constant("lang_raza_busquedaRazaNombre"), "html", null, true);
        echo "</div>
        <div id=\"dRazaBusqueda\" class=\"dRaza\">
            <ul class=\"dropdown\">
                ";
        // line 192
        if (((isset($context["busquedaEspecie"]) ? $context["busquedaEspecie"] : null) == "Todas")) {
            // line 193
            echo "                    <li><div onclick=\"seleccionarBusquedaRaza(\\'";
            echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_Todas"), "html", null, true);
            echo "\\', \\'\\');\">";
            echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_Todas"), "html", null, true);
            echo "</div></li>
                ";
        } else {
            // line 194
            echo "                            
                    ";
            // line 195
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["especies"]) ? $context["especies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["especie"]) {
                // line 196
                echo "                        ";
                if (($this->getAttribute((isset($context["especie"]) ? $context["especie"] : null), "especie") == (isset($context["busquedaEspecie"]) ? $context["busquedaEspecie"] : null))) {
                    // line 197
                    echo "                        <li><div onclick=\"seleccionarBusquedaRaza(\\'";
                    echo twig_escape_filter($this->env, constant("lang_raza_nombre"), "html", null, true);
                    echo "\\', \\'";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["especie"]) ? $context["especie"] : null), "id"), "html", null, true);
                    echo "\\');\">";
                    echo twig_escape_filter($this->env, constant("lang_raza_nombre"), "html", null, true);
                    echo "</div></li>
                        ";
                }
                // line 199
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['especie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "   
                ";
        }
        // line 201
        echo "            </ul>
        </div>
        <label class=\"lienzoCampo\">";
        // line 203
        echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_zonaUbicacion"), "html", null, true);
        echo "</label>
        ";
        // line 204
        if ((isset($context["busquedaProvincia"]) ? $context["busquedaProvincia"] : null)) {
            // line 205
            echo "            
        ";
        } else {
            // line 207
            echo "
            ";
            // line 208
            $context["busquedaProvinciaNombre"] = (isset($context["lang_cfgBusqueda_Todas"]) ? $context["lang_cfgBusqueda_Todas"] : null);
            // line 209
            echo "
        ";
        }
        // line 211
        echo "
        <input id=\"inputZonaBusqueda\" class=\"inputZona\" type=\"hidden\" name=\"inputZonaBusqueda\" value=\"";
        // line 212
        echo twig_escape_filter($this->env, (isset($context["busquedaProvincia"]) ? $context["busquedaProvincia"] : null), "html", null, true);
        echo "\">
        <div id=\"aZonaBusqueda\" class=\"btn-claro aZona\">";
        // line 213
        echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_Todas"), "html", null, true);
        echo "</div>
        <div id=\"dZonaBusqueda\" class=\"dZona\">
            <ul class=\"dropdown\">
            <li><div onclick=\"seleccionarBusquedaZona('";
        // line 216
        echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_Todas"), "html", null, true);
        echo "', '');\">";
        echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_Todas"), "html", null, true);
        echo "</div></li>

            ";
        // line 218
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["provincias"]) ? $context["provincias"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 219
            echo "                <li><div onclick=\"seleccionarBusquedaZona('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "nombre"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_Todas"), "html", null, true);
            echo "', 'Todas');\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "nombre"), "html", null, true);
            echo "</div></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "                             
            </ul>
        </div>
        <!--<?php
        if (!(isset(\$busquedaLocalidad))){
            \$busquedaLocalidad = 'Todas';
            \$busquedaLocalidadNombre = ucFirst(\$lang_cfgBusqueda[\"Todas\"]);
        }else{
            \$busquedaLocalidadNombre = ucFirst(\$lang_cfgBusqueda[\"Todas\"]);
            \$sql2=mysql_query(\"SELECT * FROM localidades WHERE id = '\$busquedaLocalidad'\",\$con);
            while(\$row2 = mysql_fetch_array(\$sql2)){  
                \$busquedaLocalidadNombre = \$row2[\"nombre\"];
            }
        }
        ?>   -->     
        <input id=\"inputUbicacionBusqueda\" class=\"inputUbicacion\" type=\"hidden\" name=\"inputUbicacionBusqueda\" value=\"";
        // line 235
        echo twig_escape_filter($this->env, (isset($context["busquedaLocalidad"]) ? $context["busquedaLocalidad"] : null), "html", null, true);
        echo "\">
        <div id=\"aUbicacionBusqueda\" class=\"btn-oscuro aUbicacion\">";
        // line 236
        echo twig_escape_filter($this->env, (isset($context["busquedaLocalidadNombre"]) ? $context["busquedaLocalidadNombre"] : null), "html", null, true);
        echo "</div>
        <div id=\"dUbicacionBusqueda\" class=\"dUbicacion\">
            <ul class=\"dropdown\">
            ";
        // line 248
        echo "            </ul>
        </div>
        <input type=\"button\" onclick=\"buscar();\" class=\"lienzoSubmit btn-blancoDer\" value=\"";
        // line 250
        echo twig_escape_filter($this->env, constant("lang_cfgBusqueda_aceptar"), "html", null, true);
        echo "\">
        </form>
        </div>







        <div id=\"lienzoResultado\"> <!-- ¿Se ha publicado con éxito o ha habido error al publicar una mascota? -->
            <h2>";
        // line 261
        echo twig_escape_filter($this->env, constant("lang_publicar_estadoDeLa"), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, constant("lang_publicar_publicacion"), "html", null, true);
        echo "</h2>
            <form action=\"./index.php\">
                <div id=\"exitoPublicar\">
                    <div id=\"tituloExito\">";
        // line 264
        echo twig_escape_filter($this->env, constant("lang_publicar_seHaPublicadoConExito"), "html", null, true);
        echo "</div>
                    <div class=\"advertenciaPublicar\">
                        <p>";
        // line 266
        echo twig_escape_filter($this->env, constant("lang_publicar_teHemosEnviadoUnMensaje"), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, constant("lang_publicar_enElMensajeIncluimos"), "html", null, true);
        echo " <span class=\"verdeTexto\">";
        echo twig_escape_filter($this->env, constant("lang_publicar_numeroDeReferencia"), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, constant("lang_publicar_paraQuePuedasAcceder"), "html", null, true);
        echo ".</p>
                        <p>";
        // line 267
        echo twig_escape_filter($this->env, constant("lang_publicar_siTienesCualquierDuda"), "html", null, true);
        echo " <span class=\"azulTexto\">";
        echo twig_escape_filter($this->env, constant("lang_publicar_formularioDeContacto"), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, constant("lang_publicar_yResponderemos"), "html", null, true);
        echo ".</p>
                        <p>";
        // line 268
        echo twig_escape_filter($this->env, constant("lang_publicar_noBrazosCruzados"), "html", null, true);
        echo ".<br>
                        <p>";
        // line 269
        echo twig_escape_filter($this->env, constant("lang_publicar_recomendamosImprimir"), "html", null, true);
        echo ".<br>
                        <p>";
        // line 270
        echo twig_escape_filter($this->env, constant("lang_publicar_muchasGracias"), "html", null, true);
        echo ".<br>";
        echo twig_escape_filter($this->env, constant("lang_publicar_ySobreTodo"), "html", null, true);
        echo "</p><br>
                    </div>
                    <input type=\"submit\" class=\"lienzoSubmit btn-blancoDer\" value=\"";
        // line 272
        echo twig_escape_filter($this->env, constant("lang_publicar_gracias"), "html", null, true);
        echo "\" >
                </div>

                <div id=\"errorPublicar\">
                    <div id=\"tituloError\">";
        // line 276
        echo twig_escape_filter($this->env, constant("lang_publicar_haHabidoUnError"), "html", null, true);
        echo "</div>
                    <div class=\"advertenciaPublicar\" id=\"publicarError\">&nbsp;</div>
                    <div class=\"advertenciaPublicar\" id=\"sinConexion\">
                        <p>";
        // line 279
        echo twig_escape_filter($this->env, constant("lang_publicar_loSentimos"), "html", null, true);
        echo " <span class=\"rojoTexto\">";
        echo twig_escape_filter($this->env, constant("lang_publicar_problemaEnElServidor"), "html", null, true);
        echo "</span></p>
                        <p>";
        // line 280
        echo twig_escape_filter($this->env, constant("lang_publicar_reintentalo"), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, constant("lang_publicar_siNoPodes"), "html", null, true);
        echo " <span class=\"azulTexto\">";
        echo twig_escape_filter($this->env, constant("lang_publicar_formularioDeContacto"), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, constant("lang_publicar_yResponderemos"), "html", null, true);
        echo ".</p>
                        <p>";
        // line 281
        echo twig_escape_filter($this->env, constant("lang_publicar_esperamosQueNoSea"), "html", null, true);
        echo ".</p></div>
                    <input type=\"button\" class=\"lienzoSubmit btn-blancoDer\" value=\"";
        // line 282
        echo twig_escape_filter($this->env, constant("lang_publicar_volverAlRegistro"), "html", null, true);
        echo "\" onclick=\"cerrarFichas()\">
                </div>
            </form>
        </div>










        <div id=\"close\" onclick=\"cerrarFichas();\">
        <div id=\"closeIcon\"></div>
        <span id=\"closeLabel\">";
        // line 298
        echo twig_escape_filter($this->env, constant("lang_headerLienzos_cancelar"), "html", null, true);
        echo "</span>
        </div>

        ";
        // line 301
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fichas"]) ? $context["fichas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 302
            echo "            <div class=\"lienzoMensaje\" id=\"lienzoMensaje";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "\"> <!-- Formulario de mensaje a usuario que publicó una mascota -->
                <h2>";
            // line 303
            echo twig_escape_filter($this->env, constant("lang_index_contacta"), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, constant("lang_index_conElUsuario"), "html", null, true);
            echo "</h2>
                <form action=\"./contactaUsuario.php?id=";
            // line 304
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "\" id=\"contactaUsuarioForm";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "\" method=\"post\">
                    <input class=\"contactamensajeAsunto\" id=\"contactaUsuariomensajeAsunto";
            // line 305
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "\" type=\"text\" name=\"mensajeAsunto\" value=\"\" placeholder=\"";
            echo twig_escape_filter($this->env, constant("lang_index_asunto"), "html", null, true);
            echo "\" required>
                    <input class=\"contactamensajeNombre\" id=\"contactaUsuariomensajeNombre";
            // line 306
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "\" type=\"text\" name=\"mensajeNombre\" value=\"\" placeholder=\"";
            echo twig_escape_filter($this->env, constant("lang_index_nombre"), "html", null, true);
            echo "\">
                    <input class=\"contactamensajeEmail\" id=\"contactaUsuariomensajeEmail";
            // line 307
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "\" type=\"text\" name=\"mensajeEmail\" value=\"\" placeholder=\"";
            echo twig_escape_filter($this->env, constant("lang_index_emailDeContacto"), "html", null, true);
            echo "\">
                    <textarea class=\"contactamensajeDescripcion\" id=\"contactaUsuariomensajeDescripcion";
            // line 308
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "\" name=\"mensajeDescripcion\" placeholder=\"";
            echo twig_escape_filter($this->env, constant("lang_index_queSucede"), "html", null, true);
            echo "\"></textarea>
                    <input onclick=\"contactaUsuario(";
            // line 309
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo ");\" type=\"button\" class=\"lienzoSubmit2 btn-blancoDer2\" value=\"";
            echo twig_escape_filter($this->env, constant("lang_index_enviarMensaje"), "html", null, true);
            echo "\">
                </form>
                <div id=\"contactaError";
            // line 311
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "\" class=\"contactoError\"></div>
            </div>      


            <div class=\"lienzoFicha\" id=\"lienzoFicha";
            // line 315
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "\"> <!-- Ficha de la mascota -->
                <h2>";
            // line 316
            echo twig_escape_filter($this->env, constant("lang_index_fichaDe"), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, constant("lang_index_laMascota"), "html", null, true);
            echo "</h2>
                <div class=\"detalleCont\">
                    <span id=\"detalleRaza\">";
            // line 318
            echo twig_escape_filter($this->env, constant(("lang_raza_" . $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "nraza"))), "html", null, true);
            echo "</span>
                    <span id=\"detalleEstado\">-";
            // line 319
            echo twig_escape_filter($this->env, constant(("lang_publicar_" . $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "especie"))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, constant(("lang_index_" . $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "tipo"))), "html", null, true);
            echo "-</span> <!-- mascota+estado -->
                    <span id=\"detalleUbicacion\">";
            // line 320
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "nprovincia"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "nlocalidad"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "fecha"), "html", null, true);
            echo "</span> <!-- ubicación+fecha -->

                    <div id=\"detalleInf\">
                        <div id=\"detalleIzq\">
                        ";
            // line 324
            if ($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "foto1")) {
                // line 325
                echo "                            <div class=\"detalleMiniatura active\" style=\"background-image:url('./fotos/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "foto1"), "html", null, true);
                echo "');background-position:center;\" id=\"miniaturaA";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
                echo "\" onclick=\"cambiarMiniatura('A', '";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "foto1"), "html", null, true);
                echo "');\"></div>
                        ";
            }
            // line 327
            echo "
                        ";
            // line 328
            if ($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "foto2")) {
                // line 329
                echo "                                <div class=\"detalleMiniatura\" style=\"background-image:url('./fotos/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "foto2"), "html", null, true);
                echo "');background-position:center;\" id=\"miniaturaB";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
                echo "\" onclick=\"cambiarMiniatura('B', '";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "foto2"), "html", null, true);
                echo "');\"></div>
                        ";
            }
            // line 331
            echo "

                        ";
            // line 333
            if ($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "foto3")) {
                // line 334
                echo "                                <div class=\"detalleMiniatura\" style=\"background-image:url('./fotos/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "foto3"), "html", null, true);
                echo "');background-position:center;\" id=\"miniaturaC";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
                echo "\" onclick=\"cambiarMiniatura('C', '";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "foto3"), "html", null, true);
                echo "');\"></div>
                        ";
            }
            // line 340
            echo "                        </div>
                        <div id=\"detalleDer\">
                            <div class=\"detalleFoto\">
                                <img id=\"detalleFoto";
            // line 343
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "\" class=\"foto\" src=\"./fotos/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "foto1"), "html", null, true);
            echo "\">
                                <div id=\"detalleSexo\" style=\"background-image:url('img/icn-";
            // line 344
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "sexo"), "html", null, true);
            echo ".png');\"></div>
                            </div>
                            <div id=\"detalleEmail\" onclick=\"enviarMensaje('";
            // line 346
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "');\">";
            echo twig_escape_filter($this->env, constant("lang_index_enviarMensaje"), "html", null, true);
            echo "</div>
                            <div id=\"detalleTelefono\">";
            // line 347
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "telefono"), "html", null, true);
            echo "</div>
                            <div id=\"detalleMicrochip\">";
            // line 348
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "microchip"), "html", null, true);
            echo "</div>
                            <div id=\"detalleSocial\">
                                <a onclick=\"javascript:share('";
            // line 350
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "');\" href=\"#\">";
            echo twig_escape_filter($this->env, constant("lang_index_compartirEnFacebook"), "html", null, true);
            echo "</a>
                            </div>
                            <div id=\"detalleDescripcion\">";
            // line 352
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "comentario"), "html", null, true));
            echo "</div>
                        </div>
                    </div>
                </div>
            </div>   




            <div class=\"lienzoVerificacion\" id=\"lienzoVerificacion";
            // line 361
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "\"> <!-- Verificación antes de editar una ficha-->
                <h2>";
            // line 362
            echo twig_escape_filter($this->env, constant("lang_index_panelDe"), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, constant("lang_index_edicion"), "html", null, true);
            echo "</h2>
                <form action=\"#\" id=\"verificacionEditar";
            // line 363
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "\" method=\"post\">
                    <label class=\"lienzoCampo\">";
            // line 364
            echo twig_escape_filter($this->env, constant("lang_index_verificacionDeLosDatos"), "html", null, true);
            echo "</label>
                    <input id=\"inputReferencia";
            // line 365
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "\" type=\"text\" class=\"inputReferencia\" name=\"inputReferencia\" value=\"\" placeholder=\"";
            echo twig_escape_filter($this->env, constant("lang_index_numeroDeReferencia"), "html", null, true);
            echo "\">
                    <input id=\"inputEmail";
            // line 366
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "\" type=\"text\" class=\"inputEmail\" name=\"inputEmail\" value=\"\" placeholder=\"";
            echo twig_escape_filter($this->env, constant("lang_index_emailDondeRecibioReferencia"), "html", null, true);
            echo "\">
                    <div class=\"lienzoSubmit\" onclick=\"verificarReferencia('";
            // line 367
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "');\">";
            echo twig_escape_filter($this->env, constant("lang_index_verificar"), "html", null, true);
            echo "</div>
                    <div class=\"lienzoSubmit\" onclick=\"recuperarReferencia('";
            // line 368
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "');\">";
            echo twig_escape_filter($this->env, constant("lang_index_recuperarCodigoDeReferencia"), "html", null, true);
            echo "</div>
                <div id=\"verificarReferenciaError";
            // line 369
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "\" class=\"verificarReferenciaError\"></div>
                </form>
            </div>

            <div class=\"lienzoEdicion\" id=\"lienzoEdicion";
            // line 373
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "\"> <!-- Edición de una ficha -->
                <h2>";
            // line 374
            echo twig_escape_filter($this->env, constant("lang_index_panelDe"), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, constant("lang_index_edicion"), "html", null, true);
            echo "</h2>
                <form action=\"#\" name=\"formPublicarEditar";
            // line 375
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "\" id=\"formPublicarEditar";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "\">
                    <input class=\"inputEstado\" id=\"inputEstado";
            // line 376
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "\" type=\"hidden\" name=\"tipo\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "tipo"), "html", null, true);
            echo "\">
                    <div class=\"btn-claro aEstado\" id=\"aEstado";
            // line 377
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, constant(("lang_index_" . $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "tipo"))), "html", null, true);
            echo "</div>
                    <div class=\"dEstado\" id=\"dEstado";
            // line 378
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "\">
                        <ul class=\"dropdown\">
                            <li><div onclick=\"seleccionarPublicarEstado('";
            // line 380
            echo twig_escape_filter($this->env, constant("lang_index_perdido"), "html", null, true);
            echo "', 'perdido', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "');\">";
            echo twig_escape_filter($this->env, constant("lang_index_perdidos"), "html", null, true);
            echo "</div></li>
                            <li><div onclick=\"seleccionarPublicarEstado('";
            // line 381
            echo twig_escape_filter($this->env, constant("lang_index_encontrado"), "html", null, true);
            echo "', 'encontrado', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "');\">";
            echo twig_escape_filter($this->env, constant("lang_index_encontrados"), "html", null, true);
            echo "</div></li>
                            <li><div onclick=\"seleccionarPublicarEstado('";
            // line 382
            echo twig_escape_filter($this->env, constant("lang_index_adopcion"), "html", null, true);
            echo "', 'adopcion', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "');\">";
            echo twig_escape_filter($this->env, constant("lang_index_adopciones"), "html", null, true);
            echo "</div></li>
                            <li><div onclick=\"seleccionarPublicarEstado('";
            // line 383
            echo twig_escape_filter($this->env, constant("lang_index_preventivo"), "html", null, true);
            echo "', 'preventivo', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "');\">";
            echo twig_escape_filter($this->env, constant("lang_index_preventivos"), "html", null, true);
            echo "</div></li>
                            <li><div onclick=\"seleccionarPublicarEstado('";
            // line 384
            echo twig_escape_filter($this->env, constant("lang_index_ayuda"), "html", null, true);
            echo "', 'ayuda', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "');\">";
            echo twig_escape_filter($this->env, constant("lang_index_ayudas"), "html", null, true);
            echo "</div></li>
                        </ul>
                    </div>
                    <input class=\"inputMascota\" id=\"inputMascota";
            // line 387
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "\" type=\"hidden\" name=\"especie\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "especie"), "html", null, true);
            echo "\">
                    <div id=\"aMascota";
            // line 388
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "\" class=\"btn-claro aMascota\">GG";
            echo twig_escape_filter($this->env, constant(("lang_publicar_" . $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "especie"))), "html", null, true);
            echo "</div>
                    <div id=\"dMascota";
            // line 389
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "\" class=\"dMascota\">
                        <ul class=\"dropdown\">
                            ";
            // line 391
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["razas"]) ? $context["razas"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 392
                echo "                                <li><div onclick=\"seleccionarPublicarEspecie('";
                echo twig_escape_filter($this->env, constant(("lang_publicar_" . $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "especie"))), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "especie"), "html", null, true);
                echo "');\">";
                echo twig_escape_filter($this->env, constant(("lang_publicar_" . $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "especie"))), "html", null, true);
                echo "</div></li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 394
            echo "                        </ul>
                    </div>
                    <input id=\"inputRaza";
            // line 396
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "\" class=\"inputRaza\" type=\"hidden\" name=\"raza\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "raza"), "html", null, true);
            echo "\">
                    <div id=\"aRaza";
            // line 397
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "\" class=\"btn-oscuro aRaza\">";
            echo twig_escape_filter($this->env, constant(("lang_raza_" . $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "nraza"))), "html", null, true);
            echo "</div>
                    <div id=\"dRaza";
            // line 398
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : null), "id"), "html", null, true);
            echo "\" class=\"dRaza\">
                        <?php
                            \$sql2=mysql_query(\"SELECT * FROM razas WHERE especie = '\$especie' ORDER by nombre ASC\",\$con);
                            while(\$row2 = mysql_fetch_array(\$sql2)){  
                                echo '<li><div onclick=\"seleccionarPublicarRaza(\\''.\$lang_raza[\$row2[\"nombre\"]].'\\', \\''.\$row2[\"id\"].'\\');\">'.\$lang_raza[\$row2[\"nombre\"]].'</div></li>';
                            }                                
                        ?>      
                    </div>
                    <input id=\"inputSexo";
            // line 406
            echo "\" class=\"inputSexo\" type=\"hidden\" name=\"sexo\" value=\"<?php echo \$row[\"sexo\"]; ?>\">
                    <div id=\"aSexo<?php echo \$row[\"id\"]; ?>\" class=\"btn-claro aSexo\"><?php echo ucFirst(\$lang_publicar[\$row[\"sexo\"]]); ?></div>
                    <div id=\"dSexo<?php echo \$row[\"id\"]; ?>\" class=\"dSexo\">
                        <ul class=\"dropdown\">
                            <li><div onclick=\"seleccionarPublicarSexo('<?php echo ucFirst(\$lang_publicar[\"hembra\"]); ?>', 'hembra', '<?php echo \$row[\"id\"]; ?>');\"><?php echo ucFirst(\$lang_publicar[\"hembra\"]); ?></div></li>
                            <li><div onclick=\"seleccionarPublicarSexo('<?php echo ucFirst(\$lang_publicar[\"macho\"]); ?>', 'macho', '<?php echo \$row[\"id\"]; ?>');\"><?php echo ucFirst(\$lang_publicar[\"macho\"]); ?></div></li>
                        </ul>
                    </div>
                    <input class=\"inputZona\" id=\"inputZona<?php echo \$row[\"id\"]; ?>\" type=\"hidden\" name=\"provincia\" value=\"<?php echo \$row[\"provincia\"]; ?>\">
                    <a id=\"aZona<?php echo \$row[\"id\"]; ?>\" class=\"btn-claro aZona\" href=\"#\"><?php echo \$row[\"nprovincia\"]; ?></a>
                    <div class=\"dZona\" id=\"dZona<?php echo \$row[\"id\"]; ?>\">
                        <ul class=\"dropdown\">
                            <?php
                                \$sql2=mysql_query(\"SELECT * FROM regiones WHERE id_pais = '\$row[pais]' ORDER by nombre ASC\",\$con);
                                while(\$row2 = mysql_fetch_array(\$sql2)){  
                                    echo '<li><div onclick=\"seleccionarPublicarZona(\\''.\$row2[\"nombre\"].'\\', \\''.\$row2[\"id\"].'\\', \\''.\$row[\"id\"].'\\');\">'.\$row2[\"nombre\"].'</div></li>';
                                }                                
                            ?>
                        </ul>
                    </div>
                    <input class=\"inputUbicacion\" id=\"inputUbicacion<?php echo \$row[\"id\"]; ?>\" type=\"hidden\" name=\"localidad\" value=\"<?php echo \$row[\"localidad\"]; ?>\">
                    <div class=\"btn-oscuro aUbicacion\" id=\"aUbicacion<?php echo \$row[\"id\"]; ?>\"><?php echo \$row[\"nlocalidad\"]; ?></div>
                    <div class=\"dUbicacion\" id=\"dUbicacion<?php echo \$row[\"id\"]; ?>\">
                        <ul class=\"dropdown\">
                        <?php
                            \$sql2=mysql_query(\"SELECT * FROM localidades WHERE id_region = '\$row[provincia]' ORDER by nombre ASC\",\$con);
                            while(\$row2 = mysql_fetch_array(\$sql2)){  
                                echo '<li><div onclick=\"seleccionarPublicarUbicacion(\\''.\$row2[\"nombre\"].'\\', \\''.\$row2[\"id\"].'\\', \\''.\$row[\"id\"].'\\');\">'.\$row2[\"nombre\"].'</div></li>';                                  
                            }                                
                        ?>
                        </ul>
                    </div>
                    <input class=\"inputMicrochip\" id=\"inputMicrochip<?php echo \$row[\"id\"]; ?>\" type=\"text\" name=\"microchip\" value=\"<?php echo \$row[\"microchip\"]; ?>\" placeholder=\"<?php echo \$lang_index[\"numeroDeMicroChip\"]; ?>\">
                    <input id=\"inputEmail\" type=\"text\" name=\"email\" value=\"<?php echo \$row[\"mail\"]; ?>\" placeholder=\"<?php echo \$lang_index[\"emailDeContacto\"]; ?>\">
                    <input id=\"inputTelefono\" type=\"tel\" pattern=\"[\\+]\\d{2}[\\(]\\d{2}[\\)]\\d{4}[\\-]\\d{4}\" title=\"(<?php echo \$lang_index[\"formato\"]; ?>: +99(99)9999-9999)\" name=\"telefono\" value=\"<?php echo \$row[\"telefono\"]; ?>\" placeholder=\"<?php echo \$lang_index[\"quieresFacilitarTuNumero\"]; ?>\">
                    <input id=\"inputFecha<?php echo \$row[\"id\"]; ?>\" class=\"inputFecha\" type=\"text\" name=\"fecha\" value=\"<?php echo date(\"m/d/Y\", \$row[\"fechap\"]); ?>\">

                    <script>
                    \$(function() {
                        \$( \"#inputFecha<?php echo \$row[\"id\"]; ?>\" ).datepicker();
                        \$( \"#inputFecha<?php echo \$row[\"id\"]; ?>\" ).datepicker( \"option\", \"dateFormat\", \"dd/mm/yy\" );                             
                    });
                    </script>                        
                    <textarea id=\"textareaDescripcion\" name=\"comentario\" placeholder=\"<?php echo \$lang_index[\"descripcion\"]; ?>\"><?php echo \$row[\"comentario\"]; ?></textarea>
                    <div id=\"hArchivo<?php echo \$row[\"id\"]; ?>\" class=\"hArchivo\">
                        <div id=\"archivoFoto1<?php echo \$row[\"id\"]; ?>\" onclick=\"eliminarFoto('1', '<?php echo \$row[\"id\"]; ?>');\" class=\"archivoFoto\" style=\"background-image:url('fotos/<?php echo \$row[\"foto1\"]; ?>');\"><span id=\"fotoEliminar1<?php echo \$row[\"id\"]; ?>\" class=\"fotoEliminar\"><?php echo \$lang_index[\"eliminar\"]; ?></span></div>
                        <div id=\"archivoFoto2<?php echo \$row[\"id\"]; ?>\" onclick=\"eliminarFoto('2', '<?php echo \$row[\"id\"]; ?>');\" class=\"archivoFoto\" style=\"background-image:url('fotos/<?php echo \$row[\"foto2\"]; ?>');\"><span id=\"fotoEliminar2<?php echo \$row[\"id\"]; ?>\" class=\"fotoEliminar\"><?php echo \$lang_index[\"eliminar\"]; ?></span></div>
                        <div id=\"archivoFoto3<?php echo \$row[\"id\"]; ?>\" onclick=\"eliminarFoto('3', '<?php echo \$row[\"id\"]; ?>');\" class=\"archivoFoto\" style=\"background-image:url('fotos/<?php echo \$row[\"foto3\"]; ?>');\"><span id=\"fotoEliminar3<?php echo \$row[\"id\"]; ?>\" class=\"fotoEliminar\"><?php echo \$lang_index[\"eliminar\"]; ?></span></div>
                        <input id=\"inputArchivo1<?php echo \$row[\"id\"]; ?>\" onchange=\"readURL(this, 'archivoFoto1<?php echo \$row[\"id\"]; ?>');\" class=\"inputArchivo\" type=\"file\" name=\"foto1\" value=\"\">
                        <div id=\"aArchivo1<?php echo \$row[\"id\"]; ?>\" onclick=\"abrirInputArchivo('1', '<?php echo \$row[\"id\"]; ?>');\" class=\"aArchivo\"><?php echo \$lang_index[\"agregarFoto\"]; ?></div>
                        <input id=\"inputArchivo2<?php echo \$row[\"id\"]; ?>\" onchange=\"readURL(this, 'archivoFoto2<?php echo \$row[\"id\"]; ?>');\" class=\"inputArchivo\" type=\"file\" name=\"foto2\" value=\"\">
                        <div id=\"aArchivo2<?php echo \$row[\"id\"]; ?>\" onclick=\"abrirInputArchivo('2', '<?php echo \$row[\"id\"]; ?>');\" class=\"aArchivo\"><?php echo \$lang_index[\"agregarFoto\"]; ?></div>
                        <input id=\"inputArchivo3<?php echo \$row[\"id\"]; ?>\" onchange=\"readURL(this, 'archivoFoto3<?php echo \$row[\"id\"]; ?>');\" class=\"inputArchivo\" type=\"file\" name=\"foto3\" value=\"\">
                        <div id=\"aArchivo3<?php echo \$row[\"id\"]; ?>\" onclick=\"abrirInputArchivo('3', '<?php echo \$row[\"id\"]; ?>');\" class=\"aArchivo\"><?php echo \$lang_index[\"agregarFoto\"]; ?></div>  
                    </div>
                    <div class=\"lienzoSubmit btn-blancoDer\" onclick=\"editarPublicacion('<?php echo \$row[\"id\"]; ?>');\"><?php echo \$lang_index[\"guardarModificacion\"]; ?></div>

                    <div class=\"borrarFicha\">
                        <div class=\"borrarSeparador\"></div>
                        <span class=\"borrarTexto\"><?php echo \$lang_index[\"eliminarFicha\"]; ?></span>
                    <div class=\"lienzoSubmit5 btn-delete\" onclick=\"eliminarPublicacion('<?php echo \$row[\"id\"]; ?>', '2');\"><?php echo \$lang_index[\"eliminarFichaReencontrado\"]; ?></div>
                    <div class=\"lienzoSubmit5 btn-delete\" onclick=\"eliminarPublicacion('<?php echo \$row[\"id\"]; ?>', '0');\"><?php echo \$lang_index[\"eliminarFichaOtro\"]; ?></div>
                    </div>
                </form>
                <div class=\"publicarEditarError\" id=\"publicarEditarError<?php echo \$row[\"id\"]; ?>\">&nbsp;</div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 474
        echo "        <div class=\"lienzoContacto\" id=\"lienzoContacto\"> <!-- Formulario de contacto -->
        <h2>";
        // line 475
        echo twig_escape_filter($this->env, constant("lang_headerLienzos_contacta"), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, constant("lang_headerLienzos_conNosotros"), "html", null, true);
        echo "</h2>
        <form action=\"./contactaNosotros.php\" name=\"contactaNosotrosForm\" id=\"contactaNosotrosForm\" method=\"post\">
        <input class=\"contactamensajeAsunto\" id=\"contactaNosotrosmensajeAsunto\" type=\"text\" name=\"mensajeAsunto\" value=\"\" placeholder=\"";
        // line 477
        echo twig_escape_filter($this->env, constant("lang_headerLienzos_asunto"), "html", null, true);
        echo "\">
        <input class=\"contactamensajeNombre\" id=\"contactaNosotrosmensajeNombre\" type=\"text\" name=\"mensajeNombre\" value=\"\" placeholder=\"";
        // line 478
        echo twig_escape_filter($this->env, constant("lang_headerLienzos_nombre"), "html", null, true);
        echo "\">
        <input class=\"contactamensajeEmail\" id=\"contactaNosotrosmensajeEmail\" type=\"text\" name=\"mensajeEmail\" value=\"\" placeholder=\"";
        // line 479
        echo twig_escape_filter($this->env, constant("lang_headerLienzos_emailDeContacto"), "html", null, true);
        echo "\">
        <textarea class=\"contactamensajeDescripcion\" id=\"contactaNosotrosmensajeDescripcion\" placeholder=\"";
        // line 480
        echo twig_escape_filter($this->env, constant("lang_headerLienzos_queSucede"), "html", null, true);
        echo "\" name=\"mensajeDescripcion\"></textarea>
        <div class=\"contactamensajeCaptcha\" id=\"contactaNosotrosmensajeCaptcha\">        
        <!-- START CAPTCHA WITH CUSTOM CSS-->
        <div id=\"recaptcha_widget\" style=\"display:none\">
        <div class=\"recaptcha_tools\">
        <div class=\"recaptcha_reload\"><a href=\"javascript:Recaptcha.reload()\"></a></div>
        <div class=\"recaptcha_only_if_image\"><a href=\"javascript:Recaptcha.switch_type('audio')\"></a></div>
        <div class=\"recaptcha_only_if_audio\"><a href=\"javascript:Recaptcha.switch_type('image')\"></a></div>
        <div class=\"recaptcha_help\"><a href=\"javascript:Recaptcha.showhelp()\"></a></div>
        </div>
        <div id=\"recaptcha_image\"></div>
        <div class=\"recaptcha_only_if_incorrect_sol\" style=\"color:red\">Incorrecto, inténtalo de nuevo.</div>
        <input type=\"text\" id=\"recaptcha_response_field\" name=\"recaptcha_response_field\" placeholder=\"";
        // line 492
        echo twig_escape_filter($this->env, constant("lang_headerLienzos_escribirCaptcha"), "html", null, true);
        echo "\">
        <script type=\"text/javascript\" src=\"http://www.google.com/recaptcha/api/challenge?k=6LfiTPgSAAAAAMysTcqc12T9KFYVuzYM2pMbBRJU\"></script>
        <noscript>
        <iframe src=\"http://www.google.com/recaptcha/api/noscript?k=6LfiTPgSAAAAAMysTcqc12T9KFYVuzYM2pMbBRJU\" height=\"300\" width=\"500\" frameborder=\"0\"></iframe><br>
        <textarea name=\"recaptcha_challenge_field\" rows=\"3\" cols=\"40\"></textarea>
        <input type=\"hidden\" name=\"recaptcha_response_field\" value=\"manual_challenge\">
        </noscript>
        </div>
        <!-- END CAPTCHA WITH CUSTOM CSS-->
        </div>
        <input onclick=\"contactaNosotros()\" type=\"button\" class=\"lienzoSubmit2 btn-blancoDer2\" value=\"";
        // line 502
        echo twig_escape_filter($this->env, constant("lang_headerLienzos_enviarMensaje"), "html", null, true);
        echo "\">
        </form>
        <div id=\"contactaErrorNosotros\" class=\"contactoError\"></div>
        </div>

        <div id=\"lienzoIdioma\"> <!-- configuración de país e idioma -->
        <h2>";
        // line 508
        echo twig_escape_filter($this->env, constant("lang_headerLienzos_configuracion"), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, constant("lang_headerLienzos_deIdiomayLocalizacion"), "html", null, true);
        echo "</h2>
        <form action=\"./cfg/pais/idioma\" method=\"post\" id=\"cfgPaisIdioma\">
        <label class=\"lienzoCampo\">";
        // line 510
        echo twig_escape_filter($this->env, constant("lang_headerLienzos_pais"), "html", null, true);
        echo "</label>
        <input id=\"inputPais\" type=\"hidden\" name=\"inputPais\" value=\"";
        // line 511
        echo twig_escape_filter($this->env, (isset($context["pais_id"]) ? $context["pais_id"] : null), "html", null, true);
        echo "\">
        <div id=\"aPais\" class=\"btn-claro\">";
        // line 512
        echo twig_escape_filter($this->env, (isset($context["pais"]) ? $context["pais"] : null), "html", null, true);
        echo "</div>
        <div id=\"dPais\">
        <ul class=\"dropdown\">
        ";
        // line 515
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paises"]) ? $context["paises"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 516
            echo "        ";
            if (($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id") != (isset($context["pais_id"]) ? $context["pais_id"] : null))) {
                // line 517
                echo "            <li><div onclick=\"seleccionarCfgPais('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "nombre"), "html", null, true);
                echo "')\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "nombre"), "html", null, true);
                echo "</div></li>
        ";
            }
            // line 519
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 520
        echo "        </ul>
        </div>
        <label class=\"lienzoCampo\">";
        // line 522
        echo twig_escape_filter($this->env, constant("lang_headerLienzos_idioma"), "html", null, true);
        echo "</label>
        <input id=\"inputIdioma\" type=\"hidden\" name=\"inputIdioma\" value=\"";
        // line 523
        echo twig_escape_filter($this->env, (isset($context["idioma_id"]) ? $context["idioma_id"] : null), "html", null, true);
        echo "\">
        <div id=\"aIdioma\" class=\"btn-claro\">";
        // line 524
        echo twig_escape_filter($this->env, (isset($context["idioma"]) ? $context["idioma"] : null), "html", null, true);
        echo "</div>                   
        <div id=\"dIdioma\">
        <ul class=\"dropdown\">
        ";
        // line 527
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["idiomas"]) ? $context["idiomas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 528
            echo "        <li><div onclick=\"seleccionarCfgIdioma('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : null), "id"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : null), "codigo"), "html", null, true);
            echo "')\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : null), "codigo"), "html", null, true);
            echo "</div></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 530
        echo "        </ul>
        </div>
        <input type=\"button\" onclick=\"guardarCfgPaisIdioma()\" class=\"lienzoSubmit btn-blancoDer\" value=\"";
        // line 532
        echo twig_escape_filter($this->env, constant("lang_headerLienzos_aceptar"), "html", null, true);
        echo "\">
        </form>
        </div>


        <script>
        \$('#seccionIndex').addClass('activeSeccion');
        </script>
        <script src=\"js/index.js\"></script>


        </div>

        </div>

        ";
        // line 547
        $this->displayBlock('content_page', $context, $blocks);
        // line 551
        echo "
    ";
        // line 552
        $this->env->loadTemplate("perdidosenlaciudad/footer.twig")->display($context);
        // line 553
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
        echo twig_escape_filter($this->env, constant("lang_header_title"), "html", null, true);
        echo "</title>
            <meta name=\"description\" content=\"\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <meta name=\"google-site-verification\" content=\"FWwXfmQ6vykkb0gVnzpx4ihRA1aroDBog_W4AKW21Q0\" />
            <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

            <link rel=\"stylesheet\" href=\"css/style.css\">

            <link href='http://fonts.googleapis.com/css?family=Roboto:400italic,400,700' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700,400' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:100,400,300,700' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Oswald:700,400' rel='stylesheet' type='text/css'>

            <script src=\"vendor/modernizr-2.6.2.min.js\"></script>

            <script src=\"vendor/jquery.min.js\"></script>
            <script>window.jQuery || document.write('<script src=\"vendor/jquery-1.10.2.min.js\"><\\/script>')</script>
            <script src=\"vendor/jquery-ui.js\"></script>        

            <script type=\"text/javascript\">
              var RecaptchaOptions = {
                  tabindex: 1,
                  theme: 'custom',
                  custom_theme_widget: 'recaptcha_widget'
              };
            </script>        


        ";
    }

    // line 547
    public function block_content_page($context, array $blocks = array())
    {
        // line 548
        echo "        

        ";
    }

    public function getTemplateName()
    {
        return "perdidosenlaciudad/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1225 => 548,  1222 => 547,  1189 => 15,  1185 => 13,  1182 => 12,  1175 => 553,  1173 => 552,  1170 => 551,  1168 => 547,  1150 => 532,  1146 => 530,  1133 => 528,  1129 => 527,  1123 => 524,  1119 => 523,  1115 => 522,  1111 => 520,  1105 => 519,  1095 => 517,  1092 => 516,  1088 => 515,  1082 => 512,  1078 => 511,  1074 => 510,  1067 => 508,  1058 => 502,  1045 => 492,  1030 => 480,  1026 => 479,  1022 => 478,  1018 => 477,  1011 => 475,  1008 => 474,  935 => 406,  924 => 398,  918 => 397,  912 => 396,  908 => 394,  893 => 392,  889 => 391,  884 => 389,  878 => 388,  872 => 387,  862 => 384,  854 => 383,  846 => 382,  838 => 381,  830 => 380,  825 => 378,  819 => 377,  813 => 376,  807 => 375,  801 => 374,  797 => 373,  790 => 369,  784 => 368,  778 => 367,  772 => 366,  766 => 365,  762 => 364,  758 => 363,  752 => 362,  748 => 361,  736 => 352,  729 => 350,  724 => 348,  720 => 347,  714 => 346,  709 => 344,  703 => 343,  698 => 340,  686 => 334,  684 => 333,  680 => 331,  668 => 329,  666 => 328,  663 => 327,  651 => 325,  649 => 324,  638 => 320,  632 => 319,  628 => 318,  621 => 316,  617 => 315,  610 => 311,  603 => 309,  597 => 308,  591 => 307,  585 => 306,  579 => 305,  573 => 304,  567 => 303,  562 => 302,  558 => 301,  552 => 298,  533 => 282,  529 => 281,  519 => 280,  513 => 279,  507 => 276,  500 => 272,  493 => 270,  489 => 269,  485 => 268,  477 => 267,  467 => 266,  462 => 264,  454 => 261,  440 => 250,  436 => 248,  430 => 236,  426 => 235,  409 => 220,  394 => 219,  390 => 218,  383 => 216,  377 => 213,  373 => 212,  370 => 211,  366 => 209,  364 => 208,  361 => 207,  357 => 205,  355 => 204,  351 => 203,  347 => 201,  338 => 199,  328 => 197,  325 => 196,  321 => 195,  318 => 194,  310 => 193,  308 => 192,  302 => 189,  298 => 188,  287 => 179,  278 => 177,  269 => 176,  265 => 175,  259 => 174,  253 => 171,  249 => 170,  244 => 168,  236 => 165,  230 => 164,  224 => 163,  218 => 162,  212 => 161,  206 => 160,  200 => 157,  196 => 156,  192 => 155,  185 => 153,  153 => 126,  147 => 125,  141 => 122,  126 => 110,  122 => 109,  118 => 108,  114 => 107,  100 => 96,  91 => 90,  85 => 87,  78 => 83,  37 => 44,  35 => 12,  23 => 2,  21 => 1,);
    }
}
