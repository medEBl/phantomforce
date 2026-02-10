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

/* training_plan/new.html.twig */
class __TwigTemplate_1c53c55eb680f553ae93ddf1c10b731c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "training_plan/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "training_plan/new.html.twig"));

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

        yield "Phantom Force - Nouveau Plan d'Entraînement";
        
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
/* ================= CREATE PAGE STYLES ================= */
.create-hero {
    text-align: center;
    padding: 80px 20px 40px;
    position: relative;
    margin-bottom: 40px;
    animation: fadeInUp 0.8s ease-out;
}

.create-hero::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 120px;
    height: 4px;
    background: linear-gradient(90deg, #ff0000, #ff2d2d, #ff5e5e);
    border-radius: 2px;
    animation: widthGrow 1.2s ease-out;
}

.create-hero h1 {
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

.create-hero p {
    color: var(--text-muted);
    font-size: 20px;
    max-width: 700px;
    margin: 0 auto 20px;
    line-height: 1.6;
}

/* ================= FORM CONTAINER ================= */
.form-container {
    max-width: 800px;
    margin: 0 auto 60px;
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    padding: 50px;
    box-shadow: var(--shadow-lg);
    animation: fadeIn 0.6s ease-out;
    position: relative;
    overflow: hidden;
}

.form-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg, #ff0000, #ff2d2d, #ff5e5e);
    animation: borderFlow 3s linear infinite;
}

@keyframes borderFlow {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

/* ================= FORM HEADER ================= */
.form-header {
    text-align: center;
    margin-bottom: 50px;
    position: relative;
}

.form-header h2 {
    font-size: 32px;
    color: var(--text-light);
    margin-bottom: 15px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.form-header p {
    color: var(--text-muted);
    font-size: 16px;
    max-width: 700px;
    margin: 0 auto;
}

.form-header::after {
    content: '';
    position: absolute;
    bottom: -25px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, #ff2d2d, #ff5e5e, #ff2d2d);
    border-radius: 2px;
    animation: widthGrow 1s ease-out;
}

/* ================= CREATION GUIDE ================= */
.creation-guide {
    background: rgba(255, 45, 45, 0.08);
    border: 1px solid rgba(255, 45, 45, 0.3);
    border-radius: var(--radius-lg);
    padding: 30px;
    margin-bottom: 40px;
    animation: fadeInUp 0.8s ease-out 0.3s backwards;
}

.creation-guide h3 {
    font-size: 20px;
    color: var(--red);
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 12px;
}

.creation-guide h3::before {
    content: '🔥';
    font-size: 24px;
}

.guide-list {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
}

@media (max-width: 768px) {
    .guide-list {
        grid-template-columns: 1fr;
    }
}

.guide-item {
    display: flex;
    align-items: flex-start;
    gap: 12px;
}

.guide-icon {
    width: 32px;
    height: 32px;
    background: rgba(255, 45, 45, 0.2);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--red);
    font-size: 16px;
    flex-shrink: 0;
}

.guide-content h4 {
    font-size: 14px;
    color: var(--text-light);
    margin-bottom: 5px;
    font-weight: 600;
}

.guide-content p {
    font-size: 13px;
    color: var(--text-muted);
    line-height: 1.5;
}

/* ================= FORM STYLES ================= */
.form-group {
    margin-bottom: 35px;
    position: relative;
    animation: fadeInUp 0.5s ease-out backwards;
}

.form-group:nth-child(1) { animation-delay: 0.1s; }
.form-group:nth-child(2) { animation-delay: 0.2s; }
.form-group:nth-child(3) { animation-delay: 0.3s; }
.form-group:nth-child(4) { animation-delay: 0.4s; }
.form-group:nth-child(5) { animation-delay: 0.5s; }
.form-group:nth-child(6) { animation-delay: 0.6s; }

.form-label {
    display: block;
    margin-bottom: 12px;
    font-weight: 700;
    color: var(--text-light);
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1px;
    position: relative;
    padding-left: 20px;
}

.form-label::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 10px;
    height: 10px;
    background: linear-gradient(135deg, #ff2d2d, #ff0000);
    border-radius: 2px;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0%, 100% { transform: translateY(-50%) scale(1); }
    50% { transform: translateY(-50%) scale(1.1); }
}

.form-control {
    width: 100%;
    padding: 18px 25px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: var(--radius);
    color: var(--text-light);
    font-size: 16px;
    font-family: 'Inter', sans-serif;
    transition: var(--transition);
    backdrop-filter: blur(10px);
}

.form-control:focus {
    outline: none;
    border-color: var(--red);
    box-shadow: 0 0 0 3px rgba(255, 45, 45, 0.3);
    background: rgba(255, 45, 45, 0.08);
    transform: translateY(-2px);
}

.form-control::placeholder {
    color: rgba(255, 255, 255, 0.3);
    font-style: italic;
}

select.form-control {
    appearance: none;
    background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23ff2d2d' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E\");
    background-repeat: no-repeat;
    background-position: right 25px center;
    background-size: 16px;
    padding-right: 60px;
    cursor: pointer;
}

select.form-control option {
    background: var(--bg-card);
    color: var(--text-light);
    padding: 10px;
}

.form-group input[type=\"date\"] {
    color-scheme: dark;
}

.form-group input[type=\"date\"]::-webkit-calendar-picker-indicator {
    filter: invert(1);
    opacity: 0.6;
    cursor: pointer;
    width: 24px;
    height: 24px;
}

.form-group input[type=\"date\"]::-webkit-calendar-picker-indicator:hover {
    opacity: 1;
}

textarea.form-control {
    min-height: 180px;
    resize: vertical;
    line-height: 1.6;
    padding: 20px 25px;
}

/* ================= FORM ROW ================= */
.form-row {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 35px;
}

@media (max-width: 768px) {
    .form-row {
        grid-template-columns: 1fr;
    }
}

/* ================= FORM VALIDATION ================= */
.form-error {
    color: var(--red);
    font-size: 14px;
    margin-top: 10px;
    display: flex;
    align-items: center;
    gap: 10px;
    animation: shake 0.5s ease-in-out;
    font-weight: 600;
}

@keyframes shake {
    0%, 100% { transform: translateX(0); }
    25% { transform: translateX(-8px); }
    75% { transform: translateX(8px); }
}

.form-error::before {
    content: '⚡';
    font-size: 16px;
    animation: blink 1s infinite;
}

@keyframes blink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.3; }
}

.form-control.error {
    border-color: var(--red);
    box-shadow: 0 0 0 3px rgba(255, 45, 45, 0.3);
    background: rgba(255, 45, 45, 0.1);
}

.validation-summary {
    background: rgba(231, 76, 60, 0.1);
    border: 1px solid rgba(231, 76, 60, 0.3);
    border-radius: var(--radius);
    padding: 20px;
    margin-bottom: 30px;
    animation: fadeIn 0.5s ease-out;
}

.validation-summary h4 {
    color: #e74c3c;
    font-size: 16px;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.validation-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.validation-list li {
    color: var(--text-light);
    font-size: 13px;
    padding: 5px 0;
    display: flex;
    align-items: center;
    gap: 8px;
}

.validation-list li::before {
    content: '⚠️';
    font-size: 12px;
}

/* ================= FORM HELP TEXT ================= */
.form-help {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-top: 8px;
    color: var(--text-muted);
    font-size: 13px;
}

.form-help i {
    color: var(--red);
    font-size: 12px;
}

/* ================= CHARACTER COUNTER ================= */
.char-counter {
    text-align: right;
    font-size: 13px;
    color: var(--text-muted);
    margin-top: 8px;
    font-weight: 600;
}

.char-counter.warning {
    color: #ff8a2d;
    animation: pulse 1.5s infinite;
}

.char-counter.danger {
    color: var(--red);
    font-weight: 800;
    animation: pulse 0.8s infinite;
}

/* ================= FORM ACTIONS ================= */
.form-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 60px;
    padding-top: 40px;
    border-top: 1px solid rgba(255, 45, 45, 0.2);
}

.btn-back {
    padding: 15px 30px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid var(--border-light);
    border-radius: 10px;
    color: var(--text-muted);
    text-decoration: none;
    font-weight: 700;
    font-size: 14px;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    transition: var(--transition);
    text-transform: uppercase;
    letter-spacing: 1px;
}

.btn-back:hover {
    background: rgba(255, 255, 255, 0.1);
    color: var(--text-light);
    transform: translateX(-5px);
    border-color: var(--red);
}

.btn-back::before {
    content: '←';
    font-size: 18px;
    font-weight: 800;
}

.btn-create {
    padding: 18px 40px;
    background: linear-gradient(135deg, #ff0000, #ff2d2d, #ff5e5e);
    border: none;
    border-radius: 12px;
    color: white;
    font-weight: 800;
    font-size: 16px;
    cursor: pointer;
    transition: var(--transition);
    display: inline-flex;
    align-items: center;
    gap: 12px;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 10px 20px rgba(255, 0, 0, 0.2);
}

.btn-create::before {
    content: '🚀';
    font-size: 18px;
}

.btn-create::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.2);
    transform: translate(-50%, -50%);
    transition: width 0.8s, height 0.8s;
}

.btn-create:hover::after {
    width: 400px;
    height: 400px;
}

.btn-create:hover {
    transform: translateY(-4px) scale(1.05);
    box-shadow: 0 15px 30px rgba(255, 0, 0, 0.4);
    background: linear-gradient(135deg, #ff2d2d, #ff0000, #ff2d2d);
    animation: btnPulse 1s infinite alternate;
}

@keyframes btnPulse {
    0% { box-shadow: 0 15px 30px rgba(255, 0, 0, 0.4); }
    100% { box-shadow: 0 15px 40px rgba(255, 0, 0, 0.6); }
}

/* ================= LOADING OVERLAY ================= */
.loading-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(10, 10, 15, 0.95);
    backdrop-filter: blur(10px);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 25px;
    opacity: 0;
    visibility: hidden;
    transition: var(--transition);
}

.loading-overlay.active {
    opacity: 1;
    visibility: visible;
}

.loading-spinner {
    width: 80px;
    height: 80px;
    border: 4px solid rgba(255, 45, 45, 0.2);
    border-top-color: var(--red);
    border-radius: 50%;
    animation: spin 1.2s linear infinite;
}

@keyframes spin {
    to { transform: rotate(360deg); }
}

.loading-text {
    color: var(--text-light);
    font-size: 18px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    background: linear-gradient(90deg, #ff2d2d, #ff5e5e, #ff2d2d);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    background-size: 200% auto;
    animation: loadingText 2s infinite linear;
}

@keyframes loadingText {
    0% { background-position: 0% center; }
    100% { background-position: 200% center; }
}

/* ================= SUCCESS MESSAGE ================= */
.success-message {
    position: fixed;
    top: 30px;
    right: 30px;
    background: linear-gradient(135deg, var(--green), #2dff8b);
    color: #000;
    padding: 20px 30px;
    border-radius: var(--radius);
    box-shadow: var(--shadow-lg);
    display: flex;
    align-items: center;
    gap: 15px;
    z-index: 10000;
    transform: translateX(120%);
    transition: transform 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    font-weight: 700;
}

.success-message.active {
    transform: translateX(0);
}

.success-message::before {
    content: '✅';
    font-size: 24px;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 768px) {
    .create-hero h1 {
        font-size: 40px;
    }
    
    .form-container {
        padding: 30px 20px;
        margin: 0 15px 40px;
    }
    
    .form-actions {
        flex-direction: column;
        gap: 20px;
    }
    
    .btn-back, .btn-create {
        width: 100%;
        justify-content: center;
    }
    
    .form-header h2 {
        font-size: 26px;
    }
}

/* ================= SPECIAL EFFECTS ================= */
.sparkle {
    position: absolute;
    width: 4px;
    height: 4px;
    background: var(--red);
    border-radius: 50%;
    pointer-events: none;
    opacity: 0;
    animation: sparkle 1s ease-out;
}

@keyframes sparkle {
    0% { opacity: 0; transform: scale(0); }
    50% { opacity: 1; transform: scale(1); }
    100% { opacity: 0; transform: scale(0); }
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 641
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

        // line 642
        yield "<div class=\"create-hero\">
    <h1>🚀 NOUVEAU PLAN D'ENTRAÎNEMENT</h1>
    <p>Créez un plan d'entraînement personnalisé pour optimiser les performances de votre équipe esport.</p>
</div>

<div class=\"creation-guide\">
    <h3>Guide de création Phantom Force</h3>
    <div class=\"guide-list\">
        <div class=\"guide-item\">
            <div class=\"guide-icon\">🎯</div>
            <div class=\"guide-content\">
                <h4>Objectifs stratégiques</h4>
                <p>Définissez des objectifs clairs et mesurables pour chaque session</p>
            </div>
        </div>
        <div class=\"guide-item\">
            <div class=\"guide-icon\">⚡</div>
            <div class=\"guide-content\">
                <h4>Intensité progressive</h4>
                <p>Augmentez la difficulté progressivement pour des résultats optimaux</p>
            </div>
        </div>
        <div class=\"guide-item\">
            <div class=\"guide-icon\">📊</div>
            <div class=\"guide-content\">
                <h4>Analyse détaillée</h4>
                <p>Documentez chaque aspect pour des ajustements futurs</p>
            </div>
        </div>
        <div class=\"guide-item\">
            <div class=\"guide-icon\">🏆</div>
            <div class=\"guide-content\">
                <h4>Performance maximale</h4>
                <p>Concevez des sessions qui poussent les limites de l'équipe</p>
            </div>
        </div>
    </div>
</div>

<div class=\"form-container\">
    <div class=\"form-header\">
        <h2>CRÉATION DE PLAN D'ENTRAÎNEMENT</h2>
        <p>Remplissez tous les champs requis pour créer un plan d'entraînement efficace</p>
    </div>

    ";
        // line 687
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 687, $this->source); })()), 'form_start', ["attr" => ["class" => "training-form", "id" => "createForm"]]);
        yield "
    
    <!-- Affichage des erreurs globales -->
    ";
        // line 690
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 690, $this->source); })()), "vars", [], "any", false, false, false, 690), "valid", [], "any", false, false, false, 690)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 691
            yield "        <div class=\"validation-summary\">
            <h4><i class=\"fas fa-exclamation-circle\"></i> Des erreurs ont été détectées :</h4>
            <ul class=\"validation-list\">
                ";
            // line 694
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 694, $this->source); })()), "vars", [], "any", false, false, false, 694), "errors", [], "any", false, false, false, 694));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 695
                yield "                    <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 695), "html", null, true);
                yield "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 697
            yield "            </ul>
        </div>
    ";
        }
        // line 700
        yield "    
    <div class=\"form-row\">
        <div class=\"form-group ";
        // line 702
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 702, $this->source); })()), "title", [], "any", false, false, false, 702), "vars", [], "any", false, false, false, 702), "valid", [], "any", false, false, false, 702)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "has-error";
        }
        yield "\">
            ";
        // line 703
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 703, $this->source); })()), "title", [], "any", false, false, false, 703), 'label', ["label" => "Titre du plan"]);
        yield "
            ";
        // line 704
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 704, $this->source); })()), "title", [], "any", false, false, false, 704), 'widget', ["attr" => ["placeholder" => "Ex: Stratégie défensive avancée - Saison 2024", "class" => "form-control", "minlength" => "5", "maxlength" => "255", "autofocus" => "autofocus"]]);
        // line 710
        yield "
            <div class=\"form-help\">
                <i class=\"fas fa-info-circle\"></i>
                <span>Un titre clair et descriptif pour votre plan (5-255 caractères)</span>
            </div>
            ";
        // line 715
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 715, $this->source); })()), "title", [], "any", false, false, false, 715), "vars", [], "any", false, false, false, 715), "errors", [], "any", false, false, false, 715)) > 0)) {
            // line 716
            yield "                <div class=\"form-error\">
                    <i class=\"fas fa-exclamation-circle\"></i>
                    ";
            // line 718
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 718, $this->source); })()), "title", [], "any", false, false, false, 718), 'errors');
            yield "
                </div>
            ";
        }
        // line 721
        yield "        </div>
        
        <div class=\"form-group ";
        // line 723
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 723, $this->source); })()), "focus_area", [], "any", false, false, false, 723), "vars", [], "any", false, false, false, 723), "valid", [], "any", false, false, false, 723)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "has-error";
        }
        yield "\">
            ";
        // line 724
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 724, $this->source); })()), "focus_area", [], "any", false, false, false, 724), 'label', ["label" => "Zone de focus principale"]);
        yield "
            ";
        // line 725
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 725, $this->source); })()), "focus_area", [], "any", false, false, false, 725), 'widget', ["attr" => ["placeholder" => "Ex: Défense, Attaque, Stratégie, Communication", "class" => "form-control"]]);
        // line 728
        yield "
            <div class=\"form-help\">
                <i class=\"fas fa-bullseye\"></i>
                <span>La compétence principale que ce plan vise à améliorer</span>
            </div>
            ";
        // line 733
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 733, $this->source); })()), "focus_area", [], "any", false, false, false, 733), "vars", [], "any", false, false, false, 733), "errors", [], "any", false, false, false, 733)) > 0)) {
            // line 734
            yield "                <div class=\"form-error\">
                    <i class=\"fas fa-exclamation-circle\"></i>
                    ";
            // line 736
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 736, $this->source); })()), "focus_area", [], "any", false, false, false, 736), 'errors');
            yield "
                </div>
            ";
        }
        // line 739
        yield "        </div>
    </div>
    
    <div class=\"form-row\">
        <div class=\"form-group ";
        // line 743
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 743, $this->source); })()), "difficulty_level", [], "any", false, false, false, 743), "vars", [], "any", false, false, false, 743), "valid", [], "any", false, false, false, 743)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "has-error";
        }
        yield "\">
            ";
        // line 744
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 744, $this->source); })()), "difficulty_level", [], "any", false, false, false, 744), 'label', ["label" => "Niveau de difficulté"]);
        yield "
            ";
        // line 745
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 745, $this->source); })()), "difficulty_level", [], "any", false, false, false, 745), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 747
        yield "
            <div class=\"form-help\">
                <i class=\"fas fa-chart-line\"></i>
                <span>Sélectionnez le niveau adapté à votre équipe</span>
            </div>
            ";
        // line 752
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 752, $this->source); })()), "difficulty_level", [], "any", false, false, false, 752), "vars", [], "any", false, false, false, 752), "errors", [], "any", false, false, false, 752)) > 0)) {
            // line 753
            yield "                <div class=\"form-error\">
                    <i class=\"fas fa-exclamation-circle\"></i>
                    ";
            // line 755
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 755, $this->source); })()), "difficulty_level", [], "any", false, false, false, 755), 'errors');
            yield "
                </div>
            ";
        }
        // line 758
        yield "        </div>
        
        <div class=\"form-group ";
        // line 760
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 760, $this->source); })()), "coach_id", [], "any", false, false, false, 760), "vars", [], "any", false, false, false, 760), "valid", [], "any", false, false, false, 760)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "has-error";
        }
        yield "\">
            ";
        // line 761
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 761, $this->source); })()), "coach_id", [], "any", false, false, false, 761), 'label', ["label" => "Coach responsable"]);
        yield "
            ";
        // line 762
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 762, $this->source); })()), "coach_id", [], "any", false, false, false, 762), 'widget', ["attr" => ["placeholder" => "Ex: 1 (ID du coach)", "class" => "form-control", "min" => "1", "max" => "999", "type" => "number"]]);
        // line 768
        yield "
            <div class=\"form-help\">
                <i class=\"fas fa-user-tie\"></i>
                <span>L'identifiant du coach qui supervisera ce plan (1-999)</span>
            </div>
            ";
        // line 773
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 773, $this->source); })()), "coach_id", [], "any", false, false, false, 773), "vars", [], "any", false, false, false, 773), "errors", [], "any", false, false, false, 773)) > 0)) {
            // line 774
            yield "                <div class=\"form-error\">
                    <i class=\"fas fa-exclamation-circle\"></i>
                    ";
            // line 776
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 776, $this->source); })()), "coach_id", [], "any", false, false, false, 776), 'errors');
            yield "
                </div>
            ";
        }
        // line 779
        yield "        </div>
    </div>
    
    <div class=\"form-group ";
        // line 782
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 782, $this->source); })()), "description", [], "any", false, false, false, 782), "vars", [], "any", false, false, false, 782), "valid", [], "any", false, false, false, 782)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "has-error";
        }
        yield "\">
        ";
        // line 783
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 783, $this->source); })()), "description", [], "any", false, false, false, 783), 'label', ["label" => "Description détaillée"]);
        yield "
        ";
        // line 784
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 784, $this->source); })()), "description", [], "any", false, false, false, 784), 'widget', ["attr" => ["placeholder" => "Décrivez en détail les objectifs, exercices, stratégies, durée estimée, prérequis et résultats attendus de ce plan d'entraînement...", "class" => "form-control", "rows" => "8", "minlength" => "20", "maxlength" => "2000"]]);
        // line 790
        yield "
        <div class=\"form-help\">
            <i class=\"fas fa-align-left\"></i>
            <span>Incluez tous les détails pour une mise en œuvre réussie (20-2000 caractères)</span>
        </div>
        <div class=\"char-counter\" id=\"descriptionCounter\">
            <span id=\"descriptionCount\">0</span> / 2000 caractères
        </div>
        ";
        // line 798
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 798, $this->source); })()), "description", [], "any", false, false, false, 798), "vars", [], "any", false, false, false, 798), "errors", [], "any", false, false, false, 798)) > 0)) {
            // line 799
            yield "            <div class=\"form-error\">
                <i class=\"fas fa-exclamation-circle\"></i>
                ";
            // line 801
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 801, $this->source); })()), "description", [], "any", false, false, false, 801), 'errors');
            yield "
            </div>
        ";
        }
        // line 804
        yield "    </div>
    
    <div class=\"form-group optional ";
        // line 806
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 806, $this->source); })()), "created_at", [], "any", false, false, false, 806), "vars", [], "any", false, false, false, 806), "valid", [], "any", false, false, false, 806)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "has-error";
        }
        yield "\">
        ";
        // line 807
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 807, $this->source); })()), "created_at", [], "any", false, false, false, 807), 'label', ["label" => "Date de création (optionnel)"]);
        yield "
        ";
        // line 808
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 808, $this->source); })()), "created_at", [], "any", false, false, false, 808), 'widget', ["attr" => ["class" => "form-control", "max" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d")]]);
        // line 811
        yield "
        <div class=\"form-help\">
            <i class=\"fas fa-calendar-alt\"></i>
            <span>La date sera automatiquement définie à aujourd'hui si vide</span>
        </div>
        ";
        // line 816
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 816, $this->source); })()), "created_at", [], "any", false, false, false, 816), "vars", [], "any", false, false, false, 816), "errors", [], "any", false, false, false, 816)) > 0)) {
            // line 817
            yield "            <div class=\"form-error\">
                <i class=\"fas fa-exclamation-circle\"></i>
                ";
            // line 819
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 819, $this->source); })()), "created_at", [], "any", false, false, false, 819), 'errors');
            yield "
            </div>
        ";
        }
        // line 822
        yield "    </div>
    
    <div class=\"form-actions\">
        <a href=\"";
        // line 825
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_index");
        yield "#training-plans\" class=\"btn-back\">
            Annuler & Retour
        </a>
        
        <button type=\"submit\" class=\"btn-create\" id=\"createButton\">
            Créer le plan d'entraînement
        </button>
    </div>
    
    ";
        // line 834
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 834, $this->source); })()), 'form_end');
        yield "
</div>

<div class=\"loading-overlay\" id=\"loadingOverlay\">
    <div class=\"loading-spinner\"></div>
    <div class=\"loading-text\">CRÉATION</div>
</div>

<div class=\"success-message\" id=\"successMessage\">
    ✅ Plan créé avec succès !
</div>

";
        // line 846
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

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

        // line 847
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('createForm');
    const createButton = document.getElementById('createButton');
    const loadingOverlay = document.getElementById('loadingOverlay');
    const successMessage = document.getElementById('successMessage');
    const descriptionTextarea = document.querySelector('#training_plan_description');
    const descriptionCounter = document.getElementById('descriptionCounter');
    const descriptionCount = document.getElementById('descriptionCount');
    
    // Initialize description counter
    if (descriptionTextarea && descriptionCounter && descriptionCount) {
        function updateCounter() {
            const length = descriptionTextarea.value.length;
            descriptionCount.textContent = length;
            
            descriptionCounter.classList.remove('warning', 'danger');
            
            if (length > 1500) {
                descriptionCounter.classList.add('warning');
            }
            
            if (length > 1800) {
                descriptionCounter.classList.add('danger');
            }
        }
        
        descriptionTextarea.addEventListener('input', updateCounter);
        updateCounter(); // Initial count
    }
    
    // Form validation and submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Basic validation
        let isValid = true;
        const requiredInputs = form.querySelectorAll('.form-control[required]');
        
        requiredInputs.forEach(input => {
            if (!input.value.trim()) {
                input.classList.add('error');
                isValid = false;
                
                const errorDiv = document.createElement('div');
                errorDiv.className = 'form-error';
                errorDiv.textContent = 'Ce champ est obligatoire';
                
                if (!input.nextElementSibling || !input.nextElementSibling.classList.contains('form-error')) {
                    input.parentNode.insertBefore(errorDiv, input.nextSibling);
                }
            } else {
                input.classList.remove('error');
                const error = input.nextElementSibling;
                if (error && error.classList.contains('form-error')) {
                    error.remove();
                }
            }
        });
        
        // Validate text lengths
        const titleInput = document.querySelector('#training_plan_title');
        if (titleInput && titleInput.value) {
            const length = titleInput.value.length;
            if (length < 5 || length > 255) {
                titleInput.classList.add('error');
                isValid = false;
                
                const errorDiv = document.createElement('div');
                errorDiv.className = 'form-error';
                errorDiv.textContent = 'Le titre doit contenir entre 5 et 255 caractères';
                
                if (!titleInput.nextElementSibling || !titleInput.nextElementSibling.classList.contains('form-error')) {
                    titleInput.parentNode.insertBefore(errorDiv, titleInput.nextSibling);
                }
            }
        }
        
        if (descriptionTextarea && descriptionTextarea.value) {
            const length = descriptionTextarea.value.length;
            if (length < 20 || length > 2000) {
                descriptionTextarea.classList.add('error');
                isValid = false;
                
                const errorDiv = document.createElement('div');
                errorDiv.className = 'form-error';
                errorDiv.textContent = 'La description doit contenir entre 20 et 2000 caractères';
                
                if (!descriptionTextarea.nextElementSibling || !descriptionTextarea.nextElementSibling.classList.contains('form-error')) {
                    descriptionTextarea.parentNode.insertBefore(errorDiv, descriptionTextarea.nextSibling);
                }
            }
        }
        
        if (!isValid) {
            form.style.animation = 'shake 0.5s ease-in-out';
            setTimeout(() => {
                form.style.animation = '';
            }, 500);
            return;
        }
        
        // Show loading
        loadingOverlay.classList.add('active');
        
        // Submit form after delay for animation
        setTimeout(() => {
            form.submit();
        }, 2000);
    });
    
    // Sparkle effect on create button hover
    createButton.addEventListener('mouseenter', function(e) {
        const rect = this.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        
        for (let i = 0; i < 5; i++) {
            const sparkle = document.createElement('div');
            sparkle.className = 'sparkle';
            sparkle.style.left = (x + Math.random() * 40 - 20) + 'px';
            sparkle.style.top = (y + Math.random() * 40 - 20) + 'px';
            this.appendChild(sparkle);
            
            setTimeout(() => {
                sparkle.remove();
            }, 1000);
        }
    });
    
    // Real-time validation
    const formControls = document.querySelectorAll('.form-control');
    
    formControls.forEach(control => {
        control.addEventListener('focus', function() {
            this.parentElement.style.transform = 'translateY(-3px)';
        });
        
        control.addEventListener('blur', function() {
            this.parentElement.style.transform = 'translateY(0)';
        });
        
        control.addEventListener('input', function() {
            if (this.value.trim()) {
                this.classList.remove('error');
                const error = this.nextElementSibling;
                if (error && error.classList.contains('form-error')) {
                    error.remove();
                }
            }
        });
    });
    
    // Date input enhancements
    const dateInput = document.querySelector('#training_plan_created_at');
    if (dateInput) {
        // Définir la date maximale (aujourd'hui)
        const today = new Date().toISOString().split('T')[0];
        dateInput.setAttribute('max', today);
        
        // Auto-sélection de la date actuelle si vide
        if (!dateInput.value) {
            dateInput.value = today;
        }
        
        // Style enhancement
        dateInput.addEventListener('focus', function() {
            this.style.background = 'rgba(255, 45, 45, 0.1)';
            this.style.boxShadow = '0 0 0 3px rgba(255, 45, 45, 0.2)';
        });
        
        dateInput.addEventListener('blur', function() {
            this.style.background = '';
            this.style.boxShadow = '';
        });
    }
    
    // Success message simulation
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('success')) {
        setTimeout(() => {
            successMessage.classList.add('active');
            
            setTimeout(() => {
                successMessage.classList.remove('active');
            }, 4000);
        }, 1000);
    }
    
    // Add animation to form groups
    const formGroups = document.querySelectorAll('.form-group');
    formGroups.forEach((group, index) => {
        group.style.animationDelay = `\${index * 0.1}s`;
    });
    
    // Auto-focus first input
    const firstInput = form.querySelector('.form-control[autofocus]');
    if (firstInput) {
        setTimeout(() => {
            firstInput.focus();
        }, 500);
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
        return "training_plan/new.html.twig";
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
        return array (  1108 => 847,  1085 => 846,  1070 => 834,  1058 => 825,  1053 => 822,  1047 => 819,  1043 => 817,  1041 => 816,  1034 => 811,  1032 => 808,  1028 => 807,  1022 => 806,  1018 => 804,  1012 => 801,  1008 => 799,  1006 => 798,  996 => 790,  994 => 784,  990 => 783,  984 => 782,  979 => 779,  973 => 776,  969 => 774,  967 => 773,  960 => 768,  958 => 762,  954 => 761,  948 => 760,  944 => 758,  938 => 755,  934 => 753,  932 => 752,  925 => 747,  923 => 745,  919 => 744,  913 => 743,  907 => 739,  901 => 736,  897 => 734,  895 => 733,  888 => 728,  886 => 725,  882 => 724,  876 => 723,  872 => 721,  866 => 718,  862 => 716,  860 => 715,  853 => 710,  851 => 704,  847 => 703,  841 => 702,  837 => 700,  832 => 697,  823 => 695,  819 => 694,  814 => 691,  812 => 690,  806 => 687,  759 => 642,  746 => 641,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Phantom Force - Nouveau Plan d'Entraînement{% endblock %}

{% block inline_styles %}
<style>
/* ================= CREATE PAGE STYLES ================= */
.create-hero {
    text-align: center;
    padding: 80px 20px 40px;
    position: relative;
    margin-bottom: 40px;
    animation: fadeInUp 0.8s ease-out;
}

.create-hero::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 120px;
    height: 4px;
    background: linear-gradient(90deg, #ff0000, #ff2d2d, #ff5e5e);
    border-radius: 2px;
    animation: widthGrow 1.2s ease-out;
}

.create-hero h1 {
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

.create-hero p {
    color: var(--text-muted);
    font-size: 20px;
    max-width: 700px;
    margin: 0 auto 20px;
    line-height: 1.6;
}

/* ================= FORM CONTAINER ================= */
.form-container {
    max-width: 800px;
    margin: 0 auto 60px;
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    padding: 50px;
    box-shadow: var(--shadow-lg);
    animation: fadeIn 0.6s ease-out;
    position: relative;
    overflow: hidden;
}

.form-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg, #ff0000, #ff2d2d, #ff5e5e);
    animation: borderFlow 3s linear infinite;
}

@keyframes borderFlow {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

/* ================= FORM HEADER ================= */
.form-header {
    text-align: center;
    margin-bottom: 50px;
    position: relative;
}

.form-header h2 {
    font-size: 32px;
    color: var(--text-light);
    margin-bottom: 15px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.form-header p {
    color: var(--text-muted);
    font-size: 16px;
    max-width: 700px;
    margin: 0 auto;
}

.form-header::after {
    content: '';
    position: absolute;
    bottom: -25px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, #ff2d2d, #ff5e5e, #ff2d2d);
    border-radius: 2px;
    animation: widthGrow 1s ease-out;
}

/* ================= CREATION GUIDE ================= */
.creation-guide {
    background: rgba(255, 45, 45, 0.08);
    border: 1px solid rgba(255, 45, 45, 0.3);
    border-radius: var(--radius-lg);
    padding: 30px;
    margin-bottom: 40px;
    animation: fadeInUp 0.8s ease-out 0.3s backwards;
}

.creation-guide h3 {
    font-size: 20px;
    color: var(--red);
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 12px;
}

.creation-guide h3::before {
    content: '🔥';
    font-size: 24px;
}

.guide-list {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
}

@media (max-width: 768px) {
    .guide-list {
        grid-template-columns: 1fr;
    }
}

.guide-item {
    display: flex;
    align-items: flex-start;
    gap: 12px;
}

.guide-icon {
    width: 32px;
    height: 32px;
    background: rgba(255, 45, 45, 0.2);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--red);
    font-size: 16px;
    flex-shrink: 0;
}

.guide-content h4 {
    font-size: 14px;
    color: var(--text-light);
    margin-bottom: 5px;
    font-weight: 600;
}

.guide-content p {
    font-size: 13px;
    color: var(--text-muted);
    line-height: 1.5;
}

/* ================= FORM STYLES ================= */
.form-group {
    margin-bottom: 35px;
    position: relative;
    animation: fadeInUp 0.5s ease-out backwards;
}

.form-group:nth-child(1) { animation-delay: 0.1s; }
.form-group:nth-child(2) { animation-delay: 0.2s; }
.form-group:nth-child(3) { animation-delay: 0.3s; }
.form-group:nth-child(4) { animation-delay: 0.4s; }
.form-group:nth-child(5) { animation-delay: 0.5s; }
.form-group:nth-child(6) { animation-delay: 0.6s; }

.form-label {
    display: block;
    margin-bottom: 12px;
    font-weight: 700;
    color: var(--text-light);
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1px;
    position: relative;
    padding-left: 20px;
}

.form-label::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 10px;
    height: 10px;
    background: linear-gradient(135deg, #ff2d2d, #ff0000);
    border-radius: 2px;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0%, 100% { transform: translateY(-50%) scale(1); }
    50% { transform: translateY(-50%) scale(1.1); }
}

.form-control {
    width: 100%;
    padding: 18px 25px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: var(--radius);
    color: var(--text-light);
    font-size: 16px;
    font-family: 'Inter', sans-serif;
    transition: var(--transition);
    backdrop-filter: blur(10px);
}

.form-control:focus {
    outline: none;
    border-color: var(--red);
    box-shadow: 0 0 0 3px rgba(255, 45, 45, 0.3);
    background: rgba(255, 45, 45, 0.08);
    transform: translateY(-2px);
}

.form-control::placeholder {
    color: rgba(255, 255, 255, 0.3);
    font-style: italic;
}

select.form-control {
    appearance: none;
    background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23ff2d2d' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E\");
    background-repeat: no-repeat;
    background-position: right 25px center;
    background-size: 16px;
    padding-right: 60px;
    cursor: pointer;
}

select.form-control option {
    background: var(--bg-card);
    color: var(--text-light);
    padding: 10px;
}

.form-group input[type=\"date\"] {
    color-scheme: dark;
}

.form-group input[type=\"date\"]::-webkit-calendar-picker-indicator {
    filter: invert(1);
    opacity: 0.6;
    cursor: pointer;
    width: 24px;
    height: 24px;
}

.form-group input[type=\"date\"]::-webkit-calendar-picker-indicator:hover {
    opacity: 1;
}

textarea.form-control {
    min-height: 180px;
    resize: vertical;
    line-height: 1.6;
    padding: 20px 25px;
}

/* ================= FORM ROW ================= */
.form-row {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 35px;
}

@media (max-width: 768px) {
    .form-row {
        grid-template-columns: 1fr;
    }
}

/* ================= FORM VALIDATION ================= */
.form-error {
    color: var(--red);
    font-size: 14px;
    margin-top: 10px;
    display: flex;
    align-items: center;
    gap: 10px;
    animation: shake 0.5s ease-in-out;
    font-weight: 600;
}

@keyframes shake {
    0%, 100% { transform: translateX(0); }
    25% { transform: translateX(-8px); }
    75% { transform: translateX(8px); }
}

.form-error::before {
    content: '⚡';
    font-size: 16px;
    animation: blink 1s infinite;
}

@keyframes blink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.3; }
}

.form-control.error {
    border-color: var(--red);
    box-shadow: 0 0 0 3px rgba(255, 45, 45, 0.3);
    background: rgba(255, 45, 45, 0.1);
}

.validation-summary {
    background: rgba(231, 76, 60, 0.1);
    border: 1px solid rgba(231, 76, 60, 0.3);
    border-radius: var(--radius);
    padding: 20px;
    margin-bottom: 30px;
    animation: fadeIn 0.5s ease-out;
}

.validation-summary h4 {
    color: #e74c3c;
    font-size: 16px;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.validation-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.validation-list li {
    color: var(--text-light);
    font-size: 13px;
    padding: 5px 0;
    display: flex;
    align-items: center;
    gap: 8px;
}

.validation-list li::before {
    content: '⚠️';
    font-size: 12px;
}

/* ================= FORM HELP TEXT ================= */
.form-help {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-top: 8px;
    color: var(--text-muted);
    font-size: 13px;
}

.form-help i {
    color: var(--red);
    font-size: 12px;
}

/* ================= CHARACTER COUNTER ================= */
.char-counter {
    text-align: right;
    font-size: 13px;
    color: var(--text-muted);
    margin-top: 8px;
    font-weight: 600;
}

.char-counter.warning {
    color: #ff8a2d;
    animation: pulse 1.5s infinite;
}

.char-counter.danger {
    color: var(--red);
    font-weight: 800;
    animation: pulse 0.8s infinite;
}

/* ================= FORM ACTIONS ================= */
.form-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 60px;
    padding-top: 40px;
    border-top: 1px solid rgba(255, 45, 45, 0.2);
}

.btn-back {
    padding: 15px 30px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid var(--border-light);
    border-radius: 10px;
    color: var(--text-muted);
    text-decoration: none;
    font-weight: 700;
    font-size: 14px;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    transition: var(--transition);
    text-transform: uppercase;
    letter-spacing: 1px;
}

.btn-back:hover {
    background: rgba(255, 255, 255, 0.1);
    color: var(--text-light);
    transform: translateX(-5px);
    border-color: var(--red);
}

.btn-back::before {
    content: '←';
    font-size: 18px;
    font-weight: 800;
}

.btn-create {
    padding: 18px 40px;
    background: linear-gradient(135deg, #ff0000, #ff2d2d, #ff5e5e);
    border: none;
    border-radius: 12px;
    color: white;
    font-weight: 800;
    font-size: 16px;
    cursor: pointer;
    transition: var(--transition);
    display: inline-flex;
    align-items: center;
    gap: 12px;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 10px 20px rgba(255, 0, 0, 0.2);
}

.btn-create::before {
    content: '🚀';
    font-size: 18px;
}

.btn-create::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.2);
    transform: translate(-50%, -50%);
    transition: width 0.8s, height 0.8s;
}

.btn-create:hover::after {
    width: 400px;
    height: 400px;
}

.btn-create:hover {
    transform: translateY(-4px) scale(1.05);
    box-shadow: 0 15px 30px rgba(255, 0, 0, 0.4);
    background: linear-gradient(135deg, #ff2d2d, #ff0000, #ff2d2d);
    animation: btnPulse 1s infinite alternate;
}

@keyframes btnPulse {
    0% { box-shadow: 0 15px 30px rgba(255, 0, 0, 0.4); }
    100% { box-shadow: 0 15px 40px rgba(255, 0, 0, 0.6); }
}

/* ================= LOADING OVERLAY ================= */
.loading-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(10, 10, 15, 0.95);
    backdrop-filter: blur(10px);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 25px;
    opacity: 0;
    visibility: hidden;
    transition: var(--transition);
}

.loading-overlay.active {
    opacity: 1;
    visibility: visible;
}

.loading-spinner {
    width: 80px;
    height: 80px;
    border: 4px solid rgba(255, 45, 45, 0.2);
    border-top-color: var(--red);
    border-radius: 50%;
    animation: spin 1.2s linear infinite;
}

@keyframes spin {
    to { transform: rotate(360deg); }
}

.loading-text {
    color: var(--text-light);
    font-size: 18px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    background: linear-gradient(90deg, #ff2d2d, #ff5e5e, #ff2d2d);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    background-size: 200% auto;
    animation: loadingText 2s infinite linear;
}

@keyframes loadingText {
    0% { background-position: 0% center; }
    100% { background-position: 200% center; }
}

/* ================= SUCCESS MESSAGE ================= */
.success-message {
    position: fixed;
    top: 30px;
    right: 30px;
    background: linear-gradient(135deg, var(--green), #2dff8b);
    color: #000;
    padding: 20px 30px;
    border-radius: var(--radius);
    box-shadow: var(--shadow-lg);
    display: flex;
    align-items: center;
    gap: 15px;
    z-index: 10000;
    transform: translateX(120%);
    transition: transform 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    font-weight: 700;
}

.success-message.active {
    transform: translateX(0);
}

.success-message::before {
    content: '✅';
    font-size: 24px;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 768px) {
    .create-hero h1 {
        font-size: 40px;
    }
    
    .form-container {
        padding: 30px 20px;
        margin: 0 15px 40px;
    }
    
    .form-actions {
        flex-direction: column;
        gap: 20px;
    }
    
    .btn-back, .btn-create {
        width: 100%;
        justify-content: center;
    }
    
    .form-header h2 {
        font-size: 26px;
    }
}

/* ================= SPECIAL EFFECTS ================= */
.sparkle {
    position: absolute;
    width: 4px;
    height: 4px;
    background: var(--red);
    border-radius: 50%;
    pointer-events: none;
    opacity: 0;
    animation: sparkle 1s ease-out;
}

@keyframes sparkle {
    0% { opacity: 0; transform: scale(0); }
    50% { opacity: 1; transform: scale(1); }
    100% { opacity: 0; transform: scale(0); }
}
</style>
{% endblock %}

{% block body %}
<div class=\"create-hero\">
    <h1>🚀 NOUVEAU PLAN D'ENTRAÎNEMENT</h1>
    <p>Créez un plan d'entraînement personnalisé pour optimiser les performances de votre équipe esport.</p>
</div>

<div class=\"creation-guide\">
    <h3>Guide de création Phantom Force</h3>
    <div class=\"guide-list\">
        <div class=\"guide-item\">
            <div class=\"guide-icon\">🎯</div>
            <div class=\"guide-content\">
                <h4>Objectifs stratégiques</h4>
                <p>Définissez des objectifs clairs et mesurables pour chaque session</p>
            </div>
        </div>
        <div class=\"guide-item\">
            <div class=\"guide-icon\">⚡</div>
            <div class=\"guide-content\">
                <h4>Intensité progressive</h4>
                <p>Augmentez la difficulté progressivement pour des résultats optimaux</p>
            </div>
        </div>
        <div class=\"guide-item\">
            <div class=\"guide-icon\">📊</div>
            <div class=\"guide-content\">
                <h4>Analyse détaillée</h4>
                <p>Documentez chaque aspect pour des ajustements futurs</p>
            </div>
        </div>
        <div class=\"guide-item\">
            <div class=\"guide-icon\">🏆</div>
            <div class=\"guide-content\">
                <h4>Performance maximale</h4>
                <p>Concevez des sessions qui poussent les limites de l'équipe</p>
            </div>
        </div>
    </div>
</div>

<div class=\"form-container\">
    <div class=\"form-header\">
        <h2>CRÉATION DE PLAN D'ENTRAÎNEMENT</h2>
        <p>Remplissez tous les champs requis pour créer un plan d'entraînement efficace</p>
    </div>

    {{ form_start(form, {'attr': {'class': 'training-form', 'id': 'createForm'}}) }}
    
    <!-- Affichage des erreurs globales -->
    {% if not form.vars.valid %}
        <div class=\"validation-summary\">
            <h4><i class=\"fas fa-exclamation-circle\"></i> Des erreurs ont été détectées :</h4>
            <ul class=\"validation-list\">
                {% for error in form.vars.errors %}
                    <li>{{ error.message }}</li>
                {% endfor %}
            </ul>
        </div>
    {% endif %}
    
    <div class=\"form-row\">
        <div class=\"form-group {% if not form.title.vars.valid %}has-error{% endif %}\">
            {{ form_label(form.title, 'Titre du plan') }}
            {{ form_widget(form.title, {'attr': {
                'placeholder': 'Ex: Stratégie défensive avancée - Saison 2024',
                'class': 'form-control',
                'minlength': '5',
                'maxlength': '255',
                'autofocus': 'autofocus'
            }}) }}
            <div class=\"form-help\">
                <i class=\"fas fa-info-circle\"></i>
                <span>Un titre clair et descriptif pour votre plan (5-255 caractères)</span>
            </div>
            {% if form.title.vars.errors|length > 0 %}
                <div class=\"form-error\">
                    <i class=\"fas fa-exclamation-circle\"></i>
                    {{ form_errors(form.title) }}
                </div>
            {% endif %}
        </div>
        
        <div class=\"form-group {% if not form.focus_area.vars.valid %}has-error{% endif %}\">
            {{ form_label(form.focus_area, 'Zone de focus principale') }}
            {{ form_widget(form.focus_area, {'attr': {
                'placeholder': 'Ex: Défense, Attaque, Stratégie, Communication',
                'class': 'form-control'
            }}) }}
            <div class=\"form-help\">
                <i class=\"fas fa-bullseye\"></i>
                <span>La compétence principale que ce plan vise à améliorer</span>
            </div>
            {% if form.focus_area.vars.errors|length > 0 %}
                <div class=\"form-error\">
                    <i class=\"fas fa-exclamation-circle\"></i>
                    {{ form_errors(form.focus_area) }}
                </div>
            {% endif %}
        </div>
    </div>
    
    <div class=\"form-row\">
        <div class=\"form-group {% if not form.difficulty_level.vars.valid %}has-error{% endif %}\">
            {{ form_label(form.difficulty_level, 'Niveau de difficulté') }}
            {{ form_widget(form.difficulty_level, {'attr': {
                'class': 'form-control'
            }}) }}
            <div class=\"form-help\">
                <i class=\"fas fa-chart-line\"></i>
                <span>Sélectionnez le niveau adapté à votre équipe</span>
            </div>
            {% if form.difficulty_level.vars.errors|length > 0 %}
                <div class=\"form-error\">
                    <i class=\"fas fa-exclamation-circle\"></i>
                    {{ form_errors(form.difficulty_level) }}
                </div>
            {% endif %}
        </div>
        
        <div class=\"form-group {% if not form.coach_id.vars.valid %}has-error{% endif %}\">
            {{ form_label(form.coach_id, 'Coach responsable') }}
            {{ form_widget(form.coach_id, {'attr': {
                'placeholder': 'Ex: 1 (ID du coach)',
                'class': 'form-control',
                'min': '1',
                'max': '999',
                'type': 'number'
            }}) }}
            <div class=\"form-help\">
                <i class=\"fas fa-user-tie\"></i>
                <span>L'identifiant du coach qui supervisera ce plan (1-999)</span>
            </div>
            {% if form.coach_id.vars.errors|length > 0 %}
                <div class=\"form-error\">
                    <i class=\"fas fa-exclamation-circle\"></i>
                    {{ form_errors(form.coach_id) }}
                </div>
            {% endif %}
        </div>
    </div>
    
    <div class=\"form-group {% if not form.description.vars.valid %}has-error{% endif %}\">
        {{ form_label(form.description, 'Description détaillée') }}
        {{ form_widget(form.description, {'attr': {
            'placeholder': 'Décrivez en détail les objectifs, exercices, stratégies, durée estimée, prérequis et résultats attendus de ce plan d\\'entraînement...',
            'class': 'form-control',
            'rows': '8',
            'minlength': '20',
            'maxlength': '2000'
        }}) }}
        <div class=\"form-help\">
            <i class=\"fas fa-align-left\"></i>
            <span>Incluez tous les détails pour une mise en œuvre réussie (20-2000 caractères)</span>
        </div>
        <div class=\"char-counter\" id=\"descriptionCounter\">
            <span id=\"descriptionCount\">0</span> / 2000 caractères
        </div>
        {% if form.description.vars.errors|length > 0 %}
            <div class=\"form-error\">
                <i class=\"fas fa-exclamation-circle\"></i>
                {{ form_errors(form.description) }}
            </div>
        {% endif %}
    </div>
    
    <div class=\"form-group optional {% if not form.created_at.vars.valid %}has-error{% endif %}\">
        {{ form_label(form.created_at, 'Date de création (optionnel)') }}
        {{ form_widget(form.created_at, {'attr': {
            'class': 'form-control',
            'max': \"now\"|date('Y-m-d')
        }}) }}
        <div class=\"form-help\">
            <i class=\"fas fa-calendar-alt\"></i>
            <span>La date sera automatiquement définie à aujourd'hui si vide</span>
        </div>
        {% if form.created_at.vars.errors|length > 0 %}
            <div class=\"form-error\">
                <i class=\"fas fa-exclamation-circle\"></i>
                {{ form_errors(form.created_at) }}
            </div>
        {% endif %}
    </div>
    
    <div class=\"form-actions\">
        <a href=\"{{ path('app_coaching_session_index') }}#training-plans\" class=\"btn-back\">
            Annuler & Retour
        </a>
        
        <button type=\"submit\" class=\"btn-create\" id=\"createButton\">
            Créer le plan d'entraînement
        </button>
    </div>
    
    {{ form_end(form) }}
</div>

<div class=\"loading-overlay\" id=\"loadingOverlay\">
    <div class=\"loading-spinner\"></div>
    <div class=\"loading-text\">CRÉATION</div>
</div>

<div class=\"success-message\" id=\"successMessage\">
    ✅ Plan créé avec succès !
</div>

{% block javascripts %}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('createForm');
    const createButton = document.getElementById('createButton');
    const loadingOverlay = document.getElementById('loadingOverlay');
    const successMessage = document.getElementById('successMessage');
    const descriptionTextarea = document.querySelector('#training_plan_description');
    const descriptionCounter = document.getElementById('descriptionCounter');
    const descriptionCount = document.getElementById('descriptionCount');
    
    // Initialize description counter
    if (descriptionTextarea && descriptionCounter && descriptionCount) {
        function updateCounter() {
            const length = descriptionTextarea.value.length;
            descriptionCount.textContent = length;
            
            descriptionCounter.classList.remove('warning', 'danger');
            
            if (length > 1500) {
                descriptionCounter.classList.add('warning');
            }
            
            if (length > 1800) {
                descriptionCounter.classList.add('danger');
            }
        }
        
        descriptionTextarea.addEventListener('input', updateCounter);
        updateCounter(); // Initial count
    }
    
    // Form validation and submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Basic validation
        let isValid = true;
        const requiredInputs = form.querySelectorAll('.form-control[required]');
        
        requiredInputs.forEach(input => {
            if (!input.value.trim()) {
                input.classList.add('error');
                isValid = false;
                
                const errorDiv = document.createElement('div');
                errorDiv.className = 'form-error';
                errorDiv.textContent = 'Ce champ est obligatoire';
                
                if (!input.nextElementSibling || !input.nextElementSibling.classList.contains('form-error')) {
                    input.parentNode.insertBefore(errorDiv, input.nextSibling);
                }
            } else {
                input.classList.remove('error');
                const error = input.nextElementSibling;
                if (error && error.classList.contains('form-error')) {
                    error.remove();
                }
            }
        });
        
        // Validate text lengths
        const titleInput = document.querySelector('#training_plan_title');
        if (titleInput && titleInput.value) {
            const length = titleInput.value.length;
            if (length < 5 || length > 255) {
                titleInput.classList.add('error');
                isValid = false;
                
                const errorDiv = document.createElement('div');
                errorDiv.className = 'form-error';
                errorDiv.textContent = 'Le titre doit contenir entre 5 et 255 caractères';
                
                if (!titleInput.nextElementSibling || !titleInput.nextElementSibling.classList.contains('form-error')) {
                    titleInput.parentNode.insertBefore(errorDiv, titleInput.nextSibling);
                }
            }
        }
        
        if (descriptionTextarea && descriptionTextarea.value) {
            const length = descriptionTextarea.value.length;
            if (length < 20 || length > 2000) {
                descriptionTextarea.classList.add('error');
                isValid = false;
                
                const errorDiv = document.createElement('div');
                errorDiv.className = 'form-error';
                errorDiv.textContent = 'La description doit contenir entre 20 et 2000 caractères';
                
                if (!descriptionTextarea.nextElementSibling || !descriptionTextarea.nextElementSibling.classList.contains('form-error')) {
                    descriptionTextarea.parentNode.insertBefore(errorDiv, descriptionTextarea.nextSibling);
                }
            }
        }
        
        if (!isValid) {
            form.style.animation = 'shake 0.5s ease-in-out';
            setTimeout(() => {
                form.style.animation = '';
            }, 500);
            return;
        }
        
        // Show loading
        loadingOverlay.classList.add('active');
        
        // Submit form after delay for animation
        setTimeout(() => {
            form.submit();
        }, 2000);
    });
    
    // Sparkle effect on create button hover
    createButton.addEventListener('mouseenter', function(e) {
        const rect = this.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        
        for (let i = 0; i < 5; i++) {
            const sparkle = document.createElement('div');
            sparkle.className = 'sparkle';
            sparkle.style.left = (x + Math.random() * 40 - 20) + 'px';
            sparkle.style.top = (y + Math.random() * 40 - 20) + 'px';
            this.appendChild(sparkle);
            
            setTimeout(() => {
                sparkle.remove();
            }, 1000);
        }
    });
    
    // Real-time validation
    const formControls = document.querySelectorAll('.form-control');
    
    formControls.forEach(control => {
        control.addEventListener('focus', function() {
            this.parentElement.style.transform = 'translateY(-3px)';
        });
        
        control.addEventListener('blur', function() {
            this.parentElement.style.transform = 'translateY(0)';
        });
        
        control.addEventListener('input', function() {
            if (this.value.trim()) {
                this.classList.remove('error');
                const error = this.nextElementSibling;
                if (error && error.classList.contains('form-error')) {
                    error.remove();
                }
            }
        });
    });
    
    // Date input enhancements
    const dateInput = document.querySelector('#training_plan_created_at');
    if (dateInput) {
        // Définir la date maximale (aujourd'hui)
        const today = new Date().toISOString().split('T')[0];
        dateInput.setAttribute('max', today);
        
        // Auto-sélection de la date actuelle si vide
        if (!dateInput.value) {
            dateInput.value = today;
        }
        
        // Style enhancement
        dateInput.addEventListener('focus', function() {
            this.style.background = 'rgba(255, 45, 45, 0.1)';
            this.style.boxShadow = '0 0 0 3px rgba(255, 45, 45, 0.2)';
        });
        
        dateInput.addEventListener('blur', function() {
            this.style.background = '';
            this.style.boxShadow = '';
        });
    }
    
    // Success message simulation
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('success')) {
        setTimeout(() => {
            successMessage.classList.add('active');
            
            setTimeout(() => {
                successMessage.classList.remove('active');
            }, 4000);
        }, 1000);
    }
    
    // Add animation to form groups
    const formGroups = document.querySelectorAll('.form-group');
    formGroups.forEach((group, index) => {
        group.style.animationDelay = `\${index * 0.1}s`;
    });
    
    // Auto-focus first input
    const firstInput = form.querySelector('.form-control[autofocus]');
    if (firstInput) {
        setTimeout(() => {
            firstInput.focus();
        }, 500);
    }
});
</script>
{% endblock %}
{% endblock %}", "training_plan/new.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\training_plan\\new.html.twig");
    }
}
