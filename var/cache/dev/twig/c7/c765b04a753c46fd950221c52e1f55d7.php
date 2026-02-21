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

/* training_plan/index.html.twig */
class __TwigTemplate_73c20dcfb82eb3e9448e2cd5fc904ee6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "training_plan/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "training_plan/index.html.twig"));

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

        yield "Phantom Force - Plans d'Entraînement";
        
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
/* ================= TRAINING PAGE STYLES ================= */
.training-hero {
    text-align: center;
    padding: 80px 20px 50px;
    position: relative;
    margin-bottom: 50px;
    animation: fadeInUp 0.8s ease-out;
}

.training-hero::after {
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

.training-hero h1 {
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

.training-hero p {
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
    background: rgba(52, 152, 219, 0.1);
    border: 1px solid rgba(52, 152, 219, 0.3);
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
    box-shadow: 0 10px 30px rgba(52, 152, 219, 0.2);
    border-color: #3498db;
}

.stat-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(52,152,219,0.1), rgba(52,152,219,0.05));
    z-index: -1;
}

.stat-value {
    font-size: 36px;
    font-weight: 800;
    background: linear-gradient(90deg, #3498db, #5faee3);
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
    border-color: #3498db;
    box-shadow: 0 0 0 2px rgba(52, 152, 219, 0.2);
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
    border-color: #3498db;
}

.sort-controls {
    display: flex;
    gap: 10px;
    align-items: center;
}

.sort-btn {
    padding: 10px 15px;
    background: rgba(52, 152, 219, 0.1);
    border: 1px solid rgba(52, 152, 219, 0.3);
    border-radius: var(--radius);
    color: #3498db;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    transition: var(--transition);
    display: flex;
    align-items: center;
    gap: 5px;
}

.sort-btn:hover {
    background: rgba(52, 152, 219, 0.2);
}

.sort-btn.active {
    background: linear-gradient(135deg, #3498db, #5faee3);
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
    background: rgba(52, 152, 219, 0.1);
    color: #3498db;
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
    grid-template-columns: 80px 1fr 150px 150px 180px 180px 150px;
    background: linear-gradient(90deg, rgba(52,152,219,0.2), rgba(52,152,219,0.1));
    padding: 20px 25px;
    border-bottom: 2px solid #3498db;
    font-weight: 700;
    color: var(--text-light);
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.table-row {
    display: grid;
    grid-template-columns: 80px 1fr 150px 150px 180px 180px 150px;
    padding: 20px 25px;
    border-bottom: 1px solid rgba(255,255,255,0.05);
    transition: var(--transition);
    align-items: center;
}

.table-row:hover {
    background: rgba(52, 152, 219, 0.05);
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
    color: #3498db;
    font-size: 16px;
}

.cell-title {
    font-weight: 700;
    color: var(--text-light);
}

.cell-description {
    color: var(--text-muted);
    font-size: 13px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.cell-focus {
    padding: 4px 12px;
    border-radius: 20px;
    background: rgba(52, 152, 219, 0.2);
    color: #3498db;
    font-size: 12px;
    font-weight: 600;
    text-align: center;
    display: inline-block;
}

.cell-difficulty {
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    text-align: center;
    display: inline-block;
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

.difficulty-expert {
    background: rgba(155, 89, 182, 0.2);
    color: #9b59b6;
}

.difficulty-professionnel {
    background: rgba(52, 152, 219, 0.2);
    color: #3498db;
}

.cell-date::before {
    content: '📅';
    margin-right: 8px;
    font-size: 12px;
}

/* ================= COACH & TEAM BADGES ================= */
.coach-badge {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 4px 10px;
    background: rgba(255, 45, 45, 0.1);
    border: 1px solid rgba(255, 45, 45, 0.2);
    border-radius: 20px;
    font-size: 12px;
    color: var(--red);
}

.coach-badge i {
    font-size: 10px;
}

.team-badge {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 4px 10px;
    background: rgba(52, 152, 219, 0.1);
    border: 1px solid rgba(52, 152, 219, 0.2);
    border-radius: 20px;
    font-size: 12px;
    color: #3498db;
}

.team-badge i {
    font-size: 10px;
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
    background: linear-gradient(135deg, #3498db, #5faee3);
    color: white;
}

.btn-edit {
    background: rgba(52, 152, 219, 0.1);
    color: #3498db;
    border: 1px solid rgba(52, 152, 219, 0.3);
}

.btn-delete {
    background: rgba(231, 76, 60, 0.1);
    color: #e74c3c;
    border: 1px solid rgba(231, 76, 60, 0.3);
}

.btn-new {
    background: linear-gradient(135deg, #3498db, #5faee3);
    color: white;
    padding: 12px 24px;
    font-size: 14px;
    position: relative;
    overflow: hidden;
}

.btn-show:hover, .btn-edit:hover, .btn-delete:hover, .btn-new:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(52, 152, 219, 0.2);
}

/* ================= EMPTY STATE ================= */
.empty-state {
    text-align: center;
    padding: 60px 20px;
    background: rgba(52, 152, 219, 0.05);
    border: 2px dashed rgba(52, 152, 219, 0.3);
    border-radius: var(--radius-lg);
    margin: 30px 0;
    animation: fadeIn 1s ease-out;
}

.empty-state-icon {
    font-size: 48px;
    color: rgba(52, 152, 219, 0.5);
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
        grid-template-columns: 80px 1fr 140px 140px 160px 160px 140px;
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
    
    .table-header { 
        display: none; 
    }
    
    .table-row { 
        display: block; 
        margin-bottom: 15px; 
        border: 1px solid var(--border); 
        border-radius: var(--radius); 
        padding: 15px; 
    }
    
    .table-cell { 
        display: flex; 
        justify-content: space-between; 
        padding: 8px 0; 
        border-bottom: 1px solid rgba(255,255,255,0.05); 
    }
    
    .table-cell:last-child { 
        border-bottom: none; 
    }
    
    .table-cell::before { 
        content: attr(data-label); 
        font-weight: 600; 
        color: #3498db; 
        text-transform: uppercase; 
        font-size: 12px; 
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

    // line 531
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

        // line 532
        yield "<div class=\"training-hero\">
    <h1>📋 PLANS D'ENTRAÎNEMENT</h1>
    <p>Gérez vos plans d'entraînement pour structurer les sessions de coaching de votre équipe</p>
    
    <div class=\"stats-bar\">
        <div class=\"stat-item\">
            <div class=\"stat-value\">";
        // line 538
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 538, $this->source); })())), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Plans</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">";
        // line 542
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 542, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 542, $this->source); })()), "coach", [], "any", false, false, false, 542) != null); })), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Avec coach</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">";
        // line 546
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 546, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 546, $this->source); })()), "team", [], "any", false, false, false, 546) != null); })), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Assignés à une équipe</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">";
        // line 550
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 550, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 550, $this->source); })()), "difficultyLevel", [], "any", false, false, false, 550) == "Expert") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 550, $this->source); })()), "difficultyLevel", [], "any", false, false, false, 550) == "Professionnel")); })), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Expert+</div>
        </div>
    </div>
</div>

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
        // line 587
        $context["uniqueCoaches"] = [];
        // line 588
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 588, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 589
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "coach", [], "any", false, false, false, 589) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "coach", [], "any", false, false, false, 589), "id", [], "any", false, false, false, 589), (isset($context["uniqueCoaches"]) || array_key_exists("uniqueCoaches", $context) ? $context["uniqueCoaches"] : (function () { throw new RuntimeError('Variable "uniqueCoaches" does not exist.', 589, $this->source); })())))) {
                // line 590
                yield "                ";
                $context["uniqueCoaches"] = Twig\Extension\CoreExtension::merge((isset($context["uniqueCoaches"]) || array_key_exists("uniqueCoaches", $context) ? $context["uniqueCoaches"] : (function () { throw new RuntimeError('Variable "uniqueCoaches" does not exist.', 590, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "coach", [], "any", false, false, false, 590), "id", [], "any", false, false, false, 590)]);
                // line 591
                yield "                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "coach", [], "any", false, false, false, 591), "id", [], "any", false, false, false, 591), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "coach", [], "any", false, false, false, 591), "fullName", [], "any", false, false, false, 591), "html", null, true);
                yield "</option>
            ";
            }
            // line 593
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['plan'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 594
        yield "    </select>
    
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
    <div class=\"table-header\">
        <div>ID</div>
        <div>Titre</div>
        <div>Focus</div>
        <div>Difficulté</div>
        <div>Coach</div>
        <div>Équipe</div>
        <div>Actions</div>
    </div>

    ";
        // line 622
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 622, $this->source); })())) > 0)) {
            // line 623
            yield "        <div id=\"training-plans-list\">
            ";
            // line 624
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 624, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["training_plan"]) {
                // line 625
                yield "                <div class=\"table-row training-item\" 
                     data-id=\"";
                // line 626
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 626), "html", null, true);
                yield "\"
                     data-title=\"";
                // line 627
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "title", [], "any", false, false, false, 627)), "html", null, true);
                yield "\"
                     data-difficulty=\"";
                // line 628
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "difficultyLevel", [], "any", false, false, false, 628), "html", null, true);
                yield "\"
                     data-focus=\"";
                // line 629
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "focusArea", [], "any", false, false, false, 629), "html", null, true);
                yield "\"
                     data-coach=\"";
                // line 630
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "coach", [], "any", false, false, false, 630)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "coach", [], "any", false, false, false, 630), "id", [], "any", false, false, false, 630), "html", null, true)) : (""));
                yield "\"
                     data-date=\"";
                // line 631
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "createdAt", [], "any", false, false, false, 631)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "createdAt", [], "any", false, false, false, 631), "Y-m-d"), "html", null, true)) : (""));
                yield "\">
                    
                    <div class=\"table-cell cell-id\" data-label=\"ID\">#";
                // line 633
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 633), "html", null, true);
                yield "</div>
                    
                    <div class=\"table-cell\" data-label=\"Titre\">
                        <div class=\"cell-title\">";
                // line 636
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "title", [], "any", false, false, false, 636), "html", null, true);
                yield "</div>
                        <div class=\"cell-description\">";
                // line 637
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "description", [], "any", false, false, false, 637), 0, 60), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "description", [], "any", false, false, false, 637)) > 60)) {
                    yield "...";
                }
                yield "</div>
                    </div>
                    
                    <div class=\"table-cell\" data-label=\"Focus\">
                        <span class=\"cell-focus\">";
                // line 641
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "focusArea", [], "any", false, false, false, 641), "html", null, true);
                yield "</span>
                    </div>
                    
                    <div class=\"table-cell\" data-label=\"Difficulté\">
                        <span class=\"cell-difficulty 
                            ";
                // line 646
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "difficultyLevel", [], "any", false, false, false, 646) == "Débutant")) {
                    yield "difficulty-beginner
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 647
$context["training_plan"], "difficultyLevel", [], "any", false, false, false, 647) == "Intermédiaire")) {
                    yield "difficulty-intermediate
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 648
$context["training_plan"], "difficultyLevel", [], "any", false, false, false, 648) == "Avancé")) {
                    yield "difficulty-advanced
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 649
$context["training_plan"], "difficultyLevel", [], "any", false, false, false, 649) == "Expert")) {
                    yield "difficulty-expert
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 650
$context["training_plan"], "difficultyLevel", [], "any", false, false, false, 650) == "Professionnel")) {
                    yield "difficulty-professionnel
                            ";
                }
                // line 651
                yield "\">
                            ";
                // line 652
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "difficultyLevel", [], "any", false, false, false, 652), "html", null, true);
                yield "
                        </span>
                    </div>
                    
                    <div class=\"table-cell\" data-label=\"Coach\">
                        ";
                // line 657
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "coach", [], "any", false, false, false, 657)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 658
                    yield "                            <span class=\"coach-badge\">
                                <i class=\"fas fa-user-tie\"></i>
                                ";
                    // line 660
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "coach", [], "any", false, false, false, 660), "fullName", [], "any", false, false, false, 660), "html", null, true);
                    yield "
                            </span>
                        ";
                } else {
                    // line 663
                    yield "                            <span class=\"text-muted\">Non assigné</span>
                        ";
                }
                // line 665
                yield "                    </div>
                    
                    <div class=\"table-cell\" data-label=\"Équipe\">
                        ";
                // line 668
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "team", [], "any", false, false, false, 668)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 669
                    yield "                            <span class=\"team-badge\">
                                <i class=\"fas fa-users\"></i>
                                ";
                    // line 671
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "team", [], "any", false, false, false, 671), "name", [], "any", false, false, false, 671), "html", null, true);
                    yield "
                            </span>
                        ";
                } else {
                    // line 674
                    yield "                            <span class=\"text-muted\">Non assignée</span>
                        ";
                }
                // line 676
                yield "                    </div>
                    
                    <div class=\"table-cell action-buttons\" data-label=\"Actions\">
                        <a href=\"";
                // line 679
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 679)]), "html", null, true);
                yield "\" class=\"btn-show\">
                            <i class=\"fas fa-eye\"></i> Voir
                        </a>
                        ";
                // line 682
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER")))) {
                    // line 683
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 683)]), "html", null, true);
                    yield "\" class=\"btn-edit\">
                                <i class=\"fas fa-edit\"></i> Éditer
                            </a>
                            <form method=\"post\" action=\"";
                    // line 686
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 686)]), "html", null, true);
                    yield "\" 
                                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce plan d\\'entraînement ?');\" 
                                  style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 689
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 689))), "html", null, true);
                    yield "\">
                                <button type=\"submit\" class=\"btn-delete\">
                                    <i class=\"fas fa-trash\"></i> Supprimer
                                </button>
                            </form>
                        ";
                }
                // line 695
                yield "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['training_plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 698
            yield "        </div>
    ";
        } else {
            // line 700
            yield "        <div class=\"empty-state\">
            <div class=\"empty-state-icon\">📋</div>
            <h3>Aucun plan d'entraînement trouvé</h3>
            <p>Créez votre premier plan d'entraînement pour structurer vos sessions de coaching.</p>
            ";
            // line 704
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER")))) {
                // line 705
                yield "                <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_new");
                yield "\" class=\"btn-new\">
                    <i class=\"fas fa-plus-circle\"></i> Créer un plan
                </a>
            ";
            }
            // line 709
            yield "        </div>
    ";
        }
        // line 711
        yield "</div>

<div style=\"text-align: center; margin-top: 40px;\">
    ";
        // line 714
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER")))) {
            // line 715
            yield "        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_new");
            yield "\" class=\"btn-new\">
            <i class=\"fas fa-plus-circle\"></i> Nouveau Plan d'Entraînement
        </a>
    ";
        }
        // line 719
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 722
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

        // line 723
        yield "<script>
// Variables globales pour le tri
let currentTrainingSort = { field: null, order: 'asc' };

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
        const coachName = document.querySelector(`#training-coach-filter option[value=\"\${coachFilter}\"]`).text;
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
    document.querySelectorAll('.sort-btn').forEach(btn => {
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
    document.querySelectorAll('.sort-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    document.getElementById('training-filter-tags').innerHTML = '';
    filterTrainingPlans();
}

// Initialisation au chargement
document.addEventListener('DOMContentLoaded', function() {
    // Add animation to stat items
    const statItems = document.querySelectorAll('.stat-item');
    statItems.forEach((item, index) => {
        item.style.animationDelay = `\${index * 0.1}s`;
        item.style.animation = 'fadeInUp 0.5s ease-out backwards';
    });
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
        return "training_plan/index.html.twig";
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
        return array (  1016 => 723,  1003 => 722,  991 => 719,  983 => 715,  981 => 714,  976 => 711,  972 => 709,  964 => 705,  962 => 704,  956 => 700,  952 => 698,  944 => 695,  935 => 689,  929 => 686,  922 => 683,  920 => 682,  914 => 679,  909 => 676,  905 => 674,  899 => 671,  895 => 669,  893 => 668,  888 => 665,  884 => 663,  878 => 660,  874 => 658,  872 => 657,  864 => 652,  861 => 651,  856 => 650,  852 => 649,  848 => 648,  844 => 647,  840 => 646,  832 => 641,  822 => 637,  818 => 636,  812 => 633,  807 => 631,  803 => 630,  799 => 629,  795 => 628,  791 => 627,  787 => 626,  784 => 625,  780 => 624,  777 => 623,  775 => 622,  745 => 594,  739 => 593,  731 => 591,  728 => 590,  725 => 589,  720 => 588,  718 => 587,  678 => 550,  671 => 546,  664 => 542,  657 => 538,  649 => 532,  636 => 531,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Phantom Force - Plans d'Entraînement{% endblock %}

{% block inline_styles %}
<style>
/* ================= TRAINING PAGE STYLES ================= */
.training-hero {
    text-align: center;
    padding: 80px 20px 50px;
    position: relative;
    margin-bottom: 50px;
    animation: fadeInUp 0.8s ease-out;
}

.training-hero::after {
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

.training-hero h1 {
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

.training-hero p {
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
    background: rgba(52, 152, 219, 0.1);
    border: 1px solid rgba(52, 152, 219, 0.3);
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
    box-shadow: 0 10px 30px rgba(52, 152, 219, 0.2);
    border-color: #3498db;
}

.stat-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(52,152,219,0.1), rgba(52,152,219,0.05));
    z-index: -1;
}

.stat-value {
    font-size: 36px;
    font-weight: 800;
    background: linear-gradient(90deg, #3498db, #5faee3);
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
    border-color: #3498db;
    box-shadow: 0 0 0 2px rgba(52, 152, 219, 0.2);
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
    border-color: #3498db;
}

.sort-controls {
    display: flex;
    gap: 10px;
    align-items: center;
}

.sort-btn {
    padding: 10px 15px;
    background: rgba(52, 152, 219, 0.1);
    border: 1px solid rgba(52, 152, 219, 0.3);
    border-radius: var(--radius);
    color: #3498db;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    transition: var(--transition);
    display: flex;
    align-items: center;
    gap: 5px;
}

.sort-btn:hover {
    background: rgba(52, 152, 219, 0.2);
}

.sort-btn.active {
    background: linear-gradient(135deg, #3498db, #5faee3);
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
    background: rgba(52, 152, 219, 0.1);
    color: #3498db;
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
    grid-template-columns: 80px 1fr 150px 150px 180px 180px 150px;
    background: linear-gradient(90deg, rgba(52,152,219,0.2), rgba(52,152,219,0.1));
    padding: 20px 25px;
    border-bottom: 2px solid #3498db;
    font-weight: 700;
    color: var(--text-light);
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.table-row {
    display: grid;
    grid-template-columns: 80px 1fr 150px 150px 180px 180px 150px;
    padding: 20px 25px;
    border-bottom: 1px solid rgba(255,255,255,0.05);
    transition: var(--transition);
    align-items: center;
}

.table-row:hover {
    background: rgba(52, 152, 219, 0.05);
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
    color: #3498db;
    font-size: 16px;
}

.cell-title {
    font-weight: 700;
    color: var(--text-light);
}

.cell-description {
    color: var(--text-muted);
    font-size: 13px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.cell-focus {
    padding: 4px 12px;
    border-radius: 20px;
    background: rgba(52, 152, 219, 0.2);
    color: #3498db;
    font-size: 12px;
    font-weight: 600;
    text-align: center;
    display: inline-block;
}

.cell-difficulty {
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    text-align: center;
    display: inline-block;
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

.difficulty-expert {
    background: rgba(155, 89, 182, 0.2);
    color: #9b59b6;
}

.difficulty-professionnel {
    background: rgba(52, 152, 219, 0.2);
    color: #3498db;
}

.cell-date::before {
    content: '📅';
    margin-right: 8px;
    font-size: 12px;
}

/* ================= COACH & TEAM BADGES ================= */
.coach-badge {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 4px 10px;
    background: rgba(255, 45, 45, 0.1);
    border: 1px solid rgba(255, 45, 45, 0.2);
    border-radius: 20px;
    font-size: 12px;
    color: var(--red);
}

.coach-badge i {
    font-size: 10px;
}

.team-badge {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 4px 10px;
    background: rgba(52, 152, 219, 0.1);
    border: 1px solid rgba(52, 152, 219, 0.2);
    border-radius: 20px;
    font-size: 12px;
    color: #3498db;
}

.team-badge i {
    font-size: 10px;
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
    background: linear-gradient(135deg, #3498db, #5faee3);
    color: white;
}

.btn-edit {
    background: rgba(52, 152, 219, 0.1);
    color: #3498db;
    border: 1px solid rgba(52, 152, 219, 0.3);
}

.btn-delete {
    background: rgba(231, 76, 60, 0.1);
    color: #e74c3c;
    border: 1px solid rgba(231, 76, 60, 0.3);
}

.btn-new {
    background: linear-gradient(135deg, #3498db, #5faee3);
    color: white;
    padding: 12px 24px;
    font-size: 14px;
    position: relative;
    overflow: hidden;
}

.btn-show:hover, .btn-edit:hover, .btn-delete:hover, .btn-new:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(52, 152, 219, 0.2);
}

/* ================= EMPTY STATE ================= */
.empty-state {
    text-align: center;
    padding: 60px 20px;
    background: rgba(52, 152, 219, 0.05);
    border: 2px dashed rgba(52, 152, 219, 0.3);
    border-radius: var(--radius-lg);
    margin: 30px 0;
    animation: fadeIn 1s ease-out;
}

.empty-state-icon {
    font-size: 48px;
    color: rgba(52, 152, 219, 0.5);
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
        grid-template-columns: 80px 1fr 140px 140px 160px 160px 140px;
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
    
    .table-header { 
        display: none; 
    }
    
    .table-row { 
        display: block; 
        margin-bottom: 15px; 
        border: 1px solid var(--border); 
        border-radius: var(--radius); 
        padding: 15px; 
    }
    
    .table-cell { 
        display: flex; 
        justify-content: space-between; 
        padding: 8px 0; 
        border-bottom: 1px solid rgba(255,255,255,0.05); 
    }
    
    .table-cell:last-child { 
        border-bottom: none; 
    }
    
    .table-cell::before { 
        content: attr(data-label); 
        font-weight: 600; 
        color: #3498db; 
        text-transform: uppercase; 
        font-size: 12px; 
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
<div class=\"training-hero\">
    <h1>📋 PLANS D'ENTRAÎNEMENT</h1>
    <p>Gérez vos plans d'entraînement pour structurer les sessions de coaching de votre équipe</p>
    
    <div class=\"stats-bar\">
        <div class=\"stat-item\">
            <div class=\"stat-value\">{{ training_plans|length }}</div>
            <div class=\"stat-label\">Plans</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">{{ training_plans|filter(p => p.coach != null)|length }}</div>
            <div class=\"stat-label\">Avec coach</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">{{ training_plans|filter(p => p.team != null)|length }}</div>
            <div class=\"stat-label\">Assignés à une équipe</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">{{ training_plans|filter(p => p.difficultyLevel == 'Expert' or p.difficultyLevel == 'Professionnel')|length }}</div>
            <div class=\"stat-label\">Expert+</div>
        </div>
    </div>
</div>

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
    <div class=\"table-header\">
        <div>ID</div>
        <div>Titre</div>
        <div>Focus</div>
        <div>Difficulté</div>
        <div>Coach</div>
        <div>Équipe</div>
        <div>Actions</div>
    </div>

    {% if training_plans|length > 0 %}
        <div id=\"training-plans-list\">
            {% for training_plan in training_plans %}
                <div class=\"table-row training-item\" 
                     data-id=\"{{ training_plan.id }}\"
                     data-title=\"{{ training_plan.title|lower }}\"
                     data-difficulty=\"{{ training_plan.difficultyLevel }}\"
                     data-focus=\"{{ training_plan.focusArea }}\"
                     data-coach=\"{{ training_plan.coach ? training_plan.coach.id : '' }}\"
                     data-date=\"{{ training_plan.createdAt ? training_plan.createdAt|date('Y-m-d') : '' }}\">
                    
                    <div class=\"table-cell cell-id\" data-label=\"ID\">#{{ training_plan.id }}</div>
                    
                    <div class=\"table-cell\" data-label=\"Titre\">
                        <div class=\"cell-title\">{{ training_plan.title }}</div>
                        <div class=\"cell-description\">{{ training_plan.description|slice(0, 60) }}{% if training_plan.description|length > 60 %}...{% endif %}</div>
                    </div>
                    
                    <div class=\"table-cell\" data-label=\"Focus\">
                        <span class=\"cell-focus\">{{ training_plan.focusArea }}</span>
                    </div>
                    
                    <div class=\"table-cell\" data-label=\"Difficulté\">
                        <span class=\"cell-difficulty 
                            {% if training_plan.difficultyLevel == 'Débutant' %}difficulty-beginner
                            {% elseif training_plan.difficultyLevel == 'Intermédiaire' %}difficulty-intermediate
                            {% elseif training_plan.difficultyLevel == 'Avancé' %}difficulty-advanced
                            {% elseif training_plan.difficultyLevel == 'Expert' %}difficulty-expert
                            {% elseif training_plan.difficultyLevel == 'Professionnel' %}difficulty-professionnel
                            {% endif %}\">
                            {{ training_plan.difficultyLevel }}
                        </span>
                    </div>
                    
                    <div class=\"table-cell\" data-label=\"Coach\">
                        {% if training_plan.coach %}
                            <span class=\"coach-badge\">
                                <i class=\"fas fa-user-tie\"></i>
                                {{ training_plan.coach.fullName }}
                            </span>
                        {% else %}
                            <span class=\"text-muted\">Non assigné</span>
                        {% endif %}
                    </div>
                    
                    <div class=\"table-cell\" data-label=\"Équipe\">
                        {% if training_plan.team %}
                            <span class=\"team-badge\">
                                <i class=\"fas fa-users\"></i>
                                {{ training_plan.team.name }}
                            </span>
                        {% else %}
                            <span class=\"text-muted\">Non assignée</span>
                        {% endif %}
                    </div>
                    
                    <div class=\"table-cell action-buttons\" data-label=\"Actions\">
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
                <a href=\"{{ path('app_training_plan_new') }}\" class=\"btn-new\">
                    <i class=\"fas fa-plus-circle\"></i> Créer un plan
                </a>
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
{% endblock %}

{% block javascripts %}
<script>
// Variables globales pour le tri
let currentTrainingSort = { field: null, order: 'asc' };

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
        const coachName = document.querySelector(`#training-coach-filter option[value=\"\${coachFilter}\"]`).text;
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
    document.querySelectorAll('.sort-btn').forEach(btn => {
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
    document.querySelectorAll('.sort-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    document.getElementById('training-filter-tags').innerHTML = '';
    filterTrainingPlans();
}

// Initialisation au chargement
document.addEventListener('DOMContentLoaded', function() {
    // Add animation to stat items
    const statItems = document.querySelectorAll('.stat-item');
    statItems.forEach((item, index) => {
        item.style.animationDelay = `\${index * 0.1}s`;
        item.style.animation = 'fadeInUp 0.5s ease-out backwards';
    });
});
</script>
{% endblock %}", "training_plan/index.html.twig", "C:\\xampp\\htdocs\\esport (3)\\esport\\templates\\training_plan\\index.html.twig");
    }
}
