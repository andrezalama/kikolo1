<?php

/* projectoKikoloBundle::Layout.html.twig */
class __TwigTemplate_581229a97939361013a265ee203295c3e5e46062d696f42799ca120cd10cd75c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'container' => array($this, 'block_container'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a809c7ba09658648c20271b8c7555444d8595c5725d2094319dca62ad548b7e1 = $this->env->getExtension("native_profiler");
        $__internal_a809c7ba09658648c20271b8c7555444d8595c5725d2094319dca62ad548b7e1->enter($__internal_a809c7ba09658648c20271b8c7555444d8595c5725d2094319dca62ad548b7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projectoKikoloBundle::Layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"PedroZalama\" content=\"\">

    <title>Kikolo-Classificados</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("kikolo.png"), "html", null, true);
        echo "\" />
    ";
        // line 12
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 30
        echo "</head>

";
        // line 32
        $this->displayBlock('container', $context, $blocks);
        // line 157
        echo "</html>";
        
        $__internal_a809c7ba09658648c20271b8c7555444d8595c5725d2094319dca62ad548b7e1->leave($__internal_a809c7ba09658648c20271b8c7555444d8595c5725d2094319dca62ad548b7e1_prof);

    }

    // line 12
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_d12c60776ca9ee28f45cc88d6008b35787896edd3143eb56c1884c2f706f080e = $this->env->getExtension("native_profiler");
        $__internal_d12c60776ca9ee28f45cc88d6008b35787896edd3143eb56c1884c2f706f080e->enter($__internal_d12c60776ca9ee28f45cc88d6008b35787896edd3143eb56c1884c2f706f080e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_d12c60776ca9ee28f45cc88d6008b35787896edd3143eb56c1884c2f706f080e->leave($__internal_d12c60776ca9ee28f45cc88d6008b35787896edd3143eb56c1884c2f706f080e_prof);

    }

    // line 32
    public function block_container($context, array $blocks = array())
    {
        $__internal_a04ed1bb94417d0239d504ab9c571b0a6f16c55f4d67303cbf2ce647e548235f = $this->env->getExtension("native_profiler");
        $__internal_a04ed1bb94417d0239d504ab9c571b0a6f16c55f4d67303cbf2ce647e548235f->enter($__internal_a04ed1bb94417d0239d504ab9c571b0a6f16c55f4d67303cbf2ce647e548235f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 33
        echo "<body id=\"page-top\" class=\"index\">
<!-- Navigation -->
";
        // line 35
        $this->loadTemplate("projectoKikoloBundle:Kikolo-Default:Menu-kikolo.html.twig", "projectoKikoloBundle::Layout.html.twig", 35)->display($context);
        // line 36
        echo "
<!-- Header -->
<div>
<!-- Portfolio Grid Section -->
";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "</div>

<!-- Footer -->
";
        // line 45
        $this->loadTemplate("projectoKikoloBundle:Kikolo-Default:footer-kikolo.html.twig", "projectoKikoloBundle::Layout.html.twig", 45)->display($context);
        // line 46
        echo "
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class=\"scroll-top page-scroll visible-xs visible-sm\">
    <a class=\"btn btn-primary\" href=\"#page-top\">
        <i class=\"fa fa-chevron-up\"></i>
    </a>
</div>
<!-- Portfolio Modals -->
";
        // line 54
        $this->loadTemplate("projectoKikoloBundle:Kikolo-Default:Modal-kikolo.html.twig", "projectoKikoloBundle::Layout.html.twig", 54)->display($context);
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 155
        echo "</body>
";
        
        $__internal_a04ed1bb94417d0239d504ab9c571b0a6f16c55f4d67303cbf2ce647e548235f->leave($__internal_a04ed1bb94417d0239d504ab9c571b0a6f16c55f4d67303cbf2ce647e548235f_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_36fd2c4dd1a2192142a2614c4ffaa753c257358df2ec83a486f3f4d650cbb947 = $this->env->getExtension("native_profiler");
        $__internal_36fd2c4dd1a2192142a2614c4ffaa753c257358df2ec83a486f3f4d650cbb947->enter($__internal_36fd2c4dd1a2192142a2614c4ffaa753c257358df2ec83a486f3f4d650cbb947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo " ";
        
        $__internal_36fd2c4dd1a2192142a2614c4ffaa753c257358df2ec83a486f3f4d650cbb947->leave($__internal_36fd2c4dd1a2192142a2614c4ffaa753c257358df2ec83a486f3f4d650cbb947_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_65e0fde64a3c6948e0ed31f3cee0776db5570b94d5e6a2357c9936adc6b98a14 = $this->env->getExtension("native_profiler");
        $__internal_65e0fde64a3c6948e0ed31f3cee0776db5570b94d5e6a2357c9936adc6b98a14->enter($__internal_65e0fde64a3c6948e0ed31f3cee0776db5570b94d5e6a2357c9936adc6b98a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "<!-- jQuery -->
<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 100%;
        margin: auto;
        height: 40%;
    }
</style>
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$('[data-toggle=\"popover\"]').popover();
        });
    </script>
    <style type=\"text/css\">
        .bs-example{
            margin: 150px 50px;
        }
        .popover-demo{
            margin-bottom: 20px;
        }
    </style>
<style>
\t/* carousel */
.media-carousel 
{
  margin-bottom: 0;
  padding: 0 40px 30px 40px;
  margin-top: 30px;
}
/* Previous button  */
.media-carousel .carousel-control.left 
{
  left: -12px;
  background-image: none;
  background: none repeat scroll 0 0 #222222;
  border: 4px solid #FFFFFF;
  border-radius: 23px 23px 23px 23px;
  height: 40px;
  width : 40px;
  margin-top: 30px
}
/* Next button  */
.media-carousel .carousel-control.right 
{
  right: -12px !important;
  background-image: none;
  background: none repeat scroll 0 0 #222222;
  border: 4px solid #FFFFFF;
  border-radius: 23px 23px 23px 23px;
  height: 40px;
  width : 40px;
  margin-top: 30px
}
/* Changes the position of the indicators */
.media-carousel .carousel-indicators 
{
  right: 50%;
  top: auto;
  bottom: 0px;
  margin-right: -10px;
}
/* Changes the colour of the indicators */
.media-carousel .carousel-indicators li 
{
  background: #c0c0c0;
}
.media-carousel1 .carousel-indicators .active 
{
  background: #333333;
}
.media-carousel1 img
{
  width: 250px;
  height: 100px
}
.carousel-inner1 {
    width: 100%;
    overflow: hidden;
    height: 150px;
}
\t</style>

<!-- Bootstrap Core JavaScript -->
<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- Plugin JavaScript -->
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>
<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
<script src=\"js/cbpAnimatedHeader.js\"></script>

<!-- Contact Form JavaScript -->
<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jqBootstrapValidation.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/contact_me.js"), "html", null, true);
        echo "\"></script>

<!-- Custom Theme JavaScript -->
<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/freelancer.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_65e0fde64a3c6948e0ed31f3cee0776db5570b94d5e6a2357c9936adc6b98a14->leave($__internal_65e0fde64a3c6948e0ed31f3cee0776db5570b94d5e6a2357c9936adc6b98a14_prof);

    }

    public function getTemplateName()
    {
        return "projectoKikoloBundle::Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 153,  271 => 150,  267 => 149,  260 => 145,  253 => 141,  166 => 57,  163 => 56,  157 => 55,  150 => 41,  144 => 40,  136 => 155,  134 => 55,  132 => 54,  122 => 46,  120 => 45,  115 => 42,  113 => 40,  107 => 36,  105 => 35,  101 => 33,  95 => 32,  77 => 19,  72 => 17,  67 => 15,  63 => 13,  57 => 12,  50 => 157,  48 => 32,  44 => 30,  42 => 12,  38 => 11,  26 => 1,);
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
/*     <title>Kikolo-Classificados</title>*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('kikolo.png') }}" />*/
/*     {% block stylesheet %}*/
/* */
/*     <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->*/
/*     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">*/
/*     <!-- Custom CSS -->*/
/*     <link href="{{ asset('css/freelancer.css') }}" rel="stylesheet">*/
/*     <!-- Custom Fonts -->*/
/*     <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">*/
/* */
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
/* {% block container %}*/
/* <body id="page-top" class="index">*/
/* <!-- Navigation -->*/
/* {% include "projectoKikoloBundle:Kikolo-Default:Menu-kikolo.html.twig" %}*/
/* */
/* <!-- Header -->*/
/* <div>*/
/* <!-- Portfolio Grid Section -->*/
/* {% block body %}*/
/*  {% endblock %}*/
/* </div>*/
/* */
/* <!-- Footer -->*/
/* {% include "projectoKikoloBundle:Kikolo-Default:footer-kikolo.html.twig" %}*/
/* */
/* <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->*/
/* <div class="scroll-top page-scroll visible-xs visible-sm">*/
/*     <a class="btn btn-primary" href="#page-top">*/
/*         <i class="fa fa-chevron-up"></i>*/
/*     </a>*/
/* </div>*/
/* <!-- Portfolio Modals -->*/
/* {% include "projectoKikoloBundle:Kikolo-Default:Modal-kikolo.html.twig" %}*/
/* {% block javascripts %}*/
/* <!-- jQuery -->*/
/* <script src="{{ asset('js/jquery.js') }}"></script>*/
/* <style>*/
/*     .carousel-inner > .item > img,*/
/*     .carousel-inner > .item > a > img {*/
/*         width: 100%;*/
/*         margin: auto;*/
/*         height: 40%;*/
/*     }*/
/* </style>*/
/*     <script type="text/javascript">*/
/*         $(document).ready(function(){*/
/*             $('[data-toggle="popover"]').popover();*/
/*         });*/
/*     </script>*/
/*     <style type="text/css">*/
/*         .bs-example{*/
/*             margin: 150px 50px;*/
/*         }*/
/*         .popover-demo{*/
/*             margin-bottom: 20px;*/
/*         }*/
/*     </style>*/
/* <style>*/
/* 	/* carousel *//* */
/* .media-carousel */
/* {*/
/*   margin-bottom: 0;*/
/*   padding: 0 40px 30px 40px;*/
/*   margin-top: 30px;*/
/* }*/
/* /* Previous button  *//* */
/* .media-carousel .carousel-control.left */
/* {*/
/*   left: -12px;*/
/*   background-image: none;*/
/*   background: none repeat scroll 0 0 #222222;*/
/*   border: 4px solid #FFFFFF;*/
/*   border-radius: 23px 23px 23px 23px;*/
/*   height: 40px;*/
/*   width : 40px;*/
/*   margin-top: 30px*/
/* }*/
/* /* Next button  *//* */
/* .media-carousel .carousel-control.right */
/* {*/
/*   right: -12px !important;*/
/*   background-image: none;*/
/*   background: none repeat scroll 0 0 #222222;*/
/*   border: 4px solid #FFFFFF;*/
/*   border-radius: 23px 23px 23px 23px;*/
/*   height: 40px;*/
/*   width : 40px;*/
/*   margin-top: 30px*/
/* }*/
/* /* Changes the position of the indicators *//* */
/* .media-carousel .carousel-indicators */
/* {*/
/*   right: 50%;*/
/*   top: auto;*/
/*   bottom: 0px;*/
/*   margin-right: -10px;*/
/* }*/
/* /* Changes the colour of the indicators *//* */
/* .media-carousel .carousel-indicators li */
/* {*/
/*   background: #c0c0c0;*/
/* }*/
/* .media-carousel1 .carousel-indicators .active */
/* {*/
/*   background: #333333;*/
/* }*/
/* .media-carousel1 img*/
/* {*/
/*   width: 250px;*/
/*   height: 100px*/
/* }*/
/* .carousel-inner1 {*/
/*     width: 100%;*/
/*     overflow: hidden;*/
/*     height: 150px;*/
/* }*/
/* 	</style>*/
/* */
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
/* {% endblock container %}*/
/* </html>*/
