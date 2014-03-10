<?php

/* FOSFacebookBundle::initialize.html.twig */
class __TwigTemplate_749777ac87893d7ea7d621a91c29a5858830e28e7e58f5551d9d292787ebd6e4 extends Twig_Template
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
        echo "<div id=\"fb-root\"></div>
";
        // line 2
        if ((!(isset($context["async"]) ? $context["async"] : $this->getContext($context, "async")))) {
            // line 3
            echo "<script type=\"text/javascript\" src=\"http://connect.facebook.net/";
            echo twig_escape_filter($this->env, (isset($context["culture"]) ? $context["culture"] : $this->getContext($context, "culture")), "html", null, true);
            echo "/all.js\"></script>
";
        }
        // line 5
        echo "<script type=\"text/javascript\">
";
        // line 7
        if ((isset($context["async"]) ? $context["async"] : $this->getContext($context, "async"))) {
            // line 8
            echo "window.fbAsyncInit = function() {
";
        }
        // line 10
        echo "  FB.init(";
        echo twig_jsonencode_filter(array("appId" => (isset($context["appId"]) ? $context["appId"] : $this->getContext($context, "appId")), "xfbml" => (isset($context["xfbml"]) ? $context["xfbml"] : $this->getContext($context, "xfbml")), "oauth" => (isset($context["oauth"]) ? $context["oauth"] : $this->getContext($context, "oauth")), "status" => (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "cookie" => (isset($context["cookie"]) ? $context["cookie"] : $this->getContext($context, "cookie")), "logging" => (isset($context["logging"]) ? $context["logging"] : $this->getContext($context, "logging")), "channelUrl" => (isset($context["channelUrl"]) ? $context["channelUrl"] : $this->getContext($context, "channelUrl"))));
        echo ");
";
        // line 11
        if ((isset($context["async"]) ? $context["async"] : $this->getContext($context, "async"))) {
            // line 12
            echo "  ";
            echo (isset($context["fbAsyncInit"]) ? $context["fbAsyncInit"] : $this->getContext($context, "fbAsyncInit"));
            echo "
};

(function() {
  var e = document.createElement('script');
  e.src = document.location.protocol + ";
            // line 17
            echo twig_jsonencode_filter(sprintf("//connect.facebook.net/%s/all.js", (isset($context["culture"]) ? $context["culture"] : $this->getContext($context, "culture"))));
            echo ";
  e.async = true;
  document.getElementById('fb-root').appendChild(e);
}());
";
        }
        // line 23
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "FOSFacebookBundle::initialize.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 23,  55 => 17,  46 => 12,  33 => 7,  22 => 2,  19 => 1,  249 => 59,  244 => 58,  235 => 52,  231 => 51,  227 => 50,  219 => 45,  207 => 36,  203 => 35,  194 => 31,  190 => 29,  181 => 26,  178 => 25,  174 => 24,  171 => 23,  168 => 22,  163 => 8,  157 => 5,  126 => 106,  103 => 86,  99 => 85,  95 => 84,  69 => 60,  64 => 58,  61 => 57,  59 => 22,  41 => 9,  39 => 10,  30 => 5,  24 => 3,  38 => 7,  36 => 6,  32 => 4,  29 => 3,  102 => 45,  92 => 38,  88 => 37,  81 => 33,  74 => 28,  68 => 26,  66 => 59,  62 => 24,  53 => 18,  44 => 11,  35 => 8,  31 => 4,  28 => 3,);
    }
}
