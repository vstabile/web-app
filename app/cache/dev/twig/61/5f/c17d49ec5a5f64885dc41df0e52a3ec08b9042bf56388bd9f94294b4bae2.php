<?php

/* FrontendBundle:Checkout:index.html.twig */
class __TwigTemplate_615fc17d49ec5a5f64885dc41df0e52a3ec08b9042bf56388bd9f94294b4bae2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontendBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
        echo "    <div id=\"boxes\">
        <div id=\"dialog\" class=\"window\">
\t\t\t\t<span class=\"wrap-close\">
\t\t\t\t\t<a href=\"#\" class=\"close\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/close.png"), "html", null, true);
        echo "\" alt=\"Fechar janela\" width=\"13\" height=\"13\"></a>
\t\t\t\t</span>
            <h2>Código de Segurança do Cartão</h2>
            <div class=\"modal-content\">
                <h3>O que é?</h3>
                <p>O código de segurança do cartão de crédito é uma sequência numérica complementar ao número do cartão, que garante a veracidade dos dados de uma transação eletrônica.</p>
                <div class=\"pull-left\">
                    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/cvv.png"), "html", null, true);
        echo "\" alt=\"Localização do código de segurança\" width=\"190\" height=\"239\">
                </div><!--pull-left-->
                <div class=\"pull-right\">
                    <p>O <strong>código de segurança</strong> dos cartões com Bandeira <strong>VISA / MasterCard</strong>  está <strong>localizado no verso</strong> do cartão e corresponde aos três últimos dígitos da faixa numérica.</p>
                    <h3>AMERICAN EXPRESS</h3>
                    <p>O <strong>código de segurança</strong> está <strong>localizado na parte frontal do cartão</strong> <strong>AMERICAN EXPRESS</strong> e corresponde aos 4 dígitos localizados do lado direito acima da faixa numérica do seu cartão.</p>
                </div><!--pull-right-->
            </div><!--modal-content-->
        </div><!--dialog-->
        <div id=\"mask\"></div>
    </div><!--boxes-->
    <main>
        <div class=\"checkout wrapper\">
\t\t\t<span class=\"page-title\">
\t\t\t\t<img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/liga-solidaria.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "ong"), "nomeFantasia"), "html", null, true);
        echo "\">
\t\t\t\t<h1>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "ong"), "nomeFantasia"), "html", null, true);
        echo "</h1>
\t\t\t</span>
            <table class=\"cart\">
                <tr>
                    <th>Produto</th>
                    <th>Preço Unitário</th>
                    <th>Quantidade</th>
                    <th>Total</th>
                </tr>
                ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "product"));
        foreach ($context['_seq'] as $context["_key"] => $context["productSelected"]) {
            // line 39
            echo "                    ";
            $context["totalValue"] = ($this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "price") * $this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "quantity"));
            // line 40
            echo "                    <tr>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "name"), "html", null, true);
            echo "</td>
                        <td>R\$ ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "price"), "html", null, true);
            echo "</td>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productSelected"]) ? $context["productSelected"] : $this->getContext($context, "productSelected")), "quantity"), "html", null, true);
            echo "</td>
                        <td>R\$ ";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["totalValue"]) ? $context["totalValue"] : $this->getContext($context, "totalValue")), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productSelected'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </table>
            <form action=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("checkout_process_checkout");
        echo "\" class=\"form-client\" method=\"post\">
            <section class=\"box\">
                <h2>Cliente</h2>
                <p class=\"ame\">";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["costumer"]) ? $context["costumer"] : $this->getContext($context, "costumer")), "firstname"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["costumer"]) ? $context["costumer"] : $this->getContext($context, "costumer")), "lastname"), "html", null, true);
        echo "</p>
                <p class=\"email\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["costumer"]) ? $context["costumer"] : $this->getContext($context, "costumer")), "email"), "html", null, true);
        echo "</p>
                    <h3>Informações de Cobrança</h3>
                    <label for=\"\">Nome Completo</label>
                    <input type=\"text\" name=\"costumer-name\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["costumer"]) ? $context["costumer"] : $this->getContext($context, "costumer")), "firstname"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["costumer"]) ? $context["costumer"] : $this->getContext($context, "costumer")), "lastname"), "html", null, true);
        echo "\" class=\"field\">
                    <ul class=\"inline-fields\">
                        <li>
                            <label for=\"\">Telefone</label>
                            <input type=\"text\" name=\"phone\" class=\"field-half\">
                        </li>
                        <li>
                            <label for=\"\">Celular</label>
                            <input type=\"text\"  name=\"celphone\" class=\"field-half\">
                        </li>
                    </ul>
                    <ul class=\"inline-field-link\">
                        <li>
                            <label for=\"\">CEP</label>
                            <input type=\"text\" name=\"zipcode\" class=\"field-half\">
                        </li>
                        <li>
                            <a href=\"http://www.buscacep.correios.com.br/\" title=\"Busque o seu CEP\">Não sabe seu CEP</a>
                        </li>
                    </ul>
                    <label for=\"\">Endereço</label>
                    <input type=\"text\" class=\"field\" name=\"address\" placeholder=\"rua, número\">
                    <label for=\"\">Complemento</label>
                    <input type=\"text\" class=\"field\" name=\"complement\" placeholder=\"apto., bloco, casa\">
                    <label for=\"neighborhood\">Bairro</label>
                    <input type=\"text\" class=\"field\" id=\"neighborhood\" name=\"neighborhood\">
                    <ul class=\"inline-fields\">
                        <li>
                            <label for=\"city\">Cidade</label>
                            <input type=\"text\" name=\"city\" class=\"field-half\">
                        </li>
                        <li>
                            <label for=\"state\">Estado</label>
                            <select name=\"state\" id=\"state\" class=\"field-half\">
                                <option value=\"estado\">Selecione</option>
                                <option value=\"AC\">Acre</option>
                                <option value=\"AL\">Alagoas</option>
                                <option value=\"AM\">Amazonas</option>
                                <option value=\"AP\">Amapá</option>
                                <option value=\"BA\">Bahia</option>
                                <option value=\"CE\">Ceará</option>
                                <option value=\"DF\">Distrito Federal</option>
                                <option value=\"ES\">Espírito Santo</option>
                                <option value=\"GO\">Goiás</option>
                                <option value=\"MA\">Maranhão</option>
                                <option value=\"MT\">Mato Grosso</option>
                                <option value=\"MS\">Mato Grosso do Sul</option>
                                <option value=\"MG\">Minas Gerais</option>
                                <option value=\"PA\">Pará</option>
                                <option value=\"PB\">Paraíba</option>
                                <option value=\"PR\">Paraná</option>
                                <option value=\"PE\">Pernambuco</option>
                                <option value=\"PI\">Piauí</option>
                                <option value=\"RJ\">Rio de Janeiro</option>
                                <option value=\"RN\">Rio Grande do Norte</option>
                                <option value=\"RO\">Rondônia</option>
                                <option value=\"RS\">Rio Grande do Sul</option>
                                <option value=\"RR\">Roraima</option>
                                <option value=\"SC\">Santa Catarina</option>
                                <option value=\"SE\">Sergipe</option>
                                <option value=\"SP\">São Paulo</option>
                                <option value=\"TO\">Tocantins</option>
                            </select>
                        </li>
                        </li>
                    </ul>
            </section><!--cliente-->
            <section class=\"box middle\">
                <h2>Pagamento</h2>
                <h3>Cartão de Crédito</h3>
                    <ul class=\"flags\">
                        <li><span class=\"cc_mastercard\"></span></li>
                        <li><span class=\"cc_visa\"></span></li>
                        <li><span class=\"cc_americanexpress\"></span></li>
                        <li><span class=\"cc_aura\"></span></li>
                        <li><span class=\"cc_dinners\"></span></li>
                        <li><span class=\"cc_elo\"></span></li>
                    </ul>
                    <label for=\"\">Nome no Cartão</label>
                    <input type=\"text\" name=\"cc_id_name\" class=\"field\" placeholder=\"Digite o nome aqui\">
                    <label for=\"\">Número do Cartão</label>
                    <input type=\"text\" name=\"cc_number\" class=\"field\" placeholder=\"Digite o número aqui\">
                    <label for=\"\">Data de Vencimento</label>
                    <ul class=\"inline-fields\">
                        <li>
                            <select name=\"cc_expiration_month\" class=\"field-half\">
                                <option value=\"1\">01</option>
                                <option value=\"2\">02</option>
                                <option value=\"3\">03</option>
                                <option value=\"4\">04</option>
                                <option value=\"5\">05</option>
                                <option value=\"6\">06</option>
                                <option value=\"7\">07</option>
                                <option value=\"8\">08</option>
                                <option value=\"9\">09</option>
                                <option value=\"10\">10</option>
                                <option value=\"11\">11</option>
                                <option value=\"12\">12</option>
                            </select>
                        </li>
                        <li>
                            <select name=\"cc_expiration_year\" class=\"field-half\">
                                <option value=\"2014\">2014</option>
                                <option value=\"2015\">2015</option>
                                <option value=\"2016\">2016</option>
                                <option value=\"2017\">2017</option>
                                <option value=\"2018\">2018</option>
                                <option value=\"2019\">2019</option>
                                <option value=\"2020\">2020</option>
                            </select>
                        </li>
                    </ul>
                    <label for=\"\">Código de Segurança</label>
                    <ul class=\"inline-field-link\">
                        <li>
                            <input type=\"text\" class=\"field-half\" name=\"cc_security\">
                        </li>
                        <li>
                            <a href=\"#dialog\" name=\"modal\" title=\"Entende como localizar o CVV do seu cartão\">O que é?</a>
                        </li>
                    </ul>
                    <label for=\"\">CPF do Titular do Cartão</label>
                    <input type=\"text\" name=\"cc_id_number\" class=\"field\" placeholder=\"Digite o número aqui\">
                    ";
        // line 179
        echo "                    ";
        // line 180
        echo "                        ";
        // line 181
        echo "                        ";
        // line 182
        echo "                        ";
        // line 183
        echo "                        ";
        // line 184
        echo "                    ";
        // line 185
        echo "            </section><!--pagamento-->
            <section class=\"box\">
                <h2>Doar</h2>
                <h3>Resumo da Doação</h3>
                <table class=\"resume-cart\">
                    <tr>
                        <td>Quantidade total de produtos</td>
                        <td>";
        // line 192
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "totalProducts"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Valor total dos produtos</td>
                        <td>R\$: ";
        // line 196
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "valueTotalProducts"), "html", null, true);
        echo "</td>
                    </tr>
                    ";
        // line 199
        echo "                        ";
        // line 200
        echo "                        ";
        // line 201
        echo "                    ";
        // line 202
        echo "                    ";
        // line 203
        echo "                        ";
        // line 204
        echo "                        ";
        // line 205
        echo "                    ";
        // line 206
        echo "                </table>
                <div itemscope=\"\" itemtype=\"http://schema.org/LocalBusiness\" class=\"address\">
                    <p class=\"ong-name\">ONG: <span itemprop=\"name\"><h1>";
        // line 208
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "ong"), "nomeFantasia"), "html", null, true);
        echo "</h1></span></p>
                    <div itemprop=\"address\" itemscope=\"\" itemtype=\"http://schema.org/PostalAddress\">
                        <p><span class=\"bold\">Endereço: </span><span itemprop=\"streetAddress\">Rua araritaguaba, 345,<br /> Vila Medeiros</span>, <span itemprop=\"addressLocality\">São Paulo</span> - <span itemprop=\"addressRegion\">SP</span></p>
                    </div><!-- Postal Address -->
                </div>
                <button type=\"submit\" class=\"btn-submit\"><span class=\"icon-heart\"></span>Confirmar Doação</button>
            </section><!--doar-->
            </form><!--form-payment-->
        </div>
    </main>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Checkout:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 208,  308 => 206,  306 => 205,  304 => 204,  302 => 203,  300 => 202,  298 => 201,  296 => 200,  294 => 199,  289 => 196,  282 => 192,  273 => 185,  271 => 184,  269 => 183,  267 => 182,  265 => 181,  263 => 180,  261 => 179,  133 => 55,  127 => 52,  121 => 51,  115 => 48,  112 => 47,  103 => 44,  99 => 43,  95 => 42,  91 => 41,  88 => 40,  85 => 39,  81 => 38,  69 => 29,  63 => 28,  46 => 14,  36 => 7,  31 => 4,  28 => 3,);
    }
}
