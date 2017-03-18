<?php

/* anuncio/index.html.twig */
class __TwigTemplate_6f70e31102a077bc7803e0724459c2ab9372857ad5331ced8b099c23c9e69ebf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("projectoKikoloBundle::Layout.html.twig", "anuncio/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'container0' => array($this, 'block_container0'),
            'container1' => array($this, 'block_container1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "projectoKikoloBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a958b95f6d865ca3c63e195f4112bbb2d2f1ce31d9ebb94029132e4e58cdf7f4 = $this->env->getExtension("native_profiler");
        $__internal_a958b95f6d865ca3c63e195f4112bbb2d2f1ce31d9ebb94029132e4e58cdf7f4->enter($__internal_a958b95f6d865ca3c63e195f4112bbb2d2f1ce31d9ebb94029132e4e58cdf7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "anuncio/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a958b95f6d865ca3c63e195f4112bbb2d2f1ce31d9ebb94029132e4e58cdf7f4->leave($__internal_a958b95f6d865ca3c63e195f4112bbb2d2f1ce31d9ebb94029132e4e58cdf7f4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_06b0655a320945f6300599d601dc5e3c126ee74741e5fa5a496d5db0a8acacf8 = $this->env->getExtension("native_profiler");
        $__internal_06b0655a320945f6300599d601dc5e3c126ee74741e5fa5a496d5db0a8acacf8->enter($__internal_06b0655a320945f6300599d601dc5e3c126ee74741e5fa5a496d5db0a8acacf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    <title>Kikolo-cadastro-anuncio</title>
";
        
        $__internal_06b0655a320945f6300599d601dc5e3c126ee74741e5fa5a496d5db0a8acacf8->leave($__internal_06b0655a320945f6300599d601dc5e3c126ee74741e5fa5a496d5db0a8acacf8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d3202a970e932c79e78f52f79a4251c7a485ca4c393d208984a137e9fd0d554 = $this->env->getExtension("native_profiler");
        $__internal_0d3202a970e932c79e78f52f79a4251c7a485ca4c393d208984a137e9fd0d554->enter($__internal_0d3202a970e932c79e78f52f79a4251c7a485ca4c393d208984a137e9fd0d554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->loadTemplate("projectoKikoloBundle:Kikolo-Default:Portofolios.html.twig", "anuncio/index.html.twig", 6)->display($context);
        // line 7
        $this->displayBlock('container0', $context, $blocks);
        // line 268
        $this->displayBlock('container1', $context, $blocks);
        
        $__internal_0d3202a970e932c79e78f52f79a4251c7a485ca4c393d208984a137e9fd0d554->leave($__internal_0d3202a970e932c79e78f52f79a4251c7a485ca4c393d208984a137e9fd0d554_prof);

    }

    // line 7
    public function block_container0($context, array $blocks = array())
    {
        $__internal_569cdd344373b07ea112799ca8e64e4ba5c82dc1443e12fe66b8195fab49705b = $this->env->getExtension("native_profiler");
        $__internal_569cdd344373b07ea112799ca8e64e4ba5c82dc1443e12fe66b8195fab49705b->enter($__internal_569cdd344373b07ea112799ca8e64e4ba5c82dc1443e12fe66b8195fab49705b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container0"));

        // line 8
        echo "    <section class=\"success\" >
        <div class=\"container\">
            <div class=\"row \">
                <div class=\"col-lg-20 text-center\">
                   <h4>Categorias</h4>
                    <hr>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-2\">
                  <div class=\"dropdown\">
                     <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                         <span class=\"fa fa-plug fa-1x\"></span>  Electricidade
                        <span class=\"caret\"></span>
                    </p>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                    </ul> </div>
                    <div class=\"dropdown\">
                        <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                            <span class=\"fa fa-futbol-o fa-1x\"></span> Desportivo
                            <span class=\"caret\"></span>
                        </p>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\">Separated link</a></li>
                        </ul> </div>
                    <div class=\"dropdown\">
                        <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
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
                    <div class=\"dropdown\">
                        <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                            <span class=\"fa fa-laptop fa-1x\"></span> Computador  <span class=\"caret\"></span>
                        </p>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\">Separated link</a></li>
                        </ul> </div>
                    <div class=\"dropdown\">
                        <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                            <span class=\"glyphicon glyphicon-grain fa-1x\"></span> Alimentos  <span class=\"caret\"></span>
                        </p>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\">Separated link</a></li>
                        </ul> </div>
                </div>
                <div class=\"col-lg-3 col-lg-offset-1\">
                    <div class=\"dropdown\">
                        <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                            <span class=\"fa fa-book fa-1x\"></span> Livos e Cadernos
                            <span class=\"caret\"></span>
                        </p>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\">Separated link</a></li>
                        </ul> </div>
                    <div class=\"dropdown\">
                        <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                           <span class=\"fa fa-tablet fa-1x\"></span> Telemoveis e Tablets
                            <span class=\"caret\"></span>
                        </p>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\">Separated link</a></li>
                        </ul> </div>
                    <div class=\"dropdown\">
                        <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                            <span class=\"fa fa-suitcase fa-1x\"></span> Pastas e Malas
                            <span class=\"caret\"></span>
                        </p>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\">Separated link</a></li>
                        </ul> </div>
                    <div class=\"dropdown\">
                        <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                            <span class=\"fa fa-gamepad fa-1x\"></span> Games e Lazer
                            <span class=\"caret\"></span>
                        </p>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\">Separated link</a></li>
                        </ul> </div>
                    <div class=\"dropdown\">
                        <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                            <span class=\"fa fa-building-o fa-1x\"></span> Construção
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
                <div class=\"col-lg-3\">
                    <div class=\"dropdown\">
                        <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                            <span class=\"fa fa-newspaper-o fa-1x\"></span> Jornais e Revistas
                            <span class=\"caret\"></span>
                        </p>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\">Separated link</a></li>
                        </ul> </div>
                    <div class=\"dropdown\">
                        <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                            <span class=\"fa fa-bicycle fa-1x\"></span> Motos e Bicicletas
                            <span class=\"caret\"></span>
                        </p>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\">Separated link</a></li>
                        </ul></div>
                    <div class=\"dropdown\">
                        <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                            <span class=\"fa fa-car fa-1x\"></span>  Automovél e Barcos
                            <span class=\"caret\"></span>
                        </p>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\">Separated link</a></li>
                        </ul></div>
                    <div class=\"dropdown\">
                        <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                            <span class=\"fa fa-home fa-1x\"></span> Casa e Imoveis
                            <span class=\"caret\"></span>
                        </p>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\">Separated link</a></li>
                        </ul></div>
                    <div class=\"dropdown\">
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
                <div class=\"col-lg-2\">
                    <div class=\"dropdown\">
                        <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                            <span class=\"fa fa-link fa-1x\"></span> Vestuario
                            <span class=\"caret\"></span>
                        </p>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\">Separated link</a></li>
                        </ul> </div>
                    <div class=\"dropdown\">
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
                    <div class=\"dropdown\">
                    <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                       <span class=\"fa fa-wrench fa-1x\"></span> Serviços
                        <span class=\"caret\"></span>
                    </p>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                    </ul> </div>
                    <div class=\"dropdown\">
            <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
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
                    <div class=\"dropdown\">
                        <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                         <span class=\"fa fa-link fa-1x\"></span> Outros
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
            </div>
        </div>
        </div>
    </section>
";
        
        $__internal_569cdd344373b07ea112799ca8e64e4ba5c82dc1443e12fe66b8195fab49705b->leave($__internal_569cdd344373b07ea112799ca8e64e4ba5c82dc1443e12fe66b8195fab49705b_prof);

    }

    // line 268
    public function block_container1($context, array $blocks = array())
    {
        $__internal_0edb99a13215ae4129eef2e55b671ac011a60a52fe04562006b5705d8f54a08b = $this->env->getExtension("native_profiler");
        $__internal_0edb99a13215ae4129eef2e55b671ac011a60a52fe04562006b5705d8f54a08b->enter($__internal_0edb99a13215ae4129eef2e55b671ac011a60a52fe04562006b5705d8f54a08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container1"));

        // line 269
        echo "      <div class=\"container-carousel\">
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
                        <img class=\"img-responsive img-full\" src=\"../img/slide-1.jpg\" alt=\"\">
                    </div>
                    <div class=\"item\">
                        <img class=\"img-responsive img-full\" src=\"img/slide-2.jpg\" alt=\"\">
                    </div>
                    <div class=\"item\">
                        <img class=\"img-responsive img-full \" src=\"img/slide-3.jpg\" alt=\"\">
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
        
        $__internal_0edb99a13215ae4129eef2e55b671ac011a60a52fe04562006b5705d8f54a08b->leave($__internal_0edb99a13215ae4129eef2e55b671ac011a60a52fe04562006b5705d8f54a08b_prof);

    }

    public function getTemplateName()
    {
        return "anuncio/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 269,  340 => 268,  74 => 8,  68 => 7,  61 => 268,  59 => 7,  57 => 6,  51 => 5,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends "projectoKikoloBundle::Layout.html.twig" %}*/
/* {% block title %}*/
/*     <title>Kikolo-cadastro-anuncio</title>*/
/* {% endblock title %}*/
/* {% block body -%}*/
/*     {% include "projectoKikoloBundle:Kikolo-Default:Portofolios.html.twig" %}*/
/* {% block container0 %}*/
/*     <section class="success" >*/
/*         <div class="container">*/
/*             <div class="row ">*/
/*                 <div class="col-lg-20 text-center">*/
/*                    <h4>Categorias</h4>*/
/*                     <hr>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-lg-2">*/
/*                   <div class="dropdown">*/
/*                      <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                          <span class="fa fa-plug fa-1x"></span>  Electricidade*/
/*                         <span class="caret"></span>*/
/*                     </p>*/
/*                     <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                         <li><a href="#">Action</a></li>*/
/*                         <li><a href="#">Another action</a></li>*/
/*                         <li><a href="#">Something else here</a></li>*/
/*                         <li role="separator" class="divider"></li>*/
/*                         <li><a href="#">Separated link</a></li>*/
/*                     </ul> </div>*/
/*                     <div class="dropdown">*/
/*                         <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                             <span class="fa fa-futbol-o fa-1x"></span> Desportivo*/
/*                             <span class="caret"></span>*/
/*                         </p>*/
/*                         <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                             <li><a href="#">Action</a></li>*/
/*                             <li><a href="#">Another action</a></li>*/
/*                             <li><a href="#">Something else here</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#">Separated link</a></li>*/
/*                         </ul> </div>*/
/*                     <div class="dropdown">*/
/*                         <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                             <span class="fa fa-desktop fa-1x"></span> Electronico*/
/*                             <span class="caret"></span>*/
/*                         </p>*/
/*                         <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                             <li><a href="#">Action</a></li>*/
/*                             <li><a href="#">Another action</a></li>*/
/*                             <li><a href="#">Something else here</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#">Separated link</a></li>*/
/*                         </ul> </div>*/
/*                     <div class="dropdown">*/
/*                         <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                             <span class="fa fa-laptop fa-1x"></span> Computador  <span class="caret"></span>*/
/*                         </p>*/
/*                         <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                             <li><a href="#">Action</a></li>*/
/*                             <li><a href="#">Another action</a></li>*/
/*                             <li><a href="#">Something else here</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#">Separated link</a></li>*/
/*                         </ul> </div>*/
/*                     <div class="dropdown">*/
/*                         <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                             <span class="glyphicon glyphicon-grain fa-1x"></span> Alimentos  <span class="caret"></span>*/
/*                         </p>*/
/*                         <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                             <li><a href="#">Action</a></li>*/
/*                             <li><a href="#">Another action</a></li>*/
/*                             <li><a href="#">Something else here</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#">Separated link</a></li>*/
/*                         </ul> </div>*/
/*                 </div>*/
/*                 <div class="col-lg-3 col-lg-offset-1">*/
/*                     <div class="dropdown">*/
/*                         <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                             <span class="fa fa-book fa-1x"></span> Livos e Cadernos*/
/*                             <span class="caret"></span>*/
/*                         </p>*/
/*                         <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                             <li><a href="#">Action</a></li>*/
/*                             <li><a href="#">Another action</a></li>*/
/*                             <li><a href="#">Something else here</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#">Separated link</a></li>*/
/*                         </ul> </div>*/
/*                     <div class="dropdown">*/
/*                         <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                            <span class="fa fa-tablet fa-1x"></span> Telemoveis e Tablets*/
/*                             <span class="caret"></span>*/
/*                         </p>*/
/*                         <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                             <li><a href="#">Action</a></li>*/
/*                             <li><a href="#">Another action</a></li>*/
/*                             <li><a href="#">Something else here</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#">Separated link</a></li>*/
/*                         </ul> </div>*/
/*                     <div class="dropdown">*/
/*                         <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                             <span class="fa fa-suitcase fa-1x"></span> Pastas e Malas*/
/*                             <span class="caret"></span>*/
/*                         </p>*/
/*                         <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                             <li><a href="#">Action</a></li>*/
/*                             <li><a href="#">Another action</a></li>*/
/*                             <li><a href="#">Something else here</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#">Separated link</a></li>*/
/*                         </ul> </div>*/
/*                     <div class="dropdown">*/
/*                         <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                             <span class="fa fa-gamepad fa-1x"></span> Games e Lazer*/
/*                             <span class="caret"></span>*/
/*                         </p>*/
/*                         <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                             <li><a href="#">Action</a></li>*/
/*                             <li><a href="#">Another action</a></li>*/
/*                             <li><a href="#">Something else here</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#">Separated link</a></li>*/
/*                         </ul> </div>*/
/*                     <div class="dropdown">*/
/*                         <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                             <span class="fa fa-building-o fa-1x"></span> Construção*/
/*                             <span class="caret"></span>*/
/*                         </p>*/
/*                         <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                             <li><a href="#">Action</a></li>*/
/*                             <li><a href="#">Another action</a></li>*/
/*                             <li><a href="#">Something else here</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#">Separated link</a></li>*/
/*                         </ul> </div>*/
/*             </div>*/
/*                 <div class="col-lg-3">*/
/*                     <div class="dropdown">*/
/*                         <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                             <span class="fa fa-newspaper-o fa-1x"></span> Jornais e Revistas*/
/*                             <span class="caret"></span>*/
/*                         </p>*/
/*                         <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                             <li><a href="#">Action</a></li>*/
/*                             <li><a href="#">Another action</a></li>*/
/*                             <li><a href="#">Something else here</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#">Separated link</a></li>*/
/*                         </ul> </div>*/
/*                     <div class="dropdown">*/
/*                         <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                             <span class="fa fa-bicycle fa-1x"></span> Motos e Bicicletas*/
/*                             <span class="caret"></span>*/
/*                         </p>*/
/*                         <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                             <li><a href="#">Action</a></li>*/
/*                             <li><a href="#">Another action</a></li>*/
/*                             <li><a href="#">Something else here</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#">Separated link</a></li>*/
/*                         </ul></div>*/
/*                     <div class="dropdown">*/
/*                         <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                             <span class="fa fa-car fa-1x"></span>  Automovél e Barcos*/
/*                             <span class="caret"></span>*/
/*                         </p>*/
/*                         <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                             <li><a href="#">Action</a></li>*/
/*                             <li><a href="#">Another action</a></li>*/
/*                             <li><a href="#">Something else here</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#">Separated link</a></li>*/
/*                         </ul></div>*/
/*                     <div class="dropdown">*/
/*                         <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                             <span class="fa fa-home fa-1x"></span> Casa e Imoveis*/
/*                             <span class="caret"></span>*/
/*                         </p>*/
/*                         <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                             <li><a href="#">Action</a></li>*/
/*                             <li><a href="#">Another action</a></li>*/
/*                             <li><a href="#">Something else here</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#">Separated link</a></li>*/
/*                         </ul></div>*/
/*                     <div class="dropdown">*/
/*                         <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                             <span class="fa fa-cogs fa-1x"></span> Peças Mecanicas*/
/*                             <span class="caret"></span>*/
/*                         </p>*/
/*                         <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                             <li><a href="#">Action</a></li>*/
/*                             <li><a href="#">Another action</a></li>*/
/*                             <li><a href="#">Something else here</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#">Separated link</a></li>*/
/*                         </ul></div>*/
/*                 </div>*/
/*                 <div class="col-lg-2">*/
/*                     <div class="dropdown">*/
/*                         <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                             <span class="fa fa-link fa-1x"></span> Vestuario*/
/*                             <span class="caret"></span>*/
/*                         </p>*/
/*                         <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                             <li><a href="#">Action</a></li>*/
/*                             <li><a href="#">Another action</a></li>*/
/*                             <li><a href="#">Something else here</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#">Separated link</a></li>*/
/*                         </ul> </div>*/
/*                     <div class="dropdown">*/
/*                         <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                             <span class="fa fa-briefcase fa-1x"></span> Emprego*/
/*                             <span class="caret"></span>*/
/*                         </p>*/
/*                         <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                             <li><a href="#">Action</a></li>*/
/*                             <li><a href="#">Another action</a></li>*/
/*                             <li><a href="#">Something else here</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#">Separated link</a></li>*/
/*                         </ul> </div>*/
/*                     <div class="dropdown">*/
/*                     <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                        <span class="fa fa-wrench fa-1x"></span> Serviços*/
/*                         <span class="caret"></span>*/
/*                     </p>*/
/*                     <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                         <li><a href="#">Action</a></li>*/
/*                         <li><a href="#">Another action</a></li>*/
/*                         <li><a href="#">Something else here</a></li>*/
/*                         <li role="separator" class="divider"></li>*/
/*                         <li><a href="#">Separated link</a></li>*/
/*                     </ul> </div>*/
/*                     <div class="dropdown">*/
/*             <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                <span class="fa fa-qq"></span> Animais*/
/*                 <span class="caret"></span>*/
/*             </p>*/
/*             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                 <li><a href="#">Action</a></li>*/
/*                 <li><a href="#">Another action</a></li>*/
/*                 <li><a href="#">Something else here</a></li>*/
/*                 <li role="separator" class="divider"></li>*/
/*                 <li><a href="#">Separated link</a></li>*/
/*             </ul> </div>*/
/*                     <div class="dropdown">*/
/*                         <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                          <span class="fa fa-link fa-1x"></span> Outros*/
/*                             <span class="caret"></span>*/
/*                         </p>*/
/*                         <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                             <li><a href="#">Action</a></li>*/
/*                             <li><a href="#">Another action</a></li>*/
/*                             <li><a href="#">Something else here</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#">Separated link</a></li>*/
/*                         </ul> </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock%}*/
/* {% block container1 %}*/
/*       <div class="container-carousel">*/
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
/*                         <img class="img-responsive img-full" src="../img/slide-1.jpg" alt="">*/
/*                     </div>*/
/*                     <div class="item">*/
/*                         <img class="img-responsive img-full" src="img/slide-2.jpg" alt="">*/
/*                     </div>*/
/*                     <div class="item">*/
/*                         <img class="img-responsive img-full " src="img/slide-3.jpg" alt="">*/
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
/*            </div>*/
/*     </div>*/
/* {% endblock %}*/
/* {% endblock %}*/
/* */
/* */
/* */
