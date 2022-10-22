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

/* front_home/index.html.twig */
class __TwigTemplate_e6093c4c11651990a80dc73938429b27 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front_home/index.html.twig", 1);
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

        echo "La librairie
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 7, $this->source); })()), "titre", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
\t";
        // line 8
        if ( !(null === (isset($context["carousels"]) || array_key_exists("carousels", $context) ? $context["carousels"] : (function () { throw new RuntimeError('Variable "carousels" does not exist.', 8, $this->source); })()))) {
            // line 9
            echo "\t\t<div id=\"carouselExampleCaptions\" class=\"carousel slide\" data-bs-ride=\"false\">
\t\t\t<div class=\"carousel-indicators\">
\t\t\t\t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["carousels"]) || array_key_exists("carousels", $context) ? $context["carousels"] : (function () { throw new RuntimeError('Variable "carousels" does not exist.', 11, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["carousel"]) {
                // line 12
                echo "\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 12), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 12) == 0)) {
                    echo " class=\"active\" ";
                }
                echo " aria-current=\"true\" aria-label=\"Slide ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 12), "html", null, true);
                echo "\"></button>
\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carousel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "\t\t    </div>
\t\t    <div class=\"carousel-inner\">
    \t\t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["carousels"]) || array_key_exists("carousels", $context) ? $context["carousels"] : (function () { throw new RuntimeError('Variable "carousels" does not exist.', 16, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["carousel"]) {
                // line 17
                echo "    \t\t\t\t<div class=\"carousel-item ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 17) == 0)) {
                    echo " active ";
                }
                echo "\">
    \t\t\t\t\t<img src=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/carousels/" . twig_get_attribute($this->env, $this->source, $context["carousel"], "imageName", [], "any", false, false, false, 18))), "html", null, true);
                echo "\" class=\"d-block w-100\" alt=\"...\">
    \t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
    \t\t\t\t\t\t";
                // line 20
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["carousel"], "title", [], "any", false, false, false, 20))) {
                    // line 21
                    echo "    \t\t\t\t\t\t\t<h5>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "title", [], "any", false, false, false, 21), "html", null, true);
                    echo "</h5>
    \t\t\t\t\t\t";
                }
                // line 23
                echo "    \t\t\t\t\t\t";
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["carousel"], "text", [], "any", false, false, false, 23))) {
                    // line 24
                    echo "    \t\t\t\t\t\t\t<div>";
                    echo twig_get_attribute($this->env, $this->source, $context["carousel"], "text", [], "any", false, false, false, 24);
                    echo "</div>
    \t\t\t\t\t\t";
                }
                // line 26
                echo "    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carousel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    \t\t</div>
    \t\t<div>
    \t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
    \t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    \t\t\t\t<span class=\"visually-hidden\">Previous</span>
    \t\t\t</button>
    \t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
    \t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    \t\t\t\t<span class=\"visually-hidden\">Next</span>
    \t\t\t</button>
  \t        </div>
\t\t</div>
\t";
        }
        // line 42
        echo "\t<div>";
        echo twig_get_attribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 42, $this->source); })()), "texte", [], "any", false, false, false, 42);
        echo "</div>
\t<h6>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 43, $this->source); })()), "signature", [], "any", false, false, false, 43), "html", null, true);
        echo "</h6>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front_home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 43,  221 => 42,  206 => 29,  190 => 26,  184 => 24,  181 => 23,  175 => 21,  173 => 20,  168 => 18,  161 => 17,  144 => 16,  140 => 14,  117 => 12,  100 => 11,  96 => 9,  94 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}La librairie
{% endblock %}

{% block body %}
\t<h1>{{ contenu.titre }}</h1>
\t{% if carousels is not null %}
\t\t<div id=\"carouselExampleCaptions\" class=\"carousel slide\" data-bs-ride=\"false\">
\t\t\t<div class=\"carousel-indicators\">
\t\t\t\t{% for carousel in carousels %}
\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"{{ loop.index0}}\" {% if loop.index0 == 0 %} class=\"active\" {% endif %} aria-current=\"true\" aria-label=\"Slide {{loop.index0}}\"></button>
\t\t\t\t{% endfor %}
\t\t    </div>
\t\t    <div class=\"carousel-inner\">
    \t\t\t{% for carousel in carousels %}
    \t\t\t\t<div class=\"carousel-item {% if loop.index0 == 0 %} active {% endif %}\">
    \t\t\t\t\t<img src=\"{{ asset('images/carousels/' ~ carousel.imageName) }}\" class=\"d-block w-100\" alt=\"...\">
    \t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
    \t\t\t\t\t\t{% if carousel.title is not null %}
    \t\t\t\t\t\t\t<h5>{{carousel.title}}</h5>
    \t\t\t\t\t\t{% endif %}
    \t\t\t\t\t\t{% if carousel.text is not null %}
    \t\t\t\t\t\t\t<div>{{carousel.text|raw}}</div>
    \t\t\t\t\t\t{% endif %}
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t{% endfor %}
    \t\t</div>
    \t\t<div>
    \t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
    \t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    \t\t\t\t<span class=\"visually-hidden\">Previous</span>
    \t\t\t</button>
    \t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
    \t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    \t\t\t\t<span class=\"visually-hidden\">Next</span>
    \t\t\t</button>
  \t        </div>
\t\t</div>
\t{% endif %}
\t<div>{{contenu.texte|raw}}</div>
\t<h6>{{contenu.signature}}</h6>
{% endblock %}
", "front_home/index.html.twig", "/Applications/MAMP/htdocs/symfony/symfony-librairie/templates/front_home/index.html.twig");
    }
}
