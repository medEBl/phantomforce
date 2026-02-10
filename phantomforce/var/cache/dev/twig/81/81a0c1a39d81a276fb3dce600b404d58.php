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

/* coaching_session/edit.html.twig */
class __TwigTemplate_ca71ddaad6c9794669d43c070b350670 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaching_session/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaching_session/edit.html.twig"));

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

        yield "Phantom Force - Éditer Session";
        
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
    /* ================= EDIT PAGE STYLES ================= */
    .edit-hero {
        text-align: center;
        padding: 80px 20px 40px;
        position: relative;
        margin-bottom: 40px;
        animation: fadeInUp 0.8s ease-out;
    }

    .edit-hero::after {
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

    .edit-hero h1 {
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

    .edit-hero p {
        color: var(--text-muted);
        font-size: 20px;
        max-width: 700px;
        margin: 0 auto 20px;
        line-height: 1.6;
    }

    /* ================= FORM CONTAINER ================= */
    .form-container {
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: var(--radius-lg);
        padding: 50px;
        box-shadow: var(--shadow-lg);
        max-width: 900px;
        margin: 0 auto 60px;
        position: relative;
        overflow: hidden;
        animation: fadeInUp 0.8s ease-out 0.2s backwards;
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

    .form-container::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: 
            radial-gradient(circle at 20% 50%, rgba(255,45,45,0.05) 0%, transparent 50%),
            radial-gradient(circle at 80% 50%, rgba(255,0,0,0.03) 0%, transparent 50%);
        pointer-events: none;
        z-index: 0;
    }

    /* ================= FORM HEADER ================= */
    .form-header {
        text-align: center;
        margin-bottom: 50px;
        position: relative;
        z-index: 1;
    }

    .session-badge {
        display: inline-block;
        background: linear-gradient(135deg, rgba(255,45,45,0.2), rgba(255,0,0,0.1));
        border: 1px solid rgba(255,45,45,0.4);
        border-radius: 50px;
        padding: 8px 20px;
        font-size: 14px;
        font-weight: 800;
        color: var(--red);
        margin-bottom: 10px;
        animation: badgePulse 2s infinite alternate;
    }

    @keyframes badgePulse {
        0% { box-shadow: 0 0 10px rgba(255,45,45,0.2); }
        100% { box-shadow: 0 0 20px rgba(255,45,45,0.4); }
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

    /* ================= FORM STYLES ================= */
    .form-group {
        margin-bottom: 35px;
        position: relative;
        z-index: 1;
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
    }

    select.form-control {
        appearance: none;
        background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23ff2d2d' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E\");
        background-repeat: no-repeat;
        background-position: right 25px center;
        background-size: 16px;
        padding-right: 60px;
    }

    select.form-control option {
        background: var(--bg-card);
        color: var(--text-light);
        padding: 10px;
    }

    select.form-control option:hover {
        background: var(--red);
        color: white;
    }

    select.form-control:focus option:checked {
        background: var(--red);
        color: white;
    }

    /* ================= TRAINING PLAN SELECT STYLES ================= */
    .training-plan-select {
        position: relative;
    }

    .training-plan-select .form-control {
        background: rgba(255, 45, 45, 0.05);
        border: 2px solid rgba(255, 45, 45, 0.2);
        font-weight: 600;
        padding-left: 60px;
    }

    .training-plan-select::before {
        content: '📋';
        position: absolute;
        left: 25px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 20px;
        color: var(--red);
        z-index: 2;
        pointer-events: none;
    }

    .plan-info {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-top: 10px;
        font-size: 13px;
        color: var(--text-muted);
    }

    .plan-info .current-plan {
        background: rgba(255, 45, 45, 0.1);
        padding: 4px 12px;
        border-radius: 20px;
        font-weight: 600;
        color: var(--red);
        border: 1px solid rgba(255, 45, 45, 0.3);
    }

    textarea.form-control {
        min-height: 180px;
        resize: vertical;
        line-height: 1.6;
        padding: 20px 25px;
    }

    /* ================= FORM ROW GRID ================= */
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

    /* ================= DATE TIME INPUT ================= */
    .datetime-input {
        position: relative;
    }

    .datetime-input::after {
        content: '📅';
        position: absolute;
        right: 25px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 20px;
        opacity: 0.7;
        pointer-events: none;
        transition: var(--transition);
        z-index: 2;
    }

    .datetime-input:focus-within::after {
        opacity: 1;
        transform: translateY(-50%) scale(1.1);
    }

    /* ================= FORM ICONS ================= */
    .form-icon {
        position: absolute;
        right: 25px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--text-muted);
        font-size: 20px;
        pointer-events: none;
        transition: var(--transition);
        z-index: 2;
    }

    .form-group:hover .form-icon {
        color: var(--red);
        transform: translateY(-50%) scale(1.1);
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

    .btn-save {
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

    .btn-save::before {
        content: '💾';
        font-size: 18px;
    }

    .btn-save::after {
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

    .btn-save:hover::after {
        width: 400px;
        height: 400px;
    }

    .btn-save:hover {
        transform: translateY(-4px) scale(1.05);
        box-shadow: 0 15px 30px rgba(255, 0, 0, 0.4);
        background: linear-gradient(135deg, #ff2d2d, #ff0000, #ff2d2d);
        animation: btnPulse 1s infinite alternate;
    }

    @keyframes btnPulse {
        0% { box-shadow: 0 15px 30px rgba(255, 0, 0, 0.4); }
        100% { box-shadow: 0 15px 40px rgba(255, 0, 0, 0.6); }
    }

    /* ================= DELETE SECTION ================= */
    .delete-section {
        background: rgba(255, 45, 45, 0.08);
        border: 1px solid rgba(255, 45, 45, 0.3);
        border-radius: var(--radius-lg);
        padding: 40px;
        margin-top: 50px;
        text-align: center;
        animation: fadeInUp 0.8s ease-out 0.4s backwards;
        position: relative;
        overflow: hidden;
    }

    .delete-section::before {
        content: '⚠️';
        position: absolute;
        top: 20px;
        left: 20px;
        font-size: 24px;
        opacity: 0.3;
    }

    .delete-section::after {
        content: '⚠️';
        position: absolute;
        bottom: 20px;
        right: 20px;
        font-size: 24px;
        opacity: 0.3;
    }

    .delete-section h3 {
        font-size: 24px;
        color: var(--red);
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
    }

    .delete-section h3::before {
        content: '🔥';
        font-size: 28px;
    }

    .delete-section p {
        color: var(--text-muted);
        font-size: 15px;
        margin-bottom: 25px;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
        line-height: 1.7;
    }

    .btn-delete {
        padding: 15px 35px;
        background: linear-gradient(135deg, #8b0000, #ff0000, #8b0000);
        border: none;
        border-radius: 10px;
        color: white;
        font-weight: 800;
        font-size: 15px;
        cursor: pointer;
        transition: var(--transition);
        display: inline-flex;
        align-items: center;
        gap: 12px;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 20px rgba(139, 0, 0, 0.3);
    }

    .btn-delete::before {
        content: '🗑️';
        font-size: 18px;
    }

    .btn-delete::after {
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

    .btn-delete:hover::after {
        width: 400px;
        height: 400px;
    }

    .btn-delete:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 15px 30px rgba(139, 0, 0, 0.5);
        background: linear-gradient(135deg, #ff0000, #8b0000, #ff0000);
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
        .edit-hero h1 {
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
        
        .btn-back, .btn-save, .btn-delete {
            width: 100%;
            justify-content: center;
        }
        
        .form-header h2 {
            font-size: 26px;
        }
        
        .training-plan-select::before {
            left: 15px;
        }
        
        select.form-control {
            padding-left: 50px;
            background-position: right 15px center;
        }
    }

    /* ================= DARK THEME ENHANCEMENTS ================= */
    input[type=\"datetime-local\"]::-webkit-calendar-picker-indicator {
        filter: invert(1) brightness(0.8);
        opacity: 0.7;
        cursor: pointer;
        width: 24px;
        height: 24px;
    }

    input[type=\"datetime-local\"]::-webkit-calendar-picker-indicator:hover {
        opacity: 1;
        filter: invert(1) brightness(1);
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 739
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

        // line 740
        yield "<div class=\"edit-hero\">
    <h1>🎮 ÉDITION SESSION</h1>
    <p>Modifiez les détails de votre session de coaching pour optimiser les performances</p>
</div>

<div class=\"form-container\">
    <div class=\"form-header\">
        <div class=\"session-badge\">Session #";
        // line 747
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 747, $this->source); })()), "id", [], "any", false, false, false, 747), "html", null, true);
        yield "</div>
        <h2>MODIFIER LA SESSION</h2>
        <p>Mettez à jour les informations et sauvegardez vos modifications</p>
    </div>

    ";
        // line 752
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 752, $this->source); })()), 'form_start', ["attr" => ["class" => "coaching-form", "id" => "editForm"]]);
        yield "
    
    <div class=\"form-row\">
        <div class=\"form-group\">
            ";
        // line 756
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 756, $this->source); })()), "coach_id", [], "any", false, false, false, 756), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            <div class=\"position-relative\">
                ";
        // line 758
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 758, $this->source); })()), "coach_id", [], "any", false, false, false, 758), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ID du coach"]]);
        yield "
                <span class=\"form-icon\">👨‍🏫</span>
            </div>
            ";
        // line 761
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 761, $this->source); })()), "coach_id", [], "any", false, false, false, 761), 'errors');
        yield "
        </div>

        <div class=\"form-group\">
            ";
        // line 765
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 765, $this->source); })()), "team_id", [], "any", false, false, false, 765), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            <div class=\"position-relative\">
                ";
        // line 767
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 767, $this->source); })()), "team_id", [], "any", false, false, false, 767), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ID de l'équipe"]]);
        yield "
                <span class=\"form-icon\">👥</span>
            </div>
            ";
        // line 770
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 770, $this->source); })()), "team_id", [], "any", false, false, false, 770), 'errors');
        yield "
        </div>
    </div>

    <div class=\"form-row\">
        <div class=\"form-group\">
            ";
        // line 776
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 776, $this->source); })()), "session_date", [], "any", false, false, false, 776), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            <div class=\"datetime-input\">
                ";
        // line 778
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 778, $this->source); })()), "session_date", [], "any", false, false, false, 778), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            </div>
            ";
        // line 780
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 780, $this->source); })()), "session_date", [], "any", false, false, false, 780), 'errors');
        yield "
        </div>

        <div class=\"form-group\">
            ";
        // line 784
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 784, $this->source); })()), "duration", [], "any", false, false, false, 784), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            <div class=\"position-relative\">
                ";
        // line 786
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 786, $this->source); })()), "duration", [], "any", false, false, false, 786), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Durée en minutes"]]);
        yield "
                <span class=\"form-icon\">⏱️</span>
            </div>
            ";
        // line 789
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 789, $this->source); })()), "duration", [], "any", false, false, false, 789), 'errors');
        yield "
        </div>
    </div>

    <!-- CHAMP TRAINING PLAN AJOUTÉ -->
    <div class=\"form-group training-plan-select\">
        ";
        // line 795
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 795, $this->source); })()), "training_plan", [], "any", false, false, false, 795), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
        <div class=\"position-relative\">
            ";
        // line 797
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 797, $this->source); })()), "training_plan", [], "any", false, false, false, 797), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        </div>
        ";
        // line 799
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 799, $this->source); })()), "trainingPlan", [], "any", false, false, false, 799)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 800
            yield "            <div class=\"plan-info\">
                <span class=\"current-plan\">Plan actuel : ";
            // line 801
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 801, $this->source); })()), "trainingPlan", [], "any", false, false, false, 801), "title", [], "any", false, false, false, 801), "html", null, true);
            yield "</span>
                <span>Focus : ";
            // line 802
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 802, $this->source); })()), "trainingPlan", [], "any", false, false, false, 802), "focusArea", [], "any", false, false, false, 802), "html", null, true);
            yield "</span>
                <span>Difficulté : ";
            // line 803
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 803, $this->source); })()), "trainingPlan", [], "any", false, false, false, 803), "difficultyLevel", [], "any", false, false, false, 803), "html", null, true);
            yield "</span>
            </div>
        ";
        }
        // line 806
        yield "        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 806, $this->source); })()), "training_plan", [], "any", false, false, false, 806), 'errors');
        yield "
    </div>

    <div class=\"form-group\">
        ";
        // line 810
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 810, $this->source); })()), "notes", [], "any", false, false, false, 810), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
        ";
        // line 811
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 811, $this->source); })()), "notes", [], "any", false, false, false, 811), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Notes détaillées sur la session, stratégies, points d'amélioration...", "rows" => "8"]]);
        // line 815
        yield "
        <div class=\"char-counter\" id=\"notesCounter\">
            <span id=\"notesCount\">0</span> / 2000 caractères
        </div>
        ";
        // line 819
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 819, $this->source); })()), "notes", [], "any", false, false, false, 819), 'errors');
        yield "
    </div>

    <div class=\"form-actions\">
        <a href=\"";
        // line 823
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_index");
        yield "\" class=\"btn-back\">
            Annuler & Retour
        </a>
        
        <button type=\"submit\" class=\"btn-save\" id=\"saveButton\">
            Mettre à jour
        </button>
    </div>
    
    ";
        // line 832
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 832, $this->source); })()), 'form_end');
        yield "
</div>

<div class=\"delete-section\">
    <h3>ZONE DE DANGER</h3>
    <p>⚠️ La suppression est définitive et irréversible. Cette action supprimera toutes les données associées à cette session de coaching. Assurez-vous d'avoir sauvegardé toutes les informations importantes avant de continuer.</p>
    
    <form method=\"post\" action=\"";
        // line 839
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 839, $this->source); })()), "id", [], "any", false, false, false, 839)]), "html", null, true);
        yield "\" 
          onsubmit=\"return confirmDelete()\" id=\"deleteForm\">
        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 841
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 841, $this->source); })()), "id", [], "any", false, false, false, 841))), "html", null, true);
        yield "\">
        <button type=\"submit\" class=\"btn-delete\" id=\"deleteButton\">
            Supprimer cette session
        </button>
    </form>
</div>

<div class=\"loading-overlay\" id=\"loadingOverlay\">
    <div class=\"loading-spinner\"></div>
    <div class=\"loading-text\">MISE À JOUR</div>
</div>

<div class=\"success-message\" id=\"successMessage\">
    ✅ Session mise à jour avec succès !
</div>

";
        // line 857
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

        // line 858
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('editForm');
    const saveButton = document.getElementById('saveButton');
    const deleteButton = document.getElementById('deleteButton');
    const loadingOverlay = document.getElementById('loadingOverlay');
    const successMessage = document.getElementById('successMessage');
    const notesTextarea = document.querySelector('#coaching_session_notes');
    const notesCounter = document.getElementById('notesCounter');
    const notesCount = document.getElementById('notesCount');
    const trainingPlanSelect = document.querySelector('#coaching_session_training_plan');
    
    // Initialize notes counter
    if (notesTextarea && notesCounter && notesCount) {
        function updateCounter() {
            const length = notesTextarea.value.length;
            notesCount.textContent = length;
            
            notesCounter.classList.remove('warning', 'danger');
            
            if (length > 1500) {
                notesCounter.classList.add('warning');
            }
            
            if (length > 1800) {
                notesCounter.classList.add('danger');
            }
        }
        
        notesTextarea.addEventListener('input', updateCounter);
        updateCounter(); // Initial count
    }
    
    // Enhance training plan select
    if (trainingPlanSelect) {
        // Add custom styling to options
        trainingPlanSelect.addEventListener('focus', function() {
            this.style.background = 'rgba(255, 45, 45, 0.1)';
            this.parentElement.style.transform = 'translateY(-3px)';
        });
        
        trainingPlanSelect.addEventListener('blur', function() {
            this.style.background = '';
            this.parentElement.style.transform = 'translateY(0)';
        });
        
        // Highlight selected option
        trainingPlanSelect.addEventListener('change', function() {
            if (this.value) {
                this.style.borderColor = 'var(--red)';
                this.style.boxShadow = '0 0 0 2px rgba(255, 45, 45, 0.2)';
            }
        });
        
        // Initialize border if already has value
        if (trainingPlanSelect.value) {
            trainingPlanSelect.style.borderColor = 'var(--red)';
            trainingPlanSelect.style.boxShadow = '0 0 0 2px rgba(255, 45, 45, 0.2)';
        }
    }
    
    // Form validation and submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Basic validation
        let isValid = true;
        const requiredInputs = form.querySelectorAll('.form-control[required], select[required]');
        
        requiredInputs.forEach(input => {
            if (!input.value.trim() && input.type !== 'select-one') {
                input.classList.add('error');
                isValid = false;
                
                const errorDiv = document.createElement('div');
                errorDiv.className = 'form-error';
                errorDiv.textContent = 'Ce champ est obligatoire';
                
                if (!input.nextElementSibling || !input.nextElementSibling.classList.contains('form-error')) {
                    input.parentNode.insertBefore(errorDiv, input.nextSibling);
                }
            } else if (input.type === 'select-one' && !input.value) {
                input.classList.add('error');
                isValid = false;
                
                const errorDiv = document.createElement('div');
                errorDiv.className = 'form-error';
                errorDiv.textContent = 'Veuillez sélectionner un plan d\\'entraînement';
                
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
        
        // Validate duration (multiple of 15)
        const durationInput = document.querySelector('#coaching_session_duration');
        if (durationInput && durationInput.value) {
            const duration = parseInt(durationInput.value);
            if (duration % 15 !== 0) {
                durationInput.classList.add('error');
                isValid = false;
                
                const errorDiv = document.createElement('div');
                errorDiv.className = 'form-error';
                errorDiv.textContent = 'La durée doit être un multiple de 15 minutes';
                
                if (!durationInput.nextElementSibling || !durationInput.nextElementSibling.classList.contains('form-error')) {
                    durationInput.parentNode.insertBefore(errorDiv, durationInput.nextSibling);
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
    
    // Delete confirmation
    function confirmDelete() {
        const confirmation = confirm(\"🚨 DANGER - SUPPRESSION DÉFINITIVE\\n\\nÊtes-vous ABSOLUMENT sûr de vouloir supprimer cette session ?\\n\\n❌ Cette action est IRREVERSIBLE !\\n❌ Toutes les données seront perdues\\n❌ Impossible de récupérer\\n\\nTapez OK pour confirmer ou Annuler pour revenir en arrière.\");
        
        if (confirmation) {
            deleteButton.innerHTML = '<span class=\"spinner-border spinner-border-sm\"></span> Suppression...';
            deleteButton.disabled = true;
            deleteButton.style.opacity = '0.7';
            
            document.body.style.animation = 'shake 0.8s ease-in-out';
            setTimeout(() => {
                document.body.style.animation = '';
            }, 800);
            
            return true;
        }
        return false;
    }
    
    // Real-time validation
    const formControls = document.querySelectorAll('.form-control, select');
    
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
    const dateInput = document.querySelector('input[type=\"datetime-local\"]');
    if (dateInput) {
        // Set minimum date to today
        const today = new Date();
        const localDateTime = new Date(today.getTime() - today.getTimezoneOffset() * 60000)
            .toISOString()
            .slice(0, 16);
        dateInput.min = localDateTime;
        
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
        return "coaching_session/edit.html.twig";
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
        return array (  1081 => 858,  1058 => 857,  1039 => 841,  1034 => 839,  1024 => 832,  1012 => 823,  1005 => 819,  999 => 815,  997 => 811,  993 => 810,  985 => 806,  979 => 803,  975 => 802,  971 => 801,  968 => 800,  966 => 799,  961 => 797,  956 => 795,  947 => 789,  941 => 786,  936 => 784,  929 => 780,  924 => 778,  919 => 776,  910 => 770,  904 => 767,  899 => 765,  892 => 761,  886 => 758,  881 => 756,  874 => 752,  866 => 747,  857 => 740,  844 => 739,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Phantom Force - Éditer Session{% endblock %}

{% block inline_styles %}
<style>
    /* ================= EDIT PAGE STYLES ================= */
    .edit-hero {
        text-align: center;
        padding: 80px 20px 40px;
        position: relative;
        margin-bottom: 40px;
        animation: fadeInUp 0.8s ease-out;
    }

    .edit-hero::after {
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

    .edit-hero h1 {
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

    .edit-hero p {
        color: var(--text-muted);
        font-size: 20px;
        max-width: 700px;
        margin: 0 auto 20px;
        line-height: 1.6;
    }

    /* ================= FORM CONTAINER ================= */
    .form-container {
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: var(--radius-lg);
        padding: 50px;
        box-shadow: var(--shadow-lg);
        max-width: 900px;
        margin: 0 auto 60px;
        position: relative;
        overflow: hidden;
        animation: fadeInUp 0.8s ease-out 0.2s backwards;
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

    .form-container::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: 
            radial-gradient(circle at 20% 50%, rgba(255,45,45,0.05) 0%, transparent 50%),
            radial-gradient(circle at 80% 50%, rgba(255,0,0,0.03) 0%, transparent 50%);
        pointer-events: none;
        z-index: 0;
    }

    /* ================= FORM HEADER ================= */
    .form-header {
        text-align: center;
        margin-bottom: 50px;
        position: relative;
        z-index: 1;
    }

    .session-badge {
        display: inline-block;
        background: linear-gradient(135deg, rgba(255,45,45,0.2), rgba(255,0,0,0.1));
        border: 1px solid rgba(255,45,45,0.4);
        border-radius: 50px;
        padding: 8px 20px;
        font-size: 14px;
        font-weight: 800;
        color: var(--red);
        margin-bottom: 10px;
        animation: badgePulse 2s infinite alternate;
    }

    @keyframes badgePulse {
        0% { box-shadow: 0 0 10px rgba(255,45,45,0.2); }
        100% { box-shadow: 0 0 20px rgba(255,45,45,0.4); }
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

    /* ================= FORM STYLES ================= */
    .form-group {
        margin-bottom: 35px;
        position: relative;
        z-index: 1;
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
    }

    select.form-control {
        appearance: none;
        background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23ff2d2d' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E\");
        background-repeat: no-repeat;
        background-position: right 25px center;
        background-size: 16px;
        padding-right: 60px;
    }

    select.form-control option {
        background: var(--bg-card);
        color: var(--text-light);
        padding: 10px;
    }

    select.form-control option:hover {
        background: var(--red);
        color: white;
    }

    select.form-control:focus option:checked {
        background: var(--red);
        color: white;
    }

    /* ================= TRAINING PLAN SELECT STYLES ================= */
    .training-plan-select {
        position: relative;
    }

    .training-plan-select .form-control {
        background: rgba(255, 45, 45, 0.05);
        border: 2px solid rgba(255, 45, 45, 0.2);
        font-weight: 600;
        padding-left: 60px;
    }

    .training-plan-select::before {
        content: '📋';
        position: absolute;
        left: 25px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 20px;
        color: var(--red);
        z-index: 2;
        pointer-events: none;
    }

    .plan-info {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-top: 10px;
        font-size: 13px;
        color: var(--text-muted);
    }

    .plan-info .current-plan {
        background: rgba(255, 45, 45, 0.1);
        padding: 4px 12px;
        border-radius: 20px;
        font-weight: 600;
        color: var(--red);
        border: 1px solid rgba(255, 45, 45, 0.3);
    }

    textarea.form-control {
        min-height: 180px;
        resize: vertical;
        line-height: 1.6;
        padding: 20px 25px;
    }

    /* ================= FORM ROW GRID ================= */
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

    /* ================= DATE TIME INPUT ================= */
    .datetime-input {
        position: relative;
    }

    .datetime-input::after {
        content: '📅';
        position: absolute;
        right: 25px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 20px;
        opacity: 0.7;
        pointer-events: none;
        transition: var(--transition);
        z-index: 2;
    }

    .datetime-input:focus-within::after {
        opacity: 1;
        transform: translateY(-50%) scale(1.1);
    }

    /* ================= FORM ICONS ================= */
    .form-icon {
        position: absolute;
        right: 25px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--text-muted);
        font-size: 20px;
        pointer-events: none;
        transition: var(--transition);
        z-index: 2;
    }

    .form-group:hover .form-icon {
        color: var(--red);
        transform: translateY(-50%) scale(1.1);
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

    .btn-save {
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

    .btn-save::before {
        content: '💾';
        font-size: 18px;
    }

    .btn-save::after {
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

    .btn-save:hover::after {
        width: 400px;
        height: 400px;
    }

    .btn-save:hover {
        transform: translateY(-4px) scale(1.05);
        box-shadow: 0 15px 30px rgba(255, 0, 0, 0.4);
        background: linear-gradient(135deg, #ff2d2d, #ff0000, #ff2d2d);
        animation: btnPulse 1s infinite alternate;
    }

    @keyframes btnPulse {
        0% { box-shadow: 0 15px 30px rgba(255, 0, 0, 0.4); }
        100% { box-shadow: 0 15px 40px rgba(255, 0, 0, 0.6); }
    }

    /* ================= DELETE SECTION ================= */
    .delete-section {
        background: rgba(255, 45, 45, 0.08);
        border: 1px solid rgba(255, 45, 45, 0.3);
        border-radius: var(--radius-lg);
        padding: 40px;
        margin-top: 50px;
        text-align: center;
        animation: fadeInUp 0.8s ease-out 0.4s backwards;
        position: relative;
        overflow: hidden;
    }

    .delete-section::before {
        content: '⚠️';
        position: absolute;
        top: 20px;
        left: 20px;
        font-size: 24px;
        opacity: 0.3;
    }

    .delete-section::after {
        content: '⚠️';
        position: absolute;
        bottom: 20px;
        right: 20px;
        font-size: 24px;
        opacity: 0.3;
    }

    .delete-section h3 {
        font-size: 24px;
        color: var(--red);
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
    }

    .delete-section h3::before {
        content: '🔥';
        font-size: 28px;
    }

    .delete-section p {
        color: var(--text-muted);
        font-size: 15px;
        margin-bottom: 25px;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
        line-height: 1.7;
    }

    .btn-delete {
        padding: 15px 35px;
        background: linear-gradient(135deg, #8b0000, #ff0000, #8b0000);
        border: none;
        border-radius: 10px;
        color: white;
        font-weight: 800;
        font-size: 15px;
        cursor: pointer;
        transition: var(--transition);
        display: inline-flex;
        align-items: center;
        gap: 12px;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 20px rgba(139, 0, 0, 0.3);
    }

    .btn-delete::before {
        content: '🗑️';
        font-size: 18px;
    }

    .btn-delete::after {
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

    .btn-delete:hover::after {
        width: 400px;
        height: 400px;
    }

    .btn-delete:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 15px 30px rgba(139, 0, 0, 0.5);
        background: linear-gradient(135deg, #ff0000, #8b0000, #ff0000);
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
        .edit-hero h1 {
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
        
        .btn-back, .btn-save, .btn-delete {
            width: 100%;
            justify-content: center;
        }
        
        .form-header h2 {
            font-size: 26px;
        }
        
        .training-plan-select::before {
            left: 15px;
        }
        
        select.form-control {
            padding-left: 50px;
            background-position: right 15px center;
        }
    }

    /* ================= DARK THEME ENHANCEMENTS ================= */
    input[type=\"datetime-local\"]::-webkit-calendar-picker-indicator {
        filter: invert(1) brightness(0.8);
        opacity: 0.7;
        cursor: pointer;
        width: 24px;
        height: 24px;
    }

    input[type=\"datetime-local\"]::-webkit-calendar-picker-indicator:hover {
        opacity: 1;
        filter: invert(1) brightness(1);
    }
</style>
{% endblock %}

{% block body %}
<div class=\"edit-hero\">
    <h1>🎮 ÉDITION SESSION</h1>
    <p>Modifiez les détails de votre session de coaching pour optimiser les performances</p>
</div>

<div class=\"form-container\">
    <div class=\"form-header\">
        <div class=\"session-badge\">Session #{{ coaching_session.id }}</div>
        <h2>MODIFIER LA SESSION</h2>
        <p>Mettez à jour les informations et sauvegardez vos modifications</p>
    </div>

    {{ form_start(form, {'attr': {'class': 'coaching-form', 'id': 'editForm'}}) }}
    
    <div class=\"form-row\">
        <div class=\"form-group\">
            {{ form_label(form.coach_id, null, {'label_attr': {'class': 'form-label'}}) }}
            <div class=\"position-relative\">
                {{ form_widget(form.coach_id, {'attr': {'class': 'form-control', 'placeholder': 'ID du coach'}}) }}
                <span class=\"form-icon\">👨‍🏫</span>
            </div>
            {{ form_errors(form.coach_id) }}
        </div>

        <div class=\"form-group\">
            {{ form_label(form.team_id, null, {'label_attr': {'class': 'form-label'}}) }}
            <div class=\"position-relative\">
                {{ form_widget(form.team_id, {'attr': {'class': 'form-control', 'placeholder': 'ID de l\\'équipe'}}) }}
                <span class=\"form-icon\">👥</span>
            </div>
            {{ form_errors(form.team_id) }}
        </div>
    </div>

    <div class=\"form-row\">
        <div class=\"form-group\">
            {{ form_label(form.session_date, null, {'label_attr': {'class': 'form-label'}}) }}
            <div class=\"datetime-input\">
                {{ form_widget(form.session_date, {'attr': {'class': 'form-control'}}) }}
            </div>
            {{ form_errors(form.session_date) }}
        </div>

        <div class=\"form-group\">
            {{ form_label(form.duration, null, {'label_attr': {'class': 'form-label'}}) }}
            <div class=\"position-relative\">
                {{ form_widget(form.duration, {'attr': {'class': 'form-control', 'placeholder': 'Durée en minutes'}}) }}
                <span class=\"form-icon\">⏱️</span>
            </div>
            {{ form_errors(form.duration) }}
        </div>
    </div>

    <!-- CHAMP TRAINING PLAN AJOUTÉ -->
    <div class=\"form-group training-plan-select\">
        {{ form_label(form.training_plan, null, {'label_attr': {'class': 'form-label'}}) }}
        <div class=\"position-relative\">
            {{ form_widget(form.training_plan, {'attr': {'class': 'form-control'}}) }}
        </div>
        {% if coaching_session.trainingPlan %}
            <div class=\"plan-info\">
                <span class=\"current-plan\">Plan actuel : {{ coaching_session.trainingPlan.title }}</span>
                <span>Focus : {{ coaching_session.trainingPlan.focusArea }}</span>
                <span>Difficulté : {{ coaching_session.trainingPlan.difficultyLevel }}</span>
            </div>
        {% endif %}
        {{ form_errors(form.training_plan) }}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.notes, null, {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.notes, {'attr': {
            'class': 'form-control',
            'placeholder': 'Notes détaillées sur la session, stratégies, points d\\'amélioration...',
            'rows': '8'
        }}) }}
        <div class=\"char-counter\" id=\"notesCounter\">
            <span id=\"notesCount\">0</span> / 2000 caractères
        </div>
        {{ form_errors(form.notes) }}
    </div>

    <div class=\"form-actions\">
        <a href=\"{{ path('app_coaching_session_index') }}\" class=\"btn-back\">
            Annuler & Retour
        </a>
        
        <button type=\"submit\" class=\"btn-save\" id=\"saveButton\">
            Mettre à jour
        </button>
    </div>
    
    {{ form_end(form) }}
</div>

<div class=\"delete-section\">
    <h3>ZONE DE DANGER</h3>
    <p>⚠️ La suppression est définitive et irréversible. Cette action supprimera toutes les données associées à cette session de coaching. Assurez-vous d'avoir sauvegardé toutes les informations importantes avant de continuer.</p>
    
    <form method=\"post\" action=\"{{ path('app_coaching_session_delete', {'id': coaching_session.id}) }}\" 
          onsubmit=\"return confirmDelete()\" id=\"deleteForm\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ coaching_session.id) }}\">
        <button type=\"submit\" class=\"btn-delete\" id=\"deleteButton\">
            Supprimer cette session
        </button>
    </form>
</div>

<div class=\"loading-overlay\" id=\"loadingOverlay\">
    <div class=\"loading-spinner\"></div>
    <div class=\"loading-text\">MISE À JOUR</div>
</div>

<div class=\"success-message\" id=\"successMessage\">
    ✅ Session mise à jour avec succès !
</div>

{% block javascripts %}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('editForm');
    const saveButton = document.getElementById('saveButton');
    const deleteButton = document.getElementById('deleteButton');
    const loadingOverlay = document.getElementById('loadingOverlay');
    const successMessage = document.getElementById('successMessage');
    const notesTextarea = document.querySelector('#coaching_session_notes');
    const notesCounter = document.getElementById('notesCounter');
    const notesCount = document.getElementById('notesCount');
    const trainingPlanSelect = document.querySelector('#coaching_session_training_plan');
    
    // Initialize notes counter
    if (notesTextarea && notesCounter && notesCount) {
        function updateCounter() {
            const length = notesTextarea.value.length;
            notesCount.textContent = length;
            
            notesCounter.classList.remove('warning', 'danger');
            
            if (length > 1500) {
                notesCounter.classList.add('warning');
            }
            
            if (length > 1800) {
                notesCounter.classList.add('danger');
            }
        }
        
        notesTextarea.addEventListener('input', updateCounter);
        updateCounter(); // Initial count
    }
    
    // Enhance training plan select
    if (trainingPlanSelect) {
        // Add custom styling to options
        trainingPlanSelect.addEventListener('focus', function() {
            this.style.background = 'rgba(255, 45, 45, 0.1)';
            this.parentElement.style.transform = 'translateY(-3px)';
        });
        
        trainingPlanSelect.addEventListener('blur', function() {
            this.style.background = '';
            this.parentElement.style.transform = 'translateY(0)';
        });
        
        // Highlight selected option
        trainingPlanSelect.addEventListener('change', function() {
            if (this.value) {
                this.style.borderColor = 'var(--red)';
                this.style.boxShadow = '0 0 0 2px rgba(255, 45, 45, 0.2)';
            }
        });
        
        // Initialize border if already has value
        if (trainingPlanSelect.value) {
            trainingPlanSelect.style.borderColor = 'var(--red)';
            trainingPlanSelect.style.boxShadow = '0 0 0 2px rgba(255, 45, 45, 0.2)';
        }
    }
    
    // Form validation and submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Basic validation
        let isValid = true;
        const requiredInputs = form.querySelectorAll('.form-control[required], select[required]');
        
        requiredInputs.forEach(input => {
            if (!input.value.trim() && input.type !== 'select-one') {
                input.classList.add('error');
                isValid = false;
                
                const errorDiv = document.createElement('div');
                errorDiv.className = 'form-error';
                errorDiv.textContent = 'Ce champ est obligatoire';
                
                if (!input.nextElementSibling || !input.nextElementSibling.classList.contains('form-error')) {
                    input.parentNode.insertBefore(errorDiv, input.nextSibling);
                }
            } else if (input.type === 'select-one' && !input.value) {
                input.classList.add('error');
                isValid = false;
                
                const errorDiv = document.createElement('div');
                errorDiv.className = 'form-error';
                errorDiv.textContent = 'Veuillez sélectionner un plan d\\'entraînement';
                
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
        
        // Validate duration (multiple of 15)
        const durationInput = document.querySelector('#coaching_session_duration');
        if (durationInput && durationInput.value) {
            const duration = parseInt(durationInput.value);
            if (duration % 15 !== 0) {
                durationInput.classList.add('error');
                isValid = false;
                
                const errorDiv = document.createElement('div');
                errorDiv.className = 'form-error';
                errorDiv.textContent = 'La durée doit être un multiple de 15 minutes';
                
                if (!durationInput.nextElementSibling || !durationInput.nextElementSibling.classList.contains('form-error')) {
                    durationInput.parentNode.insertBefore(errorDiv, durationInput.nextSibling);
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
    
    // Delete confirmation
    function confirmDelete() {
        const confirmation = confirm(\"🚨 DANGER - SUPPRESSION DÉFINITIVE\\n\\nÊtes-vous ABSOLUMENT sûr de vouloir supprimer cette session ?\\n\\n❌ Cette action est IRREVERSIBLE !\\n❌ Toutes les données seront perdues\\n❌ Impossible de récupérer\\n\\nTapez OK pour confirmer ou Annuler pour revenir en arrière.\");
        
        if (confirmation) {
            deleteButton.innerHTML = '<span class=\"spinner-border spinner-border-sm\"></span> Suppression...';
            deleteButton.disabled = true;
            deleteButton.style.opacity = '0.7';
            
            document.body.style.animation = 'shake 0.8s ease-in-out';
            setTimeout(() => {
                document.body.style.animation = '';
            }, 800);
            
            return true;
        }
        return false;
    }
    
    // Real-time validation
    const formControls = document.querySelectorAll('.form-control, select');
    
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
    const dateInput = document.querySelector('input[type=\"datetime-local\"]');
    if (dateInput) {
        // Set minimum date to today
        const today = new Date();
        const localDateTime = new Date(today.getTime() - today.getTimezoneOffset() * 60000)
            .toISOString()
            .slice(0, 16);
        dateInput.min = localDateTime;
        
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
});
</script>
{% endblock %}
{% endblock %}", "coaching_session/edit.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\coaching_session\\edit.html.twig");
    }
}
