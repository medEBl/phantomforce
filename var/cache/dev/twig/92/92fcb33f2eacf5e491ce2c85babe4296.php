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

/* coaching_session/new.html.twig */
class __TwigTemplate_29f6006b5c1374a6c4ceed1667763ba8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaching_session/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaching_session/new.html.twig"));

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

        yield "Phantom Force - Nouvelle Session";
        
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

    /* ================= TRAINING PLAN SELECT STYLES ================= */
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

    select.form-control option:hover {
        background: var(--red);
        color: white;
    }

    select.form-control:focus option:checked {
        background: var(--red);
        color: white;
    }

    .training-plan-select {
        position: relative;
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

    .training-plan-select .form-control {
        padding-left: 60px;
        background: rgba(255, 45, 45, 0.05);
        border: 2px solid rgba(255, 45, 45, 0.2);
        font-weight: 600;
    }

    .plan-preview {
        margin-top: 15px;
        padding: 15px;
        background: rgba(255, 45, 45, 0.1);
        border: 1px solid rgba(255, 45, 45, 0.2);
        border-radius: var(--radius);
        display: none;
        animation: fadeIn 0.3s ease-out;
    }

    .plan-preview.active {
        display: block;
    }

    .plan-preview h4 {
        color: var(--red);
        font-size: 14px;
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .plan-preview p {
        color: var(--text-muted);
        font-size: 13px;
        line-height: 1.5;
        margin-bottom: 10px;
    }

    .plan-tags {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
    }

    .plan-tag {
        font-size: 11px;
        padding: 3px 10px;
        border-radius: 20px;
        background: rgba(255, 45, 45, 0.2);
        color: var(--red);
        font-weight: 600;
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
        content: '🎮';
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

    /* ================= COACH & TEAM SELECT STYLES ================= */
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
        color: var(--red);
        z-index: 2;
        pointer-events: none;
    }

    .coach-preview, .team-preview {
        margin-top: 10px;
        padding: 10px 15px;
        background: rgba(255, 45, 45, 0.05);
        border: 1px solid rgba(255, 45, 45, 0.1);
        border-radius: var(--radius);
        font-size: 13px;
        color: var(--text-muted);
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .coach-preview i, .team-preview i {
        color: var(--red);
        font-size: 14px;
    }

    .preview-highlight {
        color: var(--red);
        font-weight: 600;
        margin-left: 5px;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 774
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

        // line 775
        yield "<div class=\"create-hero\">
    <h1>🔥 NOUVELLE SESSION</h1>
    <p>Créez une nouvelle session de coaching pour booster les performances de votre équipe</p>
</div>

<div class=\"creation-guide\">
    <h3>Conseils Phantom Force</h3>
    <div class=\"guide-list\">
        <div class=\"guide-item\">
            <div class=\"guide-icon\">🎯</div>
            <div class=\"guide-content\">
                <h4>Objectifs agressifs</h4>
                <p>Définissez des objectifs ambitieux et spécifiques pour dominer</p>
            </div>
        </div>
        <div class=\"guide-item\">
            <div class=\"guide-icon\">⚡</div>
            <div class=\"guide-content\">
                <h4>Intensité maximale</h4>
                <p>Maintenez une intensité élevée pendant 60-90 minutes</p>
            </div>
        </div>
        <div class=\"guide-item\">
            <div class=\"guide-icon\">📊</div>
            <div class=\"guide-content\">
                <h4>Analyse stratégique</h4>
                <p>Documentez chaque détail pour l'analyse post-combat</p>
            </div>
        </div>
        <div class=\"guide-item\">
            <div class=\"guide-icon\">🏆</div>
            <div class=\"guide-content\">
                <h4>Mindset gagnant</h4>
                <p>Approchez chaque session avec un mindset de champion</p>
            </div>
        </div>
    </div>
</div>

<div class=\"form-container\">
    <div class=\"form-header\">
        <h2>CRÉATION DE SESSION</h2>
        <p>Remplissez les informations ci-dessous pour créer une nouvelle session de coaching</p>
    </div>

    ";
        // line 820
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 820, $this->source); })()), 'form_start', ["attr" => ["class" => "coaching-form", "id" => "createForm", "novalidate" => "novalidate"]]);
        yield "
    
    <div class=\"form-row\">
        <div class=\"form-group\">
            ";
        // line 824
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 824, $this->source); })()), "coach", [], "any", false, false, false, 824), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            <div class=\"select-with-info\">
                <span class=\"select-icon\">👨‍🏫</span>
                ";
        // line 827
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 827, $this->source); })()), "coach", [], "any", false, false, false, 827), 'widget', ["attr" => ["class" => "form-control", "id" => "coach_select"]]);
        yield "
            </div>
            <div class=\"coach-preview\" id=\"coachPreview\" style=\"display: none;\">
                <i class=\"fas fa-user-tie\"></i>
                <span>Coach sélectionné : <span class=\"preview-highlight\" id=\"selectedCoachName\"></span></span>
            </div>
            ";
        // line 833
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 833, $this->source); })()), "coach", [], "any", false, false, false, 833), 'errors');
        yield "
        </div>

        <div class=\"form-group\">
            ";
        // line 837
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 837, $this->source); })()), "team", [], "any", false, false, false, 837), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            <div class=\"select-with-info\">
                <span class=\"select-icon\">👥</span>
                ";
        // line 840
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 840, $this->source); })()), "team", [], "any", false, false, false, 840), 'widget', ["attr" => ["class" => "form-control", "id" => "team_select"]]);
        yield "
            </div>
            <div class=\"team-preview\" id=\"teamPreview\" style=\"display: none;\">
                <i class=\"fas fa-users\"></i>
                <span>Équipe sélectionnée : <span class=\"preview-highlight\" id=\"selectedTeamName\"></span></span>
            </div>
            ";
        // line 846
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 846, $this->source); })()), "team", [], "any", false, false, false, 846), 'errors');
        yield "
        </div>
    </div>

    <div class=\"form-row\">
        <div class=\"form-group\">
    ";
        // line 852
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 852, $this->source); })()), "session_date", [], "any", false, false, false, 852), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
    <div class=\"datetime-input\">
        ";
        // line 854
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 854, $this->source); })()), "session_date", [], "any", false, false, false, 854), 'widget', ["attr" => ["class" => "form-control", "data-default" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d\\TH:i")]]);
        // line 857
        yield "
    </div>
    <div class=\"form-help\">
        <i class=\"fas fa-info-circle\"></i>
        <span>Heures acceptées : 8h00 - 20h00 (format 24h)</span>
    </div>
    ";
        // line 863
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 863, $this->source); })()), "session_date", [], "any", false, false, false, 863), 'errors');
        yield "
</div>

        <div class=\"form-group\">
            ";
        // line 867
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 867, $this->source); })()), "duration", [], "any", false, false, false, 867), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            <div class=\"position-relative\">
                ";
        // line 869
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 869, $this->source); })()), "duration", [], "any", false, false, false, 869), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Durée en minutes (ex: 60)"]]);
        yield "
                <span class=\"form-icon\">⏱️</span>
            </div>
            <div class=\"duration-hint\" style=\"font-size: 12px; color: var(--text-muted); margin-top: 5px;\">
                ⚡ Doit être un multiple de 15 minutes (15, 30, 45, 60, etc.)
            </div>
            ";
        // line 875
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 875, $this->source); })()), "duration", [], "any", false, false, false, 875), 'errors');
        yield "
        </div>
    </div>

    <!-- CHAMP TRAINING PLAN -->
    <div class=\"form-group training-plan-select\">
        ";
        // line 881
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 881, $this->source); })()), "training_plan", [], "any", false, false, false, 881), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
        <div class=\"position-relative\">
            ";
        // line 883
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 883, $this->source); })()), "training_plan", [], "any", false, false, false, 883), 'widget', ["attr" => ["class" => "form-control", "id" => "training_plan_select"]]);
        yield "
        </div>
        <div class=\"plan-preview\" id=\"planPreview\">
            <h4><i class=\"fas fa-dumbbell\"></i> Aperçu du plan</h4>
            <p id=\"planDescription\">Sélectionnez un plan pour voir sa description</p>
            <div class=\"plan-tags\">
                <span class=\"plan-tag\" id=\"planFocus\">Focus: -</span>
                <span class=\"plan-tag\" id=\"planDifficulty\">Difficulté: -</span>
            </div>
        </div>
        ";
        // line 893
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 893, $this->source); })()), "training_plan", [], "any", false, false, false, 893), 'errors');
        yield "
    </div>

    <div class=\"form-group\">
        ";
        // line 897
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 897, $this->source); })()), "notes", [], "any", false, false, false, 897), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
        ";
        // line 898
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 898, $this->source); })()), "notes", [], "any", false, false, false, 898), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Objectifs de la session, points à travailler, stratégies à aborder...", "rows" => "8", "id" => "session_notes"]]);
        // line 903
        yield "
        <div class=\"char-counter\" id=\"notesCounter\">
            <span id=\"notesCount\">0</span> / 2000 caractères
        </div>
        ";
        // line 907
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 907, $this->source); })()), "notes", [], "any", false, false, false, 907), 'errors');
        yield "
    </div>

    <div class=\"form-actions\">
        <a href=\"";
        // line 911
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_index");
        yield "\" class=\"btn-back\">
            Annuler & Retour
        </a>
        
        <button type=\"submit\" class=\"btn-create\" id=\"createButton\">
            Créer la session
        </button>
    </div>
    
    ";
        // line 920
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 920, $this->source); })()), 'form_end');
        yield "
</div>

<div class=\"loading-overlay\" id=\"loadingOverlay\">
    <div class=\"loading-spinner\"></div>
    <div class=\"loading-text\">CRÉATION</div>
</div>

<div class=\"success-message\" id=\"successMessage\">
    ✅ Session créée avec succès !
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 933
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

        // line 934
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('createForm');
    const createButton = document.getElementById('createButton');
    const loadingOverlay = document.getElementById('loadingOverlay');
    const successMessage = document.getElementById('successMessage');
    const notesTextarea = document.getElementById('session_notes');
    const notesCounter = document.getElementById('notesCounter');
    const notesCount = document.getElementById('notesCount');
    const trainingPlanSelect = document.getElementById('training_plan_select');
    const coachSelect = document.getElementById('coach_select');
    const teamSelect = document.getElementById('team_select');
    const coachPreview = document.getElementById('coachPreview');
    const teamPreview = document.getElementById('teamPreview');
    const selectedCoachName = document.getElementById('selectedCoachName');
    const selectedTeamName = document.getElementById('selectedTeamName');
    const planPreview = document.getElementById('planPreview');
    const planDescription = document.getElementById('planDescription');
    const planFocus = document.getElementById('planFocus');
    const planDifficulty = document.getElementById('planDifficulty');
    
    // Données pour les aperçus (passées depuis le contrôleur)
    const coaches = {
        ";
        // line 958
        if (array_key_exists("coaches", $context)) {
            // line 959
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 959, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
                // line 960
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 960), "html", null, true);
                yield ": {
                    name: \"";
                // line 961
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "fullName", [], "any", false, false, false, 961), "html", null, true);
                yield "\",
                    username: \"";
                // line 962
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "username", [], "any", false, false, false, 962), "html", null, true);
                yield "\"
                },
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['coach'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 965
            yield "        ";
        }
        // line 966
        yield "    };
    
    const teams = {
        ";
        // line 969
        if (array_key_exists("teams", $context)) {
            // line 970
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 970, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 971
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 971), "html", null, true);
                yield ": {
                    name: \"";
                // line 972
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 972), "html", null, true);
                yield "\",
                    game: \"";
                // line 973
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 973), "html", null, true);
                yield "\"
                },
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 976
            yield "        ";
        }
        // line 977
        yield "    };
    
    const trainingPlans = {
        ";
        // line 980
        if (array_key_exists("training_plans", $context)) {
            // line 981
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 981, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
                // line 982
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 982), "html", null, true);
                yield ": {
                    title: \"";
                // line 983
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "title", [], "any", false, false, false, 983), "js"), "html", null, true);
                yield "\",
                    description: \"";
                // line 984
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "description", [], "any", false, false, false, 984), 0, 150), "js"), "html", null, true);
                yield "...\",
                    focus: \"";
                // line 985
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "focusArea", [], "any", false, false, false, 985), "html", null, true);
                yield "\",
                    difficulty: \"";
                // line 986
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "difficultyLevel", [], "any", false, false, false, 986), "html", null, true);
                yield "\"
                },
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 989
            yield "        ";
        }
        // line 990
        yield "    };
    
    // Gestion de l'aperçu du coach
    if (coachSelect) {
        coachSelect.addEventListener('change', function() {
            const coachId = this.value;
            
            if (coachId && coaches[coachId]) {
                const coach = coaches[coachId];
                selectedCoachName.textContent = coach.name;
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
    }
    
    // Gestion de l'aperçu du plan d'entraînement
    if (trainingPlanSelect) {
        trainingPlanSelect.addEventListener('change', function() {
            const planId = this.value;
            
            if (planId && trainingPlans[planId]) {
                const plan = trainingPlans[planId];
                
                planDescription.textContent = plan.description;
                planFocus.textContent = `Focus: \${plan.focus}`;
                planDifficulty.textContent = `Difficulté: \${plan.difficulty}`;
                
                planPreview.classList.add('active');
                
                // Animation
                planPreview.style.animation = 'none';
                setTimeout(() => {
                    planPreview.style.animation = 'fadeIn 0.3s ease-out';
                }, 10);
            } else {
                planPreview.classList.remove('active');
            }
        });
        
        // Style sur focus
        trainingPlanSelect.addEventListener('focus', function() {
            this.parentElement.style.transform = 'translateY(-3px)';
            this.style.background = 'rgba(255, 45, 45, 0.1)';
            this.style.boxShadow = '0 0 0 3px rgba(255, 45, 45, 0.2)';
        });
        
        trainingPlanSelect.addEventListener('blur', function() {
            this.parentElement.style.transform = 'translateY(0)';
            this.style.background = '';
            this.style.boxShadow = '';
        });
    }
    
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
                
                // Vérifier si un message d'erreur existe déjà
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
                // Supprimer les messages d'erreur
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
        
        // Validate duration (multiple of 15 and within range)
        const durationInput = document.querySelector('#coaching_session_duration');
        if (durationInput && durationInput.value) {
            const duration = parseInt(durationInput.value);
            if (isNaN(duration) || duration <= 0 || duration > 480) {
                durationInput.classList.add('error');
                isValid = false;
                
                let errorDiv = durationInput.nextElementSibling;
                while (errorDiv && !errorDiv.classList.contains('form-error')) {
                    errorDiv = errorDiv.nextElementSibling;
                }
                
                if (!errorDiv) {
                    errorDiv = document.createElement('div');
                    errorDiv.className = 'form-error';
                    errorDiv.textContent = 'La durée doit être entre 15 et 480 minutes';
                    durationInput.parentNode.insertBefore(errorDiv, durationInput.nextSibling);
                }
            } else if (duration % 15 !== 0) {
                durationInput.classList.add('error');
                isValid = false;
                
                let errorDiv = durationInput.nextElementSibling;
                while (errorDiv && !errorDiv.classList.contains('form-error')) {
                    errorDiv = errorDiv.nextElementSibling;
                }
                
                if (!errorDiv) {
                    errorDiv = document.createElement('div');
                    errorDiv.className = 'form-error';
                    errorDiv.textContent = 'La durée doit être un multiple de 15 minutes (15, 30, 45, etc.)';
                    durationInput.parentNode.insertBefore(errorDiv, durationInput.nextSibling);
                }
            }
        }
        
        // Validate date (not in past)
        const dateInput = document.querySelector('input[type=\"datetime-local\"]');
        if (dateInput && dateInput.value) {
            const selectedDate = new Date(dateInput.value);
            const now = new Date();
            
            if (selectedDate < now) {
                dateInput.classList.add('error');
                isValid = false;
                
                let errorDiv = dateInput.nextElementSibling;
                while (errorDiv && !errorDiv.classList.contains('form-error')) {
                    errorDiv = errorDiv.nextElementSibling;
                }
                
                if (!errorDiv) {
                    errorDiv = document.createElement('div');
                    errorDiv.className = 'form-error';
                    errorDiv.textContent = 'La date ne peut pas être dans le passé';
                    dateInput.parentNode.insertBefore(errorDiv, dateInput.nextSibling);
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
                // Supprimer les messages d'erreur
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
    const dateInput = document.querySelector('input[type=\"datetime-local\"]');
    if (dateInput) {
        // Set default to current date/time + 1 hour (arrondi à l'heure ou demi-heure)
        const now = new Date();
        now.setHours(now.getHours() + 1);
        
        // Arrondir aux 30 minutes
        const minutes = now.getMinutes();
        if (minutes < 15) {
            now.setMinutes(0);
        } else if (minutes < 45) {
            now.setMinutes(30);
        } else {
            now.setMinutes(0);
            now.setHours(now.getHours() + 1);
        }
        
        now.setSeconds(0);
        
        const localDateTime = new Date(now.getTime() - now.getTimezoneOffset() * 60000)
            .toISOString()
            .slice(0, 16);
        
        // Set value and minimum
        dateInput.value = localDateTime;
        dateInput.min = new Date().toISOString().slice(0, 16);
        
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
    
    // Add animation to form groups
    const formGroups = document.querySelectorAll('.form-group');
    formGroups.forEach((group, index) => {
        group.style.animationDelay = `\${index * 0.1}s`;
    });
    
    // Auto-focus first input
    const firstInput = form.querySelector('.form-control');
    if (firstInput) {
        setTimeout(() => {
            firstInput.focus();
        }, 500);
    }
    
    // Check for success parameter
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('success')) {
        setTimeout(() => {
            successMessage.classList.add('active');
            
            setTimeout(() => {
                successMessage.classList.remove('active');
            }, 4000);
        }, 1000);
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
        return "coaching_session/new.html.twig";
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
        return array (  1258 => 990,  1255 => 989,  1246 => 986,  1242 => 985,  1238 => 984,  1234 => 983,  1229 => 982,  1224 => 981,  1222 => 980,  1217 => 977,  1214 => 976,  1205 => 973,  1201 => 972,  1196 => 971,  1191 => 970,  1189 => 969,  1184 => 966,  1181 => 965,  1172 => 962,  1168 => 961,  1163 => 960,  1158 => 959,  1156 => 958,  1129 => 934,  1116 => 933,  1093 => 920,  1081 => 911,  1074 => 907,  1068 => 903,  1066 => 898,  1062 => 897,  1055 => 893,  1042 => 883,  1037 => 881,  1028 => 875,  1019 => 869,  1014 => 867,  1007 => 863,  999 => 857,  997 => 854,  992 => 852,  983 => 846,  974 => 840,  968 => 837,  961 => 833,  952 => 827,  946 => 824,  939 => 820,  892 => 775,  879 => 774,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Phantom Force - Nouvelle Session{% endblock %}

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

    /* ================= TRAINING PLAN SELECT STYLES ================= */
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

    select.form-control option:hover {
        background: var(--red);
        color: white;
    }

    select.form-control:focus option:checked {
        background: var(--red);
        color: white;
    }

    .training-plan-select {
        position: relative;
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

    .training-plan-select .form-control {
        padding-left: 60px;
        background: rgba(255, 45, 45, 0.05);
        border: 2px solid rgba(255, 45, 45, 0.2);
        font-weight: 600;
    }

    .plan-preview {
        margin-top: 15px;
        padding: 15px;
        background: rgba(255, 45, 45, 0.1);
        border: 1px solid rgba(255, 45, 45, 0.2);
        border-radius: var(--radius);
        display: none;
        animation: fadeIn 0.3s ease-out;
    }

    .plan-preview.active {
        display: block;
    }

    .plan-preview h4 {
        color: var(--red);
        font-size: 14px;
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .plan-preview p {
        color: var(--text-muted);
        font-size: 13px;
        line-height: 1.5;
        margin-bottom: 10px;
    }

    .plan-tags {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
    }

    .plan-tag {
        font-size: 11px;
        padding: 3px 10px;
        border-radius: 20px;
        background: rgba(255, 45, 45, 0.2);
        color: var(--red);
        font-weight: 600;
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
        content: '🎮';
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

    /* ================= COACH & TEAM SELECT STYLES ================= */
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
        color: var(--red);
        z-index: 2;
        pointer-events: none;
    }

    .coach-preview, .team-preview {
        margin-top: 10px;
        padding: 10px 15px;
        background: rgba(255, 45, 45, 0.05);
        border: 1px solid rgba(255, 45, 45, 0.1);
        border-radius: var(--radius);
        font-size: 13px;
        color: var(--text-muted);
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .coach-preview i, .team-preview i {
        color: var(--red);
        font-size: 14px;
    }

    .preview-highlight {
        color: var(--red);
        font-weight: 600;
        margin-left: 5px;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"create-hero\">
    <h1>🔥 NOUVELLE SESSION</h1>
    <p>Créez une nouvelle session de coaching pour booster les performances de votre équipe</p>
</div>

<div class=\"creation-guide\">
    <h3>Conseils Phantom Force</h3>
    <div class=\"guide-list\">
        <div class=\"guide-item\">
            <div class=\"guide-icon\">🎯</div>
            <div class=\"guide-content\">
                <h4>Objectifs agressifs</h4>
                <p>Définissez des objectifs ambitieux et spécifiques pour dominer</p>
            </div>
        </div>
        <div class=\"guide-item\">
            <div class=\"guide-icon\">⚡</div>
            <div class=\"guide-content\">
                <h4>Intensité maximale</h4>
                <p>Maintenez une intensité élevée pendant 60-90 minutes</p>
            </div>
        </div>
        <div class=\"guide-item\">
            <div class=\"guide-icon\">📊</div>
            <div class=\"guide-content\">
                <h4>Analyse stratégique</h4>
                <p>Documentez chaque détail pour l'analyse post-combat</p>
            </div>
        </div>
        <div class=\"guide-item\">
            <div class=\"guide-icon\">🏆</div>
            <div class=\"guide-content\">
                <h4>Mindset gagnant</h4>
                <p>Approchez chaque session avec un mindset de champion</p>
            </div>
        </div>
    </div>
</div>

<div class=\"form-container\">
    <div class=\"form-header\">
        <h2>CRÉATION DE SESSION</h2>
        <p>Remplissez les informations ci-dessous pour créer une nouvelle session de coaching</p>
    </div>

    {{ form_start(form, {'attr': {'class': 'coaching-form', 'id': 'createForm', 'novalidate': 'novalidate'}}) }}
    
    <div class=\"form-row\">
        <div class=\"form-group\">
            {{ form_label(form.coach, null, {'label_attr': {'class': 'form-label'}}) }}
            <div class=\"select-with-info\">
                <span class=\"select-icon\">👨‍🏫</span>
                {{ form_widget(form.coach, {'attr': {'class': 'form-control', 'id': 'coach_select'}}) }}
            </div>
            <div class=\"coach-preview\" id=\"coachPreview\" style=\"display: none;\">
                <i class=\"fas fa-user-tie\"></i>
                <span>Coach sélectionné : <span class=\"preview-highlight\" id=\"selectedCoachName\"></span></span>
            </div>
            {{ form_errors(form.coach) }}
        </div>

        <div class=\"form-group\">
            {{ form_label(form.team, null, {'label_attr': {'class': 'form-label'}}) }}
            <div class=\"select-with-info\">
                <span class=\"select-icon\">👥</span>
                {{ form_widget(form.team, {'attr': {'class': 'form-control', 'id': 'team_select'}}) }}
            </div>
            <div class=\"team-preview\" id=\"teamPreview\" style=\"display: none;\">
                <i class=\"fas fa-users\"></i>
                <span>Équipe sélectionnée : <span class=\"preview-highlight\" id=\"selectedTeamName\"></span></span>
            </div>
            {{ form_errors(form.team) }}
        </div>
    </div>

    <div class=\"form-row\">
        <div class=\"form-group\">
    {{ form_label(form.session_date, null, {'label_attr': {'class': 'form-label'}}) }}
    <div class=\"datetime-input\">
        {{ form_widget(form.session_date, {'attr': {
            'class': 'form-control',
            'data-default': 'now'|date('Y-m-d\\\\TH:i')
        }}) }}
    </div>
    <div class=\"form-help\">
        <i class=\"fas fa-info-circle\"></i>
        <span>Heures acceptées : 8h00 - 20h00 (format 24h)</span>
    </div>
    {{ form_errors(form.session_date) }}
</div>

        <div class=\"form-group\">
            {{ form_label(form.duration, null, {'label_attr': {'class': 'form-label'}}) }}
            <div class=\"position-relative\">
                {{ form_widget(form.duration, {'attr': {'class': 'form-control', 'placeholder': 'Durée en minutes (ex: 60)'}}) }}
                <span class=\"form-icon\">⏱️</span>
            </div>
            <div class=\"duration-hint\" style=\"font-size: 12px; color: var(--text-muted); margin-top: 5px;\">
                ⚡ Doit être un multiple de 15 minutes (15, 30, 45, 60, etc.)
            </div>
            {{ form_errors(form.duration) }}
        </div>
    </div>

    <!-- CHAMP TRAINING PLAN -->
    <div class=\"form-group training-plan-select\">
        {{ form_label(form.training_plan, null, {'label_attr': {'class': 'form-label'}}) }}
        <div class=\"position-relative\">
            {{ form_widget(form.training_plan, {'attr': {'class': 'form-control', 'id': 'training_plan_select'}}) }}
        </div>
        <div class=\"plan-preview\" id=\"planPreview\">
            <h4><i class=\"fas fa-dumbbell\"></i> Aperçu du plan</h4>
            <p id=\"planDescription\">Sélectionnez un plan pour voir sa description</p>
            <div class=\"plan-tags\">
                <span class=\"plan-tag\" id=\"planFocus\">Focus: -</span>
                <span class=\"plan-tag\" id=\"planDifficulty\">Difficulté: -</span>
            </div>
        </div>
        {{ form_errors(form.training_plan) }}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.notes, null, {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.notes, {'attr': {
            'class': 'form-control',
            'placeholder': 'Objectifs de la session, points à travailler, stratégies à aborder...',
            'rows': '8',
            'id': 'session_notes'
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
        
        <button type=\"submit\" class=\"btn-create\" id=\"createButton\">
            Créer la session
        </button>
    </div>
    
    {{ form_end(form) }}
</div>

<div class=\"loading-overlay\" id=\"loadingOverlay\">
    <div class=\"loading-spinner\"></div>
    <div class=\"loading-text\">CRÉATION</div>
</div>

<div class=\"success-message\" id=\"successMessage\">
    ✅ Session créée avec succès !
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
    const notesTextarea = document.getElementById('session_notes');
    const notesCounter = document.getElementById('notesCounter');
    const notesCount = document.getElementById('notesCount');
    const trainingPlanSelect = document.getElementById('training_plan_select');
    const coachSelect = document.getElementById('coach_select');
    const teamSelect = document.getElementById('team_select');
    const coachPreview = document.getElementById('coachPreview');
    const teamPreview = document.getElementById('teamPreview');
    const selectedCoachName = document.getElementById('selectedCoachName');
    const selectedTeamName = document.getElementById('selectedTeamName');
    const planPreview = document.getElementById('planPreview');
    const planDescription = document.getElementById('planDescription');
    const planFocus = document.getElementById('planFocus');
    const planDifficulty = document.getElementById('planDifficulty');
    
    // Données pour les aperçus (passées depuis le contrôleur)
    const coaches = {
        {% if coaches is defined %}
            {% for coach in coaches %}
                {{ coach.id }}: {
                    name: \"{{ coach.fullName }}\",
                    username: \"{{ coach.username }}\"
                },
            {% endfor %}
        {% endif %}
    };
    
    const teams = {
        {% if teams is defined %}
            {% for team in teams %}
                {{ team.id }}: {
                    name: \"{{ team.name }}\",
                    game: \"{{ team.game }}\"
                },
            {% endfor %}
        {% endif %}
    };
    
    const trainingPlans = {
        {% if training_plans is defined %}
            {% for plan in training_plans %}
                {{ plan.id }}: {
                    title: \"{{ plan.title|e('js') }}\",
                    description: \"{{ plan.description|slice(0, 150)|e('js') }}...\",
                    focus: \"{{ plan.focusArea }}\",
                    difficulty: \"{{ plan.difficultyLevel }}\"
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
                selectedCoachName.textContent = coach.name;
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
    }
    
    // Gestion de l'aperçu du plan d'entraînement
    if (trainingPlanSelect) {
        trainingPlanSelect.addEventListener('change', function() {
            const planId = this.value;
            
            if (planId && trainingPlans[planId]) {
                const plan = trainingPlans[planId];
                
                planDescription.textContent = plan.description;
                planFocus.textContent = `Focus: \${plan.focus}`;
                planDifficulty.textContent = `Difficulté: \${plan.difficulty}`;
                
                planPreview.classList.add('active');
                
                // Animation
                planPreview.style.animation = 'none';
                setTimeout(() => {
                    planPreview.style.animation = 'fadeIn 0.3s ease-out';
                }, 10);
            } else {
                planPreview.classList.remove('active');
            }
        });
        
        // Style sur focus
        trainingPlanSelect.addEventListener('focus', function() {
            this.parentElement.style.transform = 'translateY(-3px)';
            this.style.background = 'rgba(255, 45, 45, 0.1)';
            this.style.boxShadow = '0 0 0 3px rgba(255, 45, 45, 0.2)';
        });
        
        trainingPlanSelect.addEventListener('blur', function() {
            this.parentElement.style.transform = 'translateY(0)';
            this.style.background = '';
            this.style.boxShadow = '';
        });
    }
    
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
                
                // Vérifier si un message d'erreur existe déjà
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
                // Supprimer les messages d'erreur
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
        
        // Validate duration (multiple of 15 and within range)
        const durationInput = document.querySelector('#coaching_session_duration');
        if (durationInput && durationInput.value) {
            const duration = parseInt(durationInput.value);
            if (isNaN(duration) || duration <= 0 || duration > 480) {
                durationInput.classList.add('error');
                isValid = false;
                
                let errorDiv = durationInput.nextElementSibling;
                while (errorDiv && !errorDiv.classList.contains('form-error')) {
                    errorDiv = errorDiv.nextElementSibling;
                }
                
                if (!errorDiv) {
                    errorDiv = document.createElement('div');
                    errorDiv.className = 'form-error';
                    errorDiv.textContent = 'La durée doit être entre 15 et 480 minutes';
                    durationInput.parentNode.insertBefore(errorDiv, durationInput.nextSibling);
                }
            } else if (duration % 15 !== 0) {
                durationInput.classList.add('error');
                isValid = false;
                
                let errorDiv = durationInput.nextElementSibling;
                while (errorDiv && !errorDiv.classList.contains('form-error')) {
                    errorDiv = errorDiv.nextElementSibling;
                }
                
                if (!errorDiv) {
                    errorDiv = document.createElement('div');
                    errorDiv.className = 'form-error';
                    errorDiv.textContent = 'La durée doit être un multiple de 15 minutes (15, 30, 45, etc.)';
                    durationInput.parentNode.insertBefore(errorDiv, durationInput.nextSibling);
                }
            }
        }
        
        // Validate date (not in past)
        const dateInput = document.querySelector('input[type=\"datetime-local\"]');
        if (dateInput && dateInput.value) {
            const selectedDate = new Date(dateInput.value);
            const now = new Date();
            
            if (selectedDate < now) {
                dateInput.classList.add('error');
                isValid = false;
                
                let errorDiv = dateInput.nextElementSibling;
                while (errorDiv && !errorDiv.classList.contains('form-error')) {
                    errorDiv = errorDiv.nextElementSibling;
                }
                
                if (!errorDiv) {
                    errorDiv = document.createElement('div');
                    errorDiv.className = 'form-error';
                    errorDiv.textContent = 'La date ne peut pas être dans le passé';
                    dateInput.parentNode.insertBefore(errorDiv, dateInput.nextSibling);
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
                // Supprimer les messages d'erreur
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
    const dateInput = document.querySelector('input[type=\"datetime-local\"]');
    if (dateInput) {
        // Set default to current date/time + 1 hour (arrondi à l'heure ou demi-heure)
        const now = new Date();
        now.setHours(now.getHours() + 1);
        
        // Arrondir aux 30 minutes
        const minutes = now.getMinutes();
        if (minutes < 15) {
            now.setMinutes(0);
        } else if (minutes < 45) {
            now.setMinutes(30);
        } else {
            now.setMinutes(0);
            now.setHours(now.getHours() + 1);
        }
        
        now.setSeconds(0);
        
        const localDateTime = new Date(now.getTime() - now.getTimezoneOffset() * 60000)
            .toISOString()
            .slice(0, 16);
        
        // Set value and minimum
        dateInput.value = localDateTime;
        dateInput.min = new Date().toISOString().slice(0, 16);
        
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
    
    // Add animation to form groups
    const formGroups = document.querySelectorAll('.form-group');
    formGroups.forEach((group, index) => {
        group.style.animationDelay = `\${index * 0.1}s`;
    });
    
    // Auto-focus first input
    const firstInput = form.querySelector('.form-control');
    if (firstInput) {
        setTimeout(() => {
            firstInput.focus();
        }, 500);
    }
    
    // Check for success parameter
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('success')) {
        setTimeout(() => {
            successMessage.classList.add('active');
            
            setTimeout(() => {
                successMessage.classList.remove('active');
            }, 4000);
        }, 1000);
    }
});
</script>
{% endblock %}", "coaching_session/new.html.twig", "C:\\xampp\\htdocs\\esport (3)\\esport\\templates\\coaching_session\\new.html.twig");
    }
}
