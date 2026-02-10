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

/* coaching_session/index.html.twig */
class __TwigTemplate_24c95b460cf5f54cf77f83269f9fb417 extends Template
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
            'inline_styles' => [$this, 'block_inline_styles'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaching_session/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaching_session/index.html.twig"));

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

        yield "Phantom Force - Coaching & Training";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inline_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inline_styles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inline_styles"));

        // line 6
        yield "<style>
/* ================= COACHING PAGE STYLES ================= */
.coaching-hero {
    text-align: center;
    padding: 80px 20px 50px;
    position: relative;
    margin-bottom: 50px;
    animation: fadeInUp 0.8s ease-out;
}

.coaching-hero::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 150px;
    height: 4px;
    background: linear-gradient(90deg, #ff0000, #ff2d2d, #ff5e5e);
    border-radius: 2px;
    animation: widthGrow 1.2s ease-out;
}

.coaching-hero h1 {
    font-size: 56px;
    font-weight: 800;
    background: linear-gradient(90deg, #ff0000, #ff2d2d, #ff5e5e, #ff8a8a);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    margin-bottom: 20px;
    line-height: 1.1;
    text-shadow: 0 5px 15px rgba(255, 0, 0, 0.3);
    animation: textGlow 3s infinite alternate;
}

.coaching-hero p {
    color: var(--text-muted);
    font-size: 20px;
    max-width: 700px;
    margin: 0 auto 30px;
    line-height: 1.6;
}

/* ================= STATS BAR ================= */
.stats-bar {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin: 40px 0 60px;
}

.stat-item {
    background: rgba(255, 45, 45, 0.1);
    border: 1px solid rgba(255, 45, 45, 0.3);
    border-radius: var(--radius-lg);
    padding: 25px;
    text-align: center;
    backdrop-filter: blur(10px);
    transition: var(--transition);
    position: relative;
    overflow: hidden;
}

.stat-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(255, 0, 0, 0.2);
    border-color: #ff2d2d;
}

.stat-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(255,45,45,0.1), rgba(255,0,0,0.05));
    z-index: -1;
}

.stat-value {
    font-size: 36px;
    font-weight: 800;
    background: linear-gradient(90deg, #ff2d2d, #ff5e5e);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    margin-bottom: 8px;
    animation: pulse 2s infinite;
}

.stat-label {
    font-size: 14px;
    color: var(--text-muted);
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* ================= TABS ================= */
.tabs-container {
    margin-bottom: 30px;
}

.tabs-nav {
    display: flex;
    gap: 10px;
    margin-bottom: 0;
    border-bottom: 2px solid var(--border);
}

.tab-btn {
    padding: 15px 30px;
    background: transparent;
    border: none;
    color: var(--text-muted);
    font-weight: 600;
    font-size: 16px;
    cursor: pointer;
    border-radius: 8px 8px 0 0;
    transition: var(--transition);
    position: relative;
    display: flex;
    align-items: center;
    gap: 8px;
}

.tab-btn:hover {
    color: var(--text-light);
    background: rgba(255, 45, 45, 0.1);
}

.tab-btn.active {
    color: var(--red);
    background: rgba(255, 45, 45, 0.15);
}

.tab-btn.active::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 100%;
    height: 3px;
    background: linear-gradient(90deg, #ff0000, #ff2d2d);
    border-radius: 2px;
}

.tab-content {
    display: none;
    animation: fadeIn 0.5s ease-out;
}

.tab-content.active {
    display: block;
}

/* ================= CONTROLS BAR ================= */
.controls-bar {
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    padding: 20px;
    margin-bottom: 20px;
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
    align-items: center;
    box-shadow: var(--shadow);
}

.search-box {
    flex: 1;
    min-width: 250px;
    position: relative;
}

.search-box input {
    width: 100%;
    padding: 12px 15px 12px 45px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    color: var(--text-light);
    font-size: 14px;
    transition: var(--transition);
}

.search-box input:focus {
    outline: none;
    border-color: var(--red);
    box-shadow: 0 0 0 2px rgba(255, 45, 45, 0.2);
}

.search-box i {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--text-muted);
}

.filter-select {
    padding: 12px 15px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    color: var(--text-light);
    font-size: 14px;
    min-width: 150px;
    cursor: pointer;
    transition: var(--transition);
}

.filter-select:focus {
    outline: none;
    border-color: var(--red);
}

.sort-controls {
    display: flex;
    gap: 10px;
    align-items: center;
}

.sort-btn {
    padding: 10px 15px;
    background: rgba(255, 45, 45, 0.1);
    border: 1px solid rgba(255, 45, 45, 0.3);
    border-radius: var(--radius);
    color: var(--red);
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    transition: var(--transition);
    display: flex;
    align-items: center;
    gap: 5px;
}

.sort-btn:hover {
    background: rgba(255, 45, 45, 0.2);
}

.sort-btn.active {
    background: linear-gradient(135deg, #ff2d2d, #ff5e5e);
    color: white;
    border-color: transparent;
}

.reset-filters {
    padding: 10px 15px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    color: var(--text-muted);
    font-size: 13px;
    cursor: pointer;
    transition: var(--transition);
}

.reset-filters:hover {
    background: rgba(255, 45, 45, 0.1);
    color: var(--red);
}

/* ================= TABLE DESIGN ================= */
.table-container {
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow);
    animation: fadeInUp 0.8s ease-out;
}

.table-header {
    display: grid;
    grid-template-columns: 80px 120px 120px 180px 150px 1fr 150px;
    background: linear-gradient(90deg, rgba(255,0,0,0.2), rgba(255,45,45,0.1));
    padding: 20px 25px;
    border-bottom: 2px solid var(--red);
    font-weight: 700;
    color: var(--text-light);
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.table-row {
    display: grid;
    grid-template-columns: 80px 120px 120px 180px 150px 1fr 150px;
    padding: 20px 25px;
    border-bottom: 1px solid rgba(255,255,255,0.05);
    transition: var(--transition);
    align-items: center;
}

.table-row:hover {
    background: rgba(255, 45, 45, 0.05);
    transform: translateX(5px);
}

.table-row:last-child {
    border-bottom: none;
}

.table-cell {
    color: var(--text-muted);
    font-size: 14px;
    transition: var(--transition);
}

.table-row:hover .table-cell {
    color: var(--text-light);
}

.cell-id {
    font-weight: 700;
    color: var(--red);
    font-size: 16px;
}

.cell-date::before {
    content: '📅';
    margin-right: 8px;
    font-size: 12px;
}

.cell-duration {
    color: var(--green);
    font-weight: 600;
}

.cell-duration::after {
    content: ' min';
    font-size: 12px;
    opacity: 0.7;
}

.cell-notes {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 300px;
}

.cell-trainingplan {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 250px;
}

/* ================= TRAINING PLANS TABLE ================= */
.training-table-header {
    display: grid;
    grid-template-columns: 80px 1fr 200px 150px 150px 150px;
    background: linear-gradient(90deg, rgba(255,0,0,0.2), rgba(255,45,45,0.1));
    padding: 20px 25px;
    border-bottom: 2px solid var(--red);
    font-weight: 700;
    color: var(--text-light);
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.training-table-row {
    display: grid;
    grid-template-columns: 80px 1fr 200px 150px 150px 150px;
    padding: 20px 25px;
    border-bottom: 1px solid rgba(255,255,255,0.05);
    transition: var(--transition);
    align-items: center;
}

.training-table-row:hover {
    background: rgba(255, 45, 45, 0.05);
    transform: translateX(5px);
}

.training-title {
    font-weight: 700;
    color: var(--text-light);
}

.training-description {
    color: var(--text-muted);
    font-size: 13px;
    line-height: 1.4;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.training-focus {
    padding: 4px 12px;
    border-radius: 20px;
    background: rgba(52, 152, 219, 0.2);
    color: #3498db;
    font-size: 12px;
    font-weight: 600;
    text-align: center;
}

.training-difficulty {
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    text-align: center;
    text-transform: uppercase;
}

.difficulty-beginner {
    background: rgba(46, 204, 113, 0.2);
    color: #2ecc71;
}

.difficulty-intermediate {
    background: rgba(241, 196, 15, 0.2);
    color: #f1c40f;
}

.difficulty-advanced {
    background: rgba(231, 76, 60, 0.2);
    color: #e74c3c;
}

.training-date::before {
    content: '📅';
    margin-right: 8px;
    font-size: 12px;
}

/* ================= ACTION BUTTONS ================= */
.action-buttons {
    display: flex;
    gap: 10px;
}

.btn-show, .btn-edit, .btn-new, .btn-delete {
    padding: 8px 16px;
    border-radius: 6px;
    font-weight: 600;
    font-size: 12px;
    text-decoration: none;
    transition: var(--transition);
    display: inline-flex;
    align-items: center;
    gap: 6px;
    border: none;
    cursor: pointer;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.btn-show {
    background: linear-gradient(135deg, #ff2d2d, #ff5e5e);
    color: white;
}

.btn-edit {
    background: rgba(255, 45, 45, 0.1);
    color: var(--red);
    border: 1px solid rgba(255, 45, 45, 0.3);
}

.btn-delete {
    background: rgba(231, 76, 60, 0.1);
    color: #e74c3c;
    border: 1px solid rgba(231, 76, 60, 0.3);
}

.btn-new {
    background: linear-gradient(135deg, #ff0000, #ff2d2d);
    color: white;
    padding: 12px 24px;
    font-size: 14px;
    position: relative;
    overflow: hidden;
}

.btn-show:hover, .btn-edit:hover, .btn-delete:hover, .btn-new:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255, 0, 0, 0.2);
}

/* ================= EMPTY STATE ================= */
.empty-state {
    text-align: center;
    padding: 60px 20px;
    background: rgba(255, 45, 45, 0.05);
    border: 2px dashed rgba(255, 45, 45, 0.3);
    border-radius: var(--radius-lg);
    margin: 30px 0;
    animation: fadeIn 1s ease-out;
}

.empty-state-icon {
    font-size: 48px;
    color: rgba(255, 45, 45, 0.5);
    margin-bottom: 20px;
    animation: pulse 2s infinite;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 1200px) {
    .table-header, .table-row {
        grid-template-columns: 80px 120px 120px 150px 150px 1fr 150px;
    }
    .training-table-header, .training-table-row {
        grid-template-columns: 80px 1fr 180px 140px 140px 140px;
    }
}

@media (max-width: 992px) {
    .controls-bar {
        flex-direction: column;
        align-items: stretch;
    }
    
    .search-box {
        min-width: 100%;
    }
    
    .table-header, .training-table-header { 
        display: none; 
    }
    
    .table-row, .training-table-row { 
        display: block; 
        margin-bottom: 15px; 
        border: 1px solid var(--border); 
        border-radius: var(--radius); 
        padding: 15px; 
    }
    
    .table-cell, .training-table-row > div { 
        display: flex; 
        justify-content: space-between; 
        padding: 8px 0; 
        border-bottom: 1px solid rgba(255,255,255,0.05); 
    }
    
    .table-cell:last-child, .training-table-row > div:last-child { 
        border-bottom: none; 
    }
    
    .table-cell::before, .training-table-row > div::before { 
        content: attr(data-label); 
        font-weight: 600; 
        color: var(--red); 
        text-transform: uppercase; 
        font-size: 12px; 
    }
    
    .tabs-nav {
        flex-direction: column;
    }
    
    .tab-btn {
        border-radius: 8px;
        margin-bottom: 5px;
    }
    
    .tab-btn.active::after {
        display: none;
    }
}

@media (max-width: 768px) {
    .stats-bar {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .action-buttons {
        flex-wrap: wrap;
    }
    
    .sort-controls {
        flex-wrap: wrap;
    }
}

/* ================= FILTER TAGS ================= */
.filter-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 10px;
}

.filter-tag {
    padding: 5px 12px;
    background: rgba(52, 152, 219, 0.1);
    border: 1px solid rgba(52, 152, 219, 0.3);
    border-radius: 15px;
    font-size: 12px;
    color: #3498db;
    display: flex;
    align-items: center;
    gap: 5px;
}

.filter-tag i {
    cursor: pointer;
    font-size: 10px;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 620
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

        // line 621
        yield "<div class=\"coaching-hero\">
    <h1>🔥 COACHING & TRAINING</h1>
    <p>Gérez vos sessions de coaching et vos plans d'entraînement en un seul endroit. Optimisez les performances de votre équipe.</p>
    
    <div class=\"stats-bar\">
        <div class=\"stat-item\">
            <div class=\"stat-value\">";
        // line 627
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 627, $this->source); })())), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Sessions</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">";
        // line 631
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 631, $this->source); })())), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Plans d'entraînement</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">";
        // line 635
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 635, $this->source); })()), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 635, $this->source); })()), "trainingPlan", [], "any", false, false, false, 635) != null); })), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Sessions avec plan</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">";
        // line 639
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 639, $this->source); })()), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 639, $this->source); })()), "duration", [], "any", false, false, false, 639) > 60); })), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Sessions longues</div>
        </div>
    </div>
</div>

<!-- Tabs Navigation -->
<div class=\"tabs-container\">
    <div class=\"tabs-nav\">
        <button class=\"tab-btn active\" onclick=\"showTab('sessions')\">
            <i class=\"fas fa-video\"></i> Sessions de Coaching
        </button>
        <button class=\"tab-btn\" onclick=\"showTab('training-plans')\">
            <i class=\"fas fa-dumbbell\"></i> Plans d'Entraînement
        </button>
    </div>
</div>

<!-- Sessions de Coaching Tab -->
<div id=\"sessions-tab\" class=\"tab-content active\">
    <!-- Controls Bar -->
    <div class=\"controls-bar\">
        <div class=\"search-box\">
            <i class=\"fas fa-search\"></i>
            <input type=\"text\" id=\"session-search\" placeholder=\"Rechercher une session...\" 
                   onkeyup=\"filterSessions()\">
        </div>
        
        <select class=\"filter-select\" id=\"session-coach-filter\" onchange=\"filterSessions()\">
            <option value=\"\">Tous les coachs</option>
            ";
        // line 669
        $context["uniqueCoaches"] = [];
        // line 670
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 670, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 671
            yield "                ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "coachId", [], "any", false, false, false, 671), (isset($context["uniqueCoaches"]) || array_key_exists("uniqueCoaches", $context) ? $context["uniqueCoaches"] : (function () { throw new RuntimeError('Variable "uniqueCoaches" does not exist.', 671, $this->source); })()))) {
                // line 672
                yield "                    ";
                $context["uniqueCoaches"] = Twig\Extension\CoreExtension::merge((isset($context["uniqueCoaches"]) || array_key_exists("uniqueCoaches", $context) ? $context["uniqueCoaches"] : (function () { throw new RuntimeError('Variable "uniqueCoaches" does not exist.', 672, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["session"], "coachId", [], "any", false, false, false, 672)]);
                // line 673
                yield "                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "coachId", [], "any", false, false, false, 673), "html", null, true);
                yield "\">Coach #";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "coachId", [], "any", false, false, false, 673), "html", null, true);
                yield "</option>
                ";
            }
            // line 675
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['session'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 676
        yield "        </select>
        
        <select class=\"filter-select\" id=\"session-duration-filter\" onchange=\"filterSessions()\">
            <option value=\"\">Toutes les durées</option>
            <option value=\"short\">Court (< 30 min)</option>
            <option value=\"medium\">Moyen (30-60 min)</option>
            <option value=\"long\">Long (> 60 min)</option>
        </select>
        
        <div class=\"sort-controls\">
            <button class=\"sort-btn\" onclick=\"sortSessions('date', this)\">
                <i class=\"fas fa-calendar-alt\"></i> Date
            </button>
            <button class=\"sort-btn\" onclick=\"sortSessions('duration', this)\">
                <i class=\"fas fa-clock\"></i> Durée
            </button>
            <button class=\"reset-filters\" onclick=\"resetSessionFilters()\">
                <i class=\"fas fa-redo\"></i> Réinitialiser
            </button>
        </div>
    </div>

    <div class=\"filter-tags\" id=\"session-filter-tags\"></div>

    <div class=\"table-container\">
        <div class=\"table-header\">
            <div>ID</div>
            <div>Coach</div>
            <div>Équipe</div>
            <div>Date & Heure</div>
            <div>Durée</div>
            <div>Training Plan</div>
            <div>Actions</div>
        </div>

        ";
        // line 711
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 711, $this->source); })())) > 0)) {
            // line 712
            yield "            <div id=\"sessions-list\">
               <!-- Dans la boucle FOR des sessions -->
";
            // line 714
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 714, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["coaching_session"]) {
                // line 715
                yield "    <div class=\"table-row session-item\" 
         data-id=\"";
                // line 716
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "id", [], "any", false, false, false, 716), "html", null, true);
                yield "\"
         data-coach=\"";
                // line 717
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "coachId", [], "any", false, false, false, 717), "html", null, true);
                yield "\"
         data-duration=\"";
                // line 718
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "duration", [], "any", false, false, false, 718), "html", null, true);
                yield "\"
         data-date=\"";
                // line 719
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "sessionDate", [], "any", false, false, false, 719)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "sessionDate", [], "any", false, false, false, 719), "Y-m-d H:i"), "html", null, true)) : (""));
                yield "\"
         data-team=\"";
                // line 720
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "teamId", [], "any", false, false, false, 720), "html", null, true);
                yield "\">
        <div class=\"table-cell cell-id\" data-label=\"ID\">#";
                // line 721
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "id", [], "any", false, false, false, 721), "html", null, true);
                yield "</div>
        <div class=\"table-cell\" data-label=\"Coach\">Coach #";
                // line 722
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "coachId", [], "any", false, false, false, 722), "html", null, true);
                yield "</div>
        <div class=\"table-cell\" data-label=\"Équipe\">Équipe #";
                // line 723
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "teamId", [], "any", false, false, false, 723), "html", null, true);
                yield "</div>
        <div class=\"table-cell cell-date\" data-label=\"Date\">
            ";
                // line 725
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "sessionDate", [], "any", false, false, false, 725)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "sessionDate", [], "any", false, false, false, 725), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
                yield "
        </div>
        <div class=\"table-cell cell-duration\" data-label=\"Durée\">";
                // line 727
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "duration", [], "any", false, false, false, 727), "html", null, true);
                yield "</div>
        <div class=\"table-cell cell-trainingplan\" data-label=\"Training Plan\">
            ";
                // line 729
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "trainingPlan", [], "any", false, false, false, 729)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 730
                    yield "                <strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "trainingPlan", [], "any", false, false, false, 730), "title", [], "any", false, false, false, 730), "html", null, true);
                    yield "</strong><br>
                <small>";
                    // line 731
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "trainingPlan", [], "any", false, false, false, 731), "focusArea", [], "any", false, false, false, 731), "html", null, true);
                    yield "</small>
            ";
                } else {
                    // line 733
                    yield "                <span class=\"text-muted\">Aucun plan assigné</span>
            ";
                }
                // line 735
                yield "        </div>
        <div class=\"table-cell action-buttons\" data-label=\"Actions\">
            <a href=\"";
                // line 737
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "id", [], "any", false, false, false, 737)]), "html", null, true);
                yield "\" class=\"btn-show\">
                <i class=\"fas fa-eye\"></i> Voir
            </a>
            <a href=\"";
                // line 740
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "id", [], "any", false, false, false, 740)]), "html", null, true);
                yield "\" class=\"btn-edit\">
                <i class=\"fas fa-edit\"></i> Éditer
            </a>
            <!-- BOUTON SIMPLE POUR REJOINDRE LA MEETING -->
            <a href=\"";
                // line 744
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_meet", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "id", [], "any", false, false, false, 744)]), "html", null, true);
                yield "\" 
               class=\"btn-show\" 
               style=\"background: linear-gradient(135deg, #3498db, #2980b9);\">
                <i class=\"fas fa-video\"></i> Rejoindre
            </a>
        </div>
    </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['coaching_session'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 752
            yield "            </div>
        ";
        } else {
            // line 754
            yield "            <div class=\"empty-state\">
                <div class=\"empty-state-icon\">🎮</div>
                <h3>Aucune session de coaching trouvée</h3>
                <p>Commencez par créer votre première session de coaching pour améliorer les performances de votre équipe.</p>
                ";
            // line 758
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGINAZER")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER")))) {
                // line 759
                yield "                    <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_new");
                yield "\" class=\"btn btn-new\">Créer une session</a>
                ";
            }
            // line 761
            yield "            </div>
        ";
        }
        // line 763
        yield "    </div>

    <div style=\"text-align: center; margin-top: 40px;\">
        ";
        // line 766
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER")))) {
            // line 767
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_new");
            yield "\" class=\"btn-new\">
                <i class=\"fas fa-plus-circle\"></i> Nouvelle Session
            </a>
        ";
        }
        // line 771
        yield "    </div>
</div>

<!-- Training Plans Tab -->
<div id=\"training-plans-tab\" class=\"tab-content\">
    <!-- Controls Bar -->
    <div class=\"controls-bar\">
        <div class=\"search-box\">
            <i class=\"fas fa-search\"></i>
            <input type=\"text\" id=\"training-search\" placeholder=\"Rechercher un plan...\" 
                   onkeyup=\"filterTrainingPlans()\">
        </div>
        
        <select class=\"filter-select\" id=\"training-difficulty-filter\" onchange=\"filterTrainingPlans()\">
            <option value=\"\">Toutes les difficultés</option>
            <option value=\"Beginner\">Débutant</option>
            <option value=\"Intermediate\">Intermédiaire</option>
            <option value=\"Advanced\">Avancé</option>
        </select>
        
        <select class=\"filter-select\" id=\"training-focus-filter\" onchange=\"filterTrainingPlans()\">
            <option value=\"\">Tous les focus</option>
            ";
        // line 793
        $context["uniqueFocus"] = [];
        // line 794
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 794, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 795
            yield "                ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "focusArea", [], "any", false, false, false, 795), (isset($context["uniqueFocus"]) || array_key_exists("uniqueFocus", $context) ? $context["uniqueFocus"] : (function () { throw new RuntimeError('Variable "uniqueFocus" does not exist.', 795, $this->source); })()))) {
                // line 796
                yield "                    ";
                $context["uniqueFocus"] = Twig\Extension\CoreExtension::merge((isset($context["uniqueFocus"]) || array_key_exists("uniqueFocus", $context) ? $context["uniqueFocus"] : (function () { throw new RuntimeError('Variable "uniqueFocus" does not exist.', 796, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "focusArea", [], "any", false, false, false, 796)]);
                // line 797
                yield "                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "focusArea", [], "any", false, false, false, 797), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "focusArea", [], "any", false, false, false, 797), "html", null, true);
                yield "</option>
                ";
            }
            // line 799
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['plan'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 800
        yield "        </select>
        
        <div class=\"sort-controls\">
            <button class=\"sort-btn\" onclick=\"sortTrainingPlans('title', this)\">
                <i class=\"fas fa-sort-alpha-down\"></i> Titre
            </button>
            <button class=\"sort-btn\" onclick=\"sortTrainingPlans('date', this)\">
                <i class=\"fas fa-calendar-alt\"></i> Date
            </button>
            <button class=\"reset-filters\" onclick=\"resetTrainingFilters()\">
                <i class=\"fas fa-redo\"></i> Réinitialiser
            </button>
        </div>
    </div>

    <div class=\"filter-tags\" id=\"training-filter-tags\"></div>

    <div class=\"table-container\">
        <div class=\"training-table-header\">
            <div>ID</div>
            <div>Titre & Description</div>
            <div>Focus</div>
            <div>Difficulté</div>
            <div>Créé le</div>
            <div>Actions</div>
        </div>

        ";
        // line 827
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 827, $this->source); })())) > 0)) {
            // line 828
            yield "            <div id=\"training-plans-list\">
                ";
            // line 829
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 829, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["training_plan"]) {
                // line 830
                yield "                    <div class=\"training-table-row training-item\"
                         data-id=\"";
                // line 831
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 831), "html", null, true);
                yield "\"
                         data-title=\"";
                // line 832
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "title", [], "any", false, false, false, 832)), "html", null, true);
                yield "\"
                         data-difficulty=\"";
                // line 833
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "difficultyLevel", [], "any", false, false, false, 833), "html", null, true);
                yield "\"
                         data-focus=\"";
                // line 834
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "focusArea", [], "any", false, false, false, 834), "html", null, true);
                yield "\"
                         data-date=\"";
                // line 835
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "createdAt", [], "any", false, false, false, 835)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "createdAt", [], "any", false, false, false, 835), "Y-m-d"), "html", null, true)) : (""));
                yield "\">
                        <div class=\"cell-id\" data-label=\"ID\">#";
                // line 836
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 836), "html", null, true);
                yield "</div>
                        <div data-label=\"Titre & Description\">
                            <div class=\"training-title\">";
                // line 838
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "title", [], "any", false, false, false, 838), "html", null, true);
                yield "</div>
                            <div class=\"training-description\">";
                // line 839
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "description", [], "any", false, false, false, 839), "html", null, true);
                yield "</div>
                        </div>
                        <div data-label=\"Focus\">
                            <span class=\"training-focus\">";
                // line 842
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "focusArea", [], "any", false, false, false, 842), "html", null, true);
                yield "</span>
                        </div>
                        <div data-label=\"Difficulté\">
                            <span class=\"training-difficulty difficulty-";
                // line 845
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "difficultyLevel", [], "any", false, false, false, 845)), "html", null, true);
                yield "\">
                                ";
                // line 846
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "difficultyLevel", [], "any", false, false, false, 846), "html", null, true);
                yield "
                            </span>
                        </div>
                        <div class=\"training-date\" data-label=\"Crée le\">
                            ";
                // line 850
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "createdAt", [], "any", false, false, false, 850)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "createdAt", [], "any", false, false, false, 850), "d/m/Y"), "html", null, true)) : ("N/A"));
                yield "
                        </div>
                        <div class=\"action-buttons\" data-label=\"Actions\">
                            <a href=\"";
                // line 853
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 853)]), "html", null, true);
                yield "\" class=\"btn-show\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                            ";
                // line 856
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER")))) {
                    // line 857
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 857)]), "html", null, true);
                    yield "\" class=\"btn-edit\">
                                    <i class=\"fas fa-edit\"></i> Éditer
                                </a>
                            ";
                }
                // line 861
                yield "                            <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 861)]), "html", null, true);
                yield "\" 
                                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce plan d\\'entraînement ?');\" 
                                  style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 864
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 864))), "html", null, true);
                yield "\">
                                ";
                // line 865
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER")))) {
                    // line 866
                    yield "                                    <button type=\"submit\" class=\"btn-delete\">
                                        <i class=\"fas fa-trash\"></i> Supprimer
                                    </button>
                                ";
                }
                // line 870
                yield "                            </form>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['training_plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 874
            yield "            </div>
        ";
        } else {
            // line 876
            yield "            <div class=\"empty-state\">
                <div class=\"empty-state-icon\">📋</div>
                <h3>Aucun plan d'entraînement trouvé</h3>
                <p>Créez votre premier plan d'entraînement pour structurer vos sessions de coaching.</p>
                ";
            // line 880
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER")))) {
                // line 881
                yield "                    <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_new");
                yield "\" class=\"btn btn-new\">Créer un plan</a>
                ";
            }
            // line 883
            yield "            </div>
        ";
        }
        // line 885
        yield "    </div>

    <div style=\"text-align: center; margin-top: 40px;\">
        ";
        // line 888
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER")))) {
            // line 889
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_new");
            yield "\" class=\"btn-new\">
                <i class=\"fas fa-plus-circle\"></i> Nouveau Plan d'Entraînement
            </a>
        ";
        }
        // line 893
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 897
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

        // line 898
        yield "<script>
// Variables globales pour le tri
let currentSessionSort = { field: null, order: 'asc' };
let currentTrainingSort = { field: null, order: 'asc' };

// ==================== FUNCTIONS FOR SESSIONS ====================
function filterSessions() {
    const searchTerm = document.getElementById('session-search').value.toLowerCase();
    const coachFilter = document.getElementById('session-coach-filter').value;
    const durationFilter = document.getElementById('session-duration-filter').value;
    const sessions = document.querySelectorAll('.session-item');
    const filterTags = document.getElementById('session-filter-tags');
    
    // Mettre à jour les tags de filtre
    filterTags.innerHTML = '';
    let activeFilters = [];
    
    if (searchTerm) activeFilters.push(`Recherche: \"\${searchTerm}\"`);
    if (coachFilter) activeFilters.push(`Coach: #\${coachFilter}`);
    if (durationFilter) {
        let label = '';
        switch(durationFilter) {
            case 'short': label = 'Durée: Court'; break;
            case 'medium': label = 'Durée: Moyen'; break;
            case 'long': label = 'Durée: Long'; break;
        }
        activeFilters.push(label);
    }
    
    activeFilters.forEach(filter => {
        const tag = document.createElement('span');
        tag.className = 'filter-tag';
        tag.innerHTML = `\${filter} <i class=\"fas fa-times\" onclick=\"removeSessionFilter('\${filter}')\"></i>`;
        filterTags.appendChild(tag);
    });

    sessions.forEach(session => {
        const title = session.querySelector('.cell-trainingplan strong')?.textContent.toLowerCase() || '';
        const coach = session.dataset.coach;
        const duration = parseInt(session.dataset.duration);
        const showSession = 
            (!searchTerm || title.includes(searchTerm)) &&
            (!coachFilter || coach === coachFilter) &&
            (!durationFilter || checkDurationFilter(duration, durationFilter));
        
        session.style.display = showSession ? '' : 'none';
    });
}

function checkDurationFilter(duration, filter) {
    switch(filter) {
        case 'short': return duration < 30;
        case 'medium': return duration >= 30 && duration <= 60;
        case 'long': return duration > 60;
        default: return true;
    }
}

function sortSessions(field, button) {
    const sessionsList = document.getElementById('sessions-list');
    const sessions = Array.from(document.querySelectorAll('.session-item'));
    
    // Réinitialiser tous les boutons de tri
    document.querySelectorAll('#sessions-tab .sort-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    
    // Activer le bouton courant
    button.classList.add('active');
    
    // Toggle l'ordre si c'est le même champ
    if (currentSessionSort.field === field) {
        currentSessionSort.order = currentSessionSort.order === 'asc' ? 'desc' : 'asc';
    } else {
        currentSessionSort.field = field;
        currentSessionSort.order = 'asc';
    }
    
    sessions.sort((a, b) => {
        let aValue, bValue;
        
        switch(field) {
            case 'date':
                aValue = new Date(a.dataset.date);
                bValue = new Date(b.dataset.date);
                break;
            case 'duration':
                aValue = parseInt(a.dataset.duration);
                bValue = parseInt(b.dataset.duration);
                break;
            default:
                return 0;
        }
        
        if (currentSessionSort.order === 'asc') {
            return aValue > bValue ? 1 : -1;
        } else {
            return aValue < bValue ? 1 : -1;
        }
    });
    
    // Réorganiser les sessions dans le DOM
    sessions.forEach(session => {
        sessionsList.appendChild(session);
    });
}

function removeSessionFilter(filter) {
    const filterText = filter.split(': ')[1];
    
    if (filter.includes('Recherche')) {
        document.getElementById('session-search').value = '';
    } else if (filter.includes('Coach')) {
        document.getElementById('session-coach-filter').value = '';
    } else if (filter.includes('Durée')) {
        document.getElementById('session-duration-filter').value = '';
    }
    
    filterSessions();
}

function resetSessionFilters() {
    document.getElementById('session-search').value = '';
    document.getElementById('session-coach-filter').value = '';
    document.getElementById('session-duration-filter').value = '';
    document.querySelectorAll('#sessions-tab .sort-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    document.getElementById('session-filter-tags').innerHTML = '';
    filterSessions();
}

// ==================== FUNCTIONS FOR TRAINING PLANS ====================
function filterTrainingPlans() {
    const searchTerm = document.getElementById('training-search').value.toLowerCase();
    const difficultyFilter = document.getElementById('training-difficulty-filter').value;
    const focusFilter = document.getElementById('training-focus-filter').value;
    const plans = document.querySelectorAll('.training-item');
    const filterTags = document.getElementById('training-filter-tags');
    
    // Mettre à jour les tags de filtre
    filterTags.innerHTML = '';
    let activeFilters = [];
    
    if (searchTerm) activeFilters.push(`Recherche: \"\${searchTerm}\"`);
    if (difficultyFilter) activeFilters.push(`Difficulté: \${difficultyFilter}`);
    if (focusFilter) activeFilters.push(`Focus: \${focusFilter}`);
    
    activeFilters.forEach(filter => {
        const tag = document.createElement('span');
        tag.className = 'filter-tag';
        tag.innerHTML = `\${filter} <i class=\"fas fa-times\" onclick=\"removeTrainingFilter('\${filter}')\"></i>`;
        filterTags.appendChild(tag);
    });

    plans.forEach(plan => {
        const title = plan.dataset.title;
        const difficulty = plan.dataset.difficulty;
        const focus = plan.dataset.focus;
        const showPlan = 
            (!searchTerm || title.includes(searchTerm)) &&
            (!difficultyFilter || difficulty === difficultyFilter) &&
            (!focusFilter || focus === focusFilter);
        
        plan.style.display = showPlan ? '' : 'none';
    });
}

function sortTrainingPlans(field, button) {
    const plansList = document.getElementById('training-plans-list');
    const plans = Array.from(document.querySelectorAll('.training-item'));
    
    // Réinitialiser tous les boutons de tri
    document.querySelectorAll('#training-plans-tab .sort-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    
    // Activer le bouton courant
    button.classList.add('active');
    
    // Toggle l'ordre si c'est le même champ
    if (currentTrainingSort.field === field) {
        currentTrainingSort.order = currentTrainingSort.order === 'asc' ? 'desc' : 'asc';
    } else {
        currentTrainingSort.field = field;
        currentTrainingSort.order = 'asc';
    }
    
    plans.sort((a, b) => {
        let aValue, bValue;
        
        switch(field) {
            case 'title':
                aValue = a.dataset.title;
                bValue = b.dataset.title;
                break;
            case 'date':
                aValue = new Date(a.dataset.date);
                bValue = new Date(b.dataset.date);
                break;
            default:
                return 0;
        }
        
        if (currentTrainingSort.order === 'asc') {
            return aValue > bValue ? 1 : -1;
        } else {
            return aValue < bValue ? 1 : -1;
        }
    });
    
    // Réorganiser les plans dans le DOM
    plans.forEach(plan => {
        plansList.appendChild(plan);
    });
}

function removeTrainingFilter(filter) {
    const filterText = filter.split(': ')[1];
    
    if (filter.includes('Recherche')) {
        document.getElementById('training-search').value = '';
    } else if (filter.includes('Difficulté')) {
        document.getElementById('training-difficulty-filter').value = '';
    } else if (filter.includes('Focus')) {
        document.getElementById('training-focus-filter').value = '';
    }
    
    filterTrainingPlans();
}

function resetTrainingFilters() {
    document.getElementById('training-search').value = '';
    document.getElementById('training-difficulty-filter').value = '';
    document.getElementById('training-focus-filter').value = '';
    document.querySelectorAll('#training-plans-tab .sort-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    document.getElementById('training-filter-tags').innerHTML = '';
    filterTrainingPlans();
}

// ==================== TAB FUNCTION ====================
function showTab(tabName) {
    // Cache tous les contenus de tab
    document.querySelectorAll('.tab-content').forEach(tab => {
        tab.classList.remove('active');
    });
    
    // Enlève la classe active de tous les boutons
    document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    
    // Affiche la tab sélectionnée
    document.getElementById(tabName + '-tab').classList.add('active');
    
    // Active le bouton correspondant
    event.currentTarget.classList.add('active');
    
    // Réinitialiser les filtres quand on change d'onglet
    if (tabName === 'sessions') {
        resetSessionFilters();
    } else {
        resetTrainingFilters();
    }
}

// Initialisation au chargement
document.addEventListener('DOMContentLoaded', function() {
    // Vérifie s'il y a un hash dans l'URL pour afficher la bonne tab
    if (window.location.hash === '#training-plans') {
        showTab('training-plans');
    }
});
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
        return "coaching_session/index.html.twig";
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
        return array (  1261 => 898,  1248 => 897,  1235 => 893,  1227 => 889,  1225 => 888,  1220 => 885,  1216 => 883,  1210 => 881,  1208 => 880,  1202 => 876,  1198 => 874,  1189 => 870,  1183 => 866,  1181 => 865,  1177 => 864,  1170 => 861,  1162 => 857,  1160 => 856,  1154 => 853,  1148 => 850,  1141 => 846,  1137 => 845,  1131 => 842,  1125 => 839,  1121 => 838,  1116 => 836,  1112 => 835,  1108 => 834,  1104 => 833,  1100 => 832,  1096 => 831,  1093 => 830,  1089 => 829,  1086 => 828,  1084 => 827,  1055 => 800,  1049 => 799,  1041 => 797,  1038 => 796,  1035 => 795,  1030 => 794,  1028 => 793,  1004 => 771,  996 => 767,  994 => 766,  989 => 763,  985 => 761,  979 => 759,  977 => 758,  971 => 754,  967 => 752,  953 => 744,  946 => 740,  940 => 737,  936 => 735,  932 => 733,  927 => 731,  922 => 730,  920 => 729,  915 => 727,  910 => 725,  905 => 723,  901 => 722,  897 => 721,  893 => 720,  889 => 719,  885 => 718,  881 => 717,  877 => 716,  874 => 715,  870 => 714,  866 => 712,  864 => 711,  827 => 676,  821 => 675,  813 => 673,  810 => 672,  807 => 671,  802 => 670,  800 => 669,  767 => 639,  760 => 635,  753 => 631,  746 => 627,  738 => 621,  725 => 620,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Phantom Force - Coaching & Training{% endblock %}

{% block inline_styles %}
<style>
/* ================= COACHING PAGE STYLES ================= */
.coaching-hero {
    text-align: center;
    padding: 80px 20px 50px;
    position: relative;
    margin-bottom: 50px;
    animation: fadeInUp 0.8s ease-out;
}

.coaching-hero::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 150px;
    height: 4px;
    background: linear-gradient(90deg, #ff0000, #ff2d2d, #ff5e5e);
    border-radius: 2px;
    animation: widthGrow 1.2s ease-out;
}

.coaching-hero h1 {
    font-size: 56px;
    font-weight: 800;
    background: linear-gradient(90deg, #ff0000, #ff2d2d, #ff5e5e, #ff8a8a);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    margin-bottom: 20px;
    line-height: 1.1;
    text-shadow: 0 5px 15px rgba(255, 0, 0, 0.3);
    animation: textGlow 3s infinite alternate;
}

.coaching-hero p {
    color: var(--text-muted);
    font-size: 20px;
    max-width: 700px;
    margin: 0 auto 30px;
    line-height: 1.6;
}

/* ================= STATS BAR ================= */
.stats-bar {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin: 40px 0 60px;
}

.stat-item {
    background: rgba(255, 45, 45, 0.1);
    border: 1px solid rgba(255, 45, 45, 0.3);
    border-radius: var(--radius-lg);
    padding: 25px;
    text-align: center;
    backdrop-filter: blur(10px);
    transition: var(--transition);
    position: relative;
    overflow: hidden;
}

.stat-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(255, 0, 0, 0.2);
    border-color: #ff2d2d;
}

.stat-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(255,45,45,0.1), rgba(255,0,0,0.05));
    z-index: -1;
}

.stat-value {
    font-size: 36px;
    font-weight: 800;
    background: linear-gradient(90deg, #ff2d2d, #ff5e5e);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    margin-bottom: 8px;
    animation: pulse 2s infinite;
}

.stat-label {
    font-size: 14px;
    color: var(--text-muted);
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* ================= TABS ================= */
.tabs-container {
    margin-bottom: 30px;
}

.tabs-nav {
    display: flex;
    gap: 10px;
    margin-bottom: 0;
    border-bottom: 2px solid var(--border);
}

.tab-btn {
    padding: 15px 30px;
    background: transparent;
    border: none;
    color: var(--text-muted);
    font-weight: 600;
    font-size: 16px;
    cursor: pointer;
    border-radius: 8px 8px 0 0;
    transition: var(--transition);
    position: relative;
    display: flex;
    align-items: center;
    gap: 8px;
}

.tab-btn:hover {
    color: var(--text-light);
    background: rgba(255, 45, 45, 0.1);
}

.tab-btn.active {
    color: var(--red);
    background: rgba(255, 45, 45, 0.15);
}

.tab-btn.active::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 100%;
    height: 3px;
    background: linear-gradient(90deg, #ff0000, #ff2d2d);
    border-radius: 2px;
}

.tab-content {
    display: none;
    animation: fadeIn 0.5s ease-out;
}

.tab-content.active {
    display: block;
}

/* ================= CONTROLS BAR ================= */
.controls-bar {
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    padding: 20px;
    margin-bottom: 20px;
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
    align-items: center;
    box-shadow: var(--shadow);
}

.search-box {
    flex: 1;
    min-width: 250px;
    position: relative;
}

.search-box input {
    width: 100%;
    padding: 12px 15px 12px 45px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    color: var(--text-light);
    font-size: 14px;
    transition: var(--transition);
}

.search-box input:focus {
    outline: none;
    border-color: var(--red);
    box-shadow: 0 0 0 2px rgba(255, 45, 45, 0.2);
}

.search-box i {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--text-muted);
}

.filter-select {
    padding: 12px 15px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    color: var(--text-light);
    font-size: 14px;
    min-width: 150px;
    cursor: pointer;
    transition: var(--transition);
}

.filter-select:focus {
    outline: none;
    border-color: var(--red);
}

.sort-controls {
    display: flex;
    gap: 10px;
    align-items: center;
}

.sort-btn {
    padding: 10px 15px;
    background: rgba(255, 45, 45, 0.1);
    border: 1px solid rgba(255, 45, 45, 0.3);
    border-radius: var(--radius);
    color: var(--red);
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    transition: var(--transition);
    display: flex;
    align-items: center;
    gap: 5px;
}

.sort-btn:hover {
    background: rgba(255, 45, 45, 0.2);
}

.sort-btn.active {
    background: linear-gradient(135deg, #ff2d2d, #ff5e5e);
    color: white;
    border-color: transparent;
}

.reset-filters {
    padding: 10px 15px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    color: var(--text-muted);
    font-size: 13px;
    cursor: pointer;
    transition: var(--transition);
}

.reset-filters:hover {
    background: rgba(255, 45, 45, 0.1);
    color: var(--red);
}

/* ================= TABLE DESIGN ================= */
.table-container {
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow);
    animation: fadeInUp 0.8s ease-out;
}

.table-header {
    display: grid;
    grid-template-columns: 80px 120px 120px 180px 150px 1fr 150px;
    background: linear-gradient(90deg, rgba(255,0,0,0.2), rgba(255,45,45,0.1));
    padding: 20px 25px;
    border-bottom: 2px solid var(--red);
    font-weight: 700;
    color: var(--text-light);
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.table-row {
    display: grid;
    grid-template-columns: 80px 120px 120px 180px 150px 1fr 150px;
    padding: 20px 25px;
    border-bottom: 1px solid rgba(255,255,255,0.05);
    transition: var(--transition);
    align-items: center;
}

.table-row:hover {
    background: rgba(255, 45, 45, 0.05);
    transform: translateX(5px);
}

.table-row:last-child {
    border-bottom: none;
}

.table-cell {
    color: var(--text-muted);
    font-size: 14px;
    transition: var(--transition);
}

.table-row:hover .table-cell {
    color: var(--text-light);
}

.cell-id {
    font-weight: 700;
    color: var(--red);
    font-size: 16px;
}

.cell-date::before {
    content: '📅';
    margin-right: 8px;
    font-size: 12px;
}

.cell-duration {
    color: var(--green);
    font-weight: 600;
}

.cell-duration::after {
    content: ' min';
    font-size: 12px;
    opacity: 0.7;
}

.cell-notes {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 300px;
}

.cell-trainingplan {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 250px;
}

/* ================= TRAINING PLANS TABLE ================= */
.training-table-header {
    display: grid;
    grid-template-columns: 80px 1fr 200px 150px 150px 150px;
    background: linear-gradient(90deg, rgba(255,0,0,0.2), rgba(255,45,45,0.1));
    padding: 20px 25px;
    border-bottom: 2px solid var(--red);
    font-weight: 700;
    color: var(--text-light);
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.training-table-row {
    display: grid;
    grid-template-columns: 80px 1fr 200px 150px 150px 150px;
    padding: 20px 25px;
    border-bottom: 1px solid rgba(255,255,255,0.05);
    transition: var(--transition);
    align-items: center;
}

.training-table-row:hover {
    background: rgba(255, 45, 45, 0.05);
    transform: translateX(5px);
}

.training-title {
    font-weight: 700;
    color: var(--text-light);
}

.training-description {
    color: var(--text-muted);
    font-size: 13px;
    line-height: 1.4;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.training-focus {
    padding: 4px 12px;
    border-radius: 20px;
    background: rgba(52, 152, 219, 0.2);
    color: #3498db;
    font-size: 12px;
    font-weight: 600;
    text-align: center;
}

.training-difficulty {
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    text-align: center;
    text-transform: uppercase;
}

.difficulty-beginner {
    background: rgba(46, 204, 113, 0.2);
    color: #2ecc71;
}

.difficulty-intermediate {
    background: rgba(241, 196, 15, 0.2);
    color: #f1c40f;
}

.difficulty-advanced {
    background: rgba(231, 76, 60, 0.2);
    color: #e74c3c;
}

.training-date::before {
    content: '📅';
    margin-right: 8px;
    font-size: 12px;
}

/* ================= ACTION BUTTONS ================= */
.action-buttons {
    display: flex;
    gap: 10px;
}

.btn-show, .btn-edit, .btn-new, .btn-delete {
    padding: 8px 16px;
    border-radius: 6px;
    font-weight: 600;
    font-size: 12px;
    text-decoration: none;
    transition: var(--transition);
    display: inline-flex;
    align-items: center;
    gap: 6px;
    border: none;
    cursor: pointer;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.btn-show {
    background: linear-gradient(135deg, #ff2d2d, #ff5e5e);
    color: white;
}

.btn-edit {
    background: rgba(255, 45, 45, 0.1);
    color: var(--red);
    border: 1px solid rgba(255, 45, 45, 0.3);
}

.btn-delete {
    background: rgba(231, 76, 60, 0.1);
    color: #e74c3c;
    border: 1px solid rgba(231, 76, 60, 0.3);
}

.btn-new {
    background: linear-gradient(135deg, #ff0000, #ff2d2d);
    color: white;
    padding: 12px 24px;
    font-size: 14px;
    position: relative;
    overflow: hidden;
}

.btn-show:hover, .btn-edit:hover, .btn-delete:hover, .btn-new:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255, 0, 0, 0.2);
}

/* ================= EMPTY STATE ================= */
.empty-state {
    text-align: center;
    padding: 60px 20px;
    background: rgba(255, 45, 45, 0.05);
    border: 2px dashed rgba(255, 45, 45, 0.3);
    border-radius: var(--radius-lg);
    margin: 30px 0;
    animation: fadeIn 1s ease-out;
}

.empty-state-icon {
    font-size: 48px;
    color: rgba(255, 45, 45, 0.5);
    margin-bottom: 20px;
    animation: pulse 2s infinite;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 1200px) {
    .table-header, .table-row {
        grid-template-columns: 80px 120px 120px 150px 150px 1fr 150px;
    }
    .training-table-header, .training-table-row {
        grid-template-columns: 80px 1fr 180px 140px 140px 140px;
    }
}

@media (max-width: 992px) {
    .controls-bar {
        flex-direction: column;
        align-items: stretch;
    }
    
    .search-box {
        min-width: 100%;
    }
    
    .table-header, .training-table-header { 
        display: none; 
    }
    
    .table-row, .training-table-row { 
        display: block; 
        margin-bottom: 15px; 
        border: 1px solid var(--border); 
        border-radius: var(--radius); 
        padding: 15px; 
    }
    
    .table-cell, .training-table-row > div { 
        display: flex; 
        justify-content: space-between; 
        padding: 8px 0; 
        border-bottom: 1px solid rgba(255,255,255,0.05); 
    }
    
    .table-cell:last-child, .training-table-row > div:last-child { 
        border-bottom: none; 
    }
    
    .table-cell::before, .training-table-row > div::before { 
        content: attr(data-label); 
        font-weight: 600; 
        color: var(--red); 
        text-transform: uppercase; 
        font-size: 12px; 
    }
    
    .tabs-nav {
        flex-direction: column;
    }
    
    .tab-btn {
        border-radius: 8px;
        margin-bottom: 5px;
    }
    
    .tab-btn.active::after {
        display: none;
    }
}

@media (max-width: 768px) {
    .stats-bar {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .action-buttons {
        flex-wrap: wrap;
    }
    
    .sort-controls {
        flex-wrap: wrap;
    }
}

/* ================= FILTER TAGS ================= */
.filter-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 10px;
}

.filter-tag {
    padding: 5px 12px;
    background: rgba(52, 152, 219, 0.1);
    border: 1px solid rgba(52, 152, 219, 0.3);
    border-radius: 15px;
    font-size: 12px;
    color: #3498db;
    display: flex;
    align-items: center;
    gap: 5px;
}

.filter-tag i {
    cursor: pointer;
    font-size: 10px;
}
</style>
{% endblock %}

{% block body %}
<div class=\"coaching-hero\">
    <h1>🔥 COACHING & TRAINING</h1>
    <p>Gérez vos sessions de coaching et vos plans d'entraînement en un seul endroit. Optimisez les performances de votre équipe.</p>
    
    <div class=\"stats-bar\">
        <div class=\"stat-item\">
            <div class=\"stat-value\">{{ coaching_sessions|length }}</div>
            <div class=\"stat-label\">Sessions</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">{{ training_plans|length }}</div>
            <div class=\"stat-label\">Plans d'entraînement</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">{{ coaching_sessions|filter(c => c.trainingPlan != null)|length }}</div>
            <div class=\"stat-label\">Sessions avec plan</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">{{ coaching_sessions|filter(c => c.duration > 60)|length }}</div>
            <div class=\"stat-label\">Sessions longues</div>
        </div>
    </div>
</div>

<!-- Tabs Navigation -->
<div class=\"tabs-container\">
    <div class=\"tabs-nav\">
        <button class=\"tab-btn active\" onclick=\"showTab('sessions')\">
            <i class=\"fas fa-video\"></i> Sessions de Coaching
        </button>
        <button class=\"tab-btn\" onclick=\"showTab('training-plans')\">
            <i class=\"fas fa-dumbbell\"></i> Plans d'Entraînement
        </button>
    </div>
</div>

<!-- Sessions de Coaching Tab -->
<div id=\"sessions-tab\" class=\"tab-content active\">
    <!-- Controls Bar -->
    <div class=\"controls-bar\">
        <div class=\"search-box\">
            <i class=\"fas fa-search\"></i>
            <input type=\"text\" id=\"session-search\" placeholder=\"Rechercher une session...\" 
                   onkeyup=\"filterSessions()\">
        </div>
        
        <select class=\"filter-select\" id=\"session-coach-filter\" onchange=\"filterSessions()\">
            <option value=\"\">Tous les coachs</option>
            {% set uniqueCoaches = [] %}
            {% for session in coaching_sessions %}
                {% if session.coachId not in uniqueCoaches %}
                    {% set uniqueCoaches = uniqueCoaches|merge([session.coachId]) %}
                    <option value=\"{{ session.coachId }}\">Coach #{{ session.coachId }}</option>
                {% endif %}
            {% endfor %}
        </select>
        
        <select class=\"filter-select\" id=\"session-duration-filter\" onchange=\"filterSessions()\">
            <option value=\"\">Toutes les durées</option>
            <option value=\"short\">Court (< 30 min)</option>
            <option value=\"medium\">Moyen (30-60 min)</option>
            <option value=\"long\">Long (> 60 min)</option>
        </select>
        
        <div class=\"sort-controls\">
            <button class=\"sort-btn\" onclick=\"sortSessions('date', this)\">
                <i class=\"fas fa-calendar-alt\"></i> Date
            </button>
            <button class=\"sort-btn\" onclick=\"sortSessions('duration', this)\">
                <i class=\"fas fa-clock\"></i> Durée
            </button>
            <button class=\"reset-filters\" onclick=\"resetSessionFilters()\">
                <i class=\"fas fa-redo\"></i> Réinitialiser
            </button>
        </div>
    </div>

    <div class=\"filter-tags\" id=\"session-filter-tags\"></div>

    <div class=\"table-container\">
        <div class=\"table-header\">
            <div>ID</div>
            <div>Coach</div>
            <div>Équipe</div>
            <div>Date & Heure</div>
            <div>Durée</div>
            <div>Training Plan</div>
            <div>Actions</div>
        </div>

        {% if coaching_sessions|length > 0 %}
            <div id=\"sessions-list\">
               <!-- Dans la boucle FOR des sessions -->
{% for coaching_session in coaching_sessions %}
    <div class=\"table-row session-item\" 
         data-id=\"{{ coaching_session.id }}\"
         data-coach=\"{{ coaching_session.coachId }}\"
         data-duration=\"{{ coaching_session.duration }}\"
         data-date=\"{{ coaching_session.sessionDate ? coaching_session.sessionDate|date('Y-m-d H:i') : '' }}\"
         data-team=\"{{ coaching_session.teamId }}\">
        <div class=\"table-cell cell-id\" data-label=\"ID\">#{{ coaching_session.id }}</div>
        <div class=\"table-cell\" data-label=\"Coach\">Coach #{{ coaching_session.coachId }}</div>
        <div class=\"table-cell\" data-label=\"Équipe\">Équipe #{{ coaching_session.teamId }}</div>
        <div class=\"table-cell cell-date\" data-label=\"Date\">
            {{ coaching_session.sessionDate ? coaching_session.sessionDate|date('d/m/Y H:i') : 'N/A' }}
        </div>
        <div class=\"table-cell cell-duration\" data-label=\"Durée\">{{ coaching_session.duration }}</div>
        <div class=\"table-cell cell-trainingplan\" data-label=\"Training Plan\">
            {% if coaching_session.trainingPlan %}
                <strong>{{ coaching_session.trainingPlan.title }}</strong><br>
                <small>{{ coaching_session.trainingPlan.focusArea }}</small>
            {% else %}
                <span class=\"text-muted\">Aucun plan assigné</span>
            {% endif %}
        </div>
        <div class=\"table-cell action-buttons\" data-label=\"Actions\">
            <a href=\"{{ path('app_coaching_session_show', {'id': coaching_session.id}) }}\" class=\"btn-show\">
                <i class=\"fas fa-eye\"></i> Voir
            </a>
            <a href=\"{{ path('app_coaching_session_edit', {'id': coaching_session.id}) }}\" class=\"btn-edit\">
                <i class=\"fas fa-edit\"></i> Éditer
            </a>
            <!-- BOUTON SIMPLE POUR REJOINDRE LA MEETING -->
            <a href=\"{{ path('app_coaching_session_meet', {'id': coaching_session.id}) }}\" 
               class=\"btn-show\" 
               style=\"background: linear-gradient(135deg, #3498db, #2980b9);\">
                <i class=\"fas fa-video\"></i> Rejoindre
            </a>
        </div>
    </div>
{% endfor %}
            </div>
        {% else %}
            <div class=\"empty-state\">
                <div class=\"empty-state-icon\">🎮</div>
                <h3>Aucune session de coaching trouvée</h3>
                <p>Commencez par créer votre première session de coaching pour améliorer les performances de votre équipe.</p>
                {% if is_granted('ROLE_ADMIN') or (is_granted('ROLE_COACH') and not is_granted('ROLE_ORGINAZER') and not is_granted('ROLE_PLAYER')) %}
                    <a href=\"{{ path('app_coaching_session_new') }}\" class=\"btn btn-new\">Créer une session</a>
                {% endif %}
            </div>
        {% endif %}
    </div>

    <div style=\"text-align: center; margin-top: 40px;\">
        {% if is_granted('ROLE_ADMIN') or (is_granted('ROLE_ORGANIZER') and not is_granted('ROLE_COACH') and not is_granted('ROLE_PLAYER')) %}
            <a href=\"{{ path('app_coaching_session_new') }}\" class=\"btn-new\">
                <i class=\"fas fa-plus-circle\"></i> Nouvelle Session
            </a>
        {% endif %}
    </div>
</div>

<!-- Training Plans Tab -->
<div id=\"training-plans-tab\" class=\"tab-content\">
    <!-- Controls Bar -->
    <div class=\"controls-bar\">
        <div class=\"search-box\">
            <i class=\"fas fa-search\"></i>
            <input type=\"text\" id=\"training-search\" placeholder=\"Rechercher un plan...\" 
                   onkeyup=\"filterTrainingPlans()\">
        </div>
        
        <select class=\"filter-select\" id=\"training-difficulty-filter\" onchange=\"filterTrainingPlans()\">
            <option value=\"\">Toutes les difficultés</option>
            <option value=\"Beginner\">Débutant</option>
            <option value=\"Intermediate\">Intermédiaire</option>
            <option value=\"Advanced\">Avancé</option>
        </select>
        
        <select class=\"filter-select\" id=\"training-focus-filter\" onchange=\"filterTrainingPlans()\">
            <option value=\"\">Tous les focus</option>
            {% set uniqueFocus = [] %}
            {% for plan in training_plans %}
                {% if plan.focusArea not in uniqueFocus %}
                    {% set uniqueFocus = uniqueFocus|merge([plan.focusArea]) %}
                    <option value=\"{{ plan.focusArea }}\">{{ plan.focusArea }}</option>
                {% endif %}
            {% endfor %}
        </select>
        
        <div class=\"sort-controls\">
            <button class=\"sort-btn\" onclick=\"sortTrainingPlans('title', this)\">
                <i class=\"fas fa-sort-alpha-down\"></i> Titre
            </button>
            <button class=\"sort-btn\" onclick=\"sortTrainingPlans('date', this)\">
                <i class=\"fas fa-calendar-alt\"></i> Date
            </button>
            <button class=\"reset-filters\" onclick=\"resetTrainingFilters()\">
                <i class=\"fas fa-redo\"></i> Réinitialiser
            </button>
        </div>
    </div>

    <div class=\"filter-tags\" id=\"training-filter-tags\"></div>

    <div class=\"table-container\">
        <div class=\"training-table-header\">
            <div>ID</div>
            <div>Titre & Description</div>
            <div>Focus</div>
            <div>Difficulté</div>
            <div>Créé le</div>
            <div>Actions</div>
        </div>

        {% if training_plans|length > 0 %}
            <div id=\"training-plans-list\">
                {% for training_plan in training_plans %}
                    <div class=\"training-table-row training-item\"
                         data-id=\"{{ training_plan.id }}\"
                         data-title=\"{{ training_plan.title|lower }}\"
                         data-difficulty=\"{{ training_plan.difficultyLevel }}\"
                         data-focus=\"{{ training_plan.focusArea }}\"
                         data-date=\"{{ training_plan.createdAt ? training_plan.createdAt|date('Y-m-d') : '' }}\">
                        <div class=\"cell-id\" data-label=\"ID\">#{{ training_plan.id }}</div>
                        <div data-label=\"Titre & Description\">
                            <div class=\"training-title\">{{ training_plan.title }}</div>
                            <div class=\"training-description\">{{ training_plan.description }}</div>
                        </div>
                        <div data-label=\"Focus\">
                            <span class=\"training-focus\">{{ training_plan.focusArea }}</span>
                        </div>
                        <div data-label=\"Difficulté\">
                            <span class=\"training-difficulty difficulty-{{ training_plan.difficultyLevel|lower }}\">
                                {{ training_plan.difficultyLevel }}
                            </span>
                        </div>
                        <div class=\"training-date\" data-label=\"Crée le\">
                            {{ training_plan.createdAt ? training_plan.createdAt|date('d/m/Y') : 'N/A' }}
                        </div>
                        <div class=\"action-buttons\" data-label=\"Actions\">
                            <a href=\"{{ path('app_training_plan_show', {'id': training_plan.id}) }}\" class=\"btn-show\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                            {% if is_granted('ROLE_ADMIN') or (is_granted('ROLE_ORGANIZER') and not is_granted('ROLE_COACH') and not is_granted('ROLE_PLAYER')) %}
                                <a href=\"{{ path('app_training_plan_edit', {'id': training_plan.id}) }}\" class=\"btn-edit\">
                                    <i class=\"fas fa-edit\"></i> Éditer
                                </a>
                            {% endif %}
                            <form method=\"post\" action=\"{{ path('app_training_plan_delete', {'id': training_plan.id}) }}\" 
                                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce plan d\\'entraînement ?');\" 
                                  style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ training_plan.id) }}\">
                                {% if is_granted('ROLE_ADMIN') or (is_granted('ROLE_ORGANIZER') and not is_granted('ROLE_COACH') and not is_granted('ROLE_PLAYER')) %}
                                    <button type=\"submit\" class=\"btn-delete\">
                                        <i class=\"fas fa-trash\"></i> Supprimer
                                    </button>
                                {% endif %}
                            </form>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <div class=\"empty-state\">
                <div class=\"empty-state-icon\">📋</div>
                <h3>Aucun plan d'entraînement trouvé</h3>
                <p>Créez votre premier plan d'entraînement pour structurer vos sessions de coaching.</p>
                {% if is_granted('ROLE_ADMIN') or (is_granted('ROLE_ORGANIZER') and not is_granted('ROLE_COACH') and not is_granted('ROLE_PLAYER')) %}
                    <a href=\"{{ path('app_training_plan_new') }}\" class=\"btn btn-new\">Créer un plan</a>
                {% endif %}
            </div>
        {% endif %}
    </div>

    <div style=\"text-align: center; margin-top: 40px;\">
        {% if is_granted('ROLE_ADMIN') or (is_granted('ROLE_ORGANIZER') and not is_granted('ROLE_COACH') and not is_granted('ROLE_PLAYER')) %}
            <a href=\"{{ path('app_training_plan_new') }}\" class=\"btn-new\">
                <i class=\"fas fa-plus-circle\"></i> Nouveau Plan d'Entraînement
            </a>
        {% endif %}
    </div>
</div>
{% endblock %}

{% block javascripts %}
<script>
// Variables globales pour le tri
let currentSessionSort = { field: null, order: 'asc' };
let currentTrainingSort = { field: null, order: 'asc' };

// ==================== FUNCTIONS FOR SESSIONS ====================
function filterSessions() {
    const searchTerm = document.getElementById('session-search').value.toLowerCase();
    const coachFilter = document.getElementById('session-coach-filter').value;
    const durationFilter = document.getElementById('session-duration-filter').value;
    const sessions = document.querySelectorAll('.session-item');
    const filterTags = document.getElementById('session-filter-tags');
    
    // Mettre à jour les tags de filtre
    filterTags.innerHTML = '';
    let activeFilters = [];
    
    if (searchTerm) activeFilters.push(`Recherche: \"\${searchTerm}\"`);
    if (coachFilter) activeFilters.push(`Coach: #\${coachFilter}`);
    if (durationFilter) {
        let label = '';
        switch(durationFilter) {
            case 'short': label = 'Durée: Court'; break;
            case 'medium': label = 'Durée: Moyen'; break;
            case 'long': label = 'Durée: Long'; break;
        }
        activeFilters.push(label);
    }
    
    activeFilters.forEach(filter => {
        const tag = document.createElement('span');
        tag.className = 'filter-tag';
        tag.innerHTML = `\${filter} <i class=\"fas fa-times\" onclick=\"removeSessionFilter('\${filter}')\"></i>`;
        filterTags.appendChild(tag);
    });

    sessions.forEach(session => {
        const title = session.querySelector('.cell-trainingplan strong')?.textContent.toLowerCase() || '';
        const coach = session.dataset.coach;
        const duration = parseInt(session.dataset.duration);
        const showSession = 
            (!searchTerm || title.includes(searchTerm)) &&
            (!coachFilter || coach === coachFilter) &&
            (!durationFilter || checkDurationFilter(duration, durationFilter));
        
        session.style.display = showSession ? '' : 'none';
    });
}

function checkDurationFilter(duration, filter) {
    switch(filter) {
        case 'short': return duration < 30;
        case 'medium': return duration >= 30 && duration <= 60;
        case 'long': return duration > 60;
        default: return true;
    }
}

function sortSessions(field, button) {
    const sessionsList = document.getElementById('sessions-list');
    const sessions = Array.from(document.querySelectorAll('.session-item'));
    
    // Réinitialiser tous les boutons de tri
    document.querySelectorAll('#sessions-tab .sort-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    
    // Activer le bouton courant
    button.classList.add('active');
    
    // Toggle l'ordre si c'est le même champ
    if (currentSessionSort.field === field) {
        currentSessionSort.order = currentSessionSort.order === 'asc' ? 'desc' : 'asc';
    } else {
        currentSessionSort.field = field;
        currentSessionSort.order = 'asc';
    }
    
    sessions.sort((a, b) => {
        let aValue, bValue;
        
        switch(field) {
            case 'date':
                aValue = new Date(a.dataset.date);
                bValue = new Date(b.dataset.date);
                break;
            case 'duration':
                aValue = parseInt(a.dataset.duration);
                bValue = parseInt(b.dataset.duration);
                break;
            default:
                return 0;
        }
        
        if (currentSessionSort.order === 'asc') {
            return aValue > bValue ? 1 : -1;
        } else {
            return aValue < bValue ? 1 : -1;
        }
    });
    
    // Réorganiser les sessions dans le DOM
    sessions.forEach(session => {
        sessionsList.appendChild(session);
    });
}

function removeSessionFilter(filter) {
    const filterText = filter.split(': ')[1];
    
    if (filter.includes('Recherche')) {
        document.getElementById('session-search').value = '';
    } else if (filter.includes('Coach')) {
        document.getElementById('session-coach-filter').value = '';
    } else if (filter.includes('Durée')) {
        document.getElementById('session-duration-filter').value = '';
    }
    
    filterSessions();
}

function resetSessionFilters() {
    document.getElementById('session-search').value = '';
    document.getElementById('session-coach-filter').value = '';
    document.getElementById('session-duration-filter').value = '';
    document.querySelectorAll('#sessions-tab .sort-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    document.getElementById('session-filter-tags').innerHTML = '';
    filterSessions();
}

// ==================== FUNCTIONS FOR TRAINING PLANS ====================
function filterTrainingPlans() {
    const searchTerm = document.getElementById('training-search').value.toLowerCase();
    const difficultyFilter = document.getElementById('training-difficulty-filter').value;
    const focusFilter = document.getElementById('training-focus-filter').value;
    const plans = document.querySelectorAll('.training-item');
    const filterTags = document.getElementById('training-filter-tags');
    
    // Mettre à jour les tags de filtre
    filterTags.innerHTML = '';
    let activeFilters = [];
    
    if (searchTerm) activeFilters.push(`Recherche: \"\${searchTerm}\"`);
    if (difficultyFilter) activeFilters.push(`Difficulté: \${difficultyFilter}`);
    if (focusFilter) activeFilters.push(`Focus: \${focusFilter}`);
    
    activeFilters.forEach(filter => {
        const tag = document.createElement('span');
        tag.className = 'filter-tag';
        tag.innerHTML = `\${filter} <i class=\"fas fa-times\" onclick=\"removeTrainingFilter('\${filter}')\"></i>`;
        filterTags.appendChild(tag);
    });

    plans.forEach(plan => {
        const title = plan.dataset.title;
        const difficulty = plan.dataset.difficulty;
        const focus = plan.dataset.focus;
        const showPlan = 
            (!searchTerm || title.includes(searchTerm)) &&
            (!difficultyFilter || difficulty === difficultyFilter) &&
            (!focusFilter || focus === focusFilter);
        
        plan.style.display = showPlan ? '' : 'none';
    });
}

function sortTrainingPlans(field, button) {
    const plansList = document.getElementById('training-plans-list');
    const plans = Array.from(document.querySelectorAll('.training-item'));
    
    // Réinitialiser tous les boutons de tri
    document.querySelectorAll('#training-plans-tab .sort-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    
    // Activer le bouton courant
    button.classList.add('active');
    
    // Toggle l'ordre si c'est le même champ
    if (currentTrainingSort.field === field) {
        currentTrainingSort.order = currentTrainingSort.order === 'asc' ? 'desc' : 'asc';
    } else {
        currentTrainingSort.field = field;
        currentTrainingSort.order = 'asc';
    }
    
    plans.sort((a, b) => {
        let aValue, bValue;
        
        switch(field) {
            case 'title':
                aValue = a.dataset.title;
                bValue = b.dataset.title;
                break;
            case 'date':
                aValue = new Date(a.dataset.date);
                bValue = new Date(b.dataset.date);
                break;
            default:
                return 0;
        }
        
        if (currentTrainingSort.order === 'asc') {
            return aValue > bValue ? 1 : -1;
        } else {
            return aValue < bValue ? 1 : -1;
        }
    });
    
    // Réorganiser les plans dans le DOM
    plans.forEach(plan => {
        plansList.appendChild(plan);
    });
}

function removeTrainingFilter(filter) {
    const filterText = filter.split(': ')[1];
    
    if (filter.includes('Recherche')) {
        document.getElementById('training-search').value = '';
    } else if (filter.includes('Difficulté')) {
        document.getElementById('training-difficulty-filter').value = '';
    } else if (filter.includes('Focus')) {
        document.getElementById('training-focus-filter').value = '';
    }
    
    filterTrainingPlans();
}

function resetTrainingFilters() {
    document.getElementById('training-search').value = '';
    document.getElementById('training-difficulty-filter').value = '';
    document.getElementById('training-focus-filter').value = '';
    document.querySelectorAll('#training-plans-tab .sort-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    document.getElementById('training-filter-tags').innerHTML = '';
    filterTrainingPlans();
}

// ==================== TAB FUNCTION ====================
function showTab(tabName) {
    // Cache tous les contenus de tab
    document.querySelectorAll('.tab-content').forEach(tab => {
        tab.classList.remove('active');
    });
    
    // Enlève la classe active de tous les boutons
    document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    
    // Affiche la tab sélectionnée
    document.getElementById(tabName + '-tab').classList.add('active');
    
    // Active le bouton correspondant
    event.currentTarget.classList.add('active');
    
    // Réinitialiser les filtres quand on change d'onglet
    if (tabName === 'sessions') {
        resetSessionFilters();
    } else {
        resetTrainingFilters();
    }
}

// Initialisation au chargement
document.addEventListener('DOMContentLoaded', function() {
    // Vérifie s'il y a un hash dans l'URL pour afficher la bonne tab
    if (window.location.hash === '#training-plans') {
        showTab('training-plans');
    }
});
</script>
{% endblock %}", "coaching_session/index.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\coaching_session\\index.html.twig");
    }
}
