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

/* ================= CURRENT DATE INFO ================= */
.current-date-info {
    background: rgba(255, 45, 45, 0.1);
    border: 1px solid rgba(255, 45, 45, 0.2);
    border-radius: var(--radius);
    padding: 15px;
    margin-top: 15px;
    font-size: 13px;
    color: var(--text-muted);
    display: flex;
    align-items: center;
    gap: 10px;
}

.current-date-info i {
    color: var(--red);
    font-size: 14px;
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

    // line 403
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

        // line 404
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
        // line 415
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 415, $this->source); })()), "id", [], "any", false, false, false, 415), "html", null, true);
        yield "</h2>
            <p>Modifiez les champs ci-dessous pour mettre à jour votre plan d'entraînement</p>
        </div>
    </div>

    ";
        // line 420
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 420, $this->source); })()), 'form_start', ["attr" => ["class" => "training-form"]]);
        yield "
    
    <div class=\"form-row\">
        <div class=\"form-group\">
            ";
        // line 424
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 424, $this->source); })()), "title", [], "any", false, false, false, 424), 'label', ["label" => "Titre du plan"]);
        yield "
            ";
        // line 425
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 425, $this->source); })()), "title", [], "any", false, false, false, 425), 'widget', ["attr" => ["placeholder" => "Ex: Stratégie défensive avancée", "class" => "form-input"]]);
        // line 428
        yield "
            <div class=\"form-help\">
                <i class=\"fas fa-info-circle\"></i>
                <span>Un titre clair et descriptif pour votre plan</span>
            </div>
            ";
        // line 433
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 433, $this->source); })()), "title", [], "any", false, false, false, 433), 'errors');
        yield "
        </div>
        
        <div class=\"form-group\">
            ";
        // line 437
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 437, $this->source); })()), "focus_area", [], "any", false, false, false, 437), 'label', ["label" => "Zone de focus"]);
        yield "
            ";
        // line 438
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 438, $this->source); })()), "focus_area", [], "any", false, false, false, 438), 'widget', ["attr" => ["placeholder" => "Ex: Défense, Attaque, Stratégie", "class" => "form-input"]]);
        // line 441
        yield "
            <div class=\"form-help\">
                <i class=\"fas fa-bullseye\"></i>
                <span>La principale compétence visée par ce plan</span>
            </div>
            ";
        // line 446
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 446, $this->source); })()), "focus_area", [], "any", false, false, false, 446), 'errors');
        yield "
        </div>
    </div>
    
    <div class=\"form-row\">
        <div class=\"form-group\">
            ";
        // line 452
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 452, $this->source); })()), "difficulty_level", [], "any", false, false, false, 452), 'label', ["label" => "Niveau de difficulté"]);
        yield "
            ";
        // line 453
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 453, $this->source); })()), "difficulty_level", [], "any", false, false, false, 453), 'widget', ["attr" => ["class" => "form-input"]]);
        // line 455
        yield "
            <div class=\"form-help\">
                <i class=\"fas fa-chart-line\"></i>
                <span>Adaptez la difficulté au niveau de votre équipe</span>
            </div>
            ";
        // line 460
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 460, $this->source); })()), "difficulty_level", [], "any", false, false, false, 460), 'errors');
        yield "
        </div>
        
        <div class=\"form-group\">
            ";
        // line 464
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 464, $this->source); })()), "coach_id", [], "any", false, false, false, 464), 'label', ["label" => "ID du Coach"]);
        yield "
            ";
        // line 465
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 465, $this->source); })()), "coach_id", [], "any", false, false, false, 465), 'widget', ["attr" => ["placeholder" => "Ex: 1", "class" => "form-input"]]);
        // line 468
        yield "
            <div class=\"form-help\">
                <i class=\"fas fa-user-tie\"></i>
                <span>Identifiant du coach responsable</span>
            </div>
            ";
        // line 473
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 473, $this->source); })()), "coach_id", [], "any", false, false, false, 473), 'errors');
        yield "
        </div>
    </div>
    
    <div class=\"form-group\">
        ";
        // line 478
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 478, $this->source); })()), "description", [], "any", false, false, false, 478), 'label', ["label" => "Description détaillée"]);
        yield "
        ";
        // line 479
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 479, $this->source); })()), "description", [], "any", false, false, false, 479), 'widget', ["attr" => ["placeholder" => "Décrivez en détail les objectifs, exercices et stratégies de ce plan d'entraînement...", "class" => "form-textarea", "rows" => "6"]]);
        // line 483
        yield "
        <div class=\"form-help\">
            <i class=\"fas fa-align-left\"></i>
            <span>Incluez tous les détails importants pour la mise en œuvre du plan</span>
        </div>
        ";
        // line 488
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 488, $this->source); })()), "description", [], "any", false, false, false, 488), 'errors');
        yield "
    </div>
    
    <div class=\"form-group optional\">
        ";
        // line 492
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 492, $this->source); })()), "created_at", [], "any", false, false, false, 492), 'label', ["label" => "Date de création"]);
        yield "
        <div class=\"date-picker-container\">
            ";
        // line 494
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 494, $this->source); })()), "created_at", [], "any", false, false, false, 494), 'widget', ["attr" => ["class" => "form-input"]]);
        // line 496
        yield "
            <i class=\"fas fa-calendar-alt date-icon\"></i>
        </div>
        <div class=\"current-date-info\">
            <i class=\"fas fa-info-circle\"></i>
            <span>
                Date actuelle : <strong>";
        // line 502
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 502, $this->source); })()), "createdAt", [], "any", false, false, false, 502)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 502, $this->source); })()), "createdAt", [], "any", false, false, false, 502), "d/m/Y"), "html", null, true)) : ("Non définie"));
        yield "</strong>
                ";
        // line 503
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 503, $this->source); })()), "createdAt", [], "any", false, false, false, 503)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 504
            yield "                    (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 504, $this->source); })()), "createdAt", [], "any", false, false, false, 504), "H:i"), "html", null, true);
            yield ")
                ";
        }
        // line 506
        yield "            </span>
        </div>
        <div class=\"form-help\">
            <i class=\"fas fa-calendar\"></i>
            <span>Modifiez la date de création si nécessaire (format : AAAA-MM-JJ)</span>
        </div>
        ";
        // line 512
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 512, $this->source); })()), "created_at", [], "any", false, false, false, 512), 'errors');
        yield "
    </div>
    
    <div class=\"form-actions\">
        <button type=\"submit\" class=\"btn-save\">
            <i class=\"fas fa-save\"></i>
            ";
        // line 518
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 518, $this->source); })()), "Mettre à jour")) : ("Mettre à jour")), "html", null, true);
        yield "
        </button>
        
        <a href=\"";
        // line 521
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_index");
        yield "\" class=\"btn-cancel\">
            <i class=\"fas fa-arrow-left\"></i>
            Retour au dashboard
        </a>
        
        ";
        // line 526
        if (array_key_exists("delete_form", $context)) {
            // line 527
            yield "            <button type=\"button\" class=\"btn-delete\" onclick=\"confirmDelete()\">
                <i class=\"fas fa-trash\"></i>
                Supprimer
            </button>
        ";
        }
        // line 532
        yield "    </div>
    
    ";
        // line 534
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 534, $this->source); })()), 'form_end');
        yield "
    
    ";
        // line 536
        if (array_key_exists("delete_form", $context)) {
            // line 537
            yield "        <div id=\"delete-form\" style=\"display: none;\">
            ";
            // line 538
            yield Twig\Extension\CoreExtension::include($this->env, $context, "training_plan/_delete_form.html.twig");
            yield "
        </div>
    ";
        }
        // line 541
        yield "</div>

<div class=\"form-footer\">
    <a href=\"";
        // line 544
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

    // line 551
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

        // line 552
        yield "<script>
function confirmDelete() {
    if (confirm('Êtes-vous sûr de vouloir supprimer ce plan d\\'entraînement ? Cette action est irréversible.')) {
        document.querySelector('#delete-form form').submit();
    }
}

// Ajout de classes pour la validation
document.querySelectorAll('.form-group').forEach(group => {
    const input = group.querySelector('input, textarea, select');
    if (input) {
        input.addEventListener('blur', function() {
            if (this.value.trim() === '' && this.hasAttribute('required')) {
                group.classList.add('error');
            } else {
                group.classList.remove('error');
            }
        });
    }
});

// Formatage de la date pour l'input date
const createdAtInput = document.querySelector('#training_plan_created_at');
if (createdAtInput && createdAtInput.value) {
    // Convertir la date au format YYYY-MM-DD pour l'input date
    const date = new Date(createdAtInput.value);
    const formattedDate = date.toISOString().split('T')[0];
    createdAtInput.value = formattedDate;
}

// Afficher la date actuelle dans le placeholder
if (createdAtInput && !createdAtInput.value) {
    const today = new Date();
    const formattedToday = today.toISOString().split('T')[0];
    createdAtInput.placeholder = formattedToday;
}

// Animation d'entrée
document.addEventListener('DOMContentLoaded', function() {
    const formGroups = document.querySelectorAll('.form-group');
    formGroups.forEach((group, index) => {
        setTimeout(() => {
            group.style.animation = `fadeIn 0.5s ease-out forwards`;
            group.style.opacity = '0';
        }, index * 100);
    });
});

// Confirmation avant de quitter la page si des modifications existent
let formModified = false;
const form = document.querySelector('.training-form');
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
    
    // Réinitialiser formModified après soumission
    form.addEventListener('submit', () => {
        formModified = false;
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
        return array (  774 => 552,  761 => 551,  744 => 544,  739 => 541,  733 => 538,  730 => 537,  728 => 536,  723 => 534,  719 => 532,  712 => 527,  710 => 526,  702 => 521,  696 => 518,  687 => 512,  679 => 506,  673 => 504,  671 => 503,  667 => 502,  659 => 496,  657 => 494,  652 => 492,  645 => 488,  638 => 483,  636 => 479,  632 => 478,  624 => 473,  617 => 468,  615 => 465,  611 => 464,  604 => 460,  597 => 455,  595 => 453,  591 => 452,  582 => 446,  575 => 441,  573 => 438,  569 => 437,  562 => 433,  555 => 428,  553 => 425,  549 => 424,  542 => 420,  534 => 415,  521 => 404,  508 => 403,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
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

/* ================= CURRENT DATE INFO ================= */
.current-date-info {
    background: rgba(255, 45, 45, 0.1);
    border: 1px solid rgba(255, 45, 45, 0.2);
    border-radius: var(--radius);
    padding: 15px;
    margin-top: 15px;
    font-size: 13px;
    color: var(--text-muted);
    display: flex;
    align-items: center;
    gap: 10px;
}

.current-date-info i {
    color: var(--red);
    font-size: 14px;
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

    {{ form_start(form, {'attr': {'class': 'training-form'}}) }}
    
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
                'placeholder': 'Ex: Défense, Attaque, Stratégie',
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
            {{ form_label(form.coach_id, 'ID du Coach') }}
            {{ form_widget(form.coach_id, {'attr': {
                'placeholder': 'Ex: 1',
                'class': 'form-input'
            }}) }}
            <div class=\"form-help\">
                <i class=\"fas fa-user-tie\"></i>
                <span>Identifiant du coach responsable</span>
            </div>
            {{ form_errors(form.coach_id) }}
        </div>
    </div>
    
    <div class=\"form-group\">
        {{ form_label(form.description, 'Description détaillée') }}
        {{ form_widget(form.description, {'attr': {
            'placeholder': 'Décrivez en détail les objectifs, exercices et stratégies de ce plan d\\'entraînement...',
            'class': 'form-textarea',
            'rows': '6'
        }}) }}
        <div class=\"form-help\">
            <i class=\"fas fa-align-left\"></i>
            <span>Incluez tous les détails importants pour la mise en œuvre du plan</span>
        </div>
        {{ form_errors(form.description) }}
    </div>
    
    <div class=\"form-group optional\">
        {{ form_label(form.created_at, 'Date de création') }}
        <div class=\"date-picker-container\">
            {{ form_widget(form.created_at, {'attr': {
                'class': 'form-input'
            }}) }}
            <i class=\"fas fa-calendar-alt date-icon\"></i>
        </div>
        <div class=\"current-date-info\">
            <i class=\"fas fa-info-circle\"></i>
            <span>
                Date actuelle : <strong>{{ training_plan.createdAt ? training_plan.createdAt|date('d/m/Y') : 'Non définie' }}</strong>
                {% if training_plan.createdAt %}
                    ({{ training_plan.createdAt|date('H:i') }})
                {% endif %}
            </span>
        </div>
        <div class=\"form-help\">
            <i class=\"fas fa-calendar\"></i>
            <span>Modifiez la date de création si nécessaire (format : AAAA-MM-JJ)</span>
        </div>
        {{ form_errors(form.created_at) }}
    </div>
    
    <div class=\"form-actions\">
        <button type=\"submit\" class=\"btn-save\">
            <i class=\"fas fa-save\"></i>
            {{ button_label|default('Mettre à jour') }}
        </button>
        
        <a href=\"{{ path('app_coaching_session_index') }}\" class=\"btn-cancel\">
            <i class=\"fas fa-arrow-left\"></i>
            Retour au dashboard
        </a>
        
        {% if delete_form is defined %}
            <button type=\"button\" class=\"btn-delete\" onclick=\"confirmDelete()\">
                <i class=\"fas fa-trash\"></i>
                Supprimer
            </button>
        {% endif %}
    </div>
    
    {{ form_end(form) }}
    
    {% if delete_form is defined %}
        <div id=\"delete-form\" style=\"display: none;\">
            {{ include('training_plan/_delete_form.html.twig') }}
        </div>
    {% endif %}
</div>

<div class=\"form-footer\">
    <a href=\"{{ path('app_coaching_session_index') }}#training-plans\" class=\"back-link\">
        <i class=\"fas fa-list\"></i>
        Retour à la liste des plans d'entraînement
    </a>
</div>
{% endblock %}

{% block javascripts %}
<script>
function confirmDelete() {
    if (confirm('Êtes-vous sûr de vouloir supprimer ce plan d\\'entraînement ? Cette action est irréversible.')) {
        document.querySelector('#delete-form form').submit();
    }
}

// Ajout de classes pour la validation
document.querySelectorAll('.form-group').forEach(group => {
    const input = group.querySelector('input, textarea, select');
    if (input) {
        input.addEventListener('blur', function() {
            if (this.value.trim() === '' && this.hasAttribute('required')) {
                group.classList.add('error');
            } else {
                group.classList.remove('error');
            }
        });
    }
});

// Formatage de la date pour l'input date
const createdAtInput = document.querySelector('#training_plan_created_at');
if (createdAtInput && createdAtInput.value) {
    // Convertir la date au format YYYY-MM-DD pour l'input date
    const date = new Date(createdAtInput.value);
    const formattedDate = date.toISOString().split('T')[0];
    createdAtInput.value = formattedDate;
}

// Afficher la date actuelle dans le placeholder
if (createdAtInput && !createdAtInput.value) {
    const today = new Date();
    const formattedToday = today.toISOString().split('T')[0];
    createdAtInput.placeholder = formattedToday;
}

// Animation d'entrée
document.addEventListener('DOMContentLoaded', function() {
    const formGroups = document.querySelectorAll('.form-group');
    formGroups.forEach((group, index) => {
        setTimeout(() => {
            group.style.animation = `fadeIn 0.5s ease-out forwards`;
            group.style.opacity = '0';
        }, index * 100);
    });
});

// Confirmation avant de quitter la page si des modifications existent
let formModified = false;
const form = document.querySelector('.training-form');
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
    
    // Réinitialiser formModified après soumission
    form.addEventListener('submit', () => {
        formModified = false;
    });
}
</script>
{% endblock %}", "training_plan/edit.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\training_plan\\edit.html.twig");
    }
}
