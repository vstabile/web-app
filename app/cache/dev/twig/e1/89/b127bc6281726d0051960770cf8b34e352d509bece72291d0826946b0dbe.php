<?php

/* BackendBundle:Ong:listCampaigns.html.twig */
class __TwigTemplate_e189b127bc6281726d0051960770cf8b34e352d509bece72291d0826946b0dbe extends Twig_Template
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
                    <th>Data Inicial</th>
                    <th>Data Final</th>
                    <th>Aprovada</th>
                    <th>Ativa</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["campaignList"]) ? $context["campaignList"] : $this->getContext($context, "campaignList")));
        foreach ($context['_seq'] as $context["_key"] => $context["campaign"]) {
            // line 19
            echo "                <tr class=\"gradeX\">
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "ong"), "nomeFantasia"), "html", null, true);
            echo "</td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "initialDate"), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "finalDate"), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            if (($this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "isApproved") == 0)) {
                echo " Pendente ";
            } else {
                echo " Aprovada ";
            }
            echo "</td>
                    <td>";
            // line 24
            if (($this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "isActive") == 0)) {
                echo " Inativa ";
            } else {
                echo " Ativa ";
            }
            echo "</td>
                    <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_ong_activate_campaign", array("id" => $this->getAttribute((isset($context["campaign"]) ? $context["campaign"] : $this->getContext($context, "campaign")), "id"))), "html", null, true);
            echo "\">Aprovar Campanha</a></td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campaign'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Ong:listCampaigns.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 28,  82 => 25,  74 => 24,  66 => 23,  62 => 22,  58 => 21,  54 => 20,  51 => 19,  47 => 18,  31 => 4,  28 => 3,);
    }
}
