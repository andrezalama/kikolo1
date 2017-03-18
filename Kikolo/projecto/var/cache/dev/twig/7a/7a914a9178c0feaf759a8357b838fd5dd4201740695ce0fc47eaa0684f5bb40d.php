<?php

/* FOSUserBundle::base.html.twig */
class __TwigTemplate_34d963c5d8525bccfef7e9b5b4a1a878e30fa4b9161c916fe74fdc903c29b84d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'container' => array($this, 'block_container'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a11bfeaacba5505494b93fdbb4c1a24e5cdf10056599be8278386ea9c351f04c = $this->env->getExtension("native_profiler");
        $__internal_a11bfeaacba5505494b93fdbb4c1a24e5cdf10056599be8278386ea9c351f04c->enter($__internal_a11bfeaacba5505494b93fdbb4c1a24e5cdf10056599be8278386ea9c351f04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"PedroZalama\" content=\"\">

    <title>Kikolo-anuncio</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("kikolo.png"), "html", null, true);
        echo "\" />
    ";
        // line 12
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 29
        echo "</head>
";
        // line 30
        $this->displayBlock('container', $context, $blocks);
        // line 54
        echo "</html>";
        
        $__internal_a11bfeaacba5505494b93fdbb4c1a24e5cdf10056599be8278386ea9c351f04c->leave($__internal_a11bfeaacba5505494b93fdbb4c1a24e5cdf10056599be8278386ea9c351f04c_prof);

    }

    // line 12
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_9e836ccc3b7e563ed346a78ab05e03fe19910e37ed5fb9bc0174292dfc83de9b = $this->env->getExtension("native_profiler");
        $__internal_9e836ccc3b7e563ed346a78ab05e03fe19910e37ed5fb9bc0174292dfc83de9b->enter($__internal_9e836ccc3b7e563ed346a78ab05e03fe19910e37ed5fb9bc0174292dfc83de9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 13
        echo "
        <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Custom CSS -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/freelancer.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Custom Fonts -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"http://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
    ";
        
        $__internal_9e836ccc3b7e563ed346a78ab05e03fe19910e37ed5fb9bc0174292dfc83de9b->leave($__internal_9e836ccc3b7e563ed346a78ab05e03fe19910e37ed5fb9bc0174292dfc83de9b_prof);

    }

    // line 30
    public function block_container($context, array $blocks = array())
    {
        $__internal_0e43f8f2d31d20258c51d04074643d09e682dcd67139c420be3cd9be6f9f35c2 = $this->env->getExtension("native_profiler");
        $__internal_0e43f8f2d31d20258c51d04074643d09e682dcd67139c420be3cd9be6f9f35c2->enter($__internal_0e43f8f2d31d20258c51d04074643d09e682dcd67139c420be3cd9be6f9f35c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 31
        echo "<body id=\"page-top\" class=\"index\">
<div>
";
        // line 33
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 35
        echo "    </div>
";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "    </body>
";
        
        $__internal_0e43f8f2d31d20258c51d04074643d09e682dcd67139c420be3cd9be6f9f35c2->leave($__internal_0e43f8f2d31d20258c51d04074643d09e682dcd67139c420be3cd9be6f9f35c2_prof);

    }

    // line 33
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d38d3d7e1c81b2b2246a8ac00a56ee99f3b8fc7ece3a1616d2bfb1ba5a62e927 = $this->env->getExtension("native_profiler");
        $__internal_d38d3d7e1c81b2b2246a8ac00a56ee99f3b8fc7ece3a1616d2bfb1ba5a62e927->enter($__internal_d38d3d7e1c81b2b2246a8ac00a56ee99f3b8fc7ece3a1616d2bfb1ba5a62e927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_d38d3d7e1c81b2b2246a8ac00a56ee99f3b8fc7ece3a1616d2bfb1ba5a62e927->leave($__internal_d38d3d7e1c81b2b2246a8ac00a56ee99f3b8fc7ece3a1616d2bfb1ba5a62e927_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7b1d62c9bcda2a97bb61e855ffb667d99b9841b18ba6db3329b2b26800afe01c = $this->env->getExtension("native_profiler");
        $__internal_7b1d62c9bcda2a97bb61e855ffb667d99b9841b18ba6db3329b2b26800afe01c->enter($__internal_7b1d62c9bcda2a97bb61e855ffb667d99b9841b18ba6db3329b2b26800afe01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
        echo "        <!-- Bootstrap Core JavaScript -->
        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Plugin JavaScript -->
        <script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>
        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"js/cbpAnimatedHeader.js\"></script>

        <!-- Contact Form JavaScript -->
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jqBootstrapValidation.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/contact_me.js"), "html", null, true);
        echo "\"></script>

        <!-- Custom Theme JavaScript -->
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/freelancer.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_7b1d62c9bcda2a97bb61e855ffb667d99b9841b18ba6db3329b2b26800afe01c->leave($__internal_7b1d62c9bcda2a97bb61e855ffb667d99b9841b18ba6db3329b2b26800afe01c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 50,  156 => 47,  152 => 46,  145 => 42,  138 => 38,  135 => 37,  129 => 36,  118 => 33,  110 => 52,  108 => 36,  105 => 35,  103 => 33,  99 => 31,  93 => 30,  76 => 19,  71 => 17,  66 => 15,  62 => 13,  56 => 12,  49 => 54,  47 => 30,  44 => 29,  42 => 12,  38 => 11,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="pt">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="PedroZalama" content="">*/
/* */
/*     <title>Kikolo-anuncio</title>*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('kikolo.png') }}" />*/
/*     {% block stylesheet %}*/
/* */
/*         <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->*/
/*         <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">*/
/*         <!-- Custom CSS -->*/
/*         <link href="{{ asset('css/freelancer.css') }}" rel="stylesheet">*/
/*         <!-- Custom Fonts -->*/
/*         <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">*/
/*         <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">*/
/*         <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">*/
/*         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*         <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/*     {% endblock %}*/
/* </head>*/
/* {% block container %}*/
/* <body id="page-top" class="index">*/
/* <div>*/
/* {% block fos_user_content %}*/
/* {% endblock fos_user_content %}*/
/*     </div>*/
/* {% block javascripts %}*/
/*         <!-- Bootstrap Core JavaScript -->*/
/*         <script src="{{ asset('js/bootstrap.min.js')}}"></script>*/
/* */
/*         <!-- Plugin JavaScript -->*/
/*         <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>*/
/*         <script src="{{ asset('js/classie.js') }}"></script>*/
/*         <script src="js/cbpAnimatedHeader.js"></script>*/
/* */
/*         <!-- Contact Form JavaScript -->*/
/*         <script src="{{ asset('js/jqBootstrapValidation.js')}}"></script>*/
/*         <script src="{{ asset('js/contact_me.js')}}"></script>*/
/* */
/*         <!-- Custom Theme JavaScript -->*/
/*         <script src="{{ asset('js/freelancer.js')}}"></script>*/
/*     {% endblock javascripts %}*/
/*     </body>*/
/* {% endblock container %}*/
/* </html>*/
