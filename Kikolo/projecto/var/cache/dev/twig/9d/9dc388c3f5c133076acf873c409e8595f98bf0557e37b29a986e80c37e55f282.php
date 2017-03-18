<?php

/* projectoKikoloBundle:Kikolo-anuncio:Menu_anuncio.html.twig */
class __TwigTemplate_51551343837dde2a8abb765e9107a8baa0eb6c09234394496404a972b4a6fb65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("projectoKikoloBundle::Layout.html.twig", "projectoKikoloBundle:Kikolo-anuncio:Menu_anuncio.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'container0' => array($this, 'block_container0'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "projectoKikoloBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59797873f8a1cc6801df2c1d49a943aac648fe66e1e4f25d529e51597ce162cb = $this->env->getExtension("native_profiler");
        $__internal_59797873f8a1cc6801df2c1d49a943aac648fe66e1e4f25d529e51597ce162cb->enter($__internal_59797873f8a1cc6801df2c1d49a943aac648fe66e1e4f25d529e51597ce162cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projectoKikoloBundle:Kikolo-anuncio:Menu_anuncio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59797873f8a1cc6801df2c1d49a943aac648fe66e1e4f25d529e51597ce162cb->leave($__internal_59797873f8a1cc6801df2c1d49a943aac648fe66e1e4f25d529e51597ce162cb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0c7f545a706924fa52a6b514e69909ee83b8c05f1504d4270f7a62f5ba09709 = $this->env->getExtension("native_profiler");
        $__internal_f0c7f545a706924fa52a6b514e69909ee83b8c05f1504d4270f7a62f5ba09709->enter($__internal_f0c7f545a706924fa52a6b514e69909ee83b8c05f1504d4270f7a62f5ba09709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div>

        ";
        // line 5
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
            <a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
            </a>
        ";
        } else {
            // line 11
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 13
        echo "    </div>

    ";
        // line 15
        $this->displayBlock('container0', $context, $blocks);
        
        $__internal_f0c7f545a706924fa52a6b514e69909ee83b8c05f1504d4270f7a62f5ba09709->leave($__internal_f0c7f545a706924fa52a6b514e69909ee83b8c05f1504d4270f7a62f5ba09709_prof);

    }

    public function block_container0($context, array $blocks = array())
    {
        $__internal_821cf31cafe56742492b11c25cfc0a9811a01c43c096a1420485a55a71923afe = $this->env->getExtension("native_profiler");
        $__internal_821cf31cafe56742492b11c25cfc0a9811a01c43c096a1420485a55a71923afe->enter($__internal_821cf31cafe56742492b11c25cfc0a9811a01c43c096a1420485a55a71923afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container0"));

        // line 16
        echo "        <section class=\"\" >
            <div class=\"container\">

                <div class=\"row\">
                    <div class=\"col-lg-12 text-center\"></br>
                        <h2>Meu Perfil de Anunciante</h2>
                        <hr class=\"star-primary\">
                    </div>
                </div>
            </div>
            </div>
    </section>
    ";
        
        $__internal_821cf31cafe56742492b11c25cfc0a9811a01c43c096a1420485a55a71923afe->leave($__internal_821cf31cafe56742492b11c25cfc0a9811a01c43c096a1420485a55a71923afe_prof);

    }

    public function getTemplateName()
    {
        return "projectoKikoloBundle:Kikolo-anuncio:Menu_anuncio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 16,  74 => 15,  70 => 13,  62 => 11,  56 => 8,  52 => 7,  47 => 6,  45 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "projectoKikoloBundle::Layout.html.twig" %}*/
/* {% block body -%}*/
/*     <div>*/
/* */
/*         {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*             {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*             <a href="{{ path('fos_user_security_logout') }}">*/
/*                 {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*             </a>*/
/*         {% else %}*/
/*             <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/*     {% block container0 %}*/
/*         <section class="" >*/
/*             <div class="container">*/
/* */
/*                 <div class="row">*/
/*                     <div class="col-lg-12 text-center"></br>*/
/*                         <h2>Meu Perfil de Anunciante</h2>*/
/*                         <hr class="star-primary">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             </div>*/
/*     </section>*/
/*     {% endblock%}*/
/* {% endblock %}*/
/* */
/* */
/* */
