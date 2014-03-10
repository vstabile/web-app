<?php

/* FrontendBundle::layout_ong.html.twig */
class __TwigTemplate_2ebd6a13b235f417dd6e58f0b9a767acc08c3f59f7d270100e0d88728b54bf4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"pt\">
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/css/style.css"), "html", null, true);
        echo "\">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/css/jquery-ui.css"), "html", null, true);
        echo "\">
        <script src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>
    </head>
    <body>
        <div id=\"fb-root\"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = \"//connect.facebook.net/pt_BR/all.js#xfbml=1\";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        ";
        // line 22
        $this->displayBlock('header', $context, $blocks);
        // line 53
        echo "
        ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "        <footer>
            <div class=\"footer-wrapper\">
                <nav class=\"footer-menu\">
                    <ul>
                        <li><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("search_about_us");
        echo "\" class=\"nav-link\">Quem somos</a></li>
                        <li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("search_faq");
        echo "\" class=\"nav-link\">Dúvidas Frequentes</a></li>
                        <li><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("search_contact");
        echo "\" class=\"nav-link\">Contato</a></li>
                        <li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("search_use_terms");
        echo "\" class=\"nav-link\">Termos de uso</a></li>
                    </ul>
                </nav><!--footer-menu-->
                <div class=\"news-social\">
                    <div class=\"social-icons\">
                        <a href=\"#\" title=\"Curta nossa fanpage no Facebook\"><img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/facebook.png"), "html", null, true);
        echo "\" alt=\"Facebook\"/></a>
                        <a href=\"#\" title=\"Siga-nos no Twitter\"><img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/twitter.png"), "html", null, true);
        echo "\" alt=\"Twitter\"/></a>
                        <a href=\"#\" title=\"Siga-nos no Instagram\"><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/instagram.png"), "html", null, true);
        echo "\" alt=\"Instagram\"/></a>
                    </div><!--social-icons-->
                    <p>Assine nossa news</p>

                    <form action=\"\" class=\"search\">
                        <input type=\"text\" class=\"field\" placeholder=\"Digite seu email aqui\">
                        <input type=\"submit\" name=\"search\" class=\"btn\" value=\"\">
                    </form>


                </div><!--news-social-->
                <div class=\"text-footer\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, repellendus, modi, consectetur totam magni cum magnam eligendi eius ab a natus hic nam error itaque quae consequatur sunt reiciendis numquam suscipit et. Tempora, obcaecati, amet iusto nobis natus ullam beatae?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, ullam, quae, sequi quam soluta repudiandae molestiae non deserunt recusandae pariatur rerum odio dicta dignissimos explicabo error nobis eligendi maxime autem eveniet consequatur molestias distinctio nulla illo amet odit repellat sed qui commodi sunt obcaecati facere incidunt dolor iste. Magni, corporis voluptas fuga possimus voluptatibus laudantium dolor quaerat illo iusto delectus doloremque quas perspiciatis provident minus assumenda inventore iste cumque earum rerum saepe pariatur suscipit odit. Dolores, ab, veritatis ea nisi blanditiis dolor ipsum repudiandae ratione dolore harum impedit quam voluptate provident architecto sequi cum error voluptatem nihil eum quisquam doloribus reiciendis mollitia quo reprehenderit nulla eos voluptas sed veniam inventore accusantium rerum rem iusto aliquam! Nemo, quas labore dolore voluptatum esse et veniam porro autem reprehenderit beatae molestiae quis repellendus! Enim, odio, in, et, ut alias est ipsa numquam praesentium sed autem ea neque provident cum unde rerum nam molestias! Placeat, voluptas, cum, aliquam sequi necessitatibus ex in quidem aut vero quibusdam quas modi ipsum. Iste, distinctio ducimus animi quasi reprehenderit voluptas atque sint! Quis, eum, enim corrupti ipsa harum deserunt hic doloremque. Error, beatae, laudantium, quidem earum sunt illum ea cupiditate recusandae dicta assumenda eaque corrupti dolores est nam.</p>
                </div>
                <div class=\"copy\">
                    <p>Copyright 2013 socialfunding.com.br - Todos os direitos reservados</p>
                </div><!--copy-->
            </div><!--footer-wrapper-->
        </footer><!--footer-->
        <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/jcarousel.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$(document).ready(function(){
                \$('.carousel-reviewers')
                        .jcarousel({
                            wrap: 'circular'
                        })
                        .jcarouselAutoscroll({
                            interval: 4998,
                            target: '+=1',
                            autostart: true
                        });

                \$(function() {
                    \$('.carousel-hero').jcarousel({
                        wrap: 'circular'
                    });


                    \$('.carousel-next').jcarouselControl({
                        target: '+=1'
                    });
                });
            });
        </script>
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        // line 23
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 24
            echo "                <div class=\"flash-message\">
                    <em>Notice</em>: ";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            <header>
                <div class=\"header-wrapper\">
                    <div class=\"logo\" itemscope=\"\" itemtype=\"http://schema.org/Organization\">
                        <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("search_index");
        echo "\" title=\"Social Funding\" itemprop=ürl><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/logo-social-funding.png"), "html", null, true);
        echo "\" alt=\"Social Funding\" itemprop=\"logo\"></a>
                    </div><!--logo-->
                    <div class=\"social-icons\">
                        <a href=\"#\" title=\"Curta nossa fanpage no Facebook\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/facebook.png"), "html", null, true);
        echo "\" alt=\"Facebook\"></a>
                        <a href=\"#\" title=\"Siga-nos no Twitter\"><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/twitter.png"), "html", null, true);
        echo "\" alt=\"Twitter\"></a>
                        <a href=\"#\" title=\"Siga-nos no Instagram\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/instagram.png"), "html", null, true);
        echo "\" alt=\"Instagram\"></a>
                    </div><!--social-icons-->
                    <nav class=\"main-menu with-logged\">
                        <ul>
                            <li><a href=\"\" class=\"menu-border\">ajuda</a></li>
                        </ul>
                        <a href=\"#\" class=\"logged\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ong"]) ? $context["ong"] : $this->getContext($context, "ong")), "nomeFantasia"), "html", null, true);
        echo "</a>
                        <ul class=\"logged-menu\">
                            <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("ong_create_campaign");
        echo "\" class=\"create-campaign\">Criar Campanha</a></li>
                            <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("ong_list_campaign");
        echo "\" class=\"my-campaigns\">Minhas Campanhas</a></li>
                            <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("ong_edit_perfil");
        echo "\" class=\"info\">Informações</a></li>
                            <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("_security_logout");
        echo "\" class=\"logout\">LOG OUT</a></li>
                        </ul>
                    </nav><!--main-menu-->
                </div><!--header-wrapper-->
            </header>
        ";
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FrontendBundle::layout_ong.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 55,  234 => 47,  230 => 46,  226 => 45,  222 => 44,  217 => 42,  208 => 36,  204 => 35,  200 => 34,  192 => 31,  187 => 28,  175 => 24,  162 => 9,  156 => 5,  125 => 90,  102 => 70,  98 => 69,  94 => 68,  86 => 63,  82 => 62,  78 => 61,  74 => 60,  68 => 56,  63 => 54,  60 => 53,  58 => 22,  40 => 9,  35 => 7,  30 => 5,  24 => 1,  436 => 192,  416 => 175,  396 => 157,  394 => 156,  392 => 155,  390 => 154,  388 => 153,  386 => 152,  384 => 151,  382 => 150,  380 => 149,  378 => 148,  375 => 146,  371 => 144,  365 => 143,  360 => 140,  358 => 139,  352 => 137,  346 => 135,  340 => 133,  338 => 132,  332 => 130,  326 => 128,  320 => 126,  314 => 124,  312 => 123,  308 => 121,  304 => 120,  301 => 119,  299 => 118,  281 => 102,  279 => 101,  277 => 100,  275 => 99,  269 => 94,  264 => 91,  251 => 88,  248 => 87,  244 => 54,  239 => 83,  236 => 82,  231 => 79,  218 => 76,  215 => 75,  211 => 74,  206 => 71,  203 => 70,  198 => 67,  185 => 64,  182 => 63,  178 => 25,  173 => 59,  170 => 23,  167 => 22,  159 => 54,  146 => 51,  143 => 50,  139 => 49,  134 => 46,  129 => 45,  127 => 44,  116 => 36,  113 => 35,  110 => 34,  101 => 30,  96 => 29,  93 => 28,  85 => 26,  77 => 22,  71 => 20,  65 => 55,  59 => 16,  57 => 15,  49 => 12,  46 => 11,  42 => 10,  38 => 9,  31 => 4,  28 => 3,);
    }
}
