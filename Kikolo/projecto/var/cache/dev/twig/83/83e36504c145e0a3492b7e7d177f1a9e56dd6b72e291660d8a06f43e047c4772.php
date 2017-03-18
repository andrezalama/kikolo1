<?php

/* projectoKikoloBundle:Kikolo-anuncio:Cadastrar.html.twig */
class __TwigTemplate_865d773476bc1c3ee2ca121a503cf2736322892055a3c638a4bb3ebcb4899dda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("projectoKikoloBundle::Layout.html.twig", "projectoKikoloBundle:Kikolo-anuncio:Cadastrar.html.twig", 1);
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
        $__internal_baeb3cdebf3d3765a631f5630986e0cbec189f06bdc755c11f013820b5c40db0 = $this->env->getExtension("native_profiler");
        $__internal_baeb3cdebf3d3765a631f5630986e0cbec189f06bdc755c11f013820b5c40db0->enter($__internal_baeb3cdebf3d3765a631f5630986e0cbec189f06bdc755c11f013820b5c40db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projectoKikoloBundle:Kikolo-anuncio:Cadastrar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_baeb3cdebf3d3765a631f5630986e0cbec189f06bdc755c11f013820b5c40db0->leave($__internal_baeb3cdebf3d3765a631f5630986e0cbec189f06bdc755c11f013820b5c40db0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4fc9984cad9461a5ac9157dadad38d241392018422c905e51bfb7e36a47ffe6 = $this->env->getExtension("native_profiler");
        $__internal_c4fc9984cad9461a5ac9157dadad38d241392018422c905e51bfb7e36a47ffe6->enter($__internal_c4fc9984cad9461a5ac9157dadad38d241392018422c905e51bfb7e36a47ffe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<section id=\"contact\"></br>

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
            <div class=\"col-lg-7 col-lg-offset-1\">

                 <h4>Informações Anuncio</h4>
                <hr>
                ";
        // line 19
        $context["class"] = "";
        // line 20
        echo "                ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), "vars", array()), "valid", array())) {
            // line 21
            echo "                    ";
            $context["class"] = "has-error";
            // line 22
            echo "                ";
        }
        // line 23
        echo "                <div class=\"form-group\" ";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo ">
                    <label  class=\"control-label col-sm-2\" for=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\">Titulo</label>
                <div class=\"col-sm-10\">
                     <input type=\"text\" class=\"form-control\" id=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"
                            value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), "vars", array()), "value", array()), "html", null, true);
        echo "\"
                            data-toggle=\"popover\" data-trigger=\"focus\" data-placement=\"right\" title=\"Titulo\"
                            data-content=\"Preencha o campo com o titulo do anuncio.\"></br>
                </div>
                    ";
        // line 31
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), "setRendered", array());
        // line 32
        echo "                    ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), "vars", array()), "errors", array())) {
            // line 33
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), "vars", array()), "erros", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 34
                echo "                            <span class=\"help-block\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</span>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                    ";
        }
        // line 37
        echo "                </div>


                ";
        // line 40
        $context["class"] = "";
        // line 41
        echo "                ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), "vars", array()), "valid", array())) {
            // line 42
            echo "                    ";
            $context["class"] = "has-error";
            // line 43
            echo "                ";
        }
        // line 44
        echo "                <div class=\"form-group\" ";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo ">
                    <label  class=\"control-label col-sm-2\" for=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\">Categoria</label>
                    <div class=\"col-sm-10\">
                        <input type=\"\" class=\"form-control\" id=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"
                               value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), "vars", array()), "value", array()), "html", null, true);
        echo "\"
                               data-toggle=\"popover\" data-trigger=\"focus\" data-placement=\"right\" title=\"Titulo\"
                               data-content=\"Preencha o campo com o categoria do anuncio.\"></br>
                    </div>
                    ";
        // line 52
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), "setRendered", array());
        // line 53
        echo "                    ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), "vars", array()), "errors", array())) {
            // line 54
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), "vars", array()), "erros", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 55
                echo "                            <span class=\"help-block\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</span>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                    ";
        }
        // line 58
        echo "                </div>


                ";
        // line 61
        $context["class"] = "";
        // line 62
        echo "                ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descricao", array()), "vars", array()), "valid", array())) {
            // line 63
            echo "                    ";
            $context["class"] = "has-error";
            // line 64
            echo "                ";
        }
        // line 65
        echo "                <div class=\"form-group\">
                    <label  class=\"control-label col-sm-2\" for=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descricao", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\">Descrição</label>
                <div class=\"col-sm-10\">
                    <textarea rows=\"3\" type=\"text\" class=\"form-control\" id=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descricao", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descricao", array()), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"
                              value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descricao", array()), "vars", array()), "value", array()), "html", null, true);
        echo "\" data-toggle=\"popover\" data-trigger=\"focus\"
                              data-placement=\"right\" title=\"Descrição\" data-content=\"Descreva as qualidades do seu produto.\"></textarea></br>
                    ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descricao", array()), 'errors');
        echo "
                    ";
        // line 72
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descricao", array()), "setRendered", array());
        // line 73
        echo "                </div>
                </div>

                ";
        // line 76
        $context["class"] = "";
        // line 77
        echo "                ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upload", array()), "vars", array()), "valid", array())) {
            // line 78
            echo "                    ";
            $context["class"] = "has-error";
            // line 79
            echo "                ";
        }
        // line 80
        echo "                <div class=\"form-group\">
                    <label  class=\"control-label col-sm-2\" for=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upload", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\">Imagem</label>
                <div class=\"col-sm-10\">
                    <input type=\"file\" class=\"form-control\" id=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upload", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upload", array()), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"
                           value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upload", array()), "vars", array()), "value", array()), "html", null, true);
        echo "\"
                           data-toggle=\"popover\" data-trigger=\"focus\" data-placement=\"right\"
                           title=\"Imagens\"
                           data-content=\"Carregue ate 5 imagens no maximo.\">
                    </br>
                    ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upload", array()), 'errors');
        echo "
                    ";
        // line 90
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upload", array()), "setRendered", array());
        // line 91
        echo "                </div>
                </div>
\t\t\t\t
\t\t\t\t";
        // line 94
        $context["class"] = "";
        // line 95
        echo "                ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upload", array()), "vars", array()), "valid", array())) {
            // line 96
            echo "                    ";
            $context["class"] = "has-error";
            // line 97
            echo "                ";
        }
        // line 98
        echo "                <div class=\"form-group\">
                    <label  class=\"control-label col-sm-2\" for=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upload", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\"></label>
                <div class=\"col-sm-10\">
                    <input type=\"file\" class=\"form-control\" id=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upload", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upload", array()), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"
                           value=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upload", array()), "vars", array()), "value", array()), "html", null, true);
        echo "\"
                           data-toggle=\"popover\" data-trigger=\"focus\" data-placement=\"right\"
                           title=\"Imagens\"
                           data-content=\"Carregue ate 5 imagens no maximo.\">
                    </br>
                    ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upload", array()), 'errors');
        echo "
                    ";
        // line 108
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upload", array()), "setRendered", array());
        // line 109
        echo "                </div>
                </div>
                
                <h4>Informações Usuario</h4>
                <hr>
                ";
        // line 114
        $context["class"] = "";
        // line 115
        echo "                ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomeusuario", array()), "vars", array()), "valid", array())) {
            // line 116
            echo "                    ";
            $context["class"] = "has-error";
            // line 117
            echo "                ";
        }
        // line 118
        echo "                <div class=\"form-group\">
                    <label  class=\"control-label col-sm-2\" for=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomeusuario", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\">Nome</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" class=\"form-control\" id=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomeusuario", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomeusuario", array()), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"
                           value=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomeusuario", array()), "vars", array()), "value", array()), "html", null, true);
        echo "\"
                           data-toggle=\"popover\" data-trigger=\"focus\" data-placement=\"right\"
                           title=\"Anunciante\"
                           data-content=\"Escreva o seu nome para ser contactado.\"></br>
                    ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomeusuario", array()), 'errors');
        echo "
                    ";
        // line 127
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomeusuario", array()), "setRendered", array());
        // line 128
        echo "                </div>
                </div>

                ";
        // line 131
        $context["class"] = "";
        // line 132
        echo "                ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "localizacao", array()), "vars", array()), "valid", array())) {
            // line 133
            echo "                    ";
            $context["class"] = "has-error";
            // line 134
            echo "                ";
        }
        // line 135
        echo "                <div class=\"form-group\">
                    <label class=\"control-label col-sm-2\" for=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "localizacao", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\">Localização</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" class=\"form-control\" id=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "localizacao", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "localizacao", array()), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"
                           value=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "localizacao", array()), "vars", array()), "value", array()), "html", null, true);
        echo "\"
                           data-toggle=\"popover\" data-trigger=\"focus\" data-placement=\"right\"
                           title=\"Localização\"
                           data-content=\"infome a sua localização\"></br>
                    ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "localizacao", array()), 'errors');
        echo "
                    ";
        // line 144
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "localizacao", array()), "setRendered", array());
        // line 145
        echo "                </div>
                </div>

                ";
        // line 148
        $context["class"] = "";
        // line 149
        echo "                ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefone", array()), "vars", array()), "valid", array())) {
            // line 150
            echo "                    ";
            $context["class"] = "has-error";
            // line 151
            echo "                ";
        }
        // line 152
        echo "                <div class=\"form-group\">
                    <label  class=\"control-label col-sm-2\" for=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefone", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\">Telefone</label>
                <div class=\"col-sm-10\">
                    <input type=\"number\" class=\"form-control\" id=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefone", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefone", array()), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"
                           value=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefone", array()), "vars", array()), "value", array()), "html", null, true);
        echo "\"
                           data-toggle=\"popover\" data-trigger=\"focus\" data-placement=\"right\"
                           title=\"Telefone\"
                           data-content=\"infome seu numero do telemovel para contactos\"></br>
                    ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefone", array()), 'errors');
        echo "
                    ";
        // line 161
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefone", array()), "setRendered", array());
        // line 162
        echo "                </div>
                </div>
                ";
        // line 164
        $context["class"] = "";
        // line 165
        echo "                ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), "vars", array()), "valid", array())) {
            // line 166
            echo "                    ";
            $context["class"] = "has-error";
            // line 167
            echo "                ";
        }
        // line 168
        echo "                <div class=\"form-group\">
                    <label  class=\"control-label col-sm-2\" for=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\">Email</label>
                <div class=\"col-sm-10\">
                    <input type=\"email\" class=\"form-control\" id=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"
                           value=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), "vars", array()), "value", array()), "html", null, true);
        echo "\"
                           data-toggle=\"popover\" data-trigger=\"focus\" data-placement=\"right\"
                           title=\"Correio Electronico\"
                           data-content=\"Tem email?então nos informe!\"></br>
                    ";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                    ";
        // line 177
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), "setRendered", array());
        // line 178
        echo "                </div>
                </div>

                <hr>
                <div class=\"form-group\"></br>
                    <div class=\"col-sm-offset-2 col-sm-10\">
                        <button type=\"submit\" class=\"btn btn-default\">Criar</button>
                        <button type=\"reset\" class=\"btn btn-danger\">Limpar</button>
                    </div>
                </div>
            </div>
        </div>
      ";
        // line 190
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
</section>
";
        
        $__internal_c4fc9984cad9461a5ac9157dadad38d241392018422c905e51bfb7e36a47ffe6->leave($__internal_c4fc9984cad9461a5ac9157dadad38d241392018422c905e51bfb7e36a47ffe6_prof);

    }

    public function getTemplateName()
    {
        return "projectoKikoloBundle:Kikolo-anuncio:Cadastrar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  494 => 190,  480 => 178,  478 => 177,  474 => 176,  467 => 172,  461 => 171,  456 => 169,  453 => 168,  450 => 167,  447 => 166,  444 => 165,  442 => 164,  438 => 162,  436 => 161,  432 => 160,  425 => 156,  419 => 155,  414 => 153,  411 => 152,  408 => 151,  405 => 150,  402 => 149,  400 => 148,  395 => 145,  393 => 144,  389 => 143,  382 => 139,  376 => 138,  371 => 136,  368 => 135,  365 => 134,  362 => 133,  359 => 132,  357 => 131,  352 => 128,  350 => 127,  346 => 126,  339 => 122,  333 => 121,  328 => 119,  325 => 118,  322 => 117,  319 => 116,  316 => 115,  314 => 114,  307 => 109,  305 => 108,  301 => 107,  293 => 102,  287 => 101,  282 => 99,  279 => 98,  276 => 97,  273 => 96,  270 => 95,  268 => 94,  263 => 91,  261 => 90,  257 => 89,  249 => 84,  243 => 83,  238 => 81,  235 => 80,  232 => 79,  229 => 78,  226 => 77,  224 => 76,  219 => 73,  217 => 72,  213 => 71,  208 => 69,  202 => 68,  197 => 66,  194 => 65,  191 => 64,  188 => 63,  185 => 62,  183 => 61,  178 => 58,  175 => 57,  166 => 55,  161 => 54,  158 => 53,  156 => 52,  149 => 48,  143 => 47,  138 => 45,  133 => 44,  130 => 43,  127 => 42,  124 => 41,  122 => 40,  117 => 37,  114 => 36,  105 => 34,  100 => 33,  97 => 32,  95 => 31,  88 => 27,  82 => 26,  77 => 24,  72 => 23,  69 => 22,  66 => 21,  63 => 20,  61 => 19,  52 => 13,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "projectoKikoloBundle::Layout.html.twig" %}*/
/* {% block body %}*/
/* <section id="contact"></br>*/
/* */
/*     <div class="container">*/
/* */
/*         <div class="row">*/
/*             <div class="col-lg-12 text-center"></br>*/
/*                 <h4>Criar Anuncio</h4>*/
/*                 <hr class="star-primary">*/
/*             </div>*/
/*         </div>*/
/*       {{ form_start(form,  {'actio': {'new': 'POST'}}) }}*/
/*         <div class="row">*/
/*             <div class="col-lg-7 col-lg-offset-1">*/
/* */
/*                  <h4>Informações Anuncio</h4>*/
/*                 <hr>*/
/*                 {% set class ="" %}*/
/*                 {% if not form.titulo.vars.valid %}*/
/*                     {% set class="has-error" %}*/
/*                 {% endif %}*/
/*                 <div class="form-group" {{ class }}>*/
/*                     <label  class="control-label col-sm-2" for="{{ form.titulo.vars.id }}">Titulo</label>*/
/*                 <div class="col-sm-10">*/
/*                      <input type="text" class="form-control" id="{{ form.titulo.vars.id }}" name="{{ form.titulo.vars.full_name }}"*/
/*                             value="{{ form.titulo.vars.value }}"*/
/*                             data-toggle="popover" data-trigger="focus" data-placement="right" title="Titulo"*/
/*                             data-content="Preencha o campo com o titulo do anuncio."></br>*/
/*                 </div>*/
/*                     {% do form.titulo.setRendered %}*/
/*                     {%  if not form.titulo.vars.errors %}*/
/*                         {% for error in form.titulo.vars.erros %}*/
/*                             <span class="help-block">{{ error.message }}</span>*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                 </div>*/
/* */
/* */
/*                 {% set class ="" %}*/
/*                 {% if not form.categoria.vars.valid %}*/
/*                     {% set class="has-error" %}*/
/*                 {% endif %}*/
/*                 <div class="form-group" {{ class }}>*/
/*                     <label  class="control-label col-sm-2" for="{{ form.categoria.vars.id }}">Categoria</label>*/
/*                     <div class="col-sm-10">*/
/*                         <input type="" class="form-control" id="{{ form.categoria.vars.id }}" name="{{ form.categoria.vars.full_name }}"*/
/*                                value="{{ form.categoria.vars.value }}"*/
/*                                data-toggle="popover" data-trigger="focus" data-placement="right" title="Titulo"*/
/*                                data-content="Preencha o campo com o categoria do anuncio."></br>*/
/*                     </div>*/
/*                     {% do form.titulo.setRendered %}*/
/*                     {%  if not form.titulo.vars.errors %}*/
/*                         {% for error in form.titulo.vars.erros %}*/
/*                             <span class="help-block">{{ error.message }}</span>*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                 </div>*/
/* */
/* */
/*                 {% set class ="" %}*/
/*                 {% if not form.descricao.vars.valid %}*/
/*                     {% set class="has-error" %}*/
/*                 {% endif %}*/
/*                 <div class="form-group">*/
/*                     <label  class="control-label col-sm-2" for="{{ form.descricao.vars.id }}">Descrição</label>*/
/*                 <div class="col-sm-10">*/
/*                     <textarea rows="3" type="text" class="form-control" id="{{ form.descricao.vars.id }}" name="{{ form.descricao.vars.full_name }}"*/
/*                               value="{{ form.descricao.vars.value }}" data-toggle="popover" data-trigger="focus"*/
/*                               data-placement="right" title="Descrição" data-content="Descreva as qualidades do seu produto."></textarea></br>*/
/*                     {{ form_errors(form.descricao) }}*/
/*                     {% do form.descricao.setRendered %}*/
/*                 </div>*/
/*                 </div>*/
/* */
/*                 {% set class ="" %}*/
/*                 {% if not form.upload.vars.valid %}*/
/*                     {% set class="has-error" %}*/
/*                 {% endif %}*/
/*                 <div class="form-group">*/
/*                     <label  class="control-label col-sm-2" for="{{ form.upload.vars.id }}">Imagem</label>*/
/*                 <div class="col-sm-10">*/
/*                     <input type="file" class="form-control" id="{{ form.upload.vars.id }}" name="{{ form.upload.vars.full_name }}"*/
/*                            value="{{ form.upload.vars.value }}"*/
/*                            data-toggle="popover" data-trigger="focus" data-placement="right"*/
/*                            title="Imagens"*/
/*                            data-content="Carregue ate 5 imagens no maximo.">*/
/*                     </br>*/
/*                     {{ form_errors(form.upload) }}*/
/*                     {% do form.upload.setRendered %}*/
/*                 </div>*/
/*                 </div>*/
/* 				*/
/* 				{% set class ="" %}*/
/*                 {% if not form.upload.vars.valid %}*/
/*                     {% set class="has-error" %}*/
/*                 {% endif %}*/
/*                 <div class="form-group">*/
/*                     <label  class="control-label col-sm-2" for="{{ form.upload.vars.id }}"></label>*/
/*                 <div class="col-sm-10">*/
/*                     <input type="file" class="form-control" id="{{ form.upload.vars.id }}" name="{{ form.upload.vars.full_name }}"*/
/*                            value="{{ form.upload.vars.value }}"*/
/*                            data-toggle="popover" data-trigger="focus" data-placement="right"*/
/*                            title="Imagens"*/
/*                            data-content="Carregue ate 5 imagens no maximo.">*/
/*                     </br>*/
/*                     {{ form_errors(form.upload) }}*/
/*                     {% do form.upload.setRendered %}*/
/*                 </div>*/
/*                 </div>*/
/*                 */
/*                 <h4>Informações Usuario</h4>*/
/*                 <hr>*/
/*                 {% set class ="" %}*/
/*                 {% if not form.nomeusuario.vars.valid %}*/
/*                     {% set class="has-error" %}*/
/*                 {% endif %}*/
/*                 <div class="form-group">*/
/*                     <label  class="control-label col-sm-2" for="{{ form.nomeusuario.vars.id }}">Nome</label>*/
/*                 <div class="col-sm-10">*/
/*                     <input type="text" class="form-control" id="{{ form.nomeusuario.vars.id }}" name="{{ form.nomeusuario.vars.full_name }}"*/
/*                            value="{{ form.nomeusuario.vars.value }}"*/
/*                            data-toggle="popover" data-trigger="focus" data-placement="right"*/
/*                            title="Anunciante"*/
/*                            data-content="Escreva o seu nome para ser contactado."></br>*/
/*                     {{ form_errors(form.nomeusuario) }}*/
/*                     {% do form.nomeusuario.setRendered %}*/
/*                 </div>*/
/*                 </div>*/
/* */
/*                 {% set class ="" %}*/
/*                 {% if not form.localizacao.vars.valid %}*/
/*                     {% set class="has-error" %}*/
/*                 {% endif %}*/
/*                 <div class="form-group">*/
/*                     <label class="control-label col-sm-2" for="{{ form.localizacao.vars.id }}">Localização</label>*/
/*                 <div class="col-sm-10">*/
/*                     <input type="text" class="form-control" id="{{ form.localizacao.vars.id }}" name="{{ form.localizacao.vars.full_name }}"*/
/*                            value="{{ form.localizacao.vars.value }}"*/
/*                            data-toggle="popover" data-trigger="focus" data-placement="right"*/
/*                            title="Localização"*/
/*                            data-content="infome a sua localização"></br>*/
/*                     {{ form_errors(form.localizacao) }}*/
/*                     {% do form.localizacao.setRendered %}*/
/*                 </div>*/
/*                 </div>*/
/* */
/*                 {% set class ="" %}*/
/*                 {% if not form.telefone.vars.valid %}*/
/*                     {% set class="has-error" %}*/
/*                 {% endif %}*/
/*                 <div class="form-group">*/
/*                     <label  class="control-label col-sm-2" for="{{ form.telefone.vars.id }}">Telefone</label>*/
/*                 <div class="col-sm-10">*/
/*                     <input type="number" class="form-control" id="{{ form.telefone.vars.id }}" name="{{ form.telefone.vars.full_name }}"*/
/*                            value="{{ form.telefone.vars.value }}"*/
/*                            data-toggle="popover" data-trigger="focus" data-placement="right"*/
/*                            title="Telefone"*/
/*                            data-content="infome seu numero do telemovel para contactos"></br>*/
/*                     {{ form_errors(form.telefone) }}*/
/*                     {% do form.telefone.setRendered %}*/
/*                 </div>*/
/*                 </div>*/
/*                 {% set class ="" %}*/
/*                 {% if not form.email.vars.valid %}*/
/*                     {% set class="has-error" %}*/
/*                 {% endif %}*/
/*                 <div class="form-group">*/
/*                     <label  class="control-label col-sm-2" for="{{ form.email.vars.id }}">Email</label>*/
/*                 <div class="col-sm-10">*/
/*                     <input type="email" class="form-control" id="{{ form.email.vars.id }}" name="{{ form.email.vars.full_name }}"*/
/*                            value="{{ form.email.vars.value }}"*/
/*                            data-toggle="popover" data-trigger="focus" data-placement="right"*/
/*                            title="Correio Electronico"*/
/*                            data-content="Tem email?então nos informe!"></br>*/
/*                     {{ form_errors(form.email) }}*/
/*                     {% do form.email.setRendered %}*/
/*                 </div>*/
/*                 </div>*/
/* */
/*                 <hr>*/
/*                 <div class="form-group"></br>*/
/*                     <div class="col-sm-offset-2 col-sm-10">*/
/*                         <button type="submit" class="btn btn-default">Criar</button>*/
/*                         <button type="reset" class="btn btn-danger">Limpar</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*       {{ form_end(form)}}*/
/*     </div>*/
/* </section>*/
/* {% endblock %}*/
/* */
