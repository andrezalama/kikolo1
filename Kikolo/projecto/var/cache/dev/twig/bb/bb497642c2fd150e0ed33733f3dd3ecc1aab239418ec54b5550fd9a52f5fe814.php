<?php

/* base.html.twig */
class __TwigTemplate_f056fd45fd6f882d8900065b39868c279fd2bd15ead79cce8b2e3415400b69ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a4d7284c594e548f612a25c072e7776c1d78cd246eb9b7a9e4cbed78c868c19 = $this->env->getExtension("native_profiler");
        $__internal_9a4d7284c594e548f612a25c072e7776c1d78cd246eb9b7a9e4cbed78c868c19->enter($__internal_9a4d7284c594e548f612a25c072e7776c1d78cd246eb9b7a9e4cbed78c868c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("kikolo.icon"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9a4d7284c594e548f612a25c072e7776c1d78cd246eb9b7a9e4cbed78c868c19->leave($__internal_9a4d7284c594e548f612a25c072e7776c1d78cd246eb9b7a9e4cbed78c868c19_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_433acde851db956b108f63be16c25217a52c25ca05a4f1430ec660e2badcafb9 = $this->env->getExtension("native_profiler");
        $__internal_433acde851db956b108f63be16c25217a52c25ca05a4f1430ec660e2badcafb9->enter($__internal_433acde851db956b108f63be16c25217a52c25ca05a4f1430ec660e2badcafb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_433acde851db956b108f63be16c25217a52c25ca05a4f1430ec660e2badcafb9->leave($__internal_433acde851db956b108f63be16c25217a52c25ca05a4f1430ec660e2badcafb9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2146ee1a473f32340b4aea2de33f55de1d02c11efb83e5eb1c039a615e2c4e12 = $this->env->getExtension("native_profiler");
        $__internal_2146ee1a473f32340b4aea2de33f55de1d02c11efb83e5eb1c039a615e2c4e12->enter($__internal_2146ee1a473f32340b4aea2de33f55de1d02c11efb83e5eb1c039a615e2c4e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2146ee1a473f32340b4aea2de33f55de1d02c11efb83e5eb1c039a615e2c4e12->leave($__internal_2146ee1a473f32340b4aea2de33f55de1d02c11efb83e5eb1c039a615e2c4e12_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_757b8c37f47eb580ccb2f1e0953c0598e0d4ea27ffef203ea285597a14c64965 = $this->env->getExtension("native_profiler");
        $__internal_757b8c37f47eb580ccb2f1e0953c0598e0d4ea27ffef203ea285597a14c64965->enter($__internal_757b8c37f47eb580ccb2f1e0953c0598e0d4ea27ffef203ea285597a14c64965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_757b8c37f47eb580ccb2f1e0953c0598e0d4ea27ffef203ea285597a14c64965->leave($__internal_757b8c37f47eb580ccb2f1e0953c0598e0d4ea27ffef203ea285597a14c64965_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_df0a9239453ae53416646d494bac58c570f18a9a5b16b03488d6eff17f7f0af8 = $this->env->getExtension("native_profiler");
        $__internal_df0a9239453ae53416646d494bac58c570f18a9a5b16b03488d6eff17f7f0af8->enter($__internal_df0a9239453ae53416646d494bac58c570f18a9a5b16b03488d6eff17f7f0af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_df0a9239453ae53416646d494bac58c570f18a9a5b16b03488d6eff17f7f0af8->leave($__internal_df0a9239453ae53416646d494bac58c570f18a9a5b16b03488d6eff17f7f0af8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('kikolo.icon') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
