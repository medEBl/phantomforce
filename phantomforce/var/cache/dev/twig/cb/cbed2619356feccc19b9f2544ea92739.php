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

/* tournament/detail.html.twig */
class __TwigTemplate_c037c0487f318d964dce1976516aea55 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournament/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournament/detail.html.twig"));

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

        yield "Phantom Force – ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
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
    .detail-container {
        max-width: 1000px;
        margin: 0 auto;
    }

    .detail-card {
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: var(--radius-lg);
        overflow: hidden;
        backdrop-filter: blur(10px);
    }

    .detail-header {
        background: var(--red-soft);
        padding: 40px;
        border-bottom: 1px solid var(--border);
        position: relative;
    }

    .detail-header::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 1px;
        background: var(--red-gradient);
    }

    .detail-body {
        padding: 40px;
    }

    .info-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        margin-bottom: 40px;
    }

    .info-item {
        background: rgba(255,255,255,0.03);
        padding: 15px 20px;
        border-radius: var(--radius);
        border: 1px solid var(--border-light);
    }

    .info-label {
        font-size: 11px;
        color: var(--text-muted);
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 5px;
        font-weight: 700;
    }

    .info-value {
        font-size: 16px;
        font-weight: 600;
        color: white;
    }

    .section-subtitle {
        font-size: 14px;
        font-weight: 800;
        color: var(--red);
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .section-subtitle::after {
        content: '';
        flex-grow: 1;
        height: 1px;
        background: var(--border);
    }

    .reward-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px 20px;
        background: rgba(255,45,45,0.05);
        border-left: 3px solid var(--red);
        border-radius: 4px;
        margin-bottom: 10px;
    }

    .reward-rank {
        font-weight: 800;
        font-size: 18px;
        color: white;
        width: 40px;
    }

    .reward-type {
        font-size: 14px;
        color: var(--text-muted);
        flex-grow: 1;
        margin-left: 15px;
    }

    .reward-value {
        font-weight: 700;
        font-size: 16px;
        color: var(--red);
    }

    .detail-actions {
        display: flex;
        gap: 15px;
        margin-top: 40px;
    }

    .btn-pf {
        padding: 12px 30px;
        border-radius: 8px;
        font-weight: 700;
        text-decoration: none;
        transition: var(--transition);
        font-size: 14px;
        text-align: center;
        display: inline-block;
        border: none;
        cursor: pointer;
    }

    .btn-pf-red {
        background: var(--red-gradient);
        color: white;
        box-shadow: 0 4px 15px rgba(255,45,45,0.3);
    }

    .btn-pf-red:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(255,45,45,0.5);
        color: white;
    }

    .btn-pf-outline {
        border: 1px solid var(--border-light);
        color: var(--text-muted);
        background: transparent;
    }

    .btn-pf-outline:hover {
        border-color: var(--text-light);
        color: white;
        background: rgba(255,255,255,0.05);
    }
</style>
";
        
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

        // line 166
        yield "<div class=\"container py-5 detail-container\">
    <div class=\"detail-card\">
        <div class=\"detail-header text-center\">
            <span class=\"game-badge mb-3 d-inline-block\">";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 169, $this->source); })()), "game", [], "any", false, false, false, 169), "html", null, true);
        yield "</span>
            <h1 class=\"display-5 fw-bold text-white mb-2\">";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 170, $this->source); })()), "name", [], "any", false, false, false, 170), "html", null, true);
        yield "</h1>
            <p class=\"text-muted small mb-0\">Organisé par l'Admin #";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 171, $this->source); })()), "organizerId", [], "any", false, false, false, 171), "html", null, true);
        yield "</p>
        </div>

        <div class=\"detail-body\">
            <h2 class=\"section-subtitle\">Informations Générales</h2>
            
            <div class=\"info-grid\">
                <div class=\"info-item\">
                    <div class=\"info-label\">Phase Actuelle</div>
                    <div class=\"info-value\">";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 180, $this->source); })()), "phase", [], "any", false, false, false, 180), "html", null, true);
        yield "</div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Statut</div>
                    <div class=\"info-value\">
                        ";
        // line 185
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 185, $this->source); })()), "isActive", [], "any", false, false, false, 185)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 186
            yield "                            <span class=\"text-success\"><i class=\"fas fa-check-circle me-2\"></i> ACTIF</span>
                        ";
        } else {
            // line 188
            yield "                            <span class=\"text-muted\"><i class=\"fas fa-times-circle me-2\"></i> INACTIF</span>
                        ";
        }
        // line 190
        yield "                    </div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Date de Début</div>
                    <div class=\"info-value\">";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 194, $this->source); })()), "startDate", [], "any", false, false, false, 194), "d F Y"), "html", null, true);
        yield "</div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Date de Fin</div>
                    <div class=\"info-value\">";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 198, $this->source); })()), "endDate", [], "any", false, false, false, 198), "d F Y"), "html", null, true);
        yield "</div>
                </div>
            </div>

            <h2 class=\"section-subtitle\">Récompenses du Tournoi</h2>
            
            <div class=\"rewards-list mb-4\">
                ";
        // line 205
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 205, $this->source); })()), "rewards", [], "any", false, false, false, 205))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 206
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 206, $this->source); })()), "rewards", [], "any", false, false, false, 206), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 206, $this->source); })()), "rank", [], "any", false, false, false, 206) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 206, $this->source); })()), "rank", [], "any", false, false, false, 206)); }));
            foreach ($context['_seq'] as $context["_key"] => $context["reward"]) {
                // line 207
                yield "                        <div class=\"reward-item\">
                            <div class=\"reward-rank\">#";
                // line 208
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reward"], "rank", [], "any", false, false, false, 208), "html", null, true);
                yield "</div>
                            <div class=\"reward-type\">";
                // line 209
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reward"], "rewardType", [], "any", false, false, false, 209), "html", null, true);
                yield "</div>
                            <div class=\"reward-value\">";
                // line 210
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reward"], "rewardValue", [], "any", false, false, false, 210), "html", null, true);
                yield "</div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reward'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            yield "                ";
        } else {
            // line 214
            yield "                    <div class=\"info-item text-center\">
                        <p class=\"text-muted mb-0\">Aucune récompense n'a encore été configurée pour ce tournoi.</p>
                    </div>
                ";
        }
        // line 218
        yield "            </div>

            <div class=\"detail-actions\">
                <a href=\"";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reward_index", ["tournamentId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 221, $this->source); })()), "id", [], "any", false, false, false, 221)]), "html", null, true);
        yield "\" class=\"btn-organiser flex-grow-1 justify-content-center\">
                    <i class=\"fas fa-trophy\"></i> GÉRER LES RÉCOMPENSES
                </a>
                <a href=\"";
        // line 224
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournaments");
        yield "\" class=\"btn-secondary-pf px-4\">
                    <i class=\"fas fa-arrow-left\"></i> RETOUR
                </a>
            </div>
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
        return "tournament/detail.html.twig";
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
        return array (  396 => 224,  390 => 221,  385 => 218,  379 => 214,  376 => 213,  367 => 210,  363 => 209,  359 => 208,  356 => 207,  351 => 206,  349 => 205,  339 => 198,  332 => 194,  326 => 190,  322 => 188,  318 => 186,  316 => 185,  308 => 180,  296 => 171,  292 => 170,  288 => 169,  283 => 166,  270 => 165,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Phantom Force – {{ tournament.name }}{% endblock %}

{% block stylesheets %}
<style>
    .detail-container {
        max-width: 1000px;
        margin: 0 auto;
    }

    .detail-card {
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: var(--radius-lg);
        overflow: hidden;
        backdrop-filter: blur(10px);
    }

    .detail-header {
        background: var(--red-soft);
        padding: 40px;
        border-bottom: 1px solid var(--border);
        position: relative;
    }

    .detail-header::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 1px;
        background: var(--red-gradient);
    }

    .detail-body {
        padding: 40px;
    }

    .info-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        margin-bottom: 40px;
    }

    .info-item {
        background: rgba(255,255,255,0.03);
        padding: 15px 20px;
        border-radius: var(--radius);
        border: 1px solid var(--border-light);
    }

    .info-label {
        font-size: 11px;
        color: var(--text-muted);
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 5px;
        font-weight: 700;
    }

    .info-value {
        font-size: 16px;
        font-weight: 600;
        color: white;
    }

    .section-subtitle {
        font-size: 14px;
        font-weight: 800;
        color: var(--red);
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .section-subtitle::after {
        content: '';
        flex-grow: 1;
        height: 1px;
        background: var(--border);
    }

    .reward-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px 20px;
        background: rgba(255,45,45,0.05);
        border-left: 3px solid var(--red);
        border-radius: 4px;
        margin-bottom: 10px;
    }

    .reward-rank {
        font-weight: 800;
        font-size: 18px;
        color: white;
        width: 40px;
    }

    .reward-type {
        font-size: 14px;
        color: var(--text-muted);
        flex-grow: 1;
        margin-left: 15px;
    }

    .reward-value {
        font-weight: 700;
        font-size: 16px;
        color: var(--red);
    }

    .detail-actions {
        display: flex;
        gap: 15px;
        margin-top: 40px;
    }

    .btn-pf {
        padding: 12px 30px;
        border-radius: 8px;
        font-weight: 700;
        text-decoration: none;
        transition: var(--transition);
        font-size: 14px;
        text-align: center;
        display: inline-block;
        border: none;
        cursor: pointer;
    }

    .btn-pf-red {
        background: var(--red-gradient);
        color: white;
        box-shadow: 0 4px 15px rgba(255,45,45,0.3);
    }

    .btn-pf-red:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(255,45,45,0.5);
        color: white;
    }

    .btn-pf-outline {
        border: 1px solid var(--border-light);
        color: var(--text-muted);
        background: transparent;
    }

    .btn-pf-outline:hover {
        border-color: var(--text-light);
        color: white;
        background: rgba(255,255,255,0.05);
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container py-5 detail-container\">
    <div class=\"detail-card\">
        <div class=\"detail-header text-center\">
            <span class=\"game-badge mb-3 d-inline-block\">{{ tournament.game }}</span>
            <h1 class=\"display-5 fw-bold text-white mb-2\">{{ tournament.name }}</h1>
            <p class=\"text-muted small mb-0\">Organisé par l'Admin #{{ tournament.organizerId }}</p>
        </div>

        <div class=\"detail-body\">
            <h2 class=\"section-subtitle\">Informations Générales</h2>
            
            <div class=\"info-grid\">
                <div class=\"info-item\">
                    <div class=\"info-label\">Phase Actuelle</div>
                    <div class=\"info-value\">{{ tournament.phase }}</div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Statut</div>
                    <div class=\"info-value\">
                        {% if tournament.isActive %}
                            <span class=\"text-success\"><i class=\"fas fa-check-circle me-2\"></i> ACTIF</span>
                        {% else %}
                            <span class=\"text-muted\"><i class=\"fas fa-times-circle me-2\"></i> INACTIF</span>
                        {% endif %}
                    </div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Date de Début</div>
                    <div class=\"info-value\">{{ tournament.startDate|date('d F Y') }}</div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Date de Fin</div>
                    <div class=\"info-value\">{{ tournament.endDate|date('d F Y') }}</div>
                </div>
            </div>

            <h2 class=\"section-subtitle\">Récompenses du Tournoi</h2>
            
            <div class=\"rewards-list mb-4\">
                {% if tournament.rewards is not empty %}
                    {% for reward in tournament.rewards|sort((a,b) => a.rank <=> b.rank) %}
                        <div class=\"reward-item\">
                            <div class=\"reward-rank\">#{{ reward.rank }}</div>
                            <div class=\"reward-type\">{{ reward.rewardType }}</div>
                            <div class=\"reward-value\">{{ reward.rewardValue }}</div>
                        </div>
                    {% endfor %}
                {% else %}
                    <div class=\"info-item text-center\">
                        <p class=\"text-muted mb-0\">Aucune récompense n'a encore été configurée pour ce tournoi.</p>
                    </div>
                {% endif %}
            </div>

            <div class=\"detail-actions\">
                <a href=\"{{ path('app_admin_reward_index', {'tournamentId': tournament.id}) }}\" class=\"btn-organiser flex-grow-1 justify-content-center\">
                    <i class=\"fas fa-trophy\"></i> GÉRER LES RÉCOMPENSES
                </a>
                <a href=\"{{ path('app_tournaments') }}\" class=\"btn-secondary-pf px-4\">
                    <i class=\"fas fa-arrow-left\"></i> RETOUR
                </a>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "tournament/detail.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\tournament\\detail.html.twig");
    }
}
