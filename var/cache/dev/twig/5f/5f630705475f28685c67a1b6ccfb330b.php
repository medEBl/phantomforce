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

/* training_plan/edit.html.twig */
class __TwigTemplate_bb3957fd295d913187b8913b22f696af extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "training_plan/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "training_plan/edit.html.twig"));

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

        yield "Phantom Force - Modifier Plan d'Entraînement";
        
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
    padding: 60px 20px 30px;
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
    width: 100px;
    height: 4px;
    background: linear-gradient(90deg, #ff0000, #ff2d2d, #ff5e5e);
    border-radius: 2px;
    animation: widthGrow 1.2s ease-out;
}

.edit-hero h1 {
    font-size: 42px;
    font-weight: 800;
    background: linear-gradient(90deg, #ff0000, #ff2d2d, #ff5e5e, #ff8a8a);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    margin-bottom: 15px;
    line-height: 1.1;
    text-shadow: 0 5px 15px rgba(255, 0, 0, 0.3);
    animation: textGlow 3s infinite alternate;
}

.edit-hero p {
    color: var(--text-muted);
    font-size: 18px;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

/* ================= FORM CONTAINER ================= */
.form-container {
    max-width: 800px;
    margin: 0 auto 40px;
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    padding: 40px;
    box-shadow: var(--shadow-lg);
    animation: fadeIn 0.6s ease-out;
}

.form-header {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 2px solid rgba(255, 45, 45, 0.2);
}

.form-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #ff0000, #ff2d2d);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    color: white;
    box-shadow: 0 5px 15px rgba(255, 0, 0, 0.3);
}

.form-title h2 {
    font-size: 28px;
    font-weight: 700;
    color: var(--text-light);
    margin-bottom: 5px;
}

.form-title p {
    color: var(--text-muted);
    font-size: 14px;
    margin: 0;
}

/* ================= FORM GROUPS ================= */
.form-group {
    margin-bottom: 25px;
    position: relative;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: var(--text-light);
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.form-group label::after {
    content: '';
    display: inline-block;
    width: 4px;
    height: 4px;
    background: var(--red);
    border-radius: 50%;
    margin-left: 5px;
    vertical-align: middle;
}

.form-group.optional label::after {
    content: '(optionnel)';
    color: var(--text-muted);
    font-size: 11px;
    text-transform: none;
    margin-left: 8px;
    background: none;
}

.form-group input,
.form-group textarea,
.form-group select {
    width: 100%;
    padding: 14px 16px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: var(--radius);
    color: var(--text-light);
    font-size: 15px;
    transition: var(--transition);
    font-family: inherit;
}

.form-group input:focus,
.form-group textarea:focus,
.form-group select:focus {
    outline: none;
    border-color: var(--red);
    background: rgba(255, 45, 45, 0.05);
    box-shadow: 0 0 0 3px rgba(255, 45, 45, 0.1);
}

.form-group input::placeholder,
.form-group textarea::placeholder {
    color: rgba(255, 255, 255, 0.3);
}

.form-group input[type=\"date\"] {
    color-scheme: dark;
}

.form-group input[type=\"date\"]::-webkit-calendar-picker-indicator {
    filter: invert(1);
    opacity: 0.6;
    cursor: pointer;
}

.form-group input[type=\"date\"]::-webkit-calendar-picker-indicator:hover {
    opacity: 1;
}

.form-group textarea {
    min-height: 120px;
    resize: vertical;
}

/* ================= FORM ROW ================= */
.form-row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-bottom: 25px;
}

/* ================= SELECT WITH ICON ================= */
.select-with-info {
    position: relative;
}

.select-with-info select {
    padding-left: 45px;
}

.select-icon {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 18px;
    color: var(--red);
    z-index: 2;
    pointer-events: none;
}

.info-preview {
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
    animation: fadeIn 0.3s ease-out;
}

.info-preview i {
    color: var(--red);
    font-size: 14px;
}

.preview-highlight {
    color: var(--red);
    font-weight: 600;
    margin-left: 5px;
}

/* ================= FORM ACTIONS ================= */
.form-actions {
    display: flex;
    gap: 15px;
    margin-top: 40px;
    padding-top: 30px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.btn-save, .btn-cancel, .btn-delete {
    padding: 14px 28px;
    border-radius: 8px;
    font-weight: 600;
    font-size: 15px;
    text-decoration: none;
    transition: var(--transition);
    display: inline-flex;
    align-items: center;
    gap: 10px;
    border: none;
    cursor: pointer;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-family: inherit;
}

.btn-save {
    background: linear-gradient(135deg, #ff0000, #ff2d2d);
    color: white;
    flex: 1;
    justify-content: center;
}

.btn-save:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(255, 0, 0, 0.3);
    background: linear-gradient(135deg, #ff2d2d, #ff5e5e);
}

.btn-cancel {
    background: rgba(255, 255, 255, 0.05);
    color: var(--text-muted);
    border: 1px solid rgba(255, 255, 255, 0.1);
    padding: 14px 24px;
}

.btn-cancel:hover {
    background: rgba(255, 255, 255, 0.1);
    color: var(--text-light);
    transform: translateY(-2px);
    border-color: rgba(255, 45, 45, 0.3);
}

.btn-delete {
    background: rgba(231, 76, 60, 0.1);
    color: #e74c3c;
    border: 1px solid rgba(231, 76, 60, 0.3);
    padding: 14px 24px;
}

.btn-delete:hover {
    background: rgba(231, 76, 60, 0.2);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(231, 76, 60, 0.2);
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

/* ================= DATE PICKER CUSTOM ================= */
.date-picker-container {
    position: relative;
}

.date-picker-container .form-help {
    margin-top: 12px;
}

.date-icon {
    position: absolute;
    right: 16px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--red);
    pointer-events: none;
}

/* ================= CURRENT INFO SECTION ================= */
.current-info {
    background: rgba(255, 45, 45, 0.05);
    border: 1px solid rgba(255, 45, 45, 0.1);
    border-radius: var(--radius);
    padding: 15px;
    margin: 15px 0;
    display: flex;
    align-items: center;
    gap: 15px;
    flex-wrap: wrap;
}

.current-info-item {
    display: flex;
    align-items: center;
    gap: 8px;
    color: var(--text-muted);
    font-size: 13px;
}

.current-info-item i {
    color: var(--red);
    font-size: 14px;
}

.current-info-item strong {
    color: var(--text-light);
    margin-left: 5px;
}

/* ================= FORM FOOTER ================= */
.form-footer {
    margin-top: 30px;
    padding-top: 20px;
    border-top: 1px solid rgba(255, 255, 255, 0.05);
    text-align: center;
}

.back-link {
    color: var(--text-muted);
    text-decoration: none;
    font-size: 14px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: var(--transition);
}

.back-link:hover {
    color: var(--red);
}

/* ================= FORM VALIDATION ================= */
.form-error {
    color: #e74c3c;
    font-size: 13px;
    margin-top: 5px;
    display: flex;
    align-items: center;
    gap: 5px;
}

.form-group.error input,
.form-group.error textarea,
.form-group.error select {
    border-color: #e74c3c;
    background: rgba(231, 76, 60, 0.05);
}

/* ================= RESPONSIVE ================= */
@media (max-width: 768px) {
    .edit-hero {
        padding: 40px 20px 20px;
    }
    
    .edit-hero h1 {
        font-size: 32px;
    }
    
    .form-container {
        padding: 25px;
        margin: 0 15px 30px;
    }
    
    .form-header {
        flex-direction: column;
        text-align: center;
        gap: 10px;
    }
    
    .form-actions {
        flex-direction: column;
    }
    
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .btn-save, .btn-cancel, .btn-delete {
        width: 100%;
        justify-content: center;
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
    to { width: 100px; }
}

@keyframes textGlow {
    0% { text-shadow: 0 5px 15px rgba(255, 0, 0, 0.3); }
    100% { text-shadow: 0 5px 25px rgba(255, 0, 0, 0.6); }
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 460
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

        // line 461
        yield "<div class=\"edit-hero\">
    <h1>📝 MODIFIER PLAN D'ENTRAÎNEMENT</h1>
    <p>Mettez à jour les détails de votre plan d'entraînement pour optimiser les performances de votre équipe.</p>
</div>

<div class=\"form-container\">
    <div class=\"form-header\">
        <div class=\"form-icon\">
            <i class=\"fas fa-dumbbell\"></i>
        </div>
        <div class=\"form-title\">
            <h2>Édition du plan #";
        // line 472
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 472, $this->source); })()), "id", [], "any", false, false, false, 472), "html", null, true);
        yield "</h2>
            <p>Modifiez les champs ci-dessous pour mettre à jour votre plan d'entraînement</p>
        </div>
    </div>

    ";
        // line 477
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 477, $this->source); })()), 'form_start', ["attr" => ["class" => "training-form", "novalidate" => "novalidate"]]);
        yield "
    
    <div class=\"form-row\">
        <div class=\"form-group\">
            ";
        // line 481
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 481, $this->source); })()), "title", [], "any", false, false, false, 481), 'label', ["label" => "Titre du plan"]);
        yield "
            ";
        // line 482
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 482, $this->source); })()), "title", [], "any", false, false, false, 482), 'widget', ["attr" => ["placeholder" => "Ex: Stratégie défensive avancée", "class" => "form-input"]]);
        // line 485
        yield "
            <div class=\"form-help\">
                <i class=\"fas fa-info-circle\"></i>
                <span>Un titre clair et descriptif pour votre plan</span>
            </div>
            ";
        // line 490
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 490, $this->source); })()), "title", [], "any", false, false, false, 490), 'errors');
        yield "
        </div>
        
        <div class=\"form-group\">
            ";
        // line 494
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 494, $this->source); })()), "focus_area", [], "any", false, false, false, 494), 'label', ["label" => "Zone de focus"]);
        yield "
            ";
        // line 495
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 495, $this->source); })()), "focus_area", [], "any", false, false, false, 495), 'widget', ["attr" => ["class" => "form-input"]]);
        // line 497
        yield "
            <div class=\"form-help\">
                <i class=\"fas fa-bullseye\"></i>
                <span>La principale compétence visée par ce plan</span>
            </div>
            ";
        // line 502
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 502, $this->source); })()), "focus_area", [], "any", false, false, false, 502), 'errors');
        yield "
        </div>
    </div>
    
    <div class=\"form-row\">
        <div class=\"form-group\">
            ";
        // line 508
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 508, $this->source); })()), "difficulty_level", [], "any", false, false, false, 508), 'label', ["label" => "Niveau de difficulté"]);
        yield "
            ";
        // line 509
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 509, $this->source); })()), "difficulty_level", [], "any", false, false, false, 509), 'widget', ["attr" => ["class" => "form-input"]]);
        // line 511
        yield "
            <div class=\"form-help\">
                <i class=\"fas fa-chart-line\"></i>
                <span>Adaptez la difficulté au niveau de votre équipe</span>
            </div>
            ";
        // line 516
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 516, $this->source); })()), "difficulty_level", [], "any", false, false, false, 516), 'errors');
        yield "
        </div>
        
        <div class=\"form-group\">
            ";
        // line 520
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 520, $this->source); })()), "coach", [], "any", false, false, false, 520), 'label', ["label" => "Coach responsable"]);
        yield "
            <div class=\"select-with-info\">
                <span class=\"select-icon\">👨‍🏫</span>
                ";
        // line 523
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 523, $this->source); })()), "coach", [], "any", false, false, false, 523), 'widget', ["attr" => ["class" => "form-input", "id" => "coach_select"]]);
        // line 526
        yield "
            </div>
            ";
        // line 528
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 528, $this->source); })()), "coach", [], "any", false, false, false, 528)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 529
            yield "                <div class=\"info-preview\" id=\"coachPreview\">
                    <i class=\"fas fa-user-tie\"></i>
                    <span><strong>Coach actuel :</strong> ";
            // line 531
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 531, $this->source); })()), "coach", [], "any", false, false, false, 531), "fullName", [], "any", false, false, false, 531), "html", null, true);
            yield " (@";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 531, $this->source); })()), "coach", [], "any", false, false, false, 531), "username", [], "any", false, false, false, 531), "html", null, true);
            yield ")</span>
                </div>
            ";
        }
        // line 534
        yield "            <div class=\"form-help\">
                <i class=\"fas fa-user-tie\"></i>
                <span>Sélectionnez le coach responsable</span>
            </div>
            ";
        // line 538
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 538, $this->source); })()), "coach", [], "any", false, false, false, 538), 'errors');
        yield "
        </div>
    </div>
    
    <div class=\"form-row\">
        <div class=\"form-group\">
            ";
        // line 544
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 544, $this->source); })()), "team", [], "any", false, false, false, 544), 'label', ["label" => "Équipe cible"]);
        yield "
            <div class=\"select-with-info\">
                <span class=\"select-icon\">👥</span>
                ";
        // line 547
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 547, $this->source); })()), "team", [], "any", false, false, false, 547), 'widget', ["attr" => ["class" => "form-input", "id" => "team_select"]]);
        // line 550
        yield "
            </div>
            ";
        // line 552
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 552, $this->source); })()), "team", [], "any", false, false, false, 552)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 553
            yield "                <div class=\"info-preview\" id=\"teamPreview\">
                    <i class=\"fas fa-users\"></i>
                    <span><strong>Équipe actuelle :</strong> ";
            // line 555
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 555, $this->source); })()), "team", [], "any", false, false, false, 555), "name", [], "any", false, false, false, 555), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 555, $this->source); })()), "team", [], "any", false, false, false, 555), "game", [], "any", false, false, false, 555), "html", null, true);
            yield ")</span>
                </div>
            ";
        }
        // line 558
        yield "            <div class=\"form-help\">
                <i class=\"fas fa-users\"></i>
                <span>Sélectionnez l'équipe concernée par ce plan</span>
            </div>
            ";
        // line 562
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 562, $this->source); })()), "team", [], "any", false, false, false, 562), 'errors');
        yield "
        </div>
        
        <div class=\"form-group\">
            ";
        // line 566
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 566, $this->source); })()), "created_at", [], "any", false, false, false, 566), 'label', ["label" => "Date de création"]);
        yield "
            <div class=\"date-picker-container\">
                ";
        // line 568
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 568, $this->source); })()), "created_at", [], "any", false, false, false, 568), 'widget', ["attr" => ["class" => "form-input"]]);
        // line 570
        yield "
                <i class=\"fas fa-calendar-alt date-icon\"></i>
            </div>
            <div class=\"form-help\">
                <i class=\"fas fa-calendar\"></i>
                <span>Date de création du plan (format : AAAA-MM-JJ)</span>
            </div>
            ";
        // line 577
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 577, $this->source); })()), "created_at", [], "any", false, false, false, 577), 'errors');
        yield "
        </div>
    </div>
    
    <div class=\"form-group\">
        ";
        // line 582
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 582, $this->source); })()), "description", [], "any", false, false, false, 582), 'label', ["label" => "Description détaillée"]);
        yield "
        ";
        // line 583
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 583, $this->source); })()), "description", [], "any", false, false, false, 583), 'widget', ["attr" => ["placeholder" => "Décrivez en détail les objectifs, exercices et stratégies de ce plan d'entraînement...", "class" => "form-textarea", "rows" => "6", "id" => "plan_description"]]);
        // line 588
        yield "
        <div class=\"form-help\">
            <i class=\"fas fa-align-left\"></i>
            <span>Incluez tous les détails importants pour la mise en œuvre du plan</span>
        </div>
        ";
        // line 593
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 593, $this->source); })()), "description", [], "any", false, false, false, 593), 'errors');
        yield "
    </div>
    
    ";
        // line 596
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 596, $this->source); })()), "createdAt", [], "any", false, false, false, 596)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 597
            yield "        <div class=\"current-info\">
            <div class=\"current-info-item\">
                <i class=\"fas fa-calendar-check\"></i>
                <span>Date actuelle: <strong>";
            // line 600
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 600, $this->source); })()), "createdAt", [], "any", false, false, false, 600), "d/m/Y"), "html", null, true);
            yield "</strong></span>
            </div>
            ";
            // line 602
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 602, $this->source); })()), "coach", [], "any", false, false, false, 602)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 603
                yield "                <div class=\"current-info-item\">
                    <i class=\"fas fa-user-tie\"></i>
                    <span>Coach: <strong>";
                // line 605
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 605, $this->source); })()), "coach", [], "any", false, false, false, 605), "fullName", [], "any", false, false, false, 605), "html", null, true);
                yield "</strong></span>
                </div>
            ";
            }
            // line 608
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 608, $this->source); })()), "team", [], "any", false, false, false, 608)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 609
                yield "                <div class=\"current-info-item\">
                    <i class=\"fas fa-users\"></i>
                    <span>Équipe: <strong>";
                // line 611
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 611, $this->source); })()), "team", [], "any", false, false, false, 611), "name", [], "any", false, false, false, 611), "html", null, true);
                yield "</strong></span>
                </div>
            ";
            }
            // line 614
            yield "        </div>
    ";
        }
        // line 616
        yield "    
    <div class=\"form-actions\">
        <button type=\"submit\" class=\"btn-save\">
            <i class=\"fas fa-save\"></i>
            Mettre à jour
        </button>
        
        <a href=\"";
        // line 623
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_index");
        yield "#training-plans\" class=\"btn-cancel\">
            <i class=\"fas fa-arrow-left\"></i>
            Annuler
        </a>
        
        <button type=\"button\" class=\"btn-delete\" onclick=\"confirmDelete()\">
            <i class=\"fas fa-trash\"></i>
            Supprimer
        </button>
    </div>
    
    ";
        // line 634
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 634, $this->source); })()), 'form_end');
        yield "
    
    <div id=\"delete-form\" style=\"display: none;\">
        ";
        // line 637
        yield Twig\Extension\CoreExtension::include($this->env, $context, "training_plan/_delete_form.html.twig");
        yield "
    </div>
</div>

<div class=\"form-footer\">
    <a href=\"";
        // line 642
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_index");
        yield "#training-plans\" class=\"back-link\">
        <i class=\"fas fa-list\"></i>
        Retour à la liste des plans d'entraînement
    </a>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 649
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

        // line 650
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
// Données pour les aperçus
const coaches = {
    ";
        // line 654
        if (array_key_exists("coaches", $context)) {
            // line 655
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 655, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
                // line 656
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 656), "html", null, true);
                yield ": {
                name: \"";
                // line 657
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "fullName", [], "any", false, false, false, 657), "js"), "html", null, true);
                yield "\",
                username: \"";
                // line 658
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "username", [], "any", false, false, false, 658), "js"), "html", null, true);
                yield "\"
            },
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['coach'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 661
            yield "    ";
        }
        // line 662
        yield "};

const teams = {
    ";
        // line 665
        if (array_key_exists("teams", $context)) {
            // line 666
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 666, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 667
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 667), "html", null, true);
                yield ": {
                name: \"";
                // line 668
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 668), "js"), "html", null, true);
                yield "\",
                game: \"";
                // line 669
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 669), "js"), "html", null, true);
                yield "\"
            },
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 672
            yield "    ";
        }
        // line 673
        yield "};

document.addEventListener('DOMContentLoaded', function() {
    const coachSelect = document.getElementById('coach_select');
    const teamSelect = document.getElementById('team_select');
    const coachPreview = document.getElementById('coachPreview');
    const teamPreview = document.getElementById('teamPreview');
    const descriptionTextarea = document.getElementById('plan_description');
    
    // Gestion de l'aperçu du coach
    if (coachSelect) {
        coachSelect.addEventListener('change', function() {
            const coachId = this.value;
            
            if (coachId && coaches[coachId]) {
                const coach = coaches[coachId];
                
                let preview = document.getElementById('coachPreview');
                if (!preview) {
                    preview = document.createElement('div');
                    preview.id = 'coachPreview';
                    preview.className = 'info-preview';
                    this.closest('.form-group').appendChild(preview);
                }
                
                preview.innerHTML = `<i class=\"fas fa-user-tie\"></i>
                    <span><strong>Nouveau coach :</strong> \${coach.name} (@\${coach.username})</span>`;
                preview.style.display = 'flex';
            } else if (coachPreview) {
                coachPreview.style.display = coachSelect.value ? 'flex' : 'none';
            }
        });
    }
    
    // Gestion de l'aperçu de l'équipe
    if (teamSelect) {
        teamSelect.addEventListener('change', function() {
            const teamId = this.value;
            
            if (teamId && teams[teamId]) {
                const team = teams[teamId];
                
                let preview = document.getElementById('teamPreview');
                if (!preview) {
                    preview = document.createElement('div');
                    preview.id = 'teamPreview';
                    preview.className = 'info-preview';
                    this.closest('.form-group').appendChild(preview);
                }
                
                preview.innerHTML = `<i class=\"fas fa-users\"></i>
                    <span><strong>Nouvelle équipe :</strong> \${team.name} (\${team.game})</span>`;
                preview.style.display = 'flex';
            } else if (teamPreview) {
                teamPreview.style.display = teamSelect.value ? 'flex' : 'none';
            }
        });
    }
    
    // Validation des formulaires
    function validateForm() {
        let isValid = true;
        
        // Titre (5-255 caractères)
        const titleInput = document.querySelector('#training_plan_title');
        if (titleInput && titleInput.value.trim()) {
            const length = titleInput.value.trim().length;
            if (length < 5 || length > 255) {
                titleInput.classList.add('error');
                isValid = false;
            } else {
                titleInput.classList.remove('error');
            }
        }
        
        // Description (20-2000 caractères)
        if (descriptionTextarea && descriptionTextarea.value.trim()) {
            const length = descriptionTextarea.value.trim().length;
            if (length < 20 || length > 2000) {
                descriptionTextarea.classList.add('error');
                isValid = false;
            } else {
                descriptionTextarea.classList.remove('error');
            }
        }
        
        return isValid;
    }
    
    // Soumission du formulaire
    const form = document.querySelector('.training-form');
    if (form) {
        form.addEventListener('submit', function(e) {
            if (!validateForm()) {
                e.preventDefault();
                alert('Veuillez corriger les erreurs dans le formulaire avant de soumettre.');
            }
        });
    }
    
    // Animation d'entrée
    const formGroups = document.querySelectorAll('.form-group');
    formGroups.forEach((group, index) => {
        setTimeout(() => {
            group.style.animation = `fadeIn 0.5s ease-out forwards`;
            group.style.opacity = '0';
        }, index * 100);
    });
    
    // Confirmation avant de quitter si modifications
    let formModified = false;
    if (form) {
        form.addEventListener('input', () => {
            formModified = true;
        });
        
        window.addEventListener('beforeunload', (e) => {
            if (formModified) {
                e.preventDefault();
                e.returnValue = '';
            }
        });
        
        form.addEventListener('submit', () => {
            formModified = false;
        });
    }
});

function confirmDelete() {
    if (confirm('⚠️ ATTENTION : Êtes-vous sûr de vouloir supprimer définitivement ce plan d\\'entraînement ? Cette action est irréversible.')) {
        document.querySelector('#delete-form form').submit();
    }
}

// Formatage de la date pour l'input date
const createdAtInput = document.querySelector('#training_plan_created_at');
if (createdAtInput && createdAtInput.value) {
    // Si la valeur est déjà au bon format, on la garde
    if (!createdAtInput.value.match(/^\\d{4}-\\d{2}-\\d{2}\$/)) {
        const date = new Date(createdAtInput.value);
        if (!isNaN(date.getTime())) {
            const formattedDate = date.toISOString().split('T')[0];
            createdAtInput.value = formattedDate;
        }
    }
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
        return "training_plan/edit.html.twig";
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
        return array (  967 => 673,  964 => 672,  955 => 669,  951 => 668,  946 => 667,  941 => 666,  939 => 665,  934 => 662,  931 => 661,  922 => 658,  918 => 657,  913 => 656,  908 => 655,  906 => 654,  899 => 650,  886 => 649,  869 => 642,  861 => 637,  855 => 634,  841 => 623,  832 => 616,  828 => 614,  822 => 611,  818 => 609,  815 => 608,  809 => 605,  805 => 603,  803 => 602,  798 => 600,  793 => 597,  791 => 596,  785 => 593,  778 => 588,  776 => 583,  772 => 582,  764 => 577,  755 => 570,  753 => 568,  748 => 566,  741 => 562,  735 => 558,  727 => 555,  723 => 553,  721 => 552,  717 => 550,  715 => 547,  709 => 544,  700 => 538,  694 => 534,  686 => 531,  682 => 529,  680 => 528,  676 => 526,  674 => 523,  668 => 520,  661 => 516,  654 => 511,  652 => 509,  648 => 508,  639 => 502,  632 => 497,  630 => 495,  626 => 494,  619 => 490,  612 => 485,  610 => 482,  606 => 481,  599 => 477,  591 => 472,  578 => 461,  565 => 460,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Phantom Force - Modifier Plan d'Entraînement{% endblock %}

{% block inline_styles %}
<style>
/* ================= EDIT PAGE STYLES ================= */
.edit-hero {
    text-align: center;
    padding: 60px 20px 30px;
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
    width: 100px;
    height: 4px;
    background: linear-gradient(90deg, #ff0000, #ff2d2d, #ff5e5e);
    border-radius: 2px;
    animation: widthGrow 1.2s ease-out;
}

.edit-hero h1 {
    font-size: 42px;
    font-weight: 800;
    background: linear-gradient(90deg, #ff0000, #ff2d2d, #ff5e5e, #ff8a8a);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    margin-bottom: 15px;
    line-height: 1.1;
    text-shadow: 0 5px 15px rgba(255, 0, 0, 0.3);
    animation: textGlow 3s infinite alternate;
}

.edit-hero p {
    color: var(--text-muted);
    font-size: 18px;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

/* ================= FORM CONTAINER ================= */
.form-container {
    max-width: 800px;
    margin: 0 auto 40px;
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    padding: 40px;
    box-shadow: var(--shadow-lg);
    animation: fadeIn 0.6s ease-out;
}

.form-header {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 2px solid rgba(255, 45, 45, 0.2);
}

.form-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #ff0000, #ff2d2d);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    color: white;
    box-shadow: 0 5px 15px rgba(255, 0, 0, 0.3);
}

.form-title h2 {
    font-size: 28px;
    font-weight: 700;
    color: var(--text-light);
    margin-bottom: 5px;
}

.form-title p {
    color: var(--text-muted);
    font-size: 14px;
    margin: 0;
}

/* ================= FORM GROUPS ================= */
.form-group {
    margin-bottom: 25px;
    position: relative;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: var(--text-light);
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.form-group label::after {
    content: '';
    display: inline-block;
    width: 4px;
    height: 4px;
    background: var(--red);
    border-radius: 50%;
    margin-left: 5px;
    vertical-align: middle;
}

.form-group.optional label::after {
    content: '(optionnel)';
    color: var(--text-muted);
    font-size: 11px;
    text-transform: none;
    margin-left: 8px;
    background: none;
}

.form-group input,
.form-group textarea,
.form-group select {
    width: 100%;
    padding: 14px 16px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: var(--radius);
    color: var(--text-light);
    font-size: 15px;
    transition: var(--transition);
    font-family: inherit;
}

.form-group input:focus,
.form-group textarea:focus,
.form-group select:focus {
    outline: none;
    border-color: var(--red);
    background: rgba(255, 45, 45, 0.05);
    box-shadow: 0 0 0 3px rgba(255, 45, 45, 0.1);
}

.form-group input::placeholder,
.form-group textarea::placeholder {
    color: rgba(255, 255, 255, 0.3);
}

.form-group input[type=\"date\"] {
    color-scheme: dark;
}

.form-group input[type=\"date\"]::-webkit-calendar-picker-indicator {
    filter: invert(1);
    opacity: 0.6;
    cursor: pointer;
}

.form-group input[type=\"date\"]::-webkit-calendar-picker-indicator:hover {
    opacity: 1;
}

.form-group textarea {
    min-height: 120px;
    resize: vertical;
}

/* ================= FORM ROW ================= */
.form-row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-bottom: 25px;
}

/* ================= SELECT WITH ICON ================= */
.select-with-info {
    position: relative;
}

.select-with-info select {
    padding-left: 45px;
}

.select-icon {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 18px;
    color: var(--red);
    z-index: 2;
    pointer-events: none;
}

.info-preview {
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
    animation: fadeIn 0.3s ease-out;
}

.info-preview i {
    color: var(--red);
    font-size: 14px;
}

.preview-highlight {
    color: var(--red);
    font-weight: 600;
    margin-left: 5px;
}

/* ================= FORM ACTIONS ================= */
.form-actions {
    display: flex;
    gap: 15px;
    margin-top: 40px;
    padding-top: 30px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.btn-save, .btn-cancel, .btn-delete {
    padding: 14px 28px;
    border-radius: 8px;
    font-weight: 600;
    font-size: 15px;
    text-decoration: none;
    transition: var(--transition);
    display: inline-flex;
    align-items: center;
    gap: 10px;
    border: none;
    cursor: pointer;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-family: inherit;
}

.btn-save {
    background: linear-gradient(135deg, #ff0000, #ff2d2d);
    color: white;
    flex: 1;
    justify-content: center;
}

.btn-save:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(255, 0, 0, 0.3);
    background: linear-gradient(135deg, #ff2d2d, #ff5e5e);
}

.btn-cancel {
    background: rgba(255, 255, 255, 0.05);
    color: var(--text-muted);
    border: 1px solid rgba(255, 255, 255, 0.1);
    padding: 14px 24px;
}

.btn-cancel:hover {
    background: rgba(255, 255, 255, 0.1);
    color: var(--text-light);
    transform: translateY(-2px);
    border-color: rgba(255, 45, 45, 0.3);
}

.btn-delete {
    background: rgba(231, 76, 60, 0.1);
    color: #e74c3c;
    border: 1px solid rgba(231, 76, 60, 0.3);
    padding: 14px 24px;
}

.btn-delete:hover {
    background: rgba(231, 76, 60, 0.2);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(231, 76, 60, 0.2);
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

/* ================= DATE PICKER CUSTOM ================= */
.date-picker-container {
    position: relative;
}

.date-picker-container .form-help {
    margin-top: 12px;
}

.date-icon {
    position: absolute;
    right: 16px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--red);
    pointer-events: none;
}

/* ================= CURRENT INFO SECTION ================= */
.current-info {
    background: rgba(255, 45, 45, 0.05);
    border: 1px solid rgba(255, 45, 45, 0.1);
    border-radius: var(--radius);
    padding: 15px;
    margin: 15px 0;
    display: flex;
    align-items: center;
    gap: 15px;
    flex-wrap: wrap;
}

.current-info-item {
    display: flex;
    align-items: center;
    gap: 8px;
    color: var(--text-muted);
    font-size: 13px;
}

.current-info-item i {
    color: var(--red);
    font-size: 14px;
}

.current-info-item strong {
    color: var(--text-light);
    margin-left: 5px;
}

/* ================= FORM FOOTER ================= */
.form-footer {
    margin-top: 30px;
    padding-top: 20px;
    border-top: 1px solid rgba(255, 255, 255, 0.05);
    text-align: center;
}

.back-link {
    color: var(--text-muted);
    text-decoration: none;
    font-size: 14px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: var(--transition);
}

.back-link:hover {
    color: var(--red);
}

/* ================= FORM VALIDATION ================= */
.form-error {
    color: #e74c3c;
    font-size: 13px;
    margin-top: 5px;
    display: flex;
    align-items: center;
    gap: 5px;
}

.form-group.error input,
.form-group.error textarea,
.form-group.error select {
    border-color: #e74c3c;
    background: rgba(231, 76, 60, 0.05);
}

/* ================= RESPONSIVE ================= */
@media (max-width: 768px) {
    .edit-hero {
        padding: 40px 20px 20px;
    }
    
    .edit-hero h1 {
        font-size: 32px;
    }
    
    .form-container {
        padding: 25px;
        margin: 0 15px 30px;
    }
    
    .form-header {
        flex-direction: column;
        text-align: center;
        gap: 10px;
    }
    
    .form-actions {
        flex-direction: column;
    }
    
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .btn-save, .btn-cancel, .btn-delete {
        width: 100%;
        justify-content: center;
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
    to { width: 100px; }
}

@keyframes textGlow {
    0% { text-shadow: 0 5px 15px rgba(255, 0, 0, 0.3); }
    100% { text-shadow: 0 5px 25px rgba(255, 0, 0, 0.6); }
}
</style>
{% endblock %}

{% block body %}
<div class=\"edit-hero\">
    <h1>📝 MODIFIER PLAN D'ENTRAÎNEMENT</h1>
    <p>Mettez à jour les détails de votre plan d'entraînement pour optimiser les performances de votre équipe.</p>
</div>

<div class=\"form-container\">
    <div class=\"form-header\">
        <div class=\"form-icon\">
            <i class=\"fas fa-dumbbell\"></i>
        </div>
        <div class=\"form-title\">
            <h2>Édition du plan #{{ training_plan.id }}</h2>
            <p>Modifiez les champs ci-dessous pour mettre à jour votre plan d'entraînement</p>
        </div>
    </div>

    {{ form_start(form, {'attr': {'class': 'training-form', 'novalidate': 'novalidate'}}) }}
    
    <div class=\"form-row\">
        <div class=\"form-group\">
            {{ form_label(form.title, 'Titre du plan') }}
            {{ form_widget(form.title, {'attr': {
                'placeholder': 'Ex: Stratégie défensive avancée',
                'class': 'form-input'
            }}) }}
            <div class=\"form-help\">
                <i class=\"fas fa-info-circle\"></i>
                <span>Un titre clair et descriptif pour votre plan</span>
            </div>
            {{ form_errors(form.title) }}
        </div>
        
        <div class=\"form-group\">
            {{ form_label(form.focus_area, 'Zone de focus') }}
            {{ form_widget(form.focus_area, {'attr': {
                'class': 'form-input'
            }}) }}
            <div class=\"form-help\">
                <i class=\"fas fa-bullseye\"></i>
                <span>La principale compétence visée par ce plan</span>
            </div>
            {{ form_errors(form.focus_area) }}
        </div>
    </div>
    
    <div class=\"form-row\">
        <div class=\"form-group\">
            {{ form_label(form.difficulty_level, 'Niveau de difficulté') }}
            {{ form_widget(form.difficulty_level, {'attr': {
                'class': 'form-input'
            }}) }}
            <div class=\"form-help\">
                <i class=\"fas fa-chart-line\"></i>
                <span>Adaptez la difficulté au niveau de votre équipe</span>
            </div>
            {{ form_errors(form.difficulty_level) }}
        </div>
        
        <div class=\"form-group\">
            {{ form_label(form.coach, 'Coach responsable') }}
            <div class=\"select-with-info\">
                <span class=\"select-icon\">👨‍🏫</span>
                {{ form_widget(form.coach, {'attr': {
                    'class': 'form-input',
                    'id': 'coach_select'
                }}) }}
            </div>
            {% if training_plan.coach %}
                <div class=\"info-preview\" id=\"coachPreview\">
                    <i class=\"fas fa-user-tie\"></i>
                    <span><strong>Coach actuel :</strong> {{ training_plan.coach.fullName }} (@{{ training_plan.coach.username }})</span>
                </div>
            {% endif %}
            <div class=\"form-help\">
                <i class=\"fas fa-user-tie\"></i>
                <span>Sélectionnez le coach responsable</span>
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
                    'class': 'form-input',
                    'id': 'team_select'
                }}) }}
            </div>
            {% if training_plan.team %}
                <div class=\"info-preview\" id=\"teamPreview\">
                    <i class=\"fas fa-users\"></i>
                    <span><strong>Équipe actuelle :</strong> {{ training_plan.team.name }} ({{ training_plan.team.game }})</span>
                </div>
            {% endif %}
            <div class=\"form-help\">
                <i class=\"fas fa-users\"></i>
                <span>Sélectionnez l'équipe concernée par ce plan</span>
            </div>
            {{ form_errors(form.team) }}
        </div>
        
        <div class=\"form-group\">
            {{ form_label(form.created_at, 'Date de création') }}
            <div class=\"date-picker-container\">
                {{ form_widget(form.created_at, {'attr': {
                    'class': 'form-input'
                }}) }}
                <i class=\"fas fa-calendar-alt date-icon\"></i>
            </div>
            <div class=\"form-help\">
                <i class=\"fas fa-calendar\"></i>
                <span>Date de création du plan (format : AAAA-MM-JJ)</span>
            </div>
            {{ form_errors(form.created_at) }}
        </div>
    </div>
    
    <div class=\"form-group\">
        {{ form_label(form.description, 'Description détaillée') }}
        {{ form_widget(form.description, {'attr': {
            'placeholder': 'Décrivez en détail les objectifs, exercices et stratégies de ce plan d\\'entraînement...',
            'class': 'form-textarea',
            'rows': '6',
            'id': 'plan_description'
        }}) }}
        <div class=\"form-help\">
            <i class=\"fas fa-align-left\"></i>
            <span>Incluez tous les détails importants pour la mise en œuvre du plan</span>
        </div>
        {{ form_errors(form.description) }}
    </div>
    
    {% if training_plan.createdAt %}
        <div class=\"current-info\">
            <div class=\"current-info-item\">
                <i class=\"fas fa-calendar-check\"></i>
                <span>Date actuelle: <strong>{{ training_plan.createdAt|date('d/m/Y') }}</strong></span>
            </div>
            {% if training_plan.coach %}
                <div class=\"current-info-item\">
                    <i class=\"fas fa-user-tie\"></i>
                    <span>Coach: <strong>{{ training_plan.coach.fullName }}</strong></span>
                </div>
            {% endif %}
            {% if training_plan.team %}
                <div class=\"current-info-item\">
                    <i class=\"fas fa-users\"></i>
                    <span>Équipe: <strong>{{ training_plan.team.name }}</strong></span>
                </div>
            {% endif %}
        </div>
    {% endif %}
    
    <div class=\"form-actions\">
        <button type=\"submit\" class=\"btn-save\">
            <i class=\"fas fa-save\"></i>
            Mettre à jour
        </button>
        
        <a href=\"{{ path('app_coaching_session_index') }}#training-plans\" class=\"btn-cancel\">
            <i class=\"fas fa-arrow-left\"></i>
            Annuler
        </a>
        
        <button type=\"button\" class=\"btn-delete\" onclick=\"confirmDelete()\">
            <i class=\"fas fa-trash\"></i>
            Supprimer
        </button>
    </div>
    
    {{ form_end(form) }}
    
    <div id=\"delete-form\" style=\"display: none;\">
        {{ include('training_plan/_delete_form.html.twig') }}
    </div>
</div>

<div class=\"form-footer\">
    <a href=\"{{ path('app_coaching_session_index') }}#training-plans\" class=\"back-link\">
        <i class=\"fas fa-list\"></i>
        Retour à la liste des plans d'entraînement
    </a>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
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

document.addEventListener('DOMContentLoaded', function() {
    const coachSelect = document.getElementById('coach_select');
    const teamSelect = document.getElementById('team_select');
    const coachPreview = document.getElementById('coachPreview');
    const teamPreview = document.getElementById('teamPreview');
    const descriptionTextarea = document.getElementById('plan_description');
    
    // Gestion de l'aperçu du coach
    if (coachSelect) {
        coachSelect.addEventListener('change', function() {
            const coachId = this.value;
            
            if (coachId && coaches[coachId]) {
                const coach = coaches[coachId];
                
                let preview = document.getElementById('coachPreview');
                if (!preview) {
                    preview = document.createElement('div');
                    preview.id = 'coachPreview';
                    preview.className = 'info-preview';
                    this.closest('.form-group').appendChild(preview);
                }
                
                preview.innerHTML = `<i class=\"fas fa-user-tie\"></i>
                    <span><strong>Nouveau coach :</strong> \${coach.name} (@\${coach.username})</span>`;
                preview.style.display = 'flex';
            } else if (coachPreview) {
                coachPreview.style.display = coachSelect.value ? 'flex' : 'none';
            }
        });
    }
    
    // Gestion de l'aperçu de l'équipe
    if (teamSelect) {
        teamSelect.addEventListener('change', function() {
            const teamId = this.value;
            
            if (teamId && teams[teamId]) {
                const team = teams[teamId];
                
                let preview = document.getElementById('teamPreview');
                if (!preview) {
                    preview = document.createElement('div');
                    preview.id = 'teamPreview';
                    preview.className = 'info-preview';
                    this.closest('.form-group').appendChild(preview);
                }
                
                preview.innerHTML = `<i class=\"fas fa-users\"></i>
                    <span><strong>Nouvelle équipe :</strong> \${team.name} (\${team.game})</span>`;
                preview.style.display = 'flex';
            } else if (teamPreview) {
                teamPreview.style.display = teamSelect.value ? 'flex' : 'none';
            }
        });
    }
    
    // Validation des formulaires
    function validateForm() {
        let isValid = true;
        
        // Titre (5-255 caractères)
        const titleInput = document.querySelector('#training_plan_title');
        if (titleInput && titleInput.value.trim()) {
            const length = titleInput.value.trim().length;
            if (length < 5 || length > 255) {
                titleInput.classList.add('error');
                isValid = false;
            } else {
                titleInput.classList.remove('error');
            }
        }
        
        // Description (20-2000 caractères)
        if (descriptionTextarea && descriptionTextarea.value.trim()) {
            const length = descriptionTextarea.value.trim().length;
            if (length < 20 || length > 2000) {
                descriptionTextarea.classList.add('error');
                isValid = false;
            } else {
                descriptionTextarea.classList.remove('error');
            }
        }
        
        return isValid;
    }
    
    // Soumission du formulaire
    const form = document.querySelector('.training-form');
    if (form) {
        form.addEventListener('submit', function(e) {
            if (!validateForm()) {
                e.preventDefault();
                alert('Veuillez corriger les erreurs dans le formulaire avant de soumettre.');
            }
        });
    }
    
    // Animation d'entrée
    const formGroups = document.querySelectorAll('.form-group');
    formGroups.forEach((group, index) => {
        setTimeout(() => {
            group.style.animation = `fadeIn 0.5s ease-out forwards`;
            group.style.opacity = '0';
        }, index * 100);
    });
    
    // Confirmation avant de quitter si modifications
    let formModified = false;
    if (form) {
        form.addEventListener('input', () => {
            formModified = true;
        });
        
        window.addEventListener('beforeunload', (e) => {
            if (formModified) {
                e.preventDefault();
                e.returnValue = '';
            }
        });
        
        form.addEventListener('submit', () => {
            formModified = false;
        });
    }
});

function confirmDelete() {
    if (confirm('⚠️ ATTENTION : Êtes-vous sûr de vouloir supprimer définitivement ce plan d\\'entraînement ? Cette action est irréversible.')) {
        document.querySelector('#delete-form form').submit();
    }
}

// Formatage de la date pour l'input date
const createdAtInput = document.querySelector('#training_plan_created_at');
if (createdAtInput && createdAtInput.value) {
    // Si la valeur est déjà au bon format, on la garde
    if (!createdAtInput.value.match(/^\\d{4}-\\d{2}-\\d{2}\$/)) {
        const date = new Date(createdAtInput.value);
        if (!isNaN(date.getTime())) {
            const formattedDate = date.toISOString().split('T')[0];
            createdAtInput.value = formattedDate;
        }
    }
}
</script>
{% endblock %}", "training_plan/edit.html.twig", "C:\\xampp\\htdocs\\esport (3)\\esport\\templates\\training_plan\\edit.html.twig");
    }
}
