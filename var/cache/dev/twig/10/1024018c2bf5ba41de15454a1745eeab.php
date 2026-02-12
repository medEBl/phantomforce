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

/* dashboard.html.twig */
class __TwigTemplate_6631e268ed9d36cf9374083278456a3a extends Template
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
            'hero' => [$this, 'block_hero'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "BIENVENUE SUR PHANTOM FORCE";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hero"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hero"));

        // line 6
        yield "<div class=\"hero-section\">
    <div class=\"container\">
        <h1 class=\"hero-title text-white\">BIENVENUE SUR <span style=\"color: var(--pf-red);\">PHANTOM FORCE</span></h1>
        <p class=\"hero-subtitle\">Plateforme eSport professionnelle • Gestion d'équipe • Coaching • Tournois</p>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 14
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

        // line 15
        yield "<div class=\"row g-4 mb-5\">
    <div class=\"col-md-3\">
        <div class=\"pf-card\">
            <div style=\"width: 40px; height: 40px; background: var(--pf-red); border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px;\">
                <i class=\"bi bi-trophy\" style=\"font-size: 1.2rem;\"></i>
            </div>
            <h2 class=\"fw-bold mb-0\">24</h2>
            <p class=\"text-muted small mb-0\">Tournois gagnés</p>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"pf-card\">
            <div style=\"width: 40px; height: 40px; border: 1px solid var(--pf-border); border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px;\">
                <i class=\"bi bi-people\" style=\"font-size: 1.2rem;\"></i>
            </div>
            <h2 class=\"fw-bold mb-0\">156</h2>
            <p class=\"text-muted small mb-0\">Joueurs actifs</p>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"pf-card\">
            <div style=\"width: 40px; height: 40px; background: var(--pf-red); border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px;\">
                <i class=\"bi bi-bullseye\" style=\"font-size: 1.2rem;\"></i>
            </div>
            <h2 class=\"fw-bold mb-0\">89%</h2>
            <p class=\"text-muted small mb-0\">Objectifs complétés</p>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"pf-card\">
            <div style=\"width: 40px; height: 40px; border: 1px solid var(--pf-border); border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px;\">
                <i class=\"bi bi-graph-up-arrow\" style=\"font-size: 1.2rem;\"></i>
            </div>
            <h2 class=\"fw-bold mb-0\">73%</h2>
            <p class=\"text-muted small mb-0\">Win Rate</p>
        </div>
    </div>
</div>

<h3 class=\"fw-bold mb-4\">Matchs Récents</h3>
<div class=\"pf-card p-4\">
    <div class=\"d-flex justify-content-between align-items-center\">
        <div class=\"d-flex align-items-center gap-4\">
            <span class=\"fw-bold\">Phantom Force</span>
            <span class=\"fs-3 fw-bold\">16 : 12</span>
            <span class=\"text-muted\">Shadow Gaming</span>
        </div>
        <div>
            <span class=\"badge bg-danger px-3 py-2 me-3\" style=\"text-transform: uppercase;\">Victoire</span>
            <span class=\"text-muted small\">23 Jan 2026</span>
        </div>
    </div>
</div>

<div class=\"text-center mt-5\">
    <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournaments");
        yield "\" class=\"btn btn-pf-red btn-lg px-5\">Voir tous les tournois</a>
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
        return "dashboard.html.twig";
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
        return array (  188 => 70,  131 => 15,  118 => 14,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}BIENVENUE SUR PHANTOM FORCE{% endblock %}

{% block hero %}
<div class=\"hero-section\">
    <div class=\"container\">
        <h1 class=\"hero-title text-white\">BIENVENUE SUR <span style=\"color: var(--pf-red);\">PHANTOM FORCE</span></h1>
        <p class=\"hero-subtitle\">Plateforme eSport professionnelle • Gestion d'équipe • Coaching • Tournois</p>
    </div>
</div>
{% endblock %}

{% block body %}
<div class=\"row g-4 mb-5\">
    <div class=\"col-md-3\">
        <div class=\"pf-card\">
            <div style=\"width: 40px; height: 40px; background: var(--pf-red); border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px;\">
                <i class=\"bi bi-trophy\" style=\"font-size: 1.2rem;\"></i>
            </div>
            <h2 class=\"fw-bold mb-0\">24</h2>
            <p class=\"text-muted small mb-0\">Tournois gagnés</p>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"pf-card\">
            <div style=\"width: 40px; height: 40px; border: 1px solid var(--pf-border); border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px;\">
                <i class=\"bi bi-people\" style=\"font-size: 1.2rem;\"></i>
            </div>
            <h2 class=\"fw-bold mb-0\">156</h2>
            <p class=\"text-muted small mb-0\">Joueurs actifs</p>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"pf-card\">
            <div style=\"width: 40px; height: 40px; background: var(--pf-red); border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px;\">
                <i class=\"bi bi-bullseye\" style=\"font-size: 1.2rem;\"></i>
            </div>
            <h2 class=\"fw-bold mb-0\">89%</h2>
            <p class=\"text-muted small mb-0\">Objectifs complétés</p>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"pf-card\">
            <div style=\"width: 40px; height: 40px; border: 1px solid var(--pf-border); border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px;\">
                <i class=\"bi bi-graph-up-arrow\" style=\"font-size: 1.2rem;\"></i>
            </div>
            <h2 class=\"fw-bold mb-0\">73%</h2>
            <p class=\"text-muted small mb-0\">Win Rate</p>
        </div>
    </div>
</div>

<h3 class=\"fw-bold mb-4\">Matchs Récents</h3>
<div class=\"pf-card p-4\">
    <div class=\"d-flex justify-content-between align-items-center\">
        <div class=\"d-flex align-items-center gap-4\">
            <span class=\"fw-bold\">Phantom Force</span>
            <span class=\"fs-3 fw-bold\">16 : 12</span>
            <span class=\"text-muted\">Shadow Gaming</span>
        </div>
        <div>
            <span class=\"badge bg-danger px-3 py-2 me-3\" style=\"text-transform: uppercase;\">Victoire</span>
            <span class=\"text-muted small\">23 Jan 2026</span>
        </div>
    </div>
</div>

<div class=\"text-center mt-5\">
    <a href=\"{{ path('app_tournaments') }}\" class=\"btn btn-pf-red btn-lg px-5\">Voir tous les tournois</a>
</div>
{% endblock %}
", "dashboard.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\dashboard.html.twig");
    }
}
