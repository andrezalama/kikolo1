<?php

/* projectoKikoloBundle:Kikolo-anuncio:Kikolo_new.html.twig */
class __TwigTemplate_587be707088a55a24bbc9e145138bfaf284d3f19af698d7b746599857913dd07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("projectoKikoloBundle::Layout.html.twig", "projectoKikoloBundle:Kikolo-anuncio:Kikolo_new.html.twig", 1);
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
        $__internal_893a7bd7832a978535210a2e545a4d89302be5fc49ef0ee8aaa1e169cf1757eb = $this->env->getExtension("native_profiler");
        $__internal_893a7bd7832a978535210a2e545a4d89302be5fc49ef0ee8aaa1e169cf1757eb->enter($__internal_893a7bd7832a978535210a2e545a4d89302be5fc49ef0ee8aaa1e169cf1757eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projectoKikoloBundle:Kikolo-anuncio:Kikolo_new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_893a7bd7832a978535210a2e545a4d89302be5fc49ef0ee8aaa1e169cf1757eb->leave($__internal_893a7bd7832a978535210a2e545a4d89302be5fc49ef0ee8aaa1e169cf1757eb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_987191f42f945d78c8672e2c7d3da0ea84e7b1ea477a93eeb15c01c343600cde = $this->env->getExtension("native_profiler");
        $__internal_987191f42f945d78c8672e2c7d3da0ea84e7b1ea477a93eeb15c01c343600cde->enter($__internal_987191f42f945d78c8672e2c7d3da0ea84e7b1ea477a93eeb15c01c343600cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<section id=\"contact\"></br>

    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-12 text-center\"></br>
                <h4>Criar Anuncio</h4>
                <hr class=\"star-primary\">
            </div>
        </div>
      ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("actio" => array("new" => "POST")));
        echo "
           
\t\t<div class=\"form-group\">
         ";
        // line 16
        $this->loadTemplate("projectoKikoloBundle:Kikolo-anuncio:Formulario.html.twig", "projectoKikoloBundle:Kikolo-anuncio:Kikolo_new.html.twig", 16)->display($context);
        // line 17
        echo "\t\t </div>

                <hr>
                <div class=\"form-group\"></br>
                    <div class=\"col-sm-offset-2 col-sm-10\">
                        <button type=\"submit\" class=\"btn btn-default\">Criar</button>
                        <button type=\"reset\" class=\"btn btn-danger\">Limpar</button>
                    </div>
                </div>
            </div>
        </div>
      ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
</section>
";
        
        $__internal_987191f42f945d78c8672e2c7d3da0ea84e7b1ea477a93eeb15c01c343600cde->leave($__internal_987191f42f945d78c8672e2c7d3da0ea84e7b1ea477a93eeb15c01c343600cde_prof);

    }

    public function getTemplateName()
    {
        return "projectoKikoloBundle:Kikolo-anuncio:Kikolo_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 28,  60 => 17,  58 => 16,  52 => 13,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "projectoKikoloBundle::Layout.html.twig" %}*/
/* {% block body %}*/
/* <section id="contact"></br>*/
/* */
/*     <div class="container">*/
/* */
/*         <div class="row">*/
/*             <div class="col-lg-12 text-center"></br>*/
/*                 <h4>Criar Anuncio</h4>*/
/*                 <hr class="star-primary">*/
/*             </div>*/
/*         </div>*/
/*       {{ form_start(form,  {'actio': {'new': 'POST'}}) }}*/
/*            */
/* 		<div class="form-group">*/
/*          {% include "projectoKikoloBundle:Kikolo-anuncio:Formulario.html.twig" %}*/
/* 		 </div>*/
/* */
/*                 <hr>*/
/*                 <div class="form-group"></br>*/
/*                     <div class="col-sm-offset-2 col-sm-10">*/
/*                         <button type="submit" class="btn btn-default">Criar</button>*/
/*                         <button type="reset" class="btn btn-danger">Limpar</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*       {{ form_end(form)}}*/
/*     </div>*/
/* </section>*/
/* {% endblock %}*/
/* */
