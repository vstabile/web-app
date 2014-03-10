<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_359aa6916c87a949fc90eda57bd203947914b0f4105a61c3a8d958cd9fa05d22 extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  26 => 3,  87 => 20,  55 => 13,  25 => 4,  21 => 2,  94 => 22,  92 => 21,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  24 => 3,  201 => 92,  199 => 91,  187 => 84,  183 => 82,  168 => 72,  166 => 71,  158 => 67,  151 => 63,  142 => 59,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  62 => 23,  51 => 12,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  88 => 6,  80 => 19,  78 => 40,  46 => 7,  44 => 10,  36 => 7,  32 => 12,  27 => 4,  22 => 2,  57 => 14,  54 => 21,  43 => 8,  40 => 8,  33 => 5,  30 => 3,  244 => 125,  237 => 121,  222 => 108,  220 => 107,  218 => 106,  216 => 105,  214 => 104,  212 => 103,  210 => 102,  208 => 101,  206 => 100,  204 => 99,  202 => 98,  200 => 97,  198 => 96,  196 => 90,  194 => 94,  192 => 93,  190 => 92,  188 => 91,  186 => 90,  184 => 89,  182 => 88,  180 => 87,  178 => 86,  176 => 85,  173 => 74,  171 => 73,  169 => 81,  167 => 80,  165 => 79,  163 => 70,  156 => 66,  145 => 69,  141 => 68,  138 => 57,  134 => 66,  125 => 60,  119 => 59,  115 => 43,  97 => 42,  93 => 9,  89 => 20,  85 => 19,  74 => 30,  70 => 29,  66 => 15,  60 => 25,  41 => 9,  37 => 8,  31 => 5,  28 => 3,);
    }
}
