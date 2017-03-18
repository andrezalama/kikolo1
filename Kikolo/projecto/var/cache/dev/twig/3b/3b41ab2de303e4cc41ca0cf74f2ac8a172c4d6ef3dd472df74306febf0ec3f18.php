<?php

/* projectoKikoloBundle:Kikolo-anuncio:Cadastra.html.twig */
class __TwigTemplate_dc80c84676fd697da0ccf21ed09aeeb9f65445b414bdde0d87deb0c2d5a008ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("projectoKikoloBundle::Layout.html.twig", "projectoKikoloBundle:Kikolo-anuncio:Cadastra.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "projectoKikoloBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43de12533c7fbfa5506f32f28da3c8a3f61ccda8d6a6b0da9b78c135c220adc0 = $this->env->getExtension("native_profiler");
        $__internal_43de12533c7fbfa5506f32f28da3c8a3f61ccda8d6a6b0da9b78c135c220adc0->enter($__internal_43de12533c7fbfa5506f32f28da3c8a3f61ccda8d6a6b0da9b78c135c220adc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projectoKikoloBundle:Kikolo-anuncio:Cadastra.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43de12533c7fbfa5506f32f28da3c8a3f61ccda8d6a6b0da9b78c135c220adc0->leave($__internal_43de12533c7fbfa5506f32f28da3c8a3f61ccda8d6a6b0da9b78c135c220adc0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a384c7e925c95bd13bad9156ee8ee1332d46bc17fd5bcc7ea9dcd0192ce64ff1 = $this->env->getExtension("native_profiler");
        $__internal_a384c7e925c95bd13bad9156ee8ee1332d46bc17fd5bcc7ea9dcd0192ce64ff1->enter($__internal_a384c7e925c95bd13bad9156ee8ee1332d46bc17fd5bcc7ea9dcd0192ce64ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <section id=\"contact\" xmlns=\"http://www.w3.org/1999/html\"></br>

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-lg-12 text-center\"></br>
                    <h4>Criar Anuncio</h4>
                    <hr class=\"star-primary\">
                </div>
            </div>
            ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("actio" => array("new" => "POST")));
        echo "
            <div class=\"row\">
                <hr>
                <div class=\"col-md-7\">

                 <div class=\"form-horizontal\">
                  <div class=\"jumbotron col-lg-12\">
                      <h4>Informações Anuncio</h4>
                      <hr>

                    <div class=\"form-group\">
                      <label class=\"control-label col-sm-2\" for=\"validate-titulo\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Titulo"), "html", null, true);
        echo "</label>
                      <div class=\"col-sm-9\" data-validate=\"titulo\">
                         ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'widget', array("attr" => array("class" => "form-control", "name" => "validate-email", "id" => "validate-email", "placeholder" => $this->env->getExtension('translator')->trans("titulo"))));
        // line 27
        echo "
                          <small class=\"help-block\">O tamanho não pode ser maior que 20.</small>
                     </div>
                     </div>

                      <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label \" for=\"validate-select\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tipo anuncio"), "html", null, true);
        echo "</label>
                          <div class=\"col-sm-3\" data-validate=\"tipoanuncio\">
                              ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoanuncio", array()), 'widget', array("attr" => array("class" => "form-control", "name" => "validate-select", "id" => "validate-select", "placeholder" => $this->env->getExtension('translator')->trans("Seleccione uma Categoria"))));
        echo "
                          </div>
                      </div>

                    <div class=\"form-group\">
                        <label class=\"control-label col-sm-2\" for=\"validate-select\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Categoria"), "html", null, true);
        echo "</label>
                        <div class=\"col-sm-9\" data-validate=\"categoria\">
                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'widget', array("attr" => array("class" => "form-control", "name" => "validate-select", "id" => "validate-select", "placeholder" => $this->env->getExtension('translator')->trans("Seleccione uma Categoria"))));
        echo "
                        </div>
                    </div>

                      <div class=\"form-group\">
                          <label class=\"control-label col-sm-2\" for=\"validate-select\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Preço"), "html", null, true);
        echo "</label>
                          <div class=\"col-sm-4\" data-validate=\"preco\">
                              ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preco", array()), 'widget', array("attr" => array("class" => "form-control", "name" => "validate-select", "id" => "validate-select")));
        echo "
                          </div>

                          <label class=\"control-label col-sm-3\" for=\"validate-select\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Negociavel"), "html", null, true);
        echo "</label>
                          <div class=\"col-sm-2\">
                          <div class=\"checkbox\" data-validate=\"negociavel\">
                              ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "negociavel", array()), 'widget', array("attr" => array("class" => "form-group", "name" => "validate-select", "id" => "validate-select", "placeholder" => $this->env->getExtension('translator')->trans("Seleccione uma Categoria"))));
        echo "
                          </div>
                          </div>

                          </div>

                    <div class=\"form-group\">
                        <label class=\"control-label col-sm-2\" for=\"validate-select\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Descrição"), "html", null, true);
        echo "</label>
                        <div class=\"col-sm-9\" data-validate=\"categoria\">
                            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descricao", array()), 'widget', array("attr" => array("class" => "form-control", "name" => "validate-descricao", "id" => "validate-descricao")));
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label col-sm-2\" for=\"validate-select\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Imagem"), "html", null, true);
        echo "</label>
                        <div class=\"col-sm-9\" data-validate=\"upload\">
                            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upload", array()), 'widget', array("attr" => array("class" => "form-control", "name" => "validate-upload", "id" => "validate-upload")));
        echo "
                            <small class=\"help-block\">Carregue ate 5 imagens e o tamanho nao pode ser superiro a 2MB.</small>
                        </div>
                    </div>

                    <hr>
                      <h4>Informações Usuario</h4>
                    <hr>

                    <div class=\"form-group\">
                        <label class=\"control-label col-sm-2\" for=\"validate-select\">";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Usuario"), "html", null, true);
        echo "</label>
                        <div class=\"col-sm-9\" data-validate=\"nomeusuario\">
                            ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomeusuario", array()), 'widget', array("attr" => array("class" => "form-control", "name" => "validate-nomeusuario", "id" => "validate-nomeusuario")));
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label col-sm-2\" for=\"validate-select\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Email"), "html", null, true);
        echo "</label>
                        <div class=\"col-sm-9\" data-validate=\"email\">
                            ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "name" => "validate-email", "id" => "validate-email")));
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label col-sm-2\" for=\"validate-select\">";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Localização"), "html", null, true);
        echo "</label>
                        <div class=\"col-sm-9\" data-validate=\"localizacao\">
                            ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "localizacao", array()), 'widget', array("attr" => array("class" => "form-control", "name" => "validate-localizacao", "id" => "validate-localizacao")));
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label col-sm-2\" for=\"validate-select\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Telefone"), "html", null, true);
        echo "</label>
                        <div class=\"col-sm-9\" data-validate=\"upload\">
                            ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefone", array()), 'widget', array("attr" => array("class" => "form-control", "name" => "validate-telefone", "id" => "validate-telefone")));
        echo "
                        </div>
                    </div>

                    </div>

                    <div class=\"form-group\"></br>
                        <div class=\"col-sm-offset-2 col-sm-10\">
                            <button type=\"submit\" class=\"btn btn-default\">Criar</button>
                            <button type=\"reset\" class=\"btn btn-danger\">Limpar</button>
                        </div>
                    </div>

                   </div>
                </div>
                <div class=\"col-md-offset-8\">
                    <div class=\"jumbotron col-lg-10\">
                        <div class=\"list-group\">
                            <a href=\"#\" class=\"list-group-item active\">
                                Dicas do Kikolo-anuncio
                            </a>
                            <a href=\"#\" class=\"list-group-item\">Usa um curto titulo e uma descrição para o seu anuncio</a>
                            <a href=\"#\" class=\"list-group-item\">Seleccione a categoria certa para o seu anuncio</a>
                            <a href=\"#\" class=\"list-group-item\">Carrega ate 5 fotos para o seu anuncio receber muitas vizualizações</a>
                            <a href=\"#\" class=\"list-group-item\">Verifique os seus dados antes de publicar o seu anuncio</a>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 133
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </section>
";
        
        $__internal_a384c7e925c95bd13bad9156ee8ee1332d46bc17fd5bcc7ea9dcd0192ce64ff1->leave($__internal_a384c7e925c95bd13bad9156ee8ee1332d46bc17fd5bcc7ea9dcd0192ce64ff1_prof);

    }

    public function getTemplateName()
    {
        return "projectoKikoloBundle:Kikolo-anuncio:Cadastra.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 133,  209 => 104,  204 => 102,  196 => 97,  191 => 95,  183 => 90,  178 => 88,  170 => 83,  165 => 81,  152 => 71,  147 => 69,  139 => 64,  134 => 62,  124 => 55,  118 => 52,  112 => 49,  107 => 47,  99 => 42,  94 => 40,  86 => 35,  81 => 33,  73 => 27,  71 => 26,  66 => 24,  52 => 13,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "projectoKikoloBundle::Layout.html.twig" %}*/
/* {% block body %}*/
/*     <section id="contact" xmlns="http://www.w3.org/1999/html"></br>*/
/* */
/*         <div class="container">*/
/* */
/*             <div class="row">*/
/*                 <div class="col-lg-12 text-center"></br>*/
/*                     <h4>Criar Anuncio</h4>*/
/*                     <hr class="star-primary">*/
/*                 </div>*/
/*             </div>*/
/*             {{ form_start(form,  {'actio': {'new': 'POST'}}) }}*/
/*             <div class="row">*/
/*                 <hr>*/
/*                 <div class="col-md-7">*/
/* */
/*                  <div class="form-horizontal">*/
/*                   <div class="jumbotron col-lg-12">*/
/*                       <h4>Informações Anuncio</h4>*/
/*                       <hr>*/
/* */
/*                     <div class="form-group">*/
/*                       <label class="control-label col-sm-2" for="validate-titulo">{{'Titulo'|trans }}</label>*/
/*                       <div class="col-sm-9" data-validate="titulo">*/
/*                          {{form_widget(form.titulo, {'attr':{'class': 'form-control', 'name': 'validate-email','id':'validate-email','placeholder':'titulo'|trans*/
/*                          }}  ) }}*/
/*                           <small class="help-block">O tamanho não pode ser maior que 20.</small>*/
/*                      </div>*/
/*                      </div>*/
/* */
/*                       <div class="form-group">*/
/*                           <label class="col-sm-2 control-label " for="validate-select">{{'Tipo anuncio'|trans }}</label>*/
/*                           <div class="col-sm-3" data-validate="tipoanuncio">*/
/*                               {{form_widget(form.tipoanuncio, {'attr':{'class': 'form-control', 'name': 'validate-select','id':'validate-select','placeholder':'Seleccione uma Categoria'|trans }}  ) }}*/
/*                           </div>*/
/*                       </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="control-label col-sm-2" for="validate-select">{{'Categoria'|trans }}</label>*/
/*                         <div class="col-sm-9" data-validate="categoria">*/
/*                             {{form_widget(form.categoria, {'attr':{'class': 'form-control', 'name': 'validate-select','id':'validate-select','placeholder':'Seleccione uma Categoria'|trans }}  ) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                       <div class="form-group">*/
/*                           <label class="control-label col-sm-2" for="validate-select">{{'Preço'|trans }}</label>*/
/*                           <div class="col-sm-4" data-validate="preco">*/
/*                               {{form_widget(form.preco, {'attr':{'class': 'form-control', 'name': 'validate-select','id':'validate-select' }}  ) }}*/
/*                           </div>*/
/* */
/*                           <label class="control-label col-sm-3" for="validate-select">{{'Negociavel'|trans }}</label>*/
/*                           <div class="col-sm-2">*/
/*                           <div class="checkbox" data-validate="negociavel">*/
/*                               {{form_widget(form.negociavel, {'attr':{'class': 'form-group', 'name': 'validate-select','id':'validate-select','placeholder':'Seleccione uma Categoria'|trans }}  ) }}*/
/*                           </div>*/
/*                           </div>*/
/* */
/*                           </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="control-label col-sm-2" for="validate-select">{{'Descrição'|trans }}</label>*/
/*                         <div class="col-sm-9" data-validate="categoria">*/
/*                             {{form_widget(form.descricao, {'attr':{'class': 'form-control', 'name': 'validate-descricao','id':'validate-descricao'}}  ) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="control-label col-sm-2" for="validate-select">{{'Imagem'|trans }}</label>*/
/*                         <div class="col-sm-9" data-validate="upload">*/
/*                             {{form_widget(form.upload, {'attr':{'class': 'form-control', 'name': 'validate-upload','id':'validate-upload'}}  ) }}*/
/*                             <small class="help-block">Carregue ate 5 imagens e o tamanho nao pode ser superiro a 2MB.</small>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <hr>*/
/*                       <h4>Informações Usuario</h4>*/
/*                     <hr>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="control-label col-sm-2" for="validate-select">{{'Usuario'|trans }}</label>*/
/*                         <div class="col-sm-9" data-validate="nomeusuario">*/
/*                             {{form_widget(form.nomeusuario, {'attr':{'class': 'form-control', 'name': 'validate-nomeusuario','id':'validate-nomeusuario'}}  ) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="control-label col-sm-2" for="validate-select">{{'Email'|trans }}</label>*/
/*                         <div class="col-sm-9" data-validate="email">*/
/*                             {{form_widget(form.email, {'attr':{'class': 'form-control', 'name': 'validate-email','id':'validate-email'}}  ) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="control-label col-sm-2" for="validate-select">{{'Localização'|trans }}</label>*/
/*                         <div class="col-sm-9" data-validate="localizacao">*/
/*                             {{form_widget(form.localizacao, {'attr':{'class': 'form-control', 'name': 'validate-localizacao','id':'validate-localizacao'}}  ) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="control-label col-sm-2" for="validate-select">{{'Telefone'|trans }}</label>*/
/*                         <div class="col-sm-9" data-validate="upload">*/
/*                             {{form_widget(form.telefone, {'attr':{'class': 'form-control', 'name': 'validate-telefone','id':'validate-telefone'}}  ) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     </div>*/
/* */
/*                     <div class="form-group"></br>*/
/*                         <div class="col-sm-offset-2 col-sm-10">*/
/*                             <button type="submit" class="btn btn-default">Criar</button>*/
/*                             <button type="reset" class="btn btn-danger">Limpar</button>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                    </div>*/
/*                 </div>*/
/*                 <div class="col-md-offset-8">*/
/*                     <div class="jumbotron col-lg-10">*/
/*                         <div class="list-group">*/
/*                             <a href="#" class="list-group-item active">*/
/*                                 Dicas do Kikolo-anuncio*/
/*                             </a>*/
/*                             <a href="#" class="list-group-item">Usa um curto titulo e uma descrição para o seu anuncio</a>*/
/*                             <a href="#" class="list-group-item">Seleccione a categoria certa para o seu anuncio</a>*/
/*                             <a href="#" class="list-group-item">Carrega ate 5 fotos para o seu anuncio receber muitas vizualizações</a>*/
/*                             <a href="#" class="list-group-item">Verifique os seus dados antes de publicar o seu anuncio</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             {{ form_end(form)}}*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
