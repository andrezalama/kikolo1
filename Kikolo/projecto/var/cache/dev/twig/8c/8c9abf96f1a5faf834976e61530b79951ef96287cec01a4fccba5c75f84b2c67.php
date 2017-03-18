<?php

/* FOSUserBundle::LLayout.html.twig */
class __TwigTemplate_20d8b0302fd550a922430fcb25f46107f8c3e6e263fb8b8b7cb36db7b32e084e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f77b24ad92f52882cc9f6a9a42db3b8d40d8e53f298ba8adb88a52631bb4f2ea = $this->env->getExtension("native_profiler");
        $__internal_f77b24ad92f52882cc9f6a9a42db3b8d40d8e53f298ba8adb88a52631bb4f2ea->enter($__internal_f77b24ad92f52882cc9f6a9a42db3b8d40d8e53f298ba8adb88a52631bb4f2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::LLayout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"PedroZalama\" content=\"\">

    <title>Kikolo-cadastro-anuncio</title>
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
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "</html>";
        
        $__internal_f77b24ad92f52882cc9f6a9a42db3b8d40d8e53f298ba8adb88a52631bb4f2ea->leave($__internal_f77b24ad92f52882cc9f6a9a42db3b8d40d8e53f298ba8adb88a52631bb4f2ea_prof);

    }

    // line 12
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_55dd55deddea584c9410036bd23ca4b28d768bc43a82c6c72d56158fb78fd9d9 = $this->env->getExtension("native_profiler");
        $__internal_55dd55deddea584c9410036bd23ca4b28d768bc43a82c6c72d56158fb78fd9d9->enter($__internal_55dd55deddea584c9410036bd23ca4b28d768bc43a82c6c72d56158fb78fd9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_55dd55deddea584c9410036bd23ca4b28d768bc43a82c6c72d56158fb78fd9d9->leave($__internal_55dd55deddea584c9410036bd23ca4b28d768bc43a82c6c72d56158fb78fd9d9_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_663716352a100a660fd393f880f958b49de96b49543f39318aec13ad7e141f82 = $this->env->getExtension("native_profiler");
        $__internal_663716352a100a660fd393f880f958b49de96b49543f39318aec13ad7e141f82->enter($__internal_663716352a100a660fd393f880f958b49de96b49543f39318aec13ad7e141f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "

<!-- Footer -->
";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "</body>
";
        
        $__internal_663716352a100a660fd393f880f958b49de96b49543f39318aec13ad7e141f82->leave($__internal_663716352a100a660fd393f880f958b49de96b49543f39318aec13ad7e141f82_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d1e2bb45807905ee33c7e17798742469a673b74f09fd31795732882bbad93637 = $this->env->getExtension("native_profiler");
        $__internal_d1e2bb45807905ee33c7e17798742469a673b74f09fd31795732882bbad93637->enter($__internal_d1e2bb45807905ee33c7e17798742469a673b74f09fd31795732882bbad93637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "<!-- Bootstrap Core JavaScript -->
<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- Plugin JavaScript -->
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>
<script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
<script src=\"js/cbpAnimatedHeader.js\"></script>

<!-- Contact Form JavaScript -->
<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jqBootstrapValidation.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/contact_me.js"), "html", null, true);
        echo "\"></script>

<!-- Custom Theme JavaScript -->
<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/freelancer.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_d1e2bb45807905ee33c7e17798742469a673b74f09fd31795732882bbad93637->leave($__internal_d1e2bb45807905ee33c7e17798742469a673b74f09fd31795732882bbad93637_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::LLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 49,  141 => 46,  137 => 45,  130 => 41,  123 => 37,  120 => 36,  114 => 35,  106 => 51,  104 => 35,  99 => 32,  93 => 31,  76 => 19,  71 => 17,  66 => 15,  62 => 13,  56 => 12,  49 => 53,  47 => 31,  43 => 29,  41 => 12,  37 => 11,  25 => 1,);
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
/*     <title>Kikolo-cadastro-anuncio</title>*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('kikolo.png') }}" />*/
/*     {% block stylesheet %}*/
/* */
/*     <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->*/
/*     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">*/
/*     <!-- Custom CSS -->*/
/*     <link href="{{ asset('css/freelancer.css') }}" rel="stylesheet">*/
/*     <!-- Custom Fonts -->*/
/*     <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">*/
/*     <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">*/
/*     <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">*/
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*     {% endblock %}*/
/* </head>*/
/* */
/* {% block body %}*/
/* */
/* */
/* <!-- Footer -->*/
/* {% block javascripts %}*/
/* <!-- Bootstrap Core JavaScript -->*/
/* <script src="{{ asset('js/bootstrap.min.js')}}"></script>*/
/* */
/* <!-- Plugin JavaScript -->*/
/* <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>*/
/* <script src="{{ asset('js/classie.js') }}"></script>*/
/* <script src="js/cbpAnimatedHeader.js"></script>*/
/* */
/* <!-- Contact Form JavaScript -->*/
/* <script src="{{ asset('js/jqBootstrapValidation.js')}}"></script>*/
/* <script src="{{ asset('js/contact_me.js')}}"></script>*/
/* */
/* <!-- Custom Theme JavaScript -->*/
/* <script src="{{ asset('js/freelancer.js')}}"></script>*/
/* {% endblock javascripts %}*/
/* </body>*/
/* {% endblock  %}*/
/* </html>*/
