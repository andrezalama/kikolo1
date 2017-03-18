<?php

/* projectoKikoloBundle:Kikolo-Default:index.html.twig */
class __TwigTemplate_f6cb9236188d39e7ca86a81e92b240aa34de045e98adadf5c86e84f3b24709c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("projectoKikoloBundle::Layout.html.twig", "projectoKikoloBundle:Kikolo-Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'container1' => array($this, 'block_container1'),
            'container0' => array($this, 'block_container0'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "projectoKikoloBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e56d6a3ea18e6b0fa7502ad7a2ce22953be4be98e6bbfe3180abe7ea6138ee90 = $this->env->getExtension("native_profiler");
        $__internal_e56d6a3ea18e6b0fa7502ad7a2ce22953be4be98e6bbfe3180abe7ea6138ee90->enter($__internal_e56d6a3ea18e6b0fa7502ad7a2ce22953be4be98e6bbfe3180abe7ea6138ee90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projectoKikoloBundle:Kikolo-Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e56d6a3ea18e6b0fa7502ad7a2ce22953be4be98e6bbfe3180abe7ea6138ee90->leave($__internal_e56d6a3ea18e6b0fa7502ad7a2ce22953be4be98e6bbfe3180abe7ea6138ee90_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b19958041627d6600fc5993f4546ea9470f3fe447dbd781cf4bb15aadaa878a2 = $this->env->getExtension("native_profiler");
        $__internal_b19958041627d6600fc5993f4546ea9470f3fe447dbd781cf4bb15aadaa878a2->enter($__internal_b19958041627d6600fc5993f4546ea9470f3fe447dbd781cf4bb15aadaa878a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    <title>Kikolo-anuncio-Classificados</title>
";
        
        $__internal_b19958041627d6600fc5993f4546ea9470f3fe447dbd781cf4bb15aadaa878a2->leave($__internal_b19958041627d6600fc5993f4546ea9470f3fe447dbd781cf4bb15aadaa878a2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f4d78a46b0e097f07f68add8473b2edbc3ac8ad6e820d5b05b73503327fe7a6 = $this->env->getExtension("native_profiler");
        $__internal_3f4d78a46b0e097f07f68add8473b2edbc3ac8ad6e820d5b05b73503327fe7a6->enter($__internal_3f4d78a46b0e097f07f68add8473b2edbc3ac8ad6e820d5b05b73503327fe7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->displayBlock('container1', $context, $blocks);
        // line 50
        echo "    <div class=\"\">
        ";
        // line 51
        $this->loadTemplate("projectoKikoloBundle:Kikolo-anuncio-portofolio:Portofolios.html.twig", "projectoKikoloBundle:Kikolo-Default:index.html.twig", 51)->display($context);
        // line 52
        echo "\t</div>
    ";
        // line 53
        $this->displayBlock('container0', $context, $blocks);
        // line 258
        echo "
";
        
        $__internal_3f4d78a46b0e097f07f68add8473b2edbc3ac8ad6e820d5b05b73503327fe7a6->leave($__internal_3f4d78a46b0e097f07f68add8473b2edbc3ac8ad6e820d5b05b73503327fe7a6_prof);

    }

    // line 6
    public function block_container1($context, array $blocks = array())
    {
        $__internal_dd7aac4ba2640627c7d9727bbd6493d8a024039826135e6578e32f5ef09374db = $this->env->getExtension("native_profiler");
        $__internal_dd7aac4ba2640627c7d9727bbd6493d8a024039826135e6578e32f5ef09374db->enter($__internal_dd7aac4ba2640627c7d9727bbd6493d8a024039826135e6578e32f5ef09374db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container1"));

        // line 7
        echo "        <div class=\"container-carousel\">
            <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"3\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"4\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"5\"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"item active\">
                        <img class=\"img-responsive img-full\" src=\"img/BAI-Mobile.jpg\" alt=\"\">
                    </div>
                    <div class=\"item\">
                        <img class=\"img-responsive img-full\" src=\"img/BPC.jpg\" alt=\"\">
                    </div>
                    <div class=\"item\">
                        <img class=\"img-responsive img-full \" src=\"img/Unitel-KiSom-Banner.jpg\" alt=\"\">
                    </div>
\t\t\t\t\t<div class=\"item\">
                        <img class=\"img-responsive img-full \" src=\"img/net-movicel-promo.png\" alt=\"\">
                    </div>
\t\t\t\t\t<div class=\"item\">
                        <img class=\"img-responsive img-full \" src=\"img/mini.jpg\" alt=\"\">
                    </div>
\t\t\t\t\t<div class=\"item\">
                        <img class=\"img-responsive img-full \" src=\"img/BFA-App.png\" alt=\"\">
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                    <span class=\"icon-prev\"></span>
                </a>
                <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                    <span class=\"icon-next\"></span>
                </a>
            </div>
        </div>
        </div>
    ";
        
        $__internal_dd7aac4ba2640627c7d9727bbd6493d8a024039826135e6578e32f5ef09374db->leave($__internal_dd7aac4ba2640627c7d9727bbd6493d8a024039826135e6578e32f5ef09374db_prof);

    }

    // line 53
    public function block_container0($context, array $blocks = array())
    {
        $__internal_6b5c0e5ace78417a60bcfd0dd578b027f591306b880d302f5c1b9af8f59f3097 = $this->env->getExtension("native_profiler");
        $__internal_6b5c0e5ace78417a60bcfd0dd578b027f591306b880d302f5c1b9af8f59f3097->enter($__internal_6b5c0e5ace78417a60bcfd0dd578b027f591306b880d302f5c1b9af8f59f3097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container0"));

        // line 54
        echo "
            <div class=\"container\">
                <div class=\"row \">
                    <div class=\"col-lg-20 text-center\">
                        <h4>Categorias</h4>
                        <hr>
                    </div>
                </div>
                <div class=\"row\">
\t\t\t<div class=\"col-lg-4\">
               
                <div class=\"list-group\">
                   <div class=\"list-group-item\">
                            <p  id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\" >
                                <span class=\"fa fa-plug fa-1x\"></span>  Electricidade
                                <span class=\"caret\"></span>
                            </p>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"#\">Tomadas e Fichas</a></li>
                                <li><a href=\"#\">Lampadas</a></li>
                                <li><a href=\"#\">Cabos</a></li>
                                </ul> </div>
                <div class=\"list-group-item\">
\t\t\t\t\t<p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                <span class=\"fa fa-qq\"></span> Animais
                                <span class=\"caret\"></span>
                            </p>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                            </ul> </div>
                   <div class=\"list-group-item\">
\t\t\t\t\t<p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                <span class=\"fa fa-desktop fa-1x\"></span> Electronico
                                <span class=\"caret\"></span>
                            </p>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                            </ul> </div>
\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                <span class=\"fa fa-laptop fa-1x\"></span> Computador & Electronico  <span class=\"caret\"></span>
                            </p>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                            </ul> </div>
\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t  <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                          <span class=\"fa fa-suitcase fa-1x\"></span> Vestuario & Malas  <span class=\"caret\"></span>
                            </p>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                            </ul> </div>
                </div>
\t\t\t\t
               </div>
            <div class=\"col-lg-4\">
            <div class=\"list-group\">
                   <div class=\"list-group-item\">
                            <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                <span class=\"fa fa-book fa-1x\"></span> Livos & Cadernos
                                <span class=\"caret\"></span>
                            </p>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                            </ul> </div>
\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                           <span class=\"fa fa-tablet fa-1x\"></span> Telemoveis & Tablets<span class=\"caret\"></span>
                            </p>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                            </ul> </div>
                    
                        <div class=\"list-group-item\">
                            <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                <span class=\"glyphicon glyphicon-grain fa-1x \"></span> Alimentos
                                <span class=\"caret\"></span>
                            </p>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                            </ul> </div>
                       <div class=\"list-group-item\">
                            <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                <span class=\"fa fa-gamepad fa-1x\"></span> Games & Lazer
                                <span class=\"caret\"></span>
                            </p>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                            </ul> </div>
                        <div class=\"list-group-item\">
                            <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                <span class=\"fa fa-building-o fa-1x\"></span> Construção Civil
                                <span class=\"caret\"></span>
                            </p>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                            </ul> </div>
                    </div>
\t\t\t\t\t</div>
            <div class=\"col-lg-4 \">
                      <div class=\"list-group\">
                   <div class=\"list-group-item\">
                            <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                <span class=\"fa fa-briefcase fa-1x\"></span> Emprego
                                <span class=\"caret\"></span>
                            </p>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                            </ul> </div>
                        <div class=\"list-group-item\">
                            <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                <span class=\"fa fa-bicycle fa-1x\"></span> Motos & Bicicletas
                                <span class=\"caret\"></span>
                            </p>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                            </ul></div>
                        <div class=\"list-group-item\">
                            <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                <span class=\"fa fa-car fa-1x\"></span>  Automovél & Barcos
                                <span class=\"caret\"></span>
                            </p>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                            </ul></div>
                        <div class=\"list-group-item\">
                            <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                <span class=\"fa fa-home fa-1x\"></span> Imoveis
                                <span class=\"caret\"></span>
                            </p>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                            </ul></div>
                         <div class=\"list-group-item\">
                            <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                <span class=\"fa fa-cogs fa-1x\"></span> Peças Mecanicas
                                <span class=\"caret\"></span>
                            </p>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                            </ul></div>
                    </div>
                    
                </div>
            </div>
            </div>

    ";
        
        $__internal_6b5c0e5ace78417a60bcfd0dd578b027f591306b880d302f5c1b9af8f59f3097->leave($__internal_6b5c0e5ace78417a60bcfd0dd578b027f591306b880d302f5c1b9af8f59f3097_prof);

    }

    public function getTemplateName()
    {
        return "projectoKikoloBundle:Kikolo-Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 54,  132 => 53,  83 => 7,  77 => 6,  69 => 258,  67 => 53,  64 => 52,  62 => 51,  59 => 50,  57 => 6,  51 => 5,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends "projectoKikoloBundle::Layout.html.twig" %}*/
/* {% block title %}*/
/*     <title>Kikolo-anuncio-Classificados</title>*/
/* {% endblock title %}*/
/* {% block body -%}*/
/*     {% block container1 %}*/
/*         <div class="container-carousel">*/
/*             <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">*/
/*                 <!-- Indicators -->*/
/*                 <ol class="carousel-indicators">*/
/*                     <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>*/
/*                     <li data-target="#carousel-example-generic" data-slide-to="1"></li>*/
/*                     <li data-target="#carousel-example-generic" data-slide-to="2"></li>*/
/*                     <li data-target="#carousel-example-generic" data-slide-to="3"></li>*/
/*                     <li data-target="#carousel-example-generic" data-slide-to="4"></li>*/
/*                     <li data-target="#carousel-example-generic" data-slide-to="5"></li>*/
/*                 </ol>*/
/*                 <!-- Wrapper for slides -->*/
/*                 <div class="carousel-inner" role="listbox">*/
/*                     <div class="item active">*/
/*                         <img class="img-responsive img-full" src="img/BAI-Mobile.jpg" alt="">*/
/*                     </div>*/
/*                     <div class="item">*/
/*                         <img class="img-responsive img-full" src="img/BPC.jpg" alt="">*/
/*                     </div>*/
/*                     <div class="item">*/
/*                         <img class="img-responsive img-full " src="img/Unitel-KiSom-Banner.jpg" alt="">*/
/*                     </div>*/
/* 					<div class="item">*/
/*                         <img class="img-responsive img-full " src="img/net-movicel-promo.png" alt="">*/
/*                     </div>*/
/* 					<div class="item">*/
/*                         <img class="img-responsive img-full " src="img/mini.jpg" alt="">*/
/*                     </div>*/
/* 					<div class="item">*/
/*                         <img class="img-responsive img-full " src="img/BFA-App.png" alt="">*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- Left and right controls -->*/
/*                 <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">*/
/*                     <span class="icon-prev"></span>*/
/*                 </a>*/
/*                 <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">*/
/*                     <span class="icon-next"></span>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*         </div>*/
/*     {% endblock %}*/
/*     <div class="">*/
/*         {% include "projectoKikoloBundle:Kikolo-anuncio-portofolio:Portofolios.html.twig" %}*/
/* 	</div>*/
/*     {% block container0 %}*/
/* */
/*             <div class="container">*/
/*                 <div class="row ">*/
/*                     <div class="col-lg-20 text-center">*/
/*                         <h4>Categorias</h4>*/
/*                         <hr>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/* 			<div class="col-lg-4">*/
/*                */
/*                 <div class="list-group">*/
/*                    <div class="list-group-item">*/
/*                             <p  id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" >*/
/*                                 <span class="fa fa-plug fa-1x"></span>  Electricidade*/
/*                                 <span class="caret"></span>*/
/*                             </p>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 <li><a href="#">Tomadas e Fichas</a></li>*/
/*                                 <li><a href="#">Lampadas</a></li>*/
/*                                 <li><a href="#">Cabos</a></li>*/
/*                                 </ul> </div>*/
/*                 <div class="list-group-item">*/
/* 					<p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                                 <span class="fa fa-qq"></span> Animais*/
/*                                 <span class="caret"></span>*/
/*                             </p>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 <li><a href="#">Action</a></li>*/
/*                                 <li><a href="#">Another action</a></li>*/
/*                                 <li><a href="#">Something else here</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Separated link</a></li>*/
/*                             </ul> </div>*/
/*                    <div class="list-group-item">*/
/* 					<p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                                 <span class="fa fa-desktop fa-1x"></span> Electronico*/
/*                                 <span class="caret"></span>*/
/*                             </p>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 <li><a href="#">Action</a></li>*/
/*                                 <li><a href="#">Another action</a></li>*/
/*                                 <li><a href="#">Something else here</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Separated link</a></li>*/
/*                             </ul> </div>*/
/* 					<div class="list-group-item">*/
/* 					 <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                                 <span class="fa fa-laptop fa-1x"></span> Computador & Electronico  <span class="caret"></span>*/
/*                             </p>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 <li><a href="#">Action</a></li>*/
/*                                 <li><a href="#">Another action</a></li>*/
/*                                 <li><a href="#">Something else here</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Separated link</a></li>*/
/*                             </ul> </div>*/
/* 					<div class="list-group-item">*/
/* 					  <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                           <span class="fa fa-suitcase fa-1x"></span> Vestuario & Malas  <span class="caret"></span>*/
/*                             </p>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 <li><a href="#">Action</a></li>*/
/*                                 <li><a href="#">Another action</a></li>*/
/*                                 <li><a href="#">Something else here</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Separated link</a></li>*/
/*                             </ul> </div>*/
/*                 </div>*/
/* 				*/
/*                </div>*/
/*             <div class="col-lg-4">*/
/*             <div class="list-group">*/
/*                    <div class="list-group-item">*/
/*                             <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                                 <span class="fa fa-book fa-1x"></span> Livos & Cadernos*/
/*                                 <span class="caret"></span>*/
/*                             </p>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 <li><a href="#">Action</a></li>*/
/*                                 <li><a href="#">Another action</a></li>*/
/*                                 <li><a href="#">Something else here</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Separated link</a></li>*/
/*                             </ul> </div>*/
/* 						<div class="list-group-item">*/
/* 					 <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                            <span class="fa fa-tablet fa-1x"></span> Telemoveis & Tablets<span class="caret"></span>*/
/*                             </p>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 <li><a href="#">Action</a></li>*/
/*                                 <li><a href="#">Another action</a></li>*/
/*                                 <li><a href="#">Something else here</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Separated link</a></li>*/
/*                             </ul> </div>*/
/*                     */
/*                         <div class="list-group-item">*/
/*                             <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                                 <span class="glyphicon glyphicon-grain fa-1x "></span> Alimentos*/
/*                                 <span class="caret"></span>*/
/*                             </p>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 <li><a href="#">Action</a></li>*/
/*                                 <li><a href="#">Another action</a></li>*/
/*                                 <li><a href="#">Something else here</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Separated link</a></li>*/
/*                             </ul> </div>*/
/*                        <div class="list-group-item">*/
/*                             <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                                 <span class="fa fa-gamepad fa-1x"></span> Games & Lazer*/
/*                                 <span class="caret"></span>*/
/*                             </p>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 <li><a href="#">Action</a></li>*/
/*                                 <li><a href="#">Another action</a></li>*/
/*                                 <li><a href="#">Something else here</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Separated link</a></li>*/
/*                             </ul> </div>*/
/*                         <div class="list-group-item">*/
/*                             <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                                 <span class="fa fa-building-o fa-1x"></span> Construção Civil*/
/*                                 <span class="caret"></span>*/
/*                             </p>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 <li><a href="#">Action</a></li>*/
/*                                 <li><a href="#">Another action</a></li>*/
/*                                 <li><a href="#">Something else here</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Separated link</a></li>*/
/*                             </ul> </div>*/
/*                     </div>*/
/* 					</div>*/
/*             <div class="col-lg-4 ">*/
/*                       <div class="list-group">*/
/*                    <div class="list-group-item">*/
/*                             <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                                 <span class="fa fa-briefcase fa-1x"></span> Emprego*/
/*                                 <span class="caret"></span>*/
/*                             </p>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 <li><a href="#">Action</a></li>*/
/*                                 <li><a href="#">Another action</a></li>*/
/*                                 <li><a href="#">Something else here</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Separated link</a></li>*/
/*                             </ul> </div>*/
/*                         <div class="list-group-item">*/
/*                             <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                                 <span class="fa fa-bicycle fa-1x"></span> Motos & Bicicletas*/
/*                                 <span class="caret"></span>*/
/*                             </p>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 <li><a href="#">Action</a></li>*/
/*                                 <li><a href="#">Another action</a></li>*/
/*                                 <li><a href="#">Something else here</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Separated link</a></li>*/
/*                             </ul></div>*/
/*                         <div class="list-group-item">*/
/*                             <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                                 <span class="fa fa-car fa-1x"></span>  Automovél & Barcos*/
/*                                 <span class="caret"></span>*/
/*                             </p>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 <li><a href="#">Action</a></li>*/
/*                                 <li><a href="#">Another action</a></li>*/
/*                                 <li><a href="#">Something else here</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Separated link</a></li>*/
/*                             </ul></div>*/
/*                         <div class="list-group-item">*/
/*                             <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                                 <span class="fa fa-home fa-1x"></span> Imoveis*/
/*                                 <span class="caret"></span>*/
/*                             </p>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 <li><a href="#">Action</a></li>*/
/*                                 <li><a href="#">Another action</a></li>*/
/*                                 <li><a href="#">Something else here</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Separated link</a></li>*/
/*                             </ul></div>*/
/*                          <div class="list-group-item">*/
/*                             <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                                 <span class="fa fa-cogs fa-1x"></span> Peças Mecanicas*/
/*                                 <span class="caret"></span>*/
/*                             </p>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 <li><a href="#">Action</a></li>*/
/*                                 <li><a href="#">Another action</a></li>*/
/*                                 <li><a href="#">Something else here</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Separated link</a></li>*/
/*                             </ul></div>*/
/*                     </div>*/
/*                     */
/*                 </div>*/
/*             </div>*/
/*             </div>*/
/* */
/*     {% endblock%}*/
/* */
/* {% endblock %}*/
/* */
