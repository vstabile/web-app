<?php

/* FrontendBundle::layout.html.twig */
class __TwigTemplate_ec669228c3a2fde290305dd0d850a163fae0bb938632604789987ad9f25a77ea extends Twig_Template
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
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,100,300,700,900' rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
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
        // line 57
        echo "
        ";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "        <footer>
            <div class=\"footer-wrapper\">
                <nav class=\"footer-menu\">
                    <ul>
                        <li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("search_about_us");
        echo "\" class=\"nav-link\">Quem somos</a></li>
                        <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("search_faq");
        echo "\" class=\"nav-link\">Dúvidas Frequentes</a></li>
                        <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("search_contact");
        echo "\" class=\"nav-link\">Contato</a></li>
                        <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("search_use_terms");
        echo "\" class=\"nav-link\">Termos de uso</a></li>
                    </ul>
                </nav><!--footer-menu-->
                <div class=\"news-social\">
                    <div class=\"social-icons\">
                        <a href=\"http://facebook.com/socialfundingbr\" title=\"Curta nossa fanpage no Facebook\"><img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/facebook.png"), "html", null, true);
        echo "\" alt=\"Facebook\"/></a>
                        <a href=\"http://twitter.com/socialfundingbr\" title=\"Siga-nos no Twitter\"><img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/twitter.png"), "html", null, true);
        echo "\" alt=\"Twitter\"/></a>
                        <a href=\"http://instagram.com/socialfunding\" title=\"Siga-nos no Instagram\"><img src=\"";
        // line 74
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
        // line 94
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

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        // line 23
        echo "            <header>
                ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 25
            echo "                    <div class=\"flash-message\">
                        <em>Notice</em>: ";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                <div class=\"header-wrapper\">
                    <div class=\"logo\" itemscope=\"\" itemtype=\"http://schema.org/Organization\">
                        <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("search_index");
        echo "\" title=\"Social Funding\" itemprop=url><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/logo-social-funding.png"), "html", null, true);
        echo "\" alt=\"Social Funding\" itemprop=\"logo\" /></a>
                    </div><!--logo-->
                    <nav class=\"main-menu\">
                        <ul>
                            <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("search_about_us");
        echo "\">quem somos</a></li>
                            <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"menu-border\">cadastrar ong</a></li>
                        </ul>
                    </nav><!--main-menu-->
                    <form action=\"\" class=\"search\">
                        <input type=\"submit\" name=\"search\" class=\"search-send\" value=\"\">
                        <input type=\"text\" class=\"field\" placeholder=\"Pesquisar ONG\">
                    </form>
                    <nav class=\"main-menu\">
                        <ul>
                            <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">login</a></li>
                            <li><a href=\"\" class=\"menu-border\">ajuda</a></li>
                        </ul>
                    </nav><!--main-menu-->
                    <div class=\"social-icons\">
                        <a href=\"#\" title=\"Curta nossa fanpage no Facebook\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/facebook.png"), "html", null, true);
        echo "\" alt=\"Facebook\"/></a>
                        <a href=\"#\" title=\"Siga-nos no Twitter\"><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/twitter.png"), "html", null, true);
        echo "\" alt=\"Twitter\"/></a>
                        <a href=\"#\" title=\"Siga-nos no Instagram\"><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/instagram.png"), "html", null, true);
        echo "\" alt=\"Instagram\"/></a>
                    </div><!--social-icons-->
                </div><!--header-wrapper-->
            </header>
        ";
    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FrontendBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 59,  235 => 52,  231 => 51,  227 => 50,  219 => 45,  207 => 36,  203 => 35,  194 => 31,  190 => 29,  181 => 26,  178 => 25,  174 => 24,  168 => 22,  157 => 5,  126 => 94,  103 => 74,  99 => 73,  83 => 66,  79 => 65,  75 => 64,  69 => 60,  66 => 59,  64 => 58,  61 => 57,  41 => 9,  39 => 8,  35 => 7,  30 => 5,  24 => 1,  255 => 138,  244 => 58,  233 => 122,  222 => 114,  211 => 106,  200 => 98,  187 => 88,  183 => 87,  179 => 86,  175 => 85,  171 => 23,  167 => 83,  163 => 8,  159 => 81,  155 => 80,  151 => 79,  144 => 74,  117 => 48,  110 => 46,  108 => 45,  106 => 44,  100 => 42,  95 => 72,  91 => 39,  87 => 67,  77 => 37,  74 => 36,  70 => 35,  59 => 22,  44 => 10,  31 => 4,  28 => 3,);
    }
}
