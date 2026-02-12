<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* base_back.html.twig */
class __TwigTemplate_ac998e8d1fd9e8fbec87c4d603aa30c9 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

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

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    
    <!-- Bootstrap CSS (optionnel mais utile pour admin) -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    
    <!-- Font Awesome pour icônes -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
    
    <style>
        :root {
            --admin-dark: #0a0a14;
            --admin-sidebar: #1a1a2e;
            --admin-primary: #16213e;
            --admin-accent: #00f3ff;
            --admin-danger: #ff003c;
            --admin-success: #00ff88;
        }
        
        body {
            background: var(--admin-dark);
            color: #ffffff;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }
        
        /* Layout principal */
        .admin-wrapper {
            display: flex;
            min-height: 100vh;
        }
        
        /* Sidebar */
        .admin-sidebar {
            width: 250px;
            background: var(--admin-sidebar);
            border-right: 1px solid rgba(255, 255, 255, 0.1);
            position: fixed;
            height: 100vh;
            overflow-y: auto;
            transition: all 0.3s ease;
            z-index: 1000;
        }
        
        .sidebar-header {
            padding: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .admin-brand {
            color: var(--admin-accent);
            font-size: 1.5rem;
            font-weight: 700;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .admin-brand i {
            font-size: 1.8rem;
        }
        
        /* Navigation */
        .admin-nav {
            padding: 20px 0;
        }
        
        .nav-item {
            margin: 5px 15px;
        }
        
        .nav-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 15px;
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover {
            background: rgba(255, 255, 255, 0.1);
            color: #ffffff;
            transform: translateX(5px);
        }
        
        .nav-link.active {
            background: rgba(0, 243, 255, 0.1);
            color: var(--admin-accent);
            border-left: 3px solid var(--admin-accent);
        }
        
        .nav-link i {
            width: 20px;
            text-align: center;
        }
        
        /* Contenu principal */
        .admin-main {
            flex: 1;
            margin-left: 250px;
            padding: 20px;
            min-height: 100vh;
        }
        
        .admin-header {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        /* Cartes admin */
        .admin-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }
        
        .admin-card:hover {
            border-color: var(--admin-accent);
            box-shadow: 0 5px 20px rgba(0, 243, 255, 0.1);
        }
        
        /* Boutons admin */
        .btn-admin {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn-admin-primary {
            background: var(--admin-accent);
            color: #000000;
        }
        
        .btn-admin-primary:hover {
            background: #00e5ff;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 243, 255, 0.3);
        }
        
        .btn-admin-danger {
            background: var(--admin-danger);
            color: #ffffff;
        }
        
        .btn-admin-danger:hover {
            background: #ff2a5c;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 0, 60, 0.3);
        }
        
        .btn-admin-secondary {
            background: rgba(255, 255, 255, 0.1);
            color: #ffffff;
        }
        
        .btn-admin-secondary:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }
        
        /* Table admin */
        .admin-table {
            width: 100%;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 8px;
            overflow: hidden;
            border-collapse: collapse;
        }
        
        .admin-table th {
            background: rgba(0, 0, 0, 0.3);
            color: var(--admin-accent);
            padding: 15px;
            text-align: left;
            font-weight: 600;
            border-bottom: 2px solid rgba(255, 255, 255, 0.1);
        }
        
        .admin-table td {
            padding: 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }
        
        .admin-table tr:hover {
            background: rgba(255, 255, 255, 0.02);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .admin-sidebar {
                transform: translateX(-100%);
                width: 280px;
            }
            
            .admin-sidebar.active {
                transform: translateX(0);
            }
            
            .admin-main {
                margin-left: 0;
                padding: 15px;
            }
            
            .mobile-toggle {
                display: block !important;
            }
        }
        
        /* Toggle mobile */
        .mobile-toggle {
            display: none;
            position: fixed;
            top: 15px;
            left: 15px;
            z-index: 1001;
            background: var(--admin-accent);
            color: #000;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            font-size: 1.2rem;
            cursor: pointer;
        }
        
        /* Badges */
        .badge-admin {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .badge-planned {
            background: rgba(0, 243, 255, 0.2);
            color: var(--admin-accent);
        }
        
        .badge-ongoing {
            background: rgba(255, 193, 7, 0.2);
            color: #ffc107;
        }
        
        .badge-finished {
            background: rgba(0, 255, 136, 0.2);
            color: var(--admin-success);
        }
        
        .badge-cancelled {
            background: rgba(255, 0, 60, 0.2);
            color: var(--admin-danger);
        }
        
        /* Formulaires admin */
        .form-admin input,
        .form-admin select,
        .form-admin textarea {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #ffffff;
            border-radius: 6px;
            padding: 10px 15px;
            width: 100%;
        }
        
        .form-admin input:focus,
        .form-admin select:focus,
        .form-admin textarea:focus {
            outline: none;
            border-color: var(--admin-accent);
            box-shadow: 0 0 0 3px rgba(0, 243, 255, 0.1);
        }
    </style>
    
    ";
        // line 299
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 300
        yield "</head>
<body>
    <!-- Bouton mobile -->
    <button class=\"mobile-toggle\" id=\"sidebarToggle\">
        <i class=\"fas fa-bars\"></i>
    </button>
    
    <div class=\"admin-wrapper\">
        <!-- Sidebar -->
        <aside class=\"admin-sidebar\" id=\"adminSidebar\">
            <div class=\"sidebar-header\">
                <a href=\"";
        // line 311
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_dashboard");
        yield "\" class=\"admin-brand\">
                    <i class=\"fas fa-gamepad\"></i>
                    <span>ARENA ADMIN</span>
                </a>
            </div>
            
            <nav class=\"admin-nav\">
                <div class=\"nav-item\">
                    <a href=\"";
        // line 319
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_dashboard");
        yield "\" class=\"nav-link\">
                        <i class=\"fas fa-tachometer-alt\"></i>
                        <span>Dashboard</span>
                    </a>
                </div>
                
                <div class=\"nav-item\">
                    <a href=\"";
        // line 326
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_index");
        yield "\" class=\"nav-link\">
                        <i class=\"fas fa-trophy\"></i>
                        <span>Matchs</span>
                    </a>
                </div>
                
                <div class=\"nav-item\">
                    <a href=\"";
        // line 333
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_team_index");
        yield "\" class=\"nav-link\">
                        <i class=\"fas fa-users\"></i>
                        <span>Équipes</span>
                    </a>
                </div>

                <!-- Séparateur -->
                <div style=\"margin: 20px 15px; border-top: 1px solid rgba(255, 255, 255, 0.1);\"></div>
                
                <div class=\"nav-item\">
                    <a href=\"";
        // line 343
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_index");
        yield "\" class=\"nav-link\">
                        <i class=\"fas fa-external-link-alt\"></i>
                        <span>Voir le site</span>
                    </a>
                </div>
                
                <div class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\" style=\"color: #ff6b6b;\">
                        <i class=\"fas fa-sign-out-alt\"></i>
                        <span>Déconnexion</span>
                    </a>
                </div>
            </nav>
        </aside>
        
        <!-- Contenu principal -->
        <main class=\"admin-main\">
            ";
        // line 360
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 361
        yield "        </main>
    </div>
    
    <!-- Bootstrap JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
    
    <script>
        // Toggle sidebar mobile
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.getElementById('adminSidebar').classList.toggle('active');
        });
        
        // Fermer sidebar en cliquant à l'extérieur
        document.addEventListener('click', function(event) {
            const sidebar = document.getElementById('adminSidebar');
            const toggle = document.getElementById('sidebarToggle');
            
            if (window.innerWidth <= 768 && sidebar.classList.contains('active')) {
                if (!sidebar.contains(event.target) && !toggle.contains(event.target)) {
                    sidebar.classList.remove('active');
                }
            }
        });
        
        // Surligner la page active
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname;
            const navLinks = document.querySelectorAll('.nav-link');
            
            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                }
            });
        });
    </script>
    
    ";
        // line 398
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 399
        yield "</body>
</html>";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "🎮 ARENA - Admin Panel";
        yield from [];
    }

    // line 299
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 360
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 398
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base_back.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  507 => 398,  497 => 360,  487 => 299,  476 => 7,  470 => 399,  468 => 398,  429 => 361,  427 => 360,  407 => 343,  394 => 333,  384 => 326,  374 => 319,  363 => 311,  350 => 300,  348 => 299,  53 => 7,  46 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base_back.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\base_back.html.twig");
    }
}
