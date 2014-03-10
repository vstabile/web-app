<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_65866497c228c54211854b7b96bb4e41d3a756645d203823e5e23ad90b1a42bb extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  38 => 13,  35 => 4,  26 => 5,  87 => 20,  55 => 13,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  24 => 4,  201 => 92,  199 => 91,  187 => 84,  183 => 82,  168 => 72,  166 => 71,  158 => 67,  151 => 63,  142 => 59,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  62 => 23,  51 => 15,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  88 => 6,  80 => 19,  78 => 40,  46 => 7,  44 => 10,  36 => 7,  32 => 12,  27 => 4,  22 => 2,  57 => 16,  54 => 21,  43 => 8,  40 => 8,  33 => 10,  30 => 3,  244 => 125,  237 => 121,  222 => 108,  220 => 107,  218 => 106,  216 => 105,  214 => 104,  212 => 103,  210 => 102,  208 => 101,  206 => 100,  204 => 99,  202 => 98,  200 => 97,  198 => 96,  196 => 90,  194 => 94,  192 => 93,  190 => 92,  188 => 91,  186 => 90,  184 => 89,  182 => 88,  180 => 87,  178 => 86,  176 => 85,  173 => 74,  171 => 73,  169 => 81,  167 => 80,  165 => 79,  163 => 70,  156 => 66,  145 => 69,  141 => 68,  138 => 57,  134 => 66,  125 => 60,  119 => 59,  115 => 43,  97 => 42,  93 => 9,  89 => 20,  85 => 19,  74 => 30,  70 => 29,  66 => 15,  60 => 25,  41 => 9,  37 => 8,  31 => 5,  28 => 3,);
    }
}
