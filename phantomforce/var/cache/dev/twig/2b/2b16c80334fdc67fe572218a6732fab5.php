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

/* agent/edit.html.twig */
class __TwigTemplate_7de2f3c109c4f08d859fd5891c624255 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/edit.html.twig"));

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

        yield "Modifier Agent";
        
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
        yield "
    ";
        // line 8
        yield "    <div style=\"display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;\">
        <div>
            <h1 style=\"font-size:24px; font-weight:800; color: white; margin-bottom: 4px;\">Modifier Agent</h1>
            <p style=\"color: rgba(255,255,255,0.6); margin:0;\">Édition de l'agent #";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        yield "</p>
        </div>

        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_index");
        yield "\"
           style=\"padding:10px 16px; border-radius:10px; border:1px solid rgba(255,255,255,0.12);
                  background: rgba(255,255,255,0.04); color:#e6e6e6; text-decoration:none; font-weight:700; transition: 0.3s;\">
            <i class=\"fa-solid fa-arrow-left\"></i> Retour
        </a>
    </div>

    ";
        // line 22
        yield "    <div style=\"
        background: rgba(20,20,25,0.85);
        border: 1px solid rgba(255, 45, 45, 0.3); /* Red Accent for Agents */
        border-radius: 14px;
        padding: 24px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.4);
        margin-bottom: 20px;
    \">
        ";
        // line 31
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "agent/_form.html.twig", ["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "button_label" => "Mettre à jour"]);
        yield "
    </div>

    ";
        // line 35
        yield "    <div style=\"display:flex; justify-content:flex-end; gap:12px; margin-top: 12px;\">
        <div style=\"
            border: 1px solid rgba(220, 53, 69, 0.3);
            background: rgba(220, 53, 69, 0.1);
            border-radius: 12px;
            padding: 10px 14px;
        \">
            ";
        // line 42
        yield Twig\Extension\CoreExtension::include($this->env, $context, "agent/_delete_form.html.twig", ["agent" => (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 42, $this->source); })())]);
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
        return "agent/edit.html.twig";
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
        return array (  150 => 42,  141 => 35,  134 => 31,  124 => 22,  114 => 14,  108 => 11,  103 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Modifier Agent{% endblock %}

{% block body %}

    {# 1. HEADER: Title & Back Button #}
    <div style=\"display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;\">
        <div>
            <h1 style=\"font-size:24px; font-weight:800; color: white; margin-bottom: 4px;\">Modifier Agent</h1>
            <p style=\"color: rgba(255,255,255,0.6); margin:0;\">Édition de l'agent #{{ agent.id }}</p>
        </div>

        <a href=\"{{ path('app_agent_index') }}\"
           style=\"padding:10px 16px; border-radius:10px; border:1px solid rgba(255,255,255,0.12);
                  background: rgba(255,255,255,0.04); color:#e6e6e6; text-decoration:none; font-weight:700; transition: 0.3s;\">
            <i class=\"fa-solid fa-arrow-left\"></i> Retour
        </a>
    </div>

    {# 2. FORM CONTAINER #}
    <div style=\"
        background: rgba(20,20,25,0.85);
        border: 1px solid rgba(255, 45, 45, 0.3); /* Red Accent for Agents */
        border-radius: 14px;
        padding: 24px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.4);
        margin-bottom: 20px;
    \">
        {# Include the form with 'Mettre à jour' label #}
        {{ include('agent/_form.html.twig', { form: form, button_label: 'Mettre à jour' }) }}
    </div>

    {# 3. DELETE SECTION #}
    <div style=\"display:flex; justify-content:flex-end; gap:12px; margin-top: 12px;\">
        <div style=\"
            border: 1px solid rgba(220, 53, 69, 0.3);
            background: rgba(220, 53, 69, 0.1);
            border-radius: 12px;
            padding: 10px 14px;
        \">
            {{ include('agent/_delete_form.html.twig', { agent: agent }) }}
        </div>
    </div>

{% endblock %}", "agent/edit.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\agent\\edit.html.twig");
    }
}
