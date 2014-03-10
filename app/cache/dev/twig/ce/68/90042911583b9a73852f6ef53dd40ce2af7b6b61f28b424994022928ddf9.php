<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_ce6890042911583b9a73852f6ef53dd40ce2af7b6b61f28b424994022928ddf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontendBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
        <div class=\"content-wrapper\" style=\"text-align: center;\">
            ";
        // line 6
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 7
        echo "        </div><!--content-wrapper-->
    </main>
";
    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  36 => 6,  32 => 4,  29 => 3,  102 => 45,  92 => 38,  88 => 37,  81 => 33,  74 => 28,  68 => 26,  66 => 25,  62 => 24,  53 => 18,  44 => 6,  35 => 6,  31 => 4,  28 => 3,);
    }
}
