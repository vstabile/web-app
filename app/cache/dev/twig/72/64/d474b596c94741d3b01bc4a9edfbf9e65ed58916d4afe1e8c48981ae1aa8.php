<?php

/* BackendBundle:Ong:index.html.twig */
class __TwigTemplate_7264d474b596c94741d3b01bc4a9edfbf9e65ed58916d4afe1e8c48981ae1aa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BackendBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackendBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Listar ONGs</h2>
    <div id=\"dt1\" class=\"no_margin\">
        <table class=\"display datatable\">
            <thead>
                <tr>
                    <th>ONG</th>
                    <th>Total de Campanhas</th>
                    <th>Nome do Resposável</th>
                    <th>E-mail</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allOngs"]) ? $context["allOngs"] : $this->getContext($context, "allOngs")));
        foreach ($context['_seq'] as $context["_key"] => $context["ong"]) {
            // line 18
            echo "                <tr class=\"gradeX\">
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ong"]) ? $context["ong"] : $this->getContext($context, "ong")), "nomeFantasia"), "html", null, true);
            echo "</td>
                    <td><a href=\"#\">";
            // line 20
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["ong"]) ? $context["ong"] : $this->getContext($context, "ong")), "campaigns")), "html", null, true);
            echo " Campanhas</a></td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ong"]) ? $context["ong"] : $this->getContext($context, "ong")), "nomeResponsavel"), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ong"]) ? $context["ong"] : $this->getContext($context, "ong")), "email"), "html", null, true);
            echo "</td>
                    <td>Editar</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ong'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Ong:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 26,  65 => 22,  61 => 21,  57 => 20,  53 => 19,  50 => 18,  46 => 17,  31 => 4,  28 => 3,);
    }
}
