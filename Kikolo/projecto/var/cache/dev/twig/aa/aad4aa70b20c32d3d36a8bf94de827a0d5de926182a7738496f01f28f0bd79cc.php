<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5f9755570fe80aea1e6f116fea4397b31298bbe20e926a0d1b4d5089fee6753b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_670f7e501c2d3915285118ad5c1ecdc8f1543d9e0eca3a09191a1f6d5658fe68 = $this->env->getExtension("native_profiler");
        $__internal_670f7e501c2d3915285118ad5c1ecdc8f1543d9e0eca3a09191a1f6d5658fe68->enter($__internal_670f7e501c2d3915285118ad5c1ecdc8f1543d9e0eca3a09191a1f6d5658fe68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_670f7e501c2d3915285118ad5c1ecdc8f1543d9e0eca3a09191a1f6d5658fe68->leave($__internal_670f7e501c2d3915285118ad5c1ecdc8f1543d9e0eca3a09191a1f6d5658fe68_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f08df64411ba53291d8ea4bcdc7922b922e7ce4b0993cbe771d0ddaa80564f52 = $this->env->getExtension("native_profiler");
        $__internal_f08df64411ba53291d8ea4bcdc7922b922e7ce4b0993cbe771d0ddaa80564f52->enter($__internal_f08df64411ba53291d8ea4bcdc7922b922e7ce4b0993cbe771d0ddaa80564f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f08df64411ba53291d8ea4bcdc7922b922e7ce4b0993cbe771d0ddaa80564f52->leave($__internal_f08df64411ba53291d8ea4bcdc7922b922e7ce4b0993cbe771d0ddaa80564f52_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_51df748209342a2de6c02930aa34bd49f315f2df3db5a34a35e443f342126067 = $this->env->getExtension("native_profiler");
        $__internal_51df748209342a2de6c02930aa34bd49f315f2df3db5a34a35e443f342126067->enter($__internal_51df748209342a2de6c02930aa34bd49f315f2df3db5a34a35e443f342126067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_51df748209342a2de6c02930aa34bd49f315f2df3db5a34a35e443f342126067->leave($__internal_51df748209342a2de6c02930aa34bd49f315f2df3db5a34a35e443f342126067_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_022cdf15c9faaba3f2c9a370c183d0c0ac27c68b5d35277a7441c74bbc0c1c28 = $this->env->getExtension("native_profiler");
        $__internal_022cdf15c9faaba3f2c9a370c183d0c0ac27c68b5d35277a7441c74bbc0c1c28->enter($__internal_022cdf15c9faaba3f2c9a370c183d0c0ac27c68b5d35277a7441c74bbc0c1c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_022cdf15c9faaba3f2c9a370c183d0c0ac27c68b5d35277a7441c74bbc0c1c28->leave($__internal_022cdf15c9faaba3f2c9a370c183d0c0ac27c68b5d35277a7441c74bbc0c1c28_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
