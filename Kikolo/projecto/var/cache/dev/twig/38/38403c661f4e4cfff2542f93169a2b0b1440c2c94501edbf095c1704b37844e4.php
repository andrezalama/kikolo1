<?php

/* projectoKikoloBundle:Kikolo-Default:Portofolios.html.twig */
class __TwigTemplate_7f63fea2f6d075e15ca3bad52f8124cf9f7df5529b4cb45fa65de875a0563e32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_535949a3c71592ab1402d58f0054ed80951f094fab3fda39df0bbde12202dcb6 = $this->env->getExtension("native_profiler");
        $__internal_535949a3c71592ab1402d58f0054ed80951f094fab3fda39df0bbde12202dcb6->enter($__internal_535949a3c71592ab1402d58f0054ed80951f094fab3fda39df0bbde12202dcb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projectoKikoloBundle:Kikolo-Default:Portofolios.html.twig"));

        // line 1
        echo "<title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

<section id=\"portfolio\" ></br>

    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-12 text-left\">
                <h3>Kikolo-anuncio-Online</h3>
                <hr class=\"\">
            </div>
        </div>
        <div class=\"jumbotron col-lg-12\">
        <div class=\"row\">

            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <div class=\"col-sm-2 portfolio-item\">

              <div class=\"thumbnail\">
                  <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projecto_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                <a href=\"#portfolioModal\"  class=\"portfolio-link\" data-toggle=\"modal\">
                    <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("Uploads/" . $this->getAttribute($context["entity"], "path", array()))), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"\">
                </a></a>
                <div class=\"portfolio-caption\">
                   <a href=\"#\"><h7>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titulo", array()), "html", null, true);
            echo "</h7></a>
                    <h6 class=\"text-muted\"> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "preco", array()), "html", null, true);
            echo " AKZ</h6>
                </div>

            </div>
            </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </div>
        </div>
    </div>
\t
        <!-- Pagination -->
        <div class=\"row text-center\">

                <ul class=\"pagination\">
                    <li>
                        <a href=\"#\">&laquo;</a>
                    </li>
                    <li class=\"active\">
                        <a href=\"#\">1</a>
                    </li>
                    <li>
                        <a href=\"#\">2</a>
                    </li>
                    <li>
                        <a href=\"#\">3</a>
                    </li>
                    <li>
                        <a href=\"#\">4</a>
                    </li>
                    <li>
                        <a href=\"#\">5</a>
                    </li>
                    <li>
                        <a href=\"#\">&raquo;</a>
                    </li>
                </ul>
            </div>
        <!-- /.row -->
\t<hr>

</section>
";
        
        $__internal_535949a3c71592ab1402d58f0054ed80951f094fab3fda39df0bbde12202dcb6->leave($__internal_535949a3c71592ab1402d58f0054ed80951f094fab3fda39df0bbde12202dcb6_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_026a43c9b28109c629ce4969e46b0a4341b4478975160b4509247e2a22716cc8 = $this->env->getExtension("native_profiler");
        $__internal_026a43c9b28109c629ce4969e46b0a4341b4478975160b4509247e2a22716cc8->enter($__internal_026a43c9b28109c629ce4969e46b0a4341b4478975160b4509247e2a22716cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_026a43c9b28109c629ce4969e46b0a4341b4478975160b4509247e2a22716cc8->leave($__internal_026a43c9b28109c629ce4969e46b0a4341b4478975160b4509247e2a22716cc8_prof);

    }

    public function getTemplateName()
    {
        return "projectoKikoloBundle:Kikolo-Default:Portofolios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 1,  80 => 34,  67 => 27,  63 => 26,  57 => 23,  52 => 21,  47 => 18,  43 => 17,  23 => 1,);
    }
}
/* <title>{% block title %}Welcome!{% endblock %}</title>*/
/* <link href="css/bootstrap.min.css" rel="stylesheet">*/
/* */
/* <section id="portfolio" ></br>*/
/* */
/*     <div class="container">*/
/* */
/*         <div class="row">*/
/*             <div class="col-lg-12 text-left">*/
/*                 <h3>Kikolo-anuncio-Online</h3>*/
/*                 <hr class="">*/
/*             </div>*/
/*         </div>*/
/*         <div class="jumbotron col-lg-12">*/
/*         <div class="row">*/
/* */
/*             {% for entity in entities %}*/
/*             <div class="col-sm-2 portfolio-item">*/
/* */
/*               <div class="thumbnail">*/
/*                   <a href="{{ path('projecto_show', { 'id': entity.id }) }}">*/
/*                 <a href="#portfolioModal"  class="portfolio-link" data-toggle="modal">*/
/*                     <img src="{{ asset('Uploads/'~entity.path) }}" class="img-responsive" alt="">*/
/*                 </a></a>*/
/*                 <div class="portfolio-caption">*/
/*                    <a href="#"><h7>{{ entity.titulo }}</h7></a>*/
/*                     <h6 class="text-muted"> {{ entity.preco }} AKZ</h6>*/
/*                 </div>*/
/* */
/*             </div>*/
/*             </div>*/
/* */
/*             {% endfor %}*/
/*         </div>*/
/*         </div>*/
/*     </div>*/
/* 	*/
/*         <!-- Pagination -->*/
/*         <div class="row text-center">*/
/* */
/*                 <ul class="pagination">*/
/*                     <li>*/
/*                         <a href="#">&laquo;</a>*/
/*                     </li>*/
/*                     <li class="active">*/
/*                         <a href="#">1</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">2</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">3</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">4</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">5</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">&raquo;</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         <!-- /.row -->*/
/* 	<hr>*/
/* */
/* </section>*/
/* */
