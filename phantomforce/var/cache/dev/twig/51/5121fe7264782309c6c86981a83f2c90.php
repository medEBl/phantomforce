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

/* back/entrainement/new.html.twig */
class __TwigTemplate_f9cd9dec66e10521eb84371017901cf4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/entrainement/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/entrainement/new.html.twig"));

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

        yield "Nouveau Plan d'Entraînement";
        
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
    <h1><i class=\"fas fa-dumbbell\"></i> Nouveau Plan d'Entraînement</h1>
    <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_training_plan_manage");
        yield "\" class=\"btn-admin btn-admin-secondary\">
        <i class=\"fas fa-arrow-left\"></i> Retour à la liste
    </a>
</div>

<div class=\"admin-card\">
    ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["class" => "form-admin"]]);
        yield "
    
    <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;\">
        <div>
            ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18), 'row');
        yield "
        </div>
        <div>
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "coach_id", [], "any", false, false, false, 21), 'row');
        yield "
        </div>
    </div>
    
    <div style=\"margin-bottom: 20px;\">
        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), 'row');
        yield "
    </div>
    
    <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;\">
        <div>
            ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "focus_area", [], "any", false, false, false, 31), 'row');
        yield "
        </div>
        <div>
            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "difficulty_level", [], "any", false, false, false, 34), 'row');
        yield "
        </div>
    </div>
    
    <div style=\"margin-bottom: 30px;\">
        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "created_at", [], "any", false, false, false, 39), 'row');
        yield "
    </div>
    
    <div style=\"display: flex; gap: 10px;\">
        <button type=\"submit\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-save\"></i> Créer le Plan
        </button>
        <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_training_plan_manage");
        yield "\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-times\"></i> Annuler
        </a>
    </div>
    
    ";
        // line 51
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_end');
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
        return "back/entrainement/new.html.twig";
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
        return array (  174 => 51,  166 => 46,  156 => 39,  148 => 34,  142 => 31,  134 => 26,  126 => 21,  120 => 18,  113 => 14,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Nouveau Plan d'Entraînement{% endblock %}

{% block body %}
<div class=\"admin-header\">
    <h1><i class=\"fas fa-dumbbell\"></i> Nouveau Plan d'Entraînement</h1>
    <a href=\"{{ path('app_back_training_plan_manage') }}\" class=\"btn-admin btn-admin-secondary\">
        <i class=\"fas fa-arrow-left\"></i> Retour à la liste
    </a>
</div>

<div class=\"admin-card\">
    {{ form_start(form, {'attr': {'class': 'form-admin'}}) }}
    
    <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;\">
        <div>
            {{ form_row(form.title) }}
        </div>
        <div>
            {{ form_row(form.coach_id) }}
        </div>
    </div>
    
    <div style=\"margin-bottom: 20px;\">
        {{ form_row(form.description) }}
    </div>
    
    <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;\">
        <div>
            {{ form_row(form.focus_area) }}
        </div>
        <div>
            {{ form_row(form.difficulty_level) }}
        </div>
    </div>
    
    <div style=\"margin-bottom: 30px;\">
        {{ form_row(form.created_at) }}
    </div>
    
    <div style=\"display: flex; gap: 10px;\">
        <button type=\"submit\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-save\"></i> Créer le Plan
        </button>
        <a href=\"{{ path('app_back_training_plan_manage') }}\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-times\"></i> Annuler
        </a>
    </div>
    
    {{ form_end(form) }}
</div>
{% endblock %}", "back/entrainement/new.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\back\\entrainement\\new.html.twig");
    }
}
