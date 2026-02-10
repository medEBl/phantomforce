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

/* agent/_form.html.twig */
class __TwigTemplate_9b15021adc9f1721b9561feb4633f01c extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/_form.html.twig"));

        // line 2
        yield "
<style>
    /* CSS Grid Layout for the form */
    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr; /* Two columns */
        gap: 20px;
    }
    
    /* Responsive: 1 column on mobile */
    @media (max-width: 768px) {
        .form-grid { grid-template-columns: 1fr; }
    }

    /* Force Dark Theme on Inputs */
    .agent-form input, 
    .agent-form select, 
    .agent-form textarea {
        background-color: rgba(255, 255, 255, 0.05) !important;
        border: 1px solid rgba(255, 255, 255, 0.2) !important;
        color: #ffffff !important;
        border-radius: 8px !important;
        padding: 10px 12px !important;
    }

    /* Input Focus State (Red Accent) */
    .agent-form input:focus, 
    .agent-form select:focus, 
    .agent-form textarea:focus {
        background-color: rgba(255, 255, 255, 0.1) !important;
        border-color: #ff2d2d !important;
        box-shadow: 0 0 0 3px rgba(255, 45, 45, 0.2) !important;
        outline: none;
    }

    /* Label Styling */
    .agent-form label {
        color: rgba(255, 255, 255, 0.8) !important;
        margin-bottom: 6px;
        font-weight: 600;
        display: block;
    }
    
    /* Error Messages */
    .invalid-feedback, .text-danger {
        color: #ff5e5e !important;
        font-size: 0.85em;
        margin-top: 4px;
    }
</style>

";
        // line 53
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_start', ["attr" => ["class" => "agent-form", "novalidate" => "novalidate"]]);
        yield "

    <div class=\"form-grid\">
        ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "pseudo", [], "any", false, false, false, 56), 'row');
        yield "
        ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "game", [], "any", false, false, false, 57), 'row');
        yield "

        ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "player", [], "any", false, false, false, 59), 'row');
        yield "
        ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "team", [], "any", false, false, false, 60), 'row');
        yield "

        ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "rank", [], "any", false, false, false, 62), 'row');
        yield "
        ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "status", [], "any", false, false, false, 63), 'row');
        yield "

        <div style=\"grid-column: 1 / -1;\">
            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "socialsLink", [], "any", false, false, false, 66), 'row');
        yield "
        </div>
    </div>

    <div style=\"display:flex; justify-content:flex-end; margin-top:20px;\">
        <button type=\"submit\" style=\"
            padding:12px 24px;
            border-radius:12px;
            border:none;
            background: linear-gradient(135deg,#ff2d2d,#ff5e5e);
            color: white;
            font-weight:800;
            font-size:14px;
            cursor:pointer;
            box-shadow: 0 8px 20px rgba(255,45,45,0.3);
            transition: transform 0.2s;
            display: flex; align-items: center; gap: 8px;
        \" onmouseover=\"this.style.transform='translateY(-2px)'\" onmouseout=\"this.style.transform='translateY(0)'\">
            <i class=\"fa-solid fa-floppy-disk\"></i>
            ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 85, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
        </button>
    </div>

";
        // line 89
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "agent/_form.html.twig";
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
        return array (  164 => 89,  157 => 85,  135 => 66,  129 => 63,  125 => 62,  120 => 60,  116 => 59,  111 => 57,  107 => 56,  101 => 53,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/agent/_form.html.twig #}

<style>
    /* CSS Grid Layout for the form */
    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr; /* Two columns */
        gap: 20px;
    }
    
    /* Responsive: 1 column on mobile */
    @media (max-width: 768px) {
        .form-grid { grid-template-columns: 1fr; }
    }

    /* Force Dark Theme on Inputs */
    .agent-form input, 
    .agent-form select, 
    .agent-form textarea {
        background-color: rgba(255, 255, 255, 0.05) !important;
        border: 1px solid rgba(255, 255, 255, 0.2) !important;
        color: #ffffff !important;
        border-radius: 8px !important;
        padding: 10px 12px !important;
    }

    /* Input Focus State (Red Accent) */
    .agent-form input:focus, 
    .agent-form select:focus, 
    .agent-form textarea:focus {
        background-color: rgba(255, 255, 255, 0.1) !important;
        border-color: #ff2d2d !important;
        box-shadow: 0 0 0 3px rgba(255, 45, 45, 0.2) !important;
        outline: none;
    }

    /* Label Styling */
    .agent-form label {
        color: rgba(255, 255, 255, 0.8) !important;
        margin-bottom: 6px;
        font-weight: 600;
        display: block;
    }
    
    /* Error Messages */
    .invalid-feedback, .text-danger {
        color: #ff5e5e !important;
        font-size: 0.85em;
        margin-top: 4px;
    }
</style>

{{ form_start(form, { attr: { class: 'agent-form', novalidate: 'novalidate' } }) }}

    <div class=\"form-grid\">
        {{ form_row(form.pseudo) }}
        {{ form_row(form.game) }}

        {{ form_row(form.player) }}
        {{ form_row(form.team) }}

        {{ form_row(form.rank) }}
        {{ form_row(form.status) }}

        <div style=\"grid-column: 1 / -1;\">
            {{ form_row(form.socialsLink) }}
        </div>
    </div>

    <div style=\"display:flex; justify-content:flex-end; margin-top:20px;\">
        <button type=\"submit\" style=\"
            padding:12px 24px;
            border-radius:12px;
            border:none;
            background: linear-gradient(135deg,#ff2d2d,#ff5e5e);
            color: white;
            font-weight:800;
            font-size:14px;
            cursor:pointer;
            box-shadow: 0 8px 20px rgba(255,45,45,0.3);
            transition: transform 0.2s;
            display: flex; align-items: center; gap: 8px;
        \" onmouseover=\"this.style.transform='translateY(-2px)'\" onmouseout=\"this.style.transform='translateY(0)'\">
            <i class=\"fa-solid fa-floppy-disk\"></i>
            {{ button_label|default('Enregistrer') }}
        </button>
    </div>

{{ form_end(form) }}", "agent/_form.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\agent\\_form.html.twig");
    }
}
