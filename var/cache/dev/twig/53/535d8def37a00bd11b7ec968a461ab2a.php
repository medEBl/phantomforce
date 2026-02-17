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

/* back/session_coaching/index.html.twig */
class __TwigTemplate_b1ebeff50169356306fb008510be2d71 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/session_coaching/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/session_coaching/index.html.twig"));

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

        yield "Gestion des Sessions de Coaching";
        
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
            <h1><i class=\"fas fa-calendar-check\"></i> Sessions de Coaching</h1>
            <p>Gérez les sessions de coaching programmées</p>
        </div>
    </div>
</div>

<!-- Statistiques -->
<div class=\"stats-cards\">
    <div class=\"stat-card-admin\">
        <div class=\"stat-value\">";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 287, $this->source); })())), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">
            <i class=\"fas fa-calendar-check\"></i>
            Total Sessions
        </div>
    </div>
    <div class=\"stat-card-admin\">
        <div class=\"stat-value\">";
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 294, $this->source); })()), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 294, $this->source); })()), "sessionDate", [], "any", false, false, false, 294) > $this->extensions['Twig\Extension\CoreExtension']->convertDate()); })), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">
            <i class=\"fas fa-clock\"></i>
            À venir
        </div>
    </div>
    <div class=\"stat-card-admin\">
        <div class=\"stat-value\">";
        // line 301
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 301, $this->source); })()), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 301, $this->source); })()), "sessionDate", [], "any", false, false, false, 301) <= $this->extensions['Twig\Extension\CoreExtension']->convertDate()); })), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">
            <i class=\"fas fa-check-circle\"></i>
            Terminées
        </div>
    </div>
    <div class=\"stat-card-admin\">
        <div class=\"stat-value\">";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::reduce($this->env, (isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 308, $this->source); })()), function ($__carry__, $__s__) use ($context, $macros) { $context["carry"] = $__carry__; $context["s"] = $__s__; return ((isset($context["carry"]) || array_key_exists("carry", $context) ? $context["carry"] : (function () { throw new RuntimeError('Variable "carry" does not exist.', 308, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 308, $this->source); })()), "duration", [], "any", false, false, false, 308)); }, 0), "html", null, true);
        yield " min</div>
        <div class=\"stat-label\">
            <i class=\"fas fa-hourglass-half\"></i>
            Durée totale
        </div>
    </div>
    <div class=\"stat-card-admin\">
        <div class=\"stat-value\">";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((Twig\Extension\CoreExtension::reduce($this->env, (isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 315, $this->source); })()), function ($__carry__, $__s__) use ($context, $macros) { $context["carry"] = $__carry__; $context["s"] = $__s__; return ((isset($context["carry"]) || array_key_exists("carry", $context) ? $context["carry"] : (function () { throw new RuntimeError('Variable "carry" does not exist.', 315, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 315, $this->source); })()), "duration", [], "any", false, false, false, 315)); }, 0) / max(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 315, $this->source); })())), 1))), "html", null, true);
        yield " min</div>
        <div class=\"stat-label\">
            <i class=\"fas fa-chart-line\"></i>
            Durée moyenne
        </div>
    </div>
</div>

<!-- Section Filtres -->
<div class=\"filter-section\">
    <form method=\"get\" action=\"";
        // line 325
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_index");
        yield "\" id=\"filter-form\">
        <div class=\"filter-grid\">
            <div class=\"filter-group\">
                <label><i class=\"fas fa-search\"></i> Recherche</label>
                <input type=\"text\" name=\"search\" placeholder=\"ID, notes...\" value=\"";
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 329, $this->source); })()), "request", [], "any", false, false, false, 329), "get", ["search"], "method", false, false, false, 329), "html", null, true);
        yield "\">
            </div>
            
            <div class=\"filter-group\">
                <label><i class=\"fas fa-user-tie\"></i> Coach</label>
                <select name=\"coach\">
                    <option value=\"\">Tous les coachs</option>
                    ";
        // line 336
        $context["coaches"] = [];
        // line 337
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 337, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 338
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["session"], "coach", [], "any", false, false, false, 338) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "coach", [], "any", false, false, false, 338), "id", [], "any", false, false, false, 338), (isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 338, $this->source); })())))) {
                // line 339
                yield "                            ";
                $context["coaches"] = Twig\Extension\CoreExtension::merge((isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 339, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "coach", [], "any", false, false, false, 339), "id", [], "any", false, false, false, 339)]);
                // line 340
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "coach", [], "any", false, false, false, 340), "id", [], "any", false, false, false, 340), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 340, $this->source); })()), "request", [], "any", false, false, false, 340), "get", ["coach"], "method", false, false, false, 340) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "coach", [], "any", false, false, false, 340), "id", [], "any", false, false, false, 340))) {
                    yield "selected";
                }
                yield ">
                                ";
                // line 341
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "coach", [], "any", false, false, false, 341), "fullName", [], "any", false, false, false, 341), "html", null, true);
                yield "
                            </option>
                        ";
            }
            // line 344
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['session'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 345
        yield "                </select>
            </div>
            
            <div class=\"filter-group\">
                <label><i class=\"fas fa-users\"></i> Équipe</label>
                <select name=\"team\">
                    <option value=\"\">Toutes les équipes</option>
                    ";
        // line 352
        $context["teams"] = [];
        // line 353
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 353, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 354
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["session"], "team", [], "any", false, false, false, 354) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "team", [], "any", false, false, false, 354), "id", [], "any", false, false, false, 354), (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 354, $this->source); })())))) {
                // line 355
                yield "                            ";
                $context["teams"] = Twig\Extension\CoreExtension::merge((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 355, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "team", [], "any", false, false, false, 355), "id", [], "any", false, false, false, 355)]);
                // line 356
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "team", [], "any", false, false, false, 356), "id", [], "any", false, false, false, 356), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 356, $this->source); })()), "request", [], "any", false, false, false, 356), "get", ["team"], "method", false, false, false, 356) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "team", [], "any", false, false, false, 356), "id", [], "any", false, false, false, 356))) {
                    yield "selected";
                }
                yield ">
                                ";
                // line 357
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "team", [], "any", false, false, false, 357), "name", [], "any", false, false, false, 357), "html", null, true);
                yield "
                            </option>
                        ";
            }
            // line 360
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['session'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 361
        yield "                </select>
            </div>
            
            <div class=\"filter-group\">
                <label><i class=\"fas fa-dumbbell\"></i> Plan d'entraînement</label>
                <select name=\"training_plan\">
                    <option value=\"\">Tous les plans</option>
                    ";
        // line 368
        $context["plans"] = [];
        // line 369
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 369, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 370
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["session"], "trainingPlan", [], "any", false, false, false, 370) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "trainingPlan", [], "any", false, false, false, 370), "id", [], "any", false, false, false, 370), (isset($context["plans"]) || array_key_exists("plans", $context) ? $context["plans"] : (function () { throw new RuntimeError('Variable "plans" does not exist.', 370, $this->source); })())))) {
                // line 371
                yield "                            ";
                $context["plans"] = Twig\Extension\CoreExtension::merge((isset($context["plans"]) || array_key_exists("plans", $context) ? $context["plans"] : (function () { throw new RuntimeError('Variable "plans" does not exist.', 371, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "trainingPlan", [], "any", false, false, false, 371), "id", [], "any", false, false, false, 371)]);
                // line 372
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "trainingPlan", [], "any", false, false, false, 372), "id", [], "any", false, false, false, 372), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 372, $this->source); })()), "request", [], "any", false, false, false, 372), "get", ["training_plan"], "method", false, false, false, 372) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "trainingPlan", [], "any", false, false, false, 372), "id", [], "any", false, false, false, 372))) {
                    yield "selected";
                }
                yield ">
                                ";
                // line 373
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "trainingPlan", [], "any", false, false, false, 373), "title", [], "any", false, false, false, 373), "html", null, true);
                yield "
                            </option>
                        ";
            }
            // line 376
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['session'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 377
        yield "                </select>
            </div>
            
            <div class=\"filter-group\">
                <label><i class=\"fas fa-clock\"></i> Statut</label>
                <select name=\"status\">
                    <option value=\"\">Tous les statuts</option>
                    <option value=\"upcoming\" ";
        // line 384
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 384, $this->source); })()), "request", [], "any", false, false, false, 384), "get", ["status"], "method", false, false, false, 384) == "upcoming")) {
            yield "selected";
        }
        yield ">À venir</option>
                    <option value=\"completed\" ";
        // line 385
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 385, $this->source); })()), "request", [], "any", false, false, false, 385), "get", ["status"], "method", false, false, false, 385) == "completed")) {
            yield "selected";
        }
        yield ">Terminée</option>
                </select>
            </div>
            
            <div class=\"filter-group\">
                <label><i class=\"fas fa-calendar\"></i> Date min</label>
                <input type=\"date\" name=\"date_from\" value=\"";
        // line 391
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 391, $this->source); })()), "request", [], "any", false, false, false, 391), "get", ["date_from"], "method", false, false, false, 391), "html", null, true);
        yield "\">
            </div>
            
            <div class=\"filter-group\">
                <label><i class=\"fas fa-calendar\"></i> Date max</label>
                <input type=\"date\" name=\"date_to\" value=\"";
        // line 396
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 396, $this->source); })()), "request", [], "any", false, false, false, 396), "get", ["date_to"], "method", false, false, false, 396), "html", null, true);
        yield "\">
            </div>
            
            <div class=\"filter-group\">
                <label><i class=\"fas fa-hourglass-start\"></i> Durée min</label>
                <input type=\"number\" name=\"duration_min\" placeholder=\"Minutes\" value=\"";
        // line 401
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 401, $this->source); })()), "request", [], "any", false, false, false, 401), "get", ["duration_min"], "method", false, false, false, 401), "html", null, true);
        yield "\">
            </div>
            
            <div class=\"filter-group\">
                <label><i class=\"fas fa-hourglass-end\"></i> Durée max</label>
                <input type=\"number\" name=\"duration_max\" placeholder=\"Minutes\" value=\"";
        // line 406
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 406, $this->source); })()), "request", [], "any", false, false, false, 406), "get", ["duration_max"], "method", false, false, false, 406), "html", null, true);
        yield "\">
            </div>
        </div>
        
        <div class=\"filter-actions\">
            <button type=\"submit\" class=\"btn-filter btn-filter-primary\">
                <i class=\"fas fa-filter\"></i> Appliquer les filtres
            </button>
            <a href=\"";
        // line 414
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_index");
        yield "\" class=\"btn-filter btn-filter-secondary\">
                <i class=\"fas fa-redo\"></i> Réinitialiser
            </a>
        </div>
    </form>
</div>

<!-- Filtres actifs -->
";
        // line 422
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 422, $this->source); })()), "request", [], "any", false, false, false, 422), "queryString", [], "any", false, false, false, 422)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 423
            yield "<div class=\"active-filters\">
    <span class=\"filter-tag\">
        <i class=\"fas fa-filter\"></i> Filtres actifs
        <i class=\"fas fa-times\" onclick=\"window.location.href='";
            // line 426
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_index");
            yield "'\"></i>
    </span>
</div>
";
        }
        // line 430
        yield "
<div class=\"admin-card\">
    <div style=\"display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; flex-wrap: wrap; gap: 15px;\">
        <h3><i class=\"fas fa-list\"></i> Liste des Sessions</h3>
        <div style=\"display: flex; gap: 10px; align-items: center;\">
            <span style=\"color: var(--text-muted); font-size: 13px;\">
                ";
        // line 436
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 436, $this->source); })())), "html", null, true);
        yield " session(s) trouvée(s)
            </span>
            <select class=\"items-per-page\" onchange=\"changeLimit(this.value)\">
                <option value=\"10\" ";
        // line 439
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 439, $this->source); })()), "request", [], "any", false, false, false, 439), "get", ["limit"], "method", false, false, false, 439) == 10)) {
            yield "selected";
        }
        yield ">10 par page</option>
                <option value=\"25\" ";
        // line 440
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 440, $this->source); })()), "request", [], "any", false, false, false, 440), "get", ["limit"], "method", false, false, false, 440) == 25)) {
            yield "selected";
        }
        yield ">25 par page</option>
                <option value=\"50\" ";
        // line 441
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 441, $this->source); })()), "request", [], "any", false, false, false, 441), "get", ["limit"], "method", false, false, false, 441) == 50)) {
            yield "selected";
        }
        yield ">50 par page</option>
                <option value=\"100\" ";
        // line 442
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 442, $this->source); })()), "request", [], "any", false, false, false, 442), "get", ["limit"], "method", false, false, false, 442) == 100)) {
            yield "selected";
        }
        yield ">100 par page</option>
            </select>
            <a href=\"";
        // line 444
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_new");
        yield "\" class=\"btn-admin btn-admin-primary\">
                <i class=\"fas fa-plus\"></i> Nouvelle Session
            </a>
        </div>
    </div>

    ";
        // line 450
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 450, $this->source); })())) > 0)) {
            // line 451
            yield "    <div class=\"table-responsive\">
        <table class=\"admin-table\">
            <thead>
                <tr>
                    <th class=\"sortable-header\" onclick=\"sortBy('id')\">
                        ID <i class=\"fas fa-sort\"></i>
                    </th>
                    <th class=\"sortable-header\" onclick=\"sortBy('date')\">
                        Date <i class=\"fas fa-sort\"></i>
                    </th>
                    <th class=\"sortable-header\" onclick=\"sortBy('coach')\">
                        Coach <i class=\"fas fa-sort\"></i>
                    </th>
                    <th class=\"sortable-header\" onclick=\"sortBy('team')\">
                        Équipe <i class=\"fas fa-sort\"></i>
                    </th>
                    <th>Plan d'Entraînement</th>
                    <th class=\"sortable-header\" onclick=\"sortBy('duration')\">
                        Durée <i class=\"fas fa-sort\"></i>
                    </th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 476
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 476, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
                // line 477
                yield "                <tr>
                    <td><strong>#";
                // line 478
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 478), "html", null, true);
                yield "</strong></td>
                    <td>";
                // line 479
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "sessionDate", [], "any", false, false, false, 479), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                    <td>
                        ";
                // line 481
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["session"], "coach", [], "any", false, false, false, 481)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 482
                    yield "                            <span class=\"coach-badge\">
                                <i class=\"fas fa-user-tie\"></i>
                                ";
                    // line 484
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "coach", [], "any", false, false, false, 484), "fullName", [], "any", false, false, false, 484), "html", null, true);
                    yield "
                            </span>
                        ";
                } else {
                    // line 487
                    yield "                            <span style=\"color: var(--text-muted);\">Non assigné</span>
                        ";
                }
                // line 489
                yield "                    </td>
                    <td>
                        ";
                // line 491
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["session"], "team", [], "any", false, false, false, 491)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 492
                    yield "                            <span class=\"team-badge\">
                                <i class=\"fas fa-users\"></i>
                                ";
                    // line 494
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "team", [], "any", false, false, false, 494), "name", [], "any", false, false, false, 494), "html", null, true);
                    yield "
                            </span>
                        ";
                } else {
                    // line 497
                    yield "                            <span style=\"color: var(--text-muted);\">Non assignée</span>
                        ";
                }
                // line 499
                yield "                    </td>
                    <td>
                        ";
                // line 501
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["session"], "trainingPlan", [], "any", false, false, false, 501)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 502
                    yield "                            <span style=\"color: #3498db;\">
                                <i class=\"fas fa-dumbbell\"></i>
                                ";
                    // line 504
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "trainingPlan", [], "any", false, false, false, 504), "title", [], "any", false, false, false, 504), "html", null, true);
                    yield "
                            </span>
                        ";
                } else {
                    // line 507
                    yield "                            <span style=\"color: var(--text-muted);\">Aucun</span>
                        ";
                }
                // line 509
                yield "                    </td>
                    <td>";
                // line 510
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "duration", [], "any", false, false, false, 510), "html", null, true);
                yield " min</td>
                    <td>
                        ";
                // line 512
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["session"], "sessionDate", [], "any", false, false, false, 512) > $this->extensions['Twig\Extension\CoreExtension']->convertDate())) {
                    // line 513
                    yield "                            <span class=\"badge-admin badge-planned\">
                                <i class=\"fas fa-clock\"></i> Planifiée
                            </span>
                        ";
                } else {
                    // line 517
                    yield "                            <span class=\"badge-admin badge-finished\">
                                <i class=\"fas fa-check-circle\"></i> Terminée
                            </span>
                        ";
                }
                // line 521
                yield "                    </td>
                    <td>
                        <div style=\"display: flex; gap: 10px;\">
                            <a href=\"";
                // line 524
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 524)]), "html", null, true);
                yield "\" 
                               class=\"btn-admin btn-admin-secondary\" style=\"padding: 5px 10px; font-size: 0.9rem;\">
                                <i class=\"fas fa-eye\"></i>
                            </a>
                            <a href=\"";
                // line 528
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 528)]), "html", null, true);
                yield "\" 
                               class=\"btn-admin btn-admin-primary\" style=\"padding: 5px 10px; font-size: 0.9rem;\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"";
                // line 532
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 532)]), "html", null, true);
                yield "\" 
                                  onsubmit=\"return confirmDelete('";
                // line 533
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 533), "html", null, true);
                yield "')\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 534
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 534))), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"btn-admin btn-admin-danger\" style=\"padding: 5px 10px; font-size: 0.9rem;\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['session'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 543
            yield "            </tbody>
        </table>
    </div>

    <!-- Pagination simplifiée -->
    ";
            // line 548
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 548, $this->source); })())) > 20)) {
                // line 549
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
            // line 569
            yield "
    ";
        } else {
            // line 571
            yield "    <div style=\"text-align: center; padding: 40px; color: rgba(255, 255, 255, 0.5);\">
        <i class=\"fas fa-calendar-check\" style=\"font-size: 3rem; margin-bottom: 20px;\"></i>
        <p>Aucune session de coaching trouvée.</p>
        <a href=\"";
            // line 574
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_new");
            yield "\" class=\"btn-admin btn-admin-primary\" style=\"margin-top: 15px; display: inline-block;\">
            <i class=\"fas fa-plus\"></i> Créer votre première session
        </a>
    </div>
    ";
        }
        // line 579
        yield "</div>

<!-- Script pour les fonctionnalités -->
<script>
let currentSort = {
    field: '";
        // line 584
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 584, $this->source); })()), "request", [], "any", false, false, false, 584), "get", ["sort", "date"], "method", false, false, false, 584), "html", null, true);
        yield "',
    order: '";
        // line 585
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 585, $this->source); })()), "request", [], "any", false, false, false, 585), "get", ["order", "desc"], "method", false, false, false, 585), "html", null, true);
        yield "'
};

function sortBy(field) {
    const url = new URL(window.location.href);
    
    // Toggle order if same field
    if (currentSort.field === field) {
        currentSort.order = currentSort.order === 'asc' ? 'desc' : 'asc';
    } else {
        currentSort.field = field;
        currentSort.order = 'desc';
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

function confirmDelete(sessionId) {
    return confirm(`⚠️ SUPPRESSION DÉFINITIVE\\n\\nÊtes-vous sûr de vouloir supprimer la session #\${sessionId} ?\\n\\nCette action est irréversible et supprimera toutes les données associées.`);
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
        return "back/session_coaching/index.html.twig";
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
        return array (  954 => 585,  950 => 584,  943 => 579,  935 => 574,  930 => 571,  926 => 569,  904 => 549,  902 => 548,  895 => 543,  880 => 534,  876 => 533,  872 => 532,  865 => 528,  858 => 524,  853 => 521,  847 => 517,  841 => 513,  839 => 512,  834 => 510,  831 => 509,  827 => 507,  821 => 504,  817 => 502,  815 => 501,  811 => 499,  807 => 497,  801 => 494,  797 => 492,  795 => 491,  791 => 489,  787 => 487,  781 => 484,  777 => 482,  775 => 481,  770 => 479,  766 => 478,  763 => 477,  759 => 476,  732 => 451,  730 => 450,  721 => 444,  714 => 442,  708 => 441,  702 => 440,  696 => 439,  690 => 436,  682 => 430,  675 => 426,  670 => 423,  668 => 422,  657 => 414,  646 => 406,  638 => 401,  630 => 396,  622 => 391,  611 => 385,  605 => 384,  596 => 377,  590 => 376,  584 => 373,  575 => 372,  572 => 371,  569 => 370,  564 => 369,  562 => 368,  553 => 361,  547 => 360,  541 => 357,  532 => 356,  529 => 355,  526 => 354,  521 => 353,  519 => 352,  510 => 345,  504 => 344,  498 => 341,  489 => 340,  486 => 339,  483 => 338,  478 => 337,  476 => 336,  466 => 329,  459 => 325,  446 => 315,  436 => 308,  426 => 301,  416 => 294,  406 => 287,  392 => 275,  379 => 274,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Gestion des Sessions de Coaching{% endblock %}

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
            <h1><i class=\"fas fa-calendar-check\"></i> Sessions de Coaching</h1>
            <p>Gérez les sessions de coaching programmées</p>
        </div>
    </div>
</div>

<!-- Statistiques -->
<div class=\"stats-cards\">
    <div class=\"stat-card-admin\">
        <div class=\"stat-value\">{{ coaching_sessions|length }}</div>
        <div class=\"stat-label\">
            <i class=\"fas fa-calendar-check\"></i>
            Total Sessions
        </div>
    </div>
    <div class=\"stat-card-admin\">
        <div class=\"stat-value\">{{ coaching_sessions|filter(s => s.sessionDate > date())|length }}</div>
        <div class=\"stat-label\">
            <i class=\"fas fa-clock\"></i>
            À venir
        </div>
    </div>
    <div class=\"stat-card-admin\">
        <div class=\"stat-value\">{{ coaching_sessions|filter(s => s.sessionDate <= date())|length }}</div>
        <div class=\"stat-label\">
            <i class=\"fas fa-check-circle\"></i>
            Terminées
        </div>
    </div>
    <div class=\"stat-card-admin\">
        <div class=\"stat-value\">{{ coaching_sessions|reduce((carry, s) => carry + s.duration, 0) }} min</div>
        <div class=\"stat-label\">
            <i class=\"fas fa-hourglass-half\"></i>
            Durée totale
        </div>
    </div>
    <div class=\"stat-card-admin\">
        <div class=\"stat-value\">{{ (coaching_sessions|reduce((carry, s) => carry + s.duration, 0) / max(coaching_sessions|length, 1))|round }} min</div>
        <div class=\"stat-label\">
            <i class=\"fas fa-chart-line\"></i>
            Durée moyenne
        </div>
    </div>
</div>

<!-- Section Filtres -->
<div class=\"filter-section\">
    <form method=\"get\" action=\"{{ path('app_coaching_session_index') }}\" id=\"filter-form\">
        <div class=\"filter-grid\">
            <div class=\"filter-group\">
                <label><i class=\"fas fa-search\"></i> Recherche</label>
                <input type=\"text\" name=\"search\" placeholder=\"ID, notes...\" value=\"{{ app.request.get('search') }}\">
            </div>
            
            <div class=\"filter-group\">
                <label><i class=\"fas fa-user-tie\"></i> Coach</label>
                <select name=\"coach\">
                    <option value=\"\">Tous les coachs</option>
                    {% set coaches = [] %}
                    {% for session in coaching_sessions %}
                        {% if session.coach and session.coach.id not in coaches %}
                            {% set coaches = coaches|merge([session.coach.id]) %}
                            <option value=\"{{ session.coach.id }}\" {% if app.request.get('coach') == session.coach.id %}selected{% endif %}>
                                {{ session.coach.fullName }}
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
                    {% for session in coaching_sessions %}
                        {% if session.team and session.team.id not in teams %}
                            {% set teams = teams|merge([session.team.id]) %}
                            <option value=\"{{ session.team.id }}\" {% if app.request.get('team') == session.team.id %}selected{% endif %}>
                                {{ session.team.name }}
                            </option>
                        {% endif %}
                    {% endfor %}
                </select>
            </div>
            
            <div class=\"filter-group\">
                <label><i class=\"fas fa-dumbbell\"></i> Plan d'entraînement</label>
                <select name=\"training_plan\">
                    <option value=\"\">Tous les plans</option>
                    {% set plans = [] %}
                    {% for session in coaching_sessions %}
                        {% if session.trainingPlan and session.trainingPlan.id not in plans %}
                            {% set plans = plans|merge([session.trainingPlan.id]) %}
                            <option value=\"{{ session.trainingPlan.id }}\" {% if app.request.get('training_plan') == session.trainingPlan.id %}selected{% endif %}>
                                {{ session.trainingPlan.title }}
                            </option>
                        {% endif %}
                    {% endfor %}
                </select>
            </div>
            
            <div class=\"filter-group\">
                <label><i class=\"fas fa-clock\"></i> Statut</label>
                <select name=\"status\">
                    <option value=\"\">Tous les statuts</option>
                    <option value=\"upcoming\" {% if app.request.get('status') == 'upcoming' %}selected{% endif %}>À venir</option>
                    <option value=\"completed\" {% if app.request.get('status') == 'completed' %}selected{% endif %}>Terminée</option>
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
            
            <div class=\"filter-group\">
                <label><i class=\"fas fa-hourglass-start\"></i> Durée min</label>
                <input type=\"number\" name=\"duration_min\" placeholder=\"Minutes\" value=\"{{ app.request.get('duration_min') }}\">
            </div>
            
            <div class=\"filter-group\">
                <label><i class=\"fas fa-hourglass-end\"></i> Durée max</label>
                <input type=\"number\" name=\"duration_max\" placeholder=\"Minutes\" value=\"{{ app.request.get('duration_max') }}\">
            </div>
        </div>
        
        <div class=\"filter-actions\">
            <button type=\"submit\" class=\"btn-filter btn-filter-primary\">
                <i class=\"fas fa-filter\"></i> Appliquer les filtres
            </button>
            <a href=\"{{ path('app_coaching_session_index') }}\" class=\"btn-filter btn-filter-secondary\">
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
        <i class=\"fas fa-times\" onclick=\"window.location.href='{{ path('app_coaching_session_index') }}'\"></i>
    </span>
</div>
{% endif %}

<div class=\"admin-card\">
    <div style=\"display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; flex-wrap: wrap; gap: 15px;\">
        <h3><i class=\"fas fa-list\"></i> Liste des Sessions</h3>
        <div style=\"display: flex; gap: 10px; align-items: center;\">
            <span style=\"color: var(--text-muted); font-size: 13px;\">
                {{ coaching_sessions|length }} session(s) trouvée(s)
            </span>
            <select class=\"items-per-page\" onchange=\"changeLimit(this.value)\">
                <option value=\"10\" {% if app.request.get('limit') == 10 %}selected{% endif %}>10 par page</option>
                <option value=\"25\" {% if app.request.get('limit') == 25 %}selected{% endif %}>25 par page</option>
                <option value=\"50\" {% if app.request.get('limit') == 50 %}selected{% endif %}>50 par page</option>
                <option value=\"100\" {% if app.request.get('limit') == 100 %}selected{% endif %}>100 par page</option>
            </select>
            <a href=\"{{ path('app_coaching_session_new') }}\" class=\"btn-admin btn-admin-primary\">
                <i class=\"fas fa-plus\"></i> Nouvelle Session
            </a>
        </div>
    </div>

    {% if coaching_sessions|length > 0 %}
    <div class=\"table-responsive\">
        <table class=\"admin-table\">
            <thead>
                <tr>
                    <th class=\"sortable-header\" onclick=\"sortBy('id')\">
                        ID <i class=\"fas fa-sort\"></i>
                    </th>
                    <th class=\"sortable-header\" onclick=\"sortBy('date')\">
                        Date <i class=\"fas fa-sort\"></i>
                    </th>
                    <th class=\"sortable-header\" onclick=\"sortBy('coach')\">
                        Coach <i class=\"fas fa-sort\"></i>
                    </th>
                    <th class=\"sortable-header\" onclick=\"sortBy('team')\">
                        Équipe <i class=\"fas fa-sort\"></i>
                    </th>
                    <th>Plan d'Entraînement</th>
                    <th class=\"sortable-header\" onclick=\"sortBy('duration')\">
                        Durée <i class=\"fas fa-sort\"></i>
                    </th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for session in coaching_sessions %}
                <tr>
                    <td><strong>#{{ session.id }}</strong></td>
                    <td>{{ session.sessionDate|date('d/m/Y H:i') }}</td>
                    <td>
                        {% if session.coach %}
                            <span class=\"coach-badge\">
                                <i class=\"fas fa-user-tie\"></i>
                                {{ session.coach.fullName }}
                            </span>
                        {% else %}
                            <span style=\"color: var(--text-muted);\">Non assigné</span>
                        {% endif %}
                    </td>
                    <td>
                        {% if session.team %}
                            <span class=\"team-badge\">
                                <i class=\"fas fa-users\"></i>
                                {{ session.team.name }}
                            </span>
                        {% else %}
                            <span style=\"color: var(--text-muted);\">Non assignée</span>
                        {% endif %}
                    </td>
                    <td>
                        {% if session.trainingPlan %}
                            <span style=\"color: #3498db;\">
                                <i class=\"fas fa-dumbbell\"></i>
                                {{ session.trainingPlan.title }}
                            </span>
                        {% else %}
                            <span style=\"color: var(--text-muted);\">Aucun</span>
                        {% endif %}
                    </td>
                    <td>{{ session.duration }} min</td>
                    <td>
                        {% if session.sessionDate > date() %}
                            <span class=\"badge-admin badge-planned\">
                                <i class=\"fas fa-clock\"></i> Planifiée
                            </span>
                        {% else %}
                            <span class=\"badge-admin badge-finished\">
                                <i class=\"fas fa-check-circle\"></i> Terminée
                            </span>
                        {% endif %}
                    </td>
                    <td>
                        <div style=\"display: flex; gap: 10px;\">
                            <a href=\"{{ path('app_coaching_session_show', {'id': session.id}) }}\" 
                               class=\"btn-admin btn-admin-secondary\" style=\"padding: 5px 10px; font-size: 0.9rem;\">
                                <i class=\"fas fa-eye\"></i>
                            </a>
                            <a href=\"{{ path('app_coaching_session_edit', {'id': session.id}) }}\" 
                               class=\"btn-admin btn-admin-primary\" style=\"padding: 5px 10px; font-size: 0.9rem;\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"{{ path('app_coaching_session_delete', {'id': session.id}) }}\" 
                                  onsubmit=\"return confirmDelete('{{ session.id }}')\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ session.id) }}\">
                                <button type=\"submit\" class=\"btn-admin btn-admin-danger\" style=\"padding: 5px 10px; font-size: 0.9rem;\">
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
    {% if coaching_sessions|length > 20 %}
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
        <i class=\"fas fa-calendar-check\" style=\"font-size: 3rem; margin-bottom: 20px;\"></i>
        <p>Aucune session de coaching trouvée.</p>
        <a href=\"{{ path('app_coaching_session_new') }}\" class=\"btn-admin btn-admin-primary\" style=\"margin-top: 15px; display: inline-block;\">
            <i class=\"fas fa-plus\"></i> Créer votre première session
        </a>
    </div>
    {% endif %}
</div>

<!-- Script pour les fonctionnalités -->
<script>
let currentSort = {
    field: '{{ app.request.get('sort', 'date') }}',
    order: '{{ app.request.get('order', 'desc') }}'
};

function sortBy(field) {
    const url = new URL(window.location.href);
    
    // Toggle order if same field
    if (currentSort.field === field) {
        currentSort.order = currentSort.order === 'asc' ? 'desc' : 'asc';
    } else {
        currentSort.field = field;
        currentSort.order = 'desc';
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

function confirmDelete(sessionId) {
    return confirm(`⚠️ SUPPRESSION DÉFINITIVE\\n\\nÊtes-vous sûr de vouloir supprimer la session #\${sessionId} ?\\n\\nCette action est irréversible et supprimera toutes les données associées.`);
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
{% endblock %}", "back/session_coaching/index.html.twig", "C:\\xampp\\htdocs\\esport (3)\\esport\\templates\\back\\session_coaching\\index.html.twig");
    }
}
