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

/* back/entrainement/index.html.twig */
class __TwigTemplate_dcd9111e03dec251e8603a16c80fef73 extends Template
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
        return "base_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/entrainement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/entrainement/index.html.twig"));

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

        yield "Gestion des Plans d'Entraînement";
        
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
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    /* Styles supplémentaires pour le backoffice */
    .filter-section {
        background: rgba(0, 0, 0, 0.2);
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 25px;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }
    
    .filter-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
        margin-bottom: 15px;
    }
    
    .filter-group {
        display: flex;
        flex-direction: column;
    }
    
    .filter-group label {
        font-size: 12px;
        text-transform: uppercase;
        color: var(--text-muted);
        margin-bottom: 5px;
        font-weight: 600;
        letter-spacing: 0.5px;
    }
    
    .filter-group input,
    .filter-group select {
        padding: 10px 12px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 6px;
        color: var(--text-light);
        font-size: 14px;
    }
    
    .filter-group input:focus,
    .filter-group select:focus {
        outline: none;
        border-color: var(--red);
        background: rgba(255, 45, 45, 0.05);
    }
    
    .filter-actions {
        display: flex;
        gap: 10px;
        justify-content: flex-end;
        margin-top: 15px;
        padding-top: 15px;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
    }
    
    .btn-filter {
        padding: 10px 20px;
        border-radius: 6px;
        font-weight: 600;
        font-size: 13px;
        text-decoration: none;
        transition: var(--transition);
        display: inline-flex;
        align-items: center;
        gap: 8px;
        border: none;
        cursor: pointer;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .btn-filter-primary {
        background: linear-gradient(135deg, #ff0000, #ff2d2d);
        color: white;
    }
    
    .btn-filter-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 0, 0, 0.3);
    }
    
    .btn-filter-secondary {
        background: rgba(255, 255, 255, 0.05);
        color: var(--text-muted);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .btn-filter-secondary:hover {
        background: rgba(255, 255, 255, 0.1);
        color: var(--text-light);
    }
    
    .sortable-header {
        cursor: pointer;
        position: relative;
        padding-right: 20px;
        user-select: none;
    }
    
    .sortable-header:hover {
        color: var(--red);
    }
    
    .sortable-header i {
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        font-size: 12px;
        opacity: 0.5;
    }
    
    .sortable-header.active i {
        opacity: 1;
        color: var(--red);
    }
    
    .stats-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 20px;
        margin-bottom: 25px;
    }
    
    .stat-card-admin {
        background: rgba(255, 45, 45, 0.1);
        border: 1px solid rgba(255, 45, 45, 0.2);
        border-radius: 10px;
        padding: 20px;
        transition: var(--transition);
    }
    
    .stat-card-admin:hover {
        transform: translateY(-3px);
        border-color: var(--red);
        box-shadow: 0 5px 15px rgba(255, 0, 0, 0.2);
    }
    
    .stat-card-admin .stat-value {
        font-size: 28px;
        font-weight: 800;
        background: linear-gradient(90deg, #ff2d2d, #ff5e5e);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        margin-bottom: 5px;
    }
    
    .stat-card-admin .stat-label {
        font-size: 13px;
        color: var(--text-muted);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .stat-card-admin .stat-label i {
        color: var(--red);
        font-size: 14px;
    }
    
    .active-filters {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin: 15px 0;
    }
    
    .filter-tag {
        background: rgba(255, 45, 45, 0.1);
        border: 1px solid rgba(255, 45, 45, 0.3);
        border-radius: 20px;
        padding: 5px 15px;
        font-size: 12px;
        color: var(--red);
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .filter-tag i {
        cursor: pointer;
        font-size: 10px;
    }
    
    .filter-tag i:hover {
        color: white;
    }
    
    .pagination {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 25px;
    }
    
    .pagination-item {
        padding: 8px 12px;
        border-radius: 6px;
        background: rgba(255, 255, 255, 0.05);
        color: var(--text-muted);
        text-decoration: none;
        transition: var(--transition);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .pagination-item:hover,
    .pagination-item.active {
        background: var(--red);
        color: white;
        border-color: var(--red);
    }
    
    .pagination-item.disabled {
        opacity: 0.3;
        pointer-events: none;
    }
    
    .coach-badge {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 3px 10px;
        background: rgba(52, 152, 219, 0.1);
        border: 1px solid rgba(52, 152, 219, 0.2);
        border-radius: 15px;
        font-size: 12px;
        color: #3498db;
    }
    
    .team-badge {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 3px 10px;
        background: rgba(155, 89, 182, 0.1);
        border: 1px solid rgba(155, 89, 182, 0.2);
        border-radius: 15px;
        font-size: 12px;
        color: #9b59b6;
    }
    
    .items-per-page {
        padding: 8px;
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 4px;
        color: var(--text-light);
        font-size: 13px;
        cursor: pointer;
    }
    
    .items-per-page:hover {
        border-color: var(--red);
    }
    
    .items-per-page:focus {
        outline: none;
        border-color: var(--red);
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 274
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

        // line 275
        yield "<div class=\"admin-header\">
    <div style=\"display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px;\">
        <div>
            <h1><i class=\"fas fa-dumbbell\"></i> Plans d'Entraînement</h1>
            <p>Gérez les plans d'entraînement de l'application</p>
        </div>
    </div>
</div>

<!-- Statistiques -->
<div class=\"stats-cards\">
    <div class=\"stat-card-admin\">
        <div class=\"stat-value\">";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 287, $this->source); })())), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">
            <i class=\"fas fa-dumbbell\"></i>
            Total Plans
        </div>
    </div>
    <div class=\"stat-card-admin\">
        <div class=\"stat-value\">";
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 294, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 294, $this->source); })()), "coach", [], "any", false, false, false, 294) != null); })), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">
            <i class=\"fas fa-user-tie\"></i>
            Avec Coach
        </div>
    </div>
    <div class=\"stat-card-admin\">
        <div class=\"stat-value\">";
        // line 301
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 301, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 301, $this->source); })()), "team", [], "any", false, false, false, 301) != null); })), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">
            <i class=\"fas fa-users\"></i>
            Avec Équipe
        </div>
    </div>
    <div class=\"stat-card-admin\">
        <div class=\"stat-value\">";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::reduce($this->env, (isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 308, $this->source); })()), function ($__carry__, $__p__) use ($context, $macros) { $context["carry"] = $__carry__; $context["p"] = $__p__; return ((isset($context["carry"]) || array_key_exists("carry", $context) ? $context["carry"] : (function () { throw new RuntimeError('Variable "carry" does not exist.', 308, $this->source); })()) + Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 308, $this->source); })()), "coachingSessions", [], "any", false, false, false, 308))); }, 0), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">
            <i class=\"fas fa-calendar-check\"></i>
            Sessions liées
        </div>
    </div>
    <div class=\"stat-card-admin\">
        <div class=\"stat-value\">";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((Twig\Extension\CoreExtension::reduce($this->env, (isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 315, $this->source); })()), function ($__carry__, $__p__) use ($context, $macros) { $context["carry"] = $__carry__; $context["p"] = $__p__; return ((isset($context["carry"]) || array_key_exists("carry", $context) ? $context["carry"] : (function () { throw new RuntimeError('Variable "carry" does not exist.', 315, $this->source); })()) + Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 315, $this->source); })()), "coachingSessions", [], "any", false, false, false, 315))); }, 0) / max(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 315, $this->source); })())), 1))), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">
            <i class=\"fas fa-chart-line\"></i>
            Moy. sessions/plan
        </div>
    </div>
</div>

<!-- Section Filtres -->
<div class=\"filter-section\">
    <form method=\"get\" action=\"";
        // line 325
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_index");
        yield "\" id=\"filter-form\">
        <div class=\"filter-grid\">
            <div class=\"filter-group\">
                <label><i class=\"fas fa-search\"></i> Recherche</label>
                <input type=\"text\" name=\"search\" placeholder=\"Titre, description...\" value=\"";
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 329, $this->source); })()), "request", [], "any", false, false, false, 329), "get", ["search"], "method", false, false, false, 329), "html", null, true);
        yield "\">
            </div>
            
            <div class=\"filter-group\">
                <label><i class=\"fas fa-bullseye\"></i> Focus</label>
                <select name=\"focus\">
                    <option value=\"\">Tous les focus</option>
                    <option value=\"Défense\" ";
        // line 336
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 336, $this->source); })()), "request", [], "any", false, false, false, 336), "get", ["focus"], "method", false, false, false, 336) == "Défense")) {
            yield "selected";
        }
        yield ">Défense</option>
                    <option value=\"Attaque\" ";
        // line 337
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 337, $this->source); })()), "request", [], "any", false, false, false, 337), "get", ["focus"], "method", false, false, false, 337) == "Attaque")) {
            yield "selected";
        }
        yield ">Attaque</option>
                    <option value=\"Stratégie\" ";
        // line 338
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 338, $this->source); })()), "request", [], "any", false, false, false, 338), "get", ["focus"], "method", false, false, false, 338) == "Stratégie")) {
            yield "selected";
        }
        yield ">Stratégie</option>
                    <option value=\"Communication\" ";
        // line 339
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 339, $this->source); })()), "request", [], "any", false, false, false, 339), "get", ["focus"], "method", false, false, false, 339) == "Communication")) {
            yield "selected";
        }
        yield ">Communication</option>
                    <option value=\"Technique\" ";
        // line 340
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 340, $this->source); })()), "request", [], "any", false, false, false, 340), "get", ["focus"], "method", false, false, false, 340) == "Technique")) {
            yield "selected";
        }
        yield ">Technique</option>
                    <option value=\"Physique\" ";
        // line 341
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 341, $this->source); })()), "request", [], "any", false, false, false, 341), "get", ["focus"], "method", false, false, false, 341) == "Physique")) {
            yield "selected";
        }
        yield ">Physique</option>
                    <option value=\"Mental\" ";
        // line 342
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 342, $this->source); })()), "request", [], "any", false, false, false, 342), "get", ["focus"], "method", false, false, false, 342) == "Mental")) {
            yield "selected";
        }
        yield ">Mental</option>
                    <option value=\"Tactique\" ";
        // line 343
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 343, $this->source); })()), "request", [], "any", false, false, false, 343), "get", ["focus"], "method", false, false, false, 343) == "Tactique")) {
            yield "selected";
        }
        yield ">Tactique</option>
                </select>
            </div>
            
            <div class=\"filter-group\">
                <label><i class=\"fas fa-chart-line\"></i> Difficulté</label>
                <select name=\"difficulty\">
                    <option value=\"\">Toutes les difficultés</option>
                    <option value=\"Débutant\" ";
        // line 351
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 351, $this->source); })()), "request", [], "any", false, false, false, 351), "get", ["difficulty"], "method", false, false, false, 351) == "Débutant")) {
            yield "selected";
        }
        yield ">Débutant</option>
                    <option value=\"Intermédiaire\" ";
        // line 352
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 352, $this->source); })()), "request", [], "any", false, false, false, 352), "get", ["difficulty"], "method", false, false, false, 352) == "Intermédiaire")) {
            yield "selected";
        }
        yield ">Intermédiaire</option>
                    <option value=\"Avancé\" ";
        // line 353
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 353, $this->source); })()), "request", [], "any", false, false, false, 353), "get", ["difficulty"], "method", false, false, false, 353) == "Avancé")) {
            yield "selected";
        }
        yield ">Avancé</option>
                    <option value=\"Expert\" ";
        // line 354
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 354, $this->source); })()), "request", [], "any", false, false, false, 354), "get", ["difficulty"], "method", false, false, false, 354) == "Expert")) {
            yield "selected";
        }
        yield ">Expert</option>
                    <option value=\"Professionnel\" ";
        // line 355
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 355, $this->source); })()), "request", [], "any", false, false, false, 355), "get", ["difficulty"], "method", false, false, false, 355) == "Professionnel")) {
            yield "selected";
        }
        yield ">Professionnel</option>
                </select>
            </div>
            
            <div class=\"filter-group\">
                <label><i class=\"fas fa-user-tie\"></i> Coach</label>
                <select name=\"coach\">
                    <option value=\"\">Tous les coachs</option>
                    ";
        // line 363
        $context["coaches"] = [];
        // line 364
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 364, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 365
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "coach", [], "any", false, false, false, 365) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "coach", [], "any", false, false, false, 365), "id", [], "any", false, false, false, 365), (isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 365, $this->source); })())))) {
                // line 366
                yield "                            ";
                $context["coaches"] = Twig\Extension\CoreExtension::merge((isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 366, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "coach", [], "any", false, false, false, 366), "id", [], "any", false, false, false, 366)]);
                // line 367
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "coach", [], "any", false, false, false, 367), "id", [], "any", false, false, false, 367), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 367, $this->source); })()), "request", [], "any", false, false, false, 367), "get", ["coach"], "method", false, false, false, 367) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "coach", [], "any", false, false, false, 367), "id", [], "any", false, false, false, 367))) {
                    yield "selected";
                }
                yield ">
                                ";
                // line 368
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "coach", [], "any", false, false, false, 368), "fullName", [], "any", false, false, false, 368), "html", null, true);
                yield "
                            </option>
                        ";
            }
            // line 371
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['plan'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 372
        yield "                </select>
            </div>
            
            <div class=\"filter-group\">
                <label><i class=\"fas fa-users\"></i> Équipe</label>
                <select name=\"team\">
                    <option value=\"\">Toutes les équipes</option>
                    ";
        // line 379
        $context["teams"] = [];
        // line 380
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 380, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 381
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "team", [], "any", false, false, false, 381) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "team", [], "any", false, false, false, 381), "id", [], "any", false, false, false, 381), (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 381, $this->source); })())))) {
                // line 382
                yield "                            ";
                $context["teams"] = Twig\Extension\CoreExtension::merge((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 382, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "team", [], "any", false, false, false, 382), "id", [], "any", false, false, false, 382)]);
                // line 383
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "team", [], "any", false, false, false, 383), "id", [], "any", false, false, false, 383), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 383, $this->source); })()), "request", [], "any", false, false, false, 383), "get", ["team"], "method", false, false, false, 383) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "team", [], "any", false, false, false, 383), "id", [], "any", false, false, false, 383))) {
                    yield "selected";
                }
                yield ">
                                ";
                // line 384
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "team", [], "any", false, false, false, 384), "name", [], "any", false, false, false, 384), "html", null, true);
                yield "
                            </option>
                        ";
            }
            // line 387
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['plan'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 388
        yield "                </select>
            </div>
            
            <div class=\"filter-group\">
                <label><i class=\"fas fa-calendar\"></i> Date min</label>
                <input type=\"date\" name=\"date_from\" value=\"";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 393, $this->source); })()), "request", [], "any", false, false, false, 393), "get", ["date_from"], "method", false, false, false, 393), "html", null, true);
        yield "\">
            </div>
            
            <div class=\"filter-group\">
                <label><i class=\"fas fa-calendar\"></i> Date max</label>
                <input type=\"date\" name=\"date_to\" value=\"";
        // line 398
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 398, $this->source); })()), "request", [], "any", false, false, false, 398), "get", ["date_to"], "method", false, false, false, 398), "html", null, true);
        yield "\">
            </div>
        </div>
        
        <div class=\"filter-actions\">
            <button type=\"submit\" class=\"btn-filter btn-filter-primary\">
                <i class=\"fas fa-filter\"></i> Appliquer les filtres
            </button>
            <a href=\"";
        // line 406
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_index");
        yield "\" class=\"btn-filter btn-filter-secondary\">
                <i class=\"fas fa-redo\"></i> Réinitialiser
            </a>
        </div>
    </form>
</div>

<!-- Filtres actifs -->
";
        // line 414
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 414, $this->source); })()), "request", [], "any", false, false, false, 414), "queryString", [], "any", false, false, false, 414)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 415
            yield "<div class=\"active-filters\">
    <span class=\"filter-tag\">
        <i class=\"fas fa-filter\"></i> Filtres actifs
        <i class=\"fas fa-times\" onclick=\"window.location.href='";
            // line 418
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_index");
            yield "'\"></i>
    </span>
</div>
";
        }
        // line 422
        yield "
<div class=\"admin-card\">
    <div style=\"display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; flex-wrap: wrap; gap: 15px;\">
        <h3><i class=\"fas fa-list\"></i> Liste des Plans</h3>
        <div style=\"display: flex; gap: 10px; align-items: center;\">
            <span style=\"color: var(--text-muted); font-size: 13px;\">
                ";
        // line 428
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 428, $this->source); })())), "html", null, true);
        yield " plan(s) trouvé(s)
            </span>
            <select class=\"items-per-page\" onchange=\"changeLimit(this.value)\">
                <option value=\"10\" ";
        // line 431
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 431, $this->source); })()), "request", [], "any", false, false, false, 431), "get", ["limit"], "method", false, false, false, 431) == 10)) {
            yield "selected";
        }
        yield ">10 par page</option>
                <option value=\"25\" ";
        // line 432
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 432, $this->source); })()), "request", [], "any", false, false, false, 432), "get", ["limit"], "method", false, false, false, 432) == 25)) {
            yield "selected";
        }
        yield ">25 par page</option>
                <option value=\"50\" ";
        // line 433
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 433, $this->source); })()), "request", [], "any", false, false, false, 433), "get", ["limit"], "method", false, false, false, 433) == 50)) {
            yield "selected";
        }
        yield ">50 par page</option>
                <option value=\"100\" ";
        // line 434
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 434, $this->source); })()), "request", [], "any", false, false, false, 434), "get", ["limit"], "method", false, false, false, 434) == 100)) {
            yield "selected";
        }
        yield ">100 par page</option>
            </select>
            <a href=\"";
        // line 436
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_new");
        yield "\" class=\"btn-admin btn-admin-primary\">
                <i class=\"fas fa-plus\"></i> Nouveau Plan
            </a>
        </div>
    </div>

    ";
        // line 442
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 442, $this->source); })())) > 0)) {
            // line 443
            yield "    <div class=\"table-responsive\">
        <table class=\"admin-table\">
            <thead>
                <tr>
                    <th class=\"sortable-header\" onclick=\"sortBy('id')\">
                        ID <i class=\"fas fa-sort\"></i>
                    </th>
                    <th class=\"sortable-header\" onclick=\"sortBy('title')\">
                        Titre <i class=\"fas fa-sort\"></i>
                    </th>
                    <th>Zone de Focus</th>
                    <th>Difficulté</th>
                    <th class=\"sortable-header\" onclick=\"sortBy('coach')\">
                        Coach <i class=\"fas fa-sort\"></i>
                    </th>
                    <th class=\"sortable-header\" onclick=\"sortBy('team')\">
                        Équipe <i class=\"fas fa-sort\"></i>
                    </th>
                    <th class=\"sortable-header\" onclick=\"sortBy('date')\">
                        Créé le <i class=\"fas fa-sort\"></i>
                    </th>
                    <th>Sessions</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 469
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 469, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
                // line 470
                yield "                <tr>
                    <td><strong>#";
                // line 471
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 471), "html", null, true);
                yield "</strong></td>
                    <td>
                        <strong>";
                // line 473
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "title", [], "any", false, false, false, 473), "html", null, true);
                yield "</strong>
                        <div style=\"font-size: 0.85rem; color: var(--text-muted); margin-top: 3px;\">
                            ";
                // line 475
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "description", [], "any", false, false, false, 475), 0, 50), "html", null, true);
                yield "...
                        </div>
                    </td>
                    <td>
                        <span class=\"badge-admin\" style=\"background: rgba(0, 243, 255, 0.2); color: #00f3ff;\">
                            <i class=\"fas fa-bullseye\"></i> ";
                // line 480
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "focusArea", [], "any", false, false, false, 480), "html", null, true);
                yield "
                        </span>
                    </td>
                    <td>
                        ";
                // line 484
                $context["difficultyColors"] = ["Débutant" => "#4CAF50", "Intermédiaire" => "#2196F3", "Avancé" => "#FF9800", "Expert" => "#F44336", "Professionnel" => "#9C27B0"];
                // line 491
                yield "                        <span class=\"badge-admin\" style=\"background: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["difficultyColors"]) || array_key_exists("difficultyColors", $context) ? $context["difficultyColors"] : (function () { throw new RuntimeError('Variable "difficultyColors" does not exist.', 491, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "difficultyLevel", [], "any", false, false, false, 491), [], "array", false, false, false, 491), "html", null, true);
                yield "20; color: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["difficultyColors"]) || array_key_exists("difficultyColors", $context) ? $context["difficultyColors"] : (function () { throw new RuntimeError('Variable "difficultyColors" does not exist.', 491, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "difficultyLevel", [], "any", false, false, false, 491), [], "array", false, false, false, 491), "html", null, true);
                yield ";\">
                            <i class=\"fas fa-chart-line\"></i> ";
                // line 492
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "difficultyLevel", [], "any", false, false, false, 492), "html", null, true);
                yield "
                        </span>
                    </td>
                    <td>
                        ";
                // line 496
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "coach", [], "any", false, false, false, 496)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 497
                    yield "                            <span class=\"coach-badge\">
                                <i class=\"fas fa-user-tie\"></i>
                                ";
                    // line 499
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "coach", [], "any", false, false, false, 499), "fullName", [], "any", false, false, false, 499), "html", null, true);
                    yield "
                            </span>
                        ";
                } else {
                    // line 502
                    yield "                            <span style=\"color: var(--text-muted);\">Non assigné</span>
                        ";
                }
                // line 504
                yield "                    </td>
                    <td>
                        ";
                // line 506
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "team", [], "any", false, false, false, 506)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 507
                    yield "                            <span class=\"team-badge\">
                                <i class=\"fas fa-users\"></i>
                                ";
                    // line 509
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "team", [], "any", false, false, false, 509), "name", [], "any", false, false, false, 509), "html", null, true);
                    yield "
                            </span>
                        ";
                } else {
                    // line 512
                    yield "                            <span style=\"color: var(--text-muted);\">Non assignée</span>
                        ";
                }
                // line 514
                yield "                    </td>
                    <td>
                        <span class=\"badge-admin\" style=\"background: rgba(255, 193, 7, 0.2); color: #ffc107;\">
                            <i class=\"fas fa-calendar\"></i> ";
                // line 517
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "createdAt", [], "any", false, false, false, 517), "d/m/Y"), "html", null, true);
                yield "
                        </span>
                    </td>
                    <td>
                        <span class=\"badge-admin\" style=\"background: rgba(52, 152, 219, 0.2); color: #3498db;\">
                            <i class=\"fas fa-calendar-check\"></i> ";
                // line 522
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "coachingSessions", [], "any", false, false, false, 522)), "html", null, true);
                yield "
                        </span>
                    </td>
                    <td>
                        <div style=\"display: flex; gap: 10px;\">
                            <a href=\"";
                // line 527
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 527)]), "html", null, true);
                yield "\" 
                               class=\"btn-admin btn-admin-secondary\" style=\"padding: 5px 10px; font-size: 0.9rem;\" title=\"Voir\">
                                <i class=\"fas fa-eye\"></i>
                            </a>
                            <a href=\"";
                // line 531
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 531)]), "html", null, true);
                yield "\" 
                               class=\"btn-admin btn-admin-primary\" style=\"padding: 5px 10px; font-size: 0.9rem;\" title=\"Modifier\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"";
                // line 535
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 535)]), "html", null, true);
                yield "\" 
                                  onsubmit=\"return confirmDelete('";
                // line 536
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 536), "html", null, true);
                yield "', ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "coachingSessions", [], "any", false, false, false, 536)), "html", null, true);
                yield ")\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 537
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 537))), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"btn-admin btn-admin-danger\" style=\"padding: 5px 10px; font-size: 0.9rem;\" title=\"Supprimer\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 546
            yield "            </tbody>
        </table>
    </div>

    <!-- Pagination simplifiée -->
    ";
            // line 551
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 551, $this->source); })())) > 20)) {
                // line 552
                yield "    <div class=\"pagination\">
        <a href=\"#\" class=\"pagination-item disabled\">
            <i class=\"fas fa-angle-double-left\"></i>
        </a>
        <a href=\"#\" class=\"pagination-item disabled\">
            <i class=\"fas fa-angle-left\"></i>
        </a>
        
        <a href=\"#\" class=\"pagination-item active\">1</a>
        <a href=\"#\" class=\"pagination-item\">2</a>
        <a href=\"#\" class=\"pagination-item\">3</a>
        
        <a href=\"#\" class=\"pagination-item\">
            <i class=\"fas fa-angle-right\"></i>
        </a>
        <a href=\"#\" class=\"pagination-item\">
            <i class=\"fas fa-angle-double-right\"></i>
        </a>
    </div>
    ";
            }
            // line 572
            yield "
    ";
        } else {
            // line 574
            yield "    <div style=\"text-align: center; padding: 40px; color: rgba(255, 255, 255, 0.5);\">
        <i class=\"fas fa-dumbbell\" style=\"font-size: 3rem; margin-bottom: 20px;\"></i>
        <p>Aucun plan d'entraînement trouvé.</p>
        <a href=\"";
            // line 577
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_new");
            yield "\" class=\"btn-admin btn-admin-primary\" style=\"margin-top: 15px; display: inline-block;\">
            <i class=\"fas fa-plus\"></i> Créer votre premier plan
        </a>
    </div>
    ";
        }
        // line 582
        yield "</div>

<!-- Script pour les fonctionnalités -->
<script>
let currentSort = {
    field: '";
        // line 587
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 587, $this->source); })()), "request", [], "any", false, false, false, 587), "get", ["sort", "id"], "method", false, false, false, 587), "html", null, true);
        yield "',
    order: '";
        // line 588
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 588, $this->source); })()), "request", [], "any", false, false, false, 588), "get", ["order", "asc"], "method", false, false, false, 588), "html", null, true);
        yield "'
};

function sortBy(field) {
    const url = new URL(window.location.href);
    
    // Toggle order if same field
    if (currentSort.field === field) {
        currentSort.order = currentSort.order === 'asc' ? 'desc' : 'asc';
    } else {
        currentSort.field = field;
        currentSort.order = 'asc';
    }
    
    url.searchParams.set('sort', currentSort.field);
    url.searchParams.set('order', currentSort.order);
    
    window.location.href = url.toString();
}

function changeLimit(limit) {
    const url = new URL(window.location.href);
    url.searchParams.set('limit', limit);
    window.location.href = url.toString();
}

function confirmDelete(planId, sessionsCount) {
    let message = `⚠️ SUPPRESSION DÉFINITIVE\\n\\nÊtes-vous sûr de vouloir supprimer le plan #\${planId} ?`;
    
    if (sessionsCount > 0) {
        message += `\\n\\n⚠️ Attention : Ce plan est utilisé dans \${sessionsCount} session(s) de coaching.\\nCes sessions seront également supprimées !`;
    }
    
    message += `\\n\\nCette action est irréversible.`;
    
    return confirm(message);
}

// Mettre en évidence la colonne triée
document.addEventListener('DOMContentLoaded', function() {
    const headers = document.querySelectorAll('.sortable-header');
    headers.forEach(header => {
        const icon = header.querySelector('i');
        if (icon) {
            if (header.textContent.toLowerCase().includes(currentSort.field.toLowerCase())) {
                header.classList.add('active');
                icon.className = `fas fa-sort-\${currentSort.order}`;
            } else {
                icon.className = 'fas fa-sort';
            }
        }
    });
});

// Filtres
const filterForm = document.getElementById('filter-form');
if (filterForm) {
    filterForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const url = new URL(window.location.href);
        const formData = new FormData(this);
        
        for (let [key, value] of formData.entries()) {
            if (value) {
                url.searchParams.set(key, value);
            } else {
                url.searchParams.delete(key);
            }
        }
        
        window.location.href = url.toString();
    });
}
</script>
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
        return "back/entrainement/index.html.twig";
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
        return array (  977 => 588,  973 => 587,  966 => 582,  958 => 577,  953 => 574,  949 => 572,  927 => 552,  925 => 551,  918 => 546,  903 => 537,  897 => 536,  893 => 535,  886 => 531,  879 => 527,  871 => 522,  863 => 517,  858 => 514,  854 => 512,  848 => 509,  844 => 507,  842 => 506,  838 => 504,  834 => 502,  828 => 499,  824 => 497,  822 => 496,  815 => 492,  808 => 491,  806 => 484,  799 => 480,  791 => 475,  786 => 473,  781 => 471,  778 => 470,  774 => 469,  746 => 443,  744 => 442,  735 => 436,  728 => 434,  722 => 433,  716 => 432,  710 => 431,  704 => 428,  696 => 422,  689 => 418,  684 => 415,  682 => 414,  671 => 406,  660 => 398,  652 => 393,  645 => 388,  639 => 387,  633 => 384,  624 => 383,  621 => 382,  618 => 381,  613 => 380,  611 => 379,  602 => 372,  596 => 371,  590 => 368,  581 => 367,  578 => 366,  575 => 365,  570 => 364,  568 => 363,  555 => 355,  549 => 354,  543 => 353,  537 => 352,  531 => 351,  518 => 343,  512 => 342,  506 => 341,  500 => 340,  494 => 339,  488 => 338,  482 => 337,  476 => 336,  466 => 329,  459 => 325,  446 => 315,  436 => 308,  426 => 301,  416 => 294,  406 => 287,  392 => 275,  379 => 274,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Gestion des Plans d'Entraînement{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    /* Styles supplémentaires pour le backoffice */
    .filter-section {
        background: rgba(0, 0, 0, 0.2);
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 25px;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }
    
    .filter-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
        margin-bottom: 15px;
    }
    
    .filter-group {
        display: flex;
        flex-direction: column;
    }
    
    .filter-group label {
        font-size: 12px;
        text-transform: uppercase;
        color: var(--text-muted);
        margin-bottom: 5px;
        font-weight: 600;
        letter-spacing: 0.5px;
    }
    
    .filter-group input,
    .filter-group select {
        padding: 10px 12px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 6px;
        color: var(--text-light);
        font-size: 14px;
    }
    
    .filter-group input:focus,
    .filter-group select:focus {
        outline: none;
        border-color: var(--red);
        background: rgba(255, 45, 45, 0.05);
    }
    
    .filter-actions {
        display: flex;
        gap: 10px;
        justify-content: flex-end;
        margin-top: 15px;
        padding-top: 15px;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
    }
    
    .btn-filter {
        padding: 10px 20px;
        border-radius: 6px;
        font-weight: 600;
        font-size: 13px;
        text-decoration: none;
        transition: var(--transition);
        display: inline-flex;
        align-items: center;
        gap: 8px;
        border: none;
        cursor: pointer;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .btn-filter-primary {
        background: linear-gradient(135deg, #ff0000, #ff2d2d);
        color: white;
    }
    
    .btn-filter-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 0, 0, 0.3);
    }
    
    .btn-filter-secondary {
        background: rgba(255, 255, 255, 0.05);
        color: var(--text-muted);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .btn-filter-secondary:hover {
        background: rgba(255, 255, 255, 0.1);
        color: var(--text-light);
    }
    
    .sortable-header {
        cursor: pointer;
        position: relative;
        padding-right: 20px;
        user-select: none;
    }
    
    .sortable-header:hover {
        color: var(--red);
    }
    
    .sortable-header i {
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        font-size: 12px;
        opacity: 0.5;
    }
    
    .sortable-header.active i {
        opacity: 1;
        color: var(--red);
    }
    
    .stats-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 20px;
        margin-bottom: 25px;
    }
    
    .stat-card-admin {
        background: rgba(255, 45, 45, 0.1);
        border: 1px solid rgba(255, 45, 45, 0.2);
        border-radius: 10px;
        padding: 20px;
        transition: var(--transition);
    }
    
    .stat-card-admin:hover {
        transform: translateY(-3px);
        border-color: var(--red);
        box-shadow: 0 5px 15px rgba(255, 0, 0, 0.2);
    }
    
    .stat-card-admin .stat-value {
        font-size: 28px;
        font-weight: 800;
        background: linear-gradient(90deg, #ff2d2d, #ff5e5e);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        margin-bottom: 5px;
    }
    
    .stat-card-admin .stat-label {
        font-size: 13px;
        color: var(--text-muted);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .stat-card-admin .stat-label i {
        color: var(--red);
        font-size: 14px;
    }
    
    .active-filters {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin: 15px 0;
    }
    
    .filter-tag {
        background: rgba(255, 45, 45, 0.1);
        border: 1px solid rgba(255, 45, 45, 0.3);
        border-radius: 20px;
        padding: 5px 15px;
        font-size: 12px;
        color: var(--red);
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .filter-tag i {
        cursor: pointer;
        font-size: 10px;
    }
    
    .filter-tag i:hover {
        color: white;
    }
    
    .pagination {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 25px;
    }
    
    .pagination-item {
        padding: 8px 12px;
        border-radius: 6px;
        background: rgba(255, 255, 255, 0.05);
        color: var(--text-muted);
        text-decoration: none;
        transition: var(--transition);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .pagination-item:hover,
    .pagination-item.active {
        background: var(--red);
        color: white;
        border-color: var(--red);
    }
    
    .pagination-item.disabled {
        opacity: 0.3;
        pointer-events: none;
    }
    
    .coach-badge {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 3px 10px;
        background: rgba(52, 152, 219, 0.1);
        border: 1px solid rgba(52, 152, 219, 0.2);
        border-radius: 15px;
        font-size: 12px;
        color: #3498db;
    }
    
    .team-badge {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 3px 10px;
        background: rgba(155, 89, 182, 0.1);
        border: 1px solid rgba(155, 89, 182, 0.2);
        border-radius: 15px;
        font-size: 12px;
        color: #9b59b6;
    }
    
    .items-per-page {
        padding: 8px;
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 4px;
        color: var(--text-light);
        font-size: 13px;
        cursor: pointer;
    }
    
    .items-per-page:hover {
        border-color: var(--red);
    }
    
    .items-per-page:focus {
        outline: none;
        border-color: var(--red);
    }
</style>
{% endblock %}

{% block body %}
<div class=\"admin-header\">
    <div style=\"display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px;\">
        <div>
            <h1><i class=\"fas fa-dumbbell\"></i> Plans d'Entraînement</h1>
            <p>Gérez les plans d'entraînement de l'application</p>
        </div>
    </div>
</div>

<!-- Statistiques -->
<div class=\"stats-cards\">
    <div class=\"stat-card-admin\">
        <div class=\"stat-value\">{{ training_plans|length }}</div>
        <div class=\"stat-label\">
            <i class=\"fas fa-dumbbell\"></i>
            Total Plans
        </div>
    </div>
    <div class=\"stat-card-admin\">
        <div class=\"stat-value\">{{ training_plans|filter(p => p.coach != null)|length }}</div>
        <div class=\"stat-label\">
            <i class=\"fas fa-user-tie\"></i>
            Avec Coach
        </div>
    </div>
    <div class=\"stat-card-admin\">
        <div class=\"stat-value\">{{ training_plans|filter(p => p.team != null)|length }}</div>
        <div class=\"stat-label\">
            <i class=\"fas fa-users\"></i>
            Avec Équipe
        </div>
    </div>
    <div class=\"stat-card-admin\">
        <div class=\"stat-value\">{{ training_plans|reduce((carry, p) => carry + p.coachingSessions|length, 0) }}</div>
        <div class=\"stat-label\">
            <i class=\"fas fa-calendar-check\"></i>
            Sessions liées
        </div>
    </div>
    <div class=\"stat-card-admin\">
        <div class=\"stat-value\">{{ (training_plans|reduce((carry, p) => carry + p.coachingSessions|length, 0) / max(training_plans|length, 1))|round }}</div>
        <div class=\"stat-label\">
            <i class=\"fas fa-chart-line\"></i>
            Moy. sessions/plan
        </div>
    </div>
</div>

<!-- Section Filtres -->
<div class=\"filter-section\">
    <form method=\"get\" action=\"{{ path('app_training_plan_index') }}\" id=\"filter-form\">
        <div class=\"filter-grid\">
            <div class=\"filter-group\">
                <label><i class=\"fas fa-search\"></i> Recherche</label>
                <input type=\"text\" name=\"search\" placeholder=\"Titre, description...\" value=\"{{ app.request.get('search') }}\">
            </div>
            
            <div class=\"filter-group\">
                <label><i class=\"fas fa-bullseye\"></i> Focus</label>
                <select name=\"focus\">
                    <option value=\"\">Tous les focus</option>
                    <option value=\"Défense\" {% if app.request.get('focus') == 'Défense' %}selected{% endif %}>Défense</option>
                    <option value=\"Attaque\" {% if app.request.get('focus') == 'Attaque' %}selected{% endif %}>Attaque</option>
                    <option value=\"Stratégie\" {% if app.request.get('focus') == 'Stratégie' %}selected{% endif %}>Stratégie</option>
                    <option value=\"Communication\" {% if app.request.get('focus') == 'Communication' %}selected{% endif %}>Communication</option>
                    <option value=\"Technique\" {% if app.request.get('focus') == 'Technique' %}selected{% endif %}>Technique</option>
                    <option value=\"Physique\" {% if app.request.get('focus') == 'Physique' %}selected{% endif %}>Physique</option>
                    <option value=\"Mental\" {% if app.request.get('focus') == 'Mental' %}selected{% endif %}>Mental</option>
                    <option value=\"Tactique\" {% if app.request.get('focus') == 'Tactique' %}selected{% endif %}>Tactique</option>
                </select>
            </div>
            
            <div class=\"filter-group\">
                <label><i class=\"fas fa-chart-line\"></i> Difficulté</label>
                <select name=\"difficulty\">
                    <option value=\"\">Toutes les difficultés</option>
                    <option value=\"Débutant\" {% if app.request.get('difficulty') == 'Débutant' %}selected{% endif %}>Débutant</option>
                    <option value=\"Intermédiaire\" {% if app.request.get('difficulty') == 'Intermédiaire' %}selected{% endif %}>Intermédiaire</option>
                    <option value=\"Avancé\" {% if app.request.get('difficulty') == 'Avancé' %}selected{% endif %}>Avancé</option>
                    <option value=\"Expert\" {% if app.request.get('difficulty') == 'Expert' %}selected{% endif %}>Expert</option>
                    <option value=\"Professionnel\" {% if app.request.get('difficulty') == 'Professionnel' %}selected{% endif %}>Professionnel</option>
                </select>
            </div>
            
            <div class=\"filter-group\">
                <label><i class=\"fas fa-user-tie\"></i> Coach</label>
                <select name=\"coach\">
                    <option value=\"\">Tous les coachs</option>
                    {% set coaches = [] %}
                    {% for plan in training_plans %}
                        {% if plan.coach and plan.coach.id not in coaches %}
                            {% set coaches = coaches|merge([plan.coach.id]) %}
                            <option value=\"{{ plan.coach.id }}\" {% if app.request.get('coach') == plan.coach.id %}selected{% endif %}>
                                {{ plan.coach.fullName }}
                            </option>
                        {% endif %}
                    {% endfor %}
                </select>
            </div>
            
            <div class=\"filter-group\">
                <label><i class=\"fas fa-users\"></i> Équipe</label>
                <select name=\"team\">
                    <option value=\"\">Toutes les équipes</option>
                    {% set teams = [] %}
                    {% for plan in training_plans %}
                        {% if plan.team and plan.team.id not in teams %}
                            {% set teams = teams|merge([plan.team.id]) %}
                            <option value=\"{{ plan.team.id }}\" {% if app.request.get('team') == plan.team.id %}selected{% endif %}>
                                {{ plan.team.name }}
                            </option>
                        {% endif %}
                    {% endfor %}
                </select>
            </div>
            
            <div class=\"filter-group\">
                <label><i class=\"fas fa-calendar\"></i> Date min</label>
                <input type=\"date\" name=\"date_from\" value=\"{{ app.request.get('date_from') }}\">
            </div>
            
            <div class=\"filter-group\">
                <label><i class=\"fas fa-calendar\"></i> Date max</label>
                <input type=\"date\" name=\"date_to\" value=\"{{ app.request.get('date_to') }}\">
            </div>
        </div>
        
        <div class=\"filter-actions\">
            <button type=\"submit\" class=\"btn-filter btn-filter-primary\">
                <i class=\"fas fa-filter\"></i> Appliquer les filtres
            </button>
            <a href=\"{{ path('app_training_plan_index') }}\" class=\"btn-filter btn-filter-secondary\">
                <i class=\"fas fa-redo\"></i> Réinitialiser
            </a>
        </div>
    </form>
</div>

<!-- Filtres actifs -->
{% if app.request.queryString %}
<div class=\"active-filters\">
    <span class=\"filter-tag\">
        <i class=\"fas fa-filter\"></i> Filtres actifs
        <i class=\"fas fa-times\" onclick=\"window.location.href='{{ path('app_training_plan_index') }}'\"></i>
    </span>
</div>
{% endif %}

<div class=\"admin-card\">
    <div style=\"display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; flex-wrap: wrap; gap: 15px;\">
        <h3><i class=\"fas fa-list\"></i> Liste des Plans</h3>
        <div style=\"display: flex; gap: 10px; align-items: center;\">
            <span style=\"color: var(--text-muted); font-size: 13px;\">
                {{ training_plans|length }} plan(s) trouvé(s)
            </span>
            <select class=\"items-per-page\" onchange=\"changeLimit(this.value)\">
                <option value=\"10\" {% if app.request.get('limit') == 10 %}selected{% endif %}>10 par page</option>
                <option value=\"25\" {% if app.request.get('limit') == 25 %}selected{% endif %}>25 par page</option>
                <option value=\"50\" {% if app.request.get('limit') == 50 %}selected{% endif %}>50 par page</option>
                <option value=\"100\" {% if app.request.get('limit') == 100 %}selected{% endif %}>100 par page</option>
            </select>
            <a href=\"{{ path('app_training_plan_new') }}\" class=\"btn-admin btn-admin-primary\">
                <i class=\"fas fa-plus\"></i> Nouveau Plan
            </a>
        </div>
    </div>

    {% if training_plans|length > 0 %}
    <div class=\"table-responsive\">
        <table class=\"admin-table\">
            <thead>
                <tr>
                    <th class=\"sortable-header\" onclick=\"sortBy('id')\">
                        ID <i class=\"fas fa-sort\"></i>
                    </th>
                    <th class=\"sortable-header\" onclick=\"sortBy('title')\">
                        Titre <i class=\"fas fa-sort\"></i>
                    </th>
                    <th>Zone de Focus</th>
                    <th>Difficulté</th>
                    <th class=\"sortable-header\" onclick=\"sortBy('coach')\">
                        Coach <i class=\"fas fa-sort\"></i>
                    </th>
                    <th class=\"sortable-header\" onclick=\"sortBy('team')\">
                        Équipe <i class=\"fas fa-sort\"></i>
                    </th>
                    <th class=\"sortable-header\" onclick=\"sortBy('date')\">
                        Créé le <i class=\"fas fa-sort\"></i>
                    </th>
                    <th>Sessions</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for plan in training_plans %}
                <tr>
                    <td><strong>#{{ plan.id }}</strong></td>
                    <td>
                        <strong>{{ plan.title }}</strong>
                        <div style=\"font-size: 0.85rem; color: var(--text-muted); margin-top: 3px;\">
                            {{ plan.description|slice(0, 50) }}...
                        </div>
                    </td>
                    <td>
                        <span class=\"badge-admin\" style=\"background: rgba(0, 243, 255, 0.2); color: #00f3ff;\">
                            <i class=\"fas fa-bullseye\"></i> {{ plan.focusArea }}
                        </span>
                    </td>
                    <td>
                        {% set difficultyColors = {
                            'Débutant': '#4CAF50',
                            'Intermédiaire': '#2196F3',
                            'Avancé': '#FF9800',
                            'Expert': '#F44336',
                            'Professionnel': '#9C27B0'
                        } %}
                        <span class=\"badge-admin\" style=\"background: {{ difficultyColors[plan.difficultyLevel] }}20; color: {{ difficultyColors[plan.difficultyLevel] }};\">
                            <i class=\"fas fa-chart-line\"></i> {{ plan.difficultyLevel }}
                        </span>
                    </td>
                    <td>
                        {% if plan.coach %}
                            <span class=\"coach-badge\">
                                <i class=\"fas fa-user-tie\"></i>
                                {{ plan.coach.fullName }}
                            </span>
                        {% else %}
                            <span style=\"color: var(--text-muted);\">Non assigné</span>
                        {% endif %}
                    </td>
                    <td>
                        {% if plan.team %}
                            <span class=\"team-badge\">
                                <i class=\"fas fa-users\"></i>
                                {{ plan.team.name }}
                            </span>
                        {% else %}
                            <span style=\"color: var(--text-muted);\">Non assignée</span>
                        {% endif %}
                    </td>
                    <td>
                        <span class=\"badge-admin\" style=\"background: rgba(255, 193, 7, 0.2); color: #ffc107;\">
                            <i class=\"fas fa-calendar\"></i> {{ plan.createdAt|date('d/m/Y') }}
                        </span>
                    </td>
                    <td>
                        <span class=\"badge-admin\" style=\"background: rgba(52, 152, 219, 0.2); color: #3498db;\">
                            <i class=\"fas fa-calendar-check\"></i> {{ plan.coachingSessions|length }}
                        </span>
                    </td>
                    <td>
                        <div style=\"display: flex; gap: 10px;\">
                            <a href=\"{{ path('app_training_plan_show', {'id': plan.id}) }}\" 
                               class=\"btn-admin btn-admin-secondary\" style=\"padding: 5px 10px; font-size: 0.9rem;\" title=\"Voir\">
                                <i class=\"fas fa-eye\"></i>
                            </a>
                            <a href=\"{{ path('app_training_plan_edit', {'id': plan.id}) }}\" 
                               class=\"btn-admin btn-admin-primary\" style=\"padding: 5px 10px; font-size: 0.9rem;\" title=\"Modifier\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"{{ path('app_training_plan_delete', {'id': plan.id}) }}\" 
                                  onsubmit=\"return confirmDelete('{{ plan.id }}', {{ plan.coachingSessions|length }})\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ plan.id) }}\">
                                <button type=\"submit\" class=\"btn-admin btn-admin-danger\" style=\"padding: 5px 10px; font-size: 0.9rem;\" title=\"Supprimer\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

    <!-- Pagination simplifiée -->
    {% if training_plans|length > 20 %}
    <div class=\"pagination\">
        <a href=\"#\" class=\"pagination-item disabled\">
            <i class=\"fas fa-angle-double-left\"></i>
        </a>
        <a href=\"#\" class=\"pagination-item disabled\">
            <i class=\"fas fa-angle-left\"></i>
        </a>
        
        <a href=\"#\" class=\"pagination-item active\">1</a>
        <a href=\"#\" class=\"pagination-item\">2</a>
        <a href=\"#\" class=\"pagination-item\">3</a>
        
        <a href=\"#\" class=\"pagination-item\">
            <i class=\"fas fa-angle-right\"></i>
        </a>
        <a href=\"#\" class=\"pagination-item\">
            <i class=\"fas fa-angle-double-right\"></i>
        </a>
    </div>
    {% endif %}

    {% else %}
    <div style=\"text-align: center; padding: 40px; color: rgba(255, 255, 255, 0.5);\">
        <i class=\"fas fa-dumbbell\" style=\"font-size: 3rem; margin-bottom: 20px;\"></i>
        <p>Aucun plan d'entraînement trouvé.</p>
        <a href=\"{{ path('app_training_plan_new') }}\" class=\"btn-admin btn-admin-primary\" style=\"margin-top: 15px; display: inline-block;\">
            <i class=\"fas fa-plus\"></i> Créer votre premier plan
        </a>
    </div>
    {% endif %}
</div>

<!-- Script pour les fonctionnalités -->
<script>
let currentSort = {
    field: '{{ app.request.get('sort', 'id') }}',
    order: '{{ app.request.get('order', 'asc') }}'
};

function sortBy(field) {
    const url = new URL(window.location.href);
    
    // Toggle order if same field
    if (currentSort.field === field) {
        currentSort.order = currentSort.order === 'asc' ? 'desc' : 'asc';
    } else {
        currentSort.field = field;
        currentSort.order = 'asc';
    }
    
    url.searchParams.set('sort', currentSort.field);
    url.searchParams.set('order', currentSort.order);
    
    window.location.href = url.toString();
}

function changeLimit(limit) {
    const url = new URL(window.location.href);
    url.searchParams.set('limit', limit);
    window.location.href = url.toString();
}

function confirmDelete(planId, sessionsCount) {
    let message = `⚠️ SUPPRESSION DÉFINITIVE\\n\\nÊtes-vous sûr de vouloir supprimer le plan #\${planId} ?`;
    
    if (sessionsCount > 0) {
        message += `\\n\\n⚠️ Attention : Ce plan est utilisé dans \${sessionsCount} session(s) de coaching.\\nCes sessions seront également supprimées !`;
    }
    
    message += `\\n\\nCette action est irréversible.`;
    
    return confirm(message);
}

// Mettre en évidence la colonne triée
document.addEventListener('DOMContentLoaded', function() {
    const headers = document.querySelectorAll('.sortable-header');
    headers.forEach(header => {
        const icon = header.querySelector('i');
        if (icon) {
            if (header.textContent.toLowerCase().includes(currentSort.field.toLowerCase())) {
                header.classList.add('active');
                icon.className = `fas fa-sort-\${currentSort.order}`;
            } else {
                icon.className = 'fas fa-sort';
            }
        }
    });
});

// Filtres
const filterForm = document.getElementById('filter-form');
if (filterForm) {
    filterForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const url = new URL(window.location.href);
        const formData = new FormData(this);
        
        for (let [key, value] of formData.entries()) {
            if (value) {
                url.searchParams.set(key, value);
            } else {
                url.searchParams.delete(key);
            }
        }
        
        window.location.href = url.toString();
    });
}
</script>
{% endblock %}", "back/entrainement/index.html.twig", "C:\\xampp\\htdocs\\esport (3)\\esport\\templates\\back\\entrainement\\index.html.twig");
    }
}
