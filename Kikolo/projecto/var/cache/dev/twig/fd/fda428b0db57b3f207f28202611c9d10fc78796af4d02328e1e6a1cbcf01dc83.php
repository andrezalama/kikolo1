<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_0f20c3ac9974221f55f93b3d7f71cb93025e1f6665d3b943bb812f74d7cbbfe2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8fc00d58e1240f5bc0689fb00aaa3e7cee152f78a4fc5fac071280e34a45cce4 = $this->env->getExtension("native_profiler");
        $__internal_8fc00d58e1240f5bc0689fb00aaa3e7cee152f78a4fc5fac071280e34a45cce4->enter($__internal_8fc00d58e1240f5bc0689fb00aaa3e7cee152f78a4fc5fac071280e34a45cce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fc00d58e1240f5bc0689fb00aaa3e7cee152f78a4fc5fac071280e34a45cce4->leave($__internal_8fc00d58e1240f5bc0689fb00aaa3e7cee152f78a4fc5fac071280e34a45cce4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8889c2a0fcb02fb46f875bbd5f978cb2b24ee44de23533804048e0b04f825779 = $this->env->getExtension("native_profiler");
        $__internal_8889c2a0fcb02fb46f875bbd5f978cb2b24ee44de23533804048e0b04f825779->enter($__internal_8889c2a0fcb02fb46f875bbd5f978cb2b24ee44de23533804048e0b04f825779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "    <body class=\"sign-in-bg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6 col-md-4 col-md-offset-4\">

                ";
        // line 14
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 15
            echo "                    <div class=\"alert alert-danger fade in\">
                        <strong><i class=\"icon-warning-sign\"></i> Erro : </strong> ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 19
        echo "                ";
        // line 20
        echo "
                <div class=\"sign-in-head text-center\">
                    <img class=\"profile-img\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/kikolo.jpg"), "html", null, true);
        echo "\"
                         width=\"200\" height=\"180\" alt=\"\">

                </div>
                <div class=\"\">
                    <div class=\"col-lg-12 text-center\"></br>
                        <h3>Login-Kikolo-anuncio</h3><hr>
                    </div>

                <div class=\"account-wall\">
                    <form action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-signin\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                        <div class=\"form-group\">
                            <label for=\"basic-url\">Usuario</label>
                        <input type=\"text\" id=\"username\" class=\"form-control\" placeholder=\"Usuario\" name=\"_username\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required autofocus>
                        </div>

                        <div class=\"form-group\">
                            <label for=\"basic-url\">Password</label>
                            <input type=\"password\" id=\"password\" class=\"form-control\" placeholder=\"Senha\" name=\"_password\" required>
                        </div>
                        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">
                            Entrar</button>
                        <label class=\"checkbox pull-left\">
                            <input type=\"checkbox\" name=\"_remember_me\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
                            Lembrar-me a Senha
                        </label>
                        <span class=\"clearfix\"></span> <a href=\"#\" class=\"text-center new-account\">Esqueceu a senha? </a>
                    </form>
                </div>
                </div>

            </div>
        </div>
    </div>

    </body>



";
        
        $__internal_8889c2a0fcb02fb46f875bbd5f978cb2b24ee44de23533804048e0b04f825779->leave($__internal_8889c2a0fcb02fb46f875bbd5f978cb2b24ee44de23533804048e0b04f825779_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 47,  96 => 37,  89 => 33,  85 => 32,  72 => 22,  68 => 20,  66 => 19,  60 => 16,  57 => 15,  55 => 14,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/*     <body class="sign-in-bg">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-sm-6 col-md-4 col-md-offset-4">*/
/* */
/*                 {% if error %}*/
/*                     <div class="alert alert-danger fade in">*/
/*                         <strong><i class="icon-warning-sign"></i> Erro : </strong> {{ error|trans({}, 'FOSUserBundle') }}*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 {# <h1 class="text-center login-title">Sign in to continue to Bootsnipp</h1> #}*/
/* */
/*                 <div class="sign-in-head text-center">*/
/*                     <img class="profile-img" src="{{ asset("img/kikolo.jpg") }}"*/
/*                          width="200" height="180" alt="">*/
/* */
/*                 </div>*/
/*                 <div class="">*/
/*                     <div class="col-lg-12 text-center"></br>*/
/*                         <h3>Login-Kikolo-anuncio</h3><hr>*/
/*                     </div>*/
/* */
/*                 <div class="account-wall">*/
/*                     <form action="{{ path("fos_user_security_check") }}" method="post" class="form-signin">*/
/*                         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                         <div class="form-group">*/
/*                             <label for="basic-url">Usuario</label>*/
/*                         <input type="text" id="username" class="form-control" placeholder="Usuario" name="_username" value="{{ last_username }}" required autofocus>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <label for="basic-url">Password</label>*/
/*                             <input type="password" id="password" class="form-control" placeholder="Senha" name="_password" required>*/
/*                         </div>*/
/*                         <button class="btn btn-lg btn-primary btn-block" type="submit">*/
/*                             Entrar</button>*/
/*                         <label class="checkbox pull-left">*/
/*                             <input type="checkbox" name="_remember_me" value="{{ 'security.login.submit'|trans }}">*/
/*                             Lembrar-me a Senha*/
/*                         </label>*/
/*                         <span class="clearfix"></span> <a href="#" class="text-center new-account">Esqueceu a senha? </a>*/
/*                     </form>*/
/*                 </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     </body>*/
/* */
/* */
/* */
/* {% endblock fos_user_content %}*/
/* */
/* */
/* */
