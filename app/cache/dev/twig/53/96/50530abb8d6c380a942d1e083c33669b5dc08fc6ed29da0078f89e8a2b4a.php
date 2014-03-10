<?php

/* FrontendBundle:Search:aboutUs.html.twig */
class __TwigTemplate_539650530abb8d6c380a942d1e083c33669b5dc08fc6ed29da0078f89e8a2b4a extends Twig_Template
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
            <h2 class=\"about-us-sub-title\">QUEM SOMOS</h2>
            <div class=\"about-social-funding-logo\"></div>
            <h2 class=\"about-us-title\">E se você pudesse mudar o mundo?</h2>

            <p class=\"about-us-paragraph\">
                A <b>Social Funding</b> não é somente uma plataforma de <b>crowdfunding</b>, com foco em arrecadar <b>doações</b> para as diferentes <b>instituições sociais</b> existentes no Brasil, mas também, uma forma de você mudar o mundo ao seu redor.
            </p>
            <p class=\"about-us-paragraph\">
                Responsabilidade social faz parte do nosso cotidiano e em busca de contribuir com diferentes projetos sociais, criamos e somos uma plataforma de integração de Organizações não Governamentais que buscam da população o apoio e pessoas dispostas a praticar o voluntariado.
            </p>
            <p class=\"about-us-paragraph\">
                Nossa proposta é ajudar na arrecadação de alimentos, produtos de higiene, produtos de limpeza, móveis, roupas e utensílios diversos, entre outros produtos que são necessários para a sobrevivência de milhares de pessoas. Não queremos dinheiro!
            </p>
            <p class=\"about-us-paragraph\">
                Queremos que você ajude de forma colaborativa e convide mais pessoas para ajudar. Dessa forma as diferentes ONGs cadastradas receberão os produtos de forma prática e com a quantidade necessária, em qualquer lugar do país. E agora, já descobriu como você pode começar a mudar o mundo? Colabore! Contamos com
                você!
            </p>
        </div><!--content-wrapper-->
    </main>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Search:aboutUs.html.twig";
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
