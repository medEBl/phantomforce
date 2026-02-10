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
class __TwigTemplate_e24a57fc95406c53b667ed729bb4a068 extends Template
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
        yield "Phantom Force - Nouvelle Session";
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
</style>
";
        yield from [];
    }

    // line 730
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 731
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
        // line 776
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "coaching-form", "id" => "createForm"]]);
        yield "
    
    <div class=\"form-row\">
        <div class=\"form-group\">
            ";
        // line 780
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "coach_id", [], "any", false, false, false, 780), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            <div class=\"position-relative\">
                ";
        // line 782
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "coach_id", [], "any", false, false, false, 782), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ID du coach"]]);
        yield "
                <span class=\"form-icon\">👨‍🏫</span>
            </div>
            ";
        // line 785
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "coach_id", [], "any", false, false, false, 785), 'errors');
        yield "
        </div>

        <div class=\"form-group\">
            ";
        // line 789
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "team_id", [], "any", false, false, false, 789), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            <div class=\"position-relative\">
                ";
        // line 791
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "team_id", [], "any", false, false, false, 791), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ID de l'équipe"]]);
        yield "
                <span class=\"form-icon\">👥</span>
            </div>
            ";
        // line 794
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "team_id", [], "any", false, false, false, 794), 'errors');
        yield "
        </div>
    </div>

    <div class=\"form-row\">
        <div class=\"form-group\">
            ";
        // line 800
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "session_date", [], "any", false, false, false, 800), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            <div class=\"datetime-input\">
                ";
        // line 802
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "session_date", [], "any", false, false, false, 802), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            </div>
            ";
        // line 804
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "session_date", [], "any", false, false, false, 804), 'errors');
        yield "
        </div>

        <div class=\"form-group\">
            ";
        // line 808
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "duration", [], "any", false, false, false, 808), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            <div class=\"position-relative\">
                ";
        // line 810
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "duration", [], "any", false, false, false, 810), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Durée en minutes (ex: 60)"]]);
        yield "
                <span class=\"form-icon\">⏱️</span>
            </div>
            ";
        // line 813
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "duration", [], "any", false, false, false, 813), 'errors');
        yield "
        </div>
    </div>

    <!-- CHAMP TRAINING PLAN AJOUTÉ -->
    <div class=\"form-group training-plan-select\">
        ";
        // line 819
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "training_plan", [], "any", false, false, false, 819), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
        <div class=\"position-relative\">
            ";
        // line 821
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "training_plan", [], "any", false, false, false, 821), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        </div>
        <div class=\"plan-preview\" id=\"planPreview\">
            <h4><i class=\"fas fa-dumbbell\"></i> Aperçu du plan</h4>
            <p id=\"planDescription\">Sélectionnez un plan pour voir sa description</p>
            <div class=\"plan-tags\">
                <span class=\"plan-tag\" id=\"planFocus\">Focus: -</span>
                <span class=\"plan-tag\" id=\"planDifficulty\">Difficulté: -</span>
                <span class=\"plan-tag\" id=\"planCoach\">Coach: -</span>
            </div>
        </div>
        ";
        // line 832
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "training_plan", [], "any", false, false, false, 832), 'errors');
        yield "
    </div>

    <div class=\"form-group\">
        ";
        // line 836
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "notes", [], "any", false, false, false, 836), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
        ";
        // line 837
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "notes", [], "any", false, false, false, 837), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Objectifs de la session, points à travailler, stratégies à aborder...", "rows" => "8"]]);
        // line 841
        yield "
        <div class=\"char-counter\" id=\"notesCounter\">
            <span id=\"notesCount\">0</span> / 2000 caractères
        </div>
        ";
        // line 845
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "notes", [], "any", false, false, false, 845), 'errors');
        yield "
    </div>

    <div class=\"form-actions\">
        <a href=\"";
        // line 849
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_index");
        yield "\" class=\"btn-back\">
            Annuler & Retour
        </a>
        
        <button type=\"submit\" class=\"btn-create\" id=\"createButton\">
            Créer la session
        </button>
    </div>
    
    ";
        // line 858
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
        // line 870
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 871
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('createForm');
    const createButton = document.getElementById('createButton');
    const loadingOverlay = document.getElementById('loadingOverlay');
    const successMessage = document.getElementById('successMessage');
    const notesTextarea = document.querySelector('#coaching_session_notes');
    const notesCounter = document.getElementById('notesCounter');
    const notesCount = document.getElementById('notesCount');
    const trainingPlanSelect = document.querySelector('#coaching_session_training_plan');
    const planPreview = document.getElementById('planPreview');
    const planDescription = document.getElementById('planDescription');
    const planFocus = document.getElementById('planFocus');
    const planDifficulty = document.getElementById('planDifficulty');
    const planCoach = document.getElementById('planCoach');
    
    // Données des plans (serait idéalement chargé dynamiquement via API)
    const trainingPlans = {
        ";
        // line 889
        if (array_key_exists("training_plans", $context)) {
            // line 890
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["training_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
                // line 891
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 891), "html", null, true);
                yield ": {
                    title: \"";
                // line 892
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "title", [], "any", false, false, false, 892), "html", null, true);
                yield "\",
                    description: \"";
                // line 893
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "description", [], "any", false, false, false, 893), 0, 150), "html", null, true);
                yield "...\",
                    focus: \"";
                // line 894
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "focusArea", [], "any", false, false, false, 894), "html", null, true);
                yield "\",
                    difficulty: \"";
                // line 895
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "difficultyLevel", [], "any", false, false, false, 895), "html", null, true);
                yield "\",
                    coach: \"Coach #";
                // line 896
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "coachId", [], "any", false, false, false, 896), "html", null, true);
                yield "\"
                },
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 899
            yield "        ";
        }
        // line 900
        yield "    };
    
    // Gestion de l'aperçu du plan d'entraînement
    if (trainingPlanSelect) {
        trainingPlanSelect.addEventListener('change', function() {
            const planId = this.value;
            
            if (planId && trainingPlans[planId]) {
                const plan = trainingPlans[planId];
                
                planDescription.textContent = plan.description;
                planFocus.textContent = `Focus: \${plan.focus}`;
                planDifficulty.textContent = `Difficulté: \${plan.difficulty}`;
                planCoach.textContent = `Coach: \${plan.coach}`;
                
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
        
        // Auto-sélection du premier plan si disponible
        if (trainingPlanSelect.options.length > 1 && !trainingPlanSelect.value) {
            trainingPlanSelect.value = trainingPlanSelect.options[1].value;
            trainingPlanSelect.dispatchEvent(new Event('change'));
        }
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
        
        // Validate duration (multiple of 15 and within range)
        const durationInput = document.querySelector('#coaching_session_duration');
        if (durationInput && durationInput.value) {
            const duration = parseInt(durationInput.value);
            if (isNaN(duration) || duration <= 0 || duration > 480) {
                durationInput.classList.add('error');
                isValid = false;
                
                const errorDiv = document.createElement('div');
                errorDiv.className = 'form-error';
                errorDiv.textContent = 'La durée doit être entre 15 et 480 minutes';
                
                if (!durationInput.nextElementSibling || !durationInput.nextElementSibling.classList.contains('form-error')) {
                    durationInput.parentNode.insertBefore(errorDiv, durationInput.nextSibling);
                }
            } else if (duration % 15 !== 0) {
                durationInput.classList.add('error');
                isValid = false;
                
                const errorDiv = document.createElement('div');
                errorDiv.className = 'form-error';
                errorDiv.textContent = 'La durée doit être un multiple de 15 minutes (15, 30, 45, etc.)';
                
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
        // Set default to current date/time + 1 hour
        const now = new Date();
        now.setHours(now.getHours() + 1);
        now.setMinutes(0);
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
    const firstInput = form.querySelector('.form-control');
    if (firstInput) {
        setTimeout(() => {
            firstInput.focus();
        }, 500);
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
        return array (  1078 => 900,  1075 => 899,  1066 => 896,  1062 => 895,  1058 => 894,  1054 => 893,  1050 => 892,  1045 => 891,  1040 => 890,  1038 => 889,  1018 => 871,  1007 => 870,  992 => 858,  980 => 849,  973 => 845,  967 => 841,  965 => 837,  961 => 836,  954 => 832,  940 => 821,  935 => 819,  926 => 813,  920 => 810,  915 => 808,  908 => 804,  903 => 802,  898 => 800,  889 => 794,  883 => 791,  878 => 789,  871 => 785,  865 => 782,  860 => 780,  853 => 776,  806 => 731,  799 => 730,  72 => 6,  65 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "coaching_session/new.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\coaching_session\\new.html.twig");
    }
}
