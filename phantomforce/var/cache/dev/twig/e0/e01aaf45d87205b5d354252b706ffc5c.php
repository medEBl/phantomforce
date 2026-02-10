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

/* tournament/stats.html.twig */
class __TwigTemplate_4c58015f752e5e6e53597bde20326d8a extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournament/stats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournament/stats.html.twig"));

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

        yield "Phantom Force – Analyses & Stats";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<style>
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 25px;
        margin-bottom: 40px;
    }

    .stat-card-pf {
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: var(--radius-lg);
        padding: 30px;
        position: relative;
        overflow: hidden;
        transition: var(--transition);
        backdrop-filter: blur(10px);
    }

    .stat-card-pf:hover {
        transform: translateY(-5px);
        border-color: var(--red);
    }

    .stat-card-pf::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background: var(--red-gradient);
        opacity: 0.3;
    }

    .stat-icon {
        font-size: 24px;
        color: var(--red);
        margin-bottom: 20px;
        opacity: 0.8;
    }

    .stat-value {
        font-size: 32px;
        font-weight: 800;
        color: white;
        line-height: 1;
        margin-bottom: 5px;
    }

    .stat-label {
        font-size: 11px;
        font-weight: 700;
        color: var(--text-muted);
        text-transform: uppercase;
        letter-spacing: 1.5px;
    }

    .highlight-section {
        background: var(--red-soft);
        border: 1px solid var(--border);
        border-radius: var(--radius-lg);
        padding: 40px;
        text-align: center;
        position: relative;
        overflow: hidden;
        margin-bottom: 40px;
    }

    .highlight-label {
        font-size: 14px;
        font-weight: 800;
        color: var(--red);
        text-transform: uppercase;
        letter-spacing: 3px;
        margin-bottom: 15px;
        display: block;
    }

    .highlight-value {
        font-size: 64px;
        font-weight: 900;
        color: white;
        text-shadow: 0 0 30px rgba(255,45,45,0.3);
        letter-spacing: -1px;
    }

    .progress-container-pf {
        background: rgba(255,255,255,0.05);
        height: 8px;
        border-radius: 4px;
        margin-top: 20px;
        overflow: hidden;
    }

    .progress-bar-pf {
        height: 100%;
        background: var(--red-gradient);
        box-shadow: 0 0 10px var(--red);
        transition: width 1s ease-out;
    }

    .analytics-row {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 25px;
    }

    .game-item-pf {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 20px;
        background: rgba(255,255,255,0.03);
        border-radius: 8px;
        margin-bottom: 10px;
        border: 1px solid transparent;
        transition: var(--transition);
    }

    .game-item-pf:hover {
        background: rgba(255,45,45,0.05);
        border-color: var(--red-soft);
    }

    .legendary-badge {
        background: var(--red-gradient);
        color: white;
        padding: 2px 10px;
        border-radius: 4px;
        font-size: 10px;
        font-weight: 800;
        text-transform: uppercase;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 143
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

        // line 144
        yield "<div class=\"container py-5\">
    <div class=\"header-section mb-5\">
        <h1 class=\"display-4 fw-bold text-white mb-2\">TABLEAU ANALYTIQUE</h1>
        <p class=\"text-muted gold-text mb-0\">Performance globale de l'écosystème Phantom Force.</p>
    </div>

    <!-- Analytics Cards -->
    <div class=\"stats-grid\">
        <div class=\"stat-card-pf\">
            <div class=\"stat-icon\"><i class=\"fas fa-trophy\"></i></div>
            <div class=\"stat-value\">";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 154, $this->source); })()), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Tournois Créés</div>
        </div>
        
        <div class=\"stat-card-pf\">
            <div class=\"stat-icon text-success\"><i class=\"fas fa-check-double\"></i></div>
            <div class=\"stat-value\">";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 160, $this->source); })()), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Compétitions Ouvertes</div>
            <div class=\"progress-container-pf\">
                <div class=\"progress-bar-pf\" style=\"width: ";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default((((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 163, $this->source); })()) / (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 163, $this->source); })())) * 100), 0), "html", null, true);
        yield "%\"></div>
            </div>
        </div>

        <div class=\"stat-card-pf\">
            <div class=\"stat-icon\"><i class=\"fas fa-hourglass-end\"></i></div>
            <div class=\"stat-value\">";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactive"]) || array_key_exists("inactive", $context) ? $context["inactive"] : (function () { throw new RuntimeError('Variable "inactive" does not exist.', 169, $this->source); })()), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Tournois Clôturés</div>
        </div>

        <div class=\"stat-card-pf\">
            <div class=\"stat-icon text-info\"><i class=\"fas fa-gamepad\"></i></div>
            <div class=\"stat-value\" style=\"font-size: 24px;\">";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["topGame"]) || array_key_exists("topGame", $context) ? $context["topGame"] : (function () { throw new RuntimeError('Variable "topGame" does not exist.', 175, $this->source); })()), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Jeu N°1 Mondial</div>
        </div>
    </div>

    <!-- Financial Highlight -->
    <div class=\"highlight-section\">
        <div class=\"highlight-label\">Cagnotte Totale Distribuée</div>
        <div class=\"highlight-value\">";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalPrizePool"]) || array_key_exists("totalPrizePool", $context) ? $context["totalPrizePool"] : (function () { throw new RuntimeError('Variable "totalPrizePool" does not exist.', 183, $this->source); })()), 0, ".", " "), "html", null, true);
        yield " \$</div>
        <p class=\"text-muted mt-3 small text-uppercase fw-bold\">Somme cumulée des récompenses de tous les tournois</p>
    </div>

    <div class=\"text-center mt-5\">
        <a href=\"";
        // line 188
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournaments");
        yield "\" class=\"btn-pf btn-pf-outline px-5\">
            <i class=\"fas fa-arrow-left me-2\"></i> RETOUR AU HUB DES TOURNOIS
        </a>
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
        return "tournament/stats.html.twig";
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
        return array (  324 => 188,  316 => 183,  305 => 175,  296 => 169,  287 => 163,  281 => 160,  272 => 154,  260 => 144,  247 => 143,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Phantom Force – Analyses & Stats{% endblock %}

{% block stylesheets %}
<style>
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 25px;
        margin-bottom: 40px;
    }

    .stat-card-pf {
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: var(--radius-lg);
        padding: 30px;
        position: relative;
        overflow: hidden;
        transition: var(--transition);
        backdrop-filter: blur(10px);
    }

    .stat-card-pf:hover {
        transform: translateY(-5px);
        border-color: var(--red);
    }

    .stat-card-pf::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background: var(--red-gradient);
        opacity: 0.3;
    }

    .stat-icon {
        font-size: 24px;
        color: var(--red);
        margin-bottom: 20px;
        opacity: 0.8;
    }

    .stat-value {
        font-size: 32px;
        font-weight: 800;
        color: white;
        line-height: 1;
        margin-bottom: 5px;
    }

    .stat-label {
        font-size: 11px;
        font-weight: 700;
        color: var(--text-muted);
        text-transform: uppercase;
        letter-spacing: 1.5px;
    }

    .highlight-section {
        background: var(--red-soft);
        border: 1px solid var(--border);
        border-radius: var(--radius-lg);
        padding: 40px;
        text-align: center;
        position: relative;
        overflow: hidden;
        margin-bottom: 40px;
    }

    .highlight-label {
        font-size: 14px;
        font-weight: 800;
        color: var(--red);
        text-transform: uppercase;
        letter-spacing: 3px;
        margin-bottom: 15px;
        display: block;
    }

    .highlight-value {
        font-size: 64px;
        font-weight: 900;
        color: white;
        text-shadow: 0 0 30px rgba(255,45,45,0.3);
        letter-spacing: -1px;
    }

    .progress-container-pf {
        background: rgba(255,255,255,0.05);
        height: 8px;
        border-radius: 4px;
        margin-top: 20px;
        overflow: hidden;
    }

    .progress-bar-pf {
        height: 100%;
        background: var(--red-gradient);
        box-shadow: 0 0 10px var(--red);
        transition: width 1s ease-out;
    }

    .analytics-row {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 25px;
    }

    .game-item-pf {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 20px;
        background: rgba(255,255,255,0.03);
        border-radius: 8px;
        margin-bottom: 10px;
        border: 1px solid transparent;
        transition: var(--transition);
    }

    .game-item-pf:hover {
        background: rgba(255,45,45,0.05);
        border-color: var(--red-soft);
    }

    .legendary-badge {
        background: var(--red-gradient);
        color: white;
        padding: 2px 10px;
        border-radius: 4px;
        font-size: 10px;
        font-weight: 800;
        text-transform: uppercase;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"header-section mb-5\">
        <h1 class=\"display-4 fw-bold text-white mb-2\">TABLEAU ANALYTIQUE</h1>
        <p class=\"text-muted gold-text mb-0\">Performance globale de l'écosystème Phantom Force.</p>
    </div>

    <!-- Analytics Cards -->
    <div class=\"stats-grid\">
        <div class=\"stat-card-pf\">
            <div class=\"stat-icon\"><i class=\"fas fa-trophy\"></i></div>
            <div class=\"stat-value\">{{ total }}</div>
            <div class=\"stat-label\">Tournois Créés</div>
        </div>
        
        <div class=\"stat-card-pf\">
            <div class=\"stat-icon text-success\"><i class=\"fas fa-check-double\"></i></div>
            <div class=\"stat-value\">{{ active }}</div>
            <div class=\"stat-label\">Compétitions Ouvertes</div>
            <div class=\"progress-container-pf\">
                <div class=\"progress-bar-pf\" style=\"width: {{ (active / total * 100)|default(0) }}%\"></div>
            </div>
        </div>

        <div class=\"stat-card-pf\">
            <div class=\"stat-icon\"><i class=\"fas fa-hourglass-end\"></i></div>
            <div class=\"stat-value\">{{ inactive }}</div>
            <div class=\"stat-label\">Tournois Clôturés</div>
        </div>

        <div class=\"stat-card-pf\">
            <div class=\"stat-icon text-info\"><i class=\"fas fa-gamepad\"></i></div>
            <div class=\"stat-value\" style=\"font-size: 24px;\">{{ topGame }}</div>
            <div class=\"stat-label\">Jeu N°1 Mondial</div>
        </div>
    </div>

    <!-- Financial Highlight -->
    <div class=\"highlight-section\">
        <div class=\"highlight-label\">Cagnotte Totale Distribuée</div>
        <div class=\"highlight-value\">{{ totalPrizePool|number_format(0, '.', ' ') }} \$</div>
        <p class=\"text-muted mt-3 small text-uppercase fw-bold\">Somme cumulée des récompenses de tous les tournois</p>
    </div>

    <div class=\"text-center mt-5\">
        <a href=\"{{ path('app_tournaments') }}\" class=\"btn-pf btn-pf-outline px-5\">
            <i class=\"fas fa-arrow-left me-2\"></i> RETOUR AU HUB DES TOURNOIS
        </a>
    </div>
</div>
{% endblock %}
", "tournament/stats.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\tournament\\stats.html.twig");
    }
}
