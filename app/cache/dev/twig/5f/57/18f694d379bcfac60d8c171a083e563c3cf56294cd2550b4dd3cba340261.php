<?php

/* FrontendBundle:Ong:listCampaign.html.twig */
class __TwigTemplate_5f5718f694d379bcfac60d8c171a083e563c3cf56294cd2550b4dd3cba340261 extends Twig_Template
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
            <div class=\"dashboard\" id=\"tabs\">
\t\t\t<span class=\"page-title pull-left\">
\t\t\t\t<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/liga-solidaria.png"), "html", null, true);
        echo "\" alt=\"Liga Solidária\">
\t\t\t\t<h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ong"]) ? $context["ong"] : $this->getContext($context, "ong")), "nomeFantasia"), "html", null, true);
        echo "</h1>
\t\t\t\t<h2>Subtítulo</h2>
\t\t\t</span>

                <button class=\"btn-top\">Criar campanha</button>

                <nav class=\"tab-menu\">
                    <ul>
                        <li><a href=\"#tabs-1\">Geral</a></li>
                        <li><a href=\"#tabs-2\">Campanhas</a></li>
                    </ul>
                </nav><!--tab-menu-->

                <section class=\"tab-general\" id=\"tabs-1\">
                    <section class=\"status\">
                        <h2>Status da campanha atual</h2>
                        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activeCampaign"]) ? $context["activeCampaign"] : $this->getContext($context, "activeCampaign")), "id"), "html", null, true);
        echo "\" class=\"link\">Ver campanha</a>
                        <div class=\"donate-status\">
                            <p class=\"type-status\">Ativa</p>
                            <p class=\"percent-meta-status\"><span>";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["totalPercent"]) ? $context["totalPercent"] : $this->getContext($context, "totalPercent")), "html", null, true);
        echo "%</span> da meta</p>
                            <p class=\"products-status\"><span>";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["totalPurchased"]) ? $context["totalPurchased"] : $this->getContext($context, "totalPurchased")), "html", null, true);
        echo "</span> Produtos <br />Arrecadados</p>
                            <p class=\"days-status\"><span>";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["remainingDays"]) ? $context["remainingDays"] : $this->getContext($context, "remainingDays")), "html", null, true);
        echo "</span> Dias <br />Restantes</p>
                            <a href=\"#\" class=\"desactive-campaign\">Inativar Campanha</a>
                        </div><!--donate-status-->
                    </section><!--status-->

                    <section class=\"campaign\">
                        <h2>Campanha</h2>
                        <div class=\"circle-status\">
                            <p class=\"circle-type-status-1\"><span>";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["totalActiveCampaigns"]) ? $context["totalActiveCampaigns"] : $this->getContext($context, "totalActiveCampaigns")), "html", null, true);
        echo "</span> <br />Ativa</p>
                            <p class=\"circle-type-status-2\"><span>";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["underModeration"]) ? $context["underModeration"] : $this->getContext($context, "underModeration")), "html", null, true);
        echo "</span> <br />Em moderação</p>
                            <p class=\"circle-type-status-3\"><span>";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["allDone"]) ? $context["allDone"] : $this->getContext($context, "allDone")), "html", null, true);
        echo "</span> <br />Concluidas</p>
                            ";
        // line 42
        echo "                        </div><!--circle-status-->
                    </section><!--campaign-->

                    <button class=\"btn-bottom\">Criar campanha</button>
                </section><!--tab-general-->

                <section class=\"tab-campaign\" id=\"tabs-2\">
                    <section class=\"status\">
                        <div class=\"campaign-heading\">
                            <h2>Campanha atual</h2>
                            <span>-</span>
                            <a href=\"#\" class=\"link\">Ver campanha</a>
                        </div><!--campaign-title-->
                        <a href=\"\" class=\"desactive-campaign\">Inativar Campanha</a>
                        <div class=\"donate-status\">
                            <p class=\"type-status\">Ativa</p>
                            <p class=\"percent-meta-status\"><span>";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["totalPercent"]) ? $context["totalPercent"] : $this->getContext($context, "totalPercent")), "html", null, true);
        echo "%</span> da meta</p>
                            <p class=\"products-status\"><span>";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["totalPurchased"]) ? $context["totalPurchased"] : $this->getContext($context, "totalPurchased")), "html", null, true);
        echo "</span> Produtos <br />Arrecadados <br /> <span class=\"value-colected\">R\$";
        echo twig_escape_filter($this->env, (isset($context["totalValuePurchased"]) ? $context["totalValuePurchased"] : $this->getContext($context, "totalValuePurchased")), "html", null, true);
        echo " em produtos</span></p>
                            <p class=\"days-status\"><span>";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["remainingDays"]) ? $context["remainingDays"] : $this->getContext($context, "remainingDays")), "html", null, true);
        echo "</span> Dias <br />Restantes</p>
                            <table class=\"cart-campaign\">
                                <tr>
                                    <th>Produto</th>
                                    <th>Quantidade doada</th>
                                </tr>
                                ";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["activeCampaign"]) ? $context["activeCampaign"] : $this->getContext($context, "activeCampaign")), "products"));
        foreach ($context['_seq'] as $context["_key"] => $context["actualCampaignProducts"]) {
            // line 67
            echo "                                    <tr>
                                        <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["actualCampaignProducts"]) ? $context["actualCampaignProducts"] : $this->getContext($context, "actualCampaignProducts")), "product"), "name"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualCampaignProducts"]) ? $context["actualCampaignProducts"] : $this->getContext($context, "actualCampaignProducts")), "quantityPurchased"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualCampaignProducts"]) ? $context["actualCampaignProducts"] : $this->getContext($context, "actualCampaignProducts")), "quantity"), "html", null, true);
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualCampaignProducts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                            </table>
                        </div><!--donate-status-->
                        <section class=\"history\">
                            <div class=\"history-campaign\">
                                <h2>Histórico</h2>
                                ";
        // line 78
        echo "                                ";
        // line 79
        echo "                                ";
        // line 80
        echo "                                ";
        // line 81
        echo "                                ";
        // line 82
        echo "                                ";
        // line 83
        echo "                            </div><!--history-campaign-->
                            ";
        // line 85
        echo "                                ";
        // line 86
        echo "                                ";
        // line 87
        echo "                                ";
        // line 88
        echo "                                ";
        // line 89
        echo "                                ";
        // line 90
        echo "                                ";
        // line 91
        echo "                            ";
        // line 92
        echo "                            ";
        // line 93
        echo "                                ";
        // line 94
        echo "                                ";
        // line 95
        echo "                                ";
        // line 96
        echo "                                ";
        // line 97
        echo "                                ";
        // line 98
        echo "                                ";
        // line 99
        echo "                            ";
        // line 100
        echo "                            ";
        // line 101
        echo "                                ";
        // line 102
        echo "                                ";
        // line 103
        echo "                                ";
        // line 104
        echo "                                ";
        // line 105
        echo "                                ";
        // line 106
        echo "                                ";
        // line 107
        echo "                            ";
        // line 108
        echo "                        </section><!--history-->

                    </section><!--status-->

                </section><!--tab-donors-->
            </div><!--about-->
        </div><!--wrapper-->
    </main>

    <script src=\"http://code.jquery.com/ui/1.10.3/jquery-ui.js\"></script>
    <script>
        \$(document).ready(function(){
            \$(\".btn-bottom\").click(function(){
                window.location = \"";
        // line 121
        echo $this->env->getExtension('routing')->getPath("ong_create_campaign");
        echo "\";
            });

            \$(\".btn-top\").click(function(){
                window.location = \"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("ong_create_campaign");
        echo "\";
            });

            \$(function() {
                \$( \"#tabs\" ).tabs();
            });

            \$(\".logged\").click(function(){
                \$(\".logged-menu\").toggle();
            });

        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Ong:listCampaign.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 125,  237 => 121,  222 => 108,  220 => 107,  218 => 106,  216 => 105,  214 => 104,  212 => 103,  210 => 102,  208 => 101,  206 => 100,  204 => 99,  202 => 98,  200 => 97,  198 => 96,  196 => 95,  194 => 94,  192 => 93,  190 => 92,  188 => 91,  186 => 90,  184 => 89,  182 => 88,  180 => 87,  178 => 86,  176 => 85,  173 => 83,  171 => 82,  169 => 81,  167 => 80,  165 => 79,  163 => 78,  156 => 72,  145 => 69,  141 => 68,  138 => 67,  134 => 66,  125 => 60,  119 => 59,  115 => 58,  97 => 42,  93 => 40,  89 => 39,  85 => 38,  74 => 30,  70 => 29,  66 => 28,  60 => 25,  41 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
