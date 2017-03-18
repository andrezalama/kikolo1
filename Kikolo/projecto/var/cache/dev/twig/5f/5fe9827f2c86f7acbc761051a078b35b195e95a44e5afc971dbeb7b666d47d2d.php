<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_a63119151ac7ddc44991361a2817b63836e165e0fd4cece4a45b394a6fa65b93 extends Twig_Template
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
        $__internal_1fb830ac25a3a460da58723c5452b3a2a289eec62ef8b2765d19d15baa862a3a = $this->env->getExtension("native_profiler");
        $__internal_1fb830ac25a3a460da58723c5452b3a2a289eec62ef8b2765d19d15baa862a3a->enter($__internal_1fb830ac25a3a460da58723c5452b3a2a289eec62ef8b2765d19d15baa862a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
<div class=\"row\">
    <hr>
    <div class=\"col-md-7\">

        <div class=\"form-horizontal\">
            <div class=\"jumbotron col-lg-12\">
                <h4>Informações usuario</h4>
                <hr>

                <div class=\"form-group\">
                    <label class=\"control-label col-sm-2\" for=\"validate-username\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Usuario", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <div class=\"col-sm-9\" data-validate=\"username\">
                        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "name" => "validate-usaername", "id" => "validate-username", "placeholder" => $this->env->getExtension('translator')->trans("nome usuario", array(), "FOSUserBundle"))));
        // line 17
        echo "
                        <small class=\"help-block\">O tamanho não pode ser maior que 20.</small>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label col-sm-2\" for=\"validate-email\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Email", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <div class=\"col-sm-9\" data-validate=\"email\">
                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "name" => "validate-email", "id" => "validate-email", "placeholder" => $this->env->getExtension('translator')->trans("email", array(), "FOSUserBundle"))));
        // line 26
        echo "
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label col-sm-2\" for=\"validate-password\">Password</label>
                    <div class=\"col-sm-9\" data-validate=\"password\">
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label col-sm-2\" for=\"validate-password\">Verificar</label>
                    <div class=\"col-sm-9\" data-validate=\"password\">
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>




                </div>
            </div>

        <div class=\"form-group\"></br>
            <div class=\"col-sm-offset-2 col-sm-10\">
                <input type=\"submit\" class=\"btn btn-default\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                <button type=\"reset\" class=\"btn btn-danger\">Limpar</button>
            </div>
        </div>
        </div>
    </div>
";
        // line 58
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_1fb830ac25a3a460da58723c5452b3a2a289eec62ef8b2765d19d15baa862a3a->leave($__internal_1fb830ac25a3a460da58723c5452b3a2a289eec62ef8b2765d19d15baa862a3a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 58,  95 => 52,  80 => 40,  70 => 33,  61 => 26,  59 => 25,  54 => 23,  46 => 17,  44 => 16,  39 => 14,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/* <div class="row">*/
/*     <hr>*/
/*     <div class="col-md-7">*/
/* */
/*         <div class="form-horizontal">*/
/*             <div class="jumbotron col-lg-12">*/
/*                 <h4>Informações usuario</h4>*/
/*                 <hr>*/
/* */
/*                 <div class="form-group">*/
/*                     <label class="control-label col-sm-2" for="validate-username">{{'Usuario'|trans }}</label>*/
/*                     <div class="col-sm-9" data-validate="username">*/
/*                         {{form_widget(form.username, {'attr':{'class': 'form-control', 'name': 'validate-usaername','id':'validate-username','placeholder':'nome usuario'|trans*/
/*                         }}  ) }}*/
/*                         <small class="help-block">O tamanho não pode ser maior que 20.</small>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label class="control-label col-sm-2" for="validate-email">{{'Email'|trans }}</label>*/
/*                     <div class="col-sm-9" data-validate="email">*/
/*                         {{form_widget(form.email, {'attr':{'class': 'form-control', 'name': 'validate-email','id':'validate-email','placeholder':'email'|trans*/
/*                         }}  ) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label class="control-label col-sm-2" for="validate-password">Password</label>*/
/*                     <div class="col-sm-9" data-validate="password">*/
/*                         {{form_widget(form.plainPassword.first, {'attr':{'class': 'form-control' }}  ) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label class="control-label col-sm-2" for="validate-password">Verificar</label>*/
/*                     <div class="col-sm-9" data-validate="password">*/
/*                         {{form_widget(form.plainPassword.second, {'attr':{'class': 'form-control' }}  ) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/* */
/* */
/* */
/*                 </div>*/
/*             </div>*/
/* */
/*         <div class="form-group"></br>*/
/*             <div class="col-sm-offset-2 col-sm-10">*/
/*                 <input type="submit" class="btn btn-default" value="{{ 'registration.submit'|trans }}" />*/
/*                 <button type="reset" class="btn btn-danger">Limpar</button>*/
/*             </div>*/
/*         </div>*/
/*         </div>*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
