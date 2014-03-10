<?php

/* FrontendBundle:Ong:createCampaign.html.twig */
class __TwigTemplate_0964116547a886af504046fb912f4bac45ae23b1283ac4939f4dd55c28ecae95 extends Twig_Template
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
                    <h1>Selecione os produtos para doação</h1>
                    <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("ong_create_new_campaign");
        echo "\" method=\"POST\">
                        ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selectedProductsList"]) ? $context["selectedProductsList"] : $this->getContext($context, "selectedProductsList")));
        foreach ($context['_seq'] as $context["_key"] => $context["productSelected"]) {
            // line 11
            echo "                            <div class=\"product-pink product-general\">
                                <a href=\"#\" class=\"trash removeItem\" id=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "id"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/trash.png"), "html", null, true);
            echo "\" alt=\"Excluir\" title=\"Excluir Produto\" ></a>
                                <div class=\"product-area\">
                                    <a href=\"#\">
                                        ";
            // line 15
            if (($this->getAttribute($this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "IntegrationEnginePartner"), "id") == 10)) {
                // line 16
                echo "                                            <img src=\"http://imagens.pontofrio.com.br/Control/ArquivoExibir.aspx?IdArquivo=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "imageSmall"), "html", null, true);
                echo "\" alt=\"\">
                                        ";
            } elseif (($this->getAttribute($this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "IntegrationEnginePartner"), "id") == 11)) {
                // line 18
                echo "                                            <img src=\"http://imagens.extra.com.br/Control/ArquivoExibir.aspx?IdArquivo=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "imageSmall"), "html", null, true);
                echo "\" alt=\"\">
                                        ";
            } else {
                // line 20
                echo "                                            <img src=\"http://imagem.casasbahia.com.br/Control/ArquivoExibir.aspx?IdArquivo=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "imageSmall"), "html", null, true);
                echo "\" alt=\"\">
                                        ";
            }
            // line 22
            echo "                                        <span>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "name"), "html", null, true);
            echo "</span>
                                    </a>
                                </div><!--product-area-->
                            </div><!--product-pink-->
                            <input type=\"hidden\" name=\"selectedProducts[]\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "id"), "html", null, true);
            echo "\" />
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productSelected'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                        ";
        if ((twig_length_filter($this->env, (isset($context["selectedProductsList"]) ? $context["selectedProductsList"] : $this->getContext($context, "selectedProductsList"))) < 4)) {
            // line 29
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(twig_length_filter($this->env, (isset($context["selectedProductsList"]) ? $context["selectedProductsList"] : $this->getContext($context, "selectedProductsList"))), 3));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 30
                echo "                                <div class=\"product-gray product-general\">
                                <p>Selecione um Produto</p>
                                </div><!--product-pink-->
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                        ";
        }
        // line 35
        echo "                        <div class=\"product-continue\">
                            <h2><span class=\"totalSelectedItens\">";
        // line 36
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["selectedProductsList"]) ? $context["selectedProductsList"] : $this->getContext($context, "selectedProductsList"))), "html", null, true);
        echo "</span> produtos selecionados</h2>
                            <p>Você pode selecionar até <span>4</span> produtos</p>
                            <button>Continuar</button>
                        </div><!--product-continue-->
                    </form>
                </div><!--select-product-->
                <aside class=\"sidebar-product\">
                    <ul>
                        ";
        // line 44
        if (array_key_exists("categoryList", $context)) {
            // line 45
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categoryList"]) ? $context["categoryList"] : $this->getContext($context, "categoryList")));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 46
                echo "                                <li>
                                    <a href=\"#\">Categoria</a>
                                    <ul>
                                    ";
                // line 49
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")));
                foreach ($context['_seq'] as $context["_key"] => $context["catFinal"]) {
                    // line 50
                    echo "                                        <li>
                                            <a href=\"?partner=";
                    // line 51
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["catFinal"]) ? $context["catFinal"] : $this->getContext($context, "catFinal")), "integrationEnginePartner"), "id"), "html", null, true);
                    echo "&category=";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["catFinal"]) ? $context["catFinal"] : $this->getContext($context, "catFinal")), "categoryId"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["catFinal"]) ? $context["catFinal"] : $this->getContext($context, "catFinal")), "name"), "html", null, true);
                    echo "</a>
                                        </li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catFinal'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "                                    </ul>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                        ";
        }
        // line 58
        echo "                        ";
        if (array_key_exists("categoryListPontoFrio", $context)) {
            // line 59
            echo "                        <li>
                            <a href=\"#\">Ponto Frio</a>
                            <ul>
                                ";
            // line 62
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categoryListPontoFrio"]) ? $context["categoryListPontoFrio"] : $this->getContext($context, "categoryListPontoFrio")));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 63
                echo "                                    <li>
                                        <a href=\"?partner=";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "integrationEnginePartner"), "id"), "html", null, true);
                echo "&category=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "categoryId"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
                echo "</a>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                            </ul>
                        </li>
                        ";
        }
        // line 70
        echo "                        ";
        if (array_key_exists("categoryListExtra", $context)) {
            // line 71
            echo "                        <li>
                            <a href=\"#\">Extra</a>
                            <ul>
                                ";
            // line 74
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categoryListExtra"]) ? $context["categoryListExtra"] : $this->getContext($context, "categoryListExtra")));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 75
                echo "                                    <li>
                                        <a href=\"?partner=";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "integrationEnginePartner"), "id"), "html", null, true);
                echo "&category=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "categoryId"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
                echo "</a>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                            </ul>
                        </li>
                        ";
        }
        // line 82
        echo "                        ";
        if (array_key_exists("categoryListCasasBahia", $context)) {
            // line 83
            echo "                        <li>
                            <a href=\"#\">CasasBahia</a>
                            <ul>
                                ";
            // line 86
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categoryListCasasBahia"]) ? $context["categoryListCasasBahia"] : $this->getContext($context, "categoryListCasasBahia")));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 87
                echo "                                    <li>
                                        <a href=\"?partner=";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "integrationEnginePartner"), "id"), "html", null, true);
                echo "&category=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "categoryId"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
                echo "</a>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                            </ul>
                        </li>
                        ";
        }
        // line 94
        echo "                    </ul>
                </aside><!--sidebar-product-->
                <div class=\"product-showcase\">
                    <div class=\"order-search-product\">
                        ";
        // line 99
        echo "                        ";
        // line 100
        echo "                            ";
        // line 101
        echo "                        ";
        // line 102
        echo "                        <form action=\"";
        echo $this->env->getExtension('routing')->getPath("ong_create_campaign");
        echo "\" method=\"get\">
                            <input type=\"submit\" value=\"Buscar\" class=\"send-product\">
                            <input type=\"text\" placeholder=\"Pesquisar Produto\" name=\"search_product\" class=\"search-product\">
                        </form>
                    </div><!--order-search-->
                    ";
        // line 108
        echo "                        ";
        // line 109
        echo "                            ";
        // line 110
        echo "                            ";
        // line 111
        echo "                            ";
        // line 112
        echo "                            ";
        // line 113
        echo "                            ";
        // line 114
        echo "                            ";
        // line 115
        echo "                        ";
        // line 116
        echo "                    ";
        // line 117
        echo "                    <div class=\"showcase-select-product\">
                        ";
        // line 118
        if (array_key_exists("productList", $context)) {
            // line 119
            echo "                            <div class=\"item-shelf\">
                            ";
            // line 120
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productList"]) ? $context["productList"] : $this->getContext($context, "productList")));
            foreach ($context['_seq'] as $context["key"] => $context["product"]) {
                // line 121
                echo "                                <div class=\"item\">
                                    <a href=\"#\">
                                        ";
                // line 123
                if (($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "IntegrationEnginePartner"), "id") == 10)) {
                    // line 124
                    echo "                                            <img src=\"http://imagens.pontofrio.com.br/Control/ArquivoExibir.aspx?IdArquivo=";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "imageAverage"), "html", null, true);
                    echo "\" alt=\"\">
                                        ";
                } elseif (($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "IntegrationEnginePartner"), "id") == 11)) {
                    // line 126
                    echo "                                            <img src=\"http://imagens.extra.com.br/Control/ArquivoExibir.aspx?IdArquivo=";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "imageAverage"), "html", null, true);
                    echo "\" alt=\"\">
                                        ";
                } else {
                    // line 128
                    echo "                                            <img src=\"http://imagem.casasbahia.com.br/Control/ArquivoExibir.aspx?IdArquivo=";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "imageAverage"), "html", null, true);
                    echo "\" alt=\"\">
                                        ";
                }
                // line 130
                echo "                                        <span>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
                echo "</span>
                                    </a>
                                    ";
                // line 132
                if (($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "priceTo") == "")) {
                    // line 133
                    echo "                                        <p>R\$ ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "priceFrom"), "html", null, true);
                    echo "</p>
                                    ";
                } else {
                    // line 135
                    echo "                                        <p>R\$ ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "priceTo"), "html", null, true);
                    echo "</p>
                                    ";
                }
                // line 137
                echo "                                    <button class=\"product-select\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"), "html", null, true);
                echo "\">Selecionar</button>
                                </div><!--item-->
                                ";
                // line 139
                if ((((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) % 3) == 2)) {
                    // line 140
                    echo "                                </div><!--item-shelf-->
                                <div class=\"item-shelf\">
                                ";
                }
                // line 143
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "                            </div><!--item-shelf-->
                        ";
        }
        // line 146
        echo "                    </div><!--showcase-select-product-->
                    ";
        // line 148
        echo "                        ";
        // line 149
        echo "                            ";
        // line 150
        echo "                            ";
        // line 151
        echo "                            ";
        // line 152
        echo "                            ";
        // line 153
        echo "                            ";
        // line 154
        echo "                            ";
        // line 155
        echo "                        ";
        // line 156
        echo "                    ";
        // line 157
        echo "                </div><!--product-showcase-->
            </div><!--product-->
        </div><!--wrapper-->
    </main>

    <script src=\"http://code.jquery.com/ui/1.10.3/jquery-ui.js\"></script>
    <script>
        \$(document).ready(function(){
            \$(function() {
                \$( \"#tabs\" ).tabs();
            });

            \$(\".logged\").click(function(){
                \$(\".logged-menu\").toggle();
            });

            \$('.product-select').click(function(){
                var currentProductId = \$(this).attr(\"id\");
                var route = '";
        // line 175
        echo $this->env->getExtension('routing')->getPath("ong_select_product", array("id" => "PLACEHOLDER"));
        echo "';
                \$.ajax({
                    url: route.replace(\"PLACEHOLDER\", currentProductId),
                    dataType: 'json',
                    success: function(data) {
                        if (data == false) {
                            alert('Limite máximo de produtos atingido');
                        } else {
                            location.reload();
                        }
                    }

                });
            });

            \$('.removeItem').click(function(){
                var currentProductId = \$(this).attr(\"id\");
                var route = '";
        // line 192
        echo $this->env->getExtension('routing')->getPath("ong_remove_product", array("id" => "PLACEHOLDER"));
        echo "';
                \$.ajax({
                    url: route.replace(\"PLACEHOLDER\", currentProductId),
                    dataType: 'json',
                    success: function(data) {
                        if (data == true) {
                            location.reload();
                        }
                    }

                });
            });

        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Ong:createCampaign.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 192,  428 => 175,  408 => 157,  406 => 156,  404 => 155,  402 => 154,  400 => 153,  398 => 152,  396 => 151,  394 => 150,  392 => 149,  390 => 148,  387 => 146,  383 => 144,  377 => 143,  372 => 140,  370 => 139,  364 => 137,  358 => 135,  352 => 133,  350 => 132,  344 => 130,  338 => 128,  332 => 126,  326 => 124,  324 => 123,  320 => 121,  316 => 120,  313 => 119,  311 => 118,  308 => 117,  306 => 116,  304 => 115,  302 => 114,  300 => 113,  298 => 112,  296 => 111,  294 => 110,  292 => 109,  290 => 108,  281 => 102,  279 => 101,  277 => 100,  275 => 99,  269 => 94,  264 => 91,  251 => 88,  248 => 87,  244 => 86,  239 => 83,  236 => 82,  231 => 79,  218 => 76,  215 => 75,  211 => 74,  206 => 71,  203 => 70,  198 => 67,  185 => 64,  182 => 63,  178 => 62,  173 => 59,  170 => 58,  167 => 57,  159 => 54,  146 => 51,  143 => 50,  139 => 49,  134 => 46,  129 => 45,  127 => 44,  116 => 36,  113 => 35,  110 => 34,  101 => 30,  96 => 29,  93 => 28,  85 => 26,  77 => 22,  71 => 20,  65 => 18,  59 => 16,  57 => 15,  49 => 12,  46 => 11,  42 => 10,  38 => 9,  31 => 4,  28 => 3,);
    }
}
