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

/* back/session_coaching/edit.html.twig */
class __TwigTemplate_9e6c25d8551778bffddbc0bda6cfed73 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/session_coaching/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/session_coaching/edit.html.twig"));

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

        yield "Modifier la Session de Coaching";
        
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
    <h1><i class=\"fas fa-edit\"></i> Modifier la Session de Coaching</h1>
    <div style=\"display: flex; gap: 10px;\">
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_coaching_session_manage");
        yield "\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
        <a href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_coaching_session_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
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
    
    <div style=\"display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 20px;\">
        <div>
            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "coach_id", [], "any", false, false, false, 23), 'label', ["label" => "ID du Coach"]);
        yield "
            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "coach_id", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 25
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "coach_id", [], "any", false, false, false, 25), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "                <div class=\"text-danger mt-1\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "coach_id", [], "any", false, false, false, 26), 'errors');
            yield "</div>
            ";
        }
        // line 28
        yield "        </div>
        <div>
            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "team_id", [], "any", false, false, false, 30), 'label', ["label" => "ID de l'Équipe"]);
        yield "
            ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "team_id", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 32
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "team_id", [], "any", false, false, false, 32), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "                <div class=\"text-danger mt-1\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "team_id", [], "any", false, false, false, 33), 'errors');
            yield "</div>
            ";
        }
        // line 35
        yield "        </div>
    </div>
    
    <div style=\"margin-bottom: 20px;\">
        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "training_plan", [], "any", false, false, false, 39), 'label', ["label" => "Plan d'Entraînement"]);
        yield "
        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "training_plan", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        ";
        // line 41
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "training_plan", [], "any", false, false, false, 41), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "            <div class=\"text-danger mt-1\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "training_plan", [], "any", false, false, false, 42), 'errors');
            yield "</div>
        ";
        }
        // line 44
        yield "    </div>
    
    <div style=\"display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 20px;\">
        <div>
            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "session_date", [], "any", false, false, false, 48), 'label', ["label" => "Date et Heure de Session"]);
        yield "
            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "session_date", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 50
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "session_date", [], "any", false, false, false, 50), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "                <div class=\"text-danger mt-1\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "session_date", [], "any", false, false, false, 51), 'errors');
            yield "</div>
            ";
        }
        // line 53
        yield "        </div>
        <div>
            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "duration", [], "any", false, false, false, 55), 'label', ["label" => "Durée (minutes)"]);
        yield "
            ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "duration", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 57
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "duration", [], "any", false, false, false, 57), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "                <div class=\"text-danger mt-1\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "duration", [], "any", false, false, false, 58), 'errors');
            yield "</div>
            ";
        }
        // line 60
        yield "            <small style=\"color: rgba(255, 255, 255, 0.6);\">Doit être un multiple de 15 (15, 30, 45, etc.)</small>
        </div>
    </div>
    
    <div style=\"margin-bottom: 30px;\">
        ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "notes", [], "any", false, false, false, 65), 'label', ["label" => "Notes"]);
        yield "
        ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "notes", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control", "rows" => 4]]);
        yield "
        ";
        // line 67
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "notes", [], "any", false, false, false, 67), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "            <div class=\"text-danger mt-1\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "notes", [], "any", false, false, false, 68), 'errors');
            yield "</div>
        ";
        }
        // line 70
        yield "    </div>
    
    <div style=\"display: flex; gap: 10px;\">
        <button type=\"submit\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-save\"></i> Enregistrer les modifications
        </button>
        <button type=\"reset\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-redo\"></i> Réinitialiser
        </button>
        <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_coaching_session_manage");
        yield "\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-times\"></i> Annuler
        </a>
    </div>
    
    ";
        // line 84
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'form_end');
        yield "
</div>

<div class=\"admin-card\">
    <h3><i class=\"fas fa-exclamation-triangle\" style=\"color: #ffc107;\"></i> Actions Dangereuses</h3>
    <div style=\"display: flex; gap: 10px; align-items: center;\">
        <form method=\"post\" action=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_coaching_session_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 90, $this->source); })()), "id", [], "any", false, false, false, 90)]), "html", null, true);
        yield "\" 
              onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette session de coaching ? Cette action est irréversible.');\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 92, $this->source); })()), "id", [], "any", false, false, false, 92))), "html", null, true);
        yield "\">
            <button type=\"submit\" class=\"btn-admin btn-admin-danger\">
                <i class=\"fas fa-trash\"></i> Supprimer cette session
            </button>
        </form>
        <span style=\"color: rgba(255, 255, 255, 0.6); font-size: 0.9rem;\">
            Attention : Cette action ne peut pas être annulée.
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
        return "back/session_coaching/edit.html.twig";
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
        return array (  284 => 92,  279 => 90,  270 => 84,  262 => 79,  251 => 70,  245 => 68,  243 => 67,  239 => 66,  235 => 65,  228 => 60,  222 => 58,  220 => 57,  216 => 56,  212 => 55,  208 => 53,  202 => 51,  200 => 50,  196 => 49,  192 => 48,  186 => 44,  180 => 42,  178 => 41,  174 => 40,  170 => 39,  164 => 35,  158 => 33,  156 => 32,  152 => 31,  148 => 30,  144 => 28,  138 => 26,  136 => 25,  132 => 24,  128 => 23,  121 => 19,  111 => 12,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Modifier la Session de Coaching{% endblock %}

{% block body %}
<div class=\"admin-header\">
    <h1><i class=\"fas fa-edit\"></i> Modifier la Session de Coaching</h1>
    <div style=\"display: flex; gap: 10px;\">
        <a href=\"{{ path('app_back_coaching_session_manage') }}\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
        <a href=\"{{ path('app_back_coaching_session_show', {'id': coaching_session.id}) }}\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-eye\"></i> Voir
        </a>
    </div>
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
    </div>
    
    <div style=\"display: flex; gap: 10px;\">
        <button type=\"submit\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-save\"></i> Enregistrer les modifications
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

<div class=\"admin-card\">
    <h3><i class=\"fas fa-exclamation-triangle\" style=\"color: #ffc107;\"></i> Actions Dangereuses</h3>
    <div style=\"display: flex; gap: 10px; align-items: center;\">
        <form method=\"post\" action=\"{{ path('app_back_coaching_session_delete', {'id': coaching_session.id}) }}\" 
              onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette session de coaching ? Cette action est irréversible.');\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ coaching_session.id) }}\">
            <button type=\"submit\" class=\"btn-admin btn-admin-danger\">
                <i class=\"fas fa-trash\"></i> Supprimer cette session
            </button>
        </form>
        <span style=\"color: rgba(255, 255, 255, 0.6); font-size: 0.9rem;\">
            Attention : Cette action ne peut pas être annulée.
        </span>
    </div>
</div>
{% endblock %}", "back/session_coaching/edit.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\back\\session_coaching\\edit.html.twig");
    }
}
