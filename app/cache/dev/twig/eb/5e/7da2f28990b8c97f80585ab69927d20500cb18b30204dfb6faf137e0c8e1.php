<?php

/* FrontendBundle:Search:contact.html.twig */
class __TwigTemplate_eb5e7da2f28990b8c97f80585ab69927d20500cb18b30204dfb6faf137e0c8e1 extends Twig_Template
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
            <h2 class=\"about-us-sub-title\">Contato</h2>
            <div class=\"about-social-funding-logo\"></div>
            <h2 class=\"about-us-title\">Entre em contato e ajude-nos a mudar o mundo!</h2>

            <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("search_contact");
        echo "\" method=\"post\">
                <section class=\"box\">
                    <p>
                        <label for=\"\">Nome</label>
                        <input type=\"text\" class=\"field\" name=\"name\">
                    </p>
                    <p>
                        <label for=\"\">E-mail</label>
                        <input type=\"text\" class=\"field\" name=\"email\">
                    </p>
                    <p>
                        <label for=\"\">Mensagem</label>
                        <textarea class=\"field\" name=\"message\"></textarea>
                    </p>
                    <p>
                        <button type=\"submit\" class=\"btn-submit\"><span class=\"icon-heart\"></span>Enviar Mensagem</button>
                    </p>
                </section>
            </form>
        </div><!--content-wrapper-->
    </main>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Search:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  31 => 4,  28 => 3,);
    }
}
