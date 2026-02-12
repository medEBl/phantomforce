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

/* agent/show.html.twig */
class __TwigTemplate_986c7a96fd7bf14163d4191398e4254f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/show.html.twig"));

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

        yield "Agent Details";
        
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
            <h1 style=\"font-size:24px; font-weight:800; color:white; margin-bottom:4px;\">Agent Details</h1>
            <p style=\"color: rgba(255,255,255,0.6); margin:0;\">
                <i class=\"fa-solid fa-user-secret\"></i> ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 12, $this->source); })()), "pseudo", [], "any", false, false, false, 12), "html", null, true);
        yield "
            </p>
        </div>

        <div style=\"display:flex; gap:12px;\">
            ";
        // line 18
        yield "            <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_index");
        yield "\"
               style=\"padding:10px 16px; border-radius:10px;
                      border:1px solid rgba(255,255,255,0.12);
                      background: rgba(255,255,255,0.04);
                      color:#e6e6e6; text-decoration:none; font-weight:700; transition:0.3s;\">
                <i class=\"fa-solid fa-arrow-left\"></i> Back
            </a>

            ";
        // line 27
        yield "            <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
        yield "\"
               style=\"padding:10px 16px; border-radius:10px;
                      background: linear-gradient(135deg,#ffd42d,#ffb800);
                      color:#000; text-decoration:none; font-weight:800; border:none; transition:0.3s;\">
                <i class=\"fa-solid fa-pen\"></i> Edit
            </a>
        </div>
    </div>

    ";
        // line 37
        yield "    <div style=\"
        background: rgba(20,20,25,0.85);
        border: 1px solid rgba(255,45,45,0.2); /* Red Border for Agents */
        border-radius: 14px;
        padding: 0;
        box-shadow: 0 10px 30px rgba(0,0,0,0.4);
        margin-bottom: 20px;
        overflow: hidden;
    \">
        <table style=\"width:100%; border-collapse:collapse; color: white;\">
            <tbody>
                ";
        // line 49
        yield "                <tr style=\"border-bottom:1px solid rgba(255,255,255,0.08);\">
                    <th style=\"padding:16px 20px; width:180px; color:#ff4d4d; background:rgba(255,45,45,0.05);\">ID</th>
                    <td style=\"padding:16px 20px;\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51), "html", null, true);
        yield "</td>
                </tr>

                ";
        // line 55
        yield "                <tr style=\"border-bottom:1px solid rgba(255,255,255,0.08);\">
                    <th style=\"padding:16px 20px; color:#ff4d4d; background:rgba(255,45,45,0.05);\">Pseudo</th>
                    <td style=\"padding:16px 20px; font-weight:700; font-size:1.1em;\">
                        ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 58, $this->source); })()), "pseudo", [], "any", false, false, false, 58), "html", null, true);
        yield "
                    </td>
                </tr>

                ";
        // line 63
        yield "                <tr style=\"border-bottom:1px solid rgba(255,255,255,0.08);\">
                    <th style=\"padding:16px 20px; color:#ff4d4d; background:rgba(255,45,45,0.05);\">Game / Rank</th>
                    <td style=\"padding:16px 20px;\">
                        <span style=\"background:rgba(255,255,255,0.1); padding:4px 10px; border-radius:4px; margin-right:8px;\">
                            ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 67, $this->source); })()), "game", [], "any", false, false, false, 67), "html", null, true);
        yield "
                        </span>
                        <span style=\"color:#ffd42d; font-weight:bold;\">
                            ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 70, $this->source); })()), "rank", [], "any", false, false, false, 70), "html", null, true);
        yield "
                        </span>
                    </td>
                </tr>

                ";
        // line 76
        yield "                <tr style=\"border-bottom:1px solid rgba(255,255,255,0.08);\">
                    <th style=\"padding:16px 20px; color:#ff4d4d; background:rgba(255,45,45,0.05);\">Player / Team</th>
                    <td style=\"padding:16px 20px;\">
                        <div><small style=\"color:#aaa;\">Player:</small> ";
        // line 79
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 79, $this->source); })()), "player", [], "any", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 79, $this->source); })()), "player", [], "any", false, false, false, 79), "username", [], "any", false, false, false, 79), "html", null, true)) : ("—"));
        yield "</div>
                        <div><small style=\"color:#aaa;\">Team:</small> ";
        // line 80
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 80, $this->source); })()), "team", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 80, $this->source); })()), "team", [], "any", false, false, false, 80), "name", [], "any", false, false, false, 80), "html", null, true)) : ("—"));
        yield "</div>
                    </td>
                </tr>

                ";
        // line 85
        yield "                <tr style=\"border-bottom:1px solid rgba(255,255,255,0.08);\">
                    <th style=\"padding:16px 20px; color:#ff4d4d; background:rgba(255,45,45,0.05);\">Status</th>
                    <td style=\"padding:16px 20px;\">
                        ";
        // line 88
        $context["bg"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 88, $this->source); })()), "status", [], "any", false, false, false, 88) == "active")) ? ("#2dff8b") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 88, $this->source); })()), "status", [], "any", false, false, false, 88) == "inactive")) ? ("#ffb800") : ("#ff2d2d"))));
        // line 89
        yield "                        ";
        $context["txt"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 89, $this->source); })()), "status", [], "any", false, false, false, 89) == "active")) ? ("#000") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 89, $this->source); })()), "status", [], "any", false, false, false, 89) == "inactive")) ? ("#000") : ("#fff"))));
        // line 90
        yield "                        
                        <span style=\"background: ";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["bg"]) || array_key_exists("bg", $context) ? $context["bg"] : (function () { throw new RuntimeError('Variable "bg" does not exist.', 91, $this->source); })()), "html", null, true);
        yield "; color: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["txt"]) || array_key_exists("txt", $context) ? $context["txt"] : (function () { throw new RuntimeError('Variable "txt" does not exist.', 91, $this->source); })()), "html", null, true);
        yield "; padding: 6px 14px; border-radius: 20px; font-size: 12px; font-weight: 800;\">
                             ";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 92, $this->source); })()), "status", [], "any", false, false, false, 92)), "html", null, true);
        yield "
                        </span>
                    </td>
                </tr>

                ";
        // line 98
        yield "                <tr>
                    <th style=\"padding:16px 20px; color:#ff4d4d; background:rgba(255,45,45,0.05);\">Social Link</th>
                    <td style=\"padding:16px 20px;\">
                        ";
        // line 101
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 101, $this->source); })()), "socialsLink", [], "any", false, false, false, 101)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 102
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 102, $this->source); })()), "socialsLink", [], "any", false, false, false, 102), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noreferrer\"
                               style=\"color:#4d7cff; font-weight:700; text-decoration:none;\">
                                <i class=\"fa-solid fa-arrow-up-right-from-square\"></i> Open Link
                            </a>
                        ";
        } else {
            // line 107
            yield "                            <span style=\"color:#666;\">—</span>
                        ";
        }
        // line 109
        yield "                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    ";
        // line 116
        yield "    <div style=\"display:flex; justify-content:flex-end;\">
        <div style=\"
            border: 1px solid rgba(220, 53, 69, 0.3);
            background: rgba(220, 53, 69, 0.1);
            border-radius: 12px;
            padding: 10px 14px;
        \">
            <form method=\"post\" action=\"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 123, $this->source); })()), "id", [], "any", false, false, false, 123)]), "html", null, true);
        yield "\"
                  onsubmit=\"return confirm('Are you sure you want to delete this agent?');\" style=\"margin:0;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 125, $this->source); })()), "id", [], "any", false, false, false, 125))), "html", null, true);
        yield "\">
                <button style=\"background:transparent; border:none; color:#ff6b6b; font-weight:700; cursor:pointer;\">
                    <i class=\"fa-solid fa-trash\"></i> Delete
                </button>
            </form>
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
        return "agent/show.html.twig";
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
        return array (  282 => 125,  277 => 123,  268 => 116,  260 => 109,  256 => 107,  247 => 102,  245 => 101,  240 => 98,  232 => 92,  226 => 91,  223 => 90,  220 => 89,  218 => 88,  213 => 85,  206 => 80,  202 => 79,  197 => 76,  189 => 70,  183 => 67,  177 => 63,  170 => 58,  165 => 55,  159 => 51,  155 => 49,  142 => 37,  129 => 27,  117 => 18,  109 => 12,  103 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Agent Details{% endblock %}

{% block body %}

    {# 1. HEADER: Title & Actions #}
    <div style=\"display:flex; justify-content:space-between; align-items:center; margin-bottom:20px; flex-wrap:wrap; gap:15px;\">
        <div>
            <h1 style=\"font-size:24px; font-weight:800; color:white; margin-bottom:4px;\">Agent Details</h1>
            <p style=\"color: rgba(255,255,255,0.6); margin:0;\">
                <i class=\"fa-solid fa-user-secret\"></i> {{ agent.pseudo }}
            </p>
        </div>

        <div style=\"display:flex; gap:12px;\">
            {# Back Button #}
            <a href=\"{{ path('app_agent_index') }}\"
               style=\"padding:10px 16px; border-radius:10px;
                      border:1px solid rgba(255,255,255,0.12);
                      background: rgba(255,255,255,0.04);
                      color:#e6e6e6; text-decoration:none; font-weight:700; transition:0.3s;\">
                <i class=\"fa-solid fa-arrow-left\"></i> Back
            </a>

            {# Edit Button #}
            <a href=\"{{ path('app_agent_edit', {'id': agent.id}) }}\"
               style=\"padding:10px 16px; border-radius:10px;
                      background: linear-gradient(135deg,#ffd42d,#ffb800);
                      color:#000; text-decoration:none; font-weight:800; border:none; transition:0.3s;\">
                <i class=\"fa-solid fa-pen\"></i> Edit
            </a>
        </div>
    </div>

    {# 2. DETAILS CARD #}
    <div style=\"
        background: rgba(20,20,25,0.85);
        border: 1px solid rgba(255,45,45,0.2); /* Red Border for Agents */
        border-radius: 14px;
        padding: 0;
        box-shadow: 0 10px 30px rgba(0,0,0,0.4);
        margin-bottom: 20px;
        overflow: hidden;
    \">
        <table style=\"width:100%; border-collapse:collapse; color: white;\">
            <tbody>
                {# ID #}
                <tr style=\"border-bottom:1px solid rgba(255,255,255,0.08);\">
                    <th style=\"padding:16px 20px; width:180px; color:#ff4d4d; background:rgba(255,45,45,0.05);\">ID</th>
                    <td style=\"padding:16px 20px;\">{{ agent.id }}</td>
                </tr>

                {# PSEUDO #}
                <tr style=\"border-bottom:1px solid rgba(255,255,255,0.08);\">
                    <th style=\"padding:16px 20px; color:#ff4d4d; background:rgba(255,45,45,0.05);\">Pseudo</th>
                    <td style=\"padding:16px 20px; font-weight:700; font-size:1.1em;\">
                        {{ agent.pseudo }}
                    </td>
                </tr>

                {# GAME & RANK #}
                <tr style=\"border-bottom:1px solid rgba(255,255,255,0.08);\">
                    <th style=\"padding:16px 20px; color:#ff4d4d; background:rgba(255,45,45,0.05);\">Game / Rank</th>
                    <td style=\"padding:16px 20px;\">
                        <span style=\"background:rgba(255,255,255,0.1); padding:4px 10px; border-radius:4px; margin-right:8px;\">
                            {{ agent.game }}
                        </span>
                        <span style=\"color:#ffd42d; font-weight:bold;\">
                            {{ agent.rank }}
                        </span>
                    </td>
                </tr>

                {# PLAYER & TEAM #}
                <tr style=\"border-bottom:1px solid rgba(255,255,255,0.08);\">
                    <th style=\"padding:16px 20px; color:#ff4d4d; background:rgba(255,45,45,0.05);\">Player / Team</th>
                    <td style=\"padding:16px 20px;\">
                        <div><small style=\"color:#aaa;\">Player:</small> {{ agent.player ? agent.player.username : '—' }}</div>
                        <div><small style=\"color:#aaa;\">Team:</small> {{ agent.team ? agent.team.name : '—' }}</div>
                    </td>
                </tr>

                {# STATUS #}
                <tr style=\"border-bottom:1px solid rgba(255,255,255,0.08);\">
                    <th style=\"padding:16px 20px; color:#ff4d4d; background:rgba(255,45,45,0.05);\">Status</th>
                    <td style=\"padding:16px 20px;\">
                        {% set bg = (agent.status == 'active') ? '#2dff8b' : ((agent.status == 'inactive') ? '#ffb800' : '#ff2d2d') %}
                        {% set txt = (agent.status == 'active') ? '#000' : ((agent.status == 'inactive') ? '#000' : '#fff') %}
                        
                        <span style=\"background: {{ bg }}; color: {{ txt }}; padding: 6px 14px; border-radius: 20px; font-size: 12px; font-weight: 800;\">
                             {{ agent.status|upper }}
                        </span>
                    </td>
                </tr>

                {# SOCIAL LINK #}
                <tr>
                    <th style=\"padding:16px 20px; color:#ff4d4d; background:rgba(255,45,45,0.05);\">Social Link</th>
                    <td style=\"padding:16px 20px;\">
                        {% if agent.socialsLink %}
                            <a href=\"{{ agent.socialsLink }}\" target=\"_blank\" rel=\"noreferrer\"
                               style=\"color:#4d7cff; font-weight:700; text-decoration:none;\">
                                <i class=\"fa-solid fa-arrow-up-right-from-square\"></i> Open Link
                            </a>
                        {% else %}
                            <span style=\"color:#666;\">—</span>
                        {% endif %}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    {# 3. DELETE ACTION #}
    <div style=\"display:flex; justify-content:flex-end;\">
        <div style=\"
            border: 1px solid rgba(220, 53, 69, 0.3);
            background: rgba(220, 53, 69, 0.1);
            border-radius: 12px;
            padding: 10px 14px;
        \">
            <form method=\"post\" action=\"{{ path('app_agent_delete', {'id': agent.id}) }}\"
                  onsubmit=\"return confirm('Are you sure you want to delete this agent?');\" style=\"margin:0;\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ agent.id) }}\">
                <button style=\"background:transparent; border:none; color:#ff6b6b; font-weight:700; cursor:pointer;\">
                    <i class=\"fa-solid fa-trash\"></i> Delete
                </button>
            </form>
        </div>
    </div>

{% endblock %}", "agent/show.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\agent\\show.html.twig");
    }
}
