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
/* ================= CALENDAR BUTTON ================= */
.btn-calendar {
    padding: 12px 24px;
    background: linear-gradient(135deg, #ff2d2d, #ff5e5e);
    color: white;
    border: none;
    border-radius: var(--radius);
    font-weight: 600;
    font-size: 14px;
    cursor: pointer;
    transition: var(--transition);
    display: inline-flex;
    align-items: center;
    gap: 8px;
    text-decoration: none;
    position: relative;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(255, 45, 45, 0.3);
}

.btn-calendar::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: rgba(255,255,255,0.2);
    transform: translate(-50%, -50%);
    transition: width 0.6s, height 0.6s;
}

.btn-calendar:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(255, 45, 45, 0.5);
}

.btn-calendar:hover::before {
    width: 300px;
    height: 300px;
}

.btn-calendar i {
    animation: calendarPulse 2s infinite;
}

@keyframes calendarPulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
}

/* ================= BOUTONS IA AJOUTÉS ================= */
.btn-ia {
    padding: 12px 24px;
    background: linear-gradient(135deg, #a82dff, #c85dff);
    color: white;
    border: none;
    border-radius: var(--radius);
    font-weight: 600;
    font-size: 14px;
    cursor: pointer;
    transition: var(--transition);
    display: inline-flex;
    align-items: center;
    gap: 8px;
    text-decoration: none;
    position: relative;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(168, 45, 255, 0.3);
}

.btn-ia::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: rgba(255,255,255,0.2);
    transform: translate(-50%, -50%);
    transition: width 0.6s, height 0.6s;
}

.btn-ia:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(168, 45, 255, 0.5);
}

.btn-ia:hover::before {
    width: 300px;
    height: 300px;
}

.btn-ia i {
    animation: pulse 2s infinite;
}

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

/* ================= IA TOOLS BAR ================= */
.ia-tools-bar {
    display: flex;
    gap: 15px;
    justify-content: center;
    margin: 30px 0 40px;
    flex-wrap: wrap;
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

/* ================= BOUTON DÉTAILS TRAINING PLAN ================= */
.btn-detail-plan {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: linear-gradient(135deg, #3498db, #2980b9);
    color: white;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
    border: 2px solid transparent;
    margin-top: 8px;
    box-shadow: 0 2px 5px rgba(52, 152, 219, 0.3);
    position: relative;
    overflow: hidden;
    width: fit-content;
}

.btn-detail-plan::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s ease;
}

.btn-detail-plan:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(52, 152, 219, 0.5);
    background: linear-gradient(135deg, #2980b9, #3498db);
    border-color: rgba(255,255,255,0.3);
}

.btn-detail-plan:hover::before {
    left: 100%;
}

.btn-detail-plan i {
    font-size: 12px;
    animation: pulseDetail 2s infinite;
}

/* Animation pour l'icône */
@keyframes pulseDetail {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
}

/* Style pour le conteneur du training plan */
.training-plan-detail {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.training-plan-title {
    font-weight: 700;
    color: var(--text-light);
    font-size: 14px;
    display: block;
    margin-bottom: 3px;
}

.training-plan-focus {
    font-size: 11px;
    color: #3498db;
    background: rgba(52, 152, 219, 0.1);
    padding: 3px 10px;
    border-radius: 12px;
    display: inline-block;
    width: fit-content;
    border: 1px solid rgba(52, 152, 219, 0.3);
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
    
    .btn-detail-plan {
        width: 100%;
        justify-content: center;
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

    // line 818
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

        // line 819
        yield "<div class=\"coaching-hero\">
    <h1>🔥 COACHING & TRAINING</h1>
    <p>Gérez vos sessions de coaching et vos plans d'entraînement en un seul endroit. Optimisez les performances de votre équipe.</p>
    
    <div class=\"stats-bar\">
        <div class=\"stat-item\">
            <div class=\"stat-value\">";
        // line 825
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 825, $this->source); })())), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Sessions</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">";
        // line 829
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 829, $this->source); })())), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Plans d'entraînement</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">";
        // line 833
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 833, $this->source); })()), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 833, $this->source); })()), "trainingPlan", [], "any", false, false, false, 833) != null); })), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Sessions avec plan</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">";
        // line 837
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 837, $this->source); })()), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 837, $this->source); })()), "duration", [], "any", false, false, false, 837) > 60); })), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Sessions longues</div>
        </div>
    </div>
</div>

<!-- IA TOOLS BAR -->
<div class=\"ia-tools-bar\">
    <a href=\"";
        // line 845
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ai_workout_form");
        yield "\" class=\"btn-ia\">
        <i class=\"fas fa-dumbbell\"></i> Coach IA - Plan d'entraînement
    </a>
    <a href=\"";
        // line 848
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_analyst_dashboard");
        yield "\" class=\"btn-ia\">
        <i class=\"fas fa-chart-line\"></i> Analyste Pro - Esport
    </a>
    <a href=\"";
        // line 851
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_analyst_player_search");
        yield "?playerName=Faker\" class=\"btn-ia\">
        <i class=\"fas fa-user\"></i> Analyser Faker
    </a>
    <a href=\"";
        // line 854
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_analyst_team_search");
        yield "?teamName=T1\" class=\"btn-ia\">
        <i class=\"fas fa-users\"></i> Analyser T1
    </a>
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
    <!-- Controls Bar avec bouton calendrier -->
    <div class=\"controls-bar\">
        <div class=\"search-box\">
            <i class=\"fas fa-search\"></i>
            <input type=\"text\" id=\"session-search\" placeholder=\"Rechercher une session...\" 
                   onkeyup=\"filterSessions()\">
        </div>
        
        <select class=\"filter-select\" id=\"session-coach-filter\" onchange=\"filterSessions()\">
            <option value=\"\">Tous les coachs</option>
            ";
        // line 883
        $context["uniqueCoaches"] = [];
        // line 884
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 884, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 885
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["session"], "coach", [], "any", false, false, false, 885) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "coach", [], "any", false, false, false, 885), "id", [], "any", false, false, false, 885), (isset($context["uniqueCoaches"]) || array_key_exists("uniqueCoaches", $context) ? $context["uniqueCoaches"] : (function () { throw new RuntimeError('Variable "uniqueCoaches" does not exist.', 885, $this->source); })())))) {
                // line 886
                yield "                    ";
                $context["uniqueCoaches"] = Twig\Extension\CoreExtension::merge((isset($context["uniqueCoaches"]) || array_key_exists("uniqueCoaches", $context) ? $context["uniqueCoaches"] : (function () { throw new RuntimeError('Variable "uniqueCoaches" does not exist.', 886, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "coach", [], "any", false, false, false, 886), "id", [], "any", false, false, false, 886)]);
                // line 887
                yield "                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "coach", [], "any", false, false, false, 887), "id", [], "any", false, false, false, 887), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "coach", [], "any", false, false, false, 887), "fullName", [], "any", false, false, false, 887), "html", null, true);
                yield "</option>
                ";
            }
            // line 889
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['session'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 890
        yield "        </select>
        
        <select class=\"filter-select\" id=\"session-team-filter\" onchange=\"filterSessions()\">
            <option value=\"\">Toutes les équipes</option>
            ";
        // line 894
        $context["uniqueTeams"] = [];
        // line 895
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 895, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 896
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["session"], "team", [], "any", false, false, false, 896) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "team", [], "any", false, false, false, 896), "id", [], "any", false, false, false, 896), (isset($context["uniqueTeams"]) || array_key_exists("uniqueTeams", $context) ? $context["uniqueTeams"] : (function () { throw new RuntimeError('Variable "uniqueTeams" does not exist.', 896, $this->source); })())))) {
                // line 897
                yield "                    ";
                $context["uniqueTeams"] = Twig\Extension\CoreExtension::merge((isset($context["uniqueTeams"]) || array_key_exists("uniqueTeams", $context) ? $context["uniqueTeams"] : (function () { throw new RuntimeError('Variable "uniqueTeams" does not exist.', 897, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "team", [], "any", false, false, false, 897), "id", [], "any", false, false, false, 897)]);
                // line 898
                yield "                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "team", [], "any", false, false, false, 898), "id", [], "any", false, false, false, 898), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "team", [], "any", false, false, false, 898), "name", [], "any", false, false, false, 898), "html", null, true);
                yield "</option>
                ";
            }
            // line 900
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['session'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 901
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
        
        <!-- BOUTON CALENDRIER -->
        <div style=\"margin-left: auto;\">
            <a href=\"";
        // line 924
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar");
        yield "\" class=\"btn-calendar\">
                <i class=\"fas fa-calendar-alt\"></i> Vue Calendrier
            </a>
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
        // line 943
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 943, $this->source); })())) > 0)) {
            // line 944
            yield "            <div id=\"sessions-list\">
                ";
            // line 945
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 945, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["coaching_session"]) {
                // line 946
                yield "                    <div class=\"table-row session-item\" 
                         data-id=\"";
                // line 947
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "id", [], "any", false, false, false, 947), "html", null, true);
                yield "\"
                         data-coach=\"";
                // line 948
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "coach", [], "any", false, false, false, 948)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "coach", [], "any", false, false, false, 948), "id", [], "any", false, false, false, 948), "html", null, true)) : (""));
                yield "\"
                         data-team=\"";
                // line 949
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "team", [], "any", false, false, false, 949)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "team", [], "any", false, false, false, 949), "id", [], "any", false, false, false, 949), "html", null, true)) : (""));
                yield "\"
                         data-duration=\"";
                // line 950
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "duration", [], "any", false, false, false, 950), "html", null, true);
                yield "\"
                         data-date=\"";
                // line 951
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "sessionDate", [], "any", false, false, false, 951)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "sessionDate", [], "any", false, false, false, 951), "Y-m-d H:i"), "html", null, true)) : (""));
                yield "\">
                        <div class=\"table-cell cell-id\" data-label=\"ID\">#";
                // line 952
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "id", [], "any", false, false, false, 952), "html", null, true);
                yield "</div>
                        
                        <div class=\"table-cell\" data-label=\"Coach\">
                            ";
                // line 955
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "coach", [], "any", false, false, false, 955)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 956
                    yield "                                <strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "coach", [], "any", false, false, false, 956), "fullName", [], "any", false, false, false, 956), "html", null, true);
                    yield "</strong><br>
                                <small style=\"color: var(--text-muted);\">@";
                    // line 957
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "coach", [], "any", false, false, false, 957), "username", [], "any", false, false, false, 957), "html", null, true);
                    yield "</small>
                            ";
                } else {
                    // line 959
                    yield "                                <span class=\"text-muted\">Non assigné</span>
                            ";
                }
                // line 961
                yield "                        </div>
                        
                        <div class=\"table-cell\" data-label=\"Équipe\">
                            ";
                // line 964
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "team", [], "any", false, false, false, 964)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 965
                    yield "                                <strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "team", [], "any", false, false, false, 965), "name", [], "any", false, false, false, 965), "html", null, true);
                    yield "</strong><br>
                                <small style=\"color: var(--text-muted);\">";
                    // line 966
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "team", [], "any", false, false, false, 966), "game", [], "any", false, false, false, 966), "html", null, true);
                    yield "</small>
                            ";
                } else {
                    // line 968
                    yield "                                <span class=\"text-muted\">Non assignée</span>
                            ";
                }
                // line 970
                yield "                        </div>
                        
                        <div class=\"table-cell cell-date\" data-label=\"Date\">
                            ";
                // line 973
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "sessionDate", [], "any", false, false, false, 973)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "sessionDate", [], "any", false, false, false, 973), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
                yield "
                        </div>
                        
                        <div class=\"table-cell cell-duration\" data-label=\"Durée\">";
                // line 976
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "duration", [], "any", false, false, false, 976), "html", null, true);
                yield " min</div>
                        
                        <div class=\"table-cell cell-trainingplan\" data-label=\"Training Plan\">
                            ";
                // line 979
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "trainingPlan", [], "any", false, false, false, 979)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 980
                    yield "                                <div class=\"training-plan-detail\">
                                    <div>
                                        <span class=\"training-plan-title\">";
                    // line 982
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "trainingPlan", [], "any", false, false, false, 982), "title", [], "any", false, false, false, 982), "html", null, true);
                    yield "</span>
                                        <span class=\"training-plan-focus\">";
                    // line 983
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "trainingPlan", [], "any", false, false, false, 983), "focusArea", [], "any", false, false, false, 983), "html", null, true);
                    yield "</span>
                                    </div>
                                    <a href=\"";
                    // line 985
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "trainingPlan", [], "any", false, false, false, 985), "id", [], "any", false, false, false, 985)]), "html", null, true);
                    yield "\"
                                       class=\"btn-detail-plan\">
                                        <i class=\"fas fa-search\"></i> Détails du plan
                                    </a>
                                </div>
                            ";
                } else {
                    // line 991
                    yield "                                <span class=\"text-muted\">Aucun plan assigné</span>
                            ";
                }
                // line 993
                yield "                        </div>
                        
                        <div class=\"table-cell action-buttons\" data-label=\"Actions\">
                            <a href=\"";
                // line 996
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "id", [], "any", false, false, false, 996)]), "html", null, true);
                yield "\" class=\"btn-show\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                            <a href=\"";
                // line 999
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "id", [], "any", false, false, false, 999)]), "html", null, true);
                yield "\" class=\"btn-edit\">
                                <i class=\"fas fa-edit\"></i> Éditer
                            </a>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['coaching_session'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1005
            yield "            </div>
        ";
        } else {
            // line 1007
            yield "            <div class=\"empty-state\">
                <div class=\"empty-state-icon\">🎮</div>
                <h3>Aucune session de coaching trouvée</h3>
                <p>Commencez par créer votre première session de coaching pour améliorer les performances de votre équipe.</p>
                <a href=\"";
            // line 1011
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_new");
            yield "\" class=\"btn-new\">Créer une session</a>
            </div>
        ";
        }
        // line 1014
        yield "    </div>

    <div style=\"text-align: center; margin-top: 40px;\">
        <a href=\"";
        // line 1017
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_new");
        yield "\" class=\"btn-new\">
            <i class=\"fas fa-plus-circle\"></i> Nouvelle Session
        </a>
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
        </select>
        
        <select class=\"filter-select\" id=\"training-focus-filter\" onchange=\"filterTrainingPlans()\">
            <option value=\"\">Tous les focus</option>
            ";
        // line 1042
        $context["uniqueFocus"] = [];
        // line 1043
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 1043, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 1044
            yield "                ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "focusArea", [], "any", false, false, false, 1044), (isset($context["uniqueFocus"]) || array_key_exists("uniqueFocus", $context) ? $context["uniqueFocus"] : (function () { throw new RuntimeError('Variable "uniqueFocus" does not exist.', 1044, $this->source); })()))) {
                // line 1045
                yield "                    ";
                $context["uniqueFocus"] = Twig\Extension\CoreExtension::merge((isset($context["uniqueFocus"]) || array_key_exists("uniqueFocus", $context) ? $context["uniqueFocus"] : (function () { throw new RuntimeError('Variable "uniqueFocus" does not exist.', 1045, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "focusArea", [], "any", false, false, false, 1045)]);
                // line 1046
                yield "                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "focusArea", [], "any", false, false, false, 1046), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "focusArea", [], "any", false, false, false, 1046), "html", null, true);
                yield "</option>
                ";
            }
            // line 1048
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['plan'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1049
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
        // line 1076
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 1076, $this->source); })())) > 0)) {
            // line 1077
            yield "            <div id=\"training-plans-list\">
                ";
            // line 1078
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 1078, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["training_plan"]) {
                // line 1079
                yield "                    <div class=\"training-table-row training-item\"
                         data-id=\"";
                // line 1080
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 1080), "html", null, true);
                yield "\"
                         data-title=\"";
                // line 1081
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "title", [], "any", false, false, false, 1081)), "html", null, true);
                yield "\"
                         data-difficulty=\"";
                // line 1082
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "difficultyLevel", [], "any", false, false, false, 1082), "html", null, true);
                yield "\"
                         data-focus=\"";
                // line 1083
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "focusArea", [], "any", false, false, false, 1083), "html", null, true);
                yield "\"
                         data-date=\"";
                // line 1084
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "createdAt", [], "any", false, false, false, 1084)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "createdAt", [], "any", false, false, false, 1084), "Y-m-d"), "html", null, true)) : (""));
                yield "\">
                        <div class=\"cell-id\" data-label=\"ID\">#";
                // line 1085
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 1085), "html", null, true);
                yield "</div>
                        
                        <div data-label=\"Titre & Description\">
                            <div class=\"training-title\">";
                // line 1088
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "title", [], "any", false, false, false, 1088), "html", null, true);
                yield "</div>
                            <div class=\"training-description\">";
                // line 1089
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "description", [], "any", false, false, false, 1089), "html", null, true);
                yield "</div>
                        </div>
                        
                        <div data-label=\"Focus\">
                            <span class=\"training-focus\">";
                // line 1093
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "focusArea", [], "any", false, false, false, 1093), "html", null, true);
                yield "</span>
                        </div>
                        
                        <div data-label=\"Difficulté\">
                            <span class=\"training-difficulty 
                                ";
                // line 1098
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "difficultyLevel", [], "any", false, false, false, 1098) == "Débutant")) {
                    yield "difficulty-beginner
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 1099
$context["training_plan"], "difficultyLevel", [], "any", false, false, false, 1099) == "Intermédiaire")) {
                    yield "difficulty-intermediate
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 1100
$context["training_plan"], "difficultyLevel", [], "any", false, false, false, 1100) == "Avancé")) {
                    yield "difficulty-advanced
                                ";
                }
                // line 1101
                yield "\">
                                ";
                // line 1102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "difficultyLevel", [], "any", false, false, false, 1102), "html", null, true);
                yield "
                            </span>
                        </div>
                        
                        <div class=\"training-date\" data-label=\"Crée le\">
                            ";
                // line 1107
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "createdAt", [], "any", false, false, false, 1107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "createdAt", [], "any", false, false, false, 1107), "d/m/Y"), "html", null, true)) : ("N/A"));
                yield "
                        </div>
                        
                        <div class=\"action-buttons\" data-label=\"Actions\">
                            <a href=\"";
                // line 1111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 1111)]), "html", null, true);
                yield "\" class=\"btn-show\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                            <a href=\"";
                // line 1114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 1114)]), "html", null, true);
                yield "\" class=\"btn-edit\">
                                <i class=\"fas fa-edit\"></i> Éditer
                            </a>
                            <form method=\"post\" action=\"";
                // line 1117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 1117)]), "html", null, true);
                yield "\" 
                                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce plan d\\'entraînement ?');\" 
                                  style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 1120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 1120))), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"btn-delete\">
                                    <i class=\"fas fa-trash\"></i> Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['training_plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1128
            yield "            </div>
        ";
        } else {
            // line 1130
            yield "            <div class=\"empty-state\">
                <div class=\"empty-state-icon\">📋</div>
                <h3>Aucun plan d'entraînement trouvé</h3>
                <p>Créez votre premier plan d'entraînement pour structurer vos sessions de coaching.</p>
                <a href=\"";
            // line 1134
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_new");
            yield "\" class=\"btn-new\">Créer un plan</a>
            </div>
        ";
        }
        // line 1137
        yield "    </div>

    <div style=\"text-align: center; margin-top: 40px; display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;\">
        <a href=\"";
        // line 1140
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_new");
        yield "\" class=\"btn-new\">
            <i class=\"fas fa-plus-circle\"></i> Nouveau Plan d'Entraînement
        </a>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1147
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

        // line 1148
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
        const coachOption = document.querySelector(`#session-coach-filter option[value=\"\${coachFilter}\"]`);
        const coachName = coachOption ? coachOption.textContent : coachFilter;
        activeFilters.push(`Coach: \${coachName}`);
    }
    if (teamFilter) {
        const teamOption = document.querySelector(`#session-team-filter option[value=\"\${teamFilter}\"]`);
        const teamName = teamOption ? teamOption.textContent : teamFilter;
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
        tag.innerHTML = `\${filter} <i class=\"fas fa-times\" onclick=\"removeSessionFilter('\${filter.split(':')[0].trim()}')\"></i>`;
        filterTags.appendChild(tag);
    });

    sessions.forEach(session => {
        const title = session.querySelector('.training-plan-title')?.textContent.toLowerCase() || '';
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

function removeSessionFilter(filterType) {
    if (filterType === 'Recherche') {
        document.getElementById('session-search').value = '';
    } else if (filterType === 'Coach') {
        document.getElementById('session-coach-filter').value = '';
    } else if (filterType === 'Équipe') {
        document.getElementById('session-team-filter').value = '';
    } else if (filterType === 'Durée') {
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
        tag.innerHTML = `\${filter} <i class=\"fas fa-times\" onclick=\"removeTrainingFilter('\${filter.split(':')[0].trim()}')\"></i>`;
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

function removeTrainingFilter(filterType) {
    if (filterType === 'Recherche') {
        document.getElementById('training-search').value = '';
    } else if (filterType === 'Difficulté') {
        document.getElementById('training-difficulty-filter').value = '';
    } else if (filterType === 'Focus') {
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

// ==================== NOTIFICATIONS 10 MINUTES AVANT SESSION ====================
function checkSessionNotifications() {
    const sessions = document.querySelectorAll('.session-item');
    const now = new Date();

    sessions.forEach(session => {
        const dateStr = session.dataset.date; // format 'YYYY-MM-DD HH:mm'
        if (!dateStr) return;

        const sessionDate = new Date(dateStr.replace(' ', 'T'));
        const diffMinutes = (sessionDate - now) / 1000 / 60; // différence en minutes

        // Notification si session dans les 10 prochaines minutes et pas déjà notifiée
        if (diffMinutes > 0 && diffMinutes <= 10 && !session.dataset.notified) {
            showNotification(
                `Session prochaine !`,
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
        return array (  1552 => 1148,  1539 => 1147,  1522 => 1140,  1517 => 1137,  1511 => 1134,  1505 => 1130,  1501 => 1128,  1487 => 1120,  1481 => 1117,  1475 => 1114,  1469 => 1111,  1462 => 1107,  1454 => 1102,  1451 => 1101,  1446 => 1100,  1442 => 1099,  1438 => 1098,  1430 => 1093,  1423 => 1089,  1419 => 1088,  1413 => 1085,  1409 => 1084,  1405 => 1083,  1401 => 1082,  1397 => 1081,  1393 => 1080,  1390 => 1079,  1386 => 1078,  1383 => 1077,  1381 => 1076,  1352 => 1049,  1346 => 1048,  1338 => 1046,  1335 => 1045,  1332 => 1044,  1327 => 1043,  1325 => 1042,  1297 => 1017,  1292 => 1014,  1286 => 1011,  1280 => 1007,  1276 => 1005,  1264 => 999,  1258 => 996,  1253 => 993,  1249 => 991,  1240 => 985,  1235 => 983,  1231 => 982,  1227 => 980,  1225 => 979,  1219 => 976,  1213 => 973,  1208 => 970,  1204 => 968,  1199 => 966,  1194 => 965,  1192 => 964,  1187 => 961,  1183 => 959,  1178 => 957,  1173 => 956,  1171 => 955,  1165 => 952,  1161 => 951,  1157 => 950,  1153 => 949,  1149 => 948,  1145 => 947,  1142 => 946,  1138 => 945,  1135 => 944,  1133 => 943,  1111 => 924,  1086 => 901,  1080 => 900,  1072 => 898,  1069 => 897,  1066 => 896,  1061 => 895,  1059 => 894,  1053 => 890,  1047 => 889,  1039 => 887,  1036 => 886,  1033 => 885,  1028 => 884,  1026 => 883,  994 => 854,  988 => 851,  982 => 848,  976 => 845,  965 => 837,  958 => 833,  951 => 829,  944 => 825,  936 => 819,  923 => 818,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Phantom Force - Coaching & Training{% endblock %}

{% block inline_styles %}
<style>
/* ================= CALENDAR BUTTON ================= */
.btn-calendar {
    padding: 12px 24px;
    background: linear-gradient(135deg, #ff2d2d, #ff5e5e);
    color: white;
    border: none;
    border-radius: var(--radius);
    font-weight: 600;
    font-size: 14px;
    cursor: pointer;
    transition: var(--transition);
    display: inline-flex;
    align-items: center;
    gap: 8px;
    text-decoration: none;
    position: relative;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(255, 45, 45, 0.3);
}

.btn-calendar::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: rgba(255,255,255,0.2);
    transform: translate(-50%, -50%);
    transition: width 0.6s, height 0.6s;
}

.btn-calendar:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(255, 45, 45, 0.5);
}

.btn-calendar:hover::before {
    width: 300px;
    height: 300px;
}

.btn-calendar i {
    animation: calendarPulse 2s infinite;
}

@keyframes calendarPulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
}

/* ================= BOUTONS IA AJOUTÉS ================= */
.btn-ia {
    padding: 12px 24px;
    background: linear-gradient(135deg, #a82dff, #c85dff);
    color: white;
    border: none;
    border-radius: var(--radius);
    font-weight: 600;
    font-size: 14px;
    cursor: pointer;
    transition: var(--transition);
    display: inline-flex;
    align-items: center;
    gap: 8px;
    text-decoration: none;
    position: relative;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(168, 45, 255, 0.3);
}

.btn-ia::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: rgba(255,255,255,0.2);
    transform: translate(-50%, -50%);
    transition: width 0.6s, height 0.6s;
}

.btn-ia:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(168, 45, 255, 0.5);
}

.btn-ia:hover::before {
    width: 300px;
    height: 300px;
}

.btn-ia i {
    animation: pulse 2s infinite;
}

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

/* ================= IA TOOLS BAR ================= */
.ia-tools-bar {
    display: flex;
    gap: 15px;
    justify-content: center;
    margin: 30px 0 40px;
    flex-wrap: wrap;
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

/* ================= BOUTON DÉTAILS TRAINING PLAN ================= */
.btn-detail-plan {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: linear-gradient(135deg, #3498db, #2980b9);
    color: white;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
    border: 2px solid transparent;
    margin-top: 8px;
    box-shadow: 0 2px 5px rgba(52, 152, 219, 0.3);
    position: relative;
    overflow: hidden;
    width: fit-content;
}

.btn-detail-plan::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s ease;
}

.btn-detail-plan:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(52, 152, 219, 0.5);
    background: linear-gradient(135deg, #2980b9, #3498db);
    border-color: rgba(255,255,255,0.3);
}

.btn-detail-plan:hover::before {
    left: 100%;
}

.btn-detail-plan i {
    font-size: 12px;
    animation: pulseDetail 2s infinite;
}

/* Animation pour l'icône */
@keyframes pulseDetail {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
}

/* Style pour le conteneur du training plan */
.training-plan-detail {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.training-plan-title {
    font-weight: 700;
    color: var(--text-light);
    font-size: 14px;
    display: block;
    margin-bottom: 3px;
}

.training-plan-focus {
    font-size: 11px;
    color: #3498db;
    background: rgba(52, 152, 219, 0.1);
    padding: 3px 10px;
    border-radius: 12px;
    display: inline-block;
    width: fit-content;
    border: 1px solid rgba(52, 152, 219, 0.3);
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
    
    .btn-detail-plan {
        width: 100%;
        justify-content: center;
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

<!-- IA TOOLS BAR -->
<div class=\"ia-tools-bar\">
    <a href=\"{{ path('app_ai_workout_form') }}\" class=\"btn-ia\">
        <i class=\"fas fa-dumbbell\"></i> Coach IA - Plan d'entraînement
    </a>
    <a href=\"{{ path('app_analyst_dashboard') }}\" class=\"btn-ia\">
        <i class=\"fas fa-chart-line\"></i> Analyste Pro - Esport
    </a>
    <a href=\"{{ path('app_analyst_player_search') }}?playerName=Faker\" class=\"btn-ia\">
        <i class=\"fas fa-user\"></i> Analyser Faker
    </a>
    <a href=\"{{ path('app_analyst_team_search') }}?teamName=T1\" class=\"btn-ia\">
        <i class=\"fas fa-users\"></i> Analyser T1
    </a>
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
    <!-- Controls Bar avec bouton calendrier -->
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
        
        <!-- BOUTON CALENDRIER -->
        <div style=\"margin-left: auto;\">
            <a href=\"{{ path('app_calendar') }}\" class=\"btn-calendar\">
                <i class=\"fas fa-calendar-alt\"></i> Vue Calendrier
            </a>
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
                                <span class=\"text-muted\">Non assigné</span>
                            {% endif %}
                        </div>
                        
                        <div class=\"table-cell\" data-label=\"Équipe\">
                            {% if coaching_session.team %}
                                <strong>{{ coaching_session.team.name }}</strong><br>
                                <small style=\"color: var(--text-muted);\">{{ coaching_session.team.game }}</small>
                            {% else %}
                                <span class=\"text-muted\">Non assignée</span>
                            {% endif %}
                        </div>
                        
                        <div class=\"table-cell cell-date\" data-label=\"Date\">
                            {{ coaching_session.sessionDate ? coaching_session.sessionDate|date('d/m/Y H:i') : 'N/A' }}
                        </div>
                        
                        <div class=\"table-cell cell-duration\" data-label=\"Durée\">{{ coaching_session.duration }} min</div>
                        
                        <div class=\"table-cell cell-trainingplan\" data-label=\"Training Plan\">
                            {% if coaching_session.trainingPlan %}
                                <div class=\"training-plan-detail\">
                                    <div>
                                        <span class=\"training-plan-title\">{{ coaching_session.trainingPlan.title }}</span>
                                        <span class=\"training-plan-focus\">{{ coaching_session.trainingPlan.focusArea }}</span>
                                    </div>
                                    <a href=\"{{ path('app_training_plan_show', { id: coaching_session.trainingPlan.id }) }}\"
                                       class=\"btn-detail-plan\">
                                        <i class=\"fas fa-search\"></i> Détails du plan
                                    </a>
                                </div>
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
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <div class=\"empty-state\">
                <div class=\"empty-state-icon\">🎮</div>
                <h3>Aucune session de coaching trouvée</h3>
                <p>Commencez par créer votre première session de coaching pour améliorer les performances de votre équipe.</p>
                <a href=\"{{ path('app_coaching_session_new') }}\" class=\"btn-new\">Créer une session</a>
            </div>
        {% endif %}
    </div>

    <div style=\"text-align: center; margin-top: 40px;\">
        <a href=\"{{ path('app_coaching_session_new') }}\" class=\"btn-new\">
            <i class=\"fas fa-plus-circle\"></i> Nouvelle Session
        </a>
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
                            <span class=\"training-difficulty 
                                {% if training_plan.difficultyLevel == 'Débutant' %}difficulty-beginner
                                {% elseif training_plan.difficultyLevel == 'Intermédiaire' %}difficulty-intermediate
                                {% elseif training_plan.difficultyLevel == 'Avancé' %}difficulty-advanced
                                {% endif %}\">
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
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <div class=\"empty-state\">
                <div class=\"empty-state-icon\">📋</div>
                <h3>Aucun plan d'entraînement trouvé</h3>
                <p>Créez votre premier plan d'entraînement pour structurer vos sessions de coaching.</p>
                <a href=\"{{ path('app_training_plan_new') }}\" class=\"btn-new\">Créer un plan</a>
            </div>
        {% endif %}
    </div>

    <div style=\"text-align: center; margin-top: 40px; display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;\">
        <a href=\"{{ path('app_training_plan_new') }}\" class=\"btn-new\">
            <i class=\"fas fa-plus-circle\"></i> Nouveau Plan d'Entraînement
        </a>
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
        const coachOption = document.querySelector(`#session-coach-filter option[value=\"\${coachFilter}\"]`);
        const coachName = coachOption ? coachOption.textContent : coachFilter;
        activeFilters.push(`Coach: \${coachName}`);
    }
    if (teamFilter) {
        const teamOption = document.querySelector(`#session-team-filter option[value=\"\${teamFilter}\"]`);
        const teamName = teamOption ? teamOption.textContent : teamFilter;
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
        tag.innerHTML = `\${filter} <i class=\"fas fa-times\" onclick=\"removeSessionFilter('\${filter.split(':')[0].trim()}')\"></i>`;
        filterTags.appendChild(tag);
    });

    sessions.forEach(session => {
        const title = session.querySelector('.training-plan-title')?.textContent.toLowerCase() || '';
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

function removeSessionFilter(filterType) {
    if (filterType === 'Recherche') {
        document.getElementById('session-search').value = '';
    } else if (filterType === 'Coach') {
        document.getElementById('session-coach-filter').value = '';
    } else if (filterType === 'Équipe') {
        document.getElementById('session-team-filter').value = '';
    } else if (filterType === 'Durée') {
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
        tag.innerHTML = `\${filter} <i class=\"fas fa-times\" onclick=\"removeTrainingFilter('\${filter.split(':')[0].trim()}')\"></i>`;
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

function removeTrainingFilter(filterType) {
    if (filterType === 'Recherche') {
        document.getElementById('training-search').value = '';
    } else if (filterType === 'Difficulté') {
        document.getElementById('training-difficulty-filter').value = '';
    } else if (filterType === 'Focus') {
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

// ==================== NOTIFICATIONS 10 MINUTES AVANT SESSION ====================
function checkSessionNotifications() {
    const sessions = document.querySelectorAll('.session-item');
    const now = new Date();

    sessions.forEach(session => {
        const dateStr = session.dataset.date; // format 'YYYY-MM-DD HH:mm'
        if (!dateStr) return;

        const sessionDate = new Date(dateStr.replace(' ', 'T'));
        const diffMinutes = (sessionDate - now) / 1000 / 60; // différence en minutes

        // Notification si session dans les 10 prochaines minutes et pas déjà notifiée
        if (diffMinutes > 0 && diffMinutes <= 10 && !session.dataset.notified) {
            showNotification(
                `Session prochaine !`,
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
