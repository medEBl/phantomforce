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

/* admin/reward/new.html.twig */
class __TwigTemplate_932f95d99b5be69b1ce3191f8d46299f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reward/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reward/new.html.twig"));

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

        yield "Ajouter une Récompense - Admin";
        
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
    <h1 class=\"h3 mb-1\">Ajouter une Récompense</h1>
    <p class=\"text-muted small mb-0\">Définissez une nouvelle récompense pour le tournoi : <strong>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        yield "</strong></p>
</div>

<div class=\"row justify-content-center\">
    <div class=\"col-lg-6\">
        <div class=\"admin-card\">
            ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["class" => "form-admin", "novalidate" => "novalidate"]]);
        yield "
                <div class=\"mb-3\">
                    <label class=\"form-label text-muted small text-uppercase fw-bold\">Rang (ex: 1, 2, 3)</label>
                    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "rank", [], "any", false, false, false, 17), 'widget');
        yield "
                    <div class=\"text-danger small mt-1\">";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "rank", [], "any", false, false, false, 18), 'errors');
        yield "</div>
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label text-muted small text-uppercase fw-bold\">Type de Récompense</label>
                    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "rewardType", [], "any", false, false, false, 23), 'widget');
        yield "
                    <div class=\"text-danger small mt-1\">";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "rewardType", [], "any", false, false, false, 24), 'errors');
        yield "</div>
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label text-muted small text-uppercase fw-bold\">Valeur (ex: 500€, Skin...)</label>
                    ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "rewardValue", [], "any", false, false, false, 29), 'widget');
        yield "
                    <div class=\"text-danger small mt-1\">";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "rewardValue", [], "any", false, false, false, 30), 'errors');
        yield "</div>
                </div>

                <div class=\"mt-4 d-flex gap-2\">
                    <button type=\"submit\" class=\"btn-admin btn-admin-primary\">
                        <i class=\"fas fa-save me-2\"></i> Ajouter la Récompense
                    </button>
                    <a href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reward_index", ["tournamentId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)]), "html", null, true);
        yield "\" class=\"btn-admin btn-admin-secondary\">
                        Annuler
                    </a>
                </div>
            ";
        // line 41
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_end');
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
        return "admin/reward/new.html.twig";
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
        return array (  164 => 41,  157 => 37,  147 => 30,  143 => 29,  135 => 24,  131 => 23,  123 => 18,  119 => 17,  113 => 14,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Ajouter une Récompense - Admin{% endblock %}

{% block body %}
<div class=\"admin-header\">
    <h1 class=\"h3 mb-1\">Ajouter une Récompense</h1>
    <p class=\"text-muted small mb-0\">Définissez une nouvelle récompense pour le tournoi : <strong>{{ tournament.name }}</strong></p>
</div>

<div class=\"row justify-content-center\">
    <div class=\"col-lg-6\">
        <div class=\"admin-card\">
            {{ form_start(form, {'attr': {'class': 'form-admin', 'novalidate': 'novalidate'}}) }}
                <div class=\"mb-3\">
                    <label class=\"form-label text-muted small text-uppercase fw-bold\">Rang (ex: 1, 2, 3)</label>
                    {{ form_widget(form.rank) }}
                    <div class=\"text-danger small mt-1\">{{ form_errors(form.rank) }}</div>
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label text-muted small text-uppercase fw-bold\">Type de Récompense</label>
                    {{ form_widget(form.rewardType) }}
                    <div class=\"text-danger small mt-1\">{{ form_errors(form.rewardType) }}</div>
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label text-muted small text-uppercase fw-bold\">Valeur (ex: 500€, Skin...)</label>
                    {{ form_widget(form.rewardValue) }}
                    <div class=\"text-danger small mt-1\">{{ form_errors(form.rewardValue) }}</div>
                </div>

                <div class=\"mt-4 d-flex gap-2\">
                    <button type=\"submit\" class=\"btn-admin btn-admin-primary\">
                        <i class=\"fas fa-save me-2\"></i> Ajouter la Récompense
                    </button>
                    <a href=\"{{ path('app_admin_reward_index', {'tournamentId': tournament.id}) }}\" class=\"btn-admin btn-admin-secondary\">
                        Annuler
                    </a>
                </div>
            {{ form_end(form) }}
        </div>
    </div>
</div>
{% endblock %}
", "admin/reward/new.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\admin\\reward\\new.html.twig");
    }
}
