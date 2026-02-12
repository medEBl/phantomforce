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

/* front/questionnaire_show.html.twig */
class __TwigTemplate_07fc082844446308fd13bb58e4a8f759 extends Template
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
            'inline_styles' => [$this, 'block_inline_styles'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/questionnaire_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/questionnaire_show.html.twig"));

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

        yield "My Answers - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 3, $this->source); })()), "pseudo", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inline_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inline_styles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inline_styles"));

        // line 6
        yield "<style>
  .page-wrap { max-width: 900px; margin: 0 auto; }

  .card{
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    padding: 22px;
    box-shadow: var(--shadow);
  }

  .muted{ color: var(--text-muted); }
  .hr{ height:1px; background: var(--border-light); margin: 16px 0; }

  .pill{
    display:inline-flex;
    align-items:center;
    padding: 6px 12px;
    border-radius: 999px;
    border: 1px solid var(--border-light);
    background: rgba(255,255,255,0.04);
    color: var(--text-light);
    font-size: 12px;
    font-weight: 600;
    gap: 8px;
  }

  .qa-container{ display:grid; gap: 12px; margin-top: 14px; }

  .qa-item{
    background: rgba(255,255,255,0.03);
    border: 1px solid var(--border-light);
    border-radius: var(--radius);
    padding: 14px 16px;
    transition: var(--transition);
  }
  .qa-item:hover{
    transform: translateY(-2px);
    border-color: var(--border);
    box-shadow: var(--shadow);
  }

  .qa-question{
    display:block;
    font-size: 12px;
    color: var(--text-muted);
    text-transform: uppercase;
    letter-spacing: 0.6px;
    margin-bottom: 6px;
    font-weight: 700;
  }

  .qa-answer{
    font-size: 15px;
    font-weight: 700;
    color: var(--text-light);
    line-height: 1.45;
  }

  .actions{
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap: 12px;
    flex-wrap: wrap;
    margin-top: 16px;
  }

  /* Match your index styles */
  .btn-warning{
    background: rgba(255, 212, 45, 0.10);
    border: 1px solid rgba(255, 212, 45, 0.35);
    color: #ffe45d;
  }
  .btn-warning:hover{
    background: rgba(255, 212, 45, 0.16);
    transform: translateY(-2px);
  }

  a.btn{ text-decoration:none; }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 89
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

        // line 90
        yield "<div class=\"page-wrap\">

  <section class=\"card\">
    ";
        // line 94
        yield "    <div style=\"display:flex; align-items:flex-start; justify-content:space-between; gap:12px; flex-wrap:wrap;\">
      <div>
        <h2 style=\"margin:0 0 6px;\">My Answers</h2>
        <p class=\"muted\" style=\"margin:0;\">
          Agent: <strong>";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 98, $this->source); })()), "pseudo", [], "any", false, false, false, 98), "html", null, true);
        yield "</strong>
        </p>
      </div>

      <div style=\"display:flex; gap:10px; flex-wrap:wrap; justify-content:flex-end;\">
        <span class=\"pill\"><i class=\"fa-solid fa-gamepad\"></i> ";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 103, $this->source); })()), "game", [], "any", false, false, false, 103), "html", null, true);
        yield "</span>
      </div>
    </div>

    <div class=\"hr\"></div>

    ";
        // line 110
        yield "    <div class=\"qa-container\">

      <div class=\"qa-item\">
        <span class=\"qa-question\">";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["questionnaire"]) || array_key_exists("questionnaire", $context) ? $context["questionnaire"] : (function () { throw new RuntimeError('Variable "questionnaire" does not exist.', 113, $this->source); })()), "ques1", [], "any", false, false, false, 113), "html", null, true);
        yield "</span>
        <div class=\"qa-answer\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 114, $this->source); })()), "rep1", [], "any", false, false, false, 114), "html", null, true);
        yield "</div>
      </div>

      <div class=\"qa-item\">
        <span class=\"qa-question\">";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["questionnaire"]) || array_key_exists("questionnaire", $context) ? $context["questionnaire"] : (function () { throw new RuntimeError('Variable "questionnaire" does not exist.', 118, $this->source); })()), "ques2", [], "any", false, false, false, 118), "html", null, true);
        yield "</span>
        <div class=\"qa-answer\">";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 119, $this->source); })()), "rep2", [], "any", false, false, false, 119), "html", null, true);
        yield "</div>
      </div>

      ";
        // line 122
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 122, $this->source); })()), "rep3", [], "any", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 123
            yield "        <div class=\"qa-item\">
          <span class=\"qa-question\">";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["questionnaire"]) || array_key_exists("questionnaire", $context) ? $context["questionnaire"] : (function () { throw new RuntimeError('Variable "questionnaire" does not exist.', 124, $this->source); })()), "ques3", [], "any", false, false, false, 124), "html", null, true);
            yield "</span>
          <div class=\"qa-answer\">";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 125, $this->source); })()), "rep3", [], "any", false, false, false, 125), "html", null, true);
            yield "</div>
        </div>
      ";
        }
        // line 128
        yield "
      ";
        // line 129
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 129, $this->source); })()), "rep4", [], "any", false, false, false, 129)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 130
            yield "        <div class=\"qa-item\">
          <span class=\"qa-question\">";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["questionnaire"]) || array_key_exists("questionnaire", $context) ? $context["questionnaire"] : (function () { throw new RuntimeError('Variable "questionnaire" does not exist.', 131, $this->source); })()), "ques4", [], "any", false, false, false, 131), "html", null, true);
            yield "</span>
          <div class=\"qa-answer\">";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 132, $this->source); })()), "rep4", [], "any", false, false, false, 132), "html", null, true);
            yield "</div>
        </div>
      ";
        }
        // line 135
        yield "
    </div>

    <div class=\"hr\"></div>

    ";
        // line 141
        yield "    <div class=\"actions\">
      <a href=\"";
        // line 142
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_agent_index");
        yield "\" class=\"btn btn-secondary\">
        <i class=\"fa-solid fa-arrow-left\"></i> Back to Agents
      </a>

      <a href=\"";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_agent_questionnaire_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 146, $this->source); })()), "id", [], "any", false, false, false, 146)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
        <i class=\"fa-solid fa-pen-to-square\"></i> Update Answers
      </a>
    </div>
  </section>

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
        return "front/questionnaire_show.html.twig";
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
        return array (  311 => 146,  304 => 142,  301 => 141,  294 => 135,  288 => 132,  284 => 131,  281 => 130,  279 => 129,  276 => 128,  270 => 125,  266 => 124,  263 => 123,  261 => 122,  255 => 119,  251 => 118,  244 => 114,  240 => 113,  235 => 110,  226 => 103,  218 => 98,  212 => 94,  207 => 90,  194 => 89,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}My Answers - {{ agent.pseudo }}{% endblock %}

{% block inline_styles %}
<style>
  .page-wrap { max-width: 900px; margin: 0 auto; }

  .card{
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    padding: 22px;
    box-shadow: var(--shadow);
  }

  .muted{ color: var(--text-muted); }
  .hr{ height:1px; background: var(--border-light); margin: 16px 0; }

  .pill{
    display:inline-flex;
    align-items:center;
    padding: 6px 12px;
    border-radius: 999px;
    border: 1px solid var(--border-light);
    background: rgba(255,255,255,0.04);
    color: var(--text-light);
    font-size: 12px;
    font-weight: 600;
    gap: 8px;
  }

  .qa-container{ display:grid; gap: 12px; margin-top: 14px; }

  .qa-item{
    background: rgba(255,255,255,0.03);
    border: 1px solid var(--border-light);
    border-radius: var(--radius);
    padding: 14px 16px;
    transition: var(--transition);
  }
  .qa-item:hover{
    transform: translateY(-2px);
    border-color: var(--border);
    box-shadow: var(--shadow);
  }

  .qa-question{
    display:block;
    font-size: 12px;
    color: var(--text-muted);
    text-transform: uppercase;
    letter-spacing: 0.6px;
    margin-bottom: 6px;
    font-weight: 700;
  }

  .qa-answer{
    font-size: 15px;
    font-weight: 700;
    color: var(--text-light);
    line-height: 1.45;
  }

  .actions{
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap: 12px;
    flex-wrap: wrap;
    margin-top: 16px;
  }

  /* Match your index styles */
  .btn-warning{
    background: rgba(255, 212, 45, 0.10);
    border: 1px solid rgba(255, 212, 45, 0.35);
    color: #ffe45d;
  }
  .btn-warning:hover{
    background: rgba(255, 212, 45, 0.16);
    transform: translateY(-2px);
  }

  a.btn{ text-decoration:none; }
</style>
{% endblock %}

{% block body %}
<div class=\"page-wrap\">

  <section class=\"card\">
    {# ===== HEADER ===== #}
    <div style=\"display:flex; align-items:flex-start; justify-content:space-between; gap:12px; flex-wrap:wrap;\">
      <div>
        <h2 style=\"margin:0 0 6px;\">My Answers</h2>
        <p class=\"muted\" style=\"margin:0;\">
          Agent: <strong>{{ agent.pseudo }}</strong>
        </p>
      </div>

      <div style=\"display:flex; gap:10px; flex-wrap:wrap; justify-content:flex-end;\">
        <span class=\"pill\"><i class=\"fa-solid fa-gamepad\"></i> {{ agent.game }}</span>
      </div>
    </div>

    <div class=\"hr\"></div>

    {# ===== Q/A LIST ===== #}
    <div class=\"qa-container\">

      <div class=\"qa-item\">
        <span class=\"qa-question\">{{ questionnaire.ques1 }}</span>
        <div class=\"qa-answer\">{{ reponse.rep1 }}</div>
      </div>

      <div class=\"qa-item\">
        <span class=\"qa-question\">{{ questionnaire.ques2 }}</span>
        <div class=\"qa-answer\">{{ reponse.rep2 }}</div>
      </div>

      {% if reponse.rep3 %}
        <div class=\"qa-item\">
          <span class=\"qa-question\">{{ questionnaire.ques3 }}</span>
          <div class=\"qa-answer\">{{ reponse.rep3 }}</div>
        </div>
      {% endif %}

      {% if reponse.rep4 %}
        <div class=\"qa-item\">
          <span class=\"qa-question\">{{ questionnaire.ques4 }}</span>
          <div class=\"qa-answer\">{{ reponse.rep4 }}</div>
        </div>
      {% endif %}

    </div>

    <div class=\"hr\"></div>

    {# ===== ACTIONS ===== #}
    <div class=\"actions\">
      <a href=\"{{ path('front_agent_index') }}\" class=\"btn btn-secondary\">
        <i class=\"fa-solid fa-arrow-left\"></i> Back to Agents
      </a>

      <a href=\"{{ path('front_agent_questionnaire_edit', {'id': agent.id}) }}\" class=\"btn btn-warning\">
        <i class=\"fa-solid fa-pen-to-square\"></i> Update Answers
      </a>
    </div>
  </section>

</div>
{% endblock %}
", "front/questionnaire_show.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\front\\questionnaire_show.html.twig");
    }
}
