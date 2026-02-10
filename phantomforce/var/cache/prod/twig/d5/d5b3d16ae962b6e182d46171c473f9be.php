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
class __TwigTemplate_6b84b39905bb7ac10c3ec61fbd5a6608 extends Template
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
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Phantom Force - Coaching & Training";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inline_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 620
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 621
        yield "<div class=\"coaching-hero\">
    <h1>🔥 COACHING & TRAINING</h1>
    <p>Gérez vos sessions de coaching et vos plans d'entraînement en un seul endroit. Optimisez les performances de votre équipe.</p>
    
    <div class=\"stats-bar\">
        <div class=\"stat-item\">
            <div class=\"stat-value\">";
        // line 627
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["coaching_sessions"] ?? null)), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Sessions</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">";
        // line 631
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["training_plans"] ?? null)), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Plans d'entraînement</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">";
        // line 635
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["coaching_sessions"] ?? null), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "trainingPlan", [], "any", false, false, false, 635) != null); })), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Sessions avec plan</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">";
        // line 639
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["coaching_sessions"] ?? null), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "duration", [], "any", false, false, false, 639) > 60); })), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["coaching_sessions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 671
            yield "                ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "coachId", [], "any", false, false, false, 671), ($context["uniqueCoaches"] ?? null))) {
                // line 672
                yield "                    ";
                $context["uniqueCoaches"] = Twig\Extension\CoreExtension::merge(($context["uniqueCoaches"] ?? null), [CoreExtension::getAttribute($this->env, $this->source, $context["session"], "coachId", [], "any", false, false, false, 672)]);
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["coaching_sessions"] ?? null)) > 0)) {
            // line 712
            yield "            <div id=\"sessions-list\">
                ";
            // line 713
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["coaching_sessions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["coaching_session"]) {
                // line 714
                yield "                    <div class=\"table-row session-item\" 
                         data-id=\"";
                // line 715
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "id", [], "any", false, false, false, 715), "html", null, true);
                yield "\"
                         data-coach=\"";
                // line 716
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "coachId", [], "any", false, false, false, 716), "html", null, true);
                yield "\"
                         data-duration=\"";
                // line 717
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "duration", [], "any", false, false, false, 717), "html", null, true);
                yield "\"
                         data-date=\"";
                // line 718
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "sessionDate", [], "any", false, false, false, 718)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "sessionDate", [], "any", false, false, false, 718), "Y-m-d H:i"), "html", null, true)) : (""));
                yield "\"
                         data-team=\"";
                // line 719
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "teamId", [], "any", false, false, false, 719), "html", null, true);
                yield "\">
                        <div class=\"table-cell cell-id\" data-label=\"ID\">#";
                // line 720
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "id", [], "any", false, false, false, 720), "html", null, true);
                yield "</div>
                        <div class=\"table-cell\" data-label=\"Coach\">Coach #";
                // line 721
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "coachId", [], "any", false, false, false, 721), "html", null, true);
                yield "</div>
                        <div class=\"table-cell\" data-label=\"Équipe\">Équipe #";
                // line 722
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "teamId", [], "any", false, false, false, 722), "html", null, true);
                yield "</div>
                        <div class=\"table-cell cell-date\" data-label=\"Date\">
                            ";
                // line 724
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "sessionDate", [], "any", false, false, false, 724)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "sessionDate", [], "any", false, false, false, 724), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
                yield "
                        </div>
                        <div class=\"table-cell cell-duration\" data-label=\"Durée\">";
                // line 726
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "duration", [], "any", false, false, false, 726), "html", null, true);
                yield "</div>
                        <div class=\"table-cell cell-trainingplan\" data-label=\"Training Plan\">
                            ";
                // line 728
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "trainingPlan", [], "any", false, false, false, 728)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 729
                    yield "                                <strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "trainingPlan", [], "any", false, false, false, 729), "title", [], "any", false, false, false, 729), "html", null, true);
                    yield "</strong><br>
                                <small>";
                    // line 730
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "trainingPlan", [], "any", false, false, false, 730), "focusArea", [], "any", false, false, false, 730), "html", null, true);
                    yield "</small>
                            ";
                } else {
                    // line 732
                    yield "                                <span class=\"text-muted\">Aucun plan assigné</span>
                            ";
                }
                // line 734
                yield "                        </div>
                        <div class=\"table-cell action-buttons\" data-label=\"Actions\">
                            <a href=\"";
                // line 736
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "id", [], "any", false, false, false, 736)]), "html", null, true);
                yield "\" class=\"btn-show\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                            <a href=\"";
                // line 739
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["coaching_session"], "id", [], "any", false, false, false, 739)]), "html", null, true);
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
            // line 745
            yield "            </div>
        ";
        } else {
            // line 747
            yield "            <div class=\"empty-state\">
                <div class=\"empty-state-icon\">🎮</div>
                <h3>Aucune session de coaching trouvée</h3>
                <p>Commencez par créer votre première session de coaching pour améliorer les performances de votre équipe.</p>
                <a href=\"";
            // line 751
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_new");
            yield "\" class=\"btn btn-new\">Créer une session</a>
            </div>
        ";
        }
        // line 754
        yield "    </div>

    <div style=\"text-align: center; margin-top: 40px;\">
        <a href=\"";
        // line 757
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
            <option value=\"Beginner\">Débutant</option>
            <option value=\"Intermediate\">Intermédiaire</option>
            <option value=\"Advanced\">Avancé</option>
        </select>
        
        <select class=\"filter-select\" id=\"training-focus-filter\" onchange=\"filterTrainingPlans()\">
            <option value=\"\">Tous les focus</option>
            ";
        // line 782
        $context["uniqueFocus"] = [];
        // line 783
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["training_plans"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 784
            yield "                ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "focusArea", [], "any", false, false, false, 784), ($context["uniqueFocus"] ?? null))) {
                // line 785
                yield "                    ";
                $context["uniqueFocus"] = Twig\Extension\CoreExtension::merge(($context["uniqueFocus"] ?? null), [CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "focusArea", [], "any", false, false, false, 785)]);
                // line 786
                yield "                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "focusArea", [], "any", false, false, false, 786), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "focusArea", [], "any", false, false, false, 786), "html", null, true);
                yield "</option>
                ";
            }
            // line 788
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['plan'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 789
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
        // line 816
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["training_plans"] ?? null)) > 0)) {
            // line 817
            yield "            <div id=\"training-plans-list\">
                ";
            // line 818
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["training_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["training_plan"]) {
                // line 819
                yield "                    <div class=\"training-table-row training-item\"
                         data-id=\"";
                // line 820
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 820), "html", null, true);
                yield "\"
                         data-title=\"";
                // line 821
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "title", [], "any", false, false, false, 821)), "html", null, true);
                yield "\"
                         data-difficulty=\"";
                // line 822
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "difficultyLevel", [], "any", false, false, false, 822), "html", null, true);
                yield "\"
                         data-focus=\"";
                // line 823
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "focusArea", [], "any", false, false, false, 823), "html", null, true);
                yield "\"
                         data-date=\"";
                // line 824
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "createdAt", [], "any", false, false, false, 824)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "createdAt", [], "any", false, false, false, 824), "Y-m-d"), "html", null, true)) : (""));
                yield "\">
                        <div class=\"cell-id\" data-label=\"ID\">#";
                // line 825
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 825), "html", null, true);
                yield "</div>
                        <div data-label=\"Titre & Description\">
                            <div class=\"training-title\">";
                // line 827
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "title", [], "any", false, false, false, 827), "html", null, true);
                yield "</div>
                            <div class=\"training-description\">";
                // line 828
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "description", [], "any", false, false, false, 828), "html", null, true);
                yield "</div>
                        </div>
                        <div data-label=\"Focus\">
                            <span class=\"training-focus\">";
                // line 831
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "focusArea", [], "any", false, false, false, 831), "html", null, true);
                yield "</span>
                        </div>
                        <div data-label=\"Difficulté\">
                            <span class=\"training-difficulty difficulty-";
                // line 834
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "difficultyLevel", [], "any", false, false, false, 834)), "html", null, true);
                yield "\">
                                ";
                // line 835
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "difficultyLevel", [], "any", false, false, false, 835), "html", null, true);
                yield "
                            </span>
                        </div>
                        <div class=\"training-date\" data-label=\"Crée le\">
                            ";
                // line 839
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "createdAt", [], "any", false, false, false, 839)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "createdAt", [], "any", false, false, false, 839), "d/m/Y"), "html", null, true)) : ("N/A"));
                yield "
                        </div>
                        <div class=\"action-buttons\" data-label=\"Actions\">
                            <a href=\"";
                // line 842
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 842)]), "html", null, true);
                yield "\" class=\"btn-show\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                            <a href=\"";
                // line 845
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 845)]), "html", null, true);
                yield "\" class=\"btn-edit\">
                                <i class=\"fas fa-edit\"></i> Éditer
                            </a>
                            <form method=\"post\" action=\"";
                // line 848
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 848)]), "html", null, true);
                yield "\" 
                                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce plan d\\'entraînement ?');\" 
                                  style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 851
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["training_plan"], "id", [], "any", false, false, false, 851))), "html", null, true);
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
            // line 859
            yield "            </div>
        ";
        } else {
            // line 861
            yield "            <div class=\"empty-state\">
                <div class=\"empty-state-icon\">📋</div>
                <h3>Aucun plan d'entraînement trouvé</h3>
                <p>Créez votre premier plan d'entraînement pour structurer vos sessions de coaching.</p>
                <a href=\"";
            // line 865
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_new");
            yield "\" class=\"btn btn-new\">Créer un plan</a>
            </div>
        ";
        }
        // line 868
        yield "    </div>

    <div style=\"text-align: center; margin-top: 40px;\">
        <a href=\"";
        // line 871
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_new");
        yield "\" class=\"btn-new\">
            <i class=\"fas fa-plus-circle\"></i> Nouveau Plan d'Entraînement
        </a>
    </div>
</div>
";
        yield from [];
    }

    // line 878
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 879
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
        return array (  1161 => 879,  1154 => 878,  1143 => 871,  1138 => 868,  1132 => 865,  1126 => 861,  1122 => 859,  1108 => 851,  1102 => 848,  1096 => 845,  1090 => 842,  1084 => 839,  1077 => 835,  1073 => 834,  1067 => 831,  1061 => 828,  1057 => 827,  1052 => 825,  1048 => 824,  1044 => 823,  1040 => 822,  1036 => 821,  1032 => 820,  1029 => 819,  1025 => 818,  1022 => 817,  1020 => 816,  991 => 789,  985 => 788,  977 => 786,  974 => 785,  971 => 784,  966 => 783,  964 => 782,  936 => 757,  931 => 754,  925 => 751,  919 => 747,  915 => 745,  903 => 739,  897 => 736,  893 => 734,  889 => 732,  884 => 730,  879 => 729,  877 => 728,  872 => 726,  867 => 724,  862 => 722,  858 => 721,  854 => 720,  850 => 719,  846 => 718,  842 => 717,  838 => 716,  834 => 715,  831 => 714,  827 => 713,  824 => 712,  822 => 711,  785 => 676,  779 => 675,  771 => 673,  768 => 672,  765 => 671,  760 => 670,  758 => 669,  725 => 639,  718 => 635,  711 => 631,  704 => 627,  696 => 621,  689 => 620,  72 => 6,  65 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "coaching_session/index.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\coaching_session\\index.html.twig");
    }
}
