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

/* admin/dashboard/index.html.twig */
class __TwigTemplate_11a77a2d77d54d2fbb14584755b4f9da extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        $this->parent = $this->load("base_back.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Dashboard Admin - ARENA";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"admin-header\">
    <h1 class=\"h3 mb-0\">Vue d'ensemble</h1>
    <p class=\"text-muted small mb-0\">Bienvenue dans votre interface d'administration.</p>
</div>

<div class=\"row g-4\">
    <div class=\"col-md-4\">
        <div class=\"admin-card text-center\">
            <i class=\"fas fa-trophy mb-3\" style=\"font-size: 2rem; color: var(--admin-accent);\"></i>
            <h3 class=\"h2 mb-1\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalTournaments"]) || array_key_exists("totalTournaments", $context) ? $context["totalTournaments"] : (function () { throw new RuntimeError('Variable "totalTournaments" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "</h3>
            <p class=\"text-muted text-uppercase small mb-0\">Tournois Totaux</p>
        </div>
    </div>
    
    <div class=\"col-md-4\">
        <div class=\"admin-card text-center\">
            <i class=\"fas fa-check-circle mb-3\" style=\"font-size: 2rem; color: var(--admin-success);\"></i>
            <h3 class=\"h2 mb-1\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeTournaments"]) || array_key_exists("activeTournaments", $context) ? $context["activeTournaments"] : (function () { throw new RuntimeError('Variable "activeTournaments" does not exist.', 23, $this->source); })()), "html", null, true);
        yield "</h3>
            <p class=\"text-muted text-uppercase small mb-0\">Tournois Actifs</p>
        </div>
    </div>
    
    <div class=\"col-md-4\">
        <div class=\"admin-card text-center\">
            <i class=\"fas fa-money-bill-wave mb-3\" style=\"font-size: 2rem; color: var(--admin-accent);\"></i>
            <h3 class=\"h2 mb-1\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPrizePool"]) || array_key_exists("totalPrizePool", $context) ? $context["totalPrizePool"] : (function () { throw new RuntimeError('Variable "totalPrizePool" does not exist.', 31, $this->source); })()), "html", null, true);
        yield "€</h3>
            <p class=\"text-muted text-uppercase small mb-0\">Prize Pool Global</p>
        </div>
    </div>
</div>

<div class=\"mt-5\">
    <div class=\"admin-card\">
        <h4 class=\"mb-4\">Actions Rapides</h4>
        <div class=\"d-flex gap-3\">
            <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_index");
        yield "\" class=\"btn-admin btn-admin-primary\">
                <i class=\"fas fa-list\"></i> Gérer les Tournois
            </a>
            <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_new");
        yield "\" class=\"btn-admin btn-admin-secondary\">
                <i class=\"fas fa-plus\"></i> Organiser
            </a>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/dashboard/index.html.twig";
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
        return array (  152 => 44,  146 => 41,  133 => 31,  122 => 23,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Dashboard Admin - ARENA{% endblock %}

{% block body %}
<div class=\"admin-header\">
    <h1 class=\"h3 mb-0\">Vue d'ensemble</h1>
    <p class=\"text-muted small mb-0\">Bienvenue dans votre interface d'administration.</p>
</div>

<div class=\"row g-4\">
    <div class=\"col-md-4\">
        <div class=\"admin-card text-center\">
            <i class=\"fas fa-trophy mb-3\" style=\"font-size: 2rem; color: var(--admin-accent);\"></i>
            <h3 class=\"h2 mb-1\">{{ totalTournaments }}</h3>
            <p class=\"text-muted text-uppercase small mb-0\">Tournois Totaux</p>
        </div>
    </div>
    
    <div class=\"col-md-4\">
        <div class=\"admin-card text-center\">
            <i class=\"fas fa-check-circle mb-3\" style=\"font-size: 2rem; color: var(--admin-success);\"></i>
            <h3 class=\"h2 mb-1\">{{ activeTournaments }}</h3>
            <p class=\"text-muted text-uppercase small mb-0\">Tournois Actifs</p>
        </div>
    </div>
    
    <div class=\"col-md-4\">
        <div class=\"admin-card text-center\">
            <i class=\"fas fa-money-bill-wave mb-3\" style=\"font-size: 2rem; color: var(--admin-accent);\"></i>
            <h3 class=\"h2 mb-1\">{{ totalPrizePool }}€</h3>
            <p class=\"text-muted text-uppercase small mb-0\">Prize Pool Global</p>
        </div>
    </div>
</div>

<div class=\"mt-5\">
    <div class=\"admin-card\">
        <h4 class=\"mb-4\">Actions Rapides</h4>
        <div class=\"d-flex gap-3\">
            <a href=\"{{ path('app_back_matchy_index') }}\" class=\"btn-admin btn-admin-primary\">
                <i class=\"fas fa-list\"></i> Gérer les Tournois
            </a>
            <a href=\"{{ path('app_back_matchy_new') }}\" class=\"btn-admin btn-admin-secondary\">
                <i class=\"fas fa-plus\"></i> Organiser
            </a>
        </div>
    </div>
</div>
{% endblock %}
", "admin/dashboard/index.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\admin\\dashboard\\index.html.twig");
    }
}
