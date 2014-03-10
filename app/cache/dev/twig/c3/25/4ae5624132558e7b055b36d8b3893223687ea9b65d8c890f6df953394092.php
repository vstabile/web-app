<?php

/* FrontendBundle:Ong:createNewCampaign.html.twig */
class __TwigTemplate_c3254ae5624132558e7b055b36d8b3893223687ea9b65d8c890f6df953394092 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontendBundle::layout_ong.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontendBundle::layout_ong.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <main>
        <div class=\"wrapper\">
            <div class=\"product\">
                <div class=\"select-product\">
                    <h1>Selecione a quantidade necessária de cada produto</h1>
                    <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("ong_create_new_campaign");
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                        ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selectedProductsList"]) ? $context["selectedProductsList"] : $this->getContext($context, "selectedProductsList")));
        foreach ($context['_seq'] as $context["_key"] => $context["productSelected"]) {
            // line 11
            echo "                            <div class=\"product-available-gray product-general\">
                                <div class=\"product-area\">
                                    <a href=\"#\">
                                        ";
            // line 14
            if (($this->getAttribute($this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "IntegrationEnginePartner"), "id") == 10)) {
                // line 15
                echo "                                            <img src=\"http://imagens.pontofrio.com.br/Control/ArquivoExibir.aspx?IdArquivo=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "imageSmall"), "html", null, true);
                echo "\" alt=\"\">
                                        ";
            } elseif (($this->getAttribute($this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "IntegrationEnginePartner"), "id") == 11)) {
                // line 17
                echo "                                            <img src=\"http://imagens.extra.com.br/Control/ArquivoExibir.aspx?IdArquivo=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "imageSmall"), "html", null, true);
                echo "\" alt=\"\">
                                        ";
            } else {
                // line 19
                echo "                                            <img src=\"http://imagem.casasbahia.com.br/Control/ArquivoExibir.aspx?IdArquivo=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "imageSmall"), "html", null, true);
                echo "\" alt=\"\">
                                        ";
            }
            // line 21
            echo "                                        <span>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "name"), "html", null, true);
            echo "</span>
                                        <div class=\"clearAll\"></div>
                                    </a>
                                    <div class=\"clearAll\"></div>
                                </div><!--product-area-->
                                <div class=\"clearAll\"></div>
                                <div class=\"product-area-separation\"></div>
                                <div class=\"clearAll\"></div>
                                <p class=\"product-area-qantity-price\">Preço Unitário<br /><span>R\$";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "priceFrom"), "html", null, true);
            echo "</span></p>
                                <div class=\"clearAll\"></div>
                                <div class=\"product-quantity-selection-area\">
                                    <span>Quantidade</span>
                                    <div class=\"clearAll\"></div>
                                    <input type=\"number\" value=\"1\" class=\"numeric-total\" name=\"quantity[]\" min=\"1\" max=\"100\">
                                </div>
                            </div><!--product-pink-->
                            <input type=\"hidden\" name=\"selectedProducts[]\" value=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "id"), "html", null, true);
            echo "\" />
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productSelected'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                        <div class=\"clearAll\"></div>
                        <p class=\"product-quantity-description\">Quantidade Total: <span id=\"totalSelected\">0</span>/100</p>
                        <div class=\"left-information-block-gray\">
                            <span class=\"information-block-title\">Informações da ONG</span>
                            <div class=\"information-block-field-line\">
                                <label for=\"firstFile\"><span id=\"firstPhoto\">Escolher</span></label>
                                <label for=\"firstFile\"><span id=\"firstLabel\">Foto 01</span></label>
                                <input type=\"file\" id=\"firstFile\" name=\"coverPhoto[]\">
                            </div>
                            <div class=\"clearAll\"></div>
                            <div class=\"information-block-field-line\">
                                <label for=\"secondFile\"><span id=\"secondPhoto\">Escolher</span></label>
                                <label for=\"secondFile\"><span id=\"secondLabel\">Foto 02</span></label>
                                <input type=\"file\" id=\"secondFile\" name=\"coverPhoto[]\">
                            </div>
                            <div class=\"clearAll\"></div>
                            <div class=\"information-block-field-line\">
                                <label for=\"thirdFile\"><span id=\"thirdPhoto\">Escolher</span></label>
                                <label for=\"thirdFile\"><span id=\"thirdLabel\">Foto 03</span></label>
                                <input type=\"file\" id=\"thirdFile\" name=\"coverPhoto[]\">
                            </div>
                            <div class=\"clearAll\"></div>
                            <div class=\"information-block-field-line\">
                                <span class=\"information-block-title\">Titulo 01</span>
                                <textarea name=\"description-1\"></textarea>
                            </div>
                            <div class=\"information-block-field-line\">
                                <span class=\"information-block-title\">Titulo 02</span>
                                <textarea name=\"description-2\"></textarea>
                            </div>
                        </div>
                        <div class=\"right-information-block-gray\">
                            <span class=\"information-block-title\">Endereço de Entrega</span>
                            <p>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ong"]) ? $context["ong"] : $this->getContext($context, "ong")), "address"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ong"]) ? $context["ong"] : $this->getContext($context, "ong")), "complement"), "html", null, true);
        echo "</p>
                            <p>";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ong"]) ? $context["ong"] : $this->getContext($context, "ong")), "neighborhood"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ong"]) ? $context["ong"] : $this->getContext($context, "ong")), "city"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ong"]) ? $context["ong"] : $this->getContext($context, "ong")), "state"), "html", null, true);
        echo "</p>
                            <p>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ong"]) ? $context["ong"] : $this->getContext($context, "ong")), "cep"), "html", null, true);
        echo "</p>
                            <span class=\"lastTitle information-block-title\">Contato</span>
                            <p>E-mail</p>
                            <p>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ong"]) ? $context["ong"] : $this->getContext($context, "ong")), "email"), "html", null, true);
        echo "</p>
                            <p>Telefone</p>
                            <p>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ong"]) ? $context["ong"] : $this->getContext($context, "ong")), "phone"), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"clearAll\"></div>
                        <div class=\"activate-campaign\">
                            <div class=\"clearAll\"></div>
                            <input type=\"submit\" value=\"ATIVAR CAMPANHA\" />
                            <div class=\"clearAll\"></div>
                        </div>
                    </form>
                </div><!--select-product-->
            </div><!--product-->
        </div><!--wrapper-->
    </main>

    <script src=\"http://code.jquery.com/ui/1.10.3/jquery-ui.js\"></script>
    <script>
        \$(document).ready(function(){
            function getTotalSelected () {
                var totalSelected = 0;
                \$('.numeric-total').each(function(){
                    totalSelected+= parseInt(\$(this).val());
                });
                return totalSelected;
            }
            \$('#totalSelected').html(getTotalSelected());
            \$(function() {
                \$( \"#tabs\" ).tabs();
            });

            \$(\".logged\").click(function(){
                \$(\".logged-menu\").toggle();
            });

            \$('.numeric-total').change(function(event) {
                var totalSelected = getTotalSelected();
                if (totalSelected > 100) {
                    \$(this).val(\$(this).val()-1);
                    event.preventDefault();
                } else {
                    //totalSelected = totalSelected+1;
                    \$('#totalSelected').html(totalSelected);
                }
            });

        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Ong:createNewCampaign.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 79,  157 => 77,  151 => 74,  143 => 73,  137 => 72,  102 => 39,  94 => 37,  83 => 29,  71 => 21,  65 => 19,  59 => 17,  53 => 15,  51 => 14,  46 => 11,  42 => 10,  38 => 9,  31 => 4,  28 => 3,);
    }
}
