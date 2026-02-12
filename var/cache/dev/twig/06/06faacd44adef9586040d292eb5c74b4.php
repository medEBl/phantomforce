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
class __TwigTemplate_8b793441d4e8009af11ebf9937a041d0 extends Template
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
        max-width: 900px;
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

    // line 579
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

        // line 580
        yield "<div class=\"show-hero\">
    <h1>🔍 DÉTAILS SESSION</h1>
    <p>Visualisez tous les détails de cette session de coaching</p>
    <div class=\"session-badge-large\">SESSION #";
        // line 583
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 583, $this->source); })()), "id", [], "any", false, false, false, 583), "html", null, true);
        yield "</div>
</div>

<div class=\"details-container\">
    <div class=\"time-indicator\">
        ";
        // line 588
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 588, $this->source); })()), "sessionDate", [], "any", false, false, false, 588)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 589
            yield "            ";
            $context["sessionDate"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 589, $this->source); })()), "sessionDate", [], "any", false, false, false, 589), "U");
            // line 590
            yield "            ";
            $context["now"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "U");
            // line 591
            yield "            ";
            $context["diff"] = ((isset($context["sessionDate"]) || array_key_exists("sessionDate", $context) ? $context["sessionDate"] : (function () { throw new RuntimeError('Variable "sessionDate" does not exist.', 591, $this->source); })()) - (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 591, $this->source); })()));
            // line 592
            yield "            
            ";
            // line 593
            if (((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 593, $this->source); })()) > 0)) {
                // line 594
                yield "                ";
                if (((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 594, $this->source); })()) < 86400)) {
                    // line 595
                    yield "                    🔥 Dans ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 595, $this->source); })()) / 3600), 1), "html", null, true);
                    yield " heures
                ";
                } else {
                    // line 597
                    yield "                    📅 ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 597, $this->source); })()), "sessionDate", [], "any", false, false, false, 597), "d/m/Y H:i"), "html", null, true);
                    yield "
                ";
                }
                // line 599
                yield "            ";
            } else {
                // line 600
                yield "                ✅ Terminée
            ";
            }
            // line 602
            yield "        ";
        }
        // line 603
        yield "    </div>

    <div class=\"details-grid\">
        <div class=\"detail-item\">
            <div class=\"detail-icon\">👨‍🏫</div>
            <div class=\"detail-label\">Coach</div>
            <div class=\"detail-value\">Coach #";
        // line 609
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 609, $this->source); })()), "coachId", [], "any", false, false, false, 609), "html", null, true);
        yield "</div>
        </div>

        <div class=\"detail-item\">
            <div class=\"detail-icon\">👥</div>
            <div class=\"detail-label\">Équipe</div>
            <div class=\"detail-value\">Équipe #";
        // line 615
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 615, $this->source); })()), "teamId", [], "any", false, false, false, 615), "html", null, true);
        yield "</div>
        </div>

        <div class=\"detail-item\">
            <div class=\"detail-icon\">📅</div>
            <div class=\"detail-label\">Date & Heure</div>
            <div class=\"detail-value\">
                ";
        // line 622
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 622, $this->source); })()), "sessionDate", [], "any", false, false, false, 622)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 622, $this->source); })()), "sessionDate", [], "any", false, false, false, 622), "d/m/Y à H:i"), "html", null, true)) : ("Non définie"));
        yield "
                ";
        // line 623
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 623, $this->source); })()), "sessionDate", [], "any", false, false, false, 623)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 624
            yield "                    <div class=\"session-status\">
                        ";
            // line 625
            if (((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 625, $this->source); })()) > 0)) {
                // line 626
                yield "                            🔥 À venir
                        ";
            } else {
                // line 628
                yield "                            ✅ Passée
                        ";
            }
            // line 630
            yield "                    </div>
                ";
        }
        // line 632
        yield "            </div>
        </div>

        <div class=\"detail-item\">
            <div class=\"detail-icon\">⏱️</div>
            <div class=\"detail-label\">Durée</div>
            <div class=\"detail-value\">";
        // line 638
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 638, $this->source); })()), "duration", [], "any", false, false, false, 638), "html", null, true);
        yield " minutes</div>
        </div>

        <div class=\"detail-item\">
            <div class=\"detail-icon\">📊</div>
            <div class=\"detail-label\">ID Session</div>
            <div class=\"detail-value\">#";
        // line 644
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 644, $this->source); })()), "id", [], "any", false, false, false, 644), "html", null, true);
        yield "</div>
        </div>

        <div class=\"detail-item\">
            <div class=\"detail-icon\">📝</div>
            <div class=\"detail-label\">Caractères Notes</div>
            <div class=\"detail-value\">";
        // line 650
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 650, $this->source); })()), "notes", [], "any", false, false, false, 650)), "html", null, true);
        yield " caractères</div>
        </div>
    </div>

    ";
        // line 654
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 654, $this->source); })()), "notes", [], "any", false, false, false, 654)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 655
            yield "    <div class=\"notes-section\">
        <div class=\"notes-header\">
            <div class=\"notes-icon\">📋</div>
            <h3>Notes de Session</h3>
        </div>
        <div class=\"notes-content\">
            ";
            // line 661
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 661, $this->source); })()), "notes", [], "any", false, false, false, 661), "html", null, true));
            yield "
        </div>
    </div>
    ";
        }
        // line 665
        yield "
    <div class=\"stats-badges\">
        <div class=\"stat-badge\">
            <i class=\"fas fa-clock\"></i>
            Durée : ";
        // line 669
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 669, $this->source); })()), "duration", [], "any", false, false, false, 669), "html", null, true);
        yield " min
        </div>
        
        ";
        // line 672
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 672, $this->source); })()), "notes", [], "any", false, false, false, 672)) > 100)) {
            // line 673
            yield "        <div class=\"stat-badge\">
            <i class=\"fas fa-file-alt\"></i>
            Notes détaillées
        </div>
        ";
        }
        // line 678
        yield "        
        ";
        // line 679
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 679, $this->source); })()), "duration", [], "any", false, false, false, 679) > 60)) {
            // line 680
            yield "        <div class=\"stat-badge\">
            <i class=\"fas fa-bolt\"></i>
            Session intensive
        </div>
        ";
        }
        // line 685
        yield "        
        ";
        // line 686
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 686, $this->source); })()), "sessionDate", [], "any", false, false, false, 686)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 687
            yield "            ";
            if (((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 687, $this->source); })()) > 0)) {
                // line 688
                yield "            <div class=\"stat-badge\">
                <i class=\"fas fa-calendar-check\"></i>
                Programmé
            </div>
            ";
            } else {
                // line 693
                yield "            <div class=\"stat-badge\">
                <i class=\"fas fa-check-circle\"></i>
                Terminé
            </div>
            ";
            }
            // line 698
            yield "        ";
        }
        // line 699
        yield "    </div>

    <div class=\"action-buttons\">
        <a href=\"";
        // line 702
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_index");
        yield "\" class=\"btn-back\">
            Retour à la liste
        </a>
        
        <a href=\"";
        // line 706
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 706, $this->source); })()), "id", [], "any", false, false, false, 706)]), "html", null, true);
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
        // line 722
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 722, $this->source); })()), "id", [], "any", false, false, false, 722), "html", null, true);
        yield " ?<br>
            <strong>Cette action est irréversible !</strong>
        </p>
        <div class=\"modal-actions\">
            <button type=\"button\" class=\"modal-btn modal-btn-cancel\" onclick=\"hideDeleteModal()\">
                Annuler
            </button>
            <form method=\"post\" action=\"";
        // line 729
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 729, $this->source); })()), "id", [], "any", false, false, false, 729)]), "html", null, true);
        yield "\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 730
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 730, $this->source); })()), "id", [], "any", false, false, false, 730))), "html", null, true);
        yield "\">
                <button type=\"submit\" class=\"modal-btn modal-btn-confirm\">
                    Confirmer
                </button>
            </form>
        </div>
    </div>
</div>

";
        // line 739
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

        // line 740
        yield "<script>
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
const sessionIdElement = document.querySelector('.detail-item:nth-child(5) .detail-value');
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
        return array (  989 => 740,  966 => 739,  954 => 730,  950 => 729,  940 => 722,  921 => 706,  914 => 702,  909 => 699,  906 => 698,  899 => 693,  892 => 688,  889 => 687,  887 => 686,  884 => 685,  877 => 680,  875 => 679,  872 => 678,  865 => 673,  863 => 672,  857 => 669,  851 => 665,  844 => 661,  836 => 655,  834 => 654,  827 => 650,  818 => 644,  809 => 638,  801 => 632,  797 => 630,  793 => 628,  789 => 626,  787 => 625,  784 => 624,  782 => 623,  778 => 622,  768 => 615,  759 => 609,  751 => 603,  748 => 602,  744 => 600,  741 => 599,  735 => 597,  729 => 595,  726 => 594,  724 => 593,  721 => 592,  718 => 591,  715 => 590,  712 => 589,  710 => 588,  702 => 583,  697 => 580,  684 => 579,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
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
        max-width: 900px;
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
            <div class=\"detail-value\">Coach #{{ coaching_session.coachId }}</div>
        </div>

        <div class=\"detail-item\">
            <div class=\"detail-icon\">👥</div>
            <div class=\"detail-label\">Équipe</div>
            <div class=\"detail-value\">Équipe #{{ coaching_session.teamId }}</div>
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
        </div>

        <div class=\"detail-item\">
            <div class=\"detail-icon\">📊</div>
            <div class=\"detail-label\">ID Session</div>
            <div class=\"detail-value\">#{{ coaching_session.id }}</div>
        </div>

        <div class=\"detail-item\">
            <div class=\"detail-icon\">📝</div>
            <div class=\"detail-label\">Caractères Notes</div>
            <div class=\"detail-value\">{{ coaching_session.notes|length }} caractères</div>
        </div>
    </div>

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

{% block javascripts %}
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
const sessionIdElement = document.querySelector('.detail-item:nth-child(5) .detail-value');
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
</script>
{% endblock %}
{% endblock %}", "coaching_session/show.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\coaching_session\\show.html.twig");
    }
}
