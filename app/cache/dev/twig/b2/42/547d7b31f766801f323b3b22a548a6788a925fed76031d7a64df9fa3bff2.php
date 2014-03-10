<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b242547d7b31f766801f323b3b22a548a6788a925fed76031d7a64df9fa3bff2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  54 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  244 => 125,  237 => 121,  222 => 108,  220 => 107,  218 => 106,  216 => 105,  214 => 104,  212 => 103,  210 => 102,  208 => 101,  206 => 100,  204 => 99,  202 => 98,  200 => 97,  198 => 96,  196 => 95,  194 => 94,  192 => 93,  190 => 92,  188 => 91,  186 => 90,  184 => 89,  182 => 88,  180 => 87,  178 => 86,  176 => 85,  173 => 83,  171 => 82,  169 => 81,  167 => 80,  165 => 79,  163 => 78,  156 => 72,  145 => 69,  141 => 68,  138 => 67,  134 => 66,  125 => 60,  119 => 59,  115 => 58,  97 => 42,  93 => 40,  89 => 39,  85 => 38,  74 => 30,  70 => 29,  66 => 28,  60 => 25,  41 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
