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

/* tournament/new.html.twig */
class __TwigTemplate_c5c04a6f75006e545dcc8363dec71eea extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournament/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournament/new.html.twig"));

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

        yield "Phantom Force – Organiser un Tournoi";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "<style>
    .form-container {
        max-width: 800px;
        margin: 0 auto;
    }

    .form-card {
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: var(--radius-lg);
        padding: 40px;
        backdrop-filter: blur(10px);
    }

    .form-title {
        font-size: 24px;
        font-weight: 800;
        color: white;
        margin-bottom: 30px;
        text-transform: uppercase;
        letter-spacing: 2px;
        border-left: 4px solid var(--red);
        padding-left: 20px;
    }

    .form-group-pf {
        margin-bottom: 25px;
    }

    .form-label-pf {
        display: block;
        font-size: 11px;
        font-weight: 700;
        color: var(--text-muted);
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 8px;
    }

    .form-control-pf {
        background: rgba(0,0,0,0.3);
        border: 1px solid var(--border-light);
        color: white;
        padding: 12px 15px;
        border-radius: 8px;
        width: 100%;
        transition: var(--transition);
    }

    .form-control-pf:focus {
        border-color: var(--red);
        outline: none;
        box-shadow: 0 0 0 2px var(--red-soft);
        background: rgba(0,0,0,0.5);
    }

    .form-error-pf {
        color: var(--red);
        font-size: 12px;
        margin-top: 5px;
        font-weight: 600;
    }
    
    /* Style for date widgets if they render as multiple selects */
    select.form-control-pf {
        appearance: none;
        background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%23b3b3b3' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E\");
        background-repeat: no-repeat;
        background-position: right 15px center;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 79
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

        // line 80
        yield "<div class=\"container py-5 form-container\">
    <div class=\"form-card\">
        <h2 class=\"form-title\">Nouveau Tournoi</h2>
        
        ";
        // line 84
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
            <div class=\"row\">
                <div class=\"col-md-6 form-group-pf\">
                    <label class=\"form-label-pf\">";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "name", [], "any", false, false, false, 87), 'label');
        yield "</label>
                    ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "name", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control-pf"]]);
        yield "
                    <div class=\"form-error-pf\">";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "name", [], "any", false, false, false, 89), 'errors');
        yield "</div>
                </div>
                
                <div class=\"col-md-6 form-group-pf\">
                    <label class=\"form-label-pf\">";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "game", [], "any", false, false, false, 93), 'label');
        yield "</label>
                    ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "game", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => "form-control-pf"]]);
        yield "
                    <div class=\"form-error-pf\">";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "game", [], "any", false, false, false, 95), 'errors');
        yield "</div>
                </div>

                <div class=\"col-md-6 form-group-pf\">
                    <label class=\"form-label-pf\">";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "startDate", [], "any", false, false, false, 99), 'label');
        yield "</label>
                    ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "startDate", [], "any", false, false, false, 100), 'widget', ["attr" => ["class" => "form-control-pf d-flex gap-1"]]);
        yield "
                    <div class=\"form-error-pf\">";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "startDate", [], "any", false, false, false, 101), 'errors');
        yield "</div>
                </div>

                <div class=\"col-md-6 form-group-pf\">
                    <label class=\"form-label-pf\">";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "endDate", [], "any", false, false, false, 105), 'label');
        yield "</label>
                    ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "endDate", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "form-control-pf d-flex gap-1"]]);
        yield "
                    <div class=\"form-error-pf\">";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "endDate", [], "any", false, false, false, 107), 'errors');
        yield "</div>
                </div>

                <div class=\"col-md-6 form-group-pf\">
                    <label class=\"form-label-pf\">";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "phase", [], "any", false, false, false, 111), 'label');
        yield "</label>
                    ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "phase", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "form-control-pf"]]);
        yield "
                    <div class=\"form-error-pf\">";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "phase", [], "any", false, false, false, 113), 'errors');
        yield "</div>
                </div>

                <div class=\"col-md-6 form-group-pf\">
                    <label class=\"form-label-pf\">";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "organizerId", [], "any", false, false, false, 117), 'label');
        yield "</label>
                    ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "organizerId", [], "any", false, false, false, 118), 'widget', ["attr" => ["class" => "form-control-pf"]]);
        yield "
                    <div class=\"form-error-pf\">";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "organizerId", [], "any", false, false, false, 119), 'errors');
        yield "</div>
                </div>
            </div>
            
            <div class=\"detail-actions mt-2\">
                <button type=\"submit\" class=\"btn-organiser flex-grow-1 justify-content-center\">
                    <i class=\"fas fa-save\"></i> CRÉER LE TOURNOI
                </button>
                <a href=\"";
        // line 127
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournaments");
        yield "\" class=\"btn-secondary-pf px-4\">
                    ANNULER
                </a>
            </div>
        ";
        // line 131
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), 'form_end');
        yield "
    </div>
</div>
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
        return "tournament/new.html.twig";
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
        return array (  309 => 131,  302 => 127,  291 => 119,  287 => 118,  283 => 117,  276 => 113,  272 => 112,  268 => 111,  261 => 107,  257 => 106,  253 => 105,  246 => 101,  242 => 100,  238 => 99,  231 => 95,  227 => 94,  223 => 93,  216 => 89,  212 => 88,  208 => 87,  202 => 84,  196 => 80,  183 => 79,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Phantom Force – Organiser un Tournoi{% endblock %}

{% block stylesheets %}
<style>
    .form-container {
        max-width: 800px;
        margin: 0 auto;
    }

    .form-card {
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: var(--radius-lg);
        padding: 40px;
        backdrop-filter: blur(10px);
    }

    .form-title {
        font-size: 24px;
        font-weight: 800;
        color: white;
        margin-bottom: 30px;
        text-transform: uppercase;
        letter-spacing: 2px;
        border-left: 4px solid var(--red);
        padding-left: 20px;
    }

    .form-group-pf {
        margin-bottom: 25px;
    }

    .form-label-pf {
        display: block;
        font-size: 11px;
        font-weight: 700;
        color: var(--text-muted);
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 8px;
    }

    .form-control-pf {
        background: rgba(0,0,0,0.3);
        border: 1px solid var(--border-light);
        color: white;
        padding: 12px 15px;
        border-radius: 8px;
        width: 100%;
        transition: var(--transition);
    }

    .form-control-pf:focus {
        border-color: var(--red);
        outline: none;
        box-shadow: 0 0 0 2px var(--red-soft);
        background: rgba(0,0,0,0.5);
    }

    .form-error-pf {
        color: var(--red);
        font-size: 12px;
        margin-top: 5px;
        font-weight: 600;
    }
    
    /* Style for date widgets if they render as multiple selects */
    select.form-control-pf {
        appearance: none;
        background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%23b3b3b3' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E\");
        background-repeat: no-repeat;
        background-position: right 15px center;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container py-5 form-container\">
    <div class=\"form-card\">
        <h2 class=\"form-title\">Nouveau Tournoi</h2>
        
        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
            <div class=\"row\">
                <div class=\"col-md-6 form-group-pf\">
                    <label class=\"form-label-pf\">{{ form_label(form.name) }}</label>
                    {{ form_widget(form.name, {'attr': {'class': 'form-control-pf'}}) }}
                    <div class=\"form-error-pf\">{{ form_errors(form.name) }}</div>
                </div>
                
                <div class=\"col-md-6 form-group-pf\">
                    <label class=\"form-label-pf\">{{ form_label(form.game) }}</label>
                    {{ form_widget(form.game, {'attr': {'class': 'form-control-pf'}}) }}
                    <div class=\"form-error-pf\">{{ form_errors(form.game) }}</div>
                </div>

                <div class=\"col-md-6 form-group-pf\">
                    <label class=\"form-label-pf\">{{ form_label(form.startDate) }}</label>
                    {{ form_widget(form.startDate, {'attr': {'class': 'form-control-pf d-flex gap-1'}}) }}
                    <div class=\"form-error-pf\">{{ form_errors(form.startDate) }}</div>
                </div>

                <div class=\"col-md-6 form-group-pf\">
                    <label class=\"form-label-pf\">{{ form_label(form.endDate) }}</label>
                    {{ form_widget(form.endDate, {'attr': {'class': 'form-control-pf d-flex gap-1'}}) }}
                    <div class=\"form-error-pf\">{{ form_errors(form.endDate) }}</div>
                </div>

                <div class=\"col-md-6 form-group-pf\">
                    <label class=\"form-label-pf\">{{ form_label(form.phase) }}</label>
                    {{ form_widget(form.phase, {'attr': {'class': 'form-control-pf'}}) }}
                    <div class=\"form-error-pf\">{{ form_errors(form.phase) }}</div>
                </div>

                <div class=\"col-md-6 form-group-pf\">
                    <label class=\"form-label-pf\">{{ form_label(form.organizerId) }}</label>
                    {{ form_widget(form.organizerId, {'attr': {'class': 'form-control-pf'}}) }}
                    <div class=\"form-error-pf\">{{ form_errors(form.organizerId) }}</div>
                </div>
            </div>
            
            <div class=\"detail-actions mt-2\">
                <button type=\"submit\" class=\"btn-organiser flex-grow-1 justify-content-center\">
                    <i class=\"fas fa-save\"></i> CRÉER LE TOURNOI
                </button>
                <a href=\"{{ path('app_tournaments') }}\" class=\"btn-secondary-pf px-4\">
                    ANNULER
                </a>
            </div>
        {{ form_end(form) }}
    </div>
</div>
{% endblock %}
", "tournament/new.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\tournament\\new.html.twig");
    }
}
