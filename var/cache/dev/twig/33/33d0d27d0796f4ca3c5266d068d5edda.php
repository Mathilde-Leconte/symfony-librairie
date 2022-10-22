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

/* base-backend.html.twig */
class __TwigTemplate_d4ab260472c062ea1fcf4bff43acb22d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-backend.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-backend.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>
            ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "        </title>
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/lightbox.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles-back.min.css"), "html", null, true);
        echo "\">
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    </head>
    <body>
        <div class=\"wrapper\">
            <nav id=\"sidebar\" class=\"sidebar js-sidebar\">
                <div class=\"sidebar-content js-simplebar\">
                    <a class=\"sidebar-brand\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        echo "\">
                        <span class=\"align-middle\">
                            Admin La Librairie                           
                        </span>
                    </a>
                    <ul class=\"sidebar-nav\">
                        <li class=\"sidebar-header\">Pages</li>
                        <li class=\"sidebar-item active\">
                            <a class=\"sidebar-link\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        echo "\">
                                <i class=\"align-middle\" data-feather=\"sliders\"></i>
                                <span class=\"align-middle\">Dashboard</span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_home_index");
        echo "\">
                                <i class=\"align-middle\" data-feather=\"home\"></i>
                                <span class=\"align-middle\">
                                    HOME
                                </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_carousel_index");
        echo "\">
                                <i class=\"align-middle\" data-feather=\"aperture\"></i>
                                <span class=\"align-middle\">
                                    Carousel
                                </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link\" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adim_book_index");
        echo "\">
                                <i class=\"align-middle\" data-feather=\"book-open\"></i>
                                <span class=\"align-middle\">
                                    Livres                                                          
                                </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_author_index");
        echo "\">
                                <i class=\"align-middle\" data-feather=\"feather\"></i>
                                <span class=\"align-middle\">
                                    Autheurs
                                </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_book_page_index");
        echo "\">
                                <i class=\"align-middle\" data-feather=\"book\"></i>
                                <span class=\"align-middle\">
                                    Couvertures
                                </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link\" href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_book_category_index");
        echo "\">
                                <i class=\"align-middle\" data-feather=\"book\"></i>
                                <span class=\"align-middle\">
                                    Couvertures
                                </span>
                            </a>
                        </li>                        

                        
                        <li class=\"sidebar-header\">
                            Tools & Components
                                                                                                
                                                                                
                                                    
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link\" href=\"ui-buttons.html\">
                                <i class=\"align-middle\" data-feather=\"square\"></i>
                                <span class=\"align-middle\">
                                    Buttons
                                                                                                        
                                                                    
                                </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link\" href=\"ui-forms.html\">
                                <i class=\"align-middle\" data-feather=\"check-square\"></i>
                                <span class=\"align-middle\">
                                    Forms
                                                                                                        
                                                                    
                                </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link\" href=\"ui-cards.html\">
                                <i class=\"align-middle\" data-feather=\"grid\"></i>
                                <span class=\"align-middle\">
                                    Cards
                                                                                                        
                                                                    
                                </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link\" href=\"ui-typography.html\">
                                <i class=\"align-middle\" data-feather=\"align-left\"></i>
                                <span class=\"align-middle\">
                                    Typography
                                                                                                        
                                                                    
                                </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link\" href=\"icons-feather.html\">
                                <i class=\"align-middle\" data-feather=\"coffee\"></i>
                                <span class=\"align-middle\">
                                    Icons
                                                                                                        
                                                                    
                                </span>
                            </a>
                        </li>
                        <li class=\"sidebar-header\">
                            Plugins & Addons
                                                                                                
                                                                                
                                                    
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link\" href=\"charts-chartjs.html\">
                                <i class=\"align-middle\" data-feather=\"bar-chart-2\"></i>
                                <span class=\"align-middle\">
                                    Charts
                                                                                                        
                                                                    
                                </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link\" href=\"maps-google.html\">
                                <i class=\"align-middle\" data-feather=\"map\"></i>
                                <span class=\"align-middle\">
                                    Maps
                                                                                                        
                                                                    
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class=\"sidebar-cta\">
                        <div class=\"sidebar-cta-content\">
                            <strong class=\"d-inline-block mb-2\">
                                Upgrade to Pro
                                                                                            
                                                            
                            </strong>
                            <div class=\"mb-3 text-sm\">
                                Are you looking for more components? Check out our premium version.
                                                                                                                
                                                                                            
                                                            
                            </div>
                            <div class=\"d-grid\">
                                <a href=\"upgrade-to-pro.html\" class=\"btn btn-primary\">
                                    Upgrade to Pro
                                                                                                        
                                                                    
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class=\"main\">
                <nav class=\"navbar navbar-expand navbar-light navbar-bg\">
                    <a class=\"sidebar-toggle js-sidebar-toggle\">
                        <i class=\"hamburger align-self-center\"></i>
                    </a>
                    <div class=\"navbar-collapse collapse\">
                        <ul class=\"navbar-nav navbar-align\">
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-icon dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" data-bs-toggle=\"dropdown\">
                                    <div class=\"position-relative\">
                                        <i class=\"align-middle\" data-feather=\"bell\"></i>
                                        <span class=\"indicator\">
                                            4
                                                                                    
                                        </span>
                                    </div>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end py-0\" aria-labelledby=\"alertsDropdown\">
                                    <div class=\"dropdown-menu-header\">
                                        4 New Notifications
                                                                                                            
                                                                            
                                    </div>
                                    <div class=\"list-group\">
                                        <a href=\"#\" class=\"list-group-item\">
                                            <div class=\"row g-0 align-items-center\">
                                                <div class=\"col-2\">
                                                    <i class=\"text-danger\" data-feather=\"alert-circle\"></i>
                                                </div>
                                                <div class=\"col-10\">
                                                    <div class=\"text-dark\">
                                                        Update completed
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        Restart server 12 to complete the update.
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        30m ago
                                                                                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"list-group-item\">
                                            <div class=\"row g-0 align-items-center\">
                                                <div class=\"col-2\">
                                                    <i class=\"text-warning\" data-feather=\"bell\"></i>
                                                </div>
                                                <div class=\"col-10\">
                                                    <div class=\"text-dark\">
                                                        Lorem ipsum
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        Aliquam ex eros, imperdiet vulputate hendrerit et.
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        2h ago
                                                                                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"list-group-item\">
                                            <div class=\"row g-0 align-items-center\">
                                                <div class=\"col-2\">
                                                    <i class=\"text-primary\" data-feather=\"home\"></i>
                                                </div>
                                                <div class=\"col-10\">
                                                    <div class=\"text-dark\">
                                                        Login from 192.186.1.8
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        5h ago
                                                                                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"list-group-item\">
                                            <div class=\"row g-0 align-items-center\">
                                                <div class=\"col-2\">
                                                    <i class=\"text-success\" data-feather=\"user-plus\"></i>
                                                </div>
                                                <div class=\"col-10\">
                                                    <div class=\"text-dark\">
                                                        New connection
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        Christina accepted your request.
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        14h ago
                                                                                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=\"dropdown-menu-footer\">
                                        <a href=\"#\" class=\"text-muted\">
                                            Show all notifications
                                                                                    
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-icon dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" data-bs-toggle=\"dropdown\">
                                    <div class=\"position-relative\">
                                        <i class=\"align-middle\" data-feather=\"message-square\"></i>
                                    </div>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end py-0\" aria-labelledby=\"messagesDropdown\">
                                    <div class=\"dropdown-menu-header\">
                                        <div class=\"position-relative\">
                                            4 New Messages
                                                                                                                        
                                                                                    
                                        </div>
                                    </div>
                                    <div class=\"list-group\">
                                        <a href=\"#\" class=\"list-group-item\">
                                            <div class=\"row g-0 align-items-center\">
                                                <div class=\"col-2\">
                                                    <img src=\"img/avatars/avatar-5.jpg\" class=\"avatar img-fluid rounded-circle\" alt=\"Vanessa Tucker\">
                                                </div>
                                                <div class=\"col-10 ps-2\">
                                                    <div class=\"text-dark\">
                                                        Vanessa Tucker
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        Nam pretium turpis et arcu. Duis arcu tortor.
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        15m ago
                                                                                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"list-group-item\">
                                            <div class=\"row g-0 align-items-center\">
                                                <div class=\"col-2\">
                                                    <img src=\"img/avatars/avatar-2.jpg\" class=\"avatar img-fluid rounded-circle\" alt=\"William Harris\">
                                                </div>
                                                <div class=\"col-10 ps-2\">
                                                    <div class=\"text-dark\">
                                                        William Harris
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        Curabitur ligula sapien euismod vitae.
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        2h ago
                                                                                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"list-group-item\">
                                            <div class=\"row g-0 align-items-center\">
                                                <div class=\"col-2\">
                                                    <img src=\"img/avatars/avatar-4.jpg\" class=\"avatar img-fluid rounded-circle\" alt=\"Christina Mason\">
                                                </div>
                                                <div class=\"col-10 ps-2\">
                                                    <div class=\"text-dark\">
                                                        Christina Mason
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        Pellentesque auctor neque nec urna.
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        4h ago
                                                                                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"list-group-item\">
                                            <div class=\"row g-0 align-items-center\">
                                                <div class=\"col-2\">
                                                    <img src=\"img/avatars/avatar-3.jpg\" class=\"avatar img-fluid rounded-circle\" alt=\"Sharon Lessman\">
                                                </div>
                                                <div class=\"col-10 ps-2\">
                                                    <div class=\"text-dark\">
                                                        Sharon Lessman
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        Aenean tellus metus, bibendum sed, posuere ac, mattis non.
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        5h ago
                                                                                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=\"dropdown-menu-footer\">
                                        <a href=\"#\" class=\"text-muted\">
                                            Show all messages
                                                                                    
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-icon dropdown-toggle d-inline-block d-sm-none\" href=\"#\" data-bs-toggle=\"dropdown\">
                                    <i class=\"align-middle\" data-feather=\"settings\"></i>
                                </a>
                                <a class=\"nav-link dropdown-toggle d-none d-sm-inline-block\" href=\"#\" data-bs-toggle=\"dropdown\">
                                    <img src=\"img/avatars/avatar.jpg\" class=\"avatar img-fluid rounded me-1\" alt=\"Charles Hall\" />
                                    <span class=\"text-dark\">
                                        Charles Hall
                                                                            
                                    </span>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-end\">
                                    <a class=\"dropdown-item\" href=\"pages-profile.html\">
                                        <i class=\"align-middle me-1\" data-feather=\"user\"></i>
                                        Profile
                                                                            
                                    </a>
                                    <a class=\"dropdown-item\" href=\"#\">
                                        <i class=\"align-middle me-1\" data-feather=\"pie-chart\"></i>
                                        Analytics
                                                                            
                                    </a>
                                    <div class=\"dropdown-divider\"></div>
                                    <a class=\"dropdown-item\" href=\"index.html\">
                                        <i class=\"align-middle me-1\" data-feather=\"settings\"></i>
                                        Settings & Privacy
                                                                            
                                    </a>
                                    <a class=\"dropdown-item\" href=\"#\">
                                        <i class=\"align-middle me-1\" data-feather=\"help-circle\"></i>
                                        Help Center
                                                                            
                                    </a>
                                    <div class=\"dropdown-divider\"></div>
                                    <a class=\"dropdown-item\" href=\"#\">
                                        Log out
                                                                            
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class=\"content\">
                ";
        // line 454
        $this->displayBlock('body', $context, $blocks);
        // line 455
        echo "                </div>
                <footer class=\"footer\">
                    <div class=\"container-fluid\">
                        <div class=\"row text-muted\">
                            <div class=\"col-6 text-start\">
                                <p class=\"mb-0\">
                                    <a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">
                                        <strong>
                                            AdminKit
                                        </strong>
                                    </a>
                                    &copy;
                                    \t\t\t\t\t\t\t
                                </p>
                            </div>
                            <div class=\"col-6 text-end\">
                                <ul class=\"list-inline\">
                                    <li class=\"list-inline-item\">
                                        <a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">
                                            Support
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">
                                            Help Center
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">
                                            Privacy
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">
                                            Terms
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js\"></script>
        <script src=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 501
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/lightbox.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 503
        $this->displayBlock('javascripts', $context, $blocks);
        // line 504
        echo "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 454
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 503
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base-backend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  668 => 503,  650 => 454,  632 => 13,  613 => 8,  601 => 504,  599 => 503,  594 => 501,  590 => 500,  543 => 455,  541 => 454,  157 => 73,  146 => 65,  135 => 57,  124 => 49,  113 => 41,  102 => 33,  93 => 27,  82 => 19,  75 => 14,  73 => 13,  69 => 12,  65 => 11,  61 => 10,  58 => 9,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>
            {% block title %}Admin{% endblock %}
        </title>
        <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/lightbox.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/styles-back.min.css') }}\">
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        <div class=\"wrapper\">
            <nav id=\"sidebar\" class=\"sidebar js-sidebar\">
                <div class=\"sidebar-content js-simplebar\">
                    <a class=\"sidebar-brand\" href=\"{{ path('app_admin_dashboard') }}\">
                        <span class=\"align-middle\">
                            Admin La Librairie                           
                        </span>
                    </a>
                    <ul class=\"sidebar-nav\">
                        <li class=\"sidebar-header\">Pages</li>
                        <li class=\"sidebar-item active\">
                            <a class=\"sidebar-link\" href=\"{{ path('app_admin_dashboard') }}\">
                                <i class=\"align-middle\" data-feather=\"sliders\"></i>
                                <span class=\"align-middle\">Dashboard</span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link\" href=\"{{ path('app_admin_home_index') }}\">
                                <i class=\"align-middle\" data-feather=\"home\"></i>
                                <span class=\"align-middle\">
                                    HOME
                                </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link\" href=\"{{path('app_admin_carousel_index') }}\">
                                <i class=\"align-middle\" data-feather=\"aperture\"></i>
                                <span class=\"align-middle\">
                                    Carousel
                                </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link\" href=\"{{path ('app_adim_book_index') }}\">
                                <i class=\"align-middle\" data-feather=\"book-open\"></i>
                                <span class=\"align-middle\">
                                    Livres                                                          
                                </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link\" href=\"{{ path ('app_admin_author_index') }}\">
                                <i class=\"align-middle\" data-feather=\"feather\"></i>
                                <span class=\"align-middle\">
                                    Autheurs
                                </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link\" href=\"{{path ('app_admin_book_page_index') }}\">
                                <i class=\"align-middle\" data-feather=\"book\"></i>
                                <span class=\"align-middle\">
                                    Couvertures
                                </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link\" href=\"{{path ('app_admin_book_category_index') }}\">
                                <i class=\"align-middle\" data-feather=\"book\"></i>
                                <span class=\"align-middle\">
                                    Couvertures
                                </span>
                            </a>
                        </li>                        

                        
                        <li class=\"sidebar-header\">
                            Tools & Components
                                                                                                
                                                                                
                                                    
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link\" href=\"ui-buttons.html\">
                                <i class=\"align-middle\" data-feather=\"square\"></i>
                                <span class=\"align-middle\">
                                    Buttons
                                                                                                        
                                                                    
                                </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link\" href=\"ui-forms.html\">
                                <i class=\"align-middle\" data-feather=\"check-square\"></i>
                                <span class=\"align-middle\">
                                    Forms
                                                                                                        
                                                                    
                                </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link\" href=\"ui-cards.html\">
                                <i class=\"align-middle\" data-feather=\"grid\"></i>
                                <span class=\"align-middle\">
                                    Cards
                                                                                                        
                                                                    
                                </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link\" href=\"ui-typography.html\">
                                <i class=\"align-middle\" data-feather=\"align-left\"></i>
                                <span class=\"align-middle\">
                                    Typography
                                                                                                        
                                                                    
                                </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link\" href=\"icons-feather.html\">
                                <i class=\"align-middle\" data-feather=\"coffee\"></i>
                                <span class=\"align-middle\">
                                    Icons
                                                                                                        
                                                                    
                                </span>
                            </a>
                        </li>
                        <li class=\"sidebar-header\">
                            Plugins & Addons
                                                                                                
                                                                                
                                                    
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link\" href=\"charts-chartjs.html\">
                                <i class=\"align-middle\" data-feather=\"bar-chart-2\"></i>
                                <span class=\"align-middle\">
                                    Charts
                                                                                                        
                                                                    
                                </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link\" href=\"maps-google.html\">
                                <i class=\"align-middle\" data-feather=\"map\"></i>
                                <span class=\"align-middle\">
                                    Maps
                                                                                                        
                                                                    
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class=\"sidebar-cta\">
                        <div class=\"sidebar-cta-content\">
                            <strong class=\"d-inline-block mb-2\">
                                Upgrade to Pro
                                                                                            
                                                            
                            </strong>
                            <div class=\"mb-3 text-sm\">
                                Are you looking for more components? Check out our premium version.
                                                                                                                
                                                                                            
                                                            
                            </div>
                            <div class=\"d-grid\">
                                <a href=\"upgrade-to-pro.html\" class=\"btn btn-primary\">
                                    Upgrade to Pro
                                                                                                        
                                                                    
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class=\"main\">
                <nav class=\"navbar navbar-expand navbar-light navbar-bg\">
                    <a class=\"sidebar-toggle js-sidebar-toggle\">
                        <i class=\"hamburger align-self-center\"></i>
                    </a>
                    <div class=\"navbar-collapse collapse\">
                        <ul class=\"navbar-nav navbar-align\">
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-icon dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" data-bs-toggle=\"dropdown\">
                                    <div class=\"position-relative\">
                                        <i class=\"align-middle\" data-feather=\"bell\"></i>
                                        <span class=\"indicator\">
                                            4
                                                                                    
                                        </span>
                                    </div>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end py-0\" aria-labelledby=\"alertsDropdown\">
                                    <div class=\"dropdown-menu-header\">
                                        4 New Notifications
                                                                                                            
                                                                            
                                    </div>
                                    <div class=\"list-group\">
                                        <a href=\"#\" class=\"list-group-item\">
                                            <div class=\"row g-0 align-items-center\">
                                                <div class=\"col-2\">
                                                    <i class=\"text-danger\" data-feather=\"alert-circle\"></i>
                                                </div>
                                                <div class=\"col-10\">
                                                    <div class=\"text-dark\">
                                                        Update completed
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        Restart server 12 to complete the update.
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        30m ago
                                                                                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"list-group-item\">
                                            <div class=\"row g-0 align-items-center\">
                                                <div class=\"col-2\">
                                                    <i class=\"text-warning\" data-feather=\"bell\"></i>
                                                </div>
                                                <div class=\"col-10\">
                                                    <div class=\"text-dark\">
                                                        Lorem ipsum
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        Aliquam ex eros, imperdiet vulputate hendrerit et.
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        2h ago
                                                                                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"list-group-item\">
                                            <div class=\"row g-0 align-items-center\">
                                                <div class=\"col-2\">
                                                    <i class=\"text-primary\" data-feather=\"home\"></i>
                                                </div>
                                                <div class=\"col-10\">
                                                    <div class=\"text-dark\">
                                                        Login from 192.186.1.8
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        5h ago
                                                                                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"list-group-item\">
                                            <div class=\"row g-0 align-items-center\">
                                                <div class=\"col-2\">
                                                    <i class=\"text-success\" data-feather=\"user-plus\"></i>
                                                </div>
                                                <div class=\"col-10\">
                                                    <div class=\"text-dark\">
                                                        New connection
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        Christina accepted your request.
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        14h ago
                                                                                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=\"dropdown-menu-footer\">
                                        <a href=\"#\" class=\"text-muted\">
                                            Show all notifications
                                                                                    
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-icon dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" data-bs-toggle=\"dropdown\">
                                    <div class=\"position-relative\">
                                        <i class=\"align-middle\" data-feather=\"message-square\"></i>
                                    </div>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end py-0\" aria-labelledby=\"messagesDropdown\">
                                    <div class=\"dropdown-menu-header\">
                                        <div class=\"position-relative\">
                                            4 New Messages
                                                                                                                        
                                                                                    
                                        </div>
                                    </div>
                                    <div class=\"list-group\">
                                        <a href=\"#\" class=\"list-group-item\">
                                            <div class=\"row g-0 align-items-center\">
                                                <div class=\"col-2\">
                                                    <img src=\"img/avatars/avatar-5.jpg\" class=\"avatar img-fluid rounded-circle\" alt=\"Vanessa Tucker\">
                                                </div>
                                                <div class=\"col-10 ps-2\">
                                                    <div class=\"text-dark\">
                                                        Vanessa Tucker
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        Nam pretium turpis et arcu. Duis arcu tortor.
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        15m ago
                                                                                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"list-group-item\">
                                            <div class=\"row g-0 align-items-center\">
                                                <div class=\"col-2\">
                                                    <img src=\"img/avatars/avatar-2.jpg\" class=\"avatar img-fluid rounded-circle\" alt=\"William Harris\">
                                                </div>
                                                <div class=\"col-10 ps-2\">
                                                    <div class=\"text-dark\">
                                                        William Harris
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        Curabitur ligula sapien euismod vitae.
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        2h ago
                                                                                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"list-group-item\">
                                            <div class=\"row g-0 align-items-center\">
                                                <div class=\"col-2\">
                                                    <img src=\"img/avatars/avatar-4.jpg\" class=\"avatar img-fluid rounded-circle\" alt=\"Christina Mason\">
                                                </div>
                                                <div class=\"col-10 ps-2\">
                                                    <div class=\"text-dark\">
                                                        Christina Mason
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        Pellentesque auctor neque nec urna.
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        4h ago
                                                                                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"list-group-item\">
                                            <div class=\"row g-0 align-items-center\">
                                                <div class=\"col-2\">
                                                    <img src=\"img/avatars/avatar-3.jpg\" class=\"avatar img-fluid rounded-circle\" alt=\"Sharon Lessman\">
                                                </div>
                                                <div class=\"col-10 ps-2\">
                                                    <div class=\"text-dark\">
                                                        Sharon Lessman
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        Aenean tellus metus, bibendum sed, posuere ac, mattis non.
                                                                                                            
                                                    </div>
                                                    <div class=\"text-muted small mt-1\">
                                                        5h ago
                                                                                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=\"dropdown-menu-footer\">
                                        <a href=\"#\" class=\"text-muted\">
                                            Show all messages
                                                                                    
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-icon dropdown-toggle d-inline-block d-sm-none\" href=\"#\" data-bs-toggle=\"dropdown\">
                                    <i class=\"align-middle\" data-feather=\"settings\"></i>
                                </a>
                                <a class=\"nav-link dropdown-toggle d-none d-sm-inline-block\" href=\"#\" data-bs-toggle=\"dropdown\">
                                    <img src=\"img/avatars/avatar.jpg\" class=\"avatar img-fluid rounded me-1\" alt=\"Charles Hall\" />
                                    <span class=\"text-dark\">
                                        Charles Hall
                                                                            
                                    </span>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-end\">
                                    <a class=\"dropdown-item\" href=\"pages-profile.html\">
                                        <i class=\"align-middle me-1\" data-feather=\"user\"></i>
                                        Profile
                                                                            
                                    </a>
                                    <a class=\"dropdown-item\" href=\"#\">
                                        <i class=\"align-middle me-1\" data-feather=\"pie-chart\"></i>
                                        Analytics
                                                                            
                                    </a>
                                    <div class=\"dropdown-divider\"></div>
                                    <a class=\"dropdown-item\" href=\"index.html\">
                                        <i class=\"align-middle me-1\" data-feather=\"settings\"></i>
                                        Settings & Privacy
                                                                            
                                    </a>
                                    <a class=\"dropdown-item\" href=\"#\">
                                        <i class=\"align-middle me-1\" data-feather=\"help-circle\"></i>
                                        Help Center
                                                                            
                                    </a>
                                    <div class=\"dropdown-divider\"></div>
                                    <a class=\"dropdown-item\" href=\"#\">
                                        Log out
                                                                            
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class=\"content\">
                {% block body %}{% endblock %}
                </div>
                <footer class=\"footer\">
                    <div class=\"container-fluid\">
                        <div class=\"row text-muted\">
                            <div class=\"col-6 text-start\">
                                <p class=\"mb-0\">
                                    <a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">
                                        <strong>
                                            AdminKit
                                        </strong>
                                    </a>
                                    &copy;
                                    \t\t\t\t\t\t\t
                                </p>
                            </div>
                            <div class=\"col-6 text-end\">
                                <ul class=\"list-inline\">
                                    <li class=\"list-inline-item\">
                                        <a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">
                                            Support
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">
                                            Help Center
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">
                                            Privacy
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">
                                            Terms
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js\"></script>
        <script src=\"{{ asset('js/app.js') }}\"></script>
        <script src=\"{{ asset('js/lightbox.min.js') }}\"></script>

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base-backend.html.twig", "/Applications/MAMP/htdocs/symfony/symfony-librairie/templates/base-backend.html.twig");
    }
}
