<?php

/* FrontendBundle:Search:campaignShow.html.twig */
class __TwigTemplate_34adcb6ae7bcef9e5c634a3acde59fd17692475ee54b98a2bf84624a9587b5af extends Twig_Template
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
\t\t\t<div class=\"about\" id=\"tabs\">
\t\t\t<span class=\"page-title\">
\t\t\t\t<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/liga-solidaria.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "ong"), "nomeFantasia"), "html", null, true);
        echo "\">
\t\t\t\t<h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "ong"), "nomeFantasia"), "html", null, true);
        echo "</h1>
\t\t\t</span>\t\t\t

\t\t\t<nav class=\"tab-menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"#tabs-1\">Sobre</a></li>
\t    \t\t\t<li><a href=\"#tabs-2\">Doadores</a></li>
  \t\t\t    </ul>
\t\t\t</nav><!--tab-menu-->

\t\t\t<aside class=\"sidebar-donors\">
\t\t\t\t<div class=\"donate\">
\t\t\t\t\t<p class=\"percent-meta\"><span>";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["totalPercent"]) ? $context["totalPercent"] : $this->getContext($context, "totalPercent")), "html", null, true);
        echo "%</span> da meta</p>
\t\t\t\t\t<p class=\"products\"><span>";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["totalPurchased"]) ? $context["totalPurchased"] : $this->getContext($context, "totalPurchased")), "html", null, true);
        echo "</span> Produtos Arrecadados</p>
\t\t\t\t\t<p class=\"days\"><span>";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["remainingDays"]) ? $context["remainingDays"] : $this->getContext($context, "remainingDays")), "html", null, true);
        echo "</span> Dias Restantes</p>
\t\t\t\t\t<button id=\"donate\">Doar para esta ONG</button>
                    <input type=\"hidden\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "id"), "html", null, true);
        echo "\" id=\"campaignId\"/>
\t\t\t\t</div><!--donate-->

\t\t\t\t<hr>
\t\t\t\t<div class=\"social-about\">
\t\t\t\t\t<div class=\"fb-like-box\" data-href=\"https://www.facebook.com/radiorockoficial\" data-width=\"240\" data-height=\"250\" data-colorscheme=\"light\" data-show-faces=\"true\" data-header=\"false\" data-stream=\"false\" data-show-border=\"false\"></div>
\t\t\t\t\t<div class=\"side-blog\">
\t\t\t\t\t\t<h5>Blog</h5>
\t\t\t\t\t\t<article class=\"blog-post\">
\t\t\t\t\t\t\t<a href=\"\" class=\"blog-post-title\">Fotos de equipe Outubro de 2013</a>
\t\t\t\t\t\t\t<span>23/10/2013</span>
\t\t\t\t\t\t\t<a href=\"\" class=\"blog-post-text\"><p>Desde quinta passada (17/10/2013) o time do Catarse esteve reunido no QG do Rio para discutir rumos da plataforma. As atividade...</p></a>
\t\t\t\t\t\t</article>
\t\t\t\t\t\t<article class=\"blog-post\">
\t\t\t\t\t\t\t<a href=\"\" class=\"blog-post-title\">Fotos de equipe Outubro de 2013</a>
\t\t\t\t\t\t\t<span>23/10/2013</span>
\t\t\t\t\t\t\t<a href=\"\" class=\"blog-post-text\"><p>Desde quinta passada (17/10/2013) o time do Catarse esteve reunido no QG do Rio para discutir rumos da plataforma. As atividade...</p></a>
\t\t\t\t\t\t</article>
\t\t\t\t\t\t<article class=\"blog-post\">
\t\t\t\t\t\t\t<a href=\"\" class=\"blog-post-title\">Fotos de equipe Outubro de 2013</a>
\t\t\t\t\t\t\t<span>23/10/2013</span>
\t\t\t\t\t\t\t<a href=\"\" class=\"blog-post-text\"><p>Desde quinta passada (17/10/2013) o time do Catarse esteve reunido no QG do Rio para discutir rumos da plataforma. As atividade...</p></a>
\t\t\t\t\t\t</article>

\t\t\t\t\t</div><!--side-blog-->
\t\t\t\t\t<div class=\"twitter-box\">
\t\t\t\t\t\t<a class=\"twitter-timeline\" href=\"https://twitter.com/lzalcon\" data-widget-id=\"414114585885421569\">Tweets by @lzalcon</a>
\t\t\t\t\t\t";
        // line 53
        echo "\t\t\t\t\t</div><!--twitter-->
\t\t\t\t</div><!--social-about-->
\t\t\t</aside><!--sidebar-donors-->

\t\t\t<section class=\"tab-about\" id=\"tabs-1\">
\t\t\t\t<div class=\"carousel-about\">
\t\t\t\t\t<ul>
                        ";
        // line 60
        if ((!(null === $this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "firstPhoto")))) {
            // line 61
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"banner-about\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "getFirstWebPath"), "html", null, true);
            echo "\" alt=\"\" ></a>
\t\t\t\t\t\t\t</div><!--banner-about-->
\t\t\t\t\t\t</li>
                        ";
        }
        // line 67
        echo "                        ";
        if ((!(null === $this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "secondPhoto")))) {
            // line 68
            echo "                            <li>
                                <div class=\"banner-about\">
                                    <a href=\"#\"><img src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "getSecondWebPath"), "html", null, true);
            echo "\" alt=\"\" ></a>
                                </div><!--banner-about-->
                            </li>
                        ";
        }
        // line 74
        echo "                        ";
        if ((!(null === $this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "thirdPhoto")))) {
            // line 75
            echo "                            <li>
                                <div class=\"banner-about\">
                                    <a href=\"#\"><img src=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "getThirdWebPath"), "html", null, true);
            echo "\" alt=\"\" ></a>
                                </div><!--banner-about-->
                            </li>
                        ";
        }
        // line 81
        echo "\t\t\t\t\t</ul>

\t\t\t\t    <div class=\"carousel-pagination\">
\t\t\t\t    </div> <!--carousel-pagination-->
\t\t\t\t</div>
\t\t\t\t<div class=\"about-content\">
\t\t\t\t\t<h2>Título</h2>
                    <p>";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "firstDescription"), "html", null, true);
        echo "</p>
                    <p>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "secondDescription"), "html", null, true);
        echo "</p>
\t\t\t\t\t<hr>
\t\t\t\t\t<h2>Localização</h2>
\t\t\t\t\t<p>";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "ong"), "address"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "ong"), "complement"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "ong"), "neighborhood"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "ong"), "city"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "ong"), "state"), "html", null, true);
        echo "</p>
\t\t\t\t\t<iframe width=\"425\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Av.+Queiroz+Filho,+Vila+Hamburguesa,+S%C3%A3o+Paulo&amp;aq=2&amp;oq=AV+QUEIROZ+FILHO&amp;sll=-23.547253,-46.728886&amp;sspn=0.017271,0.036929&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Av.+Queir%C3%B3s+Filho,+1001&amp;z=14&amp;ll=-23.5417,-46.7302&amp;output=embed\"></iframe>
\t\t\t\t\t<h2>Contato</h2>
\t\t\t\t\t<p>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "ong"), "email"), "html", null, true);
        echo "</p>
\t\t\t\t</div><!--about-content-->
\t\t\t</section><!--tab-about-->

\t\t\t<section class=\"tab-donors\" id=\"tabs-2\">
\t\t\t\t<div class=\"donor\">
\t\t\t\t\t<img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/angelo-small.png"), "html", null, true);
        echo "\" alt=\"Angelo Gianotto\" title=\"Angelo Gianotto\" class=\"profile-donor\">
\t\t\t\t\t<h3>Angelo Gianotto</h3>
\t\t\t\t\t<p class=\"date\"><img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/calendar-small.png"), "html", null, true);
        echo "\" alt=\"\">07/12/2013 as 23:53</p>
\t\t\t\t\t<p class=\"others\"><img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/heart-small.png"), "html", null, true);
        echo "\" alt=\"\">Doou para esta e mais outras duas ONGS </p>
\t\t\t\t</div><!--donor-->
\t\t\t\t<div class=\"donor\">
\t\t\t\t\t<img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/angelo-small.png"), "html", null, true);
        echo "\" alt=\"Angelo Gianotto\" title=\"Angelo Gianotto\" class=\"profile-donor\">
\t\t\t\t\t<h3>Angelo Gianotto</h3>
\t\t\t\t\t<p class=\"date\"><img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/calendar-small.png"), "html", null, true);
        echo "\" alt=\"\">07/12/2013 as 23:53</p>
\t\t\t\t\t<p class=\"others\"><img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/heart-small.png"), "html", null, true);
        echo "\" alt=\"\">Doou para esta e mais outras duas ONGS </p>
\t\t\t\t</div><!--donor-->
\t\t\t\t<div class=\"donor\">
\t\t\t\t\t<img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/angelo-small.png"), "html", null, true);
        echo "\" alt=\"Angelo Gianotto\" title=\"Angelo Gianotto\" class=\"profile-donor\">
\t\t\t\t\t<h3>Angelo Gianotto</h3>
\t\t\t\t\t<p class=\"date\"><img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/calendar-small.png"), "html", null, true);
        echo "\" alt=\"\">07/12/2013 as 23:53</p>
\t\t\t\t\t<p class=\"others\"><img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/heart-small.png"), "html", null, true);
        echo "\" alt=\"\">Doou para esta e mais outras duas ONGS </p>
\t\t\t\t</div><!--donor-->
\t\t\t\t<div class=\"donor\">
\t\t\t\t\t<img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/angelo-small.png"), "html", null, true);
        echo "\" alt=\"Angelo Gianotto\" title=\"Angelo Gianotto\" class=\"profile-donor\">
\t\t\t\t\t<h3>Angelo Gianotto</h3>
\t\t\t\t\t<p class=\"date\"><img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/calendar-small.png"), "html", null, true);
        echo "\" alt=\"\">07/12/2013 as 23:53</p>
\t\t\t\t\t<p class=\"others\"><img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/heart-small.png"), "html", null, true);
        echo "\" alt=\"\">Doou para esta e mais outras duas ONGS </p>
\t\t\t\t</div><!--donor-->
\t\t\t\t<div class=\"donor\">
\t\t\t\t\t<img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/angelo-small.png"), "html", null, true);
        echo "\" alt=\"Angelo Gianotto\" title=\"Angelo Gianotto\" class=\"profile-donor\">
\t\t\t\t\t<h3>Angelo Gianotto</h3>
\t\t\t\t\t<p class=\"date\"><img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/calendar-small.png"), "html", null, true);
        echo "\" alt=\"\">07/12/2013 as 23:53</p>
\t\t\t\t\t<p class=\"others\"><img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/heart-small.png"), "html", null, true);
        echo "\" alt=\"\">Doou para esta e mais outras duas ONGS </p>
\t\t\t\t</div><!--donor-->
\t\t\t\t<div class=\"donor\">
\t\t\t\t\t<img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/angelo-small.png"), "html", null, true);
        echo "\" alt=\"Angelo Gianotto\" title=\"Angelo Gianotto\" class=\"profile-donor\">
\t\t\t\t\t<h3>Angelo Gianotto</h3>
\t\t\t\t\t<p class=\"date\"><img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/calendar-small.png"), "html", null, true);
        echo "\" alt=\"\">07/12/2013 as 23:53</p>
\t\t\t\t\t<p class=\"others\"><img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/heart-small.png"), "html", null, true);
        echo "\" alt=\"\">Doou para esta e mais outras duas ONGS </p>
\t\t\t\t</div><!--donor-->
\t\t\t\t<div class=\"donor\">
\t\t\t\t\t<img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/angelo-small.png"), "html", null, true);
        echo "\" alt=\"Angelo Gianotto\" title=\"Angelo Gianotto\" class=\"profile-donor\">
\t\t\t\t\t<h3>Angelo Gianotto</h3>
\t\t\t\t\t<p class=\"date\"><img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/calendar-small.png"), "html", null, true);
        echo "\" alt=\"\">07/12/2013 as 23:53</p>
\t\t\t\t\t<p class=\"others\"><img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/heart-small.png"), "html", null, true);
        echo "\" alt=\"\">Doou para esta e mais outras duas ONGS </p>
\t\t\t\t</div><!--donor-->
\t\t\t\t<div class=\"donor\">
\t\t\t\t\t<img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/angelo-small.png"), "html", null, true);
        echo "\" alt=\"Angelo Gianotto\" title=\"Angelo Gianotto\" class=\"profile-donor\">
\t\t\t\t\t<h3>Angelo Gianotto</h3>
\t\t\t\t\t<p class=\"date\"><img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/calendar-small.png"), "html", null, true);
        echo "\" alt=\"\">07/12/2013 as 23:53</p>
\t\t\t\t\t<p class=\"others\"><img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/heart-small.png"), "html", null, true);
        echo "\" alt=\"\">Doou para esta e mais outras duas ONGS </p>
\t\t\t\t</div><!--donor-->
\t\t\t\t<div class=\"donor\">
\t\t\t\t\t<img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/angelo-small.png"), "html", null, true);
        echo "\" alt=\"Angelo Gianotto\" title=\"Angelo Gianotto\" class=\"profile-donor\">
\t\t\t\t\t<h3>Angelo Gianotto</h3>
\t\t\t\t\t<p class=\"date\"><img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/calendar-small.png"), "html", null, true);
        echo "\" alt=\"\">07/12/2013 as 23:53</p>
\t\t\t\t\t<p class=\"others\"><img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/heart-small.png"), "html", null, true);
        echo "\" alt=\"\">Doou para esta e mais outras duas ONGS </p>
\t\t\t\t</div><!--donor-->
\t\t\t\t<div class=\"donor\">
\t\t\t\t\t<img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/angelo-small.png"), "html", null, true);
        echo "\" alt=\"Angelo Gianotto\" title=\"Angelo Gianotto\" class=\"profile-donor\">
\t\t\t\t\t<h3>Angelo Gianotto</h3>
\t\t\t\t\t<p class=\"date\"><img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/calendar-small.png"), "html", null, true);
        echo "\" alt=\"\">07/12/2013 as 23:53</p>
\t\t\t\t\t<p class=\"others\"><img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/heart-small.png"), "html", null, true);
        echo "\" alt=\"\">Doou para esta e mais outras duas ONGS </p>
\t\t\t\t</div><!--donor-->
\t\t\t\t<div class=\"donor\">
\t\t\t\t\t<img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/angelo-small.png"), "html", null, true);
        echo "\" alt=\"Angelo Gianotto\" title=\"Angelo Gianotto\" class=\"profile-donor\">
\t\t\t\t\t<h3>Angelo Gianotto</h3>
\t\t\t\t\t<p class=\"date\"><img src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/calendar-small.png"), "html", null, true);
        echo "\" alt=\"\">07/12/2013 as 23:53</p>
\t\t\t\t\t<p class=\"others\"><img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/heart-small.png"), "html", null, true);
        echo "\" alt=\"\">Doou para esta e mais outras duas ONGS </p>
\t\t\t\t</div><!--donor-->
\t\t\t\t<div class=\"donor\">
\t\t\t\t\t<img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/angelo-small.png"), "html", null, true);
        echo "\" alt=\"Angelo Gianotto\" title=\"Angelo Gianotto\" class=\"profile-donor\">
\t\t\t\t\t<h3>Angelo Gianotto</h3>
\t\t\t\t\t<p class=\"date\"><img src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/calendar-small.png"), "html", null, true);
        echo "\" alt=\"\">07/12/2013 as 23:53</p>
\t\t\t\t\t<p class=\"others\"><img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/heart-small.png"), "html", null, true);
        echo "\" alt=\"\">Doou para esta e mais outras duas ONGS </p>
\t\t\t\t</div><!--donor-->
\t\t\t</section><!--tab-donors-->
\t\t\t</div><!--about-->
\t\t</div><!--wrapper-->\t
\t</main>

";
    }

    // line 179
    public function block_javascripts($context, array $blocks = array())
    {
        // line 180
        echo "    <script src=\"http://code.jquery.com/ui/1.10.3/jquery-ui.js\"></script>
    <script>
        \$(document).ready(function(){
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
        // line 202
        echo $this->env->getExtension('routing')->getPath("search_campaign_donate", array("campaignId" => "PLACEHOLDER"));
        echo "';
                window.location=route.replace(\"PLACEHOLDER\", campaignId);
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Search:campaignShow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 202,  383 => 180,  380 => 179,  368 => 170,  364 => 169,  359 => 167,  353 => 164,  349 => 163,  344 => 161,  338 => 158,  334 => 157,  329 => 155,  323 => 152,  319 => 151,  314 => 149,  308 => 146,  304 => 145,  299 => 143,  293 => 140,  289 => 139,  284 => 137,  278 => 134,  274 => 133,  269 => 131,  263 => 128,  259 => 127,  254 => 125,  248 => 122,  244 => 121,  239 => 119,  233 => 116,  229 => 115,  224 => 113,  218 => 110,  214 => 109,  209 => 107,  203 => 104,  199 => 103,  194 => 101,  185 => 95,  171 => 92,  165 => 89,  161 => 88,  152 => 81,  145 => 77,  141 => 75,  138 => 74,  131 => 70,  127 => 68,  124 => 67,  117 => 63,  113 => 61,  111 => 60,  102 => 53,  72 => 25,  67 => 23,  63 => 22,  59 => 21,  44 => 9,  38 => 8,  32 => 4,  29 => 3,);
    }
}
