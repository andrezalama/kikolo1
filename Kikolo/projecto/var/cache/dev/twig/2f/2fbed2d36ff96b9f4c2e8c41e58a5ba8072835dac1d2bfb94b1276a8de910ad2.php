<?php

/* projectoKikoloBundle:Kikolo-Default:Menu-kikolo.html.twig */
class __TwigTemplate_a5ffa95ff529ffc6eee3dc79955a232c9e17fa95f33999cc5cc6cac2e70b8a9e extends Twig_Template
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
        $__internal_728903f878eecf83d363f474311d768e03400702401b8a692f09ac48923b0a26 = $this->env->getExtension("native_profiler");
        $__internal_728903f878eecf83d363f474311d768e03400702401b8a692f09ac48923b0a26->enter($__internal_728903f878eecf83d363f474311d768e03400702401b8a692f09ac48923b0a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projectoKikoloBundle:Kikolo-Default:Menu-kikolo.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
       
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("projecto_kikolo_homepage");
        echo "\"> <img src=\"img/kikolo_header.png\" class=\"img-circle\" alt=\"Cinque Terre\" width=\"53\" height=\"49\" ></a>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"nav navbar-nav\">
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Conta Kikolo </a></li>
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("projecto_new");
        echo "\">Vender e Anunciar</a></li>
        </ul>

        <div class=\"col-sm-3 col-md-3 pull-right\">
            <form class=\"navbar-form\" role=\"search\">
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control input-sm\" placeholder=\"Pesquisar no kikolo\" name=\"q\">
                    <div class=\"input-group-btn btn-group-sm\">
                        <button class=\"btn btn-default\" type=\"submit\"><i class=\"glyphicon glyphicon-search\"></i></button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</nav>";
        
        $__internal_728903f878eecf83d363f474311d768e03400702401b8a692f09ac48923b0a26->leave($__internal_728903f878eecf83d363f474311d768e03400702401b8a692f09ac48923b0a26_prof);

    }

    public function getTemplateName()
    {
        return "projectoKikoloBundle:Kikolo-Default:Menu-kikolo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 15,  40 => 14,  33 => 10,  22 => 1,);
    }
}
/* <nav class="navbar navbar-default navbar-fixed-top" role="navigation">*/
/*     <div class="navbar-header">*/
/*         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*         </button>*/
/*        */
/*         <a href="{{ path('projecto_kikolo_homepage') }}"> <img src="img/kikolo_header.png" class="img-circle" alt="Cinque Terre" width="53" height="49" ></a>*/
/*     </div>*/
/*     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*         <ul class="nav navbar-nav">*/
/*             <li><a href="{{ path('fos_user_security_login') }}">Conta Kikolo </a></li>*/
/*             <li><a href="{{ path('projecto_new') }}">Vender e Anunciar</a></li>*/
/*         </ul>*/
/* */
/*         <div class="col-sm-3 col-md-3 pull-right">*/
/*             <form class="navbar-form" role="search">*/
/*                 <div class="input-group">*/
/*                     <input type="text" class="form-control input-sm" placeholder="Pesquisar no kikolo" name="q">*/
/*                     <div class="input-group-btn btn-group-sm">*/
/*                         <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>*/
/*                     </div>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/* */
/*     </div>*/
/* </nav>*/
