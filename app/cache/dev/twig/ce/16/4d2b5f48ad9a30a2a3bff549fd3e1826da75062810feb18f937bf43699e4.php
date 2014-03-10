<?php

/* FrontendBundle:Search:faq.html.twig */
class __TwigTemplate_ce164d2b5f48ad9a30a2a3bff549fd3e1826da75062810feb18f937bf43699e4 extends Twig_Template
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
        <div class=\"content-wrapper\">
            <h2 class=\"about-us-sub-title\">PERGUNTAS FREQUENTES</h2>
            <div class=\"about-social-funding-logo\"></div>
            <h2 class=\"about-us-title\">E se você pudesse mudar o mundo?</h2>

            <p class=\"about-us-paragraph\">
                1. A <b>Social Funding</b> é uma ONG?.
            </p>
            <p class=\"about-us-paragraph\">
                Não, a Social Funding é uma empresa que facilita o trabalho das ONGs.
            </p>
            <p class=\"about-us-paragraph\">
                2. Os produtos existentes no site são da <b>Social Funding</b>?.
            </p>
            <p class=\"about-us-paragraph\">
                A Social Funding é uma intermediadora entre os doadores e as ONGs, utilizando de parceiros para o fornecimento de produtos.
            </p>
        </div><!--content-wrapper-->
    </main>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Search:faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
