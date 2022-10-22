<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin_home/index.html.twig */
class __TwigTemplate_5569d2ae7882ee769e0ffeafd6500afb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base-backend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_home/index.html.twig"));

        $this->parent = $this->loadTemplate("base-backend.html.twig", "admin_home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Home index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"d-flex justify-content-between align-items-center\">
    <h1>Homes</h1>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_home_new");
        echo "\" class =\"btn btn-success\">Nouveau</a>
</div>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                ";
        // line 16
        echo "                <th>Signature</th>
                <th>IsActive</th>
                <th class=\"text-end\">actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["homes"]) || array_key_exists("homes", $context) ? $context["homes"] : (function () { throw new RuntimeError('Variable "homes" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["home"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "titre", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                ";
            // line 27
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "signature", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo ((twig_get_attribute($this->env, $this->source, $context["home"], "isActive", [], "any", false, false, false, 28)) ? ("Yes") : ("No"));
            echo "</td>
                <td class=\"text-end\">
                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_home_show", ["id" => twig_get_attribute($this->env, $this->source, $context["home"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" class=\"btn btn-dark\"><i class=\"align-middle\" data-feather=\"eye\"></i></a>
                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_home_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["home"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" class=\"btn btn-success\"><i class=\"align-middle\" data-feather=\"pen-tool\"></i>
                    </a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "            <tr>
                <td colspan=\"5\">Aucune entrée trouvée</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['home'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>

    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin_home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 40,  150 => 36,  140 => 31,  136 => 30,  131 => 28,  126 => 27,  122 => 25,  118 => 24,  115 => 23,  110 => 22,  102 => 16,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-backend.html.twig' %}

{% block title %}Home index{% endblock %}

{% block body %}
<div class=\"d-flex justify-content-between align-items-center\">
    <h1>Homes</h1>
    <a href=\"{{ path('app_admin_home_new') }}\" class =\"btn btn-success\">Nouveau</a>
</div>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                {# <th>Texte</th> #}
                <th>Signature</th>
                <th>IsActive</th>
                <th class=\"text-end\">actions</th>
            </tr>
        </thead>
        <tbody>
        {% for home in homes %}
            <tr>
                <td>{{ home.id }}</td>
                <td>{{ home.titre }}</td>
                {# <td>{{ home.texte }}</td> #}
                <td>{{ home.signature }}</td>
                <td>{{ home.isActive ? 'Yes' : 'No' }}</td>
                <td class=\"text-end\">
                    <a href=\"{{ path('app_admin_home_show', {'id': home.id}) }}\" class=\"btn btn-dark\"><i class=\"align-middle\" data-feather=\"eye\"></i></a>
                    <a href=\"{{ path('app_admin_home_edit', {'id': home.id}) }}\" class=\"btn btn-success\"><i class=\"align-middle\" data-feather=\"pen-tool\"></i>
                    </a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">Aucune entrée trouvée</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    
{% endblock %}
", "admin_home/index.html.twig", "/Applications/MAMP/htdocs/symfony/symfony-librairie/templates/admin_home/index.html.twig");
    }
}
