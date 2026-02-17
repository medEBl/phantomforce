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
    grid-template-columns: 80px 200px 200px 180px 150px 1fr 150px;
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
    grid-template-columns: 80px 200px 200px 180px 150px 1fr 150px;
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
    grid-template-columns: 80px 1fr 200px 150px 150px 150px 150px;
    background: linear-gradient(90deg, rgba(52,152,219,0.2), rgba(52,152,219,0.1));
    padding: 20px 25px;
    border-bottom: 2px solid #3498db;
    font-weight: 700;
    color: var(--text-light);
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.training-table-row {
    display: grid;
    grid-template-columns: 80px 1fr 200px 150px 150px 150px 150px;
    padding: 20px 25px;
    border-bottom: 1px solid rgba(255,255,255,0.05);
    transition: var(--transition);
    align-items: center;
}

.training-table-row:hover {
    background: rgba(52, 152, 219, 0.05);
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

/* ================= RESPONSIVE ================= */
@media (max-width: 1200px) {
    .table-header, .table-row {
        grid-template-columns: 80px 180px 180px 150px 150px 1fr 150px;
    }
    .training-table-header, .training-table-row {
        grid-template-columns: 80px 1fr 180px 140px 140px 140px 140px;
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
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["session"], "coach", [], "any", false, false, false, 671) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "coach", [], "any", false, false, false, 671), "id", [], "any", false, false, false, 671), (isset($context["uniqueCoaches"]) || array_key_exists("uniqueCoaches", $context) ? $context["uniqueCoaches"] : (function () { throw new RuntimeError('Variable "uniqueCoaches" does not exist.', 671, $this->source); })())))) {
                // line 672
                yield "                    ";
                $context["uniqueCoaches"] = Twig\Extension\CoreExtension::merge((isset($context["uniqueCoaches"]) || array_key_exists("uniqueCoaches", $context) ? $context["uniqueCoaches"] : (function () { throw new RuntimeError('Variable "uniqueCoaches" does not exist.', 672, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "coach", [], "any", false, false, false, 672), "id", [], "any", false, false, false, 672)]);
                // line 673
                yield "                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "coach", [], "any", false, false, false, 673), "id", [], "any", false, false, false, 673), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "coach", [], "any", false, false, false, 673), "fullName", [], "any", false, false, false, 673), "html", null, true);
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
        
        <select class=\"filter-select\" id=\"session-team-filter\" onchange=\"filterSessions()\">
            <option value=\"\">Toutes les équipes</option>
            ";
        // line 680
        $context["uniqueTeams"] = [];
        // line 681
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 681, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 682
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["session"], "team", [], "any", false, false, false, 682) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "team", [], "any", false, false, false, 682), "id", [], "any", false, false, false, 682), (isset($context["uniqueTeams"]) || array_key_exists("uniqueTeams", $context) ? $context["uniqueTeams"] : (function () { throw new RuntimeError('Variable "uniqueTeams" does not exist.', 682, $this->source); })())))) {
                // line 683
                yield "                    ";
                $context["uniqueTeams"] = Twig\Extension\CoreExtension::merge((isset($context["uniqueTeams"]) || array_key_exists("uniqueTeams", $context) ? $context["uniqueTeams"] : (function () { throw new RuntimeError('Variable "uniqueTeams" does not exist.', 683, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "team", [], "any", false, false, false, 683), "id", [], "any", false, false, false, 683)]);
                // line 684
                yield "                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "team", [], "any", false, false, false, 684), "id", [], "any", false, false, false, 684), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "team", [], "any", false, false, false, 684), "name", [], "any", false, false, false, 684), "html", null, true);
                yield "</option>
                ";
            }
            // line 686
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['session'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 687
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
        // line 722
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 722, $this->source); })())) > 0)) {
            // line 723
            yield "            <div id=\"sessions-list\">
                ";
            // line 724
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 724, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["coaching_session"]) {
                // line 725
                yield "                    <div class=\"table-row session-item\" 
                         data-id=\"";
                // line 726
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "id", [], "any", false, false, false, 726), "html", null, true);
                yield "\"
                         data-coach=\"";
                // line 727
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "coach", [], "any", false, false, false, 727)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "coach", [], "any", false, false, false, 727), "id", [], "any", false, false, false, 727), "html", null, true)) : (""));
                yield "\"
                         data-team=\"";
                // line 728
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "team", [], "any", false, false, false, 728)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "team", [], "any", false, false, false, 728), "id", [], "any", false, false, false, 728), "html", null, true)) : (""));
                yield "\"
                         data-duration=\"";
                // line 729
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "duration", [], "any", false, false, false, 729), "html", null, true);
                yield "\"
                         data-date=\"";
                // line 730
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "sessionDate", [], "any", false, false, false, 730)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "sessionDate", [], "any", false, false, false, 730), "Y-m-d H:i"), "html", null, true)) : (""));
                yield "\">
                        
                        <div class=\"table-cell cell-id\" data-label=\"ID\">#";
                // line 732
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "id", [], "any", false, false, false, 732), "html", null, true);
                yield "</div>
                        
                        <div class=\"table-cell\" data-label=\"Coach\">
                            ";
                // line 735
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "coach", [], "any", false, false, false, 735)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 736
                    yield "                                <strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "coach", [], "any", false, false, false, 736), "fullName", [], "any", false, false, false, 736), "html", null, true);
                    yield "</strong><br>
                                <small style=\"color: var(--text-muted);\">@";
                    // line 737
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "coach", [], "any", false, false, false, 737), "username", [], "any", false, false, false, 737), "html", null, true);
                    yield "</small>
                            ";
                } else {
                    // line 739
                    yield "                                <span class=\"text-muted\">Coach non assigné</span>
                            ";
                }
                // line 741
                yield "                        </div>
                        
                        <div class=\"table-cell\" data-label=\"Équipe\">
                            ";
                // line 744
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "team", [], "any", false, false, false, 744)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 745
                    yield "                                <strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "team", [], "any", false, false, false, 745), "name", [], "any", false, false, false, 745), "html", null, true);
                    yield "</strong><br>
                                <small style=\"color: var(--text-muted);\">";
                    // line 746
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "team", [], "any", false, false, false, 746), "game", [], "any", false, false, false, 746), "html", null, true);
                    yield "</small>
                            ";
                } else {
                    // line 748
                    yield "                                <span class=\"text-muted\">Équipe non assignée</span>
                            ";
                }
                // line 750
                yield "                        </div>
                        
                        <div class=\"table-cell cell-date\" data-label=\"Date\">
                            ";
                // line 753
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "sessionDate", [], "any", false, false, false, 753)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "sessionDate", [], "any", false, false, false, 753), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
                yield "
                        </div>
                        
                        <div class=\"table-cell cell-duration\" data-label=\"Durée\">";
                // line 756
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "duration", [], "any", false, false, false, 756), "html", null, true);
                yield " min</div>
                        
                        <div class=\"table-cell cell-trainingplan\" data-label=\"Training Plan\">
                            ";
                // line 759
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "trainingPlan", [], "any", false, false, false, 759)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 760
                    yield "                                <strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "trainingPlan", [], "any", false, false, false, 760), "title", [], "any", false, false, false, 760), "html", null, true);
                    yield "</strong><br>
                                <small style=\"color: var(--text-muted);\">";
                    // line 761
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "trainingPlan", [], "any", false, false, false, 761), "focusArea", [], "any", false, false, false, 761), "html", null, true);
                    yield "</small>
                            ";
                } else {
                    // line 763
                    yield "                                <span class=\"text-muted\">Aucun plan assigné</span>
                            ";
                }
                // line 765
                yield "                        </div>
                        
                        <div class=\"table-cell action-buttons\" data-label=\"Actions\">
                            <a href=\"";
                // line 768
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "id", [], "any", false, false, false, 768)]), "html", null, true);
                yield "\" class=\"btn-show\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                            <a href=\"";
                // line 771
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "id", [], "any", false, false, false, 771)]), "html", null, true);
                yield "\" class=\"btn-edit\">
                                <i class=\"fas fa-edit\"></i> Éditer
                            </a>
                            <a href=\"";
                // line 774
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_meet", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "id", [], "any", false, false, false, 774)]), "html", null, true);
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
            // line 782
            yield "            </div>
        ";
        } else {
            // line 784
            yield "            <div class=\"empty-state\">
                <div class=\"empty-state-icon\">🎮</div>
                <h3>Aucune session de coaching trouvée</h3>
                <p>Commencez par créer votre première session de coaching pour améliorer les performances de votre équipe.</p>
                ";
            // line 788
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER")))) {
                // line 789
                yield "                    <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_new");
                yield "\" class=\"btn-new\">Créer une session</a>
                ";
            }
            // line 791
            yield "            </div>
        ";
        }
        // line 793
        yield "    </div>

    <div style=\"text-align: center; margin-top: 40px;\">
        ";
        // line 796
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER")))) {
            // line 797
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_new");
            yield "\" class=\"btn-new\">
                <i class=\"fas fa-plus-circle\"></i> Nouvelle Session
            </a>
        ";
        }
        // line 801
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
            <option value=\"Débutant\">Débutant</option>
            <option value=\"Intermédiaire\">Intermédiaire</option>
            <option value=\"Avancé\">Avancé</option>
            <option value=\"Expert\">Expert</option>
            <option value=\"Professionnel\">Professionnel</option>
        </select>
        
        <select class=\"filter-select\" id=\"training-focus-filter\" onchange=\"filterTrainingPlans()\">
            <option value=\"\">Tous les focus</option>
            <option value=\"Défense\">Défense</option>
            <option value=\"Attaque\">Attaque</option>
            <option value=\"Stratégie\">Stratégie</option>
            <option value=\"Communication\">Communication</option>
            <option value=\"Technique\">Technique</option>
            <option value=\"Physique\">Physique</option>
            <option value=\"Mental\">Mental</option>
            <option value=\"Tactique\">Tactique</option>
        </select>
        
        <select class=\"filter-select\" id=\"training-coach-filter\" onchange=\"filterTrainingPlans()\">
            <option value=\"\">Tous les coachs</option>
            ";
        // line 837
        $context["uniqueCoaches"] = [];
        // line 838
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 838, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 839
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "coach", [], "any", false, false, false, 839) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "coach", [], "any", false, false, false, 839), "id", [], "any", false, false, false, 839), (isset($context["uniqueCoaches"]) || array_key_exists("uniqueCoaches", $context) ? $context["uniqueCoaches"] : (function () { throw new RuntimeError('Variable "uniqueCoaches" does not exist.', 839, $this->source); })())))) {
                // line 840
                yield "                    ";
                $context["uniqueCoaches"] = Twig\Extension\CoreExtension::merge((isset($context["uniqueCoaches"]) || array_key_exists("uniqueCoaches", $context) ? $context["uniqueCoaches"] : (function () { throw new RuntimeError('Variable "uniqueCoaches" does not exist.', 840, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "coach", [], "any", false, false, false, 840), "id", [], "any", false, false, false, 840)]);
                // line 841
                yield "                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "coach", [], "any", false, false, false, 841), "id", [], "any", false, false, false, 841), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "coach", [], "any", false, false, false, 841), "fullName", [], "any", false, false, false, 841), "html", null, true);
                yield "</option>
                ";
            }
            // line 843
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['plan'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 844
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
            <div>Coach</div>
            <div>Équipe</div>
            <div>Actions</div>
        </div>

        ";
        // line 872
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 872, $this->source); })())) > 0)) {
            // line 873
            yield "            <div id=\"training-plans-list\">
                ";
            // line 874
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 874, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["training_plan"]) {
                // line 875
                yield "                    <div class=\"training-table-row training-item\"
                         data-id=\"";
                // line 876
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 876), "html", null, true);
                yield "\"
                         data-title=\"";
                // line 877
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "title", [], "any", false, false, false, 877)), "html", null, true);
                yield "\"
                         data-difficulty=\"";
                // line 878
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "difficultyLevel", [], "any", false, false, false, 878), "html", null, true);
                yield "\"
                         data-focus=\"";
                // line 879
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "focusArea", [], "any", false, false, false, 879), "html", null, true);
                yield "\"
                         data-coach=\"";
                // line 880
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "coach", [], "any", false, false, false, 880)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "coach", [], "any", false, false, false, 880), "id", [], "any", false, false, false, 880), "html", null, true)) : (""));
                yield "\"
                         data-date=\"";
                // line 881
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "createdAt", [], "any", false, false, false, 881)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "createdAt", [], "any", false, false, false, 881), "Y-m-d"), "html", null, true)) : (""));
                yield "\">
                        
                        <div class=\"cell-id\" data-label=\"ID\">#";
                // line 883
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 883), "html", null, true);
                yield "</div>
                        
                        <div data-label=\"Titre & Description\">
                            <div class=\"training-title\">";
                // line 886
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "title", [], "any", false, false, false, 886), "html", null, true);
                yield "</div>
                            <div class=\"training-description\">";
                // line 887
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "description", [], "any", false, false, false, 887), "html", null, true);
                yield "</div>
                        </div>
                        
                        <div data-label=\"Focus\">
                            <span class=\"training-focus\">";
                // line 891
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "focusArea", [], "any", false, false, false, 891), "html", null, true);
                yield "</span>
                        </div>
                        
                        <div data-label=\"Difficulté\">
                            <span class=\"training-difficulty 
                                ";
                // line 896
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "difficultyLevel", [], "any", false, false, false, 896) == "Débutant")) {
                    yield "difficulty-beginner
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 897
$context["training_plan"], "difficultyLevel", [], "any", false, false, false, 897) == "Intermédiaire")) {
                    yield "difficulty-intermediate
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 898
$context["training_plan"], "difficultyLevel", [], "any", false, false, false, 898) == "Avancé")) {
                    yield "difficulty-advanced
                                ";
                }
                // line 899
                yield "\">
                                ";
                // line 900
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "difficultyLevel", [], "any", false, false, false, 900), "html", null, true);
                yield "
                            </span>
                        </div>
                        
                        <div data-label=\"Coach\">
                            ";
                // line 905
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "coach", [], "any", false, false, false, 905)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 906
                    yield "                                <strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "coach", [], "any", false, false, false, 906), "fullName", [], "any", false, false, false, 906), "html", null, true);
                    yield "</strong><br>
                                <small style=\"color: var(--text-muted);\">@";
                    // line 907
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "coach", [], "any", false, false, false, 907), "username", [], "any", false, false, false, 907), "html", null, true);
                    yield "</small>
                            ";
                } else {
                    // line 909
                    yield "                                <span class=\"text-muted\">Coach non assigné</span>
                            ";
                }
                // line 911
                yield "                        </div>
                        
                        <div data-label=\"Équipe\">
                            ";
                // line 914
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "team", [], "any", false, false, false, 914)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 915
                    yield "                                <strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "team", [], "any", false, false, false, 915), "name", [], "any", false, false, false, 915), "html", null, true);
                    yield "</strong><br>
                                <small style=\"color: var(--text-muted);\">";
                    // line 916
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "team", [], "any", false, false, false, 916), "game", [], "any", false, false, false, 916), "html", null, true);
                    yield "</small>
                            ";
                } else {
                    // line 918
                    yield "                                <span class=\"text-muted\">Équipe non assignée</span>
                            ";
                }
                // line 920
                yield "                        </div>
                        
                        <div class=\"action-buttons\" data-label=\"Actions\">
                            <a href=\"";
                // line 923
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 923)]), "html", null, true);
                yield "\" class=\"btn-show\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                            ";
                // line 926
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER")))) {
                    // line 927
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 927)]), "html", null, true);
                    yield "\" class=\"btn-edit\">
                                    <i class=\"fas fa-edit\"></i> Éditer
                                </a>
                                <form method=\"post\" action=\"";
                    // line 930
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 930)]), "html", null, true);
                    yield "\" 
                                      onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce plan d\\'entraînement ?');\" 
                                      style=\"display: inline;\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 933
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 933))), "html", null, true);
                    yield "\">
                                    <button type=\"submit\" class=\"btn-delete\">
                                        <i class=\"fas fa-trash\"></i> Supprimer
                                    </button>
                                </form>
                            ";
                }
                // line 939
                yield "                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['training_plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 942
            yield "            </div>
        ";
        } else {
            // line 944
            yield "            <div class=\"empty-state\">
                <div class=\"empty-state-icon\">📋</div>
                <h3>Aucun plan d'entraînement trouvé</h3>
                <p>Créez votre premier plan d'entraînement pour structurer vos sessions de coaching.</p>
                ";
            // line 948
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER")))) {
                // line 949
                yield "                    <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_new");
                yield "\" class=\"btn-new\">Créer un plan</a>
                ";
            }
            // line 951
            yield "            </div>
        ";
        }
        // line 953
        yield "    </div>

    <div style=\"text-align: center; margin-top: 40px;\">
        ";
        // line 956
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER")))) {
            // line 957
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_new");
            yield "\" class=\"btn-new\">
                <i class=\"fas fa-plus-circle\"></i> Nouveau Plan d'Entraînement
            </a>
        ";
        }
        // line 961
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 965
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

        // line 966
        yield "<script>
// Variables globales pour le tri
let currentSessionSort = { field: null, order: 'asc' };
let currentTrainingSort = { field: null, order: 'asc' };

// ==================== FUNCTIONS FOR SESSIONS ====================
function filterSessions() {
    const searchTerm = document.getElementById('session-search').value.toLowerCase();
    const coachFilter = document.getElementById('session-coach-filter').value;
    const teamFilter = document.getElementById('session-team-filter').value;
    const durationFilter = document.getElementById('session-duration-filter').value;
    const sessions = document.querySelectorAll('.session-item');
    const filterTags = document.getElementById('session-filter-tags');
    
    // Mettre à jour les tags de filtre
    filterTags.innerHTML = '';
    let activeFilters = [];
    
    if (searchTerm) activeFilters.push(`Recherche: \"\${searchTerm}\"`);
    if (coachFilter) {
        const coachName = document.querySelector(`#session-coach-filter option[value=\"\${coachFilter}\"]`)?.text || coachFilter;
        activeFilters.push(`Coach: \${coachName}`);
    }
    if (teamFilter) {
        const teamName = document.querySelector(`#session-team-filter option[value=\"\${teamFilter}\"]`)?.text || teamFilter;
        activeFilters.push(`Équipe: \${teamName}`);
    }
    if (durationFilter) {
        let label = '';
        switch(durationFilter) {
            case 'short': label = 'Durée: Court (<30min)'; break;
            case 'medium': label = 'Durée: Moyen (30-60min)'; break;
            case 'long': label = 'Durée: Long (>60min)'; break;
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
        const team = session.dataset.team;
        const duration = parseInt(session.dataset.duration);
        const showSession = 
            (!searchTerm || title.includes(searchTerm)) &&
            (!coachFilter || coach === coachFilter) &&
            (!teamFilter || team === teamFilter) &&
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
    if (filter.includes('Recherche')) {
        document.getElementById('session-search').value = '';
    } else if (filter.includes('Coach')) {
        document.getElementById('session-coach-filter').value = '';
    } else if (filter.includes('Équipe')) {
        document.getElementById('session-team-filter').value = '';
    } else if (filter.includes('Durée')) {
        document.getElementById('session-duration-filter').value = '';
    }
    
    filterSessions();
}

function resetSessionFilters() {
    document.getElementById('session-search').value = '';
    document.getElementById('session-coach-filter').value = '';
    document.getElementById('session-team-filter').value = '';
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
    const coachFilter = document.getElementById('training-coach-filter').value;
    const plans = document.querySelectorAll('.training-item');
    const filterTags = document.getElementById('training-filter-tags');
    
    // Mettre à jour les tags de filtre
    filterTags.innerHTML = '';
    let activeFilters = [];
    
    if (searchTerm) activeFilters.push(`Recherche: \"\${searchTerm}\"`);
    if (difficultyFilter) activeFilters.push(`Difficulté: \${difficultyFilter}`);
    if (focusFilter) activeFilters.push(`Focus: \${focusFilter}`);
    if (coachFilter) {
        const coachName = document.querySelector(`#training-coach-filter option[value=\"\${coachFilter}\"]`)?.text || coachFilter;
        activeFilters.push(`Coach: \${coachName}`);
    }
    
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
        const coach = plan.dataset.coach;
        const showPlan = 
            (!searchTerm || title.includes(searchTerm)) &&
            (!difficultyFilter || difficulty === difficultyFilter) &&
            (!focusFilter || focus === focusFilter) &&
            (!coachFilter || coach === coachFilter);
        
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
    if (filter.includes('Recherche')) {
        document.getElementById('training-search').value = '';
    } else if (filter.includes('Difficulté')) {
        document.getElementById('training-difficulty-filter').value = '';
    } else if (filter.includes('Focus')) {
        document.getElementById('training-focus-filter').value = '';
    } else if (filter.includes('Coach')) {
        document.getElementById('training-coach-filter').value = '';
    }
    
    filterTrainingPlans();
}

function resetTrainingFilters() {
    document.getElementById('training-search').value = '';
    document.getElementById('training-difficulty-filter').value = '';
    document.getElementById('training-focus-filter').value = '';
    document.getElementById('training-coach-filter').value = '';
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

// ==================== NOTIFICATIONS 15 MINUTES AVANT SESSION ====================
function checkSessionNotifications() {
    const sessions = document.querySelectorAll('.session-item');
    const now = new Date();

    sessions.forEach(session => {
        const dateStr = session.dataset.date; // format 'YYYY-MM-DD HH:mm'
        if (!dateStr) return;

        const sessionDate = new Date(dateStr.replace(' ', 'T'));
        const diffMinutes = (sessionDate - now) / 1000 / 60; // différence en minutes

        // Notification si session dans les 15 prochaines minutes et pas déjà notifiée
        if (diffMinutes > 0 && diffMinutes <= 15 && !session.dataset.notified) {
            showNotification(
                'Session prochaine !',
                `La session #\${session.dataset.id} commence à \${sessionDate.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'})}`
            );
            session.dataset.notified = 'true';
        }
    });
}

// Fonction pour afficher la notification
function showNotification(title, message) {
    if (Notification.permission === 'granted') {
        new Notification(title, { body: message, icon: '/favicon.ico' });
    } else if (Notification.permission !== 'denied') {
        Notification.requestPermission().then(permission => {
            if (permission === 'granted') {
                new Notification(title, { body: message, icon: '/favicon.ico' });
            }
        });
    }
}

// Vérification toutes les minutes
setInterval(checkSessionNotifications, 60000);

// Vérification au chargement
document.addEventListener('DOMContentLoaded', function() {
    checkSessionNotifications();
    
    // Demander la permission pour les notifications
    if (Notification.permission === 'default') {
        Notification.requestPermission();
    }
    
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
        return array (  1398 => 966,  1385 => 965,  1372 => 961,  1364 => 957,  1362 => 956,  1357 => 953,  1353 => 951,  1347 => 949,  1345 => 948,  1339 => 944,  1335 => 942,  1327 => 939,  1318 => 933,  1312 => 930,  1305 => 927,  1303 => 926,  1297 => 923,  1292 => 920,  1288 => 918,  1283 => 916,  1278 => 915,  1276 => 914,  1271 => 911,  1267 => 909,  1262 => 907,  1257 => 906,  1255 => 905,  1247 => 900,  1244 => 899,  1239 => 898,  1235 => 897,  1231 => 896,  1223 => 891,  1216 => 887,  1212 => 886,  1206 => 883,  1201 => 881,  1197 => 880,  1193 => 879,  1189 => 878,  1185 => 877,  1181 => 876,  1178 => 875,  1174 => 874,  1171 => 873,  1169 => 872,  1139 => 844,  1133 => 843,  1125 => 841,  1122 => 840,  1119 => 839,  1114 => 838,  1112 => 837,  1074 => 801,  1066 => 797,  1064 => 796,  1059 => 793,  1055 => 791,  1049 => 789,  1047 => 788,  1041 => 784,  1037 => 782,  1023 => 774,  1017 => 771,  1011 => 768,  1006 => 765,  1002 => 763,  997 => 761,  992 => 760,  990 => 759,  984 => 756,  978 => 753,  973 => 750,  969 => 748,  964 => 746,  959 => 745,  957 => 744,  952 => 741,  948 => 739,  943 => 737,  938 => 736,  936 => 735,  930 => 732,  925 => 730,  921 => 729,  917 => 728,  913 => 727,  909 => 726,  906 => 725,  902 => 724,  899 => 723,  897 => 722,  860 => 687,  854 => 686,  846 => 684,  843 => 683,  840 => 682,  835 => 681,  833 => 680,  827 => 676,  821 => 675,  813 => 673,  810 => 672,  807 => 671,  802 => 670,  800 => 669,  767 => 639,  760 => 635,  753 => 631,  746 => 627,  738 => 621,  725 => 620,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
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
    grid-template-columns: 80px 200px 200px 180px 150px 1fr 150px;
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
    grid-template-columns: 80px 200px 200px 180px 150px 1fr 150px;
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
    grid-template-columns: 80px 1fr 200px 150px 150px 150px 150px;
    background: linear-gradient(90deg, rgba(52,152,219,0.2), rgba(52,152,219,0.1));
    padding: 20px 25px;
    border-bottom: 2px solid #3498db;
    font-weight: 700;
    color: var(--text-light);
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.training-table-row {
    display: grid;
    grid-template-columns: 80px 1fr 200px 150px 150px 150px 150px;
    padding: 20px 25px;
    border-bottom: 1px solid rgba(255,255,255,0.05);
    transition: var(--transition);
    align-items: center;
}

.training-table-row:hover {
    background: rgba(52, 152, 219, 0.05);
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

/* ================= RESPONSIVE ================= */
@media (max-width: 1200px) {
    .table-header, .table-row {
        grid-template-columns: 80px 180px 180px 150px 150px 1fr 150px;
    }
    .training-table-header, .training-table-row {
        grid-template-columns: 80px 1fr 180px 140px 140px 140px 140px;
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
                {% if session.coach and session.coach.id not in uniqueCoaches %}
                    {% set uniqueCoaches = uniqueCoaches|merge([session.coach.id]) %}
                    <option value=\"{{ session.coach.id }}\">{{ session.coach.fullName }}</option>
                {% endif %}
            {% endfor %}
        </select>
        
        <select class=\"filter-select\" id=\"session-team-filter\" onchange=\"filterSessions()\">
            <option value=\"\">Toutes les équipes</option>
            {% set uniqueTeams = [] %}
            {% for session in coaching_sessions %}
                {% if session.team and session.team.id not in uniqueTeams %}
                    {% set uniqueTeams = uniqueTeams|merge([session.team.id]) %}
                    <option value=\"{{ session.team.id }}\">{{ session.team.name }}</option>
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
                {% for coaching_session in coaching_sessions %}
                    <div class=\"table-row session-item\" 
                         data-id=\"{{ coaching_session.id }}\"
                         data-coach=\"{{ coaching_session.coach ? coaching_session.coach.id : '' }}\"
                         data-team=\"{{ coaching_session.team ? coaching_session.team.id : '' }}\"
                         data-duration=\"{{ coaching_session.duration }}\"
                         data-date=\"{{ coaching_session.sessionDate ? coaching_session.sessionDate|date('Y-m-d H:i') : '' }}\">
                        
                        <div class=\"table-cell cell-id\" data-label=\"ID\">#{{ coaching_session.id }}</div>
                        
                        <div class=\"table-cell\" data-label=\"Coach\">
                            {% if coaching_session.coach %}
                                <strong>{{ coaching_session.coach.fullName }}</strong><br>
                                <small style=\"color: var(--text-muted);\">@{{ coaching_session.coach.username }}</small>
                            {% else %}
                                <span class=\"text-muted\">Coach non assigné</span>
                            {% endif %}
                        </div>
                        
                        <div class=\"table-cell\" data-label=\"Équipe\">
                            {% if coaching_session.team %}
                                <strong>{{ coaching_session.team.name }}</strong><br>
                                <small style=\"color: var(--text-muted);\">{{ coaching_session.team.game }}</small>
                            {% else %}
                                <span class=\"text-muted\">Équipe non assignée</span>
                            {% endif %}
                        </div>
                        
                        <div class=\"table-cell cell-date\" data-label=\"Date\">
                            {{ coaching_session.sessionDate ? coaching_session.sessionDate|date('d/m/Y H:i') : 'N/A' }}
                        </div>
                        
                        <div class=\"table-cell cell-duration\" data-label=\"Durée\">{{ coaching_session.duration }} min</div>
                        
                        <div class=\"table-cell cell-trainingplan\" data-label=\"Training Plan\">
                            {% if coaching_session.trainingPlan %}
                                <strong>{{ coaching_session.trainingPlan.title }}</strong><br>
                                <small style=\"color: var(--text-muted);\">{{ coaching_session.trainingPlan.focusArea }}</small>
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
                {% if is_granted('ROLE_ADMIN') or (is_granted('ROLE_COACH') and not is_granted('ROLE_ORGANIZER') and not is_granted('ROLE_PLAYER')) %}
                    <a href=\"{{ path('app_coaching_session_new') }}\" class=\"btn-new\">Créer une session</a>
                {% endif %}
            </div>
        {% endif %}
    </div>

    <div style=\"text-align: center; margin-top: 40px;\">
        {% if is_granted('ROLE_ADMIN') or (is_granted('ROLE_COACH') and not is_granted('ROLE_ORGANIZER') and not is_granted('ROLE_PLAYER')) %}
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
            <option value=\"Débutant\">Débutant</option>
            <option value=\"Intermédiaire\">Intermédiaire</option>
            <option value=\"Avancé\">Avancé</option>
            <option value=\"Expert\">Expert</option>
            <option value=\"Professionnel\">Professionnel</option>
        </select>
        
        <select class=\"filter-select\" id=\"training-focus-filter\" onchange=\"filterTrainingPlans()\">
            <option value=\"\">Tous les focus</option>
            <option value=\"Défense\">Défense</option>
            <option value=\"Attaque\">Attaque</option>
            <option value=\"Stratégie\">Stratégie</option>
            <option value=\"Communication\">Communication</option>
            <option value=\"Technique\">Technique</option>
            <option value=\"Physique\">Physique</option>
            <option value=\"Mental\">Mental</option>
            <option value=\"Tactique\">Tactique</option>
        </select>
        
        <select class=\"filter-select\" id=\"training-coach-filter\" onchange=\"filterTrainingPlans()\">
            <option value=\"\">Tous les coachs</option>
            {% set uniqueCoaches = [] %}
            {% for plan in training_plans %}
                {% if plan.coach and plan.coach.id not in uniqueCoaches %}
                    {% set uniqueCoaches = uniqueCoaches|merge([plan.coach.id]) %}
                    <option value=\"{{ plan.coach.id }}\">{{ plan.coach.fullName }}</option>
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
            <div>Coach</div>
            <div>Équipe</div>
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
                         data-coach=\"{{ training_plan.coach ? training_plan.coach.id : '' }}\"
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
                            <span class=\"training-difficulty 
                                {% if training_plan.difficultyLevel == 'Débutant' %}difficulty-beginner
                                {% elseif training_plan.difficultyLevel == 'Intermédiaire' %}difficulty-intermediate
                                {% elseif training_plan.difficultyLevel == 'Avancé' %}difficulty-advanced
                                {% endif %}\">
                                {{ training_plan.difficultyLevel }}
                            </span>
                        </div>
                        
                        <div data-label=\"Coach\">
                            {% if training_plan.coach %}
                                <strong>{{ training_plan.coach.fullName }}</strong><br>
                                <small style=\"color: var(--text-muted);\">@{{ training_plan.coach.username }}</small>
                            {% else %}
                                <span class=\"text-muted\">Coach non assigné</span>
                            {% endif %}
                        </div>
                        
                        <div data-label=\"Équipe\">
                            {% if training_plan.team %}
                                <strong>{{ training_plan.team.name }}</strong><br>
                                <small style=\"color: var(--text-muted);\">{{ training_plan.team.game }}</small>
                            {% else %}
                                <span class=\"text-muted\">Équipe non assignée</span>
                            {% endif %}
                        </div>
                        
                        <div class=\"action-buttons\" data-label=\"Actions\">
                            <a href=\"{{ path('app_training_plan_show', {'id': training_plan.id}) }}\" class=\"btn-show\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                            {% if is_granted('ROLE_ADMIN') or (is_granted('ROLE_COACH') and not is_granted('ROLE_ORGANIZER') and not is_granted('ROLE_PLAYER')) %}
                                <a href=\"{{ path('app_training_plan_edit', {'id': training_plan.id}) }}\" class=\"btn-edit\">
                                    <i class=\"fas fa-edit\"></i> Éditer
                                </a>
                                <form method=\"post\" action=\"{{ path('app_training_plan_delete', {'id': training_plan.id}) }}\" 
                                      onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce plan d\\'entraînement ?');\" 
                                      style=\"display: inline;\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ training_plan.id) }}\">
                                    <button type=\"submit\" class=\"btn-delete\">
                                        <i class=\"fas fa-trash\"></i> Supprimer
                                    </button>
                                </form>
                            {% endif %}
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <div class=\"empty-state\">
                <div class=\"empty-state-icon\">📋</div>
                <h3>Aucun plan d'entraînement trouvé</h3>
                <p>Créez votre premier plan d'entraînement pour structurer vos sessions de coaching.</p>
                {% if is_granted('ROLE_ADMIN') or (is_granted('ROLE_COACH') and not is_granted('ROLE_ORGANIZER') and not is_granted('ROLE_PLAYER')) %}
                    <a href=\"{{ path('app_training_plan_new') }}\" class=\"btn-new\">Créer un plan</a>
                {% endif %}
            </div>
        {% endif %}
    </div>

    <div style=\"text-align: center; margin-top: 40px;\">
        {% if is_granted('ROLE_ADMIN') or (is_granted('ROLE_COACH') and not is_granted('ROLE_ORGANIZER') and not is_granted('ROLE_PLAYER')) %}
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
    const teamFilter = document.getElementById('session-team-filter').value;
    const durationFilter = document.getElementById('session-duration-filter').value;
    const sessions = document.querySelectorAll('.session-item');
    const filterTags = document.getElementById('session-filter-tags');
    
    // Mettre à jour les tags de filtre
    filterTags.innerHTML = '';
    let activeFilters = [];
    
    if (searchTerm) activeFilters.push(`Recherche: \"\${searchTerm}\"`);
    if (coachFilter) {
        const coachName = document.querySelector(`#session-coach-filter option[value=\"\${coachFilter}\"]`)?.text || coachFilter;
        activeFilters.push(`Coach: \${coachName}`);
    }
    if (teamFilter) {
        const teamName = document.querySelector(`#session-team-filter option[value=\"\${teamFilter}\"]`)?.text || teamFilter;
        activeFilters.push(`Équipe: \${teamName}`);
    }
    if (durationFilter) {
        let label = '';
        switch(durationFilter) {
            case 'short': label = 'Durée: Court (<30min)'; break;
            case 'medium': label = 'Durée: Moyen (30-60min)'; break;
            case 'long': label = 'Durée: Long (>60min)'; break;
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
        const team = session.dataset.team;
        const duration = parseInt(session.dataset.duration);
        const showSession = 
            (!searchTerm || title.includes(searchTerm)) &&
            (!coachFilter || coach === coachFilter) &&
            (!teamFilter || team === teamFilter) &&
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
    if (filter.includes('Recherche')) {
        document.getElementById('session-search').value = '';
    } else if (filter.includes('Coach')) {
        document.getElementById('session-coach-filter').value = '';
    } else if (filter.includes('Équipe')) {
        document.getElementById('session-team-filter').value = '';
    } else if (filter.includes('Durée')) {
        document.getElementById('session-duration-filter').value = '';
    }
    
    filterSessions();
}

function resetSessionFilters() {
    document.getElementById('session-search').value = '';
    document.getElementById('session-coach-filter').value = '';
    document.getElementById('session-team-filter').value = '';
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
    const coachFilter = document.getElementById('training-coach-filter').value;
    const plans = document.querySelectorAll('.training-item');
    const filterTags = document.getElementById('training-filter-tags');
    
    // Mettre à jour les tags de filtre
    filterTags.innerHTML = '';
    let activeFilters = [];
    
    if (searchTerm) activeFilters.push(`Recherche: \"\${searchTerm}\"`);
    if (difficultyFilter) activeFilters.push(`Difficulté: \${difficultyFilter}`);
    if (focusFilter) activeFilters.push(`Focus: \${focusFilter}`);
    if (coachFilter) {
        const coachName = document.querySelector(`#training-coach-filter option[value=\"\${coachFilter}\"]`)?.text || coachFilter;
        activeFilters.push(`Coach: \${coachName}`);
    }
    
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
        const coach = plan.dataset.coach;
        const showPlan = 
            (!searchTerm || title.includes(searchTerm)) &&
            (!difficultyFilter || difficulty === difficultyFilter) &&
            (!focusFilter || focus === focusFilter) &&
            (!coachFilter || coach === coachFilter);
        
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
    if (filter.includes('Recherche')) {
        document.getElementById('training-search').value = '';
    } else if (filter.includes('Difficulté')) {
        document.getElementById('training-difficulty-filter').value = '';
    } else if (filter.includes('Focus')) {
        document.getElementById('training-focus-filter').value = '';
    } else if (filter.includes('Coach')) {
        document.getElementById('training-coach-filter').value = '';
    }
    
    filterTrainingPlans();
}

function resetTrainingFilters() {
    document.getElementById('training-search').value = '';
    document.getElementById('training-difficulty-filter').value = '';
    document.getElementById('training-focus-filter').value = '';
    document.getElementById('training-coach-filter').value = '';
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

// ==================== NOTIFICATIONS 15 MINUTES AVANT SESSION ====================
function checkSessionNotifications() {
    const sessions = document.querySelectorAll('.session-item');
    const now = new Date();

    sessions.forEach(session => {
        const dateStr = session.dataset.date; // format 'YYYY-MM-DD HH:mm'
        if (!dateStr) return;

        const sessionDate = new Date(dateStr.replace(' ', 'T'));
        const diffMinutes = (sessionDate - now) / 1000 / 60; // différence en minutes

        // Notification si session dans les 15 prochaines minutes et pas déjà notifiée
        if (diffMinutes > 0 && diffMinutes <= 15 && !session.dataset.notified) {
            showNotification(
                'Session prochaine !',
                `La session #\${session.dataset.id} commence à \${sessionDate.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'})}`
            );
            session.dataset.notified = 'true';
        }
    });
}

// Fonction pour afficher la notification
function showNotification(title, message) {
    if (Notification.permission === 'granted') {
        new Notification(title, { body: message, icon: '/favicon.ico' });
    } else if (Notification.permission !== 'denied') {
        Notification.requestPermission().then(permission => {
            if (permission === 'granted') {
                new Notification(title, { body: message, icon: '/favicon.ico' });
            }
        });
    }
}

// Vérification toutes les minutes
setInterval(checkSessionNotifications, 60000);

// Vérification au chargement
document.addEventListener('DOMContentLoaded', function() {
    checkSessionNotifications();
    
    // Demander la permission pour les notifications
    if (Notification.permission === 'default') {
        Notification.requestPermission();
    }
    
    // Vérifie s'il y a un hash dans l'URL pour afficher la bonne tab
    if (window.location.hash === '#training-plans') {
        showTab('training-plans');
    }
});
</script>
{% endblock %}", "coaching_session/index.html.twig", "C:\\xampp\\htdocs\\esport (3)\\esport\\templates\\coaching_session\\index.html.twig");
    }
}
