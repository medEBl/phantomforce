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

/* back/entrainement/edit.html.twig */
class __TwigTemplate_96186a24653ec6202994aafd3ada3a8e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/entrainement/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/entrainement/edit.html.twig"));

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

        yield "Modifier le Plan d'Entraînement";
        
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
    <h1><i class=\"fas fa-edit\"></i> Modifier le Plan d'Entraînement</h1>
    <div style=\"display: flex; gap: 10px;\">
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_training_plan_manage");
        yield "\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
        <a href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_training_plan_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        yield "\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-eye\"></i> Voir
        </a>
    </div>
</div>

<div class=\"admin-card\">
    ";
        // line 19
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["class" => "form-admin"]]);
        yield "
    
    <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;\">
        <div>
            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "title", [], "any", false, false, false, 23), 'label', ["label" => "Titre"]);
        yield "
            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "title", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 25
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "title", [], "any", false, false, false, 25), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "                <div class=\"text-danger mt-1\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "title", [], "any", false, false, false, 26), 'errors');
            yield "</div>
            ";
        }
        // line 28
        yield "        </div>
        <div>
            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "coach_id", [], "any", false, false, false, 30), 'label', ["label" => "ID du Coach"]);
        yield "
            ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "coach_id", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 32
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "coach_id", [], "any", false, false, false, 32), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "                <div class=\"text-danger mt-1\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "coach_id", [], "any", false, false, false, 33), 'errors');
            yield "</div>
            ";
        }
        // line 35
        yield "        </div>
    </div>
    
    <div style=\"margin-bottom: 20px;\">
        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "description", [], "any", false, false, false, 39), 'label', ["label" => "Description"]);
        yield "
        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "description", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control", "rows" => 5]]);
        yield "
        ";
        // line 41
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "description", [], "any", false, false, false, 41), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "            <div class=\"text-danger mt-1\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "description", [], "any", false, false, false, 42), 'errors');
            yield "</div>
        ";
        }
        // line 44
        yield "    </div>
    
    <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;\">
        <div>
            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "focus_area", [], "any", false, false, false, 48), 'label', ["label" => "Zone de Focus"]);
        yield "
            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "focus_area", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 50
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "focus_area", [], "any", false, false, false, 50), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "                <div class=\"text-danger mt-1\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "focus_area", [], "any", false, false, false, 51), 'errors');
            yield "</div>
            ";
        }
        // line 53
        yield "        </div>
        <div>
            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "difficulty_level", [], "any", false, false, false, 55), 'label', ["label" => "Niveau de Difficulté"]);
        yield "
            ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "difficulty_level", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 57
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "difficulty_level", [], "any", false, false, false, 57), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "                <div class=\"text-danger mt-1\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "difficulty_level", [], "any", false, false, false, 58), 'errors');
            yield "</div>
            ";
        }
        // line 60
        yield "        </div>
    </div>
    
    <div style=\"margin-bottom: 30px;\">
        ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "created_at", [], "any", false, false, false, 64), 'label', ["label" => "Date de Création"]);
        yield "
        ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "created_at", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        ";
        // line 66
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "created_at", [], "any", false, false, false, 66), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "            <div class=\"text-danger mt-1\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "created_at", [], "any", false, false, false, 67), 'errors');
            yield "</div>
        ";
        }
        // line 69
        yield "    </div>
    
    <div style=\"display: flex; gap: 10px;\">
        <button type=\"submit\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-save\"></i> Enregistrer les modifications
        </button>
        <button type=\"reset\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-redo\"></i> Réinitialiser
        </button>
        <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_training_plan_manage");
        yield "\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-times\"></i> Annuler
        </a>
    </div>
    
    ";
        // line 83
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), 'form_end');
        yield "
</div>

<div class=\"admin-card\">
    <h3><i class=\"fas fa-exclamation-triangle\" style=\"color: #ffc107;\"></i> Actions Dangereuses</h3>
    <div style=\"display: flex; gap: 10px; align-items: center;\">
        <form method=\"post\" action=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_training_plan_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89)]), "html", null, true);
        yield "\" 
              onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce plan d\\'entraînement ? Cette action est irréversible.');\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 91, $this->source); })()), "id", [], "any", false, false, false, 91))), "html", null, true);
        yield "\">
            <button type=\"submit\" class=\"btn-admin btn-admin-danger\">
                <i class=\"fas fa-trash\"></i> Supprimer ce plan d'entraînement
            </button>
        </form>
        <span style=\"color: rgba(255, 255, 255, 0.6); font-size: 0.9rem;\">
            Attention : Cette action supprimera également toutes les sessions de coaching associées.
        </span>
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
        return "back/entrainement/edit.html.twig";
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
        return array (  283 => 91,  278 => 89,  269 => 83,  261 => 78,  250 => 69,  244 => 67,  242 => 66,  238 => 65,  234 => 64,  228 => 60,  222 => 58,  220 => 57,  216 => 56,  212 => 55,  208 => 53,  202 => 51,  200 => 50,  196 => 49,  192 => 48,  186 => 44,  180 => 42,  178 => 41,  174 => 40,  170 => 39,  164 => 35,  158 => 33,  156 => 32,  152 => 31,  148 => 30,  144 => 28,  138 => 26,  136 => 25,  132 => 24,  128 => 23,  121 => 19,  111 => 12,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Modifier le Plan d'Entraînement{% endblock %}

{% block body %}
<div class=\"admin-header\">
    <h1><i class=\"fas fa-edit\"></i> Modifier le Plan d'Entraînement</h1>
    <div style=\"display: flex; gap: 10px;\">
        <a href=\"{{ path('app_back_training_plan_manage') }}\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
        <a href=\"{{ path('app_back_training_plan_show', {'id': training_plan.id}) }}\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-eye\"></i> Voir
        </a>
    </div>
</div>

<div class=\"admin-card\">
    {{ form_start(form, {'attr': {'class': 'form-admin'}}) }}
    
    <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;\">
        <div>
            {{ form_label(form.title, 'Titre') }}
            {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}
            {% if form_errors(form.title) %}
                <div class=\"text-danger mt-1\">{{ form_errors(form.title) }}</div>
            {% endif %}
        </div>
        <div>
            {{ form_label(form.coach_id, 'ID du Coach') }}
            {{ form_widget(form.coach_id, {'attr': {'class': 'form-control'}}) }}
            {% if form_errors(form.coach_id) %}
                <div class=\"text-danger mt-1\">{{ form_errors(form.coach_id) }}</div>
            {% endif %}
        </div>
    </div>
    
    <div style=\"margin-bottom: 20px;\">
        {{ form_label(form.description, 'Description') }}
        {{ form_widget(form.description, {'attr': {'class': 'form-control', 'rows': 5}}) }}
        {% if form_errors(form.description) %}
            <div class=\"text-danger mt-1\">{{ form_errors(form.description) }}</div>
        {% endif %}
    </div>
    
    <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;\">
        <div>
            {{ form_label(form.focus_area, 'Zone de Focus') }}
            {{ form_widget(form.focus_area, {'attr': {'class': 'form-control'}}) }}
            {% if form_errors(form.focus_area) %}
                <div class=\"text-danger mt-1\">{{ form_errors(form.focus_area) }}</div>
            {% endif %}
        </div>
        <div>
            {{ form_label(form.difficulty_level, 'Niveau de Difficulté') }}
            {{ form_widget(form.difficulty_level, {'attr': {'class': 'form-control'}}) }}
            {% if form_errors(form.difficulty_level) %}
                <div class=\"text-danger mt-1\">{{ form_errors(form.difficulty_level) }}</div>
            {% endif %}
        </div>
    </div>
    
    <div style=\"margin-bottom: 30px;\">
        {{ form_label(form.created_at, 'Date de Création') }}
        {{ form_widget(form.created_at, {'attr': {'class': 'form-control'}}) }}
        {% if form_errors(form.created_at) %}
            <div class=\"text-danger mt-1\">{{ form_errors(form.created_at) }}</div>
        {% endif %}
    </div>
    
    <div style=\"display: flex; gap: 10px;\">
        <button type=\"submit\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-save\"></i> Enregistrer les modifications
        </button>
        <button type=\"reset\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-redo\"></i> Réinitialiser
        </button>
        <a href=\"{{ path('app_back_training_plan_manage') }}\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-times\"></i> Annuler
        </a>
    </div>
    
    {{ form_end(form) }}
</div>

<div class=\"admin-card\">
    <h3><i class=\"fas fa-exclamation-triangle\" style=\"color: #ffc107;\"></i> Actions Dangereuses</h3>
    <div style=\"display: flex; gap: 10px; align-items: center;\">
        <form method=\"post\" action=\"{{ path('app_back_training_plan_delete', {'id': training_plan.id}) }}\" 
              onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce plan d\\'entraînement ? Cette action est irréversible.');\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ training_plan.id) }}\">
            <button type=\"submit\" class=\"btn-admin btn-admin-danger\">
                <i class=\"fas fa-trash\"></i> Supprimer ce plan d'entraînement
            </button>
        </form>
        <span style=\"color: rgba(255, 255, 255, 0.6); font-size: 0.9rem;\">
            Attention : Cette action supprimera également toutes les sessions de coaching associées.
        </span>
    </div>
</div>
{% endblock %}", "back/entrainement/edit.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\back\\entrainement\\edit.html.twig");
    }
}
