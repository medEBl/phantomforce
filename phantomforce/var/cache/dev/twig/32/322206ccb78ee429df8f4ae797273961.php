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

/* tournament/edit.html.twig */
class __TwigTemplate_97bc9bb9fbe67cb2ec34265116cb8cb5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournament/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournament/edit.html.twig"));

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

        yield "Phantom Force – Modifier ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
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
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 71
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

        // line 72
        yield "<div class=\"container py-5 form-container\">
    <div class=\"form-card\">
        <h2 class=\"form-title\">Modifier : ";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 74, $this->source); })()), "name", [], "any", false, false, false, 74), "html", null, true);
        yield "</h2>
        
        ";
        // line 76
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
            <div class=\"row\">
                <div class=\"col-md-6 form-group-pf\">
                    <label class=\"form-label-pf\">";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "name", [], "any", false, false, false, 79), 'label');
        yield "</label>
                    ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "name", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control-pf"]]);
        yield "
                    <div class=\"form-error-pf\">";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "name", [], "any", false, false, false, 81), 'errors');
        yield "</div>
                </div>
                
                <div class=\"col-md-6 form-group-pf\">
                    <label class=\"form-label-pf\">";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "game", [], "any", false, false, false, 85), 'label');
        yield "</label>
                    ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "game", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control-pf"]]);
        yield "
                    <div class=\"form-error-pf\">";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "game", [], "any", false, false, false, 87), 'errors');
        yield "</div>
                </div>

                <div class=\"col-md-6 form-group-pf\">
                    <label class=\"form-label-pf\">";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "startDate", [], "any", false, false, false, 91), 'label');
        yield "</label>
                    ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "startDate", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "form-control-pf d-flex gap-1"]]);
        yield "
                    <div class=\"form-error-pf\">";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "startDate", [], "any", false, false, false, 93), 'errors');
        yield "</div>
                </div>

                <div class=\"col-md-6 form-group-pf\">
                    <label class=\"form-label-pf\">";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "endDate", [], "any", false, false, false, 97), 'label');
        yield "</label>
                    ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "endDate", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "form-control-pf d-flex gap-1"]]);
        yield "
                    <div class=\"form-error-pf\">";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "endDate", [], "any", false, false, false, 99), 'errors');
        yield "</div>
                </div>

                <div class=\"col-md-6 form-group-pf\">
                    <label class=\"form-label-pf\">";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "phase", [], "any", false, false, false, 103), 'label');
        yield "</label>
                    ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "phase", [], "any", false, false, false, 104), 'widget', ["attr" => ["class" => "form-control-pf"]]);
        yield "
                    <div class=\"form-error-pf\">";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "phase", [], "any", false, false, false, 105), 'errors');
        yield "</div>
                </div>

                <div class=\"col-md-6 form-group-pf\">
                    <label class=\"form-label-pf\">";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "organizerId", [], "any", false, false, false, 109), 'label');
        yield "</label>
                    ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "organizerId", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => "form-control-pf"]]);
        yield "
                    <div class=\"form-error-pf\">";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "organizerId", [], "any", false, false, false, 111), 'errors');
        yield "</div>
                </div>
            </div>
            
            <div class=\"detail-actions mt-2\">
                <button type=\"submit\" class=\"btn-organiser flex-grow-1 justify-content-center\">
                    <i class=\"fas fa-save\"></i> ENREGISTRER LES MODIFICATIONS
                </button>
                <a href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournaments");
        yield "\" class=\"btn-secondary-pf px-4\">
                    ANNULER
                </a>
            </div>
        ";
        // line 123
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), 'form_end');
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
        return "tournament/edit.html.twig";
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
        return array (  305 => 123,  298 => 119,  287 => 111,  283 => 110,  279 => 109,  272 => 105,  268 => 104,  264 => 103,  257 => 99,  253 => 98,  249 => 97,  242 => 93,  238 => 92,  234 => 91,  227 => 87,  223 => 86,  219 => 85,  212 => 81,  208 => 80,  204 => 79,  198 => 76,  193 => 74,  189 => 72,  176 => 71,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Phantom Force – Modifier {{ tournament.name }}{% endblock %}

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
</style>
{% endblock %}

{% block body %}
<div class=\"container py-5 form-container\">
    <div class=\"form-card\">
        <h2 class=\"form-title\">Modifier : {{ tournament.name }}</h2>
        
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
                    <i class=\"fas fa-save\"></i> ENREGISTRER LES MODIFICATIONS
                </button>
                <a href=\"{{ path('app_tournaments') }}\" class=\"btn-secondary-pf px-4\">
                    ANNULER
                </a>
            </div>
        {{ form_end(form) }}
    </div>
</div>
{% endblock %}
", "tournament/edit.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\tournament\\edit.html.twig");
    }
}
