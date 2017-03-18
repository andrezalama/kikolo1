<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_c4658377ef19b2f1063edf6b847dc521cba161b086b3f4d7b7a0ee8b90492ae3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("projectoKikoloBundle::Layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "projectoKikoloBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a73511baa8acdd2b3ba1d422321d9a5b6684d8bc27a0fb10e3ce2ad024d18f4 = $this->env->getExtension("native_profiler");
        $__internal_3a73511baa8acdd2b3ba1d422321d9a5b6684d8bc27a0fb10e3ce2ad024d18f4->enter($__internal_3a73511baa8acdd2b3ba1d422321d9a5b6684d8bc27a0fb10e3ce2ad024d18f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a73511baa8acdd2b3ba1d422321d9a5b6684d8bc27a0fb10e3ce2ad024d18f4->leave($__internal_3a73511baa8acdd2b3ba1d422321d9a5b6684d8bc27a0fb10e3ce2ad024d18f4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a59f12157ec98d9883f2d68c3f3f95780a242945b5c8ecf1f00d74b6d3dfb864 = $this->env->getExtension("native_profiler");
        $__internal_a59f12157ec98d9883f2d68c3f3f95780a242945b5c8ecf1f00d74b6d3dfb864->enter($__internal_a59f12157ec98d9883f2d68c3f3f95780a242945b5c8ecf1f00d74b6d3dfb864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 18
        echo "
";
        
        $__internal_a59f12157ec98d9883f2d68c3f3f95780a242945b5c8ecf1f00d74b6d3dfb864->leave($__internal_a59f12157ec98d9883f2d68c3f3f95780a242945b5c8ecf1f00d74b6d3dfb864_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_312f652c3266c0bb298d8de773d72a8a4cab285660cdf247481e6e6eca319736 = $this->env->getExtension("native_profiler");
        $__internal_312f652c3266c0bb298d8de773d72a8a4cab285660cdf247481e6e6eca319736->enter($__internal_312f652c3266c0bb298d8de773d72a8a4cab285660cdf247481e6e6eca319736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    <section id=\"contact\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-lg-12 text-center\"></br>
                    <h4>Criar Perfil</h4>
                    <hr class=\"star-primary\">
                </div>
            </div>
";
        // line 14
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 14)->display($context);
        // line 15
        echo "            </div>
    </section>
";
        
        $__internal_312f652c3266c0bb298d8de773d72a8a4cab285660cdf247481e6e6eca319736->leave($__internal_312f652c3266c0bb298d8de773d72a8a4cab285660cdf247481e6e6eca319736_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 15,  71 => 14,  60 => 5,  54 => 4,  46 => 18,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "projectoKikoloBundle::Layout.html.twig" %}*/
/* {% block body %}*/
/* */
/* {% block fos_user_content %}*/
/*     <section id="contact">*/
/*         <div class="container">*/
/* */
/*             <div class="row">*/
/*                 <div class="col-lg-12 text-center"></br>*/
/*                     <h4>Criar Perfil</h4>*/
/*                     <hr class="star-primary">*/
/*                 </div>*/
/*             </div>*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/*             </div>*/
/*     </section>*/
/* {% endblock fos_user_content %}*/
/* */
/* {% endblock %}*/
/* */
