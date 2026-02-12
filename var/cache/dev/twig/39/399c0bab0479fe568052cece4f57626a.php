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

/* admin/tournament/edit.html.twig */
class __TwigTemplate_6ac16c956833318a5cca1c6fff042d6b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/tournament/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/tournament/edit.html.twig"));

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

        yield "Modifier le Tournoi - ARENA Admin";
        
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
    <h1 class=\"h3 mb-1\">Modifier : ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>
    <p class=\"text-muted small mb-0\">Mettez à jour les informations de la compétition.</p>
</div>

<div class=\"row justify-content-center\">
    <div class=\"col-lg-8\">
        <div class=\"admin-card\">
            ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["class" => "form-admin", "novalidate" => "novalidate"]]);
        yield "
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label text-muted small text-uppercase fw-bold\">Nom du Tournoi</label>
                        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), 'widget');
        yield "
                        <div class=\"text-danger small mt-1\">";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), 'errors');
        yield "</div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label text-muted small text-uppercase fw-bold\">Jeu</label>
                        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "game", [], "any", false, false, false, 23), 'widget');
        yield "
                        <div class=\"text-danger small mt-1\">";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "game", [], "any", false, false, false, 24), 'errors');
        yield "</div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label text-muted small text-uppercase fw-bold\">Date de Début</label>
                        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "startDate", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "d-flex gap-1"]]);
        yield "
                        <div class=\"text-danger small mt-1\">";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "startDate", [], "any", false, false, false, 32), 'errors');
        yield "</div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label text-muted small text-uppercase fw-bold\">Date de Fin</label>
                        ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "endDate", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "d-flex gap-1"]]);
        yield "
                        <div class=\"text-danger small mt-1\">";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "endDate", [], "any", false, false, false, 37), 'errors');
        yield "</div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label text-muted small text-uppercase fw-bold\">Phase Actuelle</label>
                        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "phase", [], "any", false, false, false, 44), 'widget');
        yield "
                        <div class=\"text-danger small mt-1\">";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "phase", [], "any", false, false, false, 45), 'errors');
        yield "</div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label text-muted small text-uppercase fw-bold\">ID Organisateur</label>
                        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "organizerId", [], "any", false, false, false, 49), 'widget');
        yield "
                        <div class=\"text-danger small mt-1\">";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "organizerId", [], "any", false, false, false, 50), 'errors');
        yield "</div>
                    </div>
                </div>

                <div class=\"mt-4 d-flex justify-content-between align-items-center\">
                    <div class=\"d-flex gap-2\">
                        <button type=\"submit\" class=\"btn-admin btn-admin-primary\">
                            <i class=\"fas fa-save me-2\"></i> Enregistrer
                        </button>
                        <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_index");
        yield "\" class=\"btn-admin btn-admin-secondary\">
                            Annuler
                        </a>
                    </div>
                    
                    <a href=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reward_index", ["tournamentId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64)]), "html", null, true);
        yield "\" class=\"btn-admin btn-admin-secondary\">
                        <i class=\"fas fa-trophy me-1\"></i> Gérer les Récompenses
                    </a>
                </div>
            ";
        // line 68
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_end');
        yield "
        </div>
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
        return "admin/tournament/edit.html.twig";
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
        return array (  212 => 68,  205 => 64,  197 => 59,  185 => 50,  181 => 49,  174 => 45,  170 => 44,  160 => 37,  156 => 36,  149 => 32,  145 => 31,  135 => 24,  131 => 23,  124 => 19,  120 => 18,  113 => 14,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Modifier le Tournoi - ARENA Admin{% endblock %}

{% block body %}
<div class=\"admin-header\">
    <h1 class=\"h3 mb-1\">Modifier : {{ tournament.name }}</h1>
    <p class=\"text-muted small mb-0\">Mettez à jour les informations de la compétition.</p>
</div>

<div class=\"row justify-content-center\">
    <div class=\"col-lg-8\">
        <div class=\"admin-card\">
            {{ form_start(form, {'attr': {'class': 'form-admin', 'novalidate': 'novalidate'}}) }}
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label text-muted small text-uppercase fw-bold\">Nom du Tournoi</label>
                        {{ form_widget(form.name) }}
                        <div class=\"text-danger small mt-1\">{{ form_errors(form.name) }}</div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label text-muted small text-uppercase fw-bold\">Jeu</label>
                        {{ form_widget(form.game) }}
                        <div class=\"text-danger small mt-1\">{{ form_errors(form.game) }}</div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label text-muted small text-uppercase fw-bold\">Date de Début</label>
                        {{ form_widget(form.startDate, {'attr': {'class': 'd-flex gap-1'}}) }}
                        <div class=\"text-danger small mt-1\">{{ form_errors(form.startDate) }}</div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label text-muted small text-uppercase fw-bold\">Date de Fin</label>
                        {{ form_widget(form.endDate, {'attr': {'class': 'd-flex gap-1'}}) }}
                        <div class=\"text-danger small mt-1\">{{ form_errors(form.endDate) }}</div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label text-muted small text-uppercase fw-bold\">Phase Actuelle</label>
                        {{ form_widget(form.phase) }}
                        <div class=\"text-danger small mt-1\">{{ form_errors(form.phase) }}</div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label text-muted small text-uppercase fw-bold\">ID Organisateur</label>
                        {{ form_widget(form.organizerId) }}
                        <div class=\"text-danger small mt-1\">{{ form_errors(form.organizerId) }}</div>
                    </div>
                </div>

                <div class=\"mt-4 d-flex justify-content-between align-items-center\">
                    <div class=\"d-flex gap-2\">
                        <button type=\"submit\" class=\"btn-admin btn-admin-primary\">
                            <i class=\"fas fa-save me-2\"></i> Enregistrer
                        </button>
                        <a href=\"{{ path('app_back_matchy_index') }}\" class=\"btn-admin btn-admin-secondary\">
                            Annuler
                        </a>
                    </div>
                    
                    <a href=\"{{ path('app_admin_reward_index', {tournamentId: tournament.id}) }}\" class=\"btn-admin btn-admin-secondary\">
                        <i class=\"fas fa-trophy me-1\"></i> Gérer les Récompenses
                    </a>
                </div>
            {{ form_end(form) }}
        </div>
    </div>
</div>
{% endblock %}
", "admin/tournament/edit.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\admin\\tournament\\edit.html.twig");
    }
}
