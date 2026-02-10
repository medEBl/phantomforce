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

/* questionnaire_agent/show.html.twig */
class __TwigTemplate_1e573084cc3db8af0135427d26b5c698 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "questionnaire_agent/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "questionnaire_agent/show.html.twig"));

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

        yield "Détails Questionnaire";
        
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
        yield "    <div style=\"display:flex; justify-content:space-between; align-items:center; margin-bottom:20px; flex-wrap:wrap; gap:15px;\">
        <div>
            <h1 style=\"font-size:24px; font-weight:800; color:white; margin-bottom:4px;\">Détails Questionnaire</h1>
            <p style=\"color: rgba(255,255,255,0.6); margin:0;\">ID: #";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["questionnaire_agent"]) || array_key_exists("questionnaire_agent", $context) ? $context["questionnaire_agent"] : (function () { throw new RuntimeError('Variable "questionnaire_agent" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        yield "</p>
        </div>

        <div style=\"display:flex; gap:12px;\">
            <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_questionnaire_agent_index");
        yield "\"
               style=\"padding:10px 16px; border-radius:10px;
                      border:1px solid rgba(255,255,255,0.12);
                      background: rgba(255,255,255,0.04);
                      color:#e6e6e6; text-decoration:none; font-weight:700; transition:0.3s;\">
                <i class=\"fa-solid fa-arrow-left\"></i> Retour
            </a>

            <a href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_questionnaire_agent_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["questionnaire_agent"]) || array_key_exists("questionnaire_agent", $context) ? $context["questionnaire_agent"] : (function () { throw new RuntimeError('Variable "questionnaire_agent" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "html", null, true);
        yield "\"
               style=\"padding:10px 16px; border-radius:10px;
                      background: linear-gradient(135deg,#ffd42d,#ffb800);
                      color:#000; text-decoration:none; font-weight:800; border:none; transition:0.3s;\">
                <i class=\"fa-solid fa-pen\"></i> Modifier
            </a>
        </div>
    </div>

    ";
        // line 33
        yield "    <div style=\"
        background: rgba(20,20,25,0.85);
        border: 1px solid rgba(255,45,45,0.2); /* Red accent border */
        border-radius: 14px;
        padding: 0; /* Remove padding to let table fill */
        box-shadow: 0 10px 30px rgba(0,0,0,0.4);
        margin-bottom: 20px;
        overflow: hidden; /* For border radius */
    \">
        <table style=\"width:100%; border-collapse:collapse; color: white;\">
            <tbody>
                ";
        // line 45
        yield "                <tr style=\"border-bottom:1px solid rgba(255,255,255,0.08);\">
                    <th style=\"padding:16px 20px; width:180px; color:#ff4d4d; background:rgba(255,45,45,0.05);\">ID</th>
                    <td style=\"padding:16px 20px;\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["questionnaire_agent"]) || array_key_exists("questionnaire_agent", $context) ? $context["questionnaire_agent"] : (function () { throw new RuntimeError('Variable "questionnaire_agent" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47), "html", null, true);
        yield "</td>
                </tr>
                
                ";
        // line 51
        yield "                <tr style=\"border-bottom:1px solid rgba(255,255,255,0.08);\">
                    <th style=\"padding:16px 20px; color:#ff4d4d; background:rgba(255,45,45,0.05);\">Jeu</th>
                    <td style=\"padding:16px 20px; font-weight:700; font-size:1.1em;\">
                        ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["questionnaire_agent"]) || array_key_exists("questionnaire_agent", $context) ? $context["questionnaire_agent"] : (function () { throw new RuntimeError('Variable "questionnaire_agent" does not exist.', 54, $this->source); })()), "game", [], "any", false, false, false, 54), "html", null, true);
        yield "
                    </td>
                </tr>

                ";
        // line 59
        yield "                <tr style=\"border-bottom:1px solid rgba(255,255,255,0.08);\">
                    <th style=\"padding:16px 20px; color:#ff4d4d; background:rgba(255,45,45,0.05);\">Question 1</th>
                    <td style=\"padding:16px 20px;\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["questionnaire_agent"]) || array_key_exists("questionnaire_agent", $context) ? $context["questionnaire_agent"] : (function () { throw new RuntimeError('Variable "questionnaire_agent" does not exist.', 61, $this->source); })()), "ques1", [], "any", false, false, false, 61), "html", null, true);
        yield "</td>
                </tr>
                <tr style=\"border-bottom:1px solid rgba(255,255,255,0.08);\">
                    <th style=\"padding:16px 20px; color:#ff4d4d; background:rgba(255,45,45,0.05);\">Question 2</th>
                    <td style=\"padding:16px 20px;\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["questionnaire_agent"]) || array_key_exists("questionnaire_agent", $context) ? $context["questionnaire_agent"] : (function () { throw new RuntimeError('Variable "questionnaire_agent" does not exist.', 65, $this->source); })()), "ques2", [], "any", false, false, false, 65), "html", null, true);
        yield "</td>
                </tr>
                <tr style=\"border-bottom:1px solid rgba(255,255,255,0.08);\">
                    <th style=\"padding:16px 20px; color:#ff4d4d; background:rgba(255,45,45,0.05);\">Question 3</th>
                    <td style=\"padding:16px 20px;\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["questionnaire_agent"]) || array_key_exists("questionnaire_agent", $context) ? $context["questionnaire_agent"] : (function () { throw new RuntimeError('Variable "questionnaire_agent" does not exist.', 69, $this->source); })()), "ques3", [], "any", false, false, false, 69), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th style=\"padding:16px 20px; color:#ff4d4d; background:rgba(255,45,45,0.05);\">Question 4</th>
                    <td style=\"padding:16px 20px;\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["questionnaire_agent"]) || array_key_exists("questionnaire_agent", $context) ? $context["questionnaire_agent"] : (function () { throw new RuntimeError('Variable "questionnaire_agent" does not exist.', 73, $this->source); })()), "ques4", [], "any", false, false, false, 73), "html", null, true);
        yield "</td>
                </tr>
            </tbody>
        </table>
    </div>

    ";
        // line 80
        yield "    <div style=\"display:flex; justify-content:flex-end;\">
        <div style=\"
            border: 1px solid rgba(220, 53, 69, 0.3);
            background: rgba(220, 53, 69, 0.1);
            border-radius: 10px;
            padding: 8px 12px;
        \">
            ";
        // line 87
        yield Twig\Extension\CoreExtension::include($this->env, $context, "questionnaire_agent/_delete_form.html.twig");
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
        return "questionnaire_agent/show.html.twig";
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
        return array (  216 => 87,  207 => 80,  198 => 73,  191 => 69,  184 => 65,  177 => 61,  173 => 59,  166 => 54,  161 => 51,  155 => 47,  151 => 45,  138 => 33,  126 => 23,  115 => 15,  108 => 11,  103 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Détails Questionnaire{% endblock %}

{% block body %}

    {# 1. HEADER: Title & Actions #}
    <div style=\"display:flex; justify-content:space-between; align-items:center; margin-bottom:20px; flex-wrap:wrap; gap:15px;\">
        <div>
            <h1 style=\"font-size:24px; font-weight:800; color:white; margin-bottom:4px;\">Détails Questionnaire</h1>
            <p style=\"color: rgba(255,255,255,0.6); margin:0;\">ID: #{{ questionnaire_agent.id }}</p>
        </div>

        <div style=\"display:flex; gap:12px;\">
            <a href=\"{{ path('app_questionnaire_agent_index') }}\"
               style=\"padding:10px 16px; border-radius:10px;
                      border:1px solid rgba(255,255,255,0.12);
                      background: rgba(255,255,255,0.04);
                      color:#e6e6e6; text-decoration:none; font-weight:700; transition:0.3s;\">
                <i class=\"fa-solid fa-arrow-left\"></i> Retour
            </a>

            <a href=\"{{ path('app_questionnaire_agent_edit', {'id': questionnaire_agent.id}) }}\"
               style=\"padding:10px 16px; border-radius:10px;
                      background: linear-gradient(135deg,#ffd42d,#ffb800);
                      color:#000; text-decoration:none; font-weight:800; border:none; transition:0.3s;\">
                <i class=\"fa-solid fa-pen\"></i> Modifier
            </a>
        </div>
    </div>

    {# 2. DETAILS CARD #}
    <div style=\"
        background: rgba(20,20,25,0.85);
        border: 1px solid rgba(255,45,45,0.2); /* Red accent border */
        border-radius: 14px;
        padding: 0; /* Remove padding to let table fill */
        box-shadow: 0 10px 30px rgba(0,0,0,0.4);
        margin-bottom: 20px;
        overflow: hidden; /* For border radius */
    \">
        <table style=\"width:100%; border-collapse:collapse; color: white;\">
            <tbody>
                {# ID #}
                <tr style=\"border-bottom:1px solid rgba(255,255,255,0.08);\">
                    <th style=\"padding:16px 20px; width:180px; color:#ff4d4d; background:rgba(255,45,45,0.05);\">ID</th>
                    <td style=\"padding:16px 20px;\">{{ questionnaire_agent.id }}</td>
                </tr>
                
                {# GAME #}
                <tr style=\"border-bottom:1px solid rgba(255,255,255,0.08);\">
                    <th style=\"padding:16px 20px; color:#ff4d4d; background:rgba(255,45,45,0.05);\">Jeu</th>
                    <td style=\"padding:16px 20px; font-weight:700; font-size:1.1em;\">
                        {{ questionnaire_agent.game }}
                    </td>
                </tr>

                {# QUESTIONS #}
                <tr style=\"border-bottom:1px solid rgba(255,255,255,0.08);\">
                    <th style=\"padding:16px 20px; color:#ff4d4d; background:rgba(255,45,45,0.05);\">Question 1</th>
                    <td style=\"padding:16px 20px;\">{{ questionnaire_agent.ques1 }}</td>
                </tr>
                <tr style=\"border-bottom:1px solid rgba(255,255,255,0.08);\">
                    <th style=\"padding:16px 20px; color:#ff4d4d; background:rgba(255,45,45,0.05);\">Question 2</th>
                    <td style=\"padding:16px 20px;\">{{ questionnaire_agent.ques2 }}</td>
                </tr>
                <tr style=\"border-bottom:1px solid rgba(255,255,255,0.08);\">
                    <th style=\"padding:16px 20px; color:#ff4d4d; background:rgba(255,45,45,0.05);\">Question 3</th>
                    <td style=\"padding:16px 20px;\">{{ questionnaire_agent.ques3 }}</td>
                </tr>
                <tr>
                    <th style=\"padding:16px 20px; color:#ff4d4d; background:rgba(255,45,45,0.05);\">Question 4</th>
                    <td style=\"padding:16px 20px;\">{{ questionnaire_agent.ques4 }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    {# 3. DELETE ACTION #}
    <div style=\"display:flex; justify-content:flex-end;\">
        <div style=\"
            border: 1px solid rgba(220, 53, 69, 0.3);
            background: rgba(220, 53, 69, 0.1);
            border-radius: 10px;
            padding: 8px 12px;
        \">
            {{ include('questionnaire_agent/_delete_form.html.twig') }}
        </div>
    </div>

{% endblock %}", "questionnaire_agent/show.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\questionnaire_agent\\show.html.twig");
    }
}
