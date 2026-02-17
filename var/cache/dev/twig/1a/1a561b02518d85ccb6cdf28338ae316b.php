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

/* coaching_session/show.html.twig */
class __TwigTemplate_f1480b1919a4d628a8d089122b60b6d9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaching_session/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaching_session/show.html.twig"));

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

        yield "Phantom Force - Détails Session";
        
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
    /* ================= SHOW PAGE STYLES ================= */
    .show-hero {
        text-align: center;
        padding: 80px 20px 40px;
        position: relative;
        margin-bottom: 40px;
        animation: fadeInUp 0.8s ease-out;
    }

    .show-hero::after {
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

    .show-hero h1 {
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

    .show-hero p {
        color: var(--text-muted);
        font-size: 20px;
        max-width: 700px;
        margin: 0 auto 20px;
        line-height: 1.6;
    }

    /* ================= SESSION BADGE ================= */
    .session-badge-large {
        display: inline-block;
        background: linear-gradient(135deg, rgba(255,45,45,0.2), rgba(255,0,0,0.1));
        border: 2px solid rgba(255,45,45,0.4);
        border-radius: 50px;
        padding: 12px 30px;
        font-size: 18px;
        font-weight: 800;
        color: var(--red);
        margin-bottom: 20px;
        animation: badgePulse 2s infinite alternate;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    @keyframes badgePulse {
        0% { 
            box-shadow: 0 0 15px rgba(255,45,45,0.2);
            transform: scale(1);
        }
        100% { 
            box-shadow: 0 0 30px rgba(255,45,45,0.4);
            transform: scale(1.02);
        }
    }

    /* ================= DETAILS CONTAINER ================= */
    .details-container {
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: var(--radius-lg);
        padding: 50px;
        box-shadow: var(--shadow-lg);
        max-width: 1000px;
        margin: 0 auto 60px;
        position: relative;
        overflow: hidden;
        animation: fadeInUp 0.8s ease-out 0.2s backwards;
    }

    .details-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, #ff0000, #ff2d2d, #ff5e5e);
        animation: borderFlow 3s linear infinite;
    }

    .details-container::after {
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

    /* ================= DETAILS GRID ================= */
    .details-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
        margin-bottom: 50px;
        position: relative;
        z-index: 1;
    }

    @media (max-width: 768px) {
        .details-grid {
            grid-template-columns: 1fr;
        }
    }

    /* ================= DETAIL ITEM ================= */
    .detail-item {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: var(--radius);
        padding: 25px;
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }

    .detail-item:hover {
        border-color: rgba(255, 45, 45, 0.4);
        background: rgba(255, 45, 45, 0.05);
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(255, 0, 0, 0.1);
    }

    .detail-icon {
        width: 50px;
        height: 50px;
        background: rgba(255, 45, 45, 0.15);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        color: var(--red);
        font-size: 22px;
        transition: var(--transition);
    }

    .detail-item:hover .detail-icon {
        transform: rotate(10deg) scale(1.1);
        background: rgba(255, 45, 45, 0.25);
    }

    .detail-label {
        font-size: 12px;
        color: var(--text-muted);
        text-transform: uppercase;
        letter-spacing: 1.5px;
        font-weight: 600;
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .detail-label::before {
        content: '▸';
        color: var(--red);
        font-size: 14px;
        animation: arrowBlink 2s infinite;
    }

    @keyframes arrowBlink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.3; }
    }

    .detail-value {
        font-size: 20px;
        color: var(--text-light);
        font-weight: 700;
        line-height: 1.4;
    }

    .detail-subvalue {
        font-size: 14px;
        color: var(--text-muted);
        margin-top: 5px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .detail-subvalue i {
        color: var(--red);
        font-size: 12px;
    }

    /* ================= NOTES SECTION ================= */
    .notes-section {
        background: rgba(255, 45, 45, 0.05);
        border: 1px solid rgba(255, 45, 45, 0.2);
        border-radius: var(--radius-lg);
        padding: 35px;
        margin: 40px 0;
        position: relative;
        z-index: 1;
        animation: fadeInUp 0.8s ease-out 0.4s backwards;
    }

    .notes-header {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 25px;
    }

    .notes-icon {
        width: 50px;
        height: 50px;
        background: rgba(255, 45, 45, 0.2);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--red);
        font-size: 24px;
    }

    .notes-header h3 {
        font-size: 22px;
        color: var(--text-light);
        font-weight: 700;
    }

    .notes-content {
        color: var(--text-muted);
        font-size: 16px;
        line-height: 1.7;
        padding: 20px;
        background: rgba(0, 0, 0, 0.3);
        border-radius: var(--radius);
        border-left: 4px solid var(--red);
    }

    .notes-content p {
        margin-bottom: 15px;
    }

    .notes-content p:last-child {
        margin-bottom: 0;
    }

    /* ================= STATS BADGES ================= */
    .stats-badges {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
        margin: 30px 0;
        animation: fadeInUp 0.8s ease-out 0.6s backwards;
    }

    .stat-badge {
        padding: 10px 20px;
        background: rgba(255, 45, 45, 0.1);
        border: 1px solid rgba(255, 45, 45, 0.3);
        border-radius: 50px;
        font-size: 13px;
        font-weight: 600;
        color: var(--red);
        display: flex;
        align-items: center;
        gap: 8px;
        transition: var(--transition);
    }

    .stat-badge:hover {
        background: rgba(255, 45, 45, 0.2);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 45, 45, 0.2);
    }

    .stat-badge i {
        font-size: 14px;
    }

    /* ================= TRAINING PLAN SECTION ================= */
    .plan-section {
        background: rgba(52, 152, 219, 0.08);
        border: 1px solid rgba(52, 152, 219, 0.3);
        border-radius: var(--radius-lg);
        padding: 30px;
        margin: 30px 0;
        animation: fadeInUp 0.8s ease-out 0.5s backwards;
    }

    .plan-header {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 20px;
    }

    .plan-icon {
        width: 45px;
        height: 45px;
        background: rgba(52, 152, 219, 0.15);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #3498db;
        font-size: 20px;
    }

    .plan-header h3 {
        font-size: 20px;
        color: var(--text-light);
        font-weight: 700;
    }

    .plan-details {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-top: 20px;
    }

    @media (max-width: 768px) {
        .plan-details {
            grid-template-columns: 1fr;
        }
    }

    .plan-detail-item {
        background: rgba(0, 0, 0, 0.2);
        padding: 15px;
        border-radius: var(--radius);
        text-align: center;
    }

    .plan-detail-label {
        font-size: 11px;
        color: var(--text-muted);
        text-transform: uppercase;
        margin-bottom: 5px;
    }

    .plan-detail-value {
        font-size: 16px;
        color: #3498db;
        font-weight: 700;
    }

    .plan-description {
        margin-top: 20px;
        padding: 15px;
        background: rgba(0, 0, 0, 0.2);
        border-radius: var(--radius);
        color: var(--text-muted);
        font-style: italic;
        border-left: 3px solid #3498db;
    }

    /* ================= ACTION BUTTONS ================= */
    .action-buttons {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 50px;
        padding-top: 40px;
        border-top: 1px solid rgba(255, 45, 45, 0.2);
        position: relative;
        z-index: 1;
        animation: fadeInUp 0.8s ease-out 0.8s backwards;
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

    .btn-edit {
        padding: 15px 30px;
        background: rgba(255, 45, 45, 0.1);
        border: 1px solid rgba(255, 45, 45, 0.3);
        border-radius: 10px;
        color: var(--red);
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

    .btn-edit:hover {
        background: rgba(255, 45, 45, 0.2);
        color: var(--red);
        transform: translateY(-3px);
        border-color: var(--red);
        box-shadow: 0 8px 20px rgba(255, 45, 45, 0.2);
    }

    .btn-edit::before {
        content: '✏️';
        font-size: 16px;
    }

    .btn-delete {
        padding: 15px 30px;
        background: linear-gradient(135deg, #8b0000, #ff0000, #8b0000);
        border: none;
        border-radius: 10px;
        color: white;
        text-decoration: none;
        font-weight: 700;
        font-size: 14px;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        transition: var(--transition);
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
    }

    .btn-delete:hover {
        background: linear-gradient(135deg, #ff0000, #8b0000, #ff0000);
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(139, 0, 0, 0.3);
    }

    .btn-delete::before {
        content: '🗑️';
        font-size: 16px;
    }

    /* ================= SESSION STATUS ================= */
    .session-status {
        display: inline-block;
        padding: 8px 20px;
        background: linear-gradient(135deg, rgba(255,45,45,0.2), rgba(255,0,0,0.1));
        border: 1px solid rgba(255,45,45,0.4);
        border-radius: 6px;
        font-size: 12px;
        font-weight: 700;
        color: var(--red);
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-left: 15px;
        animation: statusPulse 3s infinite;
    }

    @keyframes statusPulse {
        0%, 100% { opacity: 0.7; }
        50% { opacity: 1; }
    }

    /* ================= TIME INDICATOR ================= */
    .time-indicator {
        position: absolute;
        top: 20px;
        right: 20px;
        display: flex;
        align-items: center;
        gap: 8px;
        color: var(--text-muted);
        font-size: 13px;
        font-weight: 600;
    }

    .time-indicator::before {
        content: '⏰';
        font-size: 14px;
    }

    /* ================= RESPONSIVE ================= */
    @media (max-width: 768px) {
        .show-hero h1 {
            font-size: 40px;
        }
        
        .details-container {
            padding: 30px 20px;
            margin: 0 15px 40px;
        }
        
        .action-buttons {
            flex-direction: column;
            gap: 15px;
        }
        
        .btn-back, .btn-edit, .btn-delete {
            width: 100%;
            justify-content: center;
        }
        
        .time-indicator {
            position: relative;
            top: 0;
            right: 0;
            justify-content: center;
            margin-bottom: 20px;
        }
    }

    /* ================= ANIMATIONS ================= */
    .detail-item {
        animation: fadeInUp 0.5s ease-out backwards;
    }

    .detail-item:nth-child(1) { animation-delay: 0.1s; }
    .detail-item:nth-child(2) { animation-delay: 0.2s; }
    .detail-item:nth-child(3) { animation-delay: 0.3s; }
    .detail-item:nth-child(4) { animation-delay: 0.4s; }
    .detail-item:nth-child(5) { animation-delay: 0.5s; }
    .detail-item:nth-child(6) { animation-delay: 0.6s; }
    .detail-item:nth-child(7) { animation-delay: 0.7s; }

    /* ================= DELETE MODAL ================= */
    .delete-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(10, 10, 15, 0.95);
        backdrop-filter: blur(10px);
        z-index: 10000;
        align-items: center;
        justify-content: center;
        animation: fadeIn 0.3s ease-out;
    }

    .delete-modal.active {
        display: flex;
    }

    .modal-content {
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: var(--radius-lg);
        padding: 40px;
        max-width: 500px;
        width: 90%;
        text-align: center;
        position: relative;
        animation: modalSlideIn 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    @keyframes modalSlideIn {
        from { transform: translateY(-50px) scale(0.9); opacity: 0; }
        to { transform: translateY(0) scale(1); opacity: 1; }
    }

    .modal-content::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, #ff0000, #8b0000);
    }

    .modal-icon {
        font-size: 48px;
        color: var(--red);
        margin-bottom: 20px;
        animation: pulse 1.5s infinite;
    }

    .modal-content h3 {
        font-size: 24px;
        color: var(--text-light);
        margin-bottom: 15px;
    }

    .modal-content p {
        color: var(--text-muted);
        margin-bottom: 30px;
        line-height: 1.6;
    }

    .modal-actions {
        display: flex;
        gap: 15px;
        justify-content: center;
    }

    .modal-btn {
        padding: 12px 30px;
        border-radius: 8px;
        font-weight: 700;
        font-size: 14px;
        cursor: pointer;
        transition: var(--transition);
        border: none;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .modal-btn-cancel {
        background: rgba(255, 255, 255, 0.05);
        color: var(--text-muted);
        border: 1px solid var(--border-light);
    }

    .modal-btn-cancel:hover {
        background: rgba(255, 255, 255, 0.1);
        color: var(--text-light);
    }

    .modal-btn-confirm {
        background: linear-gradient(135deg, #8b0000, #ff0000);
        color: white;
    }

    .modal-btn-confirm:hover {
        background: linear-gradient(135deg, #ff0000, #8b0000);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 0, 0, 0.3);
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 672
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

        // line 673
        yield "<div class=\"show-hero\">
    <h1>🔍 DÉTAILS SESSION</h1>
    <p>Visualisez tous les détails de cette session de coaching</p>
    <div class=\"session-badge-large\">SESSION #";
        // line 676
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 676, $this->source); })()), "id", [], "any", false, false, false, 676), "html", null, true);
        yield "</div>
</div>

<div class=\"details-container\">
    <div class=\"time-indicator\">
        ";
        // line 681
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 681, $this->source); })()), "sessionDate", [], "any", false, false, false, 681)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 682
            yield "            ";
            $context["sessionDate"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 682, $this->source); })()), "sessionDate", [], "any", false, false, false, 682), "U");
            // line 683
            yield "            ";
            $context["now"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "U");
            // line 684
            yield "            ";
            $context["diff"] = ((isset($context["sessionDate"]) || array_key_exists("sessionDate", $context) ? $context["sessionDate"] : (function () { throw new RuntimeError('Variable "sessionDate" does not exist.', 684, $this->source); })()) - (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 684, $this->source); })()));
            // line 685
            yield "            
            ";
            // line 686
            if (((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 686, $this->source); })()) > 0)) {
                // line 687
                yield "                ";
                if (((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 687, $this->source); })()) < 86400)) {
                    // line 688
                    yield "                    🔥 Dans ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 688, $this->source); })()) / 3600), 1), "html", null, true);
                    yield " heures
                ";
                } else {
                    // line 690
                    yield "                    📅 ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 690, $this->source); })()), "sessionDate", [], "any", false, false, false, 690), "d/m/Y H:i"), "html", null, true);
                    yield "
                ";
                }
                // line 692
                yield "            ";
            } else {
                // line 693
                yield "                ✅ Terminée
            ";
            }
            // line 695
            yield "        ";
        }
        // line 696
        yield "    </div>

    <div class=\"details-grid\">
        <div class=\"detail-item\">
            <div class=\"detail-icon\">👨‍🏫</div>
            <div class=\"detail-label\">Coach</div>
            <div class=\"detail-value\">
                ";
        // line 703
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 703, $this->source); })()), "coach", [], "any", false, false, false, 703)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 704
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 704, $this->source); })()), "coach", [], "any", false, false, false, 704), "fullName", [], "any", false, false, false, 704), "html", null, true);
            yield "
                ";
        } else {
            // line 706
            yield "                    Non assigné
                ";
        }
        // line 708
        yield "            </div>
            ";
        // line 709
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 709, $this->source); })()), "coach", [], "any", false, false, false, 709)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 710
            yield "                <div class=\"detail-subvalue\">
                    <i class=\"fas fa-at\"></i> @";
            // line 711
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 711, $this->source); })()), "coach", [], "any", false, false, false, 711), "username", [], "any", false, false, false, 711), "html", null, true);
            yield "
                    ";
            // line 712
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 712, $this->source); })()), "coach", [], "any", false, false, false, 712), "country", [], "any", false, false, false, 712)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 713
                yield "                        | ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 713, $this->source); })()), "coach", [], "any", false, false, false, 713), "country", [], "any", false, false, false, 713), "html", null, true);
                yield "
                    ";
            }
            // line 715
            yield "                </div>
            ";
        }
        // line 717
        yield "        </div>

        <div class=\"detail-item\">
            <div class=\"detail-icon\">👥</div>
            <div class=\"detail-label\">Équipe</div>
            <div class=\"detail-value\">
                ";
        // line 723
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 723, $this->source); })()), "team", [], "any", false, false, false, 723)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 724
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 724, $this->source); })()), "team", [], "any", false, false, false, 724), "name", [], "any", false, false, false, 724), "html", null, true);
            yield "
                ";
        } else {
            // line 726
            yield "                    Non assignée
                ";
        }
        // line 728
        yield "            </div>
            ";
        // line 729
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 729, $this->source); })()), "team", [], "any", false, false, false, 729)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 730
            yield "                <div class=\"detail-subvalue\">
                    <i class=\"fas fa-gamepad\"></i> ";
            // line 731
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 731, $this->source); })()), "team", [], "any", false, false, false, 731), "game", [], "any", false, false, false, 731), "html", null, true);
            yield "
                </div>
            ";
        }
        // line 734
        yield "        </div>

        <div class=\"detail-item\">
            <div class=\"detail-icon\">📅</div>
            <div class=\"detail-label\">Date & Heure</div>
            <div class=\"detail-value\">
                ";
        // line 740
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 740, $this->source); })()), "sessionDate", [], "any", false, false, false, 740)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 740, $this->source); })()), "sessionDate", [], "any", false, false, false, 740), "d/m/Y à H:i"), "html", null, true)) : ("Non définie"));
        yield "
                ";
        // line 741
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 741, $this->source); })()), "sessionDate", [], "any", false, false, false, 741)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 742
            yield "                    <div class=\"session-status\">
                        ";
            // line 743
            if (((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 743, $this->source); })()) > 0)) {
                // line 744
                yield "                            🔥 À venir
                        ";
            } else {
                // line 746
                yield "                            ✅ Passée
                        ";
            }
            // line 748
            yield "                    </div>
                ";
        }
        // line 750
        yield "            </div>
        </div>

        <div class=\"detail-item\">
            <div class=\"detail-icon\">⏱️</div>
            <div class=\"detail-label\">Durée</div>
            <div class=\"detail-value\">";
        // line 756
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 756, $this->source); })()), "duration", [], "any", false, false, false, 756), "html", null, true);
        yield " minutes</div>
            <div class=\"detail-subvalue\">
                ";
        // line 758
        $context["hours"] = Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 758, $this->source); })()), "duration", [], "any", false, false, false, 758) / 60), 0, "floor");
        // line 759
        yield "                ";
        $context["minutes"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 759, $this->source); })()), "duration", [], "any", false, false, false, 759) % 60);
        // line 760
        yield "                ";
        if (((isset($context["hours"]) || array_key_exists("hours", $context) ? $context["hours"] : (function () { throw new RuntimeError('Variable "hours" does not exist.', 760, $this->source); })()) > 0)) {
            // line 761
            yield "                    <i class=\"fas fa-clock\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hours"]) || array_key_exists("hours", $context) ? $context["hours"] : (function () { throw new RuntimeError('Variable "hours" does not exist.', 761, $this->source); })()), "html", null, true);
            yield "h";
            if (((isset($context["minutes"]) || array_key_exists("minutes", $context) ? $context["minutes"] : (function () { throw new RuntimeError('Variable "minutes" does not exist.', 761, $this->source); })()) > 0)) {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["minutes"]) || array_key_exists("minutes", $context) ? $context["minutes"] : (function () { throw new RuntimeError('Variable "minutes" does not exist.', 761, $this->source); })()), "html", null, true);
                yield "min";
            }
            // line 762
            yield "                ";
        } else {
            // line 763
            yield "                    <i class=\"fas fa-clock\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["minutes"]) || array_key_exists("minutes", $context) ? $context["minutes"] : (function () { throw new RuntimeError('Variable "minutes" does not exist.', 763, $this->source); })()), "html", null, true);
            yield "min
                ";
        }
        // line 765
        yield "            </div>
        </div>

        <div class=\"detail-item\">
            <div class=\"detail-icon\">📊</div>
            <div class=\"detail-label\">ID Session</div>
            <div class=\"detail-value\" id=\"sessionId\">#";
        // line 771
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 771, $this->source); })()), "id", [], "any", false, false, false, 771), "html", null, true);
        yield "</div>
        </div>

        <div class=\"detail-item\">
            <div class=\"detail-icon\">📝</div>
            <div class=\"detail-label\">Caractères Notes</div>
            <div class=\"detail-value\">";
        // line 777
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 777, $this->source); })()), "notes", [], "any", false, false, false, 777)), "html", null, true);
        yield " / 2000</div>
            <div class=\"detail-subvalue\">
                ";
        // line 779
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 779, $this->source); })()), "notes", [], "any", false, false, false, 779)) > 0)) {
            // line 780
            yield "                    <i class=\"fas fa-check-circle\" style=\"color: #2ecc71;\"></i> Notes présentes
                ";
        } else {
            // line 782
            yield "                    <i class=\"fas fa-exclamation-triangle\" style=\"color: #f1c40f;\"></i> Aucune note
                ";
        }
        // line 784
        yield "            </div>
        </div>
    </div>

    <!-- Training Plan Section -->
    ";
        // line 789
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 789, $this->source); })()), "trainingPlan", [], "any", false, false, false, 789)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 790
            yield "    <div class=\"plan-section\">
        <div class=\"plan-header\">
            <div class=\"plan-icon\">📋</div>
            <h3>Plan d'Entraînement Associé</h3>
        </div>
        
        <div class=\"plan-details\">
            <div class=\"plan-detail-item\">
                <div class=\"plan-detail-label\">Titre</div>
                <div class=\"plan-detail-value\">";
            // line 799
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 799, $this->source); })()), "trainingPlan", [], "any", false, false, false, 799), "title", [], "any", false, false, false, 799), "html", null, true);
            yield "</div>
            </div>
            <div class=\"plan-detail-item\">
                <div class=\"plan-detail-label\">Focus</div>
                <div class=\"plan-detail-value\">";
            // line 803
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 803, $this->source); })()), "trainingPlan", [], "any", false, false, false, 803), "focusArea", [], "any", false, false, false, 803), "html", null, true);
            yield "</div>
            </div>
            <div class=\"plan-detail-item\">
                <div class=\"plan-detail-label\">Difficulté</div>
                <div class=\"plan-detail-value\">";
            // line 807
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 807, $this->source); })()), "trainingPlan", [], "any", false, false, false, 807), "difficultyLevel", [], "any", false, false, false, 807), "html", null, true);
            yield "</div>
            </div>
        </div>
        
        ";
            // line 811
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 811, $this->source); })()), "trainingPlan", [], "any", false, false, false, 811), "description", [], "any", false, false, false, 811)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 812
                yield "        <div class=\"plan-description\">
            ";
                // line 813
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 813, $this->source); })()), "trainingPlan", [], "any", false, false, false, 813), "description", [], "any", false, false, false, 813), "html", null, true);
                yield "
        </div>
        ";
            }
            // line 816
            yield "        
        <div style=\"margin-top: 15px; text-align: right;\">
            <a href=\"";
            // line 818
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training_plan_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 818, $this->source); })()), "trainingPlan", [], "any", false, false, false, 818), "id", [], "any", false, false, false, 818)]), "html", null, true);
            yield "\" 
               style=\"color: #3498db; text-decoration: none; font-size: 13px; font-weight: 600;\">
                Voir le détail du plan →
            </a>
        </div>
    </div>
    ";
        }
        // line 825
        yield "
    ";
        // line 826
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 826, $this->source); })()), "notes", [], "any", false, false, false, 826)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 827
            yield "    <div class=\"notes-section\">
        <div class=\"notes-header\">
            <div class=\"notes-icon\">📋</div>
            <h3>Notes de Session</h3>
        </div>
        <div class=\"notes-content\">
            ";
            // line 833
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 833, $this->source); })()), "notes", [], "any", false, false, false, 833), "html", null, true));
            yield "
        </div>
    </div>
    ";
        }
        // line 837
        yield "
    <div class=\"stats-badges\">
        <div class=\"stat-badge\">
            <i class=\"fas fa-clock\"></i>
            Durée : ";
        // line 841
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 841, $this->source); })()), "duration", [], "any", false, false, false, 841), "html", null, true);
        yield " min
        </div>
        
        ";
        // line 844
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 844, $this->source); })()), "notes", [], "any", false, false, false, 844)) > 100)) {
            // line 845
            yield "        <div class=\"stat-badge\">
            <i class=\"fas fa-file-alt\"></i>
            Notes détaillées
        </div>
        ";
        }
        // line 850
        yield "        
        ";
        // line 851
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 851, $this->source); })()), "duration", [], "any", false, false, false, 851) > 60)) {
            // line 852
            yield "        <div class=\"stat-badge\">
            <i class=\"fas fa-bolt\"></i>
            Session intensive
        </div>
        ";
        }
        // line 857
        yield "        
        ";
        // line 858
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 858, $this->source); })()), "trainingPlan", [], "any", false, false, false, 858)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 859
            yield "        <div class=\"stat-badge\">
            <i class=\"fas fa-dumbbell\"></i>
            Plan: ";
            // line 861
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 861, $this->source); })()), "trainingPlan", [], "any", false, false, false, 861), "title", [], "any", false, false, false, 861), 0, 20), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 861, $this->source); })()), "trainingPlan", [], "any", false, false, false, 861), "title", [], "any", false, false, false, 861)) > 20)) {
                yield "...";
            }
            // line 862
            yield "        </div>
        ";
        }
        // line 864
        yield "        
        ";
        // line 865
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 865, $this->source); })()), "sessionDate", [], "any", false, false, false, 865)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 866
            yield "            ";
            if (((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 866, $this->source); })()) > 0)) {
                // line 867
                yield "            <div class=\"stat-badge\">
                <i class=\"fas fa-calendar-check\"></i>
                Programmé
            </div>
            ";
            } else {
                // line 872
                yield "            <div class=\"stat-badge\">
                <i class=\"fas fa-check-circle\"></i>
                Terminé
            </div>
            ";
            }
            // line 877
            yield "        ";
        }
        // line 878
        yield "    </div>

    <div class=\"action-buttons\">
        <a href=\"";
        // line 881
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_index");
        yield "\" class=\"btn-back\">
            Retour à la liste
        </a>
        
        <a href=\"";
        // line 885
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 885, $this->source); })()), "id", [], "any", false, false, false, 885)]), "html", null, true);
        yield "\" class=\"btn-edit\">
            Modifier
        </a>
        
        <button type=\"button\" class=\"btn-delete\" onclick=\"showDeleteModal()\">
            Supprimer
        </button>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class=\"delete-modal\" id=\"deleteModal\">
    <div class=\"modal-content\">
        <div class=\"modal-icon\">⚠️</div>
        <h3>Confirmer la suppression</h3>
        <p>
            Êtes-vous sûr de vouloir supprimer définitivement la session #";
        // line 901
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 901, $this->source); })()), "id", [], "any", false, false, false, 901), "html", null, true);
        yield " ?<br>
            <strong>Cette action est irréversible !</strong>
        </p>
        ";
        // line 904
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 904, $this->source); })()), "trainingPlan", [], "any", false, false, false, 904)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 905
            yield "        <p style=\"font-size: 13px; color: #e74c3c;\">
            <i class=\"fas fa-info-circle\"></i> Le plan d'entraînement \"";
            // line 906
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 906, $this->source); })()), "trainingPlan", [], "any", false, false, false, 906), "title", [], "any", false, false, false, 906), "html", null, true);
            yield "\" ne sera pas supprimé.
        </p>
        ";
        }
        // line 909
        yield "        <div class=\"modal-actions\">
            <button type=\"button\" class=\"modal-btn modal-btn-cancel\" onclick=\"hideDeleteModal()\">
                Annuler
            </button>
            <form method=\"post\" action=\"";
        // line 913
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 913, $this->source); })()), "id", [], "any", false, false, false, 913)]), "html", null, true);
        yield "\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 914
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 914, $this->source); })()), "id", [], "any", false, false, false, 914))), "html", null, true);
        yield "\">
                <button type=\"submit\" class=\"modal-btn modal-btn-confirm\">
                    Confirmer
                </button>
            </form>
        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 925
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

        // line 926
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
function showDeleteModal() {
    const modal = document.getElementById('deleteModal');
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
}

function hideDeleteModal() {
    const modal = document.getElementById('deleteModal');
    modal.classList.remove('active');
    document.body.style.overflow = 'auto';
}

// Close modal when clicking outside
document.getElementById('deleteModal').addEventListener('click', function(e) {
    if (e.target === this) {
        hideDeleteModal();
    }
});

// Add hover effects to detail items
const detailItems = document.querySelectorAll('.detail-item');
detailItems.forEach(item => {
    item.addEventListener('mouseenter', function() {
        const icon = this.querySelector('.detail-icon');
        if (icon) {
            icon.style.transform = 'rotate(10deg) scale(1.1)';
        }
    });
    
    item.addEventListener('mouseleave', function() {
        const icon = this.querySelector('.detail-icon');
        if (icon) {
            icon.style.transform = 'rotate(0) scale(1)';
        }
    });
});

// Add animation to stats badges
const statBadges = document.querySelectorAll('.stat-badge');
statBadges.forEach((badge, index) => {
    badge.style.animationDelay = `\${index * 0.1}s`;
    badge.style.animation = 'fadeInUp 0.5s ease-out backwards';
});

// Add copy ID functionality
const sessionIdElement = document.getElementById('sessionId');
if (sessionIdElement) {
    sessionIdElement.style.cursor = 'pointer';
    sessionIdElement.title = 'Cliquer pour copier l\\'ID';
    
    sessionIdElement.addEventListener('click', function() {
        const id = this.textContent.replace('#', '');
        navigator.clipboard.writeText(id).then(() => {
            const originalText = this.textContent;
            this.textContent = '✅ Copié !';
            this.style.color = '#2dff8b';
            
            setTimeout(() => {
                this.textContent = originalText;
                this.style.color = '';
            }, 2000);
        });
    });
}

// Escape key to close modal
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        hideDeleteModal();
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
        return "coaching_session/show.html.twig";
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
        return array (  1279 => 926,  1266 => 925,  1245 => 914,  1241 => 913,  1235 => 909,  1229 => 906,  1226 => 905,  1224 => 904,  1218 => 901,  1199 => 885,  1192 => 881,  1187 => 878,  1184 => 877,  1177 => 872,  1170 => 867,  1167 => 866,  1165 => 865,  1162 => 864,  1158 => 862,  1153 => 861,  1149 => 859,  1147 => 858,  1144 => 857,  1137 => 852,  1135 => 851,  1132 => 850,  1125 => 845,  1123 => 844,  1117 => 841,  1111 => 837,  1104 => 833,  1096 => 827,  1094 => 826,  1091 => 825,  1081 => 818,  1077 => 816,  1071 => 813,  1068 => 812,  1066 => 811,  1059 => 807,  1052 => 803,  1045 => 799,  1034 => 790,  1032 => 789,  1025 => 784,  1021 => 782,  1017 => 780,  1015 => 779,  1010 => 777,  1001 => 771,  993 => 765,  987 => 763,  984 => 762,  975 => 761,  972 => 760,  969 => 759,  967 => 758,  962 => 756,  954 => 750,  950 => 748,  946 => 746,  942 => 744,  940 => 743,  937 => 742,  935 => 741,  931 => 740,  923 => 734,  917 => 731,  914 => 730,  912 => 729,  909 => 728,  905 => 726,  899 => 724,  897 => 723,  889 => 717,  885 => 715,  879 => 713,  877 => 712,  873 => 711,  870 => 710,  868 => 709,  865 => 708,  861 => 706,  855 => 704,  853 => 703,  844 => 696,  841 => 695,  837 => 693,  834 => 692,  828 => 690,  822 => 688,  819 => 687,  817 => 686,  814 => 685,  811 => 684,  808 => 683,  805 => 682,  803 => 681,  795 => 676,  790 => 673,  777 => 672,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Phantom Force - Détails Session{% endblock %}

{% block inline_styles %}
<style>
    /* ================= SHOW PAGE STYLES ================= */
    .show-hero {
        text-align: center;
        padding: 80px 20px 40px;
        position: relative;
        margin-bottom: 40px;
        animation: fadeInUp 0.8s ease-out;
    }

    .show-hero::after {
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

    .show-hero h1 {
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

    .show-hero p {
        color: var(--text-muted);
        font-size: 20px;
        max-width: 700px;
        margin: 0 auto 20px;
        line-height: 1.6;
    }

    /* ================= SESSION BADGE ================= */
    .session-badge-large {
        display: inline-block;
        background: linear-gradient(135deg, rgba(255,45,45,0.2), rgba(255,0,0,0.1));
        border: 2px solid rgba(255,45,45,0.4);
        border-radius: 50px;
        padding: 12px 30px;
        font-size: 18px;
        font-weight: 800;
        color: var(--red);
        margin-bottom: 20px;
        animation: badgePulse 2s infinite alternate;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    @keyframes badgePulse {
        0% { 
            box-shadow: 0 0 15px rgba(255,45,45,0.2);
            transform: scale(1);
        }
        100% { 
            box-shadow: 0 0 30px rgba(255,45,45,0.4);
            transform: scale(1.02);
        }
    }

    /* ================= DETAILS CONTAINER ================= */
    .details-container {
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: var(--radius-lg);
        padding: 50px;
        box-shadow: var(--shadow-lg);
        max-width: 1000px;
        margin: 0 auto 60px;
        position: relative;
        overflow: hidden;
        animation: fadeInUp 0.8s ease-out 0.2s backwards;
    }

    .details-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, #ff0000, #ff2d2d, #ff5e5e);
        animation: borderFlow 3s linear infinite;
    }

    .details-container::after {
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

    /* ================= DETAILS GRID ================= */
    .details-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
        margin-bottom: 50px;
        position: relative;
        z-index: 1;
    }

    @media (max-width: 768px) {
        .details-grid {
            grid-template-columns: 1fr;
        }
    }

    /* ================= DETAIL ITEM ================= */
    .detail-item {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: var(--radius);
        padding: 25px;
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }

    .detail-item:hover {
        border-color: rgba(255, 45, 45, 0.4);
        background: rgba(255, 45, 45, 0.05);
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(255, 0, 0, 0.1);
    }

    .detail-icon {
        width: 50px;
        height: 50px;
        background: rgba(255, 45, 45, 0.15);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        color: var(--red);
        font-size: 22px;
        transition: var(--transition);
    }

    .detail-item:hover .detail-icon {
        transform: rotate(10deg) scale(1.1);
        background: rgba(255, 45, 45, 0.25);
    }

    .detail-label {
        font-size: 12px;
        color: var(--text-muted);
        text-transform: uppercase;
        letter-spacing: 1.5px;
        font-weight: 600;
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .detail-label::before {
        content: '▸';
        color: var(--red);
        font-size: 14px;
        animation: arrowBlink 2s infinite;
    }

    @keyframes arrowBlink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.3; }
    }

    .detail-value {
        font-size: 20px;
        color: var(--text-light);
        font-weight: 700;
        line-height: 1.4;
    }

    .detail-subvalue {
        font-size: 14px;
        color: var(--text-muted);
        margin-top: 5px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .detail-subvalue i {
        color: var(--red);
        font-size: 12px;
    }

    /* ================= NOTES SECTION ================= */
    .notes-section {
        background: rgba(255, 45, 45, 0.05);
        border: 1px solid rgba(255, 45, 45, 0.2);
        border-radius: var(--radius-lg);
        padding: 35px;
        margin: 40px 0;
        position: relative;
        z-index: 1;
        animation: fadeInUp 0.8s ease-out 0.4s backwards;
    }

    .notes-header {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 25px;
    }

    .notes-icon {
        width: 50px;
        height: 50px;
        background: rgba(255, 45, 45, 0.2);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--red);
        font-size: 24px;
    }

    .notes-header h3 {
        font-size: 22px;
        color: var(--text-light);
        font-weight: 700;
    }

    .notes-content {
        color: var(--text-muted);
        font-size: 16px;
        line-height: 1.7;
        padding: 20px;
        background: rgba(0, 0, 0, 0.3);
        border-radius: var(--radius);
        border-left: 4px solid var(--red);
    }

    .notes-content p {
        margin-bottom: 15px;
    }

    .notes-content p:last-child {
        margin-bottom: 0;
    }

    /* ================= STATS BADGES ================= */
    .stats-badges {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
        margin: 30px 0;
        animation: fadeInUp 0.8s ease-out 0.6s backwards;
    }

    .stat-badge {
        padding: 10px 20px;
        background: rgba(255, 45, 45, 0.1);
        border: 1px solid rgba(255, 45, 45, 0.3);
        border-radius: 50px;
        font-size: 13px;
        font-weight: 600;
        color: var(--red);
        display: flex;
        align-items: center;
        gap: 8px;
        transition: var(--transition);
    }

    .stat-badge:hover {
        background: rgba(255, 45, 45, 0.2);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 45, 45, 0.2);
    }

    .stat-badge i {
        font-size: 14px;
    }

    /* ================= TRAINING PLAN SECTION ================= */
    .plan-section {
        background: rgba(52, 152, 219, 0.08);
        border: 1px solid rgba(52, 152, 219, 0.3);
        border-radius: var(--radius-lg);
        padding: 30px;
        margin: 30px 0;
        animation: fadeInUp 0.8s ease-out 0.5s backwards;
    }

    .plan-header {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 20px;
    }

    .plan-icon {
        width: 45px;
        height: 45px;
        background: rgba(52, 152, 219, 0.15);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #3498db;
        font-size: 20px;
    }

    .plan-header h3 {
        font-size: 20px;
        color: var(--text-light);
        font-weight: 700;
    }

    .plan-details {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-top: 20px;
    }

    @media (max-width: 768px) {
        .plan-details {
            grid-template-columns: 1fr;
        }
    }

    .plan-detail-item {
        background: rgba(0, 0, 0, 0.2);
        padding: 15px;
        border-radius: var(--radius);
        text-align: center;
    }

    .plan-detail-label {
        font-size: 11px;
        color: var(--text-muted);
        text-transform: uppercase;
        margin-bottom: 5px;
    }

    .plan-detail-value {
        font-size: 16px;
        color: #3498db;
        font-weight: 700;
    }

    .plan-description {
        margin-top: 20px;
        padding: 15px;
        background: rgba(0, 0, 0, 0.2);
        border-radius: var(--radius);
        color: var(--text-muted);
        font-style: italic;
        border-left: 3px solid #3498db;
    }

    /* ================= ACTION BUTTONS ================= */
    .action-buttons {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 50px;
        padding-top: 40px;
        border-top: 1px solid rgba(255, 45, 45, 0.2);
        position: relative;
        z-index: 1;
        animation: fadeInUp 0.8s ease-out 0.8s backwards;
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

    .btn-edit {
        padding: 15px 30px;
        background: rgba(255, 45, 45, 0.1);
        border: 1px solid rgba(255, 45, 45, 0.3);
        border-radius: 10px;
        color: var(--red);
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

    .btn-edit:hover {
        background: rgba(255, 45, 45, 0.2);
        color: var(--red);
        transform: translateY(-3px);
        border-color: var(--red);
        box-shadow: 0 8px 20px rgba(255, 45, 45, 0.2);
    }

    .btn-edit::before {
        content: '✏️';
        font-size: 16px;
    }

    .btn-delete {
        padding: 15px 30px;
        background: linear-gradient(135deg, #8b0000, #ff0000, #8b0000);
        border: none;
        border-radius: 10px;
        color: white;
        text-decoration: none;
        font-weight: 700;
        font-size: 14px;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        transition: var(--transition);
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
    }

    .btn-delete:hover {
        background: linear-gradient(135deg, #ff0000, #8b0000, #ff0000);
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(139, 0, 0, 0.3);
    }

    .btn-delete::before {
        content: '🗑️';
        font-size: 16px;
    }

    /* ================= SESSION STATUS ================= */
    .session-status {
        display: inline-block;
        padding: 8px 20px;
        background: linear-gradient(135deg, rgba(255,45,45,0.2), rgba(255,0,0,0.1));
        border: 1px solid rgba(255,45,45,0.4);
        border-radius: 6px;
        font-size: 12px;
        font-weight: 700;
        color: var(--red);
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-left: 15px;
        animation: statusPulse 3s infinite;
    }

    @keyframes statusPulse {
        0%, 100% { opacity: 0.7; }
        50% { opacity: 1; }
    }

    /* ================= TIME INDICATOR ================= */
    .time-indicator {
        position: absolute;
        top: 20px;
        right: 20px;
        display: flex;
        align-items: center;
        gap: 8px;
        color: var(--text-muted);
        font-size: 13px;
        font-weight: 600;
    }

    .time-indicator::before {
        content: '⏰';
        font-size: 14px;
    }

    /* ================= RESPONSIVE ================= */
    @media (max-width: 768px) {
        .show-hero h1 {
            font-size: 40px;
        }
        
        .details-container {
            padding: 30px 20px;
            margin: 0 15px 40px;
        }
        
        .action-buttons {
            flex-direction: column;
            gap: 15px;
        }
        
        .btn-back, .btn-edit, .btn-delete {
            width: 100%;
            justify-content: center;
        }
        
        .time-indicator {
            position: relative;
            top: 0;
            right: 0;
            justify-content: center;
            margin-bottom: 20px;
        }
    }

    /* ================= ANIMATIONS ================= */
    .detail-item {
        animation: fadeInUp 0.5s ease-out backwards;
    }

    .detail-item:nth-child(1) { animation-delay: 0.1s; }
    .detail-item:nth-child(2) { animation-delay: 0.2s; }
    .detail-item:nth-child(3) { animation-delay: 0.3s; }
    .detail-item:nth-child(4) { animation-delay: 0.4s; }
    .detail-item:nth-child(5) { animation-delay: 0.5s; }
    .detail-item:nth-child(6) { animation-delay: 0.6s; }
    .detail-item:nth-child(7) { animation-delay: 0.7s; }

    /* ================= DELETE MODAL ================= */
    .delete-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(10, 10, 15, 0.95);
        backdrop-filter: blur(10px);
        z-index: 10000;
        align-items: center;
        justify-content: center;
        animation: fadeIn 0.3s ease-out;
    }

    .delete-modal.active {
        display: flex;
    }

    .modal-content {
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: var(--radius-lg);
        padding: 40px;
        max-width: 500px;
        width: 90%;
        text-align: center;
        position: relative;
        animation: modalSlideIn 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    @keyframes modalSlideIn {
        from { transform: translateY(-50px) scale(0.9); opacity: 0; }
        to { transform: translateY(0) scale(1); opacity: 1; }
    }

    .modal-content::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, #ff0000, #8b0000);
    }

    .modal-icon {
        font-size: 48px;
        color: var(--red);
        margin-bottom: 20px;
        animation: pulse 1.5s infinite;
    }

    .modal-content h3 {
        font-size: 24px;
        color: var(--text-light);
        margin-bottom: 15px;
    }

    .modal-content p {
        color: var(--text-muted);
        margin-bottom: 30px;
        line-height: 1.6;
    }

    .modal-actions {
        display: flex;
        gap: 15px;
        justify-content: center;
    }

    .modal-btn {
        padding: 12px 30px;
        border-radius: 8px;
        font-weight: 700;
        font-size: 14px;
        cursor: pointer;
        transition: var(--transition);
        border: none;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .modal-btn-cancel {
        background: rgba(255, 255, 255, 0.05);
        color: var(--text-muted);
        border: 1px solid var(--border-light);
    }

    .modal-btn-cancel:hover {
        background: rgba(255, 255, 255, 0.1);
        color: var(--text-light);
    }

    .modal-btn-confirm {
        background: linear-gradient(135deg, #8b0000, #ff0000);
        color: white;
    }

    .modal-btn-confirm:hover {
        background: linear-gradient(135deg, #ff0000, #8b0000);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 0, 0, 0.3);
    }
</style>
{% endblock %}

{% block body %}
<div class=\"show-hero\">
    <h1>🔍 DÉTAILS SESSION</h1>
    <p>Visualisez tous les détails de cette session de coaching</p>
    <div class=\"session-badge-large\">SESSION #{{ coaching_session.id }}</div>
</div>

<div class=\"details-container\">
    <div class=\"time-indicator\">
        {% if coaching_session.sessionDate %}
            {% set sessionDate = coaching_session.sessionDate|date('U') %}
            {% set now = \"now\"|date('U') %}
            {% set diff = sessionDate - now %}
            
            {% if diff > 0 %}
                {% if diff < 86400 %}
                    🔥 Dans {{ (diff / 3600)|round(1) }} heures
                {% else %}
                    📅 {{ coaching_session.sessionDate|date('d/m/Y H:i') }}
                {% endif %}
            {% else %}
                ✅ Terminée
            {% endif %}
        {% endif %}
    </div>

    <div class=\"details-grid\">
        <div class=\"detail-item\">
            <div class=\"detail-icon\">👨‍🏫</div>
            <div class=\"detail-label\">Coach</div>
            <div class=\"detail-value\">
                {% if coaching_session.coach %}
                    {{ coaching_session.coach.fullName }}
                {% else %}
                    Non assigné
                {% endif %}
            </div>
            {% if coaching_session.coach %}
                <div class=\"detail-subvalue\">
                    <i class=\"fas fa-at\"></i> @{{ coaching_session.coach.username }}
                    {% if coaching_session.coach.country %}
                        | {{ coaching_session.coach.country }}
                    {% endif %}
                </div>
            {% endif %}
        </div>

        <div class=\"detail-item\">
            <div class=\"detail-icon\">👥</div>
            <div class=\"detail-label\">Équipe</div>
            <div class=\"detail-value\">
                {% if coaching_session.team %}
                    {{ coaching_session.team.name }}
                {% else %}
                    Non assignée
                {% endif %}
            </div>
            {% if coaching_session.team %}
                <div class=\"detail-subvalue\">
                    <i class=\"fas fa-gamepad\"></i> {{ coaching_session.team.game }}
                </div>
            {% endif %}
        </div>

        <div class=\"detail-item\">
            <div class=\"detail-icon\">📅</div>
            <div class=\"detail-label\">Date & Heure</div>
            <div class=\"detail-value\">
                {{ coaching_session.sessionDate ? coaching_session.sessionDate|date('d/m/Y à H:i') : 'Non définie' }}
                {% if coaching_session.sessionDate %}
                    <div class=\"session-status\">
                        {% if diff > 0 %}
                            🔥 À venir
                        {% else %}
                            ✅ Passée
                        {% endif %}
                    </div>
                {% endif %}
            </div>
        </div>

        <div class=\"detail-item\">
            <div class=\"detail-icon\">⏱️</div>
            <div class=\"detail-label\">Durée</div>
            <div class=\"detail-value\">{{ coaching_session.duration }} minutes</div>
            <div class=\"detail-subvalue\">
                {% set hours = (coaching_session.duration / 60)|round(0, 'floor') %}
                {% set minutes = coaching_session.duration % 60 %}
                {% if hours > 0 %}
                    <i class=\"fas fa-clock\"></i> {{ hours }}h{% if minutes > 0 %} {{ minutes }}min{% endif %}
                {% else %}
                    <i class=\"fas fa-clock\"></i> {{ minutes }}min
                {% endif %}
            </div>
        </div>

        <div class=\"detail-item\">
            <div class=\"detail-icon\">📊</div>
            <div class=\"detail-label\">ID Session</div>
            <div class=\"detail-value\" id=\"sessionId\">#{{ coaching_session.id }}</div>
        </div>

        <div class=\"detail-item\">
            <div class=\"detail-icon\">📝</div>
            <div class=\"detail-label\">Caractères Notes</div>
            <div class=\"detail-value\">{{ coaching_session.notes|length }} / 2000</div>
            <div class=\"detail-subvalue\">
                {% if coaching_session.notes|length > 0 %}
                    <i class=\"fas fa-check-circle\" style=\"color: #2ecc71;\"></i> Notes présentes
                {% else %}
                    <i class=\"fas fa-exclamation-triangle\" style=\"color: #f1c40f;\"></i> Aucune note
                {% endif %}
            </div>
        </div>
    </div>

    <!-- Training Plan Section -->
    {% if coaching_session.trainingPlan %}
    <div class=\"plan-section\">
        <div class=\"plan-header\">
            <div class=\"plan-icon\">📋</div>
            <h3>Plan d'Entraînement Associé</h3>
        </div>
        
        <div class=\"plan-details\">
            <div class=\"plan-detail-item\">
                <div class=\"plan-detail-label\">Titre</div>
                <div class=\"plan-detail-value\">{{ coaching_session.trainingPlan.title }}</div>
            </div>
            <div class=\"plan-detail-item\">
                <div class=\"plan-detail-label\">Focus</div>
                <div class=\"plan-detail-value\">{{ coaching_session.trainingPlan.focusArea }}</div>
            </div>
            <div class=\"plan-detail-item\">
                <div class=\"plan-detail-label\">Difficulté</div>
                <div class=\"plan-detail-value\">{{ coaching_session.trainingPlan.difficultyLevel }}</div>
            </div>
        </div>
        
        {% if coaching_session.trainingPlan.description %}
        <div class=\"plan-description\">
            {{ coaching_session.trainingPlan.description }}
        </div>
        {% endif %}
        
        <div style=\"margin-top: 15px; text-align: right;\">
            <a href=\"{{ path('app_training_plan_show', {'id': coaching_session.trainingPlan.id}) }}\" 
               style=\"color: #3498db; text-decoration: none; font-size: 13px; font-weight: 600;\">
                Voir le détail du plan →
            </a>
        </div>
    </div>
    {% endif %}

    {% if coaching_session.notes %}
    <div class=\"notes-section\">
        <div class=\"notes-header\">
            <div class=\"notes-icon\">📋</div>
            <h3>Notes de Session</h3>
        </div>
        <div class=\"notes-content\">
            {{ coaching_session.notes|nl2br }}
        </div>
    </div>
    {% endif %}

    <div class=\"stats-badges\">
        <div class=\"stat-badge\">
            <i class=\"fas fa-clock\"></i>
            Durée : {{ coaching_session.duration }} min
        </div>
        
        {% if coaching_session.notes|length > 100 %}
        <div class=\"stat-badge\">
            <i class=\"fas fa-file-alt\"></i>
            Notes détaillées
        </div>
        {% endif %}
        
        {% if coaching_session.duration > 60 %}
        <div class=\"stat-badge\">
            <i class=\"fas fa-bolt\"></i>
            Session intensive
        </div>
        {% endif %}
        
        {% if coaching_session.trainingPlan %}
        <div class=\"stat-badge\">
            <i class=\"fas fa-dumbbell\"></i>
            Plan: {{ coaching_session.trainingPlan.title|slice(0, 20) }}{% if coaching_session.trainingPlan.title|length > 20 %}...{% endif %}
        </div>
        {% endif %}
        
        {% if coaching_session.sessionDate %}
            {% if diff > 0 %}
            <div class=\"stat-badge\">
                <i class=\"fas fa-calendar-check\"></i>
                Programmé
            </div>
            {% else %}
            <div class=\"stat-badge\">
                <i class=\"fas fa-check-circle\"></i>
                Terminé
            </div>
            {% endif %}
        {% endif %}
    </div>

    <div class=\"action-buttons\">
        <a href=\"{{ path('app_coaching_session_index') }}\" class=\"btn-back\">
            Retour à la liste
        </a>
        
        <a href=\"{{ path('app_coaching_session_edit', {'id': coaching_session.id}) }}\" class=\"btn-edit\">
            Modifier
        </a>
        
        <button type=\"button\" class=\"btn-delete\" onclick=\"showDeleteModal()\">
            Supprimer
        </button>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class=\"delete-modal\" id=\"deleteModal\">
    <div class=\"modal-content\">
        <div class=\"modal-icon\">⚠️</div>
        <h3>Confirmer la suppression</h3>
        <p>
            Êtes-vous sûr de vouloir supprimer définitivement la session #{{ coaching_session.id }} ?<br>
            <strong>Cette action est irréversible !</strong>
        </p>
        {% if coaching_session.trainingPlan %}
        <p style=\"font-size: 13px; color: #e74c3c;\">
            <i class=\"fas fa-info-circle\"></i> Le plan d'entraînement \"{{ coaching_session.trainingPlan.title }}\" ne sera pas supprimé.
        </p>
        {% endif %}
        <div class=\"modal-actions\">
            <button type=\"button\" class=\"modal-btn modal-btn-cancel\" onclick=\"hideDeleteModal()\">
                Annuler
            </button>
            <form method=\"post\" action=\"{{ path('app_coaching_session_delete', {'id': coaching_session.id}) }}\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ coaching_session.id) }}\">
                <button type=\"submit\" class=\"modal-btn modal-btn-confirm\">
                    Confirmer
                </button>
            </form>
        </div>
    </div>
</div>

{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
function showDeleteModal() {
    const modal = document.getElementById('deleteModal');
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
}

function hideDeleteModal() {
    const modal = document.getElementById('deleteModal');
    modal.classList.remove('active');
    document.body.style.overflow = 'auto';
}

// Close modal when clicking outside
document.getElementById('deleteModal').addEventListener('click', function(e) {
    if (e.target === this) {
        hideDeleteModal();
    }
});

// Add hover effects to detail items
const detailItems = document.querySelectorAll('.detail-item');
detailItems.forEach(item => {
    item.addEventListener('mouseenter', function() {
        const icon = this.querySelector('.detail-icon');
        if (icon) {
            icon.style.transform = 'rotate(10deg) scale(1.1)';
        }
    });
    
    item.addEventListener('mouseleave', function() {
        const icon = this.querySelector('.detail-icon');
        if (icon) {
            icon.style.transform = 'rotate(0) scale(1)';
        }
    });
});

// Add animation to stats badges
const statBadges = document.querySelectorAll('.stat-badge');
statBadges.forEach((badge, index) => {
    badge.style.animationDelay = `\${index * 0.1}s`;
    badge.style.animation = 'fadeInUp 0.5s ease-out backwards';
});

// Add copy ID functionality
const sessionIdElement = document.getElementById('sessionId');
if (sessionIdElement) {
    sessionIdElement.style.cursor = 'pointer';
    sessionIdElement.title = 'Cliquer pour copier l\\'ID';
    
    sessionIdElement.addEventListener('click', function() {
        const id = this.textContent.replace('#', '');
        navigator.clipboard.writeText(id).then(() => {
            const originalText = this.textContent;
            this.textContent = '✅ Copié !';
            this.style.color = '#2dff8b';
            
            setTimeout(() => {
                this.textContent = originalText;
                this.style.color = '';
            }, 2000);
        });
    });
}

// Escape key to close modal
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        hideDeleteModal();
    }
});
</script>
{% endblock %}", "coaching_session/show.html.twig", "C:\\xampp\\htdocs\\esport (3)\\esport\\templates\\coaching_session\\show.html.twig");
    }
}
