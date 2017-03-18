<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3bd7bfad39c6d47657a823820d4925dec5b6ac1bc2956c8da156cfd66d8ed08d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c74abc4606e0820876a9440b7c92899ce78404b517835f47eb36a9e3649b21c = $this->env->getExtension("native_profiler");
        $__internal_8c74abc4606e0820876a9440b7c92899ce78404b517835f47eb36a9e3649b21c->enter($__internal_8c74abc4606e0820876a9440b7c92899ce78404b517835f47eb36a9e3649b21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c74abc4606e0820876a9440b7c92899ce78404b517835f47eb36a9e3649b21c->leave($__internal_8c74abc4606e0820876a9440b7c92899ce78404b517835f47eb36a9e3649b21c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_278c7da58748a557b022cde938708e45ed128694e27f69fb961b687c32fb6d21 = $this->env->getExtension("native_profiler");
        $__internal_278c7da58748a557b022cde938708e45ed128694e27f69fb961b687c32fb6d21->enter($__internal_278c7da58748a557b022cde938708e45ed128694e27f69fb961b687c32fb6d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_278c7da58748a557b022cde938708e45ed128694e27f69fb961b687c32fb6d21->leave($__internal_278c7da58748a557b022cde938708e45ed128694e27f69fb961b687c32fb6d21_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0e8fb58edc82fda954c5e4a5d0e37b15ef851fab8f4785c21983fa64508c5a35 = $this->env->getExtension("native_profiler");
        $__internal_0e8fb58edc82fda954c5e4a5d0e37b15ef851fab8f4785c21983fa64508c5a35->enter($__internal_0e8fb58edc82fda954c5e4a5d0e37b15ef851fab8f4785c21983fa64508c5a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0e8fb58edc82fda954c5e4a5d0e37b15ef851fab8f4785c21983fa64508c5a35->leave($__internal_0e8fb58edc82fda954c5e4a5d0e37b15ef851fab8f4785c21983fa64508c5a35_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_053b08f1f8966bc7bdd8d4c5037b9b9a428b3d56ec659e343fc36d4306f9a13b = $this->env->getExtension("native_profiler");
        $__internal_053b08f1f8966bc7bdd8d4c5037b9b9a428b3d56ec659e343fc36d4306f9a13b->enter($__internal_053b08f1f8966bc7bdd8d4c5037b9b9a428b3d56ec659e343fc36d4306f9a13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_053b08f1f8966bc7bdd8d4c5037b9b9a428b3d56ec659e343fc36d4306f9a13b->leave($__internal_053b08f1f8966bc7bdd8d4c5037b9b9a428b3d56ec659e343fc36d4306f9a13b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
