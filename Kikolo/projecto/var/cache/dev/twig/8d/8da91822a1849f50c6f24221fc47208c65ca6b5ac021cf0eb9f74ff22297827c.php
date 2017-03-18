<?php

/* projectoKikoloBundle:Anuncio:Formulario.html.twig */
class __TwigTemplate_ef96ef0d04a43faaefae742aca6014c9bd4701c9779d22401701ddda61b518e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1dbbd48ab14f86136e958add7fc72189c147317745217cfcc5f6bc7c88482ae = $this->env->getExtension("native_profiler");
        $__internal_c1dbbd48ab14f86136e958add7fc72189c147317745217cfcc5f6bc7c88482ae->enter($__internal_c1dbbd48ab14f86136e958add7fc72189c147317745217cfcc5f6bc7c88482ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projectoKikoloBundle:Anuncio:Formulario.html.twig"));

        // line 1
        echo "<legend>Informações do Anuncio</legend>

  ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'row', array("label" => "Titulo"));
        echo "
  ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'row', array("label" => "Escolha a Categoria"));
        echo "
  ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descricao", array()), 'row', array("label" => "Descrição"));
        echo "

<legend>Imagem do Anuncio</legend>

";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upload", array()), 'row', array("label" => "Selecione a Imagem"));
        echo "

<legend>Informações do Anunciante</legend>
  ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomeusuario", array()), 'row', array("label" => "Nome Anunciante"));
        echo "
  ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "localizacao", array()), 'row', array("label" => "Localização"));
        echo "
  ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefone", array()), 'row', array("label" => "Telefone"));
        echo "
  ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row', array("label" => "Email"));
        echo "
  ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "


";
        
        $__internal_c1dbbd48ab14f86136e958add7fc72189c147317745217cfcc5f6bc7c88482ae->leave($__internal_c1dbbd48ab14f86136e958add7fc72189c147317745217cfcc5f6bc7c88482ae_prof);

    }

    public function getTemplateName()
    {
        return "projectoKikoloBundle:Anuncio:Formulario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 17,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  41 => 9,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <legend>Informações do Anuncio</legend>*/
/* */
/*   {{ form_row(form.titulo, { 'label': 'Titulo'}) }}*/
/*   {{ form_row(form.categoria, { 'label': 'Escolha a Categoria'}) }}*/
/*   {{ form_row(form.descricao, { 'label': 'Descrição'})  }}*/
/* */
/* <legend>Imagem do Anuncio</legend>*/
/* */
/* {{ form_row(form.upload, { 'label': 'Selecione a Imagem'}) }}*/
/* */
/* <legend>Informações do Anunciante</legend>*/
/*   {{ form_row(form.nomeusuario, { 'label': 'Nome Anunciante'}) }}*/
/*   {{ form_row(form.localizacao, { 'label': 'Localização'})  }}*/
/*   {{ form_row(form.telefone, { 'label': 'Telefone'})  }}*/
/*   {{ form_row(form.email, { 'label': 'Email'})  }}*/
/*   {{ form_rest(form) }}*/
/*   {{ form_widget(form) }}*/
/* */
/* */
/* */
