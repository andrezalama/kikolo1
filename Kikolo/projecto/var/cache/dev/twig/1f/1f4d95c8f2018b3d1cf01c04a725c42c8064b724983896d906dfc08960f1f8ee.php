<?php

/* projectoKikoloBundle:Anuncio:New_anuncio.html.twig */
class __TwigTemplate_2663bd1b8f2bd0b82a8535e3541d6ea1aab9852fa26466c4ab2cfa65d6744ac4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("projectoKikoloBundle::Layout.html.twig", "projectoKikoloBundle:Anuncio:New_anuncio.html.twig", 1);
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
        $__internal_2a26a4b1ca9ab7834a5d7a2949c10e28a7beeca63251d0ea354723d310003ba5 = $this->env->getExtension("native_profiler");
        $__internal_2a26a4b1ca9ab7834a5d7a2949c10e28a7beeca63251d0ea354723d310003ba5->enter($__internal_2a26a4b1ca9ab7834a5d7a2949c10e28a7beeca63251d0ea354723d310003ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projectoKikoloBundle:Anuncio:New_anuncio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a26a4b1ca9ab7834a5d7a2949c10e28a7beeca63251d0ea354723d310003ba5->leave($__internal_2a26a4b1ca9ab7834a5d7a2949c10e28a7beeca63251d0ea354723d310003ba5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d74baf54aa08ca0ab0ed2659cd491d8241ccdd6d572626b013bbd92130938acc = $this->env->getExtension("native_profiler");
        $__internal_d74baf54aa08ca0ab0ed2659cd491d8241ccdd6d572626b013bbd92130938acc->enter($__internal_d74baf54aa08ca0ab0ed2659cd491d8241ccdd6d572626b013bbd92130938acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<section id=\"contact\"></br>

  <div class=\"container\">

\t\t 
<div class=\"col-md-12\">
    <h3><span class=\"\"></span>Cria Anuncio</h3></hr>

 ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("actio" => array("new" => "POST")));
        echo "
 
     ";
        // line 13
        $this->loadTemplate("projectoKikoloBundle:Anuncio:Formulario.html.twig", "projectoKikoloBundle:Anuncio:New_anuncio.html.twig", 13)->display($context);
        // line 14
        echo "\t
<hr>
    <div class=\"form-group\">
      <div class=\"col-sm-offset-6 col-sm-6\">
     <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> Cadastrar</button>
\t <button type=\"reset\" name=\"\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-eraser\"></span> Limpar</button>
      </div>
    </div>
\t
 ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
  </div>

</div>
</section>
";
        
        $__internal_d74baf54aa08ca0ab0ed2659cd491d8241ccdd6d572626b013bbd92130938acc->leave($__internal_d74baf54aa08ca0ab0ed2659cd491d8241ccdd6d572626b013bbd92130938acc_prof);

    }

    public function getTemplateName()
    {
        return "projectoKikoloBundle:Anuncio:New_anuncio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  57 => 14,  55 => 13,  50 => 11,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "projectoKikoloBundle::Layout.html.twig" %}*/
/* {% block body %}*/
/* <section id="contact"></br>*/
/* */
/*   <div class="container">*/
/* */
/* 		 */
/* <div class="col-md-12">*/
/*     <h3><span class=""></span>Cria Anuncio</h3></hr>*/
/* */
/*  {{ form_start(form,  {'actio': {'new': 'POST'}}) }}*/
/*  */
/*      {% include "projectoKikoloBundle:Anuncio:Formulario.html.twig" %}*/
/* 	*/
/* <hr>*/
/*     <div class="form-group">*/
/*       <div class="col-sm-offset-6 col-sm-6">*/
/*      <button type="submit" name="subvalider" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Cadastrar</button>*/
/* 	 <button type="reset" name="" class="btn btn-danger"><span class="glyphicon glyphicon-eraser"></span> Limpar</button>*/
/*       </div>*/
/*     </div>*/
/* 	*/
/*  {{ form_end(form)}}*/
/*   </div>*/
/* */
/* </div>*/
/* </section>*/
/* {% endblock %}*/
