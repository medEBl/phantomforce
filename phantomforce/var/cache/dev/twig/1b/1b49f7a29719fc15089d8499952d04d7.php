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

/* admin_base.html.twig */
class __TwigTemplate_663f60508d5209ef6dc0cb2335a97ead extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2290%22>🛡️</text></svg>\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css\">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap');
            
            :root {
                --pf-red: #ff3b3b;
                --pf-red-dark: #b30000;
                --pf-sidebar-bg: #000000;
                --pf-main-bg: #050505;
                --pf-card-bg: #0a0a0a;
                --pf-border: #1a1a1a;
                --pf-text: #ffffff;
                --pf-text-muted: #888888;
            }

            body { font-family: 'Inter', sans-serif; background-color: var(--pf-main-bg); color: var(--pf-text); }
            
            .sidebar { 
                min-height: 100vh; 
                background: var(--pf-sidebar-bg); 
                padding: 20px 0; 
                position: fixed;
                width: 250px;
                border-right: 1px solid var(--pf-border);
            }
            .sidebar-brand {
                padding: 0 25px 30px;
                color: var(--pf-red);
                font-weight: 800;
                font-size: 1.2rem;
                text-transform: uppercase;
                display: block;
                text-decoration: none;
            }
            .sidebar a { 
                color: var(--pf-text-muted); 
                text-decoration: none; 
                padding: 12px 25px; 
                display: flex; 
                align-items: center;
                transition: all 0.3s;
                font-weight: 500;
                font-size: 0.95rem;
            }
            .sidebar a i { margin-right: 15px; font-size: 1.1rem; }
            .sidebar a:hover, .sidebar a.active { 
                color: var(--pf-text); 
                background: linear-gradient(90deg, rgba(255, 59, 59, 0.1) 0%, transparent 100%);
                border-left: 4px solid var(--pf-red);
            }
            .sidebar a.active { color: white; background: var(--pf-red); border-left: none; border-radius: 4px; margin: 0 10px; }

            .main-content { margin-left: 250px; padding: 40px; }
            
            .pf-card {
                background: var(--pf-card-bg);
                border: 1px solid var(--pf-border);
                border-radius: 12px;
                padding: 25px;
                margin-bottom: 25px;
            }
            
            .table { color: var(--pf-text); }
            .table thead th { color: var(--pf-text-muted); border-bottom: 2px solid var(--pf-border); text-transform: uppercase; font-size: 0.8rem; }
            .table tbody td { border-bottom: 1px solid var(--pf-border); padding: 15px 10px; vertical-align: middle; }
            
            .btn-pf-red {
                background: var(--pf-red);
                color: white;
                border: none;
                padding: 8px 20px;
                border-radius: 6px;
                font-weight: 600;
            }
            .btn-pf-red:hover { background: var(--pf-red-dark); color: white; }

            .top-bar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 30px;
            }
            .search-bar {
                background: var(--pf-card-bg);
                border: 1px solid var(--pf-border);
                border-radius: 8px;
                padding: 8px 15px;
                width: 400px;
                color: white;
            }
            .search-bar input {
                background: transparent;
                border: none;
                color: white;
                width: 100%;
                outline: none;
            }
        </style>
        ";
        // line 106
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 107
        yield "    </head>
    <body>
        <div class=\"sidebar\">
            <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_index");
        yield "\" class=\"sidebar-brand\">PHANTOM FORCE <br><small style=\"font-size: 0.6rem; color: #555;\">Admin Desktop</small></a>
            
            <a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournaments");
        yield "\" class=\"";
        if (CoreExtension::inFilter("tournament", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "request", [], "any", false, false, false, 112), "pathinfo", [], "any", false, false, false, 112))) {
            yield "active";
        }
        yield "\">
                <i class=\"bi bi-grid\"></i> Dashboard
            </a>
            <a href=\"#\">
                <i class=\"bi bi-people\"></i> Joueurs
            </a>
            <a href=\"#\">
                <i class=\"bi bi-shield\"></i> Équipes
            </a>
            <a href=\"#\">
                <i class=\"bi bi-calendar\"></i> Matchs
            </a>
            <a href=\"#\">
                <i class=\"bi bi-headset\"></i> Coaching
            </a>
            <a href=\"";
        // line 127
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournaments");
        yield "\" class=\"";
        if (CoreExtension::inFilter("tournament", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "request", [], "any", false, false, false, 127), "pathinfo", [], "any", false, false, false, 127))) {
            yield "active";
        }
        yield "\">
                <i class=\"bi bi-trophy\"></i> Tournois
            </a>
            <a href=\"#\">
                <i class=\"bi bi-award\"></i> Achievements
            </a>
            <hr style=\"border-color: var(--pf-border);\">
            <a href=\"";
        // line 134
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_index");
        yield "\">
                <i class=\"bi bi-box-arrow-left\"></i> Déconnexion
            </a>
        </div>

        <main class=\"main-content\">
            <div class=\"top-bar\">
                <div class=\"search-bar\">
                    <i class=\"bi bi-search text-muted me-2\"></i>
                    <input type=\"text\" placeholder=\"Rechercher...\">
                </div>
                <div class=\"d-flex align-items-center\">
                    <div class=\"text-end me-3\">
                        <div class=\"fw-bold\">Admin</div>
                        <div class=\"small text-muted\">Administrateur</div>
                    </div>
                    <div style=\"width: 40px; height: 40px; background: var(--pf-red); border-radius: 8px; display: flex; align-items: center; justify-content: center;\">
                        <i class=\"bi bi-shield-lock\" style=\"font-size: 1.2rem;\"></i>
                    </div>
                </div>
            </div>

            ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 156, $this->source); })()), "flashes", [], "any", false, false, false, 156));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 157
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 158
                yield "                    <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " bg-dark text-white border-PF-red alert-dismissible fade show\" role=\"alert\">
                        ";
                // line 159
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                        <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        yield "
            ";
        // line 165
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 166
        yield "        </main>

        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
        ";
        // line 169
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 170
        yield "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "PHANTOM FORCE - ADMIN";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 106
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 165
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 169
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin_base.html.twig";
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
        return array (  357 => 169,  335 => 165,  313 => 106,  290 => 5,  277 => 170,  275 => 169,  270 => 166,  268 => 165,  265 => 164,  259 => 163,  249 => 159,  244 => 158,  239 => 157,  235 => 156,  210 => 134,  196 => 127,  174 => 112,  169 => 110,  164 => 107,  162 => 106,  58 => 5,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}PHANTOM FORCE - ADMIN{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2290%22>🛡️</text></svg>\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css\">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap');
            
            :root {
                --pf-red: #ff3b3b;
                --pf-red-dark: #b30000;
                --pf-sidebar-bg: #000000;
                --pf-main-bg: #050505;
                --pf-card-bg: #0a0a0a;
                --pf-border: #1a1a1a;
                --pf-text: #ffffff;
                --pf-text-muted: #888888;
            }

            body { font-family: 'Inter', sans-serif; background-color: var(--pf-main-bg); color: var(--pf-text); }
            
            .sidebar { 
                min-height: 100vh; 
                background: var(--pf-sidebar-bg); 
                padding: 20px 0; 
                position: fixed;
                width: 250px;
                border-right: 1px solid var(--pf-border);
            }
            .sidebar-brand {
                padding: 0 25px 30px;
                color: var(--pf-red);
                font-weight: 800;
                font-size: 1.2rem;
                text-transform: uppercase;
                display: block;
                text-decoration: none;
            }
            .sidebar a { 
                color: var(--pf-text-muted); 
                text-decoration: none; 
                padding: 12px 25px; 
                display: flex; 
                align-items: center;
                transition: all 0.3s;
                font-weight: 500;
                font-size: 0.95rem;
            }
            .sidebar a i { margin-right: 15px; font-size: 1.1rem; }
            .sidebar a:hover, .sidebar a.active { 
                color: var(--pf-text); 
                background: linear-gradient(90deg, rgba(255, 59, 59, 0.1) 0%, transparent 100%);
                border-left: 4px solid var(--pf-red);
            }
            .sidebar a.active { color: white; background: var(--pf-red); border-left: none; border-radius: 4px; margin: 0 10px; }

            .main-content { margin-left: 250px; padding: 40px; }
            
            .pf-card {
                background: var(--pf-card-bg);
                border: 1px solid var(--pf-border);
                border-radius: 12px;
                padding: 25px;
                margin-bottom: 25px;
            }
            
            .table { color: var(--pf-text); }
            .table thead th { color: var(--pf-text-muted); border-bottom: 2px solid var(--pf-border); text-transform: uppercase; font-size: 0.8rem; }
            .table tbody td { border-bottom: 1px solid var(--pf-border); padding: 15px 10px; vertical-align: middle; }
            
            .btn-pf-red {
                background: var(--pf-red);
                color: white;
                border: none;
                padding: 8px 20px;
                border-radius: 6px;
                font-weight: 600;
            }
            .btn-pf-red:hover { background: var(--pf-red-dark); color: white; }

            .top-bar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 30px;
            }
            .search-bar {
                background: var(--pf-card-bg);
                border: 1px solid var(--pf-border);
                border-radius: 8px;
                padding: 8px 15px;
                width: 400px;
                color: white;
            }
            .search-bar input {
                background: transparent;
                border: none;
                color: white;
                width: 100%;
                outline: none;
            }
        </style>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        <div class=\"sidebar\">
            <a href=\"{{ path('app_matchy_index') }}\" class=\"sidebar-brand\">PHANTOM FORCE <br><small style=\"font-size: 0.6rem; color: #555;\">Admin Desktop</small></a>
            
            <a href=\"{{ path('app_tournaments') }}\" class=\"{% if 'tournament' in app.request.pathinfo %}active{% endif %}\">
                <i class=\"bi bi-grid\"></i> Dashboard
            </a>
            <a href=\"#\">
                <i class=\"bi bi-people\"></i> Joueurs
            </a>
            <a href=\"#\">
                <i class=\"bi bi-shield\"></i> Équipes
            </a>
            <a href=\"#\">
                <i class=\"bi bi-calendar\"></i> Matchs
            </a>
            <a href=\"#\">
                <i class=\"bi bi-headset\"></i> Coaching
            </a>
            <a href=\"{{ path('app_tournaments') }}\" class=\"{% if 'tournament' in app.request.pathinfo %}active{% endif %}\">
                <i class=\"bi bi-trophy\"></i> Tournois
            </a>
            <a href=\"#\">
                <i class=\"bi bi-award\"></i> Achievements
            </a>
            <hr style=\"border-color: var(--pf-border);\">
            <a href=\"{{ path('app_matchy_index') }}\">
                <i class=\"bi bi-box-arrow-left\"></i> Déconnexion
            </a>
        </div>

        <main class=\"main-content\">
            <div class=\"top-bar\">
                <div class=\"search-bar\">
                    <i class=\"bi bi-search text-muted me-2\"></i>
                    <input type=\"text\" placeholder=\"Rechercher...\">
                </div>
                <div class=\"d-flex align-items-center\">
                    <div class=\"text-end me-3\">
                        <div class=\"fw-bold\">Admin</div>
                        <div class=\"small text-muted\">Administrateur</div>
                    </div>
                    <div style=\"width: 40px; height: 40px; background: var(--pf-red); border-radius: 8px; display: flex; align-items: center; justify-content: center;\">
                        <i class=\"bi bi-shield-lock\" style=\"font-size: 1.2rem;\"></i>
                    </div>
                </div>
            </div>

            {% for label, messages in app.flashes %}
                {% for message in messages %}
                    <div class=\"alert alert-{{ label }} bg-dark text-white border-PF-red alert-dismissible fade show\" role=\"alert\">
                        {{ message }}
                        <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                {% endfor %}
            {% endfor %}

            {% block body %}{% endblock %}
        </main>

        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "admin_base.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\admin_base.html.twig");
    }
}
