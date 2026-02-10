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

/* back/session_coaching/new.html.twig */
class __TwigTemplate_d3a1deda485708eba47dbcb3bcfea099 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/session_coaching/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/session_coaching/new.html.twig"));

        $this->parent = $this->load("base_back.html.twig", 1);
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

        yield "Nouvelle Session de Coaching";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"admin-header\">
    <h1><i class=\"fas fa-calendar-plus\"></i> Nouvelle Session de Coaching</h1>
    <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_coaching_session_manage");
        yield "\" class=\"btn-admin btn-admin-secondary\">
        <i class=\"fas fa-arrow-left\"></i> Retour à la liste
    </a>
</div>

<div class=\"admin-card\">
    ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["class" => "form-admin"]]);
        yield "
    
    <div style=\"display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 20px;\">
        <div>
            ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "coach_id", [], "any", false, false, false, 18), 'label', ["label" => "ID du Coach"]);
        yield "
            ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "coach_id", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 20
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "coach_id", [], "any", false, false, false, 20), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "                <div class=\"text-danger mt-1\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "coach_id", [], "any", false, false, false, 21), 'errors');
            yield "</div>
            ";
        }
        // line 23
        yield "        </div>
        <div>
            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "team_id", [], "any", false, false, false, 25), 'label', ["label" => "ID de l'Équipe"]);
        yield "
            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "team_id", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 27
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "team_id", [], "any", false, false, false, 27), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "                <div class=\"text-danger mt-1\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "team_id", [], "any", false, false, false, 28), 'errors');
            yield "</div>
            ";
        }
        // line 30
        yield "        </div>
    </div>
    
    <div style=\"margin-bottom: 20px;\">
        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "training_plan", [], "any", false, false, false, 34), 'label', ["label" => "Plan d'Entraînement"]);
        yield "
        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "training_plan", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        ";
        // line 36
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "training_plan", [], "any", false, false, false, 36), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "            <div class=\"text-danger mt-1\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "training_plan", [], "any", false, false, false, 37), 'errors');
            yield "</div>
        ";
        }
        // line 39
        yield "    </div>
    
    <div style=\"display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 20px;\">
        <div>
            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "session_date", [], "any", false, false, false, 43), 'label', ["label" => "Date et Heure de Session"]);
        yield "
            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "session_date", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 45
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "session_date", [], "any", false, false, false, 45), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "                <div class=\"text-danger mt-1\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "session_date", [], "any", false, false, false, 46), 'errors');
            yield "</div>
            ";
        }
        // line 48
        yield "        </div>
        <div>
            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "duration", [], "any", false, false, false, 50), 'label', ["label" => "Durée (minutes)"]);
        yield "
            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "duration", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 52
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "duration", [], "any", false, false, false, 52), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "                <div class=\"text-danger mt-1\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "duration", [], "any", false, false, false, 53), 'errors');
            yield "</div>
            ";
        }
        // line 55
        yield "            <small style=\"color: rgba(255, 255, 255, 0.6);\">Doit être un multiple de 15 (15, 30, 45, etc.)</small>
        </div>
    </div>
    
    <div style=\"margin-bottom: 30px;\">
        ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "notes", [], "any", false, false, false, 60), 'label', ["label" => "Notes"]);
        yield "
        ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "notes", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control", "rows" => 4]]);
        yield "
        ";
        // line 62
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "notes", [], "any", false, false, false, 62), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield "            <div class=\"text-danger mt-1\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "notes", [], "any", false, false, false, 63), 'errors');
            yield "</div>
        ";
        }
        // line 65
        yield "        <small style=\"color: rgba(255, 255, 255, 0.6);\">Pour les sessions de plus de 2 heures, des notes détaillées sont requises</small>
    </div>
    
    <div style=\"background: rgba(0, 243, 255, 0.1); border-left: 3px solid var(--admin-accent); padding: 15px; margin-bottom: 20px; border-radius: 6px;\">
        <h4 style=\"color: var(--admin-accent); margin-bottom: 10px;\"><i class=\"fas fa-info-circle\"></i> Règles de Validation</h4>
        <ul style=\"margin: 0; padding-left: 20px; color: rgba(255, 255, 255, 0.8);\">
            <li>Les sessions doivent être programmées entre 8h et 20h</li>
            <li>Les sessions doivent commencer à l'heure ou à la demi-heure</li>
            <li>Pas de sessions le week-end</li>
            <li>Durée minimum : 15 minutes, maximum : 8 heures</li>
            <li>Un coach ne peut pas avoir plus de 2 sessions le même jour</li>
        </ul>
    </div>
    
    <div style=\"display: flex; gap: 10px;\">
        <button type=\"submit\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-calendar-plus\"></i> Créer la Session
        </button>
        <button type=\"reset\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-redo\"></i> Réinitialiser
        </button>
        <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_coaching_session_manage");
        yield "\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-times\"></i> Annuler
        </a>
    </div>
    
    ";
        // line 91
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'form_end');
        yield "
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
        return "back/session_coaching/new.html.twig";
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
        return array (  274 => 91,  266 => 86,  243 => 65,  237 => 63,  235 => 62,  231 => 61,  227 => 60,  220 => 55,  214 => 53,  212 => 52,  208 => 51,  204 => 50,  200 => 48,  194 => 46,  192 => 45,  188 => 44,  184 => 43,  178 => 39,  172 => 37,  170 => 36,  166 => 35,  162 => 34,  156 => 30,  150 => 28,  148 => 27,  144 => 26,  140 => 25,  136 => 23,  130 => 21,  128 => 20,  124 => 19,  120 => 18,  113 => 14,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Nouvelle Session de Coaching{% endblock %}

{% block body %}
<div class=\"admin-header\">
    <h1><i class=\"fas fa-calendar-plus\"></i> Nouvelle Session de Coaching</h1>
    <a href=\"{{ path('app_back_coaching_session_manage') }}\" class=\"btn-admin btn-admin-secondary\">
        <i class=\"fas fa-arrow-left\"></i> Retour à la liste
    </a>
</div>

<div class=\"admin-card\">
    {{ form_start(form, {'attr': {'class': 'form-admin'}}) }}
    
    <div style=\"display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 20px;\">
        <div>
            {{ form_label(form.coach_id, 'ID du Coach') }}
            {{ form_widget(form.coach_id, {'attr': {'class': 'form-control'}}) }}
            {% if form_errors(form.coach_id) %}
                <div class=\"text-danger mt-1\">{{ form_errors(form.coach_id) }}</div>
            {% endif %}
        </div>
        <div>
            {{ form_label(form.team_id, 'ID de l\\'Équipe') }}
            {{ form_widget(form.team_id, {'attr': {'class': 'form-control'}}) }}
            {% if form_errors(form.team_id) %}
                <div class=\"text-danger mt-1\">{{ form_errors(form.team_id) }}</div>
            {% endif %}
        </div>
    </div>
    
    <div style=\"margin-bottom: 20px;\">
        {{ form_label(form.training_plan, 'Plan d\\'Entraînement') }}
        {{ form_widget(form.training_plan, {'attr': {'class': 'form-control'}}) }}
        {% if form_errors(form.training_plan) %}
            <div class=\"text-danger mt-1\">{{ form_errors(form.training_plan) }}</div>
        {% endif %}
    </div>
    
    <div style=\"display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 20px;\">
        <div>
            {{ form_label(form.session_date, 'Date et Heure de Session') }}
            {{ form_widget(form.session_date, {'attr': {'class': 'form-control'}}) }}
            {% if form_errors(form.session_date) %}
                <div class=\"text-danger mt-1\">{{ form_errors(form.session_date) }}</div>
            {% endif %}
        </div>
        <div>
            {{ form_label(form.duration, 'Durée (minutes)') }}
            {{ form_widget(form.duration, {'attr': {'class': 'form-control'}}) }}
            {% if form_errors(form.duration) %}
                <div class=\"text-danger mt-1\">{{ form_errors(form.duration) }}</div>
            {% endif %}
            <small style=\"color: rgba(255, 255, 255, 0.6);\">Doit être un multiple de 15 (15, 30, 45, etc.)</small>
        </div>
    </div>
    
    <div style=\"margin-bottom: 30px;\">
        {{ form_label(form.notes, 'Notes') }}
        {{ form_widget(form.notes, {'attr': {'class': 'form-control', 'rows': 4}}) }}
        {% if form_errors(form.notes) %}
            <div class=\"text-danger mt-1\">{{ form_errors(form.notes) }}</div>
        {% endif %}
        <small style=\"color: rgba(255, 255, 255, 0.6);\">Pour les sessions de plus de 2 heures, des notes détaillées sont requises</small>
    </div>
    
    <div style=\"background: rgba(0, 243, 255, 0.1); border-left: 3px solid var(--admin-accent); padding: 15px; margin-bottom: 20px; border-radius: 6px;\">
        <h4 style=\"color: var(--admin-accent); margin-bottom: 10px;\"><i class=\"fas fa-info-circle\"></i> Règles de Validation</h4>
        <ul style=\"margin: 0; padding-left: 20px; color: rgba(255, 255, 255, 0.8);\">
            <li>Les sessions doivent être programmées entre 8h et 20h</li>
            <li>Les sessions doivent commencer à l'heure ou à la demi-heure</li>
            <li>Pas de sessions le week-end</li>
            <li>Durée minimum : 15 minutes, maximum : 8 heures</li>
            <li>Un coach ne peut pas avoir plus de 2 sessions le même jour</li>
        </ul>
    </div>
    
    <div style=\"display: flex; gap: 10px;\">
        <button type=\"submit\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-calendar-plus\"></i> Créer la Session
        </button>
        <button type=\"reset\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-redo\"></i> Réinitialiser
        </button>
        <a href=\"{{ path('app_back_coaching_session_manage') }}\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-times\"></i> Annuler
        </a>
    </div>
    
    {{ form_end(form) }}
</div>
{% endblock %}", "back/session_coaching/new.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\back\\session_coaching\\new.html.twig");
    }
}
