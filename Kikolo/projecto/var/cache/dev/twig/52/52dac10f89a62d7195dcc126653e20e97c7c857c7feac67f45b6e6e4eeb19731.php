<?php

/* projectoKikoloBundle:Kikolo-portofolio:Portofolios.html.twig */
class __TwigTemplate_a4869e238d1c228e88e612223cc525befe4159894626e910b0ce96233f8c36ae extends Twig_Template
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
        $__internal_8dd54a84609dfb612e3c818f84c012f4fea9a1fdcbae91c1a0e7beb9c0af9638 = $this->env->getExtension("native_profiler");
        $__internal_8dd54a84609dfb612e3c818f84c012f4fea9a1fdcbae91c1a0e7beb9c0af9638->enter($__internal_8dd54a84609dfb612e3c818f84c012f4fea9a1fdcbae91c1a0e7beb9c0af9638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projectoKikoloBundle:Kikolo-portofolio:Portofolios.html.twig"));

        // line 1
        echo "<title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

<section id=\"portfolio\" ></br>

    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-12 text-left\">
                <h3>Kikolo-Online</h3>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("kikoloshow", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">

                    <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("Uploads/" . $this->getAttribute($context["entity"], "path", array()))), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"\">
                </a>
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
        
        $__internal_8dd54a84609dfb612e3c818f84c012f4fea9a1fdcbae91c1a0e7beb9c0af9638->leave($__internal_8dd54a84609dfb612e3c818f84c012f4fea9a1fdcbae91c1a0e7beb9c0af9638_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_7779e41417e329e5a088d8bb77d84a10cdade3e1dbb665225830d6f146dc09b0 = $this->env->getExtension("native_profiler");
        $__internal_7779e41417e329e5a088d8bb77d84a10cdade3e1dbb665225830d6f146dc09b0->enter($__internal_7779e41417e329e5a088d8bb77d84a10cdade3e1dbb665225830d6f146dc09b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7779e41417e329e5a088d8bb77d84a10cdade3e1dbb665225830d6f146dc09b0->leave($__internal_7779e41417e329e5a088d8bb77d84a10cdade3e1dbb665225830d6f146dc09b0_prof);

    }

    public function getTemplateName()
    {
        return "projectoKikoloBundle:Kikolo-portofolio:Portofolios.html.twig";
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
/*                 <h3>Kikolo-Online</h3>*/
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
/*                   <a href="{{ path('kikoloshow', { 'id': entity.id }) }}">*/
/* */
/*                     <img src="{{ asset('Uploads/'~entity.path) }}" class="img-responsive" alt="">*/
/*                 </a>*/
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
