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

/* admin_carousel/index.html.twig */
class __TwigTemplate_4dff6648589d018071ab49dba582000b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_carousel/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_carousel/index.html.twig"));

        $this->parent = $this->loadTemplate("base-backend.html.twig", "admin_carousel/index.html.twig", 1);
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

        echo "Carousel index";
        
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
    <h1>Carousel index</h1>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_carousel_new");
        echo "\" class=\"btn btn-success\">Nouveau</a>
</div>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Title</th>
                ";
        // line 17
        echo "                <th>Tag</th>
                <th class=\"text-end\">actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carousels"]) || array_key_exists("carousels", $context) ? $context["carousels"] : (function () { throw new RuntimeError('Variable "carousels" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["carousel"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/carousels/" . twig_get_attribute($this->env, $this->source, $context["carousel"], "imageName", [], "any", false, false, false, 26))), "html", null, true);
            echo "\" data-lightbox=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "imageName", [], "any", false, false, false, 26), "html", null, true);
            echo "\">
                        <img src=\" ";
            // line 27
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/carousels/") . twig_get_attribute($this->env, $this->source, $context["carousel"], "imageName", [], "any", false, false, false, 27)), "html", null, true);
            echo "\" class=\"img-list\"></td>
                </a>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "title", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                ";
            // line 31
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "tag", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>\"
                <td class=\"text-end\">
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_carousel_show", ["id" => twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\"class=\"btn btn-dark\"><i class=\"align-middle\" data-feather=\"eye\"></i></a>
                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_carousel_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\"class=\"btn btn-success\"><i class=\"align-middle\" data-feather=\"pen-tool\"></i></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "            <tr>
                <td colspan=\"5\">Aucune entrée trouvée</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carousel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>

    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin_carousel/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 42,  157 => 38,  148 => 34,  144 => 33,  138 => 31,  134 => 29,  129 => 27,  123 => 26,  118 => 24,  115 => 23,  110 => 22,  103 => 17,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-backend.html.twig' %}

{% block title %}Carousel index{% endblock %}

{% block body %}
<div class=\"d-flex justify-content-between align-items-center\">
    <h1>Carousel index</h1>
    <a href=\"{{ path('app_admin_carousel_new') }}\" class=\"btn btn-success\">Nouveau</a>
</div>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Title</th>
                {# <th>Text</th> #}
                <th>Tag</th>
                <th class=\"text-end\">actions</th>
            </tr>
        </thead>
        <tbody>
        {% for carousel in carousels %}
            <tr>
                <td>{{ carousel.id }}</td>
                <td>
                    <a href=\"{{ asset('images/carousels/' ~ carousel.imageName)}}\" data-lightbox=\"{{carousel.imageName}}\">
                        <img src=\" {{asset ('images/carousels/') ~ carousel.imageName }}\" class=\"img-list\"></td>
                </a>
                <td>{{ carousel.title }}</td>
                {# <td>{{ carousel.text }}</td> #}
                <td>{{ carousel.tag }}</td>\"
                <td class=\"text-end\">
                    <a href=\"{{ path('app_admin_carousel_show', {'id': carousel.id}) }}\"class=\"btn btn-dark\"><i class=\"align-middle\" data-feather=\"eye\"></i></a>
                    <a href=\"{{ path('app_admin_carousel_edit', {'id': carousel.id}) }}\"class=\"btn btn-success\"><i class=\"align-middle\" data-feather=\"pen-tool\"></i></a>
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
", "admin_carousel/index.html.twig", "/Applications/MAMP/htdocs/symfony/symfony-librairie/templates/admin_carousel/index.html.twig");
    }
}
