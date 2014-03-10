<?php

/* FrontendBundle:Search:campaignDonate.html.twig */
class __TwigTemplate_ce4bee941140d9203b1ece31232a6e5e0ebc22ab6e615b13c34a9d5b68863276 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontendBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontendBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<main>
\t\t<div class=\"wrapper\">
\t\t\t<span class=\"page-title\">
\t\t\t\t<img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/liga-solidaria.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "ong"), "nomeFantasia"), "html", null, true);
        echo "\">
\t\t\t\t<h1>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "ong"), "nomeFantasia"), "html", null, true);
        echo "</h1>
\t\t\t</span>
            <div class=\"donate-basic-info\">
                <h2 class=\"donate-campaign-title\">Selecione os produtos que deseja doar</h2>
                <span class=\"right-info-block-remaining\">
                    <b>";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["remainingDays"]) ? $context["remainingDays"] : $this->getContext($context, "remainingDays")), "html", null, true);
        echo "</b> Dias Restantes
                </span>
                <span class=\"right-info-block-purchased\">
                    <b>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["totalPurchased"]) ? $context["totalPurchased"] : $this->getContext($context, "totalPurchased")), "html", null, true);
        echo "</b> Produtos Arrecadados
                </span>
                <span class=\"right-info-block-meta\">
                    <b>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["totalPercent"]) ? $context["totalPercent"] : $this->getContext($context, "totalPercent")), "html", null, true);
        echo "%</b> da meta
                </span>
            </div>
            <div class=\"clearAll\"></div>
            <form action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("checkout_index");
        echo "\" method=\"post\">
            ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "products"));
        foreach ($context['_seq'] as $context["_key"] => $context["productSelected"]) {
            // line 25
            echo "                <div class=\"product-available-gray product-general\">
                    <div class=\"product-area\">
                        <a href=\"#\">
                            ";
            // line 28
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "product"), "IntegrationEnginePartner"), "id") == 10)) {
                // line 29
                echo "                                <img src=\"http://imagens.pontofrio.com.br/Control/ArquivoExibir.aspx?IdArquivo=";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "product"), "imageSmall"), "html", null, true);
                echo "\" alt=\"\">
                            ";
            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "product"), "IntegrationEnginePartner"), "id") == 11)) {
                // line 31
                echo "                                <img src=\"http://imagens.extra.com.br/Control/ArquivoExibir.aspx?IdArquivo=";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "product"), "imageSmall"), "html", null, true);
                echo "\" alt=\"\">
                            ";
            } else {
                // line 33
                echo "                                <img src=\"http://imagem.casasbahia.com.br/Control/ArquivoExibir.aspx?IdArquivo=";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "product"), "imageSmall"), "html", null, true);
                echo "\" alt=\"\">
                            ";
            }
            // line 35
            echo "                            <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "product"), "name"), "html", null, true);
            echo "</span>
                            <div class=\"clearAll\"></div>
                        </a>
                        <div class=\"clearAll\"></div>
                    </div><!--product-area-->
                    <div class=\"clearAll\"></div>
                    <div class=\"product-area-separation\"></div>
                    <div class=\"clearAll\"></div>
                    <p class=\"product-area-qantity-price\">Preço Unitário<br /><span>R\$";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "product"), "priceFrom"), "html", null, true);
            echo "</span></p>
                    <div class=\"clearAll\"></div>
                    <div class=\"product-quantity-selection-area-gray\">
                        <span>Quantidade</span>
                        <div class=\"clearAll\"></div>
                        ";
            // line 48
            $context["maxProduct"] = ($this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "quantity") - $this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "quantityPurchased"));
            // line 49
            echo "                        <input type=\"number\" value=\"0\" class=\"numeric-total\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "product"), "id"), "html", null, true);
            echo "\" name=\"quantity[]\" min=\"0\" max=\"";
            echo twig_escape_filter($this->env, (isset($context["maxProduct"]) ? $context["maxProduct"] : $this->getContext($context, "maxProduct")), "html", null, true);
            echo "\">
                    </div>
                </div><!--product-pink-->
                <input type=\"hidden\" name=\"selectedProducts[]\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "id"), "html", null, true);
            echo "\" />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productSelected'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                <input type=\"hidden\" name=\"campaign\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "id"), "html", null, true);
        echo "\" />
                <div class=\"clearAll\"></div>
                <div class=\"donate-info-block\">
                    <div class=\"donate-selected-products\">
                        <span class=\"selectedItens\">0</span> <span>Produtos Selecionados</span>
                    </div>
                    <div class=\"donate-total-products\">
                        <p>Preço Total</p>
                        <span>R\$</span><span class=\"totalPrice\">0,00</span>
                    </div>
                    <div class=\"donate-confirm\"><button>Concluir Doação</button></div>
                </div>
                <div class=\"clearAll\"></div>
            </form>
\t\t</div><!--wrapper-->
\t</main>

";
    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        // line 74
        echo "    <script src=\"http://code.jquery.com/ui/1.10.3/jquery-ui.js\"></script>
    <script>
        \$(document).ready(function(){

            var products = new Array();
            ";
        // line 79
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "products"));
        foreach ($context['_seq'] as $context["_key"] => $context["productSelected"]) {
            // line 80
            echo "            products[";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "product"), "id"), "html", null, true);
            echo "] = ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "product"), "priceFrom"), "html", null, true);
            echo ";
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productSelected'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "
            \$(function() {
                \$( \"#tabs\" ).tabs();
            });

            \$('.carousel-about').jcarousel({
                wrap: 'circular'
            })
            \$('.carousel-pagination')
                    .on('jcarouselpagination:active', 'a', function() {
                        \$(this).addClass('active');
                    })
                    .on('jcarouselpagination:inactive', 'a', function() {
                        \$(this).removeClass('active');
                    })
                    .jcarouselPagination();

            \$('#donate').click(function(){
                var campaignId = \$('#campaignId').val();
                var route = '";
        // line 101
        echo $this->env->getExtension('routing')->getPath("search_campaign_donate", array("campaignId" => "PLACEHOLDER"));
        echo "';
                window.location=route.replace(\"PLACEHOLDER\", campaignId);
            });

            function getTotalValue () {
                var totalSelected = 0;
                \$('.numeric-total').each(function(){
                    var productValue = parseFloat(products[\$(this).attr('id')]);
                    var totalSpent = productValue*parseInt(\$(this).val());
                    totalSelected+= totalSpent;
                });
                return totalSelected;
            }

            function getTotalSelected () {
                var totalSelected = 0;
                \$('.numeric-total').each(function(){
                    totalSelected+= parseInt(\$(this).val());
                });
                return totalSelected;
            }
            \$('#totalSelected').html(getTotalSelected());

            \$('.numeric-total').change(function(event) {
                var totalSelected = getTotalSelected();
                if (totalSelected > 100) {
                    \$(this).val(\$(this).val()-1);
                    event.preventDefault();
                } else {
                    //totalSelected = totalSelected+1;
                    \$('.totalPrice').html(getTotalValue);
                    \$('.selectedItens').html(totalSelected);
                }
            });

        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Search:campaignDonate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 101,  190 => 82,  179 => 80,  175 => 79,  168 => 74,  165 => 73,  142 => 54,  134 => 52,  125 => 49,  123 => 48,  115 => 43,  103 => 35,  97 => 33,  91 => 31,  85 => 29,  83 => 28,  78 => 25,  74 => 24,  70 => 23,  63 => 19,  57 => 16,  51 => 13,  43 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
