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
class __TwigTemplate_5fc99f1dda75d94b43ddc4a5f5da85f7 extends Template
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
    width: 150px;
    height: 4px;
    background: linear-gradient(90deg, #3498db, #5faee3, #87cefa);
    border-radius: 2px;
    animation: widthGrow 1.2s ease-out;
}

.create-hero h1 {
    font-size: 56px;
    font-weight: 800;
    background: linear-gradient(90deg, #3498db, #5faee3, #87cefa, #b0e0ff);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    margin-bottom: 20px;
    line-height: 1.1;
    text-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
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
    max-width: 900px;
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
    background: linear-gradient(90deg, #3498db, #5faee3, #87cefa);
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
    background: linear-gradient(90deg, #3498db, #5faee3, #87cefa);
    border-radius: 2px;
    animation: widthGrow 1s ease-out;
}

/* ================= CREATION GUIDE ================= */
.creation-guide {
    background: rgba(52, 152, 219, 0.08);
    border: 1px solid rgba(52, 152, 219, 0.3);
    border-radius: var(--radius-lg);
    padding: 30px;
    margin-bottom: 40px;
    animation: fadeInUp 0.8s ease-out 0.3s backwards;
}

.creation-guide h3 {
    font-size: 20px;
    color: #3498db;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 12px;
}

.creation-guide h3::before {
    content: '📋';
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
    background: rgba(52, 152, 219, 0.2);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #3498db;
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
.form-group:nth-child(7) { animation-delay: 0.7s; }

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
    background: linear-gradient(135deg, #3498db, #5faee3);
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
    border-color: #3498db;
    box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.3);
    background: rgba(52, 152, 219, 0.08);
    transform: translateY(-2px);
}

.form-control::placeholder {
    color: rgba(255, 255, 255, 0.3);
    font-style: italic;
}

select.form-control {
    appearance: none;
    background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%233498db' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E\");
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

/* ================= SELECT WITH ICON ================= */
.select-with-info {
    position: relative;
}

.select-with-info select {
    padding-left: 60px;
}

.select-icon {
    position: absolute;
    left: 25px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
    color: #3498db;
    z-index: 2;
    pointer-events: none;
}

.info-preview {
    margin-top: 10px;
    padding: 12px 15px;
    background: rgba(52, 152, 219, 0.05);
    border: 1px solid rgba(52, 152, 219, 0.1);
    border-radius: var(--radius);
    font-size: 13px;
    color: var(--text-muted);
    display: flex;
    align-items: center;
    gap: 10px;
    animation: fadeIn 0.3s ease-out;
}

.info-preview i {
    color: #3498db;
    font-size: 14px;
}

.preview-highlight {
    color: #3498db;
    font-weight: 600;
    margin-left: 5px;
}

/* ================= FORM VALIDATION ================= */
.form-error {
    color: #e74c3c;
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
    border-color: #e74c3c;
    box-shadow: 0 0 0 3px rgba(231, 76, 60, 0.3);
    background: rgba(231, 76, 60, 0.1);
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
    color: #3498db;
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
    color: #f39c12;
    animation: pulse 1.5s infinite;
}

.char-counter.danger {
    color: #e74c3c;
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
    border-top: 1px solid rgba(52, 152, 219, 0.2);
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
    border-color: #3498db;
}

.btn-back::before {
    content: '←';
    font-size: 18px;
    font-weight: 800;
}

.btn-create {
    padding: 18px 40px;
    background: linear-gradient(135deg, #3498db, #5faee3, #87cefa);
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
    box-shadow: 0 10px 20px rgba(52, 152, 219, 0.2);
}

.btn-create::before {
    content: '📋';
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
    box-shadow: 0 15px 30px rgba(52, 152, 219, 0.4);
    background: linear-gradient(135deg, #5faee3, #3498db, #5faee3);
    animation: btnPulse 1s infinite alternate;
}

@keyframes btnPulse {
    0% { box-shadow: 0 15px 30px rgba(52, 152, 219, 0.4); }
    100% { box-shadow: 0 15px 40px rgba(52, 152, 219, 0.6); }
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
    border: 4px solid rgba(52, 152, 219, 0.2);
    border-top-color: #3498db;
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
    background: linear-gradient(90deg, #3498db, #5faee3, #87cefa);
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
    background: linear-gradient(135deg, #2ecc71, #27ae60);
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
    background: #3498db;
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

    // line 687
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

        // line 688
        yield "<div class=\"create-hero\">
    <h1>📋 NOUVEAU PLAN D'ENTRAÎNEMENT</h1>
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
        // line 733
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 733, $this->source); })()), 'form_start', ["attr" => ["class" => "training-form", "id" => "createForm", "novalidate" => "novalidate"]]);
        yield "
    
    <!-- Affichage des erreurs globales -->
    ";
        // line 736
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 736, $this->source); })()), "vars", [], "any", false, false, false, 736), "valid", [], "any", false, false, false, 736)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 737
            yield "        <div class=\"validation-summary\">
            <h4><i class=\"fas fa-exclamation-circle\"></i> Des erreurs ont été détectées :</h4>
            <ul class=\"validation-list\">
                ";
            // line 740
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 740, $this->source); })()), "vars", [], "any", false, false, false, 740), "errors", [], "any", false, false, false, 740));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 741
                yield "                    <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 741), "html", null, true);
                yield "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 743
            yield "            </ul>
        </div>
    ";
        }
        // line 746
        yield "    
    <div class=\"form-row\">
        <div class=\"form-group\">
            ";
        // line 749
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 749, $this->source); })()), "title", [], "any", false, false, false, 749), 'label', ["label" => "Titre du plan"]);
        yield "
            ";
        // line 750
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 750, $this->source); })()), "title", [], "any", false, false, false, 750), 'widget', ["attr" => ["placeholder" => "Ex: Stratégie défensive avancée - Saison 2024", "class" => "form-control", "minlength" => "5", "maxlength" => "255", "autofocus" => "autofocus"]]);
        // line 756
        yield "
            <div class=\"form-help\">
                <i class=\"fas fa-info-circle\"></i>
                <span>Un titre clair et descriptif pour votre plan (5-255 caractères)</span>
            </div>
            ";
        // line 761
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 761, $this->source); })()), "title", [], "any", false, false, false, 761), 'errors');
        yield "
        </div>
        
        <div class=\"form-group\">
            ";
        // line 765
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 765, $this->source); })()), "focus_area", [], "any", false, false, false, 765), 'label', ["label" => "Zone de focus principale"]);
        yield "
            ";
        // line 766
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 766, $this->source); })()), "focus_area", [], "any", false, false, false, 766), 'widget', ["attr" => ["class" => "form-control", "id" => "focus_area_select"]]);
        // line 769
        yield "
            <div class=\"form-help\">
                <i class=\"fas fa-bullseye\"></i>
                <span>La compétence principale que ce plan vise à améliorer</span>
            </div>
            ";
        // line 774
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 774, $this->source); })()), "focus_area", [], "any", false, false, false, 774), 'errors');
        yield "
        </div>
    </div>
    
    <div class=\"form-row\">
        <div class=\"form-group\">
            ";
        // line 780
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 780, $this->source); })()), "difficulty_level", [], "any", false, false, false, 780), 'label', ["label" => "Niveau de difficulté"]);
        yield "
            ";
        // line 781
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 781, $this->source); })()), "difficulty_level", [], "any", false, false, false, 781), 'widget', ["attr" => ["class" => "form-control", "id" => "difficulty_select"]]);
        // line 784
        yield "
            <div class=\"form-help\">
                <i class=\"fas fa-chart-line\"></i>
                <span>Sélectionnez le niveau adapté à votre équipe</span>
            </div>
            ";
        // line 789
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 789, $this->source); })()), "difficulty_level", [], "any", false, false, false, 789), 'errors');
        yield "
        </div>
        
        <div class=\"form-group\">
            ";
        // line 793
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 793, $this->source); })()), "coach", [], "any", false, false, false, 793), 'label', ["label" => "Coach responsable"]);
        yield "
            <div class=\"select-with-info\">
                <span class=\"select-icon\">👨‍🏫</span>
                ";
        // line 796
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 796, $this->source); })()), "coach", [], "any", false, false, false, 796), 'widget', ["attr" => ["class" => "form-control", "id" => "coach_select"]]);
        // line 799
        yield "
            </div>
            <div class=\"info-preview\" id=\"coachPreview\" style=\"display: none;\">
                <i class=\"fas fa-user-tie\"></i>
                <span>Coach sélectionné : <span class=\"preview-highlight\" id=\"selectedCoachName\"></span></span>
            </div>
            ";
        // line 805
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 805, $this->source); })()), "coach", [], "any", false, false, false, 805), 'errors');
        yield "
        </div>
    </div>
    
    <div class=\"form-row\">
        <div class=\"form-group\">
            ";
        // line 811
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 811, $this->source); })()), "team", [], "any", false, false, false, 811), 'label', ["label" => "Équipe cible"]);
        yield "
            <div class=\"select-with-info\">
                <span class=\"select-icon\">👥</span>
                ";
        // line 814
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 814, $this->source); })()), "team", [], "any", false, false, false, 814), 'widget', ["attr" => ["class" => "form-control", "id" => "team_select"]]);
        // line 817
        yield "
            </div>
            <div class=\"info-preview\" id=\"teamPreview\" style=\"display: none;\">
                <i class=\"fas fa-users\"></i>
                <span>Équipe sélectionnée : <span class=\"preview-highlight\" id=\"selectedTeamName\"></span></span>
            </div>
            ";
        // line 823
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 823, $this->source); })()), "team", [], "any", false, false, false, 823), 'errors');
        yield "
        </div>
        
        <div class=\"form-group\">
            ";
        // line 827
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 827, $this->source); })()), "created_at", [], "any", false, false, false, 827), 'label', ["label" => "Date de création"]);
        yield "
            ";
        // line 828
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 828, $this->source); })()), "created_at", [], "any", false, false, false, 828), 'widget', ["attr" => ["class" => "form-control", "max" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d")]]);
        // line 831
        yield "
            <div class=\"form-help\">
                <i class=\"fas fa-calendar-alt\"></i>
                <span>Date de création du plan (par défaut : aujourd'hui)</span>
            </div>
            ";
        // line 836
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 836, $this->source); })()), "created_at", [], "any", false, false, false, 836), 'errors');
        yield "
        </div>
    </div>
    
    <div class=\"form-group\">
        ";
        // line 841
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 841, $this->source); })()), "description", [], "any", false, false, false, 841), 'label', ["label" => "Description détaillée"]);
        yield "
        ";
        // line 842
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 842, $this->source); })()), "description", [], "any", false, false, false, 842), 'widget', ["attr" => ["placeholder" => "Décrivez en détail les objectifs, exercices, stratégies, durée estimée, prérequis et résultats attendus de ce plan d'entraînement...", "class" => "form-control", "rows" => "8", "minlength" => "20", "maxlength" => "2000", "id" => "plan_description"]]);
        // line 849
        yield "
        <div class=\"form-help\">
            <i class=\"fas fa-align-left\"></i>
            <span>Incluez tous les détails pour une mise en œuvre réussie (20-2000 caractères)</span>
        </div>
        <div class=\"char-counter\" id=\"descriptionCounter\">
            <span id=\"descriptionCount\">0</span> / 2000 caractères
        </div>
        ";
        // line 857
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 857, $this->source); })()), "description", [], "any", false, false, false, 857), 'errors');
        yield "
    </div>
    
    <div class=\"form-actions\">
        <a href=\"";
        // line 861
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_index");
        yield "#training-plans\" class=\"btn-back\">
            Annuler & Retour
        </a>
        
        <button type=\"submit\" class=\"btn-create\" id=\"createButton\">
            Créer le plan d'entraînement
        </button>
    </div>
    
    ";
        // line 870
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 870, $this->source); })()), 'form_end');
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 883
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

        // line 884
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('createForm');
    const createButton = document.getElementById('createButton');
    const loadingOverlay = document.getElementById('loadingOverlay');
    const successMessage = document.getElementById('successMessage');
    const descriptionTextarea = document.getElementById('plan_description');
    const descriptionCounter = document.getElementById('descriptionCounter');
    const descriptionCount = document.getElementById('descriptionCount');
    const coachSelect = document.getElementById('coach_select');
    const teamSelect = document.getElementById('team_select');
    const coachPreview = document.getElementById('coachPreview');
    const teamPreview = document.getElementById('teamPreview');
    const selectedCoachName = document.getElementById('selectedCoachName');
    const selectedTeamName = document.getElementById('selectedTeamName');
    
    // Données pour les aperçus
    const coaches = {
        ";
        // line 903
        if (array_key_exists("coaches", $context)) {
            // line 904
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 904, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
                // line 905
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 905), "html", null, true);
                yield ": {
                    name: \"";
                // line 906
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "fullName", [], "any", false, false, false, 906), "js"), "html", null, true);
                yield "\",
                    username: \"";
                // line 907
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "username", [], "any", false, false, false, 907), "js"), "html", null, true);
                yield "\"
                },
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['coach'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 910
            yield "        ";
        }
        // line 911
        yield "    };
    
    const teams = {
        ";
        // line 914
        if (array_key_exists("teams", $context)) {
            // line 915
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 915, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 916
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 916), "html", null, true);
                yield ": {
                    name: \"";
                // line 917
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 917), "js"), "html", null, true);
                yield "\",
                    game: \"";
                // line 918
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 918), "js"), "html", null, true);
                yield "\"
                },
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 921
            yield "        ";
        }
        // line 922
        yield "    };
    
    // Gestion de l'aperçu du coach
    if (coachSelect) {
        coachSelect.addEventListener('change', function() {
            const coachId = this.value;
            
            if (coachId && coaches[coachId]) {
                const coach = coaches[coachId];
                selectedCoachName.textContent = coach.name + ' (@' + coach.username + ')';
                coachPreview.style.display = 'flex';
                
                // Animation
                coachPreview.style.animation = 'none';
                setTimeout(() => {
                    coachPreview.style.animation = 'fadeIn 0.3s ease-out';
                }, 10);
            } else {
                coachPreview.style.display = 'none';
            }
        });
        
        // Déclencher une fois si déjà sélectionné
        if (coachSelect.value) {
            const event = new Event('change');
            coachSelect.dispatchEvent(event);
        }
    }
    
    // Gestion de l'aperçu de l'équipe
    if (teamSelect) {
        teamSelect.addEventListener('change', function() {
            const teamId = this.value;
            
            if (teamId && teams[teamId]) {
                const team = teams[teamId];
                selectedTeamName.textContent = team.name + ' (' + team.game + ')';
                teamPreview.style.display = 'flex';
                
                // Animation
                teamPreview.style.animation = 'none';
                setTimeout(() => {
                    teamPreview.style.animation = 'fadeIn 0.3s ease-out';
                }, 10);
            } else {
                teamPreview.style.display = 'none';
            }
        });
        
        // Déclencher une fois si déjà sélectionné
        if (teamSelect.value) {
            const event = new Event('change');
            teamSelect.dispatchEvent(event);
        }
    }
    
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
        const requiredInputs = form.querySelectorAll('[required]');
        
        requiredInputs.forEach(input => {
            if (!input.value.trim()) {
                input.classList.add('error');
                isValid = false;
                
                let errorDiv = input.nextElementSibling;
                while (errorDiv && !errorDiv.classList.contains('form-error')) {
                    errorDiv = errorDiv.nextElementSibling;
                }
                
                if (!errorDiv) {
                    errorDiv = document.createElement('div');
                    errorDiv.className = 'form-error';
                    errorDiv.textContent = 'Ce champ est obligatoire';
                    input.parentNode.insertBefore(errorDiv, input.nextSibling);
                }
            } else {
                input.classList.remove('error');
                let errorDiv = input.nextElementSibling;
                while (errorDiv) {
                    if (errorDiv.classList && errorDiv.classList.contains('form-error')) {
                        errorDiv.remove();
                        break;
                    }
                    errorDiv = errorDiv.nextElementSibling;
                }
            }
        });
        
        // Validate title length
        const titleInput = document.querySelector('#training_plan_title');
        if (titleInput && titleInput.value) {
            const length = titleInput.value.length;
            if (length < 5 || length > 255) {
                titleInput.classList.add('error');
                isValid = false;
                
                let errorDiv = titleInput.nextElementSibling;
                while (errorDiv && !errorDiv.classList.contains('form-error')) {
                    errorDiv = errorDiv.nextElementSibling;
                }
                
                if (!errorDiv) {
                    errorDiv = document.createElement('div');
                    errorDiv.className = 'form-error';
                    errorDiv.textContent = 'Le titre doit contenir entre 5 et 255 caractères';
                    titleInput.parentNode.insertBefore(errorDiv, titleInput.nextSibling);
                }
            }
        }
        
        // Validate description length
        if (descriptionTextarea && descriptionTextarea.value) {
            const length = descriptionTextarea.value.length;
            if (length < 20 || length > 2000) {
                descriptionTextarea.classList.add('error');
                isValid = false;
                
                let errorDiv = descriptionTextarea.nextElementSibling;
                while (errorDiv && !errorDiv.classList.contains('form-error')) {
                    errorDiv = errorDiv.nextElementSibling;
                }
                
                if (!errorDiv) {
                    errorDiv = document.createElement('div');
                    errorDiv.className = 'form-error';
                    errorDiv.textContent = 'La description doit contenir entre 20 et 2000 caractères';
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
        }, 1500);
    });
    
    // Sparkle effect on create button hover
    if (createButton) {
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
    }
    
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
                let errorDiv = this.nextElementSibling;
                while (errorDiv) {
                    if (errorDiv.classList && errorDiv.classList.contains('form-error')) {
                        errorDiv.remove();
                        break;
                    }
                    errorDiv = errorDiv.nextElementSibling;
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
            this.style.background = 'rgba(52, 152, 219, 0.1)';
            this.style.boxShadow = '0 0 0 3px rgba(52, 152, 219, 0.2)';
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
    const firstInput = form.querySelector('[autofocus]');
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
        return array (  1173 => 922,  1170 => 921,  1161 => 918,  1157 => 917,  1152 => 916,  1147 => 915,  1145 => 914,  1140 => 911,  1137 => 910,  1128 => 907,  1124 => 906,  1119 => 905,  1114 => 904,  1112 => 903,  1090 => 884,  1077 => 883,  1054 => 870,  1042 => 861,  1035 => 857,  1025 => 849,  1023 => 842,  1019 => 841,  1011 => 836,  1004 => 831,  1002 => 828,  998 => 827,  991 => 823,  983 => 817,  981 => 814,  975 => 811,  966 => 805,  958 => 799,  956 => 796,  950 => 793,  943 => 789,  936 => 784,  934 => 781,  930 => 780,  921 => 774,  914 => 769,  912 => 766,  908 => 765,  901 => 761,  894 => 756,  892 => 750,  888 => 749,  883 => 746,  878 => 743,  869 => 741,  865 => 740,  860 => 737,  858 => 736,  852 => 733,  805 => 688,  792 => 687,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
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
    width: 150px;
    height: 4px;
    background: linear-gradient(90deg, #3498db, #5faee3, #87cefa);
    border-radius: 2px;
    animation: widthGrow 1.2s ease-out;
}

.create-hero h1 {
    font-size: 56px;
    font-weight: 800;
    background: linear-gradient(90deg, #3498db, #5faee3, #87cefa, #b0e0ff);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    margin-bottom: 20px;
    line-height: 1.1;
    text-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
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
    max-width: 900px;
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
    background: linear-gradient(90deg, #3498db, #5faee3, #87cefa);
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
    background: linear-gradient(90deg, #3498db, #5faee3, #87cefa);
    border-radius: 2px;
    animation: widthGrow 1s ease-out;
}

/* ================= CREATION GUIDE ================= */
.creation-guide {
    background: rgba(52, 152, 219, 0.08);
    border: 1px solid rgba(52, 152, 219, 0.3);
    border-radius: var(--radius-lg);
    padding: 30px;
    margin-bottom: 40px;
    animation: fadeInUp 0.8s ease-out 0.3s backwards;
}

.creation-guide h3 {
    font-size: 20px;
    color: #3498db;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 12px;
}

.creation-guide h3::before {
    content: '📋';
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
    background: rgba(52, 152, 219, 0.2);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #3498db;
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
.form-group:nth-child(7) { animation-delay: 0.7s; }

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
    background: linear-gradient(135deg, #3498db, #5faee3);
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
    border-color: #3498db;
    box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.3);
    background: rgba(52, 152, 219, 0.08);
    transform: translateY(-2px);
}

.form-control::placeholder {
    color: rgba(255, 255, 255, 0.3);
    font-style: italic;
}

select.form-control {
    appearance: none;
    background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%233498db' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E\");
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

/* ================= SELECT WITH ICON ================= */
.select-with-info {
    position: relative;
}

.select-with-info select {
    padding-left: 60px;
}

.select-icon {
    position: absolute;
    left: 25px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
    color: #3498db;
    z-index: 2;
    pointer-events: none;
}

.info-preview {
    margin-top: 10px;
    padding: 12px 15px;
    background: rgba(52, 152, 219, 0.05);
    border: 1px solid rgba(52, 152, 219, 0.1);
    border-radius: var(--radius);
    font-size: 13px;
    color: var(--text-muted);
    display: flex;
    align-items: center;
    gap: 10px;
    animation: fadeIn 0.3s ease-out;
}

.info-preview i {
    color: #3498db;
    font-size: 14px;
}

.preview-highlight {
    color: #3498db;
    font-weight: 600;
    margin-left: 5px;
}

/* ================= FORM VALIDATION ================= */
.form-error {
    color: #e74c3c;
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
    border-color: #e74c3c;
    box-shadow: 0 0 0 3px rgba(231, 76, 60, 0.3);
    background: rgba(231, 76, 60, 0.1);
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
    color: #3498db;
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
    color: #f39c12;
    animation: pulse 1.5s infinite;
}

.char-counter.danger {
    color: #e74c3c;
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
    border-top: 1px solid rgba(52, 152, 219, 0.2);
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
    border-color: #3498db;
}

.btn-back::before {
    content: '←';
    font-size: 18px;
    font-weight: 800;
}

.btn-create {
    padding: 18px 40px;
    background: linear-gradient(135deg, #3498db, #5faee3, #87cefa);
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
    box-shadow: 0 10px 20px rgba(52, 152, 219, 0.2);
}

.btn-create::before {
    content: '📋';
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
    box-shadow: 0 15px 30px rgba(52, 152, 219, 0.4);
    background: linear-gradient(135deg, #5faee3, #3498db, #5faee3);
    animation: btnPulse 1s infinite alternate;
}

@keyframes btnPulse {
    0% { box-shadow: 0 15px 30px rgba(52, 152, 219, 0.4); }
    100% { box-shadow: 0 15px 40px rgba(52, 152, 219, 0.6); }
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
    border: 4px solid rgba(52, 152, 219, 0.2);
    border-top-color: #3498db;
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
    background: linear-gradient(90deg, #3498db, #5faee3, #87cefa);
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
    background: linear-gradient(135deg, #2ecc71, #27ae60);
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
    background: #3498db;
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
    <h1>📋 NOUVEAU PLAN D'ENTRAÎNEMENT</h1>
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

    {{ form_start(form, {'attr': {'class': 'training-form', 'id': 'createForm', 'novalidate': 'novalidate'}}) }}
    
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
        <div class=\"form-group\">
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
            {{ form_errors(form.title) }}
        </div>
        
        <div class=\"form-group\">
            {{ form_label(form.focus_area, 'Zone de focus principale') }}
            {{ form_widget(form.focus_area, {'attr': {
                'class': 'form-control',
                'id': 'focus_area_select'
            }}) }}
            <div class=\"form-help\">
                <i class=\"fas fa-bullseye\"></i>
                <span>La compétence principale que ce plan vise à améliorer</span>
            </div>
            {{ form_errors(form.focus_area) }}
        </div>
    </div>
    
    <div class=\"form-row\">
        <div class=\"form-group\">
            {{ form_label(form.difficulty_level, 'Niveau de difficulté') }}
            {{ form_widget(form.difficulty_level, {'attr': {
                'class': 'form-control',
                'id': 'difficulty_select'
            }}) }}
            <div class=\"form-help\">
                <i class=\"fas fa-chart-line\"></i>
                <span>Sélectionnez le niveau adapté à votre équipe</span>
            </div>
            {{ form_errors(form.difficulty_level) }}
        </div>
        
        <div class=\"form-group\">
            {{ form_label(form.coach, 'Coach responsable') }}
            <div class=\"select-with-info\">
                <span class=\"select-icon\">👨‍🏫</span>
                {{ form_widget(form.coach, {'attr': {
                    'class': 'form-control',
                    'id': 'coach_select'
                }}) }}
            </div>
            <div class=\"info-preview\" id=\"coachPreview\" style=\"display: none;\">
                <i class=\"fas fa-user-tie\"></i>
                <span>Coach sélectionné : <span class=\"preview-highlight\" id=\"selectedCoachName\"></span></span>
            </div>
            {{ form_errors(form.coach) }}
        </div>
    </div>
    
    <div class=\"form-row\">
        <div class=\"form-group\">
            {{ form_label(form.team, 'Équipe cible') }}
            <div class=\"select-with-info\">
                <span class=\"select-icon\">👥</span>
                {{ form_widget(form.team, {'attr': {
                    'class': 'form-control',
                    'id': 'team_select'
                }}) }}
            </div>
            <div class=\"info-preview\" id=\"teamPreview\" style=\"display: none;\">
                <i class=\"fas fa-users\"></i>
                <span>Équipe sélectionnée : <span class=\"preview-highlight\" id=\"selectedTeamName\"></span></span>
            </div>
            {{ form_errors(form.team) }}
        </div>
        
        <div class=\"form-group\">
            {{ form_label(form.created_at, 'Date de création') }}
            {{ form_widget(form.created_at, {'attr': {
                'class': 'form-control',
                'max': \"now\"|date('Y-m-d')
            }}) }}
            <div class=\"form-help\">
                <i class=\"fas fa-calendar-alt\"></i>
                <span>Date de création du plan (par défaut : aujourd'hui)</span>
            </div>
            {{ form_errors(form.created_at) }}
        </div>
    </div>
    
    <div class=\"form-group\">
        {{ form_label(form.description, 'Description détaillée') }}
        {{ form_widget(form.description, {'attr': {
            'placeholder': 'Décrivez en détail les objectifs, exercices, stratégies, durée estimée, prérequis et résultats attendus de ce plan d\\'entraînement...',
            'class': 'form-control',
            'rows': '8',
            'minlength': '20',
            'maxlength': '2000',
            'id': 'plan_description'
        }}) }}
        <div class=\"form-help\">
            <i class=\"fas fa-align-left\"></i>
            <span>Incluez tous les détails pour une mise en œuvre réussie (20-2000 caractères)</span>
        </div>
        <div class=\"char-counter\" id=\"descriptionCounter\">
            <span id=\"descriptionCount\">0</span> / 2000 caractères
        </div>
        {{ form_errors(form.description) }}
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
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('createForm');
    const createButton = document.getElementById('createButton');
    const loadingOverlay = document.getElementById('loadingOverlay');
    const successMessage = document.getElementById('successMessage');
    const descriptionTextarea = document.getElementById('plan_description');
    const descriptionCounter = document.getElementById('descriptionCounter');
    const descriptionCount = document.getElementById('descriptionCount');
    const coachSelect = document.getElementById('coach_select');
    const teamSelect = document.getElementById('team_select');
    const coachPreview = document.getElementById('coachPreview');
    const teamPreview = document.getElementById('teamPreview');
    const selectedCoachName = document.getElementById('selectedCoachName');
    const selectedTeamName = document.getElementById('selectedTeamName');
    
    // Données pour les aperçus
    const coaches = {
        {% if coaches is defined %}
            {% for coach in coaches %}
                {{ coach.id }}: {
                    name: \"{{ coach.fullName|e('js') }}\",
                    username: \"{{ coach.username|e('js') }}\"
                },
            {% endfor %}
        {% endif %}
    };
    
    const teams = {
        {% if teams is defined %}
            {% for team in teams %}
                {{ team.id }}: {
                    name: \"{{ team.name|e('js') }}\",
                    game: \"{{ team.game|e('js') }}\"
                },
            {% endfor %}
        {% endif %}
    };
    
    // Gestion de l'aperçu du coach
    if (coachSelect) {
        coachSelect.addEventListener('change', function() {
            const coachId = this.value;
            
            if (coachId && coaches[coachId]) {
                const coach = coaches[coachId];
                selectedCoachName.textContent = coach.name + ' (@' + coach.username + ')';
                coachPreview.style.display = 'flex';
                
                // Animation
                coachPreview.style.animation = 'none';
                setTimeout(() => {
                    coachPreview.style.animation = 'fadeIn 0.3s ease-out';
                }, 10);
            } else {
                coachPreview.style.display = 'none';
            }
        });
        
        // Déclencher une fois si déjà sélectionné
        if (coachSelect.value) {
            const event = new Event('change');
            coachSelect.dispatchEvent(event);
        }
    }
    
    // Gestion de l'aperçu de l'équipe
    if (teamSelect) {
        teamSelect.addEventListener('change', function() {
            const teamId = this.value;
            
            if (teamId && teams[teamId]) {
                const team = teams[teamId];
                selectedTeamName.textContent = team.name + ' (' + team.game + ')';
                teamPreview.style.display = 'flex';
                
                // Animation
                teamPreview.style.animation = 'none';
                setTimeout(() => {
                    teamPreview.style.animation = 'fadeIn 0.3s ease-out';
                }, 10);
            } else {
                teamPreview.style.display = 'none';
            }
        });
        
        // Déclencher une fois si déjà sélectionné
        if (teamSelect.value) {
            const event = new Event('change');
            teamSelect.dispatchEvent(event);
        }
    }
    
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
        const requiredInputs = form.querySelectorAll('[required]');
        
        requiredInputs.forEach(input => {
            if (!input.value.trim()) {
                input.classList.add('error');
                isValid = false;
                
                let errorDiv = input.nextElementSibling;
                while (errorDiv && !errorDiv.classList.contains('form-error')) {
                    errorDiv = errorDiv.nextElementSibling;
                }
                
                if (!errorDiv) {
                    errorDiv = document.createElement('div');
                    errorDiv.className = 'form-error';
                    errorDiv.textContent = 'Ce champ est obligatoire';
                    input.parentNode.insertBefore(errorDiv, input.nextSibling);
                }
            } else {
                input.classList.remove('error');
                let errorDiv = input.nextElementSibling;
                while (errorDiv) {
                    if (errorDiv.classList && errorDiv.classList.contains('form-error')) {
                        errorDiv.remove();
                        break;
                    }
                    errorDiv = errorDiv.nextElementSibling;
                }
            }
        });
        
        // Validate title length
        const titleInput = document.querySelector('#training_plan_title');
        if (titleInput && titleInput.value) {
            const length = titleInput.value.length;
            if (length < 5 || length > 255) {
                titleInput.classList.add('error');
                isValid = false;
                
                let errorDiv = titleInput.nextElementSibling;
                while (errorDiv && !errorDiv.classList.contains('form-error')) {
                    errorDiv = errorDiv.nextElementSibling;
                }
                
                if (!errorDiv) {
                    errorDiv = document.createElement('div');
                    errorDiv.className = 'form-error';
                    errorDiv.textContent = 'Le titre doit contenir entre 5 et 255 caractères';
                    titleInput.parentNode.insertBefore(errorDiv, titleInput.nextSibling);
                }
            }
        }
        
        // Validate description length
        if (descriptionTextarea && descriptionTextarea.value) {
            const length = descriptionTextarea.value.length;
            if (length < 20 || length > 2000) {
                descriptionTextarea.classList.add('error');
                isValid = false;
                
                let errorDiv = descriptionTextarea.nextElementSibling;
                while (errorDiv && !errorDiv.classList.contains('form-error')) {
                    errorDiv = errorDiv.nextElementSibling;
                }
                
                if (!errorDiv) {
                    errorDiv = document.createElement('div');
                    errorDiv.className = 'form-error';
                    errorDiv.textContent = 'La description doit contenir entre 20 et 2000 caractères';
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
        }, 1500);
    });
    
    // Sparkle effect on create button hover
    if (createButton) {
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
    }
    
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
                let errorDiv = this.nextElementSibling;
                while (errorDiv) {
                    if (errorDiv.classList && errorDiv.classList.contains('form-error')) {
                        errorDiv.remove();
                        break;
                    }
                    errorDiv = errorDiv.nextElementSibling;
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
            this.style.background = 'rgba(52, 152, 219, 0.1)';
            this.style.boxShadow = '0 0 0 3px rgba(52, 152, 219, 0.2)';
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
    const firstInput = form.querySelector('[autofocus]');
    if (firstInput) {
        setTimeout(() => {
            firstInput.focus();
        }, 500);
    }
});
</script>
{% endblock %}", "training_plan/new.html.twig", "C:\\xampp\\htdocs\\esport (3)\\esport\\templates\\training_plan\\new.html.twig");
    }
}
