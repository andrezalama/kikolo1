<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_6b03e9287de90ca09c4f74def77b88ca1130dce0919d3c3af19efeffbaabc67a extends Twig_Template
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
        $__internal_ac821126fd52a0f1be4f899e5e86f78b69f8189a839bea211fb3d6a1a09d5c8e = $this->env->getExtension("native_profiler");
        $__internal_ac821126fd52a0f1be4f899e5e86f78b69f8189a839bea211fb3d6a1a09d5c8e->enter($__internal_ac821126fd52a0f1be4f899e5e86f78b69f8189a839bea211fb3d6a1a09d5c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"PedroZalama\" content=\"\">

    <title>Entrar-Kikolo-anuncio</title>
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
        // line 31
        $this->displayBlock('container', $context, $blocks);
        // line 58
        echo "</html>


";
        
        $__internal_ac821126fd52a0f1be4f899e5e86f78b69f8189a839bea211fb3d6a1a09d5c8e->leave($__internal_ac821126fd52a0f1be4f899e5e86f78b69f8189a839bea211fb3d6a1a09d5c8e_prof);

    }

    // line 12
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_aed5961cd2ece39b05596ae3dd4504e0e0bc91298c6344b9c2e44ddd966f55bf = $this->env->getExtension("native_profiler");
        $__internal_aed5961cd2ece39b05596ae3dd4504e0e0bc91298c6344b9c2e44ddd966f55bf->enter($__internal_aed5961cd2ece39b05596ae3dd4504e0e0bc91298c6344b9c2e44ddd966f55bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_aed5961cd2ece39b05596ae3dd4504e0e0bc91298c6344b9c2e44ddd966f55bf->leave($__internal_aed5961cd2ece39b05596ae3dd4504e0e0bc91298c6344b9c2e44ddd966f55bf_prof);

    }

    // line 31
    public function block_container($context, array $blocks = array())
    {
        $__internal_45274ad8302a70f2cbd6326e6d5adc5fc47180477fcf8ad5e17a9e58a0198a79 = $this->env->getExtension("native_profiler");
        $__internal_45274ad8302a70f2cbd6326e6d5adc5fc47180477fcf8ad5e17a9e58a0198a79->enter($__internal_45274ad8302a70f2cbd6326e6d5adc5fc47180477fcf8ad5e17a9e58a0198a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 32
        echo "    <body id=\"page-top\" class=\"index\">
    ";
        // line 33
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 35
        echo "
    <!-- Footer -->

    ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "    </body>
";
        
        $__internal_45274ad8302a70f2cbd6326e6d5adc5fc47180477fcf8ad5e17a9e58a0198a79->leave($__internal_45274ad8302a70f2cbd6326e6d5adc5fc47180477fcf8ad5e17a9e58a0198a79_prof);

    }

    // line 33
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a3404199fff55a16feed52bca448041ee4a32376868e20ff2d950d268b44e7f6 = $this->env->getExtension("native_profiler");
        $__internal_a3404199fff55a16feed52bca448041ee4a32376868e20ff2d950d268b44e7f6->enter($__internal_a3404199fff55a16feed52bca448041ee4a32376868e20ff2d950d268b44e7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 34
        echo "    ";
        
        $__internal_a3404199fff55a16feed52bca448041ee4a32376868e20ff2d950d268b44e7f6->leave($__internal_a3404199fff55a16feed52bca448041ee4a32376868e20ff2d950d268b44e7f6_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_91028942d69f36b67cb11ba17d686c3312d02eb195fd5bbe6facf1e8581eb481 = $this->env->getExtension("native_profiler");
        $__internal_91028942d69f36b67cb11ba17d686c3312d02eb195fd5bbe6facf1e8581eb481->enter($__internal_91028942d69f36b67cb11ba17d686c3312d02eb195fd5bbe6facf1e8581eb481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "

        <!-- Bootstrap Core JavaScript -->
        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Plugin JavaScript -->
        <script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"js/cbpAnimatedHeader.js\"></script>

        <!-- Contact Form JavaScript -->
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jqBootstrapValidation.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/contact_me.js"), "html", null, true);
        echo "\"></script>

        <!-- Custom Theme JavaScript -->
        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/freelancer.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_91028942d69f36b67cb11ba17d686c3312d02eb195fd5bbe6facf1e8581eb481->leave($__internal_91028942d69f36b67cb11ba17d686c3312d02eb195fd5bbe6facf1e8581eb481_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 54,  165 => 51,  161 => 50,  154 => 46,  147 => 42,  142 => 39,  136 => 38,  129 => 34,  123 => 33,  115 => 56,  113 => 38,  108 => 35,  106 => 33,  103 => 32,  97 => 31,  80 => 19,  75 => 17,  70 => 15,  66 => 13,  60 => 12,  50 => 58,  48 => 31,  44 => 29,  42 => 12,  38 => 11,  26 => 1,);
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
/*     <title>Entrar-Kikolo-anuncio</title>*/
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
/* */
/* {% block container %}*/
/*     <body id="page-top" class="index">*/
/*     {% block fos_user_content %}*/
/*     {% endblock fos_user_content %}*/
/* */
/*     <!-- Footer -->*/
/* */
/*     {% block javascripts %}*/
/* */
/* */
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
/* */
/* */
/* */
