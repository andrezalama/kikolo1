<?php

/* projectoKikoloBundle:Kikolo-portofolio:Portofolio-anuncio.html.twig */
class __TwigTemplate_c574bd005177cfb91d640ea9e04fca730e4aac422f3bb0c0362294fd98e3b8bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("projectoKikoloBundle::Layout.html.twig", "projectoKikoloBundle:Kikolo-portofolio:Portofolio-anuncio.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "projectoKikoloBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcfa59d4fef1d25b1849dd59d8f7569e416b11c1cd1b80e45b10e7e7b0fd1d10 = $this->env->getExtension("native_profiler");
        $__internal_dcfa59d4fef1d25b1849dd59d8f7569e416b11c1cd1b80e45b10e7e7b0fd1d10->enter($__internal_dcfa59d4fef1d25b1849dd59d8f7569e416b11c1cd1b80e45b10e7e7b0fd1d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projectoKikoloBundle:Kikolo-portofolio:Portofolio-anuncio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcfa59d4fef1d25b1849dd59d8f7569e416b11c1cd1b80e45b10e7e7b0fd1d10->leave($__internal_dcfa59d4fef1d25b1849dd59d8f7569e416b11c1cd1b80e45b10e7e7b0fd1d10_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9781dd96c84f16b36828e0318d6acf56cd0397e5ce8171bc237060b83f1012e = $this->env->getExtension("native_profiler");
        $__internal_b9781dd96c84f16b36828e0318d6acf56cd0397e5ce8171bc237060b83f1012e->enter($__internal_b9781dd96c84f16b36828e0318d6acf56cd0397e5ce8171bc237060b83f1012e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
      <section id=\"contact\" >

        <div class=\"container\">
            <!-- Portfolio Item Heading -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h3 class=\"page-header\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titulo", array()), "html", null, true);
        echo "</h3>
                    <hr>
                    <ol class=\"breadcrumb\">
                        <li><a href=\"#\"> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "localizacao", array()), "html", null, true);
        echo "</a></li>
                        <li><a href=\"#\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categoria", array()), "html", null, true);
        echo "</a></li>
                        <li class=\"active\">Registado desde: ";
        // line 15
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "data", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "data", array()), "d-m-Y"), "html", null, true);
        }
        echo "</li>
                    </ol>
                    <hr>

                </div>
            </div>

            <!-- Portfolio Item Row -->

            <div class=\"row\">
                <div class=\"col-md-8\">
                 <div class=\"jumbotron col-lg-12\">
                    <img class=\"img-thumbnail\" height=\"400\" width=\"600\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("Uploads/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "path", array()))), "html", null, true);
        echo "\" >
                     <h4 class=\"text-left\">Detalhes</h4><hr>
                 </div>
                </div>

                <div class=\"col-md-offset-8\">
                    <div class=\"jumbotron col-lg-11\">
                          <div class=\"panel panel-success\">
                          <div class=\"panel-heading\"><h3 class=\"text-center\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "preco", array()), "html", null, true);
        echo " AKZ</h3>
                          </div>
                    </div>

                        <div class=\"panel panel-info\">
                            <div class=\"panel-heading\">
                                  <h4 class=\"text-center\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telefone", array()), "html", null, true);
        echo "</h4>
                            </div>
                        </div>

                        <div class=\"panel panel-danger\">
                            <div class=\"panel-heading\">
                                    <h5 class=\"text-center\">Enviar Mensagem</h5>
                            </div>
                        </div>

                        <div class=\"panel panel-success\">
                            <!-- Default panel contents -->
                            <div class=\"panel-heading\">Informações do Anunciante</div>
                            <div class=\"panel-body\">
                                <h5>Nome:</h5>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomeusuario", array()), "html", null, true);
        echo "
                                <h5>Endereço:</h5>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "localizacao", array()), "html", null, true);
        echo "
                                <h5>Data: ";
        // line 57
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "data", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "data", array()), "d-m-Y"), "html", null, true);
        }
        echo "</h5>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


            <!-- Related Projects Row -->

            <div class=\"row\">

                <div class=\"col-lg-12\">
                    <h3 class=\"page-header\">Related Projects</h3>
                    <hr>
                </div>

                <div class=\"col-sm-3 col-xs-6\">
                    <a href=\"#\">
                        <img class=\"img-responsive portfolio-item\" src=\"http://placehold.it/500x300\" alt=\"\">
                    </a>
                </div>

                <div class=\"col-sm-3 col-xs-6\">
                    <a href=\"#\">
                        <img class=\"img-responsive portfolio-item\" src=\"http://placehold.it/500x300\" alt=\"\">
                    </a>
                </div>

                <div class=\"col-sm-3 col-xs-6\">
                    <a href=\"#\">
                        <img class=\"img-responsive portfolio-item\" src=\"http://placehold.it/500x300\" alt=\"\">
                    </a>
                </div>

                <div class=\"col-sm-3 col-xs-6\">
                    <a href=\"#\">
                        <img class=\"img-responsive portfolio-item\" src=\"http://placehold.it/500x300\" alt=\"\">
                    </a>
                </div>

            </div>

        </div>
        </section>

";
        
        $__internal_b9781dd96c84f16b36828e0318d6acf56cd0397e5ce8171bc237060b83f1012e->leave($__internal_b9781dd96c84f16b36828e0318d6acf56cd0397e5ce8171bc237060b83f1012e_prof);

    }

    public function getTemplateName()
    {
        return "projectoKikoloBundle:Kikolo-portofolio:Portofolio-anuncio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 57,  121 => 56,  117 => 55,  100 => 41,  91 => 35,  80 => 27,  63 => 15,  59 => 14,  55 => 13,  49 => 10,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "projectoKikoloBundle::Layout.html.twig" %}*/
/* {% block body %}*/
/* */
/*       <section id="contact" >*/
/* */
/*         <div class="container">*/
/*             <!-- Portfolio Item Heading -->*/
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     <h3 class="page-header">{{ entity.titulo }}</h3>*/
/*                     <hr>*/
/*                     <ol class="breadcrumb">*/
/*                         <li><a href="#"> {{ entity.localizacao }}</a></li>*/
/*                         <li><a href="#">{{ entity.categoria }}</a></li>*/
/*                         <li class="active">Registado desde: {% if entity.data %}{{ entity.data|date('d-m-Y') }}{% endif %}</li>*/
/*                     </ol>*/
/*                     <hr>*/
/* */
/*                 </div>*/
/*             </div>*/
/* */
/*             <!-- Portfolio Item Row -->*/
/* */
/*             <div class="row">*/
/*                 <div class="col-md-8">*/
/*                  <div class="jumbotron col-lg-12">*/
/*                     <img class="img-thumbnail" height="400" width="600" src="{{ asset('Uploads/'~entity.path) }}" >*/
/*                      <h4 class="text-left">Detalhes</h4><hr>*/
/*                  </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-md-offset-8">*/
/*                     <div class="jumbotron col-lg-11">*/
/*                           <div class="panel panel-success">*/
/*                           <div class="panel-heading"><h3 class="text-center">{{ entity.preco }} AKZ</h3>*/
/*                           </div>*/
/*                     </div>*/
/* */
/*                         <div class="panel panel-info">*/
/*                             <div class="panel-heading">*/
/*                                   <h4 class="text-center">{{ entity.telefone }}</h4>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="panel panel-danger">*/
/*                             <div class="panel-heading">*/
/*                                     <h5 class="text-center">Enviar Mensagem</h5>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="panel panel-success">*/
/*                             <!-- Default panel contents -->*/
/*                             <div class="panel-heading">Informações do Anunciante</div>*/
/*                             <div class="panel-body">*/
/*                                 <h5>Nome:</h5>{{ entity.nomeusuario }}*/
/*                                 <h5>Endereço:</h5>{{ entity.localizacao }}*/
/*                                 <h5>Data: {% if entity.data %}{{ entity.data|date('d-m-Y') }}{% endif %}</h5>*/
/*                             </div>*/
/*                         </div>*/
/* */
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*             <!-- Related Projects Row -->*/
/* */
/*             <div class="row">*/
/* */
/*                 <div class="col-lg-12">*/
/*                     <h3 class="page-header">Related Projects</h3>*/
/*                     <hr>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-3 col-xs-6">*/
/*                     <a href="#">*/
/*                         <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">*/
/*                     </a>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-3 col-xs-6">*/
/*                     <a href="#">*/
/*                         <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">*/
/*                     </a>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-3 col-xs-6">*/
/*                     <a href="#">*/
/*                         <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">*/
/*                     </a>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-3 col-xs-6">*/
/*                     <a href="#">*/
/*                         <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">*/
/*                     </a>*/
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*         </section>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
