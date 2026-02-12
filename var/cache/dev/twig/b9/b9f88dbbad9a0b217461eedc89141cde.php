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

/* training_plan/show.html.twig */
class __TwigTemplate_741aac0e97343c6f03ae80a605ff90ad extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "training_plan/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "training_plan/show.html.twig"));

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

        yield "Phantom Force - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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
/* ================= DETAIL PAGE STYLES ================= */
.detail-hero {
    text-align: center;
    padding: 60px 20px 30px;
    position: relative;
    margin-bottom: 40px;
    animation: fadeInUp 0.8s ease-out;
}

.detail-hero::after {
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

.detail-hero h1 {
    font-size: 42px;
    font-weight: 800;
    background: linear-gradient(90deg, #ff0000, #ff2d2d, #ff5e5e, #ff8a8a);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    margin-bottom: 10px;
    line-height: 1.1;
    text-shadow: 0 5px 15px rgba(255, 0, 0, 0.3);
    animation: textGlow 3s infinite alternate;
}

.detail-hero .plan-meta {
    color: var(--text-muted);
    font-size: 16px;
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
    margin-top: 15px;
}

.plan-meta-item {
    display: flex;
    align-items: center;
    gap: 8px;
}

.plan-meta-item i {
    color: var(--red);
}

/* ================= PLAN CARD ================= */
.plan-card-detail {
    max-width: 1000px;
    margin: 0 auto 40px;
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow-lg);
    animation: fadeIn 0.6s ease-out;
}

.plan-card-header {
    background: linear-gradient(135deg, rgba(255,0,0,0.15), rgba(255,45,45,0.1));
    padding: 30px 40px;
    border-bottom: 1px solid rgba(255, 45, 45, 0.2);
}

.plan-id {
    font-size: 14px;
    color: var(--red);
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 5px;
}

.plan-title-detail {
    font-size: 32px;
    font-weight: 700;
    color: var(--text-light);
    margin-bottom: 15px;
    line-height: 1.3;
}

.plan-tags {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.plan-tag {
    padding: 6px 15px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.tag-focus {
    background: rgba(52, 152, 219, 0.2);
    color: #3498db;
    border: 1px solid rgba(52, 152, 219, 0.3);
}

.tag-difficulty {
    background: rgba(46, 204, 113, 0.2);
    color: #2ecc71;
    border: 1px solid rgba(46, 204, 113, 0.3);
}

.tag-coach {
    background: rgba(155, 89, 182, 0.2);
    color: #9b59b6;
    border: 1px solid rgba(155, 89, 182, 0.3);
}

.tag-date {
    background: rgba(241, 196, 15, 0.2);
    color: #f1c40f;
    border: 1px solid rgba(241, 196, 15, 0.3);
}

/* ================= PLAN CONTENT ================= */
.plan-content {
    padding: 40px;
}

.section-title {
    font-size: 20px;
    font-weight: 700;
    color: var(--text-light);
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 2px solid rgba(255, 45, 45, 0.2);
    display: flex;
    align-items: center;
    gap: 10px;
}

.section-title i {
    color: var(--red);
    font-size: 18px;
}

.description-content {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: var(--radius);
    padding: 25px;
    margin-bottom: 30px;
    line-height: 1.8;
    color: var(--text-muted);
    font-size: 15px;
}

.description-content p {
    margin-bottom: 15px;
}

.description-content p:last-child {
    margin-bottom: 0;
}

/* ================= INFO GRID ================= */
.info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}

.info-card {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: var(--radius);
    padding: 25px;
    transition: var(--transition);
    position: relative;
    overflow: hidden;
}

.info-card:hover {
    border-color: var(--red);
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(255, 0, 0, 0.1);
}

.info-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(255,45,45,0.05), transparent);
    z-index: -1;
}

.info-label {
    font-size: 12px;
    color: var(--red);
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 600;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.info-value {
    font-size: 18px;
    font-weight: 600;
    color: var(--text-light);
    margin-bottom: 5px;
}

.info-details {
    font-size: 13px;
    color: var(--text-muted);
    line-height: 1.5;
}

/* ================= SESSIONS LIST ================= */
.sessions-section {
    margin-top: 40px;
}

.sessions-list {
    margin-top: 20px;
}

.session-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: var(--radius);
    margin-bottom: 10px;
    transition: var(--transition);
}

.session-item:hover {
    border-color: var(--red);
    background: rgba(255, 45, 45, 0.05);
}

.session-info {
    display: flex;
    align-items: center;
    gap: 20px;
}

.session-date {
    font-size: 14px;
    color: var(--text-light);
    font-weight: 600;
    min-width: 150px;
}

.session-duration {
    color: var(--green);
    font-weight: 600;
    font-size: 14px;
}

.session-team {
    color: var(--text-muted);
    font-size: 13px;
}

.no-sessions {
    text-align: center;
    padding: 40px 20px;
    background: rgba(255, 45, 45, 0.05);
    border: 2px dashed rgba(255, 45, 45, 0.3);
    border-radius: var(--radius);
}

.no-sessions i {
    font-size: 48px;
    color: rgba(255, 45, 45, 0.5);
    margin-bottom: 15px;
    display: block;
}

/* ================= ACTIONS BAR ================= */
.actions-bar {
    display: flex;
    gap: 15px;
    margin-top: 40px;
    padding-top: 30px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.btn-action {
    padding: 12px 24px;
    border-radius: 8px;
    font-weight: 600;
    font-size: 14px;
    text-decoration: none;
    transition: var(--transition);
    display: inline-flex;
    align-items: center;
    gap: 10px;
    border: none;
    cursor: pointer;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.btn-back {
    background: rgba(255, 255, 255, 0.05);
    color: var(--text-muted);
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.btn-back:hover {
    background: rgba(255, 255, 255, 0.1);
    color: var(--text-light);
    transform: translateY(-2px);
    border-color: rgba(255, 45, 45, 0.3);
}

.btn-edit {
    background: rgba(255, 45, 45, 0.1);
    color: var(--red);
    border: 1px solid rgba(255, 45, 45, 0.3);
    flex: 1;
    justify-content: center;
}

.btn-edit:hover {
    background: rgba(255, 45, 45, 0.2);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255, 45, 45, 0.2);
}

.btn-delete {
    background: rgba(231, 76, 60, 0.1);
    color: #e74c3c;
    border: 1px solid rgba(231, 76, 60, 0.3);
}

.btn-delete:hover {
    background: rgba(231, 76, 60, 0.2);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(231, 76, 60, 0.2);
}

/* ================= STATS BAR ================= */
.stats-bar-detail {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin: 30px 0;
}

.stat-card {
    background: rgba(255, 45, 45, 0.05);
    border: 1px solid rgba(255, 45, 45, 0.1);
    border-radius: var(--radius);
    padding: 20px;
    text-align: center;
    transition: var(--transition);
}

.stat-card:hover {
    border-color: var(--red);
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(255, 0, 0, 0.1);
}

.stat-value {
    font-size: 32px;
    font-weight: 800;
    background: linear-gradient(90deg, #ff2d2d, #ff5e5e);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    margin-bottom: 5px;
    animation: pulse 2s infinite;
}

.stat-label {
    font-size: 12px;
    color: var(--text-muted);
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 768px) {
    .detail-hero {
        padding: 40px 20px 20px;
    }
    
    .detail-hero h1 {
        font-size: 32px;
    }
    
    .plan-card-header,
    .plan-content {
        padding: 25px;
    }
    
    .plan-title-detail {
        font-size: 24px;
    }
    
    .info-grid {
        grid-template-columns: 1fr;
    }
    
    .stats-bar-detail {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .actions-bar {
        flex-direction: column;
    }
    
    .btn-action {
        width: 100%;
        justify-content: center;
    }
    
    .session-item {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
    }
    
    .session-info {
        width: 100%;
        justify-content: space-between;
    }
}

/* ================= ANIMATIONS ================= */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(40px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes widthGrow {
    from { width: 0; }
    to { width: 150px; }
}

@keyframes textGlow {
    0% { text-shadow: 0 5px 15px rgba(255, 0, 0, 0.3); }
    100% { text-shadow: 0 5px 25px rgba(255, 0, 0, 0.6); }
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 484
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

        // line 485
        yield "<div class=\"detail-hero\">
    <h1>📋 ";
        // line 486
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 486, $this->source); })()), "title", [], "any", false, false, false, 486), "html", null, true);
        yield "</h1>
    <div class=\"plan-meta\">
        <div class=\"plan-meta-item\">
            <i class=\"fas fa-hashtag\"></i>
            <span>Plan #";
        // line 490
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 490, $this->source); })()), "id", [], "any", false, false, false, 490), "html", null, true);
        yield "</span>
        </div>
        <div class=\"plan-meta-item\">
            <i class=\"fas fa-calendar-alt\"></i>
            <span>Créé le ";
        // line 494
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 494, $this->source); })()), "createdAt", [], "any", false, false, false, 494), "d/m/Y"), "html", null, true);
        yield "</span>
        </div>
        <div class=\"plan-meta-item\">
            <i class=\"fas fa-user-tie\"></i>
            <span>Coach #";
        // line 498
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 498, $this->source); })()), "coachId", [], "any", false, false, false, 498), "html", null, true);
        yield "</span>
        </div>
    </div>
</div>

<div class=\"plan-card-detail\">
    <div class=\"plan-card-header\">
        <div class=\"plan-id\">PLAN D'ENTRAÎNEMENT</div>
        <h2 class=\"plan-title-detail\">";
        // line 506
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 506, $this->source); })()), "title", [], "any", false, false, false, 506), "html", null, true);
        yield "</h2>
        <div class=\"plan-tags\">
            <span class=\"plan-tag tag-focus\">
                <i class=\"fas fa-bullseye\"></i>
                ";
        // line 510
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 510, $this->source); })()), "focusArea", [], "any", false, false, false, 510), "html", null, true);
        yield "
            </span>
            <span class=\"plan-tag tag-difficulty\">
                <i class=\"fas fa-chart-line\"></i>
                ";
        // line 514
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 514, $this->source); })()), "difficultyLevel", [], "any", false, false, false, 514), "html", null, true);
        yield "
            </span>
            <span class=\"plan-tag tag-coach\">
                <i class=\"fas fa-user-tie\"></i>
                Coach #";
        // line 518
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 518, $this->source); })()), "coachId", [], "any", false, false, false, 518), "html", null, true);
        yield "
            </span>
            <span class=\"plan-tag tag-date\">
                <i class=\"fas fa-clock\"></i>
                ";
        // line 522
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 522, $this->source); })()), "createdAt", [], "any", false, false, false, 522), "d/m/Y"), "html", null, true);
        yield "
            </span>
        </div>
    </div>
    
    <div class=\"plan-content\">
        <div class=\"stats-bar-detail\">
            <div class=\"stat-card\">
                <div class=\"stat-value\">";
        // line 530
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 530, $this->source); })()), "coachingSessions", [], "any", false, false, false, 530)), "html", null, true);
        yield "</div>
                <div class=\"stat-label\">Sessions</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-value\">
                    ";
        // line 535
        $context["totalDuration"] = 0;
        // line 536
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 536, $this->source); })()), "coachingSessions", [], "any", false, false, false, 536));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 537
            yield "                        ";
            $context["totalDuration"] = ((isset($context["totalDuration"]) || array_key_exists("totalDuration", $context) ? $context["totalDuration"] : (function () { throw new RuntimeError('Variable "totalDuration" does not exist.', 537, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["session"], "duration", [], "any", false, false, false, 537));
            // line 538
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['session'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 539
        yield "                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalDuration"]) || array_key_exists("totalDuration", $context) ? $context["totalDuration"] : (function () { throw new RuntimeError('Variable "totalDuration" does not exist.', 539, $this->source); })()), "html", null, true);
        yield "
                </div>
                <div class=\"stat-label\">Minutes totales</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-value\">
                    ";
        // line 545
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 545, $this->source); })()), "coachingSessions", [], "any", false, false, false, 545)) > 0)) {
            // line 546
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((isset($context["totalDuration"]) || array_key_exists("totalDuration", $context) ? $context["totalDuration"] : (function () { throw new RuntimeError('Variable "totalDuration" does not exist.', 546, $this->source); })()) / Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 546, $this->source); })()), "coachingSessions", [], "any", false, false, false, 546)))), "html", null, true);
            yield "
                    ";
        } else {
            // line 548
            yield "                        0
                    ";
        }
        // line 550
        yield "                </div>
                <div class=\"stat-label\">Moy. par session</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-value\">
                    ";
        // line 555
        $context["uniqueTeams"] = [];
        // line 556
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 556, $this->source); })()), "coachingSessions", [], "any", false, false, false, 556));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 557
            yield "                        ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "teamId", [], "any", false, false, false, 557), (isset($context["uniqueTeams"]) || array_key_exists("uniqueTeams", $context) ? $context["uniqueTeams"] : (function () { throw new RuntimeError('Variable "uniqueTeams" does not exist.', 557, $this->source); })()))) {
                // line 558
                yield "                            ";
                $context["uniqueTeams"] = Twig\Extension\CoreExtension::merge((isset($context["uniqueTeams"]) || array_key_exists("uniqueTeams", $context) ? $context["uniqueTeams"] : (function () { throw new RuntimeError('Variable "uniqueTeams" does not exist.', 558, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["session"], "teamId", [], "any", false, false, false, 558)]);
                // line 559
                yield "                        ";
            }
            // line 560
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['session'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 561
        yield "                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["uniqueTeams"]) || array_key_exists("uniqueTeams", $context) ? $context["uniqueTeams"] : (function () { throw new RuntimeError('Variable "uniqueTeams" does not exist.', 561, $this->source); })())), "html", null, true);
        yield "
                </div>
                <div class=\"stat-label\">Équipes</div>
            </div>
        </div>
        
        <div class=\"section-title\">
            <i class=\"fas fa-align-left\"></i>
            Description détaillée
        </div>
        
        <div class=\"description-content\">
            ";
        // line 573
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 573, $this->source); })()), "description", [], "any", false, false, false, 573), "html", null, true));
        yield "
        </div>
        
        <div class=\"info-grid\">
            <div class=\"info-card\">
                <div class=\"info-label\">
                    <i class=\"fas fa-bullseye\"></i>
                    Focus Principal
                </div>
                <div class=\"info-value\">";
        // line 582
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 582, $this->source); })()), "focusArea", [], "any", false, false, false, 582), "html", null, true);
        yield "</div>
                <div class=\"info-details\">Zone de compétence ciblée par ce plan d'entraînement</div>
            </div>
            
            <div class=\"info-card\">
                <div class=\"info-label\">
                    <i class=\"fas fa-chart-line\"></i>
                    Niveau de Difficulté
                </div>
                <div class=\"info-value\">";
        // line 591
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 591, $this->source); })()), "difficultyLevel", [], "any", false, false, false, 591), "html", null, true);
        yield "</div>
                <div class=\"info-details\">Adapté au niveau d'expérience de l'équipe</div>
            </div>
            
            <div class=\"info-card\">
                <div class=\"info-label\">
                    <i class=\"fas fa-user-tie\"></i>
                    Coach Responsable
                </div>
                <div class=\"info-value\">Coach #";
        // line 600
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 600, $this->source); })()), "coachId", [], "any", false, false, false, 600), "html", null, true);
        yield "</div>
                <div class=\"info-details\">Identifiant du coach supervisant ce plan</div>
            </div>
            
            <div class=\"info-card\">
                <div class=\"info-label\">
                    <i class=\"fas fa-calendar-alt\"></i>
                    Date de Création
                </div>
                <div class=\"info-value\">";
        // line 609
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 609, $this->source); })()), "createdAt", [], "any", false, false, false, 609), "d/m/Y"), "html", null, true);
        yield "</div>
                <div class=\"info-details\">À ";
        // line 610
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 610, $this->source); })()), "createdAt", [], "any", false, false, false, 610), "H:i"), "html", null, true);
        yield "</div>
            </div>
        </div>
        
        <div class=\"sessions-section\">
            <div class=\"section-title\">
                <i class=\"fas fa-video\"></i>
                Sessions associées
                <span style=\"margin-left: auto; font-size: 14px; color: var(--text-muted);\">
                    ";
        // line 619
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 619, $this->source); })()), "coachingSessions", [], "any", false, false, false, 619)), "html", null, true);
        yield " session(s)
                </span>
            </div>
            
            <div class=\"sessions-list\">
                ";
        // line 624
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 624, $this->source); })()), "coachingSessions", [], "any", false, false, false, 624)) > 0)) {
            // line 625
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 625, $this->source); })()), "coachingSessions", [], "any", false, false, false, 625));
            foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
                // line 626
                yield "                        <div class=\"session-item\">
                            <div class=\"session-info\">
                                <div class=\"session-date\">
                                    <i class=\"fas fa-calendar\"></i>
                                    ";
                // line 630
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "sessionDate", [], "any", false, false, false, 630), "d/m/Y H:i"), "html", null, true);
                yield "
                                </div>
                                <div class=\"session-duration\">
                                    <i class=\"fas fa-clock\"></i>
                                    ";
                // line 634
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "duration", [], "any", false, false, false, 634), "html", null, true);
                yield " min
                                </div>
                                <div class=\"session-team\">
                                    <i class=\"fas fa-users\"></i>
                                    Équipe #";
                // line 638
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "teamId", [], "any", false, false, false, 638), "html", null, true);
                yield "
                                </div>
                            </div>
                            <a href=\"";
                // line 641
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 641)]), "html", null, true);
                yield "\" 
                               class=\"btn-show\" style=\"padding: 8px 16px;\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['session'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 647
            yield "                ";
        } else {
            // line 648
            yield "                    <div class=\"no-sessions\">
                        <i class=\"fas fa-video-slash\"></i>
                        <h3>Aucune session associée</h3>
                        <p>Ce plan d'entraînement n'est pas encore utilisé dans une session de coaching.</p>
                    </div>
                ";
        }
        // line 654
        yield "            </div>
        </div>
        
        <div class=\"actions-bar\">
            <a href=\"";
        // line 658
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_index");
        yield "#training-plans\" class=\"btn-action btn-back\">
                <i class=\"fas fa-arrow-left\"></i>
                Retour à la liste
            </a>
            
            <a href=\"";
        // line 663
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 663, $this->source); })()), "id", [], "any", false, false, false, 663)]), "html", null, true);
        yield "\" class=\"btn-action btn-edit\">
                <i class=\"fas fa-edit\"></i>
                Modifier ce plan
            </a>
            
            <button type=\"button\" class=\"btn-action btn-delete\" onclick=\"confirmDelete()\">
                <i class=\"fas fa-trash\"></i>
                Supprimer
            </button>
        </div>
    </div>
</div>

<!-- Formulaire de suppression caché -->
<div id=\"delete-form\" style=\"display: none;\">
    ";
        // line 678
        yield Twig\Extension\CoreExtension::include($this->env, $context, "training_plan/_delete_form.html.twig");
        yield "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 682
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

        // line 683
        yield "<script>
function confirmDelete() {
    if (confirm('⚠️ ATTENTION : Êtes-vous sûr de vouloir supprimer ce plan d\\'entraînement ?\\n\\nCette action supprimera également toutes les sessions de coaching associées à ce plan.\\n\\nCette action est irréversible !')) {
        document.querySelector('#delete-form form').submit();
    }
}

// Animation d'entrée
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.info-card, .stat-card, .session-item');
    cards.forEach((card, index) => {
        setTimeout(() => {
            card.style.animation = `fadeIn 0.5s ease-out forwards`;
            card.style.opacity = '0';
        }, index * 100);
    });
});

// Effet de survol amélioré
document.querySelectorAll('.info-card, .stat-card').forEach(card => {
    card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-8px)';
    });
    
    card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0)';
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
        return "training_plan/show.html.twig";
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
        return array (  955 => 683,  942 => 682,  928 => 678,  910 => 663,  902 => 658,  896 => 654,  888 => 648,  885 => 647,  873 => 641,  867 => 638,  860 => 634,  853 => 630,  847 => 626,  842 => 625,  840 => 624,  832 => 619,  820 => 610,  816 => 609,  804 => 600,  792 => 591,  780 => 582,  768 => 573,  752 => 561,  746 => 560,  743 => 559,  740 => 558,  737 => 557,  732 => 556,  730 => 555,  723 => 550,  719 => 548,  713 => 546,  711 => 545,  701 => 539,  695 => 538,  692 => 537,  687 => 536,  685 => 535,  677 => 530,  666 => 522,  659 => 518,  652 => 514,  645 => 510,  638 => 506,  627 => 498,  620 => 494,  613 => 490,  606 => 486,  603 => 485,  590 => 484,  103 => 6,  90 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Phantom Force - {{ training_plan.title }}{% endblock %}

{% block inline_styles %}
<style>
/* ================= DETAIL PAGE STYLES ================= */
.detail-hero {
    text-align: center;
    padding: 60px 20px 30px;
    position: relative;
    margin-bottom: 40px;
    animation: fadeInUp 0.8s ease-out;
}

.detail-hero::after {
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

.detail-hero h1 {
    font-size: 42px;
    font-weight: 800;
    background: linear-gradient(90deg, #ff0000, #ff2d2d, #ff5e5e, #ff8a8a);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    margin-bottom: 10px;
    line-height: 1.1;
    text-shadow: 0 5px 15px rgba(255, 0, 0, 0.3);
    animation: textGlow 3s infinite alternate;
}

.detail-hero .plan-meta {
    color: var(--text-muted);
    font-size: 16px;
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
    margin-top: 15px;
}

.plan-meta-item {
    display: flex;
    align-items: center;
    gap: 8px;
}

.plan-meta-item i {
    color: var(--red);
}

/* ================= PLAN CARD ================= */
.plan-card-detail {
    max-width: 1000px;
    margin: 0 auto 40px;
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow-lg);
    animation: fadeIn 0.6s ease-out;
}

.plan-card-header {
    background: linear-gradient(135deg, rgba(255,0,0,0.15), rgba(255,45,45,0.1));
    padding: 30px 40px;
    border-bottom: 1px solid rgba(255, 45, 45, 0.2);
}

.plan-id {
    font-size: 14px;
    color: var(--red);
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 5px;
}

.plan-title-detail {
    font-size: 32px;
    font-weight: 700;
    color: var(--text-light);
    margin-bottom: 15px;
    line-height: 1.3;
}

.plan-tags {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.plan-tag {
    padding: 6px 15px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.tag-focus {
    background: rgba(52, 152, 219, 0.2);
    color: #3498db;
    border: 1px solid rgba(52, 152, 219, 0.3);
}

.tag-difficulty {
    background: rgba(46, 204, 113, 0.2);
    color: #2ecc71;
    border: 1px solid rgba(46, 204, 113, 0.3);
}

.tag-coach {
    background: rgba(155, 89, 182, 0.2);
    color: #9b59b6;
    border: 1px solid rgba(155, 89, 182, 0.3);
}

.tag-date {
    background: rgba(241, 196, 15, 0.2);
    color: #f1c40f;
    border: 1px solid rgba(241, 196, 15, 0.3);
}

/* ================= PLAN CONTENT ================= */
.plan-content {
    padding: 40px;
}

.section-title {
    font-size: 20px;
    font-weight: 700;
    color: var(--text-light);
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 2px solid rgba(255, 45, 45, 0.2);
    display: flex;
    align-items: center;
    gap: 10px;
}

.section-title i {
    color: var(--red);
    font-size: 18px;
}

.description-content {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: var(--radius);
    padding: 25px;
    margin-bottom: 30px;
    line-height: 1.8;
    color: var(--text-muted);
    font-size: 15px;
}

.description-content p {
    margin-bottom: 15px;
}

.description-content p:last-child {
    margin-bottom: 0;
}

/* ================= INFO GRID ================= */
.info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}

.info-card {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: var(--radius);
    padding: 25px;
    transition: var(--transition);
    position: relative;
    overflow: hidden;
}

.info-card:hover {
    border-color: var(--red);
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(255, 0, 0, 0.1);
}

.info-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(255,45,45,0.05), transparent);
    z-index: -1;
}

.info-label {
    font-size: 12px;
    color: var(--red);
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 600;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.info-value {
    font-size: 18px;
    font-weight: 600;
    color: var(--text-light);
    margin-bottom: 5px;
}

.info-details {
    font-size: 13px;
    color: var(--text-muted);
    line-height: 1.5;
}

/* ================= SESSIONS LIST ================= */
.sessions-section {
    margin-top: 40px;
}

.sessions-list {
    margin-top: 20px;
}

.session-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: var(--radius);
    margin-bottom: 10px;
    transition: var(--transition);
}

.session-item:hover {
    border-color: var(--red);
    background: rgba(255, 45, 45, 0.05);
}

.session-info {
    display: flex;
    align-items: center;
    gap: 20px;
}

.session-date {
    font-size: 14px;
    color: var(--text-light);
    font-weight: 600;
    min-width: 150px;
}

.session-duration {
    color: var(--green);
    font-weight: 600;
    font-size: 14px;
}

.session-team {
    color: var(--text-muted);
    font-size: 13px;
}

.no-sessions {
    text-align: center;
    padding: 40px 20px;
    background: rgba(255, 45, 45, 0.05);
    border: 2px dashed rgba(255, 45, 45, 0.3);
    border-radius: var(--radius);
}

.no-sessions i {
    font-size: 48px;
    color: rgba(255, 45, 45, 0.5);
    margin-bottom: 15px;
    display: block;
}

/* ================= ACTIONS BAR ================= */
.actions-bar {
    display: flex;
    gap: 15px;
    margin-top: 40px;
    padding-top: 30px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.btn-action {
    padding: 12px 24px;
    border-radius: 8px;
    font-weight: 600;
    font-size: 14px;
    text-decoration: none;
    transition: var(--transition);
    display: inline-flex;
    align-items: center;
    gap: 10px;
    border: none;
    cursor: pointer;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.btn-back {
    background: rgba(255, 255, 255, 0.05);
    color: var(--text-muted);
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.btn-back:hover {
    background: rgba(255, 255, 255, 0.1);
    color: var(--text-light);
    transform: translateY(-2px);
    border-color: rgba(255, 45, 45, 0.3);
}

.btn-edit {
    background: rgba(255, 45, 45, 0.1);
    color: var(--red);
    border: 1px solid rgba(255, 45, 45, 0.3);
    flex: 1;
    justify-content: center;
}

.btn-edit:hover {
    background: rgba(255, 45, 45, 0.2);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255, 45, 45, 0.2);
}

.btn-delete {
    background: rgba(231, 76, 60, 0.1);
    color: #e74c3c;
    border: 1px solid rgba(231, 76, 60, 0.3);
}

.btn-delete:hover {
    background: rgba(231, 76, 60, 0.2);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(231, 76, 60, 0.2);
}

/* ================= STATS BAR ================= */
.stats-bar-detail {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin: 30px 0;
}

.stat-card {
    background: rgba(255, 45, 45, 0.05);
    border: 1px solid rgba(255, 45, 45, 0.1);
    border-radius: var(--radius);
    padding: 20px;
    text-align: center;
    transition: var(--transition);
}

.stat-card:hover {
    border-color: var(--red);
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(255, 0, 0, 0.1);
}

.stat-value {
    font-size: 32px;
    font-weight: 800;
    background: linear-gradient(90deg, #ff2d2d, #ff5e5e);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    margin-bottom: 5px;
    animation: pulse 2s infinite;
}

.stat-label {
    font-size: 12px;
    color: var(--text-muted);
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 768px) {
    .detail-hero {
        padding: 40px 20px 20px;
    }
    
    .detail-hero h1 {
        font-size: 32px;
    }
    
    .plan-card-header,
    .plan-content {
        padding: 25px;
    }
    
    .plan-title-detail {
        font-size: 24px;
    }
    
    .info-grid {
        grid-template-columns: 1fr;
    }
    
    .stats-bar-detail {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .actions-bar {
        flex-direction: column;
    }
    
    .btn-action {
        width: 100%;
        justify-content: center;
    }
    
    .session-item {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
    }
    
    .session-info {
        width: 100%;
        justify-content: space-between;
    }
}

/* ================= ANIMATIONS ================= */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(40px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes widthGrow {
    from { width: 0; }
    to { width: 150px; }
}

@keyframes textGlow {
    0% { text-shadow: 0 5px 15px rgba(255, 0, 0, 0.3); }
    100% { text-shadow: 0 5px 25px rgba(255, 0, 0, 0.6); }
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}
</style>
{% endblock %}

{% block body %}
<div class=\"detail-hero\">
    <h1>📋 {{ training_plan.title }}</h1>
    <div class=\"plan-meta\">
        <div class=\"plan-meta-item\">
            <i class=\"fas fa-hashtag\"></i>
            <span>Plan #{{ training_plan.id }}</span>
        </div>
        <div class=\"plan-meta-item\">
            <i class=\"fas fa-calendar-alt\"></i>
            <span>Créé le {{ training_plan.createdAt|date('d/m/Y') }}</span>
        </div>
        <div class=\"plan-meta-item\">
            <i class=\"fas fa-user-tie\"></i>
            <span>Coach #{{ training_plan.coachId }}</span>
        </div>
    </div>
</div>

<div class=\"plan-card-detail\">
    <div class=\"plan-card-header\">
        <div class=\"plan-id\">PLAN D'ENTRAÎNEMENT</div>
        <h2 class=\"plan-title-detail\">{{ training_plan.title }}</h2>
        <div class=\"plan-tags\">
            <span class=\"plan-tag tag-focus\">
                <i class=\"fas fa-bullseye\"></i>
                {{ training_plan.focusArea }}
            </span>
            <span class=\"plan-tag tag-difficulty\">
                <i class=\"fas fa-chart-line\"></i>
                {{ training_plan.difficultyLevel }}
            </span>
            <span class=\"plan-tag tag-coach\">
                <i class=\"fas fa-user-tie\"></i>
                Coach #{{ training_plan.coachId }}
            </span>
            <span class=\"plan-tag tag-date\">
                <i class=\"fas fa-clock\"></i>
                {{ training_plan.createdAt|date('d/m/Y') }}
            </span>
        </div>
    </div>
    
    <div class=\"plan-content\">
        <div class=\"stats-bar-detail\">
            <div class=\"stat-card\">
                <div class=\"stat-value\">{{ training_plan.coachingSessions|length }}</div>
                <div class=\"stat-label\">Sessions</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-value\">
                    {% set totalDuration = 0 %}
                    {% for session in training_plan.coachingSessions %}
                        {% set totalDuration = totalDuration + session.duration %}
                    {% endfor %}
                    {{ totalDuration }}
                </div>
                <div class=\"stat-label\">Minutes totales</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-value\">
                    {% if training_plan.coachingSessions|length > 0 %}
                        {{ (totalDuration / training_plan.coachingSessions|length)|round }}
                    {% else %}
                        0
                    {% endif %}
                </div>
                <div class=\"stat-label\">Moy. par session</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-value\">
                    {% set uniqueTeams = [] %}
                    {% for session in training_plan.coachingSessions %}
                        {% if session.teamId not in uniqueTeams %}
                            {% set uniqueTeams = uniqueTeams|merge([session.teamId]) %}
                        {% endif %}
                    {% endfor %}
                    {{ uniqueTeams|length }}
                </div>
                <div class=\"stat-label\">Équipes</div>
            </div>
        </div>
        
        <div class=\"section-title\">
            <i class=\"fas fa-align-left\"></i>
            Description détaillée
        </div>
        
        <div class=\"description-content\">
            {{ training_plan.description|nl2br }}
        </div>
        
        <div class=\"info-grid\">
            <div class=\"info-card\">
                <div class=\"info-label\">
                    <i class=\"fas fa-bullseye\"></i>
                    Focus Principal
                </div>
                <div class=\"info-value\">{{ training_plan.focusArea }}</div>
                <div class=\"info-details\">Zone de compétence ciblée par ce plan d'entraînement</div>
            </div>
            
            <div class=\"info-card\">
                <div class=\"info-label\">
                    <i class=\"fas fa-chart-line\"></i>
                    Niveau de Difficulté
                </div>
                <div class=\"info-value\">{{ training_plan.difficultyLevel }}</div>
                <div class=\"info-details\">Adapté au niveau d'expérience de l'équipe</div>
            </div>
            
            <div class=\"info-card\">
                <div class=\"info-label\">
                    <i class=\"fas fa-user-tie\"></i>
                    Coach Responsable
                </div>
                <div class=\"info-value\">Coach #{{ training_plan.coachId }}</div>
                <div class=\"info-details\">Identifiant du coach supervisant ce plan</div>
            </div>
            
            <div class=\"info-card\">
                <div class=\"info-label\">
                    <i class=\"fas fa-calendar-alt\"></i>
                    Date de Création
                </div>
                <div class=\"info-value\">{{ training_plan.createdAt|date('d/m/Y') }}</div>
                <div class=\"info-details\">À {{ training_plan.createdAt|date('H:i') }}</div>
            </div>
        </div>
        
        <div class=\"sessions-section\">
            <div class=\"section-title\">
                <i class=\"fas fa-video\"></i>
                Sessions associées
                <span style=\"margin-left: auto; font-size: 14px; color: var(--text-muted);\">
                    {{ training_plan.coachingSessions|length }} session(s)
                </span>
            </div>
            
            <div class=\"sessions-list\">
                {% if training_plan.coachingSessions|length > 0 %}
                    {% for session in training_plan.coachingSessions %}
                        <div class=\"session-item\">
                            <div class=\"session-info\">
                                <div class=\"session-date\">
                                    <i class=\"fas fa-calendar\"></i>
                                    {{ session.sessionDate|date('d/m/Y H:i') }}
                                </div>
                                <div class=\"session-duration\">
                                    <i class=\"fas fa-clock\"></i>
                                    {{ session.duration }} min
                                </div>
                                <div class=\"session-team\">
                                    <i class=\"fas fa-users\"></i>
                                    Équipe #{{ session.teamId }}
                                </div>
                            </div>
                            <a href=\"{{ path('app_coaching_session_show', {'id': session.id}) }}\" 
                               class=\"btn-show\" style=\"padding: 8px 16px;\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                        </div>
                    {% endfor %}
                {% else %}
                    <div class=\"no-sessions\">
                        <i class=\"fas fa-video-slash\"></i>
                        <h3>Aucune session associée</h3>
                        <p>Ce plan d'entraînement n'est pas encore utilisé dans une session de coaching.</p>
                    </div>
                {% endif %}
            </div>
        </div>
        
        <div class=\"actions-bar\">
            <a href=\"{{ path('app_coaching_session_index') }}#training-plans\" class=\"btn-action btn-back\">
                <i class=\"fas fa-arrow-left\"></i>
                Retour à la liste
            </a>
            
            <a href=\"{{ path('app_training_plan_edit', {'id': training_plan.id}) }}\" class=\"btn-action btn-edit\">
                <i class=\"fas fa-edit\"></i>
                Modifier ce plan
            </a>
            
            <button type=\"button\" class=\"btn-action btn-delete\" onclick=\"confirmDelete()\">
                <i class=\"fas fa-trash\"></i>
                Supprimer
            </button>
        </div>
    </div>
</div>

<!-- Formulaire de suppression caché -->
<div id=\"delete-form\" style=\"display: none;\">
    {{ include('training_plan/_delete_form.html.twig') }}
</div>
{% endblock %}

{% block javascripts %}
<script>
function confirmDelete() {
    if (confirm('⚠️ ATTENTION : Êtes-vous sûr de vouloir supprimer ce plan d\\'entraînement ?\\n\\nCette action supprimera également toutes les sessions de coaching associées à ce plan.\\n\\nCette action est irréversible !')) {
        document.querySelector('#delete-form form').submit();
    }
}

// Animation d'entrée
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.info-card, .stat-card, .session-item');
    cards.forEach((card, index) => {
        setTimeout(() => {
            card.style.animation = `fadeIn 0.5s ease-out forwards`;
            card.style.opacity = '0';
        }, index * 100);
    });
});

// Effet de survol amélioré
document.querySelectorAll('.info-card, .stat-card').forEach(card => {
    card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-8px)';
    });
    
    card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0)';
    });
});
</script>
{% endblock %}", "training_plan/show.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\training_plan\\show.html.twig");
    }
}
