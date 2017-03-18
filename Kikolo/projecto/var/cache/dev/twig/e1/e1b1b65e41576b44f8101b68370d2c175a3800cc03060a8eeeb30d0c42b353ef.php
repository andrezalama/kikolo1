<?php

/* projectoKikoloBundle:Kikolo-Default:index.html.twig */
class __TwigTemplate_87aa9e0f548c72b16ba73ede999d4252acb86f0fe5f205094d6e1fe17c50d8e5 extends Twig_Template
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
        $__internal_331a5e99f8d44f13eb991cf67308adc2bfa4ac4824d62efda3a72fb72632698e = $this->env->getExtension("native_profiler");
        $__internal_331a5e99f8d44f13eb991cf67308adc2bfa4ac4824d62efda3a72fb72632698e->enter($__internal_331a5e99f8d44f13eb991cf67308adc2bfa4ac4824d62efda3a72fb72632698e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projectoKikoloBundle:Kikolo-Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_331a5e99f8d44f13eb991cf67308adc2bfa4ac4824d62efda3a72fb72632698e->leave($__internal_331a5e99f8d44f13eb991cf67308adc2bfa4ac4824d62efda3a72fb72632698e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1feb66e0172336192ec91ee8607819c2b7026be4ab322ef604bc02c8ac5e3f1 = $this->env->getExtension("native_profiler");
        $__internal_e1feb66e0172336192ec91ee8607819c2b7026be4ab322ef604bc02c8ac5e3f1->enter($__internal_e1feb66e0172336192ec91ee8607819c2b7026be4ab322ef604bc02c8ac5e3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    <title>Kikolo-Classificados</title>
";
        
        $__internal_e1feb66e0172336192ec91ee8607819c2b7026be4ab322ef604bc02c8ac5e3f1->leave($__internal_e1feb66e0172336192ec91ee8607819c2b7026be4ab322ef604bc02c8ac5e3f1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c4b0583df12f4b4586acb9d6ac5ce3e8f9fe3c1e8d010049bd31997a334e3f1 = $this->env->getExtension("native_profiler");
        $__internal_7c4b0583df12f4b4586acb9d6ac5ce3e8f9fe3c1e8d010049bd31997a334e3f1->enter($__internal_7c4b0583df12f4b4586acb9d6ac5ce3e8f9fe3c1e8d010049bd31997a334e3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->displayBlock('container1', $context, $blocks);
        // line 50
        echo "    <div class=\"\">
        ";
        // line 51
        $this->loadTemplate("projectoKikoloBundle:Kikolo-portofolio:Portofolios.html.twig", "projectoKikoloBundle:Kikolo-Default:index.html.twig", 51)->display($context);
        // line 52
        echo "\t</div>
    ";
        // line 53
        $this->displayBlock('container0', $context, $blocks);
        // line 268
        echo "
";
        
        $__internal_7c4b0583df12f4b4586acb9d6ac5ce3e8f9fe3c1e8d010049bd31997a334e3f1->leave($__internal_7c4b0583df12f4b4586acb9d6ac5ce3e8f9fe3c1e8d010049bd31997a334e3f1_prof);

    }

    // line 6
    public function block_container1($context, array $blocks = array())
    {
        $__internal_4e72545c441cb6ab7b72ed0cf8c50ab61d7cbb61c53afc34c4e566e8693823bd = $this->env->getExtension("native_profiler");
        $__internal_4e72545c441cb6ab7b72ed0cf8c50ab61d7cbb61c53afc34c4e566e8693823bd->enter($__internal_4e72545c441cb6ab7b72ed0cf8c50ab61d7cbb61c53afc34c4e566e8693823bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container1"));

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
                        <img class=\"img-responsive img-full\" src=\"img/BAI-Mobile.jpg\" alt=\"Imagem responsiva\">
                    </div>
                    <div class=\"item\">
                        <img class=\"img-responsive img-full\" src=\"img/BPC.jpg\" alt=\"Imagem responsiva\">
                    </div>
                    <div class=\"item\">
                        <img class=\"img-responsive img-full \" src=\"img/Unitel-KiSom-Banner.jpg\" alt=\"Imagem responsiva\">
                    </div>
\t\t\t\t\t<div class=\"item\">
                        <img class=\"img-responsive img-full \" src=\"img/net-movicel-promo.png\" alt=\"Imagem responsiva\">
                    </div>
\t\t\t\t\t<div class=\"item\">
                        <img class=\"img-responsive img-full \" src=\"img/mini.jpg\" alt=\"Imagem responsiva\">
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
        
        $__internal_4e72545c441cb6ab7b72ed0cf8c50ab61d7cbb61c53afc34c4e566e8693823bd->leave($__internal_4e72545c441cb6ab7b72ed0cf8c50ab61d7cbb61c53afc34c4e566e8693823bd_prof);

    }

    // line 53
    public function block_container0($context, array $blocks = array())
    {
        $__internal_aca05d762a8dbedc2aa0799baa11912584ec8542135a6587c2c2768dfded92ff = $this->env->getExtension("native_profiler");
        $__internal_aca05d762a8dbedc2aa0799baa11912584ec8542135a6587c2c2768dfded92ff->enter($__internal_aca05d762a8dbedc2aa0799baa11912584ec8542135a6587c2c2768dfded92ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container0"));

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
                                <span class=\"fa fa-plug fa-1x\"></span>  Electricidade & Electrico Doméstico
                                <span class=\"caret\"></span>
                            </p>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"#\">Tomadas,Lampadas,Cabos e Fichas</a></li>
                                <li><a href=\"#\">Geleiras e Arcas</a></li>
                                <li><a href=\"#\">Ar Condicionados,Ventiladores e Ventoinhas</a></li>
                                <li><a href=\"#\">Electrico domésticos</a></li>
                                <li><a href=\"#\">Outros materiais</a></li>
                                </ul> </div>
                <div class=\"list-group-item\">
\t\t\t\t\t<p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                <span class=\"fa fa-qq\"></span> Mobilia & Decoração
                                <span class=\"caret\"></span>
                            </p>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"#\">Móveis</a></li>
                                <li><a href=\"#\">Decoração</a></li>
                                <li><a href=\"#\">Jardim</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Outros</a></li>
                            </ul> </div>
                   <div class=\"list-group-item\">
\t\t\t\t\t<p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                <span class=\"fa fa-desktop fa-1x\"></span> Electronico
                                <span class=\"caret\"></span>
                            </p>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"#\">TV e Acessórios</a></li>
                                <li><a href=\"#\">Som e Acessórios</a></li>
                                <li><a href=\"#\">Maquina fotográfica</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Outros</a></li>
                            </ul> </div>
\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                <span class=\"fa fa-laptop fa-1x\"></span> Computador & Acessorios  <span class=\"caret\"></span>
                            </p>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"#\">Computador Desktop</a></li>
                                <li><a href=\"#\">Computador Portatíl</a></li>
                                <li><a href=\"#\">Mouses</a></li>
                                <li><a href=\"#\">Teclados</a></li>
                                <li><a href=\"#\">Impressoras</a></li>
                                <li><a href=\"#\">Projectores</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Outros Acessorios</a></li>
                            </ul> </div>
\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t  <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                          <span class=\"fa fa-suitcase fa-1x\"></span> Vestuario,Malas & Beleza  <span class=\"caret\"></span>
                            </p>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"#\">Roupas</a></li>
                                <li><a href=\"#\">Calçados</a></li>
                                <li><a href=\"#\">Relogios e Joias</a></li>
                                <li><a href=\"#\">Malas e Acessórios</a></li>
                                <li><a href=\"#\">Beleza e Acessórios</a></li>
                                <li><a href=\"#\">Roupas Bebes e Crianças</a></li>
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
                                <li><a href=\"#\">Livros</a></li>
                                <li><a href=\"#\">Cadernos</a></li>
                                <li><a href=\"#\">Material Escolar</a></li>
                            </ul> </div>
\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                           <span class=\"fa fa-tablet fa-1x\"></span> Telemoveis & Tablets<span class=\"caret\"></span>
                            </p>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"#\">Telemóveis</a></li>
                                <li><a href=\"#\">Tablets action</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Acessórios</a></li>
                            </ul> </div>
                    
                        <div class=\"list-group-item\">
                            <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                <span class=\"glyphicon glyphicon-grain fa-1x \"></span> Alimentos & Animais
                                <span class=\"caret\"></span>
                            </p>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"#\">Alimentos</a></li>
                                <li><a href=\"#\">Animais Domésticos e Acessórios</a></li>
                            </ul> </div>
                       <div class=\"list-group-item\">
                            <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                <span class=\"fa fa-gamepad fa-1x\"></span> Games & Lazer
                                <span class=\"caret\"></span>
                            </p>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"#\">Consolas e Jogos</a></li>
                                <li><a href=\"#\">Brinquedos</a></li>
                                <li><a href=\"#\">Instrumentos musicais</a></li>
                                <li><a href=\"#\">Filmes e revistas</a></li>
                                <li><a href=\"#\">Salão de Festas</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Outros</a></li>
                            </ul> </div>
                        <div class=\"list-group-item\">
                            <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                <span class=\"fa fa-building-o fa-1x\"></span> Construção Civil
                                <span class=\"caret\"></span>
                            </p>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"#\">Construção</a></li>
                                <li><a href=\"#\">Descoração</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Outros</a></li>
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
                                <li><a href=\"#\">Serviços</a></li>
                                <li><a href=\"#\">Administrativos e Finanças</a></li>
                                <li><a href=\"#\">Comercial e Markting</a></li>
                                <li><a href=\"#\">Enegenharia</a></li>
                                <li><a href=\"#\">Saúde</a></li>
                                <li><a href=\"#\">Segurança</a></li>
                                <li><a href=\"#\">Tecnicos</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Outros</a></li>
                            </ul> </div>
                        <div class=\"list-group-item\">
                            <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                <span class=\"fa fa-bicycle fa-1x\"></span> Motos & Bicicletas
                                <span class=\"caret\"></span>
                            </p>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"#\">Motos-Scooter</a></li>
                                <li><a href=\"#\">Bicicletas</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Peças e Acessórios</a></li>
                            </ul></div>
                        <div class=\"list-group-item\">
                            <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                <span class=\"fa fa-car fa-1x\"></span>  Automovéis & Barcos
                                <span class=\"caret\"></span>
                            </p>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"#\">Carros</a></li>
                                <li><a href=\"#\">Camiões Comerciais</a></li>
                                <li><a href=\"#\">Barcos e Lanchas</a></li>
                                <li><a href=\"#\">Roulottes e Autocaravas</a></li>
                                <li><a href=\"#\">Outros</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Peças e Acessórios</a></li>
                            </ul></div>
                        <div class=\"list-group-item\">
                            <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                <span class=\"fa fa-home fa-1x\"></span> Casas & Imóveis
                                <span class=\"caret\"></span>
                            </p>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"#\">Apartamentos</a></li>
                                <li><a href=\"#\">Moradias-Casas</a></li>
                                <li><a href=\"#\">Fazendas-Rancho</a></li>
                                <li><a href=\"#\">Lojas Comerciais</a></li>
                                <li><a href=\"#\">Escritorios</a></li>
                                <li><a href=\"#\">Terrenos</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Hotel e Guest House</a></li>
                            </ul></div>
                         <div class=\"list-group-item\">
                            <p id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                <span class=\"fa fa-cogs fa-1x\"></span> Outros
                                <span class=\"caret\"></span>
                            </p>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"#\">Peças mecanicas e electricas</a></li>
                                <li><a href=\"#\">Comercio e Industria</a></li>
                                <li><a href=\"#\">Pedreiros e Outros</a></li>
                                <li><a href=\"#\">Empregadas doméstica</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Outros</a></li>
                            </ul></div>
                    </div>
                    
                </div>
            </div>
            </div>

    ";
        
        $__internal_aca05d762a8dbedc2aa0799baa11912584ec8542135a6587c2c2768dfded92ff->leave($__internal_aca05d762a8dbedc2aa0799baa11912584ec8542135a6587c2c2768dfded92ff_prof);

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
        return array (  138 => 54,  132 => 53,  83 => 7,  77 => 6,  69 => 268,  67 => 53,  64 => 52,  62 => 51,  59 => 50,  57 => 6,  51 => 5,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends "projectoKikoloBundle::Layout.html.twig" %}*/
/* {% block title %}*/
/*     <title>Kikolo-Classificados</title>*/
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
/*                         <img class="img-responsive img-full" src="img/BAI-Mobile.jpg" alt="Imagem responsiva">*/
/*                     </div>*/
/*                     <div class="item">*/
/*                         <img class="img-responsive img-full" src="img/BPC.jpg" alt="Imagem responsiva">*/
/*                     </div>*/
/*                     <div class="item">*/
/*                         <img class="img-responsive img-full " src="img/Unitel-KiSom-Banner.jpg" alt="Imagem responsiva">*/
/*                     </div>*/
/* 					<div class="item">*/
/*                         <img class="img-responsive img-full " src="img/net-movicel-promo.png" alt="Imagem responsiva">*/
/*                     </div>*/
/* 					<div class="item">*/
/*                         <img class="img-responsive img-full " src="img/mini.jpg" alt="Imagem responsiva">*/
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
/*         {% include "projectoKikoloBundle:Kikolo-portofolio:Portofolios.html.twig" %}*/
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
/*                                 <span class="fa fa-plug fa-1x"></span>  Electricidade & Electrico Doméstico*/
/*                                 <span class="caret"></span>*/
/*                             </p>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 <li><a href="#">Tomadas,Lampadas,Cabos e Fichas</a></li>*/
/*                                 <li><a href="#">Geleiras e Arcas</a></li>*/
/*                                 <li><a href="#">Ar Condicionados,Ventiladores e Ventoinhas</a></li>*/
/*                                 <li><a href="#">Electrico domésticos</a></li>*/
/*                                 <li><a href="#">Outros materiais</a></li>*/
/*                                 </ul> </div>*/
/*                 <div class="list-group-item">*/
/* 					<p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                                 <span class="fa fa-qq"></span> Mobilia & Decoração*/
/*                                 <span class="caret"></span>*/
/*                             </p>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 <li><a href="#">Móveis</a></li>*/
/*                                 <li><a href="#">Decoração</a></li>*/
/*                                 <li><a href="#">Jardim</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Outros</a></li>*/
/*                             </ul> </div>*/
/*                    <div class="list-group-item">*/
/* 					<p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                                 <span class="fa fa-desktop fa-1x"></span> Electronico*/
/*                                 <span class="caret"></span>*/
/*                             </p>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 <li><a href="#">TV e Acessórios</a></li>*/
/*                                 <li><a href="#">Som e Acessórios</a></li>*/
/*                                 <li><a href="#">Maquina fotográfica</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Outros</a></li>*/
/*                             </ul> </div>*/
/* 					<div class="list-group-item">*/
/* 					 <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                                 <span class="fa fa-laptop fa-1x"></span> Computador & Acessorios  <span class="caret"></span>*/
/*                             </p>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 <li><a href="#">Computador Desktop</a></li>*/
/*                                 <li><a href="#">Computador Portatíl</a></li>*/
/*                                 <li><a href="#">Mouses</a></li>*/
/*                                 <li><a href="#">Teclados</a></li>*/
/*                                 <li><a href="#">Impressoras</a></li>*/
/*                                 <li><a href="#">Projectores</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Outros Acessorios</a></li>*/
/*                             </ul> </div>*/
/* 					<div class="list-group-item">*/
/* 					  <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                           <span class="fa fa-suitcase fa-1x"></span> Vestuario,Malas & Beleza  <span class="caret"></span>*/
/*                             </p>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 <li><a href="#">Roupas</a></li>*/
/*                                 <li><a href="#">Calçados</a></li>*/
/*                                 <li><a href="#">Relogios e Joias</a></li>*/
/*                                 <li><a href="#">Malas e Acessórios</a></li>*/
/*                                 <li><a href="#">Beleza e Acessórios</a></li>*/
/*                                 <li><a href="#">Roupas Bebes e Crianças</a></li>*/
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
/*                                 <li><a href="#">Livros</a></li>*/
/*                                 <li><a href="#">Cadernos</a></li>*/
/*                                 <li><a href="#">Material Escolar</a></li>*/
/*                             </ul> </div>*/
/* 						<div class="list-group-item">*/
/* 					 <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                            <span class="fa fa-tablet fa-1x"></span> Telemoveis & Tablets<span class="caret"></span>*/
/*                             </p>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 <li><a href="#">Telemóveis</a></li>*/
/*                                 <li><a href="#">Tablets action</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Acessórios</a></li>*/
/*                             </ul> </div>*/
/*                     */
/*                         <div class="list-group-item">*/
/*                             <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                                 <span class="glyphicon glyphicon-grain fa-1x "></span> Alimentos & Animais*/
/*                                 <span class="caret"></span>*/
/*                             </p>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 <li><a href="#">Alimentos</a></li>*/
/*                                 <li><a href="#">Animais Domésticos e Acessórios</a></li>*/
/*                             </ul> </div>*/
/*                        <div class="list-group-item">*/
/*                             <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                                 <span class="fa fa-gamepad fa-1x"></span> Games & Lazer*/
/*                                 <span class="caret"></span>*/
/*                             </p>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 <li><a href="#">Consolas e Jogos</a></li>*/
/*                                 <li><a href="#">Brinquedos</a></li>*/
/*                                 <li><a href="#">Instrumentos musicais</a></li>*/
/*                                 <li><a href="#">Filmes e revistas</a></li>*/
/*                                 <li><a href="#">Salão de Festas</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Outros</a></li>*/
/*                             </ul> </div>*/
/*                         <div class="list-group-item">*/
/*                             <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                                 <span class="fa fa-building-o fa-1x"></span> Construção Civil*/
/*                                 <span class="caret"></span>*/
/*                             </p>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 <li><a href="#">Construção</a></li>*/
/*                                 <li><a href="#">Descoração</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Outros</a></li>*/
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
/*                                 <li><a href="#">Serviços</a></li>*/
/*                                 <li><a href="#">Administrativos e Finanças</a></li>*/
/*                                 <li><a href="#">Comercial e Markting</a></li>*/
/*                                 <li><a href="#">Enegenharia</a></li>*/
/*                                 <li><a href="#">Saúde</a></li>*/
/*                                 <li><a href="#">Segurança</a></li>*/
/*                                 <li><a href="#">Tecnicos</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Outros</a></li>*/
/*                             </ul> </div>*/
/*                         <div class="list-group-item">*/
/*                             <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                                 <span class="fa fa-bicycle fa-1x"></span> Motos & Bicicletas*/
/*                                 <span class="caret"></span>*/
/*                             </p>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 <li><a href="#">Motos-Scooter</a></li>*/
/*                                 <li><a href="#">Bicicletas</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Peças e Acessórios</a></li>*/
/*                             </ul></div>*/
/*                         <div class="list-group-item">*/
/*                             <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                                 <span class="fa fa-car fa-1x"></span>  Automovéis & Barcos*/
/*                                 <span class="caret"></span>*/
/*                             </p>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 <li><a href="#">Carros</a></li>*/
/*                                 <li><a href="#">Camiões Comerciais</a></li>*/
/*                                 <li><a href="#">Barcos e Lanchas</a></li>*/
/*                                 <li><a href="#">Roulottes e Autocaravas</a></li>*/
/*                                 <li><a href="#">Outros</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Peças e Acessórios</a></li>*/
/*                             </ul></div>*/
/*                         <div class="list-group-item">*/
/*                             <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                                 <span class="fa fa-home fa-1x"></span> Casas & Imóveis*/
/*                                 <span class="caret"></span>*/
/*                             </p>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 <li><a href="#">Apartamentos</a></li>*/
/*                                 <li><a href="#">Moradias-Casas</a></li>*/
/*                                 <li><a href="#">Fazendas-Rancho</a></li>*/
/*                                 <li><a href="#">Lojas Comerciais</a></li>*/
/*                                 <li><a href="#">Escritorios</a></li>*/
/*                                 <li><a href="#">Terrenos</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Hotel e Guest House</a></li>*/
/*                             </ul></div>*/
/*                          <div class="list-group-item">*/
/*                             <p id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                                 <span class="fa fa-cogs fa-1x"></span> Outros*/
/*                                 <span class="caret"></span>*/
/*                             </p>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 <li><a href="#">Peças mecanicas e electricas</a></li>*/
/*                                 <li><a href="#">Comercio e Industria</a></li>*/
/*                                 <li><a href="#">Pedreiros e Outros</a></li>*/
/*                                 <li><a href="#">Empregadas doméstica</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Outros</a></li>*/
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
