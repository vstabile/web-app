<?php

/* FrontendBundle:Search:index.html.twig */
class __TwigTemplate_631eb8d7ee7fdc385d3cd80fe77d1f62aab41b07d8ca54eb5568cac6852e7df8 extends Twig_Template
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
        echo "    <main>
        <div class=\"carousel-hero\">
            <ul>
                <li>
                    <section class=\"hero\">
                        <div class=\"banner-wrapper\">
                            <div class=\"info\">
                                <h1>E SE VOCÊ PUDESSE MUDAR O MUNDO?</h1>
                                <p>Saiba como e aproveite<br/>para conhecer a Social Funding</p>
                                <button class=\"carousel-next\">Clique e Confira!</button>
                            </div><!--info-->
                            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/banner.png"), "html", null, true);
        echo "\" alt=\"\"/>
                        </div><!--banner-wrapper-->
                    </section><!--hero-->
                </li>
                <li>
                    <section class=\"hero2\">
                        <div class=\"banner-wrapper\">
                            <div class=\"info\">
                                <h1>E SE VOCÊ PUDESSE MUDAR O MUNDO?</h1>
                                <p>Saiba como e aproveite<br/>para conhecer a Social Funding</p>
                                <button class=\"carousel-next\">Clique e Confira!</button>
                            </div><!--info-->
                            <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/banner.png"), "html", null, true);
        echo "\" alt=\"\"/>
                        </div><!--banner-wrapper-->
                    </section><!--hero-->
                </li>
            </ul>
        </div><!--carousel-hero-->
        <section class=\"posts-home\">
            <h4>Recomendados</h4>
            ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recommendedCampaigns"]) ? $context["recommendedCampaigns"] : $this->getContext($context, "recommendedCampaigns")));
        foreach ($context['_seq'] as $context["_key"] => $context["recCampaign"]) {
            // line 36
            echo "                <article class=\"post-door\">
                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("search_campaign_show", array("campaignId" => $this->getAttribute((isset($context["recCampaign"]) ? $context["recCampaign"] : $this->getContext($context, "recCampaign")), "id"))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["recCampaign"]) ? $context["recCampaign"] : $this->getContext($context, "recCampaign")), "ong"), "nomeFantasia"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/liga.jpg"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["recCampaign"]) ? $context["recCampaign"] : $this->getContext($context, "recCampaign")), "ong"), "nomeFantasia"), "html", null, true);
            echo "\"/></a>
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("search_campaign_show", array("campaignId" => $this->getAttribute((isset($context["recCampaign"]) ? $context["recCampaign"] : $this->getContext($context, "recCampaign")), "id"))), "html", null, true);
            echo "\" class=\"post-text\">
                        <h3>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["recCampaign"]) ? $context["recCampaign"] : $this->getContext($context, "recCampaign")), "ong"), "nomeFantasia"), "html", null, true);
            echo "</h3>
                        <p>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["recCampaign"]) ? $context["recCampaign"] : $this->getContext($context, "recCampaign")), "ong"), "description"), "html", null, true);
            echo "</p>
                    </a>
                    <span>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["recCampaign"]) ? $context["recCampaign"] : $this->getContext($context, "recCampaign")), "ong"), "city"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["recCampaign"]) ? $context["recCampaign"] : $this->getContext($context, "recCampaign")), "ong"), "state"), "html", null, true);
            echo "</span>
                    ";
            // line 44
            echo "                        ";
            // line 45
            echo "                    ";
            // line 46
            echo "                </article><!--post-door-->
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recCampaign'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </section><!--posts-home-->
        <div class=\"content-wrapper\">
            <aside class=\"social\">
                <div class=\"fb-like-box\" data-href=\"https://www.facebook.com/radiorockoficial\" data-width=\"240\" data-height=\"250\" data-colorscheme=\"light\" data-show-faces=\"true\" data-header=\"false\" data-stream=\"false\" data-show-border=\"false\"></div>
                <div class=\"side-blog\">
                    <h5>Blog</h5>
                    <article class=\"blog-post\">
                        <a href=\"\" class=\"blog-post-title\">Fotos de equipe Outubro de 2013</a>
                        <span>23/10/2013</span>
                        <a href=\"\" class=\"blog-post-text\"><p>Desde quinta passada (17/10/2013) o time do Catarse esteve reunido no QG do Rio para discutir rumos da plataforma. As atividade...</p></a>
                    </article>
                    <article class=\"blog-post\">
                        <a href=\"\" class=\"blog-post-title\">Fotos de equipe Outubro de 2013</a>
                        <span>23/10/2013</span>
                        <a href=\"\" class=\"blog-post-text\"><p>Desde quinta passada (17/10/2013) o time do Catarse esteve reunido no QG do Rio para discutir rumos da plataforma. As atividade...</p></a>
                    </article>
                    <article class=\"blog-post\">
                        <a href=\"\" class=\"blog-post-title\">Fotos de equipe Outubro de 2013</a>
                        <span>23/10/2013</span>
                        <a href=\"\" class=\"blog-post-text\"><p>Desde quinta passada (17/10/2013) o time do Catarse esteve reunido no QG do Rio para discutir rumos da plataforma. As atividade...</p></a>
                    </article>

                </div><!--side-blog-->
                <div class=\"twitter-box\">
                    <a class=\"twitter-timeline\" href=\"https://twitter.com/lzalcon\" data-widget-id=\"414114585885421569\">Tweets by @lzalcon</a>
                    ";
        // line 74
        echo "                </div><!--twitter-->
            </aside><!--social-->
            <section class=\"partner\">
                <div class=\"partner-wrapper\">
                    <h4>Parceiros</h4>
                    <a href=\"#\" title=\"Extra\"><img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/extra.jpg"), "html", null, true);
        echo "\" alt=\"Extra\"/></a>
                    <a href=\"#\" title=\"Extra\"><img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/extra.jpg"), "html", null, true);
        echo "\" alt=\"Extra\"/></a>
                    <a href=\"#\" title=\"Extra\"><img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/extra.jpg"), "html", null, true);
        echo "\" alt=\"Extra\"/></a>
                    <a href=\"#\" title=\"Extra\"><img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/extra.jpg"), "html", null, true);
        echo "\" alt=\"Extra\"/></a>
                    <a href=\"#\" title=\"Extra\"><img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/extra.jpg"), "html", null, true);
        echo "\" alt=\"Extra\"/></a>
                    <a href=\"#\" title=\"Extra\"><img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/extra.jpg"), "html", null, true);
        echo "\" alt=\"Extra\"/></a>
                    <a href=\"#\" title=\"Extra\"><img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/extra.jpg"), "html", null, true);
        echo "\" alt=\"Extra\"/></a>
                    <a href=\"#\" title=\"Extra\"><img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/extra.jpg"), "html", null, true);
        echo "\" alt=\"Extra\"/></a>
                    <a href=\"#\" title=\"Extra\"><img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/extra.jpg"), "html", null, true);
        echo "\" alt=\"Extra\"/></a>
                    <a href=\"#\" title=\"Extra\"><img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/extra.jpg"), "html", null, true);
        echo "\" alt=\"Extra\"/></a>
                </div><!--partner-wrapper-->
            </section><!--parter-->
            <section class=\"opinion\">
                <a href=\"#\" class=\"ver-todos\">Ver todos</a>
                <h4>Opinião de quem ajudou</h4>
                <div class=\"carousel-reviewers\">
                    <ul>
                        <li>
                            <article class=\"reviewer\">
                                <a href=\"\"><img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/angelo.png"), "html", null, true);
        echo "\" alt=\"Angelo Gianotto\"/></a>
                                <h5>1</h5>
                                <span>Doou para: <b>Liga Solidária</b></span>
                                <p>“A Liga Solidária, é uma organização social sem fins lucrativos que desenvolve programas socioeducativos e de cidadania que beneficiam mais de 3.200 pessoas. A Liga Solidária, é uma organização social sem fins lucrativos que desenvolve programas socioeducativos e de cidadania que beneficiam mais de 3.200 pessoas.”</p>
                            </article><!--reviewer-->
                        </li>
                        <li>F
                            <article class=\"reviewer\">
                                <a href=\"\"><img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/angelo.png"), "html", null, true);
        echo "\" alt=\"Angelo Gianotto\"/></a>
                                <h5>2</h5>
                                <span>Doou para: <b>Liga Solidária</b></span>
                                <p>“A Liga Solidária, é uma organização social sem fins lucrativos que desenvolve programas socioeducativos e de cidadania que beneficiam mais de 3.200 pessoas. A Liga Solidária, é uma organização social sem fins lucrativos que desenvolve programas socioeducativos e de cidadania que beneficiam mais de 3.200 pessoas.”</p>
                            </article><!--reviewer-->
                        </li>
                        <li>
                            <article class=\"reviewer\">
                                <a href=\"\"><img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/angelo.png"), "html", null, true);
        echo "\" alt=\"Angelo Gianotto\"/></a>
                                <h5>3</h5>
                                <span>Doou para: <b>Liga Solidária</b></span>
                                <p>“A Liga Solidária, é uma organização social sem fins lucrativos que desenvolve programas socioeducativos e de cidadania que beneficiam mais de 3.200 pessoas. A Liga Solidária, é uma organização social sem fins lucrativos que desenvolve programas socioeducativos e de cidadania que beneficiam mais de 3.200 pessoas.”</p>
                            </article><!--reviewer-->
                        </li>
                        <li>
                            <article class=\"reviewer\">
                                <a href=\"\"><img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/angelo.png"), "html", null, true);
        echo "\" alt=\"Angelo Gianotto\"/></a>
                                <h5>4</h5>
                                <span>Doou para: <b>Liga Solidária</b></span>
                                <p>“A Liga Solidária, é uma organização social sem fins lucrativos que desenvolve programas socioeducativos e de cidadania que beneficiam mais de 3.200 pessoas. A Liga Solidária, é uma organização social sem fins lucrativos que desenvolve programas socioeducativos e de cidadania que beneficiam mais de 3.200 pessoas.”</p>
                            </article><!--reviewer-->
                        </li>
                        <li>
                            <article class=\"reviewer\">
                                <a href=\"\"><img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/angelo.png"), "html", null, true);
        echo "\" alt=\"Angelo Gianotto\"/></a>
                                <h5>5</h5>
                                <span>Doou para: <b>Liga Solidária</b></span>
                                <p>“A Liga Solidária, é uma organização social sem fins lucrativos que desenvolve programas socioeducativos e de cidadania que beneficiam mais de 3.200 pessoas. A Liga Solidária, é uma organização social sem fins lucrativos que desenvolve programas socioeducativos e de cidadania que beneficiam mais de 3.200 pessoas.”</p>
                            </article><!--reviewer-->
                        </li>
                        <li>
                            <article class=\"reviewer\">
                                <a href=\"\"><img src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/angelo.png"), "html", null, true);
        echo "\" alt=\"Angelo Gianotto\"/></a>
                                <h5>6</h5>
                                <span>Doou para: <b>Liga Solidária</b></span>
                                <p>“A Liga Solidária, é uma organização social sem fins lucrativos que desenvolve programas socioeducativos e de cidadania que beneficiam mais de 3.200 pessoas. A Liga Solidária, é uma organização social sem fins lucrativos que desenvolve programas socioeducativos e de cidadania que beneficiam mais de 3.200 pessoas.”</p>
                            </article><!--reviewer-->
                        </li>
                    </ul>
                </div>
            </section><!--opinion-->
        </div><!--content-wrapper-->

    </main>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Search:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 138,  244 => 130,  233 => 122,  222 => 114,  211 => 106,  200 => 98,  187 => 88,  183 => 87,  179 => 86,  175 => 85,  171 => 84,  167 => 83,  163 => 82,  159 => 81,  155 => 80,  151 => 79,  144 => 74,  117 => 48,  110 => 46,  108 => 45,  106 => 44,  100 => 42,  95 => 40,  91 => 39,  87 => 38,  77 => 37,  74 => 36,  70 => 35,  59 => 27,  44 => 15,  31 => 4,  28 => 3,);
    }
}
