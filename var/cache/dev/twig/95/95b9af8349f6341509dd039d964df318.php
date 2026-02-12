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

/* questionnaire_agent/new.html.twig */
class __TwigTemplate_203facd2126825a94f5f6fc486b39976 extends Template
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
        // line 2
        return "base_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "questionnaire_agent/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "questionnaire_agent/new.html.twig"));

        $this->parent = $this->load("base_back.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Nouveau Questionnaire";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "
    ";
        // line 9
        yield "    <div style=\"display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;\">
        <div>
            <h1 style=\"font-size:24px; font-weight:800; color: white; margin-bottom: 4px;\">Créer un Questionnaire</h1>
            <p style=\"color: rgba(255,255,255,0.6); margin:0;\">Ajouter les questions pour un nouveau jeu</p>
        </div>

        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_questionnaire_agent_index");
        yield "\"
           style=\"padding:10px 16px; border-radius:10px; border:1px solid rgba(255,255,255,0.12);
                  background: rgba(255,255,255,0.04); color:#e6e6e6; text-decoration:none; font-weight:700; transition: 0.3s;\">
            <i class=\"fa-solid fa-arrow-left\"></i> Retour
        </a>
    </div>

    ";
        // line 23
        yield "    <div style=\"
        background: rgba(20,20,25,0.85);
        border: 1px solid rgba(0, 243, 255, 0.2);
        border-radius: 14px;
        padding: 24px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.4);
    \">
        ";
        // line 31
        yield "        ";
        yield from $this->load("questionnaire_agent/_form.html.twig", 31)->unwrap()->yield(CoreExtension::merge($context, ["button_label" => "Créer le questionnaire"]));
        // line 32
        yield "    </div>

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
        return "questionnaire_agent/new.html.twig";
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
        return array (  133 => 32,  130 => 31,  121 => 23,  111 => 15,  103 => 9,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/questionnaire_agent/new.html.twig #}
{% extends 'base_back.html.twig' %}

{% block title %}Nouveau Questionnaire{% endblock %}

{% block body %}

    {# 1. HEADER: Title & Back Button #}
    <div style=\"display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;\">
        <div>
            <h1 style=\"font-size:24px; font-weight:800; color: white; margin-bottom: 4px;\">Créer un Questionnaire</h1>
            <p style=\"color: rgba(255,255,255,0.6); margin:0;\">Ajouter les questions pour un nouveau jeu</p>
        </div>

        <a href=\"{{ path('app_questionnaire_agent_index') }}\"
           style=\"padding:10px 16px; border-radius:10px; border:1px solid rgba(255,255,255,0.12);
                  background: rgba(255,255,255,0.04); color:#e6e6e6; text-decoration:none; font-weight:700; transition: 0.3s;\">
            <i class=\"fa-solid fa-arrow-left\"></i> Retour
        </a>
    </div>

    {# 2. FORM CONTAINER #}
    <div style=\"
        background: rgba(20,20,25,0.85);
        border: 1px solid rgba(0, 243, 255, 0.2);
        border-radius: 14px;
        padding: 24px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.4);
    \">
        {# Include the partial form we fixed above #}
        {% include 'questionnaire_agent/_form.html.twig' with {'button_label': 'Créer le questionnaire'} %}
    </div>

{% endblock %}", "questionnaire_agent/new.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\questionnaire_agent\\new.html.twig");
    }
}
