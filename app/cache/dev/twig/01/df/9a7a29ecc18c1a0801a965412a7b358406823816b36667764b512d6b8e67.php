<?php

/* FOSFacebookBundle::loginButton.html.twig */
class __TwigTemplate_01df9a7a29ecc18c1a0801a965412a7b358406823816b36667764b512d6b8e67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"fb-login-button\" data-show-faces=\"";
        echo twig_escape_filter($this->env, (isset($context["showFaces"]) ? $context["showFaces"] : $this->getContext($context, "showFaces")), "html", null, true);
        echo "\" data-size=\"";
        echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")), "html", null, true);
        echo "\" data-scope=\"";
        echo twig_escape_filter($this->env, (isset($context["scope"]) ? $context["scope"] : $this->getContext($context, "scope")), "html", null, true);
        echo "\" data-autologoutlink=\"";
        echo twig_escape_filter($this->env, (isset($context["autologoutlink"]) ? $context["autologoutlink"] : $this->getContext($context, "autologoutlink")), "html", null, true);
        echo "\" data-width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo "\" data-max-rows=\"";
        echo twig_escape_filter($this->env, (isset($context["maxRows"]) ? $context["maxRows"] : $this->getContext($context, "maxRows")), "html", null, true);
        echo "\"  data-onlogin=\"";
        echo twig_escape_filter($this->env, (isset($context["onlogin"]) ? $context["onlogin"] : $this->getContext($context, "onlogin")), "html", null, true);
        echo "\">
  ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSFacebookBundle::loginButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 23,  55 => 17,  46 => 12,  33 => 7,  22 => 2,  19 => 1,  249 => 59,  244 => 58,  235 => 52,  231 => 51,  227 => 50,  219 => 45,  207 => 36,  203 => 35,  194 => 31,  190 => 29,  181 => 26,  178 => 25,  174 => 24,  171 => 23,  168 => 22,  163 => 8,  157 => 5,  126 => 106,  103 => 86,  99 => 85,  95 => 84,  69 => 60,  64 => 58,  61 => 57,  59 => 22,  41 => 9,  39 => 10,  30 => 5,  24 => 3,  38 => 7,  36 => 2,  32 => 4,  29 => 3,  102 => 45,  92 => 38,  88 => 37,  81 => 33,  74 => 28,  68 => 26,  66 => 59,  62 => 24,  53 => 18,  44 => 11,  35 => 8,  31 => 4,  28 => 3,);
    }
}
